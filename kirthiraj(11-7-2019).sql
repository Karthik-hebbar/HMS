-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 09:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kirthiraj`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`username`, `password`) VALUES
('dhanraj', 'raj12345'),
('karthik', 'kar12345'),
('kiran', 'kiran1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) NOT NULL,
  `patientrid` int(10) NOT NULL,
  `specialisationss` varchar(30) NOT NULL,
  `doctors` int(30) NOT NULL,
  `fees` varchar(50) NOT NULL,
  `datee` varchar(50) NOT NULL,
  `timee` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patientrid`, `specialisationss`, `doctors`, `fees`, `datee`, `timee`, `Status`) VALUES
(2004, 1001, 'Oncologist', 4, '800', '2019-10-24', '12:30 PM', 'PENDING'),
(2006, 1001, 'General Physician', 1, '600', '2019-10-25', '10:00 AM', 'ACCEPTED'),
(2009, 1001, 'Homeopathy', 5, '600', '2019-10-25', '11:00 AM', 'PENDING'),
(2011, 1001, 'General Physician', 1, '600', '2019-11-05', '10:00 AM', 'ACCEPTED'),
(2012, 1001, 'General Physician', 1, '600', '2019-11-06', '10:00 AM', 'REJECTED'),
(2014, 1001, 'Oncologist', 4, '800', '11/15/2019', '10:00 AM', 'PENDING'),
(2015, 1001, 'Gynecologist', 7, '600', '2019-11-09', '11:00 AM', 'PENDING'),
(2016, 1001, 'Ayurveda', 2, '500', '2019-11-07', '11:00 AM', 'PENDING'),
(2017, 1001, 'Homeopathy', 5, '600', '2019-11-13', '12:30 PM', 'PENDING'),
(2018, 1001, 'Dentist', 6, '600', '2019-11-07', '11:00 AM', 'PENDING'),
(2019, 1001, 'Dentist', 6, '600', '2019-11-13', '11:00 AM', 'PENDING'),
(2020, 1003, 'Oncologist', 4, '800', '2019-11-09', '10:00 AM', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `cancelled`
--

CREATE TABLE `cancelled` (
  `cid` int(50) NOT NULL,
  `aid` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `docid` int(50) NOT NULL,
  `reason` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctorr`
--

CREATE TABLE `doctorr` (
  `doctorid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `specialisations` varchar(50) NOT NULL,
  `fee` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `picssource` varchar(350) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `specialisationnid` int(11) NOT NULL,
  `about` mediumtext NOT NULL,
  `accomplishments` mediumtext NOT NULL,
  `experience` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorr`
--

INSERT INTO `doctorr` (`doctorid`, `fullname`, `phno`, `email`, `specialisations`, `fee`, `username`, `picssource`, `password`, `created_Date`, `specialisationnid`, `about`, `accomplishments`, `experience`) VALUES
(1, 'Gregory House', '9876543210', 'house@gmail.com', 'General Physician', '600', 'house', 'images/house1.png', 'house123', '2019-11-04 09:35:37', 1, 'Dr. Gregory House is originally from Maine.Maryland where he was in the pre-med program, maintaining an excellent GPA and eventually getting a perfect score on his MCAT. He earned his medical degree from the Johns Hopkins University in Baltimore and completed his residency training at Yale-New Haven Children\'s\r\nHospital. Dr. House has a particular interest in the care of medically complex children and\r\nadolescents. Though he might not be the most fun person to be around with but he is still an amazing doctor. He is currently working as a general physician in Kirthiraj Healthcare which is situated in India.', 'Dr. house has thirty years experience in  infectious disease and nephrology,with special interest in cataract\r\nsurgery, corneal transplantation, and laser refractive procedures. He is a founding\r\nmember of Precision LASIK Group, Chief of nephrology at The Hospital of Bangalore and Co-medical Director of the Connecticut eye bank. In addition to his\r\nsurgical practice, he is on the board of Vision Health International.', 'Dr. House has been practicing in nephrology for the last 30 years. In addition to internal medicine and\r\ngeriatrics, Dr. House has significant experience in nephrology.'),
(2, 'Ram Govid', '8694539268', 'ram@gmail.com', 'Ayurveda', '500', 'ram', 'images/Dr_Ateeque1.png', '123456789', '2019-11-04 09:47:40', 2, 'Dr. Ram Govind is originally from Kundapura,Karnataka. Manipal hospital, Mangalore where he was in the pre-med program, maintaining an excellent GPA. He earned his medical degree from the Mysore University in Mysore,Karnataka and completed his residency training at Kundapura Children\'s Hospital. Dr. Govind has a particular interest in the care of medically complex children and adolescents. He is currently working as a Ayurveda specialist in Kirthiraj Healthcare which is situated in India.\r\n', 'Dr. Ram Govind has twenty years experience in Ayurveda,with special interest in cataract surgery, corneal transplantation, and laser refractive procedures.Chief of Ayurveda at The Hospital of Bangalore and Co-medical Director of the Kundapura blood bank. In addition to his ayurveda practice, he is on the board of Vision Health International.', 'Dr. Govind has been practicing in Ayurveda for the last 20 years. In addition to internal medicine and geriatrics, Dr.Govind has significant experience in Ayurveda.'),
(3, 'Stuart Price', '9884568278', 'stu@gmail.com', 'Dentist', '500', 'Stu', 'images/e9252cee785a540984574fbe83111974--ed-helms-a-guy-who.jpg', '54321', '2019-11-04 09:47:53', 3, 'Dr.Stuart Price is originally from Las Vegas. Las Vegas hospital, Las Vegas where he was in the pre-med program. He earned his medical degree from the University of Nevada in las vegas and completed his residency training at Valley Hospital Medical Center. Dr. Price has a particular interest in Dentistry. He is currently working as a Dentist in Kirthiraj Healthcare which is situated in India.\r\n', 'Dr.Stuart Price has ten years experience in Dentistry,with special interest in Periodontology. Chief of Dentistry at The Hospital of Bangalore and Co-medical Director of the Nevada blood bank. In addition to his Dentistry practice, he is on the board of Vision Health International.', 'Dr.Stuart Price has been practicing in Dentistry for the last 20 years. In addition to Periodontology, Dr.Price has significant experience in Dentistry.'),
(4, 'James Wilson', '7994438299', 'wilson@gmail.com', 'Oncologist', '800', 'wilson', 'images/wilson.jpg', '54321', '2019-11-04 09:48:08', 6, 'Dr.James Wilson is originally from Pennsylvania. He earned his medical degree from the McGill University and completed his residency training at Sunrise Hospital Medical Center. Dr.Wilson has a particular interest in Oncology. He is currently working as a Oncologist in Kirthiraj Healthcare which is situated in India.\r\n', 'Dr.James Wilson has twenty years experience in Oncology,with special interest in Cardiology and Chief of Oncology at The Hospital of Bangalore and Co-medical Director of the Pennsylvania blood bank. In addition to his Oncology practice, he is on the board of Vision Health International.\r\n', 'Dr.James Wilson has been practicing in Oncology for the last 20 years. In addition to Cardiology. Dr. Wilson has significant experience in Oncology.'),
(5, 'Rajesh khanna', '9876564382', 'rajesh@gmail.com', 'Homeopathy', '600', 'rajesh', 'images/Doctorloanbanner.jpg', 'rajesh12345', '2019-11-04 09:49:45', 7, 'Dr. Rajesh khanna is originally from Mumbai. He earned his medical degree from the Grant Medical College and completed his residency training at Global Hospital . Dr.khanna has a particular interest in Homeopathy. He is currently working as a Homeopathy Specialist in Kirthiraj Healthcare which is situated in India.', 'Dr.Rajesh khanna has forty years experience in Homeopathy,with special interest in Cardiology and Chief of Homeopathy at The Hospital of Bangalore and Co-medical Director of the Mumbai eye bank. In addition to his Homeopathy practice, he is on the board of Vision Health International.\r\n', 'Dr.Rajesh khanna  has been practicing in Homeopathy for the last 40 years. In addition to Cardiology. Dr.khanna has significant experience in Homeopathy.'),
(6, 'Rajeev Singh', '656543423', 'rajeev@gmail.com', 'Dentist', '600', 'rajeev', 'images/shutterstock_154772753.jpg', 'rajeev123', '2019-11-04 09:50:02', 3, 'Dr.Rajeev Singh is originally from Mumbai. He earned his medical degree from the Grant Medical College and completed his residency training at Global Hospital . Dr.Rajeev has a particular interest in Dentistry. He is currently working as a Dentist in Kirthiraj Healthcare which is situated in India.\r\n\r\n', 'Dr.Rajeev Singh has ten years experience in Homeopathy,with special interest in Periodontology and one of the Chief of Dentistry at The Hospital of Bangalore and Co-medical Director of the Delhi eye bank. In addition to his Dentistry practice, he is on the board of Vision Health International.', 'Dr.Rajeev Singh has been practicing in Dentistry for the last 10 years. In addition to Periodontology. Dr.khanna has significant experience in Dentistry.'),
(7, 'Meena Kumari', '8976754832', 'meena@gmail.com', 'Gynecologist', '600', 'meena', 'images/doctor1.jpg', 'meena123', '2019-11-04 09:50:16', 8, 'Dr.Meena Kumari is originally from Mysore. Manipal where she was in the pre-med program, maintaining an excellent GPA and eventually getting a perfect score on her MCAT. earned her medical degree from the Mysore Medical College and research institute and completed her residency training at Apollo Hospital . Dr.Kumari has a particular interest in Gynaecology. She is currently working as a Gynecologist in Kirthiraj Healthcare which is situated in India.\r\n', 'Dr.Meena Kumari has five years experience in Gynecologist,with special interest in Osteology and one of the Chief of Gynaecology at The Hospital of Bangalore and Co-medical Director of the Mysore eye bank. In addition to her Gynaecology practice, she is on the board of Vision Health International.\r\n', 'Dr.Meena Kumari has been practicing in Gynaecology for the last 5 years. In addition to Osteology. Dr.Kumari has significant experience in Gynaecology.');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `Did` int(50) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `Dateofbirth` date NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `eemail` varchar(50) NOT NULL,
  `street` varchar(60) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `permission` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`Did`, `first`, `last`, `Dateofbirth`, `mobno`, `eemail`, `street`, `city`, `state`, `pincode`, `country`, `gender`, `permission`) VALUES
(3000, '  Karthik', 'Hebbar', '2000-03-11', '1234567892', 'karthik@gmail.com', '#135 \"Srinidhi\"', 'Bengaluru RuraL', 'Karnataka', '560062', 'India,', 'Male', 'Research'),
(3002, 'gdg', 'gdgfdgfd', '0000-00-00', '234567899876', 'gfggfg', 'gdgd', 'gfgfdgf', 'fdfg', 'fdggfd', 'gfdgdf', 'fdgdfgdf', 'gfdfdgfdg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(3, 'ram', 'ram@gmail.com', 'services are pretty good....'),
(4, 'krishna', 'krishna@gmail.com', 'the services could be better....'),
(8, 'Karthik', 'karthik@gmail.com', 'All the doctors are really co-operative and kind....'),
(9, 'Shreyas ', 'shreyas@gmail.com', 'Nice services...'),
(10, 'Raj', 'raj@gmail.com', 'Services are really good..');

-- --------------------------------------------------------

--
-- Table structure for table `patientt`
--

CREATE TABLE `patientt` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `picsource` varchar(350) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientt`
--

INSERT INTO `patientt` (`id`, `firstname`, `lastname`, `gender`, `username`, `dob`, `email`, `mobno`, `picsource`, `password`, `created_date`) VALUES
(1001, ' Kiran', 'H', 'Male', 'kiran', '1999-02-27', 'kiran1@gmail.com', '9234569439', 'images/kiran.jpg', '1234kira', '2019-10-06 06:09:53'),
(1002, 'Dhanraj', 'Patil', 'Male', 'raj', '1999-02-20', 'raj@gmail.com', '7687634256', 'images/IMG-20180416-WA0024.jpg', '12345', '2019-11-06 18:58:20'),
(1003, 'karthik', 'S', 'Male', 'karthik', '2000-03-11', 'karthik@gmail.com', '8970285776', 'images/karthik1.jpg', '12345', '2019-11-06 19:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `specialisation`
--

CREATE TABLE `specialisation` (
  `id` int(50) NOT NULL,
  `specialisationn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialisation`
--

INSERT INTO `specialisation` (`id`, `specialisationn`) VALUES
(1, 'General Physician'),
(2, 'Ayurveda'),
(3, 'Dentist'),
(6, 'Oncologist'),
(7, 'Homeopathy'),
(8, 'Gynecologist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`patientrid`);

--
-- Indexes for table `cancelled`
--
ALTER TABLE `cancelled`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `doctorr`
--
ALTER TABLE `doctorr`
  ADD PRIMARY KEY (`doctorid`),
  ADD KEY `specialisationnid` (`specialisationnid`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientt`
--
ALTER TABLE `patientt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialisation`
--
ALTER TABLE `specialisation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021;

--
-- AUTO_INCREMENT for table `cancelled`
--
ALTER TABLE `cancelled`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctorr`
--
ALTER TABLE `doctorr`
  MODIFY `doctorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `Did` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `patientt`
--
ALTER TABLE `patientt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT for table `specialisation`
--
ALTER TABLE `specialisation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `id` FOREIGN KEY (`patientrid`) REFERENCES `patientt` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctorr`
--
ALTER TABLE `doctorr`
  ADD CONSTRAINT `doctorr_ibfk_1` FOREIGN KEY (`specialisationnid`) REFERENCES `specialisation` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
