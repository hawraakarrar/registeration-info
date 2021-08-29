
<?php
include('../connect.php');

if (isset($link)) {

    if (isset($_POST['Save'])) {
        $Name = $link->real_escape_string($_POST['inputName']);
        $Year = $link->real_escape_string($_POST['inputyear']);
        $sql = "INSERT INTO rounds (Name,Year_Id)
            VALUES ('$Name','$Year')";

        if ($link->query($sql) === TRUE) {
            header('Location: app-round.php');
        } 
    }
}



?>