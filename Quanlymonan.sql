-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 21, 2022 lúc 01:25 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `Quanlymonan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `id` int(11) NOT NULL,
  `tenmonan` varchar(225) NOT NULL,
  `mota` varchar(225) NOT NULL,
  `tien` bigint(20) NOT NULL,
  `hinhanh` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id`, `tenmonan`, `mota`, `tien`, `hinhanh`) VALUES
(1, 'tangerine salad', 'salad mix with tangerine', 30000, 'zyro-image (1).png'),
(2, 'vegetable salad', 'salad mix with vegetable', 40000, 'zyro-image (2).png'),
(3, 'tofu salad', 'salad mix with tofu', 45000, 'zyro-image (3).png'),
(4, 'tropical fruits cereal', '4 kinds of tropical fruits and yogurt mix with cereal', 55000, 'zyro-image (4).png'),
(6, 'teriyaki mixed rice', 'teriyaki chicken mixed with rice and vegetable', 60000, 'zyro-image (5).png'),
(7, 'Fresh Salad', 'Fresh salad with eggs', 35000, 'zyro-image (6).png'),
(8, 'Apple Pie', 'A bowl of Apple', 100000, 'Apple pie.png'),
(9, 'Pumpkin Soup', 'A Pumpkin soup', 50000, 'Pumpkin soup.png'),
(10, 'Smothie Fruit', 'Mixed fruits', 60000, 'smothie bowl.png'),
(11, 'Mozza-salad', 'tomato salad with cheese', 65000, '6.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(4) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `pass` text NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `user`, `pass`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '123', 1),
(2, NULL, NULL, 'user_tk', '456', 0),
(3, 'trancuong', 'tranchicuong21102@gmail.com', 'cuongtran', '123456', 0),
(4, 'Nguyen Minh Chau', 'Pinniheo123@gmail.com', 'Pudding', '123456789', 0),
(19, 'tran chi cuong', '123@gmail.com', 'chi cuong', '123', 0),
(20, 'nguyenminhchau', '123@gmail.com', 'chauminh', '123', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
