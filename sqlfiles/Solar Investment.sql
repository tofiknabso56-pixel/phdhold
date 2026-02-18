-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2024 at 09:03 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evboxmoz_v4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salary_date` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `balance`, `name`, `photo`, `email`, `email_verified_at`, `password`, `salary_date`, `type`, `phone`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0.00, 'Md Admin', '/public/admin/assets/images/profile/1706650015HOx.png', 'admin@gmail.com', '2023-11-29 18:37:08', '$2a$12$D95HHmoj0GKOCRKi5FopfuaOHaatTb0n2TZ8Xjibe0mFEr0ZxjrcS', '2024-02-05', 'admin', '01600000000', 'sd', 'kPnBINdiZz92S0d5K5I0WCfsJxTptpahnI8UXUIcYIk3cFrrXkJezDjsvKIb', '2023-11-28 11:11:57', '2024-02-05 17:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ledgers`
--

CREATE TABLE `admin_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(255) NOT NULL,
  `perticulation` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected','default') NOT NULL DEFAULT 'default',
  `date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bonuses`
--

CREATE TABLE `bonuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bonus_name` varchar(255) NOT NULL,
  `counter` int(11) DEFAULT 0 COMMENT 'user get service count',
  `set_service_counter` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `winner` int(11) DEFAULT 0,
  `amount` double NOT NULL DEFAULT 0,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonuses`
--

INSERT INTO `bonuses` (`id`, `bonus_name`, `counter`, `set_service_counter`, `code`, `winner`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'VIP Bonus', 17, 100, '123456', 1, 5, 'active', '2023-11-15 12:39:25', '2024-04-28 11:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `bonus_ledgers`
--

CREATE TABLE `bonus_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bonus_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `bonus_code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bonus_ledgers`
--

INSERT INTO `bonus_ledgers` (`id`, `user_id`, `bonus_id`, `amount`, `bonus_code`, `created_at`, `updated_at`) VALUES
(2, 21, 1, 3.00, '123456', '2024-02-19 23:07:23', '2024-02-19 23:07:23'),
(3, 36, 1, 2.00, '123456', '2024-04-28 11:31:17', '2024-04-28 11:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `checkins`
--

CREATE TABLE `checkins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkins`
--

INSERT INTO `checkins` (`id`, `user_id`, `date`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, '2024-01-30', 5.00, 'active', '2024-01-30 02:30:43', '2024-01-30 02:30:43'),
(2, 21, '2024-01-31', 5.00, 'active', '2024-01-31 03:39:09', '2024-01-31 03:39:09'),
(3, 21, '2024-02-04', 5.00, 'active', '2024-02-04 15:29:05', '2024-02-04 15:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `token` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commissions`
--

INSERT INTO `commissions` (`id`, `user_id`, `task_id`, `amount`, `date`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:12:54', '2023-12-29 10:12:54'),
(2, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:12:59', '2023-12-29 10:12:59'),
(3, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:00', '2023-12-29 10:13:00'),
(4, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:04', '2023-12-29 10:13:04'),
(5, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:08', '2023-12-29 10:13:08'),
(6, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:13', '2023-12-29 10:13:13'),
(7, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:16', '2023-12-29 10:13:16'),
(8, 16, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 10:13:19', '2023-12-29 10:13:19'),
(9, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:29', '2023-12-29 12:12:29'),
(10, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:33', '2023-12-29 12:12:33'),
(11, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:36', '2023-12-29 12:12:36'),
(12, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:39', '2023-12-29 12:12:39'),
(13, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:43', '2023-12-29 12:12:43'),
(14, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:46', '2023-12-29 12:12:46'),
(15, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:48', '2023-12-29 12:12:48'),
(16, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:52', '2023-12-29 12:12:52'),
(17, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:54', '2023-12-29 12:12:54'),
(18, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:57', '2023-12-29 12:12:57'),
(19, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:12:59', '2023-12-29 12:12:59'),
(20, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:13:02', '2023-12-29 12:13:02'),
(21, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:13:04', '2023-12-29 12:13:04'),
(22, 19, 1, 21.00, '2023-12-29', 'active', '2023-12-16', '2023-12-29 12:13:07', '2023-12-29 12:13:07'),
(23, 16, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 07:35:16', '2023-12-30 07:35:16'),
(24, 19, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 11:30:52', '2023-12-30 11:30:52'),
(25, 19, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 11:30:56', '2023-12-30 11:30:56'),
(26, 19, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 11:30:59', '2023-12-30 11:30:59'),
(27, 16, 1, 21.00, '2023-12-30', 'active', '2023-12-30', '2023-12-30 12:01:44', '2023-12-30 12:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `method_name` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL COMMENT 'User Number',
  `amount` varchar(255) NOT NULL COMMENT 'User Deposit Amount',
  `charge_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `final_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) NOT NULL,
  `feedback` text DEFAULT NULL,
  `status` enum('pending','rejected','approved') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `user_id`, `method_name`, `order_id`, `transaction_id`, `photo`, `number`, `amount`, `charge_amount`, `final_amount`, `date`, `feedback`, `status`, `created_at`, `updated_at`) VALUES
(1, 21, 'USDT', '47844', '1010', '/public/upload/payment/1714245756VgP.png', NULL, '6000', 0.00, 6000.00, '28-04-2024 01:22:36', 'approved by admin', 'approved', '2024-04-28 00:22:36', '2024-04-28 00:24:53'),
(2, 21, 'USDT', '86174', '10101010', '/public/upload/payment/1714245778iEh.png', NULL, '6000', 0.00, 6000.00, '28-04-2024 01:22:58', 'approved by admin', 'approved', '2024-04-28 00:22:58', '2024-04-28 00:23:31'),
(3, 36, 'STSR', '50736', 'BDN3ST2IYH', '/public/upload/payment/1714285916PmO.png', NULL, '25000', 0.00, 25000.00, '28-04-2024 12:31:56', 'approved by admin', 'approved', '2024-04-28 11:31:56', '2024-04-28 11:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lucky_ledgers`
--

CREATE TABLE `lucky_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `draw_id` bigint(20) DEFAULT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `current_date` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_16_074227_create_admins_table', 1),
(6, '2023_03_17_123007_create_packages_table', 2),
(8, '2023_03_27_103153_create_payment_methods_table', 3),
(10, '2023_03_28_074201_create_deposits_table', 4),
(11, '2023_03_28_142734_create_user_ledgers_table', 5),
(12, '2023_03_28_142802_create_admin_ledgers_table', 6),
(13, '2023_03_30_071745_create_vip_sliders_table', 7),
(14, '2023_03_30_150139_create_settings_table', 8),
(15, '2023_04_01_185541_create_bonuses_table', 9),
(16, '2023_04_01_205009_create_bonus_ledgers_table', 10),
(17, '2023_04_05_203304_create_purchases_table', 11),
(18, '2023_04_09_200835_create_minings_table', 12),
(19, '2023_05_05_092841_create_drows_table', 13),
(20, '2023_05_05_111428_create_lucky_ledgers_table', 14),
(21, '2023_05_05_161904_create_icons_table', 15),
(22, '2023_05_09_214610_create_hiru_notices_table', 16),
(23, '2023_06_06_210226_create_funds_table', 17),
(24, '2023_06_06_222047_create_fund_invests_table', 18),
(25, '2023_06_11_113547_create_checkins_table', 19),
(26, '2023_06_23_193458_create_improvments_table', 20),
(27, '2023_06_24_083626_create_commissions_table', 21),
(28, '2023_12_14_221116_create_tasks_table', 22),
(29, '2024_01_31_034808_create_rebates_table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `tab` enum('vip','fixed','event') NOT NULL DEFAULT 'vip',
  `label` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `validity` varchar(255) NOT NULL COMMENT 'count days',
  `commission_with_avg_amount` double NOT NULL DEFAULT 0 COMMENT 'user get average amount after validity',
  `ref1` double(20,2) NOT NULL DEFAULT 0.00,
  `ref2` double(20,2) NOT NULL DEFAULT 0.00,
  `ref3` double(20,2) NOT NULL DEFAULT 0.00,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `is_default` enum('1','0') NOT NULL DEFAULT '0',
  `desc` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_id`, `tab`, `label`, `name`, `photo`, `price`, `validity`, `commission_with_avg_amount`, `ref1`, `ref2`, `ref3`, `status`, `is_default`, `desc`, `created_at`, `updated_at`) VALUES
(2, NULL, 'vip', 'VIP 1', 'Oil Heat Exchanger', '/public/upload/package/1714225453rUI.jpg', 100, '30', 135, 3.00, 2.00, 1.00, 'active', '0', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,', '2023-03-17 09:53:32', '2024-04-28 10:30:33'),
(4, NULL, 'vip', 'VIP 2', 'Oil drilling platform', '/public/upload/package/1714282316Rtk.jpg', 250, '50', 370, 3.00, 2.00, 1.00, 'active', '0', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,', '2023-04-08 09:46:00', '2024-04-28 10:31:57'),
(13, NULL, 'vip', 'VIP 3', 'Oil rigs', '/public/upload/package/1714282519S20.jpeg', 500, '50', 690, 3.00, 2.00, 1.00, 'active', '0', NULL, '2023-11-02 11:16:42', '2024-04-28 10:35:19'),
(25, 2, 'fixed', 'Fixed VIP1', 'Under VIP1', '/public/upload/package/1714225498mef.jpg', 1000, '1000', 10000, 0.00, 0.00, 0.00, 'active', '0', NULL, '2024-02-20 02:46:02', '2024-04-27 18:44:58'),
(26, 2, 'fixed', 'Fixed VIP 2', 'Under VIP1', '/public/upload/package/1714225491qxe.jpg', 1000, '100', 10000, 0.00, 0.00, 0.00, 'active', '0', NULL, '2024-02-20 02:47:29', '2024-04-27 18:44:51'),
(27, 4, 'fixed', 'Fixed Vip 3', 'Under VIP 2', '/public/upload/package/1714225514udN.jpg', 1000, '10', 10000, 0.00, 0.00, 0.00, 'active', '0', NULL, '2024-02-20 02:50:33', '2024-04-27 18:45:15'),
(28, 13, 'fixed', 'VIP 4', 'Under VIP 3', '/public/upload/package/1714225507Wc1.jpg', 1000, '1000', 10000, 0.00, 0.00, 0.00, 'active', '0', NULL, '2024-02-20 02:52:12', '2024-04-27 18:45:07'),
(29, 2, 'event', 'VIP 1', 'Event VIP', '/public/upload/package/1714283547H9X.jpg', 1000, '20', 100000, 0.00, 0.00, 0.00, 'active', '0', NULL, '2024-02-20 02:53:32', '2024-04-28 10:52:28'),
(30, 4, 'event', 'VIP 2', 'Under VIP 2', '/public/upload/package/1714283574KCD.jpg', 2000, '200', 20000, 0.00, 0.00, 0.00, 'active', '0', NULL, '2024-02-20 03:04:07', '2024-04-28 10:52:54'),
(31, NULL, 'vip', 'Oil Heat Exchanger', 'Oil Heat Exchanger', '/public/upload/package/17142834241KK.png', 800, '60', 1111, 3.00, 2.00, 1.00, 'active', '0', NULL, '2024-04-28 10:39:12', '2024-04-28 10:50:25'),
(32, NULL, 'vip', 'Global Wind Power', 'Global Wind Power', '/public/upload/package/1714283160B7w.jpg', 1000, '60', 1200, 3.00, 2.00, 1.00, 'active', '0', NULL, '2024-04-28 10:46:00', '2024-04-28 10:46:00'),
(33, NULL, 'vip', 'Renewable Energy', 'Renewable Energy', '/public/upload/package/1714283279osJ.jpg', 1500, '60', 2100, 3.00, 2.00, 1.00, 'active', '0', NULL, '2024-04-28 10:46:14', '2024-04-28 10:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `photo`, `address`, `status`, `created_at`, `updated_at`) VALUES
(32, 'USDT', '/public/upload/setting/1714242234PPN.png', '81&oq=usdt+i&gs_lcrp=EgZjaHJv', 'active', '2023-07-05 07:44:20', '2024-04-27 23:24:47'),
(33, 'STSR', '/public/upload/setting/17142422425b1.png', '81&oq=usdt+i&gs_lcrp=EgZjaHJv', 'active', '2023-07-05 20:17:41', '2024-04-27 23:24:51');

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
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tab` varchar(20) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `daily_income` double(20,2) NOT NULL DEFAULT 0.00,
  `hourly` decimal(20,4) NOT NULL DEFAULT 0.0000,
  `return_total` double(20,2) NOT NULL DEFAULT 0.00,
  `date` varchar(255) NOT NULL,
  `note` text DEFAULT NULL,
  `status` enum('active','inactive','pending') NOT NULL DEFAULT 'pending',
  `validity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `tab`, `user_id`, `package_id`, `amount`, `daily_income`, `hourly`, `return_total`, `date`, `note`, `status`, `validity`, `created_at`, `updated_at`) VALUES
(1, 'vip', 36, 33, 1500, 35.00, 1.4583, 2100.00, '2024-04-29 12:36:24', NULL, 'active', '2024-06-27 12:36:24', '2024-04-28 11:36:24', '2024-04-28 11:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `rebates`
--

CREATE TABLE `rebates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `interest_commission1` double NOT NULL,
  `interest_commission2` double NOT NULL,
  `interest_commission3` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rebates`
--

INSERT INTO `rebates` (`id`, `interest_commission1`, `interest_commission2`, `interest_commission3`, `created_at`, `updated_at`) VALUES
(1, 6, 3, 1, NULL, '2024-02-06 03:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `withdraw_charge` int(11) NOT NULL DEFAULT 0 COMMENT 'percent',
  `minimum_withdraw` double(20,2) NOT NULL DEFAULT 0.00,
  `maximum_withdraw` double(20,2) NOT NULL DEFAULT 0.00,
  `w_time_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `checkin` double(20,2) NOT NULL DEFAULT 0.00,
  `registration_bonus` double(20,2) NOT NULL DEFAULT 0.00,
  `total_member_register_reword` int(11) NOT NULL DEFAULT 0,
  `total_member_register_reword_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `telegram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `withdraw_charge`, `minimum_withdraw`, `maximum_withdraw`, `w_time_status`, `checkin`, `registration_bonus`, `total_member_register_reword`, `total_member_register_reword_amount`, `created_at`, `updated_at`, `telegram`) VALUES
(1, 5, 200.00, 25000.00, 'active', 5.00, 0.00, 0, 0.00, '2022-01-18 11:03:22', '2024-04-28 10:25:31', 'https://t.me/profelartech');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_by` varchar(255) DEFAULT NULL,
  `ref_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `phone_code` varchar(20) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `package_tab` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `balance` double(20,2) NOT NULL DEFAULT 0.00,
  `deposit_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `receive_able_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `checkin` double(20,2) NOT NULL DEFAULT 0.00,
  `reword_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `invest_cumulative_balance_received` double(20,2) NOT NULL DEFAULT 0.00,
  `invest_cumulative_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `interest_cumulative_balance_received` double(20,2) NOT NULL DEFAULT 0.00,
  `interest_cumulative_balance` double(20,2) NOT NULL DEFAULT 0.00,
  `photo` varchar(255) DEFAULT NULL,
  `gateway_method` varchar(50) DEFAULT NULL,
  `gateway_number` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `ban_unban` enum('ban','unban') NOT NULL DEFAULT 'unban',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ref_by`, `ref_id`, `name`, `realname`, `phone_code`, `phone`, `ip`, `username`, `package_tab`, `email`, `email_verified_at`, `password`, `type`, `balance`, `deposit_balance`, `receive_able_amount`, `checkin`, `reword_balance`, `invest_cumulative_balance_received`, `invest_cumulative_balance`, `interest_cumulative_balance_received`, `interest_cumulative_balance`, `photo`, `gateway_method`, `gateway_number`, `remember_token`, `status`, `ban_unban`, `created_at`, `updated_at`) VALUES
(1, NULL, 'CLR', 'sdsdsd', NULL, '210', '020202022', '2020220', 'dfdfdf', NULL, 'dfdfd@gmail.com', '2023-11-29 18:37:08', 'sdsdsd', NULL, 171.51, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', NULL, '2024-01-05 01:19:54'),
(21, 'TD-01210PR-2', '143psuv688', 'MP DevTo', NULL, '+880', '1933690444', '::1', 'uname1933690444', 'event', 'user184771704395994@gmail.com', NULL, '$2y$10$hwYKewptQbB4E5JfSIptuOVgLs96BTBNtNRr7mGT.OH04Mh21XcHG', NULL, 4500.00, 13000.00, 0.00, 5.00, 0.00, 175.00, 0.00, 10.10, 0.00, NULL, 'USDT', 'as', NULL, 'active', 'unban', '2024-01-05 01:19:54', '2024-04-28 00:24:53'),
(26, '143psuv688', 'bx2661o39', 'User30', NULL, '+880', '193369044477', '::1', 'uname193369044477', NULL, 'user382761706738560@gmail.com', NULL, '$2y$10$pbKwMZSRSUkcX2tmVb9VheX7I2gssRfJzlrT8SmvQaXxjMjZhNA.S', NULL, 3650.00, 0.00, 510.00, 5.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-02-01 04:02:40', '2024-02-05 17:57:26'),
(27, '143psuv688', 'yp6486m18', 'User34', NULL, '+880', '1933690444889', '::1', 'uname1933690444889', NULL, 'user610601706738772@gmail.com', NULL, '$2y$10$TLKpcKVR6Xrlw5CQ71wxY..Hsv/976Jad.6I4Ny4/iuF8v3hFDivu', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-02-01 04:06:12', '2024-02-01 04:06:12'),
(28, '143psuv688', 'zz422814ch', 'User94', NULL, '+880', '1933690444323', '::1', 'uname1933690444323', NULL, 'user516171706738840@gmail.com', NULL, '$2y$10$ABRAumsukHwOdSk5K4Mz.OCvHFqRIH/8vO.oauXRJI.2OWqEU/Vwq', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-02-01 04:07:21', '2024-02-01 04:07:21'),
(29, '143psuv688', 'z5308274tc', 'User46', NULL, '+880', '0193369044430', '::1', 'uname0193369044430', NULL, 'user927221706738904@gmail.com', NULL, '$2y$10$am21K6yCAUdX3ecXnpKqjO7NLbbLMUC9oQKqO1Tdpu0VsvY2WLYjW', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-02-01 04:08:24', '2024-02-01 04:08:24'),
(30, '80093914', 'oz395mi79', 'nayem', NULL, '+880', '1726008406', '2400:c600:343c:5a39:1:0:e0aa:4e7d', 'uname1726008406', NULL, 'user892621707138696@gmail.com', NULL, '$2y$10$1t.JuxZxxeM6neUG3MXnSOE26RNKLK.btdyNl/BYsye3XeokAPPwe', NULL, 9975990.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 'nagad', '01726008406', NULL, 'active', 'unban', '2024-02-05 19:11:36', '2024-02-07 00:11:16'),
(31, 'xbh4vgjnzv6rdhp', '613lgup744', 'User27', NULL, '+880', '01600201020', '::1', 'uname01600201020', NULL, 'user777071708243293@gmail.com', NULL, '$2y$10$4oDbSYrk9aE.dmyO.fICk.TSgmlZW7umzMe2sK3rrr71EXhh75uEu', NULL, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-02-18 14:01:33', '2024-02-18 14:01:33'),
(32, '90608316', '0o741294e8', 'User56', NULL, '+880', '193369044410', '::1', 'uname193369044410', NULL, 'user504851714227833@gmail.com', NULL, '$2y$10$qxyowFTzx9TvfmImU25Pn.NbunxXNm0aKVFd/zGy2uArWjETDgWSC', NULL, 0.00, 32.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-04-27 19:23:53', '2024-04-27 19:23:53'),
(33, '82084695', '590v8297uz', 'User23', NULL, '+880', '0150210074', '::1', 'uname0150210074', NULL, 'user739201714241028@gmail.com', NULL, '$2y$10$RlhSfEOVpCpnVHRReMk6yuGYImYWjSPtFzwY7XhtZOB4s.hPO4XJy', NULL, 0.00, 32.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-04-27 23:03:48', '2024-04-27 23:03:48'),
(34, '95366616', '888vi424cm', 'User47', NULL, '+880', '1546466466', '103.111.226.89', 'uname1546466466', NULL, 'user773231714247135@gmail.com', NULL, '$2y$10$oXcbt8ykR/ANMxCzrvJuN.wwDka4nCedkgPgiet7FAO6ylCYSuc9C', NULL, 0.00, 32.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-04-28 00:45:36', '2024-04-28 00:45:36'),
(35, '31143584', 's4723hw291', 'User78', NULL, '+880', '15646565622', '103.111.226.89', 'uname15646565622', NULL, 'user636911714250331@gmail.com', NULL, '$2y$10$67H7IhkKitnZXVAqbSODuec94iyFUYX5wxz1ChmxRqQpd0lmlRS7C', NULL, 0.00, 32.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-04-28 01:38:52', '2024-04-28 01:38:52'),
(36, '1912593', '520xbp4865', 'yesuntech', NULL, '+880', '1255555', '103.111.226.89', 'uname1255555', 'vip', 'user930111714281682@gmail.com', NULL, '$2y$10$K6txtgCMyCeg7ys35HtQcecq.R2rEdzYaO2HnAyyZu2EnbkY1rXFi', NULL, 0.00, 23534.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, 'STSR', 'TTG5vgtuvVQEFJApxT5vJ9KzY9XxDo64Eo', NULL, 'active', 'unban', '2024-04-28 10:21:22', '2024-04-28 11:36:24'),
(37, '520xbp4865', '385pjnp569', 'User66', NULL, '+880', '2845464555', '103.111.226.89', 'uname2845464555', NULL, 'user766531714285105@gmail.com', NULL, '$2y$10$ZmPvU4CSXvpq7UBkXPkCUOhig/IZPbnOZZhvCFNNy9qhNwcPx5esW', NULL, 0.00, 32.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-04-28 11:18:26', '2024-04-28 11:18:26'),
(38, '27235830', '197ki2941n', 'User77', NULL, '+880', '12555555', '103.111.226.89', 'uname12555555', NULL, 'user498501714286284@gmail.com', NULL, '$2y$10$fSGfJzCxI6qWATfqfkKNFeaeUOC9xQYb6230JKGGKhyx7mNcpDZNu', NULL, 0.00, 32.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, NULL, NULL, NULL, NULL, 'active', 'unban', '2024-04-28 11:38:04', '2024-04-28 11:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_ledgers`
--

CREATE TABLE `user_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `get_balance_from_user_id` bigint(20) DEFAULT NULL,
  `reason` varchar(255) NOT NULL,
  `perticulation` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 0,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected','default') NOT NULL DEFAULT 'default',
  `date` varchar(255) DEFAULT NULL,
  `step` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_ledgers`
--

INSERT INTO `user_ledgers` (`id`, `user_id`, `get_balance_from_user_id`, `reason`, `perticulation`, `amount`, `debit`, `credit`, `status`, `date`, `step`, `created_at`, `updated_at`) VALUES
(1, 21, NULL, 'withdraw_request', 'withdraw request status is pending', 500, 475, 0, 'pending', '28-04-2024 01:09', NULL, '2024-04-28 00:09:52', '2024-04-28 00:09:52'),
(2, 21, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our BITLA', 6000, 6000, 0, 'approved', '28-04-2024 01:23', NULL, '2024-04-28 00:23:31', '2024-04-28 00:23:31'),
(3, 21, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our BITLA', 6000, 6000, 0, 'approved', '28-04-2024 01:24', NULL, '2024-04-28 00:24:53', '2024-04-28 00:24:53'),
(4, 36, NULL, 'Claim', 'Congratulations User85 you are successfully get your bonus.', 2, 2, 0, 'approved', '28-04-2024 12:31', NULL, '2024-04-28 11:31:17', '2024-04-28 11:31:17'),
(5, 36, NULL, 'payment_approved', 'Your payment already approved. thanks for invest in our Hello Coder', 25000, 25000, 0, 'approved', '28-04-2024 12:35', NULL, '2024-04-28 11:35:57', '2024-04-28 11:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `vip_sliders`
--

CREATE TABLE `vip_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `page_type` enum('home_page','vip_page') NOT NULL DEFAULT 'home_page',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vip_sliders`
--

INSERT INTO `vip_sliders` (`id`, `photo`, `status`, `page_type`, `created_at`, `updated_at`) VALUES
(11, '/public/upload/slider/1688711605xsK.jpg', 'active', 'home_page', '2023-07-05 01:06:16', '2023-07-07 04:33:25'),
(12, '/public/upload/slider/1688711639ObA.jpg', 'active', 'home_page', '2023-07-05 01:06:35', '2023-07-07 04:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `method_name` varchar(255) DEFAULT NULL,
  `oid` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `currency` varchar(40) NOT NULL,
  `rate` decimal(20,2) NOT NULL DEFAULT 0.00,
  `charge` decimal(20,2) NOT NULL DEFAULT 0.00,
  `trx` varchar(40) DEFAULT NULL,
  `final_amount` decimal(20,2) NOT NULL DEFAULT 0.00,
  `after_charge` decimal(20,2) NOT NULL DEFAULT 0.00,
  `withdraw_information` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending' COMMENT '1=>success, 2=>pending, 3=>cancel,  ',
  `admin_feedback` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `method_name`, `oid`, `number`, `amount`, `currency`, `rate`, `charge`, `trx`, `final_amount`, `after_charge`, `withdraw_information`, `status`, `admin_feedback`, `created_at`, `updated_at`) VALUES
(1, 21, 'USDT', 'W-36658018652764470', 'as', 500.00, 'Bangladesh', 0.00, 25.00, NULL, 475.00, 0.00, NULL, 'pending', NULL, '2024-04-28 00:09:52', '2024-04-28 00:09:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_ledgers`
--
ALTER TABLE `admin_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonuses`
--
ALTER TABLE `bonuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bonus_ledgers`
--
ALTER TABLE `bonus_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkins_user_id_foreign` (`user_id`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lucky_ledgers_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`),
  ADD KEY `purchases_package_id_foreign` (`package_id`);

--
-- Indexes for table `rebates`
--
ALTER TABLE `rebates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_ledgers`
--
ALTER TABLE `user_ledgers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vip_sliders`
--
ALTER TABLE `vip_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_ledgers`
--
ALTER TABLE `admin_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bonuses`
--
ALTER TABLE `bonuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bonus_ledgers`
--
ALTER TABLE `bonus_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rebates`
--
ALTER TABLE `rebates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_ledgers`
--
ALTER TABLE `user_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vip_sliders`
--
ALTER TABLE `vip_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkins`
--
ALTER TABLE `checkins`
  ADD CONSTRAINT `checkins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `lucky_ledgers`
--
ALTER TABLE `lucky_ledgers`
  ADD CONSTRAINT `lucky_ledgers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
