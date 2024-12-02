-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 10:15 AM
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
(2, 'Nguyễn Vũ Un', '0382154667', '123', '111@gm.uit.edu.vn', '50/27/4 zczc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id_drinks`);

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
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id_drinks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `topping`
--
ALTER TABLE `topping`
  MODIFY `id_toppings` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
