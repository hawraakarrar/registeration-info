<?php
include('../connect.php');

$removeuser = "DELETE From materials where ID =" . $_GET['id'];
if ($link->query($removeuser) === TRUE) {

    header('Location: app-material-list.php');
}
