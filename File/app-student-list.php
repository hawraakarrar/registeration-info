<?php
session_start();
$activepage = "Addstu";
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

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> الطلاب </h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="" data-toggle="modal" data-target="#addDepartmentModal<?php echo "" ?>"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
                                <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li>
                                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="tablesorter table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center> الاسم </center>
                                            </th>
                                            <th class="filter-select">
                                                <center> القسم </center>
                                            </th>
                                            <th class="filter-select">
                                                <center> المرحله </center>
                                            </th>
                                            <th>
                                                <center> الرقم </center>
                                            </th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>

                                            <?php
                                            include("../connect.php");
                                            $sql = "SELECT * FROM studentview";
                                            $student = mysqli_query($link, $sql);
                                            while ($student_data =  mysqli_fetch_array($student)) {
                                            ?>
                                                <th scope="row">
                                                    <center>
                                                        <?php echo $student_data['Name'] ?>
                                                    </center>
                                                </th>
                                                <th scope="row"><i class="fas fa-signal-4    "></i>

                                                    <center> <?php echo $student_data['depname'] ?> </center>
                                                </th>
                                                <th scope="row">
                                                    <center><?php
                                                    $stuid=$student_data['ID'];
                                                    $sqls = "SELECT * FROM studentstatus where Stu_Id=$stuid";
                                                    $students = mysqli_query($link, $sqls);
                                                    while ($students_data =  mysqli_fetch_array($students)) {
                                                        $lid=$students_data['ID'];
                                                        $sqli = "SELECT * FROM levels where ID=$lid";
                                                        $studenti = mysqli_query($link, $sqli);
                                                        while ($studenti_data =  mysqli_fetch_array($studenti)) {
                                                        ?>
                                                        <?php echo $studenti_data['Name'] ?>
                                                        <?php }}  ?>
                                                    </center>
                                                </th>
                                                <th scope="row">
                                                    <center> <?php echo $student_data['Number'] ?> </center>
                                                </th>
                                                <th class="mt-3">
                                                    <br>
                                                    <button type="button" data-toggle="modal" data-target="#update_Stu<?php echo $student_data['ID'] ?>" class="btn btn-primary mr-1 mb-1 ">
                                                        <i class="feather icon-edit"></i>
                                                        تعديل </button>
                                                    <?php include('updateStudent.php');  ?>
                                                    

                                                </th>
                                                
                                                <th>
                                                    
                                                    <div class="ag-btns d-flex flex-wrap ">

                                                        <div class="action-btns">
                                                            <div class="btn-dropdown ">

                                                                <div class="btn-group dropdown actions-dropodown">

                                                                    <button type="button" class="btn btn-white px-2 py-75 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                            
                                                                            <a class="dropdown-item" href="<?php echo 'certificateC1.php?id=' . $student_data['ID']; ?>"><i class="feather icon-plus"></i>
                                                                                نتائج الكورس الاول  </a>
                                                                            <a class="dropdown-item" href="<?php echo 'certificateC2.php?id=' . $student_data['ID']; ?>"><i class="feather icon-plus"></i>
                                                                            نتائج الكورس الثاني  </a>
                                                                            <a class="dropdown-item" href="<?php echo 'certificateAll.php?id=' . $student_data['ID']; ?>"><i class="feather icon-plus"></i>
                                                                            النتيجة النهائية   </a>
                                                                            <a class="dropdown-item" href="<?php echo 'decisiondegree.php?id=' . $student_data['ID']; ?>"><i class="feather icon-plus"></i>
                                                                            اضافة درجة قرار   </a>
                                                                            <a class="dropdown-item" href="<?php echo 'decisiondegreee.php?id=' . $student_data['ID']; ?>"><i class="feather icon-plus"></i>
                                                                           اضافة درجة قرار التعديل   </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </th>

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

            </section>
            <div class="modal fade" id="addDepartmentModal<?php echo "" ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                    <div class="modal-content">
                        <section class="todo-form">
                            <form id="form-add-todo" method="post" action="InsertStudent.php" class="todo-input">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> اضافة طالب

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
                                                            <input type="text" name="inputName" id="inputName" class="form-control" placeholder="اسم الطالب" required>
                                                            <label for="inputName">اسم الطالب </label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <input type="text" name="Number" id="Number" class="form-control" placeholder="الرقم الامتحاني " required>
                                                            <label for="Number">رقم الطالب  </label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <select name="Gender" id="Gender" class="form-control" required>
                                                                <option disabled selected value> الجنس </option>
                                                                <option value="F">انثى</option>
                                                                <option value="M">ذكر</option>
                                                            </select>
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
                                                        
                                                    </center>
                                                </th>
                                                <th scope="row">
                                                    <center>
                                                        <fieldset class="form-label-group">
                                                            <select name="ayear" id="ayear" class="form-control" required>
                                                                <option disabled selected value>  سنة القبول </option>
                                                                <?php
                                                                include('../connect.php');

                                                                $sql = "SELECT * FROM `years` ";
                                                                $result = mysqli_query($link, $sql);
                                                                if (mysqli_num_rows($result) > 0) {
                                                                    // output data of each row
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                        $num = $row["ID"] ;
                                                                        $name = $row["Name"] ;

                                                                        echo "<option value='$num'>" . $name . "</option>";
                                                                    }
                                                                } else {
                                                                    echo "0 results";
                                                                }
                                                                ?>
                                                            </select>
                                                        </fieldset>
                                                        
                                                        <fieldset class="form-label-group">
                                                            <input type="number" name="PhoneNumber" id="PhoneNumber" class="form-control" placeholder="رقم الهاتف" required>
                                                            <label for="PhoneNumber">رقم الهاتف </label>
                                                        </fieldset>
                                                        
                                                        <fieldset class="form-label-group">
                                                            <input type="text" name="status" id="status" class="form-control" placeholder="الحالة" required>
                                                            <label for="status">الحالة </label>
                                                        </fieldset>
                                                        <fieldset class="form-label-group">
                                                            <input type="text" name="mail" id="mail" class="form-control" placeholder="البريد الالكتروني" required>
                                                            <label for="mail">E-mail   </label>
                                                        </fieldset>
                                                    </center>
                                                </th>
                                                
                                                
                                            </tr>
                                            <tr>
                                                <th>
                                                <center>
                                                    <fieldset class="form-label-group">
                                                        <input type="date" name="BirthDate" id="BirthDate" class="form-control" placeholder="تاريخ التولد " required>
                                                        <label for="BirthDate">تاريخ التولد  </label>
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
                                            <span class="d-none d-lg-block">اضافة الطالب</span></button>
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