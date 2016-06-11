-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2016 at 12:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `publicationDate`, `title`, `summary`, `content`) VALUES
(1, '2016-05-01', 'Google Text', 'by Axis', '<iframe src=''demo/1/'' width=''400px'' height=''100%'' scrolling=''no''  frameborder="0"      id=''ifrall'' onload="resizeIframe(this)" >'),
(2, '2016-05-04', 'Priority navigation', 'A pen by Ola.', '<iframe src=''demo/2/'' width=''80%'' \r\nscrolling=''no'' frameborder=''0'' id=''ifrall''  onload="resizeIframe(this)" >'),
(3, '2016-05-05', 'Filter Table', ' by Matt Litherland ', '<iframe src=''demo/3/'' width=''400px'' height=''100%''scrolling=''no''frameborder=''0'' id=''ifrall'' onload=''resizeIframe(this)'' >'),
(4, '2016-05-06', 'Skill Meter', 'Ryota Kitagawa', '<iframe src=''demo/4/'' width=''400px'' height=''100%''scrolling=''no''frameborder=''0'' id=''ifrall'' onload=''resizeIframe(this)'' >'),
(5, '2016-05-07', 'Modal dialog', 'by ekrof', '<iframe src=''demo/5/'' width=''400px'' height=''100%''scrolling=''no''frameborder=''0'' id=''ifrall'' onload=''resizeIframe(this)'' >'),
(6, '2016-05-08', 'Hover buttons', ' by Giana ', '<iframe src=''demo/6/'' width=''400px'' height=''100%''scrolling=''no''frameborder=''0'' id=''ifrall'' onload=''resizeIframe(this)'' >'),
(7, '2016-05-10', 'Facebook Login', 'by adaleN', '<iframe src=''demo/7/'' width=''400px'' height=''100%''scrolling=''no''frameborder=''0'' id=''ifrall'' onload=''resizeIframe(this)'' >'),
(8, '2016-05-09', 'Flat menu', 'by Nexx', '<iframe src=''demo/8/'' width=''400px'' height=''100%''scrolling=''no''frameborder=''0'' id=''ifrall'' onload=''resizeIframe(this)'' >');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
