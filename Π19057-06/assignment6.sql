-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 06 Δεκ 2019 στις 01:16:03
-- Έκδοση διακομιστή: 10.4.8-MariaDB
-- Έκδοση PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `assignment6`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `payment` char(30) NOT NULL,
  `email` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `payment`, `email`, `age`, `phone`, `subject`, `date`, `address`) VALUES
(1, 'kosras', '565436', 'm', 'kkalo878@gmail.com', 978, 6938787881, '', '0000-00-00', NULL),
(2, 'ργρεςγ', 'σδγ', 'm', 'kalokostas35@gmail.com', 978, 6938, '', '0000-00-00', NULL),
(3, 'ργρεςγ', 'hjlkjklh', 'm', 'lhj@gmail.com', 978, 6938787881, '', '0000-00-00', NULL),
(4, 'g', 'g', 'm', 'kf78@gmail.com', 978, 33333, '', '0000-00-00', NULL),
(5, 'ddddd', 'ddddd', 'VISA/MASTERCARDCASH', 'e@gmail.com', 978, 6938787881, '', '0000-00-00', NULL),
(6, 'Κωνσταντινος Καλογερπουλος', '9999', 'VISA/MASTERCARDCASH', 'kk1878@gmail.com', 30, 6938787881, '', '0000-00-00', NULL),
(7, 'KOSTAS121', '55555555', 'VISA/MASTERCARDCASH', 'kk6@gmail.com', 18, 6938787881, '', '0000-00-00', NULL),
(8, 'KOSTAS121', '22222', 'VISA/MASTERCARDCASH', 'kkalo4@gmail.com', 18, 233333, '', '0000-00-00', NULL),
(9, 'kiostas', '2222', 'VISA/MASTERCARDCASH', 'k33878@gmail.com', 0, 30, '6938787881', '0000-00-00', NULL),
(10, 'KOSTAS1211', '1111111', 'CASH', 'k333333378@gmail.com', 0, 30, '6938787881', '0000-00-00', NULL),
(11, 'KOSTAS1211', '33333334', 'CASH', 'k33333gg3378@gmail.com', 30, 6938787881, 'yoofgggggggasfdgaegaergagagraa', '0000-00-00', NULL),
(12, 'kostas', '33333', 'CASH', 'kka3333333378@gmail.com', 60, 6938787881, 'eeeeeee', '0000-00-00', NULL),
(13, 'FUCK', '111111111111111', 'CASH', 'k333333333333333333878@gmail.com', 18, 6938787881, 'FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF', '2019-12-02', NULL),
(14, 'nnnnnnnnnnnnnnnn', '3333333333333333333', 'CASH', 'a3333333333444444444444444340@gmail.com', 60, 33333333333333, 'nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '2001-12-11', NULL),
(15, 'tyuk', 'fyukuykyky', 'kkalofgyhjfgyhjhfgyhjfgyhjfgyj', 'fghjfghjftgujgtju', 0, 234234, '30', '0000-00-00', 'CASH'),
(16, 'tyuk', 'fyukuykyky', 'kkalofgyhjfgyhjhfgyhjfgyhjfgyj', 'fghjfghjftgujgtju', 0, 234234, '30', '0000-00-00', 'CASH');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
