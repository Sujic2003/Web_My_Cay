-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 17, 2023 lúc 04:06 AM
-- Phiên bản máy phục vụ: 5.7.25
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `My_cay`
--
CREATE DATABASE `qlmc` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `qlmc`;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhsach`
--

CREATE TABLE `danhsach` (
  `MaMonAn` int(10) NOT NULL,
  `TenMonAn` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` float NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `AnhMonAn` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhsach`
--

INSERT INTO `danhsach` (`MaMonAn`, `TenMonAn`, `Gia`, `SoLuong`, `AnhMonAn`) VALUES
(1, 'Kimchi Cá Viên', 35000, 1, 'image/KimChiCaVien.jpg'),
(2, 'Kimchi Bò', 45000, 1, 'image/KimChiBo.jpg'),
(3, 'Kimchi Bạch Tuột', 45000, 1, 'image/KimChiBachTuot.jpg'),
(4, 'Kimchi Gà', 45000, 1, 'image/KimChiGa.jpg'),
(5, 'Kimchi Hải Sản', 45000, 1, 'image/KimChiHaiSan.jpg'),
(6, 'Kimchi Sườn Sụn', 45000, 1, 'image/KimChiSuonSun.jpg'),
(7, 'Kimchi Tôm Càng', 80000, 1, 'image/KimChiTomCang.jpg'),
(8, 'Lẩu Thái Bò Mỹ', 55000, 1, 'image/LauThaiBoMy.jpg'),
(9, 'Lẩu Thái Hải Sản', 55000, 1, 'image/LauThaiHaiSan.jpg'),
(10, 'Tokoyaki', 35000, 1, 'image/Takoyaki.jpg'),
(11, 'Kimbap', 20000, 10, 'image/KimBap.jpg'),
(12, 'Khoai Tây Chiên', 25000, 1, 'image/KhoaiTayChien.jpg'),
(13, 'Tokbokki Phô Mai', 35000, 1, 'image/ToKbokkiPhoMai.jpg'),
(14, 'Xúc Xich', 25000, 1, 'image/XucXich.jpg'),
(15, 'Thanh Phô Mai Que Chiên', 25000, 1, 'image/ThanhPhoMaiQue.jpg'),
(16, 'Gà Rán', 45000, 1, 'images/banhtrangcuon.jpg');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGio` int(11) NOT NULL,
  `MaNguoiDung` int(11) NOT NULL,
  `MaMonAn` int(11) DEFAULT NULL,
  `TenMon` text COLLATE utf8_unicode_ci,
  `SoLuong` int(11) DEFAULT NULL,
  `Gia` int(11) DEFAULT NULL,
  `Anh` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MaGio`, `MaNguoiDung`, `MaMonAn`, `TenMon`, `SoLuong`, `Gia`, `Anh`) VALUES
(14, 17, 4, 'Kimchi Gà',1 , 45000, 'image/KimChiGa.jpg'),
(15, 17, 5, 'Kimchi Hải Sản', 1, 45000,'image/KimChiHaiSan.jpg'),
(16, 5, 1, 'Kimchi Cá Viên', 1,35000,'image/KimChiCaVien.jpg');


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(10) NOT NULL,
  `QuyenHan` int(1) NOT NULL,
  `TenNguoiDung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `QuyenHan`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `DiaChi`) VALUES
(1, 0, 'hoaihan', 'hoaihan', 'hoaihan', 'Châu Phú, An Giang'),
(2, 0, 'thuylinh', 'thuylinh', 'thuylinh', 'An Châu, Châu Thành'),
(3, 0, 'truclinh', 'truclinh', 'truclinh', 'Long xuyên'),
(4, 1, 'Tran van an', 'tvan', 'tva', 'an giang'),
(5, 1, 'tran van c', 'tvc', 'tvc', 'kiên giang'),
(16, 1, 'hoài thanh', 'thanh', 'thanh', 'cần thơ'),
(17, 1, 'Triệu Vân', 'tv', 'tv', 'Châu Phú'),
(18, 1, 'Lữ Bố', 'lubo', 'lubo', 'lubo'),
(20, 1, 'a', 'a', 'a', 'a');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhsach`
--
ALTER TABLE `danhsach`
  ADD PRIMARY KEY (`MaMonAn`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGio`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhsach`
--
ALTER TABLE `danhsach`
  MODIFY `MaMonAn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
