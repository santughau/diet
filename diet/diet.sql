-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 10:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diet`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_mobile` text NOT NULL,
  `contact_message` text NOT NULL,
  `contact_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subject` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `date`, `subject`, `link`) VALUES
(2, '2019-06-06 11:32:49', 'à¤¶à¤¾à¤³à¤¾ à¤¸à¤¿à¤¦à¥à¤§à¥€ à¤ªà¥à¤¸à¥à¤¤à¤¿à¤•à¤¾ ', 'https://drive.google.com/file/d/0B77Dm_CQreg-N1ppSC1xcFdSb2c/view'),
(3, '2019-06-06 11:36:54', 'à¤­à¤¾à¤¸à¥à¤•à¤°à¤¾à¤šà¤¾à¤°à¥à¤¯ à¤—à¤£à¤¿à¤¤ à¤¸à¤®à¥ƒà¤¦à¥à¤§à¥€à¤•à¤°à¤£ à¤—à¤£à¤¿à¤¤ à¤ªà¥‡à¤Ÿà¥€ à¤®à¤¾à¤°à¥à¤—à¤¦à¤°à¥à¤¶à¤¿à¤•à¤¾', 'https://drive.google.com/file/d/1S3CRWXkPnv3VAEcqLQwyPal1ETxUphhY/view'),
(4, '2019-06-06 11:37:45', 'à¤¬à¤¹à¥à¤­à¤¾à¤·à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤• à¤®à¤¾à¤°à¥à¤—à¤¦à¤°à¥à¤¶à¤¿à¤•à¤¾', 'https://drive.google.com/file/d/0ByMuID5g274OSndGaFlnQVEzRzFiOHAyNXNIRmExZVJjSVow/view'),
(5, '2019-06-06 11:38:21', 'à¤®à¥‚à¤²à¤­à¥‚à¤¤ à¤µà¤¾à¤šà¤¨ à¤¶à¤¿à¤•à¥à¤·à¤• à¤ªà¥à¤°à¤¶à¤¿à¤•à¥à¤·à¤£ à¤®à¤¾à¤°à¥à¤—à¤¦à¤°à¥à¤¶à¤¿à¤•à¤¾', 'https://drive.google.com/file/d/0ByMuID5g274OTWZTRWl6Q21ld0xBY0trcDVyZ2xPeUFuMDVV/view'),
(6, '2019-06-08 03:58:42', 'à¤…à¤§à¥à¤¯à¤¯à¤¨ à¤¨à¤¿à¤·à¥à¤ªà¤¤à¥€ Class 1 à¤¤à¥‡ 5', 'http://www.maa.ac.in/learningoutcomes/LearningOutcomesPart%201_1_to_5.pdf'),
(7, '2019-06-08 03:58:14', 'à¤…à¤§à¥à¤¯à¤¯à¤¨ à¤¨à¤¿à¤·à¥à¤ªà¤¤à¥€ Class 6 à¤¤à¥‡ 8', 'http://www.maa.ac.in/learningoutcomes/learning_outcome_booklet.pdf'),
(8, '2019-06-09 02:40:21', 'RTE à¤¬à¤¾à¤²à¤•à¤¾à¤‚à¤šà¥à¤¯à¤¾ à¤®à¥‹à¤«à¤¤ à¤µ  à¤¸à¤•à¥à¤¤à¥€à¤šà¥à¤¯à¤¾  à¤¶à¤¿à¤•à¥à¤·à¤£à¤¾à¤šà¤¾  à¤¹à¤•à¥à¤• à¤…à¤§à¤¿à¤¨à¤¿à¤¯à¤® 2009', 'https://drive.google.com/file/d/0B5mBubJ6xBQANnk4XzBhdVE1VW8/view');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_title` text NOT NULL,
  `gallery_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gr`
--

CREATE TABLE `gr` (
  `id` int(10) NOT NULL,
  `subject` text NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gr`
--

INSERT INTO `gr` (`id`, `subject`, `link`) VALUES
(1, 'à¤ªà¥à¤°à¤—à¤¤ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤•à¤¾à¤°à¥à¤¯à¤•à¥à¤°à¤®à¤¾à¤¾à¤‚à¤¤à¤—à¤¯à¤¤ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤µà¤°à¥à¤¯ 2017-18 à¤ªà¤¾à¤¸à¥‚à¤¨ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤ªà¥à¤°à¤—à¤¤à¥€ à¤šà¤¾à¤šà¤£à¤°à¥à¤¾à¤¾à¤‚à¤šà¥à¤°à¥à¤¾ à¤†à¤°à¥à¥‹à¤œà¤¨à¤¾à¤¬à¤¾à¤¬à¤¤....', 'https://drive.google.com/file/d/0B_5mnBl2N1zCcWZ2WWw3VUtuQUE/view'),
(2, 'à¤ªà¥à¤°à¤—à¤¤ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤•à¤¾à¤°à¥à¤¯à¤•à¥à¤°à¤®à¤¾à¤šà¥€ à¤°à¤¾à¤œà¥à¤°à¥à¤¾à¤®à¤§à¥à¤°à¥à¥‡ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤µà¤°à¥à¤¯ à¤¸à¤¨ 2015-16 à¤ªà¤¾à¤¸à¥‚à¤¨ à¤…à¤‚à¤®à¤²à¤¬à¤œà¤¾à¤µà¤¿à¥€ à¤•à¤°à¤¿à¥‡à¤¬à¤¾à¤¬à¤¤.', 'https://drive.google.com/file/d/0B_5mnBl2N1zCUzUwbl9DeFdXeHBmRmtUODFvVG81TWRCYy1r/view'),
(3, 'à¤ªà¥à¤°à¤—à¤¤ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° - à¤®à¤¾à¤§à¥à¤¯à¤£à¤®à¤• à¤¸à¥à¤¤à¤°', 'https://drive.google.com/file/d/0B_5mnBl2N1zCTlVPN3Foa1VLWVE/view'),
(4, 'à¤†à¤‚à¤¤à¤°à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤¦à¤°à¥à¤œà¤¾à¤šà¥à¤¯à¤¾ 100 à¤¶à¤¾à¤³à¤¾ à¤°à¤¾à¤œà¥à¤¯à¤¾à¤¤ à¤£à¤¿à¤°à¥à¤®à¤¾à¤¿ à¤•à¤°à¤¿à¥‡.', 'https://drive.google.com/file/d/0B_5mnBl2N1zCbDVvT095QjY2STA/view'),
(5, 'à¤ªà¥à¤°à¤—à¤¤ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤¸à¤‚à¤•à¤²à¥à¤ªà¤¾ à¤µà¤¿à¤·à¤¯à¥€', 'https://drive.google.com/file/d/0B_5mnBl2N1zCZU9VV0pZdG50dms/view'),
(6, 'à¤ªà¥à¤°à¤—à¤¤ à¤¶à¥ˆà¤•à¥à¤·à¤£à¤¿à¤• à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤µà¤¿à¤¦à¥à¤¯à¤¾ à¤ªà¥à¤°à¤¾à¤§à¤¿à¤•à¤°à¤£à¤¾à¤šà¥€ à¤ªà¥à¤¨à¤°à¥à¤°à¤šà¤¨à¤¾', 'https://drive.google.com/file/d/0B_5mnBl2N1zCWDdGLVRDUER6Z1U/view'),
(7, 'à¤µà¤¿à¤­à¤¾à¤—à¤¾à¤¸à¤¾à¤ à¥€ à¤¦à¤¿à¤²à¥‡à¤²à¥‡  KRA  à¤‰à¤¦à¥à¤¦à¤¿à¤·à¥à¤Ÿà¥‡', 'https://drive.google.com/file/d/0B_5mnBl2N1zCQnFRSk5nTzMtVE0/view'),
(8, 'à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤¨à¤¾à¤—à¤°à¥€ à¤¸à¥‡à¤µà¤¾ ( à¤µà¤°à¥à¤¤à¤£à¥‚à¤• ) à¤¨à¤¿à¤¯à¤® 1979 à¤¦à¤¿à¤¨à¤¾à¤‚à¤• 31 à¤œà¥à¤²à¥ˆ 2008  à¤ªà¤°à¥à¤¯à¤‚à¤¤ à¤¸à¥à¤§à¤¾à¤°à¤¿à¤¤', 'https://drive.google.com/file/d/0B5mBubJ6xBQAankxazJWczd5bE0/view'),
(9, 'Maharashtra  Right of Children to  Free and  Compulsory Education  Rules - 2010  (Draft)  Directorate of Primary Education, Maharashtra  State, Pune.', 'https://drive.google.com/file/d/0B5mBubJ6xBQAQkFzbWZqUUlRUGM/view'),
(10, 'à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤¨à¤¾à¤—à¤°à¥€ à¤¸à¥‡à¤µà¤¾  ( à¤°à¤œà¤¾ )  à¤¨à¤¿à¤¯à¤® 1981', 'https://drive.google.com/file/d/0B5mBubJ6xBQAaGhRa2Y0d05XNE0/view'),
(11, 'à¤¶à¤¾à¤³à¤¾, à¤¶à¤¶à¤•à¥à¤·à¤•, à¤¶à¤¿à¤¦à¥à¤¯à¤¾à¤°à¥à¤¥à¥€à¤¯à¤¾à¤¸à¤¿à¤¾à¤‚à¤šà¥€à¤®à¤¾à¤¶à¤¿à¤¤à¥€à¤¸à¤°à¤²(SARAL - Systematic Administrative Reforms for   Achieving   Learning   By   Students) à¤¯à¤¾à¤¸à¤‚à¤—à¤£à¤•à¤ªà¥à¤°à¤£à¤¾à¤²à¥€à¤µà¥à¤¦à¤¾à¤°à¥‡à¤­à¤°à¥à¤¨à¤˜à¥‡à¤£à¥à¤¯à¤¾à¤¬à¤¾à¤¬à¤¤', 'https://www.maharashtra.gov.in/site/Upload/Government%20Resolutions/Marathi/201507031648548621.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(10) NOT NULL,
  `trainingId` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `taluka` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `trainingId`, `name`, `email`, `mobile`, `school`, `taluka`, `gender`, `status`, `date`) VALUES
(1, '1', 'Santosh Ashokrao Sontakke', 'santu.ghau@gmail.com', '8421333417', 'Pradnya Niketan Girls Highschool , Holi', '15', 'male', 'Approved', '2019-06-10 07:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `login_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `login_pass`) VALUES
(1, 'diet@gmail.com', 'Santosh_2611'),
(2, 'diecpd@gmail.com', 'Santosh@2611');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `data` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `data`, `date`, `views`) VALUES
(2, 'Computer Repair & Mentanance ', '<p>I will be giving 10 Laravel Nova&#39;s to 10 people. Comment with your email and I will choose 10 emails to send laravel Nova I will be giving 10 Laravel Nova&#39;s to 10 people. Comment with your email and I will choose 10 emails to send laravel Nova</p>\r\n', '2019-06-09 15:23:52', 0),
(3, 'A Finicial A/c With Tally ERP 9 For School Audit', '<p>A Finicial A/c With Tally ERP 9 For School Audit A Finicial A/c With Tally ERP 9 For School Audit A Finicial A/c With Tally ERP 9 For School Audit A Finicial A/c With Tally ERP 9 For School Audit A Finicial A/c With Tally ERP 9 For School Audit A Finicial A/c With Tally ERP 9 For School Audit A Finicial A/c With Tally ERP 9 For School Audit A Finicial A/c With Tally ERP 9 For School Audit A Finicial A/c With Tally ERP 9 For School Audit</p>\r\n', '2019-06-09 15:10:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(10) NOT NULL,
  `postData` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `date`, `views`, `postData`, `image`) VALUES
(1, 'This is my title ok', '2019-06-04 01:27:42', 23, 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. ', '001s.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(10) NOT NULL,
  `subjectName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subjectName`) VALUES
(1, 'MS WORD'),
(2, 'MS EXCEL'),
(3, 'MS POWERPOINT'),
(4, 'Windows 7'),
(5, 'Windows 8.1'),
(6, 'Windows 10'),
(7, 'Linux'),
(8, 'Tally ERP 9'),
(9, 'Video Editing'),
(10, 'Audio Editing'),
(11, 'Computer Hardware'),
(12, 'Computer Networking'),
(13, 'Wordpress'),
(14, 'SEO'),
(15, 'Blogging'),
(16, 'Adobe PageMaker'),
(17, 'Adobe Photoshop'),
(18, 'Corel Draw'),
(19, 'MS Access'),
(20, 'Internet');

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`id`, `name`) VALUES
(1, 'Ardhapur'),
(2, 'Bhokar'),
(3, 'Biloli'),
(4, 'Deglur'),
(5, 'Dharmabad'),
(6, 'Hadgaon'),
(7, 'Himayatnagar'),
(8, 'Kandhar'),
(9, 'Kinwat'),
(10, 'Loha'),
(11, 'Mahoor'),
(12, 'Mudhked'),
(13, 'Mukhed'),
(14, 'Naigaon'),
(15, 'Nanded'),
(16, 'Umri');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `taluka` int(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `skill` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `mobile`, `school`, `taluka`, `gender`, `skill`, `Date`, `status`) VALUES
(1, 'Santosh Ashokrao Sontakke', 'santu.ghau@gmail.com', '8421333417', 'Pradnya Niketan Girls Highschool , Holi', 15, 'male', 'MS WORD,MS EXCEL,MS POWERPOINT,Windows 7,Windows 8.1,Windows 10,Linux,Tally ERP 9,Video Editing,Audio Editing,Computer Hardware,Computer Networking,Wordpress,SEO,Blogging,Adobe PageMaker,Adobe Photoshop,Corel Draw,MS Access,Internet', '2019-06-09 00:53:07', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `duration` varchar(250) NOT NULL,
  `intake` int(10) NOT NULL,
  `incharge` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `name`, `date`, `duration`, `intake`, `incharge`, `status`) VALUES
(1, 'à¤¸à¤‚à¤—à¤£à¤•  à¤¨à¤¿à¤µà¤¡ , à¤¨à¤¿à¤—à¤¾ à¤µ  à¤¦à¥à¤°à¥à¤¸à¥à¤¤à¥€ ', '15/07/2019', '2', 50, 'Santosh Kendre', 'Upcoming'),
(2, 'à¤µà¤°à¥à¤¡à¤ªà¥à¤°à¥‡à¤¸ à¤®à¤§à¥à¤¯à¥‡ à¤µà¥‡à¤¬à¤¸à¤¾à¤‡à¤Ÿ  à¤¤à¤¯à¤¾à¤°  à¤•à¤°à¤£à¥à¤¯à¤¾à¤¸  à¤¶à¤¿à¤•à¤¾  à¥¨ à¤¦à¤¿à¤µà¤¸à¤¾à¤¤ ', '22/07/2019', '2', 50, 'Santosh Kendre', 'Upcoming');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `cat` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `view` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `link`, `cat`, `name`, `mobile`, `status`, `view`, `date`) VALUES
(1, 'à¤¡à¤¿à¤œà¤¿à¤Ÿà¤² à¤¸à¥à¤•à¥à¤² à¤¸à¤¾à¤ à¥€ à¤†à¤µà¤¶à¥à¤¯à¤• à¤¸à¤¾à¤§à¤¨à¤¾à¤‚à¤šà¥€ à¤“à¤³à¤–- à¤¸à¤‚à¤¤à¥‹à¤· à¤•à¥‡à¤‚à¤¦à¥à¤°à¥‡', 'uqLeA5HQ7as&t', '8', 'Santosh Sontakke', '8421333417', 'Pending', 0, '2019-06-09 00:32:11'),
(2, 'à¤®à¤¾.à¤µà¤¿à¤¶à¤¾à¤² à¤¸à¥‹à¤³à¤‚à¤–à¥€ à¤¸à¤¾à¤¹à¥‡à¤¬ (à¤¶à¤¿à¤•à¥à¤·à¤£ à¤†à¤¯à¥à¤•à¥à¤¤ à¤®à¤¹à¤¾à¤°à¤¾à¤·à¥à¤Ÿà¥à¤° à¤°à¤¾à¤œà¥à¤¯) à¤¶à¤¿à¤•à¥à¤·à¤£à¤¾à¤šà¥€ à¤µà¤¾à¤°à¥€ à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡', 'duDLGKI0mzg', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:49:09'),
(3, 'à¤®à¤¾.à¤–à¤¾à¤‚à¤¡à¤•à¥‡ à¤¸à¤¾à¤¹à¥‡à¤¬ (à¤¶à¤¿à¤•à¥à¤·à¤£ à¤‰à¤ªà¤¸à¤‚à¤šà¤¾à¤²à¤• ) à¤¯à¤¾à¤‚à¤šà¥€ à¤¶à¤¿à¤•à¥à¤·à¤£à¤¾à¤šà¥€ à¤µà¤¾à¤°à¥€ à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡ à¤¯à¤¾ à¤µà¤¿à¤·à¤¯à¥€à¤šà¥à¤¯à¤¾ à¤ªà¥à¤°à¤¤à¤¿à¤•à¥à¤°à¤¿à¤¯à¤¾', '0tfMozim2XI', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:48:56'),
(4, 'à¤®à¤¾.à¤•à¤¾à¤•à¤¡à¥‡ à¤¸à¤¾à¤¹à¥‡à¤¬ ( Ceo. zp Nanded ) à¤¯à¤¾à¤‚à¤šà¥€ à¤¶à¤¿à¤•à¥à¤·à¤£à¤¾à¤šà¥€ à¤µà¤¾à¤°à¥€ à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡ à¤¯à¤¾ à¤•à¤¾à¤°à¥à¤¯à¤•à¥à¤°à¤®à¤¾à¤¤ à¤˜à¥‡à¤¤à¤²à¥‡à¤²à¥€ à¤®à¥à¤²à¤¾à¤–à¤¤', '2_NllRDBxfg', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:48:41'),
(5, 'à¤¶à¤¿à¤•à¥à¤·à¤£à¤¾à¤šà¥€ à¤µà¤¾à¤°à¥€ à¤®à¥à¤²à¤¾à¤–à¤¤ à¤¶à¥à¤°à¥€à¤®à¤¤à¥€ à¤œà¤¯à¤¶à¥à¤°à¥€ à¤†à¤ à¤µà¤²à¥‡ à¤®à¥…à¤¡à¤®', 'bQXNtz0l9b8', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:48:20'),
(6, 'Adhyanstar tappa 2,2018-2019 instructions', 'CmgJz4lkoxE', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:48:08'),
(7, 'Renu short film', 'vfA9VBkNyTI', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:47:55'),
(8, 'Making video - RENU SHORT FILM', 'L1XmyFnxwtI', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:47:48'),
(9, 'à¤®à¤¾.à¤¦à¥‡à¤µà¤•à¤°à¥‡ à¤¸à¤¾à¤¹à¥‡à¤¬ à¤¶à¤¿à¤•à¥à¤·à¤£à¤¾à¤§à¤¿à¤•à¤¾à¤°à¥€ à¤®à¤¾. à¤œà¤¿. à¤ª.à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡', 'nJEfaN2DnB4', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:47:36'),
(10, 'à¤šà¤²à¤¾ à¤œà¥‡à¤œà¥à¤°à¥€à¤²à¤¾ à¤œà¤¾à¤Š à¤œà¤¿.à¤ª.à¤¶à¤¾à¤³à¤¾ à¤²à¤–à¥à¤–à¤¾ à¤¤à¤¾ à¤¦à¥‡à¤—à¤²à¥‚à¤° à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡', 'P3z2ZkjttqY', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:47:30'),
(11, 'à¤œà¤¿à¤²à¥à¤¹à¤¾ à¤ªà¤°à¤¿à¤·à¤¦ à¤¶à¤¾à¤³à¤¾ à¤²à¤–à¥à¤–à¤¾ à¤¤à¤¾. à¤¦à¥‡à¤—à¤²à¥‚à¤° à¤œà¤¿. à¤¨à¤¾à¤‚à¤¦à¥‡à¤¡', 'iVoW_5xgox4', '8', 'Santosh Sontakke', '8421333417', 'Approved', 0, '2019-06-09 00:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `video_cat`
--

CREATE TABLE `video_cat` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_cat`
--

INSERT INTO `video_cat` (`id`, `name`) VALUES
(1, 'Marathi'),
(2, 'Hindi'),
(3, 'English'),
(4, 'Science'),
(5, 'Social Science'),
(6, 'Math'),
(7, 'ICT'),
(8, 'Extra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gr`
--
ALTER TABLE `gr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_cat`
--
ALTER TABLE `video_cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gr`
--
ALTER TABLE `gr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `video_cat`
--
ALTER TABLE `video_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
