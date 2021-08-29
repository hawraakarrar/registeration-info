<?php

include("../vendor/autoload.php");
require '../vendor/autoload.php';

//export.php  
include('../connect.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\IOFactory;




$material = $_GET['id'];
$sqM = "SELECT * from materials where ID=$material";
$material = mysqli_query($link, $sqM);
while ($material_data =  mysqli_fetch_array($material)) {
    $Mname = $material_data["EName"];
    $output = '';
    $material_id = $_GET['id'];
    $sql = "SELECT students.Name as name , finaldegree.Degree as Fdegree
   ,pursuitdegree.Degree as Mdegree
    FROM students
    LEFT JOIN finaldegree ON finaldegree.Student_Id=students.ID and finaldegree.Material_Id= '$material_id' 
    LEFT JOIN pursuitdegree ON pursuitdegree.Student_Id=students.ID and pursuitdegree.Material_Id = '$material_id'
    where finaldegree.Material_Id=" . $_GET['id'];
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        $count = 2;
        $spreadsheet = new Spreadsheet();
        // $Excel_writer = new Xlsx($spreadsheet);

        $spreadsheet->setActiveSheetIndex(0);
        $activeSheet = $spreadsheet->getActiveSheet();

        $activeSheet->setCellValue('A1', 'الاسم');
        $activeSheet->setCellValue('B1', 'درجة السعي');
        $activeSheet->setCellValue('C1', 'درجة الامتحان النهائية');
        $activeSheet->setCellValue('D1', 'المادة');
        while ($row = mysqli_fetch_array($result)) {
            $activeSheet->setCellValue('A' . $count, $row["name"]);
            $activeSheet->setCellValue('B' . $count, $row["Mdegree"]);
            $activeSheet->setCellValue('C' . $count, $row["Fdegree"]);
            $activeSheet->setCellValue('D' . $count, $Mname);

            $count = $count + 1;
        }

        //    $setData = chr(255) . chr(254) . mb_convert_encoding($setData, "UTF-16LE", "UTF-8");
        // add encoding in headers


    }
}

$filename = 'finaldegree.xlsx';
// Redirect output to a client's web browser (Xlsx)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header('Pragma: public'); // HTTP/1.

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');
