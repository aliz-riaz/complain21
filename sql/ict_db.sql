-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 08:32 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ict_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(59) NOT NULL,
  `phone` varchar(49) NOT NULL,
  `address` varchar(100) NOT NULL,
  `complaint` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`id`, `name`, `email`, `phone`, `address`, `complaint`, `status`, `datetime`) VALUES
(1, 'Ali', 'aliz_riaz@hotmail.com', '03463283993', 'aaaaaaa', 'pending', 'completed', '2021-04-06 11:57:15'),
(2, 'Ali Riaz', 'aliz_riaz@hotmail.com', '03318348842', 'A-153 Block H', 'My Complaint', 'pending', '2021-04-06 12:04:23'),
(3, 'Ali Riaz', 'aliz_riaz@hotmail.com', '03318348842', 'A-153 Block H', 'My Complaint', 'Pending', '2021-04-06 12:18:05'),
(4, 'Ali Riaz', 'aliz_riaz@hotmail.com', '03318348842', 'A-153 Block H', 'My Complaint', 'Pending', '2021-04-06 12:19:07'),
(5, 'Ali Riaz', 'aliz_riaz@hotmail.com', '03318348842', 'A-153 Block H', 'My Complaint', 'Pending', '2021-04-06 12:20:34'),
(6, 'Basit', 'basit_riaz@hotmail.com', '03318348842', 'A-153 Block H', 'this is new', 'completed', '2021-04-06 12:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'aliz_riaz', '$2y$10$OVVl7q.5EJozre4Pl8rwT.KO/QzwVBdQcIgm57GAhYjedp6jdkL8S', 'aliz_riaz@hotmail.com', '2021-03-26 13:23:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
