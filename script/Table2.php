<?php
include 'DB.php';
// Create Table
include 'connectTable.php';


$upload = "CREATE TABLE upload (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    StudentID INT(6) UNSIGNED,
    MaterialsID INT(6) UNSIGNED,
    YearID INT(6) UNSIGNED,
    FOREIGN KEY (StudentID) REFERENCES students(ID),
    FOREIGN KEY (MaterialsID) REFERENCES materials(ID),
    FOREIGN KEY (YearID) REFERENCES years(ID)
    )";

if ($connT->query($upload) === TRUE) {
}
