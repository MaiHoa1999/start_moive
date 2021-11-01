-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2021 lúc 07:29 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `star_cinema`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL COMMENT 'ID Banner',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên ảnh banner',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'Trạng thái kích hoạt banner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `image`, `status`) VALUES
(2, '617f7eb21206a.jpg', 1),
(3, '617f7ebf31fcc.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `id` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_screen` int(11) NOT NULL,
  `id_coupon` int(5) NOT NULL,
  `create_date` date NOT NULL,
  `total_cost` decimal(4,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(2) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `uri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `uri`) VALUES
(10, 'Tất cả', 'default.jpg', 'tat-ca'),
(11, 'Hành động', 'default.jpg', 'hanh-dong'),
(12, 'Lãng mạn', 'default.jpg', 'lang-man'),
(14, 'Âm nhạc', 'default.jpg', 'am-nhac'),
(15, 'Tài liệu', 'default.jpg', 'tai-lieu'),
(16, 'Kinh dị', 'default.jpg', 'kinh-di');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(5) NOT NULL,
  `id_movies` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_news` int(11) DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL COMMENT 'ID liên hệ',
  `user_name` varchar(255) DEFAULT NULL COMMENT 'Tên người gửi liên hệ',
  `user_mail` varchar(255) DEFAULT NULL COMMENT 'Mail Người gửi liên hệ',
  `id_user` int(11) NOT NULL COMMENT 'ID người dùng gủi liên hệ',
  `subject` text DEFAULT NULL COMMENT 'Tiêu đề liên hệ',
  `message` text DEFAULT NULL COMMENT 'Nội dung liên hệ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `id` int(5) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount` float NOT NULL,
  `expire_date` date NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movies`
--

CREATE TABLE `movies` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `duration` smallint(5) UNSIGNED ZEROFILL NOT NULL,
  `release_date` date NOT NULL,
  `id_category` int(5) NOT NULL,
  `rating` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `movies`
--

INSERT INTO `movies` (`id`, `name`, `trailer`, `image`, `description`, `duration`, `release_date`, `id_category`, `rating`) VALUES
(2, 'Thợ Săn Quái Vật', 'https://www.youtube.com/embed/LADLqXBO_4U', '6045b7ad228ad.jpg', 'Monster Hunter được chuyển thể từ series game nổi tiếng cùng tên của Capcom. Trong phim, đội trưởng Artemis của nữ diễn viên Milla Jovovich và đồng đội đã vô tình bước qua một cánh cửa bí ẩn dẫn tới thế giới khác. Tại đây, họ phải chiến đấu với nhiều loài quái vật khổng lồ trong hành trình trở về thế giới. Đồng hành với họ trong trận chiến là nhân vật “Thợ săn” của nam diễn viên Tony Jaa. Monster Hunter hứa hẹn sẽ là bom tấn hành động với những màn săn quái vật khổng lồ hoành tráng nhất năm 2020.', 00099, '2021-06-03', 11, 0),
(3, 'Thanh Gươm Diệt Quỷ: Chuyến Tàu Vô Tận', 'https://www.youtube.com/embed/d7nKvY2nS6k', '6045ba1905b34.jpg', 'Thanh Gươm Diệt Quỷ : Chuyến Tàu Vô Tận - Kimetsu no Yaiba : Mugen Ressha-hen là bộ phim điện ảnh anime được công chiếu vào năm 2020 dựa trên Manga Thanh Gươm Diệt Quỷ của tác giả Gotōge Koyoharu. Đây là phần phim nối tiếp loạt phim anime được phát hành năm 2019, do đạo diễn Haruo Sotozaki chịu trách nhiệm chỉ đạo, nhà sản xuất của bộ phim là Ufotable.\r\n\r\nTrên đường điều tra sự mất tích của các Kiếm Sĩ thuộc Đội Diệt Quỷ, Tanjiro và các đồng đội cùng Viêm Trụ Rengoku rơi vào Huyết Quỷ Thuật ảo mộng của Quỷ Hạ Huyền Enmu. Cả bọn phải hiệp lực để bảo toàn tính mạng cho 200 hành khách trên chuyến tàu Vô Tận.', 00117, '2020-02-11', 11, 0),
(4, 'Cuộc Giải Cứu Sinh Tử', 'https://www.youtube.com/embed/GO2-iWyUDS0', '6045ba59a000a.jpg', 'Sau khi được trao Huân chương Danh dự vì sự dũng cảm của mình trong cuộc đọ súng chống lại ISIS, Đại úy Thủy quân lục chiến Hoa Kỳ Brad Paxton phải chịu những ảnh hưởng lâu dài của việc ở trong vùng chiến sự. Dưới sự chăm sóc của người vợ yêu thương, Kate, Brad cố gắng thích nghi với cuộc sống bình thường. Kate, cũng là một nhà khảo cổ học nổi tiếng, được trao cơ hội nghề nghiệp chỉ có một lần trong đời ở Ma-rốc, và Brad thúc giục cô theo đuổi nó.\r\n\r\nTuy nhiên, khi Kate đến nơi, cô bị bắt bởi một nhóm khủng bố đòi 10 triệu đô la tiền chuộc. Brad vội vã đến Ma-rốc khi đại sứ Hoa Kỳ đã ngừng đàm phán về việc thả Kate vì thỏa thuận này gây nguy hiểm cho các cuộc đàm về quyền khai thác dầu trong tương lai. Khi những tình tiết bất thường về vụ bắt cóc Kate được tiết lộ, Brad buộc phải sử dụng kỹ năng quân sự của mình để tìm ra những kẻ phải chịu trách nhiệm và cứu người phụ nữ anh yêu.', 00099, '2021-01-15', 11, 0),
(5, 'Nữ Thần Chiến Binh 2: Nữ Thần Chiến Binh 1984', 'https://www.youtube.com/embed/QNY439_pD1I', '6045bfa73edf2.jpg', 'Wonder Woman 1984 sẽ lấy bối cảnh năm 1984, khi Mỹ và Liên Xô đối đầu trong thời kỳ Chiến tranh Lạnh. Đặc biệt cũng hé lộ sự trở lại bí ẩn của Steve Trevor – người đã hy sinh anh dũng nhằm ngăn chặn kế hoạch phát tán chất độc của Đức quốc xã.', 00151, '2020-12-16', 11, 0),
(6, 'Phi Vụ Hoàn Lương', 'https://www.youtube.com/embed/X_TPMNQZQ7c', '6045bffd62e24.jpg', 'Một tên cướp ngân hàng chuyên nghiệp đã giải nghệ, chấp nhận nộp mình cho FBI vì anh đã trót yêu một người phụ nữ và muốn sống cuộc sống lương thiện với cô gái đó. Liệu tên cướp này có thể ngăn chặn các đặc vụ tha hóa này lấy cắp số tiền đó và thành công \"hoàn lương\" hay không?', 00099, '2020-09-03', 11, 0),
(7, 'Tenet', 'https://www.youtube.com/embed/Nor6es-6TzY', '6045c04624c62.jpg', 'Phim theo chân một tổ chức gián điệp bí ẩn có khả năng thao túng và nghịch đảo thời gian, thực thi sứ mệnh ngăn chặn Thế chiến thứ III từ trước khi nó xảy ra.', 00150, '2020-07-15', 11, 4),
(8, 'Thảm Họa Thiên Thạch', 'https://www.youtube.com/embed/vzFIiaynVzU', '6045c44aa475e.jpg', 'Gia đình John Garrity và Allison, cùng con trai Nathan, tìm đường trốn chạy khỏi thảm họa thiên thạch trong vòng 48h.', 00120, '2021-07-08', 11, 5),
(9, 'Kẻ Cuồng Sát', 'https://www.youtube.com/embed/o3Q9LETlHqk', '6045c4862317b.jpg', 'Rachel (Caren Pistorius thủ vai) là một người mẹ đơn thân đang phải đối mặt với nhiều những vấn đề trong cuộc sống. Không giữ được bình tĩnh trong một buổi sáng đột nhiên bị mất việc, cô vô tình nặng lời với một người đàn ông (Russell Crowe) trên chiếc xe chắn đường mình. Rachel không hề biết rằng gã đàn ông mà cô vô tình gây hấn chính là một kẻ có vấn đề về tâm lý, điên cuồng, tàn độc và sẵn sàng “dạy dỗ” người khác bằng những bài học chết người. Cô và những người thân yêu của mình liệu có toàn mạng trong cuộc rượt đuổi đó?', 00090, '2021-07-16', 11, 4),
(10, 'Ẩn danh', 'https://www.youtube.com/embed/DGtSUBJJ-0E', '6045c4cff2bb3.jpg', 'Một cảnh sát tập sự, một người tìm việc và một hacker hợp tác cùng nhau để truy lùng ai đã gửi đi tin nhắn “Ý nghĩa cuộc đời bạn là gì?” tới một người phụ nữ, người đã tự tử ngay sau đó.', 00092, '2021-04-15', 11, 5),
(11, 'Biệt Đội Săn Mồi', 'https://www.youtube.com/embed/9tzaoSpr-pg', '6045c522df471.jpg', 'BIỆT ĐỘI SĂN MỒI là hành trình sống còn của nhóm lính đánh thuê, được giao nhiệm vụ giải cứu con gái một nhà lãnh đạo cấp cao khỏi âm mưu của nhóm buôn người. Kế hoạch ban đầu bị xáo trộn, phi vụ giải cứu trở thành cuộc chạy trốn khỏi sự truy sát của bọn tội phạm. Rắc rối không dừng lại ở đó! Nhóm lính đánh thuê vô tình trở thành con mồi của kẻ đi săn giữa hoang mạc – loài sư tử hung dữ và khát máu. Sau cùng, ai mới là kẻ đi săn đích thực và ai sẽ trở thành con mồi?', 00105, '2021-08-28', 11, 4),
(12, 'Đừng Gọi Anh Là Bố!', 'https://www.youtube.com/embed/1PsgXINqNgo', '6045ce860efd5.jpg', 'Đừng Gọi Anh Là Bố! xoay quanh mối quan hệ bất hòa giữa Got – một tay đua và người bố Prem. Một tai nạn xe hơi đưa anh trở về khoảng thời gian bố anh vẫn còn trẻ và vô tình trở thành bạn chí cốt của bố. Thông qua chuyến xuyên không kì diệu này, anh có cơ hội gặp lại được mẹ và hiểu hơn về câu chuyện đằng sau tính cách cộc cằn của bố.', 00104, '2021-11-13', 12, 5),
(13, 'Hơn Cả Một Gia Đình (Mẹ Bầu Siêu Ngầu)', 'https://www.youtube.com/embed/zNWoCQ_IrPQ', '6045cec50c2d3.jpg', 'To-il dạy phụ đạo cho một học sinh cấp 3 tên Ho-hoon, nhưng cô ấy sớm có cảm tình với cậu học sinh và thậm chí còn mang thai. Bộ phim hé mở một loạt những tình tiết khó lường khi To-il bắt đầu cuộc hành trình tìm ra người bố đẻ của mình cho đám cưới dù cô đang sống với bộ dượng của mình.', 00110, '2021-11-12', 12, 4),
(14, 'Yêu Nhau Mùa Ế', 'https://www.youtube.com/embed/8G-oAn6NaRs', '6045cf24c90a4.jpg', 'Yêu Nhau Mùa Ế xoay quanh Lin, cô nàng có khả năng nhìn thấy ma quỷ. Sau khi chia tay bạn trai nam thần, cô cảm thấy mệt mỏi bởi chốn thành thị xô bồ nên quyết định… lên rừng ở ẩn. Xách ba lô đến một homestay vắng vẻ ở phía Bắc, Lin vô tình gặp gỡ chàng biên kịch gia trẻ tuổi Pud. Trải qua nhiều khoảnh khắc đáng nhớ, họ dần cảm mến nhau bất chấp sự đeo bám, phá phách của các oan hồn bản địa.', 00125, '2021-07-10', 12, 5),
(15, 'Răng Sữa', 'https://www.youtube.com/embed/jjYP6Junzpg', '6045cf6965520.jpg', 'Milla, một thiếu nữ mắc bệnh rất nặng nhưng lại vô tình yêu Moses, một con nghiện, cơn ác mộng lớn nhất của cha mẹ Milla.', 00118, '2021-05-29', 12, 4),
(16, 'Cơn Mưa Tình Đầu', 'https://www.youtube.com/embed/4btkAVuajss', '6045d088af15a.jpg', 'CƠN MƯA TÌNH ĐẦU là sự đan xen của hai câu chuyện tình yêu cách nhau 3 thập kỷ. Bota và cô bạn thân Poppy cùng cảm nắng Non – một anh bạn cùng trường đại học. Hiểu tấm lòng của người bạn thân, Bota giấu đi cảm xúc thật của mình để cổ vũ Poppy đến với Non. Một ngày, Bota tình cờ tìm thấy chiếc hộp cũ chứa đầy những lá thư và kỷ niệm về mối tình đầu của mẹ. Những bức thư giữa mẹ cô, Dalah và một chàng trai nhà nghèo tên Kajorn khiến Bota nhận ra cảm xúc hiện tại của mình thật giống với câu chuyện tình dở dang của mẹ. Liệu cô có dũng cảm giữ lấy tình yêu của mình hay mối tình đầu của Bota cũng sẽ kết thúc đầy tiếc nuối?', 00123, '2021-06-11', 12, 5),
(17, 'Sở Thú Thoát Ế', 'https://www.youtube.com/embed/gklE-E0uB84', '6045d1c519888.jpg', 'Một luật sự tập sự tên Tae-soo (Ahn Jae-hong) được công ty giao nhiệm vụ tiếp quản việc kinh doanh của vườn thú khi gần như tất cả các con thú đã bị bán đi. Một ý tưởng táo bạo đã được đưa ra để cứu vườn thú “thoát ế”: Các nhân viên phải mặc các bộ đồ thú và diễn như những con thú “thứ thiệt”. Mọi chuyện bất ngờ vượt khỏi tầm kiểm soát khi sở thú đột nhiên trở thành hiện tượng trên mạng xã hội. Các nhân viên phải làm gì nếu mọi chuyện vỡ lở?', 00118, '2021-01-15', 12, 0),
(18, 'Tháng Năm Hạnh Phúc Ta Từng Có', 'https://www.youtube.com/embed/w8VxzN05ODw', '6045d1b75ef22.jpg', 'Nội dung xoay quanh nữ thiết kế Jean cùng anh trai Jay lên kế hoạch cải tạo căn nhà đang ở thành văn phòng làm việc để tiết kiệm chi phí, bằng cách vứt bỏ bớt những món đồ không dùng nữa. Trong quá trình dọn dẹp, Jean bỗng phát hiện ra chiếc máy của Aim. Cả hai từng có thời gian mặn nồng bên nhau nhưng lại chia tay chẳng lời từ biệt hệt như vứt một món đồ vào thùng rác vậy. Nhưng vứt bỏ một con người thì chẳng thể nào giống như vứt bỏ đồ vật được. Song, chính những vật dụng ấy lại khiến cô nhớ về những kỷ niệm xưa. Thông qua những vật dụng cũ, họ như bước vào cỗ máy thời gian để nhìn lại những tháng ngày đã qua, cảm nhận được được niềm hạnh phúc xưa tưởng chứng đã rơi vào quên lãng. Song, quá khứ vẫn mãi là quá khứ. Hiện tại, Jean và Aim đã là những con người khác với cuộc sống hoàn toàn mới. Liệu cả hai sẽ bước tiếp theo những hướng khác hay cho nhau thêm một cơ hội?', 00113, '2021-02-14', 12, 0),
(19, 'Vì Anh Vẫn Tin', 'https://www.youtube.com/embed/lidO3bXELzU', '6045d1a9364c5.jpg', 'VÌ ANH VẪN TIN là bản tình ca ngọt ngào nhưng cũng thấm đượm nước mắt dựa trên cuốn hồi ký cùng tên của ca sĩ, nhạc sĩ người Mỹ Jeremy Camp. Phim kể về chính anh và Melissa Lynn Henning-Camp - người con gái mình yêu, người vợ và cũng là một trong những người có ảnh hưởng lớn nhất tới âm nhạc và cuộc đời của Jeremy từ lúc hai người gặp gỡ, kết hôn rồi đồng hành cùng nhau chiến đấu với căn bệnh ung thư đang dần cướp đi sinh mạng của Melissa.', 00116, '2021-01-13', 12, 0),
(20, 'Thách Yêu 2 Năm', 'https://www.youtube.com/embed/_2AjZkQZBJw', '6045d184a2fa7.jpg', 'Thách Yêu 2 Năm là một cuộc chiến giữa hai phe có niềm tin hoàn toàn đối lập về tình yêu. Tan – chàng trai thực tế không còn tin vào tình yêu sau một mối tình đau khổ, và Jeed – cô gái mộng mơ luôn tin rằng ai cũng có thể tìm thấy tình yêu đích thực. Tan là một chuyên gia phân tích, đã tính toán số liệu và sáng tạo ra loại bảo hiểm mới mang tên “Yêu Hai Năm Đảm Bảo Hoàn Tiền”. Người mua bảo hiểm sẽ được hoàn tiền 100% kèm 30% lãi suất nếu họ không chia tay sau 2 năm kể từ ngày kí hợp đồng. Nếu họ chia tay thì sẽ nhận lại được một nửa số tiền. Cuộc chiến bắt đầu khi Jeed được chuyển đến giúp Tan chăm sóc bảo hiểm mới này. Tan làm mọi cách để khiến các cặp đôi chia tay, còn Jeed lại cố gắng để giúp họ ở bên nhau.', 00126, '2021-09-13', 12, 0),
(21, 'Lướt Sóng Cùng Em', 'https://www.youtube.com/embed/BH4L6HDTeL8', '6045d41f2aac5.jpg', 'Lướt Sóng Cùng Em kể về mối tình bi kịch của Hinako và chàng lính cứu hỏa Minato. Khi tình yêu vừa chớm thì Minato gặp tai nạn lướt sóng và vĩnh viễn ra đi', 00094, '2021-07-26', 12, 0),
(22, 'Cuộc Sống Nhiệm Màu', 'https://www.youtube.com/embed/D6zVlPKn2AI', '6045d68339943.jpg', 'Điều gì khiến bạn là chính bạn? Cuối năm nay, hãng phim hoạt hình danh tiếng Pixar sẽ trình làng một tác phẩm mới mang tên SOUL – CUỘC SỐNG NHIỆM MÀU với nhân vật chính là Joe Gardner một giáo viên dạy nhạc ở trường trung học. Anh vừa nhận được một cơ hội duy nhất trong đời khi có thể được tham gia chơi Jazz cho một ban nhạc nổi nhất thành phố.\r\n\r\nNhưng một bước chân sai lầm đã đưa anh từ thành phố New York hoa lệ đến Cõi Trước – một nơi kỳ diệu mà ở đó các linh hồn được nhận tính cách, sở thích trước khi họ đi đến Trái Đất. Quyết tâm trở về cuộc đời của chính mình, Joe hợp tác với một linh hồn bất hảo mang tên 22 (lồng tiếng bởi Tina Fey) - người chưa bao giờ hiểu được sự hấp dẫn của cuộc sống loài người. Joe cố gắng hết mình để cho 22 thấy cuộc sống này nhiệm màu như thế nào, đồng thời anh ấy cũng khám phá ra câu trả lời quan trọng cho đời người.', 00100, '2021-12-24', 14, 0),
(23, 'Quỷ Lùn Tinh Nghịch: Chuyến Lưu Diễn Thế Giới', 'https://www.youtube.com/embed/Kt65nsmLmaA', '6045d6b822162.jpg', 'Tiếp nối phần trước, Quỷ lùn tinh nghịch: Chuyến lưu diễn thế giới đưa người xem trở lại thế giới Trolls cùng Poppy, cô quỷ lùn vui vẻ nhất từng được biết tới. Qua lời kể của “già làng” King Peppy, nguồn gốc của vương quốc Trolls dần được hé lộ. Từ rất xưa tổ tiên trolls đã tạo ra cây đàn thần 6 dây, mỗi dây ứng với một thể loại nhạc khác nhau gồm pop, đồng quê - country, funk, techno, cổ điển và rock.', 00090, '2021-03-12', 14, 0),
(24, 'Những Chú Mèo', 'https://www.youtube.com/embed/tJTPpKRLmVk', '6045da163d1b6.jpg', 'CATS của Universal Pictures và Working Title là tác phẩm chuyển thể từ vở nhạc kịch “Cats” được yêu thích của Andrew Lloyd Weber và những bài thơ trong tác phẩm “Old Possum’s Book of Practical Cats” của nhà văn T.S. Eliot. Đạo diễn đoạt giải Oscar - Tom Hooper (The King’s Speech, Les Misérables, The Danish Girl) sẽ mang đến những công nghệ và kỹ thuật mới để hiện thực hóa dàn nhân vật. Đạo diễn nổi tiếng Lucy Bevan sẽ là người lựa chọn diễn viên cho phiên bản chuyển thể này.', 00110, '2021-12-20', 14, 0),
(25, 'Step Up 6: Vũ Điệu Đường Phố', 'https://www.youtube.com/embed/GCRTVXBqDMQ', '6045dbbad49cc.jpg', 'Sau khi dành chiến thắng ngoạn mục tại Las Vegas, trong phần cuối của Step Up, đội LMNTrix sẽ trở lại sau nhiều năm chinh chiến tại Hollywood. Sean một lần nữa cần sự giúp sức của Moose để mang đến màn trình diễn đỉnh cao trong sự nghiệp truốc những đối thủ sừng sỏ. Những màn vũ đạo nóng bỏng vô cùng đỉnh cao chính thức trở lại trong mùa hè năm nay. Bước nhảy điêu luyện cực chất, âm nhạc bắt tai cực đỉnh cộng hưởng dàn diễn viên trai xinh gái đẹp mãn nhãn hứa hẹn sẽ bùng nổ những tín đồ mê phim.', 00100, '2021-07-19', 14, 0),
(26, 'Nữ Hoàng Băng Giá 2', 'https://www.youtube.com/embed/UtbKur9B0gc', '6045dcb975daf.jpg', 'Frozen lấy cảm hứng từ câu chuyện Nữ Hoàng Tuyết được nhà văn Andersen chắp bút nhưng nội dung hoàn toàn khác so với tác phẩm gốc. Phim tạo nên cơn sốt hơn 1,2 tỷ $ trên toàn thế giới vào năm 2013. Sau 6 năm, bộ phim ra mắt phần 2 trong sự chờ đợi tột cùng của khán giả.\r\n\r\nElsa, Anna, Kristoff và Olaf đi sâu vào rừng để tìm hiểu sự thật về bí ẩn xảy ra nơi vương quốc của họ. Đó là khu rừng thần bí mà hoàng hậu đã từng kể cho hai nàng công chúa khi còn nhỏ. Liệu điều này có liên quan gì đến sức mạnh của Elsa. Điều gì đang chờ đợi họ khi vén màn sự thật?', 00103, '2021-11-20', 14, 0),
(27, 'Ngày Hôm Qua', 'https://www.youtube.com/embed/tCIwqvh8Je8', '6045dd12af89d.jpg', 'Ngày Hôm Qua lấy bối cảnh một thế giới nơi nhóm The Beatles bỗng nhiên bị “tan biến” khỏi nền văn hóa âm nhạc đương đại, và nhân vật chính Jack Malik (Himesh Patel) là người duy nhất còn nhớ đến họ.', 00116, '2021-06-26', 14, 0),
(28, 'Trùm Hương Cảng 2: Truy Long', 'https://www.youtube.com/embed/D4Nmmj-J0YA', '6045deb9c1367.jpg', 'Bộ phim Trùm Hương Cảng 2: Truy Long lấy bối cảnh trước khi Hong Kong được trao trả cho Trung Quốc, tên tội phạm hung hãn gian xảo Long Chí Cường (Lương Gia Huy đóng) gây ra nhiều vụ án lớn, cảnh sát Hong Kong và Trung Quốc rất quan tâm đến tên tội phạm này, phái cảnh sát chìm Hong Kong Hà Thiên (Cổ Thiên Lạc đóng) trà trộn vào tập đoàn phạm tội của Long Chí Cường, chờ đợi thời cơ bắt giữ hắn. Trải qua nhiều lần thăm dò, cuối cùng Hà Thiên biết được mục tiêu bắt cóc tống tiền tiếp theo của Long Chí Cường là ai? Khi Hà Thiên tưởng rằng mình đã giành được sự tin tưởng của Long Chí Cường, âm thầm phối hợp với cảnh sát giăng thiên la địa võng thì hóa ra đây là cái bẫy.', 00101, '2021-06-06', 15, 0),
(29, 'Tin \"Nóng\"', 'https://www.youtube.com/embed/YXL33tEUA3g', '6045deea9ea28.jpg', 'Tin “Nóng” là cuộc hội quân của ba nữ nhân Hollywood tài sắc vẹn toàn - Charlize Theron, Nicole Kidman và Margot Robbie - trong vai những phóng viên của hãng đế chế truyền thông quyền lực nhất nước Mỹ Fox News. Bộ ba kiều nữ sẽ tiết lộ câu chuyện về vụ bê bối rúng động cả nước Mỹ năm 2016, làm sụp đổ sự nghiệp của ông trùm truyền thông Roger Ailes', 00109, '2021-12-19', 15, 0),
(30, 'Kẻ Du Hành Trên Mây', 'https://www.youtube.com/embed/IfDcgt5Yo5k', '6045df37d8436.jpg', 'Phi công Amelia Wren và nhà khoa học James Glaisher mắc kẹt vào 1 cuộc chiến sống còn trong khi phải cố tìm hiểu những bí mật trên 1 khinh khí cầu.', 00100, '2021-04-11', 15, 0),
(31, 'Cuộc Đua Lịch Sử', 'https://www.youtube.com/embed/IeTchNzIoxU', '6045e0046f9a9.jpg', 'Lấy bối cảnh đường đua Le Mans 1966, Ford v Ferrari kể về cuộc cạnh tranh gắt gao giữa hai hãng xe hàng đầu thế giới. Trước sự thống trị của Ferrari, hãng Ford quyết định chiêu mộ nhóm kỹ sư do huyền thoại Carroll Shelby đứng đầu, cùng tay đua kiệt xuất Ken Miles để chế tạo ra một mẫu xe đua mang tính cách mạng nhằm đánh bại đối thủ Ferrari. Với sự góp mặt của hai ngôi sao Christian Bale và Matt Damon, phim do James Mangold làm đạo diễn.', 00152, '2021-11-13', 15, 0),
(32, 'Cơn Bão Đi Qua', 'https://www.youtube.com/embed/O0TePmroFKU', '6045e0726316e.jpg', 'Bộ phim tài liệu ngắn kể về một gia đình sau khi cơn bão Maria càng quét nơi họ cư trú...', 00090, '2021-05-24', 15, 0),
(33, 'Phòng Chat Quỷ Ám', 'https://www.youtube.com/embed/Rwrt45JYdQ8', '6045e1db9c99b.jpg', 'Host mang đến trải nghiệm kinh dị mới lạ cho người xem, nội dung phim đơn giản đến nỗi đôi lúc bạn sẽ nhầm tưởng rạp chiếu lộn phim, chủ đề nói về một buổi họp qua ứng dụng Zoom nhưng mang lại sức hút vô cùng lớn.\r\n\r\nBộ phim lấy bối cảnh diễn ra khi đại dịch Covid-19 đang hoành hành ở khắp mọi nơi và mọi người vẫn đang phải thực hiện các biện pháp cách ly xã hội để phòng chống sự lây lan. Một nhóm bạn trẻ 6 người đã nghĩ ra một trò chơi gọi hồn online và kêu gọi mọi người vào phòng họp Zoom để thực hiện nghi lễ này.\r\n\r\nCâu chuyện bắt đầu rất đỗi bình thường, các thành viên trong phòng chat nói chuyện với nhau như bao phòng họp nhóm khác rất vui vẻ. Tuy vậy khi mà người có kinh nghiệm nhất bị mất kết nối thì mọi chuyện lại trở nên vô cùng đáng sợ.', 00057, '2021-07-30', 16, 0),
(34, 'Buổi Phát Sóng Kinh Hoàng', 'https://www.youtube.com/embed/lU_fy5np1WI', '6045e214d43b1.jpg', 'Một ngôi sao mạng xã hội du lịch đến nước Nga cùng những người bạn để tìm những nội dung mới đầy hấp dẫn cho kênh Vlog đang nổi của mình. Luôn muốn thách thức những giới hạn mới và tham vọng thu hút thêm nhiều người xem, anh ta và các bạn của mình tham gia một trò chơi chết người bí ẩn và đầy nguy hiểm. Ranh giới giữa mạng xã hội ảo và cuộc sống thực mờ dần, cả nhóm phải chống cự để sống sót thoát ra.', 00091, '2021-07-16', 16, 0),
(35, 'Quái Đản', 'https://www.youtube.com/embed/_6bSFQex-DY', '6045e27b25cf0.jpg', 'Bộ phim có nội dung nói về một nữ sinh trung học đã hoán đổi thân xác với một tên giết người hàng loạt. Trong vòng 24 giờ, sự thay đổi này sẽ trở thành vĩnh viễn, liệu cô gái phải làm thế nào?', 00102, '2021-11-12', 16, 0),
(36, 'Phù Thủy Học Đường', 'https://www.youtube.com/embed/BC8ppz1yJ9I', '6045e2f32b280.jpg', 'Một nhóm bạn gồm 4 người đã thực hiện nghi lễ đặc biệt để trở thành phù thủy và tiếp nhận quyền sở hữu phép thuật. Có trong tay năng lực đặc biệt, cả hội bạn dần nhận thấy có nhiều điều bí ẩn xảy ra. Dường đang có thế lực hắc ám nào đó xuất hiện và đe dọa họ.', 00097, '2021-10-28', 16, 0),
(37, 'Trốn Chạy', 'https://www.youtube.com/embed/WRMyPdJTOu4', '6045e32a9d0b9.jpg', 'Trốn Chạy xoay quanh câu chuyện về Chloe – một cô gái xinh đẹp nhưng không may bị liệt chân và gặp khó khăn khi vận động. Diane là mẹ của Chloe và bà luôn hết mực chăm sóc con gái của mình trong từng miếng ăn, giấc ngủ. Nhưng càng lớn lên thì đứa con gái càng phát hiện ra mẹ mình có những biểu hiện lạ, bà luôn cố gắng bảo bọc đứa con của mình một cách thái quá, kiểm soát tất cả và không cho đứa trẻ giao tiếp với thế giới bên ngoài. Cái kim trong bọc lâu ngày cũng lòi ra, Chloe bắt đầu hoài nghi, và đó cũng là lúc cô tìm cách trốn chạy khỏi người mẹ “dấu yêu”.', 00090, '2021-11-20', 16, 0),
(38, 'Fast & furious 9', 'https://i.ytimg.com/vi_webp/iJs979exB2A/sddefault.webp', '617f7f12291b0.jpg', 'Fast & Furious 9 (F9) tiếp nối câu chuyện về Dominic Toretto (Vin Dielsel) cùng băng quái xế khi buộc phải tái xuất. Nguyên nhân là Jacob (John Cena) - cậu em sát thủ chuyên ganh đua với Dom - hợp tác với nữ phản diện Cipher (Charlize Theron). Âm mưu của hai ác nhân đẩy gia đình của Dom rơi vào nguy hiểm.', 00122, '2021-11-01', 11, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `preview` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `preview`, `content`, `image`) VALUES
(4, 'bom tấn hành động đáng xem năm 2021', 'Fast & Furious 9 (F9) tiếp nối câu chuyện về Dominic Toretto (Vin Dielsel) cùng băng quái xế khi buộc phải tái xuất. Nguyên nhân là Jacob (John Cena) - cậu em sát thủ chuyên ganh đua với Dom - hợp tác với nữ phản diện Cipher (Charlize Theron). Âm mưu của hai ác nhân đẩy gia đình của Dom rơi vào nguy hiểm.', 'Fast & Furious 9 (F9) tiếp nối câu chuyện về Dominic Toretto (Vin Dielsel) cùng băng quái xế khi buộc phải tái xuất. Nguyên nhân là Jacob (John Cena) - cậu em sát thủ chuyên ganh đua với Dom - hợp tác với nữ phản diện Cipher (Charlize Theron). Âm mưu của hai ác nhân đẩy gia đình của Dom rơi vào nguy hiểm.\r\n\r\nBất ngờ lớn nhất của F9 là sự hồi sinh cho Sean và màn trở lại ngoạn mục của Han - thành viên của Fast & Furious được cho là tử nạn trong vụ nổ ở phần Tokyo Drift.\r\n\r\nPhim quy tụ dàn diễn viên quen thuộc: Vin Diesel, Charlize Theron, Michelle Rodriguez, Jordana Brewster, Tyrese Gibson, Ludacris, Helen Mirren, Sung Kang và gương mặt mới John Cena.', '617f7e9af3c8d.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id`, `name`, `status`) VALUES
(6, 'RM001', 0),
(7, 'RM002', 0),
(8, 'RM003', 0),
(9, 'RM004', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `screen`
--

CREATE TABLE `screen` (
  `id` int(5) NOT NULL,
  `id_movie` int(5) NOT NULL,
  `id_room` int(5) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `screen`
--

INSERT INTO `screen` (`id`, `id_movie`, `id_room`, `start_date`, `end_date`) VALUES
(1, 6, 6, '2021-04-20 08:00:00', '2021-05-20 10:00:00'),
(2, 6, 6, '2021-04-20 10:00:00', '2021-05-20 12:00:00'),
(3, 6, 6, '2021-04-20 12:00:00', '2021-05-20 14:00:00'),
(4, 6, 6, '2021-04-20 14:00:00', '2021-05-20 16:00:00'),
(5, 6, 6, '2021-04-20 16:00:00', '2021-05-20 18:00:00'),
(11, 3, 7, '2021-04-20 16:00:00', '2021-04-20 18:00:00'),
(12, 3, 7, '2021-04-20 18:00:00', '2021-04-20 20:00:00'),
(13, 3, 7, '2021-04-20 20:00:00', '2021-04-20 22:00:00'),
(14, 34, 8, '2021-04-20 20:00:00', '2021-04-20 22:00:00'),
(15, 34, 8, '2021-04-20 22:00:00', '2021-04-20 23:59:59'),
(16, 32, 9, '2021-04-20 18:00:00', '2021-04-20 20:00:00'),
(17, 32, 9, '2021-04-20 20:00:00', '2021-04-20 22:00:00'),
(18, 32, 9, '2021-04-20 22:00:00', '2021-04-20 23:59:59'),
(21, 31, 7, '2021-04-20 22:00:00', '2021-04-20 23:59:59'),
(24, 7, 6, '2021-04-21 08:00:00', '2021-04-21 10:00:00'),
(25, 7, 6, '2021-04-21 10:00:00', '2021-05-21 12:00:00'),
(26, 7, 6, '2021-04-21 12:00:00', '2021-05-21 14:00:00'),
(27, 7, 6, '2021-04-21 14:00:00', '2021-05-21 16:00:00'),
(28, 7, 6, '2021-04-21 16:00:00', '2021-05-21 18:00:00'),
(29, 8, 7, '2021-04-21 16:00:00', '2021-04-21 18:00:00'),
(30, 8, 7, '2021-04-21 18:00:00', '2021-04-21 20:00:00'),
(31, 8, 7, '2021-04-21 20:00:00', '2021-04-21 22:00:00'),
(32, 8, 8, '2021-04-21 20:00:00', '2021-04-21 22:00:00'),
(33, 8, 8, '2021-04-21 22:00:00', '2021-04-21 23:59:59'),
(34, 9, 9, '2021-04-21 18:00:00', '2021-04-21 20:00:00'),
(35, 9, 9, '2021-04-21 20:00:00', '2021-04-21 22:00:00'),
(36, 9, 9, '2021-04-21 22:00:00', '2021-04-21 23:59:59'),
(37, 10, 7, '2021-04-21 22:00:00', '2021-04-21 23:59:59'),
(38, 11, 8, '2021-04-22 20:00:00', '2021-04-22 22:00:00'),
(39, 11, 9, '2021-04-22 20:00:00', '2021-04-22 22:00:00'),
(40, 12, 7, '2021-04-22 22:00:00', '2021-04-22 23:59:59'),
(41, 13, 6, '2021-04-22 08:00:00', '2021-04-22 10:00:00'),
(42, 13, 6, '2021-04-22 10:00:00', '2021-05-22 12:00:00'),
(43, 13, 6, '2021-04-22 14:00:00', '2021-05-22 16:00:00'),
(44, 12, 6, '2021-04-22 16:00:00', '2021-05-22 18:00:00'),
(45, 13, 7, '2021-04-22 16:00:00', '2021-04-22 18:00:00'),
(46, 13, 7, '2021-04-22 18:00:00', '2021-04-22 20:00:00'),
(47, 14, 6, '2021-04-23 08:00:00', '2021-05-23 10:00:00'),
(48, 14, 6, '2021-04-23 10:00:00', '2021-05-23 12:00:00'),
(49, 14, 6, '2021-04-23 12:00:00', '2021-05-23 14:00:00'),
(50, 14, 6, '2021-04-23 16:00:00', '2021-05-23 18:00:00'),
(51, 15, 7, '2021-04-23 16:00:00', '2021-04-23 18:00:00'),
(52, 15, 7, '2021-04-23 18:00:00', '2021-04-23 20:00:00'),
(53, 16, 9, '2021-04-23 18:00:00', '2021-04-23 20:00:00'),
(54, 16, 9, '2021-04-23 20:00:00', '2021-04-23 22:00:00'),
(55, 16, 9, '2021-04-23 22:00:00', '2021-04-23 23:59:59'),
(56, 17, 6, '2021-04-23 16:00:00', '2021-04-23 18:00:00'),
(57, 17, 6, '2021-04-23 18:00:00', '2021-05-23 20:00:00'),
(58, 17, 6, '2021-04-23 22:00:00', '2021-05-24 00:00:00'),
(60, 18, 7, '2021-04-23 08:00:00', '2021-04-23 10:00:00'),
(61, 18, 8, '2021-04-23 10:00:00', '2021-04-23 12:00:00'),
(62, 18, 8, '2021-04-23 14:00:00', '2021-04-23 16:00:00'),
(63, 19, 6, '2021-04-24 08:00:00', '2021-05-20 10:00:00'),
(64, 19, 6, '2021-04-24 10:00:00', '2021-05-24 12:00:00'),
(65, 19, 6, '2021-04-24 12:00:00', '2021-05-24 14:00:00'),
(66, 20, 7, '2021-04-24 16:00:00', '2021-04-24 18:00:00'),
(67, 20, 7, '2021-04-24 18:00:00', '2021-04-24 20:00:00'),
(68, 20, 7, '2021-04-24 20:00:00', '2021-04-24 22:00:00'),
(69, 20, 9, '2021-04-24 18:00:00', '2021-04-24 20:00:00'),
(70, 20, 9, '2021-04-24 20:00:00', '2021-04-24 22:00:00'),
(71, 20, 9, '2021-04-24 22:00:00', '2021-04-24 23:59:59'),
(72, 21, 6, '2021-04-24 10:00:00', '2021-05-24 12:00:00'),
(73, 21, 6, '2021-04-24 12:00:00', '2021-05-24 14:00:00'),
(74, 21, 6, '2021-04-24 14:00:00', '2021-05-24 16:00:00'),
(75, 22, 9, '2021-04-25 20:00:00', '2021-04-25 22:00:00'),
(76, 22, 9, '2021-04-25 22:00:00', '2021-04-25 23:59:59'),
(77, 23, 7, '2021-04-25 22:00:00', '2021-04-25 23:59:59'),
(78, 23, 7, '2021-04-25 20:00:00', '2021-04-25 22:00:00'),
(79, 24, 6, '2021-04-25 08:00:00', '2021-04-25 10:00:00'),
(80, 24, 6, '2021-04-25 10:00:00', '2021-05-25 12:00:00'),
(81, 24, 7, '2021-04-25 16:00:00', '2021-04-25 18:00:00'),
(82, 24, 7, '2021-04-25 18:00:00', '2021-04-25 20:00:00'),
(83, 25, 6, '2021-04-25 12:00:00', '2021-05-25 14:00:00'),
(84, 25, 6, '2021-04-25 14:00:00', '2021-05-25 16:00:00'),
(85, 26, 7, '2021-04-25 20:00:00', '2021-04-25 22:00:00'),
(86, 15, 7, '2021-04-25 22:00:00', '2021-04-26 00:00:00'),
(87, 27, 7, '2021-04-26 22:00:00', '2021-04-26 23:59:59'),
(88, 28, 8, '2021-04-26 12:00:00', '2021-04-26 14:00:00'),
(89, 29, 9, '2021-04-26 14:00:00', '2021-04-26 16:00:00'),
(90, 30, 6, '2021-04-26 10:00:00', '2021-05-26 12:00:00'),
(91, 30, 6, '2021-04-26 14:00:00', '2021-05-26 16:00:00'),
(92, 30, 6, '2021-04-26 16:00:00', '2021-05-26 18:00:00'),
(93, 30, 6, '2021-04-26 08:00:00', '2021-05-26 10:00:00'),
(94, 31, 8, '2021-04-26 10:00:00', '2021-05-26 12:00:00'),
(95, 31, 8, '2021-04-26 12:00:00', '2021-05-26 14:00:00'),
(96, 32, 7, '2021-04-26 18:00:00', '2021-04-26 20:00:00'),
(97, 33, 9, '2021-04-26 18:00:00', '2021-04-26 20:00:00'),
(98, 33, 9, '2021-04-26 20:00:00', '2021-04-26 22:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seat`
--

CREATE TABLE `seat` (
  `id` int(5) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `id_room` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seat`
--

INSERT INTO `seat` (`id`, `name`, `status`, `id_room`) VALUES
(6, 'A01', 0, 6),
(7, 'A02', 0, 6),
(9, 'A03', 0, 6),
(10, 'A04', 0, 6),
(12, 'A05', 0, 6),
(13, 'A06', 0, 6),
(14, 'A07', 0, 6),
(15, 'A08', 0, 6),
(16, 'A09', 0, 6),
(17, 'A10', 0, 6),
(18, 'A11', 0, 6),
(19, 'A12', 0, 6),
(20, 'A13', 0, 6),
(21, 'A14', 0, 6),
(22, 'A15', 0, 6),
(23, 'A16', 0, 6),
(24, 'A17', 0, 6),
(25, 'A18', 0, 6),
(26, 'A19', 0, 6),
(27, 'A20', 0, 6),
(28, 'A21', 0, 6),
(29, 'A22', 0, 6),
(30, 'A23', 0, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `site_info`
--

CREATE TABLE `site_info` (
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên Website',
  `about` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Giới thiệu website',
  `contact_address` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Địa chỉ trụ sở',
  `contact_phone_line` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Hotline',
  `customer_care_line` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Chăm sóc khách hàng',
  `contact_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Mail liên hệ',
  `facebook_social` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Facebook ID',
  `google_social` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Google ID',
  `instagram_social` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Instagram ID',
  `youtube_social` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Youtube channel',
  `site_keyword` text COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Key word tìm kiếm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'ID người dùng',
  `user` varchar(255) NOT NULL COMMENT 'Tên đăng nhập của người dùng',
  `password` varchar(255) NOT NULL COMMENT 'Mật khẩu',
  `name` varchar(255) NOT NULL COMMENT 'Tên người dùng',
  `mail` varchar(255) NOT NULL COMMENT 'Thư điện tử',
  `birthday` date DEFAULT NULL COMMENT 'Sinh nhật',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ',
  `phone` varchar(255) NOT NULL COMMENT 'Số điện thoại',
  `register_date` datetime DEFAULT NULL COMMENT 'Ngày đăng ký',
  `permission` tinyint(255) NOT NULL DEFAULT 0 COMMENT 'Phân quyền người dùng',
  `image` varchar(255) NOT NULL DEFAULT 'default.png' COMMENT 'Ảnh đại diện'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `name`, `mail`, `birthday`, `address`, `phone`, `register_date`, `permission`, `image`) VALUES
(6, 'xxxibqtaz', '17a3dc39c7af1616ef94ff59f6730cc0', 'Mai Hoa', 'zzzibgdrgn@gmail.com', '1999-10-05', '10 nhất chi mai', '0968854260', '2021-01-25 08:01:51', 2, '603757999dc17.png'),
(11, 'abc', '202cb962ac59075b964b07152d234b70', 'Quách Trang', 'trangqtt2012@gmail.com', '2000-12-20', '20', '0968854260', '2021-02-25 05:02:33', 0, '603757bfed3bb.png'),
(12, 'test', '098f6bcd4621d373cade4e832627b4f6', 'Admin', 'admin@gmail.com', '2000-12-20', '79/11 Trần Văn Đang', '0979427220', '2021-02-25 07:02:50', 1, 'default.jpg'),
(14, 'xuân hồng', 'e10adc3949ba59abbe56e057f20f883e', 'xuân hồng', 'xuanhong@gmail.com', '2000-11-02', 'bình thạch-tphcm', '09993353213', '2021-11-01 05:11:40', 0, 'default.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_booking_screen` (`id_screen`),
  ADD KEY `fk_booking_coupon` (`id_coupon`),
  ADD KEY `fk_booking_user` (`id_user`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_movies` (`id_movies`),
  ADD KEY `fk_comment_news` (`id_news`),
  ADD KEY `fk_comment_user` (`id_user`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_contact_users` (`id_user`);

--
-- Chỉ mục cho bảng `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_movie_category` (`id_category`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_screen_movies` (`id_movie`),
  ADD KEY `fk_screen_room` (`id_room`);

--
-- Chỉ mục cho bảng `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_seat_room` (`id_room`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Banner', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID liên hệ';

--
-- AUTO_INCREMENT cho bảng `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `screen`
--
ALTER TABLE `screen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID người dùng', AUTO_INCREMENT=15;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_booking_coupon` FOREIGN KEY (`id_coupon`) REFERENCES `coupon` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_screen` FOREIGN KEY (`id_screen`) REFERENCES `screen` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_booking_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_movies` FOREIGN KEY (`id_movies`) REFERENCES `movies` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_news` FOREIGN KEY (`id_news`) REFERENCES `news` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_movies_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `screen`
--
ALTER TABLE `screen`
  ADD CONSTRAINT `fk_screen_movies` FOREIGN KEY (`id_movie`) REFERENCES `movies` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_screen_room` FOREIGN KEY (`id_room`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `fk_seat_room` FOREIGN KEY (`id_room`) REFERENCES `room` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
