-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Haz 2023, 21:22:17
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `laravelrentacar`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yil` int(11) DEFAULT NULL,
  `renk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motor_hacmi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `cars`
--

INSERT INTO `cars` (`id`, `category_id`, `user_id`, `title`, `keywords`, `description`, `model`, `yil`, `renk`, `motor_hacmi`, `image`, `price`, `quantity`, `detail`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'BMW 1.16i', 'BMW', 'Günlük Kiralık BMW Arabalar', '1.16', 2016, 'Beyaz', '1600', 'images/wsg5TPq2lrSOBbh0EW2QZDKCvLygViLjcfOKZlYs.png', 2500.00, 1, NULL, '1', 'True', '2023-06-05 08:08:50', '2023-06-05 11:14:46'),
(2, 1, 1, 'BMW i8', 'i8', 'Günlük Kiralık BMW Arabalar', 'i8', 2017, 'Beyaz', '2000', 'images/B2J2mPAtNUGAq1uDXqkSpKHIGBH4ItLIpQiAaKgi.png', 5000.00, 2, '<p><strong>ARA&Ccedil; &Ouml;ZELLİKLERİ</strong></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>HAYALET G&Ouml;STERGE PANELİ</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>PREMIUM NAVİGASYON SİSTEMİ</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>KEYLESS-GO</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>ANAHTARSIZ GİRİŞ</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>&Ouml;N KOLTUK ISITMA</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>ECO-COMFORT-SPORT S&Uuml;R&Uuml;Ş SE&Ccedil;ENEKLERİ</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>&Ccedil;ARPIŞMA İKAZ SİSTEMİ</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>YAYA KORUMA SİSTEMİ</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>HARMAN KARDON SURROUND</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>GERİ G&Ouml;R&Uuml;Ş KAMERASI</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>ADAPTİF LED FARLAR</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>AUTO HOLD (YOKUŞ KALKIŞ SİSTEMİ)</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>CRUİSE CONTROL (HIZ SABİTLEYİCİ)</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>&Ouml;N G&Ouml;R&Uuml;Ş KAMERASI</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>HEADUP DİSPLAY</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>SANAL EGZOZ SESİ</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>360&#39;KAMERA</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>CONNECTED DRIVE HİZMETİ</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>T&Uuml;RK&Ccedil;E &Ouml;N PANEL</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>Bİ-XENON LED FAR</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>20&#39;&#39;İN&Ccedil;H ALAŞIMLI JANTLAR</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>PLUG-IN HYBRID SYSTEM</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>ELEKTRİKLİ KOLTUKLAR</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>MULTIFONKSIYONEL DİREKSİYON</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>F1 VİTES</code></span></li>\r\n	<li><span style=\"font-family:Arial,Helvetica,sans-serif\"><code>BLUETOOTH-AUX-USB</code></span></li>\r\n</ul>', '1', 'True', '2023-06-05 11:31:17', '2023-06-05 11:31:17'),
(3, 2, 1, 'MERCEDES GLC 335', 'MERCEDES', 'Günlük Kiralık MERCEDES Arabalar', 'GLC 335', 2015, 'Siyah', '4000', 'images/YjyKIi2W73xA2Vx4FJOWadfJEAuLIWLO47rR2OZg.jpg', 3500.00, 2, '<p>EFSANE JEEP</p>', '1', 'True', '2023-06-05 14:11:16', '2023-06-05 14:11:31'),
(4, 5, 1, 'RENAULT CAPTUR', 'CAPTUR', 'Günlük Kiralık RENAULT Arabalar', 'CAPTUR', 2020, 'Beyaz', '2000', 'images/rGjqQ7iXiHQwpvkd0FxYY7xZLcVU1fkwOKS6xezh.png', 3500.00, 1, NULL, '1', 'True', '2023-06-05 14:15:18', '2023-06-05 14:15:18'),
(5, 5, 1, 'RENAULT MEGANE COUPE GT', 'MEGANE', 'Günlük Kiralık RENAULT Arabalar', 'COUPE GT', 2023, 'Kırmızı', '1600', 'images/M6gDXfFIXKXJbEqwYk2Fl0DUsv0Ti0yTlWsy5C7A.jpg', 5000.00, 5, NULL, '1', 'True', '2023-06-05 14:16:17', '2023-06-05 14:16:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `keywords`, `description`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'BMW', 'BMW', 'Günlük Kiralık BMW Arabalar', NULL, '10', 'True', '2023-06-05 08:07:42', '2023-06-05 08:07:42'),
(2, 0, 'MERCEDES', 'MERCEDES', 'Günlük Kiralık MERCEDES Arabalar', NULL, '2', 'True', '2023-06-05 11:22:26', '2023-06-05 11:23:31'),
(3, 0, 'FORD', 'FORD', 'Günlük Kiralık FORD Arabalar', NULL, '3', 'True', '2023-06-05 11:22:40', '2023-06-05 11:23:37'),
(4, 0, 'HONDA', 'HONDA', 'Günlük Kiralık HONDA Arabalar', NULL, '4', 'True', '2023-06-05 11:23:02', '2023-06-05 11:23:42'),
(5, 0, 'RENAULT', 'RENAULT', 'Günlük Kiralık RENAULT Arabalar', NULL, '5', 'True', '2023-06-05 11:23:22', '2023-06-05 11:23:47'),
(6, 0, 'NISSAN', 'NISSAN', 'Günlük Kiralık NISSAN Arabalar', NULL, '6', 'True', '2023-06-05 11:24:08', '2023-06-05 11:24:08'),
(7, 0, 'PEUGEOT', 'PEUGEOT', 'Günlük Kiralık PEUGEOT Arabalar', NULL, '7', 'True', '2023-06-05 11:24:31', '2023-06-05 11:24:31'),
(9, 0, 'test', 'test', 'test', NULL, '1', 'True', '2023-06-05 15:47:41', '2023-06-05 15:47:41'),
(10, 0, 'test2', 'test2', 'test2', NULL, '1', 'True', '2023-06-05 15:50:17', '2023-06-05 15:50:17');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'True',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `faqs`
--

INSERT INTO `faqs` (`id`, `position`, `answer`, `question`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cebi en iyi fırsatları sunmak için Thrifty, Dollar, Enterprise, Hertz, Payless ve diğerleri dahil olmak üzere tüm ana araç kiralama şirketlerinden kiralık araç fiyatlarını karşılaştırır.', 'Cebi bu kadar düşük kiralık araç fiyatlarını nasıl buluyor?', 'True', '2023-06-05 14:22:51', '2023-06-05 14:22:51'),
(2, 2, 'Minimum yasal araç kiralama yaşı aracınızı hangi ülkede kiraladığınıza bağlı olarak farklılık gösterir. Avrupa ve Asya\'da minimum yaş sınırı 18 ile 22 arasında değişmektedir fakat bazı acenteler sürücülerin en az 25 yaşında olmasını talep eder.', 'Araç kiralamak için minimum yaş sınırı nedir?', 'True', '2023-06-05 14:23:42', '2023-06-05 14:23:42'),
(3, 3, 'Cebi\'de küçük, orta, büyük, SUV, kamyonet, lüks, pikap, üstü açılır ve ticari araçlar dahil olmak üzere her tür kiralık araç için indirimler bulabilirsiniz', 'Cebi üzerinden ne tür araçlar kiralayabilirim?', 'True', '2023-06-05 14:24:05', '2023-06-05 14:24:05'),
(4, 4, 'Cebi yapacağınız basit bir kiralık araç aramasında saniyeler içinde yüzlerce seyahat sitesindeki fiyatlar taranır. Tüm webten kiralık araç fırsatlarını toplarız ve bunları tek bir yere koyarız.', 'Cebi\'de en iyi kiralık araç fırsatlarını nasıl bulabilirim?', 'True', '2023-06-05 14:24:41', '2023-06-05 14:24:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `ip`, `subject`, `note`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '127.0.0.1', 'Test - Mercedes Hk.', NULL, 'Merhaba, Mercedes arabayı bana kiralayabilir misiniz?', 'New', '2023-06-05 14:26:22', '2023-06-05 14:26:22'),
(2, 'test', NULL, '127.0.0.1', 'Test', 'test', 'Test', 'Read', '2023-06-05 15:26:36', '2023-06-05 15:29:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(41, '2014_10_12_000000_create_users_table', 1),
(42, '2014_10_12_100000_create_password_resets_table', 1),
(43, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(44, '2019_08_19_000000_create_failed_jobs_table', 1),
(45, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(46, '2020_12_04_101856_create_sessions_table', 1),
(47, '2021_01_01_222934_create_categories_table', 1),
(48, '2021_01_07_082426_create_cars_table', 1),
(49, '2021_01_07_151725_create_images_table', 1),
(50, '2021_01_08_191327_create_settings_table', 1),
(51, '2021_01_17_080739_add_fields_to_users_table', 1),
(52, '2021_01_17_081853_create_messages_table', 1),
(53, '2021_01_20_115456_create_reviews_table', 1),
(54, '2021_01_21_052243_change_field_from_review_table', 1),
(55, '2021_01_21_130827_create_faqs_table', 1),
(56, '2021_01_22_042010_create_shopcarts_table', 1),
(57, '2021_01_24_020222_create_roles_table', 1),
(58, '2021_01_24_020524_create_role_user_table', 1),
(59, '2021_01_24_160213_create_orders_table', 1),
(60, '2021_01_24_162617_create_orderitems_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `orderitems`
--

INSERT INTO `orderitems` (`id`, `user_id`, `product_id`, `order_id`, `time`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 8, 1, NULL, '2023-06-05 14:30:04', '2023-06-05 14:30:04'),
(2, 1, 1, 9, 10, NULL, '2023-06-05 14:34:30', '2023-06-05 14:34:30'),
(3, 2, 1, 10, 1, NULL, '2023-06-05 15:27:36', '2023-06-05 15:27:36'),
(4, 4, 1, 11, 1, NULL, '2023-06-05 15:46:51', '2023-06-05 15:46:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `adress` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IP` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `adress`, `phone`, `name`, `email`, `note`, `IP`, `status`, `created_at`, `updated_at`) VALUES
(8, 1, 'Karabük ,Türkiye', '(999) 999-9999', 'admin', 'admin@admin.com', NULL, '127.0.0.1', 'Accepted', '2023-06-05 14:30:04', '2023-06-05 14:31:31'),
(9, 1, 'Karabük ,Türkiye', '(999) 999-9999', 'admin', 'admin@admin.com', NULL, '127.0.0.1', 'Cancelled', '2023-06-05 14:34:30', '2023-06-05 14:34:44'),
(10, 2, 'test', '111111', 'test', 'test@test.com', NULL, '127.0.0.1', 'Delayed', '2023-06-05 15:27:36', '2023-06-05 15:29:49'),
(11, 4, 'test', '111111', 'test', 'test@test.com', NULL, '127.0.0.1', 'New', '2023-06-05 15:46:51', '2023-06-05 15:46:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `IP` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` int(11) NOT NULL DEFAULT 0,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `IP`, `subject`, `review`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '127.0.0.1', 'admin', 'Bu BMW bir harika dostum.', 5, 'True', '2023-06-05 11:25:17', '2023-06-05 11:25:38'),
(2, 4, 1, '127.0.0.1', 'test1', 'test 123456', 5, 'True', '2023-06-05 15:46:15', '2023-06-05 15:51:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-06-01 11:03:28', '2023-06-01 11:03:28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JLv3PFjpk1ILGejHjZqAXFiMqwlfIvJKOKfXNxy3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiczNpaGpHemoyRElTUGxvWFlGTlljZk9CeHRvRTMyOVBlaFpGanU2ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1685988657),
('llrE7DRPB5LOW64mfNki2UDBN10FEc3UcrXWjBCy', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieUdTT3psVEVJVUFOZlNjMnhTemNHWGFnUmtrZVJiYzNJZmczS0daQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91c2VyL29yZGVyIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGk3bEZJeWNPSW9wa0N5MmJuc21uRy5LV2liS3F6TE5LU1NhOHVIc1QuMjB3Ri52N2Z5bjZhIjt9', 1685986487),
('voktugvzsADVkrb9sPyHvlBlk35qYZ9XxIZ9r2nT', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic2ZIRU0wQnNWMGd5ZDZteG1INnhFajFXbGJvNzZNVWxtVER3MGxQcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRtclFUcGVycUtwQ2l5N1Z3NWdrNlp1SEhoZmdUc2d4Q0pzN085TldGUnFyd016cmtuRjhuTyI7fQ==', 1685989466),
('wa4J09LvOHoNiogggDsPJoYJjmx2qHCzKub1xsE4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZHRQTHgyWFk0VmxuMFRna0JoSGk0bzdPaTlBME9DdUVUcUFHbHVteSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91c2VyL3Nob3BjYXJ0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJGk3bEZJeWNPSW9wa0N5MmJuc21uRy5LV2liS3F6TE5LU1NhOHVIc1QuMjB3Ri52N2Z5bjZhIjt9', 1685991154);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpserver` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpsemail` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpspassword` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtpport` int(11) DEFAULT 0,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referances` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'False',
  `logo` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(75) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `title`, `keywords`, `description`, `company`, `adress`, `phone`, `fax`, `email`, `smtpserver`, `smtpsemail`, `smtpspassword`, `smtpport`, `facebook`, `twitter`, `instagram`, `youtube`, `aboutus`, `contact`, `referances`, `status`, `logo`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Cebi Rent A Car', 'Rent a Car', 'Ucuz fiyatlı ve güvenilir online araç kiralama servisinden her şehirde hızlı bir şekilde rent a car hizmeti al, kolayca ve uygun fiyatlarla araba kirala.', 'ÇEBİ Rent a Car', 'Karabük, Türkiye', '(999) 999-9999', '(999) 999-9999', 'admin@admin.com', 'admin.com', NULL, '1234', 80, 'facebook.com', 'twitter.com', 'instagram.com', 'youtube.com', '<p>Ara&ccedil; kiralama, her ge&ccedil;en yıl daha ayrıcalıklı, gelişmiş se&ccedil;eneklerle m&uuml;şterilerin karşısına &ccedil;ıkan bir sekt&ouml;r. Siz de otomobil kiralamak, gelişmiş seyahat keyfinin tadını &ccedil;ıkarmak i&ccedil;in Cebi Rent a Car kurumsallığının deneyimine varın.</p>\r\n\r\n<p>Kiralama sekt&ouml;rleri, her yıl biraz daha etki alanını genişletiyor. Bir &uuml;r&uuml;n, mal ya da hizmeti kiralamak, gelecekte daha sık g&ouml;r&uuml;lebilecek bir eğilim. Bu durum d&uuml;nyadaki t&uuml;ketici profilinin belli nedenlerle kiralamaya daha yatkın bir hale gelmesinden kaynaklanıyor.</p>\r\n\r\n<p>Araba, daire, ofis, kurumsal telefon vb. alanlarda geniş bir pazar hacmiyle var olan kiralama sekt&ouml;r&uuml; t&uuml;keticinin karşısına her zaman farklı se&ccedil;enekler sunuyor. Buna ek olarak sunulan hizmet &ccedil;er&ccedil;evesinde kalite, s&uuml;rd&uuml;rebilirlilik, g&uuml;ven, kurumsallaşma vb. etkenler de, t&uuml;keticilerin mal ya da hizmetleri kiralayarak kullanma eğilimi g&ouml;stermesini sağlıyor.</p>\r\n\r\n<p>T&uuml;rkiye&rsquo;de gelişmiş se&ccedil;enekler vadeden turizm, ara&ccedil; kiralama sekt&ouml;r&uuml;n&uuml; de iyi bir &ccedil;izgiye taşıdı. T&uuml;rkiye&rsquo;de satışı ger&ccedil;ekleşen 100 yeni otomobilin 23&rsquo;&uuml;n&uuml;n ara&ccedil; kiralama sekt&ouml;r&uuml;nde kullanılması, bu tabloyu ortaya koyan ciddi bir veri. Eldeki verilere g&ouml;re şu an T&uuml;rkiye&rsquo;de 360 bin 769 kiralık ara&ccedil; bulunuyor.</p>\r\n\r\n<p>Ara&ccedil; kiralama işlemleriniz i&ccedil;in daha kurumsal bir yapıyla &ccedil;alışmaya ne dersiniz? Cebi Rent a Car size aradığınız kaliteyi sunuyor. 25 lokasyonda hizmet, 7/24 &ccedil;ağrı merkezi ve 40&rsquo;tan fazla ara&ccedil; tipiyle benzersiz bir rent a car deneyimi yaşayın.</p>', '<p>İstek ve &ouml;nerileriniz bizim i&ccedil;in &ccedil;ok değerli. İlgilendiğiniz konuyla ilgili olarak aşağıdaki telefon numaralarından, ya da formu doldurarak bize ulaşabilirsiniz.Size en kısa s&uuml;re i&ccedil;erisinde cevap verilir.&nbsp;Telefonlarımız t&uuml;m şehirlerdeki ofislerimiz i&ccedil;in merkez y&ouml;netimlidir.</p>\r\n\r\n<p>Rezervasyonlarınız ile ilgili işlemler i&ccedil;in ayrıca&nbsp; admin@admin.com&nbsp;adresini kullanabilirsiniz.</p>\r\n\r\n<p>Şikayet bildirimlerinizi sikayet@admin.com&nbsp;<a href=\"mailto:musteri.iliskileri@cizgirentacar.com.tr?subject=%C5%9Eikayetim%20Var!\">&nbsp;</a>adresine, +999 999 9999 numaralı telefon ve Whatsapp hattına&nbsp;iletiniz.</p>', NULL, 'True', 'settings/Gko8YoPXGJZz2QFNl3TRPNxFz8RpNOa2zoqNPN52.jpg', 'settings/BQPkVMEjvEGvmBl3mHZxVVbnb4VAyApoaIZUvCJW.jpg', '2023-06-04 10:57:18', '2023-06-05 14:21:20'),
(2, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 08:04:52', '2023-06-05 08:04:52'),
(3, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 08:05:02', '2023-06-05 08:05:02'),
(4, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 08:05:16', '2023-06-05 08:05:16'),
(5, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 08:06:49', '2023-06-05 08:06:49'),
(6, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 11:14:59', '2023-06-05 11:14:59'),
(7, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 11:19:01', '2023-06-05 11:19:01'),
(8, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 11:19:10', '2023-06-05 11:19:10'),
(9, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 14:19:18', '2023-06-05 14:19:18'),
(10, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 14:21:20', '2023-06-05 14:21:20'),
(11, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 14:21:57', '2023-06-05 14:21:57'),
(12, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 15:29:24', '2023-06-05 15:29:24'),
(13, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 15:35:02', '2023-06-05 15:35:02'),
(14, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 15:35:15', '2023-06-05 15:35:15'),
(15, 'Your Project Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'False', NULL, NULL, '2023-06-05 15:51:51', '2023-06-05 15:51:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `shopcarts`
--

CREATE TABLE `shopcarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `shopcarts`
--

INSERT INTO `shopcarts` (`id`, `user_id`, `product_id`, `time`, `created_at`, `updated_at`) VALUES
(6, 3, 1, 10, '2023-06-05 15:39:00', '2023-06-05 15:39:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `adress`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, NULL, NULL, '$2y$10$i7lFIycOIopkCy2bnsmnG.KWibKqzLNKSSa8uHsT.20wF.v7fyn6a', NULL, NULL, NULL, NULL, NULL, '2023-06-05 08:02:48', '2023-06-05 08:02:48'),
(4, 'test', 'test@test.com', NULL, NULL, NULL, '$2y$10$42SUXNgDxDJW4Ptxo/E28unmNSNWEtyZQpdY8u.E8KIgWUG.kyYJa', NULL, NULL, NULL, NULL, NULL, '2023-06-05 15:44:36', '2023-06-05 15:44:36');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Tablo için indeksler `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `shopcarts`
--
ALTER TABLE `shopcarts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Tablo için AUTO_INCREMENT değeri `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `shopcarts`
--
ALTER TABLE `shopcarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
