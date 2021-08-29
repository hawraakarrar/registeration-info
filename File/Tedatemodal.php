<div class="modal fade" id="update_teacher<?php echo $teachers_data['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
        <div class="modal-content">
            <section class="todo-form">
                <form id="form-add-todo" method="post" action="editTeacher.php" class="todo-input">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تحديث بيانات الاساتذ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="form-group">
                            <input type="hidden" value="<?php echo $teachers_data['ID'] ?> " name="id" class="new-todo-item-title form-control" placeholder="الاسم بالعربي">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" value="<?php echo $teachers_data['AName'] ?> " name="AName" class="new-todo-item-title form-control" placeholder="الاسم بالعربي">
                        </fieldset>

                        <fieldset class="form-group">
                            <input type="text" value="<?php echo $teachers_data['EName'] ?> " name="EName" class="new-todo-item-title form-control" placeholder="الاسم بالانكليزي ">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" value="<?php echo $teachers_data['GeneralSpecialty'] ?> " name="GeneralSpecialty" class="new-todo-item-title form-control" placeholder="الاهتصاص العام">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" value="<?php echo $teachers_data['Specialization'] ?> " name="Specialization" class="new-todo-item-title form-control" placeholder="الاختصاص الدقيق">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" value="<?php

                                                        echo $teachers_data['BirthDate'];

                                                        ?> " name="BirthDate" class="new-todo-item-title form-control" placeholder=" تاريخ الولادة ">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" value="<?php echo $teachers_data['Plase'] ?> " name="Plase" class="new-todo-item-title form-control" placeholder="الموقع">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" value="<?php echo $teachers_data['PhoneNumber'] ?> " name="PhoneNumber" class="new-todo-item-title form-control" placeholder="رقم الهاتف">
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="input-group" id="show_hide_password">

                                <input type="password" value="<?php echo $teachers_data['Password'] ?>" name="Password" class="new-todo-item-title form-control" placeholder="كلمه السر" ">
<div class=" input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                            </div>

                        </fieldset>
                        <fieldset class="form-group">

                            <select name="Department_Id" class="form-control" required>
                                <?php
                                include('../connect.php');

                                $sql = "SELECT * FROM `departments` ";
                                $result = mysqli_query($link, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $num = $row["ID"] . "<br>";
                                        $name = $row["Name"] . "<br>";
                                        if ($teacher_data['departmentName'] == $row["Name"]) {
                                            echo "<option value='$num' selected>"   . $teachers_data['departmentName'] . "</option>";
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
                                <span class="d-none d-lg-block">تعديل بيانات الاستاذ</span></button>
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