<?php
session_start();
$activepage = "app-Year";
include('MainPage.php');
?>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
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
                        <p class="card-title"> <?php echo "السنوات الدراسية <br/><br/> حدد سنة قبل البدء" ;?> </p>
                        
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                <li><a data-action="" data-toggle="modal" data-target="#addCollegeModal"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
                                <li><a data-action="" data-toggle="modal" data-target="#selectyearModal"><i class="feather icon-check-square users-data-filter"></i></a> <?php include('SelectYear.php');?></li>
                                <!-- <li><a data-action="close"><i class="feather icon-x"></i></a></li> -->
                            </ul>
                        </div>
                        
                    </div>
                    
                        
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>السنة</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $university = mysqli_query($link, "SELECT * from years");

                                        $count_roles = 1;

                                        while ($university_data =  mysqli_fetch_array($university)) {

                                        ?>
                                            <tr>

                                                <td scope="row"><?php echo $university_data['Name']; ?></td>
                                                

                                            
                                            
                                            <?php 
                                            
                                            // $year=$_SESSION['year'];
                                            //     $y = mysqli_query($link, "SELECT * from years where Name=$year");
                                            //     while ($y_data =  mysqli_fetch_array($y)) {
                                                $year=(int)$_SESSION['year'];
                                                $yeart=(int)$university_data['Name'];
                                                if($year==$yeart){
                                                ?>
                                            
                                                <td><h1 style="color:red;"><?php echo "*"; ?></h1></td>
                                                    
                                                   
                                                    
                                                    <?php
                                                }
                                                 ?>
                                                

                                            </tr>
                                        <?php
                                            $count_roles++;
                                        }




                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




            </section>

            <div class="modal fade" id="addCollegeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                    <div class="modal-content">
                        <section class="todo-form">
                            <form id="form-add-todo" method="post" action="InsertYear.php" class="todo-input">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">اضافة سنة دراسية</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <fieldset class="form-group">
                                        <input type="hidden" name="page" class="new-todo-item-title form-control" Value="app-user-college">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="text" name="inputName" class="new-todo-item-title form-control" placeholder="الاسم">
                                    </fieldset>
                                </div>
                                <div class="modal-footer">
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <button name="Save" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                            <span class="d-none d-lg-block">اضافة سنة دراسية</span></button>
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
           