<?php
session_start();
$activepage = "app-Material-list";
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

                ?>
                <div class="card">
                    <div class="card-header">
                    
                        <h4 class="card-title"> المواد </h4>
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
                                <table class="tablesorter table">
                                    <thead>
                                        <tr>
                                            <th>الاسم</th>
                                            <th class="filter-select"> القسم </th>
                                            <th class="filter-select">المرحلة</th>
                                            <th class="filter-select">الفصل</th>
                                            <th>المحاضر</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <?php
                                           
                                            $y=(int)$_SESSION['year'];
                                            $sqly="SELECT * FROM years ";
                                            $yr = mysqli_query($link, $sqly);
                                            while ($y_data =  mysqli_fetch_array($yr)) {
                                                $yn=(int)$y_data['Name'];
                                                if($y==$yn){
                                                    $_SESSION['yearofmat']=$y_data['ID'];
                                                }}
                                            //session of id year used at now
                                            $SYM=$_SESSION['yearofmat'];

                                            $sqlmy="SELECT * FROM materialbyyear WHERE Year_Id=$SYM";
                                            $maty= mysqli_query($link, $sqlmy);
                                            while ($maty_data =  mysqli_fetch_array($maty)) {
                                                $matID=$maty_data['Material_Id'];
                                                $sqlm="SELECT *FROM materials Where ID=$matID";
                                                $material = mysqli_query($link, $sqlm);
                                                while ($material_data =  mysqli_fetch_array($material)) {




                                            ?>

                                                <td scope="row" align="center" style="vertical-align:top;">
                                                    <br>
                                                    <?php
                                                    echo $material_data['AName'];
                                                    // yid

                                                    ?>
                                                </td>
                                                <td scope="row" align="center" style="vertical-align:top;">
                                                    <br>
                                                    
                                                    <?php
                                                    //departmentID
                                                    $d=$material_data['Department_Id'];
                                                    $sqld="SELECT * FROM departments WHERE ID=$d";
                                                    $matd= mysqli_query($link, $sqld);
                                                    while ($matd_data =  mysqli_fetch_array($matd)) {
                                                        echo $matd_data['Name'];}
                                                    ?>
                                                </td>
                                                <td scope="row" align="center" style="vertical-align:top;">
                                                    <br>
                                                    <?php
                                                    //levelID
                                                    $l=$material_data['Level_Id'];
                                                    $sqll="SELECT * FROM levels WHERE ID=$l";
                                                    $matl= mysqli_query($link, $sqll);
                                                    while ($matl_data =  mysqli_fetch_array($matl)) {
                                                        echo $matl_data['Name'];}
                                                    

                                                    ?>

                                                </td>
                                                <td scope="row" align="center" style="vertical-align:top;">
                                                    <br>
                                                    <?php
                                                    //courseID
                                                    $C=$material_data['Course_Id'];
                                                    $sqlC="SELECT * FROM courses WHERE ID=$C";
                                                    $matC= mysqli_query($link, $sqlC);
                                                    while ($matC_data =  mysqli_fetch_array($matC)) {
                                                        echo $matC_data['Name'];}

                                                    ?>

                                                </td>
                                                <td scope="row" align="center" style="vertical-align:top;">
                                                    <br>
                                                    <?php

                                                    //TeacherID
                                                    $T=$material_data['Teacher_Id'];
                                                    $sqlt="SELECT * FROM teachers WHERE ID=$T";
                                                    $matt= mysqli_query($link, $sqlt);
                                                    while ($matt_data =  mysqli_fetch_array($matt)) {
                                                        echo $matt_data['AName'];}

                                                    ?>

                                                </td>
                                                <td class="mt-5" align="center" style="vertical-align:top;">
                                                    <br>
                                                    
                                                    <button type="button" data-toggle="modal" data-target="#update_Material<?php echo  $maty_data['ID'] ?>" class="btn btn-primary mr-1 mb-1 ">
                                                        <i class="feather icon-edit"></i>
                                                        تعديل </button>

                                                    <?php

                                                    include('updateMaterial.php');
                                                    ?>

                                                </td>
                                                <td>
                                                    <br>
                                                    <div class="ag-btns d-flex flex-wrap ">

                                                        <div class="action-btns">
                                                            <div class="btn-dropdown ">

                                                                <div class="btn-group dropdown actions-dropodown">

                                                                    <button type="button" class="btn btn-white px-2 py-75 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="<?php echo 'AddDegreeMaterial.php?id=' . $maty_data['ID'] ; ?>"><i class="feather icon-plus"></i>
                                                                            درجات السعي </a>
                                                                        <a class="dropdown-item" href="<?php echo 'app-Upload-list.php?id=' .  $maty_data['ID']; ?>"><i class="feather icon-list"></i> اضافة الطلاب المحملين </a>
                                                                        <a class="dropdown-item" href="<?php echo 'displaymiddigree.php?id=' .  $maty_data['ID']; ?>"><i class="feather icon-list"></i> عرض درجات السعي </a>
                                                                        <a class="dropdown-item" href="<?php echo 'AddFDegreeMaterial.php?id=' . $maty_data['ID']; ?>"><i class="feather icon-plus"></i>
                                                                            الدرجة النهائية </a>
                                                                        <a class="dropdown-item" href="<?php echo 'AddFDegreeMaterial2.php?id=' . $maty_data['ID']; ?>"><i class="feather icon-plus"></i>
                                                                            درجه امتحان الدور الثاني </a>
                                                                        <a class="dropdown-item" href="<?php echo 'AddFDegreeMaterial3.php?id=' . $maty_data['ID']; ?>"><i class="feather icon-plus"></i>
                                                                            درجه امتحان الدور الثالث </a>
                                                                        <a class="dropdown-item" href="<?php echo 'displayfinaldigree.php?id=' .  $maty_data['ID']; ?>"><i class="feather icon-list"></i> عرض الدرجات النهائية </a>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                        </tr>
                                    <?php
                                            }}
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


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
                                    <table class="tablesorter table">
                                        
                                        <tbody>

                                            <tr>
                                                <th scope="row">
                                                    <center>
                                                        <fieldset class="form-label-group">
                                                            <input type="text" name="inputAName" id="inputAName" class="form-control" placeholder="اسم المادة باللغة العربية" required>
                                                            <label for="inputAName">اسم المادة باللغة العربية </label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <input type="text" name="inputEName" id="inputEName" class="form-control" placeholder="اسم المادة باللغة الانكليزية " required>
                                                            <label for="inputEName">اسم المادة باللغة الانكليزية </label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <select name="inputyear" id="inputyear" class="form-control" required>
                                                                <option disabled selected value> السنة الدراسيه </option>

                                                                <?php
                                                                include('../connect.php');

                                                                $sql = "SELECT * FROM `years` ";
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
                                                        <fieldset class="form-label-group">
                                                            <input type="number" name="inputCodeNumber" id="inputCodeNumber" class="form-control" placeholder="  الرقم السري للمادة" required>
                                                            <label for="inputCodeNumber"> الرقم السري للمادة </label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <input type="number" name="inputNumberUnit" id="inputNumberUnit" class="form-control" placeholder="عدد الوحدات " required>
                                                            <label for="inputNumberUnit"> عدد الوحدات </label>
                                                        </fieldset>
                                                    </center>
                                                </th>
                                                <th scope="row">
                                                    <center>
                                                        <fieldset class="form-label-group">
                                                            <input type="number" name="inputHighestDegreeCourse" id="inputHighestDegreeCourse" class="form-control" placeholder="اعلى درجة للسعي" required>
                                                            <label for="inputHighestDegreeCourse"> اعلى درجة للسعي  </label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
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
                                                        <fieldset class="form-label-group">
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
                                                        <fieldset class="form-label-group">
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
                                                        <fieldset class="form-label-group">
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
                                                    </center>
                                                </th>

                                            </tr>
                                        </tbody>
                                    </table>



                                   
                                    
                                    
                                    
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