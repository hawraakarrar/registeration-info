<?php
include('../connect.php');
if (isset($_POST['submit'])) {
    $Aname = $_POST['AName'];
    $Ename = $_POST['EName'];
    $GeneralSpecialty = $_POST['GeneralSpecialty'];
    $Specialization = $_POST['Specialization'];
    $BirthDate = $_POST['BirthDate'];
    $Plase = $_POST['Plase'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $password = $_POST['Password'];
    $password = md5($password);
    $Department_Id = $_POST['Department_Id'];
    


    
    $add = "INSERT INTO teachers (Aname, Ename, GeneralSpecialty,Specialization,BirthDate,Plase
    ,PhoneNumber,password,Department_Id)
    VALUES ('$Aname', '$Ename', '$GeneralSpecialty','$Specialization','$BirthDate', '$Plase',
     '$PhoneNumber','$password','$Department_Id')";
    if ($link->query($add) === TRUE) {
        header('Location: app-Teacher.php');
    }
}
