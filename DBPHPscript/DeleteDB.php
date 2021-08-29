<?php
include 'connectDB.php';
  // Create database
  $sql = "DROP DATABASE Examenation";
  if ($connD->query($sql) === TRUE) {
    
  }
  include 'Deleted.html';
?>