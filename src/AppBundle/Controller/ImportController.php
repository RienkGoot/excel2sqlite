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
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function indexAction(Request $request, Connection $conn)
    {
        if (isset($_POST["submit"])) {
            if (!empty($_FILES["excelFile"]["tmp_name"])) {

                $file = ($_FILES["excelFile"]["name"]);
                $ext = substr($file, strrpos($file, '.') + 1);
                // Check filetype matches .xlsx or .xls
                if ($ext == "xlsx" || $ext == "xls") {
                    $file = $_FILES["excelFile"]["tmp_name"];

                    // Load uploaded file
                    $objPHPExcel = PHPExcel_IOFactory::load($file);
                    $dataArr = array();
                    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                        // create table foreach worksheet
                        $worksheetTitle = $worksheet->getTitle();
                        //$titles = $worksheet->rangeToArray('A1:' . $worksheet->getHighestColumn() ."1");
                        $sql = "CREATE TABLE $worksheetTitle(PRIMARY KEY (ID), ID int NOT NULL)";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();

                        $highestRow = $worksheet->getHighestRow(); // e.g. 10
                        $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
                        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
                        $nrColumns = ord($highestColumn) - 64;
                        echo "<br>The worksheet " . $worksheetTitle . " has ";
                        echo $nrColumns . ' columns (A-' . $highestColumn . ') ';
                        echo ' and ' . $highestRow . ' row.';
                        echo '<br>Data: <table border="1"><tr>';
                        for ($row = 1; $row <= $highestRow; ++$row) {
                            echo '<tr>';
                            for ($col = 0; $col < $highestColumnIndex; ++$col) {
                                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                                $val = $cell->getCalculatedValue();
                                $dataType = PHPExcel_Cell_DataType::dataTypeForValue($val);
                                echo '<td>' . $val . '<br>(Typ ' . $dataType . ')</td>';
                                $dataArr[$row][$col] = $val;
                            }
                            echo '</tr>';
                        }
                        echo '</table>';

                    foreach($dataArr[1] as $test){

                            $sql = "ALTER TABLE $worksheetTitle ADD $test varchar(255)";
                            $stmt = $conn->prepare($sql);
                            $stmt->execute();

                        }
                    }

                }


                /*$dataArr = array();
                foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

                    $worksheet = $objPHPExcel->getSheet(0);
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
                }
                foreach($dataArr as $val){


                    $conn->insert('salesorders', array(
                        "orderdate"     => $val[0],
                        "region"     => $val[1],
                        "rep"     => $val[2],
                        "item"     => $val[3],
                        "units"     => $val[4],
                        "unit_cost"     => $val[5],
                        "total"     => $val[6],
                    ));
                }
                return $this->redirectToRoute('overview');*/
            } else {
                $this->addFlash('danger', 'Ongeldig bestand! Probeer .xls of .xlsx');
            }
        } else {
            $this->addFlash('danger', 'Geen bestand geselecteerd!');
        }


        return $this->render('default/import.html.twig');
    }
}
