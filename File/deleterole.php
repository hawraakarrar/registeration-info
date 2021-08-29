<?php
include('../connect.php');

$removerole = "DELETE From users where Role_Id =" . $_GET['id'];
if ($link->query($removerole) === TRUE) {
    $addrole = "DELETE From Roles where id =" . $_GET['id'];
    if ($link->query($addrole) === TRUE) {
    }
    header('Location: app-user-list.php');
}
