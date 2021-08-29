<?php
include('../connect.php');

$removeuser = "DELETE From teachers where ID =" . $_GET['id'];
if ($link->query($removeuser) === TRUE) {

    header('Location: app-Teacher-list.php');
}
