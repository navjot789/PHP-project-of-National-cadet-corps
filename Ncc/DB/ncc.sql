-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2020 at 08:21 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assign_events`
--

DROP TABLE IF EXISTS `assign_events`;
CREATE TABLE IF NOT EXISTS `assign_events` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `cdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `attend_id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `stats` varchar(5) DEFAULT NULL COMMENT 'late:0 present:1 absent:2',
  `cdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`attend_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cadet`
--

DROP TABLE IF EXISTS `cadet`;
CREATE TABLE IF NOT EXISTS `cadet` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `password` text,
  `cdate` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `message` text,
  `cdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
CREATE TABLE IF NOT EXISTS `enrollment` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT 'pending:0 active:1 reject:2',
  `mname` varchar(30) DEFAULT NULL,
  `gurdian` varchar(30) DEFAULT NULL,
  `post_office` text,
  `rail` text,
  `dspmu` varchar(30) DEFAULT NULL,
  `depart` varchar(200) DEFAULT NULL,
  `roll` varchar(25) DEFAULT NULL,
  `reg_no` varchar(25) DEFAULT NULL,
  `honour` varchar(200) DEFAULT NULL,
  `sem` varchar(30) DEFAULT NULL,
  `session` varchar(40) DEFAULT NULL,
  `address` text,
  `country` varchar(20) DEFAULT NULL,
  `state` varchar(70) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `pin` varchar(10) DEFAULT NULL,
  `m_s_c` varchar(70) DEFAULT NULL,
  `m_b_u` varchar(70) DEFAULT NULL,
  `m_p` varchar(5) DEFAULT NULL,
  `m_y` varchar(10) DEFAULT NULL,
  `i_s_c` varchar(70) DEFAULT NULL,
  `i_b_u` varchar(70) DEFAULT NULL,
  `i_p` varchar(5) DEFAULT NULL,
  `i_y` varchar(10) DEFAULT NULL,
  `o_s_c` varchar(70) DEFAULT NULL,
  `o_b_u` varchar(70) DEFAULT NULL,
  `o_p` varchar(5) DEFAULT NULL,
  `o_y` varchar(10) DEFAULT NULL,
  `q_1` varchar(5) DEFAULT NULL,
  `q_2` varchar(5) DEFAULT NULL,
  `q_3` varchar(5) DEFAULT NULL,
  `q_4` varchar(5) DEFAULT NULL,
  `q_5` varchar(5) DEFAULT NULL,
  `q_6` varchar(5) DEFAULT NULL,
  `bank_acc` varchar(20) DEFAULT NULL,
  `bank_name` varchar(70) DEFAULT NULL,
  `branch_name` varchar(70) DEFAULT NULL,
  `ifsc` varchar(30) DEFAULT NULL,
  `aadhar` varchar(30) DEFAULT NULL,
  `k_name` varchar(20) DEFAULT NULL,
  `k_address` text,
  `k_relation` varchar(20) DEFAULT NULL,
  `k_no` varchar(25) DEFAULT NULL,
  `c_img` varchar(200) DEFAULT NULL,
  `m_img` varchar(200) DEFAULT NULL,
  `cdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `sub_title` text,
  `description` text,
  `img` text,
  `cdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `title`, `sub_title`, `description`, `img`, `cdate`) VALUES
(29, 'going through the cites of the word in classical', 'reproduced in their exact original form', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.', '158747875121383020405e9f00df64d5c.jpg', '21-04-2020 07:49:11 PM'),
(25, 'It is a long established fact that a reader will be distracted by the readable content of a page', 'using Lorem Ipsum is that it has a more-or-less normal distribution of letters', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '15873388877354905445e9cde8783ffb.jpg', '20-04-2020 04:58:07'),
(26, 'What is Lorem Ipsum?', 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '1587338937269435195e9cdeb9033c2.jpg', '20-04-2020 04:58:57'),
(27, 'The standard Lorem Ipsum passage, used since the 1500s', 'Section 1.10.32 of ', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', '15873962272297567975e9dbe83221fb.jpg', '20-04-2020 04:59:55'),
(28, '1914 translation by H. Rackham', 'Can you help translate this site into a foreign language ', '\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"', '1587339047963843925e9cdf2757015.jpg', '20-04-2020 05:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `ex_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `pdf` text,
  `link` text,
  `cdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`ex_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `sub` varchar(50) DEFAULT NULL,
  `message` text,
  `cdate` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
