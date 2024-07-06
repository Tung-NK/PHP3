-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 28, 2024 lúc 09:39 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_donvi` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`id`, `ten_donvi`, `created_at`, `updated_at`) VALUES
(1, 'Ban giám hiệu', '2024-06-28 06:51:37', '2024-06-28 06:51:40'),
(2, 'Ban đào tạo', '2024-06-28 06:51:43', '2024-06-28 06:51:45'),
(3, 'Ban phát triển chương trình', '2024-06-28 06:51:43', '2024-06-28 06:51:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phongban_id` int(11) DEFAULT NULL,
  `songaynghi` int(11) NOT NULL DEFAULT 0,
  `tuoi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phongban_id`, `songaynghi`, `tuoi`, `created_at`, `updated_at`) VALUES
(1, 'Hoàng Hải Long', 'admin@admin.com', 1, 0, 20, '2024-03-03 02:49:59', '2024-06-25 03:48:19'),
(2, 'Nguyễn Đắc Nam', 'namnd.haui@gmail.com', 1, 0, 34, '2024-05-21 08:07:52', '2024-06-18 15:05:15'),
(3, 'Lê Minh Hoàng', 'leminhhoang@haui.edu.vn', 1, 0, 33, '2024-05-21 08:07:52', '2024-05-21 08:07:52'),
(4, 'Mai Văn Thanh', 'hoangthanh@hotmail.com', 2, 0, 22, '2024-05-21 08:07:53', '2024-05-21 08:07:53'),
(5, 'Trương Văn Khải', 'truongvankhai@haui.edu.vn', 2, 16, 19, '2024-05-21 08:07:53', '2024-05-23 06:05:19'),
(6, 'Hoàng Thị Thu Thủy', 'hoangthithuthuy_nn@haui.edu.vn', 2, 0, 35, '2024-05-21 08:07:54', '2024-05-21 08:07:54'),
(7, 'Hoàng Thị Hương Giang', 'hthgiang2207@gmail.com', 2, 0, 32, '2024-05-21 08:07:54', '2024-05-21 08:07:54'),
(8, 'Trần Yến Vân', 'tranyenvan_nn@haui.edu.vn', 1, 2, 33, '2024-05-21 08:07:55', '2024-05-21 08:07:55'),
(9, 'Phú Thị Nhung', 'phuthinhung_nn@haui.edu.vn', 1, 0, 36, '2024-05-21 08:07:55', '2024-05-21 08:07:55'),
(10, 'Cao Thị Thu Hương', 'caothithuhuong_nn@haui.edu.vn', 1, 0, 22, '2024-05-21 08:07:56', '2024-06-21 03:54:48'),
(11, 'Lê Mạnh Long', 'lemanhlong_dt@haui.edu.vn', 1, 0, 25, '2024-05-21 08:07:56', '2024-05-21 08:07:56'),
(12, 'Nguyễn Tuấn Anh', 'nguyentuananh_dt@haui.edu.vn', 2, 20, 26, '2024-05-21 08:07:57', '2024-05-21 08:07:57'),
(13, 'Hà Thị Kim Duyên', 'hathikimduyen_dt@haui.edu.vn', 2, 0, 27, '2024-05-21 08:07:57', '2024-05-21 08:07:57'),
(14, 'Bùi Thị Thu Hà', 'buithithuha_dt@haui.edu.vn', 2, 0, 28, '2024-05-21 08:07:57', '2024-05-21 08:07:57'),
(15, 'Nguyễn Quang Tùng', 'nguyenquangtung_cnh@haui.edu.vn', 2, 14, 29, '2024-05-21 08:07:58', '2024-05-21 08:07:58'),
(16, 'Lại Đức Hùng', 'laiduchung_khcb@haui.edu.vn', 2, 0, 30, '2024-05-21 08:07:58', '2024-05-21 08:07:58'),
(17, 'Nguyễn Văn Tuấn', 'nguyenvantuan_khcb@haui.edu.vn', 2, 0, 30, '2024-05-21 08:07:59', '2024-05-21 08:07:59'),
(18, 'Đào Thị Thuận', 'thuanht95@gmail.com', 3, 4, 31, '2024-05-21 08:07:59', '2024-05-21 08:07:59'),
(19, 'Trần Quang Hải', 'tranquanghai@haui.edu.vn', 3, 0, 31, '2024-05-21 08:08:00', '2024-05-21 08:08:00'),
(20, 'Ngô Minh Đức', 'ngominhduc_khcb@haui.edu.vn', 3, 0, 32, '2024-05-21 08:08:00', '2024-05-21 08:08:00'),
(21, 'Nguyễn Thị Thu Hà', 'nguyenthithuha_dt@haui.edu.vn', 3, 11, 32, '2024-05-21 08:08:01', '2024-05-21 08:08:01'),
(22, 'Phan Thị Thu Hằng', 'phanthithuhang@haui.edu.vn', 2, 0, 33, '2024-05-21 08:08:01', '2024-05-21 08:08:01'),
(23, 'Dương Thị Hằng', 'hangdt@haui.edu.vn', 2, 0, 22, '2024-05-21 08:08:02', '2024-05-21 08:08:02'),
(24, 'Bùi Thị Thu Hiền', 'buihienhaui@gmail.com', 2, 0, 25, '2024-05-21 08:08:02', '2024-05-21 08:08:02'),
(25, 'Trần Thanh Hùng', 'tranthanhhung@haui.edu.vn', 1, 17, 26, '2024-05-21 08:08:03', '2024-05-21 08:08:03'),
(26, 'Đinh Khắc Định', 'dinhkhacdinh@haui.edu.vn', 1, 0, 22, '2024-05-21 08:08:03', '2024-05-21 08:08:03'),
(27, 'Nguyễn Thị Dịu', 'nguyenthidiu@haui.edu.vn', 2, 0, 33, '2024-05-21 08:08:04', '2024-05-21 08:08:04'),
(28, 'Trần Thị Dung', 'tranthidung@haui.edu.vn', 2, 0, 22, '2024-05-21 08:08:04', '2024-05-21 08:08:04'),
(29, 'Phương Thị Duyên', 'phuongthiduyen@haui.edu.vn', 2, 0, 22, '2024-05-21 08:08:05', '2024-05-21 08:08:05'),
(30, 'Nghiêm Thị Thu Hà', 'nghiemthithuha@haui.edu.vn', 3, 0, 25, '2024-05-21 08:08:05', '2024-05-21 08:08:05'),
(31, 'Phạm Thị Mỹ Hạnh', 'phamthimyhanh@haui.edu.vn', 3, 2, 26, '2024-05-21 08:08:06', '2024-05-21 08:08:06'),
(32, 'Lê Đức Hạnh', 'leduchanh@haui.edu.vn', 3, 0, 28, '2024-05-21 08:08:07', '2024-05-21 08:08:07'),
(33, 'Phạm Thị Bích Hảo', 'phamthibichhao@haui.edu.vn', 3, 0, 28, '2024-05-21 08:08:07', '2024-05-21 08:08:07'),
(34, 'Bùi Thị Hiền', 'buithihien@haui.edu.vn', 1, 0, 30, '2024-05-21 08:08:08', '2024-05-21 08:08:08'),
(35, 'Trần Thị Kim Hiếu', 'tranthikimhieu@haui.edu.vn', 1, 0, 31, '2024-05-21 08:08:09', '2024-05-21 08:08:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `phongban`
--
ALTER TABLE `phongban`
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
-- AUTO_INCREMENT cho bảng `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2479;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
