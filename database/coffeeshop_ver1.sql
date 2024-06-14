-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 12:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `address_line` varchar(255) NOT NULL,
  `city_state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `postal_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `users_id`, `address_line`, `city_state`, `country`, `postal_code`) VALUES
(1, 1, 'Đại học Bách Khoa Hà Nội', 'Hà Nội', 'Việt Nam', 100000),
(2, 1, 'Số 1, Đại Cồ Việt', 'Hà Nội', 'Việt Nam', 100000),
(3, 2, 'Số 123, Đường Lê Lợi', 'Hồ Chí Minh', 'Việt Nam', 700000),
(4, 3, 'Số 456, Đường Trần Hưng Đạo', 'Đà Nẵng', 'Việt Nam', 550000),
(5, 4, 'Số 789, Đường Hoàng Diệu', 'Hải Phòng', 'Việt Nam', 180000),
(6, 5, 'Số 101, Đường Phan Đình Phùng', 'Huế', 'Việt Nam', 530000),
(7, 6, 'Số 202, Đường Nguyễn Văn Cừ', 'Cần Thơ', 'Việt Nam', 900000),
(8, 7, 'Số 303, Đường Võ Nguyên Giáp', 'Nha Trang', 'Việt Nam', 650000),
(9, 8, 'Số 404, Đường Lý Thường Kiệt', 'Quảng Ninh', 'Việt Nam', 200000),
(10, 9, 'Số 505, Đường Nguyễn Trãi', 'Biên Hòa', 'Việt Nam', 810000),
(11, 10, 'Số 606, Đường Hùng Vương', 'Buôn Ma Thuột', 'Việt Nam', 630000);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(2048) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `users_id`, `title`, `content`, `image`, `create_time`, `update_time`) VALUES
(1, 1, 'First Blog Post', 'This is the content of the first blog post.', NULL, '2024-06-10 16:47:48', '2024-06-10 16:47:48'),
(2, 2, 'Admin Blog Post', 'This is the content of an admin blog post.', NULL, '2024-06-10 16:47:48', '2024-06-10 16:47:48'),
(3, 3, 'User A Blog Post', 'This is the content of User A\'s blog post.', NULL, '2024-06-10 16:47:48', '2024-06-10 16:47:48'),
(4, 4, 'User B Blog Post', 'This is the content of User B\'s blog post.', NULL, '2024-06-10 16:47:48', '2024-06-10 16:47:48'),
(5, 5, 'User C Blog Post', 'This is the content of User C\'s blog post.', NULL, '2024-06-10 16:47:48', '2024-06-10 16:47:48'),
(6, 6, 'User D Blog Post', 'This is the content of User D\'s blog post.', NULL, '2024-06-10 16:47:48', '2024-06-10 16:47:48'),
(7, 7, 'User E Blog Post', 'This is the content of User E\'s blog post.', NULL, '2024-06-10 16:47:48', '2024-06-10 16:47:48'),
(8, 8, 'User F Blog Post', 'This is the content of User F\'s blog post.', NULL, '2024-06-10 16:47:48', '2024-06-10 16:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `users_id`, `content`, `sent_at`) VALUES
(1, 1, 'Nho và Chuối', '2024-06-10 16:50:27'),
(2, 2, 'Cà phê của cửa hàng rất ngon', '2024-06-10 16:50:28'),
(3, 3, 'Mình rất thích không gian ở đây, rất ấm cúng và thoải mái', '2024-06-10 16:50:29'),
(4, 4, 'Nhân viên phục vụ rất nhiệt tình và chu đáo', '2024-06-10 16:50:27'),
(5, 5, 'Bánh ngọt của cửa hàng rất ngon, đặc biệt là bánh tiramisu', '2024-06-10 16:50:27'),
(6, 6, 'Thức uống matcha latte ở đây rất đậm đà', '2024-06-10 16:50:27'),
(7, 7, 'Mình thường đến đây làm việc vì wifi rất mạnh và ổn định', '2024-06-10 16:50:27'),
(8, 8, 'Giá cả hợp lý so với chất lượng đồ uống và dịch vụ', '2024-06-10 16:50:27'),
(9, 9, 'Mình rất thích các loại trà thảo mộc của quán', '2024-06-10 16:50:27'),
(10, 10, 'Quán có nhiều góc sống ảo rất đẹp, thích hợp cho chụp hình', '2024-06-10 16:50:27'),
(11, 1, 'Mình sẽ giới thiệu quán cho bạn bè và người thân', '2024-06-10 16:50:27'),
(12, 2, 'Cảm ơn quán đã có chương trình khuyến mãi hấp dẫn', '2024-06-10 16:50:27'),
(13, 3, 'Quán có nhiều sách hay để đọc khi thưởng thức cà phê', '2024-06-10 16:50:27'),
(14, 4, 'Mình thích ngồi ngoài trời vào buổi sáng để thưởng thức cà phê', '2024-06-10 16:50:27'),
(15, 5, 'Cà phê sữa đá ở đây đúng chuẩn vị Việt Nam', '2024-06-10 16:50:27'),
(16, 6, 'Nhân viên quán rất thân thiện và niềm nở', '2024-06-10 16:50:27'),
(17, 7, 'Menu đa dạng, có nhiều sự lựa chọn cho khách hàng', '2024-06-10 16:50:27'),
(18, 8, 'Mình thích cà phê rang xay tại quán, rất thơm và đậm đà', '2024-06-10 16:50:27'),
(19, 9, 'Quán luôn sạch sẽ và gọn gàng, tạo cảm giác thoải mái cho khách', '2024-06-10 16:50:27'),
(20, 10, 'Mong quán có thêm nhiều chương trình ưu đãi cho khách hàng thân thiết', '2024-06-10 16:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `status` enum('delivered','received','processing') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `payment_method` enum('QR','COD') DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `users_id`, `status`, `created_at`, `payment_method`, `address_id`) VALUES
(1, 1, 'delivered', '2024-06-10 16:55:23', 'QR', 2),
(2, 2, 'received', '2024-06-10 16:55:23', 'COD', 3),
(3, 3, 'processing', '2024-06-10 16:55:23', 'COD', 4),
(4, 4, 'delivered', '2024-06-10 16:55:23', 'QR', 5),
(5, 5, 'received', '2024-06-10 16:55:23', 'QR', 6),
(6, 6, 'processing', '2024-06-10 16:55:23', 'QR', 7),
(7, 7, 'delivered', '2024-06-10 16:55:23', 'QR', 8),
(8, 8, 'received', '2024-06-10 16:55:23', 'COD', 9),
(9, 9, 'processing', '2024-06-10 16:55:23', 'COD', 10),
(10, 10, 'delivered', '2024-06-10 16:55:23', 'QR', 1),
(11, 1, 'delivered', '2024-06-11 17:11:23', 'COD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `orders_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`orders_id`, `products_id`, `quantity`) VALUES
(1, 1, 2),
(1, 2, 1),
(2, 3, 3),
(2, 4, 1),
(3, 5, 2),
(3, 6, 2),
(4, 7, 1),
(4, 8, 3),
(5, 9, 4),
(5, 10, 2),
(6, 11, 2),
(6, 12, 1),
(7, 13, 3),
(7, 14, 2),
(8, 15, 1),
(8, 16, 4),
(9, 17, 2),
(9, 18, 1),
(10, 19, 3),
(10, 20, 2),
(11, 43, 2),
(11, 21, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(2048) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'Đường đen sữa đá', 'Nếu chuộng vị cà phê đậm đà, bùng nổ và thích vị đường đen ngọt thơm, Đường Đen Sữa Đá đích thị là thức uống dành cho bạn. Không chỉ giúp bạn tỉnh táo buổi sáng, Đường Đen Sữa Đá còn hấp dẫn đến ngụm cuối cùng bởi thạch cà phê giòn dai, nhai cực cuốn. - Khuấy đều trước khi sử dụng', 45000, 'https://product.hstatic.net/1000075078/product/1686716532_dd-suada_c180c6187e644babbac7019a2070231e.jpg'),
(2, 'Cà phê sữa đá', 'Thức uống giúp tỉnh táo tức thì để bắt đầu ngày mới thật hứng khởi. Không đắng khét như cà phê truyền thống, Cà phê sữa Đá mang hương vị hài hoà đầy lôi cuốn. Là sự đậm đà của 100% cà phê Arabica Cầu Đất rang vừa tới, biến tấu tinh tế với sữa đặc và kem sữa ngọt ngào cực quyến rũ. Càng hấp dẫn hơn với topping thạch 100% cà phê nguyên chất giúp giữ trọn vị ngon đến ngụm cuối cùng.', 39000, 'https://product.hstatic.net/1000075078/product/1675355354_bg-tch-sua-da-no_4fbf208885ed464ab4b5e145336d42a2.jpg'),
(3, 'Cà phê sữa nóng', 'Cà phê được pha phin truyền thống kết hợp với sữa đặc tạo nên hương vị đậm đà, hài hòa giữa vị ngọt đầu lưỡi và vị đắng thanh thoát nơi hậu vị.', 39000, 'https://product.hstatic.net/1000075078/product/1639377770_cfsua-nong_9a47f58888e7444a9979e0d117d49ad3.jpg'),
(4, 'Trà xanh Espresso Marble', 'Cho ngày thêm tươi, tỉnh, êm, mượt với Trà Xanh Espresso Marble. Đây là sự mai mối bất ngờ giữa trà xanh Tây Bắc vị mộc và cà phê Arabica Đà Lạt. Muốn ngày thêm chút highlight, nhớ tìm đến sự bất ngờ này bạn nhé!', 49000, 'https://product.hstatic.net/1000075078/product/1696220139_tra-xanh-espresso-marble_26a0eb92bfd649508d0e93173e9b3083.jpg'),
(5, 'Bạc sỉu', 'Bạc sỉu chính là \"Ly sữa trắng kèm một chút cà phê\". Thức uống này rất phù hợp những ai vừa muốn trải nghiệm chút vị đắng của cà phê vừa muốn thưởng thức vị ngọt béo ngậy từ sữa.', 29000, 'https://product.hstatic.net/1000075078/product/1639377904_bac-siu_525b9fa5055b41f183088c8e479a9472.jpg'),
(6, 'Bạc sỉu nóng', 'Bạc sỉu chính là \"Ly sữa trắng kèm một chút cà phê\". Thức uống này rất phù hợp những ai vừa muốn trải nghiệm chút vị đắng của cà phê vừa muốn thưởng thức vị ngọt béo ngậy từ sữa.', 39000, 'https://product.hstatic.net/1000075078/product/1639377926_bacsiunong_51fd4560c6b74a249176abc43f8f0ad6.jpg'),
(7, 'Cà phê đen đá', 'Không ngọt ngào như Bạc sỉu hay Cà phê sữa, Cà phê đen mang trong mình phong vị trầm lắng, thi vị hơn. Người ta thường phải ngồi rất lâu mới cảm nhận được hết hương thơm ngào ngạt, phảng phất mùi cacao và cái đắng mượt mà trôi tuột xuống vòm họng.', 29000, 'https://product.hstatic.net/1000075078/product/1639377797_ca-phe-den-da_6f4766ec0f8b4e929a8d916ae3c13254.jpg'),
(8, 'Cà phê đen nóng', 'Không ngọt ngào như Bạc sỉu hay Cà phê sữa, Cà phê đen mang trong mình phong vị trầm lắng, thi vị hơn. Người ta thường phải ngồi rất lâu mới cảm nhận được hết hương thơm ngào ngạt, phảng phất mùi cacao và cái đắng mượt mà trôi tuột xuống vòm họng.', 39000, 'https://product.hstatic.net/1000075078/product/1639377816_ca-phe-den-nong_2e0cb9233846467fbdcb76e99d2b7cac.jpg'),
(9, 'Đương đen Marble Latte', 'Đường Đen Marble Latte êm dịu cực hấp dẫn bởi vị cà phê đắng nhẹ hoà quyện cùng vị đường đen ngọt thơm và sữa tươi béo mịn. Sự kết hợp đầy mới mẻ của cà phê và đường đen cũng tạo nên diện mạo phân tầng đẹp mắt. Đây là lựa chọn đáng thử để bạn khởi đầu ngày mới đầy hứng khởi. - Khuấy đều trước khi sử dụng ', 55000, 'https://product.hstatic.net/1000075078/product/1686716537_dd-latte_785591205184481597a2a79b9331e03b.jpg'),
(10, 'Caramel Machiato Đá', 'Khuấy đều trước khi sử dụng Caramel Macchiato sẽ mang đến một sự ngạc nhiên thú vị khi vị thơm béo của bọt sữa, sữa tươi, vị đắng thanh thoát của cà phê Espresso hảo hạng và vị ngọt đậm của sốt caramel được gói gọn trong một tách cà phê.', 55000, 'https://product.hstatic.net/1000075078/product/caramel-macchiato_143623_0e070a39d0e54e808db4d91049430b51.jpg'),
(11, 'Caramel Machiato Nóng', 'Caramel Macchiato sẽ mang đến một sự ngạc nhiên thú vị khi vị thơm béo của bọt sữa, sữa tươi, vị đắng thanh thoát của cà phê Espresso hảo hạng và vị ngọt đậm của sốt caramel được gói gọn trong một tách cà phê.', 55000, 'https://product.hstatic.net/1000075078/product/caramelmacchiatonong_168039_9a4c155f15294771b9c300b0230c6a88.jpg'),
(12, 'Latte Đá', 'Một sự kết hợp tinh tế giữa vị đắng cà phê Espresso nguyên chất hòa quyện cùng vị sữa nóng ngọt ngào, bên trên là một lớp kem mỏng nhẹ tạo nên một tách cà phê hoàn hảo về hương vị lẫn nhãn quan.', 55000, 'https://product.hstatic.net/1000075078/product/latte-da_438410_ff2be8d76067434385f8e27b33fed780.jpg'),
(13, 'Latte Nóng', 'Một sự kết hợp tinh tế giữa vị đắng cà phê Espresso nguyên chất hòa quyện cùng vị sữa nóng ngọt ngào, bên trên là một lớp kem mỏng nhẹ tạo nên một tách cà phê hoàn hảo về hương vị lẫn nhãn quan.', 55000, 'https://product.hstatic.net/1000075078/product/latte_851143_377d5e11c1e145a8bf5f82a64047e60d.jpg'),
(14, 'Americano Đá', 'Americano được pha chế bằng cách pha thêm nước với tỷ lệ nhất định vào tách cà phê Espresso, từ đó mang lại hương vị nhẹ nhàng và giữ trọn được mùi hương cà phê đặc trưng.', 45000, 'https://product.hstatic.net/1000075078/product/classic-cold-brew_791256_d4d8388a3d724f879845680c0239ff68.jpg'),
(15, 'Americano Nóng', 'Americano được pha chế bằng cách pha thêm nước với tỷ lệ nhất định vào tách cà phê Espresso, từ đó mang lại hương vị nhẹ nhàng và giữ trọn được mùi hương cà phê đặc trưng.', 45000, 'https://product.hstatic.net/1000075078/product/1636647328_arme-nong_3c118e3822444aadb7f0e1a162d5264a.jpg'),
(16, 'Cappuccino Đá', 'Capuchino là thức uống hòa quyện giữa hương thơm của sữa, vị béo của bọt kem cùng vị đậm đà từ cà phê Espresso. Tất cả tạo nên một hương vị đặc biệt, một chút nhẹ nhàng, trầm lắng và tinh tế.', 55000, 'https://product.hstatic.net/1000075078/product/capu-da_487470_e06d3835cbc84e51bd635b04d541494e.jpg'),
(17, 'Cappuccino Nóng', 'Capuchino là thức uống hòa quyện giữa hương thơm của sữa, vị béo của bọt kem cùng vị đậm đà từ cà phê Espresso. Tất cả tạo nên một hương vị đặc biệt, một chút nhẹ nhàng, trầm lắng và tinh tế.', 55000, 'https://product.hstatic.net/1000075078/product/cappuccino_621532_f42ec557eda145b5958374ca67e65ff2.jpg'),
(18, 'Espresso Đá', 'Một tách Espresso nguyên bản được bắt đầu bởi những hạt Arabica chất lượng, phối trộn với tỉ lệ cân đối hạt Robusta, cho ra vị ngọt caramel, vị chua dịu và sánh đặc.', 45000, 'https://product.hstatic.net/1000075078/product/cfdenda-espressoda_185438_1515261ef60b482eb58e1c545e7410a3.jpg'),
(19, 'Espresso Nóng', 'Một tách Espresso nguyên bản được bắt đầu bởi những hạt Arabica chất lượng, phối trộn với tỉ lệ cân đối hạt Robusta, cho ra vị ngọt caramel, vị chua dịu và sánh đặc.', 45000, 'https://product.hstatic.net/1000075078/product/espressonong_612688_41d0812d5efb47aaaebaea91a3b206db.jpg'),
(20, 'Cold Brew Kim quất', 'Vị chua ngọt của Kim Quất làm dậy lên hương vị trái cây tự nhiên vốn sẵn có trong hạt cà phê Arabica Cầu Đất, mang đến một ly Cold Brew vừa nhẹ nhàng và thanh mát, đã khát ngày hè.', 49000, 'https://product.hstatic.net/1000075078/product/1716811739_cold-brew-kim-quat-2_accd458085414678b3f86996899fe92f.jpg'),
(21, 'Cold Brew Sữa Tươi', 'Thanh mát và cân bằng với hương vị cà phê nguyên bản 100% Arabica Cầu Đất cùng sữa tươi thơm béo cho từng ngụm tròn vị, hấp dẫn.', 49000, 'https://product.hstatic.net/1000075078/product/cold-brew-sua-tuoi_379576_990956a1473e4ded82c8f76b877b7d15.jpg'),
(22, 'Cold Brew Truyền Thống', 'Cold Brew được ủ và phục vụ mỗi ngày từ 100% hạt Arabica Cầu Đất với hương gỗ thông, hạt dẻ, nốt sô-cô-la đặc trưng, thoang thoảng hương khói nhẹ giúp Cold Brew giữ nguyên vị tươi mới.', 45000, 'https://product.hstatic.net/1000075078/product/classic-cold-brew_239501_31d6bfe69bc04714a437cff0fe0317ab.jpg'),
(23, 'Cold Brew Phúc Bồn Tử', 'Vị chua ngọt của trái phúc bồn tử, làm dậy lên hương vị trái cây tự nhiên vốn sẵn có trong hạt cà phê, hòa quyện thêm vị đăng đắng, ngọt dịu nhẹ nhàng của Cold Brew 100% hạt Arabica Cầu Đất để mang đến một cách thưởng thức cà phê hoàn toàn mới, vừa thơm lừng hương cà phê quen thuộc, vừa nhẹ nhàng và thanh mát bởi hương trái cây đầy thú vị.', 49000, 'https://product.hstatic.net/1000075078/product/1675329120_coldbrew-pbt_127e09b0000c4027992bc3168899a656.jpg'),
(24, 'Bơ Sữa Phô Mai Tươi', 'Bơ sáp Đắk Lắk dẻo quẹo hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Sữa Oolong Tứ Quý đượm hương càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.', 55000, 'https://product.hstatic.net/1000075078/product/1717388020_bo-pho-mai_8646130a7e634562b938c581b4ffd4a5.jpg'),
(25, 'Dâu Phô Mai Tươi', 'Dâu tây Đà Lạt chín mọng hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Oolong Tứ Quý đượm hương và thạch kim quất mềm tan càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.', 55000, 'https://product.hstatic.net/1000075078/product/1717387639_dau-pho-mai_e76f29878dd1441096c55785ccc8c5a5.jpg'),
(26, 'Mận Phô Mai Tươi', 'Mận hậu đặc sản Mộc Châu đỏ thơm căng mọng, hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Oolong Tứ Quý đượm hương và thạch kim quất mềm tan càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.', 55000, 'https://product.hstatic.net/1000075078/product/1717387385_man-pho-mai_7b164150c097407d991e80f9a53ff8ca.jpg'),
(27, 'Mãng Cầu Phô Mai Tươi', 'Mãng cầu Nam Bộ chín tự nhiên đậm vị, hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Xanh Tây Bắc êm dịu và thạch kim quất mềm tan càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.', 55000, 'https://product.hstatic.net/1000075078/product/1717387907_man-cau-pho-mai_88d23328791b4d9fb2beb08378fbc4ad.jpg'),
(28, 'Nho Phô Mai Tươi', 'Nho xanh vào vụ mọng nước ngọt thơm, hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Xanh Tây Bắc êm dịu và thạch kim quất mềm tan càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.', 55000, 'https://product.hstatic.net/1000075078/product/1717387602_nho-pho-mai_2674abbbf0a0401094da2762cb8f3ffe.jpg'),
(29, 'Oolong Tứ Qúy Kim Quất Trân Châu', 'Đậm hương trà, sảng khoái du xuân cùng Oolong Tứ Quý Kim Quất Trân Châu. Vị nước cốt kim quất tươi chua ngọt, thêm trân châu giòn dai.', 49000, 'https://product.hstatic.net/1000075078/product/1709005899_kimquat-xuan-1_eb248c1e71904e5f9323e2ba6a7b8d4f.jpg'),
(30, 'Oolong Tứ Qúy Vải', 'Đậm hương trà, thanh mát sắc xuân với Oolong Tứ Quý Vải. Cảm nhận hương hoa đầu mùa, hòa quyện cùng vị vải chín mọng căng tràn sức sống.', 49000, 'https://product.hstatic.net/1000075078/product/1709004168_vai-xuan-1_00a490efb43a4da187882d95337b2db9.jpg'),
(31, 'Trà Đào Cam Sả', 'Vị thanh ngọt của đào, vị chua dịu của Cam Vàng nguyên vỏ, vị chát của trà đen tươi được ủ mới mỗi 4 tiếng, cùng hương thơm nồng đặc trưng của sả chính là điểm sáng làm nên sức hấp dẫn của thức uống này.', 49000, 'https://product.hstatic.net/1000075078/product/1669736819_tra-dao-cam-sa-da_63defc32ce214da487850604a63ff281.png'),
(32, 'Oolong Tứ Qúy Sen', 'Nền trà oolong hảo hạng kết hợp cùng hạt sen tươi, bùi bùi và lớp foam cheese béo ngậy. Trà hạt sen là thức uống thanh mát, nhẹ nhàng phù hợp cho cả buổi sáng và chiều tối.', 49000, 'https://product.hstatic.net/1000075078/product/tra-sen_905594_cb9a4dfb65884b33811ab70d149a5387.jpg'),
(33, 'Oolong Tứ Qúy Sen Nóng', 'Nền trà oolong hảo hạng kết hợp cùng hạt sen tươi, bùi bùi thơm ngon. Trà hạt sen là thức uống thanh mát, nhẹ nhàng phù hợp cho cả buổi sáng và chiều tối.', 59000, 'https://product.hstatic.net/1000075078/product/tra-sen-nong_025153_edd9d4665402468385ba17cae6d2bef5.jpg'),
(34, 'Trà Đào Cam Sả', 'Nền trà oolong hảo hạng kết hợp cùng hạt sen tươi, bùi bùi thơm ngon. Trà hạt sen là thức uống thanh mát, nhẹ nhàng phù hợp cho cả buổi sáng và chiều tối.', 59000, 'https://product.hstatic.net/1000075078/product/tra-sen-nong_025153_edd9d4665402468385ba17cae6d2bef5.jpg'),
(35, 'Trà Xanh Latte', 'Không cần đến Tây Bắc mới cảm nhận được sự trong trẻo của núi rừng, khi Trà Xanh Latte từ Nhà được chắt lọc từ những búp trà xanh mướt, ủ mình trong sương sớm. Trà xanh Tây Bắc vị thanh, chát nhẹ hoà cùng sữa tươi nguyên kem ngọt béo tạo nên hương vị dễ uống, dễ yêu. Đây là thức uống healthy, giúp bạn tỉnh táo một cách êm mượt, xoa dịu những căng thẳng.', 45000, 'https://product.hstatic.net/1000075078/product/1697450388_tx-latte_ef8fdb94fb2a4691b0cc909188b77829.jpg'),
(36, 'Trà Xanh Latte Nóng', 'Trà Xanh Latte (Nóng) là phiên bản rõ vị trà nhất. Nhấp một ngụm, bạn chạm ngay vị trà xanh Tây Bắc chát nhẹ hoà cùng sữa nguyên kem thơm béo, đọng lại hậu vị ngọt ngào, êm dịu. Không chỉ là thức uống tốt cho sức khoẻ, Trà Xanh Latte (Nóng) còn là cái ôm ấm áp của đồng bào Tây Bắc gửi cho người miền xuôi.', 45000, 'https://product.hstatic.net/1000075078/product/1697450393_tx-latte-nong_3be6c0f019314336918968d951e588f2.jpg'),
(37, 'Trà Xanh Đường Đen', 'Trà Xanh Đường Đen với hiệu ứng phân tầng đẹp mắt, như phác hoạ núi đồi Tây Bắc bảng lảng trong sương mây, thấp thoáng những nương chè xanh ngát. Từng ngụm là sự hài hoà từ trà xanh đậm đà, đường đen ngọt ngào, sữa tươi thơm béo. Khuấy đều trước khi dùng, để thưởng thức đúng vị', 55000, 'https://product.hstatic.net/1000075078/product/1697450399_tx-duong-den_3342d63e65df4bd7a264ca681b9e30f1.jpg'),
(38, 'Frosty Đá Xay', 'Đá Xay Frosty Trà Xanh như lời mời mộc mạc, ghé thăm Tây Bắc vào những ngày tiết trời se lạnh, núi đèo mây phủ. Vị chát dịu, ngọt thanh của trà xanh Tây Bắc kết hợp đá xay sánh mịn, whipping cream bồng bềnh và bột trà xanh trên cùng thêm đậm vị. Đây không chỉ là thức uống mát lạnh bật mood, mà còn tốt cho sức khoẻ nhờ giàu vitamin và các chất chống oxy hoá.', 59000, 'https://product.hstatic.net/1000075078/product/1697450407_tx-frosty_effb42ad21a54240b26ea1118c8d9d44.jpg'),
(39, 'Chocolate Nóng', 'Bột chocolate nguyên chất hoà cùng sữa tươi béo ngậy. Vị ngọt tự nhiên, không gắt cổ, để lại một chút đắng nhẹ, cay cay trên đầu lưỡi.', 55000, 'https://product.hstatic.net/1000075078/product/chocolatenong_949029_f8dcb92cf7914c7b8ef89f4121ad8ced.jpg'),
(40, 'Chocolate Đá', 'Bột chocolate nguyên chất hoà cùng sữa tươi béo ngậy, ấm nóng. Vị ngọt tự nhiên, không gắt cổ, để lại một chút đắng nhẹ, cay cay trên đầu lưỡi.', 55000, 'https://product.hstatic.net/1000075078/product/chocolate-da_877186_c9267c39686540d38d30adcab969888f.jpg'),
(41, 'Frosty Bánh Kem Dâu', 'Bồng bềnh như một đám mây, Đá Xay Frosty Bánh Kem Dâu vừa ngon mắt vừa chiều vị giác bằng sự ngọt ngào. Bắt đầu bằng cái chạm môi với lớp kem whipping cream, cảm nhận ngay vị beo béo lẫn sốt dâu thơm lừng. Sau đó, hút một ngụm là cuốn khó cưỡng bởi đá xay mát lạnh quyện cùng sốt dâu ngọt dịu. Lưu ý: Khuấy đều phần đá xay trước khi dùng', 59000, 'https://product.hstatic.net/1000075078/product/1697441945_banh-kem-dau_b1d03d84a9944d458f5948a3b7ce48f3.png'),
(42, 'Frosty Cà Phê Đường', 'Đá Xay Frosty Cà Phê Đường Đen mát lạnh, sảng khoái ngay từ ngụm đầu tiên nhờ sự kết hợp vượt chuẩn vị quen giữa Espresso đậm đà và Đường Đen ngọt thơm. Đặc biệt, whipping cream beo béo cùng thạch cà phê giòn dai, đậm vị nhân đôi sự hấp dẫn, khơi bừng sự hứng khởi trong tích tắc.', 59000, 'https://product.hstatic.net/1000075078/product/1697441939_ca-phe-duong-den_684615fd8fce40c2a1f6a03e0555fe62.png'),
(43, 'Frosty Caramel Abarica', 'Caramel ngọt thơm quyện cùng cà phê Arabica Cầu Đất đượm hương gỗ thông, hạt dẻ và nốt sô cô la đặc trưng tạo nên Đá Xay Frosty Caramel Arabica độc đáo chỉ có tại Nhà. Cực cuốn với lớp whipping cream béo mịn, thêm thạch cà phê giòn ngon bắt miệng.', 59000, 'https://product.hstatic.net/1000075078/product/1697441933_caramel-arabica_64cd3e11a9904076b7a64e24d6d20f21.png'),
(44, 'Frosty Chocop-Chip', 'Đá Xay Frosty Choco Chip, thử là đã! Lớp whipping cream bồng bềnh, beo béo lại có thêm bột sô cô la và sô cô la chip trên cùng. Gấp đôi vị ngon với sô cô la thật xay với đá sánh mịn, đậm đà đến tận ngụm cuối cùng.', 59000, 'https://product.hstatic.net/1000075078/product/1697441933_caramel-arabica_64cd3e11a9904076b7a64e24d6d20f21.png'),
(45, 'Frosty Phin Gato', 'Đá Xay Frosty Phin-Gato là lựa chọn không thể bỏ lỡ cho tín đồ cà phê. Cà phê nguyên chất pha phin truyền thống, thơm đậm đà, đắng mượt mà, quyện cùng kem sữa béo ngậy và đá xay mát lạnh. Nhân đôi vị cà phê nhờ có thêm thạch cà phê đậm đà, giòn dai. Thức uống khơi ngay sự tỉnh táo tức thì. Lưu ý: Khuấy đều phần đá xay trước khi dùng', 55000, 'https://product.hstatic.net/1000075078/product/1697441914_phin-gato_304446dce9ec4fe0a5527536b93f6eda.png'),
(46, 'Butter Croissant Sữa Đặc', 'Bánh Butter Croissant bạn đã yêu, nay yêu không lối thoát khi được chấm cùng sữa đặc. Thơm bơ mịn sữa, ngọt ngào lòng nhau!', 35000, 'https://product.hstatic.net/1000075078/product/1701780462_butter-sua-dac_fa93d6480f8146af9bee708a406f0155.jpg'),
(47, 'Bánh Mì Que Pate Cay', 'Vỏ bánh mì giòn tan, kết hợp với lớp nhân pate béo béo đậm đà và 1 chút cay cay sẽ là lựa chọn lý tưởng nhẹ nhàng để lấp đầy chiếc bụng đói , cho 1 bữa sáng - trưa - chiều - tối của bạn thêm phần thú vị.', 15000, 'https://product.hstatic.net/1000075078/product/banhmique_683851_7b2d4e750b854793a14ebaf9420f01c4.jpg'),
(48, 'Bánh Mì Que Pate', 'Vỏ bánh mì giòn tan, kết hợp với lớp nhân pate béo béo đậm đà sẽ là lựa chọn lý tưởng nhẹ nhàng để lấp đầy chiếc bụng đói , cho 1 bữa sáng - trưa - chiều - tối của bạn thêm phần thú vị.', 15000, 'https://product.hstatic.net/1000075078/product/1669736956_banh-mi-que-pate_91e1776a660c41d09d634b4210f0fa3a.png'),
(49, 'Mochi Kem Phúc Bồn Tử', 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân phúc bồn tử ngọt ngào. Gọi 1 chiếc Mochi cho ngày thật tươi mát. Sản phẩm phải bảo quán mát và dùng ngon nhất trong 2h sau khi nhận hàng.', 19000, 'https://product.hstatic.net/1000075078/product/1643102019_mochi-phucbontu_fca5fb9f0e4f4e988d1c27b08cd44ce0.jpg'),
(50, 'Mochi Kem Matcha', 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân trà xanh đậm vị. Gọi 1 chiếc Mochi cho ngày thật tươi mát. Sản phẩm phải bảo quán mát và dùng ngon nhất trong 2h sau khi nhận hàng.', 19000, 'https://product.hstatic.net/1000075078/product/1655348113_mochi-traxanh_3870d63621f4461e97a37c5587b443e7.jpg'),
(51, 'Mochi Kem Xoài', 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân xoài chua chua ngọt ngọt. Gọi 1 chiếc Mochi cho ngày thật tươi mát. Sản phẩm phải bảo quán mát và dùng ngon nhất trong 2h sau khi nhận hàng.', 19000, 'https://product.hstatic.net/1000075078/product/1643101968_mochi-xoai_c96ea42d1f594cf9b556025f7b8f9127.jpg'),
(52, 'Mochi Kem Chocolate', 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân chocolate độc đáo. Gọi 1 chiếc Mochi cho ngày thật tươi mát. Sản phẩm phải bảo quán mát và dùng ngon nhất trong 2h sau khi nhận hàng.', 19000, 'https://product.hstatic.net/1000075078/product/1655348107_mochi-choco_c67fbdf8a2cf48a28feb45ed80d4d8d2.jpg'),
(55, 'Mochi Kem Việt Quất', 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là \r\nlớp kem lạnh cùng nhân việt quất đặc trưng thơm thơm, ngọt dịu. Gọi 1 chiếc Mochi cho ngày thật tươi mát. \r\nSản phẩm phải bảo quán mát và dùng ngon nhất trong 2h sau khi nhận hàng.', 19000, NULL),
(56, 'Liang Biang', 'Hương vị thuần khiết của trà Ô Long Đặc Sản cùng mứt hoa nhài thơm nhẹ.', 54000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(2048) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `phone`, `image`, `role`) VALUES
(1, 'khanhquynhtran@gmail.com', '12345678', 'Trần Khánh Quỳnh', '0345678910', NULL, 'user'),
(2, 'admin@gmail.com', '12345678', 'admin', '0987654321', NULL, 'admin'),
(3, 'customer1@gmail.com', '12345678', 'Nguyễn Văn A', '0912345678', NULL, 'user'),
(4, 'customer2@gmail.com', '12345678', 'Lê Thị B', '0923456789', NULL, 'user'),
(5, 'customer3@gmail.com', '12345678', 'Phạm Văn C', '0934567890', NULL, 'user'),
(6, 'customer4@gmail.com', '12345678', 'Trần Thị D', '0945678901', NULL, 'user'),
(7, 'customer5@gmail.com', '12345678', 'Ngô Văn E', '0956789012', NULL, 'user'),
(8, 'customer6@gmail.com', '12345678', 'Hoàng Thị F', '0967890123', NULL, 'user'),
(9, 'customer7@gmail.com', '12345678', 'Đặng Văn G', '0978901234', NULL, 'user'),
(10, 'customer8@gmail.com', '12345678', 'Vũ Thị H', '0989012345', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `orders_detail_ibfk_2` (`products_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
