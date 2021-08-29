<?php
include('../connect.php');

$removeuser = "DELETE From users where ID =" . $_GET['id'];
if ($link->query($removeuser) === TRUE) {

    header('Location: app-user-list.php');
}
