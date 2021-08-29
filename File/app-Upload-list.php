<?php
session_start();
$activepage = "app-Teacher-list";
include('MainPage.php');
?>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            <section class="users-list-wrapper">
                <!-- users filter start -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">تحميل المواد </h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                <li><a data-action="" data-toggle="modal" data-target="#addUserModal"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
                                <!-- <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li> -->
                                <!-- <li><a data-action="close"><i class="feather icon-x"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                            <div class="modal-content">
                                <section class="todo-form">
                                    <form id="form-add-todo" method="post" action="addStuuploaded.php" class="todo-input">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">اضافة طالب محمل</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <fieldset class="form-group">
                                                <select name="stu" class="form-control" required>
                                                    <option disabled selected value> الطالب </option>
                                                    <?php
                                                    include('../connect.php');
                                                    $matid=$_GET['id'];

                                                    $sql = "SELECT * FROM `materials` where ID=$matid";
                                                    $result = mysqli_query($link, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $lv = $row["Level_Id"] ;
                                                            $sqlst = "SELECT * FROM `students` where Stage=$lv";
                                                            $resultst = mysqli_query($link, $sqlst);
                                                            if (mysqli_num_rows($resultst) > 0) {
                                                                // output data of each row
                                                                while ($rowst = mysqli_fetch_assoc($resultst)) {
                                                                    $stu = $rowst["Name"] ;
                                                                    $sid=$rowst["ID"] ;
                                                                                echo "<option value='$sid'>" . $stu . "</option>";
                                                                }}
                                                        }
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                    ?>
                                                </select>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <select name="year" class="form-control" required>
                                                    <option disabled selected value> السنة </option>
                                                    <?php
                                                    include('../connect.php');

                                                    $sql = "SELECT * FROM `years` ";
                                                    $result = mysqli_query($link, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $num = $row["ID"] . "<br>";
                                                            $name = $row["Name"] . "<br>";
                                                            echo "<option value='$num'>" . $name . "</option>";
                                                        }
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                    ?>
                                                </select>
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="hidden" name="mat" class="new-todo-item-title form-control" value="<?php  echo $_GET['id'] ; ?>">
                                            </fieldset>
                                            
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button name="submit" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">اضافة الطالب</span></button>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">الغاء</span></button>
                                            </fieldset>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>التسلسل</th>
                                            <th>الاسم</th>
                                            <th>القسم</th>
                                            <th>المادة</th>
                                            <th>السنة</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $upl = mysqli_query($link, "SELECT upload.ID ,upload.MaterialsID as Mid,upload.YearID as yid,
                                         students.Name as Name,students.Department_Id as sid
                                        FROM upload
                                        INNER JOIN students ON upload.StudentID=students.ID;");

                                        $count_stus = 1;
                                        while ($upl_data =  mysqli_fetch_array($upl)) {
                                        ?>
                                            <tr>
                                            <td></td>
                                                <th scope="row"><?php echo $count_stus; ?></th>
                                                <td><?php echo  $upl_data['Name']; ?></td>
                                                <?php
                                                    $sd=$upl_data['sid'];
                                                    $sdep = mysqli_query($link, "SELECT *from departments where ID=$sd;");
                                                    while ($sdep_data =  mysqli_fetch_array($sdep)) {?>
                                                    
                                                    <td><?php echo $sdep_data['Name']; ?></td>
                                                <?php  }?>
                                                <?php
                                                    $Mid=$upl_data['Mid'];
                                                    $Mupl = mysqli_query($link, "SELECT *from materials where ID=$Mid;");
                                                    while ($Mupl_data =  mysqli_fetch_array($Mupl)) {?>
                                                    
                                                    <td><?php echo $Mupl_data['AName']; ?></td>
                                                <?php  }?>
                                                <?php
                                                    $yid=$upl_data['yid'];
                                                    $Yupl = mysqli_query($link, "SELECT *from years where ID=$yid;");
                                                    while ($Yupl_data =  mysqli_fetch_array($Yupl)) {?>
                                                    
                                                    <td><?php echo $Yupl_data['Name']; ?></td>
                                                <?php  }?>

                                                <td>
                 
                                                    <a href="<?php echo 'deleteuseruploaded.php?id=' . $upl_data['ID']; ?>" class="btn btn-danger mr-1 mb-1                                                                                                                                                                  ">
                                                        <i class="feather icon-trash"></i>
                                                        حذف </a>

                                                </td>

                                            </tr>

                                        <?php

                                            $count_stus++;
                                        }




                                        ?>


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </section>


            <!-- END: Content-->
            <script>
                function addTobag() {

                    $('#update_modal').modal('show');
                }
            </script>