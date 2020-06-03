-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 30, 2020 at 07:04 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idi`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`id`, `name`, `mobile`, `reason`, `message`) VALUES
(1240, 'Arnav Kumar', '+919956275000', 'arnav@yahoo.com', 'Going into this movie my expectations were low. All the reviews I had seen for this movie had all but killed my hopes for this last instalment of the Star Wars saga, however, what I got to see in the theatre was completely amazing. A thrilling end to the adventure, 42 years in the making, this is what all the anticipation led to. J J Abraham has created a masterpiece which pulls in the new audience while rewarding the existing one, but this movie was something that I did not anticipate. I fully expected it to get the Endgame treatment- Playing it safe and giving the fans exactly what they ask for. However, those are not the groundbreaking movies, the ones that are remembered are the ones which break the mould and do something new, even in the face of all the flak received by the community. The ending was satisfying, yet unpredictable, controversial but the perfect one a fan like me could hope for. After seeing all the movies multiple times along with watching all the tv series of this saga, I have come to conclude that this movie carries a deep mix of emotions and nostalgia, so be advised this movie is in no way made for critics or casual viewers, it is a celebration of all things Star Wars, a salute, rather a gift if you may, to all the hardcore fans that remember the callbacks and parallels to the original trilogy, to those who look out for the minute details. The movie is the most fitting end, though the movie in itself isn’t perfect. It has its flaws- the first half was a bit clumsy and it lowered the value of the films that came before it, making sacrifices like that of Anakin devoid and contradicting the prophecy if him being the chosen one. The best thing about this movie was that no glasses were left half ');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `name`, `filename`) VALUES
(129, 'CCGL9008_Cybersocieties_Introduction_20190114.pdf', 'asdfgh'),
(130, 'CCGL9008 - Assessment Rubrics for YouTube Video and Reflection Journal.pdf', 'fight');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `caption`, `time`) VALUES
(23, 'picture.png', 'PNG', '2020-01-25 05:08:52'),
(24, '78687105_544919589388963_2624718685691969536_o.jpg', 'ASDFGHJ', '2020-01-25 05:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(123, 'pritigupta7815@yahoo.com', 'arnavarya5');

-- --------------------------------------------------------

--
-- Table structure for table `Register`
--

CREATE TABLE `Register` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `add` varchar(100) NOT NULL,
  `school` varchar(50) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Register`
--

INSERT INTO `Register` (`id`, `name`, `email`, `mobile`, `add`, `school`, `course`) VALUES
(1236, 'Aryak Kumar', 'aryakumar@gmail.com', '9161962222', 'B 205 CSI Towers , Vipin Khand', 'CMS', 'VedicMaths'),
(1240, 'Aryak Kumar', 'aryakumar6190@gmail.com', '+911234567890', 'asdfghjkl', 'wertyui', 'FingerCalculations'),
(1241, 'Arnav', 'av@gmail.com', '+919956275000', 'B 205 CSI Towers , Vipin Khand', 'CMS', 'abacus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Register`
--
ALTER TABLE `Register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1242;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `Register`
--
ALTER TABLE `Register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1242;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
