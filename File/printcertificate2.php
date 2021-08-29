<?php

require_once  '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'autoArabic' => true, 'format' => 'A4']);
$stylesheet = file_get_contents('../assets/css/print.css');
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
$write = '<html dir="rtl"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style>
body {margin:0;font-size:16px; padding: 0;}
img {
  height:125px;
  width:125px;
  position: absolute;
  top: 8px;
  left: 0px;
}
table {
  width: 100%;
}
th, td {
  border-bottom: 1px solid #000;
}
.styled-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  font-family: sans-serif;
  min-width: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
  border-bottom: 1px solid #dddddd;
}
.styled-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}
.styled-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
.patient{
  float : left
}
</style></head>';
$write .= '<body>';
$write .= '
  

';


include('../connect.php');
$sql = "SELECT * FROM students where ID =" . $_GET['id'];
$stu = mysqli_query($link, $sql);
while ($stu_data =  mysqli_fetch_array($stu)) {
  $nm = $stu_data['Name'];
  $depn = $stu_data['Department_Id'];
  $stg = $stu_data['Stage'];
  $id = $stu_data['ID'];


  $write .= '

  <div class="table-responsive">
  <table class="table data-list-view">
      <thead>
          <tr>
              <th></th>
              <th>النتيجة النهائية للطالب للدور الاول </th>
              <th><img  src="../app-assets/images/BIClogo.jpg"></th>
              <th></th>
          </tr>
      </thead>
      <tbody>
      </tbody>
      
    </table>
        
        
          
        
      
    <p> 
            اسم الطالب :    ';

  $write .=   $nm;
  $write .= '
            <br>';

  $sqld = "SELECT * FROM departments where ID = $depn";
  $dep = mysqli_query($link, $sqld);
  while ($dep_data =  mysqli_fetch_array($dep)) {
?>
    <?php
    $write .= 'القسم :';

    $write .= $dep_data['Name']

    ?>
  <?php } ?>
  <?php
  $write .= '<br>';

  $sqly = "SELECT years.Name as yearn
   FROM years
   where  years.ID=3";
  $sy = mysqli_query($link, $sqly);
  while ($y_data =  mysqli_fetch_array($sy)) {
?>
    <?php
    $write .= 'السنة :';

    $write .= $y_data['yearn']

    ?>
  <?php } ?>
  <?php
  $write .= '<br>';
  ?>
  <?php $sqls = "SELECT * FROM levels where ID = $stg";
  $stgs = mysqli_query($link, $sqls);
  while ($stg_data =  mysqli_fetch_array($stgs)) {
  ?>
    <?php
    $write .= 'المرحلة :';
    ?>


    <?php if ($stg_data['Name'] == "First") {
      $write .= 'الاولى';
    } else if ($stg_data['Name'] == "Second") {
      $write .= 'الثانية';
    } else if ($stg_data['Name'] == "Third") {
      $write .= 'الثالثه';
    } else if ($stg_data['Name'] == "Fourth") {
      $write .= 'الرابعة';
    } else {
      $write .= 'الخامسة';
    }

    ?>
<?php }
} ?>



<?php
$write .= '
        </p>

        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

';

$write .= '

<div class="table-responsive">
<table class="table data-list-view">
    <thead>
        <tr>
            <th></th>
            <th>المادة</th>
            <th>التقدير</th>
            <th></th>
        </tr>
    </thead>
    <tbody>';

$sql = "SELECT materials.AName as name , finaldegree.Degree as Fdegree
               ,pursuitdegree.Degree as Mdegree
                FROM materials
                LEFT JOIN finaldegree ON  finaldegree.Material_Id= materials.ID  and finaldegree.Student_Id='$id'
                LEFT JOIN pursuitdegree ON  pursuitdegree.Material_Id =materials.ID and pursuitdegree.Student_Id='$id'
                where Department_Id = $depn && Level_Id =$stg && Course_Id=2";
$degree_data = mysqli_query($link, $sql);
while ($degrees =  mysqli_fetch_array($degree_data)) {
?>
  <?php
  $write .= '
  <tr>
    <td></td>
    <td class="product-name">
      ';

  $write .= $degrees['name'];
  $write .= '
    <td>

      <div class="chip-body">
        <div class="chip-text">
         ';
  if ($degrees['Mdegree'] != null && $degrees['Mdegree'] != '' && $degrees['Fdegree'] != null && $degrees['Fdegree'] != '') {
    $dg = (int) $degrees['Mdegree'] + (int) $degrees['Fdegree'];
    switch ($dg) {
      case $dg < 50:
  ?>
        <?php
        $write .= '
  <h7 style="color:white; background-color:red; height: 25px; width: 55px; border-radius: 50%; display: inline-block;">
  
          <center>';
        ?>

        <?php
        $write .= 'راسب </center>';

        ?>

  <?php
        break;
      case $dg >= 50  && $dg < 60:
        $write .= 'مقبول </center>';

        break;
      case $dg >= 60  && $dg < 70:
        $write .= 'متوسط </center>';

        break;
      case $dg >= 70  && $dg < 80:
        $write .= 'جيد </center>';

        break;
      case $dg >= 80  && $dg < 90:
        $write .= ' جيد جدا</center>';
        break;
      case $dg >= 90  && $dg < 100:
        $write .= 'امتياز </center>';

        break;
      default:
        echo "لا يوجد درجة ";
    }
  }
  ?>

  <?php
  $write .= '
  </div>

  </div>
  </td>
  <td></td>

  </tr>';
  ?>
<?php } ?>
<?php
$write .= '
</tbody>
</table> ';
?>

<?php
$write .= '
</body>

</html>
';
$mpdf->WriteHTML($write);
$mpdf->Output();
