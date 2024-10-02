-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 28, 2024 at 07:59 PM
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
-- Database: `Sportify`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Title` varchar(255) NOT NULL,
  `Achievement_Description` varchar(255) NOT NULL,
  `Proof` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`Name`, `Email`, `Title`, `Achievement_Description`, `Proof`, `created_at`) VALUES
('test', NULL, 'This', 'fhwsfhdsf', 'dsfhusdf', '2024-07-13 00:20:03'),
('Kavya', '', 'jfsfjsd', 'sdfhjsdfs', 'sdfhdsfsdf', '2024-07-13 06:47:38'),
('test', '', 'Best Bowler', 'Took Hatrick Stats good', 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg', '2024-07-13 18:33:21'),
('test', 'test@gmail.com', 'dsfsdf', 'dsfsdfds', 'https://images.unsplash.com/photo-1720648469979-519a3c1abb31?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw2fHx8ZW58MHx8fHx8', '2024-07-14 04:15:23'),
('Test', 'test@gmail.com', 'dfdf', 'dffd', 'https://images.unsplash.com/photo-1720440906281-b4367a242a86?q=80&w=2340&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2024-07-14 06:55:07'),
('Test', 'test@gmail.com', 'U19 State level', 'weightlifting', 'https://images.unsplash.com/photo-1584445584400-1a7cc5de77ae?q=80&w=2377&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2024-07-14 07:03:33'),
('', '', 'jfghjfgh', 'jghjgh', 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg', '2024-07-27 18:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `CompetitionID` int(11) NOT NULL,
  `Organizer` varchar(100) NOT NULL,
  `CompetitionName` varchar(255) NOT NULL,
  `Sport` varchar(100) NOT NULL,
  `Venue` varchar(255) NOT NULL,
  `Day` date NOT NULL,
  `Reward` varchar(100) NOT NULL,
  `EntryFee` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `competitions`
--

INSERT INTO `competitions` (`CompetitionID`, `Organizer`, `CompetitionName`, `Sport`, `Venue`, `Day`, `Reward`, `EntryFee`) VALUES
(1, '', 'Starara', 'Cricket', 'Eden Garden', '2024-07-20', '11000', 500),
(2, 'Parv', 'TARARARARARARAR', 'Football', 'ATK mohun bagan', '2024-07-27', '100000', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `details_user`
--

CREATE TABLE `details_user` (
  `Name` varchar(1050) NOT NULL,
  `E-mail` varchar(1050) NOT NULL,
  `Contact` varchar(1050) NOT NULL,
  `dob` varchar(1050) NOT NULL,
  `Interests` varchar(1050) NOT NULL,
  `City` varchar(1050) NOT NULL,
  `Achievements` varchar(1050) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details_user`
--

INSERT INTO `details_user` (`Name`, `E-mail`, `Contact`, `dob`, `Interests`, `City`, `Achievements`) VALUES
('Parv', 'parv@gmail.com', '7003760521', '2024-07-14', 'Cricket', 'Tirupati', 'U19'),
('Test', 'test@gmail.com', '9331214620', '2024-07-14', 'Gym', 'Kolkata', ''),
('', '', '', '2024-07-04', 'Football', 'Hubli', 'U19');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `Coaching_Name` varchar(1050) NOT NULL,
  `Owner_Name` varchar(1050) NOT NULL,
  `Date_Open` datetime(6) NOT NULL,
  `E-mail` varchar(1050) NOT NULL,
  `Password` varchar(1050) NOT NULL,
  `Owner_Contact` varchar(1050) NOT NULL,
  `Sports` varchar(1050) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `City` varchar(1050) NOT NULL,
  `Address` varchar(1050) NOT NULL,
  `iamges_gdrive` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`Coaching_Name`, `Owner_Name`, `Date_Open`, `E-mail`, `Password`, `Owner_Contact`, `Sports`, `created_at`, `City`, `Address`, `iamges_gdrive`) VALUES
('k', 'k', '2008-08-26 00:00:00.000000', 'kavya@gmail.com', '123', '1234567890', 'Cricket', '2024-07-14 03:59:39.000000', 'Kolkata', 'sfsdf', 'gdfg'),
('Football Athletics', 'Vidhan Agarwal', '2024-07-12 00:00:00.000000', 'vidhan@gmail.com', '123', '9330270139', 'Football', '2024-07-14 11:02:27.000000', 'Kolkata', '182,Kabi Guru Sarani', 'data:image/jpeg;base64,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');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `sender` enum('user','mentor') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Sr No.` int(255) NOT NULL,
  `Post By` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Proof` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Sr No.`, `Post By`, `Title`, `Description`, `Proof`, `date`) VALUES
(20, 'test', 'Best Batsman Award', 'Scored 101* in one match and overall series was 900', 'https://images.unsplash.com/photo-1477346611705-65d1883cee1e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA==&auto=format&fit=crop&w=2070&q=80', '2024-07-13 02:37:26'),
(21, 'Vidhan', 'Best Bowler', 'hatrick', 'https://images.unsplash.com/photo-1526506118085-60ce8714f8c5?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', '2024-07-13 02:40:18'),
(28, 'Test', 'best fielder', '20 catches', 'data:image/jpeg;base64,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', '2024-07-14 12:28:15'),
(29, '', 'hbfghfgh', 'hfghfgh', 'https://letsenhance.io/static/8f5e523ee6b2479e26ecc91b9c25261e/1015f/MainAfter.jpg', '2024-07-27 23:39:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Sr No.` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Sr No.`, `Name`, `E-mail`, `Password`, `Contact`) VALUES
(2, 'Kavya', 'kavyarakhecha@gmail.com', '123', '7003760521'),
(5, 'Vidhan', 'vidhan@gmail.com', 'Jain@4620', '9330270139'),
(10, 'Test', 'test@gmail.com', '123', '9331214620'),
(11, 'demo', 'kavya@gmail.com', '123', '55555'),
(12, 'Nabh', 'nabh@gmail.com', '234', '1234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`CompetitionID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Sr No.`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Sr No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `CompetitionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Sr No.` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Sr No.` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
