-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 04:01 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admins_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `role` enum('admin','superadmin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admins_id`, `username`, `password`, `fullname`, `role`) VALUES
(1, 'admin1@dozecafe.com', 'admin12345', 'admin1', 'admin'),
(2, 'admin@dozecafe.com', '123456', 'admin', 'admin'),
(3, 'mai@dozecafe.com', 'maixau1234', 'Trương Ngọc Mai', 'admin'),
(4, 'nhi@dozecafe.com', 'nho', 'Bùi Ý Nhi', 'admin'),
(5, 'chien@dozecafe.com', 'chuoibien', 'Hà Trung Chiến', 'admin'),
(6, 'quynh@dozecafe.com', 'meomeo', 'Trần Khánh Quỳnh', 'admin'),
(9, 'admin3@dozecafe.com', 'admin3', 'admin3', 'admin'),
(10, 'superadmin', '123456', 'Superadmin', 'superadmin'),
(13, 'admin6@dozecafe.com', '123456', 'admin6', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `blog_id` int(11) NOT NULL,
  `admins_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(2048) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`blog_id`, `admins_id`, `title`, `content`, `image`, `created_at`) VALUES
(1, 4, 'Thầy Phương - người đã tạo cảm hứng cho chúng tôi', 'Thầy Phương là nguồn cảm hứng để chúng tôi lập nên quán cà phê này, mang đến không gian thư giãn và sáng tạo cho mọi người. Qua học phần thực hành CSDL, chúng tôi không chỉ học thêm được rất nhiều về kiến thức môn học, mà còn tích lũy được nhiều trải nghiệm, nhiều bài học, những kinh nghiệm hữu ích trong cuộc sống. ', 'https://scontent.fhan17-1.fna.fbcdn.net/v/t39.30808-6/335905476_891499558741787_4169812642276808370_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEf0GB7heMi60V6nBqyTnexQBQnCwf4gIpAFCcLB_iAinCMH-BkE2pHiglyy2-0u0NuaD57UK1ZAPrkpkBoCir2&_nc_ohc=Be2VeCSfbdQQ7kNvgFpObqq&_nc_ht=scontent.fhan17-1.fna&oh=00_AYBrzwew2OEfWg57v6s9oWKJtu-yDRlLo4LQ_6yG4ZKSfQ&oe=666F3919', '2024-06-09 22:26:43'),
(2, 2, 'Hành trình mở quán cà phê', 'Từ ý tưởng đến thực tế, chúng tôi đã trải qua rất nhiều thử thách để có được quán cà phê như ngày hôm nay.', 'https://th.bing.com/th/id/R.4bc832972160b011e28697e3b0884232?rik=fF4k6L2xjAhv1Q&riu=http%3a%2f%2fstatic.independent.co.uk%2fs3fs-public%2fthumbnails%2fimage%2f2013%2f01%2f02%2f19%2fSmall-Batch.jpg&ehk=AumbHOfSWTXGsHm69j96Ht58pf%2fPii2kjT1O8%2fQ9eLU%3d&risl=&pid=ImgRaw&r=0', '2024-06-09 22:27:00'),
(3, 5, 'Menu đồ uống mới tại quán', 'Chúng tôi liên tục cập nhật menu với các đồ uống mới lạ và hấp dẫn.', 'https://i.etsystatic.com/11154166/r/il/2a8047/1760908365/il_fullxfull.1760908365_lsh7.jpg', '2024-06-14 22:27:52'),
(4, 3, 'Đội ngũ nhân viên nhiệt tình', 'Nhân viên của chúng tôi luôn thân thiện và sẵn sàng phục vụ khách hàng với nụ cười.', 'https://posapp.vn/wp-content/uploads/2020/01/nhan-vien-quan-cafe-2.jpg', '2024-06-03 22:28:00'),
(5, 2, 'Lợi ích của cà phê đối với sức khỏe', 'Cà phê không chỉ giúp bạn tỉnh táo mà còn có nhiều lợi ích sức khỏe khác.', 'https://th.bing.com/th/id/OIP.pxNzj6p1CkBilArRqyWTGwHaE8?rs=1&pid=ImgDetMain', '2024-06-04 22:28:07'),
(6, 1, 'Đồ uống đặc biệt mùa hè', 'Mùa hè này, hãy thử ngay các món đồ uống mát lạnh đặc biệt của chúng tôi.', 'https://phela.vn/wp-content/uploads/2021/07/14721.jpg', '2024-06-11 22:28:16'),
(7, 6, 'Gặp gỡ barista tài năng của quán', 'Chúng tôi tự hào giới thiệu những barista tài năng, người tạo nên những ly cà phê tuyệt vời.', 'https://th.bing.com/th/id/OIP.F1fqm8ke0rGjz81wG_DdhQAAAA?rs=1&pid=ImgDetMain', '2024-06-11 22:28:23'),
(8, 6, 'Cách lựa chọn hạt cà phê chất lượng', 'Tìm hiểu cách chúng tôi lựa chọn những hạt cà phê chất lượng cao.', 'https://th.bing.com/th/id/OIP.u5deXVzRa1_rBPGfjmz-1gHaE8?rs=1&pid=ImgDetMain', '2024-06-15 22:28:32'),
(9, 4, 'Đồ uống phù hợp với tâm trạng của bạn', 'Khám phá các món đồ uống phù hợp với từng tâm trạng của bạn.', 'https://phela.vn/wp-content/uploads/2021/07/14853.jpg', '2024-06-04 22:28:40'),
(15, 2, 'BST Ô Long Matcha – Một phiên bản sáng tạo từ Ô Long nguyên bản', 'BST Ô Long Matcha – Một phiên bản sáng tạo từ Ô Long nguyên bản Với cảm hứng bất tận từ nguồn nông sản Việt Nam, Phê La tự hào mang đến Bộ sưu tập Ô Long Matcha, gồm hai sản phẩm Săn Mây (Matcha đá xay) và Matcha Coco Latte. Hoà quyện giữa tầng hương của trà đặc sản cùng vị dừa ngọt thơm từ “Thủ phủ dừa của Việt Nam”, Săn Mây và Matcha Coco Latte là trải nghiệm đầy hứng khởi chinh phục những vị khách có gu thưởng thức tinh tế! Sự kết hợp với Sữa Dừa Bến Tre không chỉ gợi nhắc hương vị thân quen mà còn tạo nên một điểm nhấn độc đáo, mang đậm bản sắc văn hóa đặc trưng của người Việt.', '../uploads/banner-1-1.jpg', '2024-06-17 08:57:21'),
(18, 2, 'Đồ uống phù hợp với tâm trạng của bạn', 'Khám phá các món đồ uống phù hợp với từng tâm trạng của bạn. edit', '../uploads/14410.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `cart_view`
-- (See below for the actual view)
--
CREATE TABLE `cart_view` (
`name` varchar(255)
,`price` int(11)
,`quantity` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `users_id`, `content`, `created_at`) VALUES
(1, 25, 'Cà phê của cửa hàng rất ngon', '2024-06-12 17:33:23'),
(2, 12, 'Mình rất thích không gian ở đây, rất ấm cúng và thoải mái', '2024-06-10 16:50:29'),
(3, 4, 'Nhân viên phục vụ rất nhiệt tình và chu đáo', '2024-06-10 16:50:27'),
(4, 17, 'Giá cả hợp lý so với chất lượng đồ uống và dịch vụ', '2024-06-12 17:33:23'),
(5, 21, 'Nhân viên quán rất thân thiện và niềm nở', '2024-06-10 16:50:27'),
(6, 3, 'Không gian quán rất rộng rãi và thoáng mát', '2024-06-12 17:33:23'),
(7, 9, 'Món ăn ở đây cũng rất ngon, đặc biệt là bánh ngọt', '2024-06-10 16:50:30'),
(8, 6, 'Giá cả rất phải chăng so với chất lượng dịch vụ', '2024-06-12 17:33:23'),
(9, 14, 'Sẽ quay lại ủng hộ quán nhiều lần nữa', '2024-06-10 16:50:31'),
(10, 1, 'Mình rất ấn tượng với phong cách trang trí của quán', '2024-06-12 17:33:23'),
(11, 8, 'Wifi ở đây rất mạnh và ổn định', '2024-06-10 16:50:32'),
(12, 11, 'Nhân viên luôn niềm nở và nhiệt tình', '2024-06-12 17:33:23'),
(13, 19, 'Thức uống rất ngon và đa dạng', '2024-06-10 16:50:33'),
(14, 23, 'Mình đã giới thiệu quán này cho rất nhiều bạn bè', '2024-06-12 17:33:23'),
(15, 2, 'Không gian ở đây rất lý tưởng để học tập và làm việc', '2024-06-10 16:50:34'),
(16, 18, 'Mình rất thích nhạc ở quán, rất thư giãn', '2024-06-12 17:33:23'),
(17, 10, 'Nhân viên rất chuyên nghiệp và thân thiện', '2024-06-10 16:50:35'),
(18, 7, 'Không gian ngoài trời rất thoáng đãng và dễ chịu', '2024-06-12 17:33:23'),
(19, 16, 'Món ăn kèm rất phong phú và ngon miệng', '2024-06-10 16:50:36'),
(20, 13, 'Giá cả phải chăng và đồ uống rất ngon', '2024-06-12 17:33:23'),
(21, 5, 'Rất thích quán này vì có nhiều góc chụp hình đẹp', '2024-06-10 16:50:37'),
(22, 24, 'Mình thường đến quán này để thư giãn sau giờ làm việc', '2024-06-12 17:33:23'),
(23, 22, 'Đồ uống ở đây rất ngon và trình bày đẹp mắt', '2024-06-10 16:50:38'),
(24, 20, 'Quán có nhiều loại đồ uống mới lạ và hấp dẫn', '2024-06-12 17:33:23'),
(25, 15, 'Nhân viên luôn thân thiện và nhiệt tình với khách', '2024-06-10 16:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `admins_id` int(11) DEFAULT NULL,
  `status` enum('finished','processing','delivered') DEFAULT NULL,
  `payment_method` enum('QR','COD') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `users_id`, `admins_id`, `status`, `payment_method`, `created_at`, `address`) VALUES
(1, 14, 10, 'delivered', 'QR', '2024-06-12 17:56:49', 'Số 1 Đại Cồ Việt, Hà Nội, Việt Nam'),
(2, 23, 4, 'finished', 'COD', '2024-06-12 17:56:49', 'Cổng Trần Đại Nghĩa, ĐHBK Hà Nội, Hà Nội, Việt Nam'),
(3, 5, 4, 'finished', 'QR', '2024-06-12 17:56:49', 'Số 12 Phố Huế, Hà Nội, Việt Nam'),
(4, 8, 4, 'finished', 'COD', '2024-06-12 17:56:49', 'Số 34 Nguyễn Trãi, Hà Nội, Việt Nam'),
(5, 20, 6, 'finished', 'QR', '2024-06-12 17:56:49', 'Số 21 Lê Duẩn, Hà Nội, Việt Nam'),
(6, 12, 6, 'finished', 'COD', '2024-06-12 17:56:49', 'Số 45 Đống Đa, Hà Nội, Việt Nam'),
(7, 25, 2, 'finished', 'QR', '2024-06-12 17:56:49', 'Số 2 Hai Bà Trưng, Hà Nội, Việt Nam'),
(8, 3, 6, 'finished', 'COD', '2024-06-12 17:56:49', 'Số 8 Lý Thường Kiệt, Hà Nội, Việt Nam'),
(9, 19, 6, 'finished', 'QR', '2024-06-12 17:56:49', 'Số 22 Tôn Đức Thắng, Hà Nội, Việt Nam'),
(10, 7, 2, 'finished', 'COD', '2024-06-12 17:56:49', 'Số 18 Trần Hưng Đạo, Hà Nội, Việt Nam'),
(11, 1, 2, 'delivered', 'QR', '2024-06-12 17:56:49', 'Số 33 Láng Hạ, Hà Nội, Việt Nam'),
(12, 16, 2, 'processing', 'COD', '2024-06-12 17:56:49', 'Số 15 Cầu Giấy, Hà Nội, Việt Nam'),
(13, 10, 2, 'finished', 'QR', '2024-06-12 17:56:49', 'Số 11 Tây Hồ, Hà Nội, Việt Nam'),
(14, 24, 2, 'delivered', 'QR', '2024-06-12 17:56:49', 'Số 28 Hoàng Quốc Việt, Hà Nội, Việt Nam'),
(15, 6, 2, 'finished', 'COD', '2024-06-12 17:56:49', 'Số 37 Kim Mã, Hà Nội, Việt Nam'),
(16, 15, 2, 'processing', 'QR', '2024-06-12 17:56:49', 'Số 9 Phạm Hùng, Hà Nội, Việt Nam'),
(17, 21, 2, 'delivered', 'COD', '2024-06-12 17:56:49', 'Số 5 Đinh Tiên Hoàng, Hà Nội, Việt Nam'),
(18, 4, 2, 'finished', 'QR', '2024-06-12 17:56:49', 'Số 26 Trường Chinh, Hà Nội, Việt Nam'),
(19, 11, 2, 'processing', 'COD', '2024-06-12 17:56:49', 'Số 31 Bà Triệu, Hà Nội, Việt Nam'),
(20, 18, 2, 'delivered', 'QR', '2024-06-12 17:56:49', 'Số 7 Trần Quang Khải, Hà Nội, Việt Nam'),
(21, 9, 2, 'finished', 'COD', '2024-06-12 17:56:49', 'Số 14 Lê Lợi, Hà Nội, Việt Nam'),
(22, 17, 2, 'processing', 'QR', '2024-06-12 17:56:49', 'Số 29 Nguyễn Chí Thanh, Hà Nội, Việt Nam'),
(23, 13, 2, 'delivered', 'COD', '2024-06-12 17:56:49', 'Số 6 Thanh Xuân, Hà Nội, Việt Nam'),
(24, 2, 2, 'finished', 'QR', '2024-06-12 17:56:49', 'Số 19 Ba Đình, Hà Nội, Việt Nam'),
(25, 22, 2, 'processing', 'COD', '2024-06-12 17:56:49', 'Số 13 Đông Anh, Hà Nội, Việt Nam'),
(26, 30, 2, 'processing', 'QR', NULL, 'ĐHBKHN'),
(27, 1, 10, 'finished', 'QR', '2024-06-17 20:03:27', 'Khu Ngoại Giao Đoàn, Xuân Tảo, Bắc Từ Liêm, Hà ');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orders_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orders_id`, `products_id`, `quantity`) VALUES
(1, 5, 2),
(1, 12, 1),
(1, 8, 3),
(2, 22, 1),
(2, 19, 2),
(3, 14, 1),
(3, 6, 3),
(4, 10, 2),
(5, 25, 1),
(6, 3, 1),
(6, 18, 2),
(7, 9, 3),
(8, 21, 1),
(9, 11, 2),
(10, 2, 1),
(11, 7, 2),
(12, 15, 3),
(13, 4, 1),
(13, 23, 2),
(14, 20, 1),
(15, 13, 2),
(15, 1, 3),
(16, 17, 1),
(17, 24, 2),
(18, 16, 1),
(26, 3, 1),
(27, 3, 1),
(27, 4, 1),
(27, 7, 1),
(27, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `image` varchar(2048) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `image`, `name`, `price`, `description`) VALUES
(1, 'https://phela.vn/wp-content/uploads/2023/11/PHONG-LAN-scaled.jpg', 'Ô Long Vani Sữa', 54000, 'Trà Ô Long Đặc Sản hòa quyện nhẹ nhàng cùng Vani tự nhiên, hương vị ngọt ngào chuẩn gu tinh tế.'),
(2, 'https://product.hstatic.net/1000075078/product/1686716532_dd-suada_c180c6187e644babbac7019a2070231e.jpg', 'Đường đen sữa đá', 45000, 'Nếu chuộng vị cà phê đậm đà, bùng nổ và thích vị đường đen ngọt thơm, Đường Đen Sữa Đá đích thị là thức uống dành cho bạn. Không chỉ giúp bạn tỉnh táo buổi sáng, Đường Đen Sữa Đá còn hấp dẫn đến ngụm cuối cùng bởi thạch cà phê giòn dai, nhai cực cuốn. - Khuấy đều trước khi sử dụng'),
(3, 'https://product.hstatic.net/1000075078/product/1675355354_bg-tch-sua-da-no_4fbf208885ed464ab4b5e145336d42a2.jpg', 'Cà phê sữa đá', 39000, 'Thức uống giúp tỉnh táo tức thì để bắt đầu ngày mới thật hứng khởi. Không đắng khét như cà phê truyền thống, Cà phê sữa Đá mang hương vị hài hoà đầy lôi cuốn. Là sự đậm đà của 100% cà phê Arabica Cầu Đất rang vừa tới, biến tấu tinh tế với sữa đặc và kem sữa ngọt ngào cực quyến rũ. Càng hấp dẫn hơn với topping thạch 100% cà phê nguyên chất giúp giữ trọn vị ngon đến ngụm cuối cùng.'),
(4, 'https://phela.vn/wp-content/uploads/2024/02/6.-Phe-Ame-hat-Colom-Ethi-scaled.jpg', 'Espresso (Hạt Colom, Ethi)', 49000, 'Cà Phê Đặc Sản với nốt hương: Peach - Orange - Juicy Body - Sweet Aftertaste With Chocolate.'),
(5, 'https://product.hstatic.net/1000075078/product/1639377770_cfsua-nong_9a47f58888e7444a9979e0d117d49ad3.jpg', 'Cà phê sữa nóng', 39000, 'Cà phê được pha phin truyền thống kết hợp với sữa đặc tạo nên hương vị đậm đà, hài hòa giữa vị ngọt đầu lưỡi và vị đắng thanh thoát nơi hậu vị.'),
(6, 'https://product.hstatic.net/1000075078/product/1639377904_bac-siu_525b9fa5055b41f183088c8e479a9472.jpg', 'Bạc sỉu', 29000, 'Bạc sỉu chính là \"Ly sữa trắng kèm một chút cà phê\". Thức uống này rất phù hợp những ai vừa muốn trải nghiệm chút vị đắng của cà phê vừa muốn thưởng thức vị ngọt béo ngậy từ sữa.'),
(7, 'https://product.hstatic.net/1000075078/product/1639377926_bacsiunong_51fd4560c6b74a249176abc43f8f0ad6.jpg', 'Bạc sỉu nóng', 39000, 'Bạc sỉu chính là \"Ly sữa trắng kèm một chút cà phê\". Thức uống này rất phù hợp những ai vừa muốn trải nghiệm chút vị đắng của cà phê vừa muốn thưởng thức vị ngọt béo ngậy từ sữa.'),
(8, 'https://product.hstatic.net/1000075078/product/1639377797_ca-phe-den-da_6f4766ec0f8b4e929a8d916ae3c13254.jp', 'Cà phê đen đá', 39000, 'Không ngọt ngào như Bạc sỉu hay Cà phê sữa, Cà phê đen mang trong mình phong vị trầm lắng, thi vị hơn. Người ta thường phải ngồi rất lâu mới cảm nhận được hết hương thơm ngào ngạt, phảng phất mùi cacao và cái đắng mượt mà trôi tuột xuống vòm họng.'),
(9, 'https://product.hstatic.net/1000075078/product/1686716537_dd-latte_785591205184481597a2a79b9331e03b.jpg', 'Đường đen Marble Latte', 55000, 'Đường Đen Marble Latte êm dịu cực hấp dẫn bởi vị cà phê đắng nhẹ hoà quyện cùng vị đường đen ngọt thơm và sữa tươi béo mịn. Sự kết hợp đầy mới mẻ của cà phê và đường đen cũng tạo nên diện mạo phân tầng đẹp mắt. Đây là lựa chọn đáng thử để bạn khởi đầu ngày mới đầy hứng khởi. - Khuấy đều trước khi sử dụng'),
(10, 'https://product.hstatic.net/1000075078/product/caramel-macchiato_143623_0e070a39d0e54e808db4d91049430b51.jpg', 'Caramel Machiato', 55000, 'Khuấy đều trước khi sử dụng Caramel Macchiato sẽ mang đến một sự ngạc nhiên thú vị khi vị thơm béo của bọt sữa, sữa tươi, vị đắng thanh thoát của cà phê Espresso hảo hạng và vị ngọt đậm của sốt caramel được gói gọn trong một tách cà phê.'),
(11, 'https://product.hstatic.net/1000075078/product/latte-da_438410_ff2be8d76067434385f8e27b33fed780.jpg', 'Latte', 50000, 'Một sự kết hợp tinh tế giữa vị đắng cà phê Espresso nguyên chất hòa quyện cùng vị sữa nóng ngọt ngào, bên trên là một lớp kem mỏng nhẹ tạo nên một tách cà phê hoàn hảo về hương vị lẫn nhãn quan.'),
(12, 'https://product.hstatic.net/1000075078/product/classic-cold-brew_791256_d4d8388a3d724f879845680c0239ff68.jpg', 'Americano', 45000, 'Americano được pha chế bằng cách pha thêm nước với tỷ lệ nhất định vào tách cà phê Espresso, từ đó mang lại hương vị nhẹ nhàng và giữ trọn được mùi hương cà phê đặc trưng.'),
(13, 'https://product.hstatic.net/1000075078/product/cappuccino_621532_f42ec557eda145b5958374ca67e65ff2.jpg', 'Capuccino', 50000, 'Capuchino là thức uống hòa quyện giữa hương thơm của sữa, vị béo của bọt kem cùng vị đậm đà từ cà phê Espresso. Tất cả tạo nên một hương vị đặc biệt, một chút nhẹ nhàng, trầm lắng và tinh tế.'),
(14, 'https://product.hstatic.net/1000075078/product/espressonong_612688_41d0812d5efb47aaaebaea91a3b206db.jpg', 'Espresso', 45000, 'Một tách Espresso nguyên bản được bắt đầu bởi những hạt Arabica chất lượng, phối trộn với tỉ lệ cân đối hạt Robusta, cho ra vị ngọt caramel, vị chua dịu và sánh đặc.'),
(15, 'https://product.hstatic.net/1000075078/product/1716811739_cold-brew-kim-quat-2_accd458085414678b3f86996899fe92f.jpg', 'Cold Brew Kim quất', 49000, 'Vị chua ngọt của Kim Quất làm dậy lên hương vị trái cây tự nhiên vốn sẵn có trong hạt cà phê Arabica Cầu Đất, mang đến một ly Cold Brew vừa nhẹ nhàng và thanh mát, đã khát ngày hè.'),
(16, 'https://product.hstatic.net/1000075078/product/cold-brew-sua-tuoi_379576_990956a1473e4ded82c8f76b877b7d15.jpg', 'Cold Brew Sữa Tươi', 49000, 'Thanh mát và cân bằng với hương vị cà phê nguyên bản 100% Arabica Cầu Đất cùng sữa tươi thơm béo cho từng ngụm tròn vị, hấp dẫn.'),
(17, 'https://product.hstatic.net/1000075078/product/classic-cold-brew_239501_31d6bfe69bc04714a437cff0fe0317ab.jpg', 'Cold Brew Truyền Thống', 45000, 'Cold Brew được ủ và phục vụ mỗi ngày từ 100% hạt Arabica Cầu Đất với hương gỗ thông, hạt dẻ, nốt sô-cô-la đặc trưng, thoang thoảng hương khói nhẹ giúp Cold Brew giữ nguyên vị tươi mới.'),
(18, 'https://product.hstatic.net/1000075078/product/1675329120_coldbrew-pbt_127e09b0000c4027992bc3168899a656.jpg', 'Cold Brew Phúc Bồn Tử', 49000, 'Vị chua ngọt của trái phúc bồn tử, làm dậy lên hương vị trái cây tự nhiên vốn sẵn có trong hạt cà phê, hòa quyện thêm vị đăng đắng, ngọt dịu nhẹ nhàng của Cold Brew 100% hạt Arabica Cầu Đất để mang đến một cách thưởng thức cà phê hoàn toàn mới, vừa thơm lừng hương cà phê quen thuộc, vừa nhẹ nhàng và thanh mát bởi hương trái cây đầy thú vị.'),
(19, 'https://product.hstatic.net/1000075078/product/1717388020_bo-pho-mai_8646130a7e634562b938c581b4ffd4a5.jpg', 'Bơ Sữa Phô Mai Tươi', 55000, 'Bơ sáp Đắk Lắk dẻo quẹo hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Sữa Oolong Tứ Quý đượm hương càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.'),
(20, 'https://product.hstatic.net/1000075078/product/1717387639_dau-pho-mai_e76f29878dd1441096c55785ccc8c5a5.jpg', 'Dâu Phô Mai Tươi', 55000, 'Dâu tây Đà Lạt chín mọng hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Oolong Tứ Quý đượm hương và thạch kim quất mềm tan càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.'),
(21, 'https://product.hstatic.net/1000075078/product/1717387385_man-pho-mai_7b164150c097407d991e80f9a53ff8ca.jpg', 'Mận Phô Mai Tươi', 55000, 'Mận hậu đặc sản Mộc Châu đỏ thơm căng mọng, hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Oolong Tứ Quý đượm hương và thạch kim quất mềm tan càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.'),
(22, 'https://product.hstatic.net/1000075078/product/1717387907_man-cau-pho-mai_88d23328791b4d9fb2beb08378fbc4ad.jpg', 'Mãng Cầu Phô Mai Tươi', 55000, 'Mãng cầu Nam Bộ chín tự nhiên đậm vị, hòa quyện lớp foam phô mai tươi mềm mịn. Thêm chút Trà Xanh Tây Bắc êm dịu và thạch kim quất mềm tan càng dậy vị trái cây tươi mát. Khuấy đều để thưởng trọn vị sảng khoái.'),
(23, 'https://product.hstatic.net/1000075078/product/1709005899_kimquat-xuan-1_eb248c1e71904e5f9323e2ba6a7b8d4f.jpg', 'Oolong Tứ Qúy Kim Quất Trân Châu', 49000, 'Đậm hương trà, sảng khoái du xuân cùng Oolong Tứ Quý Kim Quất Trân Châu. Vị nước cốt kim quất tươi chua ngọt, thêm trân châu giòn dai.'),
(24, 'https://product.hstatic.net/1000075078/product/1709004168_vai-xuan-1_00a490efb43a4da187882d95337b2db9.jpg', 'Oolong Tứ Qúy Vải', 49000, 'Đậm hương trà, thanh mát sắc xuân với Oolong Tứ Quý Vải. Cảm nhận hương hoa đầu mùa, hòa quyện cùng vị vải chín mọng căng tràn sức sống.'),
(25, 'https://product.hstatic.net/1000075078/product/tra-sen_905594_cb9a4dfb65884b33811ab70d149a5387.jpg', 'Oolong Tứ Qúy Sen', 49000, 'Nền trà oolong hảo hạng kết hợp cùng hạt sen tươi, bùi bùi và lớp foam cheese béo ngậy. Trà hạt sen là thức uống thanh mát, nhẹ nhàng phù hợp cho cả buổi sáng và chiều tối.'),
(28, '../uploads/14721.jpg', ' PHÙ VÂN', 45000, 'Trà Ô Long Đỏ thượng hạng kết hợp cùng kem whipping nhẹ nhàng, sánh ngậy.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `username`, `password`, `fullname`, `phone`) VALUES
(1, 'khanhquynhtran@gmail.com', '12345678', 'Trần Khánh Quỳnh', '0345678910'),
(2, 'customer1@gmail.com', '12345678', 'Nguyễn Văn A', '0912345678'),
(3, 'customer2@gmail.com', '12345678', 'Lê Thị B', '0923456789'),
(4, 'customer3@gmail.com', '12345678', 'Phạm Văn C', '0934567890'),
(5, 'customer4@gmail.com', '12345678', 'Trần Thị D', '0945678901'),
(6, 'customer5@gmail.com', '12345678', 'Ngô Văn E', '0956789012'),
(7, 'customer6@gmail.com', '12345678', 'Hoàng Thị F', '0967890123'),
(8, 'customer7@gmail.com', '12345678', 'Đặng Văn G', '0978901234'),
(9, 'customer8@gmail.com', '12345678', 'Vũ Thị H', '0989012345'),
(10, 'customer9@gmail.com', '12345678', 'Bùi Thị I', '0990123456'),
(11, 'customer10@gmail.com', '12345678', 'Đỗ Văn J', '0901234567'),
(12, 'customer11@gmail.com', '12345678', 'Phan Thị K', '0912345671'),
(13, 'customer12@gmail.com', '12345678', 'Dương Văn L', '0923456782'),
(14, 'customer13@gmail.com', '12345678', 'Trịnh Thị M', '0934567893'),
(15, 'customer14@gmail.com', '12345678', 'Nguyễn Thị N', '0945678904'),
(16, 'customer15@gmail.com', '12345678', 'Lê Văn O', '0956789015'),
(17, 'customer16@gmail.com', '12345678', 'Phạm Thị P', '0967890126'),
(18, 'customer17@gmail.com', '12345678', 'Trần Văn Q', '0978901237'),
(19, 'customer18@gmail.com', '12345678', 'Võ Thị R', '0989012348'),
(20, 'customer19@gmail.com', '12345678', 'Lý Văn S', '0990123459'),
(21, 'customer20@gmail.com', '12345678', 'Hoàng Thị T', '0901234560'),
(22, 'customer21@gmail.com', '12345678', 'Phạm Văn U', '0912345671'),
(23, 'customer22@gmail.com', '12345678', 'Nguyễn Thị V', '0923456782'),
(24, 'customer23@gmail.com', '12345678', 'Lê Văn W', '0934567893'),
(25, 'customer24@gmail.com', '12345678', 'Trần Thị X', '0945678904'),
(26, 'customer25@gmail.com', '12345678', 'Phạm Văn Y', '0956789015'),
(27, 'userdemo@demo', '$2y$10$niZzIQ5gKMia1cpp.mMd2ek5LQckNaXoR6f6KQQPqHC4qTmJz/hzC', 'Khanh Quynh', '0345789610'),
(28, 'gru@cafe', '$2y$10$r3ewQlzW8milhbT4M9zhbeQ9Yu3V5Fq2DPnUSXyYbbhjlBNX0YNo.', 'gru', '12345678'),
(29, 'quynh@dozecafe.com', '$2y$10$TqHwx10VKB8dgYyuD5ciMumCd5SGXw3VC3m9sTiE81fqt0CrylO8O', 'Trần Khánh Quỳnh', '0929384186'),
(30, 'quynh@dozecafe.com', '$2y$10$TqHwx10VKB8dgYyuD5ciMumCd5SGXw3VC3m9sTiE81fqt0CrylO8O', 'Trần Khánh Quỳnh', '0123456789');

-- --------------------------------------------------------

--
-- Structure for view `cart_view`
--
DROP TABLE IF EXISTS `cart_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cart_view`  AS SELECT `products`.`name` AS `name`, `products`.`price` AS `price`, `order_detail`.`quantity` AS `quantity` FROM (`products` join `order_detail` on(`products`.`products_id` = `order_detail`.`products_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admins_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `admins_id` (`admins_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `admins_id` (`admins_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `products_id` (`products_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`admins_id`) REFERENCES `admins` (`admins_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`admins_id`) REFERENCES `admins` (`admins_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`orders_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`products_id`) REFERENCES `products` (`products_id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
