<?php


//export.php  
include('../connect.php');
$output = '';

$query = "SELECT * FROM studentview";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
     $output .= '
   <table class="table" style="
   border: 1px solid black;

   
   " bordered="1">  
                    <tr style="
                    border: 1px solid black;
                 
                    
                    ">  
                         <th>الاسم</th> 
                         <th>القسم</th>  
                         <th>الرقم الامتحاني</th>   
                         <th> الجنس </th>
                         <th>تاريخ التولد</th>  
                         <th> رقم الهاتف </th>
                         <th>الحاله </th>  
                         <th>ايميل  </th> 
                         <th>   سنة القبول  </th>

                  
                    </tr>
  ';
     while ($row = mysqli_fetch_array($result)) {
          $year=$row["AdmissionYear"];
          $queryy = "SELECT * FROM years where ID=" . $year;
          $resulty = mysqli_query($link, $queryy);
          while ($y_data =  mysqli_fetch_array($resulty)) {
          $output .= '
    <tr style="
    border: 1px solid black;
 
    
    ">  
                         <td>' . $row["Name"] . '</td>  
                         <td>'.  $row["depname"].'</td>
                         <td>' . $row["Number"] . '</td>  
                         <td>' . $row["Gender"] . '</td>
                         <td>' . $row["BirthDate"] . '</td>
                         <td>' . $row["PhoneNumber"] . '</td>
                         <td>' . $row["status"] . '</td>
                         <td>' . $row["mail"] . '</td>
                         <td>' . $y_data["Name"] . '</td>
                         				
                    </tr>
   ';
     }}
     $output .= '</table>';
     header('Content-Type: application/xls');
     header('Content-Disposition: attachment; filename=students_info.xls');
     echo $output;
}
