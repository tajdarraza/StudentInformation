-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 07:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `bhup`
--

CREATE TABLE `bhup` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `rn` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bhup`
--

INSERT INTO `bhup` (`fname`, `lname`, `session`, `rn`, `branch`, `year`, `semester`, `dob`, `address`) VALUES
('CHETHAN', 'GOWDA', '2014', '1hk14cs020', 'CS', 'Fourth', 'Seventh', '2018-11-12', 'FJRGDHICUMKIGD'),
('MD', 'RAZA', '2015', '1hk14cs026', 'CS', 'Fourth', 'Seventh', '2018-10-29', '#310 MUZZAMMIL RESIDENCY GOVINDAPURA NAG'),
('MD', 'RAZA', '2015', '1hk14cs028', 'CS', 'Fourth', 'Second', '2018-11-13', '#310 MUZZAMMIL RESIDENCY GOVINDAPURA NAG'),
('FARHAN', 'JYGDCS', 'Select Session', '1hk15cs012', 'CS', 'Fourth', 'Third', '2018-11-12', 'GUDFXKNDCGIYE'),
('BHARAT', 'RAINA', '2015', '1hk15cs022', 'CS', 'Fourth', 'Seventh', '2018-11-06', 'HDSKMFXLIOCG'),
('BIBEK', 'GAUTAM', '2015', '1hk15cs026', 'CS', 'Fourth', 'Seventh', '2018-10-17', '#310 MUZZAMMIL RESIDENCY GOVINDAPURA NAG'),
('MD TAJDAR', 'RAZA', '2015', '1hk15cs047', 'CS', 'Fourth', 'Seventh', '1997-01-04', '#310 MUZZAMMIL RESIDENCY GOVINDAPURA NAG'),
('MD', 'HUSSAIN', '2015', '1hk15cs050', 'EC', 'Fourth', 'Seventh', '2018-11-05', 'HGDVCSK XLWMFX'),
('FARHAN', 'R', '2015', '1hk15cs054', 'CS', 'Fourth', 'Seventh', '2018-11-05', 'KYIELXCFNHOZRW'),
('HAYAT', 'M', '2015', '1hk15cs056', 'CS', 'Fourth', 'Seventh', '2018-11-12', 'JSHNKXULCOMW'),
('ASIF', 'FAROOQUE', '2015', '1hk15cv013', 'Civil', 'Third', 'Seventh', '2018-01-08', 'UKHWMSXFJSU'),
('MOHAMMED', 'HUSSAIN', '2015', '1hk15ec050', 'EC', 'Fourth', 'Seventh', '2018-11-05', 'UIDXUOCRK8UKOLIGDK9OE'),
('SAIF', 'BAIG', '2015', '1hk15ec083', 'EC', 'Fourth', 'Seventh', '2018-11-11', 'HFBDSKNDHJDSD'),
('FAISAL', 'KHAN', '2015', '1hk15ee040', 'EEE', 'Fourth', 'Seventh', '2018-11-13', 'YUSGNIKXFWHORMW'),
('REMINSHAH', 'MOHAMMED', '2015', '1hk15me079', 'Mechanical', 'Third', 'Fifth', '2018-07-09', 'JKSHLMDXS'),
('RAEES', 'SHAREEF', '2015', '1hk15me111', 'Mechanical', 'Fourth', 'Seventh', '2018-11-12', 'GFSJDKLDIJCLSC'),
('WAADULLAH', 'QUADRI', '2015', '1kn15is017', 'IS', 'Fourth', 'Seventh', '2018-11-15', 'GKHFXMDYCOKW');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('tajdar', '9535');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bhup`
--
ALTER TABLE `bhup`
  ADD PRIMARY KEY (`rn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
