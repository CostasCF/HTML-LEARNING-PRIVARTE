-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 06 Δεκ 2019 στις 19:57:36
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
  `age` int(3) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `payment`, `email`, `age`, `phone`, `subject`, `date`, `address`) VALUES
(20, 'KOSTAS', 'kwdikos1', 'VISA/MASTERCARD', 'kkalo878@gmail.com', 30, 6938787881, 'ΤΥΧΑΙΟΣ ΚΕΙΜΕΝΟ', '2001-12-11', 'ΑΝΩΓΕΙΩΝ 93'),
(21, 'User1', 'monoLatinikoAlfavito', 'ΜΕΤΡΗΤΑ', 'user878@gmail.com', 18, 2105898745, 'ΤΥΧΑΙΟ ΚΕΙΜΕΝΟ.ΤΥΧΑΙΟ ΚΕΙΜΕΝΟ.ΤΥΧΑΙΟ ΚΕΙΜΕΝΟΤΥΧΑΙΟ ΚΕΙΜΕΝΟ ΤΥΧΑΙΟ ΚΕΙΜΕΝΟ ΤΥΧΑΙΟ ΚΕΙΜΕΝΟ ', '2222-01-01', 'Perikleous 400'),
(22, 'kostas', 'monoLatinikoAlfavito', 'ΜΕΤΡΗΤΑ', 'kkalo833378@gmail.com', 30, 6938787881, 'some random text', '2001-12-11', 'ΑΝΩΓΕΙΩΝ 93333'),
(23, 'Aggelos', 'monoLatinikoAlfavito', 'ΜΕΤΡΗΤΑ', 'aggelos878@gmail.com', 19, 6938787881, 'Τυχαιο Κειμενο2', '2002-12-11', 'ΑΝΩΓΕΙΩΝ 93'),
(24, 'Γιωργος', 'monoLatinikoAlfavito', 'VISA/MASTERCARD', 'giorgos878@gmail.com', 55, 6938387881, 'Τυχαιο Κειμενο2', '2002-12-11', 'ΑΝΩΓΕΙΩΝ 333'),
(25, 'Μιχαλης', 'monoLatinikoAlfavito', 'ΜΕΤΡΗΤΑ', 'michalis878@gmail.com', 99, 693822281, 'Τυχαιο Κειμενο22', '2002-02-11', 'ΑΝΩΓΕΙΩΝ 3223');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
