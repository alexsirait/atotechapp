-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 08:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ale_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `image` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `masuk` text DEFAULT NULL,
  `keluar` text DEFAULT NULL,
  `total` text DEFAULT NULL,
  `uuid` text DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`image`, `name`, `masuk`, `keluar`, `total`, `uuid`, `date`) VALUES
('https://www.sentrarak.com/wp-content/uploads/2017/09/stok-barang.jpg', 'Kardus Bagus', '5', '2', '3', 'be3c63cb2d7d9ca29f097b8f4794ad32', '2024-06-15'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY7LM9KCFr8Yor33YysZiXUYBbTIfueBwA0Q&s', 'Monitor', '8', '2', '6', 'd58260ed0f58b3774d312a27f8106b3c', '2024-06-15'),
('https://www.bhinneka.com/blog/wp-content/uploads/2022/06/pengertian-barang.jpg', 'PC Intel Core i7', '8', '1', '7', '436b60ecd0f0cd91371d64a855688a93', '2024-06-15'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSgX-hCP--CepKca2Kr5ToswPS0poV57k8hA&s', 'Keyboard Noir N1', '5', '2', '3', '1f03e489590c09fae41b245b16bd5ffd', '2024-06-15'),
('https://poslogistics.co.id/wp-content/uploads/2023/09/packing-barang-scaled.jpg', 'HP Samsung S23 Ultra +', '3', '2', '1', '964c85eb66c1422eced298ec08204953', '2024-06-15'),
('https://www.hashmicro.com/id/blog/wp-content/uploads/2022/11/stok-barang-itu.jpg', 'Mouse Logitech S24+', '9', '1', '8', '1a83b927973dcb594b2d4e9756895794', '2024-06-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
