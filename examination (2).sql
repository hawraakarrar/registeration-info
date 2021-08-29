-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 12:50 PM
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

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Number` varchar(30) NOT NULL,
  `CodeNumber` int(6) NOT NULL,
  `AssociateDeanSA` varchar(100) NOT NULL,
  `AssociateDeanAA` varchar(100) NOT NULL,
  `Dean` varchar(100) NOT NULL,
  `University_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`ID`, `Name`, `Number`, `CodeNumber`, `AssociateDeanSA`, `AssociateDeanAA`, `Dean`, `University_Id`) VALUES
(1, 'كلية معلوماتية اعمال', '211', 211, 'دكتور نغم', 'دكتور علاء', 'دكتور صفاء', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(6) UNSIGNED NOT NULL,
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
-- Table structure for table `decisiondegree`
--

CREATE TABLE `decisiondegree` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Degree` varchar(30) NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Image` varchar(30) NOT NULL,
  `Note` varchar(30) NOT NULL,
  `Year_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `ID` int(6) UNSIGNED NOT NULL,
  `MidDegree` int(3) DEFAULT NULL,
  `FinalDR1` int(3) DEFAULT NULL,
  `FinalDR2` int(3) DEFAULT NULL,
  `FinalDR3` int(3) DEFAULT NULL,
  `DecisionDegree` int(2) DEFAULT NULL,
  `StuID` int(6) UNSIGNED DEFAULT NULL,
  `MatID` int(6) UNSIGNED DEFAULT NULL,
  `upload` int(6) UNSIGNED DEFAULT NULL,
  `YearID` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Number` varchar(30) NOT NULL,
  `CodeNumber` varchar(30) NOT NULL,
  `TypeOfStudy` varchar(50) NOT NULL,
  `TypeOfSystem` varchar(50) NOT NULL,
  `NumberOfStage` varchar(50) NOT NULL,
  `HeadOfDepartment` varchar(100) NOT NULL,
  `MaterialConformingDeposit` varchar(50) NOT NULL,
  `NumberMaterialsStudentLoaded` varchar(50) NOT NULL,
  `College_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`ID`, `Name`, `Number`, `CodeNumber`, `TypeOfStudy`, `TypeOfSystem`, `NumberOfStage`, `HeadOfDepartment`, `MaterialConformingDeposit`, `NumberMaterialsStudentLoaded`, `College_Id`) VALUES
(1, 'ادارة انظمة معلوماتية', '221', '221', 'Morning', 'courses', '4', 'دكتور هدى', '5', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `ID` int(6) UNSIGNED NOT NULL,
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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Time` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL,
  `Operation` varchar(50) NOT NULL,
  `Page` varchar(255) NOT NULL,
  `User_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`ID`, `Time`, `Date`, `Operation`, `Page`, `User_Id`) VALUES
(1, '09:22:23am', '2021/03/02', 'create database', 'create.html', 1),
(2, '03:24:21pm', '2021/03/06', 'create database', 'create.html', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materialbyyear`
--

CREATE TABLE `materialbyyear` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Material_Id` int(6) UNSIGNED DEFAULT NULL,
  `Year_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materialbyyear`
--

INSERT INTO `materialbyyear` (`ID`, `Material_Id`, `Year_Id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `ID` int(6) UNSIGNED NOT NULL,
  `AName` varchar(30) NOT NULL,
  `EName` varchar(30) NOT NULL,
  `CodeNumber` varchar(30) NOT NULL,
  `NumberUnit` varchar(30) NOT NULL,
  `HighestDegreeCourse` varchar(50) NOT NULL,
  `Department_Id` int(6) UNSIGNED DEFAULT NULL,
  `Teacher_Id` int(6) UNSIGNED DEFAULT NULL,
  `Course_Id` int(6) UNSIGNED DEFAULT NULL,
  `Level_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`ID`, `AName`, `EName`, `CodeNumber`, `NumberUnit`, `HighestDegreeCourse`, `Department_Id`, `Teacher_Id`, `Course_Id`, `Level_Id`) VALUES
(1, 'رياضيات1', 'fds', '543', '3', '50', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `ID` int(6) UNSIGNED NOT NULL,
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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Number` bigint(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `BirthDate` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'مستمر',
  `mail` varchar(50) DEFAULT NULL,
  `AdmissionYear` varchar(50) NOT NULL,
  `GraduationYear` varchar(50) NOT NULL,
  `Department_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Number`, `Gender`, `BirthDate`, `PhoneNumber`, `status`, `mail`, `AdmissionYear`, `GraduationYear`, `Department_Id`) VALUES
(1, 'كمنتا', 98765, 'F', '2021-08-10', '0987654', 'وةى', 'منتال', '1', '', 1),
(2, 'كمنتا2', 98765, 'ذكر', '2021-08-18', '0987654', 'وةى', 'منتال', '1', '', 1),
(3, 'كمنتا3', 98765, 'F', '2021-08-19', '0987654', 'وةى', 'منتال', '1', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentstatus`
--

CREATE TABLE `studentstatus` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Year` int(6) UNSIGNED DEFAULT NULL,
  `level` int(6) UNSIGNED DEFAULT NULL,
  `uploaded` int(6) UNSIGNED DEFAULT NULL,
  `Stu_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentstatus`
--

INSERT INTO `studentstatus` (`ID`, `Year`, `level`, `uploaded`, `Stu_Id`) VALUES
(1, 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `studentview`
-- (See below for the actual view)
--
CREATE TABLE `studentview` (
`ID` int(6) unsigned
,`Name` varchar(30)
,`Number` bigint(30)
,`Gender` varchar(30)
,`BirthDate` varchar(50)
,`PhoneNumber` varchar(50)
,`status` varchar(50)
,`mail` varchar(50)
,`AdmissionYear` varchar(50)
,`GraduationYear` varchar(50)
,`depname` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `ID` int(6) UNSIGNED NOT NULL,
  `AName` varchar(30) NOT NULL,
  `EName` varchar(30) NOT NULL,
  `GeneralSpecialty` varchar(30) NOT NULL,
  `Specialization` varchar(30) NOT NULL,
  `BirthDate` varchar(50) NOT NULL,
  `Plase` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Department_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`ID`, `AName`, `EName`, `GeneralSpecialty`, `Specialization`, `BirthDate`, `Plase`, `PhoneNumber`, `Password`, `Department_Id`) VALUES
(1, 'بي', 'بليسش', 'ليسبش', 'لبيسش', '2021-08-03', 'هىنمتنة', '65432', '248e844336797ec98478f85e7626de4a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Number` varchar(30) NOT NULL,
  `CodeNumber` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`ID`, `Name`, `Number`, `CodeNumber`) VALUES
(1, 'جامعة تكنلوجيا معلومات و اتصال', '111', 111);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `ID` int(6) UNSIGNED NOT NULL,
  `status` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`ID`, `status`) VALUES
(1, 0),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `Role_Id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Password`, `User_Name`, `Role_Id`) VALUES
(1, 'Admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin', 1),
(2, 'hawraa', '202cb962ac59075b964b07152d234b70', 'hawraa', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v`
-- (See below for the actual view)
--
CREATE TABLE `v` (
`ID` int(6) unsigned
,`Name` varchar(30)
,`Number` bigint(30)
,`Gender` varchar(30)
,`BirthDate` varchar(50)
,`PhoneNumber` varchar(50)
,`status` varchar(50)
,`mail` varchar(50)
,`AdmissionYear` int(6) unsigned
,`depname` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `ID` int(6) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`ID`, `Name`) VALUES
(1, '2021');

-- --------------------------------------------------------

--
-- Structure for view `studentview`
--
DROP TABLE IF EXISTS `studentview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `studentview`  AS SELECT `students`.`ID` AS `ID`, `students`.`Name` AS `Name`, `students`.`Number` AS `Number`, `students`.`Gender` AS `Gender`, `students`.`BirthDate` AS `BirthDate`, `students`.`PhoneNumber` AS `PhoneNumber`, `students`.`status` AS `status`, `students`.`mail` AS `mail`, `students`.`AdmissionYear` AS `AdmissionYear`, `students`.`GraduationYear` AS `GraduationYear`, `departments`.`Name` AS `depname` FROM (`students` join `departments`) WHERE `students`.`Department_Id` = `departments`.`ID` ;

-- --------------------------------------------------------

--
-- Structure for view `v`
--
DROP TABLE IF EXISTS `v`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v`  AS   (select `students`.`ID` AS `ID`,`students`.`Name` AS `Name`,`students`.`Number` AS `Number`,`students`.`Gender` AS `Gender`,`students`.`BirthDate` AS `BirthDate`,`students`.`PhoneNumber` AS `PhoneNumber`,`students`.`status` AS `status`,`students`.`mail` AS `mail`,`years`.`ID` AS `AdmissionYear`,`departments`.`Name` AS `depname` from ((`students` left join `years` on(`students`.`AdmissionYear` = `years`.`ID`)) left join `departments` on(`students`.`Department_Id` = `departments`.`ID`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `University_Id` (`University_Id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `decisiondegree`
--
ALTER TABLE `decisiondegree`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Year_Id` (`Year_Id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `StuID` (`StuID`),
  ADD KEY `MatID` (`MatID`),
  ADD KEY `upload` (`upload`),
  ADD KEY `YearID` (`YearID`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `College_Id` (`College_Id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_Id` (`User_Id`);

--
-- Indexes for table `materialbyyear`
--
ALTER TABLE `materialbyyear`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Material_Id` (`Material_Id`),
  ADD KEY `Year_Id` (`Year_Id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Department_Id` (`Department_Id`),
  ADD KEY `Teacher_Id` (`Teacher_Id`),
  ADD KEY `Course_Id` (`Course_Id`),
  ADD KEY `Level_Id` (`Level_Id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Department_Id` (`Department_Id`);

--
-- Indexes for table `studentstatus`
--
ALTER TABLE `studentstatus`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Year` (`Year`),
  ADD KEY `level` (`level`),
  ADD KEY `uploaded` (`uploaded`),
  ADD KEY `Stu_Id` (`Stu_Id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Department_Id` (`Department_Id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Role_Id` (`Role_Id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `decisiondegree`
--
ALTER TABLE `decisiondegree`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materialbyyear`
--
ALTER TABLE `materialbyyear`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentstatus`
--
ALTER TABLE `studentstatus`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `ID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colleges`
--
ALTER TABLE `colleges`
  ADD CONSTRAINT `colleges_ibfk_1` FOREIGN KEY (`University_Id`) REFERENCES `university` (`ID`);

--
-- Constraints for table `decisiondegree`
--
ALTER TABLE `decisiondegree`
  ADD CONSTRAINT `decisiondegree_ibfk_1` FOREIGN KEY (`Year_Id`) REFERENCES `years` (`ID`);

--
-- Constraints for table `degree`
--
ALTER TABLE `degree`
  ADD CONSTRAINT `degree_ibfk_1` FOREIGN KEY (`StuID`) REFERENCES `students` (`ID`),
  ADD CONSTRAINT `degree_ibfk_2` FOREIGN KEY (`MatID`) REFERENCES `materials` (`ID`),
  ADD CONSTRAINT `degree_ibfk_3` FOREIGN KEY (`upload`) REFERENCES `upload` (`ID`),
  ADD CONSTRAINT `degree_ibfk_4` FOREIGN KEY (`YearID`) REFERENCES `years` (`ID`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`College_Id`) REFERENCES `colleges` (`ID`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`User_Id`) REFERENCES `users` (`ID`);

--
-- Constraints for table `materialbyyear`
--
ALTER TABLE `materialbyyear`
  ADD CONSTRAINT `materialbyyear_ibfk_1` FOREIGN KEY (`Material_Id`) REFERENCES `materials` (`ID`),
  ADD CONSTRAINT `materialbyyear_ibfk_2` FOREIGN KEY (`Year_Id`) REFERENCES `years` (`ID`);

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`Department_Id`) REFERENCES `departments` (`ID`),
  ADD CONSTRAINT `materials_ibfk_2` FOREIGN KEY (`Teacher_Id`) REFERENCES `teachers` (`ID`),
  ADD CONSTRAINT `materials_ibfk_3` FOREIGN KEY (`Course_Id`) REFERENCES `courses` (`ID`),
  ADD CONSTRAINT `materials_ibfk_4` FOREIGN KEY (`Level_Id`) REFERENCES `levels` (`ID`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`Department_Id`) REFERENCES `departments` (`ID`);

--
-- Constraints for table `studentstatus`
--
ALTER TABLE `studentstatus`
  ADD CONSTRAINT `studentstatus_ibfk_1` FOREIGN KEY (`Year`) REFERENCES `years` (`ID`),
  ADD CONSTRAINT `studentstatus_ibfk_2` FOREIGN KEY (`level`) REFERENCES `levels` (`ID`),
  ADD CONSTRAINT `studentstatus_ibfk_3` FOREIGN KEY (`uploaded`) REFERENCES `upload` (`ID`),
  ADD CONSTRAINT `studentstatus_ibfk_4` FOREIGN KEY (`Stu_Id`) REFERENCES `students` (`ID`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`Department_Id`) REFERENCES `departments` (`ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `roles` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
