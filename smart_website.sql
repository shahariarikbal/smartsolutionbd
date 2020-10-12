-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 05:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `description`, `images`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Web Application Software.', '<p>Company Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portal</p>', '1568033403_blog_image_g2.jpg', 1, '2019-09-09 06:50:03', '2019-09-09 06:50:03'),
(3, 1, 'Software Management System', '<p>আগেই ঘোষণা দিয়েছেন এটাই ক্যারিয়ারের শেষ টেস্ট ম্যাচ মোহাম্মদ নবীর। সাদা পোশাকে আর দেখা যাবে না আন্তর্জাতিক টেস্ট ম্যাচে। আর শেষ টেস্ট ম্যাচটি স্মরণীয় হয়ে থাকল নবীর কাছে।</p>', '1568033693_blog_image_438858_138.jpg', 1, '2019-09-09 06:54:53', '2019-09-09 06:54:53'),
(4, 1, 'Customizing The Paginator URI', '<p>The&nbsp;<code>withPath</code>&nbsp;method allows you to customize the URI used by the paginator when generating links. For example, if you want the paginator to generate links like&nbsp;<code>http://example.com/custom/url?page=N</code>, you should pass&nbsp;<code>custom/url</code>&nbsp;to the&nbsp;<code>withPath</code>&nbsp;method:</p>', '1568045847_blog_image_ab1.jpg', 1, '2019-09-09 10:17:27', '2019-09-09 10:17:27'),
(5, 1, 'Displaying Pagination Results', '<p>When calling the&nbsp;<code>paginate</code>&nbsp;method, you will receive an instance of&nbsp;<code>Illuminate\\Pagination\\LengthAwarePaginator</code>. When calling the&nbsp;<code>simplePaginate</code>&nbsp;method, you will receive an instance of&nbsp;<code>Illuminate\\Pagination\\Paginator</code>. These objects provide several methods that describe the result set. In addition to these helpers methods, the paginator instances are iterators and may be looped as an array. So, once you have retrieved the results, you may display the results and render the page links using&nbsp;<a href=\"https://laravel.com/docs/6.0/blade\">Blade</a>:</p>', '1568045873_blog_image_bann.jpg', 1, '2019-09-09 10:17:54', '2019-09-09 10:17:54'),
(6, 1, 'Manually Creating A Paginator', '<p>The&nbsp;<code>Paginator</code>&nbsp;class does not need to know the total number of items in the result set; however, because of this, the class does not have methods for retrieving the index of the last page. The&nbsp;<code>LengthAwarePaginator</code>&nbsp;accepts almost the same arguments as the&nbsp;<code>Paginator</code>; however, it does require a count of the total number of items in the result set.</p>', '1568045894_blog_image_a3.jpg', 1, '2019-09-09 10:18:14', '2019-09-09 10:18:14'),
(9, 1, 'কথাই শুনছে না ঠিকাদাররা', '<p>কথা ছিল, চট্টগ্রামে মুক্তিযোদ্ধা কল্যাণ ট্রাস্টের জমিতে ২৯ তলাবিশিষ্ট &#39;টাওয়ার-৭১&#39; ও ১৯ তলাবিশিষ্ট &#39;জয় বাংলা&#39; বাণিজ্যিক ভবনের নির্মাণকাজ ঠিক সময়েই শেষ হবে। কিন্তু তিন বছর পেরিয়ে গেলেও তা শেষ হয়নি। তা ছাড়া কবে নির্মাণকারী প্রতিষ্ঠান কাজ শেষ করে কবে নাগাদ ভবন হস্তান্তর করতে পারবে, তা-ও নিশ্চিত করে বলতে পারছে না কেউ। মন্ত্রণালয়ের দেওয়া কয়েক দফা চিঠি ও সংসদীয় কমিটির পরামর্শ ও সুপারিশ আমলে না নিয়ে এক রহস্যজনক ভূমিকায় অবতীর্ণ হয়েছে ঠিকাদারি প্রতিষ্ঠানগুলো।</p>', '1568047035_blog_image_Untitled-49-5d75575f5d9da.jpg', 1, '2019-09-09 10:37:15', '2019-09-09 10:37:15'),
(10, 1, 'Software Management System', '<p>Software Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management SystemSoftware Management System</p>', '1568060737_blog_image_438858_138.jpg', 1, '2019-09-09 14:25:38', '2019-09-09 14:25:38'),
(11, 1, 'Company Web Site with Personal web portal', '<p>Company Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portalCompany Web Site with Personal web portal</p>', '1568102180_blog_image_Untitled-49-5d75575f5d9da.jpg', 1, '2019-09-10 01:56:20', '2019-09-10 01:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `customer_questions`
--

CREATE TABLE `customer_questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_questions`
--

INSERT INTO `customer_questions` (`id`, `name`, `email`, `phone_number`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shahariar', 'super@gmail.com', '0987654321', 'What is Web Application', NULL, 0, NULL, '2019-09-09 05:37:36'),
(3, 'Admin', 'super@info.com', '12345678', 'A web application is a computer program that utilizes web browsers and web technology to perform tasks over the Internet', NULL, 0, NULL, '2019-09-09 05:37:33'),
(4, 'Shahariar', 'super@gmail.com', '324354543543', 'sdfdsfdsfdsggfgfdgfgf', '<p>A web application is a computer program that utilizes web browsers and web technology to perform tasks over the Internet.</p>\r\n\r\n<p>A web application is a computer program that utilizes web browsers and web technology to perform tasks over the Internet.</p>\r\n\r\n<p>A web application is a computer program that utilizes web browsers and web technology to perform tasks over the Internet.</p>\r\n\r\n<p>A web application is a computer program that utilizes web browsers and web technology to perform tasks over the Internet.</p>', 1, NULL, '2019-09-09 02:19:27');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_09_04_050819_create_sliders_table', 2),
(4, '2019_09_04_062819_create_products_table', 3),
(5, '2019_09_04_093741_create_services_table', 4),
(6, '2019_09_08_155428_create_supports_table', 5),
(7, '2019_09_08_164437_create_customer_questions_table', 6),
(8, '2019_09_09_114916_create_blogs_table', 7),
(9, '2019_09_09_174455_create_tags_table', 8),
(10, '2019_09_10_064920_create_product_details_table', 9),
(11, '2019_09_10_092417_create_post_details_table', 9),
(12, '2019_09_10_113043_create_registers_table', 10);

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
-- Table structure for table `post_details`
--

CREATE TABLE `post_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_details`
--

INSERT INTO `post_details` (`id`, `name`, `email`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'Shahariar', 'shahariar.ikbal86@gmail.com', 'Hello This is Test Blog post Comments...............', '2019-09-10 04:22:01', '2019-09-10 04:22:01'),
(2, 'Shahariar Ikbal', 'super@gmail.com', 'We are seeking an entrepreneur that wants to build the next big tech company. We are looking for brilliant dreamers, thinkers, and doers, that want to make a difference.', '2019-09-10 04:23:38', '2019-09-10 04:23:38'),
(3, 'Shahariar', 'super@gmail.com', 'aksjhfdkhgjgadgjfdjd', '2019-09-10 04:31:38', '2019-09-10 04:31:38'),
(4, 'Admin', 'admin@gmail.com', 'Text commentsText commentsText commentsText commentsText commentsText commentsText commentsText commentsText commentsText commentsText commentsText comments.................', '2019-09-10 04:37:42', '2019-09-10 04:37:42'),
(5, 'MD Shahariar Ikbal', 'admin@gmail.com', 'ulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero.', '2019-09-10 04:51:06', '2019-09-10 04:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `price` double(8,2) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `short_description`, `price`, `description`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1567580088_product_image_a3.jpg', 'Hospital Management System', NULL, NULL, '<p>Hospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management SystemHospital Management System</p>', 1, NULL, '2019-09-04 00:54:49', '2019-09-04 00:56:03'),
(2, '1567584431_product_image_a2.jpg', 'Point Off Sale (POS)', NULL, NULL, '<p>Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)Poitn Off Sale (POS)</p>', 1, NULL, '2019-09-04 02:07:11', '2019-09-04 02:07:11'),
(4, '1567584510_product_image_a3.jpg', 'School Management System', NULL, NULL, '<p>School Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management SystemSchool Management System</p>', 1, NULL, '2019-09-04 02:08:30', '2019-09-04 02:08:30'),
(7, '1567699065_product_image_a4.jpg', 'Web Development', 'Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development', 30000.00, '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', 1, NULL, '2019-09-05 09:57:45', '2019-09-05 09:57:45'),
(8, '1567702009_product_image_a4.jpg', 'Hospital Management Software', 'Hospital Management SoftwareHospital Management SoftwareHospital Management Software', 500000.00, '<p>Hospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management Software</p>', 1, NULL, '2019-09-05 10:46:49', '2019-09-05 10:46:49'),
(9, '1567702039_product_image_a2.jpg', 'Point Off Sale (POS)', 'Hospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management Software', 40000.00, '<p>Hospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management Software</p>', 1, NULL, '2019-09-05 10:47:19', '2019-09-05 10:47:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` int(11) NOT NULL,
  `service_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `phone_number`, `state`, `city`, `address`, `service`, `service_details`, `created_at`, `updated_at`) VALUES
(1, 'Shahariar', 'shahariar.ikbal86@gmail.com', '12345678900', 'Bangladesh', 'Dhaka', 'Dinajpur Sadar', 9, 'I want e Point of sale software for my own Business', '2019-09-10 11:53:48', '2019-09-10 11:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `name`, `description`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '1567591390_service_image_a2.jpg', 'Web Development', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', 1, NULL, '2019-09-04 04:03:10', '2019-09-04 04:50:24'),
(3, '1567591470_service_image_bann.jpg', 'Web Design', '<p>Web DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb DesignWeb Design</p>', 1, NULL, '2019-09-04 04:04:30', '2019-09-04 04:04:30'),
(4, '1567591486_service_image_a1.jpg', 'Graphics Design', '<p>Graphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics DesignGraphics Design</p>', 1, NULL, '2019-09-04 04:04:46', '2019-09-04 04:04:46'),
(5, '1567591507_service_image_g2.jpg', 'Wordpress Theme Customization', '<p>Wordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme Customization</p>', 1, NULL, '2019-09-04 04:05:07', '2019-09-04 04:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `name`, `description`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1567575616_slider_image_66759895_879599205731441_3144703521450885120_n.jpg', 'Web Development', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', 1, NULL, '2019-09-03 23:40:16', '2019-09-03 23:40:16'),
(3, '1567577639_slider_image_ab1.jpg', 'Point Off Sell', '<p>Point OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf SellPoint OFf Sell</p>', 1, NULL, '2019-09-04 00:13:59', '2019-09-04 00:13:59'),
(4, '1567577711_slider_image_g9.jpg', 'Hospital Management Software', '<p>Hospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management SoftwareHospital Management Software</p>', 1, NULL, '2019-09-04 00:15:11', '2019-09-04 00:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What is your name', '<p>My name is Selim khan.My name is Selim khan&nbsp;My name is Selim khan&nbsp;My name is Selim khan</p>', 1, '2019-09-08 10:18:35', '2019-09-08 10:24:34'),
(2, 'What is Web Application', '<p>A web application is a computer program that utilizes web browsers and web technology to perform tasks over the Internet.</p>\r\n\r\n<p>A web application is a computer program that utilizes web browsers and web technology to perform tasks over the Internet.</p>', 1, '2019-09-08 10:30:26', '2019-09-08 10:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tag_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `user_id`, `tag_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Php', 1, '2019-09-09 12:23:51', '2019-09-09 12:24:25'),
(2, 1, 'Laravel', 1, '2019-09-09 12:24:33', '2019-09-09 12:24:33'),
(3, 1, 'JavaScript', 1, '2019-09-09 12:24:52', '2019-09-09 12:24:52'),
(4, 1, 'html', 1, '2019-09-09 12:47:28', '2019-09-09 12:47:28'),
(5, 1, 'Php', 1, '2019-09-09 12:47:36', '2019-09-09 12:47:36'),
(6, 1, 'Ajax', 1, '2019-09-09 13:10:03', '2019-09-09 13:10:03'),
(7, 1, 'Java', 1, '2019-09-09 13:10:13', '2019-09-09 13:10:13'),
(8, 1, 'Php', 1, '2019-09-09 13:11:21', '2019-09-09 13:11:21'),
(9, 1, 'html5', 1, '2019-09-09 13:13:15', '2019-09-09 13:13:15'),
(10, 1, 'IT Service', 1, '2019-09-09 13:15:46', '2019-09-09 13:15:46'),
(11, 1, 'JavaScript', 1, '2019-09-09 13:18:34', '2019-09-09 13:19:16'),
(12, 1, 'Test', 1, '2019-09-09 13:35:28', '2019-09-09 13:35:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$elJR8w0GJrPe0xqtKKzKyeKoQdwMC866VYL5jWuCzMrxjD5d5qzRi', 'qfksk4iCQ0dwVZorLh99fXasU3M8wWjQNDUxzJKTBaN6EsJaw2uvxDo6Mq7v', '2019-09-03 09:57:47', '2019-09-03 09:57:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_questions`
--
ALTER TABLE `customer_questions`
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
-- Indexes for table `post_details`
--
ALTER TABLE `post_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_questions`
--
ALTER TABLE `customer_questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post_details`
--
ALTER TABLE `post_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
