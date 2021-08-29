<?php
session_start();
$activepage = "app-Student-list";
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

<!-- END: Head-->

<!-- BEGIN: Body-->



<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Data list view starts -->
            <section class="users-list-wrapper2">
                <div class="card">
                    <?php
                    include('../connect.php');
                    $sql = "SELECT * FROM students where ID =" . $_GET['id'];
                    $stu = mysqli_query($link, $sql);
                    $date = '';
                    while ($stu_data =  mysqli_fetch_array($stu)) {
                        global $date;
                        $date = $stu_data['Year'];
                        $nm = $stu_data['Name'];
                        $depn = $stu_data['Department_Id'];
                        $stg = $stu_data['Stage'];
                        $id = $stu_data['ID'];

                    ?>
                        <div class="card-header">
                            <p> النتيجة النهائية للطالب للدور الاول <br>

                                اسم الطالب : <?php echo $nm; ?>
                                <br>
                                <?php $sqld = "SELECT * FROM departments where ID = $depn";
                                $dep = mysqli_query($link, $sqld);
                                while ($dep_data =  mysqli_fetch_array($dep)) {
                                ?>
                                    القسم : <?php echo $dep_data['Name'] ?>
                                <?php } ?>
                                <br>
                                <?php $sqls = "SELECT * FROM levels where ID = $stg";
                                $stgs = mysqli_query($link, $sqls);
                                while ($stg_data =  mysqli_fetch_array($stgs)) {
                                ?>
                                    المرحلة : <?php if ($stg_data['Name'] == "First") {
                                                    echo "الاولى";
                                                } else if ($stg_data['Name'] == "Second") {
                                                    echo "الثانية";
                                                } else if ($stg_data['Name'] == "Third") {
                                                    echo "الثالثه";
                                                } else if ($stg_data['Name'] == "Fourth") {
                                                    echo "الرابعة";
                                                } else {
                                                    echo "الخامسة";
                                                }

                                                ?>
                                <?php } ?>




                            </p>

                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                        </div>

                </div>


                <!-- Ag Grid users list section start -->



                <!-- users list start -->



                <!-- Ag Grid users list section end -->

            </section>

            <section id="data-list-view" class="data-list-view-header">
                <div class="card">
                    <div class="card-content p-1 text-center">
                        <h4>
                            علما ان درجه القرار لهذه السنة هي

                            <?php
                            include('../connect.php');
                            $query = "SELECT added_degree FROM finaldegree where Student_Id=" . $_GET['id'];
                            $added =  $link->query($query);
                            $remainingaddition = 0;
                            while ($addedres = $added->fetch_assoc()) {
                                $remainingaddition += intval($addedres['added_degree']);
                            }

                            $sql = "SELECT Degree FROM decisiondegree where Year_Id=" . $date;
                            $result = $link->query($sql);
                            $row = $result->fetch_assoc();
                            global $dega;
                            $dega  = $row['Degree'];
                            echo '<b>' . $row['Degree'] . '</b>';
                            echo ' و المتبقي هوة ';
                            echo '<b>' . (intval($dega) - intval($remainingaddition)) . '</b>';
                            ?>
                        </h4>
                    </div>
                </div>
            </section>
            <form method="POST" action="uploadstudentdecisiondegree.php">
                <section id="data-list-view" class="data-list-view-header">


                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>المادة</th>
                                    <th>الدرجة</th>
                                    <th> الحاله</th>
                                    <th>درجة القرار </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $sql = "SELECT materials.AName as name , finaldegree.ID as finID ,  finaldegree.Degree as Fdegree
                                   ,pursuitdegree.Degree as Mdegree
                                    FROM materials
                                    LEFT JOIN finaldegree ON  finaldegree.Material_Id= materials.ID  and finaldegree.Student_Id='$id'
                                    LEFT JOIN pursuitdegree ON  pursuitdegree.Material_Id =materials.ID and pursuitdegree.Student_Id='$id'
                                    where Department_Id = $depn && Level_Id =$stg && Course_Id=1";
                                $degree_data = mysqli_query($link, $sql);
                                $i = 0;
                                while ($degrees =  mysqli_fetch_array($degree_data)) {

                                ?>
                                    <tr>
                                        <td></td>
                                        <td class="product-name"><?php echo $degrees['name'] ?></td>
                                        <?php
                                        if ($degrees['Mdegree'] != null && $degrees['Mdegree'] != '' && $degrees['Fdegree'] != null && $degrees['Fdegree'] != '') {
                                            $dg = (int) $degrees['Mdegree'] + (int) $degrees['Fdegree'];

                                        ?>
                                            <td class="product-name"><?php echo $dg;
                                                                    } ?></td>
                                            <td class="product-name">
                                                <?php
                                                if ($dg < 50) {
                                                    $de = 50 - $dg;
                                                    echo "راسب" . " يحتاج الى ";
                                                    echo
                                                    "<b style='color : #FF0000
                                                '>" .
                                                        $de .
                                                        "</b>" .

                                                        " درجة ";
                                                } else {
                                                    echo "ناجح";
                                                }
                                                ?>

                                            </td>

                                            <td class="product-name">
                                                <?php

                                                $id = $degrees['finID'];

                                                ?>
                                                <input type="hidden" name="userID" value="<?php echo $_GET['id'];
                                                                                            include('../connect.php');
                                                                                            include('../connect.php');
                                                                                            ?>">
                                                <input type="hidden" name="total" value="<?php echo sizeof($degrees); ?>">

                                                <input type="hidden" name="finId<?php echo $i

                                                                                ?>" value="<?php echo $id;

                                                                                            ?>">
                                                <?php
                                                $i++;
                                                ?>
                                                <input type="number" name="inputDegree<?php echo $id ?>" class="new-todo-item-title form-control" placeholder="الدرجة" <?php

                                                                                                                                                                        if ($dg < 50) {
                                                                                                                                                                            echo "";
                                                                                                                                                                        } else {

                                                                                                                                                                            echo "disabled";
                                                                                                                                                                        }


                                                                                                                                                                        ?> ">

                                            </td>




                                            <td></td>

                                    </tr>
                                <?php

                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class=" add-new-data-sidebar">
                                                <div class="overlay-bg"></div>
                                                <div class="add-new-data">


                                                    <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                                        <div class="cancel-data-btn ">
                                                            <button type="submit" class="btn btn-primary add-todo-item">
                                                                <i class="d-none d-lg-block"></i>

                                                                حفظ
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
            </form>
            <!-- Data list view end -->
        <?php } ?>
        </div>
    </div>
</div>
<!-- END: Content-->