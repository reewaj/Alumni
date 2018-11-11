-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 12:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogintable`
--

CREATE TABLE `adminlogintable` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogintable`
--

INSERT INTO `adminlogintable` (`Username`, `Password`) VALUES
('admin1', '123'),
('username', 'password'),
('adminmain', 'admin'),
('mega21', '123'),
('newadmin', 'new'),
('padmin', 'power'),
('hokage', 'sharingan'),
('Ranger', 'range'),
('adasd', 'aaa'),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('', ''),
('nccs', 'nccs1234'),
('new', 'new'),
('', ''),
('admin', 'admin'),
('aaditya', 'aaditya'),
('adityaadmin', 'adityaadmin'),
('prime', 'prime'),
('natsu', 'dragon'),
('mmm', 'nnn'),
('ooo', 'ppp'),
('since', 'since'),
('nccs', 'nccs'),
('', ''),
('viper', 'viper1'),
('m3g@', '123'),
('', ''),
('bestadmin', 'best'),
('thunder', 'god'),
('fname', 'name');

-- --------------------------------------------------------

--
-- Table structure for table `adminregistertable`
--

CREATE TABLE `adminregistertable` (
  `FullName` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ConfirmPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminregistertable`
--

INSERT INTO `adminregistertable` (`FullName`, `Username`, `Password`, `ConfirmPassword`) VALUES
('fullname', 'username', 'password', 'password'),
('Main Admin', 'adminmain', 'admin', 'admin'),
('Mega', 'mega21', '123', '123'),
('New Admin', 'newadmin', 'new', 'new'),
('Power Admin', 'padmin', 'power', 'power'),
('Hatake Kakashi', 'hokage', 'sharingan', 'sharingan'),
('Power Ranger', 'Ranger', 'range', 'range'),
('dasdas', 'adasd', 'aaa', 'aaa'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Nccs', 'nccs', 'nccs1234', 'nccs1234'),
('NewAdmin', 'new', 'new', 'new'),
('', '', '', ''),
('Aaditya', 'aaditya', 'aaditya', 'aaditya'),
('Aaditya Manandhar', 'adityaadmin', 'adityaadmin', 'adityaadmin'),
('Optimus Prime', 'prime', 'prime', 'prime'),
('Natsu Dragneel', 'natsu', 'dragon', 'dragon'),
('adsasd', 'mmm', 'nnn', 'nnn'),
('Natsu Dragneel', 'natsu', 'dragon', 'dragon'),
('mnm sdas', 'asdas', 'nmasd', 'nmasd'),
('sdasd asd', 'ooo', 'ppp', 'ppp'),
('Reewaj Shrestha', 'since', 'since', 'since'),
('NCCS College', 'nccs', 'nccs', 'nccs'),
('', '', '', ''),
('Randy Orton', 'viper', 'viper1', 'viper1'),
('Megamind', 'm3g@', '123', '123'),
('', '', '', ''),
('Best Admin', 'bestadmin', 'best', 'best'),
('God of Thunder', 'thunder', 'god', 'god'),
('FullName V', 'fname', 'name', 'name');

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `displaypurpose`
--

CREATE TABLE `displaypurpose` (
  `TURegCode` varchar(20) NOT NULL,
  `Skills` varchar(255) NOT NULL,
  `projects` varchar(255) NOT NULL,
  `links` text NOT NULL,
  `platform` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `displaypurpose`
--

INSERT INTO `displaypurpose` (`TURegCode`, `Skills`, `projects`, `links`, `platform`) VALUES
('500', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eventdetails`
--

CREATE TABLE `eventdetails` (
  `eid` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `EventDate` date NOT NULL,
  `EventTime` time NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventdetails`
--

INSERT INTO `eventdetails` (`eid`, `Title`, `EventDate`, `EventTime`, `Location`, `Description`) VALUES
(1, 'Farewell', '2019-12-29', '13:00:00', 'Baneshwor', 'Farewell Program for BIM batch of 13'),
(2, 'Final Draft (BIM 8th Semester)', '2018-08-21', '06:00:00', 'NCCS', 'BIM 8th Semester Final Draft Submission and Presentation'),
(3, 'Board Exam', '2018-09-06', '11:00:00', 'Padma Kanya Campus, Bagbazar', 'BIM 8th Semester regular Examination 2018 '),
(4, 'Php Developer needed', '2018-08-02', '11:00:00', 'Nayabazar', 'We are hiring Php developers for our company. The candidate should complete their Bachelors program. To appply, please send your CV  at: aajob@hotmail.com'),
(5, 'Job Vacancy', '2018-11-28', '01:21:00', 'Putalisadak', 'A reputed IT company is hiring 2 php developers. Experience required : No experience required Salary : 50000 ');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `TURegCode` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Qualification` varchar(10) NOT NULL,
  `College` varchar(40) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Skills` text NOT NULL,
  `Experience` varchar(10) NOT NULL,
  `OrganizationName` text NOT NULL,
  `JoinedDate` date NOT NULL,
  `ResignedDate` date NOT NULL,
  `projects` varchar(250) NOT NULL,
  `platform` varchar(250) NOT NULL,
  `links` varchar(250) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `location` varchar(50) DEFAULT NULL,
  `path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`TURegCode`, `FirstName`, `MiddleName`, `LastName`, `Qualification`, `College`, `Course`, `Skills`, `Experience`, `OrganizationName`, `JoinedDate`, `ResignedDate`, `projects`, `platform`, `links`, `Status`, `location`, `path`) VALUES
('500', 'Priyanka', '', 'Karki', 'Bachelors', 'National College of Computer Studies', 'BIM', 'Networking | Java', 'None', '', '0000-00-00', '0000-00-00', 'Recycler | Road Safety Managment', 'Python | Angular', 'bbb.com | 67H$zy&Y', 'Unemployed', 'pdf/Sanjay_CV.docx', 'admin/image/Planaet Innovatice fee (2).jpg'),
('7-2-551-1-2014', 'Aaditya', '', 'Manandhar', 'Bachelors', 'National College of Computer Studies', 'BIM', 'PHP | Java | SQL', 'None', 'Clone Technologies', '2018-05-05', '0000-00-00', 'Road safety managemnt | Green KTM | Student Inform', 'dotNet  Android', 'http://drive.google.com | http://drive.google.com | http://drive.google.com', 'Employed', 'pdf/Sanjay_CV.docx', 'admin/image/9ed4137d7fd1f57329c663fef6622520.jpg'),
('7-2-551-14-2014', 'Ramesh', 'Prasad', 'Chapagain', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', 'Unemployed', NULL, NULL),
('7-2-551-20-2014', 'Anjana', '', 'Basnet', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', NULL, NULL),
('7-2-551-23-2014', 'Karishma', '', 'Pradhan', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', NULL, NULL),
('7-2-551-30-2014', 'Upesh', '', 'Dangol', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', 'Employed', NULL, NULL),
('7-2-551-34-2014', 'Reewaj', '', 'Shrestha', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', 'Employed', 'pdf/reewaj.pdf', NULL),
('7-2-551-43-2014', 'Ashish', 'Rana', 'Magar', 'Bachelors', 'National College of Computer Studies', 'BIM', 'photoshop | html | css | jquery | php', '1 year', 'ABC', '2018-04-04', '2018-09-03', 'Blood Bank', 'php', 'https://drive.google.com/drive/folders/1hWZK-aOiI5M2zPVgX11SSdmki-RvtwpU', 'Unemployed', 'pdf/5b8e2833375d10.50035962.pdf', 'image/5b8e2833375dc0.75338526.jpg'),
('7-2-551-49-2015', 'Roshan', '', 'Tuladhaar', 'Bachelors', 'National College of Computer Studies', 'BIM', 'dotnet | java', 'None', 'XYZ', '2017-08-02', '2018-07-04', 'Biometrics', 'dotnet', 'https://drive.google.com/drive/folders/1hWZK-aOiI5M2zPVgX11SSdmki-RvtwpU', 'Unemployed', 'pdf/Cover letter.docx', 'image/675273.jpg'),
('7-2-551-63-2014', 'Ranjana', '', 'Karki', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', NULL, NULL),
('7-2-551-7-2014', 'Anish', '', 'Krishnan', 'Bachelors', 'National College of Computer Studies', 'BIM', 'Angular | php | java', 'None', 'National College of Computer Studies', '2018-07-24', '2018-09-06', 'Alumni Record Tracking', 'php', 'https://mail.google.com/mail/#inbox/FMfcgxvzKkwlmRClFHrDJbKZlGZkRRxJ', 'Unemployed', 'pdf/Resume.docx', 'admin/image/IMG_1668.PNG'),
('7-2-551-901-2015', 'Krishna', 'Lal', 'Gajurel', 'Bachelors', 'NCCS', 'BIM', 'Java:::DotNet', 'None', 'Array', '0000-00-00', '0000-00-00', '', '', 'hotel management system', 'https://drive.g', 'pdf/Vitae.docx', 'Unemployed');

-- --------------------------------------------------------

--
-- Table structure for table `studentrecord`
--

CREATE TABLE `studentrecord` (
  `TURegCode` varchar(20) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `MobileNumber` varchar(10) NOT NULL,
  `ResidentNumber` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentrecord`
--

INSERT INTO `studentrecord` (`TURegCode`, `FirstName`, `MiddleName`, `LastName`, `Address`, `MobileNumber`, `ResidentNumber`, `Gender`, `DOB`, `Email`) VALUES
('500', 'Priyanka', '', 'Karki', 'kfadskfj', '9492329923', '0904239302', 'female', '1996-02-02', 'manandharaaditya@gmail.com'),
('7-2-551-1-2014', 'Aaditya', '', 'Manandhar', 'Dallu', '9818701979', '014270154', 'male', '1996-03-16', 'manandharaaditya@yahoo.com'),
('7-2-551-14-2014', 'Ramesh', 'Prasad', 'Chapagain', 'Paknajol', '9818796285', '', 'male', '1996-06-05', 'ramesh@kamlesh.com'),
('7-2-551-17-2008', 'Brihat', 'Singh', 'Boswa', 'Teku', '9841403592', '', 'male', '1989-11-11', 'singhboswa@gmail.com'),
('7-2-551-20-2014', 'Nabish', 'Man', 'Singh', 'Paknajol', '9840000000', '', 'male', '1996-11-28', 'krishnan.anish0000@gmail.com'),
('7-2-551-23-2014', 'Karishma', '', 'Pradhan', 'Gongabu', '9898989898', '', 'female', '1996-09-18', 'krishnan.anish0000@gmail.com'),
('7-2-551-25-2014', 'Jigesh', 'Lal', 'Shrestha', 'Nayabazar', '6486464646', '', 'male', '2002-10-29', 'krishnan.anish0000@gmail.com'),
('7-2-551-30-2014', 'Upesh', '', 'Dangol', 'Dallu', '980345216', '45521025', 'male', '1995-05-05', 'upesh@gmal.com'),
('7-2-551-33-2014', 'Mohammad', '', 'Shamsher', 'Hadigaun', '9811111111', '', 'male', '1994-05-25', 'krishnan.anish0000@gmail.com'),
('7-2-551-34-2014', 'Reewaj', '', 'Shresth', 'Dallu', '9888785499', '', 'male', '1996-05-02', 'reewajshrestha535@gmail.com'),
('7-2-551-40-2014', 'Nikhil', 'Lal', 'Shrestha', 'bangemuda', '9846565', '', 'male', '2053-01-01', 'krishnan.anish0000@gmail.com'),
('7-2-551-43-2014', 'Ashish', 'Rana', 'Magar', 'Swoyambhunath', '9874563210', '', 'male', '1996-08-21', 'krishnan.anish0000@gmail.com'),
('7-2-551-49-2015', 'Roshan', 'Singh', 'Tuladhaar', 'Thamel', '9898745455', '', 'male', '1994-12-12', 'krishnan.anish0000@gmail.com'),
('7-2-551-55-2014', 'Abhisek', '', 'Neupane', 'Balaju', '9877887788', '', 'male', '1996-03-20', 'krishnan.anish0000@gmail.com'),
('7-2-551-63-2014', 'Ranjana', '', 'Karki', 'Bhaktapur', '9877777657', '', 'female', '1997-10-29', 'krishnan.anish0000@gmail.com'),
('7-2-551-7-2014', 'Anish', '', 'Krishnan', 'Chabahil', '9840011716', '', 'male', '1995-10-23', 'krishnan.anish0000@gmail.com'),
('7-2-551-72-2014', 'Ranjan', '', 'Bihswakarma', 'New Baneshwor', '9877777778', '01454788', 'male', '1994-01-05', 'krishnan.anish0000@gmail.com'),
('7-2-551-901-2015', 'Krishna', 'Lal', 'Gajurel', 'Kalanki', '9840000000', '', 'male', '1997-07-28', 'krishnan.anish0000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userlogintable`
--

CREATE TABLE `userlogintable` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogintable`
--

INSERT INTO `userlogintable` (`Username`, `Password`) VALUES
('7-2-551-33-2014', '33'),
('7-2-551-49-2015', '8hlA1Y#%'),
('7-2-551-901-2015', '901'),
('7-2-551-20-2014', 'A$T47di@'),
('7-2-551-8-2014', 'mno'),
('7-2-551-1-2014', 'nccs@001'),
('500', 'nccs@500'),
('7-2-551-2-2014', 'nccsalumni'),
('7-2-551-43-2014', 'oO0%uS8#'),
('7-2-551-17-2008', 'password'),
('7-2-551-25-2014', 'Uyo$86P@'),
('7-2-551-40-2014', 'yV04$g%I'),
('7-2-551-7-2014', 'z@7sY&4T');

-- --------------------------------------------------------

--
-- Table structure for table `userregistrationform`
--

CREATE TABLE `userregistrationform` (
  `TURegCode` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ConfirmPassword` varchar(20) NOT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `displaypurpose`
--
ALTER TABLE `displaypurpose`
  ADD PRIMARY KEY (`TURegCode`);

--
-- Indexes for table `eventdetails`
--
ALTER TABLE `eventdetails`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`TURegCode`),
  ADD UNIQUE KEY `TURegCode` (`TURegCode`);

--
-- Indexes for table `studentrecord`
--
ALTER TABLE `studentrecord`
  ADD PRIMARY KEY (`TURegCode`);

--
-- Indexes for table `userlogintable`
--
ALTER TABLE `userlogintable`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventdetails`
--
ALTER TABLE `eventdetails`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
