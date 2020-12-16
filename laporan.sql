-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 06:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(30) NOT NULL,
  `lampiran` varchar(70) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `isi`, `aspek`, `lampiran`, `created_at`, `updated_at`) VALUES
(31, 'afifhibatullah', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam doloremque nesciunt repudiandae quaerat ullam unde ab magnam? Libero laborum soluta excepturi quis ullam aut numquam nesciunt. Totam non assumenda rem qui repellat? Incidunt repellat dicta, explicabo dolor ab quaerat alias maxime, fugit quidem consequatur exercitationem. Corrupti pariatur voluptatum iusto enim?', 'Mahasiswa', 'usecase.jpg', '2020-12-16 10:47:16', '2020-12-16 10:47:16'),
(32, 'erik', 'LAPOR!LAPOR!LAPOR!LAPOR!LAPOR!LAPOR!LAPOR!LAPOR!', 'Dosen', '', '2020-12-16 23:59:19', '2020-12-16 23:59:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
