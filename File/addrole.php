<?php
include('../connect.php');
if (isset($_POST['submit'])) {
    $name = $_POST['Name'];

    $role = $_POST['Role'];
    $addrole = "INSERT INTO Roles (Name, Role)
    VALUES ('$name', '$role')";
    if ($link->query($addrole) === TRUE) {
        header('Location: app-user-list.php');
    }
}
