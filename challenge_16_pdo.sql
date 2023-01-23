-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 11:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge_16_pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(64) DEFAULT NULL,
  `mail` varchar(64) DEFAULT NULL,
  `message` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `company_id`, `name`, `mail`, `message`) VALUES
(1, NULL, 'Ivan ', NULL, 'dada'),
(2, NULL, 'Ivan ', NULL, 'dada'),
(3, NULL, 'Ivan ', NULL, 'dada'),
(4, NULL, 'Ivan ', NULL, 'dada'),
(5, NULL, 'Ivan ', NULL, 'dada'),
(6, NULL, 'Ivan ', NULL, 'dada'),
(7, NULL, 'Ivan ', NULL, 'dada'),
(8, NULL, 'Ivan ', NULL, 'dada'),
(9, NULL, 'Ivan ', NULL, 'dada'),
(10, NULL, 'Ivan ', NULL, 'dada');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `coverUrl` varchar(128) DEFAULT NULL,
  `mainTitle` varchar(64) DEFAULT NULL,
  `subtitle` varchar(128) DEFAULT NULL,
  `txt_area` varchar(512) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `locations` varchar(128) DEFAULT NULL,
  `servicesorproducts_id` int(10) UNSIGNED DEFAULT NULL,
  `productServiceImageUrl_1` varchar(128) DEFAULT NULL,
  `txt_areaProductService_1` varchar(512) DEFAULT NULL,
  `productServiceImageUrl_2` varchar(128) DEFAULT NULL,
  `txt_areaProductService_2` varchar(512) DEFAULT NULL,
  `productServiceImageUrl_3` varchar(64) DEFAULT NULL,
  `txt_areaProductService_3` varchar(512) DEFAULT NULL,
  `txt_areaCompany` varchar(512) DEFAULT NULL,
  `facebook` varchar(64) DEFAULT NULL,
  `linkedin` varchar(64) DEFAULT NULL,
  `twitter` varchar(64) DEFAULT NULL,
  `google` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `coverUrl`, `mainTitle`, `subtitle`, `txt_area`, `phone`, `locations`, `servicesorproducts_id`, `productServiceImageUrl_1`, `txt_areaProductService_1`, `productServiceImageUrl_2`, `txt_areaProductService_2`, `productServiceImageUrl_3`, `txt_areaProductService_3`, `txt_areaCompany`, `facebook`, `linkedin`, `twitter`, `google`) VALUES
(4, 'https://picsum.photos/id/1022/6000/3376', 'Transport', 'Transporting the future', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dictum id turpis egestas cursus. Donec hendrerit sodales ipsum ac placerat. Nam a semper ante. Vivamus sit amet quam molestie augue malesuada dictum. Praesent malesuada erat vel dignissim auctor. Vestibulum tincidunt, lorem nec semper viverra, diam ipsum tincidunt magna, a commodo neque massa in orci. Pellentesque luctus ipsum ut nunc volutpat, at pellentesque mi dapibus. Phasellus ac egestas lacus. Mauris vel auctor massa. Etiam semper, lectus at', '070112233', 'North Carolina', 1, 'https://picsum.photos/id/1011/200/200', 'Fusce tempus blandit sapien a tincidunt. Integer pulvinar ligula sit amet auctor euismod. Donec ac dui vel purus posuere fringilla quis nec neque. In vulputate, quam sit amet tempus faucibus, magna augue venenatis arcu, id feugiat ex ex ut eros.', 'https://picsum.photos/id/1012/200/200', 'Fusce tempus blandit sapien a tincidunt. Integer pulvinar ligula sit amet auctor euismod. Donec ac dui vel purus posuere fringilla quis nec neque. In vulputate, quam sit amet tempus faucibus, magna augue venenatis arcu, id feugiat ex ex ut eros.', 'https://picsum.photos/id/1013/200/200', 'Fusce tempus blandit sapien a tincidunt. Integer pulvinar ligula sit amet auctor euismod. Donec ac dui vel purus posuere fringilla quis nec neque. In vulputate, quam sit amet tempus faucibus, magna augue venenatis arcu, id feugiat ex ex ut eros.', 'Duis vestibulum sem ac arcu vestibulum, nec tincidunt eros pharetra. Sed tortor eros, commodo eu euismod id, ornare nec ex. Donec quis urna mattis, efficitur sem ut, cursus tortor. Nullam luctus pellentesque nunc, nec fringilla leo eleifend sit amet. Donec nisl dolor, tincidunt vel tellus sit amet, finibus accumsan odio. Nunc nisi massa, pellentesque non odio non, ullamcorper euismod tortor. Aliquam egestas, turpis nec faucibus sollicitudin, leo tellus maximus massa, eget consectetur felis sapien quis elit.', 'https://www.facebook.com', 'https://www.linkedin.com', 'https://www.twitter.com', 'https://www.google.com'),
(5, 'https://picsum.photos/id/1031/5446/3063', 'ArchiTecton', 'We invision the future ', 'Aliquam scelerisque sodales mauris at egestas. Phasellus varius tincidunt neque, vitae dignissim purus ullamcorper in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur faucibus pellentesque dolor, vel tincidunt justo consequat malesuada. Aenean vulputate turpis et massa sollicitudin, sed feugiat neque vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed diam dui, pulvinar nec dolor nec, elementum venenatis nis', '070666999', 'Spain', 1, 'https://picsum.photos/id/1040/200/200', 'Donec dignissim porta fringilla. Quisque eget libero sapien. Aliquam at urna urna. Ut convallis purus in quam porta lacinia. Morbi varius urna at nisl pretium, ut tristique nunc vestibulum.', 'https://picsum.photos/id/1041/200/200', 'Suspendisse ut pretium sapien. Nam sodales, mi non accumsan ullamcorper, mi diam cursus felis, a convallis mi nisl sagittis tortor. Praesent ullamcorper sed purus quis efficitur. Nam porttitor dui ipsum, ullamcorper venenatis urna consequat non.', 'https://picsum.photos/id/1042/200/200', 'Suspendisse id est eu leo commodo hendrerit vitae non ipsum. Sed vel posuere quam. Integer congue purus a finibus ornare. Vivamus dictum sed leo eget consectetur. Suspendisse viverra non nunc sed sagittis.', 'Aliquam scelerisque sodales mauris at egestas. Phasellus varius tincidunt neque, vitae dignissim purus ullamcorper in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur faucibus pellentesque dolor, vel tincidunt justo consequat malesuada. Aenean vulputate turpis et massa sollicitudin, sed feugiat neque vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed diam dui, pulvinar nec dolor nec, elementum venenatis nis', 'https://www.facebook.com', 'https://www.linkedin.com', 'https://www.twitter.com', 'https://www.google.com'),
(6, 'https://picsum.photos/id/1013/4256/2832', 'Essential Photography', 'We make your memories', 'Aliquam scelerisque sodales mauris at egestas. Phasellus varius tincidunt neque, vitae dignissim purus ullamcorper in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur faucibus pellentesque dolor, vel tincidunt justo consequat malesuada. Aenean vulputate turpis et massa sollicitudin, sed feugiat neque vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed diam dui, pulvinar nec dolor nec, elementum venenatis nis', '075222333', 'Sweden', 2, 'https://picsum.photos/id/1000/200/200', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et mi elit. Etiam ut nibh lacinia, aliquam dolor id, blandit risus. Ut faucibus congue consectetur.', 'https://picsum.photos/id/999/200/200', 'Vestibulum bibendum massa vitae mi mattis, ac vestibulum lorem congue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In pulvinar, est quis faucibus suscipit, metus enim consectetur justo.', 'https://picsum.photos/id/1014/200/200', 'Quis viverra diam ante vitae sapien. Proin ornare nunc metus, in cursus lectus convallis vel. Duis eu nisl erat. Nam turpis orci, vulputate eu justo quis, blandit pretium est. Morbi quam nisi, vestibulum eget consectetur eget, rutrum sit amet sapien. Curabitur ac sem urna.', 'Proin maximus felis mi. Aenean sed turpis ut lacus ullamcorper sagittis et pulvinar ligula. In pharetra convallis nisl ut venenatis. Aliquam fermentum posuere condimentum. Nunc non quam vitae magna pellentesque egestas. Quisque ultrices luctus condimentum. Morbi efficitur mi odio, condimentum pellentesque nunc ultricies a. Integer et vestibulum urna. Quisque elementum risus eu venenatis egestas. Ut id tortor facilisis, porta enim eu, convallis massa.', 'https://www.facebook.com', 'https://www.linkedin.com', 'https://www.twitter.com', 'https://www.google.com'),
(8, 'https://picsum.photos/id/1013/4256/2832', 'Lorem ipsum', 'dasdasda', 'asd', '076555932', 'Macedonia', 2, 'https://picsum.photos/id/1000/200/200', 'asd', 'https://picsum.photos/id/999/200/200', 'asd', 'https://picsum.photos/id/1013/200/200', 'asd', 'asd', 'https://www.facebook.com', 'https://www.linkedin.com', 'https://www.twitter.com', 'https://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `servicesorproducts`
--

CREATE TABLE `servicesorproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_or_products` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicesorproducts`
--

INSERT INTO `servicesorproducts` (`id`, `service_or_products`) VALUES
(1, 'Service'),
(2, 'Products');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicesorproducts_id` (`servicesorproducts_id`);

--
-- Indexes for table `servicesorproducts`
--
ALTER TABLE `servicesorproducts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `servicesorproducts`
--
ALTER TABLE `servicesorproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `information` (`id`);

--
-- Constraints for table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_ibfk_1` FOREIGN KEY (`servicesorproducts_id`) REFERENCES `servicesorproducts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
