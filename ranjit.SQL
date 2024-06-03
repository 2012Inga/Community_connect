-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2015 at 02:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ranjit`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bio` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `bio`, `created_at`, `updated_at`) VALUES
(1, 'Ranjeet Karki', 'This is Bio', '2014-12-11 02:27:13', '2014-12-11 02:27:13'),
(2, 'Author Number 2', 'This is Bio 2', '2014-12-11 02:27:13', '2014-12-11 02:27:13'),
(3, 'ranjit1', 'nnnn', '2014-12-20 19:51:08', '2014-12-20 19:51:08'),
(4, ' song', 'nnnn', '2014-12-20 19:51:16', '2014-12-20 19:51:16'),
(5, ' song', 'nnnn', '2014-12-20 19:52:01', '2014-12-20 19:52:01'),
(6, ' song', 'nnnn', '2014-12-20 19:55:35', '2014-12-20 19:55:35'),
(7, 'hhhhhh', 'mkn', '2014-12-20 19:55:41', '2014-12-20 19:55:41'),
(8, 'ranjit1', 'nnnn', '2014-12-20 19:59:53', '2014-12-20 19:59:53'),
(9, ' song', 'nnnn', '2014-12-20 20:00:39', '2014-12-20 20:00:39'),
(10, 'ranjit1', 'mkn', '2014-12-20 20:10:25', '2014-12-20 20:10:25'),
(11, 'ranjit1', 'mkn', '2014-12-20 20:11:45', '2014-12-20 20:11:45'),
(12, 'hello', 'app', '2014-12-20 20:12:02', '2014-12-20 20:12:02'),
(13, ' song', 'mkn', '2014-12-20 20:13:09', '2014-12-20 20:13:09'),
(14, ' song', 'mkn', '2014-12-20 20:15:16', '2014-12-20 20:15:16'),
(15, 'ranjit1', 'mkn', '2014-12-21 00:48:41', '2014-12-21 00:48:41'),
(16, ' song', 'mkn', '2014-12-21 00:49:28', '2014-12-21 00:49:28'),
(17, 'f', 'f', '2014-12-21 00:50:21', '2014-12-21 00:50:21'),
(18, ' song', 'app', '2014-12-21 02:04:42', '2014-12-21 02:04:42'),
(19, 'aa', 'aaa', '2014-12-21 04:31:14', '2014-12-21 04:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_12_11_074444_create_authors_table', 1),
('2014_12_11_075702_add_authors', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `title` varchar(240) NOT NULL,
  `slug` varchar(240) NOT NULL,
  `draft` tinyint(1) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `draft`, `body`, `created_at`, `updated_at`) VALUES
(1, 'we have lunched', 'lauch', 0, 'we launch our website today!we launch our website today!we launch our website today!we launch our website today!we launch our website today!we launch our website today!', '2014-12-02 18:15:00', '2014-12-03 18:15:00'),
(2, 'Lorem Ipsum ', '', 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2014-12-21 10:08:14', '0000-00-00 00:00:00'),
(3, '', '', 0, '', '2014-12-21 04:32:45', '2014-12-21 04:32:45'),
(4, '', '', 0, '', '2014-12-21 04:32:51', '2014-12-21 04:32:51'),
(5, '', '', 0, '', '2014-12-21 04:33:10', '2014-12-21 04:33:10'),
(6, ' song', '', 0, 'mkn', '2014-12-21 04:34:15', '2014-12-21 04:34:15'),
(7, 'Lorem Ipsum ', '', 0, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', '2014-12-21 04:34:38', '2014-12-21 04:34:38'),
(8, ' song', '', 0, 'nnnn', '2014-12-21 04:38:24', '2014-12-21 04:38:24'),
(9, 'ranjit1', '', 0, 'mkn', '2014-12-21 04:38:55', '2014-12-21 04:38:55'),
(10, 'aaaa', '', 0, 'aaa', '2014-12-21 22:47:19', '2014-12-21 22:47:19'),
(11, '?Ruby on Rails ', '', 0, ' New Business Age (P) Ltd. has been publishing New Business Age (monthly business magazine in English), Aarthik Abhiyan (national business daily in Nepali)..', '2014-12-22 05:29:36', '2014-12-22 05:29:36'),
(12, 'nepali song', '', 0, ' New Business Age (P) Ltd. has been publishing New Business Age (monthly business magazine in English), Aarthik Abhiyan (national business daily in Nepali)..', '2014-12-22 06:59:11', '2014-12-22 06:59:11'),
(13, '', '', 0, '', '2014-12-23 00:25:41', '2014-12-23 00:25:41'),
(14, '', '', 0, '', '2015-01-22 18:38:47', '2015-01-22 18:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(44) NOT NULL,
  `password` varchar(128) NOT NULL,
  `password_temp` varchar(128) NOT NULL,
  `code` varchar(125) NOT NULL,
  `active` int(11) NOT NULL,
  `remember_token` varchar(200) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `password_temp`, `code`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'curium_12@yahoo.com', 'ranjit', '$2y$10$baLqkr0Tfckj9SJImuqBwe3/WEqTPYf9Pgatl3dl0RYljffX78r8.', '', 'wQfM0kN9I80zX59knQbFqZgMs9wCQmCCdYvTONCGSoBKE38IK9PCh1kv3Wz5', 0, '', '2014-12-17 07:08:51.000000', '2014-12-17 07:08:51.000000'),
(4, 'ranjitkarki2@gmail.com', 'ranjit1', '$2y$10$2lZLn650wcOc4nwjjB/h7Oen9fOhvbZCXlXRXpEnpp6Wa26MaXxNm', '', 'AJRZdwEEiwQDUaCbdaYUSmFwGSsdHnrUU3s3ONPMVtQXn69x9UOFLF14zphO', 0, '', '2014-12-17 07:18:17.000000', '2014-12-17 07:18:17.000000'),
(5, 'ranjitkarki21@gmail.com', 'Username', '$2y$10$9ewGBWP3gj2xjaqQvcrxHuFSWZ8zxy4At7D6xK7yb9kssJdrofvH.', '', 'DHLAKn4yRV1SfqUa9Y9OQD1JLI9ZqV0VDtcgcAtbWl6k89ZwXkWV4CO2ZGNP', 0, '', '2014-12-17 07:20:51.000000', '2014-12-17 07:20:51.000000'),
(6, 'c_12@yahoo.com', 'ranjitvai', '$2y$10$h6/sLH9IhEb019NULQXfteW7YX9QGA0wUhE.041VjJcnvHMVmrPbC', '', 'FDp1rd1pXZ89YgLgMV5sgzuxi1NZwPAkBhry6YtOGzW2xjizIUXDow3Mr8rj', 0, '', '2014-12-17 07:21:48.000000', '2014-12-17 07:21:48.000000'),
(7, 'c3_12@yahoo.com', 'ranjit33', '$2y$10$oLpHyY7PhRPhN.lSdZJUJeBsvyg5Z.WV4VObHj3pJ8Gj0r95D1jgu', '', 'Ngic1rJn12n5nhZGPh3MCFg8GUdwl5Cg4tMhXfqFofuVUpg8iSiHDfSaOAwD', 0, '', '2014-12-17 07:25:21.000000', '2014-12-17 07:25:21.000000'),
(8, 'c3_n12@yahoo.com', 'ranjit1y', '$2y$10$e0LShUckko825urGNhVpeeBDt3vYZI9XeYhCujGV/YLPaigyG3Q.e', '', 'QbXad0x886vSmXA98nAfdCKNLpDXp5ug54jUA6N7dc1QQUAi5J5ket7JuhBf', 0, '', '2014-12-17 07:30:33.000000', '2014-12-17 07:30:33.000000'),
(9, 'cn3_n12@yahoo.com', 'adminm', '$2y$10$Jx1707Qia40gid1SBGLL2ujGKjCBTKxNulGKlD7pCextk/YGbWqgW', '', 'tsfpUfIbDpVrYm6PaoFE01rEQONDkjtM8TeBaYb78ys7XibduwYyy6BALlBk', 0, '', '2014-12-17 07:31:44.000000', '2014-12-17 07:31:44.000000'),
(10, 'cn34_n12@yahoo.com', '44444', '$2y$10$vsNWbsB8H1u74SXFjuQu6.dK4.rGYqu6HJ0dwyMVDFsbmmm6xT8uK', '', 'iUGFoR9gZDlOoTscm48vDIe2ZEhjbxTjAWMrrsr7ogDqOR8qBC9pTUTnAB4R', 0, '', '2014-12-17 07:33:57.000000', '2014-12-17 07:33:57.000000'),
(11, 'cn3q4_n12@yahoo.com', 'applemango', '$2y$10$H8e6Pc6iv3rJaPsWeBUgu.dKKlrpbu1eClmjBt/dYjqLi9ZGq5GpW', '', '', 1, '', '2014-12-17 07:37:30.000000', '2014-12-17 07:50:56.000000'),
(12, 'ranjitkarki22@gmail.com', 'Ranjeet', '$2y$10$FbtuzogeJB6wgVJwTmG.yukhL9qXy2T1a7RHUroPt7jNzW68P5yCK', '', 'XnDUVHX98SYK9FYGSdHPORNu3fqXobFGEOJ7HqBITPsskh497wgkknGTQqu1', 0, '', '2014-12-17 07:51:44.000000', '2014-12-17 07:51:44.000000'),
(13, 'curiumn_12@yahoo.com', 'adminmm', '$2y$10$HoZJQNLk8ayyD.UtUpPbc.1QC3YV.5bwHTr2XjGVqp4AEAt0NqUyy', '', '', 1, 'DSA3BBGMOEVzsGgl4H39KaaGmRD8oROcuHnABcVZmGrmMAEuxtmsR03E1TIL', '2014-12-17 07:53:39.000000', '2015-01-23 00:25:01.000000'),
(14, 'c_r1@yahoo.com', 'Username1', '$2y$10$ObnRPyYKrbLr/mb2BzEtdeYo1PDKbmRUwbOoNub8m1b7myaPMUXGa', '', '2vR8DcEhR2ugo0TWjMMZxVTdIgrvjSz5J1zM0EfpbZJl56DJeM0fQP5QJG6S', 0, '', '2014-12-19 01:47:13.000000', '2014-12-19 01:47:13.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
