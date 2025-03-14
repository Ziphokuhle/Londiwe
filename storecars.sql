-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 02:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storecars`
--

-- --------------------------------------------------------

--
-- Table structure for table `buying`
--

CREATE TABLE `buying` (
  `user` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `province` varchar(150) NOT NULL,
  `car` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buying`
--

INSERT INTO `buying` (`user`, `name`, `email`, `password`, `gender`, `province`, `car`) VALUES
(1, 'MTHOKOZISI HECTOR HLATSHWAYO', '214362104@tut4life.ac.za', '909999', 'Male', 'Kwazulu Natal', 'volvo'),
(2, 'MTHOKOZISI HECTOR HLATSHWAYO', '214362104@tut4life.ac.za', '9899099', 'Male', 'Gauteng', 'BMW'),
(3, 'thandiwe', 'nn@g.com', 'r4544445', 'Female', 'limpopo', 'volvo'),
(4, 'mtho', 'mthova@gmail.com', '4434343', 'Male', 'Kwazulu Natal', 'BMW'),
(5, 'hector', 'nn@g.com', '33', 'Male', 'limpopo', 'BMW'),
(6, 'sanele', 'sanele@tut.ac.za', '123', 'Female', 'limpopo', 'volvo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buying`
--
ALTER TABLE `buying`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buying`
--
ALTER TABLE `buying`
  MODIFY `user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
