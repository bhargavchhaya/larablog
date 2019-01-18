-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2019 at 03:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'CategoryOne', 'CategoryOne', '2019-01-18 07:44:04', '2019-01-18 07:44:04'),
(2, 'CategoryTwo', 'CategoryTwo', '2019-01-18 08:59:54', '2019-01-18 08:59:54'),
(3, 'CategoryThree', 'CategoryThree', '2019-01-18 09:00:14', '2019-01-18 09:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 1, '2019-01-18 08:00:40', '2019-01-18 08:00:40'),
(3, 1, '2019-01-18 08:14:16', '2019-01-18 08:14:16'),
(3, 2, '2019-01-18 09:00:35', '2019-01-18 09:00:35'),
(3, 3, '2019-01-18 09:00:35', '2019-01-18 09:00:35');

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
(3, '2019_01_17_063108_create_posts_table', 1),
(4, '2019_01_17_063657_create_tags_table', 1),
(5, '2019_01_17_063835_create_categories_table', 1),
(6, '2019_01_17_063933_create_category_posts_table', 1),
(7, '2019_01_17_064127_create_post_tags_table', 1),
(8, '2019_01_17_064327_create_admins_table', 1),
(9, '2019_01_17_064650_create_roles_table', 1),
(10, '2019_01_17_064749_create_admin_roles_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `body`, `status`, `posted_by`, `image`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(2, 'Neque porro quisquam dolorem ipsum', 'There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain', 'Nequeporroquisquamestquidoloremipsumquia', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Nulla mollis consequat justo non congue. Nullam neque neque, faucibus sit amet purus at, rutrum vehicula enim. Cras euismod lorem id est aliquet, sit amet iaculis quam fermentum. Curabitur sit amet felis dui. Curabitur vitae metus sed magna aliquam suscipit nec at nisl. Vivamus ipsum purus, tincidunt eget sagittis sit amet, consectetur et tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus et fermentum turpis, eget consequat eros. Phasellus metus libero, condimentum eleifend augue in, semper ornare leo. Quisque id lectus tempor, dignissim ipsum vitae, tincidunt nibh. Donec viverra aliquet nisl, id efficitur risus volutpat quis. Donec interdum enim eu molestie venenatis. Quisque ac mauris tempus, blandit lorem ut, vestibulum libero.</p>\r\n\r\n<p>Fusce pretium est auctor, scelerisque purus sit amet, facilisis urna. Maecenas a vulputate dui, sit amet efficitur elit. In hac habitasse platea dictumst. Nunc blandit venenatis risus, at sollicitudin nisl placerat vitae. Sed aliquet pretium egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur id scelerisque lacus. Cras non mauris nunc. Maecenas sed dolor ac magna condimentum rhoncus. Nullam tellus est, ultricies sagittis risus vitae, feugiat convallis elit.</p>\r\n\r\n<p>Ut sodales lorem in leo ornare ultrices. Phasellus sit amet libero laoreet orci facilisis fermentum varius eget mi. Quisque ullamcorper maximus mi vitae suscipit. Morbi lorem libero, tincidunt nec nulla pretium, dignissim ullamcorper tortor. Integer pulvinar augue nec orci cursus fringilla. Donec a nisl gravida, aliquam nisl eu, accumsan sapien. Cras id risus in magna luctus mattis.</p>\r\n\r\n<p>Fusce nec nulla odio. Curabitur in mauris vitae eros vehicula volutpat vitae in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nec diam ut felis vehicula lacinia. Donec sit amet imperdiet arcu, vel auctor lorem. Maecenas ornare lorem lacus, ultricies maximus nulla pellentesque quis. Nullam aliquam mollis est a ornare.</p>\r\n\r\n<p>Suspendisse mattis feugiat tortor, vel maximus magna. Nulla tempus lacinia imperdiet. Nullam euismod risus ut nunc volutpat euismod. Donec erat sapien, fermentum sed malesuada at, fringilla quis justo. In posuere, urna sed laoreet efficitur, leo orci ultricies ante, sed iaculis quam ante ut enim. Quisque non blandit felis. Donec eget magna velit. Quisque ut euismod tellus, ac egestas leo. Sed felis quam, viverra vel convallis eu, imperdiet vitae justo.</p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:26px\"><span style=\"color:#2980b9\"><strong>Lorem ipsum dolor sit amet</strong></span></span></span></p>\r\n\r\n<p>Donec in justo in justo feugiat bibendum. Curabitur in consequat massa, sed ornare lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi feugiat tempor scelerisque. Aliquam vitae porta risus, vitae facilisis ex. Nulla facilisi. Proin tincidunt est a dui ultrices sollicitudin. Phasellus placerat volutpat sem, malesuada vulputate odio blandit et. Sed sapien urna, posuere quis quam vitae, mollis rhoncus lectus. Sed eleifend dolor ac tellus ornare, in placerat erat pharetra. Aenean vestibulum gravida efficitur. Nullam nec ultricies nibh. Ut blandit egestas erat. Etiam ut auctor neque. Sed mi dolor, posuere eget dui a, eleifend blandit neque.</p>\r\n\r\n<p><strong>Vestibulum consequat nec justo et faucibus. Suspendisse ac congue erat. Curabitur vitae ultrices quam. Pellentesque in facilisis justo, id euismod nisi. Praesent nec augue sed nulla commodo dictum eget ac nisl. Morbi ornare mattis mattis. Nunc commodo, magna eu euismod ultricies, </strong>mauris ante posuere erat, sit amet sollicitudin ligula mi eu est. Ut sodales magna in tellus consequat, vitae gravida magna ornare. Aenean convallis nisi et justo egestas aliquet.</p>\r\n\r\n<p>Integer imperdiet, est quis ullamcorper maximus, mi dui gravida orci, eu molestie libero velit quis risus. Cras fringilla magna in sapien imperdiet, eu accumsan orci feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec sit amet lacus leo. Mauris eleifend sit amet erat et vestibulum. In viverra metus lectus, in auctor neque pellentesque a. Fusce eget fringilla est. Suspendisse potenti. Mauris nec dui tortor. Nunc lobortis viverra mi, nec dapibus odio fringilla vitae.</p>\r\n\r\n<p>Vestibulum sed tempor dui, quis dignissim mi. Pellentesque venenatis turpis vitae finibus lobortis. In pretium, augue vitae ultricies pellentesque, metus massa gravida enim, ac molestie massa sem commodo arcu. Cras venenatis in dolor et blandit. Nullam ut lacus fringilla, ullamcorper nisl ac, condimentum neque. Sed sollicitudin dui viverra dapibus feugiat. Etiam tempor malesuada nulla ac luctus. Nulla id molestie ante. Praesent arcu mauris, commodo in turpis a, luctus porta lorem. Nam ultricies pellentesque blandit.</p>\r\n\r\n<p><strong>Integer faucibus ultricies risus in accumsan. Curabitur efficitur eleifend maximus. Donec tincidunt nibh vitae nulla consequat placerat. Proin orci enim, fermentum quis dui sit amet, posuere efficitur sapien. Sed non ex blandit, varius orci eu, placerat nulla. Sed hendrerit erat et odio blandit, sed rutrum purus tincidunt. Suspendisse efficitur sem dictum faucibus feugiat. Praesent non ipsum in felis imperdiet tempor vel quis risus. Mauris auctor sed magna vel volutpat.</strong></p>', 1, NULL, NULL, NULL, NULL, '2019-01-18 08:00:40', '2019-01-18 08:34:07'),
(3, 'The standard Lorem Ipsum passage, used since the 1500s', 'The standard Lorem Ipsum passage, used since the 1500s', 'The standard Lorem Ipsum passage, used since the 1500s', '<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center &mdash; an equal earth which all men occupy as equals. The airman&#39;s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n\r\n<p>Science cuts two ways, of course; its products can be used for both good and evil. But there&#39;s no turning back from science. The early warnings about technological dangers also come from science.</p>\r\n\r\n<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>\r\n\r\n<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That&#39;s how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>\r\n\r\n<p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>\r\n\r\n<h2>The Final Frontier</h2>\r\n\r\n<p>There can be no thought of finishing for &lsquo;aiming for the stars.&rsquo; Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<p>There can be no thought of finishing for &lsquo;aiming for the stars.&rsquo; Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>\r\n\r\n<p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>\r\n\r\n<h2>Reaching for the Stars</h2>\r\n\r\n<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>\r\n\r\n<p><a href=\"http://localhost:8000/post#\"><img alt=\"\" src=\"http://localhost:8000/img/post-sample-image.jpg\" /></a>To go places and do things that have never been done before &ndash; that&rsquo;s what living is all about.</p>\r\n\r\n<p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>\r\n\r\n<p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there&rsquo;s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>\r\n\r\n<p>Placeholder text by&nbsp;<a href=\"http://spaceipsum.com/\">Space Ipsum</a>. Photographs by&nbsp;<a href=\"https://www.flickr.com/photos/nasacommons/\">NASA on The Commons</a>.</p>', 1, NULL, NULL, NULL, NULL, '2019-01-18 08:14:16', '2019-01-18 08:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, '2019-01-18 08:00:40', '2019-01-18 08:00:40'),
(3, 3, 1, '2019-01-18 08:14:16', '2019-01-18 08:14:16'),
(4, 3, 2, '2019-01-18 09:00:35', '2019-01-18 09:00:35'),
(5, 3, 3, '2019-01-18 09:00:35', '2019-01-18 09:00:35'),
(6, 3, 4, '2019-01-18 09:00:35', '2019-01-18 09:00:35'),
(7, 3, 5, '2019-01-18 09:00:35', '2019-01-18 09:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'TagOne', 'TagOne', '2019-01-18 07:44:15', '2019-01-18 07:44:15'),
(2, 'TagTwo', 'TagTwo', '2019-01-18 08:58:47', '2019-01-18 08:58:47'),
(3, 'TagThree', 'TagThree', '2019-01-18 08:59:01', '2019-01-18 08:59:01'),
(4, 'TagFour', 'TagFour', '2019-01-18 08:59:13', '2019-01-18 08:59:13'),
(5, 'TagFive', 'TagFive', '2019-01-18 08:59:22', '2019-01-18 08:59:22');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD KEY `category_posts_post_id_index` (`post_id`),
  ADD KEY `category_posts_category_id_index` (`category_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tags_post_id_index` (`post_id`),
  ADD KEY `post_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
