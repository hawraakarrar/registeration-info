<?php
include('../connect.php');
if (isset($_POST['submit'])) {
    $stu = $_POST['stu'];
    $yr = $_POST['year'];
    $mtr = $_POST['mat'];
    
    


    
    $add = "INSERT INTO upload (StudentID, MaterialsID, YearID)
    VALUES ('$stu', '$mtr', '$yr')";
    if ($link->query($add) === TRUE) {
        header('Location: app-Upload-list.php');
    }
}
