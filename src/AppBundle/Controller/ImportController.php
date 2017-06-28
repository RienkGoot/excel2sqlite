<?php
namespace AppBundle\Controller;
use PHPExcel_Cell;
use PHPExcel_Cell_DataType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PHPExcel;
use PHPExcel_IOFactory;
use Doctrine\DBAL\Driver\Connection;
/**
 * Class ImportController
 * Controller that handles importing and validating the excel file
 * and exporting to SQLite.
 * @package AppBundle\Controller
 */
class ImportController extends Controller
{
    /**
     * @Route("import", name="import")
     * @param Request $request
     * @param Connection $conn
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, Connection $conn)
    {
        if (isset($_POST["submit"])) {
            if (!empty($_FILES["excelFile"]["tmp_name"])) {
                $fileName = ($_FILES["excelFile"]["name"]);
                $ext = substr($fileName, strrpos($fileName, '.') + 1);
                // Check filetype matches .xlsx or .xls
                if ($ext == "xlsx" || $ext == "xls") {
                    $fileName = $_FILES["excelFile"]["tmp_name"];
                    $fileSize = filesize($fileName);
                    $session = $request->getSession();
                    $session->set('size', $fileSize);

                    // Load uploaded file
                    $objPHPExcel = PHPExcel_IOFactory::load($fileName);
                    $dataArr = array();
                    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                        // create table foreach worksheet
                        $worksheetTitle = $worksheet->getTitle();
                        //$titles = $worksheet->rangeToArray('A1:' . $worksheet->getHighestColumn() ."1");
                        $sql = "CREATE TABLE $worksheetTitle(ID integer PRIMARY KEY)";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $highestRow = $worksheet->getHighestRow(); // e.g. 10
                        $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
                        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
                        for ($row = 1; $row <= $highestRow; ++$row) {
                            for ($col = 0; $col < $highestColumnIndex; ++$col) {
                                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                                $val = $cell->getCalculatedValue();
                                $dataArr[$row][$col] = $val;
                            }
                        }
                        $columnArr = array();
                        foreach ($dataArr[1] as $column) {

                           $sql = "ALTER TABLE $worksheetTitle ADD COLUMN $column BLOB";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();
                            $columnArr[] = array($column);

                        }
                        $columnArray = array();
                        for ($i = 0; $i < count($columnArr); $i++) {
                            $columnArray[] = implode(',', $columnArr[$i]);
                        }

                        foreach ($dataArr as $val) {

                            $sql = "INSERT INTO $worksheetTitle ('" . implode("','", array_values($columnArray)) . "') VALUES ('" . implode("','", array_values($val)) . "');";

                            $stmt = $conn->prepare($sql);
                            $stmt->execute();

                        }

                    }
                    return $this->redirectToRoute('overview');
                } else {
                    $this->addFlash('danger', 'Ongeldig bestand! Probeer .xls of .xlsx');
                }
            }
        }
        return $this->render('default/import.html.twig');
    }
}