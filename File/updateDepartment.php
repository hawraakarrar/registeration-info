<div class="modal fade" id="update_Department<?php echo $department_data['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
        <div class="modal-content">
            <section class="todo-form">
                <form id="form-add-todo" method="post" action="editDepartment.php" class="todo-input">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تحديث بيانات <?php echo $department_data['Name'] ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="form-group">
                            <input type="hidden" name="id" value="<?php echo $department_data['ID'] ?>" class="new-todo-item-title form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" name="Name" value="<?php echo $department_data['Name'] ?>" class="new-todo-item-title form-control" placeholder="الاسم">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="number" name="Number" value="<?php echo $department_data['Number'] ?>" class="new-todo-item-title form-control" placeholder="الرقم">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" name="Code" value="<?php echo $department_data['CodeNumber'] ?>" class="new-todo-item-title form-control" placeholder="الكود">
                        </fieldset>
                        <fieldset class="form-group">
                            <!-- <input type="text" name="inputAssociateDeanSA" value="<?php echo $department_data['TypeOfStudy'] ?>" class="new-todo-item-title form-control" placeholder=" نوع الدراسه"> -->

                            <select name="inputTypeOfStudy" id="inputTypeOfStudy" class="form-control" required>
                                <option disabled selected value> نوع الدراسة </option>
                                <?php
                                if ($department_data['TypeOfStudy'] == "Morning") {
                                    echo '<option value="Morning" selected>صباحي</option>';
                                    echo '<option value="Evening">صباحي و مسائي</option>';
                                } else {
                                    echo '<option value="Morning" >صباحي</option>';
                                    echo '<option value="Evening" selected>صباحي و مسائي</option>';
                                }
                                ?>
                                <!-- 
                                 -->
                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <!-- <input type="text" name="inputAssociateDeanAA" value="<?php echo $department_data['TypeOfSystem'] ?>" class="new-todo-item-title form-control" placeholder=" نوع النظام "> -->
                            <select name="inputTypeOfSystem" id="inputTypeOfSystem" class="form-control" required>
                                <option disabled selected value> نوع النظام </option>
                                <?php
                                if ($department_data['TypeOfSystem'] == "courses") {
                                    echo '<option value="courses" selected>فصلي</option>';
                                    echo '<option value="Yearly">سنوي</option>';
                                } else {
                                    echo '<option value="courses" >فصلي</option>';
                                    echo '<option value="Yearly" selected> سنوي </option>';
                                }
                                ?>

                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <!-- <input type="text" name="Dean" value="<?php echo $department_data['NumberOfStage'] ?>" class="new-todo-item-title form-control" placeholder="عدد المراحل"> -->
                            <select name="inputNumberOfStage" id="inputNumberOfStage" class="form-control" required>
                                <option disabled selected value> عدد المراحل </option>
                                <?php
                                if ($department_data['NumberOfStage'] == "4") {
                                    echo '<option value="4" selected>اربع مراحل</option>';
                                    echo '<option value="5">خمس مراحل</option>';
                                    echo '<option value="6">ست مراحل</option>';
                                } else if ($department_data['NumberOfStage'] == "5") {
                                    echo '<option value="4" >اربع مراحل</option>';
                                    echo '<option value="5" selected>خمس مراحل</option>';
                                    echo '<option value="6">ست مراحل</option>';
                                } else {
                                    echo '<option value="4" >اربع مراحل</option>';
                                    echo '<option value="5" >خمس مراحل</option>';
                                    echo '<option value="6" selected>ست مراحل</option>';
                                }
                                ?>

                            </select>
                        </fieldset>

                        <fieldset class="form-group">
                            <input type="text" name="HeadOfDepartment" value="<?php echo $department_data['HeadOfDepartment'] ?>" class="new-todo-item-title form-control" placeholder=" رئيس القسم ">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="number" name="MaterialConformingDeposit" value="<?php echo $department_data['MaterialConformingDeposit'] ?>" class="new-todo-item-title form-control" placeholder="درجه القرار">

                        </fieldset>
                        <fieldset class="form-group">
                            <input type="number" name="NumberMaterialsStudentLoaded" value="<?php echo $department_data['NumberMaterialsStudentLoaded'] ?>" class="new-todo-item-title form-control" placeholder="درجه المواد المستوفيه للراسب">
                        </fieldset>


                    </div>



                    <div class="modal-footer">
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                            <button name="submit" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                <span class="d-none d-lg-block">تحديث البيانات</span></button>
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