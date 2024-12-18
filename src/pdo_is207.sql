-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3307
-- Thời gian đã tạo: Th12 17, 2024 lúc 01:53 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pdo_is207`
--
use pdo_is207;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'nguyendeptrai', 'alo'),
(2, 'undeptrai', 'bc6f0aa94f722407f66281abd0f4027c'),
(3, 'nhsmai', '123'),
(5, 'nhsmai04', '123123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `created_at`) VALUES
(8, 'Ánh', 'nguyenthingocanhcrazy@gmail.com', 'tôi không yêu hmf', '2024-12-16 04:57:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `total_price` int NOT NULL,
  `status` varchar(50) DEFAULT 'Đã đặt hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Detail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Id`, `Name`, `Category`, `Type`, `Description`, `Price`, `Image`, `Detail`) VALUES
(1, 'Táo Fuji', 'Táo', 'Quả', 'Táo Fuji thơm ngon, ngọt và mọng nước.', 35000, 'https://product.hstatic.net/1000141988/product/tao_red_fuji_nam_phi_-_1kg__i0008964___3__03bf2336a835437cbb56931980ae0f6d_1024x1024.png', 'Táo Fuji có màu đỏ tươi đẹp mắt và kích thước lớn. Vị ngọt đậm, giòn và mọng nước, thích hợp cho những ai yêu thích sự ngọt ngào và độ giòn của táo. Táo Fuji chứa nhiều vitamin C và chất chống oxy hóa, giúp tăng cường hệ miễn dịch. Chúng cũng rất giàu chất xơ, giúp tiêu hóa tốt và giữ gìn sức khỏe đường ruột. Đây là một loại táo lý tưởng để ăn trực tiếp hoặc làm món tráng miệng.\n\n'),
(2, 'Táo Gala', 'Táo', 'Quả', 'Táo Gala giòn, ngọt nhẹ, thơm dịu.', 32000, 'https://citifruit.com/uploads/images/tao-gala-7.jpg', 'Táo Gala có hình dáng nhỏ nhắn và vỏ màu đỏ vàng bắt mắt. Vị của chúng ngọt nhẹ và giòn, rất dễ ăn. Loại táo này có độ ngọt vừa phải, không quá gắt, nên rất phù hợp cho những ai không thích vị ngọt quá đậm. Táo Gala cũng rất giàu vitamin C, giúp tăng cường sức đề kháng và chống lão hóa. Ngoài ra, nó còn chứa nhiều chất xơ tốt cho tiêu hóa và giúp duy trì cân nặng.\n\n'),
(3, 'Táo Envy', 'Táo', 'Quả', 'Táo Envy nhập khẩu, ngọt và thơm.', 65000, 'https://ninhco.com/uploads/images/tao-envy-new-zealand.jpg', 'Táo Envy là giống táo nhập khẩu, với đặc trưng vỏ màu đỏ sáng và thịt táo màu trắng. Vị của táo Envy ngọt đậm, giòn và mọng nước, mang lại cảm giác sảng khoái khi ăn. Đây là loại táo được nhiều người yêu thích bởi vị ngọt thanh và độ giòn đặc trưng. Táo Envy rất giàu vitamin C và các khoáng chất cần thiết cho cơ thể. Nó cũng là một nguồn cung cấp chất chống oxy hóa mạnh mẽ, giúp bảo vệ cơ thể khỏi các tác động của môi trường.\n\n'),
(4, 'Cam Sành', 'Cam', 'Quả', 'Cam sành giàu vitamin C, tốt cho sức khỏe.', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMiqEv11zm_sw6BMJOWn28AAT_WGN0kkLWYg&s', 'Cam Sành nổi bật với hương thơm tự nhiên và vị chua ngọt dễ chịu. Loại cam này có vỏ xanh dày và phần thịt cam nhiều nước. Cam Sành được yêu thích vì có nhiều vitamin C, rất tốt cho sức khỏe, giúp tăng cường hệ miễn dịch. Vị của nó chua ngọt cân bằng, không quá gắt, dễ uống và rất bổ dưỡng. Cam Sành thường được dùng để làm nước ép, hoặc ăn tươi để tận hưởng vị ngọt tự nhiên của trái cây.\n\n'),
(5, 'Cam Cao Phong', 'Cam', 'Quả', 'Cam Cao Phong, vị ngọt, mọng nước.', 40000, 'https://cdnv2.tgdd.vn/mwg-static/common/Common/hjdfskjdfsjk.jpg', 'Cam Cao Phong có nguồn gốc từ vùng Cao Phong, nổi tiếng với vị ngọt thanh và hương thơm đặc trưng. Vỏ cam mỏng, dễ tách và phần thịt cam mọng nước. Loại cam này chứa nhiều vitamin C, giúp tăng cường sức đề kháng và làm đẹp da. Cam Cao Phong có vị ngọt thanh không quá gắt, mang lại cảm giác tươi mát khi thưởng thức. Đây là loại trái cây lý tưởng để ăn tươi hoặc làm nước ép.\n\n'),
(6, 'Cam Navel', 'Cam', 'Quả', 'Cam Navel nhập khẩu, hương vị thơm ngon.', 55000, 'https://bizweb.dktcdn.net/thumb/1024x1024/100/527/060/products/cam-vang-navel-4.png?v=1729069228413', 'Cam Navel có vỏ mỏng, dễ bóc và phần thịt cam ngọt, mọng nước. Đây là loại cam nhập khẩu với hương vị đậm đà và hương thơm dễ chịu. Cam Navel rất giàu vitamin C và các chất dinh dưỡng cần thiết cho cơ thể. Vị ngọt của cam kết hợp hoàn hảo với vị chua nhẹ, tạo nên sự cân bằng dễ uống. Cam Navel thường được dùng để làm nước ép hoặc ăn trực tiếp.\n\n'),
(7, 'Chuối Laba', 'Chuối', 'Quả', 'Chuối Laba nổi tiếng với hương vị ngọt ngào.', 15000, 'https://newfreshfood.com/datafiles/3/2018-02-27/15197066441543_chuoi-laba-min.jpg', 'Chuối Laba nổi tiếng với vị ngọt ngào, thịt chuối dẻo và thơm mát. Quả chuối này có vỏ màu vàng tươi, dễ bóc và phần thịt chuối ngọt tự nhiên. Chuối Laba chứa nhiều kali, giúp cung cấp năng lượng và duy trì sự ổn định của huyết áp. Đây là một nguồn cung cấp chất xơ tuyệt vời, hỗ trợ hệ tiêu hóa. Chuối Laba thường được ăn trực tiếp hoặc làm sinh tố.\n\n'),
(8, 'Chuối Sứ', 'Chuối', 'Quả', 'Chuối Sứ truyền thống, thơm ngon.', 12000, 'https://i0.wp.com/thucphamtantai.com/wp-content/uploads/2019/10/chuoi-su.jpg', 'Chuối Sứ có vỏ mỏng, màu xanh sáng và phần thịt chuối trắng, mềm, ngọt tự nhiên. Đây là giống chuối phổ biến, có hương vị thơm ngon, ngọt nhẹ, rất dễ ăn. Chuối Sứ là nguồn cung cấp vitamin B6 và kali, giúp duy trì sức khỏe tim mạch và hỗ trợ tiêu hóa. Chúng rất tốt cho những ai muốn bổ sung năng lượng tự nhiên mà không gây béo. Chuối Sứ có thể ăn tươi hoặc làm các món ăn vặt, sinh tố.\n\n'),
(9, 'Chuối Cavendish', 'Chuối', 'Quả', 'Chuối Cavendish nhập khẩu, vị ngọt thanh.', 20000, 'https://upload.wikimedia.org/wikipedia/commons/9/9b/Cavendish_Banana_DS.jpg', 'Chuối Cavendish có hình dáng dài, vỏ màu vàng sáng, dễ bóc và phần thịt chuối ngọt nhẹ. Đây là loại chuối nhập khẩu, nổi bật với độ ngọt thanh và độ dẻo cao. Chuối Cavendish rất giàu vitamin B6 và kali, giúp cải thiện sức khỏe tim mạch và giảm nguy cơ chuột rút. Chúng cũng cung cấp năng lượng tự nhiên, giúp cơ thể hoạt động tốt. Chuối Cavendish thường được dùng trong bữa sáng hoặc làm sinh tố.\n\n'),
(10, 'Nho Mỹ', 'Nho', 'Quả', 'Nho Mỹ không hạt, vỏ mỏng, vị ngọt thanh.', 50000, 'https://bizweb.dktcdn.net/100/447/072/products/nho-den-nhap-khau-my-tui-1kg-201909250903535677.jpg?v=1684745490807', 'Nho Mỹ không hạt, vỏ mỏng và phần thịt nho ngọt thanh, mọng nước. Đây là loại nho được nhập khẩu từ Mỹ, nổi bật với vị ngọt nhẹ và hương thơm tự nhiên. Nho Mỹ rất giàu chất chống oxy hóa và vitamin C, giúp bảo vệ tế bào khỏi tổn thương và tăng cường hệ miễn dịch. Vị ngọt của nho kết hợp với độ giòn của vỏ tạo nên một món ăn vặt lý tưởng. Nho Mỹ có thể ăn tươi hoặc dùng làm nước ép.\n\n'),
(11, 'Nho Úc', 'Nho', 'Quả', 'Nho Úc xanh, ngọt giòn, không hạt.', 45000, 'https://hoaquafuji.com/storage/app/media/uploaded-files/nho-xanh-khong-hat-uc-1.jpg', 'Nho Úc có màu xanh tươi sáng, vỏ mỏng và thịt nho ngọt giòn, không hạt. Đây là loại nho nhập khẩu từ Úc, nổi bật với độ giòn và hương vị ngọt thanh, rất dễ ăn. Nho Úc rất giàu vitamin C và các chất chống oxy hóa, giúp cải thiện làn da và tăng cường sức đề kháng. Ngoài ra, nho Úc còn giúp hỗ trợ tiêu hóa và cung cấp nhiều chất xơ. Nho Úc là món ăn vặt tuyệt vời hoặc có thể dùng trong các món tráng miệng.\n\n'),
(12, 'Nho Đen', 'Nho', 'Quả', 'Nho đen không hạt, ngọt đậm đà.', 55000, 'https://luontuoisach.vn/public/files/upload/product/14745398611474360886nho-den-big-citi.jpg', 'Nho Đen có vỏ màu tím đậm và phần thịt nho ngọt đậm đà, không hạt. Đây là loại nho được yêu thích bởi hương vị ngọt tự nhiên và độ mọng nước. Nho Đen chứa nhiều chất chống oxy hóa, đặc biệt là anthocyanins, giúp bảo vệ tim mạch và chống lại các tác nhân gây lão hóa. Chúng cũng rất giàu vitamin C, giúp cải thiện làn da và tăng cường sức đề kháng. Nho Đen có thể ăn tươi hoặc làm nước ép.\n\n'),
(13, 'Dưa Hấu Ruột Đỏ', 'Dưa Hấu', 'Quả', 'Dưa hấu ruột đỏ, vỏ mỏng, ngọt lịm.', 20000, 'https://cdn.tuoitre.vn/thumb_w/480/471584752817336320/2024/7/1/loi-ich-bat-ngo-cua-dua-hau-1719842803235591565431.jpg', 'Dưa hấu ruột đỏ có thịt dưa ngọt lịm và màu sắc tươi sáng, bắt mắt. Vỏ dưa mỏng, dễ tách và phần ruột bên trong mọng nước, thanh mát. Loại dưa này rất giàu nước và vitamin C, giúp giải nhiệt và tăng cường sức đề kháng. Dưa hấu ruột đỏ còn chứa nhiều lycopene, một chất chống oxy hóa mạnh mẽ giúp bảo vệ sức khỏe tim mạch. Đây là loại trái cây lý tưởng để ăn vào mùa hè để giải nhiệt.\n\n'),
(14, 'Dưa Hấu Ruột Vàng', 'Dưa Hấu', 'Quả', 'Dưa hấu ruột vàng, thơm ngọt.', 25000, 'https://hoaquafuji.com/storage/app/media/dua-hau-ruot-vang-001.jpg', 'Dưa hấu ruột vàng có vỏ mỏng và phần thịt bên trong màu vàng tươi, ngọt và thơm. Loại dưa này có độ ngọt tự nhiên và có tác dụng giải nhiệt tốt. Dưa hấu ruột vàng rất giàu vitamin C, giúp cải thiện sức khỏe da và tăng cường hệ miễn dịch. Hơn nữa, nó còn chứa nhiều nước, giúp làm mát cơ thể trong những ngày hè oi ả. Dưa hấu ruột vàng có thể ăn tươi hoặc làm nước ép để giải khát.\n\n'),
(15, 'Dưa Lưới Nhật', 'Dưa Lưới', 'Quả', 'Dưa lưới Nhật Bản, ngọt thơm đặc trưng.', 75000, 'https://icdn.dantri.com.vn/thumb_w/680/2024/07/31/vai-trieu-dongqua-dua-hau-nhat-nguoi-khong-hao-dua-cung-mua-vai-qua-an-dan-1-20190715071835305-1722443305059.jpg', 'Dưa lưới Nhật có vỏ mỏng, lưới rõ nét và phần thịt dưa ngọt thơm đặc trưng. Đây là loại dưa được nhập khẩu từ Nhật Bản, nổi bật với độ ngọt vừa phải và mùi thơm dễ chịu. Dưa lưới Nhật rất giàu vitamin C và các khoáng chất giúp duy trì sức khỏe. Vị ngọt thanh và mát giúp làm dịu cơn khát và cung cấp nước cho cơ thể. Dưa lưới Nhật thường được dùng trong các món tráng miệng hoặc ăn tươi.\n\n'),
(16, 'Dưa Lê Hàn Quốc', 'Dưa Lê', 'Quả', 'Dưa lê Hàn Quốc, thơm và mát.', 40000, 'https://down-vn.img.susercontent.com/file/0e8c85545dc60b4e1c529544c2ce231e', 'Dưa lê Hàn Quốc có vỏ mỏng, màu vàng nhạt và thịt dưa trắng, giòn và ngọt. Loại dưa này mang lại cảm giác tươi mát khi ăn, rất thích hợp cho những ngày nóng. Dưa lê Hàn Quốc rất giàu vitamin C, giúp làm đẹp da và tăng cường sức đề kháng. Ngoài ra, dưa lê còn chứa nhiều chất xơ, giúp hỗ trợ tiêu hóa và duy trì vóc dáng. Đây là loại quả lý tưởng để ăn trực tiếp hoặc làm món tráng miệng nhẹ nhàng.\n\n'),
(17, 'Bơ Sáp', 'Bơ', 'Quả', 'Bơ sáp DakLak, dẻo và béo ngậy.', 80000, 'https://azolaco.com/vnt_upload/product/08_2020/b9_1.jpg', 'Bơ Sáp có vỏ xanh, phần thịt bơ vàng, mềm và béo ngậy. Đây là loại bơ nổi tiếng với độ béo đặc trưng và hương vị mượt mà. Bơ Sáp rất giàu chất béo không bão hòa đơn, giúp duy trì sức khỏe tim mạch. Nó còn chứa nhiều vitamin E và kali, giúp duy trì làn da khỏe mạnh và ổn định huyết áp. Bơ Sáp thích hợp ăn trực tiếp, làm sinh tố, hoặc kết hợp với các món ăn như salad.\n\n'),
(18, 'Bơ Booth', 'Bơ', 'Quả', 'Bơ Booth, cơm dày, thơm béo.', 90000, 'https://caydep.vn/wp-content/uploads/2024/03/giong-bo-booth.jpg', 'Bơ Booth có vỏ mỏng, màu xanh đậm và thịt bơ dày, mềm, thơm béo. Đây là loại bơ có hương vị đặc biệt và độ béo cao, rất phù hợp để làm món sinh tố hoặc ăn trực tiếp. Bơ Booth chứa nhiều vitamin E, kali và chất xơ, giúp làm đẹp da, cải thiện sức khỏe tim mạch và hỗ trợ tiêu hóa. Đây là loại quả giàu chất dinh dưỡng, có thể bổ sung vào chế độ ăn uống để tăng cường sức khỏe.\n\n'),
(19, 'Xoài Cát Hòa Lộc', 'Xoài', 'Quả', 'Xoài Cát Hòa Lộc, ngọt và thơm.', 60000, 'https://product.hstatic.net/200000157781/product/xoai_cat_2f2a5d8570314f6caec833a06eb4e74e_1024x1024.png', 'Xoài Cát Hòa Lộc có vỏ màu vàng tươi và phần thịt xoài dày, ngọt và thơm. Đây là giống xoài đặc sản miền Nam, nổi bật với vị ngọt thanh và hương thơm đặc trưng. Xoài Cát Hòa Lộc chứa nhiều vitamin A và C, giúp cải thiện thị lực và tăng cường hệ miễn dịch. Nó cũng chứa nhiều chất xơ, giúp hệ tiêu hóa hoạt động tốt. Xoài Cát Hòa Lộc thích hợp để ăn trực tiếp, làm sinh tố hoặc các món tráng miệng.\n\n'),
(20, 'Xoài Keo', 'Xoài', 'Quả', 'Xoài keo thơm ngon, vị chua ngọt.', 40000, 'https://bizweb.dktcdn.net/100/478/273/products/z6082828237436-5980409ff6a6e13e4443605cf279f7c6.jpg?v=1732930159020', 'Xoài Keo có vỏ mỏng, màu xanh vàng và thịt xoài có vị ngọt, mềm và mọng nước. Đây là loại xoài phổ biến với đặc tính giòn và vị ngọt tự nhiên. Xoài Keo chứa nhiều vitamin C, giúp tăng cường hệ miễn dịch và làm đẹp da. Ngoài ra, xoài cũng là nguồn cung cấp chất xơ giúp tiêu hóa tốt. Xoài Keo có thể ăn tươi hoặc chế biến thành món tráng miệng hoặc làm sinh tố.\n\n'),
(21, 'Ổi Lê', 'Ổi', 'Quả', 'Ổi lê xanh, giòn ngọt tự nhiên.', 20000, 'https://quangtrimart.vn/wp-content/uploads/2024/07/oi-le-dai-loan-10421624520594.jpg', 'Ổi có vỏ màu xanh hoặc vàng và phần thịt mềm, mọng nước. Vị ổi ngọt thanh, giòn và rất thơm. Loại quả này chứa nhiều vitamin C, giúp cải thiện sức đề kháng và bảo vệ da khỏi các tác động của môi trường. Ổi cũng rất giàu chất xơ, giúp hỗ trợ tiêu hóa và duy trì cân nặng. Ngoài ăn trực tiếp, ổi còn được dùng để làm nước ép hoặc chế biến thành các món ăn vặt ngon miệng.\n\n'),
(22, 'Ổi Đài Loan', 'Ổi', 'Quả', 'Ổi Đài Loan, to và ngọt.', 25000, 'https://yuthfarm.com/wp-content/uploads/2023/10/ba215794-1bf7-4fb9-94a4-cfcec32ea525-1.jpg', 'Ổi lê là loại ổi có vỏ xanh, giòn và ngọt tự nhiên, mang lại cảm giác thanh mát khi thưởng thức. Với thịt ổi mềm, mọng nước, ổi lê là một nguồn vitamin C phong phú, giúp tăng cường sức đề kháng và bảo vệ làn da. Ổi lê có thể ăn trực tiếp, làm sinh tố hoặc làm các món tráng miệng. Giá ổi lê khoảng 20,000 VND mỗi kg.\n\n'),
(23, 'Dâu Tây Đà Lạt', 'Dâu Tây', 'Quả', 'Dâu tây Đà Lạt tươi ngon.', 80000, 'https://blog.onelife.vn/wp-content/uploads/2024/01/bc3a163d-dau-tay-da-lat-1024x576.png', 'Dâu tây Đà Lạt nổi tiếng với chất lượng tươi ngon, có vị ngọt thanh và mùi thơm đặc biệt. Dâu tây Đà Lạt thường được dùng trong các món tráng miệng, sinh tố hoặc ăn tươi. Loại dâu này rất giàu vitamin C và các chất chống oxy hóa, giúp làm đẹp da và hỗ trợ hệ miễn dịch. Giá dâu tây Đà Lạt khoảng 80,000 VND mỗi kg.\n'),
(24, 'Dâu Tây Mỹ', 'Dâu Tây', 'Quả', 'Dâu tây Mỹ nhập khẩu, ngọt thơm.', 150000, 'https://blog.onelife.vn/wp-content/uploads/2024/01/2681147e-dau-tay-my-kingfoodmart-2-1024x576.png', 'Dâu tây Mỹ nhập khẩu có kích thước lớn, màu đỏ tươi và vị ngọt đậm đà. Loại dâu này không chỉ ngon mà còn rất bổ dưỡng với hàm lượng vitamin C cao, giúp làm đẹp da và chống lại các gốc tự do. Dâu tây Mỹ có thể dùng để ăn trực tiếp, làm sinh tố hoặc trang trí bánh ngọt. Giá dâu tây Mỹ khoảng 150,000 VND mỗi kg.\n\n'),
(25, 'Chôm Chôm Thái', 'Chôm Chôm', 'Quả', 'Chôm chôm Thái, ngọt mọng nước.', 35000, 'https://bizweb.dktcdn.net/100/482/702/products/2-jpeg-3fcd2bf7-a7e5-4a16-abe7-c8542c834834.jpg?v=1692803479113', 'Chôm chôm Thái có vỏ màu đỏ hoặc vàng, khi ăn có vị ngọt, mọng nước. Đây là một loại trái cây nhiệt đới phổ biến, giàu vitamin C và chất xơ, giúp hỗ trợ hệ tiêu hóa và tăng cường sức khỏe. Chôm chôm Thái có thể ăn trực tiếp hoặc dùng làm sinh tố. Giá chôm chôm Thái khoảng 35,000 VND mỗi kg.\n\n'),
(26, 'Mận Hậu', 'Mận', 'Quả', 'Mận hậu Sơn La, giòn và ngọt.', 45000, 'https://images.baodantoc.vn/uploads/2022/Th%C3%A1ng%208/Ng%C3%A0y%202/Thanh/man-chin.jpg', 'Mận hậu Sơn La là loại mận nổi tiếng với vị giòn, ngọt và có phần thịt dày. Mận có màu đỏ tươi, thơm và ngon, rất thích hợp để ăn tươi hoặc làm sinh tố. Mận hậu còn chứa nhiều vitamin và khoáng chất, giúp bổ sung năng lượng và bảo vệ sức khỏe. Giá mận hậu khoảng 45,000 VND mỗi kg.\n\n'),
(27, 'Mít Thái', 'Mít', 'Quả', 'Mít Thái dai, thơm ngọt.', 30000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeFpZfofC8lJhV14mDhlgNM05f5OanMKRxeLr2KLfo6WlV6sJcscXAV_BIS9IhnSObWT8&usqp=CAU', 'Mít Thái có phần cùi dày, dai và ngọt, có hương thơm đặc trưng, dễ dàng nhận ra. Mít Thái là một món ăn yêu thích ở nhiều nơi, đặc biệt là khi chế biến các món tráng miệng hoặc dùng trong các món chè. Ngoài ra, mít còn rất giàu năng lượng và chất xơ. Giá mít Thái khoảng 30,000 VND mỗi kg.\n\n'),
(28, 'Măng Cụt', 'Măng Cụt', 'Quả', 'Măng cụt thơm ngon, ngọt thanh.', 80000, 'https://cdn.tgdd.vn/Files/2019/10/09/1206728/mang-cut-co-tac-dung-gi-an-nhieu-co-tot-khong--12-760x367.jpg', 'Măng cụt là loại trái cây có vỏ dày, khi mở ra sẽ thấy phần thịt trắng, ngọt thanh, ít hạt. Măng cụt có hương thơm đặc biệt và rất bổ dưỡng với nhiều vitamin và khoáng chất, giúp giải nhiệt cơ thể và tăng cường hệ miễn dịch. Măng cụt có thể ăn trực tiếp hoặc làm món tráng miệng. Giá măng cụt khoảng 80,000 VND mỗi kg.\n\n'),
(29, 'Sầu Riêng Ri6', 'Sầu Riêng', 'Quả', 'Sầu riêng Ri6, béo và thơm.', 120000, 'https://cdn2.fptshop.com.vn/unsafe/1920x0/filters:quality(100)/2023_10_21_638335049806634930_sau-rieng-ri6-0.jpg', 'Sầu riêng Ri6 nổi bật với mùi thơm mạnh mẽ và vị béo ngậy đặc trưng. Loại sầu riêng này có phần cùi mềm, ngọt và nhiều cơm, rất được ưa chuộng trong các món tráng miệng hoặc ăn trực tiếp. Sầu riêng Ri6 rất giàu chất béo và năng lượng, thích hợp cho những ai cần bổ sung dưỡng chất. Giá sầu riêng Ri6 khoảng 120,000 VND mỗi kg.\n\n'),
(30, 'Sầu Riêng Monthong', 'Sầu Riêng', 'Quả', 'Sầu riêng Monthong, hương vị đặc biệt.', 150000, 'https://lh5.googleusercontent.com/proxy/f0jLtU6TzUJMkh4cLKXtBvjGijcRBhcqNOj1zAcY3AW0U-Hnj9qQVqLO1jm-u3QRA6ZIdFxgTJHsS4GHd3KjWh5wUvJTH6jdsgIFQYFsPnZG4bsotcJyTqD5R6qMjngoAl_3EV8U_rDjlbrNd8l_6T5H', 'Sầu riêng Monthong có hương vị ngọt ngào, béo, và phần cùi rất dày, dễ ăn. Đây là loại sầu riêng nổi tiếng với chất lượng cao, thích hợp để làm kem, bánh hoặc ăn trực tiếp. Sầu riêng Monthong có chứa nhiều chất dinh dưỡng, giúp cung cấp năng lượng và duy trì sức khỏe. Giá sầu riêng Monthong khoảng 150,000 VND mỗi kg.\n\n\n\n\n\n\n'),
(31, 'Dừa Xiêm', 'Dừa', 'Quả', 'Dừa xiêm tươi mát, ngọt nước.', 15000, 'https://duaxiembaconut.com/userfiles/image/Cong-dung-cua-nuoc-Dua-Xiem-3.jpg', 'Dừa xiêm có hình dáng nhỏ gọn, thường được dùng để làm nước giải khát với nước dừa tươi mát, ngọt. Cùi dừa có thể ăn ngay, có vị ngọt thanh và mềm. Dừa xiêm rất được yêu thích trong các món tráng miệng hoặc pha chế. Loại quả này có tác dụng giải nhiệt rất tốt trong những ngày hè nóng bức. Mức giá thường dao động trong khoảng 15,000 VND.\n\n'),
(32, 'Dừa Sáp', 'Dừa', 'Quả', 'Dừa sáp đặc ruột, thơm béo.', 300000, 'https://dulichtravinh.com.vn/wp-content/uploads/2022/08/8c472f3f43398667df28.jpg', 'Dừa sáp nổi bật với ruột đặc, không có nước mà thay vào đó là phần cơm dừa sánh mịn, thơm béo. Đây là loại dừa rất được ưa chuộng ở miền Tây Việt Nam, thường dùng làm nguyên liệu trong các món ăn hoặc chế biến thành các món tráng miệng như kem dừa. Dừa sáp có giá trị dinh dưỡng cao và đặc biệt, phần cơm dừa sáp có thể ăn ngay mà không cần chế biến. Giá dừa sáp dao động từ 300,000 VND trở lên.\n\n'),
(33, 'Táo Xanh Granny Smith', 'Táo', 'Quả', 'Táo xanh Granny Smith giòn, chua nhẹ.', 40000, 'https://cdn.tgdd.vn/Files/2024/07/09/1567806/gioi-thieu-san-pham-tao-xanh-granny-smith-nhap-khau-my-202407091656012873.jpg', 'Táo Granny Smith có màu xanh đặc trưng, giòn và có vị chua nhẹ, phù hợp để ăn tươi hoặc làm nguyên liệu chế biến món tráng miệng. Loại táo này rất giàu vitamin C và chất xơ, giúp tăng cường hệ miễn dịch và hỗ trợ tiêu hóa. Táo xanh thường được dùng trong các món salad trái cây hoặc ép nước. Mức giá của táo này dao động khoảng 40,000 VND mỗi kg.\n\n'),
(34, 'Lê Hàn Quốc', 'Lê', 'Quả', 'Lê Hàn Quốc mọng nước, ngọt thanh.', 50000, 'https://cdn.tgdd.vn/Files/2021/07/21/1369836/trong-mot-trai-le-han-quoc-co-gi-ma-duoc-nhieu-nguoi-ua-chuong-202201171222529441.jpg', 'Lê Hàn Quốc có vỏ mỏng, căng bóng và phần thịt lê rất mọng nước, ngọt thanh. Đây là loại lê được nhập khẩu, thường có giá trị cao và thường xuyên có mặt trong các siêu thị lớn. Lê Hàn Quốc mang lại cảm giác tươi mới khi ăn, rất thích hợp để ăn tươi hoặc làm nước ép. Với mức giá khoảng 50,000 VND, lê Hàn Quốc không chỉ ngon mà còn rất bổ dưỡng.\n\n'),
(35, 'Lê Nam Phi', 'Lê', 'Quả', 'Lê Nam Phi, vị ngọt dịu, thơm mát.', 45000, 'https://lh3.googleusercontent.com/1Dgfic3pxViSGPhZmmE5m7TL6MHP8zVxMbjnfKX5uvKu77rPsxwku0NddXRzY41k6-nRiwCuvibE3HdS84PZueQH4jaOqRUqPeJcpGMNtXQl2bqQCJzwhzIM452Y4d6-k0D-9NqC=s0', 'Lê Nam Phi có vỏ mỏng, thường có màu vàng nhạt, vị ngọt dịu và thơm mát. Đây là một loại trái cây nhập khẩu khá phổ biến trong các siêu thị và cửa hàng trái cây. Lê Nam Phi có thể ăn ngay hoặc sử dụng trong các món tráng miệng, salad. Với giá khoảng 45,000 VND, lê Nam Phi là sự lựa chọn hoàn hảo cho những ai yêu thích trái cây ngọt mát.\n\n'),
(36, 'Kiwi Xanh', 'Kiwi', 'Quả', 'Kiwi xanh giàu dinh dưỡng, vị chua ngọt.', 80000, 'https://cdn2.fptshop.com.vn/unsafe/1920x0/filters:quality(100)/2023_12_11_638379350522333123_kiwi-bao-nhieu-calo.jpg', 'Kiwi xanh là loại quả chứa nhiều vitamin C, khoáng chất và chất chống oxy hóa, giúp tăng cường sức khỏe và chống lại lão hóa. Với vị chua ngọt đặc trưng, kiwi xanh rất thích hợp để ăn tươi hoặc sử dụng trong các món tráng miệng, sinh tố. Loại quả này có giá khoảng 80,000 VND mỗi kg và mang lại nhiều lợi ích sức khỏe.\n\n'),
(37, 'Kiwi Vàng', 'Kiwi', 'Quả', 'Kiwi vàng nhập khẩu, vị ngọt thanh.', 100000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/800x0/https://cms-prod.s3-sgn09.fptcloud.com/kiwi_vang_co_tac_dung_gi_kiwi_vang_hay_xanh_tot_hon_4_28ed6c0e84.jpg', 'Kiwi vàng có vị ngọt thanh, dễ ăn hơn so với kiwi xanh và ít chua. Thịt quả màu vàng tươi, mềm mịn, rất giàu vitamin C và chất xơ. Kiwi vàng thường được nhập khẩu và có giá trị dinh dưỡng cao, là một lựa chọn lý tưởng để ăn tươi hoặc chế biến thành các món sinh tố. Mức giá dao động khoảng 100,000 VND mỗi kg.\n\n'),
(38, 'Lựu Đỏ', 'Lựu', 'Quả', 'Lựu đỏ Ấn Độ, ngọt mát.', 60000, 'https://cdn.tgdd.vn/2021/12/CookDish/cach-chon-mua-qua-luu-ngon-do-chac-tay-va-mong-nuoc-cuc-don-avt-1200x676.jpg', 'Lựu đỏ Ấn Độ có vỏ màu đỏ tươi, hạt lựu căng mọng và ngọt mát. Đây là loại quả được yêu thích vì chứa nhiều chất chống oxy hóa và có tác dụng làm đẹp da. Lựu đỏ thường được ăn tươi hoặc ép lấy nước, giúp thanh nhiệt và giải độc cho cơ thể. Giá của quả lựu đỏ dao động khoảng 60,000 VND mỗi kg.\n\n'),
(39, 'Lựu Peru', 'Lựu', 'Quả', 'Lựu Peru nhập khẩu, ngọt dịu.', 85000, 'https://360fruit.vn/uploads/file/360%20fruit%20bai%20viet/luu-do-peru-1.jpg', 'Lựu Peru có vỏ mỏng, hạt lựu đỏ mọng và ngọt dịu. Đây là loại lựu nhập khẩu từ Peru, mang đến một hương vị đặc trưng và ít chua hơn các loại lựu thông thường. Lựu Peru rất được ưa chuộng trong các món sinh tố hoặc salad. Giá của loại quả này khoảng 85,000 VND mỗi kg.\n\n'),
(40, 'Dâu Tằm', 'Dâu', 'Quả', 'Dâu tằm tươi Đà Lạt.', 45000, 'https://dacsandalat.com.vn/wp-content/uploads/2024/06/dau-tam-tuoi-da-lat.jpg', 'Dâu tằm Đà Lạt có quả nhỏ, màu đen tím, vị ngọt thanh và giàu vitamin. Loại quả này có tác dụng tốt cho sức khỏe, giúp cải thiện hệ miễn dịch và làm đẹp da. Dâu tằm thường được ăn tươi hoặc chế biến thành các món mứt, siro, hay nước ép. Giá dâu tằm dao động từ 45,000 VND.\n\n'),
(41, 'Mãng Cầu Xiêm', 'Mãng Cầu', 'Quả', 'Mãng cầu xiêm, thơm và ngọt.', 40000, 'https://cdn.tgdd.vn/Files/2019/07/13/1179227/loi-ich-hon-ca-tuyet-voi-cua-mang-cau-xiem-doi-voi-suc-khoe-202201071503281685.jpg', 'Mãng cầu xiêm có vỏ ngoài xanh, phần thịt quả mềm mịn, ngọt và có mùi thơm đặc trưng. Đây là loại trái cây rất phổ biến ở miền Nam Việt Nam, được yêu thích nhờ vị ngọt mát, dễ ăn. Mãng cầu xiêm có thể ăn trực tiếp hoặc làm sinh tố, nước ép. Mức giá dao động khoảng 40,000 VND mỗi quả.\n\n'),
(42, 'Na Thái', 'Na', 'Quả', 'Na Thái, ngọt thanh, ít hạt.', 60000, 'https://caygionguthien.vn/wp-content/uploads/2022/05/988152b4df616897e8747030aca58bb1.jpg', 'Na Thái là loại trái cây có vỏ ngoài nhăn nheo, phần thịt quả ngọt thanh, ít hạt và rất dễ ăn. Na Thái rất phổ biến tại các siêu thị và cửa hàng trái cây, thích hợp cho những người yêu thích trái cây ngọt, bổ dưỡng. Với mức giá khoảng 60,000 VND mỗi kg, Na Thái là lựa chọn hấp dẫn cho các bữa ăn nhẹ.\n\n'),
(43, 'Thanh Long Ruột Đỏ', 'Thanh Long', 'Quả', 'Thanh long ruột đỏ, ngọt lịm.', 30000, 'https://suckhoedoisong.qltns.mediacdn.vn/2015/1-thanhlong-1435825834109-1435888607597.jpg', 'Thanh long ruột đỏ có vỏ ngoài đỏ tươi, phần thịt quả màu đỏ thẫm, ngọt lịm và rất giàu vitamin C. Đây là loại thanh long được ưa chuộng vì hương vị ngọt, mát và bổ dưỡng. Thanh long ruột đỏ thích hợp làm các món tráng miệng hoặc ăn tươi. Mức giá dao động khoảng 30,000 VND mỗi quả.\n\n'),
(44, 'Thanh Long Ruột Trắng', 'Thanh Long', 'Quả', 'Thanh long ruột trắng, tươi mát.', 25000, 'https://product.hstatic.net/200000604011/product/42-f5f03b89-6287-4127-9255-5ee35c810e79_14f47bf75bf843b09e62583da827353a.jpg', 'Thanh long ruột trắng có vỏ ngoài đỏ tươi, phần thịt quả trắng, ngọt mát và rất giàu nước. Đây là loại trái cây rất phổ biến tại Việt Nam và có thể ăn tươi hoặc chế biến thành các món tráng miệng. Mức giá của thanh long ruột trắng khoảng 25,000 VND mỗi quả.\n\n'),
(45, 'Dưa Gang', 'Dưa', 'Quả', 'Dưa gang, vị ngọt nhẹ.', 20000, 'https://kingfruit.net/uploads/file/360%20fruit%20bai%20viet/dua-gang-1.jpg', 'Dưa gang có vỏ màu xanh nhạt, phần thịt quả ngọt nhẹ, có thể ăn tươi hoặc dùng làm nguyên liệu chế biến các món tráng miệng. Đây là loại quả rất phổ biến vào mùa hè, giúp giải nhiệt hiệu quả. Giá dưa gang khoảng 20,000 VND mỗi quả.\n\n'),
(46, 'Cải Bó Xôi', 'Rau Lá', 'Rau', 'Giàu vitamin A, C, tốt cho tiêu hóa và miễn dịch.', 25000, 'https://hongngochospital.vn/bai-viet/update/cai-bo-xoi.jpg', 'Cải bó xôi là loại rau lá giàu vitamin A và C, tốt cho tiêu hóa và miễn dịch. Rau có thể ăn tươi trong các món salad hoặc chế biến thành các món xào, luộc. Cải bó xôi có giá khoảng 25,000 VND mỗi bó.\n\n'),
(47, 'Rau Muống', 'Rau Lá', 'Rau', 'Giòn, giàu sắt, xào, luộc, nấu canh đều ngon.', 15000, 'https://cdn.tgdd.vn/Files/2019/07/10/1178706/phau-thuat-xong-co-nen-an-rau-muong-khong-rau-muong-co-gay-nen-seo-loi-202201151207515237.jpg', 'Rau muống có vị giòn, dễ chế biến và giàu sắt. Rau muống có thể xào, luộc, nấu canh, và rất thích hợp trong các bữa ăn gia đình. Giá rau muống khoảng 15,000 VND mỗi bó.\n\n'),
(48, 'Xà Lách', 'Rau Lá', 'Rau', 'Giàu nước, chất xơ, thích hợp làm salad.', 20000, 'https://www.cleanipedia.com/images/5iwkm8ckyw6v/6fcJ3CHTOLA35rCtQEQixF/fb1c276fe0c96d6922838248949b96a4/eGEtbGFjaC5qcGVn/600w/rau-di%E1%BA%BFp-c%C3%A1-%C4%91%E1%BA%B7t-trong-gi%E1%BB%8F-m%C3%A2y%2C-n%E1%BB%81n-tr%E1%BA%AFng..jpg', 'Xà lách có lá xanh mềm, giàu nước và chất xơ, thường được dùng trong các món salad. Rau xà lách có tác dụng giải nhiệt, tốt cho tiêu hóa và giúp làm đẹp da. Mức giá của xà lách khoảng 20,000 VND mỗi bó.\n\n'),
(49, 'Cải Ngọt', 'Rau Lá', 'Rau', 'Rau mềm, vị ngọt tự nhiên, bổ sung vitamin.', 18000, 'https://trade.vinhlong.gov.vn/chovinhlong/storage/2022/27-f102291-rau-muong-3962a35b44254dcda56c59ebc01f7594-large-1594437180-800x800.jpg', 'Cải ngọt có lá mềm, vị ngọt tự nhiên, và rất dễ chế biến trong các món xào, nấu canh. Loại rau này bổ sung nhiều vitamin và rất tốt cho sức khỏe. Mức giá cải ngọt khoảng 18,000 VND mỗi bó.\n\n'),
(50, 'Bông Cải Xanh', 'Rau Củ', 'Rau', 'Vitamin C cao, giữ giòn ngon khi xào, luộc.', 35000, 'https://www.vinmec.com/static/uploads/20190614_114641_156500_sup_lo_max_1800x1800_jpg_19a9257e3c.jpg', 'Bông cải xanh chứa nhiều vitamin C và chất xơ, tốt cho hệ miễn dịch và giúp giảm cholesterol. Bông cải xanh có thể được chế biến thành các món xào, luộc, hay nấu súp. Mức giá dao động khoảng 35,000 VND mỗi kg.\n\n'),
(51, 'Cà Rốt', 'Rau Củ', 'Rau', 'Vitamin A dồi dào, tốt cho mắt, làm nước ép.', 20000, 'https://vov.vn/sites/default/files/styles/large/public/2024-03/ca-rot-thumb-1200x675.jpeg', 'Cà rốt chứa nhiều vitamin A, rất tốt cho mắt và có thể ăn sống hoặc chế biến thành các món xào, nấu canh, hoặc làm nước ép. Giá cà rốt khoảng 20,000 VND mỗi kg.\n\n'),
(52, 'Khoai Tây', 'Rau Củ', 'Rau', 'Giàu tinh bột, dùng chiên, hầm, nghiền.', 25000, 'https://www.vinmec.com/static/uploads/20200418_145937_369667_khoai_tay_max_1800x1800_jpg_a13bcdfa70.jpg', 'Khoai tây là loại rau củ giàu tinh bột, có thể chế biến thành nhiều món ăn như chiên, hầm, hoặc nghiền. Khoai tây còn cung cấp nhiều chất dinh dưỡng và rất phổ biến trong bữa ăn gia đình. Giá khoai tây khoảng 25,000 VND mỗi kg.\n\n'),
(53, 'Bí Đỏ', 'Rau Củ', 'Rau', 'Ngọt, giàu beta-carotene, tốt cho thị lực.', 30000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGG4bCMFXjyvCM-RGdF-LIR56cmtaqwrOkFg&s', 'Bí đỏ có vị ngọt tự nhiên, giàu beta-carotene, giúp cải thiện thị lực và tốt cho sức khỏe. Bí đỏ có thể chế biến thành các món canh, súp hoặc nướng. Mức giá bí đỏ khoảng 30,000 VND mỗi quả.\n\n'),
(54, 'Rau Dền', 'Rau Lá', 'Rau', 'Rau mềm, ngọt, giúp thanh nhiệt.', 15000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSluEVF5cafin6045AHz75qBLew0wbN1276YT7vcxF17C9Ihe-SUOq-9yv7GJV9cN6QHUc&usqp=CAU', 'Rau dền có lá mềm, vị ngọt tự nhiên, giúp thanh nhiệt và rất tốt cho sức khỏe. Rau dền thường được dùng để nấu canh hoặc xào. Giá rau dền khoảng 15,000 VND mỗi bó.\n\n'),
(55, 'Cải Thảo', 'Rau Lá', 'Rau', 'Dễ nấu, làm lẩu, xào, làm kim chi.', 25000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdP_QA6EqjI3hTKI4lEtm4RwHxP8pqVpOXfw&s', 'Cải thảo rất dễ chế biến và có thể dùng trong các món lẩu, xào hoặc làm kim chi. Rau có vị ngọt và mềm, bổ sung nhiều vitamin. Giá cải thảo khoảng 25,000 VND mỗi bó.\n\n'),
(56, 'Su Su', 'Rau Củ', 'Rau', 'Rau giòn, xào tỏi, luộc đều ngon.', 18000, 'https://media.vneconomy.vn/w900/images/upload/2021/04/21/eba06893-b6fa-419c-a221-7c9a09121aca.jpg', 'Su su có vị ngọt mát, giòn, có thể chế biến thành các món xào tỏi, luộc, hoặc làm canh. Su su giúp giải nhiệt và rất bổ dưỡng. Giá su su khoảng 18,000 VND mỗi kg.\n\n'),
(57, 'Rau Ngót', 'Rau Lá', 'Rau', 'Ngọt, giàu vitamin, nấu canh bổ máu.', 17000, 'https://image.tienphong.vn/w890/Uploaded/2024/rkznae/2020_05_12/rau_ngot_1565079659561185136361_CXHP.jpg', 'Rau ngót có vị ngọt và rất giàu vitamin. Rau này thường được dùng để nấu canh, giúp bổ máu và thanh nhiệt. Giá rau ngót khoảng 17,000 VND mỗi bó.\n\n'),
(58, 'Bí Xanh', 'Rau Củ', 'Rau', 'Ngọt mát, tốt cho da, nấu canh hoặc hấp.', 20000, 'https://cdn.tgdd.vn/2022/07/CookDish/cach-chon-bi-dao-ngon-va-cach-bao-quan-bi-dao-tuoi-ngon-lau-avt-1200x676-1.jpg', 'Bí xanh có vị ngọt mát, tốt cho da, thường được dùng để chế biến canh hoặc hấp. Đây là loại rau dễ chế biến và rất bổ dưỡng. Giá bí xanh khoảng 20,000 VND mỗi kg.\n\n'),
(59, 'Đậu Cove', 'Rau Củ', 'Rau', 'Giòn, giàu xơ, giữ độ ngon khi xào.', 22000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSa2_dKpx3ZW2xeaQWYN6IlNUQgizIQKiC1bg&s', 'Đậu Cove có độ giòn, giàu xơ và giữ được độ ngon khi chế biến xào. Đậu cove rất phổ biến trong các món xào và nấu canh. Giá đậu cove khoảng 22,000 VND mỗi kg.\n\n'),
(60, 'Củ Dền', 'Rau Củ', 'Rau', 'Nhiều sắt, thường làm nước ép, nấu canh.', 25000, 'https://www.vinmec.com/static/uploads/20210519_081753_529664_cho_be_an_rau_cu_de_max_1800x1800_jpg_e77bfe6a3d.jpg', 'Củ dền có màu đỏ tươi, rất giàu vitamin và chất chống oxy hóa. Củ dền có thể chế biến thành các món salad, sinh tố hoặc súp. Giá củ dền khoảng 20,000 VND mỗi kg.\n\n'),
(61, 'Hành Lá', 'Rau Gia Vị', 'Rau', 'Gia vị thơm, thêm hương vị cho món ăn.', 10000, 'https://www.vinmec.com/static/uploads/20221125_120528_623413_hanh_la_ky_gi_1_max_1800x1800_jpg_ff713f6b18.jpg', 'Hành lá là gia vị phổ biến trong ẩm thực, có hương thơm đặc trưng giúp tăng cường hương vị cho các món ăn. Nó thường được sử dụng trong các món xào, canh hoặc dùng để trang trí món ăn. Hành lá chứa nhiều vitamin A và C, có tác dụng tốt trong việc cải thiện hệ tiêu hóa và tăng cường hệ miễn dịch. Loại rau này rất dễ tìm và có giá trị dinh dưỡng cao. Giá hành lá khoảng 10,000 VND mỗi bó.\n\n'),
(62, 'Ngò Rí', 'Rau Gia Vị', 'Rau', 'Gia vị phổ biến, làm tăng hương vị món ăn.', 12000, 'https://trungtamthuocdantoc.com/wp-content/uploads/2023/06/rau-ngo-ri-11.jpg', 'Ngò rí là một loại rau gia vị có mùi thơm mạnh mẽ, thường dùng trong các món ăn như phở, gỏi hoặc các món xào. Nó không chỉ giúp món ăn thêm phần hấp dẫn mà còn có tác dụng giúp tiêu hóa tốt hơn. Ngò rí còn chứa nhiều vitamin C và các chất chống oxy hóa, có lợi cho sức khỏe. Với giá trị dinh dưỡng cao, ngò rí có giá khoảng 12,000 VND mỗi bó.\n\n'),
(63, 'Măng Tây', 'Rau Củ', 'Rau', 'Giàu dinh dưỡng, dùng xào hoặc hấp.', 45000, 'https://beptruong.edu.vn/wp-content/uploads/2020/10/mang-tay-la-gi.jpg', 'Măng tây là một loại rau củ giàu dinh dưỡng, chứa nhiều vitamin A, C và K. Măng tây có thể được chế biến thành nhiều món như xào, hấp hoặc nướng, và đặc biệt thích hợp cho các món salad hoặc súp. Đây là một nguồn thực phẩm tuyệt vời cho việc giảm cân, hỗ trợ tiêu hóa và duy trì sức khỏe tim mạch. Giá măng tây khoảng 45,000 VND mỗi kg.\n\n'),
(64, 'Cà Chua', 'Rau Quả', 'Rau', 'Vitamin C cao, làm nước sốt hoặc ăn sống.', 20000, 'https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2021/9/25/tac-dung-cua-ca-chua-doi-voi-suc-khoe-1-1632310636-831-width640height427-1632567723926-16325677242441321628137.jpg', 'Cà chua là một trong những loại rau quả dễ tìm và rất phổ biến trong ẩm thực. Nó chứa nhiều vitamin C và các chất chống oxy hóa, giúp làm sáng da và tăng cường sức khỏe tổng thể. Cà chua có thể dùng để làm nước sốt, chế biến salad hoặc ăn sống. Ngoài ra, cà chua cũng giúp cải thiện sức khỏe tim mạch và hỗ trợ tiêu hóa. Giá cà chua khoảng 20,000 VND mỗi kg.\n\n'),
(65, 'Ớt Chuông', 'Rau Quả', 'Rau', 'Chất chống oxy hóa, dùng xào hoặc ăn sống.', 30000, 'https://media-cdn-v2.laodong.vn/storage/newsportal/2024/7/24/1371106/Loi-Ich-Cua-Ot-Chuon-01.jpg', 'Ớt chuông có màu sắc bắt mắt và chứa nhiều vitamin A, C, giúp tăng cường hệ miễn dịch và cải thiện sức khỏe mắt. Đây là loại rau quả giàu chất chống oxy hóa, có tác dụng bảo vệ cơ thể khỏi các gốc tự do gây hại. Ớt chuông có thể được dùng trong các món xào, nướng hoặc ăn sống. Giá ớt chuông khoảng 30,000 VND mỗi kg.\n\n\n\n\n\n\n'),
(66, 'Rau Diếp Cá', 'Rau Lá', 'Rau', 'Mát, kháng viêm, ăn sống hoặc làm nước ép.', 20000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO2o8-865SLab0a8Kc7h_kRwKfxiuh4kIQOQ&s', 'Rau diếp cá có mùi thơm đặc trưng và tính mát, thường được sử dụng để ăn sống hoặc làm nước ép giúp thanh nhiệt, kháng viêm. Rau này có tác dụng giải độc cơ thể, hỗ trợ tiêu hóa và giúp làm dịu các triệu chứng viêm nhiễm. Với giá khoảng 20,000 VND mỗi kg, rau diếp cá là lựa chọn tốt cho những ai muốn tăng cường sức khỏe.\n\n'),
(67, 'Rau Má', 'Rau Lá', 'Rau', 'Thích hợp làm nước ép, giúp thanh nhiệt.', 18000, 'https://hc.com.vn/i/ecommerce/media/ck3230471-cach-lam-nuoc-ep-rau-ma-2.jpg', 'Rau má là loại rau phổ biến trong việc làm nước ép giúp thanh nhiệt, giải độc cơ thể và làm mát gan. Rau má có khả năng chữa lành vết thương, giảm viêm và cải thiện sức khỏe làn da. Giá rau má khoảng 18,000 VND mỗi kg, rất phù hợp cho những ngày hè nóng nực.\n\n'),
(68, 'Đậu Bắp', 'Rau Củ', 'Rau', 'Giàu dinh dưỡng, thích hợp nướng, xào, hấp.', 22000, 'https://images2.thanhnien.vn/528068263637045248/2023/5/11/3-dau-bap-shutterstock-1683781310622182487488.jpg', 'Đậu bắp là một loại rau rất giàu dinh dưỡng, chứa nhiều vitamin và khoáng chất, giúp tăng cường hệ miễn dịch. Đậu bắp thích hợp để nướng, xào hoặc hấp, mang lại nhiều lợi ích cho sức khỏe như hỗ trợ tiêu hóa và giảm cholesterol. Giá đậu bắp khoảng 22,000 VND mỗi kg.\n\n'),
(69, 'Rau Đay', 'Rau Lá', 'Rau', 'Rau mềm, thích hợp nấu canh thanh mát.', 15000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/800x0/filters:quality(95)/https://cms-prod.s3-sgn09.fptcloud.com/rau_day_co_tac_dung_gi_top_8_loi_ich_tuyet_voi_cua_rau_day_3_05ed96aea1.jpg', 'Rau đay có lá mềm, vị ngọt và thường được sử dụng trong các món canh thanh mát, giúp giải nhiệt trong những ngày hè oi bức. Rau đay cung cấp nhiều chất xơ, hỗ trợ tiêu hóa và có tác dụng thanh nhiệt, mát gan. Giá rau đay khoảng 15,000 VND mỗi kg.\n\n'),
(70, 'Rau Lang', 'Rau Lá', 'Rau', 'Thanh nhiệt, luộc, xào, dễ chế biến.', 16000, 'https://sieuthicattuong.vn/wp-content/uploads/2023/09/3-383.webp', 'Rau lang là một loại rau dễ chế biến, thường được luộc, xào hoặc nấu canh. Rau lang giúp thanh nhiệt, mát gan và có tác dụng chống viêm, rất tốt cho sức khỏe. Giá rau lang khoảng 16,000 VND mỗi kg.\n\n'),
(71, 'Lá Lốt', 'Rau Gia Vị', 'Rau', 'Thơm, làm gia vị hoặc cuốn thịt nướng.', 14000, 'https://suckhoedoisong.qltns.mediacdn.vn/324455921873985536/2023/3/27/1-16798900302601340065119.jpg', 'Lá lốt có mùi thơm đặc trưng, thường được dùng làm gia vị trong các món ăn hoặc cuốn với thịt nướng. Lá lốt không chỉ làm tăng hương vị món ăn mà còn có tác dụng tốt đối với sức khỏe, giúp giảm đau và tiêu viêm. Giá lá lốt khoảng 14,000 VND mỗi kg.\n\n'),
(72, 'Mồng Tơi', 'Rau Lá', 'Rau', 'Mát, giàu chất nhờn, thích hợp nấu canh.', 18000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/https://cms-prod.s3-sgn09.fptcloud.com/m2_2346_1659367476_bf1342564b.jpg', 'Mồng tơi là loại rau lá mềm, giàu chất nhờn, thường được sử dụng để nấu canh, giúp thanh nhiệt, giải độc cơ thể. Rau mồng tơi có tác dụng bổ sung vitamin và khoáng chất, tốt cho sức khỏe tim mạch và tiêu hóa. Giá mồng tơi khoảng 18,000 VND mỗi kg.\n\n'),
(73, 'Bông Cải Trắng', 'Rau Củ', 'Rau', 'Giòn, giàu chất xơ, thích hợp luộc, hấp.', 35000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/800x0/https://cms-prod.s3-sgn09.fptcloud.com/bong_cai_trang_co_tac_dung_gi_doi_voi_suc_khoe_1_ea7dfbebb2.jpg', 'Bông cải trắng (súp lơ trắng) có kết cấu giòn, chứa nhiều chất xơ và vitamin, rất tốt cho hệ tiêu hóa và sức khỏe tổng thể. Bông cải trắng thích hợp cho các món xào, luộc hoặc hấp. Giá bông cải trắng khoảng 35,000 VND mỗi kg.\n\n'),
(74, 'Rau Răm', 'Rau Gia Vị', 'Rau', 'Tăng hương vị cho món ăn, thường ăn sống.', 10000, 'https://vcdn1-suckhoe.vnecdn.net/2022/05/25/1a-1653469641-2874-1653469681.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=RnM7mSwm3M8FYip8b9RPDw', 'Rau răm được dùng làm gia vị trong các món ăn, đặc biệt là các món ăn sống hoặc trộn gỏi. Rau răm có tác dụng tốt cho hệ tiêu hóa, giúp giải nhiệt và làm tăng hương vị cho các món ăn. Giá rau răm khoảng 10,000 VND mỗi kg.\n\n'),
(75, 'Tía Tô', 'Rau Gia Vị', 'Rau', 'Thơm, dùng nấu cháo hoặc ăn sống.', 12000, 'https://bizweb.dktcdn.net/thumb/1024x1024/100/365/460/products/84836742-2470724243190019-6966038991032287232-n-jpeg.jpg?v=1627439415830', 'Tía tô có mùi thơm đặc trưng, được dùng làm gia vị trong nhiều món ăn như cháo hoặc ăn sống. Tía tô có tác dụng thanh nhiệt, giải độc, rất tốt cho sức khỏe đường hô hấp và tiêu hóa. Giá tía tô khoảng 12,000 VND mỗi kg.\n\n'),
(76, 'Cải Cúc', 'Rau Lá', 'Rau', 'Thích hợp nấu lẩu, giúp thanh nhiệt.', 15000, 'https://cdn.tgdd.vn/Files/2020/12/05/1311648/cai-cuc-la-gi-nhung-cong-dung-tuyet-voi-cua-cai-cuc-202206041228090077.jpg', 'Cải cúc là loại rau lá dễ ăn, thích hợp để nấu lẩu hoặc làm các món canh giúp thanh nhiệt. Rau cải cúc có tác dụng giải độc, mát gan và hỗ trợ hệ tiêu hóa. Giá cải cúc khoảng 15,000 VND mỗi kg.\n\n'),
(77, 'Rau Chùm Ngây', 'Rau Lá', 'Rau', 'Giàu canxi, thích hợp xào, nấu canh.', 45000, 'https://cdn.tgdd.vn/Files/2020/05/04/1253526/rau-chum-ngay-co-loi-ich-gi-voi-suc-khoe-nhung-ai-khong-nen-su-dung-rau-chum-ngay-202005050005330078.jpg', 'Rau chùm ngây rất giàu canxi, vitamin A và các khoáng chất, giúp cung cấp năng lượng và hỗ trợ sức khỏe xương khớp. Rau chùm ngây thích hợp để xào, nấu canh hoặc làm sinh tố. Giá rau chùm ngây khoảng 45,000 VND mỗi kg.\n\n'),
(78, 'Rau Bạc Hà', 'Rau Gia Vị', 'Rau', 'Giúp thanh nhiệt, thường ăn kèm món phở.', 20000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx_Psa1u7UVjW6oC-SvjkquOMM6BPrRS9LIA&s', 'Rau bạc hà thường được sử dụng trong các món ăn để giúp thanh nhiệt, làm mát cơ thể, và mang lại cảm giác thư giãn. Bạc hà là thành phần không thể thiếu trong các món phở, trà hoặc làm nước giải khát. Giá rau bạc hà khoảng 20,000 VND mỗi kg.\n\n'),
(79, 'Rau Cần Tây', 'Rau Lá', 'Rau', 'Thích hợp xào thịt hoặc ép nước.', 25000, 'https://cdn.nhathuoclongchau.com.vn/unsafe/https://cms-prod.s3-sgn09.fptcloud.com/a_ee693e28fb.png', 'Rau cần tây là loại rau lá thường dùng để xào thịt hoặc ép nước. Cần tây rất giàu vitamin và khoáng chất, giúp thanh lọc cơ thể và hỗ trợ tiêu hóa. Giá rau cần tây khoảng 25,000 VND mỗi kg.\n\n'),
(80, 'Ngò Gai', 'Rau Gia Vị', 'Rau', 'Lá thơm, tăng hương vị cho món ăn.', 10000, 'https://img.ykhoadiamond.com/Uploads/Content/25012024/3ad3a7af-403b-4c12-b176-a8f08f052194.jpg', 'Ngò gai là loại rau gia vị với lá thơm, được dùng để tăng hương vị cho các món ăn. Ngò gai có tác dụng tốt trong việc hỗ trợ tiêu hóa và giảm đau bụng. Giá ngò gai khoảng 10,000 VND mỗi kg.\n\n'),
(81, 'Rau Dền Đỏ', 'Rau Lá', 'Rau', 'Rau mềm, ngọt, thường dùng nấu canh.', 16000, 'https://static.kinhtedothi.vn/w960/images/upload/2023/03/31/rau-den-do-2.jpg', 'Rau dền đỏ có lá mềm, ngọt, thường được sử dụng để nấu canh hoặc làm các món ăn thanh mát. Rau dền đỏ giúp thanh nhiệt, giải độc cơ thể và tốt cho hệ tiêu hóa. Giá rau dền đỏ khoảng 16,000 VND mỗi kg.\n\n'),
(82, 'Su Hào', 'Rau Củ', 'Rau', 'Ngọt, thích hợp xào, luộc, làm dưa chua.', 22000, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlZXQUW9BVDcTJwEHtYScm_ViQrr4g7mKyFA&s', 'Su hào có vị ngọt, giòn, thích hợp để nấu canh, xào, hoặc làm dưa chua. Rau su hào rất giàu chất xơ và vitamin C, giúp cải thiện hệ tiêu hóa và tăng cường sức khỏe. Giá su hào khoảng 22,000 VND mỗi kg.\n\n'),
(83, 'Hẹ', 'Rau Gia Vị', 'Rau', 'Tăng hương vị cho món ăn, thường nấu canh.', 15000, 'https://login.medlatec.vn//ImagePath/images/20230425/20230425_La-he-cung-cap-cho-co-the-chat-chong-oxy-hoa-giup-phong-ngua-ung-thu.jpg', 'Hẹ thường được dùng trong các món canh, giúp tăng hương vị cho món ăn và hỗ trợ tiêu hóa. Hẹ có tác dụng làm ấm cơ thể và tăng cường hệ miễn dịch. Giá hẹ khoảng 15,000 VND mỗi kg.\n\n\n\n\n\n\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `birthdate` date DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `phone`, `first_name`, `last_name`, `gender`, `address`, `birthdate`, `created_at`, `updated_at`) VALUES
(2, 'phuttran', '123', 'a@gmail.com', '0989898989', 'Trần', 'Phú', 'male', 'hhsh', '2004-12-12', '2024-12-17 13:21:32', '2024-12-17 13:21:32');

--
--
CREATE TABLE `order_details` (
    `id` INT AUTO_INCREMENT Primary key,
    `order_id` INT NOT NULL,
    `product_id` INT NOT NULL,
    `product_name` VARCHAR(255) NOT NULL,
    `quantity` INT NOT NULL,
    `unit_price` int NOT NULL,
    `total_price` int NOT NULL
); 
ALTER TABLE `order_details` ADD CONSTRAINT fk_orderdetails_order FOREIGN KEY (order_id) REFERENCES orders(id);
ALTER TABLE `order_details` ADD CONSTRAINT fk_orderdetails_product FOREIGN KEY (product_id) REFERENCES product(id);


--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
