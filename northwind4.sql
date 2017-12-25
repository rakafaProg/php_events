-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 09:32 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northwind4`
--

-- --------------------------------------------------------

--
-- Table structure for table `ls32_events`
--

CREATE TABLE `ls32_events` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `description` varchar(250) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ls32_events`
--

INSERT INTO `ls32_events` (`id`, `name`, `description`, `date`) VALUES
(1, 'party', 'christmass party with all the freindly fucking friends plese dont hesitate to show up and do some funkly fun to make every body logh', '2018-03-25 16:50:33'),
(2, 'Learn PHP', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-29 13:25:01'),
(3, 'Learn PHP 2', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-29 13:26:04'),
(4, 'Learn PHP 3', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-30 13:26:04'),
(5, 'Learn PHP 4', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-25 13:26:04'),
(6, 'Learn PHP 5', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-19 13:26:04'),
(7, 'Learn PHP 6', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-19 13:26:04'),
(8, 'Learn PHP 7', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-18 13:26:04'),
(9, 'Learn PHPff', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-19 13:28:57'),
(10, 'Learn PHP', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-24 13:28:57'),
(11, 'Learn PHP', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-19 13:28:57'),
(12, 'Learn PHP', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-03-31 13:28:57'),
(13, 'Learn PHP', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-04-01 13:28:57'),
(14, 'Learn PHP', 'Long overdo Session obout php and sql on the universy very loveley you sould all come and show your prity faces. and this is about it. now lets get going.', '2018-04-17 13:28:57'),
(15, 'Sleaping party', 'go to sleap\r\nwere pajamas\r\nsleepp wll\r\nnever waky', '2018-03-23 12:00:00'),
(16, 'basicly nothin', 'you do nothing, and just sleep up and it is so very cool', '2018-03-25 00:00:00'),
(17, 'Santa Claouse Party', 'Santa clouse will come to our hose\r\nand give fine gifts to all the nice children. \r\nIf you want to show up, just register below. \r\nIts gonabe the best party ever. \r\nDon\'t miss it ;)', '2018-03-23 15:20:00'),
(18, 'Working in The Super', 'Going to the super\r\nand sitting there\r\nfor fucking ever.......\r\nvery very sad indid.', '2018-03-26 14:00:00'),
(19, 'ff', 'ff', '2018-03-07 05:00:00'),
(20, 'f', 'f', '2018-03-23 15:00:00'),
(21, 'g', 'g', '2018-03-23 16:00:00'),
(22, 'asf', 'asdf', '2018-03-23 14:00:00'),
(23, 'Drinking with freinds', 'Drinking, \r\nand somking \r\nand singing \r\nand loughning and doning basicly nothing.', '2018-03-26 23:00:00'),
(24, 'Napping', 'Going to sleep for a very long period. \r\nThat includes all the activities in this event.\r\nIf you do not want to sleep, please do not show your preaty little face, in our big happy party. \r\nThank you very much indid. \r\nHave a good night. ', '2018-03-27 10:00:00'),
(25, 'Eat Sufgi', 'Eat sufgi.\r\nand another one.\r\nand one more\r\nand just last one more\r\nand one for deseart\r\n\r\nand drink diet coce :D', '2018-03-31 20:00:00'),
(26, 'Open Day Java', 'Eat some free food.\r\nListen to some free talks.\r\nLearn some new stuff about Java.\r\nGo back home.', '2018-04-03 19:00:00'),
(27, 'Bat Mitzva', 'Kabalat panim\r\nDancing\r\nEating\r\nGiving presents\r\nListening to a speach\r\nsaying goodbyes', '2018-03-30 19:30:00'),
(28, 'Another Event', 'With few details', '2018-04-05 12:12:00'),
(29, 'Moooooo', 'It\'s not working :((', '2018-04-06 11:15:00'),
(30, 'Trying with Yes', 'Would it work?', '2018-03-30 15:15:00'),
(31, 'Event', 'Event', '2018-03-29 10:10:00'),
(32, 'Sarah', 'Event', '2018-03-30 20:20:00'),
(33, 'One More Try', 'Trying this Thingi', '2018-03-30 15:15:00'),
(34, 'And Now?', 'Would  it work?', '2018-03-27 15:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `ls32_users`
--

CREATE TABLE `ls32_users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_bin NOT NULL,
  `password` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ls32_users`
--

INSERT INTO `ls32_users` (`id`, `name`, `password`, `email`) VALUES
(1, 'Yos', '3b712de48137572f3849aabd5666a4e3', 'yos@yos.dos'),
(2, 'Rakkafa', 'e10adc3949ba59abbe56e057f20f883e', 'rakkafa@gmail.com'),
(3, 'Ram', 'e35cf7b66449df565f93c607d5a81d09', 'zotus2@gmail.com'),
(4, 'Devora', 'e10adc3949ba59abbe56e057f20f883e', 'dev@gmail.com'),
(5, 'Zohar', 'e10adc3949ba59abbe56e057f20f883e', 'z@g.c'),
(6, 'Ron', 'e10adc3949ba59abbe56e057f20f883e', 'r@n.c'),
(7, 'Beni', 'e10adc3949ba59abbe56e057f20f883e', 'b@n.c'),
(8, 'Geffry', 'e10adc3949ba59abbe56e057f20f883e', 'g@f.c'),
(9, 'Jhon Douh', 'e10adc3949ba59abbe56e057f20f883e', 'j@d.c'),
(10, 'hhh', 'e10adc3949ba59abbe56e057f20f883e', 'h@h'),
(11, 'Napolieon', 'e10adc3949ba59abbe56e057f20f883e', 'n@p.c'),
(12, 'Hershel', 'e10adc3949ba59abbe56e057f20f883e', 'h@s.c'),
(13, 'Jallal', 'e10adc3949ba59abbe56e057f20f883e', 'j@f.com'),
(17, 'tf', 'bcc720f2981d1a68dbd66ffd67560c37', 't@t.t'),
(21, 'John', 'e10adc3949ba59abbe56e057f20f883e', 'j.k@h'),
(22, 'Beno', '6a204bd89f3c8348afd5c77c717a097a', 'b@n.i'),
(23, 'Sarah', '6a204bd89f3c8348afd5c77c717a097a', 's@r.h');

-- --------------------------------------------------------

--
-- Table structure for table `ls32_user_events`
--

CREATE TABLE `ls32_user_events` (
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ls32_user_events`
--

INSERT INTO `ls32_user_events` (`id_user`, `id_event`) VALUES
(1, 1),
(2, 1),
(2, 5),
(2, 10),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(3, 4),
(3, 8),
(3, 9),
(3, 12),
(3, 13),
(3, 14),
(3, 16),
(3, 17),
(3, 18),
(3, 21),
(3, 27),
(4, 1),
(4, 14),
(4, 18),
(4, 25),
(4, 26),
(5, 1),
(5, 10),
(5, 13),
(5, 15),
(5, 24),
(5, 25),
(5, 27),
(5, 29),
(6, 1),
(6, 10),
(6, 15),
(6, 24),
(6, 25),
(6, 28),
(6, 34),
(7, 1),
(7, 15),
(7, 24),
(7, 25),
(7, 27),
(7, 33),
(8, 1),
(8, 7),
(8, 25),
(8, 27),
(8, 32),
(9, 1),
(9, 6),
(9, 9),
(9, 15),
(9, 16),
(9, 24),
(9, 25),
(9, 27),
(9, 30),
(10, 1),
(11, 12),
(11, 23),
(11, 24),
(11, 25),
(11, 28),
(11, 29),
(22, 23),
(22, 25),
(22, 26),
(22, 27),
(23, 3),
(23, 24),
(23, 25),
(23, 26),
(23, 32),
(23, 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ls32_events`
--
ALTER TABLE `ls32_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ls32_users`
--
ALTER TABLE `ls32_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ls32_user_events`
--
ALTER TABLE `ls32_user_events`
  ADD PRIMARY KEY (`id_user`,`id_event`),
  ADD KEY `event_constraint` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ls32_events`
--
ALTER TABLE `ls32_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ls32_users`
--
ALTER TABLE `ls32_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ls32_user_events`
--
ALTER TABLE `ls32_user_events`
  ADD CONSTRAINT `event_constraint` FOREIGN KEY (`id_event`) REFERENCES `ls32_events` (`id`),
  ADD CONSTRAINT `user_constraint` FOREIGN KEY (`id_user`) REFERENCES `ls32_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
