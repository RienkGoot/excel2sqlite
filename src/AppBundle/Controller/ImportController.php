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
        if(isset($_POST["submit"])) {
            if(!empty($_FILES["excelFile"]["tmp_name"])) {

                $file = ($_FILES["excelFile"]["name"]);
                $ext = substr($file, strrpos($file, '.') + 1);
                // Check filetype matches .xlsx or .xls
                if ($ext == "xlsx" || $ext == "xls") {
                    $file = $_FILES["excelFile"]["tmp_name"];
                    // Load uploaded file
                    $objPHPExcel = PHPExcel_IOFactory::load($file);


                    $dataArr = array();
                    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {

                        $worksheet = $objPHPExcel->getSheet(0);
                        $highestRow = $worksheet->getHighestRow(); // e.g. 10
                        $highestColumn = $worksheet->getHighestColumn(); // e.g 'F'
                        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

                        for ($row = 1; $row <= $highestRow; ++$row) {
                            echo '<tr>';
                            for ($col = 0; $col < $highestColumnIndex; ++$col) {
                                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                                $val = $cell->getCalculatedValue();
                                $dataArr[$row][$col] = $val;
                            }
                        }
                    }

                    
                    foreach($dataArr as $val){
                        var_dump($val);
                       /* $orderdate = $val[0];
                        $region = $val[1];
                        $rep = $val[2];
                        $item = $val[3];
                        $units = $val[4];
                        $unitcost = $val[5];
                        $total = $val[6];


                        $conn->insert('salesorders', array(
                            "orderdate"     => $orderdate,
                            "region"     => $region,
                            "rep"     => $rep,
                            "item"     => $item,
                            "units"     => $units,
                            "unit_cost"     => $unitcost,
                            "total"     => $total,
                        ));*/
                    }
                    die;
                    return $this->redirectToRoute('overview');
                }
                else {
                    $this->addFlash('danger', 'Ongeldig bestand! Probeer .xls of .xlsx');
                }
            }
            else {
                $this->addFlash('danger', 'Geen bestand geselecteerd!');
            }

        }
        return $this->render('default/import.html.twig');
    }
}
