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
                <form method="post" action="postfdgress.php">


                    <div class="card">

                        <div class="form-label-group p-3">
                            <select name="round" class="form-control" required>
                                <option disabled selected value> الدور </option>
                                <option   value=1> الاول </option>
                                <option   value=2> الثاني </option>
                                <option   value=3> الثالث </option>
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
                                                    <center> الرقم    </center> 
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
                                            <tr>
                                                <th scope="row">
                                                    <center>
                                                        
                                                    </center>
                                                </th>
                                                <th scope="row">
                                                    <center>

                                                    </center>
                                                </th>
                                                <th scop="row">
                                                    <center>

                                                    </center>
                                                </th>
                                            </tr>
                                       
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