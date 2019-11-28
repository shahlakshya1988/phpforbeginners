-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 12:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpforbeginners_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(255) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `published_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `published_at`) VALUES
(4, 'Fourth Article', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec eleifend massa. Phasellus orci magna, mattis imperdiet eleifend facilisis, lacinia ac sem. Mauris venenatis rutrum diam, in eleifend odio consequat dictum. Proin et pharetra nunc. Pellentesque mattis metus nec ex posuere faucibus. Phasellus porttitor dolor sapien, quis sodales turpis varius in. Proin tincidunt lorem diam, ac euismod erat sagittis sed. Nulla efficitur vestibulum dolor, sit amet molestie leo porttitor id.</p> <p>Maecenas dapibus vel risus nec euismod. Ut leo mauris, luctus sit amet maximus sit amet, hendrerit faucibus mi. Fusce porttitor congue risus. Nam neque mauris, sagittis vitae finibus rhoncus, venenatis in justo. Sed suscipit feugiat augue ac faucibus. Nam arcu velit, efficitur nec massa vitae, dapibus pharetra nunc. Etiam tempor nunc vitae dapibus finibus. In dapibus magna eu tellus vestibulum convallis. Nunc ligula mauris, sollicitudin tristique bibendum at, placerat hendrerit tortor.</p> <p>Ut quis felis congue, luctus magna vitae, semper metus. Vestibulum vel nibh tristique, dignissim erat eu, rhoncus diam. Pellentesque mattis blandit tempus. Sed a sollicitudin velit. Pellentesque egestas mi sit amet finibus gravida. Phasellus nibh nulla, auctor ut venenatis at, malesuada quis justo. Vestibulum fermentum sapien non ligula dignissim, id pellentesque metus placerat. Integer et imperdiet lorem. Morbi ut cursus sapien. Mauris dapibus urna non lacus pretium lobortis. Quisque sapien purus, tempor ultrices justo nec, viverra pharetra ipsum. Curabitur eget congue odio. Suspendisse sit amet ultrices dolor, vitae auctor nunc. Integer tortor purus, mollis quis convallis eget, faucibus sit amet nibh. Pellentesque risus turpis, sodales id eros eu, vehicula venenatis justo.</p>', '2019-11-14 13:01:00'),
(5, 'Fifth Article', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec eleifend massa. Phasellus orci magna, mattis imperdiet eleifend facilisis, lacinia ac sem. Mauris venenatis rutrum diam, in eleifend odio consequat dictum. Proin et pharetra nunc. Pellentesque mattis metus nec ex posuere faucibus. Phasellus porttitor dolor sapien, quis sodales turpis varius in. Proin tincidunt lorem diam, ac euismod erat sagittis sed. Nulla efficitur vestibulum dolor, sit amet molestie leo porttitor id.</p>\r\n\r\n<p>Maecenas dapibus vel risus nec euismod. Ut leo mauris, luctus sit amet maximus sit amet, hendrerit faucibus mi. Fusce porttitor congue risus. Nam neque mauris, sagittis vitae finibus rhoncus, venenatis in justo. Sed suscipit feugiat augue ac faucibus. Nam arcu velit, efficitur nec massa vitae, dapibus pharetra nunc. Etiam tempor nunc vitae dapibus finibus. In dapibus magna eu tellus vestibulum convallis. Nunc ligula mauris, sollicitudin tristique bibendum at, placerat hendrerit tortor.</p>\r\n\r\n<p>Ut quis felis congue, luctus magna vitae, semper metus. Vestibulum vel nibh tristique, dignissim erat eu, rhoncus diam. Pellentesque mattis blandit tempus. Sed a sollicitudin velit. Pellentesque egestas mi sit amet finibus gravida. Phasellus nibh nulla, auctor ut venenatis at, malesuada quis justo. Vestibulum fermentum sapien non ligula dignissim, id pellentesque metus placerat. Integer et imperdiet lorem. Morbi ut cursus sapien. Mauris dapibus urna non lacus pretium lobortis. Quisque sapien purus, tempor ultrices justo nec, viverra pharetra ipsum. Curabitur eget congue odio. Suspendisse sit amet ultrices dolor, vitae auctor nunc. Integer tortor purus, mollis quis convallis eget, faucibus sit amet nibh. Pellentesque risus turpis, sodales id eros eu, vehicula venenatis justo.</p>', '2019-11-02 10:14:47'),
(6, 'hello', 'hello world', '2019-11-09 04:01:00'),
(7, 'hello', 'hello world', '2019-11-09 04:01:00'),
(8, 'hello', 'hello world', '2019-11-09 04:01:00'),
(9, 'hello', 'hello world', '2019-11-09 04:01:00'),
(10, 'hello', 'hello world', '2019-11-09 04:01:00'),
(11, 'hello', 'hello world', '2019-11-09 04:01:00'),
(12, 'hello', 'hello world', '2019-11-09 04:01:00'),
(13, 'hello\' "', 'asdfasdf', '2019-11-22 14:00:00'),
(15, '<script>alert(\\\\\\"Hello World\\\\\\");</script>', 'conent', '2019-11-22 13:00:00'),
(17, 'asdf', '', '0000-00-00 00:00:00'),
(19, 'new article pdo insert', 'new article pdo insert', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'dave', '$2y$10$pI8UPCGHQrtt52Ov.CE9y.Q/ezLD3UK.6KEklBG0MVz1mZ73arohe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
