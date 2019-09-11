-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 05:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-exam-final-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(2, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('55892169bf6a7', '55892169d2efc'),
('5589216a3646e', '5589216a48722'),
('558922117fcef', '5589221195248'),
('55892211e44d5', '55892211f1fa7'),
('558922894c453', '558922895ea0a'),
('558922899ccaa', '55892289aa7cf'),
('558923538f48d', '558923539a46c'),
('55892353f05c4', '55892354051be'),
('5cc161fbb61e0', '5cc161fbda585'),
('5cc161fc1d8e0', '5cc161fc287b4'),
('5cc161fc87092', '5cc161fc8e207'),
('5cc1636d9793f', '5cc1636db5a28'),
('5cc1636de1e93', '5cc1636deb68a'),
('5cc1636e50576', '5cc1636e61e48'),
('5cc1636e97fe2', '5cc1636ebc8af'),
('5cc1636f10088', '5cc1636f1ec6b');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('55846be776610', 'testing', 'sunnygkp10@gmail.com', 'testing', 'testing stART', '2015-06-19', '09:22:15pm'),
('5584ddd0da0ab', 'netcamp', 'sunnygkp10@gmail.com', 'feedback', ';mLBLB', '2015-06-20', '05:28:16am'),
('5586ee27af2c9', 'vikas', 'vikas@gmail.com', 'trial feedback', 'triaal feedbak', '2015-06-21', '07:02:31pm'),
('5589858b6c43b', 'nik', 'nik1@gmail.com', 'good', 'good site', '2015-06-23', '06:12:59pm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('mi5@hollywood.com', '5589222f16b93', 4, 2, 2, 0, '2015-06-23 15:12:56'),
('nik1@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2015-06-23 16:11:50'),
('imrsharmaofficial@gmail.com', '558920ff906b8', 1, 2, 1, 1, '2019-04-24 16:08:07'),
('admin@admin.com', '5cc1618cb0974', 1, 3, 1, 2, '2019-04-25 07:30:19'),
('sachin@gmail.com', '5cc162a68af47', 2, 5, 2, 3, '2019-04-25 07:45:29'),
('asd@gmail.com', '5cc162a68af47', 1, 5, 1, 4, '2019-04-25 08:07:21'),
('imrsharmaofficial@gmail.com', '558921841f1ec', 1, 2, 1, 1, '2019-05-30 18:03:32'),
('imrsharmaofficial@gmail.com', '5589222f16b93', 1, 2, 1, 1, '2019-05-31 06:06:56'),
('imrsharmaofficial@gmail.com', '558922ec03021', 4, 2, 2, 0, '2019-05-31 07:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('55892169bf6a7', 'usermod', '55892169d2efc'),
('55892169bf6a7', 'useradd', '55892169d2f05'),
('55892169bf6a7', 'useralter', '55892169d2f09'),
('55892169bf6a7', 'groupmod', '55892169d2f0c'),
('5589216a3646e', '751', '5589216a48713'),
('5589216a3646e', '752', '5589216a4871a'),
('5589216a3646e', '754', '5589216a4871f'),
('5589216a3646e', '755', '5589216a48722'),
('558922117fcef', 'echo', '5589221195248'),
('558922117fcef', 'print', '558922119525a'),
('558922117fcef', 'printf', '5589221195265'),
('558922117fcef', 'cout', '5589221195270'),
('55892211e44d5', 'int a', '55892211f1f97'),
('55892211e44d5', '$a', '55892211f1fa7'),
('55892211e44d5', 'long int a', '55892211f1fb4'),
('55892211e44d5', 'int a$', '55892211f1fbd'),
('558922894c453', 'cin>>a;', '558922895ea0a'),
('558922894c453', 'cin<<a;', '558922895ea26'),
('558922894c453', 'cout>>a;', '558922895ea34'),
('558922894c453', 'cout<a;', '558922895ea41'),
('558922899ccaa', 'cout', '55892289aa7cf'),
('558922899ccaa', 'cin', '55892289aa7df'),
('558922899ccaa', 'print', '55892289aa7eb'),
('558922899ccaa', 'printf', '55892289aa7f5'),
('558923538f48d', '255.0.0.0', '558923539a46c'),
('558923538f48d', '255.255.255.0', '558923539a480'),
('558923538f48d', '255.255.0.0', '558923539a48b'),
('558923538f48d', 'none of these', '558923539a495'),
('55892353f05c4', '192.168.1.100', '5589235405192'),
('55892353f05c4', '172.168.16.2', '55892354051a3'),
('55892353f05c4', '10.0.0.0.1', '55892354051b4'),
('55892353f05c4', '11.11.11.11', '55892354051be'),
('5cc161fbb61e0', 'Controlled loop constructs ', '5cc161fbda52f'),
('5cc161fbb61e0', ' Case checking constructs ', '5cc161fbda57c'),
('5cc161fbb61e0', 'Validation constructs', '5cc161fbda583'),
('5cc161fbb61e0', ' All of the mentioned', '5cc161fbda585'),
('5cc161fc1d8e0', ' Create linkage between client side and server side', '5cc161fc287ab'),
('5cc161fc1d8e0', ' b) Permit server side, JavaScript code, to connect to RDBMS  ', '5cc161fc287b2'),
('5cc161fc1d8e0', 'c) Support only non relational database', '5cc161fc287b4'),
('5cc161fc1d8e0', 'd) To interpret JavaScript code', '5cc161fc287b5'),
('5cc161fc87092', '<HEAD>', '5cc161fc8e207'),
('5cc161fc87092', '<BODY>', '5cc161fc8e212'),
('5cc161fc87092', '<FOOTER>', '5cc161fc8e214'),
('5cc161fc87092', '<HELLO>', '5cc161fc8e217'),
('5cc1636d9793f', 'i) Personal Home Page ', '5cc1636db5a28'),
('5cc1636d9793f', 'ii) Hypertext Preprocessor ', '5cc1636db5a37'),
('5cc1636d9793f', ' ii) Pretext Hypertext Processor', '5cc1636db5a3a'),
('5cc1636d9793f', 'iv) Preprocessor Home Page', '5cc1636db5a3e'),
('5cc1636de1e93', 'a) .html', '5cc1636deb669'),
('5cc1636de1e93', ' b) .xml ', '5cc1636deb686'),
('5cc1636de1e93', 'c) .php ', '5cc1636deb68a'),
('5cc1636de1e93', 'd) .ph', '5cc1636deb68e'),
('5cc1636e50576', 'a)< php > ', '5cc1636e61e3c'),
('5cc1636e50576', ' b) < ? php?>', '5cc1636e61e45'),
('5cc1636e50576', ' c) <? ?> ', '5cc1636e61e46'),
('5cc1636e50576', 'd) <?php ?>', '5cc1636e61e48'),
('5cc1636e97fe2', ') Notepad ', '5cc1636ebc89f'),
('5cc1636e97fe2', 'iv) PDT ', '5cc1636ebc8af'),
('5cc1636e97fe2', 'iii) Adobe Dreamweaver ', '5cc1636ebc8b2'),
('5cc1636e97fe2', 'b) All of the mentioned.', '5cc1636ebc8b5'),
('5cc1636f10088', ') Notepad ', '5cc1636f1ec5c'),
('5cc1636f10088', 'iv) PDT ', '5cc1636f1ec68'),
('5cc1636f10088', 'iii) Adobe Dreamweaver ', '5cc1636f1ec6b'),
('5cc1636f10088', 'b) All of the mentioned.', '5cc1636f1ec6d');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('558920ff906b8', '55892169bf6a7', 'what is command for changing user information??', 4, 1),
('558920ff906b8', '5589216a3646e', 'what is permission for view only for other??', 4, 2),
('558921841f1ec', '558922117fcef', 'what is command for print in php??', 4, 1),
('558921841f1ec', '55892211e44d5', 'which is a variable of php??', 4, 2),
('5589222f16b93', '558922894c453', 'what is correct statement in c++??', 4, 1),
('5589222f16b93', '558922899ccaa', 'which command is use for print the output in c++?', 4, 2),
('558922ec03021', '558923538f48d', 'what is correct mask for A class IP???', 4, 1),
('558922ec03021', '55892353f05c4', 'which is not a private IP??', 4, 2),
('5cc1618cb0974', '5cc161fbb61e0', 'The web development environment (JavaScript) offers which standard construct for data validation of the input entered by the user.', 4, 1),
('5cc1618cb0974', '5cc161fc1d8e0', 'The main purpose of a â€œLive Wireâ€ in NetScape is to ________', 4, 2),
('5cc1618cb0974', '5cc161fc87092', 'The script tag must be placed in __________', 4, 3),
('5cc162a68af47', '5cc1636d9793f', 'What does PHP stand for?', 4, 1),
('5cc162a68af47', '5cc1636de1e93', 'PHP files have a default file extension of_______', 4, 2),
('5cc162a68af47', '5cc1636e50576', 'A PHP script should start with ___ and end with ___', 4, 3),
('5cc162a68af47', '5cc1636e97fe2', 'Which of the following is/are a PHP code editor?', 4, 4),
('5cc162a68af47', '5cc1636f10088', 'Which of the following is/are a PHP code editor?', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`) VALUES
('558920ff906b8', 'Linux : File Managment', 2, 1, 2, 5, '', 'linux', '2015-06-23 09:03:59'),
('558921841f1ec', 'Php Coding', 2, 1, 2, 5, '', 'PHP', '2015-06-23 09:06:12'),
('5589222f16b93', 'C++ Coding', 2, 1, 2, 5, '', 'c++', '2015-06-23 09:09:03'),
('558922ec03021', 'Networking', 2, 1, 2, 5, '', 'networking', '2015-06-23 09:12:12'),
('5cc1618cb0974', 'Javascript', 1, 0, 3, 5, '', 'TAG', '2019-04-25 07:28:12'),
('5cc162a68af47', 'Php', 1, 0, 5, 5, '', 'TAG', '2019-04-25 07:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('mi5@hollywood.com', 4, '2015-06-23 15:12:56'),
('nik1@gmail.com', 1, '2015-06-23 16:11:50'),
('imrsharmaofficial@gmail.com', 11, '2019-05-31 07:01:05'),
('sachin@gmail.com', 6, '2019-04-25 07:45:29'),
('admin@admin.com', 1, '2019-04-25 07:53:50'),
('asd@gmail.com', 1, '2019-04-25 08:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Sanjay', 'M', 'iimt', 'asd@gmail.com', 1234567899, '25d55ad283aa400af464c76d713c07ad'),
('Mark Zukarburg', 'M', 'Stanford', 'ceo@facebook.com', 987654321, 'e10adc3949ba59abbe56e057f20f883e'),
('Raman', 'M', 'iimt college of engineering, greater noida', 'imrsharmaofficial@gmail.com', 9711190164, '1a1dc91c907325c69271ddf0c944bc72'),
('Tom Cruze', 'M', 'Hollywood', 'mi5@hollywood.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e'),
('Nikunj', 'M', 'XYZ', 'nik1@gmail.com', 987, '202cb962ac59075b964b07152d234b70'),
('Prince', 'M', 'iimt', 'princekatheriya2@gmail.com', 9187877828727, '5f4dcc3b5aa765d61d8327deb882cf99'),
('Sachin', 'M', 'IIMT', 'sachin@gmail.com', 9315561868, '15285722f9def45c091725aee9c387cb'),
('Sachin', 'M', 'iimt', 'sachincse2@gmail.com', 90929289289892, '5f4dcc3b5aa765d61d8327deb882cf99'),
('Gaurav', 'M', 'iimt college of engineering, greater noida', 'sahugaurav97@gamil.com', 2898928929, '5f4dcc3b5aa765d61d8327deb882cf99'),
('Gaurav', 'M', 'iimt college of engineering, greater noida', 'sahugaurav97@gmail.com', 892982898929, '5f4dcc3b5aa765d61d8327deb882cf99'),
('Gaurav Singh', 'M', 'IIMT', 'sgaurav603@gmail.com', 8299686879, '2077e4a6bafa9b4e7b55e1fff16818af'),
('User', 'M', 'cimt', 'user@user.com', 11, 'e10adc3949ba59abbe56e057f20f883e'),
('Vikash', 'M', 'KNIT sultanpur@gmail.com', 'vikash@gmail.com', 7785068889, 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
