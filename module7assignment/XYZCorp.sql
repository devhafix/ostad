-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2023 at 07:28 PM
-- Server version: 5.7.34
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `XYZCorp`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `manager` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `manager`) VALUES
(1, 'Sales', 'Jane Doe'),
(2, 'Marketing', 'John Smith'),
(3, 'Finance', 'Emily Jones'),
(4, 'IT', 'Mike Johnson'),
(5, 'HR', 'Sarah Brown'),
(6, 'Customer Service', 'Jessica Brown'),
(7, 'Human Resources', 'Alex Davis'),
(8, 'Legal', 'Karen Wilson'),
(9, 'IT', 'David Lee'),
(10, 'Research', 'John Doe');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `age`, `salary`, `department_id`) VALUES
(1001, 'John Smith', 30, '60000.00', 2),
(1002, 'Jane Doe', 28, '45000.00', 1),
(1003, 'Mike Johnson', 35, '65000.00', 4),
(1004, 'Emily Jones', 42, '80000.00', 3),
(1005, 'Sarah Brown', 29, '40000.00', 5),
(1006, 'Tom Lee', 31, '60000.00', 1),
(1007, 'Mary White', 27, '50000.00', 2),
(1008, 'David Kim', 38, '70000.00', 3),
(1009, 'Anna Chen', 26, '35000.00', 1),
(1010, 'Robert Johnson', 33, '55000.00', 4),
(1011, 'Amy Lee', 30, '45000.00', 2),
(1012, 'Bill Wang', 45, '90000.00', 3),
(1013, 'Lisa Zhang', 24, '30000.00', 5),
(1014, 'Steven Chen', 36, '75000.00', 1),
(1015, 'Jason Wang', 32, '50000.00', 2),
(1016, 'Linda Li', 29, '40000.00', 2),
(1017, 'Eric Kim', 40, '85000.00', 3),
(1018, 'Cindy Chen', 31, '55000.00', 1),
(1019, 'Sam Smith', 27, '45000.00', 2),
(1020, 'Grace Kim', 34, '65000.00', 3),
(1021, 'Nathan Chen', 25, '35000.00', 5),
(1022, 'Rachel Lee', 28, '50000.00', 2),
(1023, 'Jack Wang', 39, '75000.00', 1),
(1024, 'Amanda Chen', 32, '55000.00', 4),
(1025, 'Kevin Lee', 29, '40000.00', 5),
(1026, 'Samantha Kim', 37, '80000.00', 3),
(1027, 'Daniel Chen', 26, '35000.00', 1),
(1028, 'Olivia Smith', 31, '55000.00', 2),
(1029, 'George Wang', 42, '90000.00', 3),
(1030, 'Mia Johnson', 23, '30000.00', 5),
(1031, 'Mark Lee', 35, '65000.00', 1),
(1032, 'Ella Kim', 29, '45000.00', 2),
(1033, 'Patrick Chen', 40, '85000.00', 3),
(1034, 'Fiona Li', 28, '90000.00', 4),
(1035, 'Tim Johnson', 27, '45000.00', 4),
(1036, 'Julia Lee', 31, '55000.00', 1),
(1037, 'Brandon Chen', 29, '40000.00', 2),
(1038, 'Sophia Wang', 36, '75000.00', 1),
(1039, 'Emma Kim', 32, '50000.00', 2),
(1040, 'Noah Chen', 29, '40000.00', 2),
(1041, 'Ethan Smith', 40, '85000.00', 3),
(1042, 'Isabella Johnson', 31, '55000.00', 1),
(1043, 'Aiden Lee', 27, '45000.00', 2),
(1044, 'Liam Chen', 34, '65000.00', 3),
(1045, 'Mason Wang', 25, '35000.00', 5),
(1046, 'Zoe Kim', 28, '50000.00', 2),
(1047, 'Chloe Chen', 39, '75000.00', 1),
(1048, 'Natalie Li', 32, '55000.00', 4),
(1049, 'Evelyn Lee', 29, '40000.00', 5),
(1050, 'Elijah Kim', 37, '80000.00', 3),
(1051, 'Harper Chen', 26, '35000.00', 1),
(1052, 'Victoria Smith', 31, '55000.00', 2),
(1053, 'Michael Wang', 42, '90000.00', 3),
(1054, 'Avery Johnson', 23, '30000.00', 5),
(1055, 'William Lee', 35, '65000.00', 1),
(1056, 'Sofia Kim', 29, '45000.00', 2),
(1057, 'Benjamin Chen', 40, '85000.00', 3),
(1058, 'Elena Li', 28, '50000.00', 2),
(1059, 'Lucas Chen', 29, '40000.00', 2),
(1060, 'Aaliyah Wang', 36, '75000.00', 1),
(1061, 'Anthony Lee', 32, '50000.00', 2),
(1062, 'Lily Chen', 39, '75000.00', 1),
(1063, 'Jackson Johnson', 31, '55000.00', 1),
(1064, 'Madison Kim', 27, '45000.00', 2),
(1065, 'Mia Chen', 34, '65000.00', 3),
(1066, 'Ethan Wang', 25, '35000.00', 5),
(1067, 'Abigail Lee', 28, '50000.00', 2),
(1068, 'Avery Chen', 39, '75000.00', 1),
(1069, 'Alexander Smith', 32, '55000.00', 4),
(1070, 'Amelia Johnson', 29, '40000.00', 5),
(1071, 'Evelyn Wang', 37, '80000.00', 3),
(1072, 'Harper Chen', 26, '35000.00', 1),
(1073, 'Olivia Smith', 31, '55000.00', 2),
(1074, 'Daniel Wang', 42, '90000.00', 3),
(1075, 'Liam Johnson', 23, '30000.00', 5),
(1076, 'Charlotte Lee', 35, '65000.00', 1),
(1077, 'Sophia Kim', 29, '45000.00', 2),
(1078, 'Elijah Chen', 40, '85000.00', 3),
(1079, 'Emily Li', 28, '50000.00', 2),
(1080, 'Daniel Chen', 29, '40000.00', 2),
(1081, 'Ava Wang', 36, '75000.00', 1),
(1082, 'William Lee', 32, '50000.00', 2),
(1083, 'Evelyn Chen', 39, '75000.00', 1),
(1084, 'Mason Johnson', 31, '55000.00', 1),
(1085, 'Sophia Kim', 27, '45000.00', 2),
(1086, 'Olivia Chen', 34, '65000.00', 3),
(1087, 'James Wang', 25, '35000.00', 5),
(1088, 'Emily Lee', 28, '50000.00', 2),
(1089, 'Avery Chen', 39, '75000.00', 1),
(1090, 'William Smith', 32, '55000.00', 4),
(1091, 'Sophia Johnson', 29, '40000.00', 5),
(1092, 'Avery Wang', 37, '80000.00', 3),
(1093, 'Aiden Chen', 26, '35000.00', 1),
(1094, 'Madison Smith', 31, '55000.00', 2),
(1095, 'Mia Wang', 42, '90000.00', 3),
(1096, 'Liam Johnson', 23, '30000.00', 5),
(1097, 'Ella Lee', 35, '65000.00', 1),
(1098, 'Daniel Kim', 29, '40000.00', 2),
(1099, 'Chloe Chen', 40, '85000.00', 3),
(1100, 'Sophia Li', 28, '50000.00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
