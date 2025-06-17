-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2025 pada 06.32
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuri_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nuri_artikel`
--

CREATE TABLE `nuri_artikel` (
  `id` int(11) NOT NULL,
  `tag_content` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nuri_artikel`
--

INSERT INTO `nuri_artikel` (`id`, `tag_content`, `title`, `penulis`, `slug`, `content`, `image`, `created_at`) VALUES
(27, 'prestasi', 'juara 2 drumband tingkat devisi wali kota', 'admin', 'juara-2-drumband-tingkat-devisi-military-style', 'blaalallala asuwww', '1749029473_free-fire-wallpaper-24.jpg', '2025-06-02 11:41:29'),
(28, 'info spmb', 'info spmb smk nurul imanssss tahun ajaran baru', 'kwkwkwkkw', 'info-spmb-smk-nurul-imanssss-tahun-ajaran-baru', '  cbd cbd cbd', '1749029695_ab3e078c-5329-4630-965c-88509c5e9c38.jpg', '2025-06-02 11:42:17'),
(29, 'prestasi', 'juara 1 tingkat international cabang lomba futsal', 's dbnsa dns d', 'juara-1-tingkat-international-cabang-lomba-futsal', 'dndbsdbsd ', '1749029665_Juara-Axis-Cup-Free-Fire-ONIC-Olympus.webp', '2025-06-02 11:43:15'),
(30, 'sejarah', 'ini adalah sejarah nurul iman (hanya tester)', 'admin', 'ini-adalah-sejarah-nurul-iman-hanya-tester', 'tester', 'img/Bright Afternoon Sun (1).webp', '2025-06-03 00:27:10'),
(31, 'visi misi', 'ini adalah misi visi nurul iman (hanya tester)', 'admin', 'ini-adalah-misi-visi-nurul-iman-hanya-tester', 'tester', 'img/card2.webp', '2025-06-03 00:28:05'),
(32, 'identitas', 'ini adalah identitas nurul iman (hanya tester)', 'admin', 'ini-adalah-identitas-nurul-iman-hanya-tester', 'tester', 'img/un livre ouvert et personnage dans un style dessin.webp', '2025-06-03 00:29:43'),
(33, 'terkini', 'kegiatan senam bersama guru di smk nurul iman', 'tester', 'kegiatan-senam-bersama-guru-di-smk-nurul-iman', 'https://chatgpt.com/', '1749029721_Cuplikan layar 2025-05-18 223318.png', '2025-06-03 09:59:21'),
(34, 'terkini', 'kegiatan makan gratis dari pak ero yang di selenggarakan langsung pada 20 juni', 'admin', 'kegiatan-makan-gratis-dari-pak-ero-yang-di-selenggarakan-langsung-pada-20-juni', 'Cek info lengkap di <a href=\"https://example.com\" target=\"_blank\">situs ini</a>.\r\n', '1749029738_Cuplikan layar 2024-12-06 205308.png', '2025-06-03 10:13:18'),
(40, 'prestasi', 'juara 2 dunia cabor futsal 2025', 'admin', 'juara-2-dunia-cabor-futsal-2025', 'tester doang', '1749135006_Info-Akpol.png', '2025-06-05 21:48:58'),
(41, 'terkini', 'kegiatan senam bersama guru di smk nuri', 'admin', NULL, 'hanya uji coba doang ya', '1749029473_free-fire-wallpaper-24.jpg', NULL),
(43, 'terkini', 'artikel kegiatan 11 rpl 2', 'admin', 'artikel-kegiatan-rpl-2', 'ini tester doang bray omeyy', 'img/2fa8ddb7-6a2c-4c69-97fc-1851e0bea5bd.jpg', '2025-06-17 09:41:57'),
(44, 'terkni', 'tester doang', 'admin', 'tester-doang', 'tester bray', '1750128502_diamond.jpg', '2025-06-17 04:48:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nuri_artikel`
--
ALTER TABLE `nuri_artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nuri_artikel`
--
ALTER TABLE `nuri_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
