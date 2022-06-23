-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 09:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kursusbinggris`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`) VALUES
(1, 'Taufiq Maulana Ahmad'),
(2, 'Nabil Ahmad Budiman'),
(3, 'Diyas Permana Putri'),
(4, 'Arya Eka Prasetyadi'),
(5, 'Asep Nanang Sugianto');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) DEFAULT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `noinduk` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama_dosen`, `noinduk`) VALUES
(2, 'Nurul', 123456),
(3, 'Ilham', 23423455),
(1, 'Risky Firmansyah', 223442244);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) DEFAULT NULL,
  `Kelas` varchar(4) DEFAULT NULL,
  `hari_tanggal` varchar(25) DEFAULT NULL,
  `Jam` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `Kelas`, `hari_tanggal`, `Jam`) VALUES
(1, 'A304', 'Senin, 14 April 2020', '10.00'),
(2, 'A201', 'Selasa, 15 April 2020', '13.20'),
(3, 'F302', 'Rabu, 16 April 2020', '08.00');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `Nama_Mahasiswa` varchar(50) DEFAULT NULL,
  `no_telp` varchar(12) DEFAULT NULL,
  `tahun_masuk` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_jadwal`, `id_dosen`, `Nama_Mahasiswa`, `no_telp`, `tahun_masuk`) VALUES
(1, 1, 1, 'Muhammad Ivan Arief Rozaki', '087855601325', '2020'),
(2, 1, 1, 'Risky Angga Permana Putra', '085378128312', '2020'),
(3, 1, 1, 'Adhyasta Rozak Abiyyu', '085321234542', '2020'),
(4, 1, 1, 'Alexander Graham Bell', '0854323543', '2020'),
(5, 1, 1, 'Thomas Edison', '085472812394', '2020'),
(6, 2, 2, 'Valentino Rossi', '085321456541', '2021'),
(7, 2, 2, 'Adikusuma', '085453213453', '2021'),
(8, 2, 2, 'Arif Udin', '0855654243', '2021'),
(9, 2, 2, 'Ucok Baba', '08543234342', '2021'),
(10, 2, 2, 'Choirul Muna', '085432132', '2021'),
(11, 3, 3, 'Ahmad Soleh', '0853213123', '2020'),
(12, 3, 3, 'Dimas Kanjeng', '0854323432', '2021'),
(13, 3, 3, 'Satrio Andoyo', '08543934843', '2021'),
(14, 3, 3, 'Makmur', '085439432333', '2020'),
(15, 3, 3, 'Sebastianus Ian Prakoso', '0854393213', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD UNIQUE KEY `uniq_id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
