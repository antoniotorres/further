-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2014 at 11:00 PM
-- Server version: 5.5.35-0ubuntu0.13.10.2
-- PHP Version: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(255) COLLATE utf8_bin NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `nombre`, `apellido`, `register_date`, `last_login`) VALUES
(1, 'username', 'password', 'Usuario', 'Usuario', '2014-02-05 02:31:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `asesoriasv0_1`
--

CREATE TABLE IF NOT EXISTS `asesoriasv0_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia_id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lugar` varchar(255) COLLATE utf8_bin NOT NULL,
  `tutor` int(11) NOT NULL,
  `ocupada` enum('0','1') COLLATE utf8_bin NOT NULL DEFAULT '0',
  `uer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banco_videos`
--

CREATE TABLE IF NOT EXISTS `banco_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enable` enum('0','1') COLLATE utf8_bin NOT NULL DEFAULT '0',
  `aprobado` enum('0','1') COLLATE utf8_bin NOT NULL DEFAULT '0',
  `titulo` varchar(255) COLLATE utf8_bin NOT NULL,
  `info` text COLLATE utf8_bin NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `mid` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banco_videos`
--

INSERT INTO `banco_videos` (`id`, `enable`, `aprobado`, `titulo`, `info`, `link`, `autor`, `mid`, `fecha`) VALUES
(1, '1', '1', 'Test', 'Probamos el Software', 'http://www.youtube.com/embed/VxcbppCX6Rk', 'El Tester', 1, '2014-02-10 21:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `lista_categorias`
--

CREATE TABLE IF NOT EXISTS `lista_categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lista_categorias`
--

INSERT INTO `lista_categorias` (`id`, `categoria`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `lista_materias`
--

CREATE TABLE IF NOT EXISTS `lista_materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `lista_materias`
--

INSERT INTO `lista_materias` (`id`, `materia`, `categoria_id`) VALUES
(1, 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `web_users`
--

CREATE TABLE IF NOT EXISTS `web_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `matricula` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `asesor` enum('0','1') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `web_users`
--

INSERT INTO `web_users` (`id`, `password`, `matricula`, `nombre`, `apellido`, `email`, `register_date`, `last_login`, `asesor`) VALUES
(1, '5a105e8b9d40e1329780d62ea2265d8a', 'A01193080', 'Jose', 'Torres', 'thetonio96@gmail.com', '2014-02-10 22:49:11', '0000-00-00 00:00:00', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
