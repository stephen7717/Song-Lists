-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 07:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `songdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `song_list`
--

CREATE TABLE `song_list` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `song_lyrics` mediumtext NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `song_list`
--

INSERT INTO `song_list` (`id`, `title`, `artist`, `song_lyrics`, `date_created`) VALUES
(3, 'Trick or Treat', 'Caldwell', 'Sed ante. Vivamus tortor. Duis mattis egestas metus. Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh. Quisque id justo sit amet sapien dignissim vestibulum.', '2016-02-07'),
(7, 'Audition (Ôdishon)', 'Kybert', 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis. Sed ante. Vivamus tortor. Duis mattis egestas metus.', '0000-00-00'),
(8, 'Cat People', 'Irons', 'Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim.', '0000-00-00'),
(9, 'Admiral', 'Sprull', 'Nunc purus. Phasellus in felis. Donec semper sapien a libero. Nam dui.', '0000-00-00'),
(10, 'Dunston Checks In', 'Sobey', 'Praesent lectus. Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis. Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor.', '0000-00-00'),
(11, 'Test', 'Test', 'Test', '1998-11-29'),
(12, 'Lazy Song', 'Bruno Mars', 'Today I don', '2011-02-03'),
(13, 'Sunday Morning', 'Maroon 5', 'Sunday morning, rain is falling Steal h But things just get so crazy living Life gets hard to do (lif', '2004-11-08'),
(15, 'Angels like you', 'Miley Cyrus', 'Lyrics Mmm, mmm, mmm Flowers in hand, waiting for me Every word in poetry Won\'t call me by name, only baby The more that you give, the less that I need Everyone says I look happy When it feels right I know that you\'re wrong for me Gonna wish we never met on the day I leave I brought you down to your knees \'Cause they say that misery loves company It\'s not your fault I ruin everything And it\'s not your fault I can\'t be what you need Baby, angels like you can\'t fly down hell with me I\'m everything they said I would be La-la-la I\'m everything they said I would be I\'ll put you down slow, love you goodbye Before you let go, just one more time Take off your clothes, pretend that it\'s fine A little more hurt won\'t kill you Tonight, mother says, ', '2020-11-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song_list`
--
ALTER TABLE `song_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song_list`
--
ALTER TABLE `song_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
