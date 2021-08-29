<?php
session_start();
$activepage = "report-stu-count";
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
                                                        <td>تقرير اعداد الطلبة حسب الصفوف</td>
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
                                    <div class="table-responsive">
                                        <table class="table" style="border:0px solid black;">
                                            <thead>
                                                <tr>
                                                    <th>المرحلة</th>
                                                    <th>عدد الطلبة</th>
                                                   
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                        $sqll = "SELECT * FROM levels ";
                                                        $level = mysqli_query($link, $sqll);
                                                        while ($l_data =  mysqli_fetch_array($level)) { ?>
                                                    <tr>

                                                        <td><?php echo $l_data['Name'];?></td>
                                                        <?php  
                                                        $x=0;
                                                        $sqls = "SELECT * FROM stustatus where Year=$Yr and level=". $l_data['ID'] ;
                                                        $cs = mysqli_query($link, $sqls);
                                                        while ($s_data =  mysqli_fetch_array($cs)) {
                                                            $x=+1;
                                                        }
                                                        ?>
                                                        <td><?php echo $x;?></td>
                                                    </tr>
                                                    <?php }?>
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