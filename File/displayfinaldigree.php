<?php
$materialid = $_GET['id'];
?>
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







    .td {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    th {
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

                            <p> درجات الطلاب النهائية<br>

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

                        </div>

                </div>
                <!-- users filter start -->

                <!-- users filter end -->
                <!-- Ag Grid users list section start -->
                <!-- users list start -->



                <!-- Ag Grid users list section end -->
            </section>
            <!-- users list start -->

            <section class="users-list-wrapper">
                <!-- users filter start -->


                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-header">
                            <h4 class="card-title"> الدرجات </h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a href="exportfinaldegree.php?id=<?php echo $_GET['id'] ?>"><i class="fa fa-file-excel-o"></i></a></li>

                                </ul>
                            </div>
                        </div>

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
                                                <center> درجة السعي </center>
                                            </th>

                                            <th>
                                                <center> الدرجة النهائية </center>
                                            </th>
                                            <th>
                                                <center> المجموع </center>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        include("../connect.php");
                                        $material_id = $_GET['id'];
                                        $sql = "SELECT students.Name as name , finaldegree.Degree as Fdegree
                                       ,pursuitdegree.Degree as Mdegree
                                        FROM students
                                        LEFT JOIN finaldegree ON finaldegree.Student_Id=students.ID and finaldegree.Material_Id= '$material_id' 
                                        LEFT JOIN pursuitdegree ON pursuitdegree.Student_Id=students.ID and pursuitdegree.Material_Id = '$material_id'
                                        where finaldegree.Material_Id=" . $_GET['id'];
                                        $degree_data = mysqli_query($link, $sql);
                                        $i = 1;



                                        ?>


                                        <?php
                                        while ($degrees =  mysqli_fetch_array($degree_data)) {


                                        ?>
                                            <tr>
                                                <th scope="row">
                                                    <br>
                                                    <center>
                                                        <?php echo $i ?>
                                                    </center>
                                                    <br>
                                                </th>

                                                <th scope="row">
                                                    <br>
                                                    <center>
                                                        <?php echo $degrees['name'] ?>
                                                    </center>
                                                    <br>
                                                </th>
                                                <th scop="row">
                                                    <br>
                                                    <center>
                                                        <?php echo $degrees['Mdegree'] ?>
                                                    </center>
                                                    <br>
                                                </th>
                                                <th scop="row">
                                                    <br>
                                                    <center>
                                                        <?php echo $degrees['Fdegree'] ?>
                                                    </center>
                                                    <br>
                                                </th>
                                                <th scop="row">
                                                    <br>
                                                    <center>
                                                        <?php
                                                        if ($degrees['Mdegree'] != null && $degrees['Mdegree'] != '' && $degrees['Fdegree'] != null && $degrees['Fdegree'] != '') {
                                                            echo (int) $degrees['Mdegree'] + (int) $degrees['Fdegree'];
                                                        }
                                                        ?>
                                                    </center>
                                                    <br>
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



        </div>

        </section>