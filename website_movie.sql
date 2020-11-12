-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2020 at 03:13 PM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `countrys`
--

CREATE TABLE `countrys` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countrys`
--

INSERT INTO `countrys` (`id`, `name`) VALUES
(1, 'Mỹ'),
(2, 'Hàn Quốc'),
(3, 'Anh'),
(4, 'Trung Quốc'),
(5, 'Thái Lan');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `about` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `about`) VALUES
(1, ' James Cameron', 'James Francis Cameron (sinh ngày 16 tháng 8 năm 1954) là đạo diễn người Canada. Năm 1971, ông chuyển sang sinh sống ở Mỹ và đã tốt nghiệp khoa Vật lý Đại học California. Ông được biết đến như một đạo diễn điện ảnh có nhiều tên tuổi trên thế giới.'),
(2, 'Christopher Edward Nolan', ' (/ˈnoʊlən/; sinh ngày 30 tháng 7 năm 1970) là một đạo diễn, nhà biên kịch và nhà sản xuất điện ảnh người Anh. Ông sở hữu cả hai quốc tịch Anh và Mỹ. Nolan là một trong những đạo diễn ăn khách nhất lịch sử, đồng thời là một trong những nhà làm phim được hoan nghênh nhất và có tầm ảnh hưởng lớn nhất của thế kỉ 21.'),
(3, 'Châu Tinh Trì', ' Châu Tinh Trì (sinh ngày 22 tháng 6 năm 1962) là một nam diễn viên, đạo diễn, nhà biên kịch, nhà sản xuất người Hồng Kông. Ngoài ra ông còn là cố vấn chính trị của Hội nghị Hiệp thương Chính trị Nhân dân Trung Quốc'),
(4, 'Anthony Russo và Joseph V. Joe Russo', 'Anthony Russo và Joseph V. Joe Russo (được biết đến với tên chung là Anh em nhà Russo) là bộ đôi đạo diễn điện ảnh và truyền hình người Mỹ.'),
(5, 'Bong Joon-ho', 'Bong Joon-ho sinh ngày 14 tháng 9 năm 1969) là một đạo diễn điện ảnh và nhà biên kịch phim người Hàn Quốc, những bộ phim đáng chú ý nhất của ông bao gồm Quái Vật Sông Hàn - The Host (2006), phim hành động khoa học viễn tưởng Snowpiercer (2013) và phim hài kịch đen Ký sinh trùng (2019), cả ba đều là những bộ phim có doanh thu cao nhất mọi thời đại ở Hàn Quốc[1].');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Hành động'),
(2, 'Hài hước'),
(3, 'Tâm lí'),
(4, 'Khoa học viễn tưởng');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int NOT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `year_release` int DEFAULT NULL,
  `image` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `video` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `runtime` int DEFAULT NULL,
  `IMDB` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year_release`, `image`, `video`, `runtime`, `IMDB`) VALUES
(1, 'AVENGER:ENGAME', 2019, 'image/avenger_endgame.jpg', NULL, 150, 8.4),
(2, 'INCEPTION', 2010, 'image/inception.jpg', NULL, 150, 9),
(3, 'TENNET', 2020, 'image/tennet.jpg', NULL, 148, 8),
(4, 'BATMAN', 2008, 'image/batman2008.jpg', 'video/', 152, 9),
(5, 'Tuyệt Đỉnh Kung Fu', 2004, 'image/kungfu.jpg', 'video/', 99, 7.7),
(6, 'Đội Bóng Thiếu Lâm', 2001, 'image/doibongthieulam.jpg', 'video/', 87, 7.3),
(7, 'Thiên Tài Bất Hảo', 2017, 'image/Thiên_tài_bất_hảo.jpg', 'video/', 130, 7.6),
(8, 'Ký Sinh Trùng', 2019, 'image/ký_sinh_tr.jpg', 'video/', 131, 8.6),
(9, 'AVATAR', 2009, 'image/avatar.jpg', 'video/', 162, 7.8),
(10, 'Titanic', 1997, 'image/titanic.jpg', 'video/', 194, 7.8),
(11, 'Captain America: The Winter Soldier', 2014, 'image/captain2014.jpg', 'video/', 136, 7.7),
(12, 'Spider-Man: Far from Home', 2019, 'image/spideman2019.jpg', 'video/', 129, 7.5),
(13, 'Mission: Impossible - Fallout', 2018, 'image/nhiệm_vụ_bất_khả_thi_6.jpg', 'video/', 147, 7.7),
(14, '3 Idiots', 2009, 'image/3_idiots.jpg', 'video/', 170, 8.4),
(15, 'Harry Potter and the Half-Blood Prince', 2009, 'image/harry_potter_6.jpg', 'video/', 153, 7.6);

-- --------------------------------------------------------

--
-- Table structure for table `movie_countrys`
--

CREATE TABLE `movie_countrys` (
  `movies_id` int NOT NULL,
  `countrys_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_countrys`
--

INSERT INTO `movie_countrys` (`movies_id`, `countrys_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(8, 2),
(15, 3),
(5, 4),
(6, 4),
(7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `movie_directors`
--

CREATE TABLE `movie_directors` (
  `movies_id` int NOT NULL,
  `directors_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_directors`
--

INSERT INTO `movie_directors` (`movies_id`, `directors_id`) VALUES
(9, 1),
(10, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 3),
(6, 3),
(1, 4),
(11, 4),
(12, 4),
(8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `movie_genres`
--

CREATE TABLE `movie_genres` (
  `movies_id` int NOT NULL,
  `genres_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_genres`
--

INSERT INTO `movie_genres` (`movies_id`, `genres_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(9, 1),
(11, 1),
(12, 1),
(13, 1),
(15, 1),
(5, 2),
(6, 2),
(14, 2),
(15, 2),
(7, 3),
(8, 3),
(10, 3),
(1, 4),
(2, 4),
(3, 4),
(9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `movie_stars`
--

CREATE TABLE `movie_stars` (
  `movies_id` int NOT NULL,
  `stars_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movie_stars`
--

INSERT INTO `movie_stars` (`movies_id`, `stars_id`) VALUES
(2, 1),
(10, 1),
(1, 2),
(11, 2),
(1, 3),
(3, 4),
(4, 5),
(5, 6),
(6, 6),
(9, 7),
(1, 8),
(12, 8),
(13, 9),
(15, 10);

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `about` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `name`, `about`) VALUES
(1, 'LEONARDO DICAPRIO', 'Leonardo Wilhelm DiCaprio[2] (/diˈkæpri.oʊ/; sinh ngày 11 tháng 11 năm 1974) là một diễn viên, nhà sản xuất phim, nhà hoạt động môi trường người Mỹ.[3] DiCaprio khởi nghiệp bằng cách xuất hiện trong các quảng cáo truyền hình vào cuối những năm 1980, sau đó anh có những vai diễn cố định trong loạt chương trình truyền hình như bộ phim dài tập Santa Barbara và sitcom Growing Pains. '),
(2, 'Robert Downey Jr', 'Robert John Downey, Jr (sinh ngày 4 tháng 4 năm 1965) là một diễn viên người Mỹ. Ông sinh ra ở Thành phố New York, Hoa Kỳ. Ông diễn xuất từ khi mới 5 tuổi trong phim Pound của cha ông. '),
(3, 'Chris Evans', 'Christopher Robert \'Chris\' Evans (sinh ngày 13 tháng 6 năm 1981) là một diễn viên người Mỹ.\r\n\r\nAnh được biết đến nhiều nhất qua vai Johnny Storm / Human Torch trong hai bộ phim Fantastic Four (2005) và Fantastic Four: Rise of the Silver Surfer (2007), sau đó là vai Steve Rogers / Captain America trong các phim Captain America: Kẻ báo thù đầu tiên (2011), The Avengers (2012), Captain America 2: Chiến binh mùa đông (2014), Avengers: Đế chế Ultron (2015), Captain America: Nội chiến siêu anh hùng (2016), Avengers: Cuộc chiến vô cực (2018) và Avengers: Hồi kết (2019).'),
(4, 'John David Washington', 'John David Washington (born July 28, 1984) is an American actor and former football running back. He played college football at Morehouse College and signed with the St. Louis Rams as an undrafted free agent in 2006. Professionally, Washington spent four years as the running back for the United Football League\'s Sacramento Mountain Lions.'),
(5, 'Christian Bale', 'Christian Charles Philip Bale (Haverfordwest, Gales; 30 de enero de 1974), más conocido como Christian Bale, es un actor británico ganador de dos Globos de Oro, 2 premios del SAG y un Óscar. Se le considera uno de los actores del estilo de método más importantes de su generación, debido a su intensidad y sus transformaciones drásticas hacia su cuerpo en diversos papeles'),
(6, 'Châu Tinh Trì', 'Châu Tinh Trì (sinh ngày 22 tháng 6 năm 1962) là một nam diễn viên, đạo diễn, nhà biên kịch, nhà sản xuất người Hồng Kông. Ngoài ra ông còn là cố vấn chính trị của Hội nghị Hiệp thương Chính trị Nhân dân Trung Quốc.'),
(7, 'Sam Worthington', 'Samuel Henry J. \'Sam\' Worthington[1] (sinh ngày 2 tháng 8 năm 1976) là một diễn viên người Úc. Anh được biết đến với những vai diễn trong các phim như Bootmen và Dirty Deeds, và gần đây nhất là nhân vật Jake Sully trong siêu phẩm Avatar của đạo diện James Cameron và vai diễn Perseus trong bộ phim Cuộc chiến giữa các vị thần khởi chiếu năm 2010.'),
(8, 'Tom Holland', 'Holland được biết đến qua vai Billy Elliot the Musical tại Nhà hát cung điện Victoria, Luân Đôn, cũng như được biết đến qua một bộ phim The Impossible năm 2007 và với vai trò Spider-Man trong Marvel Cinematic Universe (Vũ trụ điện ảnh Marvel)'),
(9, 'Tom Cruise', 'Thomas Cruise Mapother IV (sinh ngày 3 tháng 7 năm 1962) là một nam diễn viên và nhà sản xuất người Mỹ. Anh bắt đầu sự nghiệp của mình ở tuổi 19 với bộ phim Endless Love, trước khi nhận được sự chú ý từ công chúng với vai diễn Trung úy Pete \'Maverick\' Mitchell trong Top Gun. Cruise cũng được biết đến rộng rãi với vai diễn điệp viên IMF Ethan Hunt trong loạt phim Nhiệm vụ bất khả thi.'),
(10, 'Daniel Radcliffe', 'Daniel Jacob Radcliffe (sinh ngày 23 tháng 7 năm 1989) là nam diễn viên người Anh, được biết đến nhiều nhất với vai diễn Harry Potter trong những bộ phim phỏng theo cuốn sách Harry Potter của J. K. Rowling, từng tham gia vở kịch gây nhiều tranh cãi Equus trong vai Alan Strang (2007).');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countrys`
--
ALTER TABLE `countrys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_countrys`
--
ALTER TABLE `movie_countrys`
  ADD PRIMARY KEY (`movies_id`,`countrys_id`),
  ADD KEY `countrys_id` (`countrys_id`);

--
-- Indexes for table `movie_directors`
--
ALTER TABLE `movie_directors`
  ADD PRIMARY KEY (`movies_id`,`directors_id`),
  ADD KEY `dicretors_id` (`directors_id`);

--
-- Indexes for table `movie_genres`
--
ALTER TABLE `movie_genres`
  ADD PRIMARY KEY (`movies_id`,`genres_id`),
  ADD KEY `genres_id` (`genres_id`);

--
-- Indexes for table `movie_stars`
--
ALTER TABLE `movie_stars`
  ADD PRIMARY KEY (`movies_id`,`stars_id`),
  ADD KEY `stars_id` (`stars_id`);

--
-- Indexes for table `stars`
--
ALTER TABLE `stars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countrys`
--
ALTER TABLE `countrys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `stars`
--
ALTER TABLE `stars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie_countrys`
--
ALTER TABLE `movie_countrys`
  ADD CONSTRAINT `movie_countrys_ibfk_1` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_countrys_ibfk_2` FOREIGN KEY (`countrys_id`) REFERENCES `countrys` (`id`);

--
-- Constraints for table `movie_directors`
--
ALTER TABLE `movie_directors`
  ADD CONSTRAINT `movie_directors_ibfk_1` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_directors_ibfk_2` FOREIGN KEY (`directors_id`) REFERENCES `directors` (`id`);

--
-- Constraints for table `movie_genres`
--
ALTER TABLE `movie_genres`
  ADD CONSTRAINT `movie_genres_ibfk_1` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_genres_ibfk_2` FOREIGN KEY (`genres_id`) REFERENCES `genres` (`id`);

--
-- Constraints for table `movie_stars`
--
ALTER TABLE `movie_stars`
  ADD CONSTRAINT `movie_stars_ibfk_1` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`),
  ADD CONSTRAINT `movie_stars_ibfk_2` FOREIGN KEY (`stars_id`) REFERENCES `stars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
