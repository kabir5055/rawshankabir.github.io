-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2024 at 10:20 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawshan_kabir`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `about_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_content`, `about_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'I am a passionate Software Engineer with a strong focus on PHP and Laravel, backed by a Bachelor of Science in Computer Science & Engineering. Previously, I worked at Luminous Labs and Qwik IT SERVICE, where I successfully led remote projects and developed scalable web applications using Laravel and PHP frameworks. My internships at ISHRAAK SOLUTION LTD and GRAPH AI LTD helped me build a solid foundation in backend development and effective collaboration in agile environments. I’m excited about the opportunity at Wizard Software & Technology Bangladesh Ltd because I’m drawn to their innovative projects and commitment to using cutting-edge technologies. My adaptability and eagerness for continuous learning make me a valuable asset to any team.', 'adminAsset/about_image/2083482683.jpg', 0, '2024-10-06 14:29:47', '2024-10-06 16:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_24_072713_create_sessions_table', 1),
(7, '2022_12_24_150319_create_abouts_table', 1),
(8, '2022_12_24_170514_create_services_table', 1),
(9, '2022_12_24_193900_create_myworks_table', 1),
(10, '2022_12_25_095702_create_testimonials_table', 1),
(11, '2022_12_25_130548_create_teams_table', 1),
(12, '2022_12_25_184919_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `myworks`
--

CREATE TABLE `myworks` (
  `id` bigint UNSIGNED NOT NULL,
  `mywork_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `myworks`
--

INSERT INTO `myworks` (`id`, `mywork_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'adminAsset/mywork_image/644360122.png', 1, '2024-10-06 15:04:04', '2024-10-06 15:04:11'),
(2, 'adminAsset/mywork_image/1062639951.png', 1, '2024-10-06 15:06:04', '2024-10-06 15:06:14'),
(3, 'adminAsset/mywork_image/1036251751.png', 1, '2024-10-06 15:09:12', '2024-10-06 15:09:15'),
(4, 'adminAsset/mywork_image/1881316894.jpg', 1, '2024-10-06 15:10:30', '2024-10-06 15:11:07'),
(5, 'adminAsset/mywork_image/1703938554.jpg', 1, '2024-10-06 15:10:36', '2024-10-06 15:11:11'),
(6, 'adminAsset/mywork_image/1125294257.jpg', 1, '2024-10-06 15:10:43', '2024-10-06 15:11:14'),
(7, 'adminAsset/mywork_image/41854762.jpg', 1, '2024-10-06 15:10:49', '2024-10-06 15:11:18'),
(8, 'adminAsset/mywork_image/722180223.jpg', 1, '2024-10-06 15:10:57', '2024-10-06 15:11:23'),
(9, 'adminAsset/mywork_image/2133114645.jpg', 1, '2024-10-06 15:11:03', '2024-10-06 15:11:27');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `services_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services_name`, `services_content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Graphic Design', 'Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users’ specific needs and focus on the logic of displaying elements in interactive designs.', 1, '2024-10-06 14:40:42', '2024-10-06 14:40:54'),
(2, 'Web Design', 'We create web site with meaning. Great Web design speaks to your head, and your heart. It makes you feel different, and think differently. It makes you remember, and respond. That’s what we aim for, to go from insight to ideas to design that connects. To craft things with intelligence, sensitivity and the precision.', 1, '2024-10-06 14:41:28', '2024-10-06 14:41:30'),
(3, 'Web Development', 'Web development refers to the creating, building, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management. It is creating an application that works over the internet i.e. websites. It refers to websites, web pages, or anything that works online.', 1, '2024-10-06 14:42:48', '2024-10-06 14:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('9lTjPc6alWA9bVSBeQLmDbgEQsVMRlI8G2GVEuqI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOG9Gb3N2WUNKdDg3NEE0TmRTak1hZTVqNW5adDR6dHFXNlA5a0ExZCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGRRVUN3Sk01YTVuLkVzM04wNktQRk9ScWUzNGJzOG5WZWl0dG1iR3NOZVByUE1sMHpNajVPIjt9', 1728252992);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `facebook`, `linkedIn`, `github`, `twitter`, `category`, `team_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md Rawshan Kabir', 'Software Engineer', 'https://www.facebook.com/rawshan.55', 'https://www.linkedin.com/in/rawshan-kabir-78b76b227/', 'https://github.com/kabir5055', 'https://github.com/kabir5055', 'WDD', 'adminAsset/testimonial_image/1778815957.jpg', 1, '2024-10-06 15:26:30', '2024-10-06 15:26:36'),
(2, 'Ahasanul A Rijon', 'Software Engineer', 'https://www.facebook.com/ahasanular', 'https://www.linkedin.com/in/md-ahasanul-arafath/', 'https://github.com/ahasanular', 'https://x.com/ahasanul_ar', 'WDD', 'adminAsset/testimonial_image/1757251776.jpg', 1, '2024-10-06 15:30:18', '2024-10-06 15:30:22'),
(3, 'Sajjad Hossain', 'Software Engineer', 'https://www.facebook.com/sajjad.hossien.37', 'https://www.linkedin.com/in/sajjad-hossain-35704a19b/', 'https://www.linkedin.com/in/sajjad-hossain-35704a19b/', 'https://www.linkedin.com/in/sajjad-hossain-35704a19b/', 'WDD', 'adminAsset/testimonial_image/1440776848.jpg', 1, '2024-10-06 15:39:37', '2024-10-06 15:50:20'),
(4, 'Sahaib Rihan', 'Software Engineer', 'https://www.facebook.com/Rihankhan9747', 'https://www.linkedin.com/in/sahaib9747/', 'https://github.com/sahaib9747', 'https://github.com/sahaib9747', 'WDD', 'adminAsset/testimonial_image/2054962664.jpg', 1, '2024-10-06 15:41:41', '2024-10-06 15:50:23'),
(5, 'Fardous Sordar', 'Graphic Designer', 'https://www.facebook.com/fardous.fardous123', 'https://www.linkedin.com/in/fardous-sordar/', 'https://github.com/fardoussordar', 'https://www.instagram.com/fardous_sordar1/', 'GD', 'adminAsset/testimonial_image/717173924.jpg', 1, '2024-10-06 15:45:23', '2024-10-06 15:50:27'),
(6, 'Kawser Hossain', 'SEO optimizer', 'https://www.facebook.com/Kawser.The.Nobita', 'https://www.linkedin.com/in/hossainkawser/', 'https://www.instagram.com/kawser_hossain_nobita/', 'https://x.com/NobitaTheNoob', 'UXUI', 'adminAsset/testimonial_image/430996314.jpg', 1, '2024-10-06 15:50:16', '2024-10-06 15:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `testimonial_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `testimonial_content`, `testimonial_image`, `status`, `created_at`, `updated_at`) VALUES
(1, '\"Working with \"Kabir\" has been a game-changer for our team. Their expertise in Laravel not only streamlined our project but also brought innovative solutions that enhanced our application\'s performance. [Your Name]\'s attention to detail and commitment to quality are truly impressive!\"', 'adminAsset/testimonial_image/313547192.jpg', 1, '2024-10-06 15:16:16', '2024-10-06 15:16:36'),
(2, '\"Mr. Kabir consistently delivers top-notch work with a deep understanding of PHP and Laravel. Their ability to tackle complex problems and collaborate effectively makes them an invaluable asset to any project. I highly recommend [Your Name] for any development challenge!\"', 'adminAsset/testimonial_image/1600958098.jpg', 1, '2024-10-06 15:18:28', '2024-10-06 15:18:30'),
(3, '\"Having Mr. Rawshan Kabir on our team has transformed our development process. Their proficiency in Laravel and PHP has led to faster turnaround times and robust, scalable applications. [Your Name] is not only a skilled engineer but also a fantastic collaborator!\"', 'adminAsset/testimonial_image/1784819765.jpg', 1, '2024-10-06 15:19:47', '2024-10-06 15:19:49'),
(4, '\"Rawshan Kabir is a standout Laravel developer with a knack for turning ideas into reality. Their innovative approach and problem-solving skills have significantly improved our workflows. I couldn\'t be more impressed with their dedication and technical expertise!\"', 'adminAsset/testimonial_image/1490048871.jpg', 1, '2024-10-06 15:21:17', '2024-10-06 15:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Md Rawshan Kabir', 'rawshankabir0@gmail.com', NULL, '$2y$10$dQUCwJM5a5n.Es3N06KPFORqe34bs8nVeittmbGsNePrPMl0zMj5O', NULL, NULL, NULL, NULL, NULL, NULL, '2024-10-06 14:29:21', '2024-10-06 14:29:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myworks`
--
ALTER TABLE `myworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `myworks`
--
ALTER TABLE `myworks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
