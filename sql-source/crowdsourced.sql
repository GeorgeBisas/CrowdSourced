-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3306
-- Χρόνος δημιουργίας: 20 Σεπ 2020 στις 13:44:53
-- Έκδοση διακομιστή: 5.7.23
-- Έκδοση PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `crowdsourced`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `export_data`
--

DROP TABLE IF EXISTS `export_data`;
CREATE TABLE IF NOT EXISTS `export_data` (
  `user` varchar(250) NOT NULL,
  `heading` int(20) NOT NULL,
  `type_of_activity` varchar(250) NOT NULL,
  `confidence` int(3) NOT NULL,
  `timestampMs` int(20) NOT NULL,
  `verticalAccuracy` int(9) NOT NULL,
  `velocity` int(9) NOT NULL,
  `accuracy` int(9) NOT NULL,
  `longitudeE7` int(9) NOT NULL,
  `latitudeE7` int(9) NOT NULL,
  `altitude` int(9) NOT NULL,
  `timestampMs1` int(20) NOT NULL,
  `id` int(20) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `fileup`
--

DROP TABLE IF EXISTS `fileup`;
CREATE TABLE IF NOT EXISTS `fileup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `jsonfile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `json_data`
--

DROP TABLE IF EXISTS `json_data`;
CREATE TABLE IF NOT EXISTS `json_data` (
  `user` varchar(250) NOT NULL,
  `heading` int(20) NOT NULL,
  `type_of_activity` varchar(250) NOT NULL,
  `confidence` int(3) NOT NULL,
  `timestampMs` int(20) NOT NULL,
  `verticalAccuracy` int(9) NOT NULL,
  `velocity` int(9) NOT NULL,
  `accuracy` int(9) NOT NULL,
  `longitudeE7` int(9) NOT NULL,
  `latitudeE7` int(9) NOT NULL,
  `altitude` int(9) NOT NULL,
  `timestampMs1` int(20) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user_type` varchar(250) NOT NULL,
  `password_1` varchar(250) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `user_type`, `password_1`) VALUES
('U2ZjVEVWN09yUENvbVdlREx5bVJybXV6YW95SFpaNk55a1ZKSDlDVlI5WT0=', 'george', 'george@email.com', 'admin', '915fa80cfb68ad536698927b30317861'),
('bnVWKzZJR3M3bm5QUHpaUW9vK1NqUT09', 'user1', 'user1@email.com', 'user', 'eefccffa015342de2118bb976b0bfa2b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
