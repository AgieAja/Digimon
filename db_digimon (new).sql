-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 03:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_digimon`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_of_materials`
--

CREATE TABLE `bill_of_materials` (
  `bom_id` int(11) NOT NULL,
  `packaging_id` int(11) DEFAULT NULL,
  `movex_filter_master` varchar(20) DEFAULT NULL,
  `sap_filter_master` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_of_materials`
--

INSERT INTO `bill_of_materials` (`bom_id`, `packaging_id`, `movex_filter_master`, `sap_filter_master`, `status`, `remark`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, 'oke', 'oke', NULL, NULL, '2019-09-09 00:00:00', NULL, NULL, 14, NULL, NULL),
(2, 2, 'ok', 'ok', '2', 'confirm', '2019-09-09 00:00:00', '2019-09-09 00:00:00', NULL, 14, 14, NULL),
(3, 5, '', '', '2', 'confirm', '2019-09-18 00:00:00', '2019-09-18 00:00:00', NULL, 14, 14, NULL),
(4, 6, 'sdfg', 'sdfg', NULL, NULL, '2019-09-22 00:00:00', NULL, NULL, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_code` varchar(3) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_code`, `brand_name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('B01', 'Brand 1', '2019-08-24 00:00:00', '2019-08-24 00:00:00', NULL, 6, 6, NULL),
('B02', 'Brand 2', '2019-08-24 00:00:00', '2019-08-24 00:00:00', NULL, 6, 6, NULL),
('B03', 'Brand 3', '2019-09-07 00:00:00', '2019-09-07 00:00:00', '2019-09-07 00:00:00', 14, 14, 14),
('bo1', '12345', '2019-09-07 00:00:00', '2019-09-07 00:00:00', '2019-09-07 00:00:00', 14, 14, 14),
('CLS', 'CLASSIC FILTER AUTOMOTIF', '2019-08-15 00:00:00', '2019-08-15 00:00:00', '2019-08-15 00:00:00', 6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_code` varchar(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `zone_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_code`, `name`, `address`, `email`, `phone_number`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `zone_code`) VALUES
('C001', 'Customer 1', 'Jl alamat', 'customer1@ss.com', '1234', '2019-08-24 00:00:00', '2019-08-24 00:00:00', NULL, 1, 1, NULL, 'Z001'),
('CS002', 'customer 2', 'sdfg', 'sdfgh@gmail.com', '1234567', '2019-09-07 00:00:00', '2019-09-07 00:00:00', NULL, 14, 14, NULL, 'Z002'),
('CS003', 'afghj', 'sdfghj', 'sdfghj@gmail.com', '1234567', '2019-09-07 00:00:00', '2019-09-07 00:00:00', NULL, 14, 14, NULL, ''),
('CX0001', 'SF-FILTERS GMBH', 'STUTGART-GERMANY', 'gmnbhschupp@gmail.com', '111111', '2019-08-15 00:00:00', '2019-08-15 00:00:00', '2019-09-07 00:00:00', 1, 1, 14, '');

-- --------------------------------------------------------

--
-- Table structure for table `drawing_specs`
--

CREATE TABLE `drawing_specs` (
  `drawing_spec_id` int(11) NOT NULL,
  `request_detail_id` int(11) DEFAULT NULL,
  `sakura_version_no` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remark` varchar(30) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drawing_specs`
--

INSERT INTO `drawing_specs` (`drawing_spec_id`, `request_detail_id`, `sakura_version_no`, `status`, `image`, `remark`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 2, 'C-123V', '2', 'b.png', ' ', '2019-09-09 00:00:00', NULL, NULL, 14, NULL, NULL),
(2, 1, 'C-123Vd', '2', '', ' ok pac', '2019-09-09 00:00:00', NULL, NULL, 14, NULL, NULL),
(3, 3, 'ok', '2', 'pdf.pdf', ' ', '2019-09-10 00:00:00', NULL, NULL, 14, NULL, NULL),
(4, 4, 'ok', '2', '5_6192741665669644396.pdf', 'ok', '2019-09-11 00:00:00', NULL, NULL, 14, NULL, NULL),
(5, 5, 'ok', NULL, '5_6192741665669644396.pdf', 'ok', '2019-09-11 00:00:00', NULL, NULL, 14, NULL, NULL),
(6, 11, 'ok', '2', '1800x1200.jpg', 'ok', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
(7, 10, 'ok', NULL, '1800x1200.jpg', 'ok', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
(8, 9, 'ok', NULL, '5_6192741665669644396.pdf', 'okok', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
(9, 8, 'asdfgfds', NULL, 'pdf.pdf', 'sdfgdsdd', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
(10, 12, 'test', '2', '5_6192741665669644396.pdf', 'good', '2019-09-22 00:00:00', NULL, NULL, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manufacture_code` varchar(3) NOT NULL,
  `manufacture_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manufacture_code`, `manufacture_name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('001', 'Manufakur 1', '2019-08-24 00:00:00', '2019-08-24 00:00:00', NULL, 6, 6, NULL),
('002', 'manufaktur 2', '2019-08-24 00:00:00', '2019-08-24 00:00:00', NULL, 6, 6, NULL),
('007', 'ELEMENT SELAMAT SEMPURNA', '2019-08-15 00:00:00', '2019-08-15 00:00:00', '2019-08-15 00:00:00', 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `packagings`
--

CREATE TABLE `packagings` (
  `packaging_id` int(11) NOT NULL,
  `drawing_spec_id` int(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL,
  `inner_box_spec` varchar(50) DEFAULT NULL,
  `outter_box_spec` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packagings`
--

INSERT INTO `packagings` (`packaging_id`, `drawing_spec_id`, `status`, `image`, `remark`, `inner_box_spec`, `outter_box_spec`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, '2', NULL, ' ok', 'ClassDiagram Audit.pdf', '1 Use Case Diagram.pdf', '2019-09-09 00:00:00', NULL, NULL, 14, NULL, NULL),
(2, 2, '2', NULL, 'ok', '5_6192741665669644396.pdf', '5_6192741665669644396.pdf', '2019-09-09 00:00:00', NULL, NULL, 14, NULL, NULL),
(3, 3, NULL, NULL, NULL, '', '', '2019-09-10 00:00:00', NULL, NULL, 14, NULL, NULL),
(4, 4, '1', NULL, 'not good', '5_6192741665669644396.pdf', '5_6192741665669644396.pdf', '2019-09-11 00:00:00', NULL, NULL, 14, NULL, NULL),
(5, 6, '2', NULL, ' ', 'ClassDiagram Audit.pdf', '5_6192741665669644396.pdf', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
(6, 10, '2', NULL, 'ok siap', '5_6192741665669644396.pdf', '5_6192741665669644396.pdf', '2019-09-22 00:00:00', NULL, NULL, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT NULL,
  `jumlah_bayar` int(11) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receives`
--

CREATE TABLE `receives` (
  `receive_id` int(11) NOT NULL,
  `bom_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receives`
--

INSERT INTO `receives` (`receive_id`, `bom_id`, `status`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 2, 0, '2019-09-09 00:00:00', NULL, NULL, 14, NULL, NULL),
(2, 3, 0, '2019-09-18 00:00:00', '2019-09-18 00:00:00', NULL, 14, 14, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request_approves`
--

CREATE TABLE `request_approves` (
  `request_approve_id` int(11) NOT NULL,
  `request_header_id` int(11) DEFAULT NULL,
  `approve_date` date DEFAULT NULL,
  `approve_note` text,
  `approve_type` int(11) DEFAULT NULL,
  `approve_by` int(11) DEFAULT NULL,
  `approve_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_approves`
--

INSERT INTO `request_approves` (`request_approve_id`, `request_header_id`, `approve_date`, `approve_note`, `approve_type`, `approve_by`, `approve_status`) VALUES
(1, 1, '2019-09-09', 'yes', NULL, 14, 3),
(2, 2, '2019-09-10', '', NULL, 14, 3),
(3, 3, '2019-09-11', '', NULL, 14, 3),
(4, 4, '2019-09-11', '', NULL, 14, 3),
(5, 5, '2019-09-13', 'no', NULL, 14, 2),
(6, 6, '2019-09-18', 'tet', NULL, 14, 3),
(7, 7, '2019-09-18', 'yes', NULL, 14, 3),
(8, 8, '2019-09-18', 'yrd', NULL, 14, 3),
(9, 9, '2019-09-18', 'yes', NULL, 14, 3),
(10, 10, '2019-09-18', 'yes', NULL, 14, 3),
(11, 11, '2019-09-22', 'yde', NULL, 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `request_details`
--

CREATE TABLE `request_details` (
  `request_detail_id` int(11) NOT NULL,
  `request_header_id` int(11) DEFAULT NULL,
  `customer_info_no` varchar(30) DEFAULT NULL,
  `sakura_ref_no` varchar(20) DEFAULT NULL,
  `brand_code` varchar(3) DEFAULT NULL,
  `warehouse_code` varchar(3) DEFAULT NULL,
  `manufacture_code` varchar(3) DEFAULT NULL,
  `order_qty` int(11) DEFAULT NULL,
  `item_images` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_details`
--

INSERT INTO `request_details` (`request_detail_id`, `request_header_id`, `customer_info_no`, `sakura_ref_no`, `brand_code`, `warehouse_code`, `manufacture_code`, `order_qty`, `item_images`, `status`, `remark`) VALUES
(1, 1, '23.100.3345', 'C-1123', 'B01', '001', '001', 100, 'class.png', 2, 'ok'),
(2, 1, '23.100.3344', 'C-1124', 'B02', '002', '002', 13, 'audio.png', 2, 'oke'),
(3, 2, '23.100.33446', 'C-11235', 'B02', '002', '002', 100, 'class.png', 2, 'oke drawing'),
(4, 3, '23.100.3345', 'C-1123', 'B02', '002', '001', 1, '', 2, 'ok'),
(5, 4, '222', 'C-1123', 'B02', '002', '002', 100, 'audio.png', 2, 'ok'),
(6, 5, '23.100.3345', 'C-1123', 'B02', '002', '002', 100, 'b.png', NULL, NULL),
(7, 6, '23.100.3345', 'C-1123', 'B01', '002', '002', 100, 'bookig.png', NULL, NULL),
(8, 7, '23.100.3345', 'C-1123', 'B01', '001', '001', 100, '5_6192741665669644396.pdf', 2, 'sdfgdsdd'),
(9, 8, '23.100.3345', 'C-1123', 'B01', '002', '002', 1, '5_6192741665669644396.pdf', 2, 'okok'),
(10, 9, '23.100.3345', 'C-1123', 'B02', '002', '002', 1, '1800x1200.jpg', 2, 'ok'),
(11, 10, '23.100.3345', 'C-1124', 'B01', '002', '002', 1, '1800x1200.jpg', 2, 'sdsd'),
(12, 11, '123s', 'dsds1', 'B02', '001', '001', 100, 'umrah.jpg', 2, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `request_headers`
--

CREATE TABLE `request_headers` (
  `request_no` varchar(25) DEFAULT NULL,
  `request_header_id` int(11) NOT NULL,
  `customer_code` varchar(6) DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `po_number_customer` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_headers`
--

INSERT INTO `request_headers` (`request_no`, `request_header_id`, `customer_code`, `request_date`, `po_number_customer`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('RQ0909190001', 1, 'C001', '2019-09-09', 'po1234', '2019-09-09 00:00:00', NULL, NULL, 14, NULL, NULL),
('RQ0909190002', 2, 'CS002', '2019-09-09', 'po1111', '2019-09-09 00:00:00', '2019-09-10 00:00:00', NULL, 14, 14, NULL),
('RQ1109190001', 3, 'C001', '2019-09-11', 'po1234567890', '2019-09-11 00:00:00', NULL, NULL, 14, NULL, NULL),
('RQ1109190002', 4, 'CS003', '2019-09-11', 'dfg', '2019-09-11 00:00:00', NULL, NULL, 14, NULL, NULL),
('RQ1309190001', 5, 'C001', '2019-09-13', 'po123', '2019-09-13 00:00:00', '2019-09-13 00:00:00', NULL, 14, 14, NULL),
('RQ1309190002', 6, 'CS002', '2019-09-13', 'poxi', '2019-09-13 00:00:00', '2019-09-14 00:00:00', NULL, 1, 14, NULL),
('RQ1809190001', 7, 'CS002', '2019-09-18', 'fdfdf', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
('RQ1809190002', 8, 'CS002', '2019-09-18', 'tyu', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
('RQ1809190003', 9, 'CS002', '2019-09-18', 'dsds', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
('RQ1809190004', 10, 'CS002', '2019-09-18', 'asdfgh', '2019-09-18 00:00:00', NULL, NULL, 14, NULL, NULL),
('RQ2209190001', 11, 'CS002', '2019-09-22', 'posdfgg', '2019-09-22 00:00:00', NULL, NULL, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `access_level` int(11) NOT NULL,
  `zone_code` varchar(15) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `address`, `email`, `phone_number`, `access_level`, `zone_code`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'nurahman_1', '827ccb0eea8a706c4c34a16891f84e7b', 'Nurahman', 'Palembang', 'ngasiman21@gmail.com', '123456', 1, NULL, '2019-08-02 00:00:00', '2019-08-14 00:00:00', NULL, 8, 8, NULL),
(2, 'lavinia_J', '827ccb0eea8a706c4c34a16891f84e7b', 'Lavinia Jovita Samiana', 'Jakarta Selatan', 'lavina@gmail.com', '123456', 2, 'Z001', '2019-08-04 00:00:00', '2019-09-14 00:00:00', NULL, 8, 14, NULL),
(3, 'winanto_h', '827ccb0eea8a706c4c34a16891f84e7b', 'Winanto Heryan', 'Jakarta Barat', 'winanto@gmail.com', '123444', 3, NULL, '2019-08-04 00:00:00', '2019-08-04 00:00:00', NULL, 8, 8, NULL),
(4, 'ade_nurmansyah', '827ccb0eea8a706c4c34a16891f84e7b', 'Ade Nurmansyah', 'Tigaraksa', 'ade@gmail.com', '123456', 4, NULL, '2019-08-04 00:00:00', '2019-08-23 00:00:00', NULL, 8, 8, NULL),
(5, 'jijih_s', '827ccb0eea8a706c4c34a16891f84e7b', 'Jijih Saptujih', 'Curug', 'jijih@gmail.com', '123456', 5, NULL, '2019-08-04 00:00:00', '2019-08-14 00:00:00', NULL, 8, 8, NULL),
(6, 'didik_a', '827ccb0eea8a706c4c34a16891f84e7b', 'Didik Ardianto', 'Kadu Jaya', 'didik@gmail.com', '123456', 6, NULL, '2019-08-04 00:00:00', '2019-08-14 00:00:00', NULL, 8, 8, NULL),
(7, 'manto_1', '827ccb0eea8a706c4c34a16891f84e7b', 'Manto', 'Cikupa Jaya', 'manto@gmail.com', '123456', 7, NULL, '2019-08-04 00:00:00', '2019-08-14 00:00:00', NULL, 8, 8, NULL),
(14, 'vonny_k', '827ccb0eea8a706c4c34a16891f84e7b', 'Vonny Kusrini', 'Jakarta Barat', 'vonny@gmail.com', '1234', 8, NULL, '2019-08-14 00:00:00', '2019-08-14 00:00:00', NULL, 8, 8, NULL),
(15, 'sd', 'cc2bd8f09bb88b5dd20f9b432631b8ca', 'sdsd', 'sdsd', 'sdsd', 'cssdw', 8, NULL, '2019-08-23 00:00:00', '2019-08-23 00:00:00', NULL, 8, 8, NULL),
(16, 'nur', '827ccb0eea8a706c4c34a16891f84e7b', 'nuri', 'cikupa', 'nur@gmail.com', '12345', 2, 'Z002', '2019-09-14 00:00:00', '2019-09-14 00:00:00', NULL, 14, 14, NULL),
(17, 'mubarok', '827ccb0eea8a706c4c34a16891f84e7b', 'idham', 'tester', 'tester@gmail.com', '12345', 3, NULL, '2019-09-22 00:00:00', '2019-09-22 00:00:00', NULL, 14, 14, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `warehouse_code` varchar(3) NOT NULL,
  `warehouse_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`warehouse_code`, `warehouse_name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('001', 'Warehouse 1', '2019-08-24 00:00:00', '2019-08-24 00:00:00', NULL, 1, 1, NULL),
('002', 'warehouse 2', '2019-08-24 00:00:00', '2019-08-24 00:00:00', NULL, 1, 1, NULL),
('003', 'warehouse 3', '2019-09-07 00:00:00', '2019-09-07 00:00:00', NULL, 1, 1, NULL),
('MTK', 'MAKE TO STOCK SAKURA ', '2019-08-15 00:00:00', '2019-08-15 00:00:00', '2019-08-15 00:00:00', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `zone_code` varchar(10) DEFAULT NULL,
  `zone_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL,
  `deleted_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`zone_code`, `zone_name`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('Z001', 'Zona 1', '2019-08-23 17:00:00', '2019-08-23 17:00:00', NULL, '1', '1', NULL),
('Z002', 'Zona 2', '2019-08-23 17:00:00', '2019-08-23 17:00:00', NULL, '1', '1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_of_materials`
--
ALTER TABLE `bill_of_materials`
  ADD PRIMARY KEY (`bom_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_code`);

--
-- Indexes for table `drawing_specs`
--
ALTER TABLE `drawing_specs`
  ADD PRIMARY KEY (`drawing_spec_id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manufacture_code`);

--
-- Indexes for table `packagings`
--
ALTER TABLE `packagings`
  ADD PRIMARY KEY (`packaging_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receives`
--
ALTER TABLE `receives`
  ADD PRIMARY KEY (`receive_id`);

--
-- Indexes for table `request_approves`
--
ALTER TABLE `request_approves`
  ADD PRIMARY KEY (`request_approve_id`);

--
-- Indexes for table `request_details`
--
ALTER TABLE `request_details`
  ADD PRIMARY KEY (`request_detail_id`);

--
-- Indexes for table `request_headers`
--
ALTER TABLE `request_headers`
  ADD PRIMARY KEY (`request_header_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`warehouse_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_of_materials`
--
ALTER TABLE `bill_of_materials`
  MODIFY `bom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drawing_specs`
--
ALTER TABLE `drawing_specs`
  MODIFY `drawing_spec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packagings`
--
ALTER TABLE `packagings`
  MODIFY `packaging_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receives`
--
ALTER TABLE `receives`
  MODIFY `receive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_approves`
--
ALTER TABLE `request_approves`
  MODIFY `request_approve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request_details`
--
ALTER TABLE `request_details`
  MODIFY `request_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_headers`
--
ALTER TABLE `request_headers`
  MODIFY `request_header_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
