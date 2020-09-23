-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 23 Eyl 2020, 20:38:54
-- Sunucu sürümü: 8.0.18
-- PHP Sürümü: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gazetebul`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `isActive` tinyint(1) DEFAULT NULL,
  `category_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `title`, `isActive`, `category_date`) VALUES
(32, 'Yerel Gazeteler', 1, '2020-05-11 10:03:51'),
(33, 'Ulusal Gazeteler', 1, '2020-05-11 10:04:14');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gazeteler`
--

CREATE TABLE `gazeteler` (
  `id` int(10) UNSIGNED NOT NULL,
  `gazete_title` varchar(70) NOT NULL,
  `gazete_adi` varchar(255) NOT NULL,
  `gazete_url` varchar(500) NOT NULL,
  `gazete_kategori` varchar(255) NOT NULL,
  `gazete_sehir` varchar(50) NOT NULL,
  `gazete_ukle` varchar(50) NOT NULL,
  `gazete_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `gazeteler`
--

INSERT INTO `gazeteler` (`id`, `gazete_title`, `gazete_adi`, `gazete_url`, `gazete_kategori`, `gazete_sehir`, `gazete_ukle`, `gazete_date`, `isActive`) VALUES
(4, '', 'Buraya Link Ver', '#', 'sponsor_medya', 'sehir_none', 'TUR', '2020-05-14 09:24:13', 1),
(5, '', 'Buraya Link Ver', '#', 'sponsor_medya', 'sehir_none', 'TUR', '2020-05-14 09:24:27', 1),
(6, '', 'Buraya Link Ver', '#', 'sponsor_medya', 'sehir_none', 'TUR', '2020-05-14 09:24:49', 1),
(7, '', 'Haberler.com', 'https://www.haberler.com/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:40:26', 1),
(8, '', 'Akşam Gazetesi', 'http://www.aksam.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:40:48', 1),
(9, '', 'Aydınlık Gazetesi', 'https://www.aydinlik.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:41:07', 1),
(10, '', 'Birgün Gazetesi', 'https://www.birgun.net/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:41:25', 1),
(11, '', 'Cumhuriyet Gazetesi', 'http://www.cumhuriyet.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:41:49', 1),
(12, '', 'Güneş Gazetesi', 'http://www.gunes.com/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:42:09', 1),
(13, '', 'HaberTürk Gazetesi', 'https://www.haberturk.com/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:42:25', 1),
(14, '', 'Hürriyet Gazetesi', 'https://www.hurriyet.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:42:41', 1),
(15, '', 'Milli Gazete', 'https://www.milligazete.com.tr/', 'ulusal_gazeteler', 'deneme', 'TUR', '2020-05-14 10:43:01', 1),
(16, '', 'Milliyet Gazetesi', 'https://www.milliyet.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:43:21', 1),
(17, '', 'Posta Gazetesi', 'https://www.posta.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:43:35', 1),
(18, '', 'Sabah Gazetesi', 'https://www.sabah.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:43:51', 1),
(19, '', 'Sözcü Gazetesi', 'https://www.sozcu.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:44:06', 1),
(20, '', 'Star Gazetesi', 'https://www.star.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:44:21', 1),
(21, '', 'Sondakika.com', 'https://www.sondakika.com/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:44:49', 1),
(22, '', 'Şok Gazetesi', 'http://www.gazetesok.com/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:45:12', 1),
(23, '', 'Takvim Gazetesi', 'https://www.takvim.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:45:27', 1),
(24, '', 'Türkiye Gazetesi', 'https://www.turkiyegazetesi.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:45:44', 1),
(25, '', 'Vatan Gazetesi', 'http://www.gazetevatan.com/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:45:57', 1),
(26, '', 'Yeni Akit Gazetesi', 'https://www.yeniakit.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:46:20', 1),
(27, '', 'Yeni Asya Gazetesi', 'https://www.yeniasya.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:46:37', 1),
(28, '', 'Yeniçağ Gazetesi', 'https://www.yenicaggazetesi.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:46:59', 1),
(29, '', 'Yeni Mesaj Gazetesi', 'https://www.yenimesaj.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:47:14', 1),
(30, '', 'Yeni Şafak Gazetesi', 'https://www.yenisafak.com/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:47:44', 1),
(31, '', 'Yurt Gazetesi', 'https://www.yurtgazetesi.com.tr/', 'ulusal_gazeteler', 'sehir_none', 'TUR', '2020-05-14 10:48:59', 1),
(32, '', 'A Spor Gazetesi', 'https://www.aspor.com.tr/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:49:37', 1),
(33, '', 'Ajans Spor Gazetesi', 'https://ajansspor.com/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:50:02', 1),
(34, '', 'Akşam Spor Gazetesi', 'https://www.aksam.com.tr/spor/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:50:20', 1),
(35, '', 'Fotospor Gazetesi', 'http://www.fotospor.com/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:50:37', 1),
(36, '', 'Fanatik Gazetesi', 'https://www.fanatik.com.tr/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:50:55', 1),
(37, '', 'Fotomaç Gazetesi', 'https://www.fotomac.com.tr/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:51:11', 1),
(38, '', 'Futbol Sayfası', 'https://www.futbolsayfasi.net/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:51:32', 1),
(39, '', 'Futbol Arena', 'https://www.futbolarena.com/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:51:51', 1),
(40, '', 'Goal.com', 'https://www.goal.com/tr', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:52:14', 1),
(41, '', 'Hürriyet Spor Arena', 'https://www.hurriyet.com.tr/sporarena/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:52:33', 1),
(42, '', 'Haberler.com Spor', 'https://www.haberler.com/spor/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:52:54', 1),
(43, '', 'HaberTürk Spor', 'https://www.haberturk.com/spor', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:53:22', 1),
(44, '', 'Milli Gazete Spor', 'https://www.milligazete.com.tr/spor', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:53:38', 1),
(45, '', 'NTV Spor Gazetesi', 'https://www.ntvspor.net/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:54:03', 1),
(46, '', 'Sabah Spor Gazetesi', 'https://www.sabah.com.tr/spor-haberleri', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:54:24', 1),
(47, '', 'Skor Gazetesi', 'https://skor.sozcu.com.tr/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:54:46', 1),
(48, '', 'Skorer Gazetesi', 'https://www.milliyet.com.tr/skorer/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:55:03', 1),
(49, '', 'Sondakika Spor', 'https://www.sondakika.com/spor/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:55:22', 1),
(50, '', 'Sporx.com', 'https://www.sporx.com/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:55:41', 1),
(51, '', 'Starspor Gazetesi', 'https://www.star.com.tr/spor/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:55:59', 1),
(52, '', 'Vatan Spor Gazetesi', 'http://sampiy10.gazetevatan.com/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:56:18', 1),
(53, '', 'Takvim Spor Gazetesi', 'https://www.takvim.com.tr/spor', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:56:50', 1),
(54, '', 'TRT Spor Gazetesi', 'https://www.trtspor.com.tr/', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:57:12', 1),
(55, '', 'Türkiye Spor Gazetesi', 'https://www.turkiyegazetesi.com.tr/spor', 'spor_gazeteleri', 'sehir_none', 'TUR', '2020-05-14 10:57:31', 1),
(56, '', 'CNN', 'https://edition.cnn.com/', 'yabanci_gazeteler', 'sehir_none', 'USA', '2020-05-14 11:04:30', 1),
(57, '', 'New York Times', 'https://www.nytimes.com/', 'yabanci_gazeteler', 'sehir_none', 'USA', '2020-05-14 11:05:59', 1),
(58, '', 'Usa Today', 'https://www.usatoday.com/', 'yabanci_gazeteler', 'sehir_none', 'USA', '2020-06-09 17:24:40', 1),
(59, '', 'Washington Post', 'https://www.washingtonpost.com/', 'yabanci_gazeteler', 'sehir_none', 'USA', '2020-06-09 17:25:27', 1),
(60, '', 'Der Spiegel', 'https://www.spiegel.de/', 'yabanci_gazeteler', 'sehir_none', 'DEU', '2020-06-09 17:26:05', 1),
(61, '', 'Die Welt', 'https://www.welt.de/', 'yabanci_gazeteler', 'sehir_none', 'DEU', '2020-06-09 17:26:43', 1),
(63, '', 'Le Soir', 'https://www.lesoir.be/', 'yabanci_gazeteler', 'sehir_none', 'BEL', '2020-06-09 17:30:39', 1),
(64, '', 'Lemonde', 'https://www.lemonde.fr/', 'yabanci_gazeteler', 'sehir_none', 'FRA', '2020-06-09 17:32:27', 1),
(65, '', 'Liberation', 'https://www.liberation.fr/', 'yabanci_gazeteler', 'sehir_none', 'FRA', '2020-06-09 17:33:36', 1),
(66, '', 'D.N. d\'Alsace', 'https://www.dna.fr/', 'yabanci_gazeteler', 'sehir_none', 'FRA', '2020-06-09 17:36:04', 1),
(67, '', 'The Guardian', 'https://www.theguardian.com/international', 'yabanci_gazeteler', 'sehir_none', 'GBR', '2020-06-09 17:38:10', 1),
(68, '', 'Daily Mail', 'https://www.dailymail.co.uk/', 'yabanci_gazeteler', 'sehir_none', 'GBR', '2020-06-09 17:39:33', 1),
(69, '', 'Daily Express', 'https://www.express.co.uk/', 'yabanci_gazeteler', 'sehir_none', 'GBR', '2020-06-09 17:40:16', 1),
(70, '', 'The Sun', 'https://www.thesun.co.uk/', 'yabanci_gazeteler', 'sehir_none', 'GBR', '2020-06-09 17:40:54', 1),
(71, '', 'Algemeen Dagblad', 'https://www.ad.nl/', 'yabanci_gazeteler', 'sehir_none', 'NLD', '2020-06-09 17:42:08', 1),
(72, '', 'De Telegraaf', 'https://www.telegraaf.nl/', 'yabanci_gazeteler', 'sehir_none', 'NLD', '2020-06-09 17:42:43', 1),
(73, '', 'Dagens Handel', 'https://www.dagenshandel.se/', 'yabanci_gazeteler', 'sehir_none', 'SWE', '2020-06-09 17:46:26', 1),
(74, '', 'Dagens Industri', 'https://www.di.se/', 'yabanci_gazeteler', 'sehir_none', 'SWE', '2020-06-09 17:49:14', 1),
(75, '', 'Weltwoche', 'https://www.weltwoche.ch/', 'yabanci_gazeteler', 'sehir_none', 'CHE', '2020-06-09 17:50:48', 1),
(76, '', 'Blick', 'https://www.blick.ch/', 'yabanci_gazeteler', 'sehir_none', 'CHE', '2020-06-09 17:51:21', 1),
(77, '', 'La Gazzetta dello Sport', 'https://www.gazzetta.it/', 'yabanci_gazeteler', 'sehir_none', 'ITA', '2020-06-09 17:52:26', 1),
(78, '', 'La Repubblica', 'https://www.repubblica.it/', 'yabanci_gazeteler', 'sehir_none', 'ITA', '2020-06-09 17:54:11', 1),
(79, '', 'Marca', 'https://www.marca.com/', 'yabanci_gazeteler', 'sehir_none', 'ESP', '2020-06-09 17:56:56', 1),
(80, '', 'Diario As', 'https://as.com/', 'yabanci_gazeteler', 'sehir_none', 'ESP', '2020-06-09 18:00:59', 1),
(81, '', 'Yeni Adana', 'http://yeniadana.net/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 00:19:45', 1),
(82, '', 'Adana Haber', 'https://www.adanahaber.com/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 00:20:07', 1),
(83, '', 'Afyon Haber', 'https://www.afyonhaber.com/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 00:31:20', 1),
(84, '', 'Emirdağ Gazetesi', 'http://www.emirdaggazetesi.com/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 00:32:11', 1),
(85, '', 'Adıyaman Haber', 'http://www.adiyamanhaber.com/', 'yerel_gazeteler', 'adiyaman', 'TUR', '2020-06-10 00:33:28', 1),
(86, '', 'Kahta Gündem', 'http://www.kahtagundem.com/', 'yerel_gazeteler', 'adiyaman', 'TUR', '2020-06-10 00:33:57', 1),
(87, '', 'Doğubayazit Gazetesi', 'http://dogubayazitgazetesi.com', 'yerel_gazeteler', 'agri', 'TUR', '2020-06-10 00:35:19', 1),
(88, '', 'Amasya Gazetesi', 'http://www.amasyagazetesi.com/', 'yerel_gazeteler', 'amasya', 'TUR', '2020-06-10 00:42:16', 1),
(89, '', 'Yeşilırmak Gazetesi', 'http://www.yesilirmakgazetesi.com/', 'yerel_gazeteler', 'amasya', 'TUR', '2020-06-10 00:42:37', 1),
(90, '', 'Ankara Gazetesi', 'http://www.ankaragazetesi.com/', 'yerel_gazeteler', 'ankara', 'TUR', '2020-06-10 00:45:06', 1),
(91, '', 'Flas Gazetesi Ankara', 'https://www.flasgazetesi.com.tr/', 'yerel_gazeteler', 'ankara', 'TUR', '2020-06-10 00:46:23', 1),
(92, '', 'Kemer Gözcü', 'https://www.kemergozcu.com/', 'yerel_gazeteler', 'antalya', 'TUR', '2020-06-10 00:50:46', 1),
(93, '', 'Nehir Gazetesi', 'https://www.nehir.net/', 'yerel_gazeteler', 'antalya', 'TUR', '2020-06-10 00:51:50', 1),
(94, '', 'Yeni Alanya', 'https://www.yenialanya.com/', 'yerel_gazeteler', 'antalya', 'TUR', '2020-06-10 00:52:51', 1),
(95, '', 'Yeni Gün Gazetesi', 'http://www.yenigungazetesi.com.tr/', 'yerel_gazeteler', 'antalya', 'TUR', '2020-06-10 00:53:25', 1),
(96, '', 'Aksaray Haber 68', 'https://aksarayhaber68.com/', 'yerel_gazeteler', 'aksaray', 'TUR', '2020-06-10 15:29:16', 1),
(97, '', 'Aksaray Haber', 'http://www.aksaray68haber.com.tr/', 'yerel_gazeteler', 'aksaray', 'TUR', '2020-06-10 15:30:06', 1),
(98, '', 'Ağrı Hürses', 'https://www.agrihurses.net/', 'yerel_gazeteler', 'agri', 'TUR', '2020-06-10 15:31:36', 1),
(99, '', 'Ağrıda Haber', 'https://www.agridahaber.com/', 'yerel_gazeteler', 'agri', 'TUR', '2020-06-10 15:31:58', 1),
(100, '', 'Ağrı Haber Gazetesi', 'https://www.agrihabergazetesi.net/', 'yerel_gazeteler', 'agri', 'TUR', '2020-06-10 15:32:18', 1),
(101, '', 'Ağrı Ajans 04', 'https://ajans04.net/', 'yerel_gazeteler', 'agri', 'TUR', '2020-06-10 15:32:54', 1),
(102, '', 'Ağrı 04 Haber', 'http://www.04haber.net/', 'yerel_gazeteler', 'agri', 'TUR', '2020-06-10 15:33:21', 1),
(103, '', 'Adana Haber Net', 'https://www.adanahaber.net/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 15:35:42', 1),
(104, '', 'Adana 01 Haber', 'http://www.adana01haber.com/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 15:36:11', 1),
(105, '', 'Kozan Ekspres', 'https://kozanekspres.com/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 15:36:39', 1),
(106, '', 'Çukurova Expres Adana', 'http://www.cukurovaexpres.com/adana/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 15:37:18', 1),
(107, '', 'Kozan Haber', 'http://kozanhaber.com/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 15:37:54', 1),
(108, '', '5 Ocak Gazetesi', 'https://www.5ocakgazetesi.com/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 15:38:12', 1),
(109, '', 'Adana Doruk Gazetesi', 'https://www.adanadoruk.com/', 'yerel_gazeteler', 'adana', 'TUR', '2020-06-10 15:38:34', 1),
(110, '', 'Adıyamanlılar NET', 'https://www.adiyamanlilar.net/', 'yerel_gazeteler', 'adiyaman', 'TUR', '2020-06-10 15:40:34', 1),
(111, '', '02 Haberler', 'http://www.02haberler.com/', 'yerel_gazeteler', 'adiyaman', 'TUR', '2020-06-10 15:41:02', 1),
(112, '', 'Adıyaman Gündemi', 'https://www.adiyamangundemi.com/', 'yerel_gazeteler', 'adiyaman', 'TUR', '2020-06-10 15:41:21', 1),
(113, '', 'Adıyaman Işık Gazetesi', 'https://www.adiyamandaisikgazetesi.com/', 'yerel_gazeteler', 'adiyaman', 'TUR', '2020-06-10 15:43:39', 1),
(114, '', 'Afyon Yerel Basın', 'https://www.afyonyerelbasin.com/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:45:34', 1),
(115, '', 'Afyon Zafer Gazetesi', 'https://www.afyonzafer.net/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:45:59', 1),
(116, '', 'Afyon Gazete', 'http://www.afyongazete.com/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:46:54', 1),
(117, '', 'Afyon Gazete 3', 'http://www.gazete3.com.tr/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:47:30', 1),
(118, '', 'Kurtuluş Gazetesi', 'https://www.kurtulusgazetesi.com.tr/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:47:58', 1),
(119, '', 'Kocatepe Gazetesi', 'https://kocatepegazetesi.com/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:48:32', 1),
(120, '', 'Afyon Türkeli Gazetesi', 'https://www.afyonturkeligazetesi.com/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:49:18', 1),
(121, '', 'Afyon Spor Haber', 'https://www.afyonsporhaber.com/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:49:48', 1),
(122, '', 'Afyon Hisar Gazetesi', 'http://www.afyonhisargazetesi.com/', 'yerel_gazeteler', 'afyon', 'TUR', '2020-06-10 15:50:13', 1),
(123, '', 'Karabük Derin Haber', 'https://www.karabukderinhaber.com/', 'yerel_gazeteler', 'karabuk', 'TUR', '2020-06-26 15:55:48', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `home_settings`
--

CREATE TABLE `home_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `home_title` varchar(70) NOT NULL,
  `home_description` varchar(170) NOT NULL,
  `home_keywords` varchar(255) NOT NULL,
  `home_accordion1` varchar(500) NOT NULL,
  `home_accordion2` varchar(500) NOT NULL,
  `home_accordion3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `home_settings`
--

INSERT INTO `home_settings` (`id`, `home_title`, `home_description`, `home_keywords`, `home_accordion1`, `home_accordion2`, `home_accordion3`) VALUES
(1, 'Gazeteler | Bugünkü Gazeteleri Oku', 'Gazeteler, Bugünkü gazete manşetlerini, yerel, ulusal ve yabancı kaynaklı gazeteleri gazetebul ile oku.Tüm Haber kaynaklarına giden gazete dizini için tıkla.', 'gazeteler, gazete, gazete oku, haber, spor haberleri, ulusal gazeteler, yerel gazeteler, yabancı gazeteler, gazete manşetleri', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `quantity` int(255) NOT NULL,
  `list_price` varchar(255) NOT NULL,
  `sale_price` varchar(255) NOT NULL,
  `img_id` varchar(500) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `supplier_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sayfalar`
--

CREATE TABLE `sayfalar` (
  `id` int(10) UNSIGNED NOT NULL,
  `sayfa_adi` varchar(255) NOT NULL,
  `sayfa_url` varchar(500) NOT NULL,
  `sayfa_icerik` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sayfa_title` varchar(70) NOT NULL,
  `sayfa_description` varchar(170) NOT NULL,
  `sayfa_keywords` varchar(255) NOT NULL,
  `sayfa_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sayfalar`
--

INSERT INTO `sayfalar` (`id`, `sayfa_adi`, `sayfa_url`, `sayfa_icerik`, `sayfa_title`, `sayfa_description`, `sayfa_keywords`, `sayfa_date`, `isActive`) VALUES
(4, 'Gizlilik Politikası', 'gizlilik-politikasi', '<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">Gizlilik Politikası</span></strong></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Site Ziyaretlerinizde Gizlilik Esasları, Gazetebul.net sistemimiz i&ccedil;in &ouml;nem arz etmektedir.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Gazetebul.net olarak, Gizlilik politikalarımızı sıradan ve basit bir şekilde t&uuml;m kullanıcıların kolaylıkla yorumlayabileceği şekilde belirtmekteyiz. Bu sayfamız i&ccedil;eriğinde kullanıcı esaslı gizlilik politikalarımız yer almaktadır.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Gazetebul.net sitemizde yer alan t&uuml;m bağlantılar ile y&ouml;nlendiğiniz internet sitelerinin her birinin, kendilerine ait ve &ouml;zg&uuml; gizlilik politikaları yer almaktadır. Bu sistem &uuml;zerinde ele alınan gizlilik ilkeleri, bu y&ouml;nlendirilen siteler i&ccedil;in ge&ccedil;erli olmayıp, t&uuml;m bu sitelerin gizlilik politikalarını ilgili sitelerin y&ouml;nergelerinden inceleyebilirsiniz.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"color:#ffffff\">Gizlilik politikalarımız ile ilgili sorunuz var ise iletişim adresimiz olan </span><a href=\"https://gazetebul.net/iletisim\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#ffffff\">https://gazetebul.net/iletisim</span></a><span style=\"color:#ffffff\"> &uuml;zerinden mail ile sorularınızı bizlere y&ouml;nlendirebilirsiniz.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Veri Toplama ve Kullanımı</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><a href=\"https://gazetebul.net/\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#ffffff\">Gazeteler</span></a><span style=\"color:#ffffff\"> sitemizin sunduğu hizmetlerde (&ouml;rnek: ulusal gazete, yerel gazete, yabancı gazete dizinleri) &uuml;yelik veya kullanıcı &ouml;zel bilgilerini toplamakla sorumlu bir sistem bulunmamaktadır. Bu bağlamda sitemizi kullanan kullanıcıların hi&ccedil;bir &ouml;zel bilgisi veri olarak tutulmamaktadır.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Hizmet ile ilgili Bilgi Toplama</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">LOG Bilgileri: Gazeteler sitemiz &uuml;zerinde, herhangi bir tarayıcı ile ziyaret ettiğiniz esnada bazı veriler sunucu ile iletişime ge&ccedil;mek i&ccedil;in kaydedilebilir. Tarayıcının sunucuya g&ouml;nderdiği veriler arasında; Tarayıcı dili, Tarayıcı T&uuml;r&uuml; ve Versiyonu, İnternet Protokol Numaraınız (IP Adresiniz), Sunucu Talebi (Bu talep tarih vb. bilgi olabilir.) </span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">İletişim Bilgileri: Gazetebul.net sitemiz &uuml;zerinde yer alan iletişim formları ya da eposta aracılığı ile bizimle iletişim kurduğunuz taktirde, g&ouml;nderilen iletişim bilgileri (İsim Soyisim, E-Posta Adresiniz, Telefon Numaranız), iletişim isteğinize cevap vermek ve ya hizmetlerimiz ile ilgili isteğinizi yerine getirdiğimizde geri bildirim vermek amacı ile saklanabilir ve kullanılabilir.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Bağlantı Sağlanan Siteler: Gazetebul.net sitemiz &uuml;zerinden sağlanan t&uuml;m dış bağlantılar (Farklı internet siteleri) ile ilgili herhangi bir y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; ve sorumluluğu yoktur. Gazetebul.net internet sitemiz gizlilik politikaları, sağlanan dış bağlantıların gizlilik politikalarına etki etmez ve bağlamaz. Kullanıcılarımızın ziyaret ettiği t&uuml;m internet sitelerinin gizlilik politikalarını dikkat ile okumalarını &ouml;neririz.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"color:#ffffff\">Ziyaret Verileri: Gazetebul.net sitemiz &uuml;zerinden Google Analytics ziyaret&ccedil;i verileri takibi yapılmaktadır. Tarayıcınız tarafında 3. parti Google Analytics i&ccedil;in sağlanan verilerin gizlilik politikaları hakkında detaylı bilgi elde etmek isterseniz </span><a href=\"https://policies.google.com/privacy?hl=tr\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#ffffff\">buradan</span></a><span style=\"color:#ffffff\"> inceleyebilirsiniz.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">&Ccedil;erez Reklam ve &Uuml;&ccedil;&uuml;nc&uuml; Kişiler</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Gazetebul.net sitemizi ziyaret ettiğiniz sırada sizlere daha iyi hizmet vermek amacı ile &ccedil;erez (Cookie) kullanılabilir.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Gazetebul.net sitemiz &uuml;zerinde, Google ADS Reklamları sunulmaktadır. Bu reklamlar i&ccedil;erisinde &uuml;&ccedil;&uuml;nc&uuml; kişilerin yayınladıkları reklamları g&ouml;rebilirsiniz. </span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Bu reklamların gazetebul.net sitemiz &uuml;zerinde yayınlandığı sırada, &uuml;&ccedil;&uuml;nc&uuml; kişilerin web tarayıcınız &uuml;zerinde &ccedil;erez (cookie) yerleşimi yapılabilir ve bunları okuyabilir. Ver toplamak amacı ile web işaretleri (web beacons) kullanılabilir. Tarayıcınızın &ccedil;erez (cookie) verilerini izin vermemesi i&ccedil;in yine tarayıcınız &uuml;zerinden ilgili ayarları sağlayabilirsiniz. Bu &ccedil;erez (cookie) ayarlarını t&uuml;m &ccedil;erezleri veya bazı siteler i&ccedil;in cookie yazabile&ccedil;ek şekilde ayarlayabileceğiniz gibi, her &ccedil;erez yazma işlemi sırasında istek g&ouml;nderilmesini ve onayınızı alması karşılığında yazabileceği şeklinde ayarlayabilirsiniz. T&uuml;m &ccedil;erezleri de tarayıcınız &uuml;zerinden kapatabilirsiniz.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Ancak cookie&rsquo;leri kapattığınızı zaman ilgili aramalarınızla ya da ilgi odağınızla eşleşen reklamlar yerine karışık reklam birimlerini g&ouml;r&uuml;nt&uuml;leyebilir, gazetebul.net ve diğer sitelerin kullanımında zorluklar yaşayabilirsiniz. Bu zorluklar bazı siteler i&ccedil;in kullanıcı girişlerinde olabileceği gibi kullanıcı kaydı ve ge&ccedil;mişe dayalı verilerin tutulamamasında dolayı &ccedil;eşitli zorluklar olabilecektir.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Veri G&uuml;venliği</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Gazetebul.net, sunucularında toplanabilecek olan t&uuml;m bilgiler fiziksel ve elektronik ortam g&uuml;venliği ile &ccedil;eşitli sunucu g&uuml;venlik yapıları aracılığı ile korunmakta ve &ouml;nlem alınmaktadır.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Politika Değişiklikleri</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Gazetebul.net sitemiz &uuml;zerinde şuan okumakta olduğunuz gizlilik politikalarının zaman i&ccedil;erisinde değişiklikler yapılabilmektedir. G&uuml;ncel olarak takip etmek istediğiniz gizlilik politikalarımızın değişiklikleri i&ccedil;in belirli bir s&uuml;re veya aralık verilmemektedir. Bu y&uuml;zden zaman zaman sitemizin gizlilik politikalarını okumanızı &ouml;neririz.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">&Uuml;&ccedil;&uuml;nc&uuml; taraf satıcı olarak Google, sitemizde reklam yayınlama i&ccedil;in &ccedil;erezlerden yararlanır.</span></span></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\">Google, DART &ccedil;erezlerini kullanarak siz kullanıcılara, internet sitemize ve internetteki diğer sitelere yaptığınız ziyaretlere ve aramalara dayalı olarak reklamlar sunar.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:14.0pt\"><span style=\"color:#ffffff\">Kullanıcılarımız, </span><a href=\"https://policies.google.com/technologies/ads\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#ffffff\">Google reklam ve i&ccedil;erik ağı gizlilik politikasını</span></a><span style=\"color:#ffffff\"> ziyaret ederek DART &ccedil;erezlerinin kullanımını engelleyebilir.</span></span></span></span></p>\r\n', 'Gizlilik Politikası', 'Gizlilik politikası, gazetebul.net sitemizi kullanan tüm kullanıcıların gizlilik ve güvenlik politikalarımızı okumasını öneriyoruz.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler,', '2020-06-17 23:37:48', 1),
(5, 'Reklam', 'reklam', '<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">Gazetebul Reklam</span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><a href=\"https://gazetebul.net/\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#ffffff\">Gazeteler</span></a><span style=\"color:#ffffff\">, Gazetebul.net ismi ile 20 Nisan 2020 tarihinden itibaren hizmet vermektedir.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"color:#ffffff\">Sitemizde Google reklamlarına yer verilmektedir. Google reklam ve &ccedil;erez (cookie) politikalarını incelemek i&ccedil;in </span><a href=\"https://gazetebul.net/sayfa/gizlilik-politikasi\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#ffffff\">gizlilik politikası</span></a><span style=\"color:#ffffff\"> sayfamızı inceleyebilirsiniz.</span></span></strong></span></span></p>\r\n\r\n<p><span style=\"color:#ffffff\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\">Reklam &Ccedil;alışmalarınız i&ccedil;in Google ADS sistemini kullanabilir, siteniz i&ccedil;in Google ADS kanalı &uuml;zerinden online reklam verebilirsiniz.</span></strong></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"font-size:14.0pt\"><span style=\"color:#ffffff\">Gazetebul.net sitemiz &uuml;zerinden sponsor link alımı i&ccedil;in </span><a href=\"https://gazetebul.net/iletisim\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#ffffff\">iletişim</span></a><span style=\"color:#ffffff\"> adresimizden bizlere ulaşabilir, reklam yayını hakkında detaylı bilgi alabilirsiniz.</span></span></strong></span></span></p>\r\n', 'Reklam', 'Gazeteler, gazetebul.net sitemiz üzerinden reklam çalışmaları, sponsor link alımı ve reklam yayını hakkında tüm bilgileri elde edebilirsiniz.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler,reklam,sponsor link', '2020-06-18 00:16:00', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

CREATE TABLE `sehirler` (
  `id` int(10) UNSIGNED NOT NULL,
  `sehir_adi` varchar(70) NOT NULL,
  `sehir_url` varchar(255) NOT NULL,
  `sehir_title` varchar(70) NOT NULL,
  `sehir_aciklama` varchar(500) NOT NULL,
  `sehir_description` varchar(170) NOT NULL,
  `sehir_keywords` varchar(255) NOT NULL,
  `ilceler_liste` varchar(300) NOT NULL,
  `ilce_plaka` varchar(30) NOT NULL,
  `ilce_telkod` varchar(30) NOT NULL,
  `ilce_komsu` varchar(255) NOT NULL,
  `ilce_nufus` varchar(255) NOT NULL,
  `sehir_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`id`, `sehir_adi`, `sehir_url`, `sehir_title`, `sehir_aciklama`, `sehir_description`, `sehir_keywords`, `ilceler_liste`, `ilce_plaka`, `ilce_telkod`, `ilce_komsu`, `ilce_nufus`, `sehir_date`, `isActive`) VALUES
(48, 'Adana', 'adana-yerel-gazeteleri', 'Adana Yerel Gazeteleri - Adana Yerel Haberleri - Yerel Gazete Bul', '', 'Adana Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Adana iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Adana haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, adana haberleri, adana gazeteleri, adana', 'Seyhan, Yüreğir, Aladağ, Ceyhan, Feke, İmamoğlu, Karaisalı, Karataş, Kozan, Pozantı, Saimbeyli, Tufanbeyli, Yumurtalık', '01', '322', 'Hatay, Kahramanmaraş, Kayseri, Mersin, Niğde, Osmaniye', 'Toplam Nüfus: 2.237.940    -    Erkek Nüfusu: 1.117.032     -      Kadın Nüfusu: 1.120.908', '2020-05-13 12:55:24', 1),
(49, 'Adıyaman', 'adiyaman-yerel-gazeteleri', 'Adıyaman Yerel Gazeteleri - Adıyaman Yerel Haberleri - Yerel GazeteBul', '', 'Adıyaman Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Adıyaman iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Adıyaman haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler,Adıyaman Yerel Gazeteleri,Adıyaman habeleri,Adıyaman', 'Merkez, Besni, Çelikhan, Gerger, Gölbaşı, Kahta, Samsat, Sincik, Tut', '02', '416', 'Diyarbakır, Gaziantep, Kahramanmaraş, Malatya, Şanlıurfa', 'Toplam Nüfus: 626.465    -    Erkek Nüfusu: 316.112     -     Kadın Nüfusu: 310.353', '2020-05-13 12:55:48', 1),
(50, 'Afyon', 'afyon-yerel-gazeteleri', 'Afyon Yerel Gazeteleri - Afyon Yerel Haberleri - Yerel Gazete Bul', '', 'Afyon Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Afyon iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Afyon haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler,afyon yerel gazeteleri,afyon gazeteleri,afyon haberleri,afyon', 'Merkez, Başmakçı, Bayat, Bolvadin, Çay, Çobanlar, Dazkırı, Dinar, Emirdağ, Evciler, Hocalar, İhsaniye, İscehisar, Kızılören, Sandıklı, Sinanpaşa, Sultandağı, Şuhut', '03', '272', 'Burdur, Denizli, Eskişehir, Isparta, Konya, Kütahya, Uşak', 'Toplam Nüfus: 729.483    -    Erkek Nüfusu: 362.447     -     Kadın Nüfusu: 367.036', '2020-05-13 12:56:03', 1),
(51, 'Ağrı', 'agri-yerel-gazeteleri', 'Ağrı Yerel Gazeteleri - Ağrı Yerel Haberleri - Yerel Gazete Bul', '', 'Ağrı Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Ağrı iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Ağrı haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, ağrı yerel gazeteleri, agrı gazeteleri, ağrı haberleri, ağrı', 'Merkez, Diyadin, Doğubayazıt, Eleşkirt, Hamur, Patnos, Taşlıçay, Tutak', '04', '472', 'Bitlis, Erzurum, Iğdır, Kars, Muş, Van', 'Toplam Nüfus: 536.199    -    Erkek Nüfusu: 277.887     -     Kadın Nüfusu: 258.312', '2020-05-13 12:56:13', 1),
(52, 'Aksaray', 'aksaray-yerel-gazeteleri', 'Aksaray Yerel Gazeteleri - Aksaray Yerel Haberleri - Yerel Gazete Bul', '', 'Aksaray Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden aksaray iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Aksaray haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler,aksaray gazeteleri, aksaray yerel gazeteleri, aksaray haberleri, aksaray', 'Merkez, Ağaçören, Eskil, Gülağaç, Güzelyurt, Ortaköy, Sarıyahşi', '68', '382', 'Ankara, Kırşehir, Konya, Nevşehir, Niğde', 'Toplam Nüfus: 416.367    -    Erkek Nüfusu: 207.390     -     Kadın Nüfusu: 208.977', '2020-05-13 12:56:22', 1),
(53, 'Amasya', 'amasya-yerel-gazeteleri', 'Amasya Yerel Gazeteleri - Amasya Yerel Haberleri - Yerel Gazete Bul', '', 'Amasya Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Amasya iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Amasya haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, amasya gazeteleri, amasya yerel gazeteleri, amasya haberleri, amasya', 'Merkez, Göynücek, Gümüşhacıköy, Hamamözü, Merzifon, Suluova, Taşova', '05', '358', 'Çorum, Samsun, Tokat, Yozgat', 'Toplam Nüfus: 337.800    -    Erkek Nüfusu: 170.407     -     Kadın Nüfusu: 167.393', '2020-05-13 12:56:33', 1),
(54, 'Ankara', 'ankara-yerel-gazeteleri', 'Ankara Yerel Gazeteleri - Ankara Yerel Haberleri - Yerel Gazete Bul', '', 'Ankara Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Ankara iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Ankara haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, ankara gazeteleri, ankara yerel gazeteleri, ankara haberleri, ankara', 'Altındağ, Çankaya, Etimesgut, Gölbaşı, Keçiören, Mamak, Sincan, Yenimahalle, Akyurt, Ayaş, Bala, Beypazarı, Çamlıdere, Çubuk, Elmadağ, Evren, Güdül, Haymana, Kalecik, Kazan, Kızılcahamam, Nallıhan, Polatlı, Şereflikoçhisar', '06', '0312', 'Bolu, Çankırı, Eskişehir, Karabük, Kırıkkale, Kırşehir, Konya', 'Toplam Nüfus: 5.639.076    -    Erkek Nüfusu: 2.793.850     -     Kadın Nüfusu: 2.845.226', '2020-05-13 12:57:37', 1),
(55, 'Antalya', 'antalya-yerel-gazeteleri', 'Antalya Yerel Gazeteleri - Antalya Yerel Haberleri - Yerel Gazete Bul', '', 'Antalya Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Antalya iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Antalya haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, antalya gazeteleri, antalya yerel gazeteleri, antalya haberleri, antalya', 'Merkez, Akseki, Alanya, Elmalı, Finike, Gazipaşa, Gündoğmuş, İbradi, Demre, Kaş, Kemer, Korkuteli, Kumluca, Manavgat, Serik', '07', '242', 'Burdur, Isparta, Muğla, Karaman, Konya, Mersin', 'Toplam Nüfus: 2.511.700    -    Erkek Nüfusu: 1.265.171     -     Kadın Nüfusu: 1.246.529', '2020-05-13 12:57:54', 1),
(56, 'Ardahan', 'ardahan-yerel-gazeteleri', 'Ardahan Yerel Gazeteleri - Ardahan Yerel Haberleri - Yerel Gazete Bul', '', 'Ardahan Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Ardahan iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Ardahan haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, ardahan gazeteleri, ardahan yerel gazeteleri, ardahan haberleri, ardahan', 'Merkez, Çıldır, Damal, Göle, Hanak, Posof', '75', '478', 'Artvin, Erzurum, Kars', 'Toplam Nüfus: 97.319    -    Erkek Nüfusu: 50.697     -     Kadın Nüfusu: 46.622', '2020-05-13 12:58:02', 1),
(57, 'Artvin', 'artvin-yerel-gazeteleri', 'Artvin Yerel Gazeteleri - Artvin Yerel Haberleri - Yerel Gazete Bul', '', 'Artvin Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Artvin iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Artvin haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, artvin gazeteleri, artvin yerel gazeteleri, artvin haberleri, artvin', 'Merkez, Ardanuç, Arhavi, Borçka, Hopa, Murgul, Şavşat, Yusufeli', '08', '466', 'Ardahan, Erzurum, Rize', 'Toplam Nüfus: 170.875    -    Erkek Nüfusu: 85.975     -     Kadın Nüfusu: 84.900', '2020-05-13 12:58:10', 1),
(58, 'Aydın', 'aydin-yerel-gazeteleri', 'Aydın Yerel Gazeteleri - Aydın Yerel Haberleri - Yerel Gazete Bul', '', 'Aydın Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Aydın iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Aydın haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, aydın gazeteleri, aydın yerel gazeteleri, aydın haberleri, aydın', 'Merkez, Bozdoğan, Buharkent, Çine, Didim, Germencik, İncirliova, Karacasu, Karpuzlu, Koçarlı, Köşk, Kuşadası, Kuyucak, Nazilli, Söke, Sultanhisar, Yenipazar', '09', '256', 'İzmir, Denizli, Manisa, Muğla', 'Toplam Nüfus: 1.110.972    -    Erkek Nüfusu: 552.626     -     Kadın Nüfusu: 558.346', '2020-05-13 12:58:17', 1),
(59, 'Balıkesir', 'balikesir-yerel-gazeteleri', 'Balıkesir Yerel Gazeteleri - Balıkesir Yerel Haberleri - Gazetebul', '', 'Balıkesir Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Balıkesir iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Balıkesir haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, balıkesir gazeteleri, balıkesir yerel gazeteleri, balıkesir haberleri, balıkesir', 'Merkez, Ayvalık, Balya, Bandırma, Bigadiç, Burhaniye, Dursunbey, Edremit, Erdek, Gömeç, Gönen, Havran, İvrindi, Kepsut, Manyas, Marmara, Savaştepe, Sındırgı, Susurluk', '10', '266', 'Bursa, Çanakkale, İzmir, Manisa, Kütahya', 'Toplam Nüfus: 1.228.620    -    Erkek Nüfusu: 613.474     -     Kadın Nüfusu: 615.146', '2020-05-13 12:58:26', 1),
(60, 'Bartın', 'bartin-yerel-gazeteleri', 'Bartın Yerel Gazeteleri - Bartın Yerel Haberleri - Yerel Gazete Bul', '', 'Bartın Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Bartın iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Bartın haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, bartın gazeteleri, bartın yerel gazeteleri, bartın haberleri, bartın', 'Merkez, Amasra, Kurucaşile, Ulus', '74', '378', 'Karabük, Kastamonu, Zonguldak', 'Toplam Nüfus: 198.249    -    Erkek Nüfusu: 97.908     -     Kadın Nüfusu: 100.341', '2020-05-13 12:58:33', 1),
(61, 'Batman', 'batman-yerel-gazeteleri', 'Batman Yerel Gazeteleri - Batman Yerel Haberleri - Yerel Gazete Bul', '', 'Batman Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Batman iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Batman haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, batman gazeteleri, batman yerel gazeteleri, batman haberleri, batman', 'Merkez, Beşiri, Gercüş, Hasankeyf, Kozluk, Sason', '72', '488', 'Bitlis, Diyarbakır, Mardin, Muş, Siirt', 'Toplam Nüfus: 608.659    -    Erkek Nüfusu: 306.261     -     Kadın Nüfusu: 302.398', '2020-05-13 12:58:41', 1),
(62, 'Bayburt', 'bayburt-yerel-gazeteleri', 'Bayburt Yerel Gazeteleri - Bayburt Yerel Haberleri - Yerel Gazete Bul', '', 'Bayburt Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Bayburt iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Bayburt haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, bayburt gazeteleri, bayburt yerel gazeteleri, bayburt haberleri, bayburt', 'Merkez, Aydıntepe, Demirözü', '69', '458', 'Erzincan, Gümüşhane, Erzurum, Trabzon, Rize', 'Toplam Nüfus: 84.843    -    Erkek Nüfusu: 43.006     -     Kadın Nüfusu: 41.837', '2020-05-13 12:58:49', 1),
(63, 'Bilecik', 'bilecik-yerel-gazeteleri', 'Bilecik Yerel Gazeteleri - Bilecik Yerel Haberleri - Yerel Gazete Bul', '', 'Bilecik Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Bilecik iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Bilecik haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, bilecik gazeteleri, bilecik yerel gazeteleri, bilecik haberleri, bilecik', 'Merkez, Bozüyük, Gölpazarı, İnhisar, Osmaneli, Pazaryeri, Söğüt, Yenipazar', '11', '228', 'Bolu, Bursa, Eskişehir, Kocaeli, Kütahya, Sakarya', 'Toplam Nüfus: 219.427    -    Erkek Nüfusu: 112.027     -     Kadın Nüfusu: 107.400', '2020-05-13 12:58:57', 1),
(64, 'Bingöl', 'bingol-yerel-gazeteleri', 'Bingöl Yerel Gazeteleri - Bingöl Yerel Haberleri - Yerel Gazete Bul', '', 'Bingöl Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Bingöl iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Bingöl haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, bingöl gazeteleri, bingöl yerel gazeteleri, bingöl haberleri, bingöl', 'Merkez, Adaklı, Genç, Karlıova, Kiği, Solhan, Yayladere, Yedisu', '12', '426', 'Diyarbakır, Elazığ, Erzincan, Erzurum, Muş, Tunceli', 'Toplam Nüfus: 279.812    -    Erkek Nüfusu: 141.818     -     Kadın Nüfusu: 137.994', '2020-05-13 12:59:04', 1),
(65, 'Bitlis', 'bitlis-yerel-gazeteleri', 'Bitlis Yerel Gazeteleri - Bitlis Yerel Haberleri - Yerel Gazete Bul', '', 'Bitlis Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Bitlis iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Bitlis haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, bitlis gazeteleri, bitlis yerel gazeteleri, bitlis haberleri, bitlis', 'Merkez, Adilcevaz, Ahlat, Güroymak, Hizan, Mutki, Tatvan', '13', '434', 'Ağrı, Batman, Muş, Siirt, Van', 'Toplam Nüfus: 348.115    -    Erkek Nüfusu: 179.823     -     Kadın Nüfusu: 168.292', '2020-05-13 12:59:11', 1),
(66, 'Bolu', 'bolu-yerel-gazeteleri', 'Bolu Yerel Gazeteleri - Bolu Yerel Haberleri - Yerel Gazete Bul', '', 'Bolu Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Bolu iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Bolu haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, bolu gazeteleri, bolu yerel gazeteleri, bolu haberleri, bolu', 'Merkez, Dörtdivan, Gerede, Göynük, Kıbrıscık, Mengen, Mudurnu, Seben, Yeniçağa', '14', '374', 'Ankara, Bilecik, Düzce, Eskişehir, Karabük, Sakarya, Zonguldak', 'Toplam Nüfus: 316.126    -    Erkek Nüfusu: 156.777     -     Kadın Nüfusu: 159.349', '2020-05-13 12:59:19', 1),
(67, 'Burdur', 'burdur-yerel-gazeteleri', 'Burdur Yerel Gazeteleri - Burdur Yerel Haberleri - Yerel Gazete Bul', '', 'Burdur Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Burdur iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Burdur haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, burdur gazeteleri, burdur yerel gazeteleri, burdur haberleri, burdur', 'Merkez, Ağlasun, Altınyayla, Bucak, Çavdır, Çeltikçi, Gölhisar, Karamanlı, Kemer, Tefenni, Yeşilova', '15', '248', 'Afyonkarahisar, Antalya, Denizli, Isparta, Muğla', 'Toplam Nüfus: 270.796    -    Erkek Nüfusu: 136.377     -     Kadın Nüfusu: 134.419', '2020-05-13 12:59:27', 1),
(68, 'Bursa', 'bursa-yerel-gazeteleri', 'Bursa Yerel Gazeteleri - Bursa Yerel Haberleri - Yerel Gazete Bul', '', 'Bursa Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Bursa iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Bursa haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, bursa gazeteleri, bursa yerel gazeteleri, bursa haberleri, bursa', 'Nilüfer, Osmangazi, Yıldırım, Büyükorhan, Gemlik, Gürsu, Harmancık, İnegöl, İznik, Karacabey, Keles, Kestel, Mudanya, Mustafakemalpaşa, Orhaneli, Orhangazi, Yenişehir', '16', '224', 'Balıkesir, Bilecik, Kocaeli, Kütahya, Sakarya, Yalova', 'Toplam Nüfus: 3.056.120    -    Erkek Nüfusu: 1.530.956     -     Kadın Nüfusu: 1.525.164', '2020-05-13 12:59:35', 1),
(69, 'Çanakkale', 'canakkale-yerel-gazeteleri', 'Çanakkale Yerel Gazeteleri - Çanakkale Yerel Haberleri - Gazete Bul', '', 'Çanakkale Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Çanakkale iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Çanakkale haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, çanakkale gazeteleri, çanakkale yerel gazeteleri, çanakkale haberleri, çanakkale', 'Merkez, Ayvacık, Bayramiç, Biga, Bozcaada, Çan, Eceabat, Ezine, Gelibolu, Gökçeada, Lapseki, Yenice', '17', '286', 'Balıkesir, Edirne, Tekirdağ', 'Toplam Nüfus: 542.157    -    Erkek Nüfusu: 272.097     -     Kadın Nüfusu: 270.060', '2020-05-13 12:59:41', 1),
(70, 'Çankırı', 'cankiri-yerel-gazeteleri', 'Çankırı Yerel Gazeteleri - Çankırı Yerel Haberleri - Yerel Gazete Bul', '', 'Çankırı Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Çankırı iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Çankırı haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, çankırı gazeteleri, çankırı yerel gazeteleri, çankırı haberleri, çankırı', 'Merkez, Atkaracalar, Bayramören, Çerkeş, Eldivan, Ilgaz, Kızılırmak, Korgun, Kurşunlu, Orta, Şabanözü, Yapraklı', '18', '376', 'Ankara, Çorum, Karabük, Kastamonu, Kırıkkale', 'Toplam Nüfus: 195.789    -    Erkek Nüfusu: 98.683     -     Kadın Nüfusu: 97.106', '2020-05-13 12:59:54', 1),
(71, 'Çorum', 'corum-yerel-gazeteleri', 'Çorum Yerel Gazeteleri - Çorum Yerel Haberleri - Yerel Gazete Bul', '', 'Çorum Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Çorum iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Çorum haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, çorum gazeteleri, çorum yerel gazeteleri, çorum haberleri, çorum', 'Merkez, Alaca, Bayat, Boğazkale, Dodurga, İskilip, Kargı, Laçin, Mecitözü, Oğuzlar, Ortaköy, Osmancık, Sungurlu, Uğurludağ', '19', '364', 'Amasya, Çankırı, Kastamonu, Kırıkkale, Samsun, Sinop, Yozgat', 'Toplam Nüfus: 530.864    -    Erkek Nüfusu: 263.354     -     Kadın Nüfusu: 267.510', '2020-05-13 13:00:02', 1),
(72, 'Denizli', 'denizli-yerel-gazeteleri', 'Denizli Yerel Gazeteleri - Denizli Yerel Haberleri - Yerel Gazete Bul', '', 'Denizli Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Denizli iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Denizli haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, denizli gazeteleri, denizli yerel gazeteleri, denizli haberleri, denizli', 'Merkez, Acıpayam, Akköy, Babadağ, Baklan, Bekilli, Beyağaç, Bozkurt, Buldan, Çal, Çameli, Çardak, Çivril, Güney, Honaz, Kale, Sarayköy, Serinhisar, Tavas', '20', '258', 'Afyonkarahisar, Aydın, Burdur, Manisa, Muğla, Uşak', 'Toplam Nüfus: 1.037.208    -    Erkek Nüfusu: 517.716     -     Kadın Nüfusu: 519.492', '2020-05-13 13:00:10', 1),
(73, 'Diyarbakır', 'diyarbakir-yerel-gazeteleri', 'Diyarbakır Yerel Gazeteleri - Diyarbakır Yerel Haberleri - Yerel Gazet', '', 'Diyarbakır Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Diyarbakır iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Diyarbakır haberleri için tıkla.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, diyarbakır gazeteleri, diyarbakır yerel gazeteleri, diyarbakır haberleri, diyarbakır', 'Merkez, Bismil, Çermik, Çınar, Çüngüş, Dicle, Eğil, Ergani, Hani, Hazro, Kocaköy, Kulp, Lice, Silvan', '21', '412', 'Adıyaman, Batman, Bingöl, Elazığ, Malatya, Mardin, Şanlıurfa', 'Toplam Nüfus: 1.756.353    -    Erkek Nüfusu: 886.190     -     Kadın Nüfusu: 870.163', '2020-05-13 13:01:13', 1),
(74, 'Düzce', 'duzce-yerel-gazeteleri', 'Düzce Yerel Gazeteleri - Düzce Yerel Haberleri - Yerel Gazete Bul', '', 'Düzce Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Düzce iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Düzce haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, düzce gazeteleri, düzce yerel gazeteleri, düzce haberleri, düzce', 'Merkez, Akçakoca, Cumayeri, Çilimli, Gölyaka, Gümüşova, Kaynaşlı, Yığılca', '81', '380', 'Bolu, Sakarya, Zonguldak', 'Toplam Nüfus: 392.166    -    Erkek Nüfusu: 196.494     -     Kadın Nüfusu: 195.672', '2020-05-13 13:01:27', 1),
(75, 'Edirne', 'edirne-yerel-gazeteleri', 'Edirne Yerel Gazeteleri - Edirne Yerel Haberleri - Yerel Gazete Bul', '', 'Edirne Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Edirne iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Edirne haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, edirne gazeteleri, edirne yerel gazeteleri, edirne haberleri, edirne', 'Merkez, Enez, Havsa, İpsala, Keşan, Lalapaşa, Meriç, Süloğlu, Uzunköprü', '22', '284', 'Çanakkale, Kırklareli, Tekirdağ', 'Toplam Nüfus: 413.903    -    Erkek Nüfusu: 210.304     -     Kadın Nüfusu: 203.599', '2020-05-13 13:01:38', 1),
(76, 'Elazığ', 'elazig-yerel-gazeteleri', 'Elazığ Yerel Gazeteleri - Elazığ Yerel Haberleri - Yerel Gazete Bul', '', 'Elazığ Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Elazığ iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Elazığ haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, elazığ gazeteleri, elazığ yerel gazeteleri, elazığ haberleri, elazığ', 'Merkez, Ağın, Alacakaya, Arıcak, Baskıl, Karakoçan, Keban, Kovancılar, Maden, Palu, Sivrice', '23', '424', 'Bingöl, Diyarbakır, Erzincan, Malatya, Tunceli', 'Toplam Nüfus: 591.098    -    Erkek Nüfusu: 293.415     -     Kadın Nüfusu: 297.683', '2020-05-13 13:01:47', 1),
(77, 'Erzincan', 'erzincan-yerel-gazeteleri', 'Erzincan Yerel Gazeteleri - Erzincan Yerel Haberleri - Yerel GazeteBul', '', 'Erzincan Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Erzincan iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Erzincan haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, erzincan gazeteleri, erzincan yerel gazeteleri, erzincan haberleri, erzincan', 'Merkez, Çayırlı, İliç, Kemah, Kemaliye, Otlukbeli, Refahiye, Tercan, Üzümlü', '24', '446', 'Bayburt, Bingöl, Elazığ, Erzurum, Giresun, Gümüşhane, Malatya, Sivas, Tunceli', 'Toplam Nüfus: 234.747    -    Erkek Nüfusu: 119.906     -     Kadın Nüfusu: 114.841', '2020-05-13 13:01:55', 1),
(78, 'Erzurum', 'erzurum-yerel-gazeteleri', 'Erzurum Yerel Gazeteleri - Erzurum Yerel Haberleri - Yerel Gazete Bul', '', 'Erzurum Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Erzurum iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Erzurum haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, erzurum gazeteleri, erzurum yerel gazeteleri, erzurum haberleri, erzurum', 'Merkez, Aşkale, Çat, Hinis, Horasan, Ilıca, İspir, Karaçoban, Karayazı, Köprüköy, Narman, Oltu, Olur, Pasinler, Pazaryolu, Şenkaya, Tekman, Tortum, Uzundere', '25', '442', 'Ağrı, Ardahan, Artvin, Bayburt, Bingöl, Erzincan, Kars, Muş, Rize', 'Toplam Nüfus: 762.062    -    Erkek Nüfusu: 379.893     -     Kadın Nüfusu: 382.169', '2020-05-13 13:02:02', 1),
(79, 'Eskişehir', 'eskisehir-yerel-gazeteleri', 'Eskişehir Yerel Gazeteleri - Eskişehir Yerel Haberleri - Gazete Bul', '', 'Eskişehir Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Eskişehir iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Eskişehir haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, eskişehir gazeteleri, eskişehir yerel gazeteleri, eskişehir haberleri, eskişehir', 'Merkez, Alpu, Beylikova, Çifteler, Günyüzü, Han, İnönü, Mahmudiye, Mihalgazi, Mihalicçik, Sarıcakaya, Seyitgazi, Sivrihisar', '26', '222', 'Ankara, Afyonkarahisar, Bilecik, Bolu, Konya, Kütahya', 'Toplam Nüfus: 887.475    -    Erkek Nüfusu: 443.635     -     Kadın Nüfusu: 443.840', '2020-05-13 13:02:09', 1),
(80, 'Gaziantep', 'gaziantep-yerel-gazeteleri', 'Gaziantep Yerel Gazeteleri - Gaziantep Yerel Haberleri - Yerel Gazete ', '', 'Gaziantep Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Gaziantep iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Gaziantep haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, gaziantep gazeteleri, gaziantep yerel gazeteleri, gaziantep haberleri, gaziantep', 'Şahinbey, Şehitkamil, Araban, İslahiye, Karkamış, Nizip, Nurdağı, Oğuzeli, Yavuzeli', '27', '342', 'Adıyaman, Hatay, Kahramanmaraş, Kilis, Osmaniye, Şanlıurfa', 'Toplam Nüfus: 2.069.364    -    Erkek Nüfusu: 1.044.799     -     Kadın Nüfusu: 1.024.565', '2020-05-13 13:02:17', 1),
(81, 'Giresun', 'giresun-yerel-gazeteleri', 'Giresun Yerel Gazeteleri - Giresun Yerel Haberleri - Yerel Gazete Bul', '', 'Giresun Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Giresun iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Giresun haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, giresun gazeteleri, giresun yerel gazeteleri, giresun haberleri, giresun', 'Merkez, Alucra, Bulancak, Çamoluk, Çanakçı, Dereli, Doğankent, Espiye, Eynesil, Görele, Güce, Keşap, Piraziz, Şebinkarahisar, Tirebolu, Yağlıdere', '28', '454', 'Erzincan, Gümüşhane, Ordu, Sivas, Trabzon', 'Toplam Nüfus: 448.400    -    Erkek Nüfusu: 223.422     -     Kadın Nüfusu: 224.978', '2020-05-13 13:02:25', 1),
(82, 'Gümüşhane', 'gumushane-yerel-gazeteleri', 'Gümüşhane Yerel Gazeteleri - Gümüşhane Yerel Haberleri - Yerel Gazete ', '', 'Gümüşhane Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Gümüşhane iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Gümüşhane haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, gümüşhane gazeteleri, gümüşhane yerel gazeteleri, gümüşhane haberleri, gümüşhane', 'Merkez, Kelkit, Köse, Kürtün, Şiran, Torul', '29', '456', 'Bayburt, Erzincan, Giresun, Trabzon', 'Toplam Nüfus: 164.521    -    Erkek Nüfusu: 83.196     -     Kadın Nüfusu: 81.325', '2020-05-13 13:02:33', 1),
(83, 'Hakkari', 'hakkari-yerel-gazeteleri', 'Hakkari Yerel Gazeteleri - Hakkari Yerel Haberleri - Yerel Gazete', '', 'Hakkari Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Hakkari iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Hakkari haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, hakkari gazeteleri, hakkari yerel gazeteleri, hakkari haberleri, hakkari', 'Merkez, Çukurca, Şemdinli, Yüksekova', '30', '438', 'Şırnak, Van', 'Toplam Nüfus: 280.991    -    Erkek Nüfusu: 151.143     -     Kadın Nüfusu: 129.848', '2020-05-13 13:02:41', 1),
(84, 'Hatay', 'hatay-yerel-gazeteleri', 'Hatay Yerel Gazeteleri - Hatay Yerel Haberleri - Yerel Gazete', '', 'Hatay Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Hatay iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Hatay haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, hatay gazeteleri, hatay yerel gazeteleri, hatay haberleri, hatay', 'Merkez, Altınözü, Belen, Dörtyol, Erzin, Hassa, İskenderun, Kırıkhan, Kumlu, Reyhanlı, Samandağ, Yayladağı', '31', '326', 'Adana, Gaziantep, Kilis, Osmaniye', 'Toplam Nüfus: 1.628.894    -    Erkek Nüfusu: 817.998     -     Kadın Nüfusu: 810.896', '2020-05-13 13:02:51', 1),
(85, 'Iğdır', 'igdir-yerel-gazeteleri', 'Iğdır Yerel Gazeteleri - Iğdır Yerel Haberleri - Yerel Gazete Bul', '', 'Iğdır Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Iğdır iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Iğdır haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, ığdır gazeteleri, ığdır yerel gazeteleri, ığdır haberleri, ığdır', 'Merkez, Aralık, Karakoyunlu, Tuzluca', '76', '476', 'Ağrı, Kars', 'Toplam Nüfus: 199.442    -    Erkek Nüfusu: 102.417     -     Kadın Nüfusu: 97.025', '2020-05-13 13:03:00', 1),
(86, 'Isparta', 'isparta-yerel-gazeteleri', 'Isparta Yerel Gazeteleri - Isparta Yerel Haberleri - Yerel Gazete Bul', '', 'Isparta Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Isparta iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Isparta haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, ısparta gazeteleri, ısparta yerel gazeteleri, ısparta haberleri, ısparta', 'Merkez, Aksu, Atabey, Eğirdir, Gelendost, Gönen, Keçiborlu, Senirkent, Sütçüler, Şarkikaraağaç, Uluborlu, Yalvaç, Yenişarbademli', '32', '246', 'Antalya, Burdur, Afyonkarahisar, Konya', 'Toplam Nüfus: 444.914    -    Erkek Nüfusu: 221.316     -     Kadın Nüfusu: 223.598', '2020-05-13 13:03:09', 1),
(87, 'İstanbul', 'istanbul-yerel-gazeteleri', 'İstanbul Yerel Gazeteleri - İstanbul Yerel Haberleri - Yerel Gazete Bu', '', 'İstanbul Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden İstanbul iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. İstanbul haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, istanbul gazeteleri, istanbul yerel gazeteleri, istanbul haberleri, istanbul', 'Adalar, Avcılar, Bağcılar, Bahçelievler, Bakırköy, Bayrampaşa, Beşiktaş, Beykoz, Beyoğlu, Eminönü, Esenler, Eyüp, Fatih, Gaziosmanpaşa, Güngören, Kadıköy, Kağıthane, Kartal, Küçükçekmece, Maltepe, Pendik, Sarıyer, Şişli, Tuzla, Ümraniye, Üsküdar, Zeytinburnu, Büyükçekmece, Çatalca, Silivri, Sultanbe', '34', '212 Avrupa, 216 Anadolu', 'Kırklareli, Tekirdağ, Kocaeli', 'Toplam Nüfus: 15.519.267    -    Erkek Nüfusu: 7.790.256     -     Kadın Nüfusu: 7.729.011', '2020-05-13 13:03:17', 1),
(88, 'İzmir', 'izmir-yerel-gazeteleri', 'İzmir Yerel Gazeteleri - İzmir Yerel Haberleri - Yerel Gazete Bul', '', 'İzmir Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden İzmir iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. İzmir haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, izmir gazeteleri, izmir yerel gazeteleri, izmir haberleri, izmir', 'Balçova, Bornova, Buca, Çiğli, Gaziemir, Güzelbahçe, Karşıyaka, Konak, Narlıdere, Aliağa, Bayındır, Bergama, Beydağ, Çeşme, Dikili, Foça, Karaburun, Kemalpaşa, Kınık, Kiraz, Menderes, Menemen, Ödemiş, Seferihisar, Selçuk, Tire, Torbalı, Urla', '35', '232', 'Aydın, Balıkesir, Manisa', 'Toplam Nüfus: 4.367.251    -    Erkek Nüfusu: 2.174.319     -     Kadın Nüfusu: 2.192.932', '2020-05-13 13:03:25', 1),
(89, 'Karabük', 'karabuk-yerel-gazeteleri', 'Karabük Yerel Gazeteleri - Karabük Yerel Haberleri - Yerel Gazete Bul', '', 'Karabük Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Karabük iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Karabük haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, karabük gazeteleri, karabük yerel gazeteleri, karabük haberleri, karabük', 'Merkez, Eflani, Eskipazar, Ovacık, Safranbolu, Yenice', '78', '370', 'Ankara, Bartın, Bolu, Çankırı, Kastamonu, Zonguldak', 'Toplam Nüfus: 248.458    -    Erkek Nüfusu: 124.291     -     Kadın Nüfusu: 124.167', '2020-05-13 13:03:33', 1),
(90, 'Karaman', 'karaman-yerel-gazeteleri', 'Karaman Yerel Gazeteleri - Karaman Yerel Haberleri - Yerel Gazete Bul', '', 'Karaman Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Karaman iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Karaman haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, karaman gazeteleri, karaman yerel gazeteleri, karaman haberleri, karaman', 'Merkez, Ayrancı, Başyayla, Ermenek, Kazımkarabekir, Sarıveliler', '70', '338', 'Antalya, Konya, Mersin', 'Toplam Nüfus: 253.279    -    Erkek Nüfusu: 126.648     -     Kadın Nüfusu: 126.631', '2020-05-13 13:03:42', 1),
(91, 'Kars', 'kars-yerel-gazeteleri', 'Kars Yerel Gazeteleri - Kars Yerel Haberleri - Yerel Gazete Bul', '', 'Kars Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kars iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kars haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kars gazeteleri, kars yerel gazeteleri, kars haberleri, kars', 'Merkez, Akyaka, Arpaçay, Digor, Kağızman, Sarıkamış, Selim, Susuz', '36', '474', 'Ağrı, Ardahan, Erzurum, Iğdır', 'Toplam Nüfus: 285.410    -    Erkek Nüfusu: 146.668     -     Kadın Nüfusu: 138.742', '2020-05-13 13:03:49', 1),
(92, 'Kastamonu', 'kastamonu-yerel-gazeteleri', 'Kastamonu Yerel Gazeteleri - Kastamonu Yerel Haberleri - Yerel Gazete ', '', 'Kastamonu Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kastamonu iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kastamonu haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kastamonu gazeteleri, kastamonu yerel gazeteleri, kastamonu haberleri, kastamonu', 'Merkez, Abana, Ağlı, Araç, Azdavay, Bozkurt, Cide, Çatalzeytin, Daday, Devrekani, Doğanyurt, Hanönü, İhsangazi, İnebolu, Küre, Pınarbaşı, Seydiler, Şenpazar, Taşköprü, Tosya', '37', '366', 'Bartın, Çankırı, Çorum, Karabük, Sinop', 'Toplam Nüfus: 379.405    -    Erkek Nüfusu: 189.247     -     Kadın Nüfusu: 190.158', '2020-05-13 13:03:56', 1),
(93, 'Kayseri', 'kayseri-yerel-gazeteleri', 'Kayseri Yerel Gazeteleri - Kayseri Yerel Haberleri - Yerel Gazete Bul', '', 'Kayseri Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kayseri iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kayseri haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kayseri gazeteleri, kayseri yerel gazeteleri, kayseri haberleri, kayseri', 'Kocasinan, Melikgazi, Akkışla, Bünyan, Develi, Felahiye, Hacılar, İncesu, Özvatan, Pınarbaşı, Sarıoğlan, Sariz, Talas, Tomarza, Yahyalı, Yeşilhisar', '38', '352', 'Adana, Kahramanmaraş, Nevşehir, Niğde, Sivas, Yozgat', 'Toplam Nüfus: 1.407.409    -    Erkek Nüfusu: 705.545    -     Kadın Nüfusu: 701.864', '2020-05-13 13:04:04', 1),
(94, 'Kilis', 'kilis-yerel-gazeteleri', 'Kilis Yerel Gazeteleri - Kilis Yerel Haberleri - Yerel Gazete Bul', '', 'Kilis Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kilis iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kilis haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kilis gazeteleri, kilis yerel gazeteleri, kilis haberleri, kilis', 'Merkez, Elbeyli, Musabeyli, Polateli', '79', '348', 'Gaziantep, Hatay', 'Toplam Nüfus: 142.490    -    Erkek Nüfusu: 72.520    -     Kadın Nüfusu: 69.970', '2020-05-13 13:04:11', 1),
(95, 'Kırklareli', 'kirklareli-yerel-gazeteleri', 'Kırklareli Yerel Gazeteleri - Kırklareli Yerel Haberleri - Yerel Gazet', '', 'Kırklareli Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kırklareli iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kırklareli haberleri için tıkla.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kırklareli gazeteleri, kırklareli yerel gazeteleri, kırklareli haberleri, kırklareli', 'Merkez, Babaeski, Demirköy, Kofçaz, Lüleburgaz, Pehlivanköy, Pınarhisar, Vize', '39', '288', 'Edirne, Tekirdağ, İstanbul', 'Toplam Nüfus: 361.836    -    Erkek Nüfusu: 185.070    -     Kadın Nüfusu: 176.766', '2020-05-13 13:04:18', 1),
(96, 'Kırıkkale', 'kirikkale-yerel-gazeteleri', 'Kırıkkale Yerel Gazeteleri - Kırıkkale Yerel Haberleri - Yerel Gazete ', '', 'Kırıkkale Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kırıkkale iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kırıkkale haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kırıkkale gazeteleri, kırıkkale yerel gazeteleri, kırıkkale haberleri, kırıkkale', 'Merkez, Bahşili, Balişeyh, Çelebi, Delice, Karakeçili, Keskin, Sulakyurt, Yahşihan', '71', '318', 'Ankara, Çankırı, Çorum, Kırşehir, Yozgat', 'Toplam Nüfus: 283.017    -    Erkek Nüfusu: 141.865    -     Kadın Nüfusu: 141.152', '2020-05-13 13:04:26', 1),
(97, 'Kırşehir', 'kirsehir-yerel-gazeteleri', 'Kırşehir Yerel Gazeteleri - Kırşehir Yerel Haberleri - Yerel Gazete Bu', '', 'Kırşehir Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kırşehir iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kırşehir haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kırşehir gazeteleri, kırşehir yerel gazeteleri, kırşehir haberleri, kırşehir', 'Merkez, Akçakent, Akpınar, Boztepe, Çiçekdağı, Kaman, Mucur', '40', '386', 'Ankara, Kırıkkale, Yozgat, Nevşehir, Aksaray', 'Toplam Nüfus: 242.938 - Erkek Nüfusu: 120.557 - Kadın Nüfusu: 122.381', '2020-05-13 13:04:33', 1),
(98, 'Kocaeli', 'kocaeli-yerel-gazeteleri', 'Kocaeli Yerel Gazeteleri - Kocaeli Yerel Haberleri - Yerel Gazete Bul', '', 'Kocaeli Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kocaeli iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kocaeli haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kocaeli gazeteleri, kocaeli yerel gazeteleri, kocaeli haberleri, kocaeli', 'Merkez, Gebze, Gölcük, Kandıra, Karamürsel, Körfez, Derince', '41', '262', 'İstanbul, Sakarya, Yalova', 'Toplam Nüfus: 1.953.035    -    Erkek Nüfusu: 988.098    -     Kadın Nüfusu: 964.937', '2020-05-13 13:04:40', 1),
(99, 'Konya', 'konya-yerel-gazeteleri', 'Konya Yerel Gazeteleri - Konya Yerel Haberleri - Yerel Gazete Bul', '', 'Konya Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Konya iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Konya haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, konya gazeteleri, konya yerel gazeteleri, konya haberleri, konya', 'Karatay, Meram, Selçuklu, Ahırlı, Akören, Akşehir, Altınekin, Beyşehir, Bozkır, Cihanbeyli, Çeltik, Çumra, Derbent, Derebucak, Doğanhisar, Emirgazi, Ereğli, Güneysınır, Hadım, Halkapınar, Hüyük, Ilgın, Kadınhanı, Karapınar, Kulu, Sarayönü, Seydişehir, Taşkent, Tuzlukçu, Yalıhüyük, Yunak', '42', '332', 'Afyonkarahisar, Aksaray, Ankara, Antalya, Eskişehir, Isparta, Karaman, Mersin, Niğde', 'Toplam Nüfus: 2.232.374    -    Erkek Nüfusu: 1.108.968    -     Kadın Nüfusu: 1.123.406', '2020-05-13 13:04:49', 1),
(100, 'Kütahya', 'kutahya-yerel-gazeteleri', 'Kütahya Yerel Gazeteleri - Kütahya Yerel Haberleri - Yerel Gazete Bul', '', 'Kütahya Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kütahya iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Kütahya haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kütahya gazeteleri, kütahya yerel gazeteleri, kütahya haberleri, kütahya', 'Merkez, Altıntaş, Aslanapa, Çavdarhisar, Domaniç, Dumlupınar, Emet, Gediz, Hisarcık, Pazarlar, Simav, Şaphane, Tavşanlı', '43', '274', 'Afyonkarahisar, Balıkesir, Bilecik, Bursa, Eskişehir, Manisa, Uşak', 'Toplam Nüfus: 579.257    -    Erkek Nüfusu: 285.020    -     Kadın Nüfusu: 294.237', '2020-05-13 13:04:57', 1),
(101, 'Malatya', 'malatya-yerel-gazeteleri', 'Malatya Yerel Gazeteleri - Malatya Yerel Haberleri - Yerel Gazete Bul', '', 'Malatya Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Malatya iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Malatya haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, malatya gazeteleri, malatya yerel gazeteleri, malatya haberleri, malatya', 'Merkez, Akçadağ, Arapgir, Arguvan, Battalgazi, Darende, Doğanşehir, Doğanyol, Hekimhan, Kale, Kuluncak, Pütürge, Yazihan, Yeşilyurt', '44', '422', 'Adıyaman, Elazığ, Erzincan, Kahramanmaraş, Sivas', 'Toplam Nüfus: 800.165    -    Erkek Nüfusu: 398.249    -     Kadın Nüfusu: 401.916', '2020-05-13 13:05:04', 1),
(102, 'Manisa', 'manisa-yerel-gazeteleri', 'Manisa Yerel Gazeteleri - Manisa Yerel Haberleri - Yerel Gazete Bul', '', 'Manisa Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Manisa iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Manisa haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, manisa gazeteleri, manisa yerel gazeteleri, manisa haberleri, manisa', 'Merkez, Ahmetli, Akhisar, Alaşehir, Demirci, Gölmarmara, Gördes, Kırkağaç, Köprübaşı, Kula, Salihli, Sarıgöl, Saruhanlı, Selendi, Soma, Turgutlu', '45', '236', 'Aydın, Balıkesir, Denizli, İzmir, Kütahya, Uşak', 'Toplam Nüfus: 1.440.611    -    Erkek Nüfusu: 725.238    -     Kadın Nüfusu: 715.373', '2020-05-13 13:05:11', 1),
(103, 'K.Maraş', 'kahramanmaras-yerel-gazeteleri', 'Kahramanmaraş Yerel Gazeteleri - Kahramanmaraş Yerel Haberleri', '', 'Kahramanmaraş Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Kahramanmaraş iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, kahramanmaraş gazeteleri, kahramanmaraş yerel gazeteleri, kahramanmaraş haberleri, kahramanmaraş', 'Merkez, Afşin, Andırın, Çağlayancerit, Ekinözü, Elbistan, Göksun, Nurhak, Pazarcık, Türkoğlu', '46', '344', 'Adana, Adıyaman, Gaziantep, Kayseri, Malatya, Osmaniye, Sivas', 'Toplam Nüfus: 1.154.102    -    Erkek Nüfusu: 586.616     -     Kadın Nüfusu: 567.486', '2020-05-13 13:05:32', 1),
(104, 'Mardin', 'mardin-yerel-gazeteleri', 'Mardin Yerel Gazeteleri - Mardin Yerel Haberleri - Yerel Gazete Bul', '', 'Mardin Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Mardin iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Mardin haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, mardin gazeteleri, mardin yerel gazeteleri, mardin haberleri, mardin', 'Merkez, Dargeçit, Derik, Kızıltepe, Mazidağı, Midyat, Nusaybin, Ömerli, Savur, Yeşilli', '47', '482', 'Batman, Diyarbakır, Siirt, Şanlıurfa, Şırnak', 'Toplam Nüfus: 838.778    -    Erkek Nüfusu: 420.923    -     Kadın Nüfusu: 417.855', '2020-05-13 13:05:39', 1),
(105, 'Muğla', 'mugla-yerel-gazeteleri', 'Muğla Yerel Gazeteleri - Muğla Yerel Haberleri - Yerel Gazete Bul', '', 'Muğla Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Muğla iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Muğla haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, muğla gazeteleri, muğla yerel gazeteleri, muğla haberleri, muğla', 'Merkez, Bodrum, Dalaman, Datça, Fethiye, Kavaklıdere, Köyceğiz, Marmaris, Milas, Ortaca, Ula, Yatağan', '48', '252', 'Antalya, Aydın, Burdur, Denizli', 'Toplam Nüfus: 983.142    -    Erkek Nüfusu: 500.602    -     Kadın Nüfusu: 482.540', '2020-05-13 13:05:46', 1),
(106, 'Muş', 'mus-yerel-gazeteleri', 'Muş Yerel Gazeteleri - Muş Yerel Haberleri - Yerel Gazete Bul', '', 'Muş Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Muş iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Muş haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, muş gazeteleri, muş yerel gazeteleri, muş haberleri, muş', 'Merkez, Bulanık, Hasköy, Korkut, Malazgirt, Varto', '49', '436', 'Ağrı, Batman, Bingöl, Bitlis, Diyarbakır, Erzurum', 'Toplam Nüfus: 408.809    -    Erkek Nüfusu: 208.534    -     Kadın Nüfusu: 200.275', '2020-05-13 13:05:53', 1),
(107, 'Nevşehir', 'nevsehir-yerel-gazeteleri', 'Nevşehir Yerel Gazeteleri - Nevşehir Yerel Haberleri - Yerel GazeteBul', '', 'Nevşehir Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Nevşehir iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Nevşehir haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, nevşehir gazeteleri, nevşehir yerel gazeteleri, nevşehir haberleri, nevşehir', 'Merkez, Acıgöl, Avanos, Derinkuyu, Gülşehir, Hacibektaş, Kozaklı, Ürgüp', '50', '384', 'Aksaray, Ankara, Kayseri, Kırşehir, Niğde, Yozgat', 'Toplam Nüfus: 303.010    -    Erkek Nüfusu: 150.047    -     Kadın Nüfusu: 152.963', '2020-05-13 13:06:01', 1),
(108, 'Niğde', 'nigde-yerel-gazeteleri', 'Niğde Yerel Gazeteleri - Niğde Yerel Haberleri - Yerel Gazete Bul', '', 'Niğde Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Niğde iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Niğde haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, niğde gazeteleri, niğde yerel gazeteleri, niğde haberleri, niğde', 'Merkez, Altunhisar, Bor, Çamardi, Çiftlik, Ulukışla', '51', '388', 'Adana, Aksaray, Kayseri, Konya, Mersin, Nevşehir', 'Toplam Nüfus: 362.861    -    Erkek Nüfusu: 182.177    -     Kadın Nüfusu: 180.684', '2020-05-13 13:06:12', 1),
(109, 'Ordu', 'ordu-yerel-gazeteleri', 'Ordu Yerel Gazeteleri - Ordu Yerel Haberleri - Yerel Gazete Bul', '', 'Ordu Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Ordu iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Ordu haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, ordu gazeteleri, ordu yerel gazeteleri, ordu haberleri, ordu', 'Merkez, Akkuş, Aybastı, Çamaş, Çatalpınar, Çaybaşı, Fatsa, Gölköy, Gülyalı, Gürgentepe, İkizce, Kabadüz, Kabataş, Korgan, Kumru, Mesudiye, Perşembe, Ulubey, Ünye', '52', '452', 'Giresun, Samsun, Sivas, Tokat', 'Toplam Nüfus: 754.198    -    Erkek Nüfusu: 376.933    -     Kadın Nüfusu: 377.265', '2020-05-13 13:06:19', 1),
(110, 'Osmaniye', 'osmaniye-yerel-gazeteleri', 'Osmaniye Yerel Gazeteleri - Osmaniye Yerel Haberleri - Yerel GazeteBul', '', 'Osmaniye Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Osmaniye iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Osmaniye haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, osmaniye gazeteleri, osmaniye yerel gazeteleri, osmaniye haberleri, osmaniye', 'Merkez, Bahçe, Düziçi, Hasanbeyli, Kadirli, Sumbas, Toprakkale', '80', '328', 'Adana, Gaziantep, Hatay, Kahramanmaraş', 'Toplam Nüfus: 538.759    -    Erkek Nüfusu: 272.242    -     Kadın Nüfusu: 266.517', '2020-05-13 13:06:26', 1),
(111, 'Rize', 'rize-yerel-gazeteleri', 'Rize Yerel Gazeteleri - Rize Yerel Haberleri - Yerel Gazete Bul', '', 'Rize Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Rize iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Rize haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, rize gazeteleri, rize yerel gazeteleri, rize haberleri, rize', 'Merkez, Ardeşen, Çamlıhemşin, Çayeli, Derepazarı, Fındıklı, Güneysu, Hemşin, İkizdere, İyidere, Kalkandere, Pazar', '53', '464', 'Artvin, Bayburt, Erzurum, Trabzon', 'Toplam Nüfus: 343.212    -    Erkek Nüfusu: 171.571    -     Kadın Nüfusu: 171.641', '2020-05-13 13:06:33', 1),
(112, 'Sakarya', 'sakarya-yerel-gazeteleri', 'Sakarya Yerel Gazeteleri - Sakarya Yerel Haberleri - Yerel Gazete Bul', '', 'Sakarya Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Sakarya iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Sakarya haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, sakarya gazeteleri, sakarya yerel gazeteleri, sakarya haberleri, sakarya', 'Merkez, Ferizli, Söğütlü, Akyazı, Geyve, Hendek, Karapürçek, Karasu, Kaynarca, Kocaali, Pamukova, Sapanca, Taraklı', '54', '264', 'Bilecik, Bolu, Bursa, Düzce, Kocaeli', 'Toplam Nüfus: 1.029.650    -    Erkek Nüfusu: 516.000    -     Kadın Nüfusu: 513.650', '2020-05-13 13:06:40', 1);
INSERT INTO `sehirler` (`id`, `sehir_adi`, `sehir_url`, `sehir_title`, `sehir_aciklama`, `sehir_description`, `sehir_keywords`, `ilceler_liste`, `ilce_plaka`, `ilce_telkod`, `ilce_komsu`, `ilce_nufus`, `sehir_date`, `isActive`) VALUES
(113, 'Samsun', 'samsun-yerel-gazeteleri', 'Samsun Yerel Gazeteleri - Samsun Yerel Haberleri - Yerel Gazete Bul', '', 'Samsun Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Samsun iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Samsun haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, samsun gazeteleri, samsun yerel gazeteleri, samsun haberleri, samsun', 'Merkez, Alaçam, Asarcık, Ayvacık, Bafra, Çarşamba, Havza, Kavak, Ladik, Ondokuzmayıs, Salıpazarı, Tekkeköy, Terme, Vezirköprü, Yakakent', '55', '362', 'Amasya, Çorum, Ordu, Sinop, Tokat', 'Toplam Nüfus: 1.348.542    -    Erkek Nüfusu: 669.055    -     Kadın Nüfusu: 679.487', '2020-05-13 13:06:48', 1),
(114, 'Siirt', 'siirt-yerel-gazeteleri', 'Siirt Yerel Gazeteleri - Siirt Yerel Haberleri - Yerel Gazete Bul', '', 'Siirt Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Siirt iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Siirt haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, siirt gazeteleri, siirt yerel gazeteleri, siirt haberleri, siirt', 'Merkez, Aydınlar, Baykan, Eruh, Kurtalan, Pervari, Şirvan', '56', '484', 'Batman, Bitlis, Mardin, Şırnak, Van', 'Toplam Nüfus: 330.280    -    Erkek Nüfusu: 169.211    -     Kadın Nüfusu: 161.069', '2020-05-13 13:06:55', 1),
(115, 'Sinop', 'sinop-yerel-gazeteleri', 'Sinop Yerel Gazeteleri - Sinop Yerel Haberleri - Yerel Gazete Bul', '', 'Sinop Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Sinop iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Sinop haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, sinop gazeteleri, sinop yerel gazeteleri, sinop haberleri, sinop', 'Merkez, Ayancık, Boyabat, Dikmen, Durağan, Erfelek, Gerze, Saraydüzü, Türkeli', '57', '368', 'Çorum, Kastamonu, Samsun', 'Toplam Nüfus: 218.243    -    Erkek Nüfusu: 108.927    -     Kadın Nüfusu: 109.316', '2020-05-13 13:07:02', 1),
(116, 'Sivas', 'sivas-yerel-gazeteleri', 'Sivas Yerel Gazeteleri - Sivas Yerel Haberleri - Yerel Gazete Bul', '', 'Sivas Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Sivas iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Sivas haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, sivas gazeteleri, sivas yerel gazeteleri, sivas haberleri, sivas', 'Merkez, Akıncılar, Altınyayla, Divriği, Doğanşar, Gemerek, Gölova, Gürün, Hafik, İmranlı, Kangal, Koyulhisar, Suşehri, Şarkışla, Ulaş, Yıldızeli, Zara', '58', '346', 'Erzincan, Giresun, Kahramanmaraş, Kayseri, Malatya, Ordu, Tokat, Yozgat', 'Toplam Nüfus: 638.956    -    Erkek Nüfusu: 319.624    -     Kadın Nüfusu: 319.332', '2020-05-13 13:07:11', 1),
(117, 'Şırnak', 'sirnak-yerel-gazeteleri', 'Şırnak Yerel Gazeteleri - Şırnak Yerel Haberleri - Yerel Gazete Bul', '', 'Şırnak Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Şırnak iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Şırnak haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, şırnak gazeteleri, şırnak yerel gazeteleri, şırnak haberleri, şırnak', 'Merkez, Beytüşşebap, Cizre, Güçlükonak, İdil, Silopi, Uludere', '73', '486', 'Hakkari, Mardin, Siirt, Van', 'Toplam Nüfus: 529.615    -    Erkek Nüfusu: 277.728    -     Kadın Nüfusu: 251.887', '2020-05-13 13:07:19', 1),
(118, 'Tekirdağ', 'tekirdag-yerel-gazeteleri', 'Tekirdağ Yerel Gazeteleri - Tekirdağ Yerel Haberleri - Yerel Gazete Bu', '', 'Tekirdağ Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Tekirdağ iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Tekirdağ haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, tekirdağ gazeteleri, tekirdağ yerel gazeteleri, tekirdağ haberleri, tekirdağ', 'Merkez, Çerkezköy, Çorlu, Hayrabolu, Malkara, Marmaraereğlisi, Muratlı, Saray, Şarköy', '59', '282', 'Çanakkale, Edirne, İstanbul, Kırklareli', 'Toplam Nüfus: 1.055.412    -    Erkek Nüfusu: 542.646    -     Kadın Nüfusu: 512.766', '2020-05-13 13:07:26', 1),
(119, 'Tokat', 'tokat-yerel-gazeteleri', 'Tokat Yerel Gazeteleri - Tokat Yerel Haberleri - Yerel Gazete Bul', '', 'Tokat Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Tokat iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Tokat haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, tokat gazeteleri, tokat yerel gazeteleri, tokat haberleri, tokat', 'Merkez, Almus, Artova, Başçiftlik, Erbaa, Niksar, Pazar, Reşadiye, Sulusaray, Turhal, Yeşilyurt, Zile', '60', '356', 'Amasya, Ordu, Samsun, Sivas, Yozgat', 'Toplam Nüfus: 612.747    -    Erkek Nüfusu: 304.938    -     Kadın Nüfusu: 307.809', '2020-05-13 13:07:33', 1),
(120, 'Trabzon', 'trabzon-yerel-gazeteleri', 'Trabzon Yerel Gazeteleri - Trabzon Yerel Haberleri - Yerel Gazete Bul', '', 'Trabzon Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Trabzon iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Trabzon haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, trabzon gazeteleri, trabzon yerel gazeteleri, trabzon haberleri, trabzon', 'Merkez, Akçaabat, Araklı, Arsin, Beşikdüzü, Çarşibaşı, Çaykara, Dernekpazarı, Düzköy, Hayrat, Köprübaşı, Maçka, Of, Sürmene, Şalpazarı, Tonya, Vakfikebir, Yomra', '61', '462', 'Bayburt, Giresun, Gümüşhane, Rize', 'Toplam Nüfus: 808.974    -    Erkek Nüfusu: 400.723    -     Kadın Nüfusu: 408.251', '2020-05-13 13:07:41', 1),
(121, 'Tunceli', 'tunceli-yerel-gazeteleri', 'Tunceli Yerel Gazeteleri - Tunceli Yerel Haberleri - Yerel Gazete Bul', '', 'Tunceli Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Tunceli iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Tunceli haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, tunceli gazeteleri, tunceli yerel gazeteleri, tunceli haberleri, tunceli', 'Merkez, Çemişgezek, Hozat, Mazgirt, Nazimiye, Ovacık, Pertek, Pülümür', '62', '428', 'Bingöl, Elazığ, Erzincan', 'Toplam Nüfus: 84.660    -    Erkek Nüfusu: 46.082    -     Kadın Nüfusu: 38.578', '2020-05-13 13:07:48', 1),
(122, 'Şanlıurfa', 'sanliurfa-yerel-gazeteleri', 'Şanlıurfa Yerel Gazeteleri - Şanlıurfa Yerel Haberleri - Gazete Bul', '', 'Şanlıurfa Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Şanlıurfa iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Şanlıurfa haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, şanlıurfa gazeteleri, şanlıurfa yerel gazeteleri, şanlıurfa haberleri, şanlıurfa', 'Merkez, Akçakale, Birecik, Bozova, Ceylanpınar, Halfeti, Harran, Hilvan, Siverek, Suruç, Viranşehir', '63', '414', 'Adıyaman, Diyarbakır, Gaziantep, Mardin', 'Toplam Nüfus: 2.073.614    -    Erkek Nüfusu: 1.045.964    -     Kadın Nüfusu: 1.027.650', '2020-05-13 13:07:55', 1),
(124, 'Uşak', 'usak-yerel-gazeteleri', 'Uşak Yerel Gazeteleri - Uşak Yerel Haberleri - Yerel Gazete Bul', '', 'Uşak Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Uşak iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Uşak haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, uşak gazeteleri, uşak yerel gazeteleri, uşak haberleri, uşak', 'Merkez, Banaz, Eşme, Karahalli, Sivaslı, Ulubey', '64', '276', 'Afyonkarahisar, Denizli, Manisa, Kütahya', 'Toplam Nüfus: 370.509    -    Erkek Nüfusu: 184.529    -     Kadın Nüfusu: 185.980', '2020-05-13 13:08:11', 1),
(125, 'Van', 'van-yerel-gazeteleri', 'Van Yerel Gazeteleri - Van Yerel Haberleri - Yerel Gazete Bul', '', 'Van Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Van iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Van haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, van gazeteleri, van yerel gazeteleri, van haberleri, van', 'Merkez, Bahçesaray, Başkale, Çaldıran, Çatak, Edremit, Erciş, Gevaş, Gürpınar, Muradiye, Özalp, Saray', '65', '432', 'Ağrı, Bitlis, Hakkari, Siirt, Şırnak', 'Toplam Nüfus: 1.136.757    -    Erkek Nüfusu: 578.044    -     Kadın Nüfusu: 558.713', '2020-05-13 13:08:18', 1),
(126, 'Yalova', 'yalova-yerel-gazeteleri', 'Yalova Yerel Gazeteleri - Yalova Yerel Haberleri - Yerel Gazete Bul', '', 'Yalova Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Yalova iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Yalova haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, yalova gazeteleri, yalova yerel gazeteleri, yalova haberleri, yalova', 'Merkez, Altınova, Armutlu, Çınarcık, Çiftlikköy, Termal', '77', '226', 'Bursa, Kocaeli', 'Toplam Nüfus: 270.976    -    Erkek Nüfusu: 135.909    -     Kadın Nüfusu: 135.067', '2020-05-13 13:08:26', 1),
(127, 'Yozgat', 'yozgat-yerel-gazeteleri', 'Yozgat Yerel Gazeteleri - Yozgat Yerel Haberleri - Yerel Gazete Bul', '', 'Yozgat Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Yozgat iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Yozgat haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, yozgat gazeteleri, yozgat yerel gazeteleri, yozgat haberleri, yozgat', 'Merkez, Akdağmadeni, Aydıncık, Boğazlıyan, Çandır, Çayıralan, Çekerek, Kadışehri, Saraykent, Sarıkaya, Sorgun, Şefaatli, Yenifakılı, Yerköy', '66', '354', 'Amasya, Çorum, Kayseri, Kırıkkale, Kırşehir, Nevşehir, Sivas, Tokat', 'Toplam Nüfus: 421.200    -    Erkek Nüfusu: 210.127    -     Kadın Nüfusu: 211.073', '2020-05-13 13:08:33', 1),
(128, 'Zonguldak', 'zonguldak-yerel-gazeteleri', 'Zonguldak Yerel Gazeteleri - Zonguldak Yerel Haberleri - Gazete Bul', '', 'Zonguldak Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Zonguldak iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Zonguldak haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, zonguldak gazeteleri, zonguldak yerel gazeteleri, zonguldak haberleri, zonguldak', 'Merkez, Alaplı, Çaycuma, Devrek, Ereğli, Gökçebey', '67', '372', 'Bartın, Bolu, Düzce, Karabük', 'Toplam Nüfus: 596.053    -    Erkek Nüfusu: 295.832    -     Kadın Nüfusu: 300.221', '2020-05-13 13:08:40', 1),
(133, 'Mersin', 'mersin-yerel-gazeteleri', 'Mersin Yerel Gazeteleri - Mersin Yerel Haberleri - Yerel Gazete Bul', '', 'Mersin Yerel Gazeteleri, Yerel Gazeteler listemiz üzerinden Mersin iline ait tüm gazete ve haberlere kolaylıkla ulaşabilirsiniz. Mersin haberleri için tıklayın.', 'gazeteler,gazete,yerel gazeteler, gazete dizini, gazete oku, tüm gazeteler, gazete bul, gazete listesi, ulusal gazeteler, mersin gazeteleri, mersin yerel gazeteleri, mersin haberleri, mersin', 'Merkez, Anamur, Aydıncık, Bozyazı, Çamlıyayla, Erdemli, Gülnar, Mut, Silifke, Tarsus', '33', '324', 'Adana, Antalya, Karaman, Konya, Niğde', 'Toplam Nüfus: 1.840.425    -    Erkek Nüfusu: 919.594    -     Kadın Nüfusu: 920.831', '2020-06-10 02:48:56', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `supplier`
--

CREATE TABLE `supplier` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` decimal(15,0) NOT NULL,
  `email` varchar(50) NOT NULL,
  `supplier_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `supplier`
--

INSERT INTO `supplier` (`id`, `title`, `address`, `phone`, `email`, `supplier_date`, `isActive`) VALUES
(6, 'Burak KARA', 'Ankara / Hasköysadasdasd', '999999999999999', 'burakkara@gmail.comsdasdasdasd', '2019-11-03 01:28:13', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `email`, `password`, `isActive`, `createdAt`) VALUES
(7, 'bgrkara', 'Buğra Kara', 'bgrkara@gmail.com', '98ba56de2d15a90cd0d25d4539b34106', 1, '2019-11-03 16:53:07'),
(17, 'berkaykara', 'Berkay Kara', 'info@berkaykara.com.tr', 'e10adc3949ba59abbe56e057f20f883e', 1, '2019-11-04 18:53:14');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gazeteler`
--
ALTER TABLE `gazeteler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `home_settings`
--
ALTER TABLE `home_settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sehirler`
--
ALTER TABLE `sehirler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Tablo için AUTO_INCREMENT değeri `gazeteler`
--
ALTER TABLE `gazeteler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Tablo için AUTO_INCREMENT değeri `home_settings`
--
ALTER TABLE `home_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `sehirler`
--
ALTER TABLE `sehirler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Tablo için AUTO_INCREMENT değeri `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
