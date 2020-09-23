-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 23, 2020 at 12:39 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(13) NOT NULL,
  `password` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `faculty` varchar(150) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `name`, `faculty`, `birthday`) VALUES
(1, '1160102030427', '195689', 'K.Jaruwan', '', '0000-00-00'),
(2, 'admin', 'admin', 'K.Varunee', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `meetdr`
--

CREATE TABLE `meetdr` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `ownerid` varchar(13) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางนัดพบแพทย์';

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `q1` int(3) DEFAULT NULL,
  `q2` int(3) DEFAULT NULL,
  `q3` int(3) DEFAULT NULL,
  `q4` int(3) DEFAULT NULL,
  `q5` int(3) DEFAULT NULL,
  `q6` int(3) DEFAULT NULL,
  `q7` int(3) DEFAULT NULL,
  `q8` int(3) DEFAULT NULL,
  `q9` int(3) DEFAULT NULL,
  `q_sum` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q_sum`) VALUES
(1, 1, 2, 3, 1, 2, 3, 1, 2, 3, 18),
(2, 1, 3, 1, 2, 1, 2, 1, 1, 2, 14),
(3, 1, 3, 1, 2, 1, 2, 1, 1, 2, 14),
(4, 2, 2, 1, 2, 3, 2, 2, 2, 1, 17),
(5, 2, 1, 3, 2, 2, 0, 0, 0, 0, 10),
(6, 2, 1, 3, 2, 2, 3, 3, 2, 3, 21),
(7, 2, 1, 1, 2, 2, 1, 0, 0, 0, 9),
(8, 2, 2, 2, 1, 3, 1, 2, 0, 0, 13),
(9, 0, 2, 0, 1, 1, 2, 1, 3, 3, 13),
(10, 3, 3, 3, 3, 3, 3, 3, 3, 3, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `meetdr`
--
ALTER TABLE `meetdr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `meetdr`
--
ALTER TABLE `meetdr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
