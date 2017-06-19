<?php

namespace AppBundle\Controller;

use PHPExcel_Cell;
use PHPExcel_Cell_DataType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use PHPExcel;
use PHPExcel_IOFactory;

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
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        if(isset($_POST["submit"])) {
            if(!empty($_FILES["excelFile"]["tmp_name"])) {
                $fileName = ($_FILES["excelFile"]["name"]);
                $ext = substr($fileName, strrpos($fileName, '.') + 1);
                if ($ext == "xlsx" || $ext == "csv") {
                    $this->addFlash('success', 'Importeren...');
                    $file = $_FILES["excelFile"]["tmp_name"];

                    $objPHPExcel = PHPExcel_IOFactory::load($file);
                    $dataArr = array();

                    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                        $worksheetTitle     = $worksheet->getTitle();
                        $highestRow         = $worksheet->getHighestRow(); // e.g. 10
                        $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
                        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

                        for ($row = 1; $row <= $highestRow; ++ $row) {
                            for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                                $val = $cell->getValue();
                                $dataArr[$row][$col] = $val;

                            }
                        }
                    }
                    foreach($dataArr as $val){
                        echo $val['0'];
                    }

                } else {
                    $this->addFlash('warning', 'Kies een excel bestand.');
                }
            }
            else {
                $this->addFlash('warning', 'Geen bestand geselecteerd!');
            }
        }
        return $this->render('default/import.html.twig');
    }
}
