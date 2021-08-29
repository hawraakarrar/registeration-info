<?php
session_start();
$activepage = "app-user-college";
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
            <!-- users list start -->
            <section class="users-list-wrapper">
                <!-- users filter start -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> الكليات </h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                <li><a data-action="" data-toggle="modal" data-target="#addCollegeModal"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
                                <!-- <li><a data-action="close"><i class="feather icon-x"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>الاسم</th>
                                            <th>الرقم</th>
                                            <th>الكود</th>
                                            <th>الاحداث </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $university = mysqli_query($link, "SELECT * from colleges");

                                        $count_roles = 1;

                                        while ($university_data =  mysqli_fetch_array($university)) {

                                        ?>
                                            <tr>

                                                <th scope="row"><?php echo $university_data['Name']; ?></th>
                                                <td><?php echo $university_data['Number']; ?></td>
                                                <td><?php echo $university_data['CodeNumber']; ?></td>
                                                <td class="mt-3">
                                                    <button type="button" data-toggle="modal" data-target="#update_college<?php echo $university_data['ID']; ?>" class="btn btn-primary mr-1 mb-1 ">
                                                        <i class="feather icon-edit"></i>
                                                        تعديل </button>

                                                    <?php

                                                    include('uodatecollege.php');
                                                    ?>

                                                </td>

                                            </tr>
                                        <?php
                                            $count_roles++;
                                        }




                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




            </section>

            <div class="modal fade" id="addCollegeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                    <div class="modal-content">
                        <section class="todo-form">
                            <form id="form-add-todo" method="post" action="InsertCollege.php" class="todo-input">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">اضافة كليه</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <fieldset class="form-group">
                                        <input type="hidden" name="page" class="new-todo-item-title form-control" placeholder="الاسم" Value="app-user-college">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="text" name="inputName" class="new-todo-item-title form-control" placeholder="الاسم">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="text" name="inputNumber" class="new-todo-item-title form-control" placeholder="الرقم">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="text" name="inputCodeNumber" class="new-todo-item-title form-control" placeholder="الكود">
                                    </fieldset>
                                    <fieldset class="form-group">

                                        <select name="University" class="form-control" required>
                                            <option disabled selected value> الجامعة </option>
                                            <?php
                                            include('../connect.php');

                                            $sql = "SELECT * FROM `university` ";
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
                                        <input type="text" name="inputAssociateDeanSA" class="new-todo-item-title form-control" placeholder="المعاون العلمي">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="text" name="inputAssociateDeanAA" class="new-todo-item-title form-control" placeholder="المعاون الاداري">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="text" name="inputDean" class="new-todo-item-title form-control" placeholder="العميد  ">
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <button name="Save" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                            <span class="d-none d-lg-block">اضافة كلية</span></button>
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