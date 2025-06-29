-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2025 at 12:18 PM
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
-- Database: `omahedukasitempe_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `edukasis`
--

CREATE TABLE `edukasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edukasis`
--

INSERT INTO `edukasis` (`id`, `judul`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Paket Edukasi Tempe untuk Siswa TK', 'Paket ini dirancang khusus untuk anak-anak TK dengan metode yang menyenangkan dan edukatif. Anak-anak diajak belajar tentang proses pembuatan tempe dari awal hingga akhir.', 5000, 'edukasi/kgtwA9rxUuJhllfjLI1pnk9zYOq9vd57RsWCQ9Pd.jpg', '2025-06-25 18:01:54', '2025-06-25 18:01:54'),
(2, 'Paket Edukasi Tempe untuk SD, SMP, SMA, Universitas', 'Paket ini memberikan edukasi mendalam tentang pembuatan tempe dengan penjelasan lebih detail dan interaktif, sesuai dengan tingkat pemahaman peserta.', 15000, 'edukasi/zG82Ppnc5Qu0kDecgtv5uwRIlYLnxC6tLzJz3UjP.jpg', '2025-06-25 18:02:40', '2025-06-25 18:02:40'),
(3, 'Paket Individu (Minimal 10 Orang)', 'Paket ini dirancang untuk kelompok individu yang ingin merasakan pengalaman lebih lengkap di Omah Edukasi Tempe, termasuk kunjungan keliling ke beberapa pengrajin di Kampung Tempe.', 50000, 'edukasi/dDduH6RNrsD3tNw86O2awg28w1aPw0TXP4vXPAme.jpg', '2025-06-25 18:03:03', '2025-06-25 18:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kunjungan SMK NAHDLATUL ULAMA LEKOK PASURUAN', 'galeri/abYGysD1O4U3o8skGWpoTw4gYxSmpIleaP2eufbJ.jpg', '2025-06-25 18:09:46', '2025-06-25 18:09:46'),
(2, 'Workshop Tempe', 'galeri/nax4zjoRmv9iXSMg004IaqJCJfpHk032lQvsnOCz.jpg', '2025-06-25 18:10:02', '2025-06-25 18:10:02'),
(3, 'Kelas Bisnis Tempe', 'galeri/oENDEFf6MbVF6J8X3GlcYKcg7ie133ZUKjgzA2Ed.jpg', '2025-06-25 18:10:14', '2025-06-25 18:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_05_26_162302_create_produks_table', 1),
(2, '2025_05_26_162408_create_edukasis_table', 1),
(3, '2025_05_26_162441_create_galeris_table', 1),
(4, '2025_05_26_170237_create_users_table', 1),
(5, '2025_05_26_170907_create_sessions_table', 1),
(6, '2025_05_26_171713_create_cache_table', 1),
(7, '2025_06_24_201317_create_workshops_table', 1),
(8, '2025_06_25_001506_create_testimonis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama`, `deskripsi`, `harga`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Tempe Premium Zico', 'Dibuat dengan teknologi modern, higienis, dan berkualitas tinggi untuk memenuhi kebutuhan restoran,  rumah makan dan masyarakat umum.', 10000, 'produk/66l5iuk8yMVxN07Uj45yHKRpodjjpWUqM6VdvAb4.jpg', '2025-06-25 18:04:24', '2025-06-25 18:04:24'),
(2, 'Tempe Mendoan', 'Tempe setengah matang yang dirancang khusus untuk hidangan mendoan di berbagai restoran dan kafe.', 5000, 'produk/06sAFvV1yNN3pK1HhVuf9B0lWyCHuGlOB9VqoMCh.jpg', '2025-06-25 18:04:49', '2025-06-25 18:04:49'),
(3, 'Keripik Tempe Zico', 'Cemilan renyah berbasis tempe yang cocok untuk segala usia.', 15000, 'produk/QevORRnM1f1kya5XoxIQ2x9euXOaYQ465KnhtZri.jpg', '2025-06-25 18:05:13', '2025-06-25 18:05:13'),
(5, 'Penyedap Rasa Nabati Tempe Semangit', 'Produk inovatif yang menggabungkan rasa khas tempe semangit dengan bumbu rempah untuk melengkapi berbagai hidangan. Sangat bagus untuk masyarakat yang alergi udang dan vegetarian.', 20000, 'produk/OuKLvHodXnvi5J6faWS6MANbCLZM79mWjyh1dcjc.jpg', '2025-06-25 18:05:40', '2025-06-25 18:05:40'),
(6, 'Tempe Bacem Zico.', 'Olahan makanan khas Indonesia yang menggunakan tempe premium, bumbu rempah dan gula merah yang dimasak hingga meresap ke semua bagian tempe dan menghasilkan olahan makanan manis dan gurih.', 15000, 'produk/nwtVNT8ZRmXfBTZNvkzRyRFqeGyJLXK73ZpNlLvr.jpg', '2025-06-25 18:06:37', '2025-06-25 18:06:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('c9hgJEdHRmvMDvySwf2cysZVoJ3E5H9sToeqNUe4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVVNiZWNFdjA4UThhcVk0WUd5eEZrYlV3MVhmdXRTeDFHSFd0YzFKbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9nYWxlcmkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1750891582),
('csX2HkXuevjmdHr8JVtEWz8DlCv51MSePtA7mWqi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUlZxZnd6aFhEV2RVYWE1eko1d3B6YjlYMjBKY1lCUVNydWkxc2VkTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC93b3Jrc2hvcCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1751016635),
('I3cRsnEUHQCKeFXd4H4KNu2jCIHZHRKmpNIkoH5h', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVG81UFFNQmFpNUp0V3FtWmlCRk0wR3JzRm1BSVZYNE1CTHZBcnI1dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1751018606);

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama`, `jabatan`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'Bu Lulis Irsyad Yusuf', 'Mantan Bupati Pasuruan', 'Tempenya enak dan gurih', '2025-06-25 17:37:43', '2025-06-25 17:37:43'),
(2, 'Bu Muna', 'Kepala TK Mambaul Khoir, Purwodadi', 'Setiap ada kegiatan sekolah, tempe mendoan Zico selalu menjadi goodie bag', '2025-06-25 17:38:34', '2025-06-25 17:38:34'),
(4, 'Bu Mita Devi', 'Kepala Puskesmas Kecamatan Purwodadi', 'Suka dengan produk Omah Edukasi Tempe, terutama penyedap rasa tempe semangit untuk alergi udang dan vegetarian.', '2025-06-25 17:39:56', '2025-06-25 17:39:56'),
(5, 'Umi Azka', 'Ibu rumah tangga asal Surabaya', 'Keripik tempenya beneran enaaaak! Anakku sekali makan langsung habis.', '2025-06-25 17:40:23', '2025-06-25 17:40:23'),
(6, 'Mama Jessie', 'Ibu rumah tangga yang tinggal di Rotterdam, Belanda', 'Keripik tempenya rasanya original dan rempahnya terasa banget. Kalau berkunjung ke Indonesia, pasti mampir ke Omah Edukasi Tempe untuk borong keripik tempe.', '2025-06-25 17:40:48', '2025-06-25 17:40:48'),
(7, 'Agha', 'Siswa SD Tapas Arrohman, Sidoarjo', 'Aku suka tempe bacem Zico. Mau makan terus, tempenya enak manis.', '2025-06-25 17:41:20', '2025-06-25 17:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Omah Tempe', 'omahedukasitempe@gmail.com', NULL, '$2y$12$h9LAqlUf4KvHpUFyDANZ9OQXk63lAYZXksiBdOhzlZP.DIyVgjPOS', NULL, '2025-06-25 17:35:27', '2025-06-25 17:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE `workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`id`, `nama`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Workshop \"Dari Kedelai ke Tempe', 'Program edukasi interaktif yang mengajarkan peserta tentang proses produksi tempe, mulai dari persiapan bahan baku, fermentasi, hingga pengemasan.', 'workshop/ljqHnTjjZ1xqTYRUvXHstnpwWkpLKZm3bADr4T1S.jpg', '2025-06-25 18:07:42', '2025-06-25 18:07:42'),
(2, 'Kelas Bisnis Tempe', 'Mengajarkan strategi pemasaran dan pengembangan produk tempe agar pengusaha kecil dapat bersaing di pasar yang lebih luas.', 'workshop/L2zNVdXN7ABhm9krrJu2tVe3xy7zYlmzY2XtVuE5.jpg', '2025-06-25 18:08:08', '2025-06-25 18:08:08'),
(3, 'Wisata Edukasi Sekolah', 'Menyediakan program khusus untuk siswa sekolah, termasuk tur edukasi, demonstrasi pembuatan tempe, dan kegiatan kreatif berbasis tempe.', 'workshop/wXNcPPMsPeZq4VN7VDHeV8dQUriNZJ4pTzaZr7oH.jpg', '2025-06-25 18:08:29', '2025-06-25 18:08:29'),
(4, 'Festival Tempe Nusantara', 'Sebuah acara tahunan yang mempertemukan pengrajin tempe, pelaku bisnis kuliner, dan wisatawan untuk merayakan keanekaragaman olahan tempe di Indonesia.', 'workshop/jUDOlpEic22JdTiKXsLGZSqAbDfU4QFNr7htHmbD.jpg', '2025-06-25 18:08:54', '2025-06-25 18:08:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `edukasis`
--
ALTER TABLE `edukasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edukasis`
--
ALTER TABLE `edukasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
