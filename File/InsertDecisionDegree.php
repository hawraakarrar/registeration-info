<?php

include('../connect.php');
print_r($_REQUEST);
if (isset($_POST['Save'])) {
    $degree = $_POST['inputDegree'];
    $type = $_POST['inputtype'];
    $inputnote = $_POST['inputnote'];
    $inputyear = $_POST['inputyear'];
    $filename = $_FILES["bookimage"]["name"];
    $tempname = $_FILES["bookimage"]["tmp_name"];
    $folder = '../media/' . $filename;

    if (move_uploaded_file($tempname, $folder)) {
        // Get all the submitted data from the form 
        if (!empty($filename)) {
            $sql = "INSERT INTO decisiondegree(Degree,Type,Image,Note,year_id) VALUES ('$degree','$type','$filename' , '$inputnote','$inputyear')";
            mysqli_query($link, $sql);
        }
        $msg = "degree uploaded successfully";
        header('Location: app-decisiondegree.php?message=' . $msg);
    }
}
