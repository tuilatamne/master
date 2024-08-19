-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th8 18, 2024 lúc 07:54 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `master`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `fullname`, `password`, `create_at`, `update_at`) VALUES
(1, 'admin', 'huynhminhtamm2002@gmail.com', 'Huỳnh Minh Tâm', '$2y$10$QSatZ3QGErN6S4lajDLL7ud46177rNym6gyGroQKVos8e7ftyUKx.', '2024-07-18 11:11:51', '2024-07-18 11:11:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_token`
--

CREATE TABLE `admin_token` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_token`
--

INSERT INTO `admin_token` (`id`, `admin_id`, `token`, `create_at`) VALUES
(109, 1, '9d46dbdd06c130e4b0bc6cbf54215f0ab0acc57f', '2024-08-18 18:31:56');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `type`, `image`, `link`) VALUES
(1, 'logo', '1723980773.png', NULL),
(2, 'favicon', '1723993886.png', NULL),
(29, 'gioi-thieu', '1723789193.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `slug` mediumtext DEFAULT NULL,
  `title` mediumtext DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `noibat` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `seo_title` varchar(200) DEFAULT NULL,
  `seo_keywords` mediumtext DEFAULT NULL,
  `seo_description` mediumtext DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `type`, `slug`, `title`, `description`, `content`, `image`, `noibat`, `status`, `seo_title`, `seo_keywords`, `seo_description`, `create_at`, `update_at`) VALUES
(1, 'gioi-thieu', 'gioi-thieu', NULL, NULL, '<p><strong>Bia tươi Đức</strong> là niềm tự hào của người dân Đức. Với người Đức, bia không chỉ là đồ uống, mà còn là nét văn hoá ẩm thực đặc trưng. Hương vị bia ở đây luôn được ưa chuộng trên toàn thế giới. Giờ đây, với sự ra đời của nhiều chủng loại bia khác nhau đã ngự trị thế giới với hơn 100 năm trên thị trường. Nổi tiếng với công thức chiết xuất giữ lại sự nguyên vẹn về hương vị bia nguyên chất đến từ Đức. Theo chuyên gia, trong bia tươi đức có chứa nhiều nấm men, thúc đẩy tiêu hoá trong cơ thể người. Trong bia tươi giữ lại được các enzym hoạt động, các axitamin và protein hoà tan giúp kích thích tiêu hoá.</p><p><strong>Bia tươi Đức</strong> là loại bia nguyên liệu cao cấp nhập khẩu, &nbsp;nên vị sẽ đặc, đậm đà hơn so với các loại bia khác. Để đảm bảo độ ngon tuyệt đối nhất. Có 2 dòng bia được ưa chuộng nhất đó là bia đen và bia vàng. Bia vàng được nấu với hàm lượng hoa bia cao hơn. Bia đen được sản xuất với nguyên liệu lúa mạch sấy khô cho có màu đen. Sự khác biệt chính của 2 dòng bia chính là về tính chất của bia: bia đen có độ đạm cao trong khi bia vàng có nhiều vitamin như B2, B6 và B9 tốt cho sức khỏe. Bia đen có vị ngọt còn bia vàng lại có vị đắng. Đây cũng là điểm khác biệt giữa 2 dòng bia này.</p><p>Cùng những ưu điểm của dòng bia tươi truyền thống. Không chất bảo quản, Chống loãng xương với dòng bia đen ( stour), phù hợp với nhiều đối tượng muốn bảo vệ sức khoẻ. Dòng bia vàng (Pilsner) vị truyền thống đánh thức mọi giác quan. Riêng dòng bia trái cây (Sunrise) ngọt ngào đặt biệt dành riêng cho phái nữ.</p><p>Người người uống bia, nhà nhà uống bia. Không chỉ đơn thuần là một cuộc vui, uống bia tươi đức còn là cảm nhận văn hoá của người Đức. Với vị ngon trong từng ngụm bia khiến người thưởng thức khó lòng mà quên được. Sẽ rất đáng để bạn một lần thưởng thức loại bia VINAKEN &nbsp;đen hay &nbsp;vàng hoặc bia &nbsp;trái cây nổi tiếng này.</p>', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-15 03:54:33', '0000-00-00 00:00:00'),
(2, 'lien-he', 'lien-he', NULL, NULL, '<p><strong>BIA TƯƠI ĐỨC QUANG MINH</strong></p><p>Địa chỉ: 32 Đường Số 5, Bà Điểm Hóc Môn, TpHCM</p><p>Điện thoại: 098 1166 252</p><p>Website: biatuoicongngheduc.com</p>', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-14 15:13:43', '0000-00-00 00:00:00'),
(3, 'footer', NULL, NULL, NULL, '<p><strong>Địa chỉ: </strong>32 Đường Số 5, Bà Điểm Hóc Môn, TpHCM</p><p><strong>Điện thoại:</strong> <a href=\"tel:0981166252\">098 1166 252</a></p><p><strong>Website: </strong><a href=\"./\">biatuoicongngheduc.com</a></p>', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-16 06:57:27', '0000-00-00 00:00:00'),
(11, 'chinh-sach', 'chinh-sach-mua-hang', 'Chính sách mua hàng', '', '', NULL, NULL, NULL, '', '', '', '2024-08-13 10:04:00', '0000-00-00 00:00:00'),
(12, 'chinh-sach', 'chinh-sach-doi-tra', 'Chính sách đổi trả', '', '', NULL, NULL, NULL, '', '', '', '2024-08-13 10:04:11', '0000-00-00 00:00:00'),
(13, 'chinh-sach', 'chinh-sach-ho-tro-khach', 'Chính sách hỗ trợ khách', '', '', NULL, NULL, NULL, '', '', '', '2024-08-13 10:04:31', '0000-00-00 00:00:00'),
(18, 'gioi-thieu-index', NULL, NULL, NULL, '<p><strong>Bia tươi Đức</strong> là niềm tự hào của người dân Đức. Với người Đức, bia không chỉ là đồ uống, mà còn là nét văn hoá ẩm thực đặc trưng. Hương vị bia ở đây luôn được ưa chuộng trên toàn thế giới. Giờ đây, với sự ra đời của nhiều chủng loại bia khác nhau đã ngự trị thế giới với hơn 100 năm trên thị trường. Nổi tiếng với công thức chiết xuất giữ lại sự nguyên vẹn về hương vị bia nguyên chất đến từ Đức. Theo chuyên gia, trong bia tươi đức có chứa nhiều nấm men, thúc đẩy tiêu hoá trong cơ thể người. Trong bia tươi giữ lại được các enzym hoạt động, các axitamin và protein hoà tan giúp kích thích tiêu hoá.</p>', NULL, NULL, NULL, NULL, NULL, NULL, '2024-08-16 13:38:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_type_id` int(11) DEFAULT NULL,
  `slug` mediumtext DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `seo_title` varchar(200) DEFAULT NULL,
  `seo_keywords` mediumtext DEFAULT NULL,
  `seo_desc` mediumtext DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_types`
--

CREATE TABLE `product_types` (
  `id` int(11) NOT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `seo_title` varchar(200) DEFAULT NULL,
  `seo_keywords` mediumtext DEFAULT NULL,
  `seo_desc` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `seo_title` varchar(200) NOT NULL,
  `seo_keywords` mediumtext DEFAULT NULL,
  `seo_description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo`
--

INSERT INTO `seo` (`id`, `type`, `seo_title`, `seo_keywords`, `seo_description`) VALUES
(1, 'index', 'Bia Tươi Đức Quang Minh', 'Bia Tươi Đức Quang Minh', 'Chuyên phân phối bia tươi đức tại Long an và các tỉnh miền tây '),
(2, 'san-pham', 'Sản phẩm', 'Sản phẩm', 'Sản phẩm'),
(3, 'tin-tuc', 'Tin tức', 'Tin tức', 'Tin tức'),
(4, 'lien-he', 'Liên hệ', 'Liên hệ', 'Liên hệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(200) NOT NULL,
  `setting_value` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'company_name', 'Vinaphaco'),
(2, 'email', 'thietkewebsitechuyennghiep247@gmail.com'),
(3, 'phone_number', '0981166252'),
(4, 'zalo', '0981166252'),
(5, 'link_fanpage', ''),
(6, 'link_messenger', ''),
(7, 'address', '32 Đường Số 5, Bà Điểm Hóc Môn, TpHCM'),
(8, 'link_google_map', 'https://maps.app.goo.gl/iuTWi5YEtx8kzB4s7'),
(9, 'iframe_google_map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7071118709487!2d106.59050791576534!3d10.833711342166382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bae9da887fb%3A0x2fa9d219c535d558!2sVinaken%20Brewery!5e0!3m2!1sen!2s!4v1723638548950!5m2!1sen!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'google_analytic', ''),
(11, 'google_webmaster_tool', ''),
(12, 'head_js', ''),
(13, 'body_js', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin_token`
--
ALTER TABLE `admin_token`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `admin_token`
--
ALTER TABLE `admin_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin_token`
--
ALTER TABLE `admin_token`
  ADD CONSTRAINT `admin_token_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
