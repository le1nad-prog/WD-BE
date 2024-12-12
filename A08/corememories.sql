-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 05:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(500) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'content1.jpg', 'My parents are the core of my world, and their love is the foundation of everything I do. They’ve guided me through life’s toughest decisions and cheered me on through every success. Their wisdom and care provide a constant source of comfort, advice, and support. From childhood lessons to adulthood challenges, they’ve instilled in me values like resilience, empathy, and the importance of family, shaping who I am today.', NULL),
(2, 1, 'content2.jpg', 'Siblings are the companions who walk beside me through every stage of life. Growing up with them has been an adventure full of playful competition, shared secrets, and endless support. They know me like no one else. We’ve been through life’s highs and lows together, and those memories are a part of who I am. Whether we\'re laughing over inside jokes or supporting each other during tough times, my siblings make every moment more meaningful, and our bond is unbreakable.', NULL),
(3, 1, 'content3.jpg', 'Family is the foundation of my life, surrounding me with unconditional love and support no matter where life leads. From my parents and siblings to extended relatives, our bond is built on shared traditions, stories, and experiences. The love and warmth in every family gathering, whether a simple dinner or a holiday celebration, make it all the more special. For me, family isn’t just about blood—it’s about the connections we share and how we support each other through life’s journey.', NULL),
(4, 2, 'content4.jpg', 'This group of elementary friends holds a special place in Friend Island for me. They were the ones I spent my childhood with, building the first bridges of friendship that remain strong today. From playing games during recess to laughing at silly jokes, we shared unforgettable moments. Even as we grew apart, those early connections helped shape who I am. Our bond may have started with crayons and playground games, but it became a foundation that still influences my life.', NULL),
(5, 2, 'content5.jpg', 'This group of high school friends is the heartbeat of Friend Island for me. We faced the challenges of adolescence together, from exams to first loves and heartbreaks. They helped me discover who I truly am, supported me through tough times, and celebrated my victories. Our memories are filled with inside jokes, late-night talks, and endless laughter. Although high school has ended, these friendships remain a vital part of my life, constantly reminding me of the people who shaped me.', NULL),
(6, 2, 'content6.jpg', 'This college friendship marks the beginning of a new chapter in Friend Island for me. It’s a bond built on shared experiences, dreams, and the excitement of what lies ahead. From late-night study sessions to deep conversations about life, these friends are helping shape my future and pushing me toward my goals. Despite walking different paths, the bond we share remains unbreakable. College friends are the ones I know will always be by my side, supporting me no matter where life takes us.', NULL),
(7, 3, 'content7.png', 'This is the game I find myself playing most often lately. It has helped me build and strengthen many friendships during college, offering a sense of connection and fun. Even with all the overwhelming schoolwork, this game gives me a much-needed escape, helping me relax and clear my mind when things get stressful.', NULL),
(8, 3, 'content8.jpg', 'This photo was taken recently, capturing the moment we finally won after a long streak of competing in Mobile Legends tournaments. I can truly say this game has become my all-time favorite. It has strengthened my friendships and provided comfort, especially during the tough days of the pandemic, offering a way to relax and stay connected with friends when we needed it most.', NULL),
(9, 3, 'content9.jpg', 'This was the first game I ever got truly hooked on. I can still vividly remember the excitement of installing it on my very first gadget as a kid. It was one of those games that was just so much fun to play, and I couldn\'t wait to dive in. What made it even better was playing with my relatives and having these relaxed yet competitive battles every time. Those moments are ones I\'ll never forget.', NULL),
(10, 4, 'content10.jpg', 'This was the first anime I ever completed, watching it all the way through from beginning to end. It all began during the uncertain days of the pandemic. While my friend and I were studying together one day, they casually suggested I check it out. At first, I didn’t think much of it, but I gave it a chance and now, it has become my all-time favorite anime.', NULL),
(11, 4, 'content11.jpg', 'This became my second favorite anime of all time, largely because of its stunning animation, especially in the fight scenes that are nothing short of breathtaking. Similar to my first favorite, I discovered this anime during the pandemic, a time when I had plenty of hours to dive into new shows. It was also recommended by the same friend who introduced me to my top favorite, making it an even more memorable experience.', NULL),
(12, 4, 'content12.jpg', 'This anime is my third favorite of all time, right alongside Demon Slayer. What stands out the most for me is its stunning animation, which brings every scene to life, and the thrilling fight sequences that are packed with energy and excitement. On top of that, the well-crafted storyline keeps you engaged from start to finish, making it an unforgettable experience', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Family Island', 'The place where love, support, and belonging thrive.', '', NULL, 'island1.jpg', NULL),
(2, 'Friend Island', 'Where laughter and shared memories keep me grounded.', '', NULL, 'island2.jpg', NULL),
(3, 'Gaming Island', 'My escape into thrilling adventures and virtual worlds.', '', NULL, 'island3.png', NULL),
(4, 'Anime Island', 'Where stories and characters inspire creativity and joy.', '', NULL, 'island4.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
