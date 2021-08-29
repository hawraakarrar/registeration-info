<?php
session_start();
$activepage = "app-user-list";
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
                        <h4 class="card-title">جدول المهام </h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                <li><a data-action="" data-toggle="modal" data-target="#addTaskModal"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
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
                                            <th>ID</th>
                                            <th>Role Name</th>
                                            <th>Role</th>
                                            <th>Actions </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $roles = mysqli_query($link, "SELECT * from roles");

                                        $count_roles = 1;

                                        while ($roles_data =  mysqli_fetch_array($roles)) {
                                            $link_delete = 'deleterole.php?id=' . $roles_data['ID'];;
                                        ?>
                                            <tr>

                                                <th scope="row"><?php echo $count_roles; ?></th>
                                                <td><?php echo $roles_data['Name']; ?></td>
                                                <td><?php echo $roles_data['Role']; ?></td>
                                                <td class="mt-3">


                                                    <a href="<?php echo 'deleterole.php?id=' . $roles_data['ID']; ?>" class="btn btn-danger mr-1 mb-1 <?php
                                                                                                                                                        if ($roles_data['Name'] == "Admin") {
                                                                                                                                                            echo "disabled";
                                                                                                                                                        }

                                                                                                                                                        ?>">
                                                        <i class="feather icon-trash"></i>
                                                        حذف </a>


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

                <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                        <div class="modal-content">
                            <section class="todo-form">
                                <form id="form-add-todo" method="post" action="addrole.php" class="todo-input">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">اضافة مهام</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <fieldset class="form-group">
                                            <input type="text" name="Name" class="new-todo-item-title form-control" placeholder="العنوان">
                                        </fieldset>
                                        <fieldset class="form-group">
                                            <textarea name="Role" class="new-todo-item-desc form-control" rows="3" placeholder="الدور"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <button name="submit" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                                <span class="d-none d-lg-block">اضافة مهمة</span></button>
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


            </section>
            <section class="users-list-wrapper">
                <!-- users filter start -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">جدول المستخدمين</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                <li><a data-action="" data-toggle="modal" data-target="#addUserModal"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
                                <!-- <li><a data-action=""><i class="feather icon-rotate-cw users-data-filter"></i></a></li> -->
                                <!-- <li><a data-action="close"><i class="feather icon-x"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                            <div class="modal-content">
                                <section class="todo-form">
                                    <form id="form-add-todo" method="post" action="adduser.php" class="todo-input">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">اضافة مستخدم جديد</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <fieldset class="form-group">
                                                <input type="text" name="Name" class="new-todo-item-title form-control" placeholder="الاسم">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="password" name="Password" class="new-todo-item-title form-control" placeholder="كلمه السر">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <input type="text" name="username" class="new-todo-item-title form-control" placeholder="اسم المستخدم">
                                            </fieldset>
                                            <fieldset class="form-group">

                                                <select name="Role" class="form-control" required>
                                                    <option disabled selected value> الدور </option>
                                                    <?php
                                                    include('../connect.php');

                                                    $sql = "SELECT * FROM `roles` ";
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
                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button name="submit" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">اضافة مستخدم</span></button>
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
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $users = mysqli_query($link, "SELECT users.ID , users.Name,users.Password, users.User_Name, roles.Name as roleName
                                        FROM users
                                        INNER JOIN roles ON users.Role_Id=roles.ID;");

                                        $count_roles = 1;
                                        while ($users_data =  mysqli_fetch_array($users)) {
                                        ?>
                                            <tr>

                                                <th scope="row"><?php echo $count_roles; ?></th>
                                                <td><?php echo  $users_data['Name']; ?></td>
                                                <td><?php echo $users_data['roleName']; ?></td>
                                                <td>
                                                    <button type="button" data-toggle="modal" data-target="#update_modal<?php echo $users_data['ID']; ?>" class="btn btn-primary mr-1 mb-1 ">
                                                        <i class="feather icon-edit"></i>
                                                        تعديل </button>
                                                    <?php

                                                    include('uodatemodal.php');
                                                    ?>



                                                    <a href="<?php echo 'deleteuser.php?id=' . $users_data['ID']; ?>" class="btn btn-danger mr-1 mb-1 <?php
                                                                                                                                                        if ($_SESSION['name'] == $users_data['Name']) {
                                                                                                                                                            echo "disabled";
                                                                                                                                                        }
                                                                                                                                                        ?>
                                                                                                                                                                                                                    ">
                                                        <i class="feather icon-trash"></i>
                                                        حذف </a>

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


            <!-- END: Content-->
            <script>
                function addTobag() {

                    $('#update_modal').modal('show');
                }
            </script>