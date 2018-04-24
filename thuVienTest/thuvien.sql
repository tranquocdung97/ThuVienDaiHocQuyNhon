-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2018 at 07:10 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `madn` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tài Khoản',
  `id` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'ID',
  `tensach` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên Sách',
  `ngayvaogio` datetime NOT NULL COMMENT 'Ngày Vào Giỏ',
  PRIMARY KEY (`madn`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`madn`, `id`, `tensach`, `ngayvaogio`) VALUES
('3851050022', 'gt_7_0001', 'Các Giải Pháp Lập Trình C#', '2018-01-04 04:56:49'),
('3851050001', 'sb_1_0001', 'Tạp Chí Vươn Tới Thành Công Số 10 – Khúc Hạ Yêu Thương', '2018-01-04 02:59:11'),
('3851050001', 'gt_3_0001', 'Hóa Học Đại Cương', '2018-01-04 02:59:13'),
('3851050022', 'gt_1_0002', 'Toán Học Cao Cấp Tập 2', '2018-01-04 04:58:06'),
('3851050022', 'lv_4_0001', 'Văn Hóa Việt Nam', '2018-01-04 05:06:48'),
('3851050022', 'sb_2_0001', 'Báo Thanh Niên (Thứ 4 ngày 2 tháng 12 năm 2009)', '2018-01-04 05:16:17'),
('3851050022', 'gt_2_0002', 'Vật Lý Đại Cương Tập 2', '2018-01-04 05:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `detail_borrow_book`
--

DROP TABLE IF EXISTS `detail_borrow_book`;
CREATE TABLE IF NOT EXISTS `detail_borrow_book` (
  `madn` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Mã Mượn Sách',
  `id` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'ID',
  `ngaymuon` datetime NOT NULL COMMENT 'Ngày Mượn',
  `ngaytra` datetime DEFAULT NULL COMMENT 'Ngày Trả',
  `datra` tinyint(1) NOT NULL COMMENT 'Đã Trả'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `detail_borrow_book`
--

INSERT INTO `detail_borrow_book` (`madn`, `id`, `ngaymuon`, `ngaytra`, `datra`) VALUES
('3851050022', 'sb_1_0001', '2018-01-03 17:14:28', '2018-01-03 17:15:13', 1),
('3851050022', 'gt_2_0002', '2018-01-03 17:14:51', '2018-01-03 17:15:46', 1),
('3851050001', 'gt_2_0002', '2018-01-03 18:44:18', '2018-01-03 18:44:21', 1),
('3851050001', '3', '2018-01-04 00:21:24', '2018-01-04 00:22:28', 1),
('3851050001', 'gt_2_0002', '2018-01-04 00:21:47', '2018-01-04 00:24:02', 1),
('3851050001', '2', '2018-01-04 00:22:19', '2018-01-04 00:24:04', 1),
('3851050001', '4', '2018-01-04 00:22:20', '2018-01-04 00:24:06', 1),
('3851050001', 'lv_4_0001', '2018-01-04 00:24:14', NULL, 0),
('3851050001', 'lv_3_0001', '2018-01-04 00:24:16', NULL, 0),
('3851050001', 'gt_2_0002', '2018-01-04 03:00:15', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `indemnify_book`
--

DROP TABLE IF EXISTS `indemnify_book`;
CREATE TABLE IF NOT EXISTS `indemnify_book` (
  `tensach` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên Sách',
  `id` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'ID',
  `tinhtrang` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tình Trạng',
  `lydo` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Lý Do',
  `nguoinop` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Người Nộp Phạt',
  `thoigian` datetime NOT NULL COMMENT 'Thời Gian Nộp',
  `tien` int(11) NOT NULL COMMENT 'Số Tiền',
  `nguoithu` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Người Thu Tiền',
  `ghichu` varchar(200) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Ghi Chú'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `indemnify_book`
--

INSERT INTO `indemnify_book` (`tensach`, `id`, `tinhtrang`, `lydo`, `nguoinop`, `thoigian`, `tien`, `nguoithu`, `ghichu`) VALUES
('Tạp Chí Vươn Tới Thành Công Số 10 – Khúc Hạ Yêu Thương', 'sb_1_0001', 'a', 'a', '3851050022', '2018-01-03 17:15:10', 50000, 'admin', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `information_book`
--

DROP TABLE IF EXISTS `information_book`;
CREATE TABLE IF NOT EXISTS `information_book` (
  `id` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'ID',
  `tensach` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên Sách',
  `tentacgia` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tác Giả',
  `nhaxuatban` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Nhà Xuất Bản',
  `ngaycapnhatdautien` datetime DEFAULT NULL COMMENT 'Ngày Cập Nhật Đầu Tiên',
  `ngaycapnhatcuoi` datetime DEFAULT NULL COMMENT 'Ngày Cập Nhật Cuối Cùng',
  `maloaisach` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Loại Sách',
  `image` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Image',
  `mota` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Mô Tả',
  `tag` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Thẻ Tag',
  `soluong` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Số Lượng',
  `giatien` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Giá Tiền',
  `luotxem` int(11) DEFAULT '0' COMMENT 'Lượt Xem',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `information_book`
--

INSERT INTO `information_book` (`id`, `tensach`, `tentacgia`, `nhaxuatban`, `ngaycapnhatdautien`, `ngaycapnhatcuoi`, `maloaisach`, `image`, `mota`, `tag`, `soluong`, `giatien`, `luotxem`) VALUES
('gt_2_0002', 'Vật Lý Đại Cương Tập 2', 'Lương Duyên Bình', 'Giáo Dục Việt Nam', '2017-12-12 14:59:56', '2017-12-12 14:59:56', 'gt_2', 'gt_vatly_0002.jpg', 'Dùng cho sinh viên cao đẳng', 'vật lý đại cương,vật lý', '48', '30000', 28),
('gt_7_0001', 'Các Giải Pháp Lập Trình C#', 'Nguyễn Ngọc Bình Phương - Thái Thanh Phong', 'Giao Thông Vận Tải', '2017-12-12 14:59:56', '2017-12-12 14:59:56', 'gt_7', 'gt_congnghethongtin_0001.jpg', 'Lập Trình C#', 'c#, lập trình', '19', '45000', 19),
('gt_7_0002', 'Lập Trình Ứng Dụng Web Với PHP Tập 1', 'Khuất Thùy Phương', 'Đại Học Quốc Gia TP.HCM', '2017-12-12 14:59:57', '2017-12-12 14:59:57', 'gt_7', 'gt_congnghethongtin_0002.jpg', 'Lập Trình Ứng Dụng Web', 'ứng dụng web, lập trình, lập trình ứng dụng', '20', '40000', 18),
('gt_7_0003', 'Lập Trình Ứng Dụng Web Với PHP Tập 2', 'Khuất Thùy Phương', 'Đại Học Quốc Gia TP.HCM', '2017-12-12 14:59:57', '2017-12-12 14:59:57', 'gt_7', 'gt_congnghethongtin_0003.jpg', 'Lập Trình Ứng Dụng Web', 'ứng dụng web, lập trình, lập trình ứng dụng', '20', '40000', 18),
('gt_3_0001', 'Hóa Học Đại Cương', 'PGS. Nguyễn Đình Chi', 'Giáo Dục Việt Nam', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_3', 'hoadaicuong.jpg', 'Sách Hóa Đại Cương', 'hóa đại cương', '19', '35000', 24),
('gt_4_0001', 'Lịch Sử Các Học Thuyết Kinh Tế', 'Trần Bình Trọng', 'Đại Học Kinh Tế Quốc Dân', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_4', 'lichsucachocthuyetkinhte.jpg', 'Lịch Sử Các Học Thuyết Kinh Tế', 'lịch sử, học thuyết kinh tế', '17', '35000', 19),
('gt_5_0001', 'Sinh Học Đại Cương', 'PGS. TS. Cao Văn Thu', 'Bộ Y Tế, ĐH Dược Hà Nội', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_5', 'sinhhocdaicuong.jpg', 'Sinh Học Đại Cương', 'sinh học, bộ y tế', '18', '35000', 18),
('gt_6_0001', 'Địa Lý Tự Nhiên Đại Cương 2 (Khí Quyền và Thủy Quyển)', 'Hoàng Ngọc Oanh', 'Đại Học Sư Phạm', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_6', 'dialytunhiendaicuong.jpg', 'Địa Lý Tự Nhiên Đại Cương 2 (Khí Quyền và Thủy Quyển)', 'địa lý tự nhiên', '18', '35000', 19),
('gt_8_0001', 'Tuyến Điểm Du Lịch', 'TG.Bùi Thị Hải Yến', 'Giáo Dục Việt Nam', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_8', 'tuyendiemdulich.jpg', 'Tuyến Điểm Du Lịch', 'tuyến điểm du lịch, bùi thị hải yến', '17', '35000', 21),
('gt_9_0001', 'Solutions 2nd Edition Elementary', '\nTim Falla Paul A. Davies Jane Hudson', 'Oxford', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_9', 'sachtienganh.jpg', 'Tim Falla Paul A. Davies Jane Hudson', 'Solutions 2nd Edition Elementary', '17', '35000', 18),
('gt_10_0001', 'Giáo Dục Tiểu Học 1', 'Đặng Vũ Hoạt - Phó Đức Hoà', ' Đại Học Sư Phạm', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_10', 'giaoductieuhoc1.jpg', 'Giáo Dục Tiểu Học 1', ' Đại Học Sư Phạm', '20', '35000', 18),
('gt_11_0001', 'Giáo Dục Chính Trị', 'PSG.TS. Phạm Ngọc Anh (Chủ biên)- PGS.TS. Đặng Quốc Bảo - Ths. Nguyễn Quốc Hòa - PGS.TS. Phạm Xuân Mỹ - TS.Phạm Văn Sinh - Ths.Nguyễn Mạnh Tiến', 'Giáo Dục Việt Nam', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_11', 'giaoducchinhtri.jpg', 'Sách dùng cho các trường đào tạo hệ Trung cấp chuyên nghiệp', 'Sách dùng cho các trường đào tạo hệ Trung cấp chuyên nghiệp', '19', '35000', 18),
('gt_12_0001', 'Lý Luận và Phương Pháp Giáo Dục Thể Chất Cho Trẻ Em Lứa Tuổi Mầm Non', 'TS. Đặng Hồng Phương ', 'Đại Học Sư Phạm', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_12', 'giaoducthechat.jpg', 'Giáo Trình Lí Luận và Phương Pháp Giáo Dục Thể Chất Cho Trẻ Em Lứa Tuổi Mầm Non', 'Giáo Trình Lí Luận và Phương Pháp Giáo Dục Thể Chất Cho Trẻ Em Lứa Tuổi Mầm Non', '20', '35000', 18),
('gt_13_0001', 'Tâm Lý Học Phát Triển', 'Trương Thị Khánh Hà', 'Đại Học Quốc Gia Hà Nội', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_13', 'tamlygiaoduc.jpg', 'Tâm Lý Học Phát Triển', 'Đại Học Quốc Gia Hà Nội', '19', '35000', 18),
('gt_14_0001', 'Tài Chính Doanh Nghiệp', 'Học Viện Tài Chính', 'Tài Chính', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_14', 'taichinhnganhang.jpg', 'Tài Chính Doanh Nghiệp', 'Học Viện Tài Chính', '19', '35000', 18),
('gt_15_0001', 'Kinh Tế Học Đại Cương', 'TS.Trần Thị Lan Hương', 'Giáo Dục Việt Nam', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_15', 'kinhte.jpg', 'Giáo trình kinh tế học đại cương : Dành cho khối kinh tế các trường kỹ thuật ', 'Kinh Tế Học Đại Cương', '20', '35000', 18),
('gt_16_0001', 'Kỹ Thuật Điện', 'Nguyễn Trọng Thắng', 'Đại Học Quốc Gia TP.HCM', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'gt_16', 'kythuat.jpg', 'Kỹ Thuật Điện', 'Đại Học Quốc Gia TP.HCM', '20', '35000', 18),
('tk_1_0001', 'Chờ Một Ngày Nắng', 'Điệp Chi Linh', 'null', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'tk_1', 'tieuthuyet.jpg', 'Chờ Một Ngày Nắng', 'Điệp Chi Linh', '29', '45000', 18),
('tk_2_0001', 'Lịch Sử Việt Nam (Từ Nguồn Gốc Đến Thế Kỉ XIX)', 'Đào Duy Anh', 'Khoa Học Xã Hội', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'tk_2', 'liichsuthamkhao.jpg', 'Lịch Sử Việt Nam (Từ Nguồn Gốc Đến Thế Kỉ XIX)', 'Đào Duy Anh', '28', '45000', 18),
('tk_3_0001', 'Tuổi Học Trò Và Ngôi Trường Em Yêu', 'Nhiều Tác Giả', 'Văn Hoá Thông Tin', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'tk_3', 'tuoihoctrothamkhao.jpg', 'Tuổi Học Trò Và Ngôi Trường Em Yêu', 'Văn Hoá Thông Tin', '30', '45000', 18),
('tk_4_0001', 'Việt Nam Phong Tục', 'Phan Kế Bính', 'Văn Học', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'tk_4', 'phongtucthamkhao.jpg', 'Việt Nam Phong Tục', 'Văn Học', '30', '45000', 18),
('tk_5_0001', 'Kỹ Năng Sống Cho Tuổi Vị Thành Niên', 'Nguyễn Thị Oanh', 'NXB Trẻ', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'tk_5', 'kynangsong.jpg', 'Kỹ Năng Sống Cho Tuổi Vị Thành Niên', 'NXB Trẻ', '29', '45000', 18),
('tk_9_0001', 'Vũ Trung Tùy Bút', 'Phạm Đình Hổ', 'NXB Trẻ', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'tk_9', 'tuybut.jpg', 'Vũ Trung Tùy Bút', 'Phạm Đình Hổ', '28', '45000', 18),
('lv_1_0001', 'Lý Luận Và Phê Bình Văn Học', 'Trần Đình Sử (CB)', 'NXB Giáo Dục', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'lv_1', 'luanvan1.jpg', 'Lý Luận Và Phê Bình Văn Học', 'NXB Giáo Dục', '10', '20000', 18),
('lv_2_0001', 'Lý Luận Văn Học Tập 2 - Tác Phẩm Và Thể Loại Văn Học', 'Trần Đình Sử (CB)', 'Đại Học Sư Phạm', '2017-12-12 19:02:09', '2017-12-12 19:02:09', 'lv_2', 'luanvan2.jpg', 'Lý Luận Văn Học Tập 2 - Tác Phẩm Và Thể Loại Văn Học', 'Đại Học Sư Phạm', '10', '20000', 18),
('sb_1_0001', 'Tạp Chí Vươn Tới Thành Công Số 10 – Khúc Hạ Yêu Thương', 'Ban Biên Tập Tạp Chí Vươn Tới Thành Công', 'Công Ty Cổ Phần Phát Triển Thế Hệ Trẻ – Youth Development Corporation (YDC)', '2017-12-12 19:13:18', '2017-12-12 19:13:18', 'sb_1', 'tapchi.jpg', 'Tạp Chí Vươn Tới Thành Công Số 10 – Khúc Hạ Yêu Thương', 'Công Ty Cổ Phần Phát Triển Thế Hệ Trẻ – Youth Development Corporation (YDC)', '14', '20000', 24),
('qh_1_0001', 'The Great Gatsby ', ' F.Scott Fitzgerald', 'Hội Nhà Văn và Nhã Nam', '2017-12-12 19:15:05', '2017-12-12 19:15:05', 'qh_1', 'sachhiem.jpg', 'The Great Gatsby ', 'Hội Nhà Văn và Nhã Nam', '0', '1000000', 19),
('gt_1_0001', 'Toán Học Cao Cấp Tập 1', 'Nguyễn Đình Trí', 'Giáo Dục Việt Nam', '2017-12-30 22:36:19', '2018-01-04 14:08:41', 'gt_1', 'gt_1_0001.jpg', 'Đại số và hình học giải tích', 'đại số, hình học, giải tích, toán cao cấp', '0', '35000', 14),
('gt_1_0002', 'Toán Học Cao Cấp Tập 2', 'Nguyễn Đình Trí', 'Giáo Dục Việt Nam', '2017-12-30 22:36:19', '2018-01-04 14:09:15', 'gt_1', 'gt_1_0002.jpg', 'Phép tính giải tích một biến số', 'giải tích, toán cao cấp', '49', '35000', 4),
('tk_6_0001', 'Một Nghệ Thuật Sống', 'Thu Giang, Nguyễn Duy Cần', 'NXB Trẻ', '2017-12-30 23:14:33', '2017-12-30 23:14:33', 'tk_6', 'nghethuatsong.jpg', 'Tác phẩm Một nghệ thuật sống nêu lên những quan niệm về cuộc sống và cách sống: sống là gì, lẽ sống của con người, nhận biết chân giá trị của sự vật, hành động để giải thoát…', 'Sách nghệ thuật sống, NXB Trẻ', '10', '20000', 1),
('tk_7_0001', 'Hồi Kỳ: Lý Quang Diệu', 'Phạm Viêm Phương - Huỳnh Văn Thanh', 'NXB Trẻ', '2017-12-30 23:14:33', '2017-12-30 23:14:33', 'tk_7', 'hoiky.jpg', ' Câu chuyện về đất nước Singapore từ một quốc gia nghèo vươn lên trở thành \"con hổ châu Á\"', 'Hồi ký, Lý Quang Diệu', '10', '100000', 0),
('tk_8_0001', 'Hiệp Khách Hành', 'Kim Dung', 'NXB Văn Học', '2017-12-30 23:14:33', '2017-12-30 23:14:33', 'tk_8', 'kiemhiep.jpg', 'Hiệp Khách Hành là một tác phẩm của nhà văn Kim Dung, được viết khoảng năm 1963, xuất bản đầu tiên trên tờ Minh Báo năm 1965. Đây là tác phẩm được viết trong giai đoạn chín nhất của Kim Dung.', 'Kim Dung, Hiệp Khách Hành', '10', '30000', 0),
('tk_11_0001', 'Giáo Dục Phát Triển Năng Lực Sáng Tạo', 'TS.Trần Thị Bích Liễu', 'NXB Giáo Dục Việt Nam', '2017-12-30 23:14:33', '2017-12-30 23:14:33', 'tk_11', 'giaoduc.jpg', 'Ý nghĩ của bìa: sáng tạo phải xuất phát từ trái tim mới mang lại hạnh phúc cho cá nhân, tập thể và xã hội.', 'NXB Giáo Dục Việt Nam, Sách Giáo Dục', '5', '50000', 0),
('tk_10_0001', 'Các Tác Giả Đoạt Giải Nobel', 'Nhiều tác giả', 'NXB Văn Học', '2017-12-30 23:19:07', '2017-12-30 23:19:07', 'tk_10', 'truyenngan.jpg', 'Truyện ngắn, NXB Văn Học', 'Truyện ngắn, NXB Văn Học', '10', '80000', 0),
('tk_12_0001', 'Thơ văn Cao Bá Quát', 'GS. Vũ Khiêu (Chủ biên)', 'NXB Hà Nội', '2017-12-30 23:19:07', '2017-12-30 23:19:07', 'tk_12', 'thocaobaquat.jpg', 'Cao Bá Quát, Thơ Cao Bá Quát', 'Cao Bá Quát, Thơ Cao Bá Quát', '10', '50000', 0),
('lv_3_0001', 'Đề tài: Chính sách NT &QHNT giữa VN & Canada', 'Hoàng Thị Ánh Hồng', 'null', '2017-12-30 23:30:21', '2017-12-30 23:30:21', 'lv_3', 'khoaluan.jpg', 'Khóa luận tốt nghiệp', 'Khóa luận tốt nghiệp', '4', '10000', 0),
('lv_4_0001', 'Văn Hóa Việt Nam', 'Trần Quốc Vượng', 'NXB Văn Hóa Dân Tộc', '2017-12-30 23:30:21', '2017-12-30 23:30:21', 'lv_4', 'luanvankhac.jpg', 'Trần Quốc Vượng, NXB Văn Hóa Dân Tộc', 'Trần Quốc Vượng, NXB Văn Hóa Dân Tộc', '3', '20000', 1),
('sb_2_0001', 'Báo Thanh Niên (Thứ 4 ngày 2 tháng 12 năm 2009)', 'Báo thanh niên', 'Báo thanh niên', '2017-12-30 23:38:18', '2017-12-30 23:38:18', 'sb_2', 'baothanhnien.jpg', 'Báo Thanh Niên (Thứ 4 ngày 2 tháng 12 năm 2009)', 'Báo Thanh Niên (Thứ 4 ngày 2 tháng 12 năm 2009)', '9', '5000', 4),
('sb_3_0001', 'Cẩm nang tuyển sinh Đại Học và Cao Đẳng 2013', 'Báo tuổi trẻ', 'Báo tuổi trẻ', '2017-12-30 23:38:18', '2017-12-30 23:38:18', 'sb_3', 'baotuoitre.jpg', 'Cẩm nang tuyển sinh Đại Học và Cao Đẳng 2013', 'Cẩm nang tuyển sinh Đại Học và Cao Đẳng 2013', '10', '5000', 0),
('sb_4_0001', 'FASHION', 'Tạp Chí Thời Trang', 'Tạp Chí Thời Trang', '2017-12-30 23:38:18', '2017-12-30 23:38:18', 'sb_4', 'baokhac.jpg', 'FASHION', 'FASHION', '5', '5000', 0),
('ce_2_0001', 'ENGLISH TIME 2 2ND CLASS AUDIO CD 1', 'null', 'null', '2017-12-30 23:48:55', '2018-01-04 14:07:53', 'ce_2', 'ce_2_0001.jpg', 'ENGLISH TIME 2 2ND CLASS AUDIO CD 1', 'ENGLISH TIME 2 2ND CLASS AUDIO CD 1', '10', 'null', 15),
('ce_1_0001', 'Phương pháp dạy trẻ tiếng Anh', 'null', 'null', '2017-12-30 23:48:55', '2018-01-04 14:06:50', 'ce_1', 'ce_1_0001.jpg', 'Phương pháp dạy trẻ tiếng Anh', 'Phương pháp dạy trẻ tiếng Anh', '10', 'null', 22),
('ce_3_0001', 'Bốn mươi gương thành công', 'Nguyễn Hiến Lê', 'NXB Văn Hóa Thông Tin', '2017-12-30 23:48:55', '2018-01-04 14:08:18', 'ce_3', 'ce_3_0001.jpg', 'NXB Văn Hóa Thông Tin', 'NXB Văn Hóa Thông Tin', '10', 'null', 2);

-- --------------------------------------------------------

--
-- Table structure for table `information_user`
--

DROP TABLE IF EXISTS `information_user`;
CREATE TABLE IF NOT EXISTS `information_user` (
  `madn` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tài Khoản',
  `hodem` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Họ Đệm',
  `ten` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên',
  `ngaysinh` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Ngày Sinh',
  `lop` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Lớp',
  `khoa` text COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Khoa',
  `nganh` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Ngành',
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Email',
  `cmnd` int(11) DEFAULT NULL COMMENT 'Chứng Minh Nhân Dân',
  `sdt` text COLLATE utf8mb4_vietnamese_ci COMMENT 'Số Điện Thoại',
  `cothemuonsachgiaotrinh` int(11) NOT NULL COMMENT 'Có Thể Mượn Sách Giáo Trình',
  `cothemuonsachthamkhao` int(11) NOT NULL COMMENT 'Có Thể Mượn Sách Tham Khảo',
  `quyentruycap` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Quyền Truy Cập',
  `damuon` int(11) NOT NULL DEFAULT '0' COMMENT 'Đã Mượn',
  UNIQUE KEY `cmnd` (`cmnd`),
  KEY `information_user_madn` (`madn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `information_user`
--

INSERT INTO `information_user` (`madn`, `hodem`, `ten`, `ngaysinh`, `lop`, `khoa`, `nganh`, `email`, `cmnd`, `sdt`, `cothemuonsachgiaotrinh`, `cothemuonsachthamkhao`, `quyentruycap`, `damuon`) VALUES
('3851050001', 'Nguyễn Hữu', 'An', '13/4/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc1@gmail.com', 212671260, '01669585108', 3, 0, 'sinhvien', 3),
('3851050004', 'Bùi Chí', 'Bách', '15/12/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc2@gmail.com', 212671261, '01669585109', 5, 3, 'sinhvien', 0),
('3851050005', 'Nguyễn Xuân', 'Bảo', '20/10/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc3@gmail.com', 212671262, '01669585110', 5, 3, 'sinhvien', 0),
('3851050010', 'Tống Thị Thanh', 'Cúc', '05/6/1995', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc4@gmail.com', 212671263, '01669585111', 5, 3, 'sinhvien', 0),
('3851050011', 'Võ Văn', 'Cường', '01/02/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc5@gmail.com', 212671264, '01669585112', 5, 3, 'sinhvien', 0),
('3851050012', 'Đặng Hữu', 'Châu', '08/10/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc6@gmail.com', 212671265, '01669585113', 5, 3, 'sinhvien', 0),
('3851050014', 'Trần Công', 'Châu', '20/7/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc7@gmail.com', 212671266, '01669585114', 5, 3, 'sinhvien', 0),
('3851050015', 'Lương Trần', 'Chiến', '20/12/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc8@gmail.com', 212671267, '01669585115', 5, 3, 'sinhvien', 0),
('3851050022', 'Trần Quốc', 'Dũng', '10/8/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc9@gmail.com', 212671268, '01669585116', 2, 1, 'sinhvien', 0),
('3851050032', 'Huỳnh Đặng Tiến', 'Đạt', '19/12/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc10@gmail.com', 212671269, '01669585117', 5, 3, 'sinhvien', 0),
('3851050034', 'Nguyễn Thế', 'Đạt', '24/8/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc11@gmail.com', 212671270, '01669585118', 5, 3, 'sinhvien', 0),
('3851050036', 'Trương Võ', 'Đạt', '17/02/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc12@gmail.com', 212671271, '01669585119', 5, 3, 'sinhvien', 0),
('3851050039', 'Đỗ Thiện', 'Đức', '20/3/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc13@gmail.com', 212671272, '01669585120', 5, 3, 'sinhvien', 0),
('3851050041', 'Lê Tự Tôn', 'Được', '20/8/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc14@gmail.com', 212671273, '01669585121', 5, 3, 'sinhvien', 0),
('3851050044', 'La Việt', 'Hải', '27/11/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc15@gmail.com', 212671274, '01669585122', 5, 3, 'sinhvien', 0),
('3851050046', 'Tô Trung', 'Hải', '11/8/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc16@gmail.com', 212671275, '01669585123', 5, 3, 'sinhvien', 0),
('3851050053', 'Bùi Xuân', 'Hậu', '20/7/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc17@gmail.com', 212671276, '01669585124', 5, 3, 'sinhvien', 0),
('3851050054', 'Nguyễn Lê Công', 'Hậu', '21/10/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc18@gmail.com', 212671277, '01669585125', 5, 3, 'sinhvien', 0),
('3851050055', 'Huỳnh Thị Kim', 'Hiên', '18/9/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc19@gmail.com', 212671278, '01669585126', 5, 3, 'sinhvien', 0),
('3851050061', 'Phạm Trung', 'Hiếu', '19/4/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc20@gmail.com', 212671279, '01669585127', 5, 3, 'sinhvien', 0),
('3851050063', 'Đặng Minh', 'Hoà', '24/4/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc21@gmail.com', 212671280, '01669585128', 5, 3, 'sinhvien', 0),
('3851050068', 'Phạm Ngọc', 'Hùng', '16/6/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc22@gmail.com', 212671281, '01669585129', 5, 3, 'sinhvien', 0),
('3851050069', 'Nguyễn Hà Gia', 'Huy', '02/01/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc23@gmail.com', 212671282, '01669585130', 5, 3, 'sinhvien', 0),
('3851050071', 'Nguyễn Quang', 'Huy', '17/10/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc24@gmail.com', 212671283, '01669585131', 5, 3, 'sinhvien', 0),
('3851050073', 'Phạm Như Nhật', 'Huy', '26/02/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc25@gmail.com', 212671284, '01669585132', 5, 3, 'sinhvien', 0),
('3851050080', 'Bùi Thế', 'Kiệt', '12/10/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc26@gmail.com', 212671285, '01669585133', 5, 3, 'sinhvien', 0),
('3851050081', 'Huỳnh Thanh', 'Kiệt', '05/7/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc27@gmail.com', 212671286, '01669585134', 5, 3, 'sinhvien', 0),
('3851050082', 'Nguyễn Xuân', 'Kỳ', '19/5/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc28@gmail.com', 212671287, '01669585135', 5, 3, 'sinhvien', 0),
('3851050083', 'Nguyễn Tuấn', 'Khải', '03/11/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc29@gmail.com', 212671288, '01669585136', 5, 3, 'sinhvien', 0),
('3851050086', 'Nguyễn Đức', 'Khôi', '07/7/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc30@gmail.com', 212671289, '01669585137', 5, 3, 'sinhvien', 0),
('3851050087', 'Nguyễn Huỳnh', 'Lam', '13/9/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc31@gmail.com', 212671290, '01669585138', 5, 3, 'sinhvien', 0),
('3851050092', 'Võ Phạm Thiên', 'Lân', '08/3/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc32@gmail.com', 212671291, '01669585139', 5, 3, 'sinhvien', 0),
('3851050094', 'Nguyễn Lan', 'Linh', '18/3/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc33@gmail.com', 212671292, '01669585140', 5, 3, 'sinhvien', 0),
('3851050098', 'Võ Thành', 'Lộc', '16/6/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc34@gmail.com', 212671293, '01669585141', 5, 3, 'sinhvien', 0),
('3851050100', 'Lê Văn', 'Mót', '10/10/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc35@gmail.com', 212671294, '01669585142', 5, 3, 'sinhvien', 0),
('3851050107', 'Lê Thanh', 'Nghĩa', '14/5/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc36@gmail.com', 212671295, '01669585143', 5, 3, 'sinhvien', 0),
('3851050108', 'Thái Song', 'Nhẫn', '03/4/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc37@gmail.com', 212671296, '01669585144', 5, 3, 'sinhvien', 0),
('3851050111', 'Đinh Thị Thuý', 'Nhung', '07/7/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc38@gmail.com', 212671297, '01669585145', 5, 3, 'sinhvien', 0),
('3851050113', 'Nguyễn Tấn', 'Phôn', '25/10/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc39@gmail.com', 212671298, '01669585146', 5, 3, 'sinhvien', 0),
('3851050115', 'Nguyễn Hoàng', 'Phúc', '04/4/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc40@gmail.com', 212671299, '01669585147', 5, 3, 'sinhvien', 0),
('3851050122', 'Võ Xuân', 'Quang', '02/02/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc41@gmail.com', 212671300, '01669585148', 5, 3, 'sinhvien', 0),
('3851050124', 'Trần Minh', 'Quân', '12/10/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc42@gmail.com', 212671301, '01669585149', 5, 3, 'sinhvien', 0),
('3851050134', 'Nguyễn Đỗ', 'Tiếu', '16/7/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc43@gmail.com', 212671302, '01669585150', 5, 3, 'sinhvien', 0),
('3851050136', 'Võ Trung', 'Tín', '14/8/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc44@gmail.com', 212671303, '01669585151', 5, 3, 'sinhvien', 0),
('3851050139', 'Lê Anh', 'Tuấn', '06/6/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc45@gmail.com', 212671304, '01669585152', 5, 3, 'sinhvien', 0),
('3851050140', 'Lê Anh', 'Tuấn', '19/02/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc46@gmail.com', 212671305, '01669585153', 5, 3, 'sinhvien', 0),
('3851050143', 'Nguyễn Văn', 'Tùng', '10/9/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc47@gmail.com', 212671306, '01669585154', 5, 3, 'sinhvien', 0),
('3851050145', 'Nguyễn Văn', 'Tưởng', '04/4/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc48@gmail.com', 212671307, '01669585155', 5, 3, 'sinhvien', 0),
('3851050164', 'Lê Thuỳ', 'Trang', '03/10/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc49@gmail.com', 212671308, '01669585156', 5, 3, 'sinhvien', 0),
('3851050165', 'Trần Quang', 'Triển', '29/9/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc50@gmail.com', 212671309, '01669585157', 5, 3, 'sinhvien', 0),
('3851050171', 'Lê Minh', 'Trung', '03/12/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc51@gmail.com', 212671310, '01669585158', 5, 3, 'sinhvien', 0),
('3851050174', 'Nguyễn Văn', 'Trung', '04/10/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc52@gmail.com', 212671311, '01669585159', 5, 3, 'sinhvien', 0),
('3851050176', 'Trần Quang', 'Trường', '20/4/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc53@gmail.com', 212671312, '01669585160', 5, 3, 'sinhvien', 0),
('3851050183', 'Võ Quang', 'Việt', '30/8/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc54@gmail.com', 212671313, '01669585161', 5, 3, 'sinhvien', 0),
('3851050184', 'Nguyễn Ngọc Thế', 'Vinh', '03/8/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc55@gmail.com', 212671314, '01669585162', 5, 3, 'sinhvien', 0),
('3851050187', 'Ngô Hùng', 'Vương', '10/4/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc56@gmail.com', 212671315, '01669585163', 5, 3, 'sinhvien', 0),
('3851050190', 'Hồ Thị Linh', 'Vy', '20/4/1996', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc57@gmail.com', 212671316, '01669585164', 5, 3, 'sinhvien', 0),
('3851050192', 'Nguyễn Hồng', 'Xin', '12/11/1997', 'CNTT-k38b', '7', 'Công nghệ thông tin', 'abc58@gmail.com', 212671317, '01669585165', 5, 3, 'sinhvien', 0),
('admin', 'Nguyễn Ngọc Thế', 'Vinh', '', '', '', '', NULL, NULL, NULL, 0, 0, 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kind_of_book`
--

DROP TABLE IF EXISTS `kind_of_book`;
CREATE TABLE IF NOT EXISTS `kind_of_book` (
  `maloaisach` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Mã Loại Sách',
  `tenloaisach` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tên Loại Sách',
  `quyentruycap` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL COMMENT 'Quyền Truy Cập',
  PRIMARY KEY (`maloaisach`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `kind_of_book`
--

INSERT INTO `kind_of_book` (`maloaisach`, `tenloaisach`, `quyentruycap`) VALUES
('tk_3', 'Tuổi Học Trò', 'sinhvien,giaovien'),
('tk_2', 'Lịch Sử', 'sinhvien,giaovien'),
('tk_1', 'Tiểu Thuyết', 'sinhvien,giaovien'),
('gt_16', 'Khoa Kỹ Thuật & Công Nghệ', 'sinhvien,giaovien'),
('gt_15', 'Khoa Kinh Tế & Kế Toán', 'sinhvien,giaovien'),
('gt_14', 'Khoa TC-NH & QTKD', 'sinhvien,giaovien'),
('gt_13', 'Khoa Tâm Lý Giáo Dục & CTXH', 'sinhvien,giaovien'),
('gt_12', 'Khoa Giáo Dục Thể Chất - Quốc Phòng', 'sinhvien,giaovien'),
('gt_11', 'Khoa Giáo Dục Chính Trị & Quản Lý Nhà Nước', 'sinhvien,giaovien'),
('gt_10', 'Khoa Giáo Dục Tiểu Học & Mầm Non', 'sinhvien,giaovien'),
('gt_9', 'Khoa Ngoại Ngữ', 'sinhvien,giaovien'),
('gt_8', 'Khoa Ngữ Văn', 'sinhvien,giaovien'),
('gt_7', 'Khoa Công Nghệ Thông Tin', 'sinhvien,giaovien'),
('gt_6', 'Khoa Địa Lý - Địa Chính', 'sinhvien,giaovien'),
('gt_5', 'Khoa Sinh - KTNN', 'sinhvien,giaovien'),
('gt_4', 'Khoa Lịch Sử', 'sinhvien,giaovien'),
('gt_3', 'Khoa Hóa', 'sinhvien,giaovien'),
('gt_2', 'Khoa Vật Lý', 'sinhvien,giaovien'),
('gt_1', 'Khoa Toán', 'sinhvien,giaovien'),
('tk_4', 'Phong Tục Việt Nam', 'sinhvien,giaovien'),
('tk_5', 'Kĩ Năng Sống', 'sinhvien,giaovien'),
('tk_6', 'Nghệ Thuật Sống', 'sinhvien,giaovien'),
('tk_7', 'Hồi Ký', 'sinhvien,giaovien'),
('tk_8', 'Kiếm Hiệp', 'sinhvien,giaovien'),
('tk_9', 'Tùy Bút', 'sinhvien,giaovien'),
('tk_10', 'Tập Truyện Ngắn', 'sinhvien,giaovien'),
('tk_11', 'Giáo Dục', 'sinhvien,giaovien'),
('tk_12', 'Thơ', 'sinhvien,giaovien'),
('lv_1', 'Thạc Sĩ', 'sinhvien,giaovien'),
('lv_2', 'Tiến Sĩ', 'sinhvien,giaovien'),
('lv_3', 'Khóa Luận', 'sinhvien,giaovien'),
('lv_4', 'Khác', 'sinhvien,giaovien'),
('sb_1', 'Tạp Chí', 'sinhvien,giaovien'),
('sb_2', 'Báo Thanh Niên', 'sinhvien,giaovien'),
('sb_3', 'Báo Tuổi Trẻ', 'sinhvien,giaovien'),
('sb_4', 'Khác', 'sinhvien,giaovien'),
('ce_1', 'Video', 'sinhvien,giaovien'),
('ce_2', 'CD-English', 'sinhvien,giaovien'),
('ce_3', 'Ebook', 'sinhvien,giaovien'),
('qh_1', 'Quý hiếm', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `madn` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Tài Khoản',
  `mkhau` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Mật Khẩu',
  `quyentruycap` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL COMMENT 'Quyền Truy Cập',
  `trangthai` int(11) DEFAULT '0' COMMENT 'Trạng Thái Đăng Nhập',
  PRIMARY KEY (`madn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`madn`, `mkhau`, `quyentruycap`, `trangthai`) VALUES
('3851050192', '3851050192', 'sinhvien', 0),
('3851050190', '3851050190', 'sinhvien', 0),
('3851050187', '3851050187', 'sinhvien', 0),
('3851050184', '3851050184', 'sinhvien', 0),
('3851050183', '3851050183', 'sinhvien', 0),
('3851050176', '3851050176', 'sinhvien', 0),
('3851050174', '3851050174', 'sinhvien', 0),
('3851050171', '3851050171', 'sinhvien', 0),
('3851050165', '3851050165', 'sinhvien', 0),
('3851050164', '3851050164', 'sinhvien', 0),
('3851050145', '3851050145', 'sinhvien', 0),
('3851050143', '3851050143', 'sinhvien', 0),
('3851050140', '3851050140', 'sinhvien', 0),
('3851050139', '3851050139', 'sinhvien', 0),
('3851050136', '3851050136', 'sinhvien', 0),
('3851050134', '3851050134', 'sinhvien', 0),
('3851050124', '3851050124', 'sinhvien', 0),
('3851050122', '3851050122', 'sinhvien', 0),
('3851050115', '3851050115', 'sinhvien', 0),
('3851050113', '3851050113', 'sinhvien', 0),
('3851050111', '3851050111', 'sinhvien', 0),
('3851050108', '3851050108', 'sinhvien', 0),
('3851050107', '3851050107', 'sinhvien', 0),
('3851050100', '3851050100', 'sinhvien', 0),
('3851050098', '3851050098', 'sinhvien', 0),
('3851050094', '3851050094', 'sinhvien', 0),
('3851050092', '3851050092', 'sinhvien', 0),
('3851050087', '3851050087', 'sinhvien', 0),
('3851050086', '3851050086', 'sinhvien', 0),
('3851050083', '3851050083', 'sinhvien', 0),
('3851050082', '3851050082', 'sinhvien', 0),
('3851050081', '3851050081', 'sinhvien', 0),
('3851050080', '3851050080', 'sinhvien', 0),
('3851050073', '3851050073', 'sinhvien', 0),
('3851050071', '3851050071', 'sinhvien', 0),
('3851050069', '3851050069', 'sinhvien', 0),
('3851050068', '3851050068', 'sinhvien', 0),
('3851050063', '3851050063', 'sinhvien', 0),
('3851050061', '3851050061', 'sinhvien', 0),
('3851050055', '3851050055', 'sinhvien', 0),
('3851050054', '3851050054', 'sinhvien', 0),
('3851050053', '3851050053', 'sinhvien', 0),
('3851050046', '3851050046', 'sinhvien', 0),
('3851050044', '3851050044', 'sinhvien', 0),
('3851050041', '3851050041', 'sinhvien', 0),
('3851050039', '3851050039', 'sinhvien', 0),
('3851050036', '3851050036', 'sinhvien', 0),
('3851050034', '3851050034', 'sinhvien', 0),
('3851050032', '3851050032', 'sinhvien', 0),
('3851050022', '3851050022', 'sinhvien', 0),
('3851050015', '3851050015', 'sinhvien', 0),
('3851050014', '3851050014', 'sinhvien', 0),
('3851050012', '3851050012', 'sinhvien', 0),
('3851050011', '3851050011', 'sinhvien', 0),
('3851050010', '3851050010', 'sinhvien', 0),
('3851050005', '3851050005', 'sinhvien', 0),
('3851050004', '3851050004', 'sinhvien', 0),
('admin', 'qwerty', 'admin', 0),
('3851050001', '3851050001', 'sinhvien', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
