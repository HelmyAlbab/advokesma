-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 04:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advokesma`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirasis`
--

CREATE TABLE `aspirasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harapan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kel_aspirasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aspirasis`
--

INSERT INTO `aspirasis` (`id`, `nama`, `nim`, `prodi`, `isu`, `harapan`, `kel_aspirasi`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Helmy', '205162839861', 'teknologi informasi', 'membahas tentang isu tiga periode', 'setiap masyarakat harus mematuhi undang-undang yang berlaku', 'Sosial', '2022-05-18 18:54:01', '2022-05-18 18:54:01'),
(2, 'Muhammad Helmy', '205162839861', 'teknologi informasi', 'membahas tentang isu tiga periode', 'setiap masyarakat harus mematuhi undang-undang yang berlaku', 'Sosial', '2022-05-18 18:57:44', '2022-05-18 18:57:44'),
(3, 'helmy albab', '205150701111018', 'teknologi informasi', 'kuliah hybrid membuat pikiran tidak tenang', 'harapan saya semoga kuliah diperjelas sistemnya', 'Aspirasi Pribadi', '2022-05-18 19:16:55', '2022-05-18 19:16:55'),
(4, 'helmy albab', '205150701111018', 'teknologi informasi', 'kuliah hybrid membuat pikiran tidak tenang', 'harapan saya semoga kuliah diperjelas sistemnya', 'Aspirasi Pribadi', '2022-05-18 19:17:39', '2022-05-18 19:17:39'),
(5, 'Raihan', '205150701111018', 'Teknologi Informasi', 'tentang 3 periode', 'harapan saya dapat 2 periode aja', 'Aspirasi Pribadi', '2022-05-19 01:19:26', '2022-05-19 01:19:26'),
(6, 'Raihan', '205150701111018', 'Teknologi Informasi', 'tentang 3 periode', 'harapan saya dapat 2 periode aja', 'Aspirasi Pribadi', '2022-05-19 01:19:54', '2022-05-19 01:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jawabans`
--

CREATE TABLE `jawabans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawabans`
--

INSERT INTO `jawabans` (`id`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'sagf gaysdfasfasdf', '2022-05-18 18:48:26', '2022-05-18 18:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_17_162007_create_aspirasis_table', 1),
(6, '2022_05_17_180913_create_pertanyaans_table', 1),
(7, '2022_05_18_104839_create_jawabans_table', 1),
(8, '2022_05_18_122512_create_topnews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `nama`, `nim`, `prodi`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(4, 'raihan', '205150700111029', 'teknologi informasi', 'Kapan jadwal UAS muncul?', '2022-05-18 21:27:08', '2022-05-18 21:27:08'),
(5, 'helmy albab', '205150701111018', 'teknologi informasi', 'kapan info jadwal kkn dilakukan oleh angkatan 2020?', '2022-05-19 01:21:09', '2022-05-19 01:21:09'),
(6, 'helmy albab', '205150701111018', 'teknologi informasi', 'kapan info jadwal kkn dilakukan oleh angkatan 2020?', '2022-05-19 01:21:26', '2022-05-19 01:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `topnews`
--

CREATE TABLE `topnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topnews`
--

INSERT INTO `topnews` (`id`, `judul`, `excerpt`, `body`, `pj`, `created_at`, `updated_at`) VALUES
(1, 'Dewa Ngoding', 'Dewa Ngoding 2022 (Dekanat-Mahasiswa Ngobrol dan Diskusi Penting)', 'Aspirasi mahasiswa sangat penting dalam keberlangsungan kebijakan kampus. Oleh karena itu, kami memberikan wadah bagi mahasiswa untuk menyampaikan aspirasinya dalam bentuk konsolidasi terbuka.⁣\r\n⁣\r\nKonsolidasi terbuka merupakan tahapan dari Dewa Ngoding (Dekanat - Mahasiswa Ngobrol dan Diskusi Penting) yang akan dihadiri oleh mahasiswa FILKOM dan nantinya akan diteruskan ke tahapan audiensi bersama Dekanat.⁣\r\n⁣\r\nPenjelasan lebih lanjut mengenai apa itu Dewa Ngoding dan alurnya dapat dilihat pada postingan di atas.', 'Raihan Alfarisi', '2022-05-18 23:08:02', '2022-05-18 23:08:02'),
(2, 'Penyesuaian Jam Perkuliahan', 'Setelah berakhirnya bulan Ramadhan, jam perkuliahan akan mengalami penyesuaian kembali seperti jadwal semula.', 'perkuliahan yang dilaksanakan secara luring di kampus, tetap hanya diselenggarakan maksimum 1 jam di dalam kelas. (Gambar 1). Namun, untuk sesi tertentu yang tertera melebihi 1. untuk mata kuliah terjadwal dalam minggu luring, maka pelaksanaan kuliah menggunakan “jam luring”, serta ruangan yang dapat dilihat pada akun SIAM/SIADO (mohon selalu mengecek ruangan berkala, karena dimungkinkan ada penyesuaian ruangan jika terjadi bentrok) jam, maka jam mulai dan jam selesai dapat diatur sesuai kesepakatan kelas.', 'Raihan Alfarisi', '2022-05-18 19:23:20', '2022-05-18 19:23:20'),
(3, 'Pojok Beasiswa', 'OJOK BEASISWA | Beasiswa KAMI Foundation', 'Beasiswa KAMI Foundation merupakan bentuk kontribusi nyata KAMI Foundation sebagai NGO yang berfokus pada pengembangan pemuda/i Indonesia untuk mendukung pendidikan di Indonesia melalui tunjangan belajar dan pengembangan kompetensi diri, khususnya pengembangan softskill dan hardskill.', 'reihan', '2022-05-18 19:24:49', '2022-05-18 19:24:49'),
(4, 'Krisis Center UKT', 'CRISIS CENTER UKT | Informasi UKT dan Bantuan Keuangan bagi Mahasiswa Baru Jalur SNMPTN⁣⁣', 'Pada tanggal 28 April 2022 yang lalu, mahasiswa baru jalur SNMPTN sudah dapat melihat pengumuman penetapan UKT jalur SNMPTN 2022/2023 pada tautan berikut ini: 🔗 https://selma.ub.ac.id/pengumuman-penetapan-uang-kuliah-tunggal-ukt-jalur-snmptn-2022-2023/. Mulai hari Senin, 9 Mei 2022 mahasiswa baru jalur SNMPTN dapat melakukan pengajuan permohonan perubahan kelompok dan pembayaran uang kuliah tunggal (UKT) secara mengangsur pada laman berikut ini : 🔗 https://bantuankeuangan.ub.ac.id', 'Munzir Tamam', '2022-05-18 19:29:28', '2022-05-18 19:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Helmy Fadlail Albab', 'helmy', 'helmyfadlail.5@gmail.com', '$2y$10$W7OyUDwVbd79vX31k9Nni.e1HhRfsbh74VqEptcMBzms8uTzinRK2', NULL, '2022-05-18 17:20:41', '2022-05-18 17:20:41'),
(7, 'raihannn alfarisi', 'reihan', 'raihan.34@gmail.com', '$2y$10$BqusCALfNU3eMPX5D/i0uOm3gdUEhNYocrScyE6//7asgUqUIPJ2m', NULL, '2022-05-18 19:04:11', '2022-05-18 19:04:11'),
(9, 'Kian Santang', 'kiaann', 'kiannsantang.5@gmail.com', '$2y$10$ttoH569YyiPWJdWjLJCXE.mxgdDwQm5zga9ujgsJP0j5KUqh2/MWG', NULL, '2022-05-19 01:16:02', '2022-05-19 01:16:02'),
(10, 'Munzir Tamam', 'tamam', 'tamam.23@gmail.com', '$2y$10$BBgIotSr5DN.OGQpPUNfFep1J/3z.lpRaj5Jk1QJFTfMelVjauTqi', NULL, '2022-05-19 01:17:26', '2022-05-19 01:17:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirasis`
--
ALTER TABLE `aspirasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawabans`
--
ALTER TABLE `jawabans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topnews`
--
ALTER TABLE `topnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirasis`
--
ALTER TABLE `aspirasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawabans`
--
ALTER TABLE `jawabans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `topnews`
--
ALTER TABLE `topnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
