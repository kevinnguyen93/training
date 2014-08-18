-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2014 at 09:58 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Main category7806'),
(2, 'Main category4564'),
(3, 'Main category1293'),
(4, 'test category 123');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1CF73D3112469DE2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `category_id`, `created`) VALUES
(1, 'product 6125 sadasd', 19.99, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, libero voluptas? Asperiores, deleniti esse excepturi, illum inventore itaque laboriosam natus odio quibusdam rem sapiente soluta suscipit. Ab molestiae neque recusandae.', 1, '0000-00-00 00:00:00'),
(2, 'product 3009', 19.99, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, libero voluptas? Asperiores, deleniti esse excepturi, illum inventore itaque laboriosam natus odio quibusdam rem sapiente soluta suscipit. Ab molestiae neque recusandae.', 1, '0000-00-00 00:00:00'),
(3, 'product 9102', 19.99, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, libero voluptas? Asperiores, deleniti esse excepturi, illum inventore itaque laboriosam natus odio quibusdam rem sapiente soluta suscipit. Ab molestiae neque recusandae.', 1, '0000-00-00 00:00:00'),
(4, 'product 2060', 19.99, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, libero voluptas? Asperiores, deleniti esse excepturi, illum inventore itaque laboriosam natus odio quibusdam rem sapiente soluta suscipit. Ab molestiae neque recusandae.', 1, '0000-00-00 00:00:00'),
(5, 'product 1141', 19.99, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, libero voluptas? Asperiores, deleniti esse excepturi, illum inventore itaque laboriosam natus odio quibusdam rem sapiente soluta suscipit. Ab molestiae neque recusandae.', 2, '0000-00-00 00:00:00'),
(6, 'product 7676', 19.99, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, libero voluptas? Asperiores, deleniti esse excepturi, illum inventore itaque laboriosam natus odio quibusdam rem sapiente soluta suscipit. Ab molestiae neque recusandae.', 3, '0000-00-00 00:00:00'),
(7, 'test 1', 13, 'test setst', 2, '2014-08-15 09:40:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_1CF73D3112469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
