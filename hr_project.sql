-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 09:39 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `location_id` varchar(11) NOT NULL,
  `Branch_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `manager_id`, `location_id`, `Branch_id`) VALUES
(11, 'Pension And Benefits Clerk ', 1, '001', '555'),
(12, 'Human Resources Assistant', 2, '002', '666'),
(13, 'Human Resources Secratary', 3, '3', '777');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `job_id` int(8) NOT NULL,
  `hire_date` date NOT NULL,
  `manager_id` int(5) NOT NULL,
  `department_id` int(6) NOT NULL,
  `comission_pct` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `phone`, `email`, `job_id`, `hire_date`, `manager_id`, `department_id`, `comission_pct`) VALUES
(1, 'Maruf', 'Hasan', 1722222222, 'maruf.hasan@yahoo.com', 0, '0000-00-00', 1, 11, 1.3),
(2, 'Sajol', 'Islam', 1933333333, 'sajal.islam@gmail.com', 0, '0000-00-00', 0, 0, 0),
(3, 'Kajol', 'Haque', 1844444444, 'kajol.haque@yahoo.com', 0, '0000-00-00', 0, 0, 0),
(4, 'Faria', 'Nadia', 1633333333, 'faria.nadia@yahoo.com', 0, '0000-00-00', 0, 0, 0),
(5, 'Kamal', 'Hossain', 1787878787, 'kamal@yahoo.com', 0, '0000-00-00', 0, 0, 0),
(6, 'Jarin Tasnim', 'Ananna', 1799999999, 'jarin_582@yahoo.com', 0, '0000-00-00', 0, 0, 0),
(7, 'Jarin Tasnim', 'Ananna', 1799999999, 'jarin_582@yahoo.com', 0, '0000-00-00', 11, 12, 2.3),
(8, 'Ehsan ', 'Niloy', 987654321, 'niloy78@yahoo.com', 0, '0000-00-00', 0, 0, 0),
(9, 'Jahin', 'Tasnim', 1111111111, 'jahin@yahoo.com', 0, '0000-00-00', 0, 0, 0),
(10, 'hheiuw', 'asdbhd', 13343446, 'abc@yahoo.com', 123, '2017-07-12', 34, 32, 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `min_salary` int(100) NOT NULL,
  `max_salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_title`, `salary`, `min_salary`, `max_salary`) VALUES
(111, 'HR Specialist', 50000, 30000, 60000),
(112, 'Recriter', 45000, 35000, 50000),
(113, 'HR Generalist', 30000, 25000, 30000),
(114, 'Recruiter Manager', 55000, 50000, 60000),
(115, 'HR Manager', 600000, 500000, 650000);

-- --------------------------------------------------------

--
-- Table structure for table `job_history`
--

CREATE TABLE `job_history` (
  `employee_id` int(100) NOT NULL,
  `start_date` date NOT NULL,
  `job_id` int(100) NOT NULL,
  `department_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_history`
--

INSERT INTO `job_history` (`employee_id`, `start_date`, `job_id`, `department_id`) VALUES
(1, '2014-09-01', 111, 11),
(2, '2014-06-03', 112, 12),
(3, '2015-10-07', 114, 12),
(4, '2014-03-05', 115, 11),
(5, '2014-08-09', 113, 13);

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `emp_code` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `leave_type` varchar(100) NOT NULL,
  `month` date NOT NULL,
  `from_date` date NOT NULL,
  `no_of_days` int(100) NOT NULL,
  `end_date` date NOT NULL,
  `leave_period` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `contact_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`emp_code`, `emp_name`, `email_id`, `leave_type`, `month`, `from_date`, `no_of_days`, `end_date`, `leave_period`, `reason`, `contact_info`) VALUES
('7', 'Jarin Tasnim Ananna', 'jarin@yahoo.com', 'Sick', '0000-00-00', '2016-04-29', 1, '2016-04-30', 'Full Day', 'Sick', 'Bashundhara');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` varchar(100) NOT NULL,
  `street_Address` varchar(100) NOT NULL,
  `postal_code` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `street_Address`, `postal_code`, `city`, `country_id`) VALUES
('202', 'ST-11', 1202, 'Dhaka', 9000),
('203', 'ST-12', 1203, 'Dhaka', 9000),
('204', 'ST-13', 1204, 'Dhaka', 9000),
('205', 'ST-14', 1205, 'Dhaka', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_name` varchar(100) NOT NULL,
  `project_no` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_name`, `project_no`, `location`, `Location_id`) VALUES
('Project X', 1, 'Dhaka', 0),
('Project Y', 2, 'Rajshahi', 0),
('Project Z', 3, 'Khulna', 0),
('Project A', 4, 'Jossore', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userid` int(55) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userid`, `username`, `password`) VALUES
(1, 'ananna', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'akash', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_id` int(6) NOT NULL,
  `program_name` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `job_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`training_id`, `program_name`, `start_date`, `end_date`, `job_id`) VALUES
(1, 'fhfhwu', '2017-07-03', '2017-07-07', 123);

-- --------------------------------------------------------

--
-- Table structure for table `works_on`
--

CREATE TABLE `works_on` (
  `Hours` varchar(100) NOT NULL,
  `department_id` int(100) NOT NULL,
  `employee_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `works_on`
--

INSERT INTO `works_on` (`Hours`, `department_id`, `employee_id`) VALUES
('5 hrs', 11, 1),
('6 hrs', 12, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_history`
--
ALTER TABLE `job_history`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD PRIMARY KEY (`emp_code`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_no`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `works_on`
--
ALTER TABLE `works_on`
  ADD PRIMARY KEY (`Hours`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userid` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
