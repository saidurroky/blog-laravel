-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 07:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_15_202145_create_tbl_admin_table', 1),
(4, '2017_12_15_215219_create_tbl_category_table', 2),
(5, '2017_12_16_103901_create_tbl_blog_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`) VALUES
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `blog_short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `blog_long_description` text COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `blog_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hit_count` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `category_id`, `blog_title`, `blog_short_description`, `blog_long_description`, `publication_status`, `blog_image`, `hit_count`, `created_at`, `updated_at`) VALUES
(1, 1, 'বিজয়ের দিনে সব যুদ্ধাপরাধীর বিচারের দাবি মুক্তিযোদ্ধাদের', '<div class=\"widget storyContent article widget-editable viziwyg-section-104 inpage-widget-85 article_lead_text\">\r\n<h5 class=\" print-only\">বিজয় দিবসে মুক্তিযুদ্ধের বীর শহীদদের প্রতি \r\nশ্রদ্ধা জানাতে জাতীয় স্মৃতিসৌধে এসে সরকারের কাছে মানবতাবিরোধী সব অপরাধীর\r\n বিচার নিশ্চিতের দাবি জানিয়েছেন মুক্তিযোদ্ধারা।&nbsp;<div class=\"fb-quote fb_iframe_widget\" style=\"position: absolute; left: 411px; top: 838px;\"><span style=\"vertical-align: bottom; width: 169px; height: 47px;\"></span></div></h5>\r\n</div>\r\n<div class=\"floatingContent-right \" style=\"width:140px;\">\r\n<div class=\"widget storyContent article widget-editable viziwyg-section-104 inpage-widget-81\">\r\n</div>\r\n</div>\r\n<div class=\"floatingContent-right \" style=\"width:140px;\">\r\n</div>\r\n<div class=\"floatingContent-right \" style=\"width:140px;\">\r\n</div>\r\n<div class=\"floatingContent-right \" style=\"width:140px;\">\r\n</div>\r\n\r\n\r\n\r\n\r\nতারা বলছেন, বিজয় দিবসের চেতনাকে সমুন্নত রাখতে প্রয়োজনে আবারও তারা \r\nযুদ্ধে যেতে রাজি আছেন। পাশাপাশি তরুণদেরকেও এই চেতনা লালন করে দেশকে এগিয়ে\r\n নেবার আহ্বান জানান', 'মুক্তিযোদ্ধারা যখন তাদের দাবির কথা বলছিলেন, তখন জাতীয় স্মৃতিসৌধ \r\nপ্রাঙ্গণে ফুল নিয়ে শহীদদের প্রতি শ্রদ্ধা জানাতে ছিল সর্বস্তরের মানুষের \r\nঅপেক্ষার দীর্ঘ লাইন। তার উল্টো দিকে হুইল চেয়ারে করে প্রতিবন্ধী \r\nশিশু-কিশোরাও এসেছেন শহীদদের ফুল দিয়ে শ্রদ্ধা জানাতে।<p>তার আগে \r\nভোরেই ফুলে ফুলে ছেয়ে যায় স্মৃতিসৌধ। লাখো মানুষের ভিড়, কোলাহল, \r\nস্মৃতিসৌধের আরো কাছে যেতে শিশুদের বায়না আর কিশোর যুবকদের স্লোগানে তখন \r\nস্মৃতিসৌধ প্রাঙ্গণ ছিল মুখরিত।</p><p>একটু পর পরই শোনা যাচ্ছিল জাতির জনক \r\nবঙ্গবন্ধু শেখ মুজিবুর রহমান স্মরণে তরুণদের ‘বিজয়ের এই দিনে/ মুজিব তোমায় \r\nপড়ে মনে’ ও ‘জয় বাংলা জয় বঙ্গবন্ধু’ সহ বিভিন্ন স্লোগান।’ পাশাপাশি বিভিন্ন\r\n সাংস্কৃতিক ও শ্রমিক সংগঠনের কন্ঠে শোনা যাচ্ছিল, ‘বীর বাঙালির হাতিয়ার/ \r\nগর্জে উঠুক আরেকবার’, ‘জামায়াত শিবির রাজাকার/ এই মুহূর্তে বাংলা ছাড়’ \r\nস্লোগানও।</p>', 1, 'public/blog_image/9g6Gz2V9hzgDIp7UMuJ8.jpg', 4, NULL, NULL),
(2, 4, 'বিজয়ী জাতি, চলব মাথা উঁচু করে: হাসিনা', 'বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।', 'বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।', 1, 'public/blog_image/t5LczwW443z213FhBg39.png', 0, NULL, NULL),
(3, 5, 'বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকী', 'বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।', 'বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।', 1, 'public/blog_image/Gb0uKf50r2EXqx93yeIb.png', 0, NULL, NULL),
(4, 7, 'বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ', 'বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।', 'বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।বাঙালির স্বাধীনতা সংগ্রামে বিজয়ের ৪৬তম বার্ষিকীতে শনিবার সন্ধ্যায় ভিডিও\r\n কনফারেন্সে সোহরাওয়ার্দী উদ্যানে সাংস্কৃতিক অনুষ্ঠানের উদ্বোধনী \r\nবক্তব্যে একথা বলেন তিনি।', 1, 'public/blog_image/SaiGtNejB3bdSZwRRqJW.png', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'sroky', 'rlasmd;ajdahodlzcnoohsc', 1, NULL, NULL),
(3, 'saidur', 'n.nknjllj/h', 0, NULL, NULL),
(4, 'বাংলাদেশ ', '......', 1, NULL, NULL),
(5, 'খেলা ', '...', 1, NULL, NULL),
(6, ' টেক ', '...', 1, NULL, NULL),
(7, 'লাইফস্টাইল ', '....', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
