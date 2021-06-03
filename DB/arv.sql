-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 10:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'Moses', 'Moses123'),
(3, 'Fabio', 'fabio123');

-- --------------------------------------------------------

--
-- Table structure for table `lecture_tbl`
--

CREATE TABLE `lecture_tbl` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecture_tbl`
--

INSERT INTO `lecture_tbl` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(5, 'iradukunda', 'marie', 'iradukunda@gmail.com', '12345'),
(8, 'Niyitanga', 'moise', 'niyitangamoise3@gmail.com', 'Moses123'),
(9, 'muhamedhi', 'karenzi', 'muh3@gmail.come', '$2y$10$qA7wruNpBLGjjV3CRqPRfOI0ugTp1ygxK');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `fname`, `lname`, `gender`, `phone`, `comment`, `comment_time`) VALUES
(3, 'NIYITANGA', 'Moise', 'male', 787196502, 'Hi this is the first comment i made!!.', '00:00:00'),
(4, 'kwizera', 'Eric', 'male', 783736355, 'This is my first favourite course i ever learn ????', '00:00:00'),
(5, 'Ndayishimye', 'Augustine', 'male', 783228899, 'Sorry, i just to know how to install laravel in linux??', '00:00:00'),
(19, 'Ishimwe', 'liliane', 'female', 783342313, 'On last chapter (IV) i got problem of understanding well, pls i need more links. thanks', '00:00:00'),
(21, 'kamugisha ', 'Kevine', 'male', 782373343, 'we need more explanation on arrays.', '00:00:00'),
(22, 'Gasirabo', 'Lambert', 'male', 782364223, 'I don\'t know how to configure database in laravel, please help me.', '00:00:00'),
(23, 'kwizera', 'claudine', 'female', 787223276, 'Teacher tommorrow i don\'t attend class , i feel sick.', '00:00:00'),
(25, 'nkunda', 'albert', 'male', 882346328, 'hhhhhhhhh', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `reg_no` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `gender`, `reg_no`, `password`) VALUES
(29, 'Moses', 'niyitangamoise3@gmail.com', 'female', '07822334', '$2y$10$cZy5Oy49YeFADBZPcixA3e0FbvKbYUZvPvaNNwQV/AWGBH1zfcTWW'),
(30, 'Fabio', 'kwizeraeric3@gmail.com', 'male', '18rp0288', '$2y$10$QhIXLIYA8.GE8GazJ6Uwyuy10Vkcm5YcMOGeY9ec63CwIrZEegB2W'),
(31, 'Bisho Moise', 'bishomoise@gmail.com', 'male', '18RP0848', '$2y$10$aLuFCuCE7DnE.Nl.JW44fe2SPvuDoyLv.rvj59K1RqBZJ6Ybqh4r6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture_tbl`
--
ALTER TABLE `lecture_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userphone` (`reg_no`),
  ADD UNIQUE KEY `useremail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lecture_tbl`
--
ALTER TABLE `lecture_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_comment`
--
ALTER TABLE `post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
