<?php
session_start();
$activepage = "app-user-departments";
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
            <?php
            include("../connect.php");
            $college = mysqli_query($link, "SELECT * from colleges");



            while ($college_data =  mysqli_fetch_array($college)) {

            ?>
                <section class="users-list-wrapper">
                    <!-- users filter start -->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> <?php echo $college_data['Name'] ?> </h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                    <li><a data-action="" data-toggle="modal" data-target="#addDepartmentModal<?php echo $college_data['ID']; ?>"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
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
                                            $university = mysqli_query($link, "SELECT * from `departments` where College_Id=" . $college_data['ID']);

                                            $count_roles = 1;

                                            while ($department_data =  mysqli_fetch_array($university)) {

                                            ?>
                                                <tr>

                                                    <th scope="row"><?php echo $department_data['Name']; ?></th>
                                                    <td><?php echo $department_data['Number']; ?></td>
                                                    <td><?php echo $department_data['CodeNumber']; ?></td>
                                                    <td class="mt-3">
                                                        <button type="button" data-toggle="modal" data-target="#update_Department<?php echo $department_data['ID']; ?>" class="btn btn-primary mr-1 mb-1 ">
                                                            <i class="feather icon-edit"></i>
                                                            تعديل </button>

                                                        <?php

                                                        include('updateDepartment.php');
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
                <div class="modal fade" id="addDepartmentModal<?php echo $college_data['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                        <div class="modal-content">
                            <section class="todo-form">
                                <form id="form-add-todo" method="post" action="InsertDepartment.php" class="todo-input">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> اضافة قسم

                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <fieldset class="form-group">
                                            <input type="hidden" name="page" value="alu" id="inputName" class="form-control" placeholder="اسم القسم" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="text" name="inputName" id="inputName" class="form-control" placeholder="اسم القسم" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="number" name="inputNumber" id="inputNumber" class="form-control" placeholder="رقم القسم" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="number" name="inputCodeNumber" id="inputCodeNumber" class="form-control" placeholder="الرقم السري" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="number" name="inputNumberMaterialsStudentLoaded" id="inputNumberMaterialsStudentLoaded" class="form-control" placeholder="عدد مواد التحميل" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="text" name="inputHeadOfDepartment" id="inputHeadOfDepartment" class="form-control" placeholder="رئيس القسم" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select name="inputTypeOfStudy" id="inputTypeOfStudy" class="form-control" required>
                                                <option disabled selected value> نوع الدراسة </option>
                                                <option value='Morning'>صباحي</option>
                                                <option value='Evening'>صباحي و مسائي</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select name="inputTypeOfSystem" id="inputTypeOfSystem" class="form-control" required>
                                                <option disabled selected value> نوع النظام </option>
                                                <option value='courses'>فصلي</option>
                                                <option value='Yearly'>سنوي</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select name="inputNumberOfStage" id="inputNumberOfStage" class="form-control" required>
                                                <option disabled selected value> عدد المراحل </option>
                                                <option value='4'>اربع مراحل</option>
                                                <option value='5'>خمس مراحل</option>
                                                <option value='6'>ست مراحل</option>
                                            </select>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <input type="number" name="inputMaterialConformingDeposit" id="inputMaterialConformingDeposit" class="form-control" placeholder="درجة القرار" required>
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <select name="College" class="form-control" required>
                                                <option disabled selected value> الكلية </option>
                                                <?php
                                                include('../connect.php');

                                                $sql = "SELECT * FROM `colleges` ";
                                                $result = mysqli_query($link, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $num = $row["ID"] . "<br>";
                                                        $name = $row["Name"] . "<br>";
                                                        if ($college_data['ID'] == $row["ID"]) {
                                                            echo "<option value='$num' selected>" . $name . "</option>";
                                                        } else {
                                                            echo "<option value='$num'>" . $name . "</option>";
                                                        }
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
                                            <button name="Save" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                                <span class="d-none d-lg-block">اضافة قسم</span></button>
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
            <?php
            }
            ?>