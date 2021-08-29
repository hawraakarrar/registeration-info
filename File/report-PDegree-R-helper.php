<?php 

include('../connect.php');

$val= $_GET["value"];

$val_M = mysqli_real_escape_string($conn, $val);

$sql="SELECT StuID,MidDegree FROM degree WHERE MatID='$val_M'";
$result= mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0) {

	echo "<table>
            ";

	while ($rows= mysqli_fetch_assoc($result)) {?>
          <tr>
          <?php 
                $stu=$rows["StuID"];
                $sqls="SELECT Name FROM students WHERE ID='$stu'";
                $results= mysqli_query($conn, $sqls);
                if (mysqli_num_rows($results)>0) {
                    while ($rowss= mysqli_fetch_assoc($results)) {
                        ?><td><?php echo $rowss["Name"]; ?></td><?php
                            
                    }}
                ?>
		    
            <td><?php echo $rows["MidDegree"];?></td>
          </tr>
	<?php }

	echo "  
            </table>";
	
} else {
	echo "<table>
            <tr>
                <th> Drink</th>
                <th>cost</th>
            </tr>
            
        </table>";
}


?>