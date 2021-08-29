
<?php
include('../connect.php');
global $degress;


function checkgrade($id, $material)
{
    include('../connect.php');

    $sql = "SELECT * FROM `pursuitdegree` where  Material_Id = '$material' and Student_Id = '$id' ";
    $degress = mysqli_query($link, $sql);

    $row = mysqli_num_rows($degress);



    if ($row == 1) {

        return true;
    } else {
        return false;
    }
}

if (isset($_POST['submit'])) {
    $material = intval(trim($_POST['material']));
    $year = intval($_POST['year']);

    for ($i = 1; $i <= $_POST['total']; $i++) {
        // echo $_POST['id' . $i] . '<br>';
        $id = intval($_POST['id' . $i]);
        $degree = $_POST['inputdegree' . $id];

        $ch = checkgrade($id, $material);
        if ($ch) {
            $sql = "UPDATE pursuitdegree SET Degree = '$degree' where Student_Id='$id' and Material_Id = '$material' ";
            if ($link->query($sql) === TRUE) {
                header('Location: AddDegreeMaterial.php?id=' . $material);
            }
        } else {
            $sql = "INSERT INTO pursuitdegree (Degree,Material_Id,Student_Id,Year_Id)
            VALUES ('$degree','$material','$id', '$year')";


            if ($link->query($sql) === TRUE) {
                header('Location: AddDegreeMaterial.php?id=' . $material);
            }
        }
    }
}

?>