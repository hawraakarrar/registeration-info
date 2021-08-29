<?php

print_r($_POST);
include('../connect.php');

for ($i = 0; $i <= $_POST['total']; $i++) {
    if (isset($_POST['finId' . $i])) {
        $id = intval($_POST['finId' . $i]);

        if (isset($_POST['inputDegree' . $id])) {
            $final = intval($_POST['inputDegree' . $id]);

            $sql = "UPDATE finaldegree SET added_degree='$final' WHERE id='$id' ";
            mysqli_query($link, $sql);
            header('Location: decisiondegree.php?id=' . $_POST['userID']);
        }
    }
}
