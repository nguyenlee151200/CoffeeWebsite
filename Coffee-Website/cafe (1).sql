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
(24, '9 Lợi Ích Sức Khỏe Bất Ngờ – Khoa Học Đã Chứng Minh', '9-loi-ich-suc-khoe-bat-ngo-khoa-hoc-da-chung-minh', '<p>Theo c&aacute;c nh&agrave; khoa học, uống c&agrave; ph&ecirc; điều độ kh&ocirc;ng g&acirc;y hại sức khỏe m&agrave; c&ograve;n c&oacute; thể mang lại những lợi &iacute;ch tuyệt</p>', '<p>Dưới đ&acirc;y l&agrave; 9 lợi &iacute;ch bất ngờ cho sức khỏe nếu bạn uống c&agrave; ph&ecirc; nguy&ecirc;n chất điều độ đ&atilde; được khoa học chứng m&igrave;nh.</p>\r\n\r\n<p><strong>1. Giảm nguy cơ xơ gan</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-01.png\" style=\"height:325px; width:620px\" /></p>\r\n\r\n<p>Theo c&aacute;c nh&agrave; khoa học từ viện Mario Negri, Italy, uống c&agrave; ph&ecirc; c&oacute; thể giảm nguy cơ ph&aacute;t triển xơ gan l&ecirc;n tới 50%.</p>\r\n\r\n<p><strong>2. Giảm nguy cơ mắc bệnh Alzheimer v&agrave; Parkinson</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-02.png\" style=\"height:489px; width:619px\" /></p>\r\n\r\n<p>C&aacute;c nh&agrave; khoa học đến từ Trung t&acirc;m Nghi&ecirc;n cứu bệnh Alzheimer tại Tampa, Florida, Mỹ đ&atilde; tiến h&agrave;ng một nghi&ecirc;n cứu về t&aacute;c động của việc uống c&agrave; ph&ecirc; đến sự ph&aacute;t triển bệnh Alzheimer.</p>\r\n\r\n<p>Kết quả nghi&ecirc;n cứu cho thấy uống 3 ly c&agrave; ph&ecirc; mỗi ng&agrave;y c&oacute; thể giảm nguy cơ ph&aacute;t triển bệnh l&ecirc;n tới 65%.</p>\r\n\r\n<p>Nghi&ecirc;n cứu từ Đại học Li&ecirc;n bang Santa Catarina, Brazil cũng cho biết uống c&agrave; ph&ecirc; đều đặn c&oacute; thể gi&uacute;p ngăn chặn bệnh Parkinson. Nguy cơ mắc bệnh sẽ giảm tới 30%.</p>\r\n\r\n<p><strong>3. Giảm nguy cơ ung thư</strong></p>\r\n\r\n<p>Nhiều nghi&ecirc;n cứu trong v&agrave;i thập ni&ecirc;n trước cho rằng c&agrave; ph&ecirc; t&aacute;c động ti&ecirc;u cực đến cơ thể, thậm ch&iacute; c&oacute; thể dẫn đến ung thư. Tuy nhi&ecirc;n v&agrave;i năm trở lại đ&acirc;y, c&aacute;c nghi&ecirc;n cứu đ&atilde; cho kết quả kh&aacute;c.</p>\r\n\r\n<p>Theo nghi&ecirc;n cứu tiến h&agrave;nh bởi Khoa Nghi&ecirc;n cứu L&acirc;m s&agrave;ng tại Đại học Milan v&agrave; Khoa Dịch tễ học của Viện Mario Negri, uống c&agrave; ph&ecirc; c&oacute; thể giảm nguy cơ ph&aacute;t triển ung thư v&uacute; v&agrave; ung thư tuyến tiền liệt.</p>\r\n\r\n<p><strong>4. T&aacute;c động t&iacute;ch cực hệ thống tim mạch</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-03.png\" style=\"height:330px; width:612px\" /></p>\r\n\r\n<p>Một số nghi&ecirc;n cứu do c&aacute;c nh&agrave; khoa học trường Y tế C&ocirc;ng cộng Harvard, Đại học Quốc gia Singapore v&agrave; Bệnh viện Brigham and Women cho thấy những người uống 3-5 cốc c&agrave; ph&ecirc; mỗi ng&agrave;y c&oacute; &iacute;t nguy cơ mắc c&aacute;c bệnh tim mạch gấp 3-5 lần những người uống nước giải kh&aacute;t.</p>\r\n\r\n<p>Nghi&ecirc;n cứu cũng chỉ ra rằng uống 1 hay 3 cốc c&agrave; ph&ecirc; kh&ocirc;ng c&oacute; nhiều sự kh&aacute;c biệt, v&igrave; lượng nhỏ như vậy kh&ocirc;ng thể ảnh hưởng đến hệ tim mạch.</p>\r\n\r\n<p><strong>5. Giảm nguy cơ bệnh khớp v&agrave; sỏi mật</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-4.png\" style=\"height:587px; width:619px\" /></p>\r\n\r\n<p>Bệnh gout h&igrave;nh th&agrave;nh do t&igrave;nh trạng trao đổi chất k&eacute;m dẫn đến t&iacute;ch tụ c&aacute;c chất ở m&ocirc; mềm quanh khớp. Uống c&agrave; ph&ecirc; gi&uacute;p cải thiện trao đổi chất v&agrave; c&oacute; thể ph&ograve;ng ngừa bệnh gout. Điều n&agrave;y được c&aacute;c nh&agrave; khoa học trường Y tế C&ocirc;ng cộng Harvard v&agrave; Bệnh viện Brigham and Women chứng minh.</p>\r\n\r\n<p>Theo nghi&ecirc;n cứu của Scott Gottlieb, một số chất trong c&agrave; ph&ecirc; như caffeine c&oacute; thể giảm ph&aacute;t triển sỏi mật 4% nếu bạn uống 2-3 cốc c&agrave; ph&ecirc; mỗi ng&agrave;y v&agrave; 45% nếu bạn uống từ 4 cốc mỗi ng&agrave;y.</p>\r\n\r\n<p>Tuy nhi&ecirc;n chỉ c&agrave; ph&ecirc; c&oacute; caffeine mới c&oacute; t&aacute;c dụng n&agrave;y, c&ograve;n tr&agrave; hoặc soda c&oacute; caffeine lại kh&ocirc;ng mang đến hiệu quả tương tự.</p>\r\n\r\n<p><strong>6. Giảm nguy cơ tiểu đường tu&yacute;p 2</strong></p>\r\n\r\n<p>C&aacute;c nh&agrave; khoa học Đan Mạch từ ĐH Aarhus, Viện ĐH Aarhus v&agrave; Viện ĐH Odense đ&atilde; chứng minh uống c&agrave; ph&ecirc; nguy&ecirc;n chất kh&ocirc;ng g&acirc;y tiểu đường tu&yacute;p 2.</p>\r\n\r\n<p>Cafestol, một th&agrave;nh phần trong c&agrave; ph&ecirc;, c&ograve;n c&oacute; t&aacute;c dụng giảm lượng insulin trong tuyến tụy, hỗ trợ t&iacute;ch cực trong qu&aacute; tr&igrave;nh chống tiểu đường tu&yacute;p 2.</p>\r\n\r\n<p><strong>7. Trẻ h&oacute;a tế b&agrave;o cơ thể</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-5.png\" style=\"height:479px; width:616px\" /></p>\r\n\r\n<p>Chất chống oxy h&oacute;a chứa trong c&agrave; ph&ecirc; c&oacute; t&aacute;c động l&agrave;m trẻ h&oacute;a c&aacute;c tế b&agrave;o của cơ thể bạn. C&aacute;c nh&agrave; khoa học từ Đại học Nữ sinh Ewha (Seoul, H&agrave;n Quốc) cho rằng chiết xuất c&agrave; ph&ecirc; c&oacute; thể gi&uacute;p bạn loại bỏ c&aacute;c nếp nhăn, giảm t&igrave;nh trạng mất nước v&agrave; collagen.</p>\r\n\r\n<p>Đ&oacute; l&agrave; l&yacute; do tại sao những người uống c&agrave; ph&ecirc; thường xuy&ecirc;n tr&ocirc;ng trẻ hơn những người kh&aacute;c d&ugrave; c&ugrave;ng độ tuổi.</p>\r\n\r\n<p><strong>8. Tăng sức mạnh cơ bắp ở người cao tuổi</strong></p>\r\n\r\n<p>Theo c&aacute;c nh&agrave; khoa học ĐH Coventry, người gi&agrave; uống c&agrave; ph&ecirc; c&oacute; t&aacute;c dụng tăng sức mạnh cơ bắp, giảm nguy cơ ng&atilde; v&agrave; chấn thương ở người cao tuổi.</p>\r\n\r\n<p><strong>9. Tăng tuổi thọ</strong></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/09/loi-ich-suc-khoe-cafe-dat-6.png\" style=\"height:409px; width:616px\" /></p>\r\n\r\n<p>Nghi&ecirc;n cứu của Marc J. Gunter v&agrave; Neil Murphy cho thấy c&agrave; ph&ecirc; c&oacute; thể l&agrave;m giảm nguy cơ tử vong do nhiều nguy&ecirc;n nh&acirc;n.</p>\r\n\r\n<p>Nghi&ecirc;n cứu đ&atilde; được tiến h&agrave;nh ở c&aacute;c quốc gia kh&aacute;c nhau v&agrave; kết quả l&agrave; người thường xuy&ecirc;n uống c&agrave; ph&ecirc; c&oacute; tỷ lệ tử vong thấp hơn ở những người kh&aacute;c.</p>', '1617087376.jpeg', 1, '2021-03-29 22:28:34', '2021-03-29 23:56:16'),
(26, 'Những bức hình khách chia sẽ tại Cafe Đất', 'nhung-buc-hinh-khach-chia-se-tai-cafe-dat', '<p>Những tấm Selfie cực chất của mọi người khi gh&eacute; thăm Cafe Đất. H&atilde;y h&ograve;a m&igrave;nh v&agrave;o kh&ocirc;ng gian cổ xưa v&agrave; chụp h&igrave;nh thật đẹp nh&eacute;.</p>', '<p>Những tấm Selfie cực chất của mọi người khi gh&eacute; thăm Cafe Đất. H&atilde;y h&ograve;a m&igrave;nh v&agrave;o kh&ocirc;ng gian cổ xưa v&agrave; chụp h&igrave;nh thật đẹp nh&eacute;.</p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-12.jpg\" style=\"height:580px; width:1031px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-11.jpg\" style=\"height:290px; width:516px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-10.jpg\" style=\"height:580px; width:773px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-7.jpg\" style=\"height:508px; width:286px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-6.jpg\" style=\"height:508px; width:381px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-5.jpg\" style=\"height:676px; width:901px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-4.jpg\" style=\"height:812px; width:812px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-2.jpg\" style=\"height:676px; width:901px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-1.jpg\" style=\"height:406px; width:304px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://caphedat.com/wp-content/uploads/2019/08/cafe-dat-goc-binh-yen-selfie-3.jpg\" style=\"height:676px; width:676px\" /></p>', '1617087637_cafe-dat-ca-phe-dat-03-1.jpeg', 1, '2021-03-30 00:00:37', '2021-03-30 00:00:37');

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
