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
                                                <h4 class="mb-0">اضافة بيانات الجامعة</h4>
                                            </div>
                                        </div>
                                        <p class="px-1">املا الاستمارة الخاصة بمعلومات الجامعة.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form method="post" action="InsertUniversity.php" enctype="multipart/form-data">
                                                    <div class="form-label-group">
                                                        <input type="text" name="inputName" id="inputName" class="form-control" placeholder="اسم الجامعة" required>
                                                        <label for="inputName"> الاسم الجامعة </label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="number" name="inputNumber" id="inputNumber" class="form-control" placeholder="رقم الجامعة" required>
                                                        <label for="inputNumber"> رقم الجامعة </label>
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="number" id="inputCodeNumber" name="inputCodeNumber" class="form-control" placeholder="الرقم السري " required>
                                                        <label for="inputCodeNumber">الرقم السري</label>
                                                    </div>


                                                    <button type="submit" class="btn btn-primary float-left btn-inline" name="submit" style="width:360px">التالي</button>
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

<?php include('script.php'); ?>

</html>