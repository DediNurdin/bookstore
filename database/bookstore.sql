-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 11:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(10) NOT NULL,
  `book_title` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `publisher` varchar(30) NOT NULL,
  `book_category` varchar(15) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_title`, `author`, `publisher`, `book_category`, `price`) VALUES
(3, 'Jangan Kau Pergi', 'Haris Tanjung Anarki', 'Pt. Gramedia', 'Novel', 65000),
(4, 'Tamu Tak Diundang', 'Gading Suryana', 'Pt. Gramedia', 'Novel', 85000),
(5, 'Pengejar Mimpi', 'Jamal Abidin', 'Pt. Gramedia', 'Novel', 55000),
(6, 'Padamu Aku', 'Fajar Nugros', 'Pt. Gramedia', 'Novel', 85000),
(7, 'Bawang Merah Bawang Putih', 'Gading Suryana', 'Pt. Gramedia', 'Cerita Rakyat', 85000),
(8, 'Legenda Tangkubang Parahu', 'Haikal Amal', 'Pt. Gramedia', 'Cerita Rakyat', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `transaction_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `book_id` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` varchar(15) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`transaction_id`, `date`, `book_id`, `quantity`, `price`, `total_price`) VALUES
(2, '2021-04-02', '002', 1, '85000', 85000),
(3, '2021-04-03', '003', 2, '55000', 55000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'dedinurdin', '25d55ad283aa400af464c76d713c07ad', 'Dedi Nurdiansyah S.Tr, Kom.', 'admin'),
(3, 'silvia', '25d55ad283aa400af464c76d713c07ad', 'Silvia Marcelina', 'operator'),
(6, 'taufik', '25d55ad283aa400af464c76d713c07ad', 'Taufik Gamal', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `transaction_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
