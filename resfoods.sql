-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 04:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resfoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(5, 'specials', 'public/categories/y42YXlW7cRroIaS0iIVD6dJXW0a9IVhkT8mtlZgj.jpg', 'specials of today', '2023-11-01 11:54:21', '2023-11-01 11:54:21'),
(6, 'Soup', 'public/categories/lpHel7QhxuY2gmkr8PhtbAudXHUrPOFQ2H2ttMc7.jpg', 'Made by combining ingredients of meat or vegetables with stock, milk, or water.', '2023-11-02 09:51:19', '2023-11-02 09:57:42'),
(7, 'Salad', 'public/categories/S02E1FewaxxgxvCKWqTtZSsuIOEV7bVXKT2jKjHf.jpg', 'A dish consisting of mixed ingredients, frequently vegetables', '2023-11-02 09:59:27', '2023-11-02 09:59:27'),
(8, 'Appetizers', 'public/categories/7V2Jdv2fMO1GLxUAktBSycXDEYWG5jPoHZpu1QcB.jpg', 'Asmall dish of food or a drink taken before a meal to stimulate one\'s appetite.', '2023-11-02 10:01:22', '2023-11-02 10:01:44'),
(9, 'Sandwich', 'public/categories/d9fVkknRamtc7rm4XKbmL3fIHjziCBm1APJe890W.jpg', 'A food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread', '2023-11-02 10:04:15', '2023-11-02 10:04:15'),
(10, 'Pasta', 'public/categories/oGsycvk2uToidOHYTM2KHX6mhhX8U3s0ZPuHy8e7.jpg', 'A collective name for a category of food made from wheat flour and water, sometimes with egg.', '2023-11-02 10:06:19', '2023-11-02 10:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`category_id`, `menu_id`) VALUES
(6, 7),
(6, 8),
(6, 9),
(7, 10),
(7, 11),
(7, 12),
(7, 13),
(8, 14),
(8, 15),
(8, 16),
(9, 17),
(9, 18),
(10, 19),
(10, 20),
(5, 21),
(5, 22),
(5, 23),
(5, 24);

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
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(7, 'Mushroom Soup', 'A warm bowl of soup so deliciously creamy with tender bites of mushroom pieces.', 'public/menus/KoktX9rvUONoT915u7J5To0HBAOdEIeSzM2iAxY3.jpg', 45.00, '2023-11-02 12:21:21', '2023-11-02 12:21:56'),
(8, 'Spinach & Broccoli Soup', 'A healthy, ultra-creamy soup made with broccoli, spinach, and cheese.', 'public/menus/yLRvlOqeUpSgvJp3Vc4JthXVvJOnowYwz06uFdW3.jpg', 30.00, '2023-11-02 12:25:44', '2023-11-02 12:26:29'),
(9, 'Tomato Cream Soup', 'This homemade tomato soup is great to serve on its own or as a starter to a meal.', 'public/menus/8fykDcSCunnXcC4oTe361mbD450OUF1uhEDMD0Wk.jpg', 90.00, '2023-11-02 12:28:28', '2023-11-02 12:28:49'),
(10, 'Chicken Caesar Salad', 'A combo of Romaine lettuce, chicken, French bread, parmesan cheese', 'public/menus/my9uDSePF2suWebUemtqa04Kp3Myug8uC2qH9Srr.jpg', 160.00, '2023-11-02 12:31:35', '2023-11-02 12:32:19'),
(11, 'Pork Belly Salad w/ Hoisin Vinaigrette', 'pork belly is sweet, salty, and perfectly tender', 'public/menus/dqS4NaVdNerNqilXlTwLkf57EkPOZQbDtg0HKqtX.jpg', 190.00, '2023-11-02 12:36:17', '2023-11-02 12:36:17'),
(12, 'Tuna Salad w/ Raspberry Vinaigrette', 'Indulge in sesame-crusted tuna steaks seared to perfection', 'public/menus/EXZoKktlRWXGIEfGkakd5H7TrYDrgA7JzKE54gbl.jpg', 200.00, '2023-11-02 12:37:58', '2023-11-02 12:37:58'),
(13, 'cheese quesadilla', 'Shredded cheese adds all the cheesy flavor!', 'public/menus/9CnhBz4Il8xQvo89XAe1axsWLWLBZOLxVsHNWxKE.jpg', 250.00, '2023-11-02 12:40:33', '2023-11-02 12:40:33'),
(14, 'Cheese quesadilla', 'Shredded cheese adds all the cheesy flavor!', 'public/menus/etLuRMvpXYY2bZB1djgikxImENQRR9iSJ2CBQv5p.jpg', 140.00, '2023-11-02 12:45:23', '2023-11-02 12:45:23'),
(15, 'Chicken & Cheese Flautas', 'Chicken & Cheese Flautas', 'public/menus/aCsSVACV9aROO8W8s0Q2Ds8WbIKS4NZHPDQ7Sm2M.jpg', 130.00, '2023-11-02 12:49:08', '2023-11-02 12:49:08'),
(16, 'Chicken Fingers', 'Chicken meat dipped in breading and then deep-fried, grilled or baked', 'public/menus/YCz7utkU0ij9dRHm9OwAMKapNW7FAYcE0WK4qZrU.jpg', 139.00, '2023-11-02 12:51:03', '2023-11-02 12:51:03'),
(17, 'Grilled Cheese Sandwich', 'A grilled cheese is a hot cheese sandwich typically prepared by heating slices of cheese', 'public/menus/132r5AqhuMw4VnntJI4ZUe4A8PQPIFtSY1lnqPI0.jpg', 190.00, '2023-11-02 12:59:55', '2023-11-02 12:59:55'),
(18, 'Grilled Strawberry Brie', 'This Grilled Brie Appetizer with Balsamic Strawberries is the perfect, ridiculously easy appetizer!', 'public/menus/KVoZ83E1csgrlYVsh2ISFJk1srJJYsY6KPQReRBQ.jpg', 230.00, '2023-11-02 13:02:57', '2023-11-02 13:02:57'),
(19, 'Baked Ziti', 'classic Italian-American comfort food! Bake ziti pasta with sausage, tomato sauce', 'public/menus/zcIg9DpPhMybb8aZq2JP1vAbybzoei8fpxeR5h53.jpg', 150.00, '2023-11-02 13:04:28', '2023-11-02 13:04:28'),
(20, 'Seafood Pasta in Cream', 'Shrimp, pasta, white wine, calamari tubes, mussel meat', 'public/menus/VuEv9WnjoNrtXeZS29nwW4DYsCUSxvVtkXeNBam4.jpg', 280.00, '2023-11-02 13:06:21', '2023-11-02 13:06:21'),
(21, '4 Cheese and Bacon Pot Pie', 'Savor the golden, flaky, made-from-scratch crust filled with chicken', 'public/menus/ln1btD2aX11oZUqLF6HlehIUxz9WQYuia1K6KoQ3.jpg', 300.00, '2023-11-02 13:08:03', '2023-11-02 13:11:25'),
(22, 'Chicken Ranch Pot Pie', 'a homemade ranch spice blend and the flakiest top crust ever.', 'public/menus/E4NfQE15RZSDVsZRsPlVV2oaEsyk7cMXutPwng7h.jpg', 360.00, '2023-11-02 13:10:27', '2023-11-02 13:10:27'),
(23, 'Meatballs Calzone', 'flavorful calzones are made with store-bought pizza dough and meatballs', 'public/menus/mpySxz5lYfT9cn6rm2kivI67u2gxfvcA2YIV8Lu4.jpg', 130.00, '2023-11-02 13:13:01', '2023-11-02 13:13:01'),
(24, 'Seafood Kare-Kare', 'a delicious version of our beloved peanut stew using seafood such as shrimp, crab, mussels, and squid', 'public/menus/nJXeV7rzChZ2N2g9TZkxvjexrDKWu3xwXC7U0x39.jpg', 400.00, '2023-11-02 13:14:52', '2023-11-02 13:14:52');

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
(5, '2023_10_27_100033_create_categories_table', 1),
(6, '2023_10_27_100101_create_menus_table', 1),
(7, '2023_10_27_100115_create_tables_table', 1),
(8, '2023_10_27_100130_create_reservations_table', 1),
(9, '2023_10_29_062352_create_category_menu_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$eg/TPXtPQP8wONl/BYfj.uUxTmLfhm3zJ/ABIa0ZmyvQPBKWSZag2', '2023-11-02 07:13:08');

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel_number` varchar(255) NOT NULL,
  `res_date` datetime NOT NULL,
  `table_id` bigint(20) UNSIGNED NOT NULL,
  `guest_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `email`, `tel_number`, `res_date`, `table_id`, `guest_number`, `created_at`, `updated_at`) VALUES
(3, 'Obert', 'Manyasa', 'omanyasa@yahoo.com', '0779050634', '2023-11-02 17:00:00', 3, 6, '2023-11-01 07:38:53', '2023-11-01 07:59:46'),
(5, 'Obert', 'Manyasa', 'omanyasa@yahoo.com', '0779050634', '2023-11-01 17:34:00', 4, 4, '2023-11-01 11:33:15', '2023-11-01 11:33:15'),
(6, 'Obert', 'Manyasa', 'omanyasa@yahoo.com', '0779050634', '2023-11-02 18:13:00', 4, 2, '2023-11-01 12:10:18', '2023-11-01 12:10:18'),
(7, 'Obert', 'Manyasa', 'omanyasa@yahoo.com', '0779050634', '2023-11-02 18:13:00', 5, 2, '2023-11-01 12:11:55', '2023-11-01 12:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guest_number` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `location` enum('front','inside','outside') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `guest_number`, `status`, `location`, `created_at`, `updated_at`) VALUES
(3, 'table 1', 4, 'available', 'inside', '2023-11-01 07:29:57', '2023-11-01 07:29:57'),
(4, 'table 2', 6, 'available', 'inside', '2023-11-01 07:30:15', '2023-11-01 07:31:40'),
(5, 'table 3', 6, 'available', 'inside', '2023-11-01 12:11:44', '2023-11-01 12:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2023-11-01 06:31:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'y45SYU9U6BENEqgO0eYcrgVMWIhIKmleqXDZwryCWEFnVrhECojeJcFmtVhV', '2023-11-01 06:31:00', '2023-11-01 06:31:00'),
(2, 'Obert Manyasa', 'omanyasa@yahoo.com', NULL, '$2y$10$ROpg0s/48V3VZezhdE2XWOLb.hM.tq1t4jSGktOCo22ia9SpVnYry', 0, 'TyAn1BaUau5ThBbFhdfx3F3AMtqDzYrj1NGspb29nG1gaEBiw7rehvvachk7', '2023-11-02 08:24:41', '2023-11-02 08:24:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD KEY `category_menu_category_id_foreign` (`category_id`),
  ADD KEY `category_menu_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD CONSTRAINT `category_menu_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `category_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
