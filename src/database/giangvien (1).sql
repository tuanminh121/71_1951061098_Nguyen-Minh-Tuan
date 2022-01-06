-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 07:30 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ktgk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` int(11) NOT NULL,
  `hovaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `trinhdo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuyenmon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hocvi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coquan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(1, 'Rafael Bartram', '1979-03-04', 0, 'Construction Worker', 'Programmer II', 'syff', 'xoku', 'Gabcube'),
(2, 'Jacobo Rookes', '1979-01-20', 0, 'Construction Expeditor', 'Research Assistant II', 'zolf', 'gyoh', 'Digitube'),
(3, 'Tye Shirland', '1979-07-23', 0, 'Estimator', 'Staff Scientist', 'fuxb', 'iebw', 'Twitternation'),
(4, 'Roanna Alvarado', '1977-11-01', 0, 'Engineer', 'Accountant IV', 'aldk', 'xytp', 'Youtags'),
(5, 'Leisha Cardnell', '1976-09-19', 0, 'Construction Worker', 'Community Outreach Specialist', 'cibq', 'klxo', 'Cogilith'),
(6, 'Lindsay Gladtbach', '1976-09-05', 0, 'Project Manager', 'Compensation Analyst', 'sfxe', 'yyzm', 'Vinder'),
(7, 'Cloe Dallas', '1976-09-18', 0, 'Construction Foreman', 'Assistant Media Planner', 'tuyt', 'zhmz', 'Innotype'),
(8, 'Karolina MacCrosson', '1975-10-31', 0, 'Construction Worker', 'GIS Technical Architect', 'oocd', 'fzmx', 'Kwideo'),
(9, 'Dorelia Tertre', '1978-10-26', 0, 'Construction Worker', 'Nurse Practicioner', 'blqc', 'ktbv', 'Jaxbean'),
(10, 'Gladys Kemell', '1972-01-23', 0, 'Surveyor', 'Occupational Therapist', 'udlv', 'cqlp', 'Skiptube');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  MODIFY `magv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
