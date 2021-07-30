-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 04:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodejs-login`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `place` varchar(300) NOT NULL,
  `dob` date NOT NULL,
  `program` varchar(200) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `yr` varchar(10) NOT NULL,
  `gyear` int(10) NOT NULL,
  `gscore` int(10) NOT NULL,
  `college` varchar(100) NOT NULL,
  `hsyear` int(10) NOT NULL,
  `hsscore` int(10) NOT NULL,
  `hscollege` varchar(100) NOT NULL,
  `syear` int(10) NOT NULL,
  `sscore` int(10) NOT NULL,
  `school` varchar(100) NOT NULL,
  `skill1` varchar(10) NOT NULL,
  `skill2` varchar(10) NOT NULL,
  `skill3` varchar(10) NOT NULL,
  `skill4` varchar(10) NOT NULL,
  `skill5` varchar(10) NOT NULL,
  `proj1` varchar(100) NOT NULL,
  `link1` varchar(100) NOT NULL,
  `proj2` varchar(100) NOT NULL,
  `link2` varchar(100) NOT NULL,
  `proj3` varchar(100) NOT NULL,
  `link3` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `git` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `fullname`, `email`, `phone`, `place`, `dob`, `program`, `branch`, `yr`, `gyear`, `gscore`, `college`, `hsyear`, `hsscore`, `hscollege`, `syear`, `sscore`, `school`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`, `proj1`, `link1`, `proj2`, `link2`, `proj3`, `link3`, `fb`, `linkedin`, `git`, `about`) VALUES
(1, 'Adyasha Pattanayak', 'adyasha.pattanayak00@gmail.com', 2147483647, 'st jose road', '2021-07-21', 'btech', 'it', '3rd year', 2023, 89, 'cetb', 2019, 85, 'ravenshaw', 2017, 74, 'scb mps', 'html', 'css', 'java', 'php', 'python', 'elearning site', 'https://github.com/Adyashapattanayak04/online-learning-site', 'donation page', 'https://github.com/Adyashapattanayak04/online-learning-site', 'landing page', 'https://github.com/Adyashapattanayak04/online-learning-site', 'https://www.facebook.com/adyasha.pattanayak.921', 'https://www.linkedin.com/in/adyasha-pattanayak-2a49a6197/', 'https://github.com/Adyashapattanayak04/', '.I am pursuing my Bachelors in Information Technology. I am a tech enthusiast and passionate learner.\r\nI always believe in time-management and punctuality. I am skilled in HTML, CSS, JavaScript,Java, Python and C.Have knowledge in Bootstrap, PHP, MySql, Nodejs.\r\nI have done various small projects. I also like competitive coding and contribute to open source network.\r\nI am focusing on Web development and Web designing .\r\nI am actively looking for internship in Front-end Web development');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` int(20) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `year` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `number`, `branch`, `year`, `password`) VALUES
(7, 'Adyasha Pattanayak', 'adyasha.pattanayak00@gmail.com', 2147483647, 'IT', '3rd year', '51e7fd23fbb3f6cc91814f741e9599d9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
