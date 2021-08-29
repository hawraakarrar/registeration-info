<?php
session_start();
$activepage = "reports";
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

<!-- $stgs = mysqli_query($link, $sqls);
                            while ($stgs_data =  mysqli_fetch_array($stgs)) {
                            ?>
-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="users-list-wrapper2">
                <div class="card">

                    <div class="card-header">

                        <h1> تقارير </h1> <br>
                        <form action="InsertDepartment.php" method="post" enctype="multipart/form-data">
                            <div class="row" style="width:100%">

                                <div class="col-12 ">
                                    <div class="form-label-group">
                                        <select name="College" class="form-control" required>
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
                                        <br>
                                        <select name="College" class="form-control" required>
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
                                                    echo "<option value='$num'>" . $name . "</option>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-outline-primary float-left btn-inline mb-50 " name="Save"> النتائج </button>
                                </div>
                            </div>
                        </form>
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







        </div>

        </section>