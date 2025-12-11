-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2025 at 08:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `class_division` varchar(10) NOT NULL,
  `roll_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `class_division`, `roll_number`) VALUES
(2, 'Suraj Gupta', '12/A', 14),
(4, 'Nandani', 'TY IT /A', 18),
(6, 'Ranvijay', 'TY IT/A', 57),
(7, 'Adiba', 'TY IT/A', 9),
(8, 'Spandita', 'TY IT/A', 18),
(9, 'Faisal', 'TY IT/A', 29),
(10, 'Sarfaraz', 'TY IT/A', 23),
(11, 'Suraj Chauhan', 'TY IT/A', 1),
(12, 'Pankaj', '10/A', 9),
(13, 'Sahil', 'TY CS/A', 11),
(14, 'Rishab', '12/A', 12),
(15, 'Deepak', 'TY BCA', 9),
(16, 'Satish', 'TY BA', 8),
(17, 'Ankit', 'TY BAF', 10),
(18, 'Ragini ', 'TY IT/A', 5),
(19, 'Ashwini', 'TY IT/A', 6),
(20, 'Avantika', 'TY IT/A', 4),
(21, 'Suraj Gupta', 'TY IT/A', 3),
(22, 'Geetanjali', 'TY IT/A', 37),
(23, 'Gayetri', 'TY BBA', 13),
(24, 'SWETA', 'TY BMS', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
