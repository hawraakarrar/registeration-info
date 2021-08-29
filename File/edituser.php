<?php
include('../connect.php');
if (isset($_POST['submit'])) {

    $name = $_POST['Name'];
    $password = $_POST['Password'];
    $password = md5($password);
    $username = $_POST['username'];

    $role = $_POST['Role'];
    $userid =  $_POST['id'];

    $sql = "UPDATE Users SET Name='$name', Password = '$password',User_Name = '$username' ,Role_Id= '$role' WHERE id='$userid' ";

    if ($link->query($sql) === TRUE) {
        header('Location: app-user-list.php');
    }
}
