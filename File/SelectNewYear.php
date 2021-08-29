<?php
session_start();
include('../connect.php');
if (isset($_POST['submit'])) {

    echo $y = $_POST['Year'];
    $_SESSION['year']=$y;
  
    header('Location: app-Year.php');
    
}
