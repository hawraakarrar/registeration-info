<?php
session_start();
$activepage = "report-PDegree";
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


    td:hover {
        background-color: white;
    }

    th {
        margin: 15px;
        padding: 10px;
    }







    .td {
        margin-top: 10px !important;
        margin-bottom: 10px !important;
    }

    th {
        margin-bottom: 10px !important;
    }
</style>

<!-- $stgs = mysqli_query($link, $sqls);
                            while ($stgs_data =  mysqli_fetch_array($stgs)) {
                            ?>
-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section id="list-group-tabs" style="display:show">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-header">
                                    <div class="table-responsive">
                                    <?php
                                        include('../connect.php');
                                        $dep=(int)$_POST['dep'];
                                        $Yr=(int)$_POST['year'];
                                        $lv=(int)$_POST['level'];
                                        $sqld = "SELECT * FROM departments where ID = " . $dep;
                                        $depr = mysqli_query($link, $sqld);
                                        while ($dep_data =  mysqli_fetch_array($depr)) {
                                            $DN = $dep_data['Name'];
                                            $col=$dep_data['College_Id'];
                                            $sqlc = "SELECT * FROM colleges  where ID =" . $col;
                                            $colr = mysqli_query($link, $sqlc);
                                            while ($col_data =  mysqli_fetch_array($colr)) {
                                                $CN = $col_data['Name'];
                                                $unv=$col_data['University_Id'];
                                                $sqlu = "SELECT * FROM university  where ID =" . $unv;
                                                $unvr = mysqli_query($link, $sqlu);
                                                while ($unv_data =  mysqli_fetch_array($unvr)) {
                                                    $UN = $unv_data['Name'];

                                            
                                        ?>
                                        <table class="table" style="border:0px solid black;">
                                        
                                            <tbody>
                                                    <tr>
                                                        <td> <?php echo $UN;  ?></td>
                                                        <td></td>
                                                        <?php
                                                        $sqly = "SELECT * FROM years where ID = " . $Yr;
                                                        $yrr = mysqli_query($link, $sqly);
                                                        while ($yr_data =  mysqli_fetch_array($yrr)) {?>
                                                        <td>    لعام     <?php echo $yr_data['Name'];?></td>
                                                        <?php }?>
                                                    </tr>
                                                    <tr>
                                                        <td> <?php echo $CN;  ?></td>
                                                        <td></td>
                                                        <td>اللجنة الامتحانية</td>
                                                    </tr>
                                                    <tr>
                                                        <td>قسم <?php echo $DN;  ?></td>
                                                        <td></td>
                                                        <td>تقرير سعيات الطلبة  </td>
                                                    </tr>
                                            </tbody>
                                        </table>

                                        <?php 
}}}
                                        ?>
                                    </div>
                                </div>
                            <br>

                            <br>


                                <div class="card-body">
                                    <select name="MatID" id="MatID" onchange="my_fun(this.value);" class="form-control" required>
                                        <option disabled selected value>  المادة </option>
                                        <?php
                                        include('../connect.php');
                                        $sqlms = "SELECT * FROM `materialbyyear` where Year_Id=$Yr ";
                                        $mats = mysqli_query($link, $sqlms);
                                        if (mysqli_num_rows($mats) > 0) {
                                            // output data of each row
                                            while ($matsr = mysqli_fetch_assoc($mats)) {
                                                $matid=$matsr["Material_Id"];
                                            $sqlm = "SELECT * FROM `materials` where ID=$matid and Level_Id=$lv and Department_Id=$dep";
                                            $mat = mysqli_query($link, $sqlm);
                                            if (mysqli_num_rows($mat) > 0) {
                                                // output data of each row
                                                while ($matr = mysqli_fetch_assoc($mat)) {
                                                    $num = $matr["ID"] . "<br>";
                                                    $name = $matr["AName"] . "<br>";
                                                

                                                echo "<option value='$matid'>" . $name . "</option>";
                                            }
                                        } else {
                                            echo "0 results";
                                        }}}
                                        ?>
                                    </select>
                                    <br>
                                    <br>
                                    
                                    <div class="table-responsive">
                                        <table id="poll" class="table" style="border:0px solid black;">
                                            <thead>
                                                <tr>
                                                    <th>ت</th>
                                                    <th>الطالب</th>
                                                    <th>الدرجة</th>
                                                   
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                    <tr>
                                                        <td></td> 
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                  
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>







        </div>

        </section>

<script>
	


    function my_fun(str) {
    
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else{
            xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
        }
    
        xmlhttp.onreadystatechange= function(){
            if (this.readyState==4 && this.status==200) {
                document.getElementById('poll').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET","helper.php?value="+str, true);
        xmlhttp.send();
    
    }
    
    </script>
    