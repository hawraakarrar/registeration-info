<?php
include('../connect.php');
if (isset($_POST['submit'])) {

    $name = $_POST['Name'];
    $password = $_POST['Password'];
    $password = md5($password);
    $username = $_POST['username'];

    $role = $_POST['Role'];
    echo $name . " " . $role;
    $adduser = "INSERT INTO Users (Name, Password, User_Name,Role_Id)
    VALUES ('$name', '$password', '$username','$role')";
    if ($link->query($adduser) === TRUE) {
        header('Location: app-user-list.php');
    }
}
