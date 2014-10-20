-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2014 at 09:00 PM
-- Server version: 5.5.34-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `essdev_ccim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`, `date`) VALUES
(1, 'harleen', 'admin', 'harleen@gmail.com', 'pass@word1', '2014-10-07 09:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `stage1users`
--

CREATE TABLE IF NOT EXISTS `stage1users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(2) NOT NULL,
  `voteCheck` smallint(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Category1A` varchar(30) NOT NULL,
  `Category1B` varchar(30) NOT NULL,
  `Category1C` varchar(30) NOT NULL,
  `Category2A` varchar(30) NOT NULL,
  `Category2B` varchar(30) NOT NULL,
  `Category2C` varchar(30) NOT NULL,
  `Category3A` varchar(30) NOT NULL,
  `Category3B` varchar(30) NOT NULL,
  `Category3C` varchar(30) NOT NULL,
  `Category4A` varchar(30) NOT NULL,
  `Category4B` varchar(30) NOT NULL,
  `Category4C` varchar(30) NOT NULL,
  `Category5A` varchar(30) NOT NULL,
  `Category5B` varchar(30) NOT NULL,
  `Category5C` varchar(30) NOT NULL,
  `Category6A` varchar(30) NOT NULL,
  `Category6B` varchar(30) NOT NULL,
  `Category6C` varchar(30) NOT NULL,
  `Category7A` varchar(30) NOT NULL,
  `Category7B` varchar(30) NOT NULL,
  `Category7C` varchar(30) NOT NULL,
  `Category8A` varchar(30) NOT NULL,
  `Category8B` varchar(30) NOT NULL,
  `Category8C` varchar(30) NOT NULL,
  `Category9A` varchar(30) NOT NULL,
  `Category9B` varchar(30) NOT NULL,
  `Category9C` varchar(30) NOT NULL,
  `Category10A` varchar(30) NOT NULL,
  `Category10B` varchar(30) NOT NULL,
  `Category10C` varchar(30) NOT NULL,
  `Category11A` varchar(30) NOT NULL,
  `Category11B` varchar(30) NOT NULL,
  `Category11C` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(15) NOT NULL,
  `status` varchar(244) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `stage1users`
--

INSERT INTO `stage1users` (`id`, `number`, `voteCheck`, `username`, `password`, `Category1A`, `Category1B`, `Category1C`, `Category2A`, `Category2B`, `Category2C`, `Category3A`, `Category3B`, `Category3C`, `Category4A`, `Category4B`, `Category4C`, `Category5A`, `Category5B`, `Category5C`, `Category6A`, `Category6B`, `Category6C`, `Category7A`, `Category7B`, `Category7C`, `Category8A`, `Category8B`, `Category8C`, `Category9A`, `Category9B`, `Category9C`, `Category10A`, `Category10B`, `Category10C`, `Category11A`, `Category11B`, `Category11C`, `email`, `name`, `status`) VALUES
(1, 99, 0, 'Admin', 'utah52', 'Jeff Heaton', 'Tom Dishman', 'Zach Anderson', 'Danny Shin', 'Kip Paul', 'Bryce Blanchard', 'Stuart Thain', 'Tim Simonsen', 'Heather Bogden', 'Brandon Fugal', 'Collin Perkins', 'Eric Smith', 'MHTN Architects', 'FFKR Architects', 'EDA Architects', 'Okland Construction', 'Layton Construction', 'Big-D Construction', 'Miller Development Company', 'Freeport West Industrial Prope', '', 'Scott Bennion', '', '', 'Victor Taylor', 'Scott Sabey', 'Loyal Hulme', 'Michelle Pearce', 'John R. Montgomery', 'Brandon Duke', 'Sean McCarty', 'John Mastakas', 'James Hilton', '', '', 'y'),
(2, 99, 0, 'tSmith', 'password', 'Jeff Richards', 'Travis J. Parry', 'Jeff Heaton', 'Greg Barratt', 'Bryce Blanchard', 'Brandon Wood', 'Tim Simonsen', 'Rob Moore', 'Chris Hatch', 'Eric Smith', 'Collin Perkins', 'Brandon Fugal', 'MHTN Architects', 'FFKR Architects', 'EDA Architects', 'Okland Construction', 'Layton Construction', 'Big-D Construction', 'Miller Development Company', 'Freeport West Industrial Prope', '', 'Scott Bennion', '', '', 'Victor Taylor', 'Scott Sabey', 'Loyal Hulme', 'Michelle Pearce', 'Jeffrey Holt', 'John R. Montgomery', 'Colton Smith', 'Tom Green', 'James Hilton', '', '', 'y'),
(3, 99, 1, 'rMatheson', 'pass', 'Tom Dischman', '', '', 'Greg Barratt', '', '', 'Tim Simonsen', '', '', 'Brandon Fugal', '', '', 'EDA Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'Colton Smith', '', '', '', '', 'y'),
(4, 0, 1, 'jeremyjensen', 'password', 'Kyle Roberts', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(5, 0, 1, 'gmangum', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'Colton Smith', '', '', '', '', 'y'),
(6, 0, 1, 'mmaires', 'password', 'Kyle Roberts', '', '', 'Greg Barratt', '', '', 'Tim Simonsen', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'Colton Smith', '', '', '', 'Mike', 'y'),
(7, 0, 1, 'jneese', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', '', '', 'y'),
(8, 0, 1, 'jBlanck', 'password', 'Tom Dischman', '', '', 'Greg Barratt', '', '', 'Tim Simonsen', '', '', 'Eric Smith', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'John R. Montgomery', '', '', 'James Hilton', '', '', '', '', 'y'),
(9, 0, 1, 'aRindlisbacher', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'Colton Smith', '', '', ' arindlisbacher@laytonconstruc', 'Alan Rindlisbac', 'y'),
(10, 0, 0, 'aStallings', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'alan@altatitleutah.com', ' Alan Stallings', 'y'),
(11, 0, 1, 'aBarfuss', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Brandon Fugal', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'John R. Montgomery', '', '', 'David Snow', '', '', '', '', 'y'),
(12, 0, 1, 'aMazuran', '1*password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', 'amazuran@comre.com', 'Angie Mazuran', 'y'),
(13, 0, 1, 'aIrons', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'anirons@firstam.com', 'Anna Irons', 'y'),
(14, 0, 0, 'bSlade', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'bslade@byu.edu', 'Barrett Slade	 ', 'y'),
(15, 0, 1, 'kpeterson', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', 'kreg.peterson@cbre.com', 'Kreg Peterson	 ', 'y'),
(16, 0, 0, 'bCunningham', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'bcunningham@swlaw.com', ' Brian Cunningh', 'y'),
(17, 0, 1, 'bBingham', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'MHTN Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', ' brucebingham@hamiltonpartners', 'Bruce Bingham', 'y'),
(18, 0, 1, 'cInglet', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Tim Simonsen', '', '', 'Eric Smith', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', 'cinglet@ngacres.com', 'Charisse Inglet', 'y'),
(19, 0, 1, 'cMonson', 'password', 'Kyle Roberts', '', '', 'Bryce Blanchard', '', '', 'Rob Moore', '', '', 'Eric Smith', '', '', 'MHTN Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'John R. Montgomery', '', '', 'David Snow', '', '', 'cmonson@mtnwest.com', ' Chris Monson	 ', 'y'),
(20, 0, 0, 'cOgrady', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cogrady@uthc.org', ' Claudia O''Grad', 'y'),
(21, 0, 0, 'cPerkins', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cperkins@ngacres.com', ' Collin Perkins', 'y'),
(22, 0, 1, 'cMoore', 'password', 'Kyle Roberts', '', '', 'Bryce Blanchard', '', '', 'Tim Simonsen', '', '', 'Collin Perkins', '', '', 'MHTN Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'Colton Smith', '', '', 'cory.moore@big-d.com', 'Cory Moore	 ', 'y'),
(23, 0, 0, 'dSimons', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'y'),
(24, 0, 1, 'dLofgren', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Tim Simonsen', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'James Hilton', '', '', '', '', 'y'),
(25, 0, 1, 'dWall', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', 'Collin Perkins', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'James Hilton', '', '', '', '', 'y'),
(26, 0, 1, 'dLiddell', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', '', '', 'y'),
(27, 0, 1, 'dPoulson', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(28, 0, 1, 'dBrems', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', '', '', '', 'dbrems@gsbsarchitects.com', 'David Brems	 ', 'y'),
(29, 0, 0, 'dGee', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dgee@parrbrown.com', ' David Gee	 ', 'y'),
(30, 0, 1, 'dhhart', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Eric Smith', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'Colton Smith', '', '', '', '', 'y'),
(31, 0, 1, 'dolson', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'John R. Montgomery', '', '', 'James Hilton', '', '', 'devon.olson@urs.org', 'Devon Olson	 ', 'y'),
(32, 0, 1, 'dbanks', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'MHTN Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', 'dbanks@fabianlaw.com', 'Diane Banks	 ', 'y'),
(33, 0, 0, 'dwoodruff', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dwoodruff@archnexus.com', 'Doug Woodruff	 ', 'y'),
(34, 0, 1, 'dlambert', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Tim Simonsen', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'James Hilton', '', '', '', '', 'y'),
(35, 0, 0, 'dharris', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dusty.harris@hines.com', ' Dusty Harris	 ', 'y'),
(36, 0, 1, 'ethompson', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'MHTN Architects', '', '', 'Okland Construction', '', '', 'Miller Development Company', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', '', '', 'y'),
(37, 0, 0, 'ffairclough', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ffairclough@bmcslc.com', ' Fred Faircloug', 'y'),
(38, 0, 1, 'gellis', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'MHTN Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', 'gellis@jacobsenconstruction.co', ' Gary Ellis	 ', 'y'),
(39, 0, 0, 'gfree', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'garyf@freeandassociates.com', 'Gary Free	 ', 'y'),
(40, 0, 0, 'lwoodbury', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'l_woodbury@woodburycorp.com', ' Lynn Woodbury	', 'y'),
(41, 0, 1, 'gnelson', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'John R. Montgomery', '', '', 'David Snow', '', '', '', '', 'y'),
(42, 0, 1, 'grichards', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(43, 0, 1, 'gkohler', 'password', 'Tom Dischman', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'John R. Montgomery', '', '', 'James Hilton', '', '', 'gradykohler@windermere.com', ' Grady Kohler	 ', 'y'),
(44, 0, 1, 'gstrong', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Tim Simonsen', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'James Hilton', '', '', '', '', 'y'),
(45, 0, 1, 'gwilliams', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(46, 0, 0, 'hscudder', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'hscudder@phillipsedison.com', ' Hal Scudder	 ', 'y'),
(47, 0, 0, 'hlayton', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'howard.layton@coldwellutah.com', ' Howard Layton	', 'y'),
(48, 0, 1, 'irubinfeld', 'password', 'Tom Dischman', '', '', 'Greg Barratt', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'James Hilton', '', '', '', '', 'y'),
(49, 0, 1, 'iedwards', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', '', '', 'y'),
(50, 0, 0, 'pcook', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'y'),
(51, 0, 1, 'jboyer', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'James Hilton', '', '', 'jboyer@boyercompany.com', ' Jake Boyer	 ', 'y'),
(52, 0, 1, 'jbooth', 'password', 'Kyle Roberts', '', '', 'Bryce Blanchard', '', '', 'Tim Simonsen', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'James Hilton', '', '', 'jared.booth@coldwellutah.com', ' Jared Booth	 ', 'y'),
(53, 0, 0, 'jeffjensen', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'jeff@landmarktitleutah.com', ' Jeff Jensen	 ', 'y'),
(54, 0, 0, 'jflorence', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'jflorence@comre.com', ' Joe Florence	 ', 'y'),
(55, 0, 1, 'jdahlstrom', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Tim Simonsen', '', '', 'Collin Perkins', '', '', 'EDA Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'John R. Montgomery', '', '', 'James Hilton', '', '', 'jdahlstrom@netwasatch.com', 'John Dahlstrom	', 'y'),
(56, 0, 1, 'jgurr', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(57, 0, 1, 'jsmith', 'password', 'Zach Anderson', '', '', 'Greg Barratt', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'Colton Smith', '', '', '', '', 'y'),
(58, 0, 0, 'jtebbs', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'johnt@bonnevillecompanies.com', 'John Tebbs	 ', 'y'),
(59, 0, 1, 'jbelliveau', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', 'Layton Construction', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(60, 0, 1, 'jearl', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(61, 0, 1, 'kolson', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', 'kathylynnolson@yahoo.com', 'Kathy Olson	 ', 'y'),
(62, 0, 0, 'kgeisel', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'keith.geisel@cbre.com', ' Keith Geisel	 ', 'y'),
(63, 0, 1, 'kengland', 'password', 'Tom Dischman', '', '', 'Bryce Blanchard', '', '', 'Rob Moore', '', '', 'Eric Smith', '', '', 'MHTN Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', 'kengland@argentgroup.us', 'Kent England/Je', 'y'),
(64, 0, 1, 'knelson', 'password', 'Kyle Roberts', '', '', 'Bryce Blanchard', '', '', 'Rob Moore', '', '', 'Collin Perkins', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Miller Development Company', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'Colton Smith', '', '', '', '', 'y'),
(65, 0, 1, 'bbeesley', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' wab@princeyeates.com', ' Bill Beesley', 'y'),
(66, 0, 1, 'broeder', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'James Hilton', '', '', 'bill@itstitle.com', ' Bill Roeder', 'y'),
(67, 0, 1, 'malexander', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Tim Simonsen', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', 'mark.alexander@am.jll.com', 'Mark Alexander	', 'y'),
(68, 0, 0, 'mbouchard', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'mark.bouchard@cbre.com', 'Mark Bouchard	 ', 'y'),
(69, 0, 1, 'mday', 'password', 'Zach Anderson', '', '', 'Greg Barratt', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'John R. Montgomery', '', '', 'David Snow', '', '', '', '', 'y'),
(70, 0, 1, 'mplunkett', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'EDA Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'James Hilton', '', '', '', '', 'y'),
(71, 0, 1, 'manderson', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'michael.anderson2@zionsbank.co', 'Michael Anderso', 'y'),
(72, 0, 1, 'mfalk', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Tim Simonsen', '', '', 'Collin Perkins', '', '', 'FFKR Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'Colton Smith', '', '', '', '', 'y'),
(73, 0, 1, 'mlawson', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Collin Perkins', '', '', 'MHTN Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'John R. Montgomery', '', '', 'David Snow', '', '', 'mlawson@comre.com', ' Michael Lawson', 'y'),
(74, 0, 0, 'mmorris', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'y'),
(75, 0, 0, 'mhendry', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'michael@mvte.com', ' Mike Hendry	 ', 'y'),
(76, 0, 1, 'pskene', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(77, 0, 1, 'ratkin', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'James Hilton', '', '', 'ratkin@comre.com', 'Randy Atkin	 ', 'y'),
(78, 0, 1, 'rowen', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Tim Simonsen', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'James Hilton', '', '', '', '', 'y'),
(79, 0, 1, 'rwoodbury', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', '', '', 'y'),
(80, 0, 1, 'rstevenson', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'EDA Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', 'rich.stevenson@zionsbank.com', ' Rich Stevenson', 'y'),
(81, 0, 1, 'rjackson', 'password', 'Kyle Roberts', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', 'rjackson@ffkr.com', ' Roger Jackson	', 'y'),
(82, 0, 1, 'rbooth', 'password', 'Kyle Roberts', '', '', 'Bryce Blanchard', '', '', 'Tim Simonsen', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', 'russ.booth@coldwellutah.com', ' Russ Booth	 ', 'y'),
(83, 0, 1, 'sdavis', 'password', 'Zach Anderson', '', '', 'Greg Barratt', '', '', 'Rob Moore', '', '', 'Brandon Fugal', '', '', 'EDA Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'John R. Montgomery', '', '', 'James Hilton', '', '', '', '', 'y'),
(84, 0, 0, 'sgiddings', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'shane.giddings@usbank.com', ' Shane Giddings', 'y'),
(85, 0, 0, 'snielson', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'shaun.g.nielson@wellsfargo.com', ' Shaun Nielson	', 'y'),
(86, 0, 1, 'scrane', 'password', 'Zach Anderson', '', '', 'Greg Barratt', '', '', 'Tim Simonsen', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', '', '', 'y'),
(87, 0, 1, 'sburt', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'John R. Montgomery', '', '', 'David Snow', '', '', '', '', 'y'),
(88, 0, 1, 'tklug', 'password', 'Tom Dischman', '', '', 'Bryce Blanchard', '', '', 'Tim Simonsen', '', '', 'Brandon Fugal', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'Colton Smith', '', '', 'tklug@edcutah.org', ' Teri Klug	 ', 'y'),
(89, 0, 1, 'turiona', 'password', 'Kyle Roberts', '', '', 'Kip Paul', '', '', 'Tim Simonsen', '', '', 'Brandon Fugal', '', '', 'MHTN Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', 'thomas.uriona@imail.org', ' Thomas Uriona	', 'y'),
(90, 0, 1, 'tberggren', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Rob Moore', '', '', 'Eric Smith', '', '', 'MHTN Architects', '', '', 'Layton Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'James Hilton', '', '', 'tberggren@joneswaldo.com', 'Tom Berggren	 ', 'y'),
(91, 0, 1, 'tkirk', 'password', 'Zach Anderson', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', 'tkirk@comre.com', 'Tom Kirk	 ', 'y'),
(92, 0, 1, 'twhite', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Eric Smith', '', '', 'FFKR Architects', '', '', 'Big-D Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', '', '', 'y'),
(93, 0, 1, 'tmccutcheon', 'password', 'Zach Anderson', '', '', 'Bryce Blanchard', '', '', 'Stuart Thain', '', '', 'Brandon Fugal', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Scott Sabey', '', '', 'Michelle Pearce', '', '', 'David Snow', '', '', '', '', 'y'),
(94, 0, 1, 'vpriskos', 'password', 'Tom Dischman', '', '', 'Kip Paul', '', '', 'Stuart Thain', '', '', 'Brandon Fugal', '', '', 'EDA Architects', '', '', 'Okland Construction', '', '', 'Freeport West Industrial Prope', '', '', 'Scott Bennion', '', '', 'Loyal Hulme', '', '', 'Todd Thompson', '', '', 'David Snow', '', '', '', '', 'y'),
(95, 0, 0, 'harleen', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'harleen', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE IF NOT EXISTS `voting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id`, `status`, `date`) VALUES
(1, 'enabled', '2014-10-07 09:45:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
