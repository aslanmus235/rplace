-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 26 Eki 2022, 10:50:13
-- Sunucu sürümü: 10.6.10-MariaDB
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `macfleue_rplace`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rplace_db`
--

CREATE TABLE `rplace_db` (
  `rplace_id` int(11) NOT NULL,
  `rplace_coordinate` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `rplace_color` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `rplace_user` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `rplace_db`
--

INSERT INTO `rplace_db` (`rplace_id`, `rplace_coordinate`, `rplace_color`, `rplace_user`) VALUES
(2, 'db-a0-14', 'green', 'aslanmus235'),
(3, 'db-a0-18', 'yellow', 'aslanmus235'),
(4, 'db-a2-17', 'red', 'aslanmus235'),
(5, 'db-a4-19', '#ff0000', 'aslanmus235'),
(6, 'db-a3-12', 'red', 'aslanmus235'),
(7, 'db-a2-14', 'red', 'aslanmus235'),
(8, 'db-a2-13', 'red', 'aslanmus235'),
(9, 'db-a4-2', 'yellow', 'aslanmus235'),
(10, 'db-a0-11', 'red', 'aslanmus235'),
(11, 'db-a1-8', 'green', 'aslanmus235'),
(12, 'db-a0-0', '#ffffff', 'aslanmus235'),
(13, 'db-a4-8', 'yellow', 'aslanmus235'),
(14, 'db-a2-12', 'red', 'aslanmus235'),
(15, 'db-a4-12', 'red', 'aslanmus235'),
(16, 'db-a5-12', 'red', 'aslanmus235'),
(17, 'db-a6-12', 'red', 'aslanmus235'),
(18, 'db-a7-12', 'red', 'aslanmus235'),
(19, 'db-a7-13', 'red', 'aslanmus235'),
(20, 'db-a2-15', 'red', 'aslanmus235'),
(21, 'db-a2-16', 'red', 'aslanmus235'),
(22, 'db-a2-18', 'red', 'aslanmus235'),
(23, 'db-a2-19', 'red', 'aslanmus235'),
(24, 'db-a2-20', 'red', 'aslanmus235'),
(25, 'db-a2-21', 'red', 'aslanmus235'),
(26, 'db-a3-21', 'red', 'aslanmus235'),
(27, 'db-a4-21', 'red', 'aslanmus235'),
(28, 'db-a5-21', 'red', 'aslanmus235'),
(29, 'db-a6-21', 'red', 'aslanmus235'),
(30, 'db-a7-21', 'red', 'aslanmus235'),
(31, 'db-a7-20', 'red', 'aslanmus235'),
(32, 'db-a7-18', 'red', 'aslanmus235'),
(33, 'db-a7-19', 'red', 'aslanmus235'),
(34, 'db-a7-17', 'red', 'aslanmus235'),
(35, 'db-a7-16', 'red', 'aslanmus235'),
(36, 'db-a7-15', 'red', 'aslanmus235'),
(37, 'db-a7-14', 'red', 'aslanmus235'),
(38, 'db-a3-20', 'red', 'aslanmus235'),
(39, 'db-a4-20', 'red', 'aslanmus235'),
(40, 'db-a5-20', '#ff0000', 'ajdar'),
(41, 'db-a6-20', '#ff0000', 'ajdar'),
(42, 'db-a6-19', 'red', 'aslanmus235'),
(43, 'db-a3-19', 'red', 'aslanmus235'),
(44, 'db-a5-19', 'red', 'aslanmus235'),
(45, 'db-a3-18', 'red', 'aslanmus235'),
(46, 'db-a4-18', 'red', 'aslanmus235'),
(47, 'db-a5-18', 'red', 'aslanmus235'),
(48, 'db-a6-18', 'red', 'aslanmus235'),
(49, 'db-a6-17', 'red', 'aslanmus235'),
(50, 'db-a5-17', 'white', 'aslanmus235'),
(51, 'db-a4-17', 'red', 'aslanmus235'),
(52, 'db-a3-17', 'red', 'aslanmus235'),
(53, 'db-a3-16', 'red', 'aslanmus235'),
(54, 'db-a3-15', 'white', 'aslanmus235'),
(55, 'db-a3-14', 'red', 'aslanmus235'),
(56, 'db-a3-13', 'red', 'aslanmus235'),
(57, 'db-a4-16', 'red', 'aslanmus235'),
(58, 'db-a4-15', 'red', 'aslanmus235'),
(59, 'db-a4-14', 'white', 'aslanmus235'),
(60, 'db-a4-13', 'red', 'aslanmus235'),
(61, 'db-a5-13', 'red', 'aslanmus235'),
(62, 'db-a6-13', 'red', 'aslanmus235'),
(63, 'db-a6-14', 'red', 'aslanmus235'),
(64, 'db-a5-14', 'white', 'aslanmus235'),
(65, 'db-a5-15', 'red', 'aslanmus235'),
(66, 'db-a6-15', 'white', 'aslanmus235'),
(67, 'db-a5-16', 'red', 'aslanmus235'),
(68, 'db-a6-16', 'red', 'aslanmus235'),
(69, 'db-a45-45', 'white', 'aslanmus235'),
(70, 'db-a19-42', '#000000', 'aslanmus235'),
(71, 'db-a31-59', 'white', 'aslanmus235'),
(72, 'db-a32-51', 'white', 'aslanmus235'),
(73, 'db-a22-34', '#ffffff', 'aslanmus235'),
(74, 'db-a39-67', '#ffffff', 'aslanmus235'),
(75, 'db-a72-17', 'yellow', 'aslanmus235'),
(76, 'db-a63-65', 'green', 'aslanmus235'),
(77, 'db-a75-55', 'yellow', 'aslanmus235'),
(78, 'db-a44-25', 'red', 'aslanmus235'),
(79, 'db-a32-83', '#ffffff', 'aslanmus235'),
(80, 'db-a36-52', '#ffffff', 'aslanmus235'),
(81, 'db-a42-25', 'yellow', 'aslanmus235'),
(82, 'db-a31-32', '#ffffff', 'aslanmus235'),
(83, 'db-a44-30', 'green', 'aslanmus235'),
(84, 'db-a44-20', 'green', 'aslanmus235'),
(85, 'db-a20-50', '#ffffff', 'aslanmus235'),
(86, 'db-a19-62', '#ffffff', 'aslanmus235'),
(87, 'db-a24-18', '#ffffff', 'aslanmus235'),
(88, 'db-a31-37', '#ffffff', 'aslanmus235'),
(89, 'db-a62-46', '#ffffff', 'aslanmus235'),
(90, 'db-a97-15', '#f00000', 'aslanmus235'),
(91, 'db-a99-78', '#11ff00', 'aslanmus235'),
(92, 'db-a30-61', '#ffffff', 'aslanmus235'),
(93, 'db-a26-47', '#ffffff', 'aslanmus235'),
(94, 'db-a54-51', '#ffd500', 'aslanmus235'),
(95, 'db-a49-61', '#ffffff', 'aslanmus235'),
(96, 'db-a20-81', '#ffffff', 'aslanmus235'),
(97, 'db-a29-73', '#ffffff', 'aslanmus235'),
(98, 'db-a54-85', '#ffffff', 'aslanmus235'),
(99, 'db-a28-54', '#ffffff', 'aslanmus235'),
(100, 'db-a30-38', '#ff0000', 'aslanmus235'),
(101, 'db-a29-23', '#e10d88', 'aslanmus235'),
(102, 'db-a0-99', '#000000', 'aslanmus235'),
(103, 'db-a2-99', '#ff0a0a', 'aslanmus235'),
(104, 'db-a4-99', '#ff0aeb', 'aslanmus235'),
(105, 'db-a26-99', '#0aceff', 'aslanmus235'),
(106, 'db-a43-59', '#b6ff0a', 'aslanmus235'),
(107, 'db-a5-0', '#ffffff', 'aslanmus235'),
(108, 'db-a12-95', '#ffffff', 'aslanmus235'),
(109, 'db-a48-25', '#ff0000', 'aslanmus235'),
(110, 'db-a39-30', '#000000', 'aslanmus235'),
(111, 'db-a38-20', '#000000', 'aslanmus235'),
(112, 'db-a53-32', '#000000', 'aslanmus235'),
(113, 'db-a54-20', '#000000', 'aslanmus235'),
(114, 'db-a57-31', '#000000', 'aslanmus235'),
(115, 'db-a65-45', '#000000', 'aslanmus235'),
(116, 'db-a27-0', '#ffffff', 'aslanmus235'),
(117, 'db-a3-0', '#ffffff', 'aslanmus235'),
(118, 'db-a1-0', '#ffffff', 'aslanmus235'),
(119, 'db-a29-99', '#111a97', 'aslanmus235'),
(120, 'db-a30-0', '#ffffff', 'aslanmus235'),
(121, 'db-a32-98', '#000000', 'aslanmus235'),
(122, 'db-a38-99', '#000000', 'aslanmus235'),
(123, 'db-a42-99', '#000000', 'aslanmus235'),
(124, 'db-a12-99', '#000000', 'aslanmus235'),
(125, 'db-a18-92', '#ff0000', 'aslanmus235'),
(126, 'db-a51-99', '#ff0000', 'aslanmus235'),
(127, 'db-a19-99', '#04ff00', 'aslanmus235'),
(128, 'db-a29-62', '#000000', 'aslanmus235'),
(129, 'db-a19-79', '#e20303', 'aslanmus235'),
(130, 'db-a12-59', '#03e229', 'aslanmus235'),
(131, 'db-a14-43', '#ed0c0c', 'aslanmus235'),
(132, 'db-a52-68', '#57a324', 'aslanmus235'),
(133, 'db-a42-71', '#ffffff', 'ajdar'),
(134, 'db-a43-75', '#0ae2ff', 'ajdar'),
(135, 'db-a8-29', '#ff0000', 'ajdar'),
(136, 'db-a12-30', '#30ea0b', 'aslanmus235'),
(137, 'db-a21-30', '#00e1ff', 'ajdar'),
(138, 'db-a72-59', '#00e1ff', 'ajdar'),
(139, 'db-a19-16', '#00e1ff', 'ajdar'),
(140, 'db-a38-67', '#000000', 'aslanmus235'),
(141, 'db-a36-54', '#e3dede', 'ANNENİ SİKİYORUM'),
(142, 'db-a38-44', '#1f1f1f', 'ANNENİ SİKİYORUM'),
(143, 'db-a13-50', '#65d7e6', 'aslanmus235'),
(144, 'db-a14-50', '#65d7e6', 'aslanmus235'),
(145, 'db-a14-51', '#65d7e6', 'aslanmus235'),
(146, 'db-a14-52', '#65d7e6', 'aslanmus235'),
(147, 'db-a14-53', '#65d7e6', 'aslanmus235'),
(148, 'db-a13-53', '#65d7e6', 'aslanmus235'),
(149, 'db-a12-50', '#000000', 'aslanmus235'),
(150, 'db-a13-49', '#545454', 'aslanmus235'),
(151, 'db-a14-49', '#545454', 'aslanmus235'),
(152, 'db-a15-50', '#545454', 'aslanmus235'),
(153, 'db-a15-51', '#545454', 'aslanmus235'),
(154, 'db-a15-49', '#545454', 'aslanmus235'),
(155, 'db-a15-52', '#545454', 'aslanmus235'),
(156, 'db-a15-53', '#545454', 'aslanmus235'),
(157, 'db-a12-49', '#000000', 'aslanmus235'),
(158, 'db-a24-38', '#000000', 'aslanmus235'),
(159, 'db-a14-48', '#000000', 'aslanmus235'),
(160, 'db-a13-48', '#000000', 'aslanmus235'),
(161, 'db-a15-48', '#000000', 'aslanmus235'),
(162, 'db-a12-51', '#000000', 'aslanmus235'),
(163, 'db-a12-52', '#000000', 'aslanmus235'),
(164, 'db-a16-49', '#000000', 'aslanmus235'),
(165, 'db-a16-50', '#000000', 'aslanmus235'),
(166, 'db-a12-53', '#000000', 'aslanmus235'),
(167, 'db-a13-54', '#000000', 'aslanmus235'),
(168, 'db-a14-54', '#000000', 'aslanmus235'),
(169, 'db-a15-54', '#000000', 'aslanmus235'),
(170, 'db-a16-51', '#000000', 'aslanmus235'),
(171, 'db-a16-52', '#000000', 'aslanmus235'),
(172, 'db-a16-53', '#000000', 'aslanmus235'),
(173, 'db-a11-53', '#000000', 'aslanmus235'),
(174, 'db-a10-52', '#000000', 'aslanmus235'),
(175, 'db-a9-51', '#000000', 'aslanmus235'),
(176, 'db-a9-50', '#000000', 'aslanmus235'),
(177, 'db-a9-49', '#000000', 'aslanmus235'),
(178, 'db-a9-48', '#000000', 'aslanmus235'),
(179, 'db-a9-47', '#000000', 'aslanmus235'),
(180, 'db-a10-46', '#000000', 'aslanmus235'),
(181, 'db-a11-45', '#000000', 'aslanmus235'),
(182, 'db-a12-45', '#000000', 'aslanmus235'),
(183, 'db-a13-45', '#000000', 'aslanmus235'),
(184, 'db-a13-44', '#000000', 'aslanmus235'),
(185, 'db-a13-43', '#000000', 'aslanmus235'),
(186, 'db-a14-42', '#000000', 'aslanmus235'),
(187, 'db-a15-42', '#000000', 'aslanmus235'),
(188, 'db-a16-42', '#000000', 'aslanmus235'),
(189, 'db-a17-42', '#000000', 'aslanmus235'),
(190, 'db-a18-42', '#000000', 'aslanmus235'),
(191, 'db-a20-43', '#000000', 'aslanmus235'),
(192, 'db-a20-44', '#000000', 'aslanmus235'),
(193, 'db-a14-45', '#000000', 'aslanmus235'),
(194, 'db-a15-45', '#000000', 'aslanmus235'),
(195, 'db-a16-45', '#000000', 'aslanmus235'),
(196, 'db-a17-45', '#000000', 'aslanmus235'),
(197, 'db-a18-45', '#000000', 'aslanmus235'),
(198, 'db-a19-45', '#000000', 'aslanmus235'),
(199, 'db-a20-45', '#000000', 'aslanmus235'),
(200, 'db-a21-45', '#000000', 'aslanmus235'),
(201, 'db-a22-45', '#000000', 'aslanmus235'),
(202, 'db-a23-46', '#000000', 'aslanmus235'),
(203, 'db-a23-47', '#000000', 'aslanmus235'),
(204, 'db-a23-48', '#000000', 'aslanmus235'),
(205, 'db-a23-49', '#000000', 'aslanmus235'),
(206, 'db-a22-49', '#000000', 'aslanmus235'),
(207, 'db-a21-49', '#000000', 'aslanmus235'),
(208, 'db-a21-50', '#000000', 'aslanmus235'),
(209, 'db-a21-51', '#000000', 'aslanmus235'),
(210, 'db-a21-52', '#000000', 'aslanmus235'),
(211, 'db-a22-51', '#000000', 'aslanmus235'),
(212, 'db-a23-51', '#000000', 'aslanmus235'),
(213, 'db-a23-52', '#000000', 'aslanmus235'),
(214, 'db-a23-53', '#000000', 'aslanmus235'),
(215, 'db-a22-54', '#000000', 'aslanmus235'),
(216, 'db-a21-54', '#000000', 'aslanmus235'),
(217, 'db-a20-54', '#000000', 'aslanmus235'),
(218, 'db-a19-54', '#000000', 'aslanmus235'),
(219, 'db-a18-54', '#000000', 'aslanmus235'),
(220, 'db-a17-54', '#000000', 'aslanmus235'),
(221, 'db-a16-54', '#000000', 'aslanmus235'),
(222, 'db-a5-68', '#000000', 'ANNENİ SİKİYORUM'),
(223, 'db-a59-70', '#000000', 'ANNENİ SİKİYORUM');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_db`
--

CREATE TABLE `user_db` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `user_password` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `user_mail` varchar(300) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `user_db`
--

INSERT INTO `user_db` (`user_id`, `username`, `user_password`, `user_mail`) VALUES
(1, 'aslanmus235', 'trabzon7760', 'mustafaaslan2500@gmail.com'),
(3, 'yarrak', 'yarrak313131', 'yarrak@gmail.com'),
(5, 'selimak34', 'trabzon7760', 'cjd@gmail.com'),
(6, 'ajdar', 'trabzon7760', 'ajdar56@gmail.com'),
(7, 'jhujh', 'yyuu88888', '78tg@gmail.com'),
(8, 'ANNENİ SİKİYORUM', '023fbb25', 'seksseviyorum31@gmail.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `rplace_db`
--
ALTER TABLE `rplace_db`
  ADD PRIMARY KEY (`rplace_id`);

--
-- Tablo için indeksler `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `rplace_db`
--
ALTER TABLE `rplace_db`
  MODIFY `rplace_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- Tablo için AUTO_INCREMENT değeri `user_db`
--
ALTER TABLE `user_db`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
