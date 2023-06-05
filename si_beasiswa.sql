-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 16.07
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_beasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `nama`, `created_at`, `updated_at`, `users_id`) VALUES
(1, 'Reihan Almas H.', '2023-06-05 04:36:54', '2023-06-05 04:36:54', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif_mhs`
--

CREATE TABLE `alternatif_mhs` (
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatif_mhs`
--

INSERT INTO `alternatif_mhs` (`nim`, `nama`, `email`, `alamat`, `no_hp`, `program_studi`, `gender`, `user_id`) VALUES
('2118019', 'Bintang Astira', 'bintangastira@gmail.com', 'Malang', '085156303821', 'Teknik Informatika', 'Laki-Laki', 4),
('2118056', 'Yedija Adya Vesaka', 'yedijaadya@gmail.com', 'Malang', '08172653416212', 'Teknik Informatika', 'Laki-Laki', 2),
('2118086', 'Reihan Almas Hediawan', 'reihanalmas@gmail.com', 'Pandaan', '085156303821', 'Teknik Informatika', 'Laki-Laki', 6),
('2118087', 'Nuangga Ervin Dwi S', 'anggaervin@gmail.com', 'Sidoarjo', '085156303821', 'Teknik Informatika', 'Laki-Laki', 5),
('2118109', 'Ahmad Alif Al Ayyubi', 'ahmadalif@gmail.com', 'Malang', '085156303821', 'Teknik Informatika', 'Laki-Laki', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `sub_kriteria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_sub_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `kriteria_id`, `sub_kriteria`, `nilai_sub_kriteria`) VALUES
(1, 4, 'D4/Strata I', 1),
(2, 4, 'Dimploma III', 2),
(3, 4, 'SMA', 3),
(4, 4, 'SMP', 4),
(5, 4, 'SD', 5),
(6, 5, 'D4/Strata I', 1),
(7, 5, 'Dimploma III', 2),
(8, 5, 'SMA', 3),
(9, 5, 'SMP', 4),
(10, 5, 'SD', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_kk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_ktp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_kip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_sertifikat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_khs` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `nim`, `file_kk`, `file_ktp`, `file_kip`, `file_foto`, `file_sertifikat`, `file_khs`, `user_id`) VALUES
(1, '2118056', 'assets/files/R8XNMIAroOzwyiw6e1MQme3S1YyPQEivjY0XMVjT.pdf', 'assets/files/1R74mYJiUV0HOdmmjXJsNCewkKa3bPqHRsja1XlN.pdf', NULL, 'assets/img_user/q6DwJXhquzdlFOrvmh501Bn4UfA93gyI5BCDhpdA.jpg', NULL, NULL, 2),
(2, '2118109', 'assets/files/TGYqQ1ZUs9ZBWyEiENiHGJTuTOOBm1aUsxBCVKGq.pdf', 'assets/files/Y1XLwivBw45BeT4s949LtpHt265xDdgZd1oZ7XcD.pdf', 'assets/files/nVUbTi36ETrIN0o6BZTPveLM1hHOHab9EdY7bOeM.pdf', 'assets/img_user/V4N8hdp9reuojNK01OvmEAB0F7m2NVQtMzXh6eG5.jpg', NULL, NULL, 3),
(3, '2118019', 'assets/files/tQsh4SaSYiBbLILnNdSlXOKeeVqm3v2cgT6rojXM.pdf', NULL, NULL, 'assets/img_user/9s6DsHh5TN5QRGhP2BskdmyBtZkkuVw3R7KlK134.jpg', NULL, 'assets/files/4QnolQL4vwZftbioKz5pbjm37MFMPk3zpwYePqlU.pdf', 4),
(4, '2118087', 'assets/files/8X6DN9DcpSvRGqsSwO3nMUPYg84jIWTWnQZfHOLr.pdf', 'assets/files/Ftiu1yuNkalYM2PxhH5ZWVuaOi54WDBjJ2d61b9E.pdf', 'assets/files/qYoIhXHUsPtPxX5umXtbBj8JVhYgZLJG86Pg0FGr.pdf', 'assets/img_user/AJauo75WFuBtMt6m9mNwV9j2bKZAJ7g3UvYLbcj6.jpg', 'assets/files/7Nj9XugwJfp9t7ddFokVLHKOzzpLBSaWdisC930c.pdf', NULL, 5),
(5, '2118086', 'assets/files/ojAzb31O0GEQ0wPzFRys7ocyi3Xc09lKYYAXr3aC.pdf', 'assets/files/jZTQzoyVNCbxjTXQanxcGeDo6f2100WXew12LT10.pdf', 'assets/files/3FNXk13Ug2xTZJCHk6JES5sVhyyYaBgYoh5SjzNz.pdf', 'assets/img_user/Hbob7gocpTKPVEUXB8Uo1SzQBLoD9a48JppbwftC.jpg', 'assets/files/rk6vbNr99Zqe8ZejULjUtL0rdCAjUAezNBcQ4cVG.pdf', 'assets/files/qwHRzKsUJPqsuoP97ZppUdknbd41cazi6awUADVH.pdf', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `income`
--

CREATE TABLE `income` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `sub_kriteria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_sub_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `income`
--

INSERT INTO `income` (`id`, `kriteria_id`, `sub_kriteria`, `nilai_sub_kriteria`) VALUES
(1, 1, '>Rp 2.000.000', 1),
(2, 1, '>Rp 1.500.000-2.000.000', 2),
(3, 1, '>Rp 1.000.000-1.500.000', 3),
(4, 1, '>Rp 500.000-1.000.000', 4),
(5, 1, '<=Rp 500.000', 5),
(6, 2, '>Rp 2.000.000', 1),
(7, 2, '>Rp 1.500.000-2.000.000', 2),
(8, 2, '>Rp 1.000.000-1.500.000', 3),
(9, 2, '>Rp 500.000-1.000.000', 4),
(10, 2, '<=Rp 500.000', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `nama`, `bobot`) VALUES
(1, 'Penghasilan Ayah', '25%'),
(2, 'Penghasilan Ibu', '25%'),
(3, 'Jumlah File Berkas', '10%'),
(4, 'Pendidikan Ayah', '10%'),
(5, 'Pendidikan Ibu', '10%'),
(6, 'Jumlah Tanggungan', '20%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `users_id`, `created_at`, `updated_at`) VALUES
(1, '2118056', 2, '2023-06-05 04:37:56', '2023-06-05 04:37:56'),
(2, '2118109', 3, '2023-06-05 04:43:08', '2023-06-05 04:43:08'),
(3, '2118019', 4, '2023-06-05 04:47:00', '2023-06-05 04:47:00'),
(4, '2118087', 5, '2023-06-05 04:49:41', '2023-06-05 04:49:41'),
(5, '2118086', 6, '2023-06-05 05:10:51', '2023-06-05 05:10:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_26_141510_create_admins_table', 1),
(6, '2023_05_26_141517_create_mahasiswas_table', 1),
(7, '2023_05_31_043039_create_files_table', 1),
(8, '2023_05_31_090128_create_alternatif_mhs_table', 1),
(9, '2023_06_01_102243_create_ortus_table', 1),
(10, '2023_06_01_160432_create_kriterias_table', 1),
(11, '2023_06_02_121425_create_education_table', 1),
(12, '2023_06_02_121452_create_tanggungans_table', 1),
(13, '2023_06_02_121506_create_penilaians_table', 1),
(14, '2023_06_02_125930_create_income_table', 1),
(15, '2023_06_05_030839_create_ranks_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ortus`
--

CREATE TABLE `ortus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ayah` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_ibu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji_ayah` int(11) NOT NULL,
  `gaji_ibu` int(11) NOT NULL,
  `jumlah_tanggungan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ortus`
--

INSERT INTO `ortus` (`id`, `nim`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_hp`, `pendidikan_ayah`, `pendidikan_ibu`, `gaji_ayah`, `gaji_ibu`, `jumlah_tanggungan`, `user_id`) VALUES
(1, '2118056', 'Sueb', 'Rini', 'Wiraswasta', 'Ibu Rumah Tangga', '082146430331', 'SMA', 'SMA', 1500000, 500000, '1-2 Orang', 2),
(2, '2118109', 'Adika', 'Nina', 'Wiraswasta', 'Ibu Rumah Tangga', '082146430331', 'SMA', 'SMA', 2000000, 1000000, '1-2 Orang', 3),
(3, '2118019', 'Bambang', 'Siti', 'Wiraswasta', 'Wiraswasta', '085156303821', 'SMA', 'SMA', 1500000, 1500000, '1-2 Orang', 4),
(4, '2118087', 'Budi', 'Susi', 'Wiraswasta', 'Wiraswasta', '085156303821', 'Dimploma III', 'SMA', 2000000, 1000000, '1-2 Orang', 5),
(5, '2118086', 'Djuhedi', 'Mariyati', 'Wiraswasta', 'Wiraswasta', '085156303821', 'SMA', 'SMA', 1500000, 1500000, '1-2 Orang', 6);

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
-- Struktur dari tabel `penilaians`
--

CREATE TABLE `penilaians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ortu_id` bigint(20) UNSIGNED NOT NULL,
  `file_id` bigint(20) UNSIGNED NOT NULL,
  `nilai_gaji_ayah` double NOT NULL,
  `nilai_gaji_ibu` double NOT NULL,
  `nilai_pendidikan_ayah` double NOT NULL,
  `nilai_pendidikan_ibu` double NOT NULL,
  `nilai_jumlah_tanggungan` double NOT NULL,
  `nilai_jumlah_file` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penilaians`
--

INSERT INTO `penilaians` (`id`, `ortu_id`, `file_id`, `nilai_gaji_ayah`, `nilai_gaji_ibu`, `nilai_pendidikan_ayah`, `nilai_pendidikan_ibu`, `nilai_jumlah_tanggungan`, `nilai_jumlah_file`) VALUES
(2, 1, 1, 0.5, 0.25, 0.4, 0.8, 0.2, 1),
(3, 2, 2, 1, 0.33333333333333, 0.2, 0.6, 0.2, 1),
(4, 3, 3, 0.5, 0.5, 0.4, 0.4, 0.2, 1),
(5, 4, 4, 1, 0.33333333333333, 0.2, 0.6, 0.2, 1),
(6, 5, 5, 0.5, 0.5, 0.4, 0.4, 0.2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranks`
--

CREATE TABLE `ranks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggungans`
--

CREATE TABLE `tanggungans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `sub_kriteria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_sub_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tanggungans`
--

INSERT INTO `tanggungans` (`id`, `kriteria_id`, `sub_kriteria`, `nilai_sub_kriteria`) VALUES
(1, 6, '1-2 Orang', 1),
(2, 6, '3 Orang', 2),
(3, 6, '4 Orang', 3),
(4, 6, '5 Orang', 4),
(5, 6, '> 5 Orang', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$54wzUdWjjjXeCRBN/O60YeLq59n4FxkhErlUU53665SL9uURqKa8i', 'admin', '2023-06-05 04:36:54', '2023-06-05 04:36:54'),
(2, 've.yave', 'yedijaadya@gmail.com', '$2y$10$OvmOmhivnjH3dZIOSkbKUe9h9BsR9/z0K9bhMcN2T1jXIxQd83ZKO', 'mahasiswa', '2023-06-05 04:37:56', '2023-06-05 04:37:56'),
(3, 'ahmadalif_', 'ahmadalif@gmail.com', '$2y$10$GEkncs5zvytq8BmfX0BzIOacBvOTQbOUDJBJTlJQ9Ka0/IJnSkf5W', 'mahasiswa', '2023-06-05 04:43:08', '2023-06-05 04:43:08'),
(4, 'bintangastira_', 'bintangastira@gmail.com', '$2y$10$B1TIBDxohVm6AVdX0HY/IORKa3rlb/ilavVSTgYAnzA09Fg1l.wvy', 'mahasiswa', '2023-06-05 04:47:00', '2023-06-05 04:47:00'),
(5, 'anggaervin_', 'anggaervin@gmail.com', '$2y$10$mDG8CR0lTKNVcK/OUwgq8.ftnIvYVBlgVoeBi2aRSav9qAftO9n8u', 'mahasiswa', '2023-06-05 04:49:41', '2023-06-05 04:49:41'),
(6, 'reihanalmas_', 'reihanalmas@gmail.com', '$2y$10$WDqIXI31puzekCSuVPELDu6JCqwNTHIL7rJpLabIWZT/GDurSiygm', 'mahasiswa', '2023-06-05 05:10:51', '2023-06-05 05:10:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_users_id_foreign` (`users_id`);

--
-- Indeks untuk tabel `alternatif_mhs`
--
ALTER TABLE `alternatif_mhs`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `alternatif_mhs_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mahasiswas_users_id_foreign` (`users_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ortus`
--
ALTER TABLE `ortus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `penilaians`
--
ALTER TABLE `penilaians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penilaians_ortu_id_foreign` (`ortu_id`),
  ADD KEY `penilaians_file_id_foreign` (`file_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanggungans`
--
ALTER TABLE `tanggungans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `income`
--
ALTER TABLE `income`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `ortus`
--
ALTER TABLE `ortus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penilaians`
--
ALTER TABLE `penilaians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanggungans`
--
ALTER TABLE `tanggungans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `alternatif_mhs`
--
ALTER TABLE `alternatif_mhs`
  ADD CONSTRAINT `alternatif_mhs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD CONSTRAINT `mahasiswas_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `penilaians`
--
ALTER TABLE `penilaians`
  ADD CONSTRAINT `penilaians_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `penilaians_ortu_id_foreign` FOREIGN KEY (`ortu_id`) REFERENCES `ortus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
