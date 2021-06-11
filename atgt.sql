-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 07:57 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `id` int(5) NOT NULL,
  `mistake` varchar(500) NOT NULL,
  `xemay` varchar(500) NOT NULL,
  `oto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `mistake`, `xemay`, `oto`) VALUES
(2, 'Vượt đèn đỏ', '400.000 đồng đến 600.000 đồng', '800.000 đồng đến 1.000.000 đồng'),
(3, 'Đi không đúng phần đường hoặc làn đường quy định (Đi sai làn)', '400.000 đồng đến 600.000 đồng', '3.000.000 đồng đến 5.000.000 đồng'),
(4, 'Đi không đúng theo chỉ dẫn của vạch kẻ đường', '100.000 đồng đến 200.000 đồng', '200.000 đồng đến 400.000 đồng'),
(5, 'Đi vào đường có biển báo cấm phương tiện đang điều khiển', '400.000 đồng đến 600.000 đồng', '1.000.000 đồng đến 2.000.000 đồng'),
(6, 'Điều khiển xe ô tô không có gương chiếu hậu', '_', '300.000 đồng đến 400.000 đồng'),
(7, 'Không đội mũ bảo hiểm hoặc đội nhưng không cài quai đúng quy cách', '200.000 đồng đến 300.000 đồng', '_'),
(8, 'Chuyển làn không có tín hiệu báo trước', '100.000 đồng - 200.000 đồng ', '300.000 đồng - 500.000 đồng ');

-- --------------------------------------------------------

--
-- Table structure for table `hotline`
--

CREATE TABLE `hotline` (
  `id` int(5) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotline`
--

INSERT INTO `hotline` (`id`, `name`, `address`, `phone`) VALUES
(1, 'Phòng An ninh điều tra', '89 Trần Hưng Đạo, phường Trần Hưng Đạo, quận Hoàn Kiếm', '069.219.4075'),
(2, 'Văn phòng Cơ quan Cảnh sát điều tra', '55 Lý Thường Kiệt, phường Trần Hưng Đạo, quận Hoàn Kiếm  ', '069.219.6420'),
(3, 'Phòng Cảnh sát điều tra tội phạm về trật tự xã hội', '7 Thiền Quang, phường Nguyễn Du, quận Hai Bà Trưng', '024.3942.2532'),
(4, 'Phòng Cảnh sát điều tra tội phạm về tham nhũng, kinh tế, buôn lậu', '40B Hàng Bài, phường Hàng Bài, quận Hoàn Kiếm', '069.219.6609'),
(5, 'Phòng Cảnh sát điều tra tội phạm về ma túy', '40B Hàng Bài, phường Hàng Bài, quận Hoàn Kiếm', '069.219.6731'),
(6, 'Công an quận Hoàn Kiếm', '2 Tràng Thi, phường Hàng Trống, quận Hoàn Kiếm', '069.219.6567'),
(7, 'Công an quận Hai Bà Trưng', '96 Tô Hiến Thành, phường Lê Đại Hành, quận Hai Bà Trưng', '069.219.6741'),
(8, 'Công an quận Ba Đình', '37 Điện Biên Phủ, phường Điện Biên, quận Ba Đình', '024.3823.0984'),
(9, 'Công an quận Đống Đa', '382 Khâm Thiên, phường Thổ Quan, quận Đống Đa', '024.3514.8318'),
(10, 'Công an quận Tây Hồ', '739 Lạc Long Quân, phường Phú Thượng, quận Tây Hồ', '024.3753.0265');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `time` varchar(200) NOT NULL,
  `content` mediumtext NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `time`, `content`, `photo`) VALUES
(1, 'Lực lượng Công an gặt lúa giúp nhân dân giữa vùng tâm dịch', '12:30 4/5/2021', '<p style=\"text-align:center\"><strong><span style=\"font-size:20px\">Gần 20 chiến sĩ C&ocirc;ng An huyện Y&ecirc;n Dũng, tỉnh Bắc Giang d&ugrave; c&ograve;n đang mệt do ti&ecirc;m vaccine ngừa COVID-19, nhưng họ vẫn xắn tay &aacute;o gi&uacute;p nhiều hộ d&acirc;n đang chịu c&aacute;ch ly tr&ecirc;n địa b&agrave;n thu hoạch l&uacute;a</span>.</strong></p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://www.csgt.vn/tintuc/13135/Hai-Phong-tang-cuong-xu-ly-nguoi-di-xe-dap-vi-pham-giao-thong.html\" title=\"\">Hải Ph&ograve;ng tăng cường xử l&yacute; người đi xe đạp vi phạm giao th&ocirc;ng</a>&nbsp;<em>(06/06/2021)</em></p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://www.csgt.vn/tintuc/13136/CSGT-Binh-Thuan-tam-dung-xu-ly-vi-pham-giao-thong-voi-nhung-truong-hop-o-TP.-H%C3%B4-Chi-Minh.html\" title=\"\">CSGT B&igrave;nh Thuận tạm dừng xử l&yacute; vi phạm giao th&ocirc;ng với những trường hợp ở TP. Hồ Ch&iacute; Minh</a>&nbsp;<em>(06/06/2021)</em></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/7-6/gat%20lua/191702107_4009504069127390_9024948922667894261_n.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Thắm đậm t&igrave;nh qu&acirc;n d&acirc;n.</em></p>\r\n\r\n<p style=\"text-align:center\">Trước diễn biến phức tạp của dịch COVID-19 tại Bắc Giang, từ 0 giờ, ng&agrave;y 19/5/2021 UBND tỉnh Bắc Giang đ&atilde; tiến h&agrave;nh c&aacute;ch ly th&ecirc;m nhiều huyện tr&ecirc;n địa b&agrave;n, trong đ&oacute; c&oacute; huyện Y&ecirc;n Dũng. Nhiều hộ d&acirc;n chịu c&aacute;ch ly thuộc địa phương n&agrave;y kh&ocirc;ng thể chủ động trong việc đồng &aacute;n. M&ugrave;a l&uacute;a ch&iacute;n lại đến m&agrave; b&agrave; con kh&ocirc;ng thể ra ngo&agrave;i gặt l&uacute;a. Trước đ&oacute;, c&aacute;c chiến sĩ C&ocirc;ng an huyện Y&ecirc;n Dũng c&oacute; hứa hỗ trợ b&agrave; con ra đồng, để họ y&ecirc;n t&acirc;m c&aacute;ch ly.</p>\r\n\r\n<p style=\"text-align:center\">Được biết,&nbsp;to&agrave;n huyện Y&ecirc;n Dũng&nbsp;940 người c&aacute;ch ly tập trung ở 23 khu c&aacute;ch ly v&agrave; gần 8 ngh&igrave;n người đang c&aacute;ch ly tại nh&agrave;. Biết được những trăn trở của b&agrave; con trong ho&agrave;n cảnh đặc biệt n&agrave;y, C&ocirc;ng an huyện Y&ecirc;n Dũng đ&atilde; đi khảo s&aacute;t những hộ d&acirc;n kh&ocirc;ng thể tự chủ trong vấn đề thu hoạch n&ocirc;ng sản, đa phần l&agrave; những hộ c&oacute; ho&agrave;n cảnh neo đơn v&agrave; thiết bị gặt kh&ocirc;ng thể tiếp cận được cần được phải gặt bằng tay.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/7-6/gat%20lua/189731452_4009504409127356_1193331764332766121_n.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Gặt l&uacute;a giữa trời nắng n&oacute;ng gi&uacute;p b&agrave; con nh&acirc;n d&acirc;n.</em></p>\r\n\r\n<p style=\"text-align:center\">Từ 6 giờ s&aacute;ng, ng&agrave;y 5/6 c&aacute;c chiến sĩ c&ocirc;ng an đ&atilde; chia nhau đến c&aacute;c ruộng của những hộ d&acirc;n cần gi&uacute;p thu hoạch. Trong đo&agrave;n c&ograve;n c&oacute; cả nữ chiến sĩ c&ocirc;ng an cũng tham gia c&ocirc;ng t&aacute;c n&agrave;y. Thượng &uacute;y Nguyễn Thị T&acirc;m thoăn thắt đưa những đường lưỡi h&aacute;i, cắt gọn g&agrave;ng những b&ocirc;ng l&uacute;a ch&iacute;n.</p>\r\n\r\n<p style=\"text-align:center\">Khi được hỏi về l&yacute; do v&igrave; sao c&aacute;c anh hỗ trợ b&agrave; con trong l&uacute;c sức khỏe chưa ổn?&nbsp;Trung &uacute;y Phạm Văn Thương - B&iacute; thư Đo&agrave;n thanh ni&ecirc;n C&ocirc;ng an huyện Y&ecirc;n Dũng chỉ cười v&agrave; đ&aacute;p: &ldquo;V&igrave; ch&uacute;ng t&ocirc;i đ&atilde; hứa với b&agrave; con!&rdquo;.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/7-6/gat%20lua/190888066_4009504262460704_7199342243204637988_n.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\">Cuộc chiến chống dịch c&ograve;n nhiều vất vả. C&aacute;c chiến sĩ C&ocirc;ng an huyện Y&ecirc;n Dũng hằng ng&agrave;y l&agrave;m nhiệm vụ bảo vệ tại c&aacute;c chốt kiểm dịch, giữ g&igrave;n trật tự an ninh trong c&ocirc;ng t&aacute;c ph&ograve;ng dịch tr&ecirc;n địa b&agrave;n, ngo&agrave;i ra họ c&ograve;n thường xuy&ecirc;n phải truy vết c&aacute;c ca li&ecirc;n quan đến bệnh nh&acirc;n dương t&iacute;nh COVID-19.&nbsp;&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/7-6/gat%20lua/192713109_4009504242460706_464341447252244359_n.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\">&quot;Người d&acirc;n địa phương thường xuy&ecirc;n động vi&ecirc;n v&agrave; họ hợp t&aacute;c với ch&uacute;ng t&ocirc;i trong cuộc chiến chống dịch, điều đ&oacute; khiến những người l&agrave;m nhiệm vụ nhưng ch&uacute;ng t&ocirc;i cảm thấy được chia sẻ rất nhiều&quot; - anh Thương, B&iacute; thư Đo&agrave;n thanh ni&ecirc;n C&ocirc;ng an huyện Y&ecirc;n Dũng chia sẻ.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/7-6/gat%20lua/193968433_4009504349127362_5853016611793282876_n.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\">Gi&acirc;y ph&uacute;t nghỉ ngơi của c&aacute;c chiến sĩ c&ocirc;ng an. Sau khoảng hơn 7 tiếng gặt l&uacute;a, c&aacute;c chiến sĩ đ&atilde; gi&uacute;p thu hoạch được khoảng 14 s&agrave;o ruộng. Nhiệm vụ n&agrave;y xong nối tiếp nhụ vụ kh&aacute;c, c&oacute; những l&uacute;c b&agrave; con thương c&aacute;c anh, mời về nh&agrave; d&ugrave;ng bữa cơm, nhưng c&aacute;c chiến sĩ chỉ đ&agrave;nh từ chối v&agrave; hẹn sẽ đến nh&agrave; b&agrave; con khi dịch đ&atilde; được kiểm so&aacute;t.&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/7-6/gat%20lua/187292244_4009504475794016_9061322064608274788_n.jpg\" style=\"height:880px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/7-6/gat%20lua/195175305_4009504332460697_7538664100083562748_n.jpg\" style=\"height:440px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Sau khoảng hơn 7 tiếng gặt l&uacute;a, c&aacute;c chiến sĩ đ&atilde; gi&uacute;p thu hoạch được khoảng 14 s&agrave;o ruộng.</em></p>\r\n\r\n<p style=\"text-align:center\">Ngo&agrave;i gặt l&uacute;a, C&ocirc;ng an huyện Y&ecirc;n Dũng c&ograve;n gi&uacute;p người d&acirc;n thu hoạch một số hoa m&agrave;u kh&aacute;c.</p>\r\n', '1623258796_2021_06_02_09_07_IMG_5665.png'),
(2, 'CSGT dùng xe chuyên dụng chở thí sinh đến kịp giờ thi', '12:30 04/3/2021', '<p style=\"text-align:center\"><span style=\"font-size:20px\">Trong khi l&agrave;m l&agrave;m nhiệm vụ tại chốt ph&ograve;ng chống dịch COVID-19, lực lượng Cảnh s&aacute;t giao th&ocirc;ng (CSGT) đ&atilde; đưa em học sinh đến địa điểm thi khi bị hỏng xe giữa đường.</span></p>\r\n\r\n<p style=\"text-align:center\">Khi đang l&agrave;m nhiệm vụ tại chốt ph&ograve;ng chống dịch COVID-19, nhận được th&ocirc;ng tin c&oacute; th&iacute; sinh đang tr&ecirc;n đường đi thi v&agrave;o lớp 10 bị hỏng xe khi đang c&aacute;ch địa điểm thi gần 20 km, ngay lập tức Thiếu t&aacute; Lữ Pu Duy đ&atilde; sử dụng xe chuy&ecirc;n dụng của lực lượng CSGT kịp thời đ&oacute;n v&agrave; chở em học sinh c&oacute; mặt kịp giờ thi&hellip;</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/4-6/ha%20tinh/thumb_660_c053dcb1-61fa-4d1e-a0c8-62615e8dda5a.jpg\" style=\"height:494px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>D&ugrave;ng xe chuy&ecirc;n dụng CSGT đưa em&nbsp;Lo Thi&ecirc;n Long đến địa điểm thi.</em></p>\r\n\r\n<p style=\"text-align:center\">Theo đ&oacute;, đầu giờ chiều 03/6, tại điểm thi ở Trường THPT Kỳ Sơn, tỉnh Nghệ An, gần đến giờ thi nhưng chưa thấy em Lo Thi&ecirc;n Long&nbsp; (tr&uacute; ở bản Lưu Tiến, x&atilde; Chi&ecirc;u Lưu, huyện Kỳ Sơn, tỉnh Nghệ An) c&oacute; mặt tại điểm thi trong kỳ thi tuyển sinh v&agrave;o lớp 10 THPT, Hội đồng thi coi thi tại điểm thi n&agrave;y đ&atilde; th&ocirc;ng tin với tổ Cảnh s&aacute;t trực bảo vệ điểm thi nhờ gi&uacute;p đỡ.</p>\r\n\r\n<p style=\"text-align:center\">Thượng t&aacute; T&ocirc; Văn Hậu, Trưởng C&ocirc;ng an huyện Kỳ Sơn cho biết: Nhận được th&ocirc;ng tin, l&atilde;nh đạo C&ocirc;ng an huyện Kỳ Sơn lập tức chỉ đạo lực lượng Cảnh s&aacute;t l&agrave;m nhiệm vụ bảo vệ điểm thi nhanh ch&oacute;ng nắm th&ocirc;ng tin của em Long đồng thời bằng mọi c&aacute;ch để li&ecirc;n lạc với th&iacute; sinh n&agrave;y.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/4-6/ha%20tinh/thumb_660_1e2f3188-177c-4f93-8b20-aed86fb14239.jpg\" style=\"height:494px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Em&nbsp;Lo Thi&ecirc;n Long vui mừng, khẩn trương để kịp thời v&agrave;o thi.</em></p>\r\n\r\n<p style=\"text-align:center\">Sau đ&oacute;,&nbsp;Thiếu t&aacute; Lữ Pu Duy nhanh ch&oacute;ng li&ecirc;n lạc với gia đ&igrave;nh em Lo Thi&ecirc;n Long th&igrave; được biết, em đang tr&ecirc;n đường đi thi th&igrave; xe đạp bị hỏng khi đang c&aacute;ch điểm dự thi gần 20km.</p>\r\n\r\n<p style=\"text-align:center\">Ngay lập tức, Thiếu t&aacute; Duy đ&atilde; sử dụng xe chuy&ecirc;n dụng của lực lượng CSGT đến địa điểm em Long bị hỏng xe, kịp thời đ&oacute;n v&agrave; chở em đến điểm thi. May mắn l&agrave; khi em Long&nbsp;đến điểm thi tại trường THPT Kỳ Sơn, chỉ c&ograve;n v&agrave;i ph&uacute;t nữa l&agrave; hết giờ v&agrave;o ph&ograve;ng thi.</p>\r\n\r\n<p style=\"text-align:center\"><strong>BBT</strong></p>\r\n', '1623258786_2021_06_02_09_07_IMG_5665.png'),
(3, 'Làm thủ tục trả lại phương tiện cho chủ sở hữu sau nhiều năm thất lạc', '09/06/2021', '<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Th&ocirc;ng qua c&ocirc;ng t&aacute;c TTKS, xử l&yacute; vi phạm, CSGT Hải Ph&ograve;ng ph&aacute;t hiện một chiếc xe đ&atilde; bị kẻ gian trộm cắp 2 năm trước. Sau khi x&aacute;c minh, đơn vị đ&atilde; b&agrave;n giao xe cho khổ chủ.</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://www.csgt.vn/tintuc/12418/CSGT-Thai-Nguyen-ban-giao-xe-mo-to-bi-mat-trom-cho-co-quan-Canh-sat-dieu-tra.html\" title=\"\">CSGT Th&aacute;i Nguy&ecirc;n b&agrave;n giao xe m&ocirc; t&ocirc; bị mất trộm cho cơ quan Cảnh s&aacute;t điều tra&nbsp;</a><em>(05/02/2021)</em></p>\r\n\r\n<p style=\"text-align:center\">Ng&agrave;y 30/12/2019, th&ocirc;ng qua c&ocirc;ng t&aacute;c tuần tra kiểm so&aacute;t tr&ecirc;n tuyến T&ocirc; Hiệu, Đội CSGT số 1, Ph&ograve;ng CSGT đường bộ - đường sắt, CATP Hải Ph&ograve;ng đ&atilde; kiểm tra xe m&ocirc; t&ocirc; BKS: 16M4 &ndash; 5367 do một người đ&agrave;n &ocirc;ng điều khiển vi phạm: Điều khiển xe kh&ocirc;ng đi b&ecirc;n phải theo chiều đi của m&igrave;nh, Kh&ocirc;ng c&oacute; giấy ph&eacute;p l&aacute;i xe, kh&ocirc;ng c&oacute; giấy đăng k&yacute; xe, kh&ocirc;ng c&oacute; bảo hiểm tr&aacute;ch nhiệm d&acirc;n sự của xe cơ giới c&ograve;n hiệu lực. Sau khi bị CSGT lập bi&ecirc;n bản vi phạm h&agrave;nh ch&iacute;nh, người vi phạm kh&ocirc;ng khai t&ecirc;n, bỏ đi kh&ocirc;ng l&agrave;m việc.</p>\r\n\r\n<p style=\"text-align:center\">Qua c&ocirc;ng t&aacute;c x&aacute;c minh v&agrave; giải quyết phương tiện vi phạm TTATGT qu&aacute; thời hạn tạm giữ m&agrave; người vi phạm kh&ocirc;ng đến thực hiện việc xử phạt, Đội Tuy&ecirc;n truyền xử l&yacute;, Ph&ograve;ng CSGT đường bộ - đường sắt, CATP Hải Ph&ograve;ng đ&atilde; l&agrave;m thủ tục x&aacute;c minh, chiếc xe m&ocirc; t&ocirc; tr&ecirc;n đeo biển kiểm so&aacute;t giả, biển kiểm so&aacute;t thật của xe l&agrave; 16M6-1918, Đội đ&atilde; gửi th&ocirc;ng b&aacute;o tới chủ sở hữu xe m&ocirc; t&ocirc; đang bị tạm giữ.</p>\r\n\r\n<p style=\"text-align:center\">Sau khi nhận được th&ocirc;ng b&aacute;o của Ph&ograve;ng CSGT đường bộ - đường sắt, CATP Hải Ph&ograve;ng, &ocirc;ng Đỗ Đức Ưng, địa chỉ tại H&agrave;, Kiến Thụy, Hải Ph&ograve;ng đ&atilde; c&oacute; đơn xin nhận lại phương tiện v&agrave; cho biết m&igrave;nh bị mất trộm 01 chiếc xe m&aacute;y v&agrave;o ng&agrave;y 30/11/2019 tại l&agrave;ng Việt Kiều, phường Vĩnh Niệm, L&ecirc; Ch&acirc;n, Hải Ph&ograve;ng, tuy nhi&ecirc;n &ocirc;ng Ưng đ&atilde; kh&ocirc;ng tr&igrave;nh b&aacute;o cơ quan C&ocirc;ng an. V&igrave; vậy khi nhận được th&ocirc;ng b&aacute;o của Ph&ograve;ng CSGT đường bộ - đường sắt &ocirc;ng Ưng rất vui mừng, li&ecirc;n hệ để nhận lại phương tiện.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/8-6/2021_06_02_09_07_IMG_5665.JPG\" style=\"height:559px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>CSGT Hải Ph&ograve;ng b&agrave;n giao phương tiện cho khổ chủ.</em></p>\r\n\r\n<p style=\"text-align:center\">Với sự nhiệt t&igrave;nh của c&aacute;n bộ chiến sĩ Đội tuy&ecirc;n truyền xử l&yacute;, &Ocirc;ng Ưng đ&atilde; đến Ph&ograve;ng CSGT đường bộ - đường sắt đ&atilde; ho&agrave;n thiện c&aacute;c thủ tục để nhận lại phương tiện tr&ecirc;n. Khi nhận lại Phương tiện &ocirc;ng Ưng đ&atilde; b&agrave;y tỏ sự x&uacute;c động cảm ơn c&aacute;n bộ, chiến sỹ Ph&ograve;ng CSGT đường bộ - đường sắt đ&atilde; hỗ trợ, gi&uacute;p đỡ để &ocirc;ng nhận lại chiếc xe m&ocirc; t&ocirc; tr&ecirc;n sau 2 năm bị thất lạc. &nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&nbsp;Ninh Nguyễn</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '1623258589_2021_06_02_09_07_IMG_5665.png'),
(4, 'Nghĩa cử của Trung úy CSGT giữa mùa dịch', '03/06/2021', '<p style=\"text-align:center\"><span style=\"font-size:20px\"><strong>Khi biết tin ch&aacute;u b&eacute; 5 tuổi cần truyền m&aacute;u định kỳ, Trung &uacute;y CSGT N&ocirc;ng Đức Việt đ&atilde; t&igrave;nh nguyện hiến 250ml m&aacute;u để kịp thời hỗ trợ ch&aacute;u vượt qua kh&oacute; khăn trong thời điểm dịch Covid-19 diễn biến phức tạp.</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><a href=\"http://www.csgt.vn/tintuc/12530/Trung-uy-CSGT-kip-thoi-hien-mau-cuu-nguoi.html\" title=\"\">Trung &uacute;y CSGT kịp thời hiến m&aacute;u cứu người</a>&nbsp;<em>(28/02/2021)</em></p>\r\n\r\n<p style=\"text-align:center\">Trước nghĩa cử cao đẹp đ&oacute;, ng&agrave;y 2/6, Đại t&aacute; Nguyễn Quốc Toản, Gi&aacute;m đốc C&ocirc;ng an tỉnh Bắc Giang đ&atilde; c&oacute; thư khen ngợi đồng ch&iacute; Trung u&yacute; N&ocirc;ng Đức Việt, c&aacute;n bộ Đội CSGT-TT, C&ocirc;ng an huyện Sơn Động. Biểu dương, khen ngợi tấm gương &ldquo;người tốt, việc tốt&rdquo;. Đồng ch&iacute; Gi&aacute;m đốc mong Trung &uacute;y Việt tiếp tục ph&aacute;t huy tinh thần xung k&iacute;ch, nhiệt th&agrave;nh của tuổi trẻ C&ocirc;ng an nh&acirc;n d&acirc;n, đạt nhiều th&agrave;nh t&iacute;ch hơn nữa trong c&ocirc;ng t&aacute;c v&agrave; chiến đấu, g&oacute;p phần giữ gi&agrave;n trật tự an to&agrave;n x&atilde; hội, v&igrave; cuộc sống b&igrave;nh y&ecirc;n v&agrave; hạnh ph&uacute;c của Nh&acirc;n d&acirc;n.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/3-6/dia%20phuong/hi%E1%BA%BFn%20m%C3%A1u.jpg\" style=\"height:484px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Nghĩa cử cao đẹp của Trung &uacute;y N&ocirc;ng Đức Việt t&ocirc; thắm th&ecirc;m h&igrave;nh ảnh đẹp của người chiến sỹ C&ocirc;ng an v&igrave; nh&acirc;n d&acirc;n phục vụ, đặc biệt hơn nữa khi xảy ra trong thời dịch bệnh đang diễn biến phức tạp.</em></p>\r\n\r\n<p style=\"text-align:center\">Trước đ&oacute;, ng&agrave;y 31/5, trong qu&aacute; tr&igrave;nh l&agrave;m nhiệm vụ tại chốt kiểm so&aacute;t dịch bệnh Covid-19 th&ocirc;n Dần, x&atilde; Hữu Sản; đồng ch&iacute; Trung u&yacute; N&ocirc;ng Đức Việt, c&aacute;n bộ Đội CSGT-TT nhận được th&ocirc;ng tin ch&aacute;u Trần Hải Quang (5 tuổi) tr&uacute; tại th&ocirc;n Dần, x&atilde; Hữu Sản, (l&agrave; th&ocirc;n đang thực hiện c&aacute;ch ly y tế tr&ecirc;n địa b&agrave;n huyện) bị thiếu m&aacute;u huyết t&aacute;n, cần truyền m&aacute;u định kỳ, tuy nhi&ecirc;n do dịch bệnh, gia đ&igrave;nh kh&ocirc;ng thể đưa ch&aacute;u đi điều trị tại bệnh viện cấp tỉnh theo định kỳ.</p>\r\n\r\n<p style=\"text-align:center\">Với tinh thần ti&ecirc;n phong, xung k&iacute;ch đồng ch&iacute; N&ocirc;ng Đức Việt đ&atilde; t&igrave;nh nguyện hiến 250ml m&aacute;u để kịp thời hỗ trợ ch&aacute;u Trần Hải Quang vượt qua kh&oacute; khăn.</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"http://www.csgt.vn/lib/ckfinder/images/Nam%202021/thang%206/3-6/dia%20phuong/hm3.jpg\" style=\"height:586px; width:660px\" /></p>\r\n\r\n<p style=\"text-align:center\"><em>Trung &uacute;y CSGT N&ocirc;ng Đức Việt v&agrave; ch&aacute;u&nbsp;Trần Hải Quang.</em></p>\r\n\r\n<p style=\"text-align:center\">Việc l&agrave;m của đồng ch&iacute; N&ocirc;ng Đức Việt đ&atilde; nhận được nhiều sự biểu dương, khen ngợi của c&aacute;n bộ, nh&acirc;n d&acirc;n tr&ecirc;n địa b&agrave;n. Đ&acirc;y l&agrave; một nghĩa cử cao đẹp, thể hiện tinh thần tương th&acirc;n, tương &aacute;i của mỗi người d&acirc;n Việt Nam, đặc biệt hơn nữa khi xảy ra trong thời dịch bệnh đang diễn biến phức tạp, qua đ&oacute; t&ocirc; thắm th&ecirc;m h&igrave;nh ảnh đẹp của người chiến sỹ C&ocirc;ng an v&igrave; nh&acirc;n d&acirc;n phục vụ.</p>\r\n\r\n<p style=\"text-align:center\"><strong>Minh Hải</strong></p>\r\n', '1623258735_hiến máu.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`) VALUES
(2, 'TRẦN NGỌC LONG', '0349295250', 'longtn.ptit@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'NGUYỄN VIỆT HƯƠNG', '0969240902', 'huongnv.ptit@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'NGUYỄN THUỲ LINH', '0333855577', 'linhnt.ptit@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `bienso` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `mistake` varchar(500) NOT NULL,
  `time` varchar(12) NOT NULL,
  `location` varchar(500) NOT NULL,
  `cost` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`bienso`, `type`, `mistake`, `time`, `location`, `cost`) VALUES
('18A-35665', 'Xe tải', 'Chuyển làn không có tín hiệu báo trước', '11:00 8/6/20', 'Duy Tân, Cầu Giấy, Hà Nội', 300),
('30A-356789', 'Xe máy', 'Vượt đèn đỏ, đèn vàng', '13:40 4/5/20', 'Trần Phú, Hà Đông, Hà Nội', 300),
('30A-35953', 'Ô tô', 'Không đội mũ khi tham gia giao thông', '12:30 4/5/20', 'Trần Phú - Hà Đông - Hà Nội', 300),
('30H-8888', 'Xe máy', 'Đi ngược chiều', '14:40 4/6/20', 'Mỹ Đình, Nam Từ Liêm, Hà Nội', 200),
('36B-07118', 'Xe khách', 'Vượt đèn đỏ', '2:00 7/6/202', 'Mỹ Đình, Nam Từ Liêm, Hà Nội', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotline`
--
ALTER TABLE `hotline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`bienso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotline`
--
ALTER TABLE `hotline`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
