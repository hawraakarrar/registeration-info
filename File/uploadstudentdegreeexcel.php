<?php
ob_start();

if (isset($_POST['submit'])) {
    if (isset($_FILES['uploadFile']['name']) && $_FILES['uploadFile']['name'] != "") {
        $allowedExtensions = array("xls", "xlsx");
        $ext = pathinfo($_FILES['uploadFile']['name'], PATHINFO_EXTENSION);

        if (in_array($ext, $allowedExtensions)) {
            // Uploaded file
            $file = $_FILES['uploadFile']['name'];
            $isUploaded = copy($_FILES['uploadFile']['tmp_name'], $file);
            // check uploaded file
            if ($isUploaded) {
                // Include PHPExcel files and database configuration file

                require_once   '../vendor/autoload.php';
                include('../vendor/phpoffice/phpexcel/Classes/PHPExcel/IOFactory.php');
                try {
                    // load uploaded file
                    $objPHPExcel = PHPExcel_IOFactory::load($file);
                } catch (Exception $e) {
                    die('Error loading file "' . pathinfo($file, PATHINFO_BASENAME) . '": ' . $e->getMessage());
                }

                // Specify the excel sheet index
                $sheet = $objPHPExcel->getSheet(0);
                $total_rows = $sheet->getHighestRow();
                $highestColumn      = $sheet->getHighestColumn();
                $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

                //	loop over the rows
                for ($row = 1; $row <= $total_rows; ++$row) {
                    for ($col = 0; $col < $highestColumnIndex; ++$col) {
                        $cell = $sheet->getCellByColumnAndRow($col, $row);
                        $val = $cell->getValue();
                        $records[$row][$col] = $val;
                    }
                }
                $html = "<table border='1'>";
                array_slice($records, 0);
                $count = 1;
                foreach ($records as $row) {
                    // HTML content to render on webpage
                    $html .= "<tr>";
                    // if($row[0] != 'الاسم'){

                    // }
                    $Student =isset($row[0]) ? $row[0] :''; // Student 
                    $Degree =  isset($row[1]) ? $row[1] :  ''; // Degree
                    
                    $html .= "<td>" . $Degree . "</td>";
                    $html .= "<td>" . $Student . "</td>";
                    $html .= "</tr>";


                    // if ($elevenc == 'تكنولوجيا معلومات الاعمال') {
                    //     echo strval($count) . ' ';
                    //     $count++;
                    // } else {
                    // }
                    include("../connect.php");

                            $material = $link->real_escape_string($_POST['MaterialID']);
                            $year = $link->real_escape_string($_POST['YearID']);
                            echo $year;
                            $stu = mysqli_query($link, "select * from students");
                            while ($stu_data =  mysqli_fetch_array($stu)) {
                                echo $Student . ' ' . $stu_data['Name'] . ' check it' . '<br>';
                                if (trim($Student) == trim($stu_data['Name'])) { 
                                
                            
                            $query = "INSERT INTO pursuitdegree (Degree,Material_Id,Student_Id,Year_Id) 
                    		values('$Degree',' $material' ,'" . $stu_data['ID'] . "' ,'$year'  )";
                            if ($link->query($query) === TRUE) {
                                    header("Location: AddDegreeMaterial.php?id=$material");
                                } else {
                                    header("Location: AddDegreeMaterial.php?id=$material");
                            }
                        }
                    }
                


                    // Insert into database

                }
            }
            $html .= "</table>";
            echo $html;
            echo "<br/>Data inserted in Database";

            unlink($file);
        } else {
            echo '<span class="msg">File not uploaded!</span>';
        }
    } else {
        echo '<span class="msg">Please upload excel sheet.</span>';
    }
} else {
    echo '<span class="msg">Please upload excel file.</span>';
}
