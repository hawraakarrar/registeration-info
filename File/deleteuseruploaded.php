<?php
include('../connect.php');

$removeuser = "DELETE From upload where ID =" . $_GET['id'];
if ($link->query($removeuser) === TRUE) {

    header('Location: app-Upload-list.php');
}
