
<?php
include('../connect.php');

if (isset($link)) {
    if (isset($_POST['submit'])) {
        $Name = $link->real_escape_string($_POST['inputName']);
        $Number = $link->real_escape_string($_POST['inputNumber']);
        $CodeNumber = $link->real_escape_string($_POST['inputCodeNumber']);

        $sql = "INSERT INTO university (Name, Number, CodeNumber)
            VALUES ('$Name', '$Number', '$CodeNumber')";
        if ($link->query($sql) === TRUE) {
            header('Location: AddCollege.php');
        } else {
            echo '<script>alert("This is not add")</script>';
            header('Location: AddUniversity.php');
        }
    }
}



?>