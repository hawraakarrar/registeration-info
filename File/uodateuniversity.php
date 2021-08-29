<div class="modal fade" id="update_university<?php echo $university_data['ID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
        <div class="modal-content">
            <section class="todo-form">
                <form id="form-add-todo" method="post" action="edituniversity.php" class="todo-input">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">تحديث بيانات الجامعه</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <fieldset class="form-group">
                            <input type="hidden" name="id" value="<?php echo $university_data['ID'] ?>" class="new-todo-item-title form-control">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" name="Name" value="<?php echo $university_data['Name'] ?>" class="new-todo-item-title form-control" placeholder="الاسم">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" name="Number" value="<?php echo $university_data['Number'] ?>" class="new-todo-item-title form-control" placeholder="الرقم">
                        </fieldset>
                        <fieldset class="form-group">
                            <input type="text" name="Code" value="<?php echo $university_data['CodeNumber'] ?>" class="new-todo-item-title form-control" placeholder="الكود">
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