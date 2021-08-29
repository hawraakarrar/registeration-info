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
                    $name = isset($row[0]) ? $row[0] : ''; // name
                    $depname = isset($row[1]) ? $row[1] : ''; // depname 
                    $Number = isset($row[2]) ? $row[2] : ''; // Number
                    $gender = isset($row[3]) ? $row[3] : ''; // gender 
                    $BirthDate = isset($row[4]) ? $row[4] : ''; // BirthDate
                    $PhoneNumber = isset($row[5]) ? $row[5] : ''; // Phone number
                    $status = isset($row[6]) ? $row[6] : ''; // status
                    $mail = isset($row[7]) ? $row[7] : ''; // mail
                    $AdmissionYear = isset($row[8]) ? $row[8] : ''; // AdmissionYear
                     

                    
                    $html .= "<td>" . $name . "</td>";
                    $html .= "<td>" . $depname . "</td>";
                    $html .= "<td>" . $Number . "</td>";
                    $html .= "<td>" . $gender . "</td>";
                    $html .= "<td>" . $BirthDate . "</td>";
                    $html .= "<td>" . $PhoneNumber . "</td>";
                    $html .= "<td>" . $status . "</td>";
                    $html .= "<td>" . $mail . "</td>";
                    $html .= "<td>" . $AdmissionYear . "</td>";
                    $html .= "</tr>";


                    // if ($elevenc == 'تكنولوجيا معلومات الاعمال') {
                    //     echo strval($count) . ' ';
                    //     $count++;
                    // } else {
                    // }
                    include("../connect.php");

                    $dep = mysqli_query($link, "select * from departments");

                    while ($dep_data =  mysqli_fetch_array($dep)) {
                        echo $depname . ' ' . $dep_data['Name'] . ' check it' . '<br>';
                        if (trim($depname) == trim($dep_data['Name'])) {

                            $yr = mysqli_query($link, "select * from years");
                            while ($yr_data =  mysqli_fetch_array($yr)) {
                                echo $AdmissionYear . ' ' . $yr_data['Name'] . ' check it' . '<br>';
                                if (trim($AdmissionYear) == trim($yr_data['Name'])) {

                            $query = "INSERT INTO students (Name,Number,Gender,BirthDate,PhoneNumber,Year,Department_Id,status, mail) 
                    		values('$name','$Number ','$gender ','$BirthDate', '$PhoneNumber ','" . $yr_data['ID'] . "',' " . $dep_data['ID'] . "',' $status ' ,' $mail ' )";
                            if ($link->query($query) === TRUE) {
                                $lastid = mysqli_insert_id($link);
                                $querys = "INSERT INTO studentstatus (`Year`, `level`, `uploaded`, `Stu_Id`) 
                                values('" . $yr_data['ID'] . "', 1, 1,'$lastid')";
                                if ($link->query($querys) === TRUE) {
                                header('Location: app-student-list.php');
                                }} else {
                                header('Location: app-student-list.php');
                            }
                        }}}
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












