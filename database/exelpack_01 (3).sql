-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 02:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exelpack_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_roles`
--

CREATE TABLE `account_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_roles`
--

INSERT INTO `account_roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'customer service', '2023-08-15 07:25:58', NULL),
(2, 'manager', '2023-08-15 07:25:58', NULL),
(3, 'system admin', '2023-08-15 07:25:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_rates`
--

CREATE TABLE `delivery_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL COMMENT 'personal_email',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `mname`, `lname`, `p_email`, `created_at`, `updated_at`) VALUES
(1, 'Andrei', 'Bilan', 'Carosa', 'andrei.carosa12@gmail.com', '2023-08-15 07:30:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_accounts`
--

CREATE TABLE `employee_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personnel_id` int(11) NOT NULL COMMENT 'employee_id',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passkey` varchar(255) DEFAULT NULL,
  `c_email` varchar(255) NOT NULL COMMENT 'corporate_email',
  `status` tinyint(1) NOT NULL COMMENT '0=deactivated,1=active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_accounts`
--

INSERT INTO `employee_accounts` (`id`, `personnel_id`, `username`, `password`, `passkey`, `c_email`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'abcarosa', '$2y$10$e662.ABzTMuOWpEHnB7.8uxOnwoMhr/JrdUFzIqiQzW.yHj/HeElq', 'eyJpdiI6IjBjaU9ZNHB4SWVhM0tSZm5PTTZqK3c9PSIsInZhbHVlIjoiU1lTWW5ycDlMQWdKSnhOdGNPRTNEdz09IiwibWFjIjoiNjkxNjg2N2VhNmYyMzdmNzg5NDEzMDM5MWQ2YjQ1NWYwYjJlNDI4MzExN2MzZjgyYjY1MWViYWE1NDk3M2YxZiIsInRhZyI6IiJ9', 'andrei.carosa@corporate.com', 1, '2023-08-15 07:26:51', '2023-09-04 03:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `employee_roles`
--

CREATE TABLE `employee_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personnel_id` int(11) NOT NULL COMMENT 'account_id',
  `role_id` tinyint(1) NOT NULL COMMENT '1=customer_service,2=manager, 3=sys_admin',
  `status` tinyint(1) NOT NULL COMMENT '0=inactive,1=active',
  `company` tinyint(1) NOT NULL COMMENT '1=exelpack',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_roles`
--

INSERT INTO `employee_roles` (`id`, `personnel_id`, `role_id`, `status`, `company`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2023-08-15 07:32:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `escalated_links`
--

CREATE TABLE `escalated_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `re_id` int(11) NOT NULL COMMENT 'request_escalated_id',
  `unique_link` varchar(255) NOT NULL COMMENT 'active for 6 hours',
  `status` tinyint(1) NOT NULL COMMENT '0=inactive, 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_22_060313_create_employees_table', 1),
(3, '2023_07_22_060321_create_employee_accounts_table', 1),
(4, '2023_07_22_060536_create_employee_roles_table', 1),
(5, '2023_07_22_060641_create_account_roles_table', 1),
(6, '2023_08_10_091223_create_system_access_logs_table', 1),
(7, '2023_08_14_112710_create_request_quotations_table', 2),
(8, '2023_08_14_113242_create_products_table', 2),
(9, '2023_08_14_115102_create_request_infos_table', 3),
(10, '2023_08_14_115623_create_request_products_table', 4),
(11, '2023_08_14_115905_create_request_status_table', 5),
(12, '2023_08_14_121428_create_request_status_logs_table', 5),
(13, '2023_08_14_121837_create_request_escalated_table', 5),
(14, '2023_08_14_122714_create_escalated_links_table', 5),
(15, '2023_08_15_101055_create_delivery_rates_table', 6),
(16, '2023_08_16_011527_create_jobs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL COMMENT 'main image',
  `other_img` longtext NOT NULL COMMENT 'carousel',
  `product_type` tinyint(1) NOT NULL,
  `specification` longtext NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=hide, 1=display',
  `customize` varchar(255) NOT NULL,
  `company` int(11) NOT NULL COMMENT '1=exelpack',
  `last_modified_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `img`, `other_img`, `product_type`, `specification`, `status`, `customize`, `company`, `last_modified_by`, `created_at`, `updated_at`) VALUES
(1, 'SHIPPING BOX', 'A Shipping Box is a sturdy container designed to hold and protect items during transportation. It\'s usually made of materials like cardboard or corrugated fiberboard and comes in various sizes to accommodate different products.', 'shipping_box.png', '[\"shipping_box.png\",\"shipping_box.png\",\"shipping_box.png\",\"shipping_box.png\"]', 1, '{\"wall_type\":[\"Single Wall\",\"Double Wall\",\"Tri-Wall\"],\"material_type\":[\"KR Recycle Material\",\"KL Virgin Material\"],\"flute_type\":[\"E Flute (2mm)\",\"B or C Flute (4mm)\",\"BC Flute (7mm)\"],\"color\":[\"Brown Kraft\",\"Top White 1 Side\",\"Top White 2 Side\"]}', 1, 'Customization available with minimum orders.', 1, 0, '2023-08-15 07:16:41', '2023-08-15 07:21:21'),
(2, 'RSC BOX', 'A Regular Slotted Container (RSC) is a simple cardboard box often seen in stores. It\'s made from a single piece of cardboard, folded to create a box with flaps that close at the top and bottom.', 'rsc_box.png', '[\"rsc_box.png\",\"rsc_box.png\",\"rsc_box.png\",\"rsc_box.png\"]', 1, '{\"wall_type\":[\"Single Wall\",\"Double Wall\",\"Tri-Wall\"],\"material_type\":[\"KR Recycle Material\",\"KL Virgin Material\"],\"flute_type\":[\"E Flute (2mm)\",\"B or C Flute (4mm)\",\"BC Flute (7mm)\"],\"color\":[\"Brown Kraft\",\"Top White 1 Side\",\"Top White 2 Side\"]}', 1, 'Customization available with minimum orders.', 1, 0, '2023-08-15 07:16:41', '2023-08-15 07:21:21'),
(3, 'COLORED BOX', 'A Colored Box refers to a container, often made of cardboard or paper, that has been dyed or printed with different colors. This is done for aesthetic purposes, branding, or to make the packaging more visually appealing and distinctive.', 'colored_box.png', '[\"colored_box.png\",\"colored_box.png\",\"colored_box.png\",\"colored_box.png\"]', 1, '{\"wall_type\":[\"Single Wall\",\"Double Wall\",\"Tri-Wall\"],\"material_type\":[\"KR Recycle Material\",\"KL Virgin Material\"],\"flute_type\":[\"E Flute (2mm)\",\"B or C Flute (4mm)\",\"BC Flute (7mm)\"],\"color\":[\"Brown Kraft\",\"Top White 1 Side\",\"Top White 2 Side\"]}', 1, 'Customization available with minimum orders.', 1, 0, '2023-08-15 07:16:41', '2023-08-15 07:21:21'),
(4, 'BOX AND FOAM INSERTS', 'A Box with Foam Inserts is a packaging option where a sturdy outer box contains a customized foam interior. This foam is shaped to fit your products perfectly, offering excellent protection during shipping and storage, while also providing a neat and organized presentation.', 'box_and_foam_inserts.png', '[\"box_and_foam_inserts.png\",\"box_and_foam_inserts.png\",\"box_and_foam_inserts.png\",\"box_and_foam_inserts.png\"]', 1, '{\"wall_type\":[\"Single Wall\",\"Double Wall\",\"Tri-Wall\"],\"material_type\":[\"KR Recycle Material\",\"KL Virgin Material\"],\"flute_type\":[\"E Flute (2mm)\",\"B or C Flute (4mm)\",\"BC Flute (7mm)\"],\"color\":[\"Brown Kraft\",\"Top White 1 Side\",\"Top White 2 Side\"]}', 1, 'Customization available with minimum orders.', 1, 0, '2023-08-15 07:16:41', '2023-08-15 07:21:21'),
(5, 'BOX WITH BOARD PARTITION', 'A Box with Foam Inserts is a packaging option where a sturdy outer box contains a customized foam interior. This foam is shaped to fit your products perfectly, offering excellent protection during shipping and storage, while also providing a neat and organized presentation.', 'box_with_partition.png', '[\"box_with_partition.png\",\"box_with_partition.png\",\"box_with_partition.png\",\"box_with_partition.png\"]', 1, '{\"wall_type\":[\"Single Wall\",\"Double Wall\",\"Tri-Wall\"],\"material_type\":[\"KR Recycle Material\",\"KL Virgin Material\"],\"flute_type\":[\"E Flute (2mm)\",\"B or C Flute (4mm)\",\"BC Flute (7mm)\"],\"color\":[\"Brown Kraft\",\"Top White 1 Side\",\"Top White 2 Side\"]}', 1, 'Customization available with minimum orders.', 1, 0, '2023-08-15 07:16:41', '2023-08-15 07:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `request_escalated`
--

CREATE TABLE `request_escalated` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rq_id` int(11) NOT NULL,
  `cs_id` int(11) NOT NULL COMMENT 'customer_service',
  `mg_id` int(11) NOT NULL COMMENT 'manager',
  `reason` longtext DEFAULT NULL,
  `remarks` longtext DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT 'null=pending, 0=denied, 1=accepted',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_infos`
--

CREATE TABLE `request_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rq_id` int(11) NOT NULL,
  `requestor_name` varchar(255) NOT NULL,
  `requestor_email` varchar(255) NOT NULL,
  `requestor_telephone` varchar(255) NOT NULL,
  `requestor_company` varchar(255) NOT NULL,
  `requestor_message` longtext NOT NULL,
  `company_accreditation` varchar(50) NOT NULL,
  `company_address` longtext DEFAULT NULL,
  `delivery_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_infos`
--

INSERT INTO `request_infos` (`id`, `rq_id`, `requestor_name`, `requestor_email`, `requestor_telephone`, `requestor_company`, `requestor_message`, `company_accreditation`, `company_address`, `delivery_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Andrei Carosa', 'luxarcadia121@gmail.com', '1234567890', 'Minamoto Corporation', 'LOREM IPSUM. THANK YOU', 'PEZA', '170 ALONZO STREET, ELEPAÑO SUBDIVISION BARANGAY 3', 1, '2023-08-15 20:43:35', '2023-08-17 13:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `request_products`
--

CREATE TABLE `request_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rq_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `specification` longtext NOT NULL,
  `estimated_price` varchar(255) DEFAULT NULL,
  `approved_ep` tinyint(1) DEFAULT NULL COMMENT 'approved_estimated_price',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_products`
--

INSERT INTO `request_products` (`id`, `rq_id`, `product_id`, `product_name`, `product_type`, `specification`, `estimated_price`, `approved_ep`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'SHIPPING BOX', 'corrugated carton', '{\"quantity\":\"10\",\"wall_type\":\"Double Wall\",\"material_type\":\"KL Virgin Material\",\"flute_type\":\"B or C Flute (4mm)\",\"color\":\"Top White 2 Side\",\"p_length\":\"5\",\"p_width\":\"5\",\"p_height\":\"5\",\"type\":\"corrugated carton\",\"product\":\"shipping box\"}', NULL, NULL, '2023-08-15 20:43:35', '2023-08-15 20:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `request_quotations`
--

CREATE TABLE `request_quotations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `request_no` varchar(255) NOT NULL,
  `request_type` varchar(100) DEFAULT NULL,
  `ip_address` varchar(100) NOT NULL,
  `email_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=pending, 1=replied',
  `date_emailed` date DEFAULT NULL,
  `processed_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_quotations`
--

INSERT INTO `request_quotations` (`id`, `request_no`, `request_type`, `ip_address`, `email_status`, `date_emailed`, `processed_by`, `created_at`, `updated_at`) VALUES
(1, 'qMORcYWBcb', 'Partnership Opportunities', '127.0.0.1', 0, NULL, NULL, '2023-08-15 20:43:35', '2023-08-15 20:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `request_status`
--

CREATE TABLE `request_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rq_id` int(11) NOT NULL,
  `request_status` tinyint(1) NOT NULL DEFAULT 2 COMMENT '0=denied 1=completed 2=pending 3=processing',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_status`
--

INSERT INTO `request_status` (`id`, `rq_id`, `request_status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-08-15 20:43:35', '2023-08-15 20:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `request_status_logs`
--

CREATE TABLE `request_status_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rq_id` int(11) NOT NULL,
  `previous_status_id` tinyint(1) DEFAULT NULL COMMENT '0=denied 1=completed 2=pending 3=processing',
  `new_status_id` tinyint(1) DEFAULT NULL COMMENT '0=denied 1=completed 2=pending 3=processing',
  `processed_by` int(11) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_access_logs`
--

CREATE TABLE `system_access_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `device_details` longtext NOT NULL,
  `login_details` longtext NOT NULL,
  `logout_details` longtext DEFAULT NULL,
  `action` tinyint(1) DEFAULT NULL COMMENT '1=login 2=logout',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_access_logs`
--

INSERT INTO `system_access_logs` (`id`, `username`, `ip_address`, `device_details`, `login_details`, `logout_details`, `action`, `created_at`, `updated_at`) VALUES
(1, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-15T08:15:01.941526Z\",\"login_status\":200}', '{\"timestamp\":\"2023-08-15T08:15:05.779029Z\",\"login_status\":200}', 2, '2023-08-15 00:15:01', '2023-08-15 00:15:05'),
(2, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-15T08:15:16.203956Z\",\"login_status\":401}', NULL, 1, '2023-08-15 00:15:16', '2023-08-15 00:15:16'),
(3, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-15T08:15:23.440936Z\",\"login_status\":401}', NULL, 1, '2023-08-15 00:15:23', '2023-08-15 00:15:23'),
(4, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-15T08:15:26.978687Z\",\"login_status\":200}', '{\"timestamp\":\"2023-08-15T08:15:29.682139Z\",\"login_status\":200}', 2, '2023-08-15 00:15:26', '2023-08-15 00:15:29'),
(5, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-15T08:16:12.642036Z\",\"login_status\":401}', NULL, 1, '2023-08-15 00:16:12', '2023-08-15 00:16:12'),
(6, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-15T08:16:27.613309Z\",\"login_status\":401}', NULL, 1, '2023-08-15 00:16:27', '2023-08-15 00:16:27'),
(7, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-15T08:16:44.218304Z\",\"login_status\":200}', '{\"timestamp\":\"2023-08-15T08:16:54.876737Z\",\"login_status\":200}', 2, '2023-08-15 00:16:44', '2023-08-15 00:16:54'),
(8, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-16T04:47:40.323408Z\",\"login_status\":200}', NULL, 1, '2023-08-15 20:47:40', '2023-08-15 20:47:40'),
(9, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-16T08:46:52.772209Z\",\"login_status\":200}', '{\"timestamp\":\"2023-08-16T14:12:12.412557Z\",\"login_status\":200}', 2, '2023-08-16 00:46:52', '2023-08-16 06:12:12'),
(10, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-16T14:12:59.399449Z\",\"login_status\":200}', NULL, 1, '2023-08-16 06:12:59', '2023-08-16 06:12:59'),
(11, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-17T00:40:23.807628Z\",\"login_status\":200}', '{\"timestamp\":\"2023-08-17T02:11:37.432242Z\",\"login_status\":200}', 2, '2023-08-16 16:40:23', '2023-08-16 18:11:37'),
(12, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-17T13:18:48.208729Z\",\"login_status\":200}', NULL, 1, '2023-08-17 05:18:48', '2023-08-17 05:18:48'),
(13, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[100.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-18T01:02:18.658660Z\",\"login_status\":200}', '{\"timestamp\":\"2023-08-18T01:45:41.175646Z\",\"login_status\":200}', 2, '2023-08-17 17:02:18', '2023-08-17 17:45:41'),
(14, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[101.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-08-26T09:41:39.586521Z\",\"login_status\":200}', NULL, 1, '2023-08-26 01:41:39', '2023-08-26 01:41:39'),
(15, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[101.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-09-04T03:18:46.617797Z\",\"login_status\":401}', NULL, 1, '2023-09-03 19:18:46', '2023-09-03 19:18:46'),
(16, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[101.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-09-04T03:19:38.982483Z\",\"login_status\":200}', NULL, 1, '2023-09-03 19:19:38', '2023-09-03 19:19:38'),
(17, 'abcarosa', '127.0.0.1', '{\"os\":\"Windows[10.0]\",\"browser\":\"Opera[101.0.0.0]\",\"device\":\"WebKit\"}', '{\"timestamp\":\"2023-09-04T12:27:33.360686Z\",\"login_status\":200}', NULL, 1, '2023-09-04 04:27:33', '2023-09-04 04:27:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_roles`
--
ALTER TABLE `account_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_rates`
--
ALTER TABLE `delivery_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_p_email_unique` (`p_email`);

--
-- Indexes for table `employee_accounts`
--
ALTER TABLE `employee_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_accounts_c_email_unique` (`c_email`);

--
-- Indexes for table `employee_roles`
--
ALTER TABLE `employee_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escalated_links`
--
ALTER TABLE `escalated_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_escalated`
--
ALTER TABLE `request_escalated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_infos`
--
ALTER TABLE `request_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_products`
--
ALTER TABLE `request_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_quotations`
--
ALTER TABLE `request_quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_status`
--
ALTER TABLE `request_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_status_logs`
--
ALTER TABLE `request_status_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_access_logs`
--
ALTER TABLE `system_access_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_roles`
--
ALTER TABLE `account_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_rates`
--
ALTER TABLE `delivery_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_accounts`
--
ALTER TABLE `employee_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_roles`
--
ALTER TABLE `employee_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `escalated_links`
--
ALTER TABLE `escalated_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request_escalated`
--
ALTER TABLE `request_escalated`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_infos`
--
ALTER TABLE `request_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_products`
--
ALTER TABLE `request_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_quotations`
--
ALTER TABLE `request_quotations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_status`
--
ALTER TABLE `request_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_status_logs`
--
ALTER TABLE `request_status_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `system_access_logs`
--
ALTER TABLE `system_access_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
