-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 09, 2020 lúc 04:16 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wunderlist`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_comment`
--

CREATE TABLE `tb_comment` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Create_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taskId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_comment`
--

INSERT INTO `tb_comment` (`id`, `title`, `Create_date`, `Create_by`, `taskId`) VALUES
(20, 'hhh', '2020-06-09 00:31:43', '', 8),
(21, 'kkk', '2020-06-09 00:38:22', '', 3),
(22, 'ggg', '2020-06-09 00:41:12', '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_files`
--

CREATE TABLE `tb_files` (
  `id` int(11) NOT NULL,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taskId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_information`
--

CREATE TABLE `tb_information` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sex` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_language`
--

CREATE TABLE `tb_language` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_list`
--

CREATE TABLE `tb_list` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Create_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modify` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remider` tinyint(1) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_list`
--

INSERT INTO `tb_list` (`id`, `name`, `Create_date`, `Create_by`, `modify`, `remider`, `userId`) VALUES
(12, 'hhh', '2020-06-09 01:15:00', '', '', 0, 5),
(13, 'ok', '2020-06-01 11:42:40', '', '', 0, 5),
(23, 'ppp', '2020-06-08 12:28:15', '', '', 0, 6),
(28, 'iiiii', '2020-06-08 12:33:41', '', '', 0, 6),
(55, 'ttttt', '2020-06-08 16:02:13', '', '', 0, 6),
(56, 'jj', '2020-06-08 16:03:48', '', '', 0, 6),
(103, 'ddd', '2020-07-04 03:24:40', '', '', 0, 5),
(104, '1', '2020-07-04 03:30:12', '', '', 0, 5),
(105, '', '2020-07-20 12:47:24', '', '', 0, 5),
(106, '1223', '2020-07-04 03:30:23', '', '', 0, 5),
(107, '122332', '2020-07-04 03:30:27', '', '', 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_subtask`
--

CREATE TABLE `tb_subtask` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taskId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_subtask`
--

INSERT INTO `tb_subtask` (`id`, `name`, `taskId`, `status`) VALUES
(8, '', 14, 0),
(9, '', 14, 0),
(10, 'uhuhh', 14, 0),
(11, 'ô', 3, 0),
(12, 'hhhh', 15, 0),
(13, 'hhhh111', 15, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_task`
--

CREATE TABLE `tb_task` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `listId` int(11) NOT NULL,
  `Create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Create_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remider` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_task`
--

INSERT INTO `tb_task` (`id`, `name`, `status`, `listId`, `Create_date`, `Create_by`, `remider`) VALUES
(3, 'sssss', 0, 13, '2020-06-09 02:01:15', '', 0),
(4, 'tuan111', 1, 13, '2020-06-12 07:42:43', '', 0),
(8, 'sssódn', 0, 13, '2020-06-01 12:39:08', '', 0),
(9, 'stausn', 0, 13, '2020-06-01 12:39:16', '', 0),
(12, 'jj', 0, 23, '2020-06-08 12:59:23', '', 0),
(13, 'jj1', 0, 23, '2020-06-08 12:59:26', '', 0),
(14, 'jfgjg', 0, 12, '2020-07-13 12:12:45', '', 0),
(15, 'dadad', 0, 12, '2020-07-13 12:12:46', '', 0),
(17, 'sss', 0, 12, '2020-07-13 12:12:47', '', 0),
(18, 'ssssss', 0, 12, '2020-07-13 12:12:49', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `password`) VALUES
(5, 'tuanvm62@wru.vn', 'c4ca4238a0b923820dcc509a6f75849b'),
(6, 'tuanvm621@wru.vn', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user_language`
--

CREATE TABLE `tb_user_language` (
  `LanguageId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user_list`
--

CREATE TABLE `tb_user_list` (
  `userId` int(11) NOT NULL,
  `listId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user_list`
--

INSERT INTO `tb_user_list` (`userId`, `listId`) VALUES
(5, 12),
(5, 13),
(5, 103),
(5, 104),
(5, 105),
(5, 106),
(5, 107),
(6, 23),
(6, 28),
(6, 55),
(6, 56);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `userId` int(11) NOT NULL,
  `roleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_comment_ibfk_1` (`taskId`);

--
-- Chỉ mục cho bảng `tb_files`
--
ALTER TABLE `tb_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_files_ibfk_1` (`taskId`);

--
-- Chỉ mục cho bảng `tb_information`
--
ALTER TABLE `tb_information`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_language`
--
ALTER TABLE `tb_language`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_list`
--
ALTER TABLE `tb_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_list_ibfk_1` (`userId`);

--
-- Chỉ mục cho bảng `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_subtask`
--
ALTER TABLE `tb_subtask`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_subtask_ibfk_1` (`taskId`);

--
-- Chỉ mục cho bảng `tb_task`
--
ALTER TABLE `tb_task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_task_ibfk_1` (`listId`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_user_language`
--
ALTER TABLE `tb_user_language`
  ADD PRIMARY KEY (`LanguageId`),
  ADD KEY `userId` (`userId`);

--
-- Chỉ mục cho bảng `tb_user_list`
--
ALTER TABLE `tb_user_list`
  ADD PRIMARY KEY (`userId`,`listId`),
  ADD KEY `tb_user_list_ibfk_2` (`listId`);

--
-- Chỉ mục cho bảng `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`userId`,`roleId`),
  ADD KEY `roleId` (`roleId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tb_files`
--
ALTER TABLE `tb_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_information`
--
ALTER TABLE `tb_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_language`
--
ALTER TABLE `tb_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_list`
--
ALTER TABLE `tb_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_subtask`
--
ALTER TABLE `tb_subtask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tb_task`
--
ALTER TABLE `tb_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD CONSTRAINT `tb_comment_ibfk_1` FOREIGN KEY (`taskId`) REFERENCES `tb_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tb_files`
--
ALTER TABLE `tb_files`
  ADD CONSTRAINT `tb_files_ibfk_1` FOREIGN KEY (`taskId`) REFERENCES `tb_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tb_list`
--
ALTER TABLE `tb_list`
  ADD CONSTRAINT `tb_list_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tb_subtask`
--
ALTER TABLE `tb_subtask`
  ADD CONSTRAINT `tb_subtask_ibfk_1` FOREIGN KEY (`taskId`) REFERENCES `tb_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tb_task`
--
ALTER TABLE `tb_task`
  ADD CONSTRAINT `tb_task_ibfk_1` FOREIGN KEY (`listId`) REFERENCES `tb_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tb_user_language`
--
ALTER TABLE `tb_user_language`
  ADD CONSTRAINT `tb_user_language_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `tb_user_language_ibfk_2` FOREIGN KEY (`LanguageId`) REFERENCES `tb_language` (`id`);

--
-- Các ràng buộc cho bảng `tb_user_list`
--
ALTER TABLE `tb_user_list`
  ADD CONSTRAINT `tb_user_list_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_user_list_ibfk_2` FOREIGN KEY (`listId`) REFERENCES `tb_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD CONSTRAINT `tb_user_role_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `tb_user_role_ibfk_2` FOREIGN KEY (`roleId`) REFERENCES `tb_role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
