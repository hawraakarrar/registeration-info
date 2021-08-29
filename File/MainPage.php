<?php

ob_start();
if (!isset($_SESSION)) {
    session_start();

}

if (!isset($_SESSION['is_logged'])) {

    header('Location: ../index.php');
}

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
<?php



include('head.php');  ?>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <!-- BEGIN: Header-->
    <?php
    include('../connect.php');
    $result = mysqli_query($link, "SELECT count(*) as total from university");
    $university = mysqli_fetch_assoc($result);
    if ($university['total'] == 0) {
        header('Location: AddUniversity.php');}
    // }else{
    //     header('Location: app-user-list.php');
        
    // }

    ?>
    <?php include('header.php');  ?>
    <!-- END: Header-->
    <!-- BEGIN: Main Menu-->
    <?php include('MainMenu.php');  ?>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->






    <!-- END: Content-->

    <!-- END: Body-->
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('footer.php'); ?>
    <!-- END: Footer-->
    <!-- BEGIN: Page JS-->
    <?php include('script.php'); ?>
    <!-- END: Page JS-->
</body>

</html>