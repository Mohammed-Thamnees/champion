-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 08:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `champion`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete_registration`
--

CREATE TABLE `athlete_registration` (
  `ath_id` int(11) NOT NULL COMMENT 'athlete id',
  `name` varchar(25) DEFAULT NULL COMMENT 'name of athlete',
  `dob` date DEFAULT NULL COMMENT 'date of birth',
  `gender` varchar(7) DEFAULT NULL COMMENT 'gender of athlete',
  `email` varchar(30) DEFAULT NULL COMMENT 'email of athlete',
  `phone` int(11) DEFAULT NULL COMMENT 'athlete phone number',
  `father_name` varchar(30) DEFAULT NULL COMMENT 'name of father',
  `mother_name` varchar(30) DEFAULT NULL COMMENT 'name of mother',
  `dist` varchar(15) DEFAULT NULL COMMENT 'district',
  `address` varchar(50) DEFAULT NULL COMMENT 'address',
  `pin` int(11) DEFAULT NULL COMMENT 'pin number',
  `coach` varchar(30) DEFAULT NULL COMMENT 'name of coach',
  `blood` varchar(5) DEFAULT NULL COMMENT 'blood group',
  `aadhar` varbinary(30) DEFAULT NULL COMMENT 'aadhar number',
  `photo` varbinary(30) DEFAULT NULL COMMENT 'athlete photo',
  `regno` varchar(15) DEFAULT NULL COMMENT 'register number',
  `clgid` int(11) DEFAULT NULL COMMENT 'registered college id',
  `approve` varchar(10) DEFAULT NULL COMMENT 'spprove or not'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `athlete_registration`
--

INSERT INTO `athlete_registration` (`ath_id`, `name`, `dob`, `gender`, `email`, `phone`, `father_name`, `mother_name`, `dist`, `address`, `pin`, `coach`, `blood`, `aadhar`, `photo`, `regno`, `clgid`, `approve`) VALUES
(1, 'thamnees', '2020-09-17', 'male', 'muthup611@gmail.com', 234567890, 'kunjutty', 'kadeeja', 'Malappuram', 'tirur', 4324, 'adarsh', 'A+ve', 0x6b7361612e706e67, 0x6473737364646464646464646464642e6a7067, '1000000000', 2, 'approved'),
(2, 'sulaiman', '2020-09-01', 'male', 'muthup611@gmail.com', 2147483647, 'areela', 'ariyeee illa', 'Kannur', 'shiji\r\nkannuur\r\nkerala\r\n', 67567, 'njan', 'A+ve', 0x61646d696e686f6d652e706e67, 0x6174686c5f6c6973745f61646d696e2e706e67, '1000000002', 7, 'approved'),
(3, 'rashida', '2020-09-17', 'female', 'rashi@gmail.com', 2147483647, 'rash', 'rashi', 'Ernakulam', 'rashid\r\nvairancode\r\nkerala', 765434, 'rafi', 'B+ve', 0x6174686c6574655f617070726f76616c312e706e67, 0x6174686c6574655f617070726f76616c322e706e67, '1000000004', 4, 'approved'),
(4, 'aslam', '2020-07-15', 'male', 'aslam@gmail.com', 2147483647, 'asl', 'aslu', 'Malappuram', 'aslm veetil\r\nmalappuram', 87548, 'thamnees', 'B+ve', 0x6368616d70696f6e2e706e67, 0x726573756c745f7075626c6973682e706e67, '1000000001', 4, 'approved'),
(5, 'aswini', '2020-01-01', 'female', 'aswini@gmail.com', 2147483647, 'havoo', 'havooo', 'Kozhikode', 'aswini veetil\r\nkozhikode', 878373, 'adarsh', 'B+ve', 0x61646d696e686f6d652e706e67, 0x6368616d70696f6e2e706e67, '1000000003', 4, 'approved'),
(6, 'radhika', '2019-08-17', 'female', 'radhika@gmail.com', 2147483647, 'ra', 'ri', 'Ernakulam', 'radhika veetil', 768765, 'cachil', 'B+ve', 0x636c675f617070726f76616c322e706e67, 0x636f6d706c61696e74312e706e67, '1000000005', 2, 'approved'),
(7, 'ramsi', '2020-10-07', 'male', 'ramsi@gmail.com', 2147483647, 'rasheed', 'ramla', 'Malappuram', 'tanalur\r\nmalappuram', 676854, 'abid', 'O+ve', 0x6174686c6574656c69737461646d696e2e504e47, 0x706c616e742e6a7067, '1000000006', 2, 'approved'),
(8, 'suhail', '2013-01-29', 'male', 'suhail@gmail.com', 2147483647, 'suhu', 'suhi', 'Malappuram', 'parappiul\r\ntanaloor\r\ntirur', 676554, 'abid', 'AB+ve', 0x6174686c6574656c69737461646d696e2e504e47, 0x706c616e742e6a7067, '1000000007', 8, 'approved'),
(9, 'mobrocky', '2013-06-10', 'male', 'muthup611@gmail.com', 2147483647, 'mob', 'rocky', 'Thrissur', 'tirur', 456789, 'rafi', 'A-ve', 0x6164312e706e67, 0x6164322e706e67, '0', 4, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `champion`
--

CREATE TABLE `champion` (
  `champ_id` int(11) NOT NULL,
  `regno` int(11) DEFAULT NULL,
  `total_point` int(11) DEFAULT NULL,
  `meet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `champion`
--

INSERT INTO `champion` (`champ_id`, `regno`, `total_point`, `meet_id`) VALUES
(1, 1000000001, 13, 1),
(2, 1000000000, 15, 1),
(3, 1000000006, 8, 1),
(4, 1000000000, 15, 1),
(5, 1000000006, 8, 1),
(6, 1000000001, 13, 1),
(7, 1000000003, 10, 1),
(8, 1000000004, 5, 1),
(9, 1000000005, 3, 1),
(10, 1000000001, 13, 1),
(11, 1000000000, 15, 1),
(12, 1000000006, 8, 1),
(13, 1000000001, 13, 1),
(14, 1000000000, 15, 1),
(15, 1000000006, 8, 1),
(16, 1000000003, 10, 1),
(17, 1000000004, 5, 1),
(18, 1000000005, 3, 1),
(19, 1000000003, 10, 1),
(20, 1000000004, 5, 1),
(21, 1000000005, 3, 1),
(22, 1000000003, 10, 1),
(23, 1000000004, 5, 1),
(24, 1000000005, 3, 1),
(25, 1000000001, 13, 1),
(26, 1000000000, 15, 1),
(27, 1000000006, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `college_registration`
--

CREATE TABLE `college_registration` (
  `clg_id` int(11) NOT NULL COMMENT 'college id',
  `clg_name` varchar(30) DEFAULT NULL COMMENT 'college name',
  `affliation` int(11) DEFAULT NULL COMMENT 'affliation number',
  `address` varchar(50) DEFAULT NULL COMMENT 'college address',
  `district` varchar(15) DEFAULT NULL COMMENT 'college district',
  `pin` int(11) DEFAULT NULL COMMENT 'pin number',
  `email` varchar(30) DEFAULT NULL COMMENT 'email id of college',
  `phone` int(11) DEFAULT NULL COMMENT 'pnone number',
  `password` varchar(20) DEFAULT NULL COMMENT 'college password',
  `lid` int(11) DEFAULT NULL COMMENT 'login id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_registration`
--

INSERT INTO `college_registration` (`clg_id`, `clg_name`, `affliation`, `address`, `district`, `pin`, `email`, `phone`, `password`, `lid`) VALUES
(1, 'kmct', 23456789, 'kmct college\r\nkallanthode\r\ncalicut', 'Kozhikode', 45455, 'kmct@gmail.com', 234567890, 'kmct', 2),
(2, 'ideal', 34567890, 'ideal college,\r\nkallanthode\r\nmalappuram', 'Malappuram', 45678, 'ideal@gmail.com', 456789055, 'ideal', 3),
(3, 'mes', 31232435, 'mes college\r\nkuttippuram\r\nmalappuram', 'Malappuram', 88877, 'mes@gmail.com', 2147483647, 'mes', 4),
(4, 'pmsa', 235627884, 'pmsa college\r\ntirur\r\nmalappuram', 'Malappuram', 654564, 'pmsa@gmail.com', 0, '', 5),
(5, '', 0, '', 'select', 0, '', 0, '', 6),
(6, 'ideal123', 4352764, 'ideal college\r\nmalappuram', 'Malappuram', 785548, 'ideal123@gmail.com', 2147483647, 'ideal123', 7),
(7, 'pkm college', 54367836, 'pkm college\r\ntirur\r\nmalappuram', 'Malappuram', 676551, 'pkm@gmail.com', 2147483647, 'pkm', 8);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cmp_id` int(11) NOT NULL,
  `clg_id` int(11) DEFAULT NULL,
  `cmplaint` varchar(50) DEFAULT NULL,
  `reply` varchar(50) DEFAULT NULL,
  `cmp_date` date DEFAULT NULL,
  `rep_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cmp_id`, `clg_id`, `cmplaint`, `reply`, `cmp_date`, `rep_date`) VALUES
(1, 4, 'mes complaint', 'already replied....', '2020-11-10', '2020-11-13'),
(2, 2, 'kmct complaint', 'reply to kmct', '2020-11-10', '2020-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `evt_id` int(11) NOT NULL COMMENT 'event id',
  `evt_name` varchar(30) DEFAULT NULL COMMENT 'event name',
  `gender` varchar(7) DEFAULT NULL COMMENT 'gender'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`evt_id`, `evt_name`, `gender`) VALUES
(1, '100 meter running', 'male'),
(2, '200 meter running', 'male'),
(3, '400 meter running', 'male'),
(4, '800 meter running', 'male'),
(5, '1500 meter running', 'male'),
(6, '5000 meter running', 'male'),
(7, '10000 meter running', 'male'),
(8, '110 meter hurdles', 'male'),
(9, '400 meter hurdles', 'male'),
(10, 'shortput', 'male'),
(11, 'disc throw', 'male'),
(12, 'javelin', 'male'),
(13, 'hammer throw', 'male'),
(14, 'long jump', 'male'),
(15, 'triple jump', 'male'),
(16, 'high jump', 'male'),
(17, 'pole walt', 'male'),
(18, '4*100 meter relay', 'male'),
(19, '4*400 meter relay', 'male'),
(20, '100 meter running', 'female'),
(21, '200 meter running', 'female'),
(22, '400 meter running', 'female'),
(23, '800 meter running', 'female'),
(24, '1500 meter running', 'female'),
(25, '5000 meter running', 'female'),
(26, '10000 meter running', 'female'),
(27, '110 meter hurdles', 'female'),
(28, '400 meter hurdles', 'female'),
(29, 'shortput', 'female'),
(30, 'disc throw', 'female'),
(31, 'javelin', 'female'),
(32, 'hammer throw', 'female'),
(33, 'long jump', 'female'),
(34, 'triple jump', 'female'),
(35, 'high jump', 'female'),
(36, 'pole walt', 'female'),
(37, '4*100 meter relay', 'female'),
(38, '4*400 meter relay', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `event_select`
--

CREATE TABLE `event_select` (
  `evtslc_id` int(11) NOT NULL COMMENT 'event select id',
  `evt_id` int(11) DEFAULT NULL COMMENT 'event id',
  `ath_id` int(11) DEFAULT NULL COMMENT 'athlete id',
  `meet_id` int(11) DEFAULT NULL COMMENT 'meet id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_select`
--

INSERT INTO `event_select` (`evtslc_id`, `evt_id`, `ath_id`, `meet_id`) VALUES
(1, 20, 3, 1),
(2, 21, 3, 1),
(3, 22, 3, 1),
(4, 37, 3, 1),
(5, 1, 4, 1),
(6, 2, 4, 1),
(7, 3, 4, 1),
(8, 18, 4, 1),
(9, 20, 5, 1),
(10, 21, 5, 1),
(11, 22, 5, 1),
(12, 37, 5, 1),
(13, 1, 1, 1),
(14, 2, 1, 1),
(15, 3, 1, 1),
(16, 18, 1, 1),
(17, 20, 6, 1),
(18, 21, 6, 1),
(19, 22, 6, 1),
(20, 37, 6, 1),
(21, 1, 7, 1),
(22, 2, 7, 1),
(23, 3, 7, 1),
(24, 18, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL COMMENT 'login id',
  `username` varchar(30) DEFAULT NULL COMMENT 'username',
  `password` varchar(20) DEFAULT NULL COMMENT 'password',
  `type` varchar(10) DEFAULT NULL COMMENT 'type of user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'kmct@gmail.com', 'kmct', 'user'),
(3, 'ideal@gmail.com', 'ideal', 'reject'),
(4, 'mes@gmail.com', 'mes', 'user'),
(5, 'pmsa@gmail.com', '', 'pending'),
(6, '', '', 'pending'),
(7, 'ideal123@gmail.com', 'ideal123', 'user'),
(8, 'pkm@gmail.com', 'pkm', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `meet_register`
--

CREATE TABLE `meet_register` (
  `meet_id` int(11) NOT NULL COMMENT 'meet id',
  `meet_name` varchar(40) DEFAULT NULL COMMENT 'name of meet',
  `venue` varchar(20) DEFAULT NULL COMMENT 'venue of meet',
  `place` varchar(20) DEFAULT NULL COMMENT 'place of meet',
  `start_date` date DEFAULT NULL COMMENT 'start date of meet',
  `end_date` date DEFAULT NULL COMMENT 'end date of meet',
  `apply_before` date DEFAULT NULL COMMENT 'apply before the date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meet_register`
--

INSERT INTO `meet_register` (`meet_id`, `meet_name`, `venue`, `place`, `start_date`, `end_date`, `apply_before`) VALUES
(1, '29th athletic meet', 'tirur stadium', 'tirur', '2020-11-21', '2020-11-22', '2020-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL COMMENT 'id of result',
  `date` date DEFAULT NULL COMMENT 'date of result publish',
  `first` int(11) DEFAULT NULL,
  `second` int(11) DEFAULT NULL,
  `third` int(11) DEFAULT NULL,
  `evt_id` int(11) DEFAULT NULL,
  `meet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `date`, `first`, `second`, `third`, `evt_id`, `meet_id`) VALUES
(1, '2020-11-11', 1000000001, 1000000000, 1000000006, 1, 1),
(2, '2020-11-11', 1000000000, 1000000006, 1000000001, 2, 1),
(3, '2020-11-11', 1000000003, 1000000004, 1000000005, 20, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete_registration`
--
ALTER TABLE `athlete_registration`
  ADD PRIMARY KEY (`ath_id`);

--
-- Indexes for table `champion`
--
ALTER TABLE `champion`
  ADD PRIMARY KEY (`champ_id`);

--
-- Indexes for table `college_registration`
--
ALTER TABLE `college_registration`
  ADD PRIMARY KEY (`clg_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`evt_id`);

--
-- Indexes for table `event_select`
--
ALTER TABLE `event_select`
  ADD PRIMARY KEY (`evtslc_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meet_register`
--
ALTER TABLE `meet_register`
  ADD PRIMARY KEY (`meet_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete_registration`
--
ALTER TABLE `athlete_registration`
  MODIFY `ath_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'athlete id', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `champion`
--
ALTER TABLE `champion`
  MODIFY `champ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `college_registration`
--
ALTER TABLE `college_registration`
  MODIFY `clg_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'college id', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cmp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `evt_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'event id', AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `event_select`
--
ALTER TABLE `event_select`
  MODIFY `evtslc_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'event select id', AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'login id', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meet_register`
--
ALTER TABLE `meet_register`
  MODIFY `meet_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'meet id', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of result', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
