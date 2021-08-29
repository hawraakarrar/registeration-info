-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 09:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examination`
--

-- --------------------------------------------------------




-- --------------------------------------------------------



--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(30) NOT NULL,
  `Number` varchar(30) NOT NULL,
  `CodeNumber` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university`
--

-- --------------------------------------------------------
--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(30) NOT NULL,
  `Number` varchar(30) NOT NULL,
  `CodeNumber` int(6) NOT NULL,
  `AssociateDeanSA` varchar(50) NOT NULL,
  `AssociateDeanAA` varchar(50) NOT NULL,
  `Dean` varchar(50) NOT NULL,
  `University_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (University_Id) REFERENCES university(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colleges`
--
-- --------------------------------------------------------
--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(30) NOT NULL,
  `Number` varchar(30) NOT NULL,
  `CodeNumber` varchar(30) NOT NULL,
  `TypeOfStudy` varchar(50) NOT NULL,
  `TypeOfSystem` varchar(50) NOT NULL,
  `NumberOfStage` varchar(50) NOT NULL,
  `HeadOfDepartment` varchar(50) NOT NULL,
  `MaterialConformingDeposit` varchar(50) NOT NULL,
  `NumberMaterialsStudentLoaded` varchar(50) NOT NULL,
  `College_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (College_Id) REFERENCES colleges(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

-- --------------------------------------------------------
--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`ID`, `Name`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Fourth');

-- --------------------------------------------------------
--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `Name`) VALUES
(1, 'First'),
(2, 'Second');
-- --------------------------------------------------------




--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `years`
--
-- --------------------------------------------------------
--
-- Table structure for table `decisiondegree`
--

CREATE TABLE `decisiondegree` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Degree` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Image` varchar(30) NOT NULL,
  `Note` varchar(30) NOT NULL,
  `Year_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (Year_Id) REFERENCES years(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `decisiondegree`
--

-- --------------------------------------------------------
--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `Name`, `Role`) VALUES
(1, 'Admin', 'manage all page');

-- --------------------------------------------------------
--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Role_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (Role_Id) REFERENCES roles(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Password`, `User_Name`, `Role_Id`) VALUES
(1, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 1);


-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Time` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Operation` varchar(50) NOT NULL,
  `Page` varchar(255) NOT NULL,
  `User_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (User_Id) REFERENCES users(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`ID`, `Time`, `Date`, `Operation`, `Page`, `User_Id`) VALUES
(1, '09:22:23am', '2021/03/02', 'create database', 'create.html', 1),
(2, '03:24:21pm', '2021/03/06', 'create database', 'create.html', 1);

-- --------------------------------------------------------
--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `AName` varchar(30) NOT NULL,
  `EName` varchar(30) NOT NULL,
  `GeneralSpecialty` varchar(30) NOT NULL,
  `Specialization` varchar(30) NOT NULL,
  `BirthDate` varchar(50) NOT NULL,
  `Plase` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Department_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (Department_Id) REFERENCES departments(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--


-- --------------------------------------------------------


--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `AName` varchar(30) NOT NULL,
  `EName` varchar(30) NOT NULL,
  `CodeNumber` varchar(30) NOT NULL,
  `NumberUnit` varchar(30) NOT NULL,
  `HighestDegreeCourse` varchar(50) NOT NULL,
  `Department_Id` int(6) UNSIGNED DEFAULT NULL,
  `Teacher_Id` int(6) UNSIGNED DEFAULT NULL,
  `Course_Id` int(6) UNSIGNED DEFAULT NULL,
  `Level_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (Department_Id) REFERENCES departments(ID),
  FOREIGN KEY (Teacher_Id) REFERENCES teachers(ID),
  FOREIGN KEY (Course_Id) REFERENCES courses(ID),
  FOREIGN KEY (Level_Id) REFERENCES levels(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--
-- --------------------------------------------------------

--
-- Table structure for table `materialbyyear`
--

CREATE TABLE `materialbyyear` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Material_Id` int(6) UNSIGNED DEFAULT NULL,
  `Year_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (Material_Id) REFERENCES materials(ID),
  FOREIGN KEY (Year_Id) REFERENCES years(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materialbyyear`
--



-- --------------------------------------------------------
--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Name` varchar(30) NOT NULL,
  `Number` bigint(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `BirthDate` varchar(50) NOT NULL,
  `Plase` varchar(50) NOT NULL,
  `admissions` varchar(35) NOT NULL,
  `branch` varchar(35) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'مستمر',
  `booknumber` varchar(50) DEFAULT NULL,
  `specialcase` varchar(35) DEFAULT NULL,
  `internalpartitions` varchar(35) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `note` varchar(100) NOT NULL,
  `AdmissionYear` varchar(50) NOT NULL,
  `GraduationYear` varchar(50) NOT NULL,
  `Department_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (Department_Id) REFERENCES departments(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

-- --------------------------------------------------------
--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `status` int(6)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`ID`, `status`) VALUES
(1, 0),
(2, 1);

-- --------------------------------------------------------
--
-- Table structure for table `studentstatus`
--

CREATE TABLE `studentstatus` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Year` int(6) UNSIGNED DEFAULT NULL,
  `level` int(6) UNSIGNED DEFAULT NULL,
  `uploaded` int(6) UNSIGNED DEFAULT NULL,
  `Stu_Id` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (Year) REFERENCES years(ID),
  FOREIGN KEY (level) REFERENCES levels(ID),
  FOREIGN KEY (uploaded) REFERENCES upload(ID),
  FOREIGN KEY (Stu_Id) REFERENCES students(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentstatus`
--


-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `MidDegree` int(3) DEFAULT NULL,
  `FinalDR1` int(3) DEFAULT NULL,
  `FinalDR2` int(3) DEFAULT NULL,
  `FinalDR3` int(3) DEFAULT NULL,
  `DecisionDegree` int(2) DEFAULT NULL,
  `StuID` int(6) UNSIGNED DEFAULT NULL,
  `MatID` int(6) UNSIGNED DEFAULT NULL,
  `upload` int(6) UNSIGNED DEFAULT NULL,
  `YearID` int(6) UNSIGNED DEFAULT NULL,
  FOREIGN KEY (StuID) REFERENCES students(ID),
  FOREIGN KEY (MatID) REFERENCES materials(ID),
  FOREIGN KEY (upload) REFERENCES upload(ID),
  FOREIGN KEY (YearID) REFERENCES years(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `degree`


-- --------------------------------------------------------

CREATE VIEW `studentview` 
 AS SELECT `students`.`ID` AS `ID`, `students`.`Name` AS `Name`, `students`.`Number` AS `Number`, 
 `students`.`Gender` AS `Gender`, `students`.`BirthDate` AS `BirthDate`, `students`.`PhoneNumber` AS `PhoneNumber`, 
   `students`.`status` AS `status`, `students`.`mail` AS `mail`,
    `students`.`AdmissionYear` AS `AdmissionYear`,`students`.`GraduationYear`As`GraduationYear` ,
    `departments`.`Name` AS `depname` FROM (`students` join `departments`) WHERE 
    `students`.`Department_Id` = `departments`.`ID` ;