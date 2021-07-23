-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 07:23 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teskerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_one`
--

CREATE TABLE `case_one` (
  `id` int(11) NOT NULL,
  `jawaban_satu` text NOT NULL,
  `jawaban_dua` text NOT NULL,
  `jawaban_tiga` text NOT NULL,
  `jawaban_empat` text NOT NULL,
  `jawaban_lima` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_one`
--

INSERT INTO `case_one` (`id`, `jawaban_satu`, `jawaban_dua`, `jawaban_tiga`, `jawaban_empat`, `jawaban_lima`) VALUES
(13, '233', 'since : 1, 1995 : 2, java : 6, has : 1, changed : 1, our : 5, world : 2, and : 8, expectations : 1, today : 2, with : 2, technology : 2, such : 1, a : 3, part : 1, of : 7, daily : 1, lives : 2, we : 3, take : 2, it : 2, for : 3, granted : 1, that : 6, can : 1, be : 2, connected : 1, access : 1, applications : 2, content : 1, anywhere : 1, anytime : 1, because : 1, expect : 1, digital : 3, devices : 4, to : 6, smarter : 1, more : 2, functional : 1, way : 1, entertaining : 1, in : 4, the : 20, early : 1, 90s : 1, extending : 1, power : 2, network : 1, computing : 2, activities : 1, everyday : 1, life : 1, was : 6, radical : 1, vision : 1, 1991 : 1, small : 1, group : 1, sun : 1, engineers : 1, called : 1, green : 2, team : 4, believed : 1, next : 1, wave : 1, union : 1, consumer : 1, computers : 1, led : 1, by : 1, james : 1, gosling : 1, worked : 1, around : 1, clock : 1, created : 1, programming : 1, language : 2, would : 2, revolutionize : 1, demonstrated : 1, their : 1, new : 1, an : 1, interactive : 1, handheld : 2, home : 1, entertainment : 1, controller : 1, originally : 1, targeted : 1, at : 2, cable : 1, television : 1, industry : 1, unfortunately : 1, concept : 1, much : 1, too : 1, advanced : 1, them : 1, time : 1, but : 2, just : 2, right : 1, internet : 3, which : 1, starting : 1, off : 1, announced : 1, netscape : 1, navigator : 1, browser : 1, incorporate : 1, not : 1, only : 1, permeates : 1, also : 1, is : 2, invisible : 1, force : 1, behind : 1, many : 1, day : 2, from : 1, mobile : 1, phones : 1, games : 1, navigation : 1, systems : 1, e : 1, business : 1, solutions : 1, everywhere : 1, ', '98', 'Sejumlah 20  dan kata tersebut adalah: the ', 'Sejumlah 98 dan kata tersebut adalah: since, has, changed, expectations, such, part, daily, granted, can, connected, access, content, anywhere, anytime, because, expect, smarter, functional, way, entertaining, early, 90s, extending, network, activities, everyday, life, radical, vision, 1991, small, group, sun, engineers, called, believed, next, wave, union, consumer, computers, led, by, james, gosling, worked, around, clock, created, programming, revolutionize, demonstrated, their, new, an, interactive, home, entertainment, controller, originally, targeted, cable, television, industry, unfortunately, concept, much, too, advanced, them, time, right, which, starting, off, announced, netscape, navigator, browser, incorporate, not, only, permeates, also, invisible, force, behind, many, from, mobile, phones, games, navigation, systems, e, business, solutions, everywhere, ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_one`
--
ALTER TABLE `case_one`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_one`
--
ALTER TABLE `case_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
