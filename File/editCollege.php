<?php
include('../connect.php');
if (isset($_POST['submit'])) {
    $college_id =  $_POST['id'];
    $name = $_POST['Name'];
    $Number = $_POST['Number'];
    $Code = $_POST['Code'];
    $inputAssociateDeanSA = $_POST['inputAssociateDeanSA'];
    $inputAssociateDeanAA = $_POST['inputAssociateDeanAA'];
    $inputDean = $_POST['Dean'];


    $sql = "UPDATE `colleges` SET Name='$name', Number = '$Number',CodeNumber = '$Code',
    AssociateDeanSA='$inputAssociateDeanSA',AssociateDeanAA='$inputAssociateDeanAA',Dean='$inputDean'
    
    WHERE ID='$college_id' ";

    if ($link->query($sql) === TRUE) {
        header('Location: app-user-college.php');
    }
}
