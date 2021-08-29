<?php
  include 'DB.php';
  // Create Table
  include 'connectTable.php'; 

//Create Roles Table
  $ROLES = "CREATE TABLE Roles (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Role VARCHAR(50) NOT NULL
    )";
    if ($connT->query($ROLES) === TRUE) {}

    //Create Users Table
  $USERS = "CREATE TABLE Users (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL,
    User_Name VARCHAR(50) NOT NULL,
    Role_Id INT(6) UNSIGNED, 
    FOREIGN KEY (Role_Id) REFERENCES Roles(ID)
    )";
    if ($connT->query($USERS) === TRUE) {}


    $addrole = "INSERT INTO Roles (Name, Role)
            VALUES ('Admin', 'manage all page')";
    if ($connT->query($addrole) === TRUE) {}
    $x="1234";
    $password = md5($x);
    $adduser = "INSERT INTO Users (Name, Password, User_Name,Role_Id)
            VALUES ('Admin', '$password', 'Admin',1)";
    if ($connT->query($adduser) === TRUE) {}

    //Create Logs Table
  $LOGS = "CREATE TABLE Logs (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Time VARCHAR(30) NOT NULL,
    Date VARCHAR(30) NOT NULL,
    Operation VARCHAR(50) NOT NULL,
    Page VARCHAR(255) NOT NULL,
    User_Id INT(6) UNSIGNED, 
    FOREIGN KEY (User_Id) REFERENCES Users(ID)
    )";
    if ($connT->query($LOGS) === TRUE) {}  
$date=date("Y/m/d");
$time=date("h:i:sa");
  $addlog = "INSERT INTO Logs (Time, Date, Operation,Page,User_Id)
          VALUES ('$time','$date','create database', 'create.html',1)";
  if ($connT->query($addlog) === TRUE) {}

//Create Universitys Table
  $UNIVERSITY = "CREATE TABLE University (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Number VARCHAR(30) NOT NULL,
    CodeNumber INT(6) NOT NULL
    )"; 
    if ($connT->query($UNIVERSITY) === TRUE) {}  

//Create Colleges Table    
  $COLLEGES = "CREATE TABLE Colleges (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Number VARCHAR(30) NOT NULL,
    CodeNumber INT(6) NOT NULL,
    AssociateDeanSA VARCHAR(50) NOT NULL,
    AssociateDeanAA VARCHAR(50) NOT NULL,
    Dean VARCHAR(50) NOT NULL,
    University_Id INT(6) UNSIGNED, 
    FOREIGN KEY (University_Id) REFERENCES University(ID)
    )";
       
    if ($connT->query($COLLEGES) === TRUE) {}    

//Create Departments Table
  $DEPARTMENTS = "CREATE TABLE Departments (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Number VARCHAR(30) NOT NULL,
    CodeNumber VARCHAR(30) NOT NULL,
    TypeOfStudy VARCHAR(50) NOT NULL,
    TypeOfSystem VARCHAR(50) NOT NULL,
    NumberOfStage VARCHAR(50) NOT NULL,
    HeadOfDepartment VARCHAR(50) NOT NULL,
    MaterialConformingDeposit VARCHAR(50) NOT NULL,
    NumberMaterialsStudentLoaded VARCHAR(50) NOT NULL,
    College_Id INT(6) UNSIGNED, 
    FOREIGN KEY (College_Id) REFERENCES Colleges(ID)
    )";
   
    if ($connT->query($DEPARTMENTS) === TRUE) {} 

 

//Create Courses Table    
  $COURSES = "CREATE TABLE Courses (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL
    )";
       
    if ($connT->query($COURSES) === TRUE) {}
    $Cor = array("First", "Second");
    for($x=0;$x<=1;$x++){
      $sql1 = "INSERT INTO Courses (Name)VALUES ('$Cor[$x]')";
      if ($connT->query($sql1) === TRUE) {}
    }
//Create Levels Table
  $LEVELS = "CREATE TABLE Levels (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL
    )";
         
    if ($connT->query($LEVELS) === TRUE) {}
    $levels = array("First", "Second", "Third","Fourth", "Fifth", "Sixth");
      for($x=0;$x<=5;$x++){
        $sql1 = "INSERT INTO levels (Name)VALUES ('$levels[$x]')";
        if ($connT->query($sql1) === TRUE) {}
      }
    
    
    // $addLevel = "INSERT INTO Levels (Name)
    //     VALUES ('Admin')";
    // if ($connT->query($adduser) === TRUE) {}
//Create Teachers Table    
  $TEACHERS = "CREATE TABLE Teachers (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    AName VARCHAR(30) NOT NULL,
    EName VARCHAR(30) NOT NULL,
    GeneralSpecialty VARCHAR(30) NOT NULL,
    Specialization VARCHAR(30) NOT NULL,
    BirthDate VARCHAR(50) NOT NULL,
    Plase VARCHAR(50) NOT NULL,
    PhoneNumber VARCHAR(50) NOT NULL,
    Password VARCHAR(50) NOT NULL,
    Department_Id INT(6) UNSIGNED, 
    FOREIGN KEY (Department_Id) REFERENCES Departments(ID)
    )";
       
    if ($connT->query($TEACHERS) === TRUE) {} 

//Create Materials Table
  $MATERIALS = "CREATE TABLE Materials (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    AName VARCHAR(30) NOT NULL,
    EName VARCHAR(30) NOT NULL,
    CodeNumber VARCHAR(30) NOT NULL,
    NumberUnit VARCHAR(30) NOT NULL,
    HighestDegreeCourse VARCHAR(50) NOT NULL,
    Department_Id INT(6) UNSIGNED, 
    Teacher_Id INT(6) UNSIGNED, 
    Course_Id INT(6) UNSIGNED, 
    Level_Id INT(6) UNSIGNED, 
    FOREIGN KEY (Department_Id) REFERENCES Departments(ID),
    FOREIGN KEY (Teacher_Id) REFERENCES Teachers(ID),
    FOREIGN KEY (Course_Id) REFERENCES Courses(ID),
    FOREIGN KEY (Level_Id) REFERENCES Levels(ID)
    )";
         
    if ($connT->query($MATERIALS) === TRUE) {} 

//Create Years Table
  $YEARS = "CREATE TABLE Years (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL
    )";
           
    if ($connT->query($YEARS) === TRUE) {}  
//Create Students Table      
$STUDENTS = "CREATE TABLE Students (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  AName VARCHAR(30) NOT NULL,
  EName VARCHAR(30) NOT NULL,
  Number VARCHAR(30) NOT NULL,
  Gender VARCHAR(30) NOT NULL,
  BirthDate VARCHAR(50) NOT NULL,
  Plase VARCHAR(50) NOT NULL,
  PhoneNumber VARCHAR(50) NOT NULL,
  Nationality VARCHAR(50) NOT NULL,
  Stage_Id INT(6) UNSIGNED,
  Year_Id INT(6) UNSIGNED,
  Department_Id INT(6) UNSIGNED, 
  FOREIGN KEY (Department_Id) REFERENCES Departments(ID),
  FOREIGN KEY (Stage_Id) REFERENCES levels(ID),
  FOREIGN KEY (Year_Id) REFERENCES years(ID)
  )";
   
  if ($connT->query($STUDENTS) === TRUE) {
  }
//Create DecisionDegree Table
  $DECISIONDEGREE = "CREATE TABLE DecisionDegree (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Degree VARCHAR(30) NOT NULL,
    Type VARCHAR(30) NOT NULL,
    Image VARCHAR(30) NOT NULL,
    Note VARCHAR(30) NOT NULL,
    Year_Id INT(6) UNSIGNED, 
    FOREIGN KEY (Year_Id) REFERENCES Years(ID)
    )";
         
    if ($connT->query($DECISIONDEGREE) === TRUE) {} 

//Create Rounds Table
  $ROUNDS = "CREATE TABLE Rounds (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL,
    Year_Id INT(6) UNSIGNED, 
    FOREIGN KEY (Year_Id) REFERENCES Years(ID)
    )";
           
    if ($connT->query($ROUNDS) === TRUE) {}

//Create PursuitDegree Table
  $PURSUITDEGREE = "CREATE TABLE PursuitDegree (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Degree VARCHAR(30) NOT NULL,
    Material_Id INT(6) UNSIGNED, 
    Student_Id INT(6) UNSIGNED, 
    Year_Id INT(6) UNSIGNED, 
    FOREIGN KEY (Material_Id) REFERENCES Materials(ID),
    FOREIGN KEY (Student_Id) REFERENCES Students(ID),
    FOREIGN KEY (Year_Id) REFERENCES Years(ID)
    )";
           
    if ($connT->query($PURSUITDEGREE) === TRUE) {} 

//Create FinalDegree Table
  $FINALDEGREE = "CREATE TABLE FinalDegree (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Degree VARCHAR(30) NOT NULL,
    Material_Id INT(6) UNSIGNED, 
    Student_Id INT(6) UNSIGNED, 
    Round_Id INT(6) UNSIGNED, 
    FOREIGN KEY (Material_Id) REFERENCES Materials(ID),
    FOREIGN KEY (Student_Id) REFERENCES Students(ID),
    FOREIGN KEY (Round_Id) REFERENCES Rounds(ID)
    )";
             
    if ($connT->query($FINALDEGREE) === TRUE) {} 


  $connT->close();
  $connD->close();
 include 'Created.html';
?>