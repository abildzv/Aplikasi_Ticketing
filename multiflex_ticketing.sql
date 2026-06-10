-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2026 at 06:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiflex_ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `schedule_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_ticket` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `movie_id` bigint(20) DEFAULT NULL,
  `seats` text DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `schedule_id`, `total_ticket`, `total_price`, `created_at`, `updated_at`, `movie_id`, `seats`, `payment_method`, `status`) VALUES
(5, 3, NULL, 2, 100000, '2026-06-09 04:45:52', '2026-06-09 19:00:37', 7, 'C4,C5', 'offline', 'paid'),
(9, 2, NULL, 2, 100000, '2026-06-09 05:18:17', '2026-06-09 05:21:06', 7, 'C4,C5', 'offline', 'paid'),
(10, 3, NULL, 2, 70000, '2026-06-09 18:54:12', '2026-06-09 18:58:49', 11, 'B4,B5', 'bank', 'paid'),
(11, 3, NULL, 2, 70000, '2026-06-09 19:00:54', '2026-06-09 19:13:17', 13, 'B4,B5', 'offline', 'paid'),
(12, 3, NULL, 2, 202000, '2026-06-09 19:13:35', '2026-06-09 19:14:03', 8, 'E4,E5', 'bank', 'paid'),
(15, 3, NULL, 2, 72000, '2026-06-09 19:52:47', '2026-06-09 19:53:05', 7, 'A4,A5', 'bank', 'paid'),
(16, 3, NULL, 1, 37000, '2026-06-09 19:55:06', '2026-06-09 19:55:26', 12, 'B4', 'bank', 'paid');

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
(1, '2026_05_25_092340_create_users_table', 1),
(2, '2026_05_25_092404_create_movies_table', 1),
(3, '2026_05_25_092425_create_schedules_table', 1),
(4, '2026_05_25_092501_create_bookings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `genre`, `duration`, `poster`, `release_date`, `created_at`, `updated_at`) VALUES
(7, 'Hoppers', 'hfjgvhbnki', 'Science Fiction', '104', 'movies/h1VhXqYGSW73c0qnLelVqeLzPJdloUPUIZaUxknF.jpg', '2026-03-04', '2026-06-08 19:14:15', '2026-06-08 19:14:15'),
(8, 'The Super Mario Galaxy', 'ergfvc', 'Computer Animation', '98', 'movies/793iOS6WLl6vRb1El9F58DiJWt9S7Sm77o1wetFS.jpg', '2026-04-01', '2026-06-08 19:17:49', '2026-06-08 19:17:49'),
(9, 'Spiderman Brand New Day', 't3evfetrf', 'Action', '60', 'movies/ubRj7TQHWNKGP88P431V7cHq2Z3fs5A7H2wND7b1.jpg', '2026-07-31', '2026-06-08 19:19:42', '2026-06-08 19:19:42'),
(11, 'Final Destination Bloodlines', 'bagus', 'Horror', '100', 'movies/GMl5zmoKasMDD82ysIZWhv3whMm67EIx2Gf9Jqze.jpg', '2026-05-16', '2026-06-09 05:42:36', '2026-06-09 05:42:36'),
(12, 'Scream 7', 'bagus', 'Horror', '104', 'movies/E8pKSaCmY8UAz8brfAmOJthv0QqoweAGWnVw6OmM.jpg', '2026-02-27', '2026-06-09 05:44:08', '2026-06-09 06:29:35'),
(13, 'Thrash', 'bagus', 'Horror', '86', 'movies/HTVy1W7TPY7exnOgFxQfdBX7IoTyR1eAYm5ljTBl.jpg', '2026-04-10', '2026-06-09 05:45:08', '2026-06-09 05:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `show_date` date NOT NULL,
  `show_time` time NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(2, 'Sabillatuzzakiya', 'sabilla@gmail.com', '$2y$12$c.fUo4Xvf5WJuvfPmbaq5OXeQavzFJu6NGAoM0VDi4csc8DLURkLG', 'user', '2026-05-25 17:23:23', '2026-05-25 17:23:23'),
(3, 'sukuna', 'sukuna@gmail.com', '$2y$12$PlW3DSAlQw4/nk.tvy9S/uhaIWHSib7lBovWoKbwJek1xi3yFJyDi', 'user', '2026-05-25 20:45:33', '2026-05-25 20:45:33'),
(4, 'Zulfa', 'zulfaasoy@gmail.com', '$2y$12$aGXXqNlUZitwX9EX1/7VNu2X0YoNDLMRb.4C1vXnUfF2xibWJ5Sjy', 'user', '2026-06-09 19:16:56', '2026-06-09 19:16:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_schedule_id_foreign` (`schedule_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_movie_id_foreign` (`movie_id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_schedule_id_foreign` FOREIGN KEY (`schedule_id`) REFERENCES `schedules` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
