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


    td:hover {
        background-color: white;
    }

    th {
        margin: 15px;
        padding: 10px;
    }





    .form-control {
        display: block;
        width: 100%;
        height: calc(1.25em + 1.4rem + 1px);
        padding: 0.7rem 0.7rem;
        font-size: 0.96rem;
        font-weight: 400;
        line-height: 1.25;
        color: #4E5154;
        background-color: #FFFFFF;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        -webkit-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    .input-mar {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    input {
        margin-bottom: 10px !important;
    }
</style>
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="users-list-wrapper2">
                <div class="card">
                    <?php $sql = "SELECT * FROM materials where ID =" . $_GET['id'];
                    $material = mysqli_query($link, $sql);
                    while ($material_data =  mysqli_fetch_array($material)) {
                        $nm = $material_data['AName'];
                        $depn = $material_data['Department_Id'];
                        $stg = $material_data['Level_Id'];
                        $co = $material_data['Course_Id'];
                        $degree = $material_data['HighestDegreeCourse'];

                    ?>
                        <div class="card-header">

                            <p> اضافة الدرجة النهائية للطلاب <br>

                                <?php $sqld = "SELECT * FROM departments where ID = $depn";
                                $dep = mysqli_query($link, $sqld);
                                while ($dep_data =  mysqli_fetch_array($dep)) {
                                ?>
                                    لقسم <?php echo $dep_data['Name'] ?>
                                <?php } ?>
                                <br>
                                <?php $sqls = "SELECT * FROM levels where ID = $stg";
                                $stgs = mysqli_query($link, $sqls);
                                while ($stgs_data =  mysqli_fetch_array($stgs)) {
                                ?>
                                    مرحلة <?php echo $stgs_data['Name'] ?>
                                <?php } ?>
                                <br>
                                <?php $sqlc = "SELECT * FROM courses where ID = $co";
                                $cou = mysqli_query($link, $sqlc);
                                while ($cou_data =  mysqli_fetch_array($cou)) {
                                ?>

                                    الكورس <?php echo $cou_data['Name'] ?>
                                <?php } ?>
                                <br>

                                لمادة <?php echo $nm ?>


                            </p>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a href="exportFormmiddegree.php"><i class="fa fa-file-excel-o"></i></a></li>

                                </ul>
                            </div>
                        </div>

                </div>
                <!-- users filter start -->
                <div class="card">

                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="container">
                                <h1> رفع الدرجات عن طريق الاكسل</h1>
                                <br>
                                <form method="POST" action="uploadstudentFdegreeexcel.php" enctype="multipart/form-data">
                                    <div class="custom-file">
                                        <input type="heddin" id="MaterialID" name="MaterialID" value="<?php echo $_GET['id']; ?>" />
                                        <select name="RoundID" id="RoundID" class="form-control" required>
                                            <option disabled selected value> الدور </option>
                                            <?php
                                            include('../connect.php');

                                            $sql = "SELECT * FROM `rounds` ";
                                            $yearresult = mysqli_query($link, $sql);
                                            if (mysqli_num_rows($yearresult) > 0) {
                                                // output data of each row
                                                while ($years = mysqli_fetch_assoc($yearresult)) {
                                                    $num = $years["ID"] . "<br>";
                                                    $name = $years["Name"] . "<br>";
                                                    echo "<option value='$num'>" . $name . "</option>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            ?>
                                        </select>
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="uploadFile">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-success">Upload</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- users filter end -->
                <!-- Ag Grid users list section start -->
                <!-- users list start -->



                <!-- Ag Grid users list section end -->
            </section>
            <!-- users list start -->

            <section class="users-list-wrapper">
                <!-- users filter start -->
                <form method="post" action="postfdgress.php">


                    <div class="card">

                        <div class="form-label-group p-3">
                            <select name="round" class="form-control" required>
                                <option disabled selected value> الدور </option>
                                <?php
                                include('../connect.php');

                                $sql = "SELECT * FROM `rounds` ";
                                $roundresult = mysqli_query($link, $sql);
                                if (mysqli_num_rows($roundresult) > 0) {
                                    // output data of each row
                                    while ($round = mysqli_fetch_assoc($roundresult)) {
                                        $num = $round["ID"] . "<br>";
                                        $name = $round["Name"] . "<br>";
                                        echo "<option value='$num'>" . $name . "</option>";
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content collapse show">

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="tablesorter table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    الرقم
                                                </th>
                                                <th>
                                                    <center> الاسم </center>
                                                </th>
                                                <th>
                                                    <center> الدرجة </center>
                                                </th>


                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $subject = $_GET['id'];
                                            include("../connect.php");
                                            $q = "SELECT students.Name as Name, students.ID as ID, finaldegree.Degree as findegree 
                                            FROM students 
                                            LEFT JOIN finaldegree ON students.ID=finaldegree.Student_Id and finaldegree.Material_Id = '$subject'
                                            where finaldegree.Round_Id = '1'
                                            ";
                                            $query = "SELECT upload.StudentID, upload.MaterialsID , upload.YearID , students.ID as ID, students.Name as Name , materials.EName , years.Name as yname from upload JOIN students on students.ID = upload.StudentID Join materials ON materials.ID = upload.MaterialsID
                                            join years on upload.YearID = years.ID where materials.ID = '$subject' ";
                                            $uploads_stu = mysqli_query($link, $query);


                                            $sql = "SELECT * FROM students where Department_Id =$depn  && Stage=$stg";
                                            $stu = mysqli_query($link, $q);
                                            $i = 1;
                                            $counts = "SELECT count(*) as result FROM students where Department_Id =$depn  && Stage=$stg";
                                            $std_count = mysqli_query($link, $counts);
                                            $total = mysqli_fetch_assoc($std_count);

                                            ?>
                                            <input type="hidden" name="total" value="<?php echo $total['result'] ?>">
                                            <input type="hidden" name="material" value="<?php echo $_GET['id']; ?>">

                                            <?php
                                            while ($stu_data =  mysqli_fetch_array($stu)) {


                                            ?>
                                                <tr>
                                                    <th scope="row">
                                                        <center>
                                                            <?php echo $i ?>
                                                        </center>
                                                    </th>

                                                    <th scope="row">
                                                        <center>
                                                            <?php echo $stu_data['Name'] ?>
                                                        </center>
                                                    </th>
                                                    <th scop="row">
                                                        <center>
                                                            <input type="hidden" name="id<?php echo $i ?>" value="<?php echo $stu_data['ID'] ?>">
                                                            <input type="number" name="inputdegree<?php echo $stu_data['ID'] ?>" id="inputdegree<?php echo $stu_data['ID'] ?>" value="<?php echo $stu_data['findegree'] ?>" class="form-control input-mar" style="margin-bottom: 10px;" placeholder="الدرجة النهائية" max="<?php echo $degree ?>" min="0">

                                                        </center>

                                                    </th>



                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                            ?>
                                            <?php
                                            while ($uploads_student =  mysqli_fetch_array($uploads_stu)) {


                                            ?>
                                                <tr>
                                                    <th scope="row">
                                                        <center>
                                                            <?php echo $i ?>
                                                        </center>
                                                    </th>

                                                    <th scope="row">
                                                        <center>
                                                            <?php echo $uploads_student['Name'] ?> <p style="color:red"> تحميل </p>
                                                        </center>
                                                    </th>
                                                    <th scop="row">
                                                        <center>
                                                            <input type="hidden" name="id<?php echo $i ?>" value="<?php echo $uploads_student['ID'] ?>">
                                                            <input type="number" name="inputdegree<?php echo $uploads_student['ID'] ?>" id="inputdegree<?php echo $uploads_student['ID'] ?>" class="form-control input-mar" style="margin-bottom: 10px;" placeholder="درجة السعي" max="<?php echo $degree ?>" min="0" value="<?php echo $uploads_student['middegree']; ?>">
                                                        </center>

                                                    </th>


                                                </tr>
                                            <?php
                                                $i++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <button class="btn btn-primary m-2" name="submit" type="submit"> حفظ </button>


        </div>
        </form>
        </section>