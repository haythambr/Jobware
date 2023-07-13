-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 07:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobware`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `time_type` varchar(255) NOT NULL,
  `validity` varchar(300) NOT NULL DEFAULT 'Available',
  `type_job` varchar(255) NOT NULL,
  `job_info` varchar(2048) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `email`, `job_name`, `city`, `salary`, `time_type`, `validity`, `type_job`, `job_info`, `phone`) VALUES
(5, 'yazedshahen888@gmail.com', 'graphic designer', 'Tafila', 5155, 'Part-Time', 'Available', 'DEVELOPMENT', '', 0),
(6, 'yazedshahen37@gmail.com', 'graphic designer', 'Tafila', 5155, 'Part-Time', 'Available', 'DEVELOPMENT', '', 0),
(11, 'yazedshahen37@gmail.com', 'programs Developer', 'Aqaba', 789, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(12, 'yazedshahen888@gmail.com', 'programs Developer', 'Aqaba', 862, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(20, 'yazedshahen888@gmail.com', 'it projects manager', 'Al-Salt', 380, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(21, 'yazedshahen888@gmail.com', 'it projects manager', 'Al-Salt', 320, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(22, 'yazedshahen888@gmail.com', 'Blacksmith man', 'Aqaba', 885, 'Part Time', 'Expired', 'builder', 'yazed', 779068277),
(29, 'yazedshahen888@gmail.com', 'network engineer', 'Jerash', 455, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(30, 'yazedshahen888@gmail.com', 'network engineer', 'Jerash', 455, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(31, 'yazedshahen888@gmail.com', 'network engineer', 'Jerash', 455, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(32, 'yazedshahen888@gmail.com', 'information security engineer', 'Irbid', 470, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(33, 'yazedshahen888@gmail.com', 'information security engineer', 'Irbid', 470, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(34, 'yazedshahen888@gmail.com', 'information security engineer', 'Irbid', 470, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(35, 'yazedshahen888@gmail.com', 'information security engineer', 'Irbid', 470, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(36, 'yazedshahen888@gmail.com', 'information security engineer', 'Irbid', 470, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(37, '1234@gmail.com', 'programs Developer', 'Amman', 595, 'Part-Time', 'Available', 'DEVELOPMENT', '  jhvjhvjhvhjvjhjv', 779068277),
(39, '1234@gmail.com', 'network engineer', 'Zarqa', 6666, 'Full-Time', 'Available', 'DEVELOPMENT', '5565156', 0),
(43, '1234@gmail.com', 'information security engineer', 'Irbid', 2147483647, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(44, '1234@gmail.com', 'information security engineer', 'Irbid', 500, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(45, '1234@gmail.com', 'programs Developer', 'Al-Salt', 5155, 'Part-Time', 'Available', 'DEVELOPMENT', '', 0),
(46, '1234@gmail.com', 'graphic designer', 'Amman', 111111, 'Part-Time', 'Available', 'DEVELOPMENT', '', 0),
(47, '1234@gmail.com', 'programs Developer', 'Al-Salt', 524, 'Part-Time', 'Available', 'DEVELOPMENT', '', 0),
(50, '1234@gmail.com', 'network manager', 'Al-Salt', 467, 'Part-Time', 'Available', 'DEVELOPMENT', '', 0),
(51, '1234@gmail.com', 'network engineer', 'Irbid', 4552, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(52, '1234@gmail.com', 'graphic designer', 'Amman', 7778, 'Full-Time', 'Available', 'DEVELOPMENT', '', 0),
(53, '1234@gmail.com', 'computer maintenance technician', 'Irbid', 7534, 'Part-Time', 'Available', 'DEVELOPMENT', 'uuuuuuuuuuuuu', 779068277),
(54, '1234@gmail.com', 'systems analyst', 'Amman', 456, 'Part-Time', 'Available', 'DEVELOPMENT', 'mmmmmmmmmmmmmmmmm', 779068277),
(55, '1234@gmail.com', 'it projects manager', 'Al-Salt', 677, 'Full-Time', 'Available', 'DEVELOPMENT', ' v hchgvhgvhgvjjv', 779068277),
(56, '1234@gmail.com', 'computer maintenance technician', 'Zarqa', 1475, 'Full-Time', 'Available', 'DEVELOPMENT', 'yazeed', 779068277),
(57, '1234@gmail.com', 'programs Developer', 'Amman', 4555, 'Full-Time', 'Available', 'DEVELOPMENT', 'hi', 779068277),
(58, '1234@gmail.com', 'it projects manager', 'Jerash', 451, 'Full-Time', 'Available', 'DEVELOPMENT', 'hiiiii', 7777),
(59, '1234@gmail.com', 'computer maintenance technician', 'Zarqa', 451, 'Part-Time', 'Available', 'DEVELOPMENT', 'Hi', 779068277),
(60, '1234@gmail.com', 'programs Developer', 'Zarqa', 230, 'Part-Time', 'Available', 'DEVELOPMENT', 'Hi', 779068277),
(61, 'yazedshahen888@gmail.com', 'information security manager', 'Jerash', 2756, 'Full-Time', 'Available', 'DEVELOPMENT', 'hhhhhhhhhhhhhhhhhh', 779068277),
(62, 'yazedshahen888@gmail.com', 'network engineer', 'Irbid', 451, 'Part-Time', 'Available', 'DEVELOPMENT', 'bhbbkhbkhb', 7777);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_applied`
--

CREATE TABLE `jobs_applied` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jobs` int(11) NOT NULL,
  `Submited_in` varchar(255) NOT NULL,
  `Order_Status` varchar(255) NOT NULL DEFAULT 'pending',
  `Worker_experiences` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs_applied`
--

INSERT INTO `jobs_applied` (`id`, `id_user`, `id_jobs`, `Submited_in`, `Order_Status`, `Worker_experiences`) VALUES
(1, 30, 22, '11-Mar-2022', 'pending', ''),
(2, 30, 11, '11-Mar-2022', 'pending', ''),
(3, 30, 33, '11-Mar-2022', 'pending', ''),
(4, 30, 20, '11-Mar-2022', 'pending', ''),
(5, 28, 37, '11-Mar-2022', 'Accepted', ''),
(6, 28, 6, '11-May-2023', 'pending', ''),
(7, 28, 11, '11-May-2023', 'pending', ''),
(8, 30, 6, '11-May-2023', 'pending', ''),
(9, 30, 6, '12-May-2023', 'pending', ''),
(10, 30, 51, '13-May-2023', 'pending', ''),
(11, 30, 54, '13-May-2023', 'pending', ''),
(12, 28, 28, '14-May-2023', 'pending', ''),
(13, 28, 60, '14-May-2023', 'Rejected', ''),
(14, 28, 58, '14-May-2023', 'Rejected', 'halooo'),
(15, 15, 37, '11-Mar-2022', 'pending', ''),
(16, 30, 60, '14-May-2023', 'Accepted', ''),
(17, 30, 52, '15-May-2023', 'pending', 'yazeed ahmed shaheen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `age` int(25) NOT NULL,
  `image` varchar(1024) NOT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `user_name`, `email`, `password`, `city`, `age`, `image`, `phone`) VALUES
(8, 'yazedshahen', 'yazed', 'yazedshahen8@gmail.com', 'Yazeed2000', 'Tafila', 25, '', 0),
(9, 'yazedshahen', 'yyyyy ', '12345@gmail.com', 'Yazeed200', 'Aqaba', 55, '', 0),
(10, 'yazedshahen', ' yyyyy   jj', 'yazed_shahen@yahoo.com', 'Yazeed200', 'Irbid', 75, '', 0),
(11, '      vhvhbvhvhvh      ', '   vvhvhvhv', 'yazedshahen88@gmail.com', 'Yazeed2000', '   Aqaba      ', 5, '', 0),
(12, 'qqqqq', 'hhhh', 'yazedshahenrrr8@gmail.com', 'Yazeed2000', '    Aqaba        ', 55, '', 0),
(13, '', '', '', '', '', 0, '', 0),
(14, '   yazed', '   yazed1', '1234445@gmail.com', 'Yazeed2000', 'Madaba', 55, '', 0),
(15, 'Haytham ahmad taher musa', 'haythambr', 'test.test@gmail.com', '61bd60c60d9fb60cc8fc7767669d40a1', 'Al-Salt', 15, 'Snapchat-713800910.jpg', 111111),
(24, 'yazedshahen', 'yazed1', 'yazedshahe5n8@gmail.com', 'Yazeed2000', 'Tafila', 25, '', 0),
(25, 'yazedshahen', 'yazed12', 'yazedshahe5nv28@gmail.com', 'Yazeed2000', 'Tafila', 25, '', 0),
(26, 'yazedshahen', 'yazed1222', 'yazedshahe225nv28@gmail.com', 'md5(Yazeed2000)', 'Tafila', 25, '', 0),
(27, 'yazedshahen', 'yazed12ee', 'yazedshaqqhe5nv28@gmail.com', '0b09584c87f9d9d9b43360df82d91ec0', 'Tafila', 25, '', 0),
(28, 'yazedshahen', 'yazed22', 'yazedshahen888@gmail.com', '202cb962ac59075b964b07152d234b70', 'Amman', 25, 'pic-3.png', 779068277),
(29, 'yyyyyy', '123456', 'yazedshahen37@gmail.com', '0b09584c87f9d9d9b43360df82d91ec0', 'Amman', 55, 'about-img-3.jpg', 2147483647),
(30, '1234', '1234', '1234@gmail.com', '74da0831371a3a2315ae420b95d03fb8', 'Irbid', 26, 'pink roses.jpg', 779068277),
(31, '44444', 'aaaaaaaaaaa', '44444@gmail.com', '74da0831371a3a2315ae420b95d03fb8', 'Irbid', 25, '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs_applied`
--
ALTER TABLE `jobs_applied`
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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `jobs_applied`
--
ALTER TABLE `jobs_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
