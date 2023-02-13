-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 11:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `semester` int(2) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `semester`, `gambar`) VALUES
(1, 'Mohamad Hasan Bisri', '1234567890', 'bisri171998@gmail.com', 'Teknik Informatika', 8, 'gambar-1.png'),
(2, 'Firman Dwi Ardiansyah', '1112223334', 'ardi@gmail.com', 'Teknik Mesin', 5, 'gambar-2.png'),
(4, 'Darwin Adwaya', '3332224441', 'darwin@gmail.com', 'Ilmu Peternakan', 5, 'gambar-3.png'),
(5, 'Ali Masyhuda', '998665332', 'hudha@gmail.com', 'Teknik Sipil', 7, 'gambar-4.jpg'),
(6, 'Fajar Agus Kurniawan', '789554226', 'fajar@gmail.com', 'Management', 10, 'gambar-5.jpg'),
(7, 'Khasbi Akhrori', '996225887', 'khasbi@gmail.com', 'Teknik Informatika', 5, 'gambar-6.jpg'),
(8, 'Bagus Eka', '556996325', 'bagus@gmail.com', 'Pendidikan Agama', 9, 'gambar-7.jpg'),
(11, '77665544', 'Spiderman', 'spiderman@marvel.com', 'Perfileman', 10, '63e9be89cd2c8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
