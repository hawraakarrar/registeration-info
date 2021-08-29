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
    if ($password < 11) {
        $password = md5($password);
    }

    $Department_Id = $_POST['Department_Id'];
    $teacher_data =  $_POST['id'];

    $sql = "UPDATE teachers SET Aname='$Aname', Ename = '$Ename',GeneralSpecialty = '$GeneralSpecialty' 
    ,Specialization= '$Specialization',BirthDate='$BirthDate', Plase = '$Plase',
    PhoneNumber='$PhoneNumber', password = '$password',Department_Id='$Department_Id'
     WHERE ID='$teacher_data' ";

    if ($link->query($sql) === TRUE) {
        header('Location: app-Teacher-list.php');
    }
}
