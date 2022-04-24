-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2022 at 02:08 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pedebro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bridges`
--

CREATE TABLE `bridges` (
  `pk_bridge_id` bigint(20) UNSIGNED NOT NULL,
  `fk_job_id` bigint(20) UNSIGNED NOT NULL,
  `fk_level_id` bigint(20) UNSIGNED NOT NULL,
  `fk_education_id` bigint(20) UNSIGNED NOT NULL,
  `fk_location_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_20_001032_create_m__positions_table', 1),
(6, '2022_04_20_001044_create_m__users_table', 1),
(7, '2022_04_20_001102_create_m__documents_table', 1),
(8, '2022_04_20_001118_create_m__levels_table', 1),
(9, '2022_04_20_001119_create_m__jobs_table', 1),
(10, '2022_04_20_001159_create_m__educations_table', 1),
(11, '2022_04_20_001216_create_m__locations_table', 1),
(12, '2022_04_20_001236_create_bridges_table', 1),
(13, '2022_04_20_001328_create_t__headers_table', 1),
(14, '2022_04_20_001329_create_t__details_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m__documents`
--

CREATE TABLE `m__documents` (
  `pk_document_id` bigint(20) UNSIGNED NOT NULL,
  `fk_user_id` bigint(20) UNSIGNED NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDcard_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certivicate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transcript` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m__educations`
--

CREATE TABLE `m__educations` (
  `pk_education_id` bigint(20) UNSIGNED NOT NULL,
  `education_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m__educations`
--

INSERT INTO `m__educations` (`pk_education_id`, `education_name`, `created_at`, `updated_at`) VALUES
(1, 'SMA/SMK', NULL, NULL),
(2, 'D3', NULL, NULL),
(3, 'S1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m__jobs`
--

CREATE TABLE `m__jobs` (
  `pk_job_id` bigint(20) UNSIGNED NOT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_age` int(11) NOT NULL,
  `hard_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` date NOT NULL,
  `closing_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_status` enum('Opened','Closed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `m__levels`
--

CREATE TABLE `m__levels` (
  `pk_level_id` bigint(20) UNSIGNED NOT NULL,
  `level_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m__levels`
--

INSERT INTO `m__levels` (`pk_level_id`, `level_name`, `created_at`, `updated_at`) VALUES
(1, 'Fresh graduate', NULL, NULL),
(2, 'Experience', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m__locations`
--

CREATE TABLE `m__locations` (
  `pk_location_id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m__locations`
--

INSERT INTO `m__locations` (`pk_location_id`, `location_name`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta', NULL, NULL),
(2, 'Bandung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m__positions`
--

CREATE TABLE `m__positions` (
  `pk_position_id` bigint(20) UNSIGNED NOT NULL,
  `position_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m__positions`
--

INSERT INTO `m__positions` (`pk_position_id`, `position_name`, `created_at`, `updated_at`) VALUES
(1, 'Recruiter', NULL, NULL),
(2, 'Applicant', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `m__users`
--

CREATE TABLE `m__users` (
  `pk_user_id` bigint(20) UNSIGNED NOT NULL,
  `fk_position_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_brith` date NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDcard_number` bigint(20) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `m__users`
--

INSERT INTO `m__users` (`pk_user_id`, `fk_position_id`, `full_name`, `gender`, `place`, `date_of_brith`, `phone_number`, `email`, `address`, `password`, `IDcard_number`, `photo`, `created_at`, `updated_at`) VALUES
(2, 2, 'Yoggy Rachmawan', 'Male', 'Prabumulih', '1997-01-10', '089624735217', 'yoggyrachmawan12@gmail.com', 'Jl. Mekar Sari, No.105, RT/RW 003/004, Kel. Majasari, Kec. Prabumulih Selatan, Kota Prabumulih', '$2y$10$74byh/vq.6qNsyXay66EPuchvhfXagGtbbnMYoxxNRd.OOuV/7w0C', NULL, NULL, NULL, NULL),
(3, 1, 'Admin Pedebro', 'Male', 'Prabumulih', '1997-01-10', '0895801121100', 'admin@pedebro.com', 'Jl. Mekar Sari, No.105, RT/RW 003/004, Kel. Majasari, Kec. Prabumulih Selatan, Kota Prabumulih', '$2y$10$5g.HjzjqrpJSe/.zleERfef3TAAlJjr/VVwfA3eqzKSLEJBZhMx/6', NULL, NULL, NULL, NULL);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t__details`
--

CREATE TABLE `t__details` (
  `pk_detail_id` bigint(20) UNSIGNED NOT NULL,
  `fk_header_id` bigint(20) UNSIGNED NOT NULL,
  `contact_date` date NOT NULL,
  `interview_date` date NOT NULL,
  `contact_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t__headers`
--

CREATE TABLE `t__headers` (
  `pk_header_id` bigint(20) UNSIGNED NOT NULL,
  `fk_user_id` bigint(20) UNSIGNED NOT NULL,
  `fk_bridge_id` bigint(20) UNSIGNED NOT NULL,
  `apply_date` date NOT NULL,
  `applicant_status` enum('Newest','Accepted','Rejected') COLLATE utf8mb4_unicode_ci NOT NULL,
  `interview_status` enum('Willing','Waiting','Refuse') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bridges`
--
ALTER TABLE `bridges`
  ADD PRIMARY KEY (`pk_bridge_id`),
  ADD KEY `bridges_fk_job_id_foreign` (`fk_job_id`),
  ADD KEY `bridges_fk_level_id_foreign` (`fk_level_id`),
  ADD KEY `bridges_fk_education_id_foreign` (`fk_education_id`),
  ADD KEY `bridges_fk_location_id_foreign` (`fk_location_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m__documents`
--
ALTER TABLE `m__documents`
  ADD PRIMARY KEY (`pk_document_id`),
  ADD KEY `m__documents_fk_user_id_foreign` (`fk_user_id`);

--
-- Indexes for table `m__educations`
--
ALTER TABLE `m__educations`
  ADD PRIMARY KEY (`pk_education_id`);

--
-- Indexes for table `m__jobs`
--
ALTER TABLE `m__jobs`
  ADD PRIMARY KEY (`pk_job_id`);

--
-- Indexes for table `m__levels`
--
ALTER TABLE `m__levels`
  ADD PRIMARY KEY (`pk_level_id`);

--
-- Indexes for table `m__locations`
--
ALTER TABLE `m__locations`
  ADD PRIMARY KEY (`pk_location_id`);

--
-- Indexes for table `m__positions`
--
ALTER TABLE `m__positions`
  ADD PRIMARY KEY (`pk_position_id`);

--
-- Indexes for table `m__users`
--
ALTER TABLE `m__users`
  ADD PRIMARY KEY (`pk_user_id`),
  ADD UNIQUE KEY `m__users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `m__users_email_unique` (`email`),
  ADD UNIQUE KEY `m__users_idcard_number_unique` (`IDcard_number`),
  ADD KEY `m__users_fk_position_id_foreign` (`fk_position_id`);

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
-- Indexes for table `t__details`
--
ALTER TABLE `t__details`
  ADD PRIMARY KEY (`pk_detail_id`),
  ADD KEY `t__details_fk_header_id_foreign` (`fk_header_id`);

--
-- Indexes for table `t__headers`
--
ALTER TABLE `t__headers`
  ADD PRIMARY KEY (`pk_header_id`),
  ADD KEY `t__headers_fk_user_id_foreign` (`fk_user_id`),
  ADD KEY `t__headers_fk_bridge_id_foreign` (`fk_bridge_id`);

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
-- AUTO_INCREMENT for table `bridges`
--
ALTER TABLE `bridges`
  MODIFY `pk_bridge_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `m__documents`
--
ALTER TABLE `m__documents`
  MODIFY `pk_document_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m__educations`
--
ALTER TABLE `m__educations`
  MODIFY `pk_education_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m__jobs`
--
ALTER TABLE `m__jobs`
  MODIFY `pk_job_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m__levels`
--
ALTER TABLE `m__levels`
  MODIFY `pk_level_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m__locations`
--
ALTER TABLE `m__locations`
  MODIFY `pk_location_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m__positions`
--
ALTER TABLE `m__positions`
  MODIFY `pk_position_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m__users`
--
ALTER TABLE `m__users`
  MODIFY `pk_user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t__details`
--
ALTER TABLE `t__details`
  MODIFY `pk_detail_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t__headers`
--
ALTER TABLE `t__headers`
  MODIFY `pk_header_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bridges`
--
ALTER TABLE `bridges`
  ADD CONSTRAINT `bridges_fk_education_id_foreign` FOREIGN KEY (`fk_education_id`) REFERENCES `m__educations` (`pk_education_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bridges_fk_job_id_foreign` FOREIGN KEY (`fk_job_id`) REFERENCES `m__jobs` (`pk_job_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bridges_fk_level_id_foreign` FOREIGN KEY (`fk_level_id`) REFERENCES `m__levels` (`pk_level_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bridges_fk_location_id_foreign` FOREIGN KEY (`fk_location_id`) REFERENCES `m__locations` (`pk_location_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `m__documents`
--
ALTER TABLE `m__documents`
  ADD CONSTRAINT `m__documents_fk_user_id_foreign` FOREIGN KEY (`fk_user_id`) REFERENCES `m__users` (`pk_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `m__users`
--
ALTER TABLE `m__users`
  ADD CONSTRAINT `m__users_fk_position_id_foreign` FOREIGN KEY (`fk_position_id`) REFERENCES `m__positions` (`pk_position_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t__details`
--
ALTER TABLE `t__details`
  ADD CONSTRAINT `t__details_fk_header_id_foreign` FOREIGN KEY (`fk_header_id`) REFERENCES `t__headers` (`pk_header_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t__headers`
--
ALTER TABLE `t__headers`
  ADD CONSTRAINT `t__headers_fk_bridge_id_foreign` FOREIGN KEY (`fk_bridge_id`) REFERENCES `bridges` (`pk_bridge_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `t__headers_fk_user_id_foreign` FOREIGN KEY (`fk_user_id`) REFERENCES `m__users` (`pk_user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
