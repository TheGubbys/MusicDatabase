-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 24. 09 2021 kl. 19:47:37
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
  `musicArt` varchar(100) COLLATE utf8_danish_ci DEFAULT NULL,
  `musicDesc` text COLLATE utf8_danish_ci COMMENT 'description',
  `musicGenre` varchar(100) COLLATE utf8_danish_ci NOT NULL COMMENT 'genre for lookup, might make dropdown menu',
  `musicLink` varchar(2000) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'link to song',
  `musicSource` varchar(1000) COLLATE utf8_danish_ci DEFAULT NULL COMMENT 'only applicable if not original',
  `musicSoMe` varchar(2000) COLLATE utf8_danish_ci NOT NULL COMMENT 'their social media',
  `musicSubDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'submission date',
  `musicFinDate` date DEFAULT NULL COMMENT 'song finished date, might differ from the submission date',
  PRIMARY KEY (`musicID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `music`
--

INSERT INTO `music` (`musicID`, `musicAuthor`, `musicTitle`, `musicArt`, `musicDesc`, `musicGenre`, `musicLink`, `musicSource`, `musicSoMe`, `musicSubDate`, `musicFinDate`) VALUES
(39, 'TheGubbys', 'Apart', 'apart.png', 'I made this during the fifth tournament\'s fourth round: Genres. I was presented with three options to pick from, and I picked Lo-Fi as the genre I had to make a song for. I\'d say it turned out pretty well, considering I\'ve never actually tried to make anything other than pop. ', 'Chiptune, Lo-Fi', 'https://tinyurl.com/2fkrcj3f', '', '', '2021-09-23 11:01:28', '2021-09-01'),
(19, 'O^O', 'eating grass', NULL, 'eat grass at your own risk', 'Chiptune', 'https://pastelink.net/3g8w5', '', '', '2021-09-22 22:43:46', '2019-07-07'),
(20, 'TheGubbys', 'Lost', NULL, 'In Memory of Vega and Cookie. Dec 22nd, 2020.', 'Chiptune, Chill', 'https://tinyurl.com/pr8j63hr', '', '', '2021-09-22 22:46:28', '2021-09-22'),
(21, 'O^O', 'Stickerbush Symphony (Cover)', NULL, '', 'Chiptune', 'https://pastelink.net/3g8xq', 'https://www.youtube.com/watch?v=8ir0d7bjMIk', '', '2021-09-22 22:47:55', '2021-09-22'),
(22, 'TheGubbys', 'Sightseeing', NULL, 'Made this song during a fun challenge on the BeepBox Discord. I had to use a Generic pop chord progression, but I think it turned out pretty swell.', 'Chiptune, Pop', 'https://tinyurl.com/yay9yx72', '', '', '2021-09-22 22:50:08', '2021-09-22'),
(23, 'TheGubbys (ft. Retro Reaper & O^O)', 'Reunited', NULL, 'Originally, I found a scrapped snippet of a song on the BeepBox Discord server, and I got hooked on wanting to finish it. I spent a lot of time trying to perfect this, talking with the original artist, RetroReaper as well as O^O, who was really good with drum patterns. Everything past from the first buildup to the drop and forward to the end is mostly all me. This is probably the song that I\'m most proud of as of this day.', 'Chiptune', 'https://tinyurl.com/2m7enchy', '', '', '2021-09-22 22:54:13', '2021-09-22'),
(24, 'TheGubbys', 'Watching the Snow Fall', NULL, 'Made during another challenge on the BeepBox Discord. A tournament, in fact. The idea behind it was to fit a snow-area in a game. This song is more accurate to a \"sitting in a cave, stuck because it\'s too cold outside, huddled up by the fire and telling stories to one another\" kind of theme. Luckily it did pretty good!', 'Chiptune', 'https://tinyurl.com/ycxthwjj', '', '', '2021-09-22 22:57:11', '2021-09-22'),
(25, 'TheGubbys', 'Insectum Alveare', NULL, 'Had to make a song that fit an insect hive. A disgusting task, for sure, but one that had to be done... And this is the end product; Not too shabby!', 'Chiptune, Environmental', 'https://tinyurl.com/nsd3f2et', '', '', '2021-09-22 22:59:58', '2021-09-22'),
(26, 'TheGubbys', 'Space Race (Remix)', NULL, 'Back when I first started making music, this cool dude by the name of Routtboy made a really cool song. It\'s been in the back of my mind until recently, and I decided I\'d remake it, and add a little bit of my own to it. Pretty dang nice.', 'Chiptune', 'https://tinyurl.com/9u9j4fht', 'https://tinyurl.com/hvvfppy4', '', '2021-09-22 23:01:32', '2021-07-27'),
(27, 'TheGubbys', 'Super Hexagon (Remix)', NULL, 'Remade an old Remix... of a cover. A complicated mouthful, but the song is a remake regardless. It\'s a pretty good bop.', 'Chiptune', 'https://tinyurl.com/j56rrrhf', 'http://tinyurl.com/yavyz36q', '', '2021-09-22 23:05:23', '2021-07-04'),
(28, 'TheGubbys', 'Waiting Patiently', NULL, 'You are waiting. You are patient. Yep.', 'Chiptune', 'https://tinyurl.com/y95wqylm', '', '', '2021-09-22 23:06:51', '2021-03-09'),
(29, 'O^O', 'Never This Late', NULL, '', 'Chiptune', 'https://pastelink.net/3g92n', '', '', '2021-09-22 23:08:53', '2019-07-21'),
(30, 'TheGubbys', 'Sunlit Beach (Obligatory Beach Episode)', NULL, 'Made during the Fourth Tournament. The task was to make something that fit a relaxing fishing environment, and I thought this fit well.', 'Chiptune', 'https://tinyurl.com/yaqsjgn6', '', '', '2021-09-22 23:18:16', '2020-09-07'),
(31, 'TheGubbys', 'Crash Team Racing - Main Menu (COVER)', NULL, 'Yeah. I honestly can\'t do covers that well, but hey. It sounds like the original.', 'Chiptune', 'https://tinyurl.com/yyp5zzfn', 'https://www.youtube.com/watch?v=u-ixGqX_YMA', '', '2021-09-22 23:20:31', '2019-05-26'),
(32, 'TheGubbys', 'Resurface', NULL, '', 'Chiptune, Pop', 'https://tinyurl.com/yd25vonp', '', '', '2021-09-22 23:21:40', '2018-11-03'),
(33, 'TheGubbys', 'Ghost - Mystery Skulls (Cover)', NULL, 'I made a cover that I\'m actually pretty proud of. Wow!', '', 'https://tinyurl.com/y9r3wvj2', 'https://www.youtube.com/watch?v=YlEb3L1PIco', '', '2021-09-22 23:22:26', '2018-10-15'),
(34, 'TheGubbys', 'Gaping Memories - Bitbeam (TheGubbys Remix)', NULL, 'Made a small remix of a really good song by BitBeam. ', 'Chiptune, Pop', 'https://tinyurl.com/y7l4u355', 'https://tinyurl.com/yboo7zyu', '', '2021-09-22 23:23:33', '2018-09-05'),
(35, 'O^O', 'Big Dipper', NULL, 'made this for the third tournament', 'Chiptune', 'https://pastelink.net/3g95p', '', '', '2021-09-22 23:24:36', '2019-07-22'),
(36, 'TheGubbys', 'The Isles of Caelum', NULL, 'Made this for the first BeepBox Discord Tournament!', 'Chiptune', 'https://tinyurl.com/y74o8d6l', '', '', '2021-09-22 23:26:01', '2018-08-05'),
(37, 'TheGubbys', 'weightless', NULL, 'Made a short... space kinda song, someone asked me if they could use it in their game afterwards. Pretty dope!', '', 'https://tinyurl.com/y96cw85b ', '', '', '2021-09-22 23:27:04', '2018-04-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
