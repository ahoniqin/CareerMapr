-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 22, 2015 at 02:21 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `NumberOfJobs`
--

CREATE TABLE `NumberOfJobs` (
  `NOC` varchar(183) DEFAULT NULL,
  `NOJ` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `NumberOfJobs`
--

INSERT INTO `NumberOfJobs` (`NOC`, `NOJ`) VALUES
('Other management occupations [A1-A3] ', 16.8),
('Business, finance and administrative occupations [B] ', 16.8),
('Professional occupations in business and finance [B0] ', 8.1),
('Financial, secretarial and administrative occupations [B1-B3] ', 8.1),
('Clerical occupations, including supervisors [B4-B5] ', 5.7),
('Natural and applied sciences and related occupations [C] ', 17.4),
('Health occupations [D] ', 13.3),
('Professional occupations in health, nurse supervisors and registered nurses [D0-D1] ', 14.2),
('Technical, assisting and related occupations in health [D2-D3] ', 10.2),
('Occupations in social science, education, government service and religion [E] ', 5.9),
('Occupations in social science, government service and religion [E0 E2] ', 5.9),
('Teachers and professors [E1 E130]  (9)', 5.0),
('Occupations in art, culture, recreation and sport [F] ', 6.3),
('Sales and service occupations [G]  (8)', 8.1),
('Wholesale, technical, insurance, real estate sales specialists, and retail, wholesale and grain buyers [G1] ', 9.3),
('Retail salespersons, sales clerks, cashiers, including retail trade supervisors [G011 G2-G3] ', 10.1),
('Chefs and cooks, and occupations in food and beverage service, including supervisors [G012 G4-G5] ', 10.1),
('Occupation in protective services [G6] ', 10.1),
('Childcare and home support workers [G8] ', 5.9),
('Sales and service occupations not elsewhere classified, including occupations in travel and accommodation, attendants in recreation and sport as well as supervisors [G013-G016 G7 G9] ', 8.1),
('Trades, transport and equipment operators and related occupations [H] ', 23.5),
('Contractors and supervisors in trades and transportation [H0] ', 7.5),
('Construction trades [H1] ', 10.7),
('Other trades occupations [H2-H5] ', 5.3),
('Transport and equipment operators [H6-H7] ', 7.5),
('Trades helpers, construction, and transportation labourers and related occupations [H8] ', 8.3),
('Occupations unique to primary industry [I] ', 5.0),
('Occupations unique to processing, manufacturing and utilities [J] ', 0.8),
('Machine operators and assemblers in manufacturing, including supervisors [J0-J2] ', 10.1),
('Labourers in processing, manufacturing and utilities [J3] ', 12.4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
