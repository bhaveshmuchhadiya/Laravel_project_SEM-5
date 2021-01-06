-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 08:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `department_code`, `created_at`, `updated_at`) VALUES
(1, 'Account', 'AC001', '2020-10-30 14:05:42', '2020-11-12 01:45:14'),
(2, 'Human Resource (HR)', 'HR001', '2020-10-31 00:20:28', '2020-10-31 00:20:28'),
(4, 'Information Technology (IT)', 'IT001', '2020-11-12 01:47:55', '2020-11-12 01:47:55'),
(5, 'Health', 'H001', '2020-11-27 06:44:08', '2020-11-27 06:44:08');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `l_id` int(11) NOT NULL,
  `e_id` int(10) NOT NULL,
  `leave_type` varchar(30) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`l_id`, `e_id`, `leave_type`, `from_date`, `to_date`, `description`, `status`, `created_at`, `updated_at`) VALUES
(6, 1, 'medical leave', '2020-11-13', '2020-11-15', 'test', 'disapprove', '2020-11-08 05:05:56', '2020-11-08 05:05:56'),
(7, 4, 'Casual Leave', '2020-11-13', '2020-11-14', 'test', 'disapprove', '2020-11-12 07:26:24', '2020-11-12 07:26:24'),
(8, 4, 'medical leave', '2020-11-13', '2020-11-19', 'test', 'disapprove', '2020-11-12 07:50:57', '2020-11-12 07:50:57'),
(9, 1, 'Restricted Holiday(RH)', '2020-11-28', '2020-11-30', 'test', 'approved', '2020-11-27 12:17:46', '2020-11-27 12:17:46'),
(10, 6, 'Casual Leave', '2020-11-30', '2020-12-02', 'need casual leave', 'disapprove', '2020-11-28 03:19:03', '2020-11-28 03:19:03'),
(11, 6, 'Restricted Holiday(RH)', '2020-11-29', '2020-12-03', 'restricted hollyday', 'approved', '2020-11-28 07:33:00', '2020-11-28 07:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `leave_type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Medical leave', 'apply for medical leave', '2020-10-30 14:10:15', '2020-11-27 06:45:05'),
(2, 'Casual Leave', 'apply for casual leave', '2020-10-31 01:18:03', '2020-11-12 01:48:17'),
(4, 'Restricted Holiday(RH)', 'This type is use to apply for restrict holly day.', '2020-11-27 06:44:55', '2020-11-27 06:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `manage_employees`
--

CREATE TABLE `manage_employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_employees`
--

INSERT INTO `manage_employees` (`id`, `first_name`, `second_name`, `last_name`, `gender`, `department`, `birthdate`, `address`, `city`, `email`, `mobile`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Bhavesh', 'Jentibhai', 'Muchhadiya', 'male', 'Human Resource (HR)', '1999-06-01', 'velnath society,pardi,lodhika,rajkot', 'Rajkot', 'bhaveshmuchhadiya1999@gmail.com', 760008884, 'bhavin', 'Empbhavesh', '2020-10-30 23:58:45', '2020-10-31 04:01:20'),
(2, 'Nayan', 'Jentibhai', 'Chavda', 'male', 'Human Resource (HR)', '1998-08-03', 'rajkot', 'Rajkot', 'nayanc674@gmail.com', 9033887877, 'nayan', 'Empnayan', '2020-10-31 04:07:09', '2020-10-31 04:07:09'),
(3, 'Rahhul', 'Hareshbhai', 'Tanna', 'male', 'Account', '1998-11-01', 'newar PDM collage,rajkot', 'rajkot', 'rahultanna@gmail.com', 9898838389, 'Rahul', 'Emprahul', '2020-11-05 05:35:29', '2020-11-12 01:48:44'),
(4, 'ushang', 'abc', 'vaghela', 'male', 'Information Technology (IT)', '1998-11-10', 'abc', 'Rajkot', 'ushang@gmail.com', 12334534, 'ushang', 'Empushang', '2020-11-12 01:53:27', '2020-11-12 01:53:27'),
(6, 'harshil', 'h', 'ranpara', 'male', 'Account', '1997-06-01', 'near bus stop, rajkot', 'rajkot', 'harshil@gmail.com', 9898760043, 'harshil', 'Empharshil', '2020-11-27 21:48:16', '2020-11-28 02:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2020_10_26_025645_create_add_depts_table', 2),
(19, '2020_10_26_080400_create_leave_types_table', 2),
(20, '2020_10_26_092203_create_manage_employees_table', 2),
(21, '2020_10_31_094110_create_leaves_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_employees`
--
ALTER TABLE `manage_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_employees`
--
ALTER TABLE `manage_employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
