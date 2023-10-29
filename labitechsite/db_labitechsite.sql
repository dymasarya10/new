-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Okt 2023 pada 22.23
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_labitechsite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akreditasis`
--

CREATE TABLE `akreditasis` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `akreditasis`
--

INSERT INTO `akreditasis` (`id`, `title`, `slug`, `pict`, `shortdesc`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Nama Akreditasi', 'nama-akreditasi', 'akreditasidef1.jpg', 'Ini adalah deskripsi singkat mengenai akreditasi tercantum', 'linkakreditasi', '2023-10-04 07:31:51', '2023-10-04 07:31:51'),
(2, 'Nama Akreditasi 2', 'nama-akreditasi2', 'akreditasidef1.jpg', 'Ini adalah deskripsi singkat mengenai akreditasi2 tercantum', 'linkakreditasi2', '2023-10-04 07:32:18', '2023-10-04 07:32:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasis`
--

CREATE TABLE `aplikasis` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_aplikasi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aplikasis`
--

INSERT INTO `aplikasis` (`id`, `nama_aplikasi`, `shortdesc`, `link`, `pict`, `created_at`, `updated_at`) VALUES
(1, 'Ini adalah nama aplikasi', 'berisi deskripsi singkat', 'linknya', 'appsec/logo.svg', '2023-10-04 12:52:32', '2023-10-04 12:52:32'),
(2, 'Ini adalah nama aplikasi 2', 'Test doang', 'linknya', 'appsec/logo.svg', '2023-10-04 12:52:43', '2023-10-18 21:32:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_made` date NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `author`, `date_made`, `slug`, `pict`, `excerpt`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Judul Pertama', 'Dwi Santoso', '2023-10-12', 'judul_pertama', 'sample.png', 'Excerpt pertama', 'Ini paragraf pertama lorem ipsum dolor amet sit amet beramet amet lorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet amet.\r\n\r\nIni paragraf kedua lorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet ametlorem ipsum dolor amet sit amet beramet amet', '2023-10-08 19:19:19', '2023-10-08 19:19:19'),
(2, 'Judul kedua', 'Dymas Arya Nanda', '2023-10-12', 'judul_kedua', 'sample.png', 'Excerpt kedua', 'body kedua', '2023-10-08 19:19:29', '2023-10-08 19:19:29'),
(3, 'Judul Ketiga', 'Bayu Afif Nuranto', '2023-10-12', 'judul_ketiga', 'sample.png', 'Excerpt Ketiga', 'body Ketiga', '2023-10-08 19:19:45', '2023-10-08 19:19:45'),
(4, 'Judul Keempat', 'Emi', '2023-10-12', 'judul_Keempat', 'sample.png', 'Excerpt Keempat', 'body Keempat', '2023-10-08 19:19:55', '2023-10-08 19:19:55'),
(5, 'Judul Kelima', 'Dwi Santoso', '2023-10-12', 'judul_kelima', 'sample.png', 'Excerpt kelima', 'body ke lima', '2023-10-09 18:44:12', '2023-10-09 18:44:12'),
(6, 'Judul Keenam', 'Alan Turismo', '2023-10-12', 'judul_Keenam', 'sample.png', 'Excerpt Keenam', 'body Keenam', '2023-10-09 18:44:32', '2023-10-09 18:44:32'),
(7, 'Judul Ketujuh', 'Alan Turismo', '2023-10-12', 'judul_Ketujuh', 'sample.png', 'Excerpt Ketujuh', 'body Ketujuh', '2023-10-09 18:44:41', '2023-10-09 18:44:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `branches`
--

CREATE TABLE `branches` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_cabang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `branches`
--

INSERT INTO `branches` (`id`, `nama_cabang`, `link`, `created_at`, `updated_at`) VALUES
(14, 'Labitech Popi Jakarta', 'linkjkt', '2023-10-13 01:33:57', '2023-10-15 18:30:32'),
(15, 'Labitech...', 'https://lookerstudio.google.com/u/0/reporting/347e4a55-7daf-413e-bb21-635c65ab31ca/page/smCSD', '2023-10-13 01:34:06', '2023-10-13 01:34:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instalink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fblink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `footerdesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `maplink` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`, `address`, `instalink`, `fblink`, `footerdesc`, `maplink`, `created_at`, `updated_at`) VALUES
(1, 'hrdlabitechjuara@gmail.com', '0816 - 2626 - 198', 'Jl. Rawa Jaya No 37, RT.008/RW.004, Pd Kopi, Kec. Duren Sawit, Jakarta Timur, 13460', 'link instagram', 'link fb', 'Test Footer', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2175587551137!2d106.94132817418281!3d-6.235027761056329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d7d7652295d%3A0xdf87f8e2c6a5bdbc!2sSekolah%20Labitech%20Jakarta%20Timur!5e0!3m2!1sid!2sid!4v1696243394551!5m2!1sid!2sid', '2023-10-04 06:46:43', '2023-10-18 23:47:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_activity_firsts`
--

CREATE TABLE `home_activity_firsts` (
  `id` bigint UNSIGNED NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `home_activity_firsts`
--

INSERT INTO `home_activity_firsts` (`id`, `pict`, `created_at`, `updated_at`) VALUES
(1, '1.jpeg', '2023-10-04 06:11:25', '2023-10-04 06:11:25'),
(2, '2.jpeg', '2023-10-04 06:11:35', '2023-10-04 06:11:35'),
(3, '3.jpeg', '2023-10-04 06:12:20', '2023-10-04 06:12:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_activity_secs`
--

CREATE TABLE `home_activity_secs` (
  `id` bigint UNSIGNED NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `home_activity_secs`
--

INSERT INTO `home_activity_secs` (`id`, `pict`, `title`, `shortdesc`, `link`, `created_at`, `updated_at`) VALUES
(1, 'homephotos/selamat.png', 'Judul Gambar', 'Deskripsi singkat', 'link kalo ada', '2023-10-04 06:27:18', '2023-10-16 23:51:06'),
(2, 'homephotos/keg1.jpg', 'Judul Gambar', 'Deskripsi singkat tentang gambar', 'link kalo ada', '2023-10-04 06:27:45', '2023-10-04 06:27:45'),
(3, 'homephotos/keg1.jpg', 'Judul Gambar', 'Deskripsi singkat tentang gambar', 'link kalo ada', '2023-10-04 06:27:47', '2023-10-04 06:27:47'),
(4, 'homephotos/keg1.jpg', 'Judul Gambar', 'Deskripsi singkat tentang gambar', 'link kalo ada', '2023-10-04 06:27:58', '2023-10-04 06:27:58'),
(5, 'homephotos/keg1.jpg', 'Contoh 5', 'Lorem IPsum DOLOR', 'link kalo ada', '2023-10-04 06:28:20', '2023-10-04 06:28:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `gambar_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `home_banners`
--

INSERT INTO `home_banners` (`id`, `gambar_banner`, `created_at`, `updated_at`) VALUES
(1, 'bannerImages/LqUvEQF2s2YRPn8fJuGa6UfAT8h6zuOmu8xF71bg.png', '2023-10-04 05:20:38', '2023-10-16 00:08:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_profs`
--

CREATE TABLE `home_profs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `home_profs`
--

INSERT INTO `home_profs` (`id`, `title`, `desc`, `pict`, `created_at`, `updated_at`) VALUES
(1, 'Mari Bergabung Bersama Kami', 'Deskripsi Singkat', 'promotionpict/d8WzNTq09fzuJN0R53srlmM4Xo6G2MbWijGjgv1M.png', '2023-10-04 05:29:31', '2023-10-16 21:49:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home_prof_items`
--

CREATE TABLE `home_prof_items` (
  `id` bigint UNSIGNED NOT NULL,
  `keunggulan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `home_prof_items`
--

INSERT INTO `home_prof_items` (`id`, `keunggulan`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Item 1', 'fa-solid fa-check', '2023-10-04 05:49:05', '2023-10-16 21:37:00'),
(2, 'item 2', 'fa-solid fa-gear', '2023-10-04 05:56:54', '2023-10-04 05:56:54'),
(3, 'item 3', 'fa-solid fa-database', '2023-10-04 05:58:34', '2023-10-04 05:58:34'),
(4, 'item 4', 'fa-solid fa-print', '2023-10-04 05:59:03', '2023-10-04 05:59:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemitraans`
--

CREATE TABLE `kemitraans` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pictheader` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `titlevid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdescvid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkvid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pictfooter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotiontext` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kemitraans`
--

INSERT INTO `kemitraans` (`id`, `title`, `pictheader`, `titlevid`, `shortdescvid`, `linkvid`, `pictfooter`, `promotiontext`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'pnsheader/kemitraanpictdef1.png', 'Judul Video', 'Ini adalah deskripsi singkat tentang video promosi', 'kemitraanpictdef2.png', 'pnsheader/kemitraanpictdef4.png', 'Ini adalah text untuk promosi dll', 'test', '2023-10-04 18:20:26', '2023-10-24 09:52:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_karirs`
--

CREATE TABLE `layanan_karirs` (
  `id` bigint UNSIGNED NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_karirs`
--

INSERT INTO `layanan_karirs` (`id`, `pict`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'vacanciesImg/loker.jpeg', 'Loker 1', 'link1', '2023-10-04 17:59:42', '2023-10-04 17:59:42'),
(2, 'vacanciesImg/loker.jpeg', 'Loker 2', 'Link2', '2023-10-08 21:03:20', '2023-10-08 21:03:20'),
(3, 'vacanciesImg/loker.jpeg', 'Loker 3', 'Link3', '2023-10-08 21:03:28', '2023-10-08 21:03:28'),
(4, 'vacanciesImg/loker.jpeg', 'Loker 4', 'Link4', '2023-10-08 21:03:44', '2023-10-08 21:03:44'),
(5, 'vacanciesImg/loker.jpeg', 'Loker 5', 'link5', '2023-10-04 17:59:42', '2023-10-04 17:59:42'),
(6, 'vacanciesImg/loker.jpeg', 'Loker 6', 'Link6', '2023-10-08 21:03:20', '2023-10-08 21:03:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_10_04_094438_create_testimonials_table', 1),
(3, '2023_10_04_112916_create_branches_table', 1),
(4, '2023_10_04_114256_create_short_descs_table', 1),
(5, '2023_10_04_121802_create_home_banners_table', 2),
(6, '2023_10_04_122448_create_home_profs_table', 3),
(7, '2023_10_04_123801_create_home_prof_items_table', 4),
(8, '2023_10_04_130937_create_home_activity_firsts_table', 5),
(9, '2023_10_04_132157_create_home_activity_secs_table', 6),
(10, '2023_10_04_133951_create_contacts_table', 7),
(11, '2023_10_04_142059_create_visi_misis_table', 8),
(12, '2023_10_04_142745_create_akreditasis_table', 9),
(13, '2023_10_04_194812_create_aplikasis_table', 10),
(14, '2023_10_04_200445_create_kemitraans_table', 11),
(15, '2023_10_05_005602_create_layanan_karirs_table', 12),
(16, '2023_10_05_011059_create_kemitraans_table', 13),
(17, '2023_10_05_013007_create_part_programs_table', 14),
(18, '2023_10_09_020522_create_artikels_table', 15),
(19, '2023_10_29_015015_create_admins_table', 16),
(20, '2014_10_12_000000_create_users_table', 17),
(21, '2014_10_12_100000_create_password_reset_tokens_table', 17),
(22, '2019_08_19_000000_create_failed_jobs_table', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `part_programs`
--

CREATE TABLE `part_programs` (
  `id` bigint UNSIGNED NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `part_programs`
--

INSERT INTO `part_programs` (`id`, `pict`, `name`, `shortdesc`, `created_at`, `updated_at`) VALUES
(1, 'pnsheader/kemitraanpictdef4.png', 'program 1', 'ini adalah shortdesc untuk program 1', '2023-10-04 18:34:20', '2023-10-24 09:50:32'),
(2, 'partprogramImg/F4AGPYGjITtZbHe38mtRiUaFVEGX4XdqpXxw5gwU.png', 'program 2', 'test 3', '2023-10-04 18:34:33', '2023-10-24 09:38:13'),
(3, 'partprogramImg/YmWTKj9LYXxrHzYR3RsPabAplhwK7xyJsMtArxJ0.png', 'program 3', 'ini adalah shortdesc untuk program 3', '2023-10-04 18:34:48', '2023-10-24 09:38:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `short_descs`
--

CREATE TABLE `short_descs` (
  `id` bigint UNSIGNED NOT NULL,
  `shortdesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `short_descs`
--

INSERT INTO `short_descs` (`id`, `shortdesc`, `program`, `icon`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Ini deskripsi singkat untuk program Islamic', 'islamic', 'fa-solid fa-user', 'E67E22', '2023-10-04 04:55:14', '2023-10-04 04:55:14'),
(2, 'Ini deskripsi singkat untuk program hafizh', 'hafizh', 'fa-solid fa-book-open', 'F39C12', '2023-10-04 04:55:39', '2023-10-04 04:55:39'),
(3, 'Ini deskripsi singkat untuk program juara', 'juara', 'fa-solid fa-award', 'E84393', '2023-10-04 04:55:52', '2023-10-04 04:55:52'),
(4, 'Ini deskripsi singkat untuk program technology', 'technology', 'fa-solid fa-microchip', '0984E3', '2023-10-04 04:57:07', '2023-10-04 04:57:07'),
(5, 'Ini deskripsi singkat untuk program entrepreneur', 'entrepreneur', 'fa-solid fa-diagram-project', '6C5CE7', '2023-10-04 04:57:19', '2023-10-04 04:57:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulasan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `testimonials`
--

INSERT INTO `testimonials` (`id`, `foto`, `nama`, `pekerjaan`, `ulasan`, `created_at`, `updated_at`) VALUES
(1, 'testimonprof/ZPzy9MU7qubLJXNGJ5lgoQFaf8nTnbU8awSI8gtl.png', 'Dymas Arya Nanda', 'Web Developer', 'Tenaga Pendidik yang berkualitas', '2023-10-04 04:50:40', '2023-10-16 19:43:42'),
(2, 'testimonprof/CVrRqCDjs6Jnt5zUXsKLLp04PCE2C6v2LiNESlyp.png', 'Bayu Nuranto', 'Full Stack Developer', 'Sekolah ramah anak', '2023-10-04 04:51:12', '2023-10-16 19:30:39'),
(4, 'testimonprof/WUMMatm7BvrqQa5sAdSaCIWsQbJfrciTQZsMIUVc.png', 'Dwi Santoso', 'Guru', 'Sekolah ramah anak, Tenaga pendidik berkualitas', '2023-10-04 18:52:06', '2023-10-16 19:31:14'),
(5, 'testimonprof/co0KUelwtGtAvEQ5ZmzmYuQMzXgGRKmYQTMhr7Iw.png', 'Aman yeah guys', 'Resepsionis', 'Kinerja tenaga pendidik yang baik dan bagus', '2023-10-04 18:54:52', '2023-10-16 19:41:09'),
(6, 'testimonprof/ndflYVm4Ocpe3ZVf1W99RDJX9BogBn2beI8u43V5.png', 'Stranger', 'Resepsionis', 'Kinerja tenaga pendidik yang baik dan bagus', '2023-10-04 18:59:21', '2023-10-16 19:41:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin_labitech@gmail.com', NULL, '$2y$10$gBZzXpBG5.mij/U1HN/9zehKOutomnLORffPMpWAR0H18.9LxsxTG', NULL, '2023-10-28 23:59:15', '2023-10-28 23:59:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misis`
--

CREATE TABLE `visi_misis` (
  `id` bigint UNSIGNED NOT NULL,
  `visi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pict` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi_misis`
--

INSERT INTO `visi_misis` (`id`, `visi`, `misi`, `pict`, `created_at`, `updated_at`) VALUES
(1, 'Coba tes', 'ganti gambar', 'visimisisec/dUyj3JM7ftRGtyGhEzmNZ0pIqHlE1riOUMrcrwkY.png', '2023-10-04 07:24:04', '2023-10-18 20:57:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akreditasis`
--
ALTER TABLE `akreditasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aplikasis`
--
ALTER TABLE `aplikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `home_activity_firsts`
--
ALTER TABLE `home_activity_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_activity_secs`
--
ALTER TABLE `home_activity_secs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_profs`
--
ALTER TABLE `home_profs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home_prof_items`
--
ALTER TABLE `home_prof_items`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kemitraans`
--
ALTER TABLE `kemitraans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan_karirs`
--
ALTER TABLE `layanan_karirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `part_programs`
--
ALTER TABLE `part_programs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `short_descs`
--
ALTER TABLE `short_descs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akreditasis`
--
ALTER TABLE `akreditasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `aplikasis`
--
ALTER TABLE `aplikasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `home_activity_firsts`
--
ALTER TABLE `home_activity_firsts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `home_activity_secs`
--
ALTER TABLE `home_activity_secs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `home_profs`
--
ALTER TABLE `home_profs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `home_prof_items`
--
ALTER TABLE `home_prof_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kemitraans`
--
ALTER TABLE `kemitraans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `layanan_karirs`
--
ALTER TABLE `layanan_karirs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `part_programs`
--
ALTER TABLE `part_programs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `short_descs`
--
ALTER TABLE `short_descs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi_misis`
--
ALTER TABLE `visi_misis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
