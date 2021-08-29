<?php
include('../connect.php');

if (isset($_POST['Save'])) {

    $Name = $link->real_escape_string($_POST['inputName']);
    $Number = $link->real_escape_string($_POST['Number']);
    $BirthDate = $link->real_escape_string($_POST['BirthDate']);
    $Gender = $link->real_escape_string($_POST['Gender']);
    $PhoneNumber = $link->real_escape_string($_POST['PhoneNumber']);
    $Department = $link->real_escape_string($_POST['inputDepartment']);
    $aYear = $link->real_escape_string($_POST['aYear']);
    $gYear = $link->real_escape_string($_POST['gYear']);
    $status = $link->real_escape_string($_POST['status']);
    $mail = $link->real_escape_string($_POST['mail']);
    $stuid =  $_POST['ID'];
    
    $sql = "UPDATE students SET Name='$Name', Number = '$Number',BirthDate = '$BirthDate' ,Gender= '$Gender',
    PhoneNumber= '$PhoneNumber',Department_Id='$Department',AdmissionYear = '$aYear' ,GraduationYear = '$gYear',
    mail= '$mail',status= '$status' WHERE ID='$stuid' ";

    if ($link->query($sql) === TRUE) {
        header('Location: app-student-list.php');
    }else{
       
        echo "error   . ".$link->error;
    }
}
