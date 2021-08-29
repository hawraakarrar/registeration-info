<div class="modal fade" id="update_modal<?php echo $users_data['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
        <div class="modal-content">
            <section class="todo-form">
                <form id="form-add-todo" method="post" action="edituser.php" class="todo-input">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تحديث بيانات المستخدم</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="form-group">
                            <input type="hidden" name="id" value="<?php echo $users_data['ID'] ?>" class="new-todo-item-title form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" name="Name" value="<?php echo $users_data['Name'] ?>" class="new-todo-item-title form-control" placeholder="الاسم">
                        </fieldset>

                        <div class="input-group" id="show_hide_password">

                            <input type="password" value="<?php echo $users_data['Password'] ?>" name="Password" class="new-todo-item-title form-control" placeholder="كلمه السر" ">
                            <div class=" input-group-addon">
                            <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>

                    </div>
                    <br>
                    <fieldset class="form-group">
                        <input type="text" value="<?php echo $users_data['User_Name'] ?> " name="username" class="new-todo-item-title form-control" placeholder="اسم المستخدم">
                    </fieldset>
                    <fieldset class="form-group">

                        <select name="Role" class="form-control" required>

                            <?php
                            include('../connect.php');

                            $sql = "SELECT * FROM `roles` ";
                            $result = mysqli_query($link, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $num = $row["ID"] . "<br>";
                                    $name = $row["Name"] . "<br>";
                                    if ($users_data['roleName'] == $row["Name"]) {
                                        echo "<option value='$num' selected>"   . $users_data['roleName'] . "</option>";
                                    } else {
                                        echo "<option value='$num'>"   . $name . "</option>";
                                    }
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
                    <span class="d-none d-lg-block">تعديل مستخدم</span></button>
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

<script>
    $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        });
    });
</script>