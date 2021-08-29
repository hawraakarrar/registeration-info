<?php
include('../connect.php');

if (isset($_POST['submit'])) {

    $AName = $link->real_escape_string($_POST['inputAName']);
    $EName = $link->real_escape_string($_POST['inputEName']);
    $year = $link->real_escape_string($_POST['inputyear']);
    $CodeNumber = $link->real_escape_string($_POST['inputCodeNumber']);
    $NumberUnit = $link->real_escape_string($_POST['inputNumberUnit']);
    $HighestDegreeCourse = $link->real_escape_string($_POST['inputHighestDegreeCourse']);
    $Department = $link->real_escape_string($_POST['inputDepartment']);
    $Teacher = $link->real_escape_string($_POST['inputTeacher']);
    $Level = $link->real_escape_string($_POST['Level']);
    $Course = $link->real_escape_string($_POST['inputCourse']);
    $id =  $link->real_escape_string($_POST['ID']);
     $myid = $link->real_escape_string($_POST['myID']);
     

    $sql = "UPDATE materials  SET AName='$AName', EName = '$EName',CodeNumber = '$CodeNumber' ,
            NumberUnit= '$NumberUnit',HighestDegreeCourse='$HighestDegreeCourse', Department_Id = '$Department',
            Teacher_Id = '$Teacher' , Level_Id = '$Level',Course_Id = '$Course'  WHERE ID='$id' ";

    if ($link->query($sql) === TRUE) {
        $sql1 = "UPDATE materialbyyear  SET Year_Id = '$year'  WHERE ID='$myid' AND Material_Id='$id' ";

        if ($link->query($sql1) === TRUE) {
         header('Location: app-material-list.php');
    }else{

        echo $link->error;
    }
}
}
