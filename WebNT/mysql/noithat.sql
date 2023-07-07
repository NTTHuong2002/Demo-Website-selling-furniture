-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 14, 2021 lúc 11:03 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `noithat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idsp` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tenuser` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `idsp`, `iduser`, `tenuser`, `thoigian`) VALUES
(1, '123', 10, 2, 'tu', '2020-12-22'),
(16, '123', 11, 2, 'tu', '2020-12-22'),
(17, 'Good', 2, 2, 'tu', '2020-12-23'),
(18, 'Shop rất nhiệt tình ', 9, 2, 'tu', '2020-12-23'),
(19, 'Tôi rất thích sản phẩm này', 7, 2, 'tu', '2020-12-23'),
(20, 'Shop rất có tâm', 7, 2, 'tu', '2020-12-23'),
(21, 'Tôi rất thích', 4, 2, 'tu', '2020-12-23'),
(22, 'Sản phẩm rất đẹp ạ', 5, 2, 'tu', '2020-12-23'),
(23, 'good', 1, 2, 'tu', '2020-12-31'),
(24, '123', 12, 2, 'tu', '2021-01-08'),
(25, 'tôi rất thích sản phẩm này', 10, 2, 'tu', '2021-01-10'),
(26, 'Ghế rất đẹp ạ!', 10, 2, 'tu', '2021-01-10'),
(27, ':Ghế rất đẹp ạ!', 10, 2, 'tu', '2021-01-10'),
(28, ':Ghế rất đẹp ạ!', 12, 2, 'tu', '2021-01-10'),
(29, ':Ghế rất đẹp ạ!', 12, 2, 'tu', '2021-01-10'),
(30, ':Ghế rất đẹp ạ!', 12, 2, 'tu', '2021-01-10'),
(31, ':Ghế rất đẹp ạ!', 12, 2, 'tu', '2021-01-10'),
(32, 'Ghế rất bền ạ1', 10, 2, 'tu', '2021-01-10'),
(33, 'Ghế rất bền ạ1', 10, 2, 'tu', '2021-01-10'),
(34, 'Sofa rẩ đẹp', 19, 2, 'tu', '2021-01-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

CREATE TABLE `chitietdh` (
  `iddh` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdh`
--

INSERT INTO `chitietdh` (`iddh`, `idsp`, `soluong`, `dongia`) VALUES
(1, 11, 1, 21000000),
(2, 7, 2, 60000000),
(2, 10, 1, 850000),
(3, 7, 3, 90000000),
(3, 10, 1, 850000),
(4, 2, 1, 6000000),
(4, 7, 1, 30000000),
(5, 10, 1, 850000),
(6, 10, 1, 850000),
(7, 12, 2, 20000000),
(8, 11, 1, 21000000),
(9, 10, 1, 850000),
(10, 11, 1, 21000000),
(12, 12, 1, 10000000),
(13, 7, 1, 30000000),
(13, 8, 1, 68000000),
(13, 9, 1, 22000000),
(13, 10, 1, 850000),
(13, 11, 3, 63000000),
(13, 12, 1, 10000000),
(14, 11, 1, 21000000),
(15, 11, 1, 21000000),
(16, 11, 1, 21000000),
(17, 10, 1, 850000),
(18, 26, 1, 17000000),
(18, 27, 1, 11000000),
(19, 26, 1, 17000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cuahang`
--

CREATE TABLE `cuahang` (
  `tenshop` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioithieu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatri` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamnhin` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumenh` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cuahang`
--

INSERT INTO `cuahang` (`tenshop`, `anh`, `gioithieu`, `giatri`, `tamnhin`, `sumenh`) VALUES
('QTT Shop', 'about.jpg', '<p>QTT shop l&agrave; thương hiệu mới, chuy&ecirc;n kinh doanh c&aacute;c sản phẩm Nội thất nhập khẩu từ Ch&acirc;u &Acirc;u, Ch&acirc;u &Aacute; v&agrave; c&aacute;c sản phẩm do c&ocirc;ng ty QTT sản xuất. Với chặng đường d&agrave;i ph&iacute;a trước, ch&uacute;ng t&ocirc;i chỉ ph&acirc;n phối sản phẩm ch&iacute;nh h&atilde;ng c&oacute; nguồn gốc, xuất xứ r&otilde; r&agrave;ng. V&igrave; vậy, kh&aacute;ch h&agrave;ng c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m khi lựa chọn sản phẩm tại website www.QTTshop.com.vn QTT shop li&ecirc;n tục cập nhật v&agrave; bổ sung những d&ograve;ng sản phẩm c&oacute; xu hướng mới, c&ocirc;ng năng ti&ecirc;n tiến, g&oacute;p phần khẳng định đẳng cấp v&agrave; gi&aacute; trị cho ng&ocirc;i nh&agrave; của bạn, đem đến sự tiện nghi ho&agrave;n hảo trong từng kh&ocirc;ng gian sống. K&iacute;nh mời qu&yacute; kh&aacute;ch h&agrave;ng tới tham quan, mua sắm sản phẩm tại Hệ thống Showroom Nội thất Ho&agrave;n Mỹ tr&ecirc;n phạm vi to&agrave;n quốc!</p>\r\n', '<p>Với mong muốn ph&aacute;t triển thương hiệu Việt bằng nội lực, QTT shop đ&atilde; ch&uacute; trọng v&agrave;o thiết kế v&agrave; sản xuất nội thất trong nước. Danh mục sản phẩm của Nh&agrave; Xinh thường xuy&ecirc;n được đổi mới v&agrave; cập nhật, li&ecirc;n tục cung cấp cho kh&aacute;ch h&agrave;ng c&aacute;c d&ograve;ng sản phẩm theo xu hướng mới nhất. Do ch&iacute;nh người Việt thiết kế v&agrave; sản xuất, nội thất thương hiệu Nh&agrave; Xinh lu&ocirc;n ph&ugrave; hợp với cuộc sống &Aacute; Đ&ocirc;ng, đem đến sự tiện nghi ho&agrave;n hảo trong mọi kh&ocirc;ng gian sống.</p>\r\n', '<p>QTT shop sẽ hiện thực h&oacute;a những &yacute; tưởng, ước mơ của kh&aacute;ch h&agrave;ng v&agrave; mang đến cho kh&aacute;ch h&agrave;ng một kh&ocirc;ng gian sống với phong c&aacute;ch nội thất hiện đại, sang trọng, tiện nghi.</p>\r\n', '<p>Bằng ch&iacute;nh t&igrave;nh y&ecirc;u v&agrave; sự tr&acirc;n trọng, QTT shop lu&ocirc;n nổ lực kh&ocirc;ng ngừng để mang đến cho kh&aacute;ch h&agrave;ng những sản phẩm tốt nhất, k&egrave;m dịch vụ tận t&igrave;nh, chu đ&aacute;o nhất. Sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng l&agrave; niềm tự h&agrave;o của ch&uacute;ng t&ocirc;i.</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `danhgia` int(11) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id`, `idsp`, `iduser`, `danhgia`, `ngay`) VALUES
(2, 4, 2, 5, '2020-12-23'),
(4, 5, 2, 4, '2020-12-23'),
(6, 3, 2, 5, '2020-12-23'),
(7, 6, 2, 4, '2020-12-23'),
(8, 1, 2, 1, '2020-12-23'),
(9, 8, 2, 3, '2020-12-23'),
(10, 9, 2, 2, '2020-12-23'),
(11, 1, 3, 4, '2020-12-23'),
(12, 7, 3, 4, '2020-12-23'),
(13, 3, 3, 5, '2020-12-23'),
(15, 2, 3, 1, '2020-12-23'),
(17, 12, 2, 5, '2020-12-23'),
(18, 2, 5, 5, '2020-12-24'),
(19, 5, 5, 5, '2020-12-24'),
(20, 12, 5, 5, '2020-12-24'),
(21, 10, 5, 5, '2020-12-24'),
(22, 9, 5, 5, '2020-12-24'),
(23, 11, 5, 5, '2020-12-24'),
(24, 6, 5, 5, '2020-12-24'),
(25, 7, 5, 5, '2020-12-24'),
(26, 8, 5, 5, '2020-12-24'),
(27, 4, 5, 5, '2020-12-24'),
(28, 3, 5, 4, '2020-12-24'),
(29, 1, 5, 5, '2020-12-24'),
(30, 1, 4, 5, '2020-12-24'),
(31, 7, 4, 5, '2020-12-24'),
(32, 2, 4, 5, '2020-12-24'),
(33, 8, 4, 5, '2020-12-24'),
(34, 12, 4, 5, '2020-12-24'),
(35, 11, 4, 5, '2020-12-24'),
(36, 10, 4, 4, '2020-12-24'),
(37, 9, 4, 5, '2020-12-24'),
(38, 3, 4, 5, '2020-12-24'),
(39, 4, 4, 5, '2020-12-24'),
(40, 5, 4, 5, '2020-12-24'),
(41, 6, 4, 5, '2020-12-24'),
(42, 10, 2, 5, '2021-01-10'),
(43, 26, 2, 5, '2021-01-11'),
(44, 27, 2, 5, '2021-01-11'),
(45, 20, 2, 5, '2021-01-11'),
(46, 17, 2, 5, '2021-01-11'),
(47, 18, 2, 5, '2021-01-11'),
(48, 19, 2, 5, '2021-01-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` datetime NOT NULL DEFAULT current_timestamp(),
  `mota` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idphong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `anh`, `ngay`, `mota`, `idphong`) VALUES
(1, 'Ghế', 'danhmuc3.jpg', '2020-12-21 00:00:00', '<h2>Mẫu ghế đẹp, cao cấp</h2>\r\n\r\n<p>Mẫu ghế đẹp hiện đại nhập khẩu cao cấp ph&ograve;ng ngủ l&agrave; sản phẩm kh&ocirc;ng thể thiếu trong bất cứ kh&ocirc;ng gian gia đ&igrave;nh n&agrave;o. Nhiều mẫu ghế đẹp nhập khẩu&nbsp;từ nhiều thương hiệu nổi tiếng Ch&acirc;u &Aacute;, Ch&acirc;u &Acirc;u,&nbsp;Italia (&Yacute;)&nbsp;mang lại sự đa dạng trong lựa chọn bền, đẹp v&agrave; chất lượng.</p>\r\n', 4),
(2, 'Bàn ăn', 'danhmuc2.jpg', '2020-12-21 00:00:00', '<h2>Mẫu b&agrave;n ăn nh&agrave; bếp cao cấp</h2>\r\n\r\n<p>Mẫu b&agrave;n ăn nh&agrave; bếp đẹp nhập khẩu cao cấp, b&agrave;n ăn hiện đại sang trọng&nbsp;đến&nbsp;từ nhiều thương hiệu nổi tiếng Ch&acirc;u &Aacute;, Ch&acirc;u &Acirc;u,&nbsp;Italia (&Yacute;). Mua b&aacute;n nhiều mẫu b&agrave;n ăn đẹp hiện đại&nbsp;từ b&agrave;n chữ nhật, b&agrave;n bầu dục...c&oacute; kiểu d&aacute;ng sang trọng v&agrave; qu&yacute; ph&aacute;i, sử dụng chất liệu cao cấp cho kh&ocirc;ng gian ẩm thực gia đ&igrave;nh bạn th&ecirc;m trọn vẹn.</p>\r\n', 2),
(3, 'Giường ngủ', 'danhmuc5.jpg', '2020-12-21 00:00:00', '<h2>Mẫu giường ngủ đẹp, cao cấp</h2>\r\n\r\n<p>Nhiều mẫu giường ngủ đẹp nhập khẩu cao cấp hiện đại mang lại sự thoải m&aacute;i &ecirc;m &aacute;i, thả hết những mệt mỏi, buồn phiền&nbsp;từ nhiều thương hiệu nổi tiếng Ch&acirc;u &Aacute;, Ch&acirc;u &Acirc;u,&nbsp;Italia (&Yacute;).&nbsp;Mẫu giường ngủ cao cấp&nbsp;đồng h&agrave;nh c&ugrave;ng giấc ngủ của bạn với chất lượng nguồn h&agrave;ng đa dạng c&aacute;c kiểu giường ngủ mới v&agrave; uy t&iacute;n nhất.&nbsp;</p>\r\n', 3),
(4, 'Sofa', 'danhmuc1.jpg', '2020-12-21 00:00:00', '<h2>Mẫu ghế sofa bộ cao cấp</h2>\r\n\r\n<p>Mẫu ghế Sofa bộ đẹp hiện đại nhập khẩu cao cấp&nbsp;từ nhiều thương hiệu nổi tiếng Ch&acirc;u &Aacute;, Ch&acirc;u &Acirc;u,&nbsp;Italia (&Yacute;). Ghế Sofa bộ hiện đại v&agrave; sang trọng trong từng sản phẩm đ&aacute;p ứng được mọi nhu cầu của kh&aacute;ch h&agrave;ng. Mang đến sự h&agrave;i l&ograve;ng cho kh&aacute;ch h&agrave;ng.</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `idkhachhang` int(11) NOT NULL,
  `ngay` date NOT NULL,
  `tenuser` varchar(500) NOT NULL,
  `diachi` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` int(11) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `loinhan` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongsanpham` int(11) NOT NULL,
  `tongtien` double NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `idkhachhang`, `ngay`, `tenuser`, `diachi`, `sodt`, `email`, `loinhan`, `tongsanpham`, `tongtien`, `trangthai`) VALUES
(1, 2, '2020-12-22', '', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 18900000, 4),
(2, 2, '2020-12-23', '', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 3, 57765000, 3),
(3, 2, '2020-10-31', '', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 4, 87765000, 2),
(4, 2, '2020-11-01', '', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 2, 32400000, 4),
(5, 2, '2020-12-10', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 765000, 2),
(6, 2, '2020-12-22', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 765000, 1),
(7, 2, '2020-12-31', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 2, 19000000, 1),
(8, 2, '2020-12-31', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 18900000, 1),
(9, 2, '2020-12-31', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 765000, 1),
(10, 2, '2021-01-08', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 18900000, 1),
(11, 2, '2021-01-08', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 0, 0, 1),
(12, 2, '2021-01-09', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 9000000, 1),
(13, 2, '2021-01-10', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 8, 178665000, 1),
(14, 2, '2021-01-10', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 18900000, 1),
(15, 2, '2021-01-10', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 18900000, 1),
(16, 2, '2021-01-10', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 18900000, 1),
(17, 2, '2021-01-10', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 765000, 1),
(18, 2, '2021-01-14', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 2, 25200000, 1),
(19, 2, '2021-01-14', 'Trần Quốc Tú', '26 Huỳnh Văn Nghệ', 1264607869, 'tranxp34878@gmail.com', '', 1, 15300000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `id` int(11) NOT NULL,
  `tenhang` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` double NOT NULL,
  `anh` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `mota` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `idkhuyenmai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`id`, `tenhang`, `soluong`, `dongia`, `anh`, `ngay`, `mota`, `iddanhmuc`, `idkhuyenmai`) VALUES
(1, 'Sofa Lovely 3 chỗ hiện đại vải xám', 99, 22000000, 'Sofa Lovely 3 chỗ hiện đại vải xám.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<ul>\r\n	<li>Đ&ocirc;n: L 1000&nbsp; &nbsp;W 620 (mm)</li>\r\n	<li>Ghế 1: L 860&nbsp; &nbsp;W 900&nbsp; &nbsp;H 860 (mm)</li>\r\n	<li>Ghế 2,5: L 1980&nbsp; &nbsp;W 900&nbsp; &nbsp;H 860 (mm)</li>\r\n	<li>Ghế 3: L 2260&nbsp; &nbsp;W 900&nbsp; &nbsp;H 860 (mm)</li>\r\n</ul>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<ul>\r\n	<li>100% da b&ograve; thương hiệu Mastrotto &ndash; Italia</li>\r\n	<li>Độ d&agrave;y của da từ 1-1.2 mm</li>\r\n	<li>Phần ngồi: m&uacute;t đ&agrave;n hồi, phần tựa lưng bằng b&ocirc;ng kết hợp l&ocirc;ng vũ</li>\r\n	<li>Ch&acirc;n bằng&nbsp;th&eacute;p mạ crom</li>\r\n	<li>Khung l&agrave;m bằng gỗ Meranti</li>\r\n	<li>Bảo h&agrave;nh da sản phẩm trong 24 th&aacute;ng, khung bảo h&agrave;nh trọn đời</li>\r\n</ul>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<ul>\r\n	<li>Thương hiệu Ho&agrave;n Mỹ</li>\r\n	<li>Xuất xứ Malaysia</li>\r\n</ul>\r\n', 4, 3),
(2, 'Bàn ăn kính - BA020.007A1', 6, 6000000, 'ba020.007a1.3.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<p>1200X850X750 (mm)</p>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<p>- Mặt k&iacute;nh cường lực 5mm sơn m&agrave;u kem.</p>\r\n\r\n<p>- Ch&acirc;n sắt sơn tĩnh điện.</p>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<p>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam</p>\r\n', 2, 1),
(3, 'Giường bọc nỉ - GBN020.002A', 123, 17000000, 'g020.002a.1.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<p>1800x2000 (mm)</p>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<p>- B&ecirc;n trong sử dụng gỗ MDF hoặc MFC chống ẩm.</p>\r\n\r\n<p>- Phản giường gỗ MDF chống ẩm m&atilde; 101T.</p>\r\n\r\n<p>- Khung gi&aacute;t phản sắt sơn tĩnh điện (1800x2000).</p>\r\n\r\n<p>- M&uacute;t K30, bọc nỉ to&agrave;n bộ m&atilde; 1362-13.</p>\r\n\r\n<p>- Ch&acirc;n giường gỗ tự nhi&ecirc;n sơn mờ, độ bền cao.&nbsp;</p>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<ul>\r\n	<li>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam.&nbsp;</li>\r\n</ul>\r\n\r\n<h3>K&iacute;ch Thước Đệm</h3>\r\n\r\n<p>1800x2000 (mm)</p>\r\n', 3, 1),
(4, 'Ghế ăn HC', 68, 3300000, 'ghe_an_hc-1_-_copy.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<p>&nbsp;43x50x90x46 (cm)</p>\r\n\r\n<h3>Điểm Nổi Bật</h3>\r\n\r\n<ul>\r\n	<li>M&agrave;u r&ecirc;u độc đ&aacute;o, lạ mắt, tạo c&aacute; t&iacute;nh ri&ecirc;ng cho gia chủ.&nbsp;</li>\r\n	<li>Kiểu d&aacute;ng thanh lịch, phong c&aacute;ch hiện đại</li>\r\n	<li>Ph&ugrave; hợp với nhiều kiểu kh&ocirc;ng gian nội thất kh&aacute;c nhau.</li>\r\n	<li>Gọn nhẹ, c&oacute; phần tay cầm ở th&agrave;nh ghế - gi&uacute;p dễ d&agrave;ng di chuyển.</li>\r\n	<li>Vệ sinh sản phẩm dễ d&agrave;ng.&nbsp;</li>\r\n</ul>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<p>- Khung kim loại chắc chắn.</p>\r\n\r\n<p>- Bọc vải (100% polyester) m&agrave;u COWBOY 411 độc đ&aacute;o.</p>\r\n\r\n<p>- Ch&acirc;n kim loại bọc vải m&agrave;u COWBOY 411.</p>\r\n', 1, 1),
(5, 'Bàn ăn gỗ - BA020.001B2', 15, 4800000, 'ba020.001b2.2.jpg', '2020-12-17', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<p>1600x900x750 (mm)</p>\r\n\r\n<h3>Điểm Nổi Bật</h3>\r\n\r\n<p>- Cạnh b&agrave;n được bo tr&ograve;n, an to&agrave;n cho người sử dụng - kể cả với c&aacute;c gia đ&igrave;nh c&oacute; trẻ nhỏ.</p>\r\n\r\n<p>-&nbsp;Mặt b&agrave;n c&oacute; v&acirc;n gỗ đẹp tự nhi&ecirc;n.</p>\r\n\r\n<p>- Dễ vệ sinh sau khi d&ugrave;ng bữa.</p>\r\n\r\n<p>- Kiểu d&aacute;ng đơn giản m&agrave; hiện đại, thanh lịch.&nbsp;</p>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<p>- B&agrave;n sử dụng gỗ An Cường, cốt MDF chống ẩm m&atilde; 333PL.</p>\r\n\r\n<p>- Ch&acirc;n gỗ tự nhi&ecirc;n c&oacute; độ bền cao, sơn m&agrave;u 388EV</p>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<p>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam.</p>\r\n', 2, 1),
(6, ' Bàn ăn Ceramic - HT83001-120[KL-99]', 77, 18000000, 'sp1.jpg', '2020-12-16', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<p>L 1200/1600 ; W 850;&nbsp; H 760 (mm)</p>\r\n\r\n<h3>Điểm Nổi Bật</h3>\r\n\r\n<p>- Sản phẩm b&agrave;n ăn th&ocirc;ng minh với những t&iacute;nh năng ưu việt như: Khả năng k&eacute;o d&agrave;i &ndash; thu gọn nhanh ch&oacute;ng, chống thấm nước, chịu nhiệt cao, chống xước tốt.&nbsp;</p>\r\n\r\n<p>-&nbsp;B&agrave;n c&oacute; k&iacute;ch thước cố định l&agrave; 1m2, k&eacute;o d&agrave;i hết cỡ sẽ l&agrave; 1m6. Với k&iacute;ch thước n&agrave;y, b&agrave;n th&iacute;ch hợp đặt trong c&aacute;c kh&ocirc;ng gian ph&ograve;ng ăn c&oacute; diện t&iacute;ch vừa v&agrave; nhỏ.&nbsp;</p>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<ul>\r\n	<li>Mặt b&agrave;n bằng k&iacute;nh cường lực kết hợp với si&ecirc;u vật liệu ceramic m&agrave;u KL-99</li>\r\n	<li>Ch&acirc;n bằng gỗ MDF phủ sơn trắng</li>\r\n	<li>Ch&acirc;n đế phun sơn trắng sang trọng.&nbsp;</li>\r\n</ul>\r\n', 2, 1),
(7, 'Giường ngủ - GBD019.005A', 61, 30000000, 'gb019.005a.1.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<p>1800x2000 (mm)</p>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<p>- Phản gỗ chất liệu MDF/MFC</p>\r\n\r\n<p>- Giường bọc da b&ograve; thật kết hợp da c&ocirc;ng nghiệp ở mặt sau.</p>\r\n\r\n<p>- Ch&acirc;n sắt sơn tĩnh điện.</p>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<p>Thương hiệu Ho&agrave;n Mỹ</p>\r\n', 3, 1),
(8, 'Sofa bộ Hoàn Mỹ - LAZIO-HM2', 74, 68000000, 'lazio-hm2_g3_.1_1.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<ul>\r\n	<li>Ghế 1:&nbsp;L 1160&nbsp; &nbsp;W 1000&nbsp; &nbsp;H 930 (mm)</li>\r\n	<li>Ghế 2:&nbsp;L 1920&nbsp; &nbsp;W 100&nbsp; &nbsp;H 930 (mm)&nbsp;</li>\r\n	<li>Ghế 2.5:&nbsp;L 2220&nbsp; &nbsp;W 100&nbsp; &nbsp;H 930 (mm)&nbsp;&nbsp;</li>\r\n	<li>Ghế 3:&nbsp;L 2520&nbsp; &nbsp;W 100&nbsp; &nbsp;H 930 (mm)&nbsp;</li>\r\n</ul>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<ul>\r\n	<li>100% da b&ograve; thương hiệu Mastrotto &ndash; Italia</li>\r\n	<li>Độ d&agrave;y của da từ 1.2-1.4 mm</li>\r\n	<li>Phần ngồi v&agrave; phần tựa: m&uacute;t đ&agrave;n hồi</li>\r\n	<li>Ch&acirc;n bằng&nbsp;th&eacute;p mạ crom</li>\r\n	<li>Khung l&agrave;m bằng gỗ Meranti</li>\r\n	<li>Bảo h&agrave;nh da sản phẩm trong 24 th&aacute;ng, khung bảo h&agrave;nh trọn đời</li>\r\n</ul>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<ul>\r\n	<li>Thương hiệu Ho&agrave;n Mỹ</li>\r\n	<li>Xuất xứ Malaysia</li>\r\n</ul>\r\n', 4, 1),
(9, 'Sofa vải - M11/705-23 ', 75, 22000000, 'm11_bo_.2_1_2.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<ul>\r\n	<li>Ghế 1: L 950&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li>\r\n	<li>Ghế 2,5: L 2020&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li>\r\n</ul>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<ul>\r\n	<li>Khung kim loại</li>\r\n	<li>Bọc vải&nbsp;</li>\r\n</ul>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<ul>\r\n	<li>Thương hiệu Ho&agrave;n Mỹ</li>\r\n	<li>Xuất xứ Trung Quốc</li>\r\n</ul>\r\n', 4, 1),
(10, 'Ghế - DC323-3-101', 66, 850000, 'dc323-3.101.1.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<p>43x50x90x46 (cm)</p>\r\n\r\n<h3>Điểm Nổi Bật</h3>\r\n\r\n<ul>\r\n	<li>M&agrave;u đen sang trọng v&agrave; lịch sự.&nbsp;</li>\r\n	<li>Kiểu d&aacute;ng thanh lịch, phong c&aacute;ch hiện đại</li>\r\n	<li>Ph&ugrave; hợp với nhiều kiểu kh&ocirc;ng gian nội thất kh&aacute;c nhau.</li>\r\n	<li>Gọn nhẹ, c&oacute; phần tay cầm ở th&agrave;nh ghế - gi&uacute;p dễ d&agrave;ng di chuyển.</li>\r\n	<li>Vệ sinh sản phẩm dễ d&agrave;ng.&nbsp;</li>\r\n</ul>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<p>- Khung kim loại chắc chắn,</p>\r\n\r\n<p>- Bọc vải (100% polyester) m&agrave;u COWBOY 101</p>\r\n\r\n<p>- Ch&acirc;n kim loại bọc vải m&agrave;u COWBOY 101</p>\r\n', 1, 1),
(11, 'Ghế làm việc High Bossy', 113, 21000000, '1000-san-pham-nha-xinh-(12)_-_500x333.jpg', '2020-12-21', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<p>46.5x58x88 (cm)</p>\r\n\r\n<h3>Điểm Nổi Bật</h3>\r\n\r\n<p>Mọi chi tiết của ghế&nbsp; đều được t&iacute;nh to&aacute;n cẩn thận, khoa học nhằm phục vụ tốt nhất nhu cầu của người sử dụng. Với kiểu d&aacute;ng năng động, m&agrave;u sắc trẻ trung c&ugrave;ng đệm ngồi &ecirc;m &aacute;i, sản phẩm ghế ăn n&agrave;y sẽ l&agrave; mảnh gh&eacute;p tuyệt vời ho&agrave;n thiện kh&ocirc;ng gian nội thất ph&ograve;ng ăn gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn...</p>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<p>- Phần khung v&agrave; ch&acirc;n ghế chế t&aacute;c từ kim loại.</p>\r\n\r\n<p>- Bọc da PU&nbsp; m&agrave;u&nbsp;MAAN PU-4 trẻ trung, năng động.&nbsp;</p>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<p>- Thương hiệu Ho&agrave;n Mỹ, đặt sản xuất ri&ecirc;ng tại Trung Quốc.</p>\r\n', 1, 1),
(12, 'Giường ngủ Melamine - 3112005090', 95, 10000000, 'giuong-ngu-melamine-31120050-noi-that-hoan-my_1_.jpg', '2020-12-21', '<h3>Chất Liệu</h3>\r\n\r\n<ul>\r\n	<li>Cốt MDF chống ẩm đạt chuẩn Ch&acirc;u &Acirc;u</li>\r\n	<li>Bề mặt phủ Melamine 106SH cao cấp</li>\r\n</ul>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<p>Ho&agrave;n Mỹ, Việt Nam</p>\r\n\r\n<h3>K&iacute;ch Thước Đệm</h3>\r\n\r\n<ul>\r\n	<li>L/W 1600 &nbsp; P/D 2000 (mm)</li>\r\n	<li>L/W 1800 &nbsp; P/D 2000 (mm)</li>\r\n</ul>\r\n\r\n<h3>Lưu &Yacute; Sử Dụng</h3>\r\n\r\n<p>Bề mặt phủ melamine dễ bị trầy xước.</p>\r\n\r\n<h3>SKU</h3>\r\n\r\n<ul>\r\n	<li>G1600DC-MFC-106SH: 31120050</li>\r\n	<li>G1800DC-MFC-106SH: 31120190</li>\r\n</ul>\r\n', 3, 1),
(16, 'Giường ngủ - Sora Gas', 99, 11000000, 'sora-gas-lift-queer-bed.3_2.jpg', '2020-12-24', '<h3>K&iacute;ch Thước</h3>\r\n\r\n<ul>\r\n	<li>1620 X 2020 (mm)</li>\r\n	<li>1820 x 2020 (mm)</li>\r\n</ul>\r\n\r\n<h3>Chất Liệu</h3>\r\n\r\n<ul>\r\n	<li>Khung giường l&agrave;m bằng gỗ MDF v&agrave; gỗ v&aacute;n dăm</li>\r\n	<li>D&aacute;t giường l&agrave;m bằng v&aacute;n &eacute;p veneer (LVL)</li>\r\n	<li>Tấm đầu giường l&agrave;m bằng gỗ MDF v&agrave; gỗ v&aacute;n dăm</li>\r\n	<li>Ch&acirc;n giường bằng gỗ</li>\r\n</ul>\r\n\r\n<h3>Xuất Xứ</h3>\r\n\r\n<ul>\r\n	<li>Thương hiệu Ho&agrave;n Mỹ</li>\r\n	<li>Xuất xứ Malaysia</li>\r\n</ul>\r\n\r\n<h3>K&iacute;ch Thước Đệm</h3>\r\n\r\n<ul>\r\n	<li>1600x2000 (mm)</li>\r\n	<li>1800x2000 (mm)</li>\r\n</ul>\r\n', 3, 3),
(17, 'Sofa Twoback 2,5 chỗ hiện đại vải Diego', 98, 36000000, 'veneto--213-bo.3.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <ul> 	<li>Ghế 1: L 950&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li> 	<li>Ghế 2,5: L 2020&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li> </ul>  <h3>Chất Liệu</h3>  <ul> 	<li>Khung kim loại</li> 	<li>Bọc vải&nbsp;</li> </ul>  <h3>Xuất Xứ</h3>  <ul> 	<li>Thương hiệu Ho&agrave;n Mỹ</li> 	<li>Xuất xứ Trung Quốc</li> </ul>', 4, 1),
(18, 'Sofa Twoback 2,5 chỗ hiện đại vải Diego', 98, 36000000, 'veneto--213-bo.3.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <ul> 	<li>Ghế 1: L 950&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li> 	<li>Ghế 2,5: L 2020&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li> </ul>  <h3>Chất Liệu</h3>  <ul> 	<li>Khung kim loại</li> 	<li>Bọc vải&nbsp;</li> </ul>  <h3>Xuất Xứ</h3>  <ul> 	<li>Thương hiệu Ho&agrave;n Mỹ</li> 	<li>Xuất xứ Trung Quốc</li> </ul>', 4, 1),
(19, 'Sofa 121 3 chỗ hiện đại da nâu', 77, 56000000, 'sofa-3-cho-boc-da-den-500.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <ul> 	<li>Ghế 1: L 950&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li> 	<li>Ghế 2,5: L 2020&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li> </ul>  <h3>Chất Liệu</h3>  <ul> 	<li>Khung kim loại</li> 	<li>Bọc vải&nbsp;</li> </ul>  <h3>Xuất Xứ</h3>  <ul> 	<li>Thương hiệu Ho&agrave;n Mỹ</li> 	<li>Xuất xứ Trung Quốc</li> </ul>', 4, 1),
(20, 'Sofa Twoback 3 chỗ hiện đại vải Diego', 38, 33000000, 'sofa_twoback_077-3-_3cho_diego(2)_-_copy.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <ul> 	<li>Ghế 1: L 950&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li> 	<li>Ghế 2,5: L 2020&nbsp; &nbsp;W 950&nbsp; &nbsp;H 880 (mm)</li> </ul>  <h3>Chất Liệu</h3>  <ul> 	<li>Khung kim loại</li> 	<li>Bọc vải&nbsp;</li> </ul>  <h3>Xuất Xứ</h3>  <ul> 	<li>Thương hiệu Ho&agrave;n Mỹ</li> 	<li>Xuất xứ Trung Quốc</li> </ul>', 4, 1),
(21, 'Bàn ăn gỗ Sen', 16, 13000000, 'ban_an_sen_-_copy.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <p>1600x900x750 (mm)</p>  <h3>Điểm Nổi Bật</h3>  <p>- Cạnh b&agrave;n được bo tr&ograve;n, an to&agrave;n cho người sử dụng - kể cả với c&aacute;c gia đ&igrave;nh c&oacute; trẻ nhỏ.</p>  <p>-&nbsp;Mặt b&agrave;n c&oacute; v&acirc;n gỗ đẹp tự nhi&ecirc;n.</p>  <p>- Dễ vệ sinh sau khi d&ugrave;ng bữa.</p>  <p>- Kiểu d&aacute;ng đơn giản m&agrave; hiện đại, thanh lịch.&nbsp;</p>  <h3>Chất Liệu</h3>  <p>- B&agrave;n sử dụng gỗ An Cường, cốt MDF chống ẩm m&atilde; 333PL.</p>  <p>- Ch&acirc;n gỗ tự nhi&ecirc;n c&oacute; độ bền cao, sơn m&agrave;u 388EV</p>  <h3>Xuất Xứ</h3>  <p>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam.</p>', 2, 1),
(22, 'Bàn ăn Dubai 1m8', 99, 9000000, 'ban-an-dubai-1m8_-_copy.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <p>1600x900x750 (mm)</p>  <h3>Điểm Nổi Bật</h3>  <p>- Cạnh b&agrave;n được bo tr&ograve;n, an to&agrave;n cho người sử dụng - kể cả với c&aacute;c gia đ&igrave;nh c&oacute; trẻ nhỏ.</p>  <p>-&nbsp;Mặt b&agrave;n c&oacute; v&acirc;n gỗ đẹp tự nhi&ecirc;n.</p>  <p>- Dễ vệ sinh sau khi d&ugrave;ng bữa.</p>  <p>- Kiểu d&aacute;ng đơn giản m&agrave; hiện đại, thanh lịch.&nbsp;</p>  <h3>Chất Liệu</h3>  <p>- B&agrave;n sử dụng gỗ An Cường, cốt MDF chống ẩm m&atilde; 333PL.</p>  <p>- Ch&acirc;n gỗ tự nhi&ecirc;n c&oacute; độ bền cao, sơn m&agrave;u 388EV</p>  <h3>Xuất Xứ</h3>  <p>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam.</p>', 2, 1),
(23, 'Bàn ăn Jazz 2m', 17000000, 17000000, '500-san-pham-nha-xinh(55).jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <p>1600x900x750 (mm)</p>  <h3>Điểm Nổi Bật</h3>  <p>- Cạnh b&agrave;n được bo tr&ograve;n, an to&agrave;n cho người sử dụng - kể cả với c&aacute;c gia đ&igrave;nh c&oacute; trẻ nhỏ.</p>  <p>-&nbsp;Mặt b&agrave;n c&oacute; v&acirc;n gỗ đẹp tự nhi&ecirc;n.</p>  <p>- Dễ vệ sinh sau khi d&ugrave;ng bữa.</p>  <p>- Kiểu d&aacute;ng đơn giản m&agrave; hiện đại, thanh lịch.&nbsp;</p>  <h3>Chất Liệu</h3>  <p>- B&agrave;n sử dụng gỗ An Cường, cốt MDF chống ẩm m&atilde; 333PL.</p>  <p>- Ch&acirc;n gỗ tự nhi&ecirc;n c&oacute; độ bền cao, sơn m&agrave;u 388EV</p>  <h3>Xuất Xứ</h3>  <p>Thương hiệu Ho&agrave;n Mỹ, sản xuất tại Việt Nam.</p>', 2, 1),
(24, 'Giường ngủ bọc vải Pio 1m8', 29, 28000000, 'giu-ng-pio-2_-_copy.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <ul> 	<li>1620 X 2020 (mm)</li> 	<li>1820 x 2020 (mm)</li> </ul>  <h3>Chất Liệu</h3>  <ul> 	<li>Khung giường l&agrave;m bằng gỗ MDF v&agrave; gỗ v&aacute;n dăm</li> 	<li>D&aacute;t giường l&agrave;m bằng v&aacute;n &eacute;p veneer (LVL)</li> 	<li>Tấm đầu giường l&agrave;m bằng gỗ MDF v&agrave; gỗ v&aacute;n dăm</li> 	<li>Ch&acirc;n giường bằng gỗ</li> </ul>  <h3>Xuất Xứ</h3>  <ul> 	<li>Thương hiệu Ho&agrave;n Mỹ</li> 	<li>Xuất xứ Malaysia</li> </ul>  <h3>K&iacute;ch Thước Đệm</h3>  <ul> 	<li>1600x2000 (mm)</li> 	<li>1800x2000 (mm)</li> </ul>', 3, 1),
(25, 'Giường ngủ gỗ Dixie 1m8', 38, 53000000, 'giuong--dixie-1m8_-_copy.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <ul> 	<li>1620 X 2020 (mm)</li> 	<li>1820 x 2020 (mm)</li> </ul>  <h3>Chất Liệu</h3>  <ul> 	<li>Khung giường l&agrave;m bằng gỗ MDF v&agrave; gỗ v&aacute;n dăm</li> 	<li>D&aacute;t giường l&agrave;m bằng v&aacute;n &eacute;p veneer (LVL)</li> 	<li>Tấm đầu giường l&agrave;m bằng gỗ MDF v&agrave; gỗ v&aacute;n dăm</li> 	<li>Ch&acirc;n giường bằng gỗ</li> </ul>  <h3>Xuất Xứ</h3>  <ul> 	<li>Thương hiệu Ho&agrave;n Mỹ</li> 	<li>Xuất xứ Malaysia</li> </ul>  <h3>K&iacute;ch Thước Đệm</h3>  <ul> 	<li>1600x2000 (mm)</li> 	<li>1800x2000 (mm)</li> </ul>', 3, 1),
(26, 'Giường ngủ gỗ Bụi 1m6', 53, 17000000, 'giuong_bui_1.6m_vai_foster_1_-_copy.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <ul> 	<li>1620 X 2020 (mm)</li> 	<li>1820 x 2020 (mm)</li> </ul>  <h3>Chất Liệu</h3>  <ul> 	<li>Khung giường l&agrave;m bằng gỗ MDF v&agrave; gỗ v&aacute;n dăm</li> 	<li>D&aacute;t giường l&agrave;m bằng v&aacute;n &eacute;p veneer (LVL)</li> 	<li>Tấm đầu giường l&agrave;m bằng gỗ MDF v&agrave; gỗ v&aacute;n dăm</li> 	<li>Ch&acirc;n giường bằng gỗ</li> </ul>  <h3>Xuất Xứ</h3>  <ul> 	<li>Thương hiệu Ho&agrave;n Mỹ</li> 	<li>Xuất xứ Malaysia</li> </ul>  <h3>K&iacute;ch Thước Đệm</h3>  <ul> 	<li>1600x2000 (mm)</li> 	<li>1800x2000 (mm)</li> </ul>', 3, 1),
(27, 'Ghế làm việc Victoria', 55, 11000000, '500-san-pham-nha-xinh_(4).jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <p>46.5x58x88 (cm)</p>  <h3>Điểm Nổi Bật</h3>  <p>Mọi chi tiết của ghế&nbsp; đều được t&iacute;nh to&aacute;n cẩn thận, khoa học nhằm phục vụ tốt nhất nhu cầu của người sử dụng. Với kiểu d&aacute;ng năng động, m&agrave;u sắc trẻ trung c&ugrave;ng đệm ngồi &ecirc;m &aacute;i, sản phẩm ghế ăn n&agrave;y sẽ l&agrave; mảnh gh&eacute;p tuyệt vời ho&agrave;n thiện kh&ocirc;ng gian nội thất ph&ograve;ng ăn gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn...</p>  <h3>Chất Liệu</h3>  <p>- Phần khung v&agrave; ch&acirc;n ghế chế t&aacute;c từ kim loại.</p>  <p>- Bọc da PU&nbsp; m&agrave;u&nbsp;MAAN PU-4 trẻ trung, năng động.&nbsp;</p>  <h3>Xuất Xứ</h3>  <p>- Thương hiệu Ho&agrave;n Mỹ, đặt sản xuất ri&ecirc;ng tại Trung Quốc.</p>', 1, 1),
(28, 'Ghế có tay Porto', 48, 8500000, 'ghe_an_co_tay_porto_1_-_copy.jpg', '2021-01-11', '<h3>K&iacute;ch Thước</h3>  <p>46.5x58x88 (cm)</p>  <h3>Điểm Nổi Bật</h3>  <p>Mọi chi tiết của ghế&nbsp; đều được t&iacute;nh to&aacute;n cẩn thận, khoa học nhằm phục vụ tốt nhất nhu cầu của người sử dụng. Với kiểu d&aacute;ng năng động, m&agrave;u sắc trẻ trung c&ugrave;ng đệm ngồi &ecirc;m &aacute;i, sản phẩm ghế ăn n&agrave;y sẽ l&agrave; mảnh gh&eacute;p tuyệt vời ho&agrave;n thiện kh&ocirc;ng gian nội thất ph&ograve;ng ăn gia đ&igrave;nh, nh&agrave; h&agrave;ng, kh&aacute;ch sạn...</p>  <h3>Chất Liệu</h3>  <p>- Phần khung v&agrave; ch&acirc;n ghế chế t&aacute;c từ kim loại.</p>  <p>- Bọc da PU&nbsp; m&agrave;u&nbsp;MAAN PU-4 trẻ trung, năng động.&nbsp;</p>  <h3>Xuất Xứ</h3>  <p>- Thương hiệu Ho&agrave;n Mỹ, đặt sản xuất ri&ecirc;ng tại Trung Quốc.</p>', 1, 1),
(29, 'Ghế Aida Plus màu burgundy', 66, 12000000, '280-72408-nha-xinh-phong-an-ghe-aida.jpg', '2021-01-11', '', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `id` int(11) NOT NULL,
  `tieude` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(5000) NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`id`, `tieude`, `noidung`, `anh`, `giamgia`) VALUES
(1, 'Khuyến mãi sốc lên đến 10% ', '<p>Nh&acirc;n dịp mua đ&ocirc;ng đến nhằm để mọi nh&agrave; c&oacute; nhiều cơ hội sở hữu những m&oacute;n đồ nội thất ấm &aacute;p ch&uacute;ng t&ocirc;i đ&atilde; đưa ra chương tr&igrave;nh khuyến m&atilde;i sốc n&agrave;y. Gi&aacute;m gi&aacute; l&ecirc;n đến 10% cho mọi sản phẩm từ cửa h&agrave;ng ch&uacute;ng t&ocirc;i!!!</p>\r\n', '10.jpg', 0.1),
(3, 'Khuyến mãi sốc lên đến 20% ', '<p>Nh&acirc;n dịp mua đ&ocirc;ng đến nhằm để mọi nh&agrave; c&oacute; nhiều cơ hội sở hữu những m&oacute;n đồ nội thất ấm &aacute;p ch&uacute;ng t&ocirc;i đ&atilde; đưa ra chương tr&igrave;nh khuyến m&atilde;i sốc n&agrave;y. Gi&aacute;m gi&aacute; l&ecirc;n đến 10% cho mọi sản phẩm từ cửa h&agrave;ng ch&uacute;ng t&ocirc;i!!!&nbsp;</p>\r\n', '20.jpg', 0.2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiphong`
--

CREATE TABLE `loaiphong` (
  `id` int(11) NOT NULL,
  `tenphong` varchar(500) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `ngay` date NOT NULL,
  `mota` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaiphong`
--

INSERT INTO `loaiphong` (`id`, `tenphong`, `anh`, `ngay`, `mota`) VALUES
(1, 'Phòng khách ', 'phongkhach.jpg', '2020-12-21', 'Mẫu nội thất phòng khách cao cấp\r\nMẫu nội thất phòng khách đẹp hiện đại nhập khẩu cao cấp phong cách từ nhiều thương hiệu nổi tiếng Châu Á, Châu Âu, Italia (Ý) có nhiều mẫu nội thất phòng khách đẹp đa dạng. Xu hướng chọn mua nội thất phòng khách hiện đại nhập khẩu cao cấp giúp không gian tốt nhất sẽ khiến cho ngôi nhà của bạn trở nên rực rỡ và tiện nghi.\r\n\r\n'),
(2, 'Phòng ăn', 'phongan.jpg', '2020-12-21', 'Mẫu nội thất phòng ăn, nhà bếp cao cấp\r\nMẫu nội thất phòng ăn nhà bếp đẹp nhập khẩu cao cấp hiện đại từ nhiều thương hiệu nổi tiếng Châu Á, Châu Âu, Italia (Ý) có công nghệ vượt trội tạo nên những mẫu nội thất phòng ăn nhà bếp đẹp hoàn hảo. Chúng tôi cam kết mang đến chất lượng sản phẩm tốt cùng dịch vụ chăm sóc khách hàng chu đáo và uy tín hàng đầu tại Việt Nam.'),
(3, 'Phòng Ngủ', 'phongngu.jpg', '2020-12-21', 'Mẫu nội thất phòng ngủ cao cấp\r\nMẫu nội thất phòng ngủ đẹp nhập khẩu cao cấp hiện đại, sang trọng đẹp hoàn hảo từ nhiều thương hiệu nổi tiếng Châu Á, Châu Âu, Italia (Ý) chắc chắn bạn sẽ làm chủ được một không gian nội thất phòng ngủ cao cấp đẹp giúp thư giãn tuyệt vời, phong cách và đẳng cấp cho tổ ấm gia đình mình với cam kết chất lượng và dịch vụ chu đáo của chúng tôi.'),
(4, 'Phòng làm việc', 'phonglamviec.jpg', '2020-12-21', 'Mẫu nội thất phòng ngủ cao cấp\r\nMẫu nội thất phòng ngủ đẹp nhập khẩu cao cấp hiện đại, sang trọng đẹp hoàn hảo từ nhiều thương hiệu nổi tiếng Châu Á, Châu Âu, Italia (Ý) chắc chắn bạn sẽ làm chủ được một không gian nội thất phòng ngủ cao cấp đẹp giúp thư giãn tuyệt vời, phong cách và đẳng cấp cho tổ ấm gia đình mình với cam kết chất lượng và dịch vụ chu đáo của chúng tôi.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `tendn` varchar(500) NOT NULL,
  `matkhau` varchar(500) NOT NULL,
  `tendaydu` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` date NOT NULL DEFAULT current_timestamp(),
  `email` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodt` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `anh` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'adn.jpg',
  `vaitro` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tendn`, `matkhau`, `tendaydu`, `ngay`, `email`, `sodt`, `diachi`, `gioitinh`, `ngaysinh`, `anh`, `vaitro`, `trangthai`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'admin', '2020-12-22', 'tranxp34878@gmail.com', '1264607869', '26 Huỳnh Văn Nghệ', 'nam', '0000-00-00', 'adn.jpg', 'admin', ''),
(2, 'tu', 'c4ca4238a0b923820dcc509a6f75849b', 'Trần Quốc Tú', '2020-12-22', 'tranxp34878@gmail.com', '1264607869', '26 Huỳnh Văn Nghệ', 'nam', '2020-12-22', 'adn.jpg', 'khach', ''),
(3, 'anh', 'c4ca4238a0b923820dcc509a6f75849b', '', '0000-00-00', 'dangleloi102@gmail.com', '1264607869', '100 Huỳnh Văn Nghệ', '', '0000-00-00', 'adn.jpg', 'khach', ''),
(4, 'tu1', 'c4ca4238a0b923820dcc509a6f75849b', '', '0000-00-00', 'tranxp34878@gmail.com', '1264607869', '100 Huỳnh Văn Nghệ', '', '0000-00-00', 'adn.jpg', 'khach', ''),
(5, 'tu102', 'c4ca4238a0b923820dcc509a6f75849b', '', '0000-00-00', 'trantuxp34878@gmail.com', '1264607869', '26 Huỳnh Văn Nghệ', '', '0000-00-00', 'adn.jpg', 'khach', ''),
(6, 'tqtu', 'c4ca4238a0b923820dcc509a6f75849b', '', '0000-00-00', 'tqtu.19it2@vku.udn.vn', '1264607869', '26 Huỳnh Văn Nghệ', '', '0000-00-00', 'adn.jpg', 'khach', ''),
(7, 'admin1', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', 'trantuxp34878@gmail.com', '1264607869', '26Huỳnh Văn Nghệ', '', '0000-00-00', 'adn.jpg', 'admin', ''),
(8, 'tuananh', 'c4ca4238a0b923820dcc509a6f75849b', '', '2020-12-23', 'dangleloi102@gmail.com', '1264607869', '26 Huỳnh Văn Nghệ', '', '0000-00-00', 'adn.jpg', 'admin', ''),
(9, 'p', 'c4ca4238a0b923820dcc509a6f75849b', '', '2020-12-23', 'dangleloi102@gmail.com', '1264607869', '26Huỳnh Văn Nghệ', '', '0000-00-00', 'adn.jpg', 'khach', ''),
(10, '', '202cb962ac59075b964b07152d234b70', '', '2021-01-10', 'tranxp34878@gmail.com', '1264607869', '26Huỳnh Văn Nghệ', '', '0000-00-00', 'adn.jpg', 'khach', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tieude` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuthich` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(5000) NOT NULL,
  `luongtruycap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tieude`, `chuthich`, `noidung`, `anh`, `luongtruycap`) VALUES
(1, 'GIÁNG SINH HOÀN MỸ – RINH QUÀ CHO NHÀ HẠNH PHÚC!', 'Một mùa Giáng sinh đang đến, một năm mới nhiều niềm tin, hy vọng đang về. Để những phút giây đoàn viên gia đình thêm trọn vẹn, hãy cùng Nội thất Hoàn Mỹ tân trang lại nhà cửa với chương trình ưu đãi sock: Mua hàng, nhận ngay quà tặng cao cấp. Theo đó, với …', '<p>Một m&ugrave;a Gi&aacute;ng sinh đang đến, một năm mới nhiều niềm tin, hy vọng đang về. Để những ph&uacute;t gi&acirc;y đo&agrave;n vi&ecirc;n gia đ&igrave;nh th&ecirc;m trọn vẹn, h&atilde;y c&ugrave;ng Nội thất Ho&agrave;n Mỹ t&acirc;n trang lại nh&agrave; cửa với chương tr&igrave;nh ưu đ&atilde;i sock: Mua h&agrave;ng, nhận ngay qu&agrave; tặng cao cấp.</p>\r\n\r\n<p>Theo đ&oacute;, với đơn h&agrave;ng trị gi&aacute; từ 50 triệu đồng: Kh&aacute;ch h&agrave;ng được tặng ngay thảm trang tr&iacute; Th&aacute;i Lan &ndash; trị gi&aacute; 8,780,000VNĐ.<br />\r\nVới đơn h&agrave;ng trị gi&aacute; từ 70 triệu trở l&ecirc;n: Kh&aacute;ch h&agrave;ng được tặng ngay thảm trang tr&iacute; Th&aacute;i Lan &ndash; trị gi&aacute; 12,890,000VNĐ.<br />\r\nThời gian diễn ra khuyến m&atilde;i: 05/12 &ndash; 25/12/2020<br />\r\nSố lượng qu&agrave; tặng c&oacute; hạn, mua h&agrave;ng ngay h&ocirc;m nay!<br />\r\nLI&Ecirc;N HỆ TƯ VẤN, ĐẶT H&Agrave;NG SẢN PHẨM: 1800 6971 hoặc 0988 02 6969</p>\r\n', 'banner-tin-tuc-noel-2020-03-scaled (1).jpg', 13),
(2, 'HD81177-RGL – GHẾ ĂN SÀNH ĐIỆU, SIÊU HACK KHÔNG GIAN!', 'HD81177-RGL là sản phẩm sáng tạo do Hoàn Mỹ, đặt sản xuất riêng tại Trung Quốc. Từ thiết kế đến kỹ thuật tạo dựng nên HD81177-RGL đều được bảo đảm nghiêm ngặt về tính thẩm mỹ, độ tỉ mỉ và chất lượng.', '<p>HD81177-RGL l&agrave; sản phẩm s&aacute;ng tạo do Ho&agrave;n Mỹ, đặt sản xuất ri&ecirc;ng tại Trung Quốc. Từ thiết kế đến kỹ thuật tạo dựng n&ecirc;n HD81177-RGL đều được bảo đảm nghi&ecirc;m ngặt về t&iacute;nh thẩm mỹ, độ tỉ mỉ v&agrave; chất lượng.</p>\r\n\r\n<p>Ghế mang kiểu d&aacute;ng hiện đại, trẻ trung với 3 m&agrave;u: Xanh Navy, da b&ograve; v&agrave; trắng sữa. Đ&acirc;y đều l&agrave; những m&agrave;u sắc c&aacute; t&iacute;nh, độc đ&aacute;o, mang lại sự bắt mắt cho ph&ograve;ng ăn nh&agrave; bạn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sử dụng khung kim loại chắc chắn với chất liệu bọc da PU &ecirc;m &aacute;i, chống nước hiệu quả, dễ lau ch&ugrave;i, vừa tiện lợi lại vừa đem lại cảm gi&aacute;c thoải m&aacute;i cho người sử dụng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>D&ograve;ng sản phẩm n&agrave;y được thiết kế tinh gọn, với phần lưng ghế cong ra ngo&agrave;i, gia chủ c&oacute; thể thoải m&aacute;i tựa lưng nghỉ ngơi. C&aacute;c g&oacute;c ghế được may v&aacute;t, an to&agrave;n, nhất l&agrave; đối với trẻ nhỏ.</p>\r\n\r\n<p>HD81177-RGL hứa hẹn l&agrave; d&ograve;ng sản phẩm &ldquo;cứu tinh&rdquo;, mở lối kh&ocirc;ng gian cho căn ph&ograve;ng của bạn!Vừa đẹp, vừa tiện, gi&aacute; lại phải chăng, bạn c&ograve;n chần chừ g&igrave; m&agrave; chưa sắm ngay HD81177-RGL?</p>\r\n\r\n<p>LI&Ecirc;N HỆ TƯ VẤN, ĐẶT H&Agrave;NG SẢN PHẨM:</p>\r\n\r\n<p>&ndash; Hotline: 1800 6971 hoặc 0988 02 6969</p>\r\n', 'lakeisha-bennett-WzP3YnV9T-U-unsplash-1536x1536.jpg', 4),
(3, 'SOFA CALIA – ĐẲNG CẤP LÀ MÃI MÃI!', 'Khác với các dòng sản phẩm khác, sofa Calia táo bạo và mạnh dạn hơn khi đánh vào thị trường với đa dạng mẫu mã và màu sắc. Đây là con dao 2 lưỡi: có thể giúp Calia chinh phục được nhiều Gu thẩm mỹ hơn, nhưng cũng có thể khiến cho độ nhận diện của Calia bị lu mờ.', '<p>Kh&aacute;c với c&aacute;c d&ograve;ng sản phẩm kh&aacute;c, sofa Calia t&aacute;o bạo v&agrave; mạnh dạn hơn khi đ&aacute;nh v&agrave;o thị trường với đa dạng mẫu m&atilde; v&agrave; m&agrave;u sắc. Đ&acirc;y l&agrave; con dao 2 lưỡi: c&oacute; thể gi&uacute;p Calia chinh phục được nhiều Gu thẩm mỹ hơn, nhưng cũng c&oacute; thể khiến cho độ nhận diện của Calia bị lu mờ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tuy nhi&ecirc;n thương hiệu 60 năm tuổi n&agrave;y vẫn giữ vững ng&ocirc;i vua, l&agrave;m mưa l&agrave;m gi&oacute; tr&ecirc;n thị trường với mọi mẫu sofa mang thương hiệu t&ecirc;n Calia ấy.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>D&ograve;ng sản phẩm sofa da cao cấp của nh&agrave; sản xuất uy t&iacute;n của Italia đang được ph&acirc;n phối rộng r&atilde;i tr&ecirc;n 60 quốc gia tr&ecirc;n thế giới. Sofa Calia được đ&aacute;nh gi&aacute; xuất sắc ở kiểu d&aacute;ng hiện đại v&agrave; độ thư gi&atilde;n, thoải m&aacute;i trong sử dụng.</p>\r\n\r\n<p>Tại thị trường Việt Nam, Sofa Calia lu&ocirc;n nằm trong TOP sản phẩm được giới đại gia v&agrave; &ldquo;tay chơi&rdquo; nội thất s&agrave;nh sỏi săn l&ugrave;ng, ưa chuộng &ndash; trở th&agrave;nh m&oacute;n đồ nội thất kh&ocirc;ng thể thiếu trong những căn hộ hay biệt thự cao cấp.&nbsp;</p>\r\n\r\n<p>Kh&ocirc;ng hề n&oacute;i qu&aacute; khi cho rằng, Sofa Calia thể hiện c&aacute;ch chơi, c&aacute;ch hưởng thụ cuộc sống tinh tế của mỗi gia chủ nhờ thiết kế th&ocirc;ng minh, sự &ecirc;m &aacute;i v&agrave; cảm gi&aacute;c thoải m&aacute;i tuyệt vời mỗi khi trải nghiệm.</p>\r\n\r\n<p>Calia l&agrave; một biểu hiện c&acirc;n đối giữa ứng dụng v&agrave; thiết kế, bảo đảm bởi thương hiệu về sự nghi&ecirc;m ngặt thủ c&ocirc;ng. Sofa nổi bật với c&aacute;c chi tiết nguy&ecirc;n bản, liền khối, khiến n&oacute; trở th&agrave;nh một sản phẩm uy t&iacute;n của sự thanh lịch vượt thời gian.</p>\r\n\r\n<p>Với sự đa dạng về kiểu d&aacute;ng, m&agrave;u sắc, k&iacute;ch thước, Calia th&iacute;ch hợp với mọi phong c&aacute;ch, mọi ph&ograve;ng kh&aacute;ch, đ&aacute;p ứng ho&agrave;n hảo từ c&aacute;i nh&igrave;n cho đến cảm nhận, &ecirc;m &aacute;i v&agrave; sang trọng v&ocirc; c&ugrave;ng với chất liệu da b&ograve; &Yacute; 100%, hứa hẹn sẽ l&agrave; điểm nhấn nổi bật cho kh&ocirc;ng gian ng&ocirc;i nh&agrave; th&ecirc;m đẳng cấp.</p>\r\n', 'banner-tin-tuc-calia.jpg', 4),
(4, 'SOFA GÓC VẢI – SỰ ĐƯƠNG ĐẠI VÀ KHÍ CHẤT VƯỢT THỜI GIAN!', 'Sofa góc vải phòng khách đang ngày càng được ưa chuộng và sử dụng phổ biến, nhất là trong các phong cách thiết kế hiện đại', '<p>Sofa g&oacute;c vải ph&ograve;ng kh&aacute;ch đang ng&agrave;y c&agrave;ng được ưa chuộng v&agrave; sử dụng phổ biến, nhất l&agrave; trong c&aacute;c phong c&aacute;ch thiết kế hiện đại.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Điểm nổi bật của sofa vải đ&oacute; l&agrave; sự s&aacute;ng tạo về m&agrave;u sắc cũng như linh hoạt về kiểu d&aacute;ng, ph&ugrave; hợp với những chủ nh&acirc;n trẻ trung, năng động, y&ecirc;u th&iacute;ch sự ph&aacute; c&aacute;ch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đối với những kh&aacute;ch h&agrave;ng đam m&ecirc; phong c&aacute;ch đương đại nhưng vẫn t&ocirc;n trọng yếu tố phong thủy th&igrave; chắc chắn sofa g&oacute;c vải l&agrave; 1 sự lựa chọn ho&agrave;n hảo, vừa l&agrave; điểm nhấn t&aacute;o bạo của ph&ograve;ng kh&aacute;ch, lại đem đến may mắn cho gia chủ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sử dụng sofa g&oacute;c vải, kh&aacute;ch h&agrave;ng sẽ cực kỳ thoải m&aacute;i với sự &ecirc;m &aacute;i, mềm mại, l&agrave; điểm tựa ấm &aacute;p xua tan những mệt mỏi sau ng&agrave;y d&agrave;i bộn bề.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kh&iacute; chất, nổi bật nhưng sofa vải c&oacute; mức gi&aacute; cực phải chăng, tiện lợi cho người ti&ecirc;u d&ugrave;ng.Nếu bạn y&ecirc;u th&iacute;ch sofa vải, h&atilde;y tham khảo list sản phẩm sẵn c&oacute; từ thương hiệu Nội thất Ho&agrave;n Mỹ:</p>\r\n\r\n<p>&bull; Sofa thiết kế s&aacute;ng tạo, sản xuất tr&ecirc;n d&acirc;y chuyền c&ocirc;ng nghệ hiện đại, đảm bảo nghi&ecirc;m ngặt về quy tr&igrave;nh sản xuất cũng như chất liệu, an to&agrave;n cho sức khỏe người sử dụng.</p>\r\n\r\n<p>&bull; Sản phẩm c&oacute; 4 m&agrave;u sắc trẻ trung, nổi bật: V&agrave;ng nhung, đen x&aacute;m, xanh than, xanh ghi với đủ c&aacute;c g&oacute;c tr&aacute;i, g&oacute;c phải, ph&ugrave; hợp với mọi kh&ocirc;ng gian hay phong c&aacute;ch ph&ograve;ng kh&aacute;ch.</p>\r\n\r\n<p>&bull; Khi mua sofa g&oacute;c vải tại Ho&agrave;n Mỹ, bạn sẽ được bảo h&agrave;nh sản phẩm 12 th&aacute;ng v&agrave; bảo tr&igrave; sản phẩm trọn đời.Link sản phẩm</p>\r\n', 'inside-weather-ej3UoXYMaRI-unsplash-1536x1536.jpg', 3),
(5, '6 Mẫu thiết kế nội thất phòng ngủ đẹp nhất 2017', 'Các mẫu thiết kế phòng ngủ đẹp hứa hẹn mang đến cho bạn những phút giây thư giãn thật thoải mái sau ngày làm việc mệt mỏi. Các mẫu thiết kế phòng ngủ đẹp trẻ trung, hiện đại trên đây cũng là những món quà mà Hoàn Mỹ Decor mong muốn mọi khách hàng của mình đều có cơ hội sở hữu.', '<h2>C&aacute;c mẫu thiết kế ph&ograve;ng ngủ đẹp hứa hẹn mang đến cho bạn những ph&uacute;t gi&acirc;y thư gi&atilde;n thật thoải m&aacute;i sau ng&agrave;y l&agrave;m việc mệt mỏi.</h2>\r\n\r\n<p>C&aacute;c&nbsp;<a href=\"https://noithathoanmy.com.vn/blog/6-mau-thiet-ke-phong-ngu-dep-nhat-2017/\" rel=\"noopener\" target=\"_blank\">mẫu thiết kế ph&ograve;ng ngủ đẹp</a><strong>&nbsp;</strong>trẻ trung, hiện đại tr&ecirc;n đ&acirc;y cũng l&agrave; những m&oacute;n qu&agrave; m&agrave; Ho&agrave;n Mỹ Decor mong muốn mọi kh&aacute;ch h&agrave;ng của m&igrave;nh đều c&oacute; cơ hội sở hữu.</p>\r\n\r\n<p>&gt;&gt;&gt; C&oacute; thể bạn quan t&acirc;m:&nbsp;<a href=\"https://noithathoanmy.com.vn/blog/nhung-mau-ke-tivi-dep-cho-phong-khach-hien-dai-2017/\" rel=\"noopener\" target=\"_blank\">những mẫu kệ tivi đẹp cho ph&ograve;ng kh&aacute;ch hiện đại 2017</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>C&aacute;c mẫu ph&ograve;ng ngủ đẹp hiện đại do Nội Thất Ho&agrave;n Mỹ thiết kế v&agrave; thi c&ocirc;ng (Ảnh: NTHM)</em></p>\r\n\r\n<h3>C&aacute;c mẫu thiết kế ph&ograve;ng ngủ đẹp đầy s&aacute;ng tạo</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Mẫu ph&ograve;ng ngủ đẹp với những &yacute; tưởng s&aacute;ng tạo độc đ&aacute;o&nbsp;(Ảnh: NTHM)</em></p>\r\n\r\n<p><strong>C&aacute;c thiết kế ph&ograve;ng ngủ đẹp</strong>&nbsp;của gia đ&igrave;nh chị Huyền Anh ở t&ograve;a nh&agrave; MD Complex Mỹ Đ&igrave;nh g&acirc;y ấn tượng đặc biệt đối với bất kỳ ai. Mặc d&ugrave; diện t&iacute;ch sử dụng kh&ocirc;ng vu&ocirc;ng vức như c&aacute;c ph&ograve;ng ngủ th&ocirc;ng thường, nhưng sự s&aacute;ng tạo của c&aacute;c kiến tr&uacute;c sư đ&atilde; mang đến một kh&ocirc;ng gian nghỉ ngơi v&ocirc; c&ugrave;ng tinh tế, hiện đại v&agrave; thanh lịch. Sự g&oacute;c cạnh của c&aacute;c chi tiết gỗ đ&atilde; được xử l&yacute; theo độ cong của căn ph&ograve;ng gi&uacute;p cho ph&ograve;ng ngủ trở n&ecirc;n mềm mại hơn, ấm &aacute;p hơn.</p>\r\n\r\n<h3>C&aacute;c mẫu thiết kế ph&ograve;ng ngủ đẹp với gam m&agrave;u s&aacute;ng</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>C&aacute;c ph&ograve;ng ngủ đẹp lu&ocirc;n được t&ocirc; điểm với gam m&agrave;u s&aacute;ng đầy sang trọng&nbsp;(Ảnh: NTHM)</em></p>\r\n\r\n<p>Nội thất ph&ograve;ng ngủ n&agrave;y đề cao phong c&aacute;ch thiết kế ph&ograve;ng ngủ hiện đại, c&aacute;c đường n&eacute;t thiết kế đơn giản, thanh tho&aacute;t, việc lựa chọn&nbsp;<a href=\"https://noithathoanmy.com.vn/blog/diem-danh-15-mau-son-phong-ngu-dep-nhat-duoc-ua-chuong/\" rel=\"noopener\" target=\"_blank\">m&agrave;u sơn ph&ograve;ng ngủ đẹp</a>&nbsp;c&ograve;n gi&uacute;p cho căn ph&ograve;ng trở n&ecirc;n rộng hơn, tho&aacute;ng hơn so với diện t&iacute;ch vốn c&oacute;, đảm bảo c&ocirc;ng năng ch&iacute;nh của ph&ograve;ng l&agrave; nghỉ ngơi. Thiết kế tủ &acirc;m tường m&agrave;u trắng trong&nbsp;<strong>c&aacute;c mẫu thiết kế ph&ograve;ng ngủ đẹp</strong>&nbsp;mang đến n&eacute;t hiện đại, sang trọng cho kh&ocirc;ng gian.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Mẫu ph&ograve;ng ngủ đẹp với gam m&agrave;u trắng sang trọng&nbsp;(Ảnh: NTHM)</em></p>\r\n\r\n<p>M&agrave;u trắng được sử dụng triệt để trong&nbsp;<strong>thiết kế nội thất ph&ograve;ng ngủ</strong>&nbsp;n&agrave;y nhưng kh&ocirc;ng v&igrave; thế m&agrave; căn ph&ograve;ng trở n&ecirc;n lạnh lẽo, nh&agrave;m ch&aacute;n. Sự tinh tế trong từng chi tiết thiết kế nội thất c&ugrave;ng với c&aacute;c chi tiết tạo điểm nhấn đ&atilde; mang đến sự sang trọng, thanh lịch cho căn ph&ograve;ng.</p>\r\n\r\n<h3>C&aacute;c mẫu thiết kế ph&ograve;ng ngủ đẹp với kệ tivi đẹp hiện đại</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Thiết kế kệ tivi lửng trong kh&ocirc;ng gian ph&ograve;ng ngủ hiện đại&nbsp;(Ảnh: NTHM)</em></p>\r\n\r\n<p>Điều dễ nhận thấy ở ph&ograve;ng ngủ n&agrave;y l&agrave; diện t&iacute;ch kh&aacute; hẹp, tuy nhi&ecirc;n, kh&eacute;o l&eacute;o trong thiết kế kệ tivi lửng tường trong&nbsp;<strong>c&aacute;c ph&ograve;ng ngủ đẹp</strong>&nbsp;đ&atilde; tạo cho s&agrave;n nh&agrave; c&oacute; th&ecirc;m nhiều khoảng trống, gi&uacute;p che đi khuyết điểm về diện t&iacute;ch nhỏ của căn ph&ograve;ng. Hệ cửa sổ rộng sẽ l&agrave; nơi &aacute;nh s&aacute;ng tự nhi&ecirc;n tr&agrave;n v&agrave;o khắp ph&ograve;ng, mang đến nguồn sinh kh&iacute; mới cho gia chủ mỗi buổi sớm mai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Mẫu ph&ograve;ng ngủ đẹp độc đ&aacute;o cho mọi gia đ&igrave;nh&nbsp;(Ảnh: NTHM)</em></p>\r\n\r\n<p>C&ugrave;ng với hệ thống đ&egrave;n ngủ được bố tr&iacute; hợp l&yacute;, việc sử dụng m&agrave;u sắc tinh tế trong thiết kế kệ tivi, s&agrave;n nh&agrave;, m&agrave;u tường, chất liệu gỗ cao cấp phủ Acrylic s&aacute;ng b&oacute;ng của tủ quần &aacute;o, c&aacute;c kiến tr&uacute;c sư của Ho&agrave;n Mỹ Decor mang đến c&aacute;c mẫu ph&ograve;ng ngủ đẹp nhất cho mọi gia đ&igrave;nh, mang&nbsp;đến một kh&ocirc;ng gian sang trọng, y&ecirc;n b&igrave;nh cho căn ph&ograve;ng.</p>\r\n\r\n<p>&gt;&gt;&gt; Xem th&ecirc;m:&nbsp;<a href=\"https://noithathoanmy.com.vn/blog/trang-tri-phong-khach-don-gian-ma-dep-voi-cac-mau-tuong-doc-dao/\" rel=\"noopener\" target=\"_blank\">Trang tr&iacute; ph&ograve;ng kh&aacute;ch đơn giản m&agrave; đẹp với mẫu tường độc đ&aacute;o</a></p>\r\n\r\n<p>Tr&ecirc;n đ&acirc;y l&agrave;&nbsp;<strong>c&aacute;c mẫu thiết kế ph&ograve;ng ngủ</strong>&nbsp;đẹp do ch&iacute;nh tay Nội Thất Ho&agrave;n Mỹ thực hiện hy vọng sẽ mang đến cho gia đ&igrave;nh bạn những ph&uacute;t gi&acirc;y thư gi&atilde;n thật tuyệt vời b&ecirc;n người th&acirc;n.</p>\r\n', 'su-chau-chuot-trong-thiet-ke-giup-che-di-khuyet-diem-cua-can-phong2.jpg', 2),
(6, 'Mẫu thiết kế nội thất phòng khách đẹp dành cho căn hộ cao cấp', 'Mẫu thiết kế nội thất phòng khách chung cư đẹp sẽ mang đến cho bạn không gian sống tiện nghi. Thiết kế phòng khách đẹp luôn là sự lựa chọn hàng đầu của mọi gia đình hiện nay.\r\nVới mẫu thiết kế nội thất phòng khách chung cư đẹp dưới đây hứa hẹn sẽ mang đến cho gia đình bạn một phòng khách vô cùng hiện đại và sang trọng, có thể làm “xiêu lòng” bất kỳ vị khách nào khi ghé thăm.', '<p>&nbsp;</p>\r\n\r\n<p><em>Mẫu ph&ograve;ng kh&aacute;ch hiện đại d&agrave;nh cho c&aacute;c căn hộ chung cư cao cấp (Ảnh : NTHM)</em></p>\r\n\r\n<h3><strong>Mẫu thiết kế nội thất ph&ograve;ng kh&aacute;ch chung cư đẹp với gỗ c&ocirc;ng nghiệp</strong></h3>\r\n\r\n<p>Hiện nay, việc sử dụng gỗ c&ocirc;ng nghiệp trong&nbsp;<a href=\"https://noithathoanmy.com.vn/phong-khach\" rel=\"noopener\" target=\"_blank\">nội thất ph&ograve;ng kh&aacute;ch</a>&nbsp;của c&aacute;c căn hộ chung cư, nh&agrave; phố v&agrave; cả những ng&ocirc;i biệt thự hiện đại lu&ocirc;n được ưa chuộng bởi vẻ sang trọng mang đầy sự ấm &aacute;p cho mọi kh&ocirc;ng gian.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Mẫu ph&ograve;ng kh&aacute;ch hiện đại sử dụng đồ nội thất bằng gỗ c&ocirc;ng nghiệp (Ảnh: NTHM)</em></p>\r\n\r\n<p><strong>Mẫu thiết kế nội thất ph&ograve;ng kh&aacute;ch đẹp&nbsp;</strong>n&agrave;y<strong>&nbsp;</strong>đ&atilde; được c&aacute;c kiến tr&uacute;c sư đ&atilde; chọn lọc một c&aacute;ch tinh tế, m&agrave;u sắc h&agrave;i h&ograve;a tạo n&ecirc;n tổng thể thiết kế ph&ograve;ng kh&aacute;ch hiện đại bắt mắt. Sự nhấn nh&aacute; của t&ocirc;ng m&agrave;u gỗ cũng l&agrave;m cho căn hộ trở n&ecirc;n đầm ấm v&agrave; quyến rũ hơn.</p>\r\n\r\n<h3><strong>Mẫu thiết kế nội thất ph&ograve;ng kh&aacute;ch chung cư đẹp với cửa k&iacute;nh lớn</strong></h3>\r\n\r\n<p><a href=\"https://noithathoanmy.com.vn/thiet-ke-noi-that\" rel=\"noopener\" target=\"_blank\"><strong>Thiết kế nội thất ph&ograve;ng kh&aacute;ch đẹp</strong></a>&nbsp;trong c&aacute;c căn hộ cao cấp được sắp xếp khoa học với c&aacute;nh sửa sổ lớn, đ&oacute;n nhận &aacute;nh s&aacute;ng tự nhi&ecirc;n tạo n&ecirc;n sự th&ocirc;ng tho&aacute;ng cho cả căn ph&ograve;ng.</p>\r\n\r\n<p><em>Mẫu ph&ograve;ng kh&aacute;ch hiện đại tại căn hộ với tấm cửa k&iacute;nh lớn (Ảnh: NTHM)</em></p>\r\n\r\n<p>Với&nbsp;<strong>mẫu nội thất ph&ograve;ng kh&aacute;ch đẹp&nbsp;</strong>d&agrave;nh cho căn hộ&nbsp;n&agrave;y bạn ho&agrave;n to&agrave;n c&oacute; thể ngồi trong ph&ograve;ng v&agrave; thưởng thức trọn vẹn khung cảnh ph&iacute;a b&ecirc;n ngo&agrave;i. Kiểu d&aacute;ng đơn giản n&agrave;y tạo điều kiện thuận lợi cho việc sắp xếp v&agrave; bố tr&iacute; c&aacute;c đồ nội thất ph&ograve;ng kh&aacute;ch một c&aacute;ch hợp l&yacute;.</p>\r\n\r\n<h3><strong>Mẫu thiết kế nội thất ph&ograve;ng kh&aacute;ch chung cư đẹp liền kề ph&ograve;ng bếp</strong></h3>\r\n\r\n<p>C&aacute;c căn hộ chung cư thường c&oacute; diện t&iacute;ch kh&aacute; khi&ecirc;m tốn n&ecirc;n thường được<strong>&nbsp;thiết kế nội thất ph&ograve;ng kh&aacute;ch chung cư&nbsp;</strong>hiện đại&nbsp;th&ocirc;ng với ph&ograve;ng bếp để tiết kiệm diện t&iacute;ch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Thiết kế ph&ograve;ng kh&aacute;ch hiện đại nối liền ph&ograve;ng bếp đầy sang trọng&nbsp;(Ảnh: NTHM)</em></p>\r\n\r\n<p><strong>Mẫu nội thất ph&ograve;ng kh&aacute;ch đẹp&nbsp;</strong>hiện đại n&agrave;y mang đến cho bạn một kh&ocirc;ng gian thoải m&aacute;i, đủ đầy tiện nghi nhưng vẫn rất sang trọng v&agrave; ấm c&uacute;ng. Đ&acirc;y sẽ l&agrave; sự lựa chọn tuyệt vời cho c&aacute;c căn hộ cao cấp.</p>\r\n\r\n<h3><strong>Mẫu thiết kế nội thất ph&ograve;ng kh&aacute;ch chung cư đẹp hiện đại với nội thất cao cấp&nbsp;</strong></h3>\r\n\r\n<p><strong>Mẫu nội thất ph&ograve;ng kh&aacute;ch đẹp hiện đại&nbsp;</strong>kh&ocirc;ng thể thiếu vắng c&aacute;c m&oacute;n đồ nội thất cao cấp như&nbsp;<strong>ghế sofa</strong>, b&agrave;n tr&agrave;, kệ tivi&hellip; Ch&uacute;ng kh&ocirc;ng chỉ l&agrave; những vật dụng với những chức năng nhất định m&agrave; c&ograve;n l&agrave; một trong những m&oacute;n đồ trang tr&iacute; tuyệt đẹp trong thiết kế nội thất ph&ograve;ng kh&aacute;ch.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Căn hộ sang trọng với c&aacute;c đồ nội thất cao cấp&nbsp;(Ảnh: NTHM)</em></p>\r\n\r\n<p><strong>Mẫu thiết kế ph&ograve;ng kh&aacute;ch&nbsp;chung cư</strong>&nbsp;hiện đại hơn với bộ sofa lớn c&ugrave;ng&nbsp;<strong><a href=\"https://noithathoanmy.com.vn/phong-khach/ban-tra\" rel=\"noopener\" target=\"_blank\">mẫu b&agrave;n tr&agrave; đẹp</a>&nbsp;</strong>mang lại vẻ đẹp tinh tế v&agrave; sang trọng cho kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch.</p>\r\n\r\n<h3><strong>Mẫu thiết kế nội thất ph&ograve;ng kh&aacute;ch chung cư đẹp với kh&ocirc;ng gian xanh</strong></h3>\r\n\r\n<p>Việc đưa c&aacute;c c&acirc;y xanh v&agrave;o trong c&aacute;c&nbsp;<strong>mẫu thiết kế nội thất ph&ograve;ng kh&aacute;ch</strong>&nbsp;<strong>chung cư</strong>&nbsp;hiện nay rất được ưa chuộng. Ch&uacute;ng kh&ocirc;ng chỉ mang đến một kh&ocirc;ng gian tươi mới v&agrave; thoải m&aacute;i hơn m&agrave; c&ograve;n gi&uacute;p gia chủ gặp nhiều may mắn hơn trong cuộc sống.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Ph&ograve;ng kh&aacute;ch hiện đại v&agrave; sang trọng hơn với c&acirc;y xanh trong nh&agrave; (Ảnh: NTHM)</em></p>\r\n\r\n<p><strong>Mẫu thiết kế nội thất ph&ograve;ng kh&aacute;ch chung cư</strong>&nbsp;ng&agrave;y nay với những c&acirc;y xanh trang tr&iacute; trong nh&agrave; khiến nơi đ&acirc;y trở n&ecirc;n bắt mắt, mang đến những ph&uacute;t gi&acirc;y thư gi&atilde;n tuyệt vời nhất cho mọi gia đ&igrave;nh.</p>\r\n\r\n<p>Ngo&agrave;i ra bạn cũng c&oacute; thể sử dụng đ&egrave;n thả hiện đại hay những bộ sofa cao cấp để tạo điểm nhấn đặc biệt gi&uacute;p ph&ograve;ng kh&aacute;ch trở n&ecirc;n lộng lẫy v&agrave; sang trọng hơn.</p>\r\n', 'mau-phong-khach-hien-dai-tai-can-ho-cao-cap-min.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `traloibl`
--

CREATE TABLE `traloibl` (
  `id` int(11) NOT NULL,
  `idbl` int(11) NOT NULL,
  `noidung` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `tenuser` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `traloibl`
--

INSERT INTO `traloibl` (`id`, `idbl`, `noidung`, `iduser`, `tenuser`, `ngay`) VALUES
(1, 1, 'hello', 2, 'tu', '2020-12-21'),
(2, 17, 'Cảm ơn đã bình luận', 1, 'admin', '2020-12-23'),
(3, 17, 'Cảm ơn đã bình luận', 1, 'admin', '2020-12-23'),
(4, 18, 'Cảm ơn đã bình luận', 1, 'admin', '2020-12-23'),
(5, 18, 'Cảm ơn đã bình luận', 1, 'admin', '2020-12-23'),
(6, 19, 'Cảm ơn quý khách', 1, 'admin', '2020-12-23'),
(7, 21, '	Cảm ơn đã bình luận', 1, 'admin', '2020-12-23'),
(8, 24, 'tôi rất hài lòng', 2, 'tu', '2021-01-09'),
(9, 25, 'Cảm ơn bạn đã ủng hộ shop', 2, 'tu', '2021-01-10'),
(10, 26, 'Cảm ơn bạn đã ủng hộ shop', 2, 'tu', '2021-01-10'),
(11, 1, 'hello', 1, 'admin', '2021-01-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `yeuthich`
--

CREATE TABLE `yeuthich` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `yeuthich`
--

INSERT INTO `yeuthich` (`id`, `idsp`, `iduser`, `ngay`) VALUES
(8, 10, 2, '2020-12-23'),
(9, 10, 3, '2020-12-23'),
(10, 11, 3, '2020-12-23'),
(11, 12, 3, '2020-12-23'),
(12, 4, 2, '2020-12-23'),
(13, 9, 5, '2020-12-24'),
(14, 10, 5, '2020-12-24'),
(15, 11, 5, '2020-12-24'),
(16, 12, 5, '2020-12-24'),
(17, 8, 5, '2020-12-24'),
(18, 7, 5, '2020-12-24'),
(19, 6, 5, '2020-12-24'),
(20, 3, 5, '2020-12-24'),
(21, 4, 5, '2020-12-24'),
(22, 5, 5, '2020-12-24'),
(23, 2, 5, '2020-12-24'),
(24, 1, 5, '2020-12-24'),
(25, 12, 4, '2020-12-24'),
(26, 11, 4, '2020-12-24'),
(27, 10, 4, '2020-12-24'),
(28, 9, 4, '2020-12-24'),
(29, 6, 4, '2020-12-24'),
(30, 7, 4, '2020-12-24'),
(31, 8, 4, '2020-12-24'),
(32, 2, 4, '2020-12-24'),
(33, 1, 4, '2020-12-24'),
(34, 5, 4, '2020-12-24'),
(35, 4, 4, '2020-12-24'),
(36, 3, 4, '2020-12-24'),
(37, 8, 2, '2021-01-09'),
(38, 2, 2, '2021-01-09'),
(39, 16, 2, '2021-01-09'),
(40, 11, 2, '2021-01-09'),
(41, 7, 2, '2021-01-09'),
(42, 9, 2, '2021-01-09'),
(43, 6, 2, '2021-01-09'),
(44, 5, 2, '2021-01-09'),
(45, 3, 2, '2021-01-09'),
(46, 1, 2, '2021-01-09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD KEY `iddh` (`iddh`),
  ADD KEY `idsp` (`idsp`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idphong` (`idphong`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkhachhang` (`idkhachhang`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddanhmuc` (`iddanhmuc`),
  ADD KEY `idkhuyenmai` (`idkhuyenmai`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `traloibl`
--
ALTER TABLE `traloibl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbl` (`idbl`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `iduser` (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loaiphong`
--
ALTER TABLE `loaiphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `traloibl`
--
ALTER TABLE `traloibl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `hanghoa` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `chitietdh`
--
ALTER TABLE `chitietdh`
  ADD CONSTRAINT `chitietdh_ibfk_1` FOREIGN KEY (`iddh`) REFERENCES `donhang` (`id`),
  ADD CONSTRAINT `chitietdh_ibfk_2` FOREIGN KEY (`idsp`) REFERENCES `hanghoa` (`id`);

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `hanghoa` (`id`),
  ADD CONSTRAINT `danhgia_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `danhmuc_ibfk_1` FOREIGN KEY (`idphong`) REFERENCES `loaiphong` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`idkhachhang`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `hanghoa_ibfk_2` FOREIGN KEY (`idkhuyenmai`) REFERENCES `khuyenmai` (`id`);

--
-- Các ràng buộc cho bảng `traloibl`
--
ALTER TABLE `traloibl`
  ADD CONSTRAINT `traloibl_ibfk_1` FOREIGN KEY (`idbl`) REFERENCES `binhluan` (`id`),
  ADD CONSTRAINT `traloibl_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `yeuthich`
--
ALTER TABLE `yeuthich`
  ADD CONSTRAINT `yeuthich_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `hanghoa` (`id`),
  ADD CONSTRAINT `yeuthich_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
