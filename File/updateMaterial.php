<div class="modal fade" id="update_Material<?php echo $maty_data['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
        <div class="modal-content">
            <section class="todo-form">
                <form id="form-add-todo" method="post" action="editMaterial.php" class="todo-input">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> تعديل مادة

                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    $MyID=$maty_data['ID'];
                    $sqlmy="SELECT * FROM materialbyyear WHERE ID=$MyID";
                    $maty= mysqli_query($link, $sqlmy);
                    while ($maty_data =  mysqli_fetch_array($maty)) {
                        $matID=$maty_data['Material_Id'];
                        $sqlm="SELECT *FROM materials Where ID=$matID";
                        $material = mysqli_query($link, $sqlm);
                        while ($material_data =  mysqli_fetch_array($material)) {
                    
                    ?>
                    <div class="modal-body">
                        <fieldset class="form-label-group">
                            <input type="hidden" name="myID" id="myID" class="form-control"  value="<?php echo $maty_data['ID'] ?>" required>
                            
                        </fieldset>
                        <fieldset class="form-label-group">
                            <input type="hidden" name="ID" id="ID" class="form-control"  value="<?php echo $material_data['ID'] ?>" required>
                        </fieldset>
                        <table class="tablesorter table">       
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <center>  
                                            <fieldset class="form-label-group">
                                                <input type="text" name="inputAName" id="inputAName" class="form-control" placeholder="اسم المادة باللغة العربية" value="<?php echo $material_data['AName'] ?>" required>
                                                <label for="inputAName"> اسم المادة باللغة العربية </label>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <input type="text" name="inputEName" id="inputEName" class="form-control" placeholder="اسم المادة باللغة الانكليزية " value="<?php echo $material_data['EName'] ?>" required>
                                                <label for="inputEName"> اسم المادة باللغة الانكليزية </label>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <select name="inputyear" id="inputyear" class="form-control" required>
                                                    <option disabled  value> السنة الدراسيه </option>

                                                    <?php
                                                    include('../connect.php');

                                                    $sql = "SELECT * FROM `years` ";
                                                    $result = mysqli_query($link, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $num = $row["ID"] . "<br>";
                                                            $name = $row["Name"] . "<br>";
                                                            if ($maty_data['Year_Id'] == $row["ID"]) {
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
                                                <input type="number" name="inputCodeNumber" id="inputCodeNumber" class="form-control" value="<?php echo $material_data['CodeNumber'] ?>" placeholder="  الرقم السري للمادة" required>
                                                <label for="inputCodeNumber"> الرقم السري للمادة </label>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <input type="number" name="inputNumberUnit" id="inputNumberUnit" value="<?php echo $material_data['NumberUnit'] ?>" class="form-control" placeholder="عدد الوحدات " required>
                                                <label for="inputNumberUnit"> عدد الوحدات </label>
                                            </fieldset>
                                        </center>
                                    </th>
                                    <th scope="row">
                                        <center>
                                            <fieldset class="form-label-group">
                                                <input type="number" name="inputHighestDegreeCourse" value="<?php echo $material_data['HighestDegreeCourse'] ?>" id="inputHighestDegreeCourse" class="form-control" placeholder="اعلى درجة للسعي" required>
                                                <label for="inputHighestDegreeCourse"> اعلى درجة للسعي </label>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <select name="inputDepartment" id="inputDepartment" class="form-control" required>
                                                <option disabled  value> القسم </option>  

                                                    <?php
                                                    include('../connect.php');

                                                    $sql = "SELECT * FROM `departments` ";
                                                    $result = mysqli_query($link, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $num = $row["ID"] . "<br>";
                                                            $name = $row["Name"] . "<br>";
                                                            if ($material_data['Department_Id']  == $row["ID"]) {
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
                                                <select name="inputTeacher" id="inputTeacher" class="form-control" required>
                                                    <option disabled  value> الاستاذ </option>
                                                    <?php
                                                    include('../connect.php');

                                                    $sql = "SELECT * FROM `teachers` ";
                                                    $result = mysqli_query($link, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $num = $row["ID"] . "<br>";
                                                            $name = $row["AName"] . "<br>";
                                                            if ($material_data['Teacher_Id'] == $row["ID"]) {
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
                                                </select>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <select name="inputCourse" id="inputCourse" class="form-control" required>
                                                    <option disabled  value> Course </option>
                                                    <?php
                                                    include('../connect.php');

                                                    $sql = "SELECT * FROM `courses` ";
                                                    $result = mysqli_query($link, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $num = $row["ID"] . "<br>";
                                                            $name = $row["Name"] . "<br>";
                                                            if ($material_data['Course_Id'] == $row["ID"]) {
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
                                                </select>
                                            </fieldset>
                                            <fieldset class="form-label-group">
                                                <select name="Level" id="Level" class="form-control" required>
                                                    <option disabled  value> المرحلة </option>
                                                    <?php
                                                    include('../connect.php');

                                                    $sql = "SELECT * FROM `levels` ";
                                                    $result = mysqli_query($link, $sql);
                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            $num = $row["ID"] . "<br>";
                                                            $name = $row["Name"] . "<br>";
                                                            if ($material_data['Level_Id'] == $row["ID"]) {
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
                                </tr>
                            </tbody>
                        </table>
                        
                        
                    </div>

                    
                    <div class="modal-footer">
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                            <button name="submit" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                <span class="d-none d-lg-block">تعديل مادة</span></button>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left mb-0">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                <span class="d-none d-lg-block">الغاء</span></button>
                        </fieldset>
                    </div>
                    <?php }} ?>
                </form>
            </section>
        </div>
    </div>
</div>