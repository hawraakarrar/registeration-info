
<?php
include('../connect.php');

if (isset($link)) {

    if (isset($_POST['Save'])) {
        $Name = $link->real_escape_string($_POST['inputName']);
        
        $sql = "INSERT INTO years (Name)
            VALUES ('$Name')";

        if ($link->query($sql) === TRUE) {
            header('Location: app-Year.php');
        } 
    }
}



?>