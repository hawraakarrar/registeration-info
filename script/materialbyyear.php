<?php

// Create Table
include 'connectTable.php';


$materialbyyear = "CREATE TABLE MaterialByYear (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Material_Id INT(6) UNSIGNED, 
    Year_Id INT(6) UNSIGNED, 
    FOREIGN KEY (Material_Id) REFERENCES Materials(ID),
    FOREIGN KEY (Year_Id) REFERENCES Years(ID)
    )";
if ($connT->query($materialbyyear) === TRUE) {
    echo "done";
} else {
    echo $materialbyyear;
}
