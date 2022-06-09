-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 06:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `benefits`
--

CREATE TABLE `benefits` (
  `benefit_id` int(11) NOT NULL,
  `basic_salary` varchar(11) DEFAULT NULL,
  `tran_allowance` int(11) DEFAULT NULL,
  `house_allowance` float DEFAULT NULL,
  `other_cash_allowance` int(11) DEFAULT NULL,
  `transport` tinyint(1) NOT NULL DEFAULT '0',
  `house` tinyint(1) NOT NULL DEFAULT '0',
  `loan` tinyint(1) NOT NULL DEFAULT '0',
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benefits`
--

INSERT INTO `benefits` (`benefit_id`, `basic_salary`, `tran_allowance`, `house_allowance`, `other_cash_allowance`, `transport`, `house`, `loan`, `emp_id`) VALUES
(1, '643', 242, 565, 4546, 1, 1, 0, 0),
(2, '643', 242, 565, 4546, 1, 1, 0, 0),
(3, '643', 242, 565, 4546, 1, 1, 1, 0),
(4, '643', 242, 565, 4546, 1, 1, 1, 5),
(5, '643', 242, 565, 4546, 0, 0, 0, 5),
(6, '643', 242, 565, 4546, 0, 1, 1, 5),
(7, '643', 242, 565, 4546, 0, 0, 0, 5),
(8, NULL, NULL, NULL, NULL, 0, 0, 0, 0),
(9, '643', 242, 565, 4546, 1, 0, 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empl_id` int(11) NOT NULL,
  `emp_code` varchar(30) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `birth_date` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `mstatus` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `qualification` int(11) NOT NULL,
  `starting_date` varchar(30) NOT NULL,
  `ending_date` varchar(255) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `id_card` varchar(16) NOT NULL,
  `id_photo` varchar(255) NOT NULL,
  `place_birth` varchar(255) NOT NULL,
  `place_residence` varchar(30) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `position` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `n_child` int(11) NOT NULL,
  `insurance` varchar(30) NOT NULL,
  `health_condition` text NOT NULL,
  `em_name` varchar(50) NOT NULL,
  `em_number` varchar(20) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `user_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empl_id`, `emp_code`, `f_name`, `m_name`, `l_name`, `birth_date`, `gender`, `mstatus`, `phone`, `email`, `qualification`, `starting_date`, `ending_date`, `nationality`, `id_card`, `id_photo`, `place_birth`, `place_residence`, `photo`, `cv`, `position`, `status`, `father_name`, `mother_name`, `n_child`, `insurance`, `health_condition`, `em_name`, `em_number`, `username`, `password`, `user_type`) VALUES
(1, 'EMP/0001/2020', 'ndungutse', 'patrick', 'p', '1996/07/07', 'Male', '', '0786159341', 'niyitegekam@gmail.com', 1, '2020/01/01', '', 'Rwandan', '125465763873', '', '', 'kigali', 'FB_IMG_1569896453102.jpg', '‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0S\0\0×\0\0\0€[Ð¥\0\0\0sRGB\0®Îé\0\0\0gAMA\0\0±üa\0\0\0	pHYs\0\0Ä\0\0Ä•+\0\0ÜÐIDATx^ìÝ	¼TóÿÇño¶P”R¶´P‘ˆìT„ì[¨ìdO?%¥²&û.mH–íE*‘­Òb×ŠÊVÚ,	?üÎÿ¾¿ÿ3™ngæ|ÏlwæÞ×óñ˜MÍÜ¹g›sÞçóý|ËyE\0\0\0\0\0\0\0 ©üÿ\0\0\0\0\0\0\0’ L\0\0\0\0\0\0\0„©\0\0\0\0\0\0\0à€0\0\0\0\0\0\0\0¦\0\0\0\0\0\0€ÂT\0\0\0', '1', 'Active', 'Marcel niyitegeka', 'Patrick Ndungutse', 3, 'SONARWA', '', '', '', 'admin', 'admin', 1),
(2, 'EMP/0002/2020', 'jalfs', 'sjdfk', 'ajska', '2020-01-22', 'Male', '', '8375938', 'niyitegekamar@gmail.coj', 1, '2020-01-24', '2020-01-21', 'sfsfs', '32938', '', '', 'sdfsf', 'shema2.PNG', 'Screenshot (207).png', '1', 'Active', 'fhfjh', 'ggjyhk', 56, 'fhjg', '', '', '', 'max', 'max', 2),
(3, 'EMP/0003/2020', 'jkashf', 'kjsdhf', 'kjgjskh', '2020-01-16', 'Male', '', '728368', 'niyitegekamar@gmail.coj', 1, '2020-01-23', '2020-01-17', 'asjdfa', '1234', '', '', 'ahsjkdf', '', '', '1', 'Active', 'hsjdh', 'gjgfjhg', 465, 'fghjg', '', '', '', 'yevs', 'fhjh', 3),
(4, 'EMP/0004/2020', 'asdk', 'alkdsjf', 'ajksdhf', '2020-01-18', 'Male', '', '0786159341', 'niyitegekamar@gmail.coj', 1, '2020-01-24', '2020-01-18', 'rwandan', '1293798320', '', '', 'askfa', 'Capture.PNG', 'shema2.PNG', '1', 'Active', 'adfasf', 'asdfas', 23, 'asdkfal', '', '', '', 'yevs', 'fhjh', 3),
(5, 'EMP/0005/2020', 'yves', 'mutangana', 'ahsdjf', '2020-01-31', 'Male', '', '9786564', 'yve@gmail.com', 1, '2020-01-24', '2020-01-25', 'rwandan', '76756325767', '', '', 'kigali', 'FB_IMG_1569896453102.jpg', '20191111_170409.jpg', '1', 'Active', 'jahsfk', 'sjdfks', 3, 'sorasi', '', '', '', 'yves', 'hasjfh', 0),
(6, 'EMP/0006/2020', 'pascal', 'fhj', 'jghf', '2020-01-25', 'Male', '', '545346', 'niyitegekamar@gmail.coj', 0, '2020-01-16', '2020-01-18', 'Burundian', '3453465', '', '', 'gitega', '20191111_170359.jpg', 'Yes.svg', '1', 'Active', 'dghf', 'dgfh', 54, 'dgfh', '', '', '', 'yevs', 'fhjh', 0),
(7, 'EMP/0007/2020', 'Uwase', 'k', 'Aline', '2020-02-11', 'Male', 'Male', '7468234', 'uieiuwgd', 0, '2020-02-22', '2020-02-20', 'Rwandan', '23423', 'IMG_0002.JPG', 'ashvcjh', 'gvjhcs', 'IMG_0014.JPG', 'IMG_0232.JPG', '1', '', 'wgdad', 'ewfr', 3, 'werw', 'yufeiwfsdjbcw', 'hjgdjasc', '7235784', NULL, NULL, 0),
(8, 'EMP/0008/2020', 'Mugabo', 'M', 'Josiane', '2020-02-21', 'Female', 'Single', '078832423', 'alne@gmail.com', 0, '2020-02-13', '2020-02-20', 'Rwandan', '1234534345', 'IMG_0232.JPG', 'ashvcjh', 'Kimihurura', 'IMG_0014.JPG', 'IMG_0232.JPG', '1', '', 'avsjd', 'Alice', 3, 'RAMA', 'hjgsjdhk', 'Yves', '078832913', NULL, NULL, 0),
(9, 'EMP/0009/2020', 'Mugabo', 'M', 'Josiane', '2020-02-21', 'Female', 'Single', '078832423', 'alne@gmail.com', 0, '2020-02-13', '2020-02-20', 'Rwandan', '1234534345', 'IMG_0232.JPG', 'ashvcjh', 'Kimihurura', 'IMG_0014.JPG', 'IMG_0232.JPG', '1', '', 'avsjd', 'Alice', 3, 'RAMA', 'hjgsjdhk', 'Yves', '078832913', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `post_id` int(11) NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_desc` text NOT NULL,
  `added_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`post_id`, `post_name`, `post_desc`, `added_time`) VALUES
(1, 'IT', 'ASKDJFHAJS', '2020-01-16 17:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `qual_id` int(11) NOT NULL,
  `qual_name` varchar(30) NOT NULL,
  `qual_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`qual_id`, `qual_name`, `qual_description`) VALUES
(0, 'Bachelor', 'college degree'),
(1, 'A\'level', 'S6 diploma');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`user_id`, `user_type`, `user_desc`) VALUES
(1, 'Admin', 'kjasdflka'),
(2, 'HR(Human Resource)', 'adsfasdf'),
(3, 'Employee', 'kjasdflka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benefits`
--
ALTER TABLE `benefits`
  ADD PRIMARY KEY (`benefit_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empl_id`),
  ADD KEY `qualification` (`qualification`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`qual_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benefits`
--
ALTER TABLE `benefits`
  MODIFY `benefit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
