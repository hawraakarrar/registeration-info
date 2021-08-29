
<?php
include('../connect.php');

if (isset($link)) {

    if (isset($_POST['Save'])) {
        $Name = $link->real_escape_string($_POST['inputName']);
        $Number = $link->real_escape_string($_POST['inputNumber']);
        $CodeNumber = $link->real_escape_string($_POST['inputCodeNumber']);
        $University = $link->real_escape_string($_POST['University']);
        $Dean = $link->real_escape_string($_POST['inputDean']);
        $AssociateDeanSA = $link->real_escape_string($_POST['inputAssociateDeanSA']);
        $AssociateDeanAA = $link->real_escape_string($_POST['inputAssociateDeanAA']);
        $page = $link->real_escape_string($_POST['page']);


        $sql = "INSERT INTO colleges (Name, Number, CodeNumber,AssociateDeanSA,AssociateDeanAA,Dean,University_Id)
            VALUES ('$Name', '$Number', '$CodeNumber','$AssociateDeanSA', '$AssociateDeanAA','$Dean','$University')";

        if ($link->query($sql) === TRUE) {
            if ($page == null) {
                header('Location: AddCollege.php');
            } else {
                header('Location: app-user-college.php');
            }
        } else {

            echo '<script>alert("This isnot add")</script>';
            header('Location: AddCollege.php');
        }
    }
}



?>