-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2016 at 12:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary_details`
--

CREATE TABLE IF NOT EXISTS `beneficiary_details` (
  `Ben_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `Acc_no` bigint(10) NOT NULL,
  `Ben_acc_no` bigint(10) NOT NULL,
  `Ben_name` varchar(50) NOT NULL,
  `Amt_transfer` int(5) NOT NULL,
  PRIMARY KEY (`Ben_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `beneficiary_details`
--

INSERT INTO `beneficiary_details` (`Ben_id`, `Acc_no`, `Ben_acc_no`, `Ben_name`, `Amt_transfer`) VALUES
(1, 6715140909, 8764534841, 'Vibhash Pratik Singh', 10000),
(2, 6715140909, 7844134313, 'Sumit', 10000),
(3, 6715140909, 9845415210, 'faizan', 1000),
(7, 6715140909, 9851212131, 'Sanjeet Singh Jagdev', 15000),
(8, 8764534841, 7844134313, 'faizan', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `pan_details`
--

CREATE TABLE IF NOT EXISTS `pan_details` (
  `Acc_no` bigint(10) NOT NULL,
  `Acc_type` varchar(10) NOT NULL,
  `CIF_no` bigint(10) NOT NULL,
  `Branch_code` int(5) NOT NULL,
  `PAN_no` varchar(10) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Bal` bigint(15) NOT NULL,
  PRIMARY KEY (`Acc_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pan_details`
--

INSERT INTO `pan_details` (`Acc_no`, `Acc_type`, `CIF_no`, `Branch_code`, `PAN_no`, `User_name`, `Bal`) VALUES
(1234567889, 'Current', 1235343630, 75505, 'AJG7AVAW2J', 'ahmedfaizucop', 6),
(5956565620, 'Savings', 7852626256, 45120, 'SKDJ82BD77', 'swetaMishra', 2545000),
(6715140909, 'Savings', 2142612561, 98640, 'ANG86IAGMG', 'vibhashpratik19', 127000),
(7815103131, 'Savings', 1212025465, 75505, 'AJG7AVAW2J', 'ahmedfaizucop', 15400064),
(7898664210, 'Savings', 5464316100, 45650, 'JHG8AB2KA0', 'ravi98', 15780000),
(8764534841, 'current', 6847515355, 98640, 'ANG86IAGMG', 'vibhashpratik19', 7000),
(9809680967, 'Current', 8769870978, 56870, 'NFGA6AJ98G', 'abhi123', 4500000000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `Tran_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `Tran_date` date NOT NULL,
  `Ref_det` varchar(50) DEFAULT NULL,
  `Acc_no` bigint(10) NOT NULL,
  `Credit_amt` bigint(15) NOT NULL,
  `Debit_amt` bigint(15) NOT NULL,
  PRIMARY KEY (`Tran_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Tran_id`, `Tran_date`, `Ref_det`, `Acc_no`, `Credit_amt`, `Debit_amt`) VALUES
(1, '2016-07-03', 'To IRCTC', 6715140909, 0, 1500),
(2, '2016-07-05', 'to transfer', 6715140909, 10000, 0),
(3, '2016-07-06', 'to paytm', 6715140909, 0, 1000),
(4, '2016-07-19', 'To Bookmyshow', 6715140909, 0, 1000),
(5, '2016-07-20', 'To Pantaloons', 6715140909, 16000, 0),
(6, '2016-07-21', 'To Transfer', 5956565620, 10000, 0),
(9, '2016-08-01', 'Debited', 6715140909, 0, 10000),
(10, '2016-08-01', 'Credited', 8764534841, 10000, 0),
(11, '2016-08-03', 'Debited', 6715140909, 0, 1000),
(12, '2016-08-03', 'Debited', 6715140909, 0, 10000),
(13, '2016-08-03', 'Debited', 6715140909, 0, 1000),
(14, '2016-08-03', 'Debited', 6715140909, 0, 1000),
(15, '2016-08-03', 'Debited', 6715140909, 0, 10000),
(16, '2016-08-03', 'Debited', 6715140909, 0, 1000),
(17, '2016-08-03', 'Debited', 8764534841, 0, 10000),
(18, '2016-08-03', 'Credited', 6715140909, 10000, 0),
(19, '2016-08-03', 'Debited', 8764534841, 0, 10000),
(20, '2016-08-03', 'Credited', 6715140909, 10000, 0),
(21, '2016-08-03', 'Debited', 8764534841, 0, 5000),
(22, '2016-08-03', 'Debited', 8764534841, 0, 5000),
(23, '2016-08-03', 'Debited', 8764534841, 0, 5000),
(24, '2016-08-03', 'Debited', 8764534841, 0, 5000),
(25, '2016-08-03', 'Debited', 6715140909, 0, 10000),
(26, '2016-08-03', 'Credited', 8764534841, 10000, 0),
(27, '2016-08-03', 'Debited', 6715140909, 0, 1000),
(28, '2016-08-03', 'Debited', 6715140909, 0, 1000),
(29, '2016-08-03', 'Debited', 6715140909, 0, 1000),
(30, '2016-08-03', 'Debited', 6715140909, 0, 15000),
(31, '2016-08-03', 'Debited', 8764534841, 0, 1500),
(32, '2016-08-03', 'Debited', 6715140909, 0, 15000),
(33, '2016-08-05', 'Debited', 8764534841, 0, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `User_name` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  `Prof_pwd` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Mob_no` bigint(10) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `que1` varchar(50) NOT NULL,
  `que2` varchar(50) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `Prof_hintq` varchar(50) NOT NULL,
  `Prof_hinta` varchar(50) NOT NULL,
  PRIMARY KEY (`User_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_name`, `Pwd`, `Prof_pwd`, `Name`, `Mob_no`, `State`, `Email`, `Address`, `que1`, `que2`, `ans1`, `ans2`, `Prof_hintq`, `Prof_hinta`) VALUES
('', '', '', '', 0, '', '', '', '', '', '', '', '', ''),
('ahmedfaizucop', 'Ahmed276', 'faizucop276', 'Faizan Ahmed', 8972671892, 'WB', 'ahmed.faizan276@gmail.com', 'KOLKATA', '', '', '', '', 'What is the book your children like?', 'dragon ball'),
('swetaMishra', '123456789', 'SwetaM123', 'Sweta Mishra', 7842451560, 'JH', 'sweta.sweta@gmail.com', 'Jamshedpur', '', '', '', '', 'What is the book your children like?', 'Harry Potter '),
('vibhashpratik19', '123456789', 'Vibhash19', 'Vibhash Pratik Singh', 8697668896, 'WB', 'vibhashpratik19@gmail.com', 'Satvinder Pal Singh, Plot No.46 , Sreema Housing Complex, Jalkal, Maheshtala\r\nKolkata', 'What was the first book i ever read?', 'what is my name?', 'Lord of the rings', 'Vips', 'Which company would you like to work in future?', 'Google');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
