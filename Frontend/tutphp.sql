-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2020 lúc 08:58 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tutphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `level` tinyint(4) DEFAULT '1',
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `status`, `level`, `avatar`, `created_at`, `updated_at`) VALUES
(2, 'Hoàng Hùng', '111', 'hcl30784@gmail.com', '1234', '0985310919', 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `banner`, `home`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Máy tính', 'may-tinh', NULL, NULL, 1, 1, '2019-07-29 08:18:44', '2019-08-01 03:47:47'),
(17, 'Điện thoại di động', 'dien-thoai-di-dong', NULL, NULL, 1, 1, '2019-07-31 07:29:10', '2019-08-01 03:48:17'),
(18, 'Destop', 'destop', NULL, NULL, 1, 1, '2019-08-01 02:43:56', '2019-08-01 03:48:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `transaction_id`, `product_id`, `qty`, `price`) VALUES
(2, 40, 9, 1, 12000000),
(3, 41, 1, 1, 8730000),
(4, 41, 2, 2, 15000000),
(5, 41, 4, 1, 5000000),
(6, 42, 11, 1, 4250000),
(7, 43, 2, 1, 15000000),
(8, 44, 4, 1, 5000000),
(9, 45, 9, 1, 12000000),
(10, 45, 4, 1, 5000000),
(11, 45, 2, 1, 15000000),
(12, 46, 9, 4, 12000000),
(13, 46, 10, 3, 2700000),
(14, 47, 4, 25, 5000000),
(15, 48, 1, 15, 8730000),
(16, 49, 1, 5, 8730000),
(17, 50, 1, 1, 8730000),
(18, 51, 4, 3, 5000000),
(19, 52, 1, 2, 8730000),
(20, 53, 2, 1, 15000000),
(21, 53, 11, 1, 4250000),
(22, 54, 11, 1, 4250000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(4) DEFAULT NULL,
  `price` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `transaction_id`, `product_id`, `qty`, `price`) VALUES
(1, 20, 2, 1, 15000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT '0',
  `thumbar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `head` int(11) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `hot` tinyint(4) DEFAULT '0',
  `pay` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `soluong`, `sale`, `thumbar`, `category_id`, `content`, `head`, `view`, `hot`, `pay`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo', 'lenovo', 9000000, -13, 3, 'Desert.jpg', 13, '						           	ok						           						           ', 0, 0, 0, 3, NULL, '2019-08-04 09:03:46'),
(2, 'PHP 335', 'php-335', 15000000, 4, 0, 'Hydrangeas.jpg', 13, 'Tốt    						           ', 0, 0, 0, 1, NULL, '2019-08-04 08:03:43'),
(4, 'php n555', 'php-n555', 5000000, -19, 0, 'Desert.jpg', 13, '						           							           	\r\n						    aaa       						           ', 0, 0, 0, 3, NULL, '2019-08-04 09:03:47'),
(9, 'Del N525', 'del-n525', 12000000, -2, 0, 'Chrysanthemum.jpg', 13, 'Ok						           	\r\n						           ', 0, 0, 0, 2, NULL, '2019-08-04 09:03:25'),
(11, 'Asus', 'asus', 5000000, 17, 15, 'Lighthouse.jpg', 17, '						           	\r\n						           ', 0, 0, 0, 0, NULL, '2019-08-04 07:54:12'),
(12, 'adda', 'adda', 12000000, 15, 5, 'Penguins.jpg', 18, '						           	\r\n				ok		           ', 0, 0, 0, 0, '2019-08-01 03:52:25', '2019-08-01 03:52:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `users_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(40, 13200000, 7, 1, 'Giao hàng tận nơi', '2019-08-04 04:43:50', '2019-08-04 07:56:11'),
(41, 48103000, 7, 1, 'ok', '2019-08-04 04:46:42', '2019-08-04 07:54:15'),
(42, 4675000, 7, 1, 'Giao hàng tận nơi', '2019-08-04 04:56:21', '2019-08-04 07:54:11'),
(43, 16500000, 8, 1, 'ok', '2019-08-04 06:29:49', '2019-08-04 07:52:15'),
(44, 5500000, 8, 1, 'Giao hàng tận nơi', '2019-08-04 08:02:06', '2019-08-04 08:02:55'),
(45, 35200000, 8, 1, 'Giao hàng tận nơi', '2019-08-04 08:02:33', '2019-08-04 08:03:43'),
(46, 61710000, 8, 1, 'Giao hàng tận nơi', '2019-08-04 08:55:22', '2019-08-04 09:03:25'),
(47, 137500000, 8, 1, 'Giao hàng tận nơi', '2019-08-04 08:57:25', '2019-08-04 09:03:47'),
(48, 144045000, 8, 1, 'Giao hàng tận nơi', '2019-08-04 08:58:35', '2019-08-04 09:03:46'),
(49, 48015000, 8, 1, 'Giao hàng tận nơi', '2019-08-04 09:01:37', '2019-08-04 09:03:36'),
(50, 9603000, 8, 1, 'Giao hàng tận nơi', '2019-08-04 09:02:09', '2019-08-04 09:03:12'),
(51, 16500000, 8, 0, 'Giao hàng tận nơi', '2019-08-05 03:33:11', '2019-08-05 03:33:11'),
(52, 19206000, 9, 0, 'Giao hàng tận nơi', '2019-08-05 08:31:57', '2019-08-05 08:31:57'),
(53, 21175000, 13, 0, 'Just for fun!!!', '2019-12-20 01:35:02', '2019-12-20 01:35:02'),
(54, 4675000, 13, 0, 'Giao hàng tận nơi', '2019-12-20 01:37:37', '2019-12-20 01:37:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `token` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `password`, `avatar`, `status`, `token`, `created_at`, `updated_at`) VALUES
(9, 'abc', 'abc@gmail.com', '0985310919', '123', '123', NULL, 1, NULL, NULL, NULL),
(12, 'Nguyễn Văn A', 'a@gmail.com', '0985310919', '12345', '12345', NULL, 1, NULL, NULL, NULL),
(13, 'bbbb', 'bbb@gmail.com', '0985310919', 'aaaa', '12345', NULL, 1, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
