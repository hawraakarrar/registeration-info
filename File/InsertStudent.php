
<?php
include('../connect.php');

if (isset($link)) {

   if (isset($_POST['Save'])) {
      $Name = $link->real_escape_string($_POST['inputName']);
      $Gender = $link->real_escape_string($_POST['Gender']);
      $Department = $link->real_escape_string($_POST['inputDepartment']);
      $aYear = $link->real_escape_string($_POST['ayear']);

      $Number = $link->real_escape_string($_POST['Number']);
      $BirthDate = $link->real_escape_string($_POST['BirthDate']);
      $PhoneNumber = $link->real_escape_string($_POST['PhoneNumber']);
      $status = $link->real_escape_string($_POST['status']);
      $mail = $link->real_escape_string($_POST['mail']);

      $sql = "INSERT INTO students (`Name`, `Number`, `Gender`, `BirthDate`, `PhoneNumber`, `status`,
        `mail`,`AdmissionYear`, `Department_Id`)
            VALUES ('$Name', '$Number', '$Gender','$BirthDate',  
             '$PhoneNumber','$status','$mail','$aYear','$Department')";

      if ($link->query($sql) === TRUE) {
         $lastid = mysqli_insert_id($link);
         $sqls = "INSERT INTO studentstatus (`Year`, `level`, `uploaded`, `Stu_Id`)
             VALUES ('$aYear', 1, 1,'$lastid')";
         if ($link->query($sqls) === TRUE) {}
         
            header('Location: app-student-list.php');
         
      } else {
          echo '<script>alert("This isnot add")</script>';
          header('Location: app-student-list.php');
      }
   }
}



?>