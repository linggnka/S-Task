-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2021 pada 20.02
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syahbandar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_tangkap`
--

CREATE TABLE `hasil_tangkap` (
  `id_hasil` int(100) NOT NULL,
  `id_kapal` int(100) NOT NULL,
  `id_out` int(100) NOT NULL,
  `jenis_ikan` varchar(100) NOT NULL DEFAULT 'Kosong',
  `volume_timbang` int(100) DEFAULT NULL,
  `volume_estimasi` int(100) DEFAULT NULL,
  `kondisi_ikan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_tangkap`
--

INSERT INTO `hasil_tangkap` (`id_hasil`, `id_kapal`, `id_out`, `jenis_ikan`, `volume_timbang`, `volume_estimasi`, `kondisi_ikan`) VALUES
(4, 529, 6, 'Tuna', 3, 3, 'Fresh'),
(5, 230, 7, 'Tuna', 3, 3, 'Beku'),
(6, 529, 6, 'Peperek', 11, 11, 'Beku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kapal`
--

CREATE TABLE `kapal` (
  `id_kapal` int(100) NOT NULL,
  `nama_kapal` varchar(100) NOT NULL,
  `GT` varchar(100) NOT NULL,
  `kelompok_gt` varchar(100) NOT NULL,
  `alat_tangkap` varchar(100) DEFAULT NULL,
  `alat_tangkap2` varchar(100) DEFAULT NULL,
  `alat_bantu_tangkap` varchar(100) NOT NULL,
  `tanggal_daftar` date NOT NULL DEFAULT current_timestamp(),
  `waktu_daftar` time NOT NULL DEFAULT current_timestamp(),
  `nama_pemilik` varchar(100) NOT NULL,
  `no_hp_pemilik` varchar(50) NOT NULL,
  `nama_nahkoda` varchar(50) NOT NULL,
  `abk` varchar(50) NOT NULL,
  `jenis_kapal` varchar(50) NOT NULL,
  `status_kapal` varchar(50) NOT NULL,
  `panjang_kapal` varchar(50) NOT NULL,
  `mesin_utama` varchar(50) NOT NULL,
  `tanda_selar` varchar(50) NOT NULL,
  `jenis_izin` varchar(50) NOT NULL,
  `izin_WPP` varchar(50) NOT NULL,
  `izin_PP` varchar(50) NOT NULL,
  `izin_AT` varchar(50) NOT NULL,
  `kondisi` varchar(50) DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kapal`
--

INSERT INTO `kapal` (`id_kapal`, `nama_kapal`, `GT`, `kelompok_gt`, `alat_tangkap`, `alat_tangkap2`, `alat_bantu_tangkap`, `tanggal_daftar`, `waktu_daftar`, `nama_pemilik`, `no_hp_pemilik`, `nama_nahkoda`, `abk`, `jenis_kapal`, `status_kapal`, `panjang_kapal`, `mesin_utama`, `tanda_selar`, `jenis_izin`, `izin_WPP`, `izin_PP`, `izin_AT`, `kondisi`) VALUES
(7, 'Abah Jaya 1', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H. Mulyadi', '', 'Bubun', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(8, 'Abah Jaya 3', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H. Mulyadi', '', 'Kakan', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(9, 'Abah Jaya 7', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H. Mulyadi', '', 'Abo', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(10, 'AJB', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Aep Ajib', '', 'Obay', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(11, 'Alasakti 3', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Regi', '', 'Obay', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(12, 'Alasakti 6', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Regi', '', 'Yana', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(13, 'Alasakti 11', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Regi', '', 'Obay', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(14, 'Agis 11', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Bermin', '', 'Obay', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(15, 'A N 6', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Aja', '', 'Ipang', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(16, 'A N 9', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Aja', '', 'Junel', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(17, 'Bati Jaya 3', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H. Unang', '', 'Abah Soleh', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(18, 'Bati Jaya 6', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H. Unang', '', 'Rahman', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(19, 'Bati Jaya 11', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H. Unang', '', 'Kakan', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(20, 'Balak Jaya', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Jumbo', '', 'Iwan', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(21, 'Bagdad 1', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Aka', '', 'Beben', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(22, 'Badar 9', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Parid', '', 'Parid', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(23, 'Cempaka 7', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Hendra/Wawan', '', 'Jae', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(24, 'Harum Mas 7', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Emul', '', 'Ujang', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(25, 'Harum Mas 11', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Emul', '', 'Tatang', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(26, 'Rido Jaya 9', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Aep Ajib', '', 'Aep', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(27, 'Jembar', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Dudin', '', 'Tarjo', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(28, 'Kirana 3', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Uwo Hidayat', '', 'Gandi', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(29, 'Parida', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Parid', '', 'Aep', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(30, 'Komalasari 7', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Komar', '', 'Komar', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(31, 'Loyang Jaya 1', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Suhendi', '', 'Boan', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(32, 'Loyang Jaya 6', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Suhendi', '', 'Gandi', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(33, 'Loyang Jaya 9', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Suhendi', '', 'Nanang', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(34, 'Loyang Jaya 11', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Suhendi', '', 'Usman', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(35, 'Liga Kencana', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Mamat', '', 'Oman', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(36, 'Laksana 1', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Maman', '', 'Usep', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(37, 'Mayasari 6', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Nyai', '', 'Karyo', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(38, 'Mayang Sari 1', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H.Jajat', '', 'Agus', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(39, 'Mayang Sari 2', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H.Jajat', '', 'Usman', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(40, 'Mayang Sari 6', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H.Jajat', '', 'Wawan', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(41, 'Mayang Sari 7', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H.Jajat', '', 'Yanto', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(42, 'Mayang Sari 9', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H.Jajat', '', 'Aep', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(43, 'Mudaroh', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Encep', '', 'Oman', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(44, 'Rangsang 3', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Biat', '', 'Dadan', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(45, 'Samudra 5', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Alex/Uloh', '', 'Tegar', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(46, 'Samudra 7', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Alex/Uloh', '', 'Jajun', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(47, 'Sinar Mas', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'UU Sukarta', '', 'Uyak', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(48, 'Sero Jaya 7', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Bayu', '', 'Oman', '10', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(49, 'Mandarin 9', '5', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'Cuan', '', 'Cuan', '12', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(50, 'Elang 01', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Mas Yadi', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 574\r', '', '', 'Aktif'),
(51, 'Elang 02', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Mas Yadi', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 575\r', '', '', 'Aktif'),
(52, 'RQ Putra', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Ajid', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(53, 'JJ Bahari', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Bunda', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(54, 'Putri Eka 2', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Uloh', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(55, 'CHN 1', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Andu', '', 'Asep', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(56, 'Putri Eka 2', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Uloh', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(57, 'PHN 1', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Dayong', '', 'Dayong', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(58, 'SS 1', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Samsu', '', 'Samsu', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(59, 'SS 2', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Samsu', '', 'Jajang', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(60, 'Pajar', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'H Deden', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(61, 'Permata', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Dede Citra', '', 'Dede', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(62, 'Laut Kidul', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'H Deden', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(63, 'Mekar PB', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Katno', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(64, 'JAP', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Telli', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(65, 'Saraswati', '5', '<5 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', 'Sukar', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(66, 'Rangga Bajang', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Tandim', '', 'Ucen', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(67, 'Bukti Rasa', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Mamat', '', 'Mamat', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(68, 'Bunga Sari 1', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Dodi', '', 'Kasmin', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(69, 'Kasih Ibu', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Adeng', '', 'Adeng', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(70, 'Setia Negara 1', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Tarim', '', 'Tarim', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(71, 'Duriat', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Kudiah', '', 'Nurdin', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(72, 'Damar 9', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Tarmidi', '', 'Mas Sap', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(73, 'Denok', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', '', '', 'Tui', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(74, 'Gembang', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Waryudi', '', 'Waryudi', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(75, 'Harum 9', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Baden', '', 'Baden', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(76, 'Laksana 1', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Casda', '', 'Dadi', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(77, 'Lingsang', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Ade', '', 'hasan', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(78, 'Mulya Jaya', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Raskim', '', 'Raskim', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(79, 'Mugi Jaya', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Musta', '', 'Musta', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(80, 'Nokang', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Rustian', '', 'Rustian', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(81, 'Putri Tunggal', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Raswida', '', 'Bando', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(82, 'Putri Jaya', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Toto', '', 'Toto', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(83, 'Putra Ria', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Warnika', '', 'Farhan', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(84, 'Resi Jaya 2', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Rita', '', 'Sada', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(85, 'Resi Jaya 3', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', '', '', 'Ata', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(86, 'Rahayu', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Ata', '', 'Ata', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(87, 'Rawud', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Catu', '', 'Catu', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(88, 'Sri Tanjung', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Aim', '', 'Aim', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(89, 'Tekun Jaya', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Warini', '', 'Agus', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(90, 'Wisnu Haji', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Wisnu', '', 'Wisnu', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(91, 'Farek Rejeki', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Warijah', '', 'Dede.S', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(92, 'Sekarwangi', '4', '<5 GT', 'Trammel Net', '', '', '0000-00-00', '00:00:00', 'Ebeg', '', 'Ebeg', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(93, 'Komalasari 1', '4', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Jajang Sanusi', '', 'Asep', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(94, 'Komalasari 2', '4', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Jajang Sanusi', '', 'Jajang', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(95, 'Komalasari 3', '4', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Jajang Sanusi', '', 'Usman', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(96, 'Harum 9', '4', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Baden', '', 'Baden', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(97, 'Abah Jaya 6', '3', '<5 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'H. Mulyadi', '', 'Usman', '7', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(98, 'Dapet Putra 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dedi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(99, 'Barcelona', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ano', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(100, 'Herlina Jaya 01', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Johan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(101, 'Hibar Jaya 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Endan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(102, 'Nagasari 9', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Asep Subarkah', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(103, 'Nagasari 4', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Asep Subarkah', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(104, 'Mayang 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Yana', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(105, 'Putra bungsu', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Pardi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(106, 'Bungsu 6', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ayi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(107, 'Putra Cikal MS', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Suryana', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(108, 'Dayang Sari 01', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Iyang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(109, 'Dayang Sari 02', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Iyang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(110, 'Dayang Sari 03', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Iyang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(111, 'Dayang Sari 05', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Iyang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(112, 'Dayang Sari 09', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Iyang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(113, 'Jimat', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Hendra', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(114, 'Adil 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Rendi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(115, 'Raka 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Tarkimin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(116, 'Raka 3', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Tarkimin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(117, 'Putra Laksana 9', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Kaman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(118, 'Bibilintik 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Agus Tubo', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(119, 'Elang Mas', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Andri', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(120, 'Pusaka', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Wawan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(121, 'Maya Bakti', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Pandi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(122, 'Sriayu', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ujang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(123, 'Purug 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Usman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(124, 'Purug 2', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Usman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(125, 'SKJ', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Koni', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(126, 'Cikakap 9', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Syarif', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(127, 'Damar 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Agus Tubo', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(128, 'Sinar Laut 3', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Heri', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(129, 'Popay', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Samsudin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(130, 'Abi', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dadun', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(131, 'Bohay', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Udin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(132, 'Sulung', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Wahyu', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(133, 'Barca 4', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Vera', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(134, 'Lindung Mas', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Waryono', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(135, 'Yuni Sugih 2', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Odoy', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(136, 'Rindu 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dede', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(137, 'Mustika', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Mumus', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(138, 'Mulya Sari 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Uus', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(139, 'Geboy 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Eeng', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(140, 'Mayang Arum', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Badri', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(141, 'M.Ihsan 7', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Nunung', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(142, 'M.Ihsan 6', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Nunung', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(143, 'M.Ihsan 3', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Nunung', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(144, 'Romantis', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ended', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(145, 'Selatan Jaya 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Paisal', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(146, 'Rafanda 9', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Pandi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(147, 'Sakti 9', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Koni', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(148, 'Senang Hati', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Endut', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(149, 'Sinar Ayu', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Docon', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(150, 'Sinar 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Docon', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(151, 'Gabres', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Mamat', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(152, 'Sangka 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dede', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(153, 'Stella 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Heri', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(154, 'Sero Jaya 9', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Endang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(155, 'Bandar Nelayan', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Engkit', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(156, 'Harapan Jaya', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Deni', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(157, 'Rs.Putra 9', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Putra', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(158, 'Rapanda 09', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Paisal', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(159, 'Mulya Sari 2', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Uus', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(160, 'Merak', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Oja', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(161, 'Lain Samanea 2', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'A Wewen', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(162, 'Dua Putra 2', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Jumairi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(163, 'Sanggara 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Angga', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(164, 'Jenggot 1', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Jujun', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(165, 'Jenggot 2', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', '', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(166, 'Sero Muda', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Uding', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(167, 'Aprilia Putra', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Bebey', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(168, 'Mekar Sari 2', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Amuy', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(169, 'Gembira', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Jumari', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(170, 'TGH', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Yadi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(171, 'Putri Jaya', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Agus Sopian', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(172, 'Badal', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Pudoh', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(173, 'Vanesa Bahari', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Drasasti', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(174, 'Bokor mas', '2', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Wanta', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(175, 'Surya Jaya 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Taryono', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(176, 'Surya Jaya 3', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Taryono', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(177, 'Surya Jaya 9', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Taryono', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(178, 'Sinar Pelangi 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ended', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(179, 'Sinar Pelangi 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ended', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(180, 'Sinar Pelangi 3', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ended', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(181, 'Barokah 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Hendar', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(182, 'Gadis 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Hendar', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(183, 'FDL 02', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Harun', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(184, 'FDL 01', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Harun', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(185, 'Berlian Jaya 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Junaedi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(186, 'Berlian Jaya 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Junaedi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(187, 'Bptpk 11', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dolpin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(188, 'Bptpk 12', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Iwan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(189, 'Super Gelatik 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Rijal', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(190, 'Bagja 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Yayan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(191, 'Bagja 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Yayan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(192, 'Gagak 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Herman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(193, 'Gagak 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Herman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(194, 'Nefa', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Oman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(195, 'Naura', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Andri', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(196, 'Nirwana', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dudin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(197, 'Macan 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Amar', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(198, 'Cantik', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ahmad', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(199, 'Fajri 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Agi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(200, 'Fajar 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Amih', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(201, 'Leo Guna 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Gegem', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(202, 'Nurcahya 04', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Agus', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(203, 'Nusantara', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Atut', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(204, 'Kharisma 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Juandi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(205, 'Tongkol 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Nanang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(206, 'JBR', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Herman Arba', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(207, 'Jobong 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Herman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(208, 'Rojul', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Abuy', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(209, 'zelat', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ubuh', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(210, 'Mekar Arum', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Badri', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(211, 'Mekar Sari 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Gegem', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(212, 'Sinar Jaya 04', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ukan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(213, 'Leo Guna 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Gegem', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(214, 'Logam Mas 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Mail', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(215, 'Logam Mas 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Mail', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(216, 'Jati Mulya 9', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Sandino', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(217, 'AN', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Iman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(218, 'Indobahari 03', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Aa', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(219, 'Sinar Agung', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Alam', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(220, 'Reyo D', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Udin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(221, 'Rembulan', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Obes', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(222, 'HND Putra 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Emul', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(223, 'Rahayu', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Usur', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(224, 'Rafael', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Adji', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(225, 'DPTPK 12', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ijar', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(226, 'Rumasa', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Erus', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(227, 'Lengket', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Jana', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(228, 'Luter', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ujang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(229, 'Mandiri', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ece', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(230, '2R', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Suryadi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(231, 'Samudra Biru', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Abuy', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(232, 'Mandala', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Darun', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(233, 'Sulung', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Unang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(234, 'Saluyu 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Udin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(235, 'Saluyu 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', '', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(236, 'Dede Putra', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Udin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(237, 'Dian Jaya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dede Sunarya', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(238, 'Putri Jaya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Agus Sopian', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(239, 'Sinar Pelangi 4', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ended', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(240, 'Sinar Pelangi 5', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ended', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(241, 'Donatur', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Jujun', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(242, 'Jelat', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Aday', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(243, 'Lid Quid', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Heri eming', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(244, 'Sugih/MS', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Wawan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(245, 'Lain Samanea 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'A Wewen', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(246, 'Munajat', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Enden', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(247, 'Mamah', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Lili', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(248, 'Jimat Jaya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Unang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(249, 'Ronggeng', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Epen', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(250, 'Paris', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dedih', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(251, 'Firdaous', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Gopi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(252, 'PBR 5', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Agus Suyanto', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(253, 'Layang', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Aep saepulloh', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(254, 'Al Hikmat', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Engkan Sukandi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(255, 'Sri Mulya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Koti', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(256, 'Asar', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Endin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(257, 'ARPN', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Jaelani', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(258, 'Inter', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dedi Herlandi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(259, 'Jobong 3', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Egi Sugiana', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(260, 'Tunggal Jaya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'PARMAN', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(261, 'Laksana', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Irawan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(262, 'Irut 6', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'U. Iskandar', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(263, 'Jodo', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ijam Sodikin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(264, 'Mekar', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dedih', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(265, 'Polos 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Uus', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(266, 'Polos 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'M. Nut', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(267, 'Laksana', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Maman Sudarman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(268, 'Jembar', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Adih', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(269, 'Harum 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Nenda Handayani', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(270, 'Kumpay', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Kosasih', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(271, 'Berantas', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ade Wandi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(272, 'Lestari', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Titang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(273, 'Joker', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Geri Sadam', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(274, 'Metal jaya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ucup supriatna', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(275, 'Jhon F Kenedy', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'usep', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(276, 'Nusantara', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Kandi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(277, 'Kresna', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Juju Junaedi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(278, 'Sar', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Endin', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(279, 'SA', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'ONONG SUGANDI', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(280, 'Mapat', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'BARNA', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(281, 'Juncu', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Sutarmat', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(282, 'Macan 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ade Samsuri', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(283, 'Sedet', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dede Indra Rumawan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(284, 'Risna', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Suryadi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(285, 'MS', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'WAWAN', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(286, 'Mekar sari', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Deni Hidayat', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(287, 'Pribadi 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Nanang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(288, 'Berkah', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dede', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(289, 'Pajri', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ayi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(290, 'Pelangi 1', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Wawan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif');
INSERT INTO `kapal` (`id_kapal`, `nama_kapal`, `GT`, `kelompok_gt`, `alat_tangkap`, `alat_tangkap2`, `alat_bantu_tangkap`, `tanggal_daftar`, `waktu_daftar`, `nama_pemilik`, `no_hp_pemilik`, `nama_nahkoda`, `abk`, `jenis_kapal`, `status_kapal`, `panjang_kapal`, `mesin_utama`, `tanda_selar`, `jenis_izin`, `izin_WPP`, `izin_PP`, `izin_AT`, `kondisi`) VALUES
(291, 'Cikal', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Aning', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(292, 'Bayu', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ooh Kusmayana', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(293, 'Alam Maya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Pandi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(294, 'Titis', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Iman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(295, 'BH Jaya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Hasan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(296, 'Kumis Jaya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Dedi Mulyadi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(297, 'GSR', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Jujun', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(298, 'Harum 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Usep', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(299, 'NGS', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Yoyong', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(300, 'Sriyana', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Haryono', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(301, 'PARK', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'H. Jaka', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(302, 'Pribadi 2', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ayi Suhendi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(303, 'Jaya 5', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Uho Sunarya', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(304, 'Mulya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ujang Aos', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(305, 'Hegar', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Icang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(306, 'Mustika', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ijah', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(307, 'Raja', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Herman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(308, 'Hurip 3', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Idih', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(309, 'SKJ', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Cucun Mulyana', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(310, 'Polos Jaya', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Endang Suherman', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(311, 'Bagja', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Riki Rikardo', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(312, 'Bintang Terang', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Entang Suherdi', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(313, 'MATRA', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Enjang Tori', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(314, 'Mutiara Bahari', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Asep', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(315, 'Darma Bakti', '1', '<5 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Agus', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(316, 'Dimas', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Badun', '', 'Aris', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(317, 'Bagen', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Sana', '', 'Sana', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(318, 'Bunga', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Yadi', '', 'Tubo', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(319, 'Saridona', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Jayadi', '', 'Yana', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(320, 'Johor', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Ino', '', 'Ino', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(321, 'James Blud', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Kujum', '', 'Jayadi', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(322, 'Jopak', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Sulaeman', '', 'Jayadi', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(323, 'Gembang', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'M. KOSASIH', '', 'Engkus', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(324, 'Polos Jaya', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Usin', '', 'Nada', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(325, 'Mawadah', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Nada', '', 'Nada', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(326, 'Jhon Kenedy 3', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Sulaeman', '', 'Nace', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(327, 'RS 3', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Ujang', '', 'Sahi', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(328, 'Tanpa Nama 2', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Ujang', '', 'Ujang', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(329, 'Tanpa Nama 7', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Arid', '', 'Ujang', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(330, 'Gadis', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Usan', '', 'Ujang', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(331, 'Gembol', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Muhadi', '', 'Dipong', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(332, 'Sribunga', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Yadi', '', 'Ojan', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(333, 'Aliklas 1', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Jana', '', 'Usu', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(334, 'Tanpa Nama 9', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Aep', '', 'Iwan', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(335, 'Tanpa Nama 10', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Dael', '', 'Dael', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(336, 'Tanpa Nama 11', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Tandim', '', 'Tandim', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(337, 'Sipa', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Dendi', '', 'Iwan', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(338, 'Sambeng', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Hassan', '', 'Agus', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(339, 'Srinande', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Ojim', '', 'Ojan', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(340, 'Runcang', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Uung', '', 'Uung', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(341, 'Gelar Jaya', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Agus', '', 'Kaman', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(342, 'U4M/Marsa', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Marpu', '', 'Jujun', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(343, 'Popay', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Syamsudin', '', 'Sukmana', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(344, 'Aprak Jaya', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Trisno Hadi', '', 'Pardi', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(345, 'Harum', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Asen', '', 'Jajun', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(346, 'Geulis Jaya', '1', '<5 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Usan', '', 'Usep', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(347, 'Gembang', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Engkos', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(348, 'Srikandi', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Ojim', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(349, 'Soki', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Soki', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(350, 'TPI', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Enjuh', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(351, 'Asurya Jaya 9', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Taryono', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(352, 'Gairah', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Abeng', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(353, 'Donal', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'H Ocong', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(354, 'Doa Ibu', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Wawan', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(355, 'Dewi Cinta', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Jai', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(356, 'Rujul', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Itang', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(357, 'Padilah', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Padli', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(358, 'Surya Jaya 6', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Taryono', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(359, 'Cinta sih', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Dede', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(360, 'Purug', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Dudung', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(361, 'Melodi', '1', '<5 GT', '', 'Bubu', '', '0000-00-00', '00:00:00', 'Pepen', '', '-', '2', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(362, 'GIP', '6', '5-10 GT', 'Bagan', '', '', '0000-00-00', '00:00:00', '-', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(363, 'Berkah rahayu', '6', '5-10 GT', '', 'Gillnet', '', '0000-00-00', '00:00:00', 'Huldan Arifin', '', 'Ujang', '4', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(364, 'AJB 03', '6', '5-10 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', '', '', '', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(365, 'AJB 09', '6', '5-10 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', '', '', '', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(366, 'Sirojul Palah 1', '6', '5-10 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Engkan S', '', 'Dadan', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(367, 'Sirojul Palah 2', 'c', '5-10 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Engkan S', '', 'Aep', '3', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(368, 'Tuna Jaya 03', '6', '5-10 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', '-', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(369, 'Halwa', '6', '5-10 GT', 'Pancing', '', '', '0000-00-00', '00:00:00', 'Andrean Primasanto', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(370, 'Bintang Utama 88', '8', '5-10 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Sunandang', '', 'Herman', '8', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(371, 'Lancar Jaya 01', '6', '5-10 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ganda', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(372, 'Lancar Jaya 02', '6', '5-10 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Ganda', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(373, 'Nurmala 03', '6', '5-10 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Takimo', '', 'Darsono', '5', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(374, 'Pajar 02', '6', '5-10 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Nendi', '', 'Ecep', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(375, 'Pajar Mas', '6', '5-10 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Nendi', '', 'Ece', '4', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(376, 'Dinas Kelautan', '6', '5-10 GT', 'Payang', '', '', '0000-00-00', '00:00:00', 'DKP', '', '', '', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(377, 'D K Marlin', '6', '5-10 GT', 'Payang', '', '', '0000-00-00', '00:00:00', '-', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(378, 'Gunung Mulya 8', '6', '5-10 GT', 'Payang', '', '', '0000-00-00', '00:00:00', '-', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(379, 'RUH 03', '6', '5-10 GT', 'Payang', '', '', '0000-00-00', '00:00:00', '-', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(380, 'RUH 09', '6', '5-10 GT', 'Payang', '', '', '0000-00-00', '00:00:00', '-', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(381, 'ACR-03', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'H.Ocong Rahmat', '', 'Jani', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(382, 'Adly - 6', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Wiryana', '', 'Iya', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(383, 'AJR 02', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Yusup Jaelani', '', 'Nanang', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(384, 'Andina 11', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Karina Karay', '', 'Cingok', '5', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(385, 'Andina 3', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Karina Karay', '', 'Jenal Abidin', '5', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(386, 'Andina 5', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Karina Karay', '', 'Dakim', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(387, 'Andina 7', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Karina Karay', '', 'Dudih', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(388, 'Andina 9', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Karina Karay', '', 'Oos', '5', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(389, 'AOFA', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Angga', '', 'Ipang', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(390, 'AOFA - 2', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Angga', '', 'Angga', '5', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(391, 'Arwana 9', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'H Dede Ola', '', '-', '0', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(392, 'Arwana II', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Dede Rustiana', '', '-', '0', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(393, 'Bintang Cahaya 88', '8', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Mukito', '', 'Imam Kholidin', '7', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(394, 'Bintang Utara', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Irfan Nuryadin', '', '-', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(395, 'Bogor 08', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Rusman S', '', '-', '', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(396, 'Bogor 09', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Rusman S', '', '-', '', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(397, 'Bogor 11', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Rusman S', '', '-', '', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(398, 'Cahaya Timur 88', '8', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Gunawan Faturahman', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(399, 'Citra Bahari 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Andi Firman', '', '-', '4', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(400, 'Citra Bahari 02', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Andi Firman', '', 'Ukkas', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(401, 'Citra Bahari 07', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Andi Firman', '', 'Lukman', '5', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(402, 'Citra Bahari 08', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Andi Firman', '', 'Andi Akbar', '4', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(403, 'Doa Ibu 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Hj Andi Jumrah', '', 'Comang', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(404, 'Doa Ibu 02', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Hj Andi Jumrah', '', 'Engkus', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(405, 'Doa Ibu 03', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Hj Andi Jumrah', '', 'Ahmad', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(406, 'Doa Ibu 04', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Hj Andi Jumrah', '', 'Haerudin', '5', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(407, 'Dua Anak 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Amiruddin', '', 'Sapri', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(408, 'Hasna Jaya', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Herlambang', '', 'Bompak', '5', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(409, 'Hidayah -1', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Amiruddin', '', 'Jamal', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(410, 'Hidayah -2', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Amiruddin', '', 'Hasan', '3', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(411, 'Hidayah -3', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Amiruddin', '', 'Baharudin', '3', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(412, 'Hidra JM 1', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Lukman', '', '-', '5', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(413, 'Hidra JM 2', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Lukman', '', '-', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(414, 'Indra JM 1', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Irfan Nuryadin', '', 'Herman', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(415, 'Indra JM 2', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Irfan Nuryadin', '', 'Ismail', '7', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(416, 'Jaya Mandiri 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Irfan Nuryadin', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(417, 'Jaya Mandiri 02', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Sulaeman', '', '-', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(418, 'Jaya Mina 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Supendi', '', '-', '5', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 574\r', '', '', 'Aktif'),
(419, 'Jaya Mina 02', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Supendi', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(420, 'Jaya Mitra 888', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Gunawan Faturahman', '', 'Andi', '6', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(421, 'Johor', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ino Sasmita', '', 'Enur Yatna', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(422, 'Johor 03', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ino Sasmita', '', 'EKo', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(423, 'Johor 05', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ino Sasmita', '', 'Ricki', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(424, 'Johor 09', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ino Sasmita', '', 'EKo', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(425, 'Kalebas 46', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'dede Yuyun', '', '-', '0', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(426, 'Kalebas 63', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'dede Yuyun', '', 'Rahmat', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(427, 'Laksana Ibu 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Nendi', '', 'Ancu', '5', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(428, 'Laksana Ibu 03', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Nendi', '', '-', '5', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(429, 'Laksana Ibu 07', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Nendi', '', '-', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(430, 'Laksana Ibu 09', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Nendi', '', 'Rudi', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(431, 'Makmur Jaya 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Leo Barengray', '', 'Leo Barengray', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(432, 'Makmur Jaya 02', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Irfan Nuryadin', '', '-', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(433, 'Makmur Jaya 03', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Irfan Nuryadin', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(434, 'Mandiri Jaya 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ayi Rustandi', '', '-', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(435, 'Mandiri Jaya 02', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ayi Rustandi', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(436, 'Manik Jaya 3', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Imam Sulaeman', '', 'Abah', '4', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(437, 'Manik Jaya 4', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Imam Sulaeman', '', 'Imam', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(438, 'Mudah Jaya 1', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Irfan Nuryadin', '', '-', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(439, 'Mudah Jaya 2', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Mukito', '', '-', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(440, 'Nurmala 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Takimo', '', 'daryanto', '4', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(441, 'RJU 03', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Iwir Wirmana', '', 'Nanang', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(442, 'Ratu Fakhra 1', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ayu Wastiani', '', '', '0', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(443, 'Ratu Fakhra 2', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ayu Wastiani', '', '', '0', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(444, 'Ratu Fakhra 3', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ayu Wastiani', '', '', '0', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(445, 'Ratu Fakhra 4', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ayu Wastiani', '', '', '0', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(446, 'Ratu Fakhra 5', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Ayu Wastiani', '', '', '0', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(447, 'Rianti 05', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Hendi', '', 'Entis Sutisna', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(448, 'Rianti 07', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Hendi', '', 'Dede', '4', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(449, 'Rizki 01', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Samsuryadi', '', 'Johan', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(450, 'Sinar Mas 1', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'UU Sukarta', '', 'Hendi', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(451, 'Sinar Mas 2', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'UU Sukarta', '', 'Nurdin', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(452, 'Sinar Mas 3', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'UU Sukarta', '', 'Yandi', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(453, 'Sinar Mas 5', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'UU Sukarta', '', 'Ismet', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(454, 'Trans Service 05', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'H Dede Ola', '', 'Uyan', '4', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(455, 'Trans Service 03', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'H Dede Ola', '', 'Uyan', '4', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(456, 'Untukmu', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'M.Nur Apandi. S.IP', '', 'Hae', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(457, 'Satria Muda 07', '6', '5-10 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', '-', '', '-', '-', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(458, 'Bahari Exspres 2', '17', '11-20 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Karnoto', '', 'Rosidin', '4', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(459, 'Bahari Exspres 3', '30', '11-20 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Karnoto', '', 'Rosidin', '5', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(460, 'Bahari Exspres 1', '12', '11-20 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Karnoto', '', '-', '0', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(461, 'Basama 05', '19', '11-20 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Djujun Darussalam', '', 'Usin', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(462, 'Tirta kamandanu 9', '17', '11-20 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Djujun Darussalam', '', 'Kaedi', '4', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(463, 'Tirta kamandanu 8', '17', '11-20 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Djujun Darussalam', '', 'Takim', '5', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(464, 'Bogor 8', '16', '11-20 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Rusman Siswanto', '', 'Asep Suwanda', '6', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(465, 'Arwana 11', '16', '11-20 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Dede Rustiana', '', 'Erik Rahman Hakim', '4', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(466, 'Aofa 03', '15', '11-20 GT', 'Pancing Tonda', '', '', '0000-00-00', '00:00:00', 'Angga', '', '-', '6', '', '', '', '', '', 'Daerah', 'S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(467, 'Jaya Mitra 9', '30', '20-30 GT', 'Rawai Tuna (Long Line) (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Mukito', '', 'Agus Giyanto', '11', '', '', '', '', '', 'Daerah', 'ZEEI WPP NRI 573\r', '', '', 'Aktif'),
(468, 'Sri Rahayu', '30', '20-30 GT', '', 'Handline Tuna', '', '0000-00-00', '00:00:00', 'William Kho', '', 'Ramudi', '10', '', '', '', '', '', 'Daerah', 'S. Hindia\r', '', '', 'Aktif'),
(469, 'Karya Maju Samudera X', '30', '20-30 GT', '', 'Handline Tuna', '', '0000-00-00', '00:00:00', 'Sukaryo', '', 'Anton', '10', '', '', '', '', '', 'Daerah', 'S. Hindia\r', '', '', 'Aktif'),
(470, 'Karya Maju Samudera XX', '30', '20-30 GT', '', 'Handline Tuna', '', '0000-00-00', '00:00:00', 'Sukaryo', '', 'Rintoyo', '12', '', '', '', '', '', 'Daerah', 'S. Hindia\r', '', '', 'Aktif'),
(471, 'Karya Maju Samudera XXX', '30', '20-30 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Sukaryo', '', 'Wirido', '13', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(472, 'Bahari Exspres 3', '30', '20-30 GT', 'Jaring Rampus', '', '', '0000-00-00', '00:00:00', 'Karnoto', '', 'Ujang Pei', '4', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(473, 'Harapan Maju', '29', '20-30 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'William Kho', '', 'Sun Maniso', '9', '', '', '', '', '', 'Daerah', 'ZEEI S. Hindia ( Selatan Jawa)\r', '', '', 'Aktif'),
(474, 'Cipta Indah', '25', '20-30 GT', 'Rawai Tuna (Long Line) (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Liana', '', 'Sumari', '10', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(475, 'Cipta Baru Jaya', '25', '20-30 GT', 'Rawai Tuna (Long Line) (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Liana', '', 'Sujoni', '10', '', '', '', '', '', 'Daerah', 'WPP NRI 573\r', '', '', 'Aktif'),
(476, 'Maju Jaya II', '50', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Agun S.Kom', '', 'Drajat', '14', '', '', '', '', '', 'Pusat', 'Laut lepas S. Hindia\r', '', '', 'Aktif'),
(477, 'Roda Terbang 9', '50', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT Mitra Usaha Samudra', '', 'Budi Karna', '13', '', '', '', '', '', 'Pusat', '\"ZEEI WPP NRI 572', ' ZEEI WPP NRI 573\"\r', '', 'Aktif'),
(478, 'Bintang Mas II', '49', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Eko Sapto Nugroho', '15', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(479, 'Mitra Jaya V', '49', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Willy Santoso', '', 'Imron Mashuri', '17', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(480, 'Vallerie II', '49', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Maryono', '', 'Nur Slamet', '17', '', '', '', '', '', 'Pusat', 'S. Hindia ( Barat Sumatera dan Selatan Jawa )\r', '', '', 'Aktif'),
(481, 'Vallerie I', '48', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Maryono', '', 'Harsono', '17', '', '', '', '', '', 'Pusat', 'S. Hindia ( Barat Sumatera dan Selatan Jawa )\r', '', '', 'Aktif'),
(482, 'Jaya Mitra VI', '47', '31-50 GT', '', 'Cash Net', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'M Kian Santang', '12', '', '', '', '', '', 'Pusat', 'WPP NRI 712 ( L. Jawa )\r', '', '', 'Aktif'),
(483, 'Vallerie', '44', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Maryono', '', 'Kusnin', '17', '', '', '', '', '', 'Pusat', 'S. Hindia ( Barat Sumatera dan Selatan Jawa )\r', '', '', 'Aktif'),
(484, 'Bintang Mas Gemilang', '43', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Edi Suyitno', '13', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(485, 'Samudra Jaya 88', '43', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Mulyono', '9', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(486, 'Jaya Mitra 7', '42', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Nur Hakim', '8', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(487, 'Maju Jaya I', '40', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Agun S.Kom', '', 'Rusman', '13', '', '', '', '', '', 'Pusat', 'Laut lepas S. Hindia\r', '', '', 'Aktif'),
(488, 'Jaya Mitra 3', '38', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Much Untung', '11', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(489, 'Cipta Jaya 89', '38', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Suharjo', '9', '', '', '', '', '', 'Pusat', 'S. Hindia ( Barat Sumatera dan Selatan Jawa )\r', '', '', 'Aktif'),
(490, 'Cipta Jaya II', '38', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Subagyo', '11', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(491, 'Cipta Jaya 88', '37', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Riyono', '12', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(492, 'Jaya Mitra 2', '34', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Suprobo', '9', '', '', '', '', '', 'Pusat', 'WPP NRI 573\r', '', '', 'Aktif'),
(493, 'Utomo Luwih Gampang', '34', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'Agun S.Kom', '', 'Nuroso', '13', '', '', '', '', '', 'Pusat', 'Laut lepas S. Hindia\r', '', '', 'Aktif'),
(494, 'Bintang Selatan 88', '33', '31-50 GT', 'Rawai Tuna (Long Line) (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Darsono', '10', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(495, 'Duta Samudera', '98', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Jasman', '', 'Sutrisno', '14', '', '', '', '', '', 'Pusat', 'ZEEI S. Hindia ( Barat Sumatera dan Selatan jawa)\r', '', '', 'Aktif'),
(496, 'Kencana Mas', '97', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT Indojoy Fortuna', '', 'Rasmono', '14', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(497, 'Permata Indah II', '94', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Bali Apandi', '', 'Suherman', '12', '', '', '', '', '', 'Pusat', '\"ZEEI WPP NRI 572', ' ZEEI WPP NRI 573\"\r', '', 'Aktif'),
(498, 'Wijaya Abadi II', '89', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Winarto Wahyudi', '', 'Dato', '14', '', '', '', '', '', 'Pusat', 'ZEEI S. Hindia ( Barat Sumatera dan Selatan jawa)\r', '', '', 'Aktif'),
(499, 'Bintang Barat 88', '88', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Rolly Bin Dapling', '10', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(500, 'Vincent Jaya 03', '88', '51-100 GT', '', 'Handline Tuna', '', '0000-00-00', '00:00:00', 'Hamlid', '', 'Moh Bashir', '16', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(501, 'Mega Samudera', '86', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Jasman', '', 'Turyono', '13', '', '', '', '', '', 'Pusat', '\"ZEEI WPP NRI 572', ' ZEEI WPP NRI 573\"\r', '', 'Aktif'),
(502, 'Kencana Mas II', '78', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT Indojoy Fortuna', '', 'Wahidin', '13', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(503, 'Sahabat Indah', '78', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT Indojoy Fortuna', '', 'Nasocha', '14', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(504, 'Bintang Bahari 88', '72', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Tadrib', '13', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(505, 'Kilat Maju Jaya IX', '70', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT. Kilat Mandiri Jaya', '', 'Warjo', '16', '', '', '', '', '', 'Pusat', 'ZEEI S. Hindia ( Barat Sumatera dan Selatan jawa)\r', '', '', 'Aktif'),
(506, 'Jaya Mitra', '60', '51-100 GT', '', 'Cash Net', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Anwar', '14', '', '', '', '', '', 'Pusat', 'WPP NRI 712 ( L. Jawa )\r', '', '', 'Aktif'),
(507, 'Bintang Timur II.', '60', '51-100 GT', '', 'Cash Net', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Hidayat Gulo', '15', '', '', '', '', '', 'Pusat', 'WPP NRI 712 ( L. Jawa )\r', '', '', 'Aktif'),
(508, 'Berkah Jaya', '59', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Yuwono Mindarto', '', 'Muntasir', '12', '', '', '', '', '', 'Pusat', 'S. Hindia ( Barat Sumatera dan Selatan Jawa )\r', '', '', 'Aktif'),
(509, 'PJM', '59', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Rudianto', '', 'Waskuri', '12', '', '', '', '', '', 'Pusat', 'ZEEI S. Hindia ( Barat Sumatera dan Selatan jawa)\r', '', '', 'Aktif'),
(510, 'Maju Jaya - 168', '59', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Agun S.Kom', '', 'Warso', '14', '', '', '', '', '', 'Pusat', 'Laut lepas S. Hindia\r', '', '', 'Aktif'),
(511, 'Mina Jaya', '58', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Jamaludin', '15', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(512, 'Satria Putra', '58', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT Briliant Maju Sejahtera', '', 'Ahmad Ridho', '12', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(513, 'Mitra Jaya VII', '58', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Willy Santoso', '', 'Kaspendi', '15', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(514, 'Vallerie III', '56', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'Maryono', '', 'Amirudin', '19', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(515, 'Jaya Mitra 5', '55', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT.Multi Samudra Fishindo', '', 'Hantoko', '10', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(516, 'Tiberias', '53', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT. Samudera Pasifik Mandiri', '', 'Ribut', '11', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(517, 'Bumi Saputra 01', '53', '51-100 GT', 'Pancing Ulur', '', '', '0000-00-00', '00:00:00', 'Surjandi', '', 'Tono B Wahidin', '14', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(518, 'Angsal Manfaat', '52', '51-100 GT', 'Rawai Tuna (Long Line)', '', '', '0000-00-00', '00:00:00', 'PT. Samudera Pasifik Mandiri', '', 'Rosaji', '11', '', '', '', '', '', 'Pusat', '\"WPP NRI 572', ' WPP NRI 573\"\r', '', 'Aktif'),
(519, 'Harmoni II', '162', '>100 GT', '', 'Pengangkut', '', '0000-00-00', '00:00:00', 'PT Graha Insan Sejahtera', '', 'Sistoyo', '13', '', '', '', '', '', 'Pusat', '-\r', '', '', 'Aktif'),
(520, 'Samudera Maritim', '195', '>100 GT', '', 'Pengangkut', '', '0000-00-00', '00:00:00', 'PT Mandiri Jaya Samudera', '', 'Puisan', '17', 'Motor Tempel', '', '', '', '', 'Pusat', '-\r', '', '', 'Non Aktif'),
(521, 'Dwi Sukses Lestari', '158', '>100 GT', '', 'Pengangkut', '', '0000-00-00', '00:00:00', 'PT Mandiri Jaya Samudera', '', 'Yanto', '14', '', '', '', '', '', 'Pusat', '-\r', '', '', 'Aktif'),
(522, 'Dwi Sukses Sejati', '142', '>100 GT', '', 'Pengangkut', '', '0000-00-00', '00:00:00', 'PT Mandiri Jaya Samudera', '', 'Abeng', '14', '', '', '', '', '', 'Pusat', '-\r', '', '', 'Aktif'),
(523, 'Citra Express 08', '220', '>100 GT', '', 'Pengangkut', '', '0000-00-00', '00:00:00', 'PT Sepakat Tjcipta Hasil C', '', 'Solih Ginting', '16', '', '', '', '', '', 'Pusat', '-\r', '', '', 'Aktif'),
(524, 'Langsung Jaya Cemerlang', '160', '>100 GT', '', 'Pengangkut', '', '0000-00-00', '00:00:00', 'Anavy', '', 'Kho Lian HUi', '14', '', '', '', '', '', 'Pusat', '-\r', '', '', 'Aktif'),
(525, 'Baruna Jaya Sejahtera', '149', '>100 GT', 'Purse Seine', '', '', '0000-00-00', '00:00:00', 'Ratu Ajeng Citra Ayu', '', 'Sanoro', '36', '', '', '', '', '', 'Pusat', '\"ZEEI WPP NRI 572', ' ZEEI WPP NRI 573\"\r', '', 'Aktif'),
(526, 'Bintang Nusantara', '133', '>100 GT', 'Purse Seine', '', '', '0000-00-00', '00:00:00', 'Ivan Murtiono', '', 'Slamet', '27', '', '', '', '', '', 'Pusat', '\"ZEEI WPP NRI 572', ' ZEEI WPP NRI 573\"\r', '', 'Aktif'),
(527, 'A01', '2', '<5 GT', 'Pancing Ulur', '', '', '2021-09-09', '18:49:00', 'Sangkuriang', '08616223453', 'Popeye', '2', 'Motor Tempel', 'Penangkap', '', '', '', '', '', '', '', 'Non Aktif'),
(529, '01', '2', '<5 GT', '', 'Gillnet', '', '2021-09-09', '18:50:18', 'Sangkuriang', '08616223453', 'Popeye', '2', 'Motor Tempel', 'Penangkap', '', '', '', '', '', '', '', 'Non Aktif'),
(530, 'Samudra Maritim', '2', '<5 GT', 'Jaring Rampus', '', '', '2021-09-17', '17:10:52', 'Malin Kundang', '0861622345', 'Popeye', '4', 'Motor Tempel', 'Penangkap', '', '', '', '', '', '', '', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keberangkatan`
--

CREATE TABLE `keberangkatan` (
  `id_out` int(100) NOT NULL,
  `id_kapal` int(100) NOT NULL,
  `tanggal_out` date NOT NULL,
  `waktu_out` time NOT NULL,
  `no_SPB` varchar(50) NOT NULL DEFAULT 'contoh',
  `tujuan_berangkat` varchar(100) NOT NULL,
  `daerah_asal` varchar(100) NOT NULL,
  `plb_tujuan` varchar(100) NOT NULL,
  `bbm` int(100) NOT NULL,
  `solar` int(100) NOT NULL,
  `minyak_or_gas` int(100) NOT NULL,
  `es` int(100) NOT NULL,
  `air` int(100) NOT NULL,
  `bensin` int(100) NOT NULL,
  `makanan` int(100) NOT NULL,
  `oli` int(100) NOT NULL,
  `garam` int(100) NOT NULL,
  `umpan` int(100) NOT NULL,
  `bekal_lainnya` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keberangkatan`
--

INSERT INTO `keberangkatan` (`id_out`, `id_kapal`, `tanggal_out`, `waktu_out`, `no_SPB`, `tujuan_berangkat`, `daerah_asal`, `plb_tujuan`, `bbm`, `solar`, `minyak_or_gas`, `es`, `air`, `bensin`, `makanan`, `oli`, `garam`, `umpan`, `bekal_lainnya`, `lokasi`, `status`) VALUES
(6, 529, '2021-09-09', '22:51:00', '', 'Menangkap Ikan', 'Pelabuhanratu', 'Pelabuhan Merak', 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, '', 'Kolam 1', 'Sudah'),
(7, 230, '2021-09-01', '22:52:00', '', 'Menangkap Ikan', 'Pelabuhanratu', 'Pelabuhan Merak', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Kolam 1', 'Sudah'),
(9, 529, '2021-09-14', '11:04:00', '', 'Menangkap Ikan', 'Pelabuhanratu', 'Pelabuhan Merak', 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, '', 'Kolam 1', 'Belum'),
(10, 230, '2021-09-14', '11:35:00', '', 'Menangkap Ikan', 'Pelabuhanratu', 'Pelabuhan Merak', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Kolam 2', 'Sudah'),
(11, 97, '2021-09-14', '14:38:00', '', 'Menangkap Ikan', 'Pelabuhanratu', 'Pelabuhan Merak', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Kolam 2', 'Belum'),
(12, 529, '2021-09-09', '15:03:00', '', 'Menangkap Ikan', 'Pelabuhanratu', 'Pelabuhan Merak', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Kolam 2', 'Sudah'),
(13, 97, '2021-09-08', '15:11:00', '', 'Menangkap Ikan', 'Pelabuhanratu', 'Pelabuhan Merak', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Kolam 1', 'Belum'),
(14, 15, '2021-09-17', '18:22:00', '45671', 'Menangkap Ikan', 'Pelabuhanratu', 'Pelabuhan Merak', 5, 5, 5, 5, 5, 5, 100000, 5, 5, 5, 'Nasi', 'Kolam 1', 'Sudah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kedatangan`
--

CREATE TABLE `kedatangan` (
  `id_in` int(100) NOT NULL,
  `id_kapal` int(100) NOT NULL,
  `id_out` int(100) NOT NULL,
  `tanggal_in` date NOT NULL,
  `waktu_in` time NOT NULL,
  `lokasi_in` varchar(50) NOT NULL,
  `jumlah_hari_trip` int(100) NOT NULL,
  `kegiatan` varchar(50) DEFAULT NULL,
  `lainnya` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kedatangan`
--

INSERT INTO `kedatangan` (`id_in`, `id_kapal`, `id_out`, `tanggal_in`, `waktu_in`, `lokasi_in`, `jumlah_hari_trip`, `kegiatan`, `lainnya`) VALUES
(4, 529, 6, '2021-09-14', '17:33:00', 'Kolam 1', 2, 'Bongkar Ikan', ''),
(5, 230, 7, '2021-09-14', '17:52:00', 'Kolam 2', 2, 'Bongkar Ikan', ''),
(6, 529, 12, '2021-09-15', '19:15:00', 'Kolam 1', 6, 'Labuh', ''),
(7, 230, 10, '2021-09-14', '19:43:00', 'Kolam 1', 2, 'Tambat', ''),
(28, 15, 14, '2021-09-17', '22:03:00', 'Kolam 1', 2, 'Bongkar Ikan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tanggal_register` date NOT NULL,
  `waktu_register` time NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `role`, `nama_lengkap`, `email`, `username`, `password`, `tanggal_register`, `waktu_register`, `no_hp`, `alamat`, `avatar`) VALUES
(17, 'Admin', 'Lingga Nazila P.', 'lingga@gmail.com', 'admin2', '$2y$10$VyQsroTx4cdotvuV4PQub.bPRYsze5gjBCBXUEM2gn1XSZW6Uv1s.', '2021-09-05', '11:19:38', '085778344671', 'Cikakak', ''),
(19, 'Admin', 'M. Robbani', 'robbani@gmail.com', 'admin1', '$2y$10$UQkRqjPPMzLPR/W5cchKOOyWveyk2x/vrtuJGPRjich7/1rqMFIvO', '2021-09-05', '12:09:17', '08561300424', 'Pelabuhanratu', ''),
(23, 'User', 'Lingga Nazila P.', 'lingga@gmail.com', 'user1', '$2y$10$RZjOcqXmtmEwMgALav6lxeXrKfNfLbGOzXuqmddOYluXo7Om6Iqwu', '2021-09-07', '01:36:35', '08577xxxxxx', 'Cikakak', ''),
(24, 'User', 'nakochan', 'pitalokaptlk@gmail.com', 'user2', '$2y$10$P7kQ/La0ifGj9RkudNfx6.Ok7Dv98C6RvYRSL1PP77kpM1Hfqqb4y', '2021-09-17', '16:34:41', '08577xxxxxx', 'Sukabumi', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil_tangkap`
--
ALTER TABLE `hasil_tangkap`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_kapal` (`id_kapal`),
  ADD KEY `id_out` (`id_out`);

--
-- Indeks untuk tabel `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indeks untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD PRIMARY KEY (`id_out`) USING BTREE,
  ADD KEY `id_kapal` (`id_kapal`);

--
-- Indeks untuk tabel `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD PRIMARY KEY (`id_in`) USING BTREE,
  ADD KEY `id_kapal` (`id_kapal`),
  ADD KEY `id_out1` (`id_out`) USING BTREE;

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil_tangkap`
--
ALTER TABLE `hasil_tangkap`
  MODIFY `id_hasil` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id_kapal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=531;

--
-- AUTO_INCREMENT untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  MODIFY `id_out` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kedatangan`
--
ALTER TABLE `kedatangan`
  MODIFY `id_in` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_tangkap`
--
ALTER TABLE `hasil_tangkap`
  ADD CONSTRAINT `hasil_tangkap_ibfk_1` FOREIGN KEY (`id_kapal`) REFERENCES `kapal` (`id_kapal`) ON DELETE CASCADE,
  ADD CONSTRAINT `hasil_tangkap_ibfk_2` FOREIGN KEY (`id_out`) REFERENCES `keberangkatan` (`id_out`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD CONSTRAINT `keberangkatan_ibfk_1` FOREIGN KEY (`id_kapal`) REFERENCES `kapal` (`id_kapal`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kedatangan`
--
ALTER TABLE `kedatangan`
  ADD CONSTRAINT `kedatangan_ibfk_1` FOREIGN KEY (`id_kapal`) REFERENCES `kapal` (`id_kapal`) ON DELETE CASCADE,
  ADD CONSTRAINT `kedatangan_ibfk_2` FOREIGN KEY (`id_out`) REFERENCES `keberangkatan` (`id_out`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
