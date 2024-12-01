-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2024 at 01:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comsoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(2) NOT NULL,
  `categoryName` varchar(30) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `color`) VALUES
(1, 'FEATURE', '#2A9D8F'),
(2, 'BREAKING', '#E63946'),
(3, 'REPORT', '#457B9D'),
(4, 'ADVISORY', '#F4A261'),
(5, 'NEWS UPDATE', '#E9C46A'),
(6, 'EDITORIAL', '#264653'),
(7, 'STATEMENT', '#A8DADC');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `publicationID` int(3) NOT NULL,
  `publicationName` varchar(100) NOT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`publicationID`, `publicationName`, `logo`) VALUES
(1, 'The Cloud Sentinel', 'CS WM B.png'),
(2, 'The Searcher', 'searcher.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tcsarticles`
--

CREATE TABLE `tcsarticles` (
  `articleID` int(5) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `banner` varchar(15) NOT NULL,
  `description` varchar(500) NOT NULL,
  `categoryID` int(2) NOT NULL,
  `datetime` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `photoDescription` varchar(300) NOT NULL,
  `photoSource` varchar(100) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcsarticles`
--

INSERT INTO `tcsarticles` (`articleID`, `headline`, `banner`, `description`, `categoryID`, `datetime`, `photoDescription`, `photoSource`, `content`) VALUES
(1, 'From PUP Sta. Mesa to PUP Sto. Tomas: New Computers Arrived', 'B0001.jpg', 'PUP Sto. Tomas has received 25 new computers from PUP Manila, significantly upgrading the university\'s computer laboratories.', 1, '2024-11-25 11:28:59', 'ComLab 2 with the new computers installed.', 'John Doe', '<p>\r\n    The Polytechnic University of the Philippines Sto. Tomas Campus has received 25 new computers from PUP Sta.\r\n    Mesa, the University\'s main campus. This upgrade significantly enhances the campus computer laboratories,\r\n    which are primarily used by students in technology-centered programs.\r\n\r\n    Nineteen (19) of the new computers have been installed in Computer Laboratory 2, while two (2) were added to\r\n    Computer Laboratory 1, which already had existing equipment. The installations were completed on November 23,\r\n    2024, thanks to the efforts of BSIT 2-1 students.\r\n  </p>\r\n  <p>\r\n    To ensure proper maintenance and organization, students who wish to use the updated computer laboratories must\r\n    notify the Computer Society Officers in advance. The organization will monitor laboratory usage, keeping\r\n    records of users and access times. All existing guidelines remain in place, including strict prohibitions on\r\n    food, drinks, and liquids within the labs, to safeguard the equipment and maintain a productive environment.\r\n  </p>\r\n  <p>\r\n    The new MSI computers come equipped with advanced specifications, including Intel Core i6 CPUs, GTX 1650 D6\r\n    Ventus XS V3 4G GPUs, 1TB HDD, 512GB SSD, 16GB DDR4 RAM, and essential peripherals such as headphones,\r\n    webcams, mice, and keyboards.\r\n  </p>\r\n  <p>\r\n    This upgrade is expected to greatly benefit PUPians. With access to modern equipment, the Tomasinong Iskolar\r\n    ng Bayan can conduct workshops, seminars, and other technology-focused events, enhancing their real-world\r\n    experience and technical proficiency.\r\n  </p>\r\n  <p>\r\n    The Computer Society is the official academic organization of BSIT Students of PUP Sto Tomas Campus.\r\n  </p>'),
(2, 'The Sentinels CODM Team at the PCC Season 2', 'B0002.png', 'The Sentinels CODM Team at the PCC Season 2', 3, '2024-11-25 11:28:59', 'Players playing CODM at the Computer Laboratory 1.', 'Vincent Angeles', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit reprehenderit natus, placeat sint voluptatibus nemo velit quia in, ex cum corporis aut non perferendis nam animi at suscipit quis facere.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ducimus, sit, voluptates ullam earum ea est dolorum minus nisi delectus maiores corporis minima numquam omnis pariatur. Cum consectetur ad officiis.');

-- --------------------------------------------------------

--
-- Table structure for table `userArticles`
--

CREATE TABLE `userArticles` (
  `userArticleID` int(4) NOT NULL,
  `articleID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `isMainAuthor` varchar(3) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userArticles`
--

INSERT INTO `userArticles` (`userArticleID`, `articleID`, `userID`, `isMainAuthor`) VALUES
(1, 1, 1, 'yes'),
(2, 1, 2, 'no'),
(3, 1, 3, 'no'),
(4, 2, 2, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `publicationID` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `publicationID`) VALUES
(1, 'Denmar', 'Redondo', 1),
(2, 'Eliaza Mae', 'Malibiran', 2),
(3, 'Ericka', 'Maynete', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`publicationID`);

--
-- Indexes for table `tcsarticles`
--
ALTER TABLE `tcsarticles`
  ADD PRIMARY KEY (`articleID`);

--
-- Indexes for table `userArticles`
--
ALTER TABLE `userArticles`
  ADD PRIMARY KEY (`userArticleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `publicationID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tcsarticles`
--
ALTER TABLE `tcsarticles`
  MODIFY `articleID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userArticles`
--
ALTER TABLE `userArticles`
  MODIFY `userArticleID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
