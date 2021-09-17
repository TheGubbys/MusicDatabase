-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 17. 09 2021 kl. 21:58:50
-- Serverversion: 5.7.31
-- PHP-version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicdatabase`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `musicID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'song number x',
  `musicAuthor` varchar(100) COLLATE utf8_danish_ci NOT NULL COMMENT 'author name',
  `musicTitle` varchar(200) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'song title',
  `musicDesc` text COLLATE utf8_danish_ci COMMENT 'description',
  `musicGenre` varchar(100) COLLATE utf8_danish_ci NOT NULL COMMENT 'genre for lookup, might make dropdown menu',
  `musicLink` varchar(2000) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'link to song',
  `musicSource` varchar(1000) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'only applicable if not original',
  `musicSoMe` varchar(2000) COLLATE utf8_danish_ci NOT NULL COMMENT 'their social media',
  `musicSubDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'submission date',
  `musicFinDate` datetime DEFAULT NULL COMMENT 'song finished date, might differ from the submission date',
  PRIMARY KEY (`musicID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `music`
--

INSERT INTO `music` (`musicID`, `musicAuthor`, `musicTitle`, `musicDesc`, `musicGenre`, `musicLink`, `musicSource`, `musicSoMe`, `musicSubDate`, `musicFinDate`) VALUES
(17, 'TheGubbys', 'Apart', 'This song was made for the fourth round of the Fifth BeepBox Tournament.  I had to pick between three genres, Dubstep, Lo-Fi, and Kawaii future bass. Now, I ain\'t no weeb, and I can\'t do electronic fart noises, so I went with Lo-Fi. Turned out pretty nice, although very simple.', 'Lo-fi, Chiptune', 'https://tinyurl.com/2fkrcj3f', '', '', '2021-09-17 23:57:34', '2021-09-01 00:00:00'),
(18, 'test', 'test', 'nothing at all', 'meme, test', 'https://youtube.com', 'youtube.com/rickroll', 'twitter.com', '2021-09-17 23:58:17', '2021-09-17 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
