-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 06:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answers` varchar(250) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answers`, `ans_id`) VALUES
(1, 'Decision', 1),
(2, 'Convincing', 1),
(3, 'Muddled', 1),
(4, 'Vague', 1),
(5, 'Awful', 2),
(6, 'Flagrant', 2),
(7, 'Marvellous', 2),
(8, 'Hypnotic', 2),
(9, 'Z', 3),
(10, 'Y', 3),
(11, 'W', 3),
(12, 'A', 3),
(13, 'O(n)', 4),
(14, 'O(log n)', 4),
(15, 'O(n log n)', 4),
(16, 'O(n^2)', 4),
(17, 'array', 5),
(18, 'int', 5),
(19, 'float', 5),
(20, 'void', 5),
(21, 'x[i-1] + sizeof (int)', 6),
(22, 'x[i-1]', 6),
(23, 'x[i+1] + sizeof (int)', 6),
(24, '&x[i-1] + sizeof (int)', 6),
(25, '_FILE_', 7),
(26, '_FUNCTION_', 7),
(27, '_CLASS_', 7),
(28, '_LINE_', 7),
(29, '22 October 1764', 8),
(30, '22 march 1764', 8),
(31, '26 October 1865', 8),
(32, '22 April 1765', 8),
(33, '51', 9),
(34, '124', 9),
(35, '101', 9),
(36, '17', 9),
(37, 'Array', 10),
(38, 'Linked List', 10),
(39, 'Graph', 10),
(40, 'Tree', 10);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(300) DEFAULT NULL,
  `ans_id` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, 'What is the synonyms for word COGENT?', 2),
(2, 'Choose the correct antonym for word EGREGIOUS', 7),
(3, 'Complete the given series: A, D, I, P, ? ', 10),
(4, 'What is worst case time complexity of Binary Search Tree ?', 13),
(5, 'Which of the following is not a datatypes', 17),
(6, 'If x is an array of interger, then the value of &x[i] is same as:- ', 21),
(7, 'Which of the following magic constant of PHP returns current line number of the file?', 28),
(8, 'When was the Battle of Buxar fought ?', 29),
(9, 'The next number in the series  -1, 0, 0, 7, 26,... is ?', 34),
(10, 'Which of the following abstract data types can be used to represent a many to many relation ?', 39);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `totalques` int(250) DEFAULT NULL,
  `correctanswers` int(250) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `totalques`, `correctanswers`, `email`, `password`) VALUES
(1, NULL, NULL, 'abcd@efg.hij', '12345'),
(16, NULL, NULL, 'abc@125', 'jdklfjlka'),
(18, NULL, NULL, 'abc@1234', '43r34'),
(19, NULL, NULL, 'abc@123', 'fvdg'),
(26, NULL, NULL, 'abcde@12345', '12345'),
(28, NULL, NULL, 'qwe@123', '12345'),
(29, NULL, NULL, '', ''),
(32, NULL, NULL, 'qwe@1233', 'fvv'),
(33, NULL, NULL, 'asd@123', '1234'),
(34, NULL, NULL, 'bnm@1234', '     '),
(41, NULL, NULL, 'siddharthaagarwal21jma@gmail.com', ''),
(113, NULL, NULL, 'a@a.com', 'sid@jma21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
