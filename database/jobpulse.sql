-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 12:53 PM
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
-- Database: `jobpulse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=inactive, 1=Active',
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$12$rWFoS7dzmxx4F.4PNy5mzebBfLeU.L5xMn0ron/36Hn81KGz9zwgq', NULL, '1', 1, '2024-03-20 10:05:00', '2024-03-20 10:05:00'),
(2, 'editor', 'editor@admin.com', NULL, '$2y$12$ra7bwc67EE/g0AtyLeQcb.3/QcnZ0cht/J1t1M3lhMzBTK6UU4z2S', NULL, '0', 3, '2024-03-20 10:05:00', '2024-03-20 10:05:00'),
(3, 'manager', 'manager@admin.com', NULL, '$2y$12$61aUEBO5J.Fpl9aMvQJmr.HJPDTKutP3TVfk7JN9YVvGDRRZBKqeW', NULL, '0', 2, '2024-03-20 10:05:01', '2024-03-20 10:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=inactive 1=active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_profiles`
--

CREATE TABLE `candidate_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `portfolio_url` varchar(255) DEFAULT NULL,
  `linkedin_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_profile_skills`
--

CREATE TABLE `candidate_profile_skills` (
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_profile_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `passed_year` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `candidate_profile_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=inactive, 1=Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'samsung@gmail.com', NULL, '$2y$12$8mwybxDdkGWNyAJ2VJqEZuVZ4.Le0.gBszmXtLacsmP/oF8IFsvCS', NULL, '1', '2024-03-20 10:05:03', '2024-03-20 14:43:29'),
(2, 'LG', 'lg@gmail.com', NULL, '$2y$12$WkAypS2XMvnCXVg/8oucR.uxwwfQZViBPbFw7UzFF6F9POMSYTYu2', NULL, '0', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(3, 'Toshiba', 'toshiba@gmail.com', NULL, '$2y$12$M7Gua4Cwb8Go8XCwgIyejevKvF0lgausWZdzKlFRvRUFVQtkjhAqe', NULL, '0', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(4, 'Panasonic', 'panasonic@gmail.com', NULL, '$2y$12$IhD3JPTc2NVnGKHhsnmk/ODZ3NiVUGhYKuot6TXALNPB2OxsCQ9ye', NULL, '0', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(5, 'Hitachi', 'hitachi@gmail.com', NULL, '$2y$12$0W3UL6liI7luSK1InzTThOKU4uf9iSb3Phd6TZEN0PudPjdTgV1HW', NULL, '0', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(6, 'Singer', 'singer@gmail.com', NULL, '$2y$12$aDtK4tN2N36n/bXAKSGY8OQjKA1mbgJFWgAfOZoxNTyZRr0wgEA02', NULL, '0', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(7, 'Corsair', 'corsair@gmail.com', NULL, '$2y$12$UXgw54I40kxzSHXlplUe5.iJNkP/KeW69f3vda6pc7bxINis8jtSe', NULL, '0', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(8, 'Beximco', 'beximco@gmail.com', NULL, '$2y$12$CSANWNIYRdw1ger6Ygsl2.JkL5Z7zWZA3EhPd/zNWWop0LaXm6cGi', NULL, '0', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(9, 'Bashundhara Ltd', 'bashundhara@gmail.com', NULL, '$2y$12$lHgUdeDVSZaUJ6LC5uca2OHwFfeoTjzS9f2cXE9z4GrlI0eUBO3o6', NULL, '0', '2024-03-20 10:05:03', '2024-03-20 11:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_id` bigint(20) UNSIGNED NOT NULL,
  `employer_details` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `employer_type` enum('Government','Private','NGO') NOT NULL,
  `company_size` enum('Small','medium','large') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `candidate_profile_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `responsibilities` text NOT NULL,
  `requirement` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary_range` varchar(255) NOT NULL COMMENT '15000tk-20000tk',
  `posted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deadline` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `employer_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `responsibilities`, `requirement`, `location`, `salary_range`, `posted_at`, `deadline`, `is_active`, `employer_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Full Stack Developer (Laravel+vue)', 'Eum odit qui saepe et. Id necessitatibus repellendus nisi explicabo. Id distinctio omnis in.', 'Ut optio vel repudiandae odit quo dicta. Nihil maxime molestias quo sunt.', 'Ut at perferendis et dolores nam. Delectus expedita nihil quibusdam occaecati. Aut sed tempora similique saepe nemo. Illo sapiente suscipit voluptatem eum commodi dolores sunt. Id vel sapiente minus ullam autem id dolores.', '7674 Reilly Loop Apt\r\n', '1500tk-20000tk', '2024-03-20 16:05:03', '2024-05-10', 1, 1, 1, '2024-03-20 10:05:03', '2024-03-23 22:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Software Development', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(2, 'Web Development', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(3, 'Mobile App Development', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(4, 'UI/UX Design', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(5, 'Data Science', '2024-03-20 10:05:03', '2024-03-20 10:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `job_tags`
--

CREATE TABLE `job_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_tags`
--

INSERT INTO `job_tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Remote', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(2, 'PHP', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(3, 'Laravel', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(4, 'VueJS', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(5, 'MySql', '2024-03-20 10:05:03', '2024-03-20 10:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `job_tag_relations`
--

CREATE TABLE `job_tag_relations` (
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_tag_relations`
--

INSERT INTO `job_tag_relations` (`job_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-03-20 16:05:03', '2024-03-20 16:05:03'),
(1, 2, '2024-03-20 16:05:03', '2024-03-20 16:05:03'),
(1, 3, '2024-03-20 16:05:03', '2024-03-20 16:05:03'),
(1, 4, '2024-03-20 16:05:03', '2024-03-20 16:05:03'),
(1, 5, '2024-03-20 16:05:03', '2024-03-20 16:05:03');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_15_110206_create_roles_table', 1),
(6, '2024_02_19_204424_create_admins_table', 1),
(7, '2024_02_20_140111_create_employers_table', 1),
(8, '2024_02_22_190757_create_employer_details_table', 1),
(9, '2024_02_25_200802_create_job_tags_table', 1),
(10, '2024_02_25_200918_create_job_categories_table', 1),
(11, '2024_02_26_194117_create_jobs_table', 1),
(12, '2024_02_26_203632_create_job_tag_relations_table', 1),
(13, '2024_03_02_191305_create_applications_table', 1),
(14, '2024_03_03_204428_create_candidate_profiles_table', 1),
(15, '2024_03_04_203907_create_educations_table', 1),
(16, '2024_03_12_131455_create_trainings_table', 1),
(17, '2024_03_12_131614_create_experiences_table', 1),
(18, '2024_03_13_125102_create_skills_table', 1),
(19, '2024_03_13_125343_create_candidate_profile_skills_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2024-03-20 10:05:00', '2024-03-20 10:05:00'),
(2, 'manager', '2024-03-20 10:05:00', '2024-03-20 10:05:00'),
(3, 'editor', '2024-03-20 10:05:00', '2024-03-20 10:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(2, 'JS', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(3, 'Communication', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(4, 'Collaboration', '2024-03-20 10:05:03', '2024-03-20 10:05:03'),
(5, 'git/gitHub', '2024-03-20 10:05:04', '2024-03-20 10:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `completion_year` varchar(255) NOT NULL,
  `candidate_profile_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Alek Welch', 'ayla.koepp@gmail.com', NULL, '$2y$12$VJ3rTdHUGQsSLL7ddy3G1.AHL3SZ861IIIqT5SfIhyVcf9a9une1.', NULL, NULL, '2024-03-20 10:04:53', '2024-03-20 10:04:53'),
(2, 'Chad Ward MD', 'gutmann.emmie@morar.org', NULL, '$2y$12$V6a1.HV4VST5.RT2HyNP9OsXly192upuOPD16lQF8gbiT4vSG4i1S', NULL, NULL, '2024-03-20 10:04:54', '2024-03-20 10:04:54'),
(3, 'Adrianna Boehm', 'krenner@davis.com', NULL, '$2y$12$PfYeE7BfLbCEg2wFKjM3X.gZjH84R/mSw2xaEIPcFXHEThzHqE5..', NULL, NULL, '2024-03-20 10:04:54', '2024-03-20 10:04:54'),
(4, 'Hailey Kihn', 'bterry@graham.com', NULL, '$2y$12$ovkfbD42ifApNE0k5JzASuiEVVcwVADBwDJteIpVJyd5uyhY6Sw/.', NULL, NULL, '2024-03-20 10:04:54', '2024-03-20 10:04:54'),
(5, 'Cindy Hahn', 'markus.lynch@hotmail.com', NULL, '$2y$12$tnQEjO8TINfF0kIx8PwD7.y1VzGUohoAf4vzlNkFtnFDbVw8NdfzG', NULL, NULL, '2024-03-20 10:04:55', '2024-03-20 10:04:55'),
(6, 'Dr. Alvah Reilly Sr.', 'nicolette55@beatty.com', NULL, '$2y$12$q8GEmJ7RNOk2IXVVvaztaenl767.XqGDLGLx7YrlIb3IF1osx.FNK', NULL, NULL, '2024-03-20 10:04:55', '2024-03-20 10:04:55'),
(7, 'Miss Helga Rau', 'jesse.mccullough@gmail.com', NULL, '$2y$12$spk.Hnf6makaVWFpJT7dYOWbhZCvWwy/Lp.OqiGh477Fg/nSf/fb2', NULL, NULL, '2024-03-20 10:04:55', '2024-03-20 10:04:55'),
(8, 'Mr. Trenton Braun', 'lula59@yahoo.com', NULL, '$2y$12$9y5WXPvRTECf3d2vEhxcd.ivh5.3l3vaMiY6WiDn5Qh1MCXXewZhy', NULL, NULL, '2024-03-20 10:04:56', '2024-03-20 10:04:56'),
(9, 'Dr. Archibald Franecki', 'ernser.adrianna@baumbach.com', NULL, '$2y$12$XW5xxNZTWAtSzgHN9oY3TuQbeahlh1d1O0BaFTxyHu7Ms0RlsbuUm', NULL, NULL, '2024-03-20 10:04:56', '2024-03-20 10:04:56'),
(10, 'Raven Herman', 'shanie.rosenbaum@gmail.com', NULL, '$2y$12$EMiy20sreyz9tY8RYvU7sO81CJsB6CPFWGqzBLQ2InOgzQUHvUFQC', NULL, NULL, '2024-03-20 10:04:56', '2024-03-20 10:04:56'),
(11, 'Cleo Erdman', 'wluettgen@hotmail.com', NULL, '$2y$12$DesyegACDgJ5/txvvrvX5uTwAeMQhL7q5NzJDVujc8hPEi28ychd2', NULL, NULL, '2024-03-20 10:04:57', '2024-03-20 10:04:57'),
(12, 'Leola Dietrich III', 'rau.alycia@hotmail.com', NULL, '$2y$12$HFYnIySJURUxoBv5rqCCt.lOTLT4TSz8Ntdm9rIPn/xEYT8QsQzEu', NULL, NULL, '2024-03-20 10:04:57', '2024-03-20 10:04:57'),
(13, 'Edna Bednar', 'dkertzmann@hotmail.com', NULL, '$2y$12$3EmjdCQ.DSPrLBGK/KWBQemfH1wCLp1Nzs3NwxE5YZEAQ8xD0gp7i', NULL, NULL, '2024-03-20 10:04:57', '2024-03-20 10:04:57'),
(14, 'Bruce Kassulke', 'iwill@osinski.com', NULL, '$2y$12$9gW4JGMue89sUgFYlnSMfu63ZqxtwnvFmwlct4LX2U9aDgivdmasG', NULL, NULL, '2024-03-20 10:04:58', '2024-03-20 10:04:58'),
(15, 'Charlene Lockman', 'urath@kub.com', NULL, '$2y$12$xa4F6PT4jqVSTqA1Rh5c3O4rqCyH2fOMCQ0eUVZQv60r2KODg0yI2', NULL, NULL, '2024-03-20 10:04:58', '2024-03-20 10:04:58'),
(16, 'Austen Hahn', 'keshaun.hickle@stokes.info', NULL, '$2y$12$9xu5alsDcxOQ5jeKOkc1VO7tHwWpntlU05cejGBI9nfo9SOwz2mqO', NULL, NULL, '2024-03-20 10:04:58', '2024-03-20 10:04:58'),
(17, 'Ruth Mraz', 'julian52@rosenbaum.com', NULL, '$2y$12$xkkOgvzlPvbY7goTfXzUjO3uxk8pD8Om.iSNnutLCbvV3WyAFHnAK', NULL, NULL, '2024-03-20 10:04:59', '2024-03-20 10:04:59'),
(18, 'Tod Pacocha', 'pfannerstill.kathlyn@yahoo.com', NULL, '$2y$12$7jmbAWHbleLciWTQQe8XZuPhCUj9oNltfM0xhQMKqD8Xu/HhpUJD6', NULL, NULL, '2024-03-20 10:04:59', '2024-03-20 10:04:59'),
(19, 'Dr. Orland Kutch', 'hhuel@yahoo.com', NULL, '$2y$12$.5bVkNJcvyhpsTcyDg5k3eml2uBSYHxUTdzSZIBW.Z7RzJ4U.OLyC', NULL, NULL, '2024-03-20 10:04:59', '2024-03-20 10:04:59'),
(20, 'Zaria Eichmann', 'moconnell@boyle.net', NULL, '$2y$12$DYsmISWf8l4qd1zcD23NOuBUtfoD2gLf5FqqD4KPT11aKoE9k0Twy', NULL, NULL, '2024-03-20 10:05:00', '2024-03-20 10:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_role_id_foreign` (`role_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applications_job_id_foreign` (`job_id`),
  ADD KEY `applications_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `candidate_profiles`
--
ALTER TABLE `candidate_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_profile_skills`
--
ALTER TABLE `candidate_profile_skills`
  ADD KEY `candidate_profile_skills_skill_id_foreign` (`skill_id`),
  ADD KEY `candidate_profile_skills_candidate_profile_id_foreign` (`candidate_profile_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educations_candidate_profile_id_foreign` (`candidate_profile_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employers_email_unique` (`email`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employer_details_employer_id_foreign` (`employer_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_candidate_profile_id_foreign` (`candidate_profile_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_employer_id_foreign` (`employer_id`),
  ADD KEY `jobs_category_id_foreign` (`category_id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_tags`
--
ALTER TABLE `job_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_tag_relations`
--
ALTER TABLE `job_tag_relations`
  ADD KEY `job_tag_relations_job_id_foreign` (`job_id`),
  ADD KEY `job_tag_relations_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainings_candidate_profile_id_foreign` (`candidate_profile_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate_profiles`
--
ALTER TABLE `candidate_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employer_details`
--
ALTER TABLE `employer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_tags`
--
ALTER TABLE `job_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);

--
-- Constraints for table `candidate_profile_skills`
--
ALTER TABLE `candidate_profile_skills`
  ADD CONSTRAINT `candidate_profile_skills_candidate_profile_id_foreign` FOREIGN KEY (`candidate_profile_id`) REFERENCES `candidate_profiles` (`id`),
  ADD CONSTRAINT `candidate_profile_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`);

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_candidate_profile_id_foreign` FOREIGN KEY (`candidate_profile_id`) REFERENCES `candidate_profiles` (`id`);

--
-- Constraints for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD CONSTRAINT `employer_details_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_candidate_profile_id_foreign` FOREIGN KEY (`candidate_profile_id`) REFERENCES `candidate_profiles` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `job_categories` (`id`),
  ADD CONSTRAINT `jobs_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`);

--
-- Constraints for table `job_tag_relations`
--
ALTER TABLE `job_tag_relations`
  ADD CONSTRAINT `job_tag_relations_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `job_tag_relations_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `job_tags` (`id`);

--
-- Constraints for table `trainings`
--
ALTER TABLE `trainings`
  ADD CONSTRAINT `trainings_candidate_profile_id_foreign` FOREIGN KEY (`candidate_profile_id`) REFERENCES `candidate_profiles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
