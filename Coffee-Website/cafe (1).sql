-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 30, 2021 at 12:29 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'admin', 'admin@gmail.com', '$2y$12$DBKo.YuqLaJzxgI3XCVfr.wKHDtAUuYFbIyE6MavMBP9uy7xHsX8S', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `seo_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `slug`, `status`, `seo_title`, `seo_description`, `seo_keyword`, `created_at`, `updated_at`) VALUES
(18, 'danh muc 1x', 0, 'danh-muc-1x', 1, 'danh muc 1', 'danh muc 1', 'danh muc 1', '2021-03-29 12:06:19', '2021-03-29 12:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total` double DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `status`, `note`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(310, 800000, 1, 'wdeded', 'truong viet', 'truongvietbg@gmail.com', '0359334045', 'Ha Noi', '2021-03-30 06:18:08', '2021-03-29 23:18:08'),
(311, 600000, 0, 'yhuu', 'hhjh', 'admin@gmail.com', '0359334045', 'Ha Noi', '2021-03-30 00:09:56', '2021-03-30 00:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `pro_id`, `qty`, `id_order`, `created_at`, `updated_at`) VALUES
(6, 1, 3, 310, '2021-03-29 23:03:40', '2021-03-29 23:03:40'),
(7, 2, 1, 310, '2021-03-29 23:03:40', '2021-03-29 23:03:40'),
(8, 1, 3, 311, '2021-03-30 00:09:56', '2021-03-30 00:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `hot` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `description`, `content`, `image`, `hot`, `created_at`, `updated_at`) VALUES
(24, '9 L???i ??ch S???c Kh???e B???t Ng??? ??? Khoa H???c ???? Ch???ng Minh', '9-loi-ich-suc-khoe-bat-ngo-khoa-hoc-da-chung-minh', '<p>Theo c&aacute;c nh&agrave; khoa h???c, u???ng c&agrave; ph&ecirc; ??i???u ????? kh&ocirc;ng g&acirc;y h???i s???c kh???e m&agrave; c&ograve;n c&oacute; th??? mang l???i nh???ng l???i &iacute;ch tuy???t</p>', '<p>D?????i ??&acirc;y l&agrave; 9 l???i &iacute;ch b???t ng??? cho s???c kh???e n???u b???n u???ng c&agrave; ph&ecirc; nguy&ecirc;n ch???t ??i???u ????? ??&atilde; ???????c khoa h???c ch???ng m&igrave;nh.</p>\r\n\r\n<p><strong>1. Gi???m nguy c?? x?? gan</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-01.png\" style=\"height:325px; width:620px\" /></p>\r\n\r\n<p>Theo c&aacute;c nh&agrave; khoa h???c t??? vi???n Mario Negri, Italy, u???ng c&agrave; ph&ecirc; c&oacute; th??? gi???m nguy c?? ph&aacute;t tri???n x?? gan l&ecirc;n t???i 50%.</p>\r\n\r\n<p><strong>2. Gi???m nguy c?? m???c b???nh Alzheimer v&agrave; Parkinson</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-02.png\" style=\"height:489px; width:619px\" /></p>\r\n\r\n<p>C&aacute;c nh&agrave; khoa h???c ?????n t??? Trung t&acirc;m Nghi&ecirc;n c???u b???nh Alzheimer t???i Tampa, Florida, M??? ??&atilde; ti???n h&agrave;ng m???t nghi&ecirc;n c???u v??? t&aacute;c ?????ng c???a vi???c u???ng c&agrave; ph&ecirc; ?????n s??? ph&aacute;t tri???n b???nh Alzheimer.</p>\r\n\r\n<p>K???t qu??? nghi&ecirc;n c???u cho th???y u???ng 3 ly c&agrave; ph&ecirc; m???i ng&agrave;y c&oacute; th??? gi???m nguy c?? ph&aacute;t tri???n b???nh l&ecirc;n t???i 65%.</p>\r\n\r\n<p>Nghi&ecirc;n c???u t??? ?????i h???c Li&ecirc;n bang Santa Catarina, Brazil c??ng cho bi???t u???ng c&agrave; ph&ecirc; ?????u ?????n c&oacute; th??? gi&uacute;p ng??n ch???n b???nh Parkinson. Nguy c?? m???c b???nh s??? gi???m t???i 30%.</p>\r\n\r\n<p><strong>3. Gi???m nguy c?? ung th??</strong></p>\r\n\r\n<p>Nhi???u nghi&ecirc;n c???u trong v&agrave;i th???p ni&ecirc;n tr?????c cho r???ng c&agrave; ph&ecirc; t&aacute;c ?????ng ti&ecirc;u c???c ?????n c?? th???, th???m ch&iacute; c&oacute; th??? d???n ?????n ung th??. Tuy nhi&ecirc;n v&agrave;i n??m tr??? l???i ??&acirc;y, c&aacute;c nghi&ecirc;n c???u ??&atilde; cho k???t qu??? kh&aacute;c.</p>\r\n\r\n<p>Theo nghi&ecirc;n c???u ti???n h&agrave;nh b???i Khoa Nghi&ecirc;n c???u L&acirc;m s&agrave;ng t???i ?????i h???c Milan v&agrave; Khoa D???ch t??? h???c c???a Vi???n Mario Negri, u???ng c&agrave; ph&ecirc; c&oacute; th??? gi???m nguy c?? ph&aacute;t tri???n ung th?? v&uacute; v&agrave; ung th?? tuy???n ti???n li???t.</p>\r\n\r\n<p><strong>4. T&aacute;c ?????ng t&iacute;ch c???c h??? th???ng tim m???ch</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-03.png\" style=\"height:330px; width:612px\" /></p>\r\n\r\n<p>M???t s??? nghi&ecirc;n c???u do c&aacute;c nh&agrave; khoa h???c tr?????ng Y t??? C&ocirc;ng c???ng Harvard, ?????i h???c Qu???c gia Singapore v&agrave; B???nh vi???n Brigham and Women cho th???y nh???ng ng?????i u???ng 3-5 c???c c&agrave; ph&ecirc; m???i ng&agrave;y c&oacute; &iacute;t nguy c?? m???c c&aacute;c b???nh tim m???ch g???p 3-5 l???n nh???ng ng?????i u???ng n?????c gi???i kh&aacute;t.</p>\r\n\r\n<p>Nghi&ecirc;n c???u c??ng ch??? ra r???ng u???ng 1 hay 3 c???c c&agrave; ph&ecirc; kh&ocirc;ng c&oacute; nhi???u s??? kh&aacute;c bi???t, v&igrave; l?????ng nh??? nh?? v???y kh&ocirc;ng th??? ???nh h?????ng ?????n h??? tim m???ch.</p>\r\n\r\n<p><strong>5. Gi???m nguy c?? b???nh kh???p v&agrave; s???i m???t</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-4.png\" style=\"height:587px; width:619px\" /></p>\r\n\r\n<p>B???nh gout h&igrave;nh th&agrave;nh do t&igrave;nh tr???ng trao ?????i ch???t k&eacute;m d???n ?????n t&iacute;ch t??? c&aacute;c ch???t ??? m&ocirc; m???m quanh kh???p. U???ng c&agrave; ph&ecirc; gi&uacute;p c???i thi???n trao ?????i ch???t v&agrave; c&oacute; th??? ph&ograve;ng ng???a b???nh gout. ??i???u n&agrave;y ???????c c&aacute;c nh&agrave; khoa h???c tr?????ng Y t??? C&ocirc;ng c???ng Harvard v&agrave; B???nh vi???n Brigham and Women ch???ng minh.</p>\r\n\r\n<p>Theo nghi&ecirc;n c???u c???a Scott Gottlieb, m???t s??? ch???t trong c&agrave; ph&ecirc; nh?? caffeine c&oacute; th??? gi???m ph&aacute;t tri???n s???i m???t 4% n???u b???n u???ng 2-3 c???c c&agrave; ph&ecirc; m???i ng&agrave;y v&agrave; 45% n???u b???n u???ng t??? 4 c???c m???i ng&agrave;y.</p>\r\n\r\n<p>Tuy nhi&ecirc;n ch??? c&agrave; ph&ecirc; c&oacute; caffeine m???i c&oacute; t&aacute;c d???ng n&agrave;y, c&ograve;n tr&agrave; ho???c soda c&oacute; caffeine l???i kh&ocirc;ng mang ?????n hi???u qu??? t????ng t???.</p>\r\n\r\n<p><strong>6. Gi???m nguy c?? ti???u ???????ng tu&yacute;p 2</strong></p>\r\n\r\n<p>C&aacute;c nh&agrave; khoa h???c ??an M???ch t??? ??H Aarhus, Vi???n ??H Aarhus v&agrave; Vi???n ??H Odense ??&atilde; ch???ng minh u???ng c&agrave; ph&ecirc; nguy&ecirc;n ch???t kh&ocirc;ng g&acirc;y ti???u ???????ng tu&yacute;p 2.</p>\r\n\r\n<p>Cafestol, m???t th&agrave;nh ph???n trong c&agrave; ph&ecirc;, c&ograve;n c&oacute; t&aacute;c d???ng gi???m l?????ng insulin trong tuy???n t???y, h??? tr??? t&iacute;ch c???c trong qu&aacute; tr&igrave;nh ch???ng ti???u ???????ng tu&yacute;p 2.</p>\r\n\r\n<p><strong>7. Tr??? h&oacute;a t??? b&agrave;o c?? th???</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-5.png\" style=\"height:479px; width:616px\" /></p>\r\n\r\n<p>Ch???t ch???ng oxy h&oacute;a ch???a trong c&agrave; ph&ecirc; c&oacute; t&aacute;c ?????ng l&agrave;m tr??? h&oacute;a c&aacute;c t??? b&agrave;o c???a c?? th??? b???n. C&aacute;c nh&agrave; khoa h???c t??? ?????i h???c N??? sinh Ewha (Seoul, H&agrave;n Qu???c) cho r???ng chi???t xu???t c&agrave; ph&ecirc; c&oacute; th??? gi&uacute;p b???n lo???i b??? c&aacute;c n???p nh??n, gi???m t&igrave;nh tr???ng m???t n?????c v&agrave; collagen.</p>\r\n\r\n<p>??&oacute; l&agrave; l&yacute; do t???i sao nh???ng ng?????i u???ng c&agrave; ph&ecirc; th?????ng xuy&ecirc;n tr&ocirc;ng tr??? h??n nh???ng ng?????i kh&aacute;c d&ugrave; c&ugrave;ng ????? tu???i.</p>\r\n\r\n<p><strong>8. T??ng s???c m???nh c?? b???p ??? ng?????i cao tu???i</strong></p>\r\n\r\n<p>Theo c&aacute;c nh&agrave; khoa h???c ??H Coventry, ng?????i gi&agrave; u???ng c&agrave; ph&ecirc; c&oacute; t&aacute;c d???ng t??ng s???c m???nh c?? b???p, gi???m nguy c?? ng&atilde; v&agrave; ch???n th????ng ??? ng?????i cao tu???i.</p>\r\n\r\n<p><strong>9. T??ng tu???i th???</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-6.png\" style=\"height:409px; width:616px\" /></p>\r\n\r\n<p>Nghi&ecirc;n c???u c???a Marc J. Gunter v&agrave; Neil Murphy cho th???y c&agrave; ph&ecirc; c&oacute; th??? l&agrave;m gi???m nguy c?? t??? vong do nhi???u nguy&ecirc;n nh&acirc;n.</p>\r\n\r\n<p>Nghi&ecirc;n c???u ??&atilde; ???????c ti???n h&agrave;nh ??? c&aacute;c qu???c gia kh&aacute;c nhau v&agrave; k???t qu??? l&agrave; ng?????i th?????ng xuy&ecirc;n u???ng c&agrave; ph&ecirc; c&oacute; t??? l??? t??? vong th???p h??n ??? nh???ng ng?????i kh&aacute;c.</p>', '1617087376.jpeg', 1, '2021-03-29 22:28:34', '2021-03-29 23:56:16'),
(26, 'Nh???ng b???c h??nh kh??ch chia s??? t???i Cafe ?????t', 'nhung-buc-hinh-khach-chia-se-tai-cafe-dat', '<p>Nh???ng t???m Selfie c???c ch???t c???a m???i ng?????i khi gh&eacute; th??m Cafe ?????t. H&atilde;y h&ograve;a m&igrave;nh v&agrave;o kh&ocirc;ng gian c??? x??a v&agrave; ch???p h&igrave;nh th???t ?????p nh&eacute;.</p>', '<p>Nh???ng t???m Selfie c???c ch???t c???a m???i ng?????i khi gh&eacute; th??m Cafe ?????t. H&atilde;y h&ograve;a m&igrave;nh v&agrave;o kh&ocirc;ng gian c??? x??a v&agrave; ch???p h&igrave;nh th???t ?????p nh&eacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-12.jpg\" style=\"height:580px; width:1031px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-11.jpg\" style=\"height:290px; width:516px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-10.jpg\" style=\"height:580px; width:773px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-7.jpg\" style=\"height:508px; width:286px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-6.jpg\" style=\"height:508px; width:381px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-5.jpg\" style=\"height:676px; width:901px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-4.jpg\" style=\"height:812px; width:812px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-2.jpg\" style=\"height:676px; width:901px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-1.jpg\" style=\"height:406px; width:304px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-3.jpg\" style=\"height:676px; width:676px\" /></p>', '1617087637_cafe-dat-ca-phe-dat-03-1.jpeg', 1, '2021-03-30 00:00:37', '2021-03-30 00:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `slug` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` int(11) DEFAULT 0,
  `hot` tinyint(4) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cate_id`, `slug`, `image`, `price`, `discount`, `hot`, `description`, `created_at`, `updated_at`) VALUES
(1, 'san pham 1', 18, 'san-pham-1', '1617052080_z2388960640005_d8545f531d43cea36e964399b814f0aa.png', 200000, 0, 1, '<p>mo ta sp 1</p>', '2021-03-29 12:36:54', '2021-03-30 00:08:22'),
(2, 'frfrfr', 18, 'frfrfr', '1617084013_Katarina.jpeg', 200000, 0, 1, '<p>frfrf</p>', '2021-03-29 23:00:13', '2021-03-29 23:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_chuan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
