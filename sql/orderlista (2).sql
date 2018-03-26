-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:3306
-- Tid vid skapande: 07 mars 2018 kl 10:43
-- Serverversion: 5.6.34-log
-- PHP-version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `retro-heaven`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `orderlista`
--

CREATE TABLE `orderlista` (
  `ordernummer` int(5) NOT NULL,
  `artikelnummer` int(5) NOT NULL,
  `namn` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `adress` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `message` varchar(250) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `orderlista`
--

INSERT INTO `orderlista` (`ordernummer`, `artikelnummer`, `namn`, `mail`, `adress`, `message`) VALUES
(20, 3, 'sandra björklund', 'sandrewan@hotmail.com', 'björnbarkmansväg 22', ''),
(21, 3, 'sandra björklund', 'sandrewan@hotmail.com', 'björnbarkmansväg 22', 'TRJFXKDLTU,LSYRKZTDJNF'),
(22, 4, 'sandra björklund', 'sandrewan@hotmail.com', 'björnbarkmansväg 22', ''),
(23, 7, 'sandra björklund', 'sandrewan@hotmail.com', 'björnbarkmansväg 22', ''),
(24, 1, 'sandra björklund', 'sandrewan@hotmail.com', 'björnbarkmansväg 22', ''),
(25, 1, 'sandra björklund', 'sandrewan@hotmail.com', 'björnbarkmansväg 22', ''),
(26, 1, 'sandra björklund', 'sandrewan@hotmail.com', 'björnbarkmansväg 22', ''),
(27, 2, 'sandra björklund', 'sandrewan@hotmail.com', 'björnbarkmansväg 22', '');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `orderlista`
--
ALTER TABLE `orderlista`
  ADD PRIMARY KEY (`ordernummer`,`artikelnummer`),
  ADD KEY `artikelnummer` (`artikelnummer`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `orderlista`
--
ALTER TABLE `orderlista`
  MODIFY `ordernummer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `orderlista`
--
ALTER TABLE `orderlista`
  ADD CONSTRAINT `orderlista_ibfk_1` FOREIGN KEY (`artikelnummer`) REFERENCES `produkter` (`artikelnummer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
