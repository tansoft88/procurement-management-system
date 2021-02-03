-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 10:11 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procurement`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'Procurement'),
(2, 'Information Technology'),
(3, 'Human Resources'),
(4, 'Risk & Aduit'),
(5, 'Finance'),
(6, 'Suppliers');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_details`
--

CREATE TABLE `supplier_details` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `organization_name` varchar(200) NOT NULL,
  `org_address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `tender_category_id` int(11) NOT NULL,
  `tax_clearance_number` varchar(30) NOT NULL,
  `praz_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_details`
--

INSERT INTO `supplier_details` (`id`, `email_address`, `organization_name`, `org_address`, `city`, `contact_number`, `tender_category_id`, `tax_clearance_number`, `praz_number`) VALUES
(1, 'sales@frolgate.co.zw', 'Frolgate Computers', '345 King George\r\nAvondale', 'Harare', 900099, 1, 'ZIm6778855', 'Praz37790'),
(2, 'sales@teechers.co.zw', 'Teechers Furnitures', '345 First Street', 'Harare', 2423333, 2, 'Zm34444477', 'PRZ224477'),
(3, 'sales@firstpack.co.zw', 'First Pack Zimbabwe', '34 Samora Ave', 'Harare', 900009, 4, 'Zm43333447', 'ZP98847755');

-- --------------------------------------------------------

--
-- Table structure for table `system_groups`
--

CREATE TABLE `system_groups` (
  `id` int(11) NOT NULL,
  `account_type_name` varchar(200) NOT NULL,
  `internal_account` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `create_ip` varchar(60) NOT NULL,
  `modify_ip` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_groups`
--

INSERT INTO `system_groups` (`id`, `account_type_name`, `internal_account`, `created`, `modified`, `created_by`, `modified_by`, `create_ip`, `modify_ip`) VALUES
(1, 'Procurement Manager', 0, '2020-04-04 17:24:07', '2020-04-04 17:24:07', 'admin', '', '::1', ''),
(2, 'Department Head', 0, '2020-04-04 17:24:14', '2020-04-04 17:24:14', 'admin', '', '::1', ''),
(3, 'Supplier', 0, NULL, NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tender_categories`
--

CREATE TABLE `tender_categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Stores broader categories of supplies e.g ICT as opposed to Computer Networking';

--
-- Dumping data for table `tender_categories`
--

INSERT INTO `tender_categories` (`id`, `category_name`) VALUES
(1, 'ICT'),
(2, 'Furniture'),
(4, 'Stationery'),
(5, 'Cleaning & Hiegine'),
(7, 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `tender_requests`
--

CREATE TABLE `tender_requests` (
  `id` int(11) NOT NULL,
  `tender_category_id` int(11) NOT NULL,
  `tender_code` varchar(50) NOT NULL,
  `tender_title` varchar(200) NOT NULL,
  `tender_specification` text NOT NULL,
  `due_date` datetime NOT NULL,
  `tender_status_id` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `tender_closed` int(11) NOT NULL DEFAULT '0',
  `closed_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_requests`
--

INSERT INTO `tender_requests` (`id`, `tender_category_id`, `tender_code`, `tender_title`, `tender_specification`, `due_date`, `tender_status_id`, `created`, `created_by`, `department_id`, `tender_closed`, `closed_by`) VALUES
(1, 1, 'TR20200405001', 'Hp Probook laptop', 'Intel core i7 8th Gen', '2020-04-06 00:00:00', 1, '2020-04-05 12:25:04', 'dep_ict', 1, 1, 'admin'),
(2, 2, 'TR20200405002', 'Boordroom Table', '2 * Boardroom table', '2020-04-04 12:28:00', 1, '2020-04-05 12:28:51', 'admin', 1, 1, 'admin'),
(3, 1, 'TR20200405003', 'HP 17 inch monitor', '1 HD Monitor', '2020-04-07 13:03:00', 1, '2020-04-05 13:04:21', 'dep_ict', 2, 1, 'admin'),
(4, 4, 'TR20200405004', 'Books and Pens', '100 x Books A4\r\n100 x 15 Eversharp pens', '2020-04-10 20:07:00', 1, '2020-04-05 20:08:40', 'dept_finance', 5, 0, ''),
(5, 1, 'TR20200405005', 'Laser Jet Printer', '2 x Lasterject printers(Any brand)', '2020-04-07 21:59:00', 1, '2020-04-06 21:59:40', 'dept_ict', 2, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tender_responses`
--

CREATE TABLE `tender_responses` (
  `id` int(11) NOT NULL,
  `tender_request_id` int(11) NOT NULL,
  `supplier_detail_id` int(11) NOT NULL,
  `response_summary` text NOT NULL,
  `file_attachment` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `modified` datetime NOT NULL,
  `approved` int(11) NOT NULL DEFAULT '0',
  `approved_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_responses`
--

INSERT INTO `tender_responses` (`id`, `tender_request_id`, `supplier_detail_id`, `response_summary`, `file_attachment`, `created`, `created_by`, `modified`, `approved`, `approved_by`) VALUES
(1, 1, 1, 'HP Laptop specs', 'QueryLogs.pdf', '2020-04-05 13:25:20', '', '2020-04-05 13:25:20', 1, 'admin'),
(2, 2, 1, 'Table', 'QueryLogs.pdf', '2020-04-05 13:34:30', '', '2020-04-05 13:34:30', 1, 'admin'),
(3, 3, 1, 'Monitor', 'Prescription(7).pdf', '2020-04-05 13:36:01', 'sales@frolgate.co.zw', '2020-04-05 13:36:01', 1, 'admin'),
(4, 4, 3, 'Books and Pens quotes', 'ASE15-Optimizer-Best-Practices-v1-051209-wp.pdf', '2020-04-05 20:17:21', 'sales@firstpack.co.zw', '2020-04-05 20:17:21', 0, ''),
(5, 5, 1, 'Printer qupte and details', 'TenderRequest_main(1).pdf', '2020-04-05 22:01:34', 'sales@frolgate.co.zw', '2020-04-05 22:01:34', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tender_response_parameters`
--

CREATE TABLE `tender_response_parameters` (
  `id` int(11) NOT NULL,
  `min_rqrd_quotations` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_response_parameters`
--

INSERT INTO `tender_response_parameters` (`id`, `min_rqrd_quotations`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tender_statuses`
--

CREATE TABLE `tender_statuses` (
  `id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_statuses`
--

INSERT INTO `tender_statuses` (`id`, `status`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` tinyint(4) NOT NULL DEFAULT '0',
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `system_group_id` int(3) NOT NULL,
  `department_id` int(11) NOT NULL,
  `password_expiry_date` date DEFAULT NULL,
  `expiry_warning_date` date DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `modified_by` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `create_ip` varchar(255) DEFAULT NULL,
  `modify_ip` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_address`, `password`, `account_status`, `firstname`, `lastname`, `address`, `system_group_id`, `department_id`, `password_expiry_date`, `expiry_warning_date`, `created_by`, `modified_by`, `created`, `modified`, `username`, `create_ip`, `modify_ip`) VALUES
(5, 'admin@steward.co.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 0, 'Misheck', 'Moyo', '', 1, 1, '0000-00-00', '0000-00-00', '', '', '2017-05-04 10:55:04', '2020-04-04 13:38:45', 'admin', '', ''),
(43, 'assistant@steward.co.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 0, 'Shamiso', 'Dube', '', 2, 3, '0000-00-00', '0000-00-00', NULL, NULL, '2018-11-13 15:34:23', '2019-04-16 09:03:48', 'dept_assistant', '::1', ''),
(63, 'libass@steward.co.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 0, 'Blessing', 'Bee', '23339', 2, 2, NULL, NULL, 'admin', NULL, '2019-10-10 20:01:30', '2019-10-10 20:01:30', 'detp_assistant2', '::1', NULL),
(67, 'sales@frolgate.co.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 1, 'Frolgate Computers', 'Frolgate Computers', '345 King George\r\nAvondale', 3, 6, NULL, NULL, NULL, NULL, '2020-04-05 13:07:54', '2020-04-05 13:07:54', 'sales@frolgate.co.zw', NULL, NULL),
(66, 'ict@steward.co.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 0, 'Thomas', 'Banda', '2345 Kwame Krumah', 2, 2, NULL, NULL, 'admin', NULL, '2020-04-05 13:03:01', '2020-04-05 13:04:55', 'dept_ict', '127.0.0.1', NULL),
(68, 'sales@teechers.co.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 1, 'Teechers Furnitures', 'Teechers Furnitures', '345 First Street', 3, 6, NULL, NULL, NULL, NULL, '2020-04-05 19:45:17', '2020-04-05 19:45:17', 'sales@teechers.co.zw', NULL, NULL),
(69, 'finance@steward.co.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 0, 'Moses', 'Daniels', '3455 Nelson Mandel Ave', 2, 5, NULL, NULL, 'admin', NULL, '2020-04-05 20:07:41', '2020-04-05 20:07:41', 'dept_finance', '127.0.0.1', NULL),
(70, 'sales@firstpack.co.zw', 'a761ec4324ce0aec6a135a1de866adfd7b25a61a', 1, 'First Pack Zimbabwe', 'First Pack Zimbabwe', '34 Samora Ave', 3, 6, NULL, NULL, NULL, NULL, '2020-04-05 20:14:02', '2020-04-05 20:14:02', 'sales@firstpack.co.zw', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `system_group_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_details`
--
ALTER TABLE `supplier_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_groups`
--
ALTER TABLE `system_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_type_name` (`account_type_name`);

--
-- Indexes for table `tender_categories`
--
ALTER TABLE `tender_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender_requests`
--
ALTER TABLE `tender_requests`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `request_code` (`tender_code`),
  ADD KEY `quotation_status_code` (`tender_status_id`);

--
-- Indexes for table `tender_responses`
--
ALTER TABLE `tender_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender_response_parameters`
--
ALTER TABLE `tender_response_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender_statuses`
--
ALTER TABLE `tender_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier_details`
--
ALTER TABLE `supplier_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_groups`
--
ALTER TABLE `system_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tender_categories`
--
ALTER TABLE `tender_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tender_requests`
--
ALTER TABLE `tender_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tender_responses`
--
ALTER TABLE `tender_responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tender_response_parameters`
--
ALTER TABLE `tender_response_parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender_statuses`
--
ALTER TABLE `tender_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
