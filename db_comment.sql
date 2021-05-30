-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 10:41 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'caleb', 'tuyishimecaleb98@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dis_id` int(10) NOT NULL,
  `dis_name` varchar(30) NOT NULL,
  `prov_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dis_id`, `dis_name`, `prov_id`) VALUES
(1, 'gasabo', 1),
(2, 'kiccukiro', 1),
(3, 'kicukiro', 1),
(4, 'nyanza', 4),
(5, 'muhanga', 4),
(6, 'musanze', 5),
(7, 'gakenke', 5),
(8, 'karongi', 2),
(9, 'rusizi', 2),
(10, 'nyagatare', 3),
(11, 'rwamagana', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dosage`
--

CREATE TABLE `dosage` (
  `dos_id` int(11) NOT NULL,
  `dose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosage`
--

INSERT INTO `dosage` (`dos_id`, `dose`) VALUES
(1, '300 mg twice daily or 600 mg once daily'),
(2, '200 mg once daily'),
(3, '150 mg twice daily or 300 mg once daily'),
(4, '250−300 mg twice daily'),
(5, '300 mg once daily'),
(6, '400–600 mg once daily'),
(7, '200 mg twice daily'),
(8, '300 mg + 100 mg once daily'),
(9, '800 mg + 100 mg once daily or 600 mg + 100 mg twice'),
(10, '400 mg + 100 mg twice daily'),
(11, '50 mg once daily'),
(12, '400 mg twice daily');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `lev_id` int(11) NOT NULL,
  `lev_title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`lev_id`, `lev_title`) VALUES
(1, 'level one'),
(2, 'level two'),
(3, 'level thre');

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `med_id` int(11) NOT NULL,
  `med_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`med_id`, `med_name`) VALUES
(1, 'Abacavir (ABC)'),
(2, 'Emtricitabine (FTC)'),
(3, 'Lamivudine (3TC)'),
(4, 'Zidovudine (AZT)'),
(5, 'Tenofovir (TDF) '),
(6, 'Efavirenz (EFV)'),
(7, 'Etravirine (ETV) '),
(8, 'Nevirapine (NVP) '),
(9, 'Atazanavir + ritonavir (ATV/r)'),
(10, 'Darunavir + ritonavir (DRV/r)'),
(11, 'Lopinavir + ritonavir (LPV/r) '),
(12, 'Dolutegravir (DTG)'),
(13, 'Raltegravir (RAL)');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `pat_id` varchar(11) NOT NULL,
  `pat_fname` varchar(30) NOT NULL,
  `pat_lname` varchar(30) NOT NULL,
  `pat_gender` varchar(10) NOT NULL,
  `pat_dob` varchar(10) NOT NULL,
  `pat_phone` varchar(10) NOT NULL,
  `lev_id` int(11) DEFAULT NULL,
  `med_id` int(11) DEFAULT NULL,
  `dos_id` int(11) DEFAULT NULL,
  `pat_province` varchar(20) NOT NULL,
  `pat_district` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `pat_id`, `pat_fname`, `pat_lname`, `pat_gender`, `pat_dob`, `pat_phone`, `lev_id`, `med_id`, `dos_id`, `pat_province`, `pat_district`) VALUES
(15, 'PTT:5517/74', 'kamanzi', 'innocent', 'male', '1998-05-18', '0789776554', 1, 1, 5, 'Kigali city', 'Gasaboasab'),
(16, 'PTT:7586/89', 'uwimana', 'rose', 'female', '1987-05-27', '0789009888', NULL, NULL, NULL, 'North province', 'Musanze'),
(17, 'PTT:3184/99', 'kambali', 'serge', 'male', '1988-09-27', '0786221111', NULL, NULL, NULL, 'North province', 'Musanze'),
(18, 'PTT:5496/55', 'robert ', 'hamui', 'male', '1992-01-07', '0786554333', NULL, NULL, NULL, 'Sauth province', 'Muhanga'),
(19, 'PTT:6610/33', 'karinganire', 'bernadethe', 'female', '1999-01-26', '0786776554', NULL, NULL, NULL, 'Kigali city', 'Gasaboasab'),
(20, 'PTT:6098/67', 'mahindu', 'JMV', 'male', '1991-01-01', '0780998666', NULL, NULL, NULL, 'East province', 'Karongi'),
(21, 'PTT:2401/13', 'nkundukize', 'heritsier', 'male', '1992-07-29', '0780998533', NULL, NULL, NULL, 'West province', 'Rubavu'),
(22, 'PTT:2064/62', 'kagabo', 'benson', 'male', '2000-12-09', '0787787765', NULL, NULL, NULL, 'East province', 'Karongi'),
(23, 'PTT:8160/58', 'ndori', 'amani', 'male', '1993-08-04', '0789022344', NULL, NULL, NULL, 'East province', 'Karongi'),
(24, 'PTT:3463/26', 'james', 'mugabe', 'male', '1994-04-27', '0786345553', NULL, NULL, NULL, 'North province', 'Musanze'),
(25, 'PTT:3990/19', 'fname', 'lname', 'female', '1992-05-06', '0780556445', NULL, NULL, NULL, 'Kigali city', 'Gasabo'),
(26, 'PTT:4974/77', 'umurerwa', 'gloria', 'female', '1993-06-25', '0789665444', NULL, NULL, NULL, 'North province', 'Musanze'),
(27, 'PTT:8506/12', 'kamaliza', 'esperance', 'female', '1999-06-25', '0780441112', NULL, NULL, NULL, 'West province', 'Rubavu'),
(28, 'PTT:169998/', 'nkurunzuza', 'evariste', 'male', '1993-06-18', '0789055443', NULL, NULL, NULL, 'East province', 'Karongi'),
(29, 'PTT:887752/', 'gatabazi', 'benjamin', 'male', '1992-07-23', '0786558888', NULL, NULL, NULL, 'Sauth province', 'Muhanga'),
(30, 'PTT:6020/96', 'kamana ', 'emmanuel', 'male', '1996-10-30', '0789098765', NULL, NULL, NULL, 'West province', 'Rubavu');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `prov_id` int(11) NOT NULL,
  `prov_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`prov_id`, `prov_name`) VALUES
(1, 'kigali city'),
(2, 'west province'),
(3, 'east province'),
(4, 'sauth province'),
(5, 'north province');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `avatar` longblob DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `gender`, `phone`, `avatar`, `password`) VALUES
(20, 'caleb', 'tuyishimecaleb98@gmail.com', 'male', '0780887346', NULL, '$2y$10$Np/pb3b.0Lfk99G0bdVn/ewwVhIvertWqGTgsXA.QFH/tbt4qijbK'),
(21, 'mucyo', 'mucyo@gmail.com', 'male', '0780889988', NULL, '$2y$10$mC7m7I1qM9bZxd1zQjHlNu8gRlOoBboxv5cZlbjbJu.EfzJbWvUAO'),
(22, 'muhoza', 'muhozachristian44@gmail.com', 'male', '0788972499', NULL, '$2y$10$Hm2loH4XxLcoWvn3YyNr3uxXyBlBoiRC6Aqe4iNdWU0oHaPit5ED.'),
(23, 'bisho', 'bisho@gmail.com', 'male', '0789900889', NULL, '$2y$10$6mvaOc2S5hdSDoDh7OKXv.Cy/ToGISCA1mUjpWb4EL.W/vyrin95G'),
(24, 'mento', 'mento@gmail.com', '', '0780998776', NULL, '$2y$10$DA1AraaInbDzxlKEpvz6Uek5/7cYyMH9INz9xQRFsBxgEYICk1/3m'),
(25, 'ishimwe', 'ishimwepaccy@gmail.com', '', '0788850016', NULL, '$2y$10$Wh2pxjTGwz4mu5XfyXGRRu43sEA9LnH6VxoUMACTLeHl2.ZtJ2IKa'),
(26, 'ntwari ', 'maliki@gmail.com', '', '0780998433', NULL, '$2y$10$IjDAdCHJPbnLitK9pL5TWeMBmYA1gTdITMpC7YNE4a4qI8vuJrtg2'),
(27, 'byukusenge', 'buku@gmail.com', '', '0786655443', NULL, '$2y$10$GvWhgEK33W6abSYOhv2EbuLOKXIQUXr/Q6TWuptxAybWIrOrIxHva'),
(28, 'kamikazi', 'hadidja@yahoo.fr', 'female', '0789666555', NULL, '$2y$10$JBkRhB0rI9TJpyy/g0m6dujTcAsGFmNB0EG50hdEajNFaz7A9zx0e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminmail` (`email`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dis_id`),
  ADD KEY `prov_id` (`prov_id`);

--
-- Indexes for table `dosage`
--
ALTER TABLE `dosage`
  ADD PRIMARY KEY (`dos_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`lev_id`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pat_phone` (`pat_phone`),
  ADD UNIQUE KEY `pat_id` (`pat_id`),
  ADD KEY `lev_id` (`lev_id`),
  ADD KEY `med_id` (`med_id`),
  ADD KEY `dos_id` (`dos_id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`prov_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userphone` (`phone`),
  ADD UNIQUE KEY `useremail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dis_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dosage`
--
ALTER TABLE `dosage`
  MODIFY `dos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `lev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `med_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `prov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`prov_id`) REFERENCES `province` (`prov_id`);

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`lev_id`) REFERENCES `level` (`lev_id`),
  ADD CONSTRAINT `patient_ibfk_2` FOREIGN KEY (`med_id`) REFERENCES `medication` (`med_id`),
  ADD CONSTRAINT `patient_ibfk_3` FOREIGN KEY (`dos_id`) REFERENCES `dosage` (`dos_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
