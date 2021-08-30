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

                              

                                            <?php
                                           
                                            $y=(int)$_SESSION['year'];
                                            $sqly="SELECT * FROM years ";
                                            $yr = mysqli_query($link, $sqly);
                                            while ($y_data =  mysqli_fetch_array($yr)) {
                                                $yn=(int)$y_data['Name'];
                                                if($y==$yn){
                                                    $_SESSION['yearofmat']=$y_data['ID'];
                                                }
                                            }
                                            //session of id year used at now
                                            $SYM=$_SESSION['yearofmat'];

                                            $sqlmy="SELECT * FROM materialbyyear WHERE Year_Id=$SYM";

                                            $maty= mysqli_query($link, $sqlmy);
                                            while ($maty_data = mysqli_fetch_array($maty)) 
                                            {
                                                $matID=$maty_data['Material_Id'];                               
                                                $sqlm="SELECT materials.ID , materials.AName, materials.EName , departments.Name as depName , levels.Name as levelName , courses.Name as course_name , teachers.AName as teacher_name , materials.HighestDegreeCourse , materials.CodeNumber , materials.NumberUnit FROM materials JOIN departments ON materials.Department_Id = departments.ID join levels on materials.Level_Id=levels.ID JOIN courses on materials.Course_Id = courses.ID join teachers on teachers.ID = materials.Teacher_Id where materials.ID=$matID";
   
                                                $material = mysqli_query($link, $sqlm);
                                                    while ($material_data = mysqli_fetch_assoc($material)) {

                                                        ?>
<tr>
 
                                            <td scope="row" align="center" style="vertical-align:top;">

                                                                                                    <br>
                                                                                                    <center>
                                                                                                    <?php

                                                                                                    echo $material_data['AName'];
                                                                                                    // yid
                                                
                                                                                                    ?>
                                                                                                        </center>
                                            </td>

                                            <!-- --------------------------------------------------  -->

                                            <td>
                                                <br>
                                                <center>
                                                <?php
                                                            //departmentID
                                                            echo $material_data['depName'];
                                                            
                                                            ?>
                                                </center>
                                            </td>

                                            <td>
                                                <center> 
                                                <br>
                                                    <?php
                                                    //levelID
                                                    echo $material_data['levelName'];
                                                  
                                                    

                                                    ?>
                                                </center>
                                            </td>

                                            <td>
                                                <br>
                                                <center>
                                                <?php
                                                    //courseID
                                                    echo $material_data['course_name'];

                                                    ?>
                                                </center>
                                            </td>

                                            <td>
                                                    <br>
                                                    <center>
                                                    <?php
                                                            //TeacherID
                                                            echo $material_data['teacher_name'];

                                                            ?>
                                                    </center>
                                            </td>

                                            <td>
                                                <br>
                                                <center>
                                             
                                                    
                                                    <button type="button" data-toggle="modal" data-target="#update_Material<?php echo $material_data['ID']; ?>" class="btn btn-primary mr-1 mb-1 ">
                                                        <i class="feather icon-edit"></i>
                                                        تعديل </button>

                                                    <?php
                                                    include('updateMaterial.php');
                                                    ?>
                                                </center>
                                            </td>

</tr>


                                                    <?php


                                                    }

                                            }   
                                      

                                        
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