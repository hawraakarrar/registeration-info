<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
<?php  include('head.php');  ?>
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
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="../app-assets/images/pages/register.jpg" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">اضافة بيانات الكلية</h4>
                                            </div>
                                        </div>
                                        <p class="px-1">املا الاستمارة الخاصة بمعلومات الكلية.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form action="InsertCollege.php" method="post" enctype="multipart/form-data">
                                                    <div class="form-label-group">
                                                        <input type="text" name="inputName" id="inputName" class="form-control" placeholder="اسم الكلية" required>
                                                        <label for="inputName"> اسم الكلية </label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="number" name="inputNumber" id="inputNumber" class="form-control" placeholder="رقم الكلية " required>
                                                        <label for="inputNumber"> رقم الكلية </label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="number" name="inputCodeNumber" id="inputCodeNumber" class="form-control" placeholder="الرقم السري " required>
                                                        <label for="inputCodeNumber">الرقم السري</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" name="inputDean" id="inputDean" class="form-control" placeholder="العميد" required>
                                                        <label for="inputDean">العميد</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="text" name="inputAssociateDeanSA" id="inputAssociateDeanSA" class="form-control" placeholder="مساعد العميد للشؤون العلمية" required>
                                                        <label for="inputAssociateDeanSA">مساعد العميد للشؤون العلمية</label>
                                                    </div>

                                                    <div class="form-label-group">
                                                        <input type="text" name="inputAssociateDeanAA" id="inputAssociateDeanAA" class="form-control" placeholder="معاون العميد للشؤون الادارية " required>
                                                        <label for="inputAssociateDeanAA">معاون العميد للشؤون الادارية</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="University" class="form-control" required>
                                                        <option disabled selected value> الجامعة </option>
                                                        <?php
                                                        include('../connect.php');
                                                                            
                                                        $sql = "SELECT * FROM `university` ";
                                                        $result = mysqli_query($link, $sql);
                                                        if (mysqli_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result)) {
                                                                $num=$row["ID"] . "<br>";
                                                                $name=$row["Name"]. "<br>";
                                                                echo "<option value='$num'>" . $name . "</option>";
                                                           
                                                            }
                                                        } else {echo "0 results";}
                                                        ?>
                        
                                                            
                                                        </select>
                                                    </div>
                                                   
                                                    <button type="submit" class="btn btn-outline-primary float-left btn-inline mb-50 "  name="Save" >حفظ</button>
                                                
                                                    <a href="AddDepartment.php" class="btn btn-primary float-right btn-inline mb-50">التالي</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

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