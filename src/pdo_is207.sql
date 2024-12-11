-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 02:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_is207`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'nguyendeptrai', 'alo'),
(2, 'undeptrai', 'bc6f0aa94f722407f66281abd0f4027c'),
(3, 'nhsmai', '123'),
(5, 'nhsmai04', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id_drinks` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `size` varchar(2) NOT NULL,
  `topping` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL,
  `description` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id_drinks`, `name`, `price`, `size`, `topping`, `image`, `description`) VALUES
(1, 'Olong sữa', 0, '', '', 'olosua.jpg', 'Olong sữa được làm từ trà Olong chất lượng cao Lâm Đồng. Lá trà được ủ kỹ, pha với sữa theo tỉ lệ hoàn hảo. Vị trà đậm, cân bằng giữa đắng nhẹ và ngọt dịu, là sự lựa chọn yêu thích của những người có gu thưởng thức trà.'),
(2, 'Trà Ô Lông Kem Phô Mai', 0, '', '', 'olkemphomai.jpg', 'Olong tứ quý, thạch aiyu, kem phô mai. Đặt trực tiếp qua quán để được giá gốc.'),
(3, 'Olong nhài sữa', 0, '', '', 'olsua.jpg', 'Vị trà đậm đà của Olong sữa, kết hợp với hương hoa nhài dịu nhẹ, mang lại cảm giác thư giãn và nhẹ nhàng.'),
(4, 'Khói B’Lao', 0, '', '', 'olsua.jpg', 'Khói B\'Lao được làm từ trà chất lượng cao vùng B’Lao, Lâm Đồng. Trà sữa có mùi khói rang đặc trưng, vị chát nhẹ, hậu ngọt thanh, không quá đậm, là một lựa chọn tuyệt vời cho những ai muốn khám phá hương vị độc đáo của vùng đất B’Lao.'),
(5, 'Tấm gạo', 0, '', '', 'olsua.jpg', 'Trà sữa tấm gạo mang vị thanh khiết, nhẹ nhàng, với một chút ngọt dịu và thoang thoảng hương thơm của gạo rang.'),
(6, 'Olong hạnh nhân', 0, '', '', 'olosua.jpg', 'Vị trà đậm đà của Olong sữa truyền thống, kết hợp với vị ngọt nhẹ, thêm một chút béo và hương thơm đặc trưng của hạnh nhân.'),
(7, 'Olong sữa dừa', 0, '', '', 'olsua.jpg', 'Oolong sữa dừa có hương vị đậm đà của trà Oolong, kết hợp với sự thanh khiết và béo ngậy của dừa, tạo nên hậu vị dừa nướng nhẹ.'),
(8, '\r\nOlong hạt phỉ', 0, '', '', 'olsua.jpg', 'Trà olong tứ quý, hạt phỉ, sữa. Đặt trực tiếp qua quán để được giá gốc.'),
(9, 'Olong Xanh', 0, '', '', 'olxanh.jpg', 'Trà olong tứ quý, cốm non, lá nếp. Đặt qua quán để được giá gốc'),
(10, 'Nguyên lá ủ', 0, '', '', 'olsua.jpg', 'Hồng trà nguyên lá - đậm vị nguyên bản, sữa. Đặt trực tiếp qua quán để được giá gốc.'),
(11, 'Matcha Okinawa', 0, '', '', 'matcha.jpg', 'Matcha nhật cao cấp, thạch cà phê xay nhuyễn, sữa.\r\n'),
(12, 'Hạnh nhân nguyên lá', 0, '', '', 'olsua.jpg', 'Trà đen nguyên lá, hạnh nhân, sữa. Đặt trực tiếp qua quán để được giá gốc.'),
(13, 'Sen long nhãn', 0, '', '', 'trasenlongnhan.jpg', 'Trà sen kết hợp với vị nhãn, hạt sen, nhãn quả, thạch aiyu. Đặt trực tiếp qua quán để được giá gốc.'),
(14, 'Luckytea', 0, '', '', 'tralucky.jpg', 'Trà kết hợp với thảo mộc, tươi mát cùng hoa quả ngâm, thạch aiyu. Đặt trực tiếp qua quán để được giá gốc.'),
(15, 'Thanh trà phúc bồn tử', 0, '', '', 'traphucbontu.jpg', 'Trà xanh hoa nhài với mứt phúc bồn tử, thạch aiyu, đậm vị trà. Đặt trực tiếp qua quán để được giá gốc.'),
(16, 'Lài đác thơm', 0, '', '', 'tralaidacthom.jpg', 'Trà xanh hoa nhài kết hợp với mứt thơm, thạch aiyu, hạt đác. Đặt trực tiếp qua quán để được giá gốc.'),
(17, 'Vải dầm aiyu', 0, '', '', 'traphucbontu.jpg', 'Trà xanh hoa nhài với mứt vải, thạch aiyu, thơm thanh vị vải. Đặt trực tiếp qua quán để được giá gốc.'),
(18, 'Đào cam dâu', 0, '', '', 'tradaocamdau.jpg', 'Trà kết hợp với vị đào và cam dâu, đào miếng, thạch aiyu.'),
(19, 'Vải lài', 0, '', '', 'travailai.jpg', 'Trà lài hoặc olong với vải, đậm vị trà, trái vải thạch aiyu. Đặt trực tiếp qua quán để được giá gốc.'),
(20, 'Vải sen', 0, '', '', 'travailai.jpg', 'Trà lài hoặc olong với vải, đậm vị trà, trái vải thạch aiyu. Đặt trực tiếp qua quán để được giá gốc.'),
(21, 'Vải olong', 0, '', '', 'travailai.jpg', '\r\nTrà lài hoặc olong với vải, đậm vị trà, trái vải thạch aiyu. Đặt trực tiếp qua quán để được giá gốc.'),
(22, 'Trà xoài machiato', 0, '', '', 'olkemphomai.jpg', 'Lục trà xanh, xoài tứ quý, thạch aiyu, kem phô mai. Đặt trực tiếp qua quán để được giá gốc.'),
(23, 'Olong rang kem phô mai', 0, '', '', 'olrangkemphomai.jpg', '\r\nOlong rang, hạt sen, thạch aiyu, kem phô mai. Đặt trực tiếp qua quán để được giá gốc.'),
(24, 'Gạo sen kem phô mai', 0, '', '', 'olrangkemphomai.jpg', '\r\nTrà sen, hạt sen, kem phô mai. Đặt trực tiếp qua quán để được giá gốc.'),
(25, 'Sữa tươi trân châu đường đen', 0, '', '', 'suatuoiduongden.jpg', '\r\nSữa tươi, trân châu đường đen. Đặt trực tiếp qua quán để được giá gốc.'),
(26, 'Phindi hạnh nhân', 0, '', '', 'phindihanhnhan.jpg', 'Sữa tươi, cà phê, hạnh nhân, thạch cà phê. Đặt trực tiếp qua quán để được giá gốc.'),
(27, 'Trà bí đao sương sáo', 0, '', '', 'trabidao.jpg', 'Trà, bí đao, sương sáo, hạt chia. Đặt trực tiếp qua quán để được giá gốc.'),
(28, 'Sữa dừa sương sáo', 0, '', '', 'suadua.jpg', 'Sữa tươi, cà phê, dừa, sương sáo. Đặt trực tiếp qua quán để được giá gốc.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Category`, `Description`, `Price`, `Image`) VALUES
(1, 'Táo Fuji', 'Táo', 'Táo Fuji thơm ngon, ngọt và mọng nước.', 35000, 'https://product.hstatic.net/1000141988/product/tao_red_fuji_nam_phi_-_1kg__i0008964___3__03bf2336a835437cbb56931980ae0f6d_1024x1024.png'),
(2, 'Táo Gala', 'Táo', 'Táo Gala giòn, ngọt nhẹ, thơm dịu.', 32000, 'https://citifruit.com/uploads/images/tao-gala-7.jpg'),
(3, 'Táo Envy', 'Táo', 'Táo Envy nhập khẩu, ngọt và thơm.', 65000, 'https://ninhco.com/uploads/images/tao-envy-new-zealand.jpg'),
(4, 'Cam Sành', 'Cam', 'Cam sành giàu vitamin C, tốt cho sức khỏe.', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMiqEv11zm_sw6BMJOWn28AAT_WGN0kkLWYg&s'),
(5, 'Cam Cao Phong', 'Cam', 'Cam Cao Phong, vị ngọt, mọng nước.', 40000, 'https://cdnv2.tgdd.vn/mwg-static/common/Common/hjdfskjdfsjk.jpg'),
(6, 'Cam Navel', 'Cam', 'Cam Navel nhập khẩu, hương vị thơm ngon.', 55000, 'https://bizweb.dktcdn.net/thumb/1024x1024/100/527/060/products/cam-vang-navel-4.png?v=1729069228413'),
(7, 'Chuối Laba', 'Chuối', 'Chuối Laba nổi tiếng với hương vị ngọt ngào.', 15000, 'https://newfreshfood.com/datafiles/3/2018-02-27/15197066441543_chuoi-laba-min.jpg'),
(8, 'Chuối Sứ', 'Chuối', 'Chuối Sứ truyền thống, thơm ngon.', 12000, 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/chuoi-su.jpg'),
(9, 'Chuối Cavendish', 'Chuối', 'Chuối Cavendish nhập khẩu, vị ngọt thanh.', 20000, 'https://upload.wikimedia.org/wikipedia/commons/9/9b/Cavendish_Banana_DS.jpg'),
(10, 'Nho Mỹ', 'Nho', 'Nho Mỹ không hạt, vỏ mỏng, vị ngọt thanh.', 50000, 'https://bizweb.dktcdn.net/100/447/072/products/nho-den-nhap-khau-my-tui-1kg-201909250903535677.jpg?v=1684745490807'),
(11, 'Nho Úc', 'Nho', 'Nho Úc xanh, ngọt giòn, không hạt.', 45000, 'https://hoaquafuji.com/storage/app/media/uploaded-files/nho-xanh-khong-hat-uc-1.jpg'),
(12, 'Nho Đen', 'Nho', 'Nho đen không hạt, ngọt đậm đà.', 55000, 'https://luontuoisach.vn/public/files/upload/product/14745398611474360886nho-den-big-citi.jpg'),
(13, 'Dưa Hấu Ruột Đỏ', 'Dưa Hấu', 'Dưa hấu ruột đỏ, vỏ mỏng, ngọt lịm.', 20000, 'https://cdn.tuoitre.vn/thumb_w/480/471584752817336320/2024/7/1/loi-ich-bat-ngo-cua-dua-hau-1719842803235591565431.jpg'),
(14, 'Dưa Hấu Ruột Vàng', 'Dưa Hấu', 'Dưa hấu ruột vàng, thơm ngọt.', 25000, 'https://hoaquafuji.com/storage/app/media/dua-hau-ruot-vang-001.jpg'),
(15, 'Dưa Lưới Nhật', 'Dưa Lưới', 'Dưa lưới Nhật Bản, ngọt thơm đặc trưng.', 75000, 'https://icdn.dantri.com.vn/thumb_w/680/2024/07/31/vai-trieu-dongqua-dua-hau-nhat-nguoi-khong-hao-dua-cung-mua-vai-qua-an-dan-1-20190715071835305-1722443305059.jpg'),
(16, 'Dưa Lê Hàn Quốc', 'Dưa Lê', 'Dưa lê Hàn Quốc, thơm và mát.', 40000, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fthucpham8.muathemewp.com%2Fsan-pham%2Fdua-le-han-quoc%2F&psig=AOvVaw2l2_Z30U7VnuRPs9UaxXSV&ust=1733837034054000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMiR5LbkmooDFQAAAAAdAAAAABAE'),
(17, 'Bơ Sáp', 'Bơ', 'Bơ sáp DakLak, dẻo và béo ngậy.', 80000, 'https://azolaco.com/vnt_upload/product/08_2020/b9_1.jpg'),
(18, 'Bơ Booth', 'Bơ', 'Bơ Booth, cơm dày, thơm béo.', 90000, 'https://caydep.vn/wp-content/uploads/2024/03/giong-bo-booth.jpg'),
(19, 'Xoài Cát Hòa Lộc', 'Xoài', 'Xoài Cát Hòa Lộc, ngọt và thơm.', 60000, 'https://product.hstatic.net/200000157781/product/xoai_cat_2f2a5d8570314f6caec833a06eb4e74e_1024x1024.png'),
(20, 'Xoài Keo', 'Xoài', 'Xoài keo thơm ngon, vị chua ngọt.', 40000, 'https://bizweb.dktcdn.net/100/478/273/products/z6082828237436-5980409ff6a6e13e4443605cf279f7c6.jpg?v=1732930159020'),
(21, 'Ổi Lê', 'Ổi', 'Ổi lê xanh, giòn ngọt tự nhiên.', 20000, 'https://quangtrimart.vn/wp-content/uploads/2024/07/oi-le-dai-loan-10421624520594.jpg'),
(22, 'Ổi Đài Loan', 'Ổi', 'Ổi Đài Loan, to và ngọt.', 25000, 'https://yuthfarm.com/wp-content/uploads/2023/10/ba215794-1bf7-4fb9-94a4-cfcec32ea525-1.jpg'),
(23, 'Dâu Tây Đà Lạt', 'Dâu Tây', 'Dâu tây Đà Lạt tươi ngon.', 80000, 'https://blog.onelife.vn/wp-content/uploads/2024/01/bc3a163d-dau-tay-da-lat-1024x576.png'),
(24, 'Dâu Tây Mỹ', 'Dâu Tây', 'Dâu tây Mỹ nhập khẩu, ngọt thơm.', 150000, 'https://blog.onelife.vn/wp-content/uploads/2024/01/2681147e-dau-tay-my-kingfoodmart-2-1024x576.png'),
(31, 'Dừa Xiêm', 'Dừa', 'Dừa xiêm tươi mát, ngọt nước.', 15000, 'https://duaxiembaconut.com/userfiles/image/Cong-dung-cua-nuoc-Dua-Xiem-3.jpg'),
(32, 'Dừa Sáp', 'Dừa', 'Dừa sáp đặc ruột, thơm béo.', 300000, 'https://dulichtravinh.com.vn/wp-content/uploads/2022/08/8c472f3f43398667df28.jpg'),
(33, 'Táo Xanh Granny Smith', 'Táo', 'Táo xanh Granny Smith giòn, chua nhẹ.', 40000, 'https://cdn.tgdd.vn/Files/2024/07/09/1567806/gioi-thieu-san-pham-tao-xanh-granny-smith-nhap-khau-my-202407091656012873.jpg'),
(34, 'Lê Hàn Quốc', 'Lê', 'Lê Hàn Quốc mọng nước, ngọt thanh.', 50000, 'https://cdn.tgdd.vn/Files/2021/07/21/1369836/trong-mot-trai-le-han-quoc-co-gi-ma-duoc-nhieu-nguoi-ua-chuong-202201171222529441.jpg'),
(35, 'Lê Nam Phi', 'Lê', 'Lê Nam Phi, vị ngọt dịu, thơm mát.', 45000, 'https://lh3.googleusercontent.com/1Dgfic3pxViSGPhZmmE5m7TL6MHP8zVxMbjnfKX5uvKu77rPsxwku0NddXRzY41k6-nRiwCuvibE3HdS84PZueQH4jaOqRUqPeJcpGMNtXQl2bqQCJzwhzIM452Y4d6-k0D-9NqC=s0'),
(36, 'Kiwi Xanh', 'Kiwi', 'Kiwi xanh giàu dinh dưỡng, vị chua ngọt.', 80000, 'https://cdn2.fptshop.com.vn/unsafe/1920x0/filters:quality(100)/2023_12_11_638379350522333123_kiwi-bao-nhieu-calo.jpg'),
(37, 'Kiwi Vàng', 'Kiwi', 'Kiwi vàng nhập khẩu, vị ngọt thanh.', 100000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/800x0/https://cms-prod.s3-sgn09.fptcloud.com/kiwi_vang_co_tac_dung_gi_kiwi_vang_hay_xanh_tot_hon_4_28ed6c0e84.jpg'),
(38, 'Lựu Đỏ', 'Lựu', 'Lựu đỏ Ấn Độ, ngọt mát.', 60000, 'https://cdn.tgdd.vn/2021/12/CookDish/cach-chon-mua-qua-luu-ngon-do-chac-tay-va-mong-nuoc-cuc-don-avt-1200x676.jpg'),
(39, 'Lựu Peru', 'Lựu', 'Lựu Peru nhập khẩu, ngọt dịu.', 85000, 'https://360fruit.vn/uploads/file/360%20fruit%20bai%20viet/luu-do-peru-1.jpg'),
(40, 'Dâu Tằm', 'Dâu', 'Dâu tằm tươi Đà Lạt.', 45000, 'https://dacsandalat.com.vn/wp-content/uploads/2024/06/dau-tam-tuoi-da-lat.jpg'),
(41, 'Mãng Cầu Xiêm', 'Mãng Cầu', 'Mãng cầu xiêm, thơm và ngọt.', 40000, 'https://cdn.tgdd.vn/Files/2019/07/13/1179227/loi-ich-hon-ca-tuyet-voi-cua-mang-cau-xiem-doi-voi-suc-khoe-202201071503281685.jpg'),
(42, 'Na Thái', 'Na', 'Na Thái, ngọt thanh, ít hạt.', 60000, 'https://ngonaz.com/wp-content/uploads/2022/02/cach-u-na-nhanh-chin-1.jpg'),
(43, 'Thanh Long Ruột Đỏ', 'Thanh Long', 'Thanh long ruột đỏ, ngọt lịm.', 30000, 'https://suckhoedoisong.qltns.mediacdn.vn/2015/1-thanhlong-1435825834109-1435888607597.jpg'),
(44, 'Thanh Long Ruột Trắng', 'Thanh Long', 'Thanh long ruột trắng, tươi mát.', 25000, 'https://product.hstatic.net/200000604011/product/42-f5f03b89-6287-4127-9255-5ee35c810e79_14f47bf75bf843b09e62583da827353a.jpg'),
(45, 'Dưa Gang', 'Dưa', 'Dưa gang, vị ngọt nhẹ.', 20000, 'https://kingfruit.net/uploads/file/360%20fruit%20bai%20viet/dua-gang-1.jpg'),
(46, 'Táo Fuji', 'Táo', 'Táo Fuji thơm ngon, ngọt và mọng nước.', 35000, 'https://product.hstatic.net/1000141988/product/tao_red_fuji_nam_phi_-_1kg__i0008964___3__03bf2336a835437cbb56931980ae0f6d_1024x1024.png'),
(47, 'Táo Gala', 'Táo', 'Táo Gala giòn, ngọt nhẹ, thơm dịu.', 32000, 'https://citifruit.com/uploads/images/tao-gala-7.jpg'),
(48, 'Táo Envy', 'Táo', 'Táo Envy nhập khẩu, ngọt và thơm.', 65000, 'https://ninhco.com/uploads/images/tao-envy-new-zealand.jpg'),
(49, 'Cam Sành', 'Cam', 'Cam sành giàu vitamin C, tốt cho sức khỏe.', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMiqEv11zm_sw6BMJOWn28AAT_WGN0kkLWYg&s'),
(50, 'Cam Cao Phong', 'Cam', 'Cam Cao Phong, vị ngọt, mọng nước.', 40000, 'https://cdnv2.tgdd.vn/mwg-static/common/Common/hjdfskjdfsjk.jpg'),
(51, 'Cam Navel', 'Cam', 'Cam Navel nhập khẩu, hương vị thơm ngon.', 55000, 'https://bizweb.dktcdn.net/thumb/1024x1024/100/527/060/products/cam-vang-navel-4.png?v=1729069228413'),
(52, 'Chuối Laba', 'Chuối', 'Chuối Laba nổi tiếng với hương vị ngọt ngào.', 15000, 'https://newfreshfood.com/datafiles/3/2018-02-27/15197066441543_chuoi-laba-min.jpg'),
(53, 'Chuối Sứ', 'Chuối', 'Chuối Sứ truyền thống, thơm ngon.', 12000, 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/chuoi-su.jpg'),
(54, 'Chuối Cavendish', 'Chuối', 'Chuối Cavendish nhập khẩu, vị ngọt thanh.', 20000, 'https://upload.wikimedia.org/wikipedia/commons/9/9b/Cavendish_Banana_DS.jpg'),
(55, 'Nho Mỹ', 'Nho', 'Nho Mỹ không hạt, vỏ mỏng, vị ngọt thanh.', 50000, 'https://bizweb.dktcdn.net/100/447/072/products/nho-den-nhap-khau-my-tui-1kg-201909250903535677.jpg?v=1684745490807'),
(56, 'Nho Úc', 'Nho', 'Nho Úc xanh, ngọt giòn, không hạt.', 45000, 'https://hoaquafuji.com/storage/app/media/uploaded-files/nho-xanh-khong-hat-uc-1.jpg'),
(57, 'Nho Đen', 'Nho', 'Nho đen không hạt, ngọt đậm đà.', 55000, 'https://luontuoisach.vn/public/files/upload/product/14745398611474360886nho-den-big-citi.jpg'),
(58, 'Dưa Hấu Ruột Đỏ', 'Dưa Hấu', 'Dưa hấu ruột đỏ, vỏ mỏng, ngọt lịm.', 20000, 'https://cdn.tuoitre.vn/thumb_w/480/471584752817336320/2024/7/1/loi-ich-bat-ngo-cua-dua-hau-1719842803235591565431.jpg'),
(59, 'Dưa Hấu Ruột Vàng', 'Dưa Hấu', 'Dưa hấu ruột vàng, thơm ngọt.', 25000, 'https://hoaquafuji.com/storage/app/media/dua-hau-ruot-vang-001.jpg'),
(60, 'Dưa Lưới Nhật', 'Dưa Lưới', 'Dưa lưới Nhật Bản, ngọt thơm đặc trưng.', 75000, 'https://icdn.dantri.com.vn/thumb_w/680/2024/07/31/vai-trieu-dongqua-dua-hau-nhat-nguoi-khong-hao-dua-cung-mua-vai-qua-an-dan-1-20190715071835305-1722443305059.jpg'),
(61, 'Dưa Lê Hàn Quốc', 'Dưa Lê', 'Dưa lê Hàn Quốc, thơm và mát.', 40000, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fthucpham8.muathemewp.com%2Fsan-pham%2Fdua-le-han-quoc%2F&psig=AOvVaw2l2_Z30U7VnuRPs9UaxXSV&ust=1733837034054000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMiR5LbkmooDFQAAAAAdAAAAABAE'),
(62, 'Bơ Sáp', 'Bơ', 'Bơ sáp DakLak, dẻo và béo ngậy.', 80000, 'https://azolaco.com/vnt_upload/product/08_2020/b9_1.jpg'),
(63, 'Bơ Booth', 'Bơ', 'Bơ Booth, cơm dày, thơm béo.', 90000, 'https://caydep.vn/wp-content/uploads/2024/03/giong-bo-booth.jpg'),
(64, 'Xoài Cát Hòa Lộc', 'Xoài', 'Xoài Cát Hòa Lộc, ngọt và thơm.', 60000, 'https://product.hstatic.net/200000157781/product/xoai_cat_2f2a5d8570314f6caec833a06eb4e74e_1024x1024.png'),
(65, 'Xoài Keo', 'Xoài', 'Xoài keo thơm ngon, vị chua ngọt.', 40000, 'https://bizweb.dktcdn.net/100/478/273/products/z6082828237436-5980409ff6a6e13e4443605cf279f7c6.jpg?v=1732930159020'),
(66, 'Ổi Lê', 'Ổi', 'Ổi lê xanh, giòn ngọt tự nhiên.', 20000, 'https://quangtrimart.vn/wp-content/uploads/2024/07/oi-le-dai-loan-10421624520594.jpg'),
(67, 'Ổi Đài Loan', 'Ổi', 'Ổi Đài Loan, to và ngọt.', 25000, 'https://yuthfarm.com/wp-content/uploads/2023/10/ba215794-1bf7-4fb9-94a4-cfcec32ea525-1.jpg'),
(68, 'Dâu Tây Đà Lạt', 'Dâu Tây', 'Dâu tây Đà Lạt tươi ngon.', 80000, 'https://blog.onelife.vn/wp-content/uploads/2024/01/bc3a163d-dau-tay-da-lat-1024x576.png'),
(69, 'Dâu Tây Mỹ', 'Dâu Tây', 'Dâu tây Mỹ nhập khẩu, ngọt thơm.', 150000, 'https://blog.onelife.vn/wp-content/uploads/2024/01/2681147e-dau-tay-my-kingfoodmart-2-1024x576.png'),
(70, 'Chôm Chôm Thái', 'Chôm Chôm', 'Chôm chôm Thái, ngọt mọng nước.', 35000, 'https://bizweb.dktcdn.net/100/482/702/products/2-jpeg-3fcd2bf7-a7e5-4a16-abe7-c8542c834834.jpg?v=1692803479113'),
(71, 'Mận Hậu', 'Mận', 'Mận hậu Sơn La, giòn và ngọt.', 45000, 'https://images.baodantoc.vn/uploads/2022/Th%C3%A1ng%208/Ng%C3%A0y%202/Thanh/man-chin.jpg'),
(72, 'Mít Thái', 'Mít', 'Mít Thái dai, thơm ngọt.', 30000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeFpZfofC8lJhV14mDhlgNM05f5OanMKRxeLr2KLfo6WlV6sJcscXAV_BIS9IhnSObWT8&usqp=CAU'),
(73, 'Chôm Chôm Thái', 'Chôm Chôm', 'Chôm chôm Thái, ngọt mọng nước.', 35000, 'https://bizweb.dktcdn.net/100/482/702/products/2-jpeg-3fcd2bf7-a7e5-4a16-abe7-c8542c834834.jpg?v=1692803479113'),
(74, 'Chôm Chôm Thái', 'Chôm Chôm', 'Chôm chôm Thái, ngọt mọng nước.', 35000, 'https://bizweb.dktcdn.net/100/482/702/products/2-jpeg-3fcd2bf7-a7e5-4a16-abe7-c8542c834834.jpg?v=1692803479113'),
(75, 'Sầu riêng Sóc Trăng', 'Sầu riêng', 'rất ngon', 100000, 'zxczc');

-- --------------------------------------------------------

--
-- Table structure for table `topping`
--

CREATE TABLE `topping` (
  `id_toppings` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topping`
--

INSERT INTO `topping` (`id_toppings`, `name`, `price`, `image`) VALUES
(1, 'Phô Mai Viên', 10000, 'phomaivien.jpg'),
(2, 'Phô Mai Tươi', 5000, 'phomaituoi.jpg'),
(3, 'Trân Châu Olong', 5000, 'tcolong.jpg'),
(4, 'Trân Châu Đen', 5000, 'tcden.jpg'),
(5, 'Trân Châu Giòn', 5000, 'tcgion.jpg'),
(6, 'Thạch Cà Phê', 5000, 'thachcafe.jpg'),
(7, 'Sương Sáo', 3000, 'suongsao.jpg'),
(8, 'Thạch Aiyu', 3000, 'aiyu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `phone`, `password`, `email`, `address`) VALUES
(1, 'Nguyễn Vũ Nguyên', '0382662153', '123', '9079@gm.uit.edu.vn', '50/27/4 nguyễn quý yêm'),
(2, 'Nguyen Phu Nhat Phuoc', '113', '123', '111@gm.uit.edu.vn', '50/27/4 zczc'),
(3, 'Nguyen van A', '0318312090', 'aloalo', 'alo@gmail.com', 'Ha Noi'),
(4, 'Nguyen Phu Nhat Phuoc', '113', 'aloalo', 'alo@gmail.com', 'Ha Noi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id_drinks`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `topping`
--
ALTER TABLE `topping`
  ADD PRIMARY KEY (`id_toppings`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id_drinks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `topping`
--
ALTER TABLE `topping`
  MODIFY `id_toppings` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
