-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 28, 2023 lúc 11:35 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(4) NOT NULL,
  `name` varchar(250) NOT NULL,
  `cha_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `cha_id`) VALUES
(1, 'rau', 1),
(2, 'củ', 2),
(3, 'thịt', 3),
(4, 'hải sản', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories_cha`
--

CREATE TABLE `categories_cha` (
  `id` int(4) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories_cha`
--

INSERT INTO `categories_cha` (`id`, `name`) VALUES
(1, 'Rau'),
(2, 'Củ'),
(3, 'Thịt'),
(4, 'Hải sản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkout`
--

CREATE TABLE `checkout` (
  `id` int(4) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `postcode` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `category_id` int(11) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `created_at`, `status`, `category_id`, `detail`) VALUES
(7, 'Rau Ngò Tây', 25000, 'NgoTay.jpg', 'Ngò tây có mùi thơm dịu nhẹ, giúp kích thích vị giác, làm cho bữa ăn trở nên ngon miệng hơn.', '2023-09-28 07:32:02', 1, 1, 'RRRRRRRRRRRRRRRRRRR'),
(9, 'Thịt Ba Chỉ Heo', 65000, 'BaChiHeo.png', 'Ba chỉ heo', '2023-09-28 09:26:14', 1, 3, 'PPPPPPPPPPPPPPPPPPPP'),
(10, 'Ba CHỉ Bò Mỹ', 88000, 'BaChiBoMy.jpg', 'Ba chỉ bò mỹ', '2023-09-28 09:26:29', 1, 3, 'qqqqqqqqqqqqq'),
(11, 'Củ Cải Đỏ', 65000, 'CuCaiDo.jpg', 'Củ cải đỏ tươi', '2023-09-28 07:55:17', 1, 2, 'Trong củ cải đỏ có chứa nhiều vitamin C, vitamin A , vitamin B9, các loại chất sắt, magie, axitfolic, bêta-carotene'),
(12, 'Ốc Hương', 650000, 'Ốc Hương.jpg', 'ỐC Hương Pháp', '2023-09-28 08:12:42', 1, 4, 'ỐC Hương Pháp tươi sống'),
(13, 'Cá Ngừ Bông', 120000, 'Cá Ngừ Bông.jpg', 'Cá ngừ bông tươi sống', '2023-09-28 08:14:37', 1, 4, 'Cá Ngừ Bông'),
(14, 'Hàu Biển', 60000, 'Hàu Biển.jpg', 'Hàu biển tươi', '2023-09-28 08:15:15', 1, 4, 'Hàu Sống'),
(15, 'Tôm Hùm', 2040000, 'Tôm Hùm.jpg', 'Tôm Hùm Sống', '2023-09-28 08:16:00', 1, 4, 'Tôm Hùm'),
(16, 'Tôm Mũi Ni', 950000, 'Tôm Mũi Ni.jpg', 'Tôm Mũi Ni Tươi', '2023-09-28 08:17:15', 1, 4, 'Tôm Mũi Ni'),
(17, 'Rau Tiến Vua Khô', 210000, 'RauTienVua.jpg', 'Rau tiến vua phù hợp khi ăn kèm với các món kho, làm các món xào, nấu canh, salad, gỏi', '2023-09-28 08:22:08', 1, 1, 'Rau Tiến Vua Sấy Khô'),
(18, 'Rau Bồ Công Anh', 65000, 'RauBoCongAnh.jpg', 'Rau bồ công anh DALATFARM, một loại rau có vị ngọt, đắng, nấu ăn nhiều', '2023-09-28 08:23:30', 1, 1, 'Rau Bồ Công anh'),
(19, 'Rau Sú', 23000, 'RauSU.jpg', 'Rau Sú', '2023-09-28 08:25:47', 1, 1, 'Rau Sú'),
(20, 'Rau Xa Lách', 30000, 'XaLach.jpg', 'Các chất dinh dưỡng thủy canh được chuẩn hóa theo tiêu chuẩn Quốc Tế nên rất an toàn cho sức khỏe người dùng', '2023-09-28 08:26:48', 1, 1, 'Rau Xà Lách Tươi'),
(21, 'Củ Sắn', 18000, 'CuSan.jpg', 'Củ Sắn', '2023-09-28 08:32:33', 1, 2, 'Củ Sắn'),
(22, 'Củ SUSU', 26000, 'CuSUSu.jpg', 'Su su bao tử – Su su non chất lượng, uy tín, an toàn vệ sinh thực phẩm.', '2023-09-28 08:33:37', 1, 2, 'Cu SuSu'),
(23, 'Khoai Lang', 40000, 'KhoaiLang.jpg', 'Khoai Lang có vỏ màu đỏ, ruột màu vàng tươi,Thơm nggon và rất bổ ích', '2023-09-28 08:35:19', 1, 2, 'Khoai Lang'),
(24, 'Khoai Tây', 48000, 'KhoaiTay.jpg', 'Khi ăn có vị ngọt và bùi hơn so với những loại khoai tây thông thường khác.', '2023-09-28 08:36:12', 1, 2, 'Khoai Tây'),
(25, 'Dẻ Sườn Bò Mỹ', 125000, 'DéuonBoMy.jpg', 'Dẻ Sườn Bò', '2023-09-28 08:38:18', 1, 3, 'Dẻ Sườn Bò'),
(26, 'Thịt Cốc Lếch', 75000, 'ThitCocLech.jpg', 'Thịt Cốc Lếch tươi đảm bảo an toàn vệ sinh thực phẩm', '2023-09-28 08:38:59', 1, 3, 'Thịt Cốc Lếch tươ'),
(27, 'Thịt Gà', 99000, 'ThitGa.jpg', 'Thịt gà tươi sống đảm bảo an toàn!', '2023-09-28 08:39:44', 1, 3, 'Thịt gà tươi'),
(28, 'Thịt Heo', 78000, 'ThitHeo.jpg', 'Thịt Heo chất lượng cao', '2023-09-28 08:40:20', 1, 3, 'Thịt Heo tươi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(4, 'user', '$2y$10$SVAhuOdiuQjbXpCRjwO/F.EDT.shq3bNIQw6BNcfpfNSgAAFMW95y', 2, 'user@gmail.com'),
(5, 'admin', '$2y$10$OQIifoOxDcH5MzSLJXisLOcZwF0xXFVAInHn2j1mkz302TITqXRLO', 1, 'admin@gmail.com'),
(6, 'admin1', '$2y$10$.gC0./BLo6Dc5JcJjZUsV.rt0z9lQKV1HpyCeXeWpPtmhU9T8RxmS', 2, 'admin1@gmail.com'),
(7, 'duc', '$2y$10$PwRezDV7OPlpjk2TneAd7OyTh5DLUbohpXPCtfao6k/.1USOCY2ua', 2, 'truongcongduc2004@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_cart`
--

CREATE TABLE `user_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(4) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subtotal` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_cart`
--

INSERT INTO `user_cart` (`id`, `product_id`, `user_id`, `order_date`, `subtotal`, `quantity`) VALUES
(3, 1, 4, '2023-09-26 15:27:33', 75000, 3),
(4, 2, 4, '2023-09-27 06:08:00', 50000, 2),
(5, 7, 4, '2023-09-28 09:33:25', 25000, 1),
(6, 10, 4, '2023-09-28 09:33:27', 440000, 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories_cha`
--
ALTER TABLE `categories_cha`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `categories_cha`
--
ALTER TABLE `categories_cha`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
