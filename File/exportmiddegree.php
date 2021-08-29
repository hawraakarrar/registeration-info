<?php


//export.php  
include('../connect.php');
$material=$_GET['id'];
$sqM="SELECT * from materials where ID=$material";
$material = mysqli_query($link, $sqM);
while ($material_data =  mysqli_fetch_array($material)) {
        $Mname=$material_data["AName"];
        $output = '';
        $query = "SELECT pursuitdegree.Degree as degree, students.Name as name,years.Name as year
        FROM pursuitdegree
        LEFT JOIN students ON pursuitdegree.Student_Id=students.ID 
        LEFT JOIN years ON pursuitdegree.Year_Id=years.ID 
        where Material_Id=" . $_GET['id'];

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
                                <th>الدرجة</th>  
                                <th>  السنة </th>
                                <th>المادة</th>   
                                
                        </tr>
        ';
        while ($row = mysqli_fetch_array($result)) {
                $output .= '
        <tr style="
        border: 1px solid black;
        
        
        ">  
                                <td>' . $row["name"] . '</td>  
                                <td>' . $row["degree"] . '</td>  
                                <td>' . $row["year"] . '</td>  
                                <td>' . $Mname. '</td>  
                                
                        </tr>
        ';
        }
        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=studentsmiddegree.xls');
        echo $output;
        }}