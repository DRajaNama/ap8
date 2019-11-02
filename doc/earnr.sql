-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 12:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earnr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_password_resets`
--

INSERT INTO `admin_password_resets` (`email`, `token`, `created_at`) VALUES
('govind.singh@dotsquares.com', '$2y$10$yRFDWpIYnst9Y.0j/dccKenjYaRScAJRWR54fNZtbLJ7nDSv.EPsm', '2019-08-29 05:50:23'),
('shyamsunder.dadhich@dotsquares.com', '$2y$10$ROW7Ln/uAzKO.l0TKFCFbueQDWo8E/aaeQO.g4E3G.nMitIabI1NS', '2019-09-11 04:47:55'),
('dharmendra.nama@dotsquares.com', '$2y$10$gTVSI.RQzrkjLI0pyrJkHOctboK1nRpqYOX5IR5dQaZBbjHU18J7m', '2019-10-30 04:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1: Super user, 0: General User',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `title`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 1, '2019-02-26 21:28:03', NULL),
(2, 'Admin', 0, '2019-02-26 21:28:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_admin_user`
--

CREATE TABLE `admin_role_admin_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_role_id` int(10) UNSIGNED NOT NULL,
  `admin_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_admin_user`
--

INSERT INTO `admin_role_admin_user` (`id`, `admin_role_id`, `admin_user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(2, 1, 2, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(3, 2, 3, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(4, 1, 4, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(5, 2, 5, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(6, 1, 6, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(7, 1, 7, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(8, 1, 8, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(9, 2, 9, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(10, 1, 10, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(11, 1, 11, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(12, 2, 12, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(13, 1, 13, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(14, 2, 14, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(15, 2, 15, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(16, 2, 16, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(17, 2, 17, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(18, 1, 18, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(19, 2, 19, '2019-02-26 21:28:06', '2019-02-26 21:28:06'),
(20, 2, 20, '2019-02-26 21:28:06', '2019-02-26 21:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password_reset_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1: Active User, 0: Inactive User',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `mobile`, `password`, `profile_photo`, `email_verified_at`, `password_reset_token`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@yopmail.com', '7665880638', '$2y$10$z1La308.CLlPMWaeUL.ux.wtIga9vR5HQgaH/hfDWE2AAYSzg1Dmy', NULL, '2019-02-26 21:28:03', NULL, 'KYO4Q15vfNPLxSDCrIlonvDS1lQ2xeJuTtd0Ws5KabmGgYIIkJoHsl6C5dlW', 1, '2019-02-26 21:28:03', '2019-09-11 04:51:01'),
(2, 'Anthony', 'hanumanprasad.yadav@dotsquares.com', '7665880638', '$2y$10$rCGdX94M9hLv0uWpDcnA/.JxJ1l5j9ir4LhLjzyXMe373WkXCpILC', NULL, '2019-02-26 21:28:03', NULL, '7yqnwgDkvRRjzbUA9xXFmBjyJLwkZCecAfYtuPuyZwbXqB5FRihXdsnTOlzd', 1, '2019-02-26 21:28:04', '2019-02-28 22:54:46'),
(3, 'Haylie', 'malachi54@example.net', '7665880638', '$2y$10$VEYp8WCWYg3V0AIM/4kLReAIBqRq9LnGuUPnjuV0gDMfqFnMu6f72', NULL, '2019-02-26 21:28:04', NULL, NULL, 1, '2019-02-26 21:28:04', '2019-02-26 21:28:04'),
(4, 'Nick', 'elda.oconner@example.net', '7665880638', '$2y$10$WFR76yZzcmtaF5opssCqieWOG/2dJkxUbfq0QMi9RfHu/Qbo0Q5ji', NULL, '2019-02-26 21:28:04', NULL, NULL, 1, '2019-02-26 21:28:04', '2019-02-26 21:28:04'),
(5, 'Lawrence', 'maude.smitham@example.org', '7665880638', '$2y$10$/cjzqfPIlMVkwKpHz0nAyepTfli1ooBYSrslz3OsSH963VrHL8XNy', NULL, '2019-02-26 21:28:04', NULL, NULL, 1, '2019-02-26 21:28:04', '2019-02-26 21:28:04'),
(6, 'Cornelius', 'shanahan.madaline@example.org', '7665880638', '$2y$10$IBLOf4xo5nBWrarhRVZ4CuCsy.CNfIdCa4fXSV6VJKS9O7vn/4uWS', NULL, '2019-02-26 21:28:04', NULL, NULL, 0, '2019-02-26 21:28:04', '2019-02-26 21:28:04'),
(7, 'Mayra', 'rutherford.crystel@example.com', '7665880638', '$2y$10$AEE51PD.dgrxqfSer83YjOe4wAW5427l5ELTlaeqvxiTvSkdnp96a', NULL, '2019-02-26 21:28:04', NULL, NULL, 0, '2019-02-26 21:28:04', '2019-02-26 21:28:04'),
(8, 'Janiya', 'creola28@example.org', '7665880638', '$2y$10$JHw1PEwPgikkSCz3p9SLk.N5j9bYoA/sVZ58EI4X9/ipPKdgy/YU2', NULL, '2019-02-26 21:28:04', NULL, NULL, 1, '2019-02-26 21:28:04', '2019-02-26 21:28:04'),
(9, 'Leone', 'vandervort.moriah@example.com', '7665880638', '$2y$10$tShr.1lMbFw.9KL4nsoiJeIzd8B7i/Btf.jZJ5Oq22xKpg7RxZ2ca', NULL, '2019-02-26 21:28:04', NULL, NULL, 1, '2019-02-26 21:28:04', '2019-02-26 21:28:04'),
(10, 'Dell', 'watsica.tina@example.com', '7665880638', '$2y$10$DLfDPJxmfOdY95CROXtXPO3O0QAyQUAhsYXWb1D3J0KwcsRGkeCjC', NULL, '2019-02-26 21:28:04', NULL, NULL, 1, '2019-02-26 21:28:04', '2019-02-26 21:28:04'),
(11, 'Cordie', 'katrina86@example.net', '7665880638', '$2y$10$RqUxSQHwf9yknCUfoNnmjuQg56wFPwx40/OnsPjCq5LDGt0Cae0ne', NULL, '2019-02-26 21:28:04', NULL, NULL, 1, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(12, 'Georgiana', 'miller.lee@example.com', '7665880638', '$2y$10$iLIl6Dk.B3MiIMr7UKN1h.jutx/P5z5Z2t4h4tYMBB1Uhag9DsSTa', NULL, '2019-02-26 21:28:05', NULL, NULL, 0, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(13, 'Nils', 'janelle09@example.net', '7665880638', '$2y$10$WOyvdyVVuGvg08mGfkyc4enNXHoQjvEe6RQvU4eOowmiysd79RD0C', NULL, '2019-02-26 21:28:05', NULL, NULL, 0, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(14, 'Pasquale', 'hilma35@example.org', '7665880638', '$2y$10$Q8F0UntkefVreSxH6rQqPO6IKXTxJQQp/W8bcVMpxfcZxkcup74eK', NULL, '2019-02-26 21:28:05', NULL, NULL, 0, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(15, 'Sydney', 'lourdes73@example.com', '7665880638', '$2y$10$lY.jGcE2mASpX8KOsKg84.A8EFos.RSFInnkqokJvFyPtSvORpkh6', NULL, '2019-02-26 21:28:05', NULL, NULL, 0, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(16, 'Louisa', 'krystal12@example.com', '7665880638', '$2y$10$HnQ795hvsOXq0N4ae7cGiOKxS53Z4EqJsyqQzKdSjtKICJKQzvqgu', NULL, '2019-02-26 21:28:05', NULL, NULL, 1, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(17, 'Adolphus', 'ttoy@example.net', '7665880638', '$2y$10$GrqaJpIuXUMSE3W7cM5Wh.xkx5ogyBaCj3yBWDRYyJSJJXmJon6IC', NULL, '2019-02-26 21:28:05', NULL, NULL, 1, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(18, 'Margaretta', 'samara97@example.com', '7665880638', '$2y$10$XveL9p1X0X4g2TZ8myrm7.UfXUV98fgfFU0fmTwSDUMW5w/XUbvUS', NULL, '2019-02-26 21:28:05', NULL, NULL, 0, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(19, 'Mathias', 'knitzsche@example.com', '7665880638', '$2y$10$NcJi6HsI3gAiMq0s8WqPcuxjxxs2yiqDxy7OLyJESRBeRlmeUJi0u', NULL, '2019-02-26 21:28:05', NULL, NULL, 0, '2019-02-26 21:28:05', '2019-02-26 21:28:05'),
(20, 'Beau', 'pmosciski@example.com', '7665880638', '$2y$10$bmU3ZITt43hhb72vSuwsTOkRoEZMQhkNsCYbvhxGYe4XTIMrvqryW', NULL, '2019-02-26 21:28:05', NULL, NULL, 0, '2019-02-26 21:28:06', '2019-02-26 21:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 0=in active',
  `lft` int(10) UNSIGNED DEFAULT NULL,
  `rgt` int(10) UNSIGNED DEFAULT NULL,
  `depth` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `slug`, `banner`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `lft`, `rgt`, `depth`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Test', 'test', NULL, 'test', 'test', 'test', 1, 1, 2, NULL, '2019-09-16 05:41:13', '2019-09-16 05:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

CREATE TABLE `document_type` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_hooks`
--

CREATE TABLE `email_hooks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 0=in active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_hooks`
--

INSERT INTO `email_hooks` (`id`, `title`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Welcome Email', 'welcome-email', 'when user has been registered then send welcome email for verify account.', 1, '2019-02-27 00:03:36', '2019-02-27 00:03:36'),
(2, 'Forgot Password Email', 'forgot-password-email', 'Forgot Password Email send when the user has forgot password', 1, '2019-02-27 00:04:17', '2019-02-27 00:04:17'),
(4, 'Contact us', 'contact-us', 'Contact usContact usContact usContact us Contact us', 1, '2019-02-27 00:05:18', '2019-02-27 00:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `email_preferences`
--

CREATE TABLE `email_preferences` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout_html` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_preferences`
--

INSERT INTO `email_preferences` (`id`, `title`, `layout_html`, `created_at`, `updated_at`) VALUES
(1, 'Main Layout', '<html>\r\n<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>\r\n<body><div>\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"border:1px solid #dddddd;\" width=\"650\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<table cellpadding=\"0\" cellspacing=\"0\" style=\"background:#ffffff; border-bottom:1px solid #dddddd; padding:15px;\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td><a href=\"##BASE_URL##\" target=\"_blank\"><img alt=\"\" border=\"0\" src=\"##SYSTEM_LOGO##\" /></a></td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background:#ffffff; padding:15px;\">\r\n			<table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">\r\n				<tbody>\r\n					<tr>\r\n						<td style=\"font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#000000; font-size:16px;\">\r\n							##EMAIL_CONTENT##\r\n						</td>\r\n					</tr>\r\n					<tr>\r\n						<td style=\"font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#043f8d; font-size:16px; vertical-align:middle; text-align:left; padding-top:20px;\">\r\n						##EMAIL_FOOTER##\r\n						</td>\r\n					</tr>\r\n				</tbody>\r\n			</table>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"background:#043f8d; border-top:1px solid #dddddd; text-align:center; font-family:\'Trebuchet MS\', Arial, Helvetica, sans-serif; color:#ffffff; padding:12px; font-size:12px; text-transform:uppercase; font-weight:normal;\">##COPYRIGHT_TEXT##</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n</body>\r\n</head>\r\n</html>', '2019-02-27 00:05:47', '2019-02-27 00:05:47');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `email_hook_id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_preference_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 0=in active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `email_hook_id`, `subject`, `description`, `footer_text`, `email_preference_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '##USER_NAME##, a very warm welcome to the ##SYSTEM_APPLICATION_NAME##', '<p>We&rsquo;re so happy to have you with us.</p>\r\n\r\n<p>Please click on the button below to confirm we got the right email address.</p>\r\n\r\n<p><a href=\"##verify_n_password##\">VERIFY MY EMAIL</a></p>\r\n\r\n<p>Or copy and paste the link below.</p>\r\n\r\n<p>##verify_n_password##</p>\r\n\r\n<p>##USER_INFO##</p>', 'Thanks and Regards,\r\n##SYSTEM_APPLICATION_NAME##', 1, 1, '2019-02-27 00:20:47', '2019-02-27 00:20:47'),
(2, 2, 'Reset Password Notification', '<h1 style=\"font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #2F3133; font-size: 19px; font-weight: bold; margin-top: 0; text-align: left;\">Hello!</h1>\r\n\r\n<p style=\"font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">You are receiving this email because we received a password reset request for your account.</p>\r\n\r\n<p style=\"font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\"><a href=\"##RESET_PASSWORD_URL##\">Reset Password</a></p>\r\n\r\n<p style=\"font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">This password reset link will expire in 60 minutes.</p>\r\n\r\n<p style=\"font-family: Avenir, Helvetica, sans-serif; box-sizing: border-box; color: #74787E; font-size: 16px; line-height: 1.5em; margin-top: 0; text-align: left;\">If you did not request a password reset, no further action is required.</p>', 'Thanks & Regards,\r\n##SYSTEM_APPLICATION_NAME##', 1, 1, '2019-02-27 00:21:52', '2019-02-27 00:21:52');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email_address`, `mobile`, `message`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'abc@yopmail.com', 'asdasd', 'asdasd', '2019-09-17 07:45:38', '2019-09-17 07:45:38'),
(2, 'asdasd', 'a@yopmail.com', NULL, 'asdasdasd', '2019-09-17 07:45:50', '2019-09-17 07:45:50'),
(3, 'asdadsasd', 'asdasd@yopmail.com', NULL, 'asdasdasd', '2019-09-17 07:49:18', '2019-09-17 07:49:18'),
(4, 'shyam', 'dadhich@yopmail.com', NULL, 'hii user', '2019-09-17 08:00:59', '2019-09-17 08:00:59');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `heading` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_carrierShipper` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Carrier, 2=Shipper',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0=active, 1=in active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `heading`, `description`, `is_carrierShipper`, `status`, `created_at`, `updated_at`) VALUES
(26, 'Lorem ipsum dolor sit amet, gubergren elaboraret eos ne, bonorum volumus interpretaris per ad.', '<p>Civibus quaerendum sit ei, usu errem quidam definitionem ut, pro quod scaevola inimicus cu. Ut integre legendos incorrupte ius. Sea saperet prodesset posidonium te, usu in numquam erroribus similique. Qui facilisi scribentur dissentiunt no, prima atomorum vulputate an vim, ei eam tale assueverit.</p>', 0, 1, '2019-09-17 00:06:40', '2019-09-17 00:06:40'),
(27, 'Cum falli expetenda in, ad nam inani discere, ludus nominavi ea eum. Sed dico timeam scriptorem ne, mei veritus platonem interpretaris te, pro ne saepe copiosae facilisis.', '<p>Offendit vituperatoribus vix ne, postea dicunt tamquam mel no. Eum et docendi epicuri abhorreant, usu ea essent gloriatur necessitatibus, id ius solet graecis corpora. No nominavi interpretaris ius.</p>\r\n\r\n<p>Cum altera disputando at, ut augue ceteros democritum nam, malis cotidieque vel no. Cetero necessitatibus duo an, id fastidii epicurei abhorreant sit.</p>', 0, 1, '2019-09-17 00:07:48', '2019-09-17 00:07:48'),
(28, 'Qui at ipsum efficiendi, nec nullam deseruisse reformidans eu. Vim erant dolorem ut, nec ut vide ludus.', '<p>Ut praesent salutandi est, eu mazim lobortis vel, ad eos errem nonumy luptatum. No duo ludus labitur volutpat. Ei eum dicant delicata, noster copiosae ei vim. No sea augue definiebas, et periculis temporibus vix. Saepe quidam percipitur ei vim, per conceptam neglegentur id. Has eu ridens appetere deseruisse, essent luptatum eu per. Mea viris invenire no, vel et meliore epicuri vulputate, at viderer lobortis vulputate sea.</p>', 1, 1, '2019-09-17 00:08:08', '2019-09-17 00:08:08'),
(29, 'Mea id consul contentiones, in essent minimum adolescens vim. Ea eam stet iusto, sea an quaeque utroque percipitur, ea debet vocent mei. Sit audiam legimus deseruisse ea, ne mea appetere aliquando.', '<p><br />\r\nUt praesent salutandi est, eu mazim lobortis vel, ad eos errem nonumy luptatum. No duo ludus labitur volutpat. Ei eum dicant delicata, noster copiosae ei vim. No sea augue definiebas, et periculis temporibus vix. Saepe quidam percipitur ei vim, per conceptam neglegentur id. Has eu ridens appetere deseruisse, essent luptatum eu per. Mea viris invenire no, vel et meliore epicuri vulputate, at viderer lobortis vulputate sea.</p>', 1, 1, '2019-09-17 00:08:36', '2019-09-17 00:08:36');

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
(1, '2019_02_01_105519_create_settings_table', 1),
(2, '2019_02_06_095149_create_email_hooks_table', 1),
(3, '2019_02_06_100408_create_email_preferences_table', 1),
(4, '2019_02_06_101213_create_email_templates_table', 1),
(5, '2019_02_13_092143_create_admin_users_table', 1),
(6, '2019_02_13_092924_create_admin_roles_table', 1),
(7, '2019_02_13_095222_create_admin_role_admin_user_table', 1),
(8, '2019_02_27_072151_create_admin_password_resets_table', 1),
(9, '2019_03_01_121924_create_pages_table', 1),
(10, '2019_03_04_121756_create_users_table', 1),
(11, '2019_03_04_121807_create_roles_table', 1),
(12, '2019_03_04_121814_create_role_user_table', 1),
(13, '2019_03_04_121822_create_password_resets_table', 1),
(14, '2019_08_30_111654_create_categories_table', 1),
(15, '2019_09_02_060952_create_faqs_table', 1),
(16, '2019_09_03_114120_create_testimonials_table', 1),
(17, '2019_09_05_054517_create_banner_categories_table', 1),
(18, '2019_09_05_055035_create_banner_images_table', 1),
(19, '2019_09_09_102337_create_services_table', 1),
(21, '2019_04_30_053817_create_subscription_plans_table', 2),
(22, '2019_04_30_053807_create_subscription_plan_features_table', 3),
(23, '2019_03_13_083507_create_base_categories_table', 4),
(24, '2019_08_30_111654_create_cargo_categories_table', 5),
(25, '2019_03_13_083507_create_categories_table', 6),
(27, '2019_09_11_112119_create_price_ranges_table', 7),
(31, '2019_09_13_064557_create_packages_table', 8),
(32, '2019_04_30_053807_create_package_features_table', 9),
(33, '2019_04_30_053807_create_package_prices_table', 9),
(36, '2019_09_17_101038_create_enquiries_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 0=in active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ultimate AD', 1, '2019-09-14 03:03:28', '2019-09-14 03:03:28'),
(2, 'Premium AD', 1, '2019-09-14 03:04:25', '2019-09-14 03:04:25'),
(3, 'Standard AD', 1, '2019-09-14 03:05:24', '2019-09-14 03:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=active, 0=in active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `sub_title`, `slug`, `short_description`, `description`, `banner`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Monthly', 'Monthly', 'monthly-2', 'Monthly', '<p>Monthly</p>', NULL, 'Monthly', 'Monthly', 'Monthly', 0, '2019-09-03 04:48:41', '2019-09-03 04:48:41'),
(7, 'Terms and Conditions', 'Terms-and-Conditions', 'Terms-and-Conditions', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', NULL, 'Terms-and-Conditions', 'Terms-and-Conditions', 'Terms-and-Conditions', 1, '2019-09-16 09:08:59', '2019-10-30 05:35:37'),
(8, 'Privacy Policy', 'Privacy-Policy', 'faq-shiper', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>', NULL, 'Privacy-Policy', 'Privacy-olicy', 'Privacy-Policy', 1, '2019-09-16 23:30:36', '2019-10-30 05:35:02'),
(9, 'test test', 'test', 'test', 'test', '<p>test</p>', NULL, 'test', 'test', 'test', 0, '2019-09-17 01:52:34', '2019-09-17 01:52:34'),
(10, 'test test', 'test test', 'test-test', 'test test', '<p>test test</p>', NULL, 'test test', 'test test', 'test test', 0, '2019-09-17 01:53:26', '2019-09-17 01:53:26'),
(11, 'Contact Us', 'Contact Us', 'contact-us', 'Contact Us', '<p>Contact Us</p>', NULL, 'Contact Us', 'Contact Us', 'Contact Us', 0, '2019-09-17 01:54:17', '2019-09-17 01:54:17'),
(12, 'About Us', 'About Us', 'about-us', 'About Us', '<h2>Truckfinder... The Australia wide Online Heavy Haulage Transport Marketplace for connecting Shippers and Carriers.</h2>\r\n\r\n<p>As a marketplace Loadshift is simply a communicational hub for individuals and businesses seeking to buy and sell the services of road transport.</p>\r\n\r\n<p>From Palletised Freight to a 4WD Car or a huge CAT D10 Dozer, from a Tilt Tray to a Bdouble Tautliner or a Drop Deck with ramps. If it&rsquo;s to be transported by truck, Loadshift is the place to do business.</p>\r\n\r\n<p><strong>For Shippers</strong>, Find transport fast anytime and anywhere.</p>\r\n\r\n<p><strong>For Carriers</strong>, Find more business for your business.</p>', NULL, 'About Us', 'About Us', 'About Us', 1, '2019-09-17 23:31:58', '2019-09-17 23:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manager` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `slug`, `config_value`, `manager`, `field_type`, `created_at`, `updated_at`) VALUES
(1, 'Website Name', 'SYSTEM_APPLICATION_NAME', 'Earnr', 'general', 'text', '2019-02-27 00:33:36', '2019-09-13 06:17:15'),
(2, 'Admin Email', 'ADMIN_EMAIL', 'admin@yopmail.com', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(4, 'Owner Name', 'WEBSITE_OWNER', 'Earner Admin', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(5, 'Telephone', 'TELEPHONE', '+61 458 666 456', 'general', 'text', '2019-02-27 00:33:36', '2019-09-13 06:14:45'),
(6, 'Admin Page Limit', 'ADMIN_PAGE_LIMIT', '20', 'general', 'text', '2019-02-27 00:33:36', '2019-03-03 23:08:10'),
(7, 'Front Page Limit', 'FRONT_PAGE_LIMIT', '20', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(8, 'Admin Date Format', 'ADMIN_DATE_FORMAT', 'd F, Y', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(9, 'Admin Date Time Format', 'ADMIN_DATE_TIME_FORMAT', 'd F, Y H:i A', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(10, 'Front Date Format', 'FRONT_DATE_FORMAT', 'd F, Y', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(11, 'Front Date Time Format', 'FRONT_DATE_TIME_FORMAT', 'd F, Y', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(17, 'Office Address', 'ADDRESS', '6-Kha-9, Jawahar Nagar, <br> Jaipur, Rajasthan - 302004, India', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(20, 'SMTP ALLOW', 'SMTP_ALLOW', '1', 'smtp', 'text', '2019-02-27 00:33:36', '2019-02-28 22:29:23'),
(21, 'Email Host Name', 'SMTP_EMAIL_HOST', 'mail.dotsquares.com', 'smtp', 'text', '2019-02-27 00:33:36', '2019-02-28 22:29:23'),
(22, 'SMTP Username', 'SMTP_USERNAME', 'wwwsmtp@dotsquares.com', 'smtp', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36'),
(23, 'SMTP password', 'SMTP_PASSWORD', 'dsmtp909#', 'smtp', 'text', '2019-02-27 00:33:36', '2019-02-28 22:29:23'),
(24, 'SMTP port', 'SMTP_PORT', '25', 'smtp', 'text', '2019-02-27 00:33:36', '2019-02-28 22:29:23'),
(25, 'SMTP Tls', 'SMTP_TLS', '1', 'smtp', 'text', '2019-02-27 00:33:36', '2019-02-28 22:29:24'),
(47, 'Main Favicon', 'MAIN_FAVICON', '82nIMwo7JxzkBOEtWXmS1NXybgitI6vO9W9W7h31.png', 'theme_images', 'text', '2019-02-27 21:09:43', '2019-09-13 07:20:50'),
(48, 'MAIN LOGO', 'MAIN_LOGO', 'KnYUfpBZcodHER6nzOyZ706eAG4Mwt08dbDJtuqm.png', 'theme_images', 'text', '2019-02-27 21:09:43', '2019-09-13 07:25:59'),
(61, 'Contact Email', 'CONTACT_EMAIL', 'admin@yopmail.com', 'general', 'text', '2019-02-27 00:33:36', '2019-02-27 00:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=active, 1=in active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `author`, `designation`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Govind Singh', 'Software Developer', '<p>Software DeveloperSoftware DeveloperSoftware DeveloperSoftware DeveloperSoftware Developer</p>', NULL, 1, '2019-09-03 07:15:42', '2019-09-03 07:15:42'),
(2, 'Govind Singh', 'Software Developer', '<p>Software Developer 1221</p>', 'author-1567517895.png', 0, '2019-09-03 07:15:58', '2019-09-03 08:08:15'),
(3, 'Govind Singh', 'Software Developer', '<p>tester</p>', NULL, 1, '2019-09-03 07:19:28', '2019-09-03 07:19:28'),
(4, 'weewe', 'ewewee', '<p>wewe</p>', 'author-1567517882.png', 1, '2019-09-03 08:05:54', '2019-09-03 08:08:02'),
(5, 'wwwwwwww', 'wwwwwwww', '<p>wwwwwwwwwwww</p>', 'author-1567518322.png', 1, '2019-09-03 08:15:22', '2019-09-03 08:15:22'),
(6, 'test', 'testimg', '<p>test</p>', 'author-1567658355.jpg', 1, '2019-09-04 23:09:15', '2019-09-04 23:09:15'),
(7, 'tet', 'test', '<p>rtyrty</p>', 'author-1568093618.jpg', 0, '2019-09-10 00:03:38', '2019-09-10 00:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=verified, 0=not verified',
  `email_verified_at` datetime DEFAULT NULL,
  `mobile` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_paid` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `position` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invite` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `invite_code` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notification_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_token` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profle_photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1=active, 0=in active',
  `user_agrement` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `last_active` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `email`, `is_verified`, `email_verified_at`, `mobile`, `phone`, `tax_paid`, `position`, `invite`, `invite_code`, `notification_status`, `password`, `remember_token`, `verification_token`, `profle_photo`, `status`, `user_agrement`, `last_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dharmendra', 'K', 'nama', '1994-03-05 18:30:00', 'test@test.com', 0, NULL, '123456789', NULL, '1', 'employee', '0', NULL, '0', '$2y$10$FjaO0pC3zxzypQHC9nU7iOhhZ8paCq7FhqPFr10xp/1.vdPPq06qa', NULL, NULL, NULL, 1, '1', NULL, '2019-11-01 06:17:11', '2019-11-02 04:02:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `is_default` tinyint(1) DEFAULT '0' COMMENT '1=default address',
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suburb` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_type` int(10) UNSIGNED DEFAULT NULL,
  `latitute` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitute` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doc_title` varchar(200) NOT NULL,
  `doc_number` varchar(200) NOT NULL,
  `doc_verification_data` longtext NOT NULL,
  `doc_kyc_status` enum('0','1') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `user_id`, `doc_title`, `doc_number`, `doc_verification_data`, `doc_kyc_status`, `status`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 1, 'driving_licence', 'DSLJFLSD', '{\"document\":\"driving_licence\",\"document_number\":null}', '1', '1', '2019-11-02 09:32:28', '2019-11-02 09:36:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`(191));

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_role_admin_user`
--
ALTER TABLE `admin_role_admin_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_user_admin_role_id_foreign` (`admin_role_id`),
  ADD KEY `admin_role_admin_user_admin_user_id_foreign` (`admin_user_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `document_type`
--
ALTER TABLE `document_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_hooks`
--
ALTER TABLE `email_hooks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_hooks_slug_unique` (`slug`);

--
-- Indexes for table `email_preferences`
--
ALTER TABLE `email_preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_templates_email_hook_id_foreign` (`email_hook_id`),
  ADD KEY `email_templates_email_preference_id_foreign` (`email_preference_id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_slug_unique` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_role_admin_user`
--
ALTER TABLE `admin_role_admin_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document_type`
--
ALTER TABLE `document_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_hooks`
--
ALTER TABLE `email_hooks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email_preferences`
--
ALTER TABLE `email_preferences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_role_admin_user`
--
ALTER TABLE `admin_role_admin_user`
  ADD CONSTRAINT `admin_role_admin_user_admin_role_id_foreign` FOREIGN KEY (`admin_role_id`) REFERENCES `admin_roles` (`id`),
  ADD CONSTRAINT `admin_role_admin_user_admin_user_id_foreign` FOREIGN KEY (`admin_user_id`) REFERENCES `admin_users` (`id`);

--
-- Constraints for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD CONSTRAINT `email_templates_email_hook_id_foreign` FOREIGN KEY (`email_hook_id`) REFERENCES `email_hooks` (`id`),
  ADD CONSTRAINT `email_templates_email_preference_id_foreign` FOREIGN KEY (`email_preference_id`) REFERENCES `email_preferences` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
