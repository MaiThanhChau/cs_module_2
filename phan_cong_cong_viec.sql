-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 03, 2021 lúc 04:14 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phan_cong_cong_viec`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `Ten_dang_nhap` varchar(100) DEFAULT NULL,
  `Mat_khau` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `Ten_dang_nhap`, `Mat_khau`) VALUES
(1, 'chau', 'chau');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cong_viec`
--

CREATE TABLE `cong_viec` (
  `ID_cv` int(10) NOT NULL,
  `Mo_ta` varchar(255) NOT NULL,
  `ID_nhan_vien` int(10) NOT NULL,
  `ID_loai_cong_viec` int(10) NOT NULL,
  `Trang_thai` varchar(100) NOT NULL DEFAULT 'Chưa hoàn thành'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cong_viec`
--

INSERT INTO `cong_viec` (`ID_cv`, `Mo_ta`, `ID_nhan_vien`, `ID_loai_cong_viec`, `Trang_thai`) VALUES
(2, 'Đọc bài trước khi học bài mới', 2, 1, 'Đã hoàn thành'),
(4, 'Hoàn thành bài Quiz của phần CSS', 3, 2, 'Chưa hoàn thành'),
(5, 'Hoàn thiện mô hình MVC', 5, 3, 'Chưa hoàn thành'),
(6, 'Mua trái cây lên lớp ăn', 4, 1, 'Đã hoàn thành'),
(7, 'Làm hết bài tập nâng cao', 2, 1, 'Chưa hoàn thành'),
(9, 'Học 2-4 tiếng ở nhà', 5, 2, 'Đã hoàn thành'),
(10, 'Chuẩn bị bài giảng trước khi lên lớp', 1, 2, 'Đã hoàn thành'),
(11, 'Luyện tập kĩ năng mềm', 3, 1, 'Đã hoàn thành'),
(12, 'Đi học đúng giờ', 2, 2, 'Đã hoàn thành'),
(13, 'Hoàn thành CS trước ngày 1/6', 2, 3, 'Chưa hoàn thành'),
(14, 'Tổ chức đi chơi cho cả lớp', 10, 1, 'Đã hoàn thành'),
(15, 'Hướng dẫn học viên làm CaseStudy', 1, 2, 'Chưa hoàn thành'),
(16, 'Nộp báo cáo tuần trước 15h', 4, 2, 'Chưa hoàn thành'),
(17, 'Lên lịch Retros Coach cho học viên', 10, 3, 'Chưa hoàn thành'),
(18, 'Đem xoài lên cho cả lớp ăn', 3, 2, 'Chưa hoàn thành'),
(19, 'Phải tìm được 5 học viên mới trước tháng 7', 12, 3, 'Chưa hoàn thành'),
(20, 'Hướng dẫn các bạn học viên làm báo cáo tuần', 10, 1, 'Chưa hoàn thành'),
(21, 'Dạy cách kiếm tiền cho học viên sau Module 2', 1, 3, 'Chưa hoàn thành'),
(22, 'Mua cơm cho cả lớp ăn trưa', 5, 1, 'Chưa hoàn thành'),
(23, 'Tham gia TechTalk vào lúc 20h ngày 28/05', 2, 2, 'Chưa hoàn thành'),
(24, 'Chuẩn bị kiến thức để thi kết thúc Module 2', 4, 3, 'Đã hoàn thành'),
(25, 'Giúp đỡ học viên mới ', 4, 2, 'Chưa hoàn thành'),
(26, 'Dọn dẹp bàn học trước khi về', 5, 1, 'Chưa hoàn thành'),
(27, 'Học lý thuyết để thi kết thúc Module', 3, 3, 'Chưa hoàn thành');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_cv`
--

CREATE TABLE `loai_cv` (
  `ID_loai_cv` int(10) NOT NULL,
  `Loai_cv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai_cv`
--

INSERT INTO `loai_cv` (`ID_loai_cv`, `Loai_cv`) VALUES
(1, 'Không quan trọng'),
(2, 'Quan trọng'),
(3, 'Rất quan trọng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ID_nv` int(10) NOT NULL,
  `Ten_nv` varchar(100) NOT NULL,
  `Chuc_vu` varchar(100) NOT NULL,
  `SDT` varchar(13) NOT NULL,
  `Hinh_anh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`ID_nv`, `Ten_nv`, `Chuc_vu`, `SDT`, `Hinh_anh`) VALUES
(1, 'Nguyễn Tài Tâm', 'Giám sát', '0999999999', 'public/upload/1622171508.jpg'),
(2, 'Mai Thanh Châu', 'Nhân viên', '0917794111', 'public/upload/1622100539.jpg'),
(3, 'Nguyễn Quang Đạt', 'Nhân viên', '0988888888', 'public/upload/1622100562.png'),
(4, 'Hồ Việt Hùng', 'Nhân viên', '0977777777', 'public/upload/1622100723.png'),
(5, 'Hồ Quốc Hoàn', 'Nhân viên', '0966666666', 'public/upload/1622100570.png'),
(10, 'Nguyễn Thị Ngọc Anh', 'Quản lý học viên', '0955555555', 'public/upload/1622128361.jpg'),
(12, 'Cô giáo Thảo', 'Marketing', '0944444444', 'public/upload/1622128309.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `cong_viec`
--
ALTER TABLE `cong_viec`
  ADD PRIMARY KEY (`ID_cv`),
  ADD KEY `cong_viec_ibfk_1` (`ID_loai_cong_viec`),
  ADD KEY `ID_nhan_su` (`ID_nhan_vien`);

--
-- Chỉ mục cho bảng `loai_cv`
--
ALTER TABLE `loai_cv`
  ADD PRIMARY KEY (`ID_loai_cv`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ID_nv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cong_viec`
--
ALTER TABLE `cong_viec`
  MODIFY `ID_cv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `loai_cv`
--
ALTER TABLE `loai_cv`
  MODIFY `ID_loai_cv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ID_nv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
