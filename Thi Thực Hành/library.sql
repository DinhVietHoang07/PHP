-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2021 lúc 09:36 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fpt_library`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_library`
--

CREATE TABLE `library` (
                                `bookid` int(11) NOT NULL,
                                `authorid` int(11) NOT NULL DEFAULT 0,
                                `title` varchar(55) CHARACTER SET utf8 NOT NULL DEFAULT '',
                                `ISBN` varchar(25) CHARACTER SET utf8 NOT NULL DEFAULT '',
                                `pud_year` smallint(6) NOT NULL DEFAULT 0,
                                `available` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `book_library`
--

INSERT INTO `library` (`bookid`, `authorid`, `title`, `ISBN`, `pud_year`, `available`) VALUES
(1, 114, 'Bo tro C', 'xsdp1234', 2021, 11),
(2, 115, 'Cung hoc PHP', 'cvc1221', 2022, 59);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `book_library`
--
ALTER TABLE `library`
    ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `book_library`
--
ALTER TABLE `library`
    MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;