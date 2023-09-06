-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 06, 2023 lúc 05:46 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lichchieuphim`
--
CREATE DATABASE IF NOT EXISTS `lichchieuphim` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lichchieuphim`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chunhat`
--

CREATE TABLE `chunhat` (
  `id` int(11) NOT NULL,
  `ten_phim` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `dao_dien` varchar(50) DEFAULT NULL,
  `dien_vien` varchar(255) DEFAULT NULL,
  `gio_chieu` varchar(255) DEFAULT NULL,
  `mo_ta_phim` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu2`
--

CREATE TABLE `thu2` (
  `id` int(11) NOT NULL,
  `ten_phim` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `dao_dien` varchar(50) DEFAULT NULL,
  `dien_vien` varchar(255) DEFAULT NULL,
  `mo_ta_phim` varchar(1000) DEFAULT NULL,
  `gio_chieu_new` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thu2`
--

INSERT INTO `thu2` (`id`, `ten_phim`, `anh`, `dao_dien`, `dien_vien`, `mo_ta_phim`, `gio_chieu_new`) VALUES
(3, 'Tên phim 1', 'https://www.riocinemas.vn/Areas/Admin/Content/Fileuploads/images/poster%20web/T9/470wx700h.jpg', 'Đạo diễn 1', 'Diễn viên 1, Diễn viên 2', 'Mô tả phim 1', '09:30'),
(4, 'Tên phim 2', 'https://www.riocinemas.vn/Areas/Admin/Content/Fileuploads/images/poster%20web/T9/poster_official_1080x1350_160823_1_.jpg', 'Đạo diễn', 'Diễn viên 1, Diễn viên 2', 'Mô tả phim 2', '09:30 , 07:30, 11:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu3`
--

CREATE TABLE `thu3` (
  `id` int(11) NOT NULL,
  `ten_phim` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `dao_dien` varchar(50) DEFAULT NULL,
  `dien_vien` varchar(255) DEFAULT NULL,
  `gio_chieu` varchar(255) DEFAULT NULL,
  `mo_ta_phim` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thu3`
--

INSERT INTO `thu3` (`id`, `ten_phim`, `anh`, `dao_dien`, `dien_vien`, `gio_chieu`, `mo_ta_phim`) VALUES
(1, 'Tên phim 1', 'https://www.riocinemas.vn/Areas/Admin/Content/Fileuploads/images/poster%20web/T8/MV5BMjA5Yjg1YTQtYzA5ZS00ZWNjLTkwNjYtOTE5MzQwZDM4YmIwXkEyXkFqcGdeQXVyMTEzMTI1Mjk3__V1_FMjpg_UY4096_%20-%20Copy.jpg', 'Đạo diễn', 'Diễn viên 1, Diễn viên 2', '09:30 , 07:30, 11:30', 'Mô tả phim 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu4`
--

CREATE TABLE `thu4` (
  `id` int(11) NOT NULL,
  `ten_phim` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `dao_dien` varchar(50) DEFAULT NULL,
  `dien_vien` varchar(255) DEFAULT NULL,
  `gio_chieu` varchar(255) DEFAULT NULL,
  `mo_ta_phim` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thu4`
--

INSERT INTO `thu4` (`id`, `ten_phim`, `anh`, `dao_dien`, `dien_vien`, `gio_chieu`, `mo_ta_phim`) VALUES
(2, 'Tên phim 5', 'https://www.riocinemas.vn/Areas/Admin/Content/Fileuploads/images/poster%20web/T8/MV5BMjA5Yjg1YTQtYzA5ZS00ZWNjLTkwNjYtOTE5MzQwZDM4YmIwXkEyXkFqcGdeQXVyMTEzMTI1Mjk3__V1_FMjpg_UY4096_%20-%20Copy.jpg', 'Kim Trinh Trì', 'Chung Tử Đơn , Hoàng Long', '09:30 , 07:30, 11:30', 'Mô tả phim'),
(3, 'Tên phim 6', 'https://www.riocinemas.vn/Areas/Admin/Content/Fileuploads/images/poster%20web/T9/poster_official_1080x1350_160823_1_.jpg', 'Kim Trinh Trì', 'Chung Tử Đơn , Hoàng Long', '09:30 , 07:30, 11:30', 'Nội dung “Bến Phà Xác Sống” xoay quanh cuộc chạy trốn của nhóm người của Công (Huỳnh Đông) khỏi sự bùng phát của dịch bệnh và cố gắng chạy đến chuyến ...');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu5`
--

CREATE TABLE `thu5` (
  `id` int(11) NOT NULL,
  `ten_phim` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `dao_dien` varchar(50) DEFAULT NULL,
  `dien_vien` varchar(255) DEFAULT NULL,
  `gio_chieu` varchar(255) DEFAULT NULL,
  `mo_ta_phim` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu6`
--

CREATE TABLE `thu6` (
  `id` int(11) NOT NULL,
  `ten_phim` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `dao_dien` varchar(50) DEFAULT NULL,
  `dien_vien` varchar(255) DEFAULT NULL,
  `gio_chieu` varchar(255) DEFAULT NULL,
  `mo_ta_phim` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu7`
--

CREATE TABLE `thu7` (
  `id` int(11) NOT NULL,
  `ten_phim` varchar(255) DEFAULT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `dao_dien` varchar(50) DEFAULT NULL,
  `dien_vien` varchar(255) DEFAULT NULL,
  `gio_chieu` varchar(255) DEFAULT NULL,
  `mo_ta_phim` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chunhat`
--
ALTER TABLE `chunhat`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thu2`
--
ALTER TABLE `thu2`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thu3`
--
ALTER TABLE `thu3`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thu4`
--
ALTER TABLE `thu4`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thu5`
--
ALTER TABLE `thu5`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thu6`
--
ALTER TABLE `thu6`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thu7`
--
ALTER TABLE `thu7`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chunhat`
--
ALTER TABLE `chunhat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thu2`
--
ALTER TABLE `thu2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thu3`
--
ALTER TABLE `thu3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `thu4`
--
ALTER TABLE `thu4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thu5`
--
ALTER TABLE `thu5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thu6`
--
ALTER TABLE `thu6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thu7`
--
ALTER TABLE `thu7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
