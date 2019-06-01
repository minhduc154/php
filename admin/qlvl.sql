-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2019 lúc 01:09 PM
-- Phiên bản máy phục vụ: 10.1.39-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlvl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_company` int(11) NOT NULL,
  `email_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_company` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `name_company`, `phone_company`, `email_company`, `url_company`, `address_company`, `image_company`, `created_at`, `updated_at`) VALUES
(1, 'Cong ty phan mem fpt', 123456789, 'fpt@gmail.com', 'https://tuyendung.fpt.com.vn/fsoft', 'Hoa Lac, Ha Noi', 'wZsq_utt.png', '0000-00-00', '2019-05-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `file_student`
--

CREATE TABLE `file_student` (
  `id` int(11) NOT NULL,
  `technique_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `taget_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `experience_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skill_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_student` int(11) NOT NULL,
  `pdf_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `file_student`
--

INSERT INTO `file_student` (`id`, `technique_student`, `address_student`, `birthday`, `taget_student`, `education_student`, `experience_student`, `skill_student`, `email_student`, `phone_student`, `pdf_student`, `created_at`, `updated_at`) VALUES
(9, 'Hệ thống thông tin', 'Hà Nam', '1998-12-04', '2000', 'SV năm 3', '1', 'PHP', 'minhduc171190@gmail.com', 123456789, '', '2019-05-20', '2019-05-21'),
(12, 'Hệ thống thông tin', 'Hà Nội', '0000-00-00', '2000', 'SV năm 4', '1', 'Bán xôi, Kiểm thử', 'sinhvien123@gmail.com', 123456789, 'Og3f_loadStorm.docx', '2019-05-20', '2019-05-20'),
(13, 'Hệ thống thông tin', 'Hà Nội', '0000-00-00', '2000', 'SV năm 4', '0', 'PHP, Java, Kiểm thử', 'a@gmail.com', 123456789, 'IEBa_thuchanhchuong3.pdf', '2019-05-20', '2019-05-20'),
(14, 'Công nghệ thông tin', 'Thái Bình', '1998-12-04', '1000', 'SV năm 3', '0', 'PHP, Java, Kiểm thử, Bán xôi', 's@gmail.com', 123456789, '', '2019-05-20', '2019-05-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `name_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity_job` int(11) NOT NULL,
  `description_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary_job` float NOT NULL,
  `address_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `workingtime_job` text COLLATE utf8_unicode_ci NOT NULL,
  `applicationtime_job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `job`
--

INSERT INTO `job` (`id`, `id_company`, `name_job`, `type_job`, `quantity_job`, `description_job`, `salary_job`, `address_job`, `url_job`, `workingtime_job`, `applicationtime_job`, `created_at`, `updated_at`) VALUES
(7, 1, 'Java', 'FullTime', 5, 'Senior Java', 1500, 'Hà Nam', 'java.job.vn', '6/1/2019', '5/15/2019', '2019-05-16', '2019-05-16'),
(8, 1, '.Net', 'FullTime', 5, 'C# .Net', 1000, 'Hà Nam', 'c.job.vn', '6/1/2019', '5/15/2019', '2019-05-16', '2019-05-16'),
(9, 1, 'PHP', 'Temporary', 10, 'Tạm thời', 500, 'Hà Nội', 'php.job.vn', '6/1/2019', '5/15/2019', '2019-05-19', '2019-05-19'),
(10, 1, 'Bán xôi', 'PartTime', 10, 'Bán xôi', 500, 'Hà Nam', 'java.job.vn', '6/1/2019', '5/15/2019', '2019-05-20', '2019-05-20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_newstype` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_news` text COLLATE utf8_unicode_ci NOT NULL,
  `image_news` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `id_newstype`, `id_user`, `name_news`, `title_news`, `description_news`, `content_news`, `image_news`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Tuyển dụng', 'Fpt cần tuyền 100 internship php', 'Fpt cần tuyền 100 internship php cho dự án', 'Fpt cần tuyền 100 internship php cho dự án với các khách hàng là ngừoi nước ngoài', 'hgfjhjgj', '2019-05-13', '2019-05-16'),
(3, 1, 5, 'tin', 'tin', 'tin', 'tin', '', '2019-05-16', '2019-05-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newstype`
--

CREATE TABLE `newstype` (
  `id` int(11) NOT NULL,
  `name_newstype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `newstype`
--

INSERT INTO `newstype` (`id`, `name_newstype`, `created_at`, `updated_at`) VALUES
(1, 'Công nghệ', '0000-00-00', '2019-05-14'),
(2, 'Giáo dục', '2019-05-12', '2019-05-12'),
(4, 'Sự kiện', '2019-05-12', '2019-05-12'),
(5, 'Kinh tế', '2019-05-12', '2019-05-12'),
(6, 'Cơ hội', '2019-05-12', '2019-05-12'),
(7, 'Thách thức', '2019-05-12', '2019-05-12'),
(8, 'Khoa hoc', '2019-05-12', '2019-05-12'),
(9, 'Nhân văn', '2019-05-12', '2019-05-12'),
(10, 'Thể thao', '2019-05-12', '2019-05-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `career_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jobtype_student` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `name_student`, `image_student`, `career_student`, `jobtype_student`) VALUES
(9, 'Nguyễn Minh Đức', 'O5mt_utt.png', 'PHP', 'FullTime'),
(12, 'Lê Chí Luận', 'qeEy_utt.png', 'Bán xôi', 'FullTime'),
(13, 'Nguyễn Văn A', 'zRUe_utt.png', 'Java', 'PartTime'),
(14, 'Lê Chí Lý', 'DgBm_utt.png', 'Bán xôi', 'FullTime');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic`
--

CREATE TABLE `topic` (
  `id` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_job` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `topic`
--

INSERT INTO `topic` (`id`, `id_student`, `id_company`, `id_job`, `created_at`, `updated_at`, `status`) VALUES
(1, 9, 1, 8, '2019-05-16', '2019-05-16', '0'),
(9, 9, 1, 9, '2019-05-20', '2019-05-20', '0'),
(10, 9, 1, 7, '2019-05-20', '2019-05-20', '0'),
(11, 14, 1, 8, '2019-05-20', '2019-05-20', '0'),
(12, 14, 1, 9, '2019-05-20', '2019-05-20', '0'),
(13, 14, 1, 10, '2019-05-20', '2019-05-20', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'congty2', '$2y$10$rjPIOL2JeLcuq8cRrCmN9edZO42dUjtmM0W/RXN.XaP2X5JuQyvGy', 'congty2@gmail.com', 1),
(5, 'admin', '$2y$10$/pIxcAEmougv.X9By4pIR.TfXoBGxycnjcnldMKqND8t3uIt9JvWm', 'minhduc171190@gmail.com', 0),
(9, 'sinhvien', '$2y$10$p9QoOutrD41/XpZkId/7Ne.bitWBUXeLVvz8E3xd79deedoC/HPTW', 'sinhvien@gmail.com', 2),
(10, 'sinhvien2', '$2y$10$oEsktDzmcnAHqzqJaVlZa.jpBXpK8gHWLYrlTjQpmysDqtv9V4FHy', 'sinhvien2@gmail.com', 2),
(11, 'congty', '$2y$10$I/eqforEI9JXXiPEoAfR8.IIoWOOzVcs8G9RK9qAJxXl1NF1Y76g.', 'congty@gmail.com', 1),
(12, 'sinhvien3', '$2y$10$BGe/q49rlPl6dHOkcr93OuatdhQwMU.4WyD6End/T3iVawDiq80Yy', 'sinhvien123@gmail.com', 2),
(13, 'sinhvien4', '$2y$10$SukdfI1nsGRsaqVBHAETyuMsbpW.D/v0U6q28VbUCztJ.ZDq0GdlO', 'sinhvien4@gmail.com', 2),
(14, 'sinhvien5', '$2y$10$/IB46sUHTZNP1ocY0ACODOAIk9ZOiO6Q82WuP3rOcTE1HjQF3O3Xi', 's@gmail.com', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Chỉ mục cho bảng `file_student`
--
ALTER TABLE `file_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_company` (`id_company`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_newstype` (`id_newstype`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `newstype`
--
ALTER TABLE `newstype`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`);

--
-- Chỉ mục cho bảng `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_company` (`id_company`),
  ADD KEY `id_job` (`id_job`),
  ADD KEY `id_student_2` (`id_student`),
  ADD KEY `id_student_3` (`id_student`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `newstype`
--
ALTER TABLE `newstype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `file_student`
--
ALTER TABLE `file_student`
  ADD CONSTRAINT `file_student_ibfk_1` FOREIGN KEY (`id`) REFERENCES `student` (`id`);

--
-- Các ràng buộc cho bảng `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`id_newstype`) REFERENCES `newstype` (`id`),
  ADD CONSTRAINT `news_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`id_job`) REFERENCES `job` (`id`),
  ADD CONSTRAINT `topic_ibfk_3` FOREIGN KEY (`id_company`) REFERENCES `company` (`id`),
  ADD CONSTRAINT `topic_ibfk_4` FOREIGN KEY (`id_student`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
