<?php
session_start();
$activepage = "app-Grades-list";
include('MainPage.php');
?>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->

<style>
    .tablesorter-default .tablesorter-filter-row td {
        background-color: #fff;
        border-bottom: none !important;
        line-height: normal;
        text-align: center;
        -webkit-transition: line-height .1s ease;
        -moz-transition: line-height .1s ease;
        -o-transition: line-height .1s ease;
        transition: line-height .1s ease;
    }

    td {
        text-align: right;
        margin-top: 150px;
        background-color: white !important;
        border-bottom: none !important;
        padding: 50px;
        vertical-align: middle;
        font-size: 15px;
    }

    td:hover {
        background-color: white;
    }

    p {
        display: inline;
        font-size: 12px;
    }
</style>

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
                <?php
                include("../connect.php");
                $sql = "SELECT * FROM departments";
                $COLLEGES = mysqli_query($link, $sql);
                while ($COLLEGES_data =  mysqli_fetch_array($COLLEGES)) {
                ?>
                    <?php

                    for ($i = 1; $i <= (int) $COLLEGES_data['NumberOfStage']; $i++) {
                    ?>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> قسم <?php echo $COLLEGES_data['Name'] ?> </h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        <li><a data-action="" data-toggle="modal" data-target="#addDepartmentModal<?php echo ""; ?>"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
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
                                                    <?php

                                                    $sql = "SELECT * FROM materials where Department_Id=" . $COLLEGES_data['ID'] . " and Level_Id=" . $i;
                                                    $material = mysqli_query($link, $sql);
                                                    $student_matterial = array();
                                                    $mid_degree = array();
                                                    $final_degree = array();
                                                    while ($material_data =  mysqli_fetch_array($material)) {

                                                        array_push($student_matterial, $material_data['ID'])
                                                    ?>
                                                        <th>
                                                            <h6>
                                                                <?php echo $material_data['EName'] ?>

                                                            </h6>
                                                            <br> <br>
                                                            <div class="row">
                                                                <div class="col-4" style="font-size: 8px;">
                                                                    السعي
                                                                </div>


                                                                <div class="col-4" style="font-size: 8px;"> النهائي

                                                                </div>


                                                                <div class="col-4" style="font-size: 7px;">
                                                                    المجموع

                                                                </div>



                                                            </div>

                                                        </th>
                                                    <?php } ?>
                                                    <th>
                                                        <br> <br>
                                                        الحاله
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>

                                                    <?php
                                                    $sql = "SELECT * from students where Department_Id=" . $COLLEGES_data['ID'] . " and Stage=" . $i;

                                                    include("../connect.php");
                                                    $student = mysqli_query($link, $sql);
                                                    while ($student_data =  mysqli_fetch_array($student)) {
                                                    ?>

                                                        <td scope="row" align="center" style="vertical-align:top;">
                                                            <br>
                                                            <?php
                                                            echo $student_data['Name']

                                                            ?>
                                                        </td>
                                                        <?php foreach ($student_matterial as $m) {


                                                        ?>
                                                            <td>
                                                                <div class="row">





                                                                </div>
                                                                <div class="row">
                                                                    <?php

                                                                    $id = $student_data['ID'];
                                                                    $sql = "SELECT finaldegree.Degree as Fdegree
              ,pursuitdegree.Degree as Mdegree
               FROM finaldegree
               Right JOIN pursuitdegree ON pursuitdegree.Student_Id=
               '$id' and pursuitdegree.Material_Id = " . $m . "
               where finaldegree.Material_Id=" . $m . " and finaldegree.Student_Id=" . $id;
                                                                    $finaldegress = mysqli_query($link, $sql);
                                                                    $std = mysqli_fetch_assoc($finaldegress);






                                                                    ?>
                                                                    <div class="col">
                                                                        <?php
                                                                        if ($std != null) {
                                                                            echo $std['Mdegree'];
                                                                        }

                                                                        ?>
                                                                    </div>


                                                                    <div class="col">
                                                                        <?php
                                                                        if ($std) {

                                                                            echo $std['Fdegree'];
                                                                        }
                                                                        ?>
                                                                    </div>


                                                                    <div class="col">
                                                                        <?php
                                                                        if ($std && $std['Fdegree'] != '' && $std['Mdegree'] != '') {

                                                                            echo (int) $std['Fdegree'] +  (int) $std['Mdegree'];

                                                                            $tot = (int) $std['Fdegree'] +  (int) $std['Mdegree'];
                                                                        }
                                                                        ?>
                                                                    </div>




                                                                </div>







                                                            </td>
                                                        <?php
                                                        }
                                                        ?>

                                                        <td>
                                                            <?php
                                                            $sql = "SELECT pursuitdegree.Degree as mid , pursuitdegree.Material_Id , finaldegree.Degree as finaldegree , pursuitdegree.Degree + finaldegree.Degree as total from pursuitdegree JOIN finaldegree on pursuitdegree.Student_Id = finaldegree.Student_Id and pursuitdegree.Material_Id = finaldegree.Material_Id WHERE pursuitdegree.Student_Id = '$id'
                                                            
                                                            ";
                                                            $totaldegress = mysqli_query($link, $sql);
                                                            $status = array();
                                                            while ($std = mysqli_fetch_assoc($totaldegress)) {

                                                                if ($std['total'] > 50) {
                                                                    array_push($status, 'success');
                                                                } else if ($std['total'] > 0 && $std['total'] < 50) {
                                                                    array_push($status, 'fail');
                                                                }
                                                            };
                                                            if (in_array('fail', $status)) {
                                                                echo "راسب";
                                                            } else if (!in_array('fail', $status) && in_array('success', $status)) {
                                                                echo "ناجح";
                                                            }
                                                            ?>
                                                        </td>

                                                </tr>
                                            <?php
                                                    }
                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </section>
            <div class="modal fade" id="addDepartmentModal<?php echo ""; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                    <div class="modal-content">
                        <section class="todo-form">
                            <form id="form-add-todo" method="post" action="InsertMaterial.php" class="todo-input">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> اضافة مادة

                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <fieldset class="form-group">
                                        <input type="text" name="inputAName" id="inputAName" class="form-control" placeholder="اسم المادة باللغة العربية" required>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="text" name="inputEName" id="inputEName" class="form-control" placeholder="اسم المادة باللغة الانكليزية " required>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="number" name="inputCodeNumber" id="inputCodeNumber" class="form-control" placeholder="  الرقم السري للمادة" required>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="number" name="inputNumberUnit" id="inputNumberUnit" class="form-control" placeholder="عدد الوحدات " required>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="number" name="inputHighestDegreeCourse" id="inputHighestDegreeCourse" class="form-control" placeholder="اعلى درجة للسعي" required>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <select name="inputDepartment" id="inputDepartment" class="form-control" required>
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
                                    <fieldset class="form-group">
                                        <select name="inputTeacher" id="inputTeacher" class="form-control" required>
                                            <option disabled selected value> الاستاذ </option>
                                            <?php
                                            include('../connect.php');

                                            $sql = "SELECT * FROM `teachers` ";
                                            $result = mysqli_query($link, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $num = $row["ID"] . "<br>";
                                                    $name = $row["AName"] . "<br>";
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
                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <select name="inputCourse" id="inputCourse" class="form-control" required>
                                            <option disabled selected value> Course </option>
                                            <?php
                                            include('../connect.php');

                                            $sql = "SELECT * FROM `courses` ";
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
                                        </select>
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <select name="Level" id="Level" class="form-control" required>
                                            <option disabled selected value> المرحلة </option>
                                            <?php
                                            include('../connect.php');

                                            $sql = "SELECT * FROM `levels` ";
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
                                            <span class="d-none d-lg-block">اضافة مادة</span></button>
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