<div class="modal fade" id="update_Stu<?php echo $student_data['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
        <div class="modal-content">
            <section class="todo-form">
                <form id="form-add-todo" method="post" action="editStudent.php" class="todo-input">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> تعديل معلومات الطالب

                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <fieldset class="form-group">
                                            <input type="hidden" name="ID" id="ID" class="form-control"  value="<?php echo $student_data['ID'] ?>" required>
                                        </fieldset>
                    <table class="tablesorter table">            
                        <tbody>
                            <tr>
                                <th scope="row">
                                    
                                        
                                        <fieldset class="form-label-group">
                                            <input type="text" name="inputName" id="inputName" class="form-control" placeholder="اسم الطالب" value="<?php echo $student_data['Name'] ?>" required>
                                            <label for="inputName">اسم الطالب </label>
                                        </fieldset>
                                        <fieldset class="form-label-group">
                                            <input type="number" name="Number" id="Number" class="form-control" placeholder="الرقم الامتحاني " value="<?php echo $student_data['Number'] ?>" required>
                                            <label for="Number">رقم الطالب  </label>
                                        </fieldset>
                                        <fieldset class="form-label-group">
                                            <input type="date" name="BirthDate" id="BirthDate" class="form-control" placeholder="تاريخ التولد" value="<?php echo $student_data['BirthDate'] ?>" required>
                                            <label for="BirthDate">تاريخ التولد  </label>
                                        </fieldset>
                                        
                                        <fieldset class="form-label-group">
                                        
                                            <select name="Gender" id="Gender" class="form-control" required>
                                                <option disabled  value>  الجنس  </option>
                                                    <?php
                                                            if ( $student_data['Gender']  == "انثى") {
                                                                echo "<option value='F' selected>انثى</option>";
                                                                echo "<option value='M' >ذكر</option>";
                                                            } else {
                                                                echo "<option value='M' selected>ذكر</option>";
                                                                echo "<option value='F' >انثى</option>";
                                                            }
                                                    ?>
                                            </select> 
                                                       
                                        </fieldset>
                                        
                                  
                                </th>
                                
                                <th scope="row">
                                    <center>
                                        <fieldset class="form-label-group">
                                            <select name="inputDepartment" id="inputDepartment" class="form-control" required>
                                                <option disabled  value>  القسم  </option>
                                                <?php
                                                include('../connect.php');

                                                $sql = "SELECT * FROM `departments` ";
                                                $result = mysqli_query($link, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $num = $row["ID"] ;
                                                        $name = $row["Name"] ;
                                                        if ($dep_data['ID']  == $row["ID"]) {
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
                                        
                                        <fieldset class="form-label-group">
                                        
                                            <select name="aYear" id="aYear" class="form-control" required>
                                                <option disabled  value>  سنة القبول </option>
                                                <?php
                                                include('../connect.php');

                                                $sql = "SELECT * FROM `years` ";
                                                $result = mysqli_query($link, $sql);
                                                if (mysqli_num_rows($result) > 0) {
                                                    // output data of each row
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $num = $row["ID"] ;
                                                        $name = $row["Name"];
                                                        if ($student_data['Year'] == $row["ID"]) {
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
                                        <fieldset class="form-label-group">
                                            <input type="text" name="status" value="<?php echo $student_data['status']?>" id="status" class="form-control" placeholder="الحالة" required>
                                            <label for="status">الحالة </label>
                                        </fieldset>    
                                        <fieldset class="form-label-group">
                                            <input type="text" name="mail" id="mail" value="<?php echo $student_data['mail'] ?>" class="form-control" placeholder="البريد الالكتروني  " required>
                                            <label for="mail">E-mail   </label>
                                        </fieldset>
                       
                                    </center>
                                </th>
                            </tr> 
                         
                            <tr>
                                
                                <th>
                                
                                    <fieldset class="form-label-group">
                                        <input type="number" name="PhoneNumber" id="PhoneNumber" value="<?php echo $student_data['PhoneNumber'] ?>" class="form-control" placeholder="رقم الهاتف " >
                                        <label for="PhoneNumber">رقم الهاتف </label>
                                    </fieldset>
                                
                                </th>
                            </tr>
                        </tbody>
                    </table>
                        
                      
                        
                        
                        
                    </div>


                    <div class="modal-footer">
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                            <button name="Save" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                <span class="d-none d-lg-block">تعديل </span></button>
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