
<?php
include('../connect.php');

if (isset($link)) { 

   if (isset($_POST['Save'])) {
      $Name = $link->real_escape_string($_POST['inputName']);
      $Number = $link->real_escape_string($_POST['inputNumber']);
      $CodeNumber = $link->real_escape_string($_POST['inputCodeNumber']);
      $TypeOfStudy = $link->real_escape_string($_POST['inputTypeOfStudy']);
      $TypeOfSystem = $link->real_escape_string($_POST['inputTypeOfSystem']);
      $NumberOfStage = $link->real_escape_string($_POST['inputNumberOfStage']);

      $HeadOfDepartment = $link->real_escape_string($_POST['inputHeadOfDepartment']);
      $MaterialConformingDeposit = $link->real_escape_string($_POST['inputMaterialConformingDeposit']);
      $College_Id = $link->real_escape_string($_POST['College']);
      $NumberMaterialsStudentLoaded = $link->real_escape_string($_POST['inputNumberMaterialsStudentLoaded']);
      $page = $link->real_escape_string($_POST['page']);

      $sql = "INSERT INTO departments (Name, Number, CodeNumber,TypeOfStudy,TypeOfSystem
    ,NumberOfStage,HeadOfDepartment,MaterialConformingDeposit
    ,NumberMaterialsStudentLoaded,College_Id)
            VALUES ('$Name', '$Number', '$CodeNumber','$TypeOfStudy', '$TypeOfSystem', 
            '$NumberOfStage','$HeadOfDepartment', '$MaterialConformingDeposit'
            ,'$NumberMaterialsStudentLoaded','$College_Id')";

      if ($link->query($sql) === TRUE) {

         if ($page != null) {

            header('Location: app-user-departments.php');
         } else {
            header('Location: AddDepartment.php');
         }      
      } else {
         echo '<script>alert("This isnot add")</script>';
         header('Location: AddDepartment.php');
      }
   }
}



?>