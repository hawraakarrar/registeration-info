<?php
include('../connect.php');
if (isset($_POST['submit'])) {
    $Dep_id =  $_POST['id'];
    $name = $_POST['Name'];
    $Number = $_POST['Number'];
    $Code = $_POST['Code'];
    $inputTypeOfStudy = $_POST['inputTypeOfStudy'];
    $inputTypeOfSystem = $_POST['inputTypeOfSystem'];
    $inputNumberOfStage = $_POST['inputNumberOfStage'];
    $MaterialConformingDeposit = $_POST['MaterialConformingDeposit'];
    $HeadOfDepartment = $_POST['HeadOfDepartment'];
    $NumberMaterialsStudentLoaded = $_POST['NumberMaterialsStudentLoaded'];


    $sql = "UPDATE `departments` SET Name='$name', Number = '$Number',CodeNumber = '$Code',
    TypeOfStudy='$inputTypeOfStudy',TypeOfSystem='$inputTypeOfSystem',NumberOfStage='$inputNumberOfStage',
    MaterialConformingDeposit='$MaterialConformingDeposit',HeadOfDepartment='$HeadOfDepartment',
    NumberMaterialsStudentLoaded='$NumberMaterialsStudentLoaded'
    
    WHERE ID='$Dep_id' ";

    if ($link->query($sql) === TRUE) {
        header('Location: app-user-departments.php');
    }
}
