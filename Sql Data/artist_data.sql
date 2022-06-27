-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 09:02 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `adata`
--

CREATE TABLE `adata` (
  `Artist_Name` varchar(255) NOT NULL,
  `Date_of_Birth` varchar(255) NOT NULL,
  `Bio` varchar(510) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adata`
--

INSERT INTO `adata` (`Artist_Name`, `Date_of_Birth`, `Bio`) VALUES
('Bad Bunny', '10 March 1994', 'Tití Me Preguntó, Party, Moscow Mule, Booker T'),
('Alka Yagnik', '20 March 1966', 'Badi Mushkil, Tip Tip, Mirchi Lagi Toh, Yeh Bandhan Toh'),
('Udit Narayan', '1 December 1955', 'Main Yahaan Hoon, Sajan Tumse Pyar, Tujhko Na Dekhun, Tip Tip'),
('Sidhu Moose Wala', '11 June 1993', 'Dollar, Just Listen, The Last Ride, Dear Mama'),
('Kumar Sanu', '20 October 1957', 'Saawariya, Teri Chunariya, Aankh Marey, Teri Chunariya'),
('Arijit Singh', '25 April 1987', 'Desh Mere, Dhokha, Humdard, Galti Se Mistake'),
('Shakira', '2 February 1977', 'Waka Waka, Whenever Wherever, She Wolf, Chantaje'),
('Shreya Ghoshal', '12 March 1984', 'Param Sundari, Chandra, Teri Meri, Aye Khuda'),
('Sonu Nigam', '30 July 1973', 'Sandese Aate Hai, Do Pal, Kabhi Khushi Kabhie Gham, O Mehndi Rang Laye'),
('Ed Sheeran', '17 February 1991', 'Shape of You, I Don’t Care, Perfect, Photograph');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
