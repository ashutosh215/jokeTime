-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2019 at 04:44 PM
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
-- Database: `jokes`
--

-- --------------------------------------------------------

--
-- Table structure for table `jokes_table`
--

DROP TABLE IF EXISTS `jokes_table`;
CREATE TABLE IF NOT EXISTS `jokes_table` (
  `jokeID` int(10) NOT NULL AUTO_INCREMENT,
  `jokeQues` varchar(200) NOT NULL,
  `jokeAns` varchar(200) NOT NULL,
  PRIMARY KEY (`jokeID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jokes_table`
--

INSERT INTO `jokes_table` (`jokeID`, `jokeQues`, `jokeAns`) VALUES
(1, 'What time is when an elephant sits on your fence', 'its time to get a new fence'),
(2, 'Why did the chicken cross the road', 'to get to the other side'),
(3, 'Why did the chicken cross the playground', 'to get to the other slide'),
(4, 'what did the mother buffalo say to her son when dropping him off', 'bison'),
(5, 'what happens to a frogs car when it breaks down', 'it gets toad away'),
(6, 'how does a frog start its car when the battery dies', 'it jumps start'),
(7, 'what is brown and sticky', 'a stick'),
(8, 'How can you drop a raw egg onto a concrete floor without cracking it?', 'Concrete floors are very hard to crack!'),
(9, 'If it took eight men ten hours to build a wall, how long would it take four men to build it?', 'No time at all it is already built.'),
(10, 'Approximately how many birthdays does the average woman have?', 'Just one. All the others are anniversaries.'),
(11, 'How can you lift an elephant with one hand?', 'It is not a problem, since you will never find an elephant with one hand.'),
(12, 'Why it is impossible to send a telegram to Washington today?', 'Because he is dead.'),
(13, 'What looks like half apple?', 'The other half.'),
(14, 'What can you never eat for breakfast?', 'Dinner');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
