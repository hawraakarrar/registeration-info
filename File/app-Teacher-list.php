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
                        <h4 class="card-title">الاساتذه</h4>
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
                                    <form id="form-add-todo" method="post" action="addTeacher.php" class="todo-input">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">اضافة استاذ جديد</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <fieldset class="form-group">
                                                <input type="text" name="AName" class="new-todo-item-title form-control" placeholder="الاسم بالعربي">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="text" name="EName" class="new-todo-item-title form-control" placeholder="الاسم بالانكليزي ">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="text" name="GeneralSpecialty" class="new-todo-item-title form-control" placeholder="الاختصاص العام">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="text" name="Specialization" class="new-todo-item-title form-control" placeholder="الاختصاص الدقيق">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="Date" name="BirthDate" class="new-todo-item-title form-control" placeholder=" تاريخ الولادة ">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="text" name="Plase" class="new-todo-item-title form-control" placeholder="العنوان">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="number" name="PhoneNumber" class="new-todo-item-title form-control" placeholder="رقم الهاتف">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="password" name="Password" class="new-todo-item-title form-control" placeholder=" الرمز السري ">
                                            </fieldset>
                                            <fieldset class="form-group">

                                                <select name="Department_Id" class="form-control" required>
                                                    <option disabled selected value> القسم </option>
                                                    <?php
                                                    include('../connect.php');

                                                    $sql = "SELECT * FROM `departments` ";
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
                                        </div>
                                        <div class="modal-footer">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button name="submit" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">اضافة استاذ</span></button>
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
                                            <th>التسلسل</th>
                                            <th>الاسم</th>
                                            <th>القسم</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $teachers = mysqli_query($link, "SELECT teachers.ID , teachers.AName, teachers.EName,teachers.GeneralSpecialty,
                                        teachers.Specialization, teachers.BirthDate, teachers.Plase ,
                                        teachers.PhoneNumber, teachers.Password,  departments.Name as departmentName
                                        FROM teachers
                                        INNER JOIN departments ON teachers.Department_Id=departments.ID;");

                                        $count_departments = 1;
                                        while ($teachers_data =  mysqli_fetch_array($teachers)) {
                                        ?>
                                            <tr>

                                                <th scope="row"><?php echo $count_departments; ?></th>
                                                <td><?php echo  $teachers_data['AName']; ?></td>
                                                <td><?php echo $teachers_data['departmentName']; ?></td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#update_teacher<?php echo $teachers_data['ID']; ?>" class="btn btn-primary mr-1 mb-1 ">
                                                        <i class="feather icon-edit"></i>
                                                        تعديل </button>
                                                    <?php

                                                    include('Tedatemodal.php');
                                                    ?>
                                                    <a href="<?php echo 'deleteteacher.php?id=' . $teachers_data['ID']; ?>" class="btn btn-danger mr-1 mb-1                                                                                                                                                                  ">
                                                        <i class="feather icon-trash"></i>
                                                        حذف </a>

                                                </td>

                                            </tr>

                                        <?php

                                            $count_departments++;
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