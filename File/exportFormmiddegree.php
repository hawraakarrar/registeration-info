<?php


//export.php  
include('../connect.php');


$output = '
<table style="
border: 1px solid black;


" bordered="1">  
                 <tr style="
                 border: 1px solid black;
                 ">  
                      <th>الاسم</th>  
                      <th>القسم</th>  
                      <th>المرحله</th>
                      <th>الرقم الامتحاني</th>   
                      <th>الجنس</th>
                      <th>تاريخ التولد</th>  
                      <th>العنوان</th>  
                      <th>قناه القبول</th>
                      <th>الفرع</th>   
                      <th>رقم الهاتف</th>
                      <th>الحاله</th>
                      <th> </th>
                 </tr>
';

    $output .= '</table>';   
    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=students_middegree.xls');
    echo $output;

