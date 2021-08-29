<?php
session_start();
$activepage = "app-user-university";
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
                        <h4 class="card-title"> الجامعة  </h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                  
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
                                            <th>الاسم</th>
                                            <th>الرقم</th>
                                            <th>الكود</th>
                                            <th>الاحداث </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $university = mysqli_query($link, "SELECT * from university");

                                        $count_roles = 1;

                                        while ($university_data =  mysqli_fetch_array($university)) {
                                            
                                        ?>
                                            <tr>

                                                <th scope="row"><?php echo $university_data['Name']; ?></th>
                                                <td><?php echo $university_data['Number']; ?></td>
                                                <td><?php echo $university_data['CodeNumber']; ?></td>
                                                <td class="mt-3">
                                                <button type="button" data-toggle="modal" data-target="#update_university<?php echo $university_data['ID']; ?>" class="btn btn-primary mr-1 mb-1 ">
                                                        <i class="feather icon-edit"></i>
                                                        تعديل </button>

                                                        <?php

include('uodateuniversity.php');
?>

                                                </td>

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
           