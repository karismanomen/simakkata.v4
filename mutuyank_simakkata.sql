-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2023 pada 22.42
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
-- Database: `mutuyank_simakkata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(10) NOT NULL,
  `nama_dokumen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Pendamping', '2023-03-01 03:48:01', '2023-03-01 03:48:01'),
(2, 'Tim Pembina Cluster Binaan (TPCB)', '2023-04-12 08:49:31', '2023-04-12 08:49:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klinik`
--

CREATE TABLE `klinik` (
  `id_klinik` int(10) NOT NULL,
  `nama_klinik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_akre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_akre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noizin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pjmutu_klinik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `klinik`
--

INSERT INTO `klinik` (`id_klinik`, `nama_klinik`, `alamat`, `nilai_akre`, `tahun_akre`, `noizin`, `pjmutu_klinik`, `created_at`, `updated_at`) VALUES
(2, 'a', 'asd', 'Dasar', 'asd', 'asd', 'asd', '2023-08-21 03:56:24', '2023-08-21 03:56:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_05_194740_tambah_kolom_baru_to_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendamping`
--

CREATE TABLE `pendamping` (
  `id_pendamping` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_pendamping` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan_akre` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendamping`
--

INSERT INTO `pendamping` (`id_pendamping`, `id_kategori`, `nama_pendamping`, `nip`, `jabatan_akre`, `pangkat`, `telepon`, `email`, `created_at`, `updated_at`) VALUES
(4, 1, 'Dedeh Hartati, Am.Keb, SKM', '196512311986032090', 'Pendamping UKM', 'Penata Tk I/IIId', '085223303052', 'dedehhartati65@gmail.com', '2023-04-02 11:16:54', '2023-06-21 12:13:03'),
(5, 1, 'Nurul Fadhilah, S.ST, M.M', '198907182017042001', 'Pendamping Admen', 'Penata Muda Tk I/IIIb', '085351244488', 'ratunurul24@gmail.com', '2023-04-02 22:08:55', '2023-06-21 12:13:57'),
(6, 1, 'drg Andri Bastian, S.IP', '197907022009021004', 'Pendamping UKP', 'Pembina Tk I/IVb', '081223565929', 'drg.abassambas@gmail.com', '2023-04-02 22:10:11', '2023-06-21 12:14:28'),
(7, 1, 'Leni Nuraeni HR, S.Kep', '197607201997032002', 'Pendamping Admen', 'Penata Tk I/IIId', '08112470278', 'nleni2473@gmail.com', '2023-04-02 22:11:46', '2023-06-21 12:13:15'),
(8, 1, 'Mia Shofia, SKM, SST, MKM', '197605302011012002', 'Pendamping UKM', 'Penata Muda Tk I/IIIb', '08122460660', 'miaherawan@gmail.com', '2023-04-02 22:12:50', '2023-06-21 12:11:22'),
(9, 1, 'dr Hj Analisa', '197410082002122002', 'Pendamping UKP', 'Pembina Tk I/IVb', '081214937891', 'analisaratnasari@gmail.com', '2023-04-02 22:13:46', '2023-06-21 12:14:43'),
(10, 1, 'Ayi Luqmanul Hakim, S.Kep, Ners', '198301072011011003', 'Pendamping Admen', 'Penata Muda Tk I/IIIb', '085323838666', 'ayiluqmanulhakim@gmail.com', '2023-04-02 22:14:51', '2023-06-21 12:12:33'),
(11, 1, 'Otong Kusmana, SKM, MPH', '197604062000121003', 'Pendamping UKM', 'Pembina/IVa', '082121656509', 'otongkusman@gmail.com', '2023-04-02 22:17:05', '2023-06-21 12:13:51'),
(12, 1, 'Wilianto, Amd.KG, SKM, MAP', '197909152010011009', 'Pendamping Admen', 'Penata/IIIc', '082318496062', 'willydinkeskab@gmail.com', '2023-04-02 22:18:38', '2023-06-21 12:13:22'),
(13, 1, 'Esther Rizal, SKM', '197505222005012010', 'Pendamping Admen', 'Penata Tk I/IIId', '085224103639', 'bunda.rara08@gmail.com', '2023-04-02 22:19:34', '2023-06-21 12:14:13'),
(14, 1, 'dr Yunike Rosdiana Herman, MKM', '197006292002122002', 'Pendamping UKP', 'Pembina Tk I/IVb', '085318342550', 'yunikerh@gmail.com', '2023-04-02 22:20:31', '2023-06-21 12:14:35'),
(15, 1, 'Saefullah Darmawan S., S.ST', '198907182017042001', 'Pendamping Admen', 'Pembina/IVa', '081322592570', 'saefullah.darmawan@gmail.com', '2023-04-06 22:50:13', '2023-06-21 12:13:26'),
(16, 1, 'Riksi Tazali. Skep. Ners', '198303082006041008', 'Pendamping UKM', 'Penata Tk I/IIId', '085223042563', 'riksitazali@gmail.com', '2023-04-06 23:59:04', '2023-06-21 12:13:30'),
(17, 1, 'Asep Kristiandi, A.Md.Kep', '198809112015031002', 'Pendamping Admen', 'Pengatur/IIc', '082295270996', 'asepkristiandi13@gmail.com', '2023-06-14 02:33:42', '2023-06-21 12:08:59'),
(18, 1, 'drg Rieni Andriani', '197601192005012005', 'Pendamping UKP', 'Pembina Tk I/IVb', '08112121535', 'rieniandryani@gmail.com', '2023-06-14 02:38:53', '2023-06-21 12:11:35'),
(19, 1, 'dr Dewi Ligiarti', '198105292010012004', 'Pendamping UKP', 'Pembina Tk I/IVb', '085315158666', 'drdewil@yahoo.com', '2023-06-14 02:40:30', '2023-06-21 12:13:09'),
(20, 1, 'Mamat Suhaery, S.Kep, Ners', '196905291989031006', 'Pendamping UKM', 'Pembina Tk I/IVb', '081320754360', 'suhaerymamat@gmail.com', '2023-06-14 02:54:16', '2023-06-21 12:14:05'),
(21, 1, 'Rd Siti Aminah S.tr. Keb', '196809101988032006', 'Pendamping UKM', 'Pembina Tk I/IVb', '081320657307', 'sitiasmutie@gmail.com', '2023-06-14 02:56:11', '2023-06-21 12:13:41'),
(22, 1, 'drg Srie Teresyawati', '197305262005012007', 'Pendamping UKP', 'Pembina Tk I/IVb', '08122733417', 'drg_srie_teresyawati@yahoo.com', '2023-06-14 02:57:52', '2023-06-21 12:11:52'),
(23, 1, 'drg Widi Meipina', '197805032005012007', 'Pendamping UKP', 'Pembina Tk I/IVb', '081321029963', 'widimeipinadrg@gmail.com', '2023-06-14 02:59:14', '2023-06-21 12:14:20'),
(24, 1, 'Candrawati PD, S.IP', '197506131995032001', 'Pendamping UKM', 'Penata Tk I/IIId', '08122177405', 'candrawati251@gmail.com', '2023-06-14 03:00:52', '2023-06-21 12:11:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkm`
--

CREATE TABLE `pkm` (
  `id_pkm` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `nilai_akre` varchar(255) NOT NULL,
  `tahun_akre` varchar(255) NOT NULL,
  `noizin` varchar(255) NOT NULL,
  `kapus` varchar(255) NOT NULL,
  `pjmutu` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pkm`
--

INSERT INTO `pkm` (`id_pkm`, `nama`, `alamat`, `nilai_akre`, `tahun_akre`, `noizin`, `kapus`, `pjmutu`, `created_at`, `updated_at`) VALUES
(1, 'Bantarkalong', 'Jl. Raya Pamijahan No 40, Desa Simpang', 'Paripurna', '2023', '123', 'dr Nono Yuhana', 'dr Nono Yuhana', '2023-04-02 22:47:43', '2023-12-09 21:06:14'),
(2, 'Bojongasih', 'Kp Madur, Desa Bojongasih', 'Paripurna', '2023', '123', 'dr Nono Yuhana', 'dr Nono Yuhana', '2023-04-02 22:51:48', '2023-12-09 21:06:18'),
(3, 'Bojonggambir', 'Kp. Panglayungan, Desa Bojonggambir', 'Paripurna', '2023', '123', 'Asikin, S.Kep.,Ners.', 'Resta Mutiara Yudha, S.Kep.,Ners', '2023-04-02 22:52:57', '2023-12-09 21:06:23'),
(4, 'Ciawi', 'Jl Puskesmas No. 15 Desa Pakemitan, Desa Pakemitan', 'Paripurna', '2023', '123', 'Mamat Suhaery, S.Kep,Ners', 'Mamat Suhaery, S.Kep,Ners', '2023-04-02 23:48:58', '2023-12-09 21:07:02'),
(5, 'Cibalong', 'Jl Karangnunggal No.204, Desa Cibalong', 'Paripurna', '2023', '123', 'dr Jaka hermawan', 'dr Jaka hermawan', '2023-04-02 23:49:31', '2023-12-09 21:07:10'),
(6, 'Cigalontang', 'Jalan Perkantoran No. 38, Desa Jayapura', 'Paripurna', '2023', '123', 'dr Navisatul mutmainah', 'dr Navisatul mutmainah', '2023-04-02 23:50:59', '2023-12-09 21:07:16'),
(7, 'Cikalong', 'Kp. Cilutung, Desa Cikalong', 'Utama', '2023', '123', 'H.Yanyan Cundayana, S.KM.,S.Kep.,Ners', 'H.Yanyan Cundayana, S.KM.,S.Kep.,Ners', '2023-04-02 23:52:44', '2023-12-09 21:07:24'),
(8, 'Cikatomas', 'Jl. Rumah Sakit, Desa Pakemitan', 'Utama', '2018', '123', 'dr Lisva Fauziatul Haqiqiah', 'dr Lisva Fauziatul Haqiqiah', '2023-04-02 23:53:30', '2023-12-09 21:07:31'),
(9, 'Cineam', 'Jl Yogaswara No. 12 Cineam, Desa Cineam', 'Paripurna', '2023', '123', 'Yanyan Gusmana, A.Md.Kep.', 'Yanyan Gusmana, A.Md.Kep.', '2023-04-02 23:55:19', '2023-12-09 21:07:38'),
(10, 'Cipatujah', 'Jl Raya Cipatujah No 123 RT 016 RW 004, Desa Cipatujah', 'Utama', '2023', '123', 'Hj.Sukmanah Mintarsih,S.Kep,Ners', 'Hj.Sukmanah Mintarsih,S.Kep,Ners', '2023-04-02 23:56:11', '2023-12-09 21:07:47'),
(11, 'Cisaruni', 'Jl Batu beulah, no.90,, Desa Cisaruni', 'Utama', '2018', '123', 'drg Andri Bastian, S.IP', 'drg Andri Bastian, S.IP', '2023-04-02 23:59:00', '2023-12-09 21:07:54'),
(12, 'Cisayong', 'Jln.Cisayong No.124, Desa Cisayong', 'Madya', '2018', '123', 'Ayi Nuraisah Nasution, SKM', 'Ayi Nuraisah Nasution, SKM', '2023-04-03 00:01:18', '2023-12-09 21:08:01'),
(13, 'Culamega', 'Jl.Gubernur Sewaka No.02 Culamega, Desa Cikuya', 'Madya', '2019', '123', 'dr Adi Heryadi', 'dr Adi Heryadi', '2023-04-03 00:01:50', '2023-12-09 21:08:13'),
(14, 'Gunungtanjung', 'Jln Raya Gunungtanjung, Desa Cinunjang', 'Utama', '2023', '123', 'Dede Susi Damayanti, S.Tr.Kes', 'Dede Susi Damayanti, S.Tr.Kes', '2023-04-03 00:03:32', '2023-12-09 21:08:21'),
(15, 'Jamanis', 'Jln. Raya Jamanis No. 33 , Desa Sindangraja', 'Paripurna', '2023', '123', 'Cahya Hasbuna,S.Kep,Ners', 'Cahya Hasbuna,S.Kep,Ners', '2023-04-03 00:04:23', '2023-12-09 21:08:29'),
(16, 'Jatiwaras', 'Jl Raya Papayan-Cikatomas, Desa Jatiwaras', 'Paripurna', '2023', '123', 'dr mahidin', 'dr mahidin', '2023-04-03 00:05:52', '2023-12-09 21:08:36'),
(17, 'Kadipaten', 'Jln. Perjuangan, Desa Pamoyanan', 'Paripurna', '2023', '123', 'Drg yunie Arlini Basri', 'Drg yunie Arlini Basri', '2023-04-03 00:06:39', '2023-12-09 21:08:44'),
(18, 'Karangjaya', 'Dusun Sukajaya, Desa Sirnajaya', 'Paripurna', '2023', '123', 'Leli Nurhasanah, Am. Keb', 'Leli Nurhasanah, Am. Keb', '2023-04-03 00:07:15', '2023-12-09 21:08:51'),
(19, 'Karangnunggal', 'Jl Raya Karangnunggal No. 12, Desa Karangnunggal', 'Paripurna', '2023', '123', 'Asep Kristiandi, S.Kep, Ns', 'Asep Kristiandi, S.Kep, Ns', '2023-04-03 00:08:06', '2023-12-09 21:08:56'),
(20, 'Leuwisari', 'Jl. Leuwisari No 25, Desa Arjasari', 'Utama', '2018', '123', 'Endang Haryati S.KM', 'Endang Haryati S.KM', '2023-04-03 01:04:05', '2023-12-09 21:09:02'),
(21, 'Mangunreja', 'Jl. Raya Sukaraja No. 53, Desa Mangunreja', 'Paripurna', '2023', '123', 'Serli Nur Alindra, AM.Keb, SKM', 'Serli Nur Alindra, AM.Keb, SKM', '2023-04-03 01:05:45', '2023-12-09 21:09:07'),
(22, 'Manonjaya', 'Jl Tangsi No 06, Desa Manonjaya', 'Paripurna', '2023', '123', 'Widi Meipina, drg', 'Widi Meipina, drg', '2023-04-03 01:06:38', '2023-12-09 21:09:28'),
(23, 'Pagerageung', 'Jl. Tanjaknangsi No. 23-25 Pagerageung, Desa Pagerageung', 'Madya', '2019', '123', 'Asep Wahyudin, S.Kep.Ners', 'Asep Wahyudin, S.Kep.Ners', '2023-04-03 01:11:11', '2023-12-09 21:09:47'),
(24, 'Pancatengah', 'Jl Raya Pancatengah, Desa Cibongas', 'Madya', '2018', '123', 'Asep Wahyudin, S.Kep.Ners', 'Asep Wahyudin, S.Kep.Ners', '2023-04-03 01:13:11', '2023-12-09 21:09:56'),
(25, 'Parungponteng', 'Kp. Parungponteng 001/001, Desa Parungponteng', 'Paripurna', '2023', '123', 'Wahidah, AMd.Kep', 'Wahidah, AMd.Kep', '2023-04-03 02:13:46', '2023-12-09 21:10:03'),
(26, 'Puspahiang', 'Jl. Raya Puspahiang No 07, Desa Puspahiang', 'Paripurna', '2023', '123', 'Taufik Herawan, AMK', 'Taufik Herawan, AMK', '2023-04-03 02:14:36', '2023-12-09 21:10:11'),
(27, 'Rajapolah', 'Kp. Cibarani, Desa Manggungjaya', 'Paripurna', '2023', '123', 'Ayi Luqmanul Hakim, S.Kep, Ners', 'Ayi Luqmanul Hakim, S.Kep, Ners', '2023-04-03 02:15:08', '2023-12-09 21:10:15'),
(28, 'Salawu', 'Jl. Raya Salawu No.118, Desa Margalaksana', 'Paripurna', '2023', '123', 'dr Verra Hermania Tisnawati', 'dr Verra Hermania Tisnawati', '2023-04-03 02:16:10', '2023-12-09 21:10:20'),
(29, 'Salopa', 'Jln Raya Salopa No.226, Desa Mandalahayu, Kec. Salopa', 'Madya', '', '', '', '', '2023-04-03 02:17:22', '2023-06-14 03:56:52'),
(30, 'Sariwangi', 'Jln Raya Sariwangi No. 35, Desa Sariwangi', 'Paripurna', '2023', '123', 'dr Hj Analisa', 'dr Hj Analisa', '2023-04-03 02:18:54', '2023-12-09 21:10:36'),
(31, 'Singaparna', 'Jl Pancawarna No 7, Desa Singasari', 'Paripurna', '2023', '123', 'Eti Mulyati. Am.Keb', 'Eti Mulyati. Am.Keb', '2023-04-03 02:19:42', '2023-12-09 21:10:41'),
(32, 'Sodonghilir', 'Jln Raya Timur No 18 Sodonghilir, Desa Sodonghilir', 'Paripurna', '2023', '123', 'Asikin, S.Kep.,Ners.', 'Asikin, S.Kep.,Ners.', '2023-04-03 02:20:30', '2023-12-09 21:10:48'),
(33, 'Sukahening', 'Jl. Raya Sukahening No. 105, Desa Calincing', 'Paripurna', '2023', '123', 'dr Hendri Okarisman', 'dr Hendri Okarisman', '2023-04-03 02:21:33', '2023-12-09 21:10:53'),
(34, 'Sukaraja', 'Jl Cibalanarik Sukaraja Kp. Pengkolan, Desa Sukapura', 'Utama', '2023', '123', 'Dewi Irma ilmiyati,S.Tr.Keb,SKM', 'Dewi Irma ilmiyati,S.Tr.Keb,SKM', '2023-04-03 02:22:16', '2023-12-09 21:11:11'),
(35, 'Sukarame', 'Jl Raya Sukarame No 117, Desa Sukarame', 'Paripurna', '2023', '123', 'dr Tatan Rahmat', 'dr Tatan Rahmat', '2023-04-03 02:22:49', '2023-12-09 21:11:17'),
(36, 'Sukaratu', 'Kp Kudang No.58 , Desa Sukaratu', 'Paripurna', '2023', '123', 'Enok Cahyati,S.Tr.Keb', 'Enok Cahyati,S.Tr.Keb', '2023-04-03 02:23:24', '2023-12-09 21:11:23'),
(37, 'Sukaresik', 'Jl. Raya Ciawi-Panumbangan RT 001 RW 002, Desa Sukaratu', 'Paripurna', '2023', '123', 'dr Neng Heni Yudiyanty', 'dr Neng Heni Yudiyanty', '2023-04-03 02:24:28', '2023-12-09 21:11:32'),
(38, 'Tanjungjaya', 'Jl.Cibalanarik Kp.Rengrang 007 , Desa Cibalanarik, Kec. Tanjungjaya', 'Madya', '', '', '', '', '2023-04-03 02:27:00', '2023-06-14 04:07:44'),
(39, 'Taraju', 'Jln Raya Taraju No 149, Desa Taraju', 'Utama', '2023', '123', 'Yanti Marliyanti S,Tr,Keb,.S,KM', 'Yanti Marliyanti S,Tr,Keb,.S,KM', '2023-04-03 02:28:25', '2023-12-09 21:12:03'),
(40, 'Tinewati', 'Jl Garut-Tasikmalaya No 82 Singasari, Desa Singasari', 'Paripurna', '2023', '123', 'dr Hj. Saidah, M.H. Kes', 'dr Hj. Saidah, M.H. Kes', '2023-04-03 02:28:54', '2023-12-09 21:12:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Eu5Sa3ob63Ye2PyJ8QolF7P3qnEIIP5iI43PugOG', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidm9iSmc2SDBTQnd6YTlmU2xqR2hpRVI1WUlRMEtTZ2VQaUFIRW9RUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkU0ZVQXYxcUMvTTZpZEhIMDRrWlVpZWd6SEczbEpXaFZOQzZ2VEd1MWgvZHl5c3owT05aTE8iO30=', 1702158029);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(10) UNSIGNED NOT NULL,
  `nama_aplikasi` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telepon` varchar(255) NOT NULL,
  `path_logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_aplikasi`, `alamat`, `telepon`, `path_logo`, `created_at`, `updated_at`) VALUES
(1, 'SIMAKKATA', 'Komplek Perkantoran Bojongkoneng, Singaparna', '081313145675', '/img/logo-20230406001040.gif', NULL, '2023-04-05 17:10:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpcb`
--

CREATE TABLE `tpcb` (
  `id_tpcb` int(10) UNSIGNED NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_tpcb` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `jabatan_akre` varchar(255) NOT NULL,
  `cluster` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tpcb`
--

INSERT INTO `tpcb` (`id_tpcb`, `id_kategori`, `nama_tpcb`, `nip`, `jabatan_akre`, `cluster`, `pangkat`, `created_at`, `updated_at`) VALUES
(10, 2, 'dr. AA Ahmad Nurdin, M.M', '19710222 200212 1 003', 'Tim Pembina Cluster Binaan', 'Cluster 1', 'Pembina Tk I/IVb', '2023-08-16 04:21:03', '2023-08-16 04:21:03'),
(11, 2, 'Elvin Yuliani, S.Kep, Ners, M.Kep', '19760729 200012 2 003', 'Tim Pembina Cluster Binaan', 'Cluster 1', 'Penata Tk I/IIId', '2023-08-16 04:21:07', '2023-08-16 04:21:07'),
(12, 2, 'Rina Parina, A.MK, S.KM.M.Epid., M.H.Kes', '19751105 199803 2 002', 'Tim Pembina Cluster Binaan', 'Cluster 1', 'Penata Tk I/IIId', '2023-08-16 04:22:36', '2023-08-16 04:22:36'),
(13, 2, 'Maulana Iskandar, A.Md.Kep', '19800317 201410 1 003', 'Tim Pembina Cluster Binaan', 'Cluster 1', 'Penata Tk I/IIId', '2023-08-16 04:21:47', '2023-08-16 04:21:47'),
(14, 2, 'Wahyu Taufik Pirdaus., S.KM', '19790512 200501 1 008', 'Tim Pembina Cluster Binaan', 'Cluster 1', 'Pengatur Tk I/IId', '2023-08-16 04:22:49', '2023-08-16 04:22:49'),
(15, 2, 'Wendi Dinapis, S.ST', '19890202 202012 1 011', 'Tim Pembina Cluster Binaan', 'Cluster 1', 'Penata Muda/IIIa', '2023-08-16 04:22:53', '2023-08-16 04:22:53'),
(16, 2, 'N Elih Harlina, AM.Keb, S.KM, M.H.Kes', '19651228 198603 2 008', 'Tim Pembina Cluster Binaan', 'Cluster 1', 'Pembina/IVa', '2023-08-16 04:22:06', '2023-08-16 04:22:06'),
(17, 2, 'Teni Kristiani, SIP', '19720511 199402 2 001', 'Tim Pembina Cluster Binaan', 'Cluster 1', 'Penata Tk I/IIId', '2023-08-16 04:22:43', '2023-08-16 04:22:43'),
(18, 2, 'Iyen Nuryanah, SST, M.Si', '19700206 199303 2 002', 'Tim Pembina Cluster Binaan', 'Cluster 2', 'Pembina/IVa', '2023-08-16 04:21:50', '2023-08-16 04:21:50'),
(19, 2, 'Priliana Susanty, S.T, M.Si', '19810426 200501 2 012', 'Tim Pembina Cluster Binaan', 'Cluster 2', 'Penata Tk I/IIId', '2023-08-16 04:22:29', '2023-08-16 04:22:29'),
(20, 2, 'Leni Nuraeni HR, S.Kep', '19760720 199703 2 002', 'Tim Pembina Cluster Binaan', 'Cluster 2', 'Penata Tk I/IIId', '2023-08-16 04:21:54', '2023-08-16 04:21:54'),
(21, 2, 'Otong Kusmana, S.KM, M.P.H.', '19760406 200012 1 003', 'Tim Pembina Cluster Binaan', 'Cluster 2', 'Pembina/IVa', '2023-08-16 04:22:09', '2023-08-16 04:22:09'),
(22, 2, 'Nining Ratningsih., Am.Keb', '19751014 200012 2 002', 'Tim Pembina Cluster Binaan', 'Cluster 2', 'Penata Muda Tk I/IIIb', '2023-08-16 04:22:23', '2023-08-16 04:22:23'),
(23, 2, 'Wila Susiani Dewi, SKM', '19751026 200701 2 004', 'Tim Pembina Cluster Binaan', 'Cluster 2', 'Penata Tk I/IIId', '2023-08-16 04:22:56', '2023-08-16 04:22:56'),
(24, 2, 'Rahmaasih S.Abdulgani, S.Kep.Ners', '19710421 199403 2 004', 'Tim Pembina Cluster Binaan', 'Cluster 2', 'Penata Tk I/IIId', '2023-08-16 04:21:31', '2023-08-16 04:21:31'),
(25, 2, 'Asep Abdurahman', '19760611 200801 1 004', 'Tim Pembina Cluster Binaan', 'Cluster 2', 'Pengatur Tk I/IId', '2023-08-16 04:20:42', '2023-08-16 04:20:42'),
(26, 2, 'H. Rd. Mauludin Muchamad, SKM, M.KM', '19720428 199703 1 002', 'Tim Pembina Cluster Binaan', 'Cluster 3', 'Pembina/IVa', '2023-08-16 04:21:23', '2023-08-16 04:21:23'),
(27, 2, 'Hj. Iceu Herlina, Am.Keb.,S.KM', '19770727 201001 2 005', 'Tim Pembina Cluster Binaan', 'Cluster 3', 'Penata/IIIc', '2023-08-16 04:21:44', '2023-08-16 04:21:44'),
(28, 2, 'Tiaraima Sisinta, S.KM, M.K.M.', '19820705 200902 2 010', 'Tim Pembina Cluster Binaan', 'Cluster 3', 'Penata/IIIc', '2023-08-16 04:22:46', '2023-08-16 04:22:46'),
(29, 2, 'Ratih Indriane Septiani, S.Kep,Ners.', '19780909 200902 2 005', 'Tim Pembina Cluster Binaan', 'Cluster 3', 'Penata Tk I/IIId', '2023-08-16 04:22:39', '2023-08-16 04:22:39'),
(30, 2, 'dr. Hj Ratih Tedjasukmana', '19710524 200212 2 005', 'Tim Pembina Cluster Binaan', 'Cluster 3', 'Pembina/IVa', '2023-08-16 04:21:13', '2023-08-16 04:21:13'),
(31, 2, 'Dede Subekti, SPd, M.Kes', '19730101 199403 1 009', 'Tim Pembina Cluster Binaan', 'Cluster 3', 'Pembina/IVa', '2023-08-16 04:20:55', '2023-08-16 04:20:55'),
(32, 2, 'Yusuf Rifai Romli, S.KM, M.Epid.', '19700113 199501 1 001', 'Tim Pembina Cluster Binaan', 'Cluster 3', 'Pembina/IVa', '2023-08-16 04:23:05', '2023-08-16 04:23:05'),
(33, 2, 'Heni Handayani, A.Md, S.KM, M.K.M', '19850325 200801 2 003', 'Tim Pembina Cluster Binaan', 'Cluster 3', 'Penata/IIIc', '2023-08-16 04:21:20', '2023-08-16 04:21:20'),
(34, 2, 'H. Epi Edwar Lutpi, S.KM, M.K.M.', '19700816 198912 1 001', 'Tim Pembina Cluster Binaan', 'Cluster 4', 'Pembina/IVa', '2023-08-16 04:21:17', '2023-08-16 04:21:17'),
(35, 2, 'Elis Supartini, S.IP, M.IP', '19680122 198903 2 005', 'Tim Pembina Cluster Binaan', 'Cluster 4', 'Pembina/IVa', '2023-08-16 04:21:10', '2023-08-16 04:21:10'),
(36, 2, 'Nurul Fadhilah., S.ST,MM', '19890718 201704 2 001', 'Tim Pembina Cluster Binaan', 'Cluster 4', 'Penata Muda Tk I/IIIb', '2023-08-16 04:22:26', '2023-08-16 04:22:26'),
(37, 2, 'Yeti Susanti, S.P, M.Si.', '19830423 200604 2 009', 'Tim Pembina Cluster Binaan', 'Cluster 4', 'Pembina/IVa', '2023-08-16 04:23:02', '2023-08-16 04:23:02'),
(38, 2, 'Asep Yayat Nurhidayat, S.Sos, M.Si', '19760812 201410 1 001', 'Tim Pembina Cluster Binaan', 'Cluster 4', 'Penata Muda Tk I/IIIb', '2023-08-16 04:20:45', '2023-08-16 04:20:45'),
(39, 2, 'Mira Miratul Jannah, S.Si, Apt, M.Farm', '19821221 200902 2 004', 'Tim Pembina Cluster Binaan', 'Cluster 4', 'Pembina/IVa', '2023-08-16 04:22:01', '2023-08-16 04:22:01'),
(40, 2, 'Dedeh Hartati, AM.Keb, S.KM.', '19651231 198603 2 090', 'Tim Pembina Cluster Binaan', 'Cluster 4', 'Penata Tk I/IIId', '2023-08-16 04:20:59', '2023-08-16 04:20:59'),
(41, 2, 'Basuki Kartono, SKM, MKM', '19660220 198903 1 007', 'Tim Pembina Cluster Binaan', 'Cluster 4', 'Pembina/IVa', '2023-08-16 04:20:52', '2023-08-16 04:20:52'),
(42, 2, 'Rahayu Nurhaida M. S.SiT, MM.Kes, M.Si', '198301032006042009', 'Tim Pembina Cluster Binaan', 'Cluster 5', 'Penata Tk I/IIId', '2023-08-16 04:22:32', '2023-08-16 04:22:32'),
(43, 2, 'Neneng Teni Kristinawati, S.Kep Ners.,M.M', '19820411 200902 2 004', 'Tim Pembina Cluster Binaan', 'Cluster 5', 'Pembina/IVa', '2023-08-16 04:22:16', '2023-08-16 04:22:16'),
(44, 2, 'Hendah Mariawati, AM.G.', '19700225 199403 2 005', 'Tim Pembina Cluster Binaan', 'Cluster 5', 'Penata Tk I/IIId', '2023-08-16 04:21:26', '2023-08-16 04:21:26'),
(45, 2, 'Candrawati Puspita Dewi, A.Md.Kes, S.IP.', '19750613 199503 2 001', 'Tim Pembina Cluster Binaan', 'Cluster 5', 'Penata Tk I/IIId', '2023-08-16 04:20:49', '2023-08-16 04:20:49'),
(46, 2, 'Ai Sukmawati, S.KM', '19800809 201410 2 002', 'Tim Pembina Cluster Binaan', 'Cluster 5', 'Penata/IIIc', '2023-08-16 04:20:36', '2023-08-16 04:20:36'),
(47, 2, 'Yati Nurhayati, S.KM', '19830115 201101 2 003', 'Tim Pembina Cluster Binaan', 'Cluster 5', 'Penata Tk I/IIId', '2023-08-16 04:22:59', '2023-08-16 04:22:59'),
(48, 2, 'Idris Maulana, S.Kep.Ners', '19750929 199703 1 001', 'Tim Pembina Cluster Binaan', 'Cluster 5', 'Pengatur Tk I/IId', '2023-08-16 04:21:58', '2023-08-16 04:21:58'),
(49, 2, 'Noneng Sariningsih, S.KM., M.K.M', '19750909 200003 2 002', 'Tim Pembina Cluster Binaan', 'Cluster 5', 'Penata/IIIc', '2023-08-16 04:22:20', '2023-08-16 04:22:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `akun` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `level` tinyint(4) NOT NULL DEFAULT 0,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nip`, `akun`, `email`, `email_verified_at`, `password`, `foto`, `level`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '123', '', 'admin@gmail.com', NULL, '$2y$10$SFUAv1qC/M6idHH04kZUiegzHG3lJWhVNC6vTGu1h/dyysz0ONZLO', '/img/logo-20230402181740.png', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-01 03:46:41', '2023-04-02 11:17:40'),
(2, 'User', '1234', '', 'user@gmail.com', NULL, '$2y$10$SFUAv1qC/M6idHH04kZUiegzHG3lJWhVNC6vTGu1h/dyysz0ONZLO', '/img/logo-20230402181740.png', 2, NULL, NULL, NULL, NULL, NULL, '2023-03-01 03:46:41', '2023-04-02 11:17:40'),
(3, 'TPCB', 'tpcb', '', 'tpcb@gmail.com', NULL, '$2y$10$SFUAv1qC/M6idHH04kZUiegzHG3lJWhVNC6vTGu1h/dyysz0ONZLO', '/img/user.png', 2, NULL, NULL, NULL, NULL, NULL, '2023-03-01 03:46:41', '2023-04-02 11:17:40'),
(4, 'Puskesmas', 'puskesmas', '', 'puskesmas@gmail.com', NULL, '$2y$10$SFUAv1qC/M6idHH04kZUiegzHG3lJWhVNC6vTGu1h/dyysz0ONZLO', '/img/user.png', 2, NULL, NULL, NULL, NULL, NULL, '2023-03-01 03:46:41', '2023-04-02 11:17:40'),
(5, 'Klinik', 'klinik', '', 'klinik@gmail.com', NULL, '$2y$10$SFUAv1qC/M6idHH04kZUiegzHG3lJWhVNC6vTGu1h/dyysz0ONZLO', '/img/user.png', 2, NULL, NULL, NULL, NULL, NULL, '2023-03-01 03:46:41', '2023-06-22 10:04:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `kategori_nama_kategori_unique` (`nama_kategori`);

--
-- Indeks untuk tabel `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pendamping`
--
ALTER TABLE `pendamping`
  ADD PRIMARY KEY (`id_pendamping`),
  ADD UNIQUE KEY `produk_nama_produk_unique` (`nama_pendamping`),
  ADD KEY `produk_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pkm`
--
ALTER TABLE `pkm`
  ADD PRIMARY KEY (`id_pkm`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `tpcb`
--
ALTER TABLE `tpcb`
  ADD PRIMARY KEY (`id_tpcb`),
  ADD UNIQUE KEY `tpcb_nama_tpcb_unique` (`nama_tpcb`),
  ADD KEY `tpcb_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `klinik`
--
ALTER TABLE `klinik`
  MODIFY `id_klinik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pendamping`
--
ALTER TABLE `pendamping`
  MODIFY `id_pendamping` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pkm`
--
ALTER TABLE `pkm`
  MODIFY `id_pkm` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tpcb`
--
ALTER TABLE `tpcb`
  MODIFY `id_tpcb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendamping`
--
ALTER TABLE `pendamping`
  ADD CONSTRAINT `produk_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `tpcb`
--
ALTER TABLE `tpcb`
  ADD CONSTRAINT `tpcb_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
