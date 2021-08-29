<?php
include('../connect.php');
if (isset($_POST['submit'])) {

    $name = $_POST['Name'];
    $Number = $_POST['Number'];
    $Code = $_POST['Code'];
    $universityid =  $_POST['id'];

    $sql = "UPDATE university SET Name='$name', Number = '$Number',CodeNumber = '$Code'  WHERE ID='$universityid' ";

    if ($link->query($sql) === TRUE) {
        header('Location: app-user-university.php');
    }
}
