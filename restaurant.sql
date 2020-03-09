-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 09:19 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`id`, `restaurant_name`, `telephone`, `address`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'DEJA Restaurant', 19013, 'Aswan,Mohafza st 23', 'deja1.jpg', NULL, '2020-03-07 07:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'main-dish', NULL, NULL),
(2, 'appetizers', NULL, NULL),
(3, 'dessert', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `user_message`, `created_at`, `updated_at`) VALUES
(1, 'mona', 'user@gmail.com', 'your meals is really good', 'your meals is really good , I loved the pasta', '2020-03-01 18:07:47', '2020-03-01 18:07:47'),
(2, 'asmaa', 'user@gmail.com', 'your meals is really good', 'your meals is really good,thanks', '2020-03-07 19:18:27', '2020-03-07 19:18:27');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`) VALUES
(1, 'kitchen', NULL, NULL),
(2, 'marketing', NULL, NULL),
(3, 'financing', NULL, NULL),
(4, 'management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dish_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_price` double(8,2) NOT NULL,
  `dish_special` enum('special','regular') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'regular',
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `dish_name`, `dish_image`, `dish_type`, `dish_description`, `dish_price`, `dish_special`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'pancake', '030420201035555e5f848baa2cddessert-1.jpg', 'breakfast', 'pancake- caramel sauce - strawberry', 40.00, 'special', NULL, '2020-02-24 07:40:48', '2020-03-04 08:35:55'),
(2, 'Oatmeal with strawberry', '030420201038405e5f85300bcd1breakfast-8.jpg', 'breakfast', 'oatmeal - milk - strawberry - honey', 20.00, 'regular', NULL, '2020-03-04 07:51:22', '2020-03-04 08:38:40'),
(3, 'Veggies and Eggs', '030420201042445e5f8624ae8febreakfast-4.jpg', 'breakfast', 'veggies - egg - brown bread	', 35.00, 'regular', NULL, '2020-03-04 08:42:44', '2020-03-04 08:42:44'),
(4, 'Grilled Chicken', '030420201043535e5f8669aef1elunch-2.jpg', 'lunch', 'chicken- vegetables', 50.00, 'special', NULL, '2020-03-04 08:43:53', '2020-03-04 08:43:53'),
(5, 'Steak', '030420201044435e5f869b153d6lunch-6.jpg', 'lunch', 'steak- barbecue sauce - vegetables', 100.00, 'regular', NULL, '2020-03-04 08:44:43', '2020-03-04 08:44:43'),
(6, 'Lemon Pepper Salmon', '030420201047125e5f87304c6f9lunch-1.jpg', 'lunch', 'salmon- lemon sauce - vegetables', 65.00, 'regular', NULL, '2020-03-04 08:47:12', '2020-03-04 08:47:12'),
(7, 'Burger', '030420201112205e5f8d145d8b7update1.jpg', 'dinner', 'burger - fried potato - cheese sauce.', 40.00, 'special', NULL, '2020-03-04 09:12:20', '2020-03-04 09:12:20'),
(8, 'pizza', '030420201119495e5f8ed5c9a67seller-6-200x200.png', 'dinner', 'tomatoes - cheese - mushroom - olive', 55.00, 'regular', NULL, '2020-03-04 09:19:49', '2020-03-04 09:19:49'),
(9, 'pasta', '030420201150245e5f96006fec3pasta.jpg', 'dinner', 'pasta- carrots- beans- onions	', 60.00, 'regular', NULL, '2020-03-04 09:24:58', '2020-03-04 09:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` double(8,2) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `salary`, `city`, `street`, `position`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Kariema', 10000.00, 'Aswan', 'Mohafza', 'head-chef', 1, '2020-03-07 07:41:51', '2020-03-07 07:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `employees_phones`
--

CREATE TABLE `employees_phones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` int(11) NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2020_01_25_181103_create_reservations_table', 1),
(8, '2020_02_05_134307_create_reviews_table', 1),
(14, '2020_01_29_114637_create_clients_reservations_table', 4),
(118, '2014_10_12_000000_create_users_table', 5),
(119, '2014_10_12_100000_create_password_resets_table', 5),
(120, '2019_08_19_000000_create_failed_jobs_table', 5),
(121, '2020_01_25_174824_create_basic_info_table', 5),
(122, '2020_01_25_174949_create_departments_table', 5),
(123, '2020_01_25_175253_create_employees_table', 5),
(124, '2020_01_25_175423_create_employees_phones_table', 5),
(125, '2020_01_25_175657_create_categories_table', 5),
(126, '2020_01_25_175759_create_dishes_table', 5),
(128, '2020_01_25_181159_create_tables_table', 5),
(130, '2020_02_05_161343_create_reviews_table', 5),
(131, '2020_02_07_122933_create_reservations_table', 5),
(132, '2020_02_08_122452_create_roles_table', 5),
(133, '2020_02_08_122709_create_user_roles_table', 5),
(134, '2020_02_18_161746_create_contacts_table', 5),
(135, '2020_01_25_180158_create_orders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `payment_method` enum('credit card','cash on delivery') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash on delivery',
  `paid` tinyint(1) NOT NULL DEFAULT 0,
  `net_price` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `first_name`, `last_name`, `phone`, `city`, `street`, `postal_code`, `payment_method`, `paid`, `net_price`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Hossam', 'Hassan', 1112545455, 'Aswan', 'atlas', 99999, 'cash on delivery', 0, 120, 1, '2020-03-06 19:31:45', '2020-03-06 19:31:45'),
(4, 'Menna', 'Emad', 1112545455, 'Aswan', 'Mohafza', 11111, 'cash on delivery', 0, 95, 2, '2020-03-07 11:05:26', '2020-03-07 11:05:26'),
(6, 'Mona', 'Eid', 1155323538, 'Aswan', 'Matar', 55663, 'cash on delivery', 0, 50, 1, '2020-03-07 17:44:03', '2020-03-07 17:44:03'),
(7, 'mona', 'Eid', 1155323538, 'Aswan', 'Matar', 98989, 'cash on delivery', 0, 135, 1, '2020-03-07 17:46:23', '2020-03-07 17:46:23'),
(8, 'Menna', 'Emad', 1155323538, 'Aswan', 'Matar', 99999, 'cash on delivery', 0, 170, 1, '2020-03-07 17:47:59', '2020-03-07 17:47:59'),
(9, 'Mariam', 'Eid', 1155323538, 'Aswan', 'Atlas', 99999, 'cash on delivery', 0, 200, 1, '2020-03-07 17:49:52', '2020-03-07 17:49:53'),
(10, 'ahmed', 'ali', 1112545455, 'Aswan', 'Mohafza', 99911, 'cash on delivery', 0, 145, 1, '2020-03-07 19:09:22', '2020-03-07 19:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `dish_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `dish_id`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 2, 70, '2020-03-06 11:48:38', '2020-03-06 11:48:38'),
(2, 2, 2, 2, 40, '2020-03-06 11:51:16', '2020-03-06 11:51:16'),
(3, 2, 5, 1, 100, '2020-03-06 11:51:16', '2020-03-06 11:51:16'),
(4, 2, 7, 3, 120, '2020-03-06 11:51:16', '2020-03-06 11:51:16'),
(5, 3, 1, 2, 80, '2020-03-06 19:31:45', '2020-03-06 19:31:45'),
(6, 3, 7, 1, 40, '2020-03-06 19:31:45', '2020-03-06 19:31:45'),
(7, 4, 8, 1, 55, '2020-03-07 11:05:26', '2020-03-07 11:05:26'),
(8, 4, 7, 1, 40, '2020-03-07 11:05:26', '2020-03-07 11:05:26'),
(9, 6, 4, 1, 50, '2020-03-07 17:44:03', '2020-03-07 17:44:03'),
(10, 7, 3, 1, 35, '2020-03-07 17:46:23', '2020-03-07 17:46:23'),
(11, 7, 5, 1, 100, '2020-03-07 17:46:23', '2020-03-07 17:46:23'),
(12, 8, 2, 3, 60, '2020-03-07 17:47:59', '2020-03-07 17:47:59'),
(13, 8, 8, 2, 110, '2020-03-07 17:47:59', '2020-03-07 17:47:59'),
(14, 9, 1, 2, 80, '2020-03-07 17:49:53', '2020-03-07 17:49:53'),
(15, 9, 9, 2, 120, '2020-03-07 17:49:53', '2020-03-07 17:49:53'),
(16, 10, 3, 1, 35, '2020-03-07 19:09:23', '2020-03-07 19:09:23'),
(17, 10, 8, 2, 110, '2020-03-07 19:09:23', '2020-03-07 19:09:23'),
(18, 11, 8, 1, 55, '2020-03-08 08:37:36', '2020-03-08 08:37:36'),
(19, 11, 7, 4, 160, '2020-03-08 08:37:36', '2020-03-08 08:37:36'),
(20, 11, 8, 1, 55, '2020-03-08 08:37:36', '2020-03-08 08:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` bigint(20) NOT NULL,
  `guests_number` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_date` datetime DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `table_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `client_phone`, `guests_number`, `comment`, `booking_date`, `user_id`, `table_id`, `created_at`, `updated_at`) VALUES
(1, 'Mona', 'Eid', 112223666, 5, 'birthday', '2020-02-10 00:00:00', 1, NULL, NULL, NULL),
(2, 'aya', 'gebreil', 1235548888, 6, 'birthday', '2020-03-11 00:00:00', 1, NULL, '2020-03-01 18:13:46', '2020-03-01 18:13:46'),
(4, 'Mona', 'Eid', 1235545451, 5, 'wedding', '2020-03-04 00:00:00', 1, NULL, '2020-03-01 18:27:52', '2020-03-01 18:27:52'),
(6, 'mona', 'eid', 1235548888, 6, 'no comment', '2020-03-03 00:00:00', 1, NULL, '2020-03-02 10:04:41', '2020-03-02 10:04:41'),
(8, 'ahmed', 'ahmed', 2001155323538, 5, 'nothing', '2020-03-05 00:00:00', 1, NULL, '2020-03-02 11:37:08', '2020-03-02 11:37:08'),
(9, 'mohamed', 'eid', 201155323538, 4, 'no comment', '2020-03-18 00:00:00', 1, NULL, '2020-03-02 16:46:29', '2020-03-02 16:46:29'),
(11, 'Hossam', 'Hassan', 201155323538, 9, 'just two tables', '2020-03-04 00:00:00', 1, NULL, '2020-03-07 19:26:23', '2020-03-07 19:26:23'),
(12, 'mona', 'eid', 201155323538, 6, 'birthday party', '2020-03-25 00:00:00', 1, NULL, '2020-03-08 08:42:11', '2020-03-08 08:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `subject`, `message`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'mona', 'your meals is really good', 'your meals is really good , I loved the pasta', 1, '2020-03-01 18:03:08', '2020-03-01 18:03:08'),
(2, 'Clara Hudson', 'Cordon Bleu at its best in Aswan', 'Thank you to Ahmed and his team for a wonderful experience for my daughter and I. The service and hospitality were warm and impeccable, and the the dinner from amuse bouche to petit fours was an absolute delight.', 2, '2020-03-05 20:33:47', '2020-03-05 20:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'cashier', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'deja1.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mona', 'user@gmail.com', NULL, '$2y$10$wDwIoNzI7IvS5kJ3AIWUyea.3Zq2WRaBfZ8GJ1ACMl4xb57xAYUca', 'deja1.jpg', NULL, '2020-02-29 12:58:19', '2020-03-07 19:24:14'),
(2, 'mona', 'monaa_eid@hotmail.com', NULL, '$2y$10$Wz.TMadm1II3pPC1Tl7NfevHddmjNtgmvBNX/mJCHMTpLfXlZeoI6', '030620201822275e6294e382c2bIMG_3622.JPG', NULL, '2020-03-05 20:31:56', '2020-03-06 17:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_department_name_unique` (`department_name`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dishes_dish_name_unique` (`dish_name`),
  ADD KEY `dishes_category_id_foreign` (`category_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees_phones`
--
ALTER TABLE `employees_phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_phones_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_table_id_foreign` (`table_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees_phones`
--
ALTER TABLE `employees_phones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `employees_phones`
--
ALTER TABLE `employees_phones`
  ADD CONSTRAINT `employees_phones_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_table_id_foreign` FOREIGN KEY (`table_id`) REFERENCES `tables` (`id`),
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
