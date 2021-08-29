
<?php
session_start();
ob_start();


include('connect.php');

if (isset($link)) {
    if (isset($_POST['submit'])) {
        $name = $link->real_escape_string($_POST['name']);
        $password = $link->real_escape_string($_POST['password']);
        $password = md5($password);
        $sq = "SELECT * FROM users WHERE Name='$name' AND Password='$password' ";
        $result = mysqli_query($link, $sq);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['is_logged'] = true;
            $_SESSION['name'] = $row['Name'];
            $_SESSION['roleid'] = $row["Role_Id"];
            $_SESSION['year']=date('Y');
            $result = mysqli_query($link, "SELECT count(*) as total from university");
            $university = mysqli_fetch_assoc($result);
            $resultc = mysqli_query($link, "SELECT count(*) as total from colleges");
            $college = mysqli_fetch_assoc($resultc);
            $resultd = mysqli_query($link, "SELECT count(*) as total from departments");
            $departments = mysqli_fetch_assoc($resultd);
            echo $university['total'];
            echo $college['total'];
            echo $departments['total'];
            if ($university['total'] == 0) {
                header('Location: File/AddUniversity.php');
            } else if ($university['total'] > 0 && $college['total'] == 0) {
                header('Location: File/AddCollege.php');
            } else if ($university['total'] > 0 && $college['total'] > 0 && $departments['total'] == 0) {
                header('Location: File/AddDepartment.php');
            }       // 
            else {
                header('Location: File/app-Year.php');
            }
        }
    }
} else {
    echo "not connected";
}


?>