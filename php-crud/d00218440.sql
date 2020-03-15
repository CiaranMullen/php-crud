
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d00218440`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'Gamers'),
(5, 'survival'),
(6, 'Sports'),
(7, 'Music'),
(8, 'Vlogger'),
(9, 'coding/Repair'),
(12, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `recordID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `subs` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`recordID`, `categoryID`, `subs`, `name`, `image`, `dob`) VALUES
(1, 2, '344635', 'Dolor sit amet, consectetuer.', '706170.jpg', '0000-00-00'),
(2, 3, '876456', 'Ipsum dolor sit amet consectetuer.', '443971.jpg', '0000-00-00'),
(3, 5, '657423', 'howtobasic', '830977.png', '2021-01-02'),
(4, 6, '500', 'Steve', '680667.png', '1980-01-11'),
(5, 6, '1000000000', 'Renaldo', '817669.png', '1980-12-12'),
(6, 9, '608', 'SebGates', '552446.jpg', '1964-03-14'),
(7, 5, '2.5m', 'primitive technology idea', '274068.jpg', '1990-09-09'),
(8, 1, '6million', 'Seananners', '317876.jpg', '1990-12-03'),
(9, 1, '3million', 'Tobuscus', '232822.jpg', '1998-04-03'),
(10, 7, '5000000', 'Katy Perry', '647262.jpg', '1984-10-25'),
(11, 1, '200000', 'FrankieOnPcIn1080P', '149293.jpg', '1990-03-01'),
(12, 9, '500k', 'TronicFix', '21228.jpg', '1980-05-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`recordID`),
  ADD UNIQUE KEY `productCode` (`subs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `recordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
