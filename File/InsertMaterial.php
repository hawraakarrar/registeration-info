
<?php
include('../connect.php');

if (isset($link)) {

   if (isset($_POST['Save'])) {
      $AName = $link->real_escape_string($_POST['inputAName']);
      $EName = $link->real_escape_string($_POST['inputEName']);
      $CodeNumber = $link->real_escape_string($_POST['inputCodeNumber']);
      $NumberUnit = $link->real_escape_string($_POST['inputNumberUnit']);
      $HighestDegreeCourse = $link->real_escape_string($_POST['inputHighestDegreeCourse']);
      $Department = $link->real_escape_string($_POST['inputDepartment']);

      $Teacher = $link->real_escape_string($_POST['inputTeacher']);
      $Level = $link->real_escape_string($_POST['Level']);
      $Course = $link->real_escape_string($_POST['inputCourse']);
      $year = $link->real_escape_string($_POST['inputyear']);
      
      if (isset($_POST['inputMaterial'])) {
         $material = $link->real_escape_string($_POST['inputMaterial']);

         $sql = "INSERT INTO materialbyyear (Material_Id, Year_Id)
                 VALUES ('$material', '$year')";
      } else {
         $sql = "INSERT INTO materials (AName, EName, CodeNumber,NumberUnit,HighestDegreeCourse
         ,Department_Id,Teacher_Id,Level_Id,Course_Id)
                 VALUES ('$AName', '$EName', '$CodeNumber','$NumberUnit', '$HighestDegreeCourse', 
                 '$Department','$Teacher', '$Level','$Course')";
      }


      if ($link->query($sql) === TRUE) {
         if (!isset($_POST['inputMaterial'])) {
            $last_id = mysqli_insert_id($link);
            $sql = "INSERT INTO materialbyyear (Material_Id, Year_Id)
            VALUES ('$last_id', '$year')";

            if ($link->query($sql) === TRUE) {
               header('Location: app-Material-list.php');
            }
         }
         echo $last_id;
         header('Location: app-Material-list.php');
      } else {

         echo '<script>alert("This isnot add")</script>';
         header('Location: app-Material-list.php');
      }
   }
}



?>