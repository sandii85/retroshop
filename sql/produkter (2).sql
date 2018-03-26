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
-- Tabellstruktur `produkter`
--

CREATE TABLE `produkter` (
  `artikelnummer` int(5) NOT NULL,
  `produkt` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `bild` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `beskrivning` varchar(250) COLLATE utf8_swedish_ci NOT NULL,
  `pris` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `produkter`
--

INSERT INTO `produkter` (`artikelnummer`, `produkt`, `bild`, `beskrivning`, `pris`) VALUES
(1, 'Gungstol', 'gungstol.jpg', 'En solid gungstol från tidigt 1900-tal', 2100),
(2, 'Fåtölj', 'armchair.jpg', 'En ståtlig länstol tillsammans med en matchande taburett', 8900),
(3, 'Barhylla', 'bokhylla.jpg', 'En enastående hylla för dina flakonger', 79000),
(4, 'Bord och stolar', 'bord+stolar.jpg', 'Ett mycket originellt trädgårds set, otroligt vackert', 67000),
(5, 'Minolta kamera', 'camera.jpg', 'En fullt fungerande kamera med objektiv', 2390),
(6, 'Kristallflaskor', 'kristallFlaskor.jpg', 'Ett unikt set prima kristall karaffer', 3700),
(7, 'Staty', 'staty.jpg', 'En exceptionell staty med en man som håller en gammal lådkamera', 1700);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `produkter`
--
ALTER TABLE `produkter`
  ADD PRIMARY KEY (`artikelnummer`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `produkter`
--
ALTER TABLE `produkter`
  MODIFY `artikelnummer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
