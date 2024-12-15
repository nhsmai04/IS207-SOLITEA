-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 08:31 AM
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
-- Dumping data for table `drinks`
--
-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Id`, `Name`, `Category`, `Type`, `Description`, `Price`, `Image`) VALUES
(1, 'Táo Fuji', 'Táo', 'Quả', 'Táo Fuji thơm ngon, ngọt và mọng nước.', 35000, 'https://product.hstatic.net/1000141988/product/tao_red_fuji_nam_phi_-_1kg__i0008964___3__03bf2336a835437cbb56931980ae0f6d_1024x1024.png'),
(2, 'Táo Gala', 'Táo', 'Quả', 'Táo Gala giòn, ngọt nhẹ, thơm dịu.', 32000, 'https://citifruit.com/uploads/images/tao-gala-7.jpg'),
(3, 'Táo Envy', 'Táo', 'Quả', 'Táo Envy nhập khẩu, ngọt và thơm.', 65000, 'https://ninhco.com/uploads/images/tao-envy-new-zealand.jpg'),
(4, 'Cam Sành', 'Cam', 'Quả', 'Cam sành giàu vitamin C, tốt cho sức khỏe.', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMiqEv11zm_sw6BMJOWn28AAT_WGN0kkLWYg&s'),
(5, 'Cam Cao Phong', 'Cam', 'Quả', 'Cam Cao Phong, vị ngọt, mọng nước.', 40000, 'https://cdnv2.tgdd.vn/mwg-static/common/Common/hjdfskjdfsjk.jpg'),
(6, 'Cam Navel', 'Cam', 'Quả', 'Cam Navel nhập khẩu, hương vị thơm ngon.', 55000, 'https://bizweb.dktcdn.net/thumb/1024x1024/100/527/060/products/cam-vang-navel-4.png?v=1729069228413'),
(7, 'Chuối Laba', 'Chuối', 'Quả', 'Chuối Laba nổi tiếng với hương vị ngọt ngào.', 15000, 'https://newfreshfood.com/datafiles/3/2018-02-27/15197066441543_chuoi-laba-min.jpg'),
(8, 'Chuối Sứ', 'Chuối', 'Quả', 'Chuối Sứ truyền thống, thơm ngon.', 12000, 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/chuoi-su.jpg'),
(9, 'Chuối Cavendish', 'Chuối', 'Quả', 'Chuối Cavendish nhập khẩu, vị ngọt thanh.', 20000, 'https://upload.wikimedia.org/wikipedia/commons/9/9b/Cavendish_Banana_DS.jpg'),
(10, 'Nho Mỹ', 'Nho', 'Quả', 'Nho Mỹ không hạt, vỏ mỏng, vị ngọt thanh.', 50000, 'https://bizweb.dktcdn.net/100/447/072/products/nho-den-nhap-khau-my-tui-1kg-201909250903535677.jpg?v=1684745490807'),
(11, 'Nho Úc', 'Nho', 'Quả', 'Nho Úc xanh, ngọt giòn, không hạt.', 45000, 'https://hoaquafuji.com/storage/app/media/uploaded-files/nho-xanh-khong-hat-uc-1.jpg'),
(12, 'Nho Đen', 'Nho', 'Quả', 'Nho đen không hạt, ngọt đậm đà.', 55000, 'https://luontuoisach.vn/public/files/upload/product/14745398611474360886nho-den-big-citi.jpg'),
(13, 'Dưa Hấu Ruột Đỏ', 'Dưa Hấu', 'Quả', 'Dưa hấu ruột đỏ, vỏ mỏng, ngọt lịm.', 20000, 'https://cdn.tuoitre.vn/thumb_w/480/471584752817336320/2024/7/1/loi-ich-bat-ngo-cua-dua-hau-1719842803235591565431.jpg'),
(14, 'Dưa Hấu Ruột Vàng', 'Dưa Hấu', 'Quả', 'Dưa hấu ruột vàng, thơm ngọt.', 25000, 'https://hoaquafuji.com/storage/app/media/dua-hau-ruot-vang-001.jpg'),
(15, 'Dưa Lưới Nhật', 'Dưa Lưới', 'Quả', 'Dưa lưới Nhật Bản, ngọt thơm đặc trưng.', 75000, 'https://icdn.dantri.com.vn/thumb_w/680/2024/07/31/vai-trieu-dongqua-dua-hau-nhat-nguoi-khong-hao-dua-cung-mua-vai-qua-an-dan-1-20190715071835305-1722443305059.jpg'),
(16, 'Dưa Lê Hàn Quốc', 'Dưa Lê', 'Quả', 'Dưa lê Hàn Quốc, thơm và mát.', 40000, 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fthucpham8.muathemewp.com%2Fsan-pham%2Fdua-le-han-quoc%2F&psig=AOvVaw2l2_Z30U7VnuRPs9UaxXSV&ust=1733837034054000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCMiR5LbkmooDFQAAAAAdAAAAABAE'),
(17, 'Bơ Sáp', 'Bơ', 'Quả', 'Bơ sáp DakLak, dẻo và béo ngậy.', 80000, 'https://azolaco.com/vnt_upload/product/08_2020/b9_1.jpg'),
(18, 'Bơ Booth', 'Bơ', 'Quả', 'Bơ Booth, cơm dày, thơm béo.', 90000, 'https://caydep.vn/wp-content/uploads/2024/03/giong-bo-booth.jpg'),
(19, 'Xoài Cát Hòa Lộc', 'Xoài', 'Quả', 'Xoài Cát Hòa Lộc, ngọt và thơm.', 60000, 'https://product.hstatic.net/200000157781/product/xoai_cat_2f2a5d8570314f6caec833a06eb4e74e_1024x1024.png'),
(20, 'Xoài Keo', 'Xoài', 'Quả', 'Xoài keo thơm ngon, vị chua ngọt.', 40000, 'https://bizweb.dktcdn.net/100/478/273/products/z6082828237436-5980409ff6a6e13e4443605cf279f7c6.jpg?v=1732930159020'),
(21, 'Ổi Lê', 'Ổi', 'Quả', 'Ổi lê xanh, giòn ngọt tự nhiên.', 20000, 'https://quangtrimart.vn/wp-content/uploads/2024/07/oi-le-dai-loan-10421624520594.jpg'),
(22, 'Ổi Đài Loan', 'Ổi', 'Quả', 'Ổi Đài Loan, to và ngọt.', 25000, 'https://yuthfarm.com/wp-content/uploads/2023/10/ba215794-1bf7-4fb9-94a4-cfcec32ea525-1.jpg'),
(23, 'Dâu Tây Đà Lạt', 'Dâu Tây', 'Quả', 'Dâu tây Đà Lạt tươi ngon.', 80000, 'https://blog.onelife.vn/wp-content/uploads/2024/01/bc3a163d-dau-tay-da-lat-1024x576.png'),
(24, 'Dâu Tây Mỹ', 'Dâu Tây', 'Quả', 'Dâu tây Mỹ nhập khẩu, ngọt thơm.', 150000, 'https://blog.onelife.vn/wp-content/uploads/2024/01/2681147e-dau-tay-my-kingfoodmart-2-1024x576.png'),
(25, 'Chôm Chôm Thái', 'Chôm Chôm', 'Quả', 'Chôm chôm Thái, ngọt mọng nước.', 35000, 'https://bizweb.dktcdn.net/100/482/702/products/2-jpeg-3fcd2bf7-a7e5-4a16-abe7-c8542c834834.jpg?v=1692803479113'),
(26, 'Mận Hậu', 'Mận', 'Quả', 'Mận hậu Sơn La, giòn và ngọt.', 45000, 'https://images.baodantoc.vn/uploads/2022/Th%C3%A1ng%208/Ng%C3%A0y%202/Thanh/man-chin.jpg'),
(27, 'Mít Thái', 'Mít', 'Quả', 'Mít Thái dai, thơm ngọt.', 30000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeFpZfofC8lJhV14mDhlgNM05f5OanMKRxeLr2KLfo6WlV6sJcscXAV_BIS9IhnSObWT8&usqp=CAU'),
(28, 'Măng Cụt', 'Măng Cụt', 'Quả', 'Măng cụt thơm ngon, ngọt thanh.', 80000, 'https://cdn.tgdd.vn/Files/2019/10/09/1206728/mang-cut-co-tac-dung-gi-an-nhieu-co-tot-khong--12-760x367.jpg'),
(29, 'Sầu Riêng Ri6', 'Sầu Riêng', 'Quả', 'Sầu riêng Ri6, béo và thơm.', 120000, 'https://cdn2.fptshop.com.vn/unsafe/1920x0/filters:quality(100)/2023_10_21_638335049806634930_sau-rieng-ri6-0.jpg'),
(30, 'Sầu Riêng Monthong', 'Sầu Riêng', 'Quả', 'Sầu riêng Monthong, hương vị đặc biệt.', 150000, 'https://lh5.googleusercontent.com/proxy/f0jLtU6TzUJMkh4cLKXtBvjGijcRBhcqNOj1zAcY3AW0U-Hnj9qQVqLO1jm-u3QRA6ZIdFxgTJHsS4GHd3KjWh5wUvJTH6jdsgIFQYFsPnZG4bsotcJyTqD5R6qMjngoAl_3EV8U_rDjlbrNd8l_6T5H'),
(31, 'Dừa Xiêm', 'Dừa', 'Quả', 'Dừa xiêm tươi mát, ngọt nước.', 15000, 'https://duaxiembaconut.com/userfiles/image/Cong-dung-cua-nuoc-Dua-Xiem-3.jpg'),
(32, 'Dừa Sáp', 'Dừa', 'Quả', 'Dừa sáp đặc ruột, thơm béo.', 300000, 'https://dulichtravinh.com.vn/wp-content/uploads/2022/08/8c472f3f43398667df28.jpg'),
(33, 'Táo Xanh Granny Smith', 'Táo', 'Quả', 'Táo xanh Granny Smith giòn, chua nhẹ.', 40000, 'https://cdn.tgdd.vn/Files/2024/07/09/1567806/gioi-thieu-san-pham-tao-xanh-granny-smith-nhap-khau-my-202407091656012873.jpg'),
(34, 'Lê Hàn Quốc', 'Lê', 'Quả', 'Lê Hàn Quốc mọng nước, ngọt thanh.', 50000, 'https://cdn.tgdd.vn/Files/2021/07/21/1369836/trong-mot-trai-le-han-quoc-co-gi-ma-duoc-nhieu-nguoi-ua-chuong-202201171222529441.jpg'),
(35, 'Lê Nam Phi', 'Lê', 'Quả', 'Lê Nam Phi, vị ngọt dịu, thơm mát.', 45000, 'https://lh3.googleusercontent.com/1Dgfic3pxViSGPhZmmE5m7TL6MHP8zVxMbjnfKX5uvKu77rPsxwku0NddXRzY41k6-nRiwCuvibE3HdS84PZueQH4jaOqRUqPeJcpGMNtXQl2bqQCJzwhzIM452Y4d6-k0D-9NqC=s0'),
(36, 'Kiwi Xanh', 'Kiwi', 'Quả', 'Kiwi xanh giàu dinh dưỡng, vị chua ngọt.', 80000, 'https://cdn2.fptshop.com.vn/unsafe/1920x0/filters:quality(100)/2023_12_11_638379350522333123_kiwi-bao-nhieu-calo.jpg'),
(37, 'Kiwi Vàng', 'Kiwi', 'Quả', 'Kiwi vàng nhập khẩu, vị ngọt thanh.', 100000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/800x0/https://cms-prod.s3-sgn09.fptcloud.com/kiwi_vang_co_tac_dung_gi_kiwi_vang_hay_xanh_tot_hon_4_28ed6c0e84.jpg'),
(38, 'Lựu Đỏ', 'Lựu', 'Quả', 'Lựu đỏ Ấn Độ, ngọt mát.', 60000, 'https://cdn.tgdd.vn/2021/12/CookDish/cach-chon-mua-qua-luu-ngon-do-chac-tay-va-mong-nuoc-cuc-don-avt-1200x676.jpg'),
(39, 'Lựu Peru', 'Lựu', 'Quả', 'Lựu Peru nhập khẩu, ngọt dịu.', 85000, 'https://360fruit.vn/uploads/file/360%20fruit%20bai%20viet/luu-do-peru-1.jpg'),
(40, 'Dâu Tằm', 'Dâu', 'Quả', 'Dâu tằm tươi Đà Lạt.', 45000, 'https://dacsandalat.com.vn/wp-content/uploads/2024/06/dau-tam-tuoi-da-lat.jpg'),
(41, 'Mãng Cầu Xiêm', 'Mãng Cầu', 'Quả', 'Mãng cầu xiêm, thơm và ngọt.', 40000, 'https://cdn.tgdd.vn/Files/2019/07/13/1179227/loi-ich-hon-ca-tuyet-voi-cua-mang-cau-xiem-doi-voi-suc-khoe-202201071503281685.jpg'),
(42, 'Na Thái', 'Na', 'Quả', 'Na Thái, ngọt thanh, ít hạt.', 60000, 'https://ngonaz.com/wp-content/uploads/2022/02/cach-u-na-nhanh-chin-1.jpg'),
(43, 'Thanh Long Ruột Đỏ', 'Thanh Long', 'Quả', 'Thanh long ruột đỏ, ngọt lịm.', 30000, 'https://suckhoedoisong.qltns.mediacdn.vn/2015/1-thanhlong-1435825834109-1435888607597.jpg'),
(44, 'Thanh Long Ruột Trắng', 'Thanh Long', 'Quả', 'Thanh long ruột trắng, tươi mát.', 25000, 'https://product.hstatic.net/200000604011/product/42-f5f03b89-6287-4127-9255-5ee35c810e79_14f47bf75bf843b09e62583da827353a.jpg'),
(45, 'Dưa Gang', 'Dưa', 'Quả', 'Dưa gang, vị ngọt nhẹ.', 20000, 'https://kingfruit.net/uploads/file/360%20fruit%20bai%20viet/dua-gang-1.jpg'),
(46, 'Cải Bó Xôi', 'Rau Lá', 'Rau', 'Giàu vitamin A, C, tốt cho tiêu hóa và miễn dịch.', 25000, 'https://hongngochospital.vn/bai-viet/update/cai-bo-xoi.jpg'),
(47, 'Rau Muống', 'Rau Lá', 'Rau', 'Giòn, giàu sắt, xào, luộc, nấu canh đều ngon.', 15000, 'https://cdn.tgdd.vn/Files/2019/07/10/1178706/phau-thuat-xong-co-nen-an-rau-muong-khong-rau-muong-co-gay-nen-seo-loi-202201151207515237.jpg'),
(48, 'Xà Lách', 'Rau Lá', 'Rau', 'Giàu nước, chất xơ, thích hợp làm salad.', 20000, 'https://www.cleanipedia.com/images/5iwkm8ckyw6v/6fcJ3CHTOLA35rCtQEQixF/fb1c276fe0c96d6922838248949b96a4/eGEtbGFjaC5qcGVn/600w/rau-di%E1%BA%BFp-c%C3%A1-%C4%91%E1%BA%B7t-trong-gi%E1%BB%8F-m%C3%A2y%2C-n%E1%BB%81n-tr%E1%BA%AFng..jpg'),
(49, 'Cải Ngọt', 'Rau Lá', 'Rau', 'Rau mềm, vị ngọt tự nhiên, bổ sung vitamin.', 18000, 'https://trade.vinhlong.gov.vn/chovinhlong/storage/2022/27-f102291-rau-muong-3962a35b44254dcda56c59ebc01f7594-large-1594437180-800x800.jpg'),
(50, 'Bông Cải Xanh', 'Rau Củ', 'Rau', 'Vitamin C cao, giữ giòn ngon khi xào, luộc.', 35000, 'https://www.vinmec.com/static/uploads/20190614_114641_156500_sup_lo_max_1800x1800_jpg_19a9257e3c.jpg'),
(51, 'Cà Rốt', 'Rau Củ', 'Rau', 'Vitamin A dồi dào, tốt cho mắt, làm nước ép.', 20000, 'https://vov.vn/sites/default/files/styles/large/public/2024-03/ca-rot-thumb-1200x675.jpeg'),
(52, 'Khoai Tây', 'Rau Củ', 'Rau', 'Giàu tinh bột, dùng chiên, hầm, nghiền.', 25000, 'https://www.vinmec.com/static/uploads/20200418_145937_369667_khoai_tay_max_1800x1800_jpg_a13bcdfa70.jpg'),
(53, 'Bí Đỏ', 'Rau Củ', 'Rau', 'Ngọt, giàu beta-carotene, tốt cho thị lực.', 30000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGG4bCMFXjyvCM-RGdF-LIR56cmtaqwrOkFg&s'),
(54, 'Rau Dền', 'Rau Lá', 'Rau', 'Rau mềm, ngọt, giúp thanh nhiệt.', 15000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSluEVF5cafin6045AHz75qBLew0wbN1276YT7vcxF17C9Ihe-SUOq-9yv7GJV9cN6QHUc&usqp=CAU'),
(55, 'Cải Thảo', 'Rau Lá', 'Rau', 'Dễ nấu, làm lẩu, xào, làm kim chi.', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdP_QA6EqjI3hTKI4lEtm4RwHxP8pqVpOXfw&s'),
(56, 'Su Su', 'Rau Củ', 'Rau', 'Rau giòn, xào tỏi, luộc đều ngon.', 18000, 'https://media.vneconomy.vn/w900/images/upload/2021/04/21/eba06893-b6fa-419c-a221-7c9a09121aca.jpg'),
(57, 'Rau Ngót', 'Rau Lá', 'Rau', 'Ngọt, giàu vitamin, nấu canh bổ máu.', 17000, 'https://image.tienphong.vn/w890/Uploaded/2024/rkznae/2020_05_12/rau_ngot_1565079659561185136361_CXHP.jpg'),
(58, 'Bí Xanh', 'Rau Củ', 'Rau', 'Ngọt mát, tốt cho da, nấu canh hoặc hấp.', 20000, 'https://cdn.tgdd.vn/2022/07/CookDish/cach-chon-bi-dao-ngon-va-cach-bao-quan-bi-dao-tuoi-ngon-lau-avt-1200x676-1.jpg'),
(59, 'Đậu Cove', 'Rau Củ', 'Rau', 'Giòn, giàu xơ, giữ độ ngon khi xào.', 22000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa2_dKpx3ZW2xeaQWYN6IlNUQgizIQKiC1bg&s'),
(60, 'Củ Dền', 'Rau Củ', 'Rau', 'Nhiều sắt, thường làm nước ép, nấu canh.', 25000, 'https://www.vinmec.com/static/uploads/20210519_081753_529664_cho_be_an_rau_cu_de_max_1800x1800_jpg_e77bfe6a3d.jpg'),
(61, 'Hành Lá', 'Rau Gia Vị', 'Rau', 'Gia vị thơm, thêm hương vị cho món ăn.', 10000, 'https://www.vinmec.com/static/uploads/20221125_120528_623413_hanh_la_ky_gi_1_max_1800x1800_jpg_ff713f6b18.jpg'),
(62, 'Ngò Rí', 'Rau Gia Vị', 'Rau', 'Gia vị phổ biến, làm tăng hương vị món ăn.', 12000, 'https://trungtamthuocdantoc.com/wp-content/uploads/2023/06/rau-ngo-ri-11.jpg'),
(63, 'Măng Tây', 'Rau Củ', 'Rau', 'Giàu dinh dưỡng, dùng xào hoặc hấp.', 45000, 'https://beptruong.edu.vn/wp-content/uploads/2020/10/mang-tay-la-gi.jpg'),
(64, 'Cà Chua', 'Rau Quả', 'Rau', 'Vitamin C cao, làm nước sốt hoặc ăn sống.', 20000, 'https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2021/9/25/tac-dung-cua-ca-chua-doi-voi-suc-khoe-1-1632310636-831-width640height427-1632567723926-16325677242441321628137.jpg'),
(65, 'Ớt Chuông', 'Rau Quả', 'Rau', 'Chất chống oxy hóa, dùng xào hoặc ăn sống.', 30000, 'https://media-cdn-v2.laodong.vn/storage/newsportal/2024/7/24/1371106/Loi-Ich-Cua-Ot-Chuon-01.jpg'),
(66, 'Rau Diếp Cá', 'Rau Lá', 'Rau', 'Mát, kháng viêm, ăn sống hoặc làm nước ép.', 20000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO2o8-865SLab0a8Kc7h_kRwKfxiuh4kIQOQ&s'),
(67, 'Rau Má', 'Rau Lá', 'Rau', 'Thích hợp làm nước ép, giúp thanh nhiệt.', 18000, 'https://hc.com.vn/i/ecommerce/media/ck3230471-cach-lam-nuoc-ep-rau-ma-2.jpg'),
(68, 'Đậu Bắp', 'Rau Củ', 'Rau', 'Giàu dinh dưỡng, thích hợp nướng, xào, hấp.', 22000, 'https://images2.thanhnien.vn/528068263637045248/2023/5/11/3-dau-bap-shutterstock-1683781310622182487488.jpg'),
(69, 'Rau Đay', 'Rau Lá', 'Rau', 'Rau mềm, thích hợp nấu canh thanh mát.', 15000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/800x0/filters:quality(95)/https://cms-prod.s3-sgn09.fptcloud.com/rau_day_co_tac_dung_gi_top_8_loi_ich_tuyet_voi_cua_rau_day_3_05ed96aea1.jpg'),
(70, 'Rau Lang', 'Rau Lá', 'Rau', 'Thanh nhiệt, luộc, xào, dễ chế biến.', 16000, 'https://sieuthicattuong.vn/wp-content/uploads/2023/09/3-383.webp'),
(71, 'Lá Lốt', 'Rau Gia Vị', 'Rau', 'Thơm, làm gia vị hoặc cuốn thịt nướng.', 14000, 'https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2023/3/27/1-16798900302601340065119.jpg'),
(72, 'Mồng Tơi', 'Rau Lá', 'Rau', 'Mát, giàu chất nhờn, thích hợp nấu canh.', 18000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/https://cms-prod.s3-sgn09.fptcloud.com/m2_2346_1659367476_bf1342564b.jpg'),
(73, 'Bông Cải Trắng', 'Rau Củ', 'Rau', 'Giòn, giàu chất xơ, thích hợp luộc, hấp.', 35000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/800x0/https://cms-prod.s3-sgn09.fptcloud.com/bong_cai_trang_co_tac_dung_gi_doi_voi_suc_khoe_1_ea7dfbebb2.jpg'),
(74, 'Rau Răm', 'Rau Gia Vị', 'Rau', 'Tăng hương vị cho món ăn, thường ăn sống.', 10000, 'https://vcdn1-suckhoe.vnecdn.net/2022/05/25/1a-1653469641-2874-1653469681.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=RnM7mSwm3M8FYip8b9RPDw'),
(75, 'Tía Tô', 'Rau Gia Vị', 'Rau', 'Thơm, dùng nấu cháo hoặc ăn sống.', 12000, 'https://bizweb.dktcdn.net/thumb/1024x1024/100/365/460/products/84836742-2470724243190019-6966038991032287232-n-jpeg.jpg?v=1627439415830'),
(76, 'Cải Cúc', 'Rau Lá', 'Rau', 'Thích hợp nấu lẩu, giúp thanh nhiệt.', 15000, 'https://cdn.tgdd.vn/Files/2020/12/05/1311648/cai-cuc-la-gi-nhung-cong-dung-tuyet-voi-cua-cai-cuc-202206041228090077.jpg'),
(77, 'Rau Chùm Ngây', 'Rau Lá', 'Rau', 'Giàu canxi, thích hợp xào, nấu canh.', 45000, 'https://cdn.tgdd.vn/Files/2020/05/04/1253526/rau-chum-ngay-co-loi-ich-gi-voi-suc-khoe-nhung-ai-khong-nen-su-dung-rau-chum-ngay-202005050005330078.jpg'),
(78, 'Rau Bạc Hà', 'Rau Gia Vị', 'Rau', 'Giúp thanh nhiệt, thường ăn kèm món phở.', 20000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx_Psa1u7UVjW6oC-SvjkquOMM6BPrRS9LIA&s'),
(79, 'Rau Cần Tây', 'Rau Lá', 'Rau', 'Thích hợp xào thịt hoặc ép nước.', 25000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/https://cms-prod.s3-sgn09.fptcloud.com/a_ee693e28fb.png'),
(80, 'Ngò Gai', 'Rau Gia Vị', 'Rau', 'Lá thơm, tăng hương vị cho món ăn.', 10000, 'https://img.ykhoadiamond.com/Uploads/Content/25012024/3ad3a7af-403b-4c12-b176-a8f08f052194.jpg'),
(81, 'Rau Dền Đỏ', 'Rau Lá', 'Rau', 'Rau mềm, ngọt, thường dùng nấu canh.', 16000, 'https://static.kinhtedothi.vn/w960/images/upload/2023/03/31/rau-den-do-2.jpg'),
(82, 'Su Hào', 'Rau Củ', 'Rau', 'Ngọt, thích hợp xào, luộc, làm dưa chua.', 22000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlZXQUW9BVDcTJwEHtYScm_ViQrr4g7mKyFA&s'),
(83, 'Hẹ', 'Rau Gia Vị', 'Rau', 'Tăng hương vị cho món ăn, thường nấu canh.', 15000, 'https://login.medlatec.vn//ImagePath/images/20230425/20230425_La-he-cung-cap-cho-co-the-chat-chong-oxy-hoa-giup-phong-ngua-ung-thu.jpg'),
(84, 'Chôm Chôm Việt nam siu ngon', 'Chôm Chôm', 'Qủa', 'rất ngonnnnnnnnnn', 35000, 'zxczc');

-- --------------------------------------------------------

--
-- Table structure for table `topping`
-- 
--
-- Dumping data for table `topping`
--
 
-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(400) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `phone`, `password`, `email`, `address`) VALUES
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
 
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `topping`
--
 
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
 
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `topping`
--
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
