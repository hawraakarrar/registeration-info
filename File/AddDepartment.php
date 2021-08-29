<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
<?php include('head.php');  ?>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="department-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <span class="d-none d-sm-block">Department</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->
                                        <div class="media mb-2">
                                            <a class="mr-2 my-25" href="#">
                                                <img src="../app-assets/images/BIClogo.jpg" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                                            </a>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form action="InsertDepartment.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-label-group">
                                                        <input type="text" name="inputName" id="inputName" class="form-control" placeholder="اسم القسم" required>
                                                        <label for="inputName"> اسم القسم </label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="number" name="inputNumber" id="inputNumber" class="form-control" placeholder="رقم القسم" required>
                                                        <label for="inputNumber"> رقم القسم </label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="number" name="inputCodeNumber" id="inputCodeNumber" class="form-control" placeholder="الرقم السري" required>
                                                        <label for="inputCodeNumber">الرقم السري</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="number" name="inputNumberMaterialsStudentLoaded" id="inputNumberMaterialsStudentLoaded" class="form-control" placeholder="عدد مواد التحميل" required>
                                                        <label for="inputNumberMaterialsStudentLoaded">عدد مواد التحميل</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" name="inputHeadOfDepartment" id="inputHeadOfDepartment" class="form-control" placeholder="رئيس القسم" required>
                                                        <label for="inputHeadOfDepartment">رئيس القسم</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-label-group">
                                                        <select name="inputTypeOfStudy" id="inputTypeOfStudy" class="form-control" required>
                                                            <option disabled selected value> نوع الدراسة </option>
                                                            <option value='Morning'>صباحي</option>
                                                            <option value='Evening'>صباحي و مسائي</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="inputTypeOfSystem" id="inputTypeOfSystem" class="form-control" required>
                                                            <option disabled selected value> نوع النظام </option>
                                                            <option value='courses'>فصلي</option>
                                                            <option value='Yearly'>سنوي</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <select name="inputNumberOfStage" id="inputNumberOfStage" class="form-control" required>
                                                            <option disabled selected value> عدد المراحل </option>
                                                            <option value='4'>اربع مراحل</option>
                                                            <option value='5'>خمس مراحل</option>
                                                            <option value='6'>ست مراحل</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-label-group">
                                                        <input type="number" name="inputMaterialConformingDeposit" id="inputMaterialConformingDeposit" class="form-control" placeholder="درجة القرار" required>
                                                        <label for="inputMaterialConformingDeposit">درجة القرار</label>
                                                    </div>
                                                    <div class="form-label-group">
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
                                                    <button type="submit" class="btn btn-outline-primary float-left btn-inline mb-50 " name="Save">حفظ</button>
                                                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                                    <!-- <button class="btn btn-primary float-right btn-inline mb-50" name="Next" enctype="multipart/form-data" formaction="index.php" formmethod="post">التالي</button> -->
                                                    <a href="app-Year.php" class="btn btn-primary float-right btn-inline mb-50" name="Next">التالي</a>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>

    <!-- END: Content-->




</body>
<!-- END: Body-->
<!-- BEGIN: Vendor JS-->

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->

<!-- END: Theme JS-->
<?php include('script.php'); ?>
<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

</html>