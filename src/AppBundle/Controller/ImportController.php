<?php
namespace AppBundle\Controller;

use PHPExcel_Cell;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
     * Action that processes the uploaded file.
     * @param Request $request
     * @param Connection $conn
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function importAction(Request $request, Connection $conn)
    {
        if (isset($_POST["submit"])) {
            if (!empty($_FILES["excelFile"]["tmp_name"])) {
                $fileName = ($_FILES["excelFile"]["name"]);

                /**
                 * Validate if uploaded file has the allowed filetype.
                 */
                $ext = substr($fileName, strrpos($fileName, '.') + 1);
                if ($ext == "xlsx" || $ext == "xls") {

                    /**
                     * Get filesize and pass it to a session to get it
                     * on the overview.html.twig file.
                     */
                    $fileName = $_FILES["excelFile"]["tmp_name"];
                    $fileSize = filesize($fileName);
                    $session = $request->getSession();
                    $session->set('size', $fileSize);

                    $objPHPExcel = PHPExcel_IOFactory::load($fileName);
                    $dataArr = array();
                    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

                        /**
                         * Get worksheet titles and foreach worksheet create a new
                         * table with ID primary key.
                         */
                        $worksheetTitle = $worksheet->getTitle();
                        $stmt = $conn->prepare("CREATE TABLE IF NOT EXISTS $worksheetTitle(ID integer PRIMARY KEY)");
                        $stmt->execute();

                        /**
                         * Get for row and column the cell value and
                         * pass it to dataArr.
                         */
                        $highestRow = $worksheet->getHighestRow();
                        $highestColumn = $worksheet->getHighestColumn();
                        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
                        for ($row = 1; $row <= $highestRow; ++$row) {
                            for ($col = 0; $col < $highestColumnIndex; ++$col) {
                                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                                $val = $cell->getCalculatedValue();
                                $dataArr[$row][$col] = $val;
                            }
                        }

                        /**
                         * Create column in each worksheet table.
                         * Put each column in array.
                         */
                        $columnArr = array();
                        foreach ($dataArr[1] as $column) {
                            $stmt = $conn->prepare("ALTER TABLE $worksheetTitle ADD COLUMN $column BLOB");
                            $stmt->execute();
                            $columnArr[] = array($column);
                        }

                        /**
                         * Count amount of columns and implode into columnArray.
                         */
                        $columnArray = array();
                        for ($i = 0; $i < count($columnArr); $i++) {
                            $columnArray[] = implode(',', $columnArr[$i]);
                        }

                        /**
                         * Unset headers from $dataArr.
                         * Foreach value in dataArr execute insert query with variables.
                         */
                        unset($dataArr[1]);
                        foreach ($dataArr as $val) {
                            $stmt = $conn->prepare("INSERT INTO $worksheetTitle ('" . implode("','", array_values($columnArray)) . "') VALUES ('" . implode("','", array_values($val)) . "');");
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