-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 03 Oca 2023, 02:06:55
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `basketbolcu_secimi_veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `eposta` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`eposta`, `sifre`, `isim`) VALUES
('admin@gmail.com', '1234567', 'Michael Malone');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `istatistik`
--

DROP TABLE IF EXISTS `istatistik`;
CREATE TABLE IF NOT EXISTS `istatistik` (
  `istatistik_id` int(11) NOT NULL,
  `sporcu_id` int(11) NOT NULL,
  `ribaund` float NOT NULL,
  `blok` float NOT NULL,
  `asist` float NOT NULL,
  `sayi` float NOT NULL,
  `top_calma` float NOT NULL,
  `uc_sayilik` float NOT NULL,
  `sure` float NOT NULL,
  `puan` float NOT NULL,
  PRIMARY KEY (`istatistik_id`),
  KEY `oyuncu_adi` (`sporcu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `istatistik`
--

INSERT INTO `istatistik` (`istatistik_id`, `sporcu_id`, `ribaund`, `blok`, `asist`, `sayi`, `top_calma`, `uc_sayilik`, `sure`, `puan`) VALUES
(1, 1, 9.7, 1.6, 4.3, 33.3, 2.1, 1.1, 35, 8.7),
(2, 2, 8.6, 0.6, 8.8, 33.8, 1, 3, 36.8, 9.3),
(3, 3, 4.8, 1.1, 5.7, 31.2, 1, 1.1, 35.7, 8.1),
(4, 4, 11.5, 0.9, 5.2, 31.7, 2.1, 0.8, 33.7, 8.6),
(5, 5, 8.2, 0.9, 4, 31, 1.2, 3.3, 37, 8.5),
(6, 6, 6.6, 0.3, 6.8, 30, 2, 5, 34.5, 8.4),
(7, 7, 6.8, 1.5, 5.4, 29.6, 1.3, 1.7, 36.1, 8.3),
(8, 8, 3.8, 0.3, 4.5, 28.4, 1.2, 3.9, 36.3, 7),
(9, 9, 3.8, 0.3, 7.2, 27.5, 2.3, 4.2, 35.2, 8.1),
(10, 10, 12.1, 2.1, 2.6, 27.4, 2.3, 0.4, 33.4, 8),
(11, 11, 8.1, 0.6, 6.6, 27.8, 2.5, 2, 35.7, 8.4),
(12, 12, 2.8, 0.2, 9.9, 27.3, 0.6, 2.3, 35.5, 7.9),
(13, 13, 4.6, 0.4, 5.6, 27.1, 1.2, 2.3, 34.5, 7.6),
(14, 14, 6.1, 0.2, 8.1, 26.8, 0.5, 1.7, 32.6, 7.6),
(15, 15, 7.2, 0.4, 3.4, 27, 0.4, 2.5, 35.9, 7.7),
(16, 16, 8.6, 0.5, 6.7, 26.5, 0.4, 1.4, 36.9, 8.1),
(17, 17, 5.2, 0.5, 5, 26.5, 0.6, 0.4, 36.1, 7.4),
(18, 18, 4.9, 0.9, 4.7, 26.1, 0.9, 3, 36.7, 7.4),
(19, 19, 10.8, 0.6, 9.4, 25.7, 0.6, 0.8, 33.6, 7.1),
(20, 20, 7, 0.7, 4.7, 25.7, 0.7, 0.3, 33.5, 7.3),
(21, 21, 6.1, 0.5, 5.2, 23.8, 1.2, 3, 34.5, 7.5),
(22, 22, 6.1, 0.6, 4.4, 23.7, 0.6, 2.6, 37, 7.5),
(23, 23, 4.7, 0.4, 5.9, 23.6, 0.8, 1.7, 32.6, 7),
(24, 24, 9.7, 0.3, 3.7, 23.8, 0.5, 2.6, 34.7, 7.5),
(25, 25, 8.3, 0.6, 1.9, 23.6, 0.3, 3, 33.9, 7),
(26, 26, 3, 0.2, 4, 22.4, 0.4, 3.9, 36, 7),
(27, 27, 4.3, 0, 4.3, 22.9, 0.3, 2.9, 34.9, 6.9),
(28, 28, 9.1, 1.5, 2.5, 22.2, 0.4, 1.8, 33, 7.1),
(29, 29, 7.5, 0.5, 3.6, 21.7, 0.2, 2.6, 35.3, 7.2),
(30, 30, 4.4, 0.8, 2.8, 22, 0.6, 2.6, 36.1, 6.7),
(31, 31, 6.6, 0.6, 3.9, 20.9, 0.6, 1.2, 34.1, 6.8),
(32, 32, 4.4, 0.2, 3.6, 21.6, 0.8, 2.3, 34.4, 6.4),
(33, 33, 4.9, 0.2, 2.9, 21.1, 0.6, 2.5, 32.7, 6.5),
(34, 34, 9.8, 0.7, 3.2, 20.9, 0.6, 0, 35.1, 7.1),
(35, 35, 3.6, 0.1, 2.5, 20.6, 0.9, 2.4, 31.2, 6.2),
(36, 36, 3.8, 0.4, 10.2, 20.8, 0.5, 3.1, 33.4, 7.3),
(37, 37, 5.1, 0.4, 1.2, 20.1, 0, 2.3, 32.6, 6.3),
(38, 38, 2.7, 0.2, 7.8, 21.4, 0.6, 2.5, 35.6, 7.1),
(39, 39, 5.4, 0.4, 6.3, 20.5, 0.6, 2, 36.1, 7.2),
(40, 40, 5.4, 0.2, 3, 19.7, 0.6, 1.8, 34.1, 6.5),
(41, 41, 3.2, 0.1, 6.5, 20.2, 0.8, 1.5, 32.4, 6.4),
(42, 42, 2.2, 0.2, 4.3, 20.3, 0.6, 2.5, 29.4, 6),
(43, 43, 4.1, 0.2, 3.5, 19.9, 0.5, 1.5, 33.4, 6.3),
(44, 44, 3.9, 0.3, 4.5, 20.5, 0.7, 2.6, 32.6, 6.5),
(45, 45, 5.8, 0.8, 2.2, 18.7, 0.4, 1.8, 36.4, 6.6),
(46, 46, 5.4, 0.4, 5.8, 19.3, 0.7, 2, 34.3, 6.8),
(47, 47, 12.3, 0.5, 6.7, 18.6, 0.6, 0.5, 33.8, 7.3),
(48, 48, 4.7, 0.3, 2.6, 17.8, 0.6, 3.8, 31.7, 6.2),
(49, 49, 3.9, 0.6, 1.5, 17.3, 0.6, 1.7, 28.5, 5.5),
(50, 50, 4.5, 0.6, 3.9, 18.4, 0.6, 1, 20.6, 5.1),
(51, 51, 3, 0.4, 3, 15, 0.4, 1.3, 16, 4),
(52, 52, 4.3, 0.3, 4.2, 19, 0.3, 1.4, 18.9, 4.8),
(53, 53, 5.6, 0.4, 2.6, 19.5, 0.6, 1.6, 23.1, 5.3),
(54, 54, 3.6, 0.5, 5.2, 16.9, 0.8, 2.1, 20.1, 4.9),
(55, 55, 3.1, 0.6, 7.1, 16.6, 0.3, 1.6, 18.6, 5.5),
(56, 56, 3.2, 0.8, 5.1, 15.2, 0.4, 1.4, 15.6, 4.2),
(57, 57, 4.1, 0.6, 2.6, 14.6, 0.8, 1.8, 16.9, 4.1),
(58, 58, 2.5, 0.6, 4.6, 14.9, 0.6, 1.9, 19.3, 4.4),
(59, 59, 1.9, 0.9, 4.3, 16.1, 1.2, 0.6, 18.1, 4.3),
(60, 60, 2.3, 1.1, 3.2, 14.5, 0.3, 1.4, 16.1, 3.8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mevki`
--

DROP TABLE IF EXISTS `mevki`;
CREATE TABLE IF NOT EXISTS `mevki` (
  `mevki_id` int(11) NOT NULL,
  `mevki_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`mevki_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mevki`
--

INSERT INTO `mevki` (`mevki_id`, `mevki_ad`) VALUES
(1, 'Oyun Kurucu'),
(2, 'Sutor Gard'),
(3, 'Kısa Forvet'),
(4, 'Uzun Forvet'),
(5, 'Pivot');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyuncu`
--

DROP TABLE IF EXISTS `oyuncu`;
CREATE TABLE IF NOT EXISTS `oyuncu` (
  `sporcu_id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `soyad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yas` int(11) DEFAULT NULL,
  `takim_id` int(11) DEFAULT NULL,
  `mevki_id` int(11) DEFAULT NULL,
  `boy` int(11) DEFAULT NULL,
  `kilo` int(11) DEFAULT NULL,
  `transfer` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`sporcu_id`),
  KEY `takım_id` (`takim_id`),
  KEY `mevki_id` (`mevki_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `oyuncu`
--

INSERT INTO `oyuncu` (`sporcu_id`, `ad`, `soyad`, `yas`, `takim_id`, `mevki_id`, `boy`, `kilo`, `transfer`) VALUES
(1, 'Joem', 'Embiid', 28, 10, 5, 213, 127, 'satılık'),
(2, 'Luka', 'Doncic', 23, 18, 1, 200, 104, 'satılık'),
(3, 'Shai ', 'Alexander', 23, 22, 1, 198, 81, 'satılık değil'),
(4, 'Giannis', 'Antetokounmpo', 27, 14, 4, 211, 109, 'satılık'),
(5, 'Jayson ', 'Tatum', 24, 1, 3, 202, 95, 'satılık'),
(6, 'Stephen', 'Curry', 34, 17, 1, 188, 83, 'satılık değil'),
(7, 'Kevin', 'Durant', 33, 4, 4, 208, 108, 'satılık değil'),
(8, 'Donovan', 'Mitchell', 25, 5, 2, 185, 97, 'satılık'),
(9, 'Damian', 'Lillard', 31, 25, 1, 188, 88, 'satılık'),
(10, 'Anthony', 'Davis', 29, 23, 4, 208, 114, 'satılık değil'),
(11, 'Lebron', 'James', 37, 23, 3, 206, 113, 'satılık'),
(12, 'Trae', 'Young', 23, 3, 1, 185, 74, 'satılık değil'),
(13, 'Devin', 'Booker', 25, 26, 2, 196, 93, 'satılık'),
(14, 'Ja ', 'Morant', 22, 24, 1, 191, 78, 'satılık değil'),
(15, 'Jaylen ', 'Brown', 25, 1, 2, 198, 101, 'satılık değil'),
(16, 'Pascal', 'Siakam', 28, 13, 4, 202, 104, 'satılık'),
(17, 'Demar ', 'Derozan', 32, 2, 3, 198, 99, 'satılık değil'),
(18, 'Kyrie', 'Irving', 30, 4, 1, 188, 88, 'satılık değil'),
(19, 'Nikola', 'Jokic', 27, 16, 5, 211, 128, 'satılık'),
(20, 'Zion', 'William', 21, 27, 4, 198, 128, 'satılık değil'),
(21, 'Paul', 'George', 32, 20, 3, 202, 99, 'satılık değil'),
(22, 'Anthony', 'Edwards', 20, 19, 3, 193, 102, 'satılık değil'),
(23, 'Deaaron', 'Fox', 24, 29, 1, 191, 83, 'satılık'),
(24, 'Julius ', 'Randle', 27, 7, 4, 202, 113, 'satılık değil'),
(25, 'Lauri', 'Markkanen', 25, 28, 4, 211, 108, 'satılık değil'),
(26, 'Anfernee', 'Simons', 23, 25, 2, 191, 82, 'satılık'),
(27, 'Zach ', 'Lavine', 27, 2, 2, 196, 90, 'satılık değil'),
(28, 'Kristaps', 'Porzingis', 26, 15, 5, 221, 108, 'satılık değil'),
(29, 'Kyle', 'Kuzma', 26, 15, 3, 206, 100, 'satılık'),
(30, 'Jerami', 'Grant', 28, 25, 3, 202, 95, 'satılık değil'),
(31, 'Paolo', 'Banchero', 19, 12, 4, 208, 113, 'satılık'),
(32, 'Jalen', 'Green', 20, 21, 2, 193, 84, 'satılık değil'),
(33, 'Keldon', 'Johnson', 22, 30, 3, 198, 99, 'satılık değil'),
(34, 'Bam', 'Adebayo', 22, 9, 5, 208, 115, 'satılık'),
(35, 'Bojan', 'Bogdanovic', 33, 8, 3, 200, 102, 'satılık değil'),
(36, 'Tyrese ', 'Haliburton', 22, 11, 1, 196, 83, 'satılık'),
(37, 'Kelly', 'Oubre Jr', 26, 6, 2, 198, 92, 'satılık değil'),
(38, 'Darius', 'Garland', 22, 5, 1, 185, 87, 'satılık değil'),
(39, 'Dejounte', 'Murray', 25, 3, 2, 196, 83, 'satılık'),
(40, 'Rj', 'Barrett', 22, 7, 2, 198, 97, 'satılık değil'),
(41, 'Jalen', 'Brunson', 25, 7, 1, 185, 86, 'satılık değil'),
(42, 'Jordan', 'Clarkson', 30, 28, 3, 193, 87, 'satılık'),
(43, 'Franz', 'Wagner', 20, 12, 3, 208, 99, 'satılık değil'),
(44, 'Jordan', 'Poole', 23, 17, 2, 193, 87, 'satılık değil'),
(45, 'Og', 'Anunoby', 24, 13, 3, 201, 105, 'satılık değil'),
(46, 'Kevin', 'Porter Jr', 22, 21, 2, 193, 92, 'satılık'),
(47, 'Domantas', 'Sabonis', 26, 29, 3, 211, 108, 'satılık değil'),
(48, 'Buddy', 'Hield', 29, 11, 2, 193, 99, 'satılık değil'),
(49, 'Bennedict', 'Mathurin', 28, 11, 1, 198, 95, 'satılık değil'),
(50, 'Nikole', 'Vucecic', 31, 2, 5, 208, 117, 'satılık'),
(51, 'Deandre', 'Jordan', 34, 16, 5, 211, 120, 'satılık değil'),
(52, 'Ish', 'Smith', 34, 16, 1, 2, 79, 'satılık değil'),
(53, 'Aaron', 'Gordon', 27, 16, 4, 203, 106, 'satılık'),
(54, 'Davon', 'Reed', 27, 29, 2, 196, 93, 'satılık değil'),
(55, 'Jack', 'White', 25, 16, 3, 201, 102, 'satılık'),
(56, 'Zeke', 'Nnaji', 21, 16, 4, 206, 108, 'satılık değil'),
(57, 'Bones', 'Hyland', 22, 16, 1, 188, 76, 'satılık değil'),
(58, 'Peyton', 'Watson', 20, 16, 2, 201, 90, 'satılık'),
(59, 'Jeff', 'Green', 36, 16, 4, 203, 106, 'satılık değil'),
(60, 'Bruce', 'Brown', 26, 16, 1, 193, 91, 'satılık');

--
-- Tetikleyiciler `oyuncu`
--
DROP TRIGGER IF EXISTS `isim_formati`;
DELIMITER $$
CREATE TRIGGER `isim_formati` BEFORE INSERT ON `oyuncu` FOR EACH ROW SET new.ad=concat(upper(substring(new.ad,1,1)),lower(substring(new.ad,2)))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `takim`
--

DROP TABLE IF EXISTS `takim`;
CREATE TABLE IF NOT EXISTS `takim` (
  `takim_id` int(11) NOT NULL,
  `takim_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`takim_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `takim`
--

INSERT INTO `takim` (`takim_id`, `takim_ad`) VALUES
(1, 'Boston Celtics'),
(2, 'Chicago Bulls'),
(3, 'Atlanta Hawks'),
(4, 'Brooklyn Nets'),
(5, 'Cleveland Cavaliers'),
(6, 'Charlotte Hornets'),
(7, 'New York Knicks'),
(8, 'Detroit Pistons'),
(9, 'Maimi Heat'),
(10, 'Philadelphia 76ers'),
(11, 'Indiana Pacers'),
(12, 'Orlando Magic'),
(13, 'Toronto Raptors'),
(14, 'Milwaukee Bucks'),
(15, 'Washington Wizards'),
(16, 'Denver Nuggets'),
(17, 'Golden State Warriors'),
(18, 'Dallas Mavericks'),
(19, 'Minnesota Timberwolves'),
(20, 'Los Angeles Clippers'),
(21, 'Houston Rockets'),
(22, 'Oklahoma City Thunder'),
(23, 'Los Angeles Lakers'),
(24, 'Memphis Grizzlies'),
(25, 'Portland Trail Blazers'),
(26, 'Phoenix Suns'),
(27, 'New Orleans Pelicans'),
(28, 'Utah Jazz'),
(29, 'Sacramento Kings'),
(30, 'San Antonio Spurs');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `istatistik`
--
ALTER TABLE `istatistik`
  ADD CONSTRAINT `istatistik` FOREIGN KEY (`sporcu_id`) REFERENCES `oyuncu` (`sporcu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `oyuncu`
--
ALTER TABLE `oyuncu`
  ADD CONSTRAINT `mevki` FOREIGN KEY (`mevki_id`) REFERENCES `mevki` (`mevki_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `takım` FOREIGN KEY (`takim_id`) REFERENCES `takim` (`takim_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
