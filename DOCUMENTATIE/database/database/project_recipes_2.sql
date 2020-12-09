-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 nov 2020 om 13:06
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_recipes`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `amounts`
--

CREATE TABLE `amounts` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_recipe` int(11) UNSIGNED NOT NULL,
  `id_ingredient` int(11) UNSIGNED NOT NULL,
  `id_unit` int(11) UNSIGNED DEFAULT NULL,
  `amount` int(4) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `amounts`
--

INSERT INTO `amounts` (`id`, `id_recipe`, `id_ingredient`, `id_unit`, `amount`) VALUES
(1, 1, 1, 1, 500),
(2, 1, 2, NULL, 8),
(3, 1, 3, 1, 800),
(4, 1, 4, NULL, 2),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, 1),
(7, 1, 7, 1, 150),
(8, 1, 8, 4, 2),
(9, 1, 9, 1, 50),
(10, 1, 10, 1, 200),
(11, 1, 11, 5, NULL),
(12, 1, 12, 5, NULL),
(13, 1, 13, 5, NULL),
(14, 1, 14, NULL, NULL),
(15, 1, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`) VALUES
(13, 'cayennepoeder'),
(10, 'crème fraîche'),
(1, 'gehakt'),
(9, 'geraspte kaas'),
(8, 'knoflook'),
(11, 'komijn'),
(5, 'koriander'),
(7, 'mais'),
(4, 'paprika'),
(12, 'paprikapoeder'),
(14, 'peper'),
(3, 'tomatenblokjes'),
(2, 'tortillawrap'),
(6, 'ui'),
(15, 'zout');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `persons` int(2) UNSIGNED NOT NULL DEFAULT '4',
  `calories` int(4) UNSIGNED DEFAULT NULL,
  `preparationtime` int(4) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `image`, `persons`, `calories`, `preparationtime`) VALUES
(1, 'Mexicaanse enchilada’s uit de oven', 'Verwarm de oven op 200 graden. Doe de 2 blikken tomatenblokjes in een pan en voeg wat peper, zout en verse koriander toe. Laat zachtjes pruttelen en iets indikken terwijl je de vulling maakt. Hak de ui en knoflook fijn en fruit aan in een beetje olijfolie. Voeg het gehakt toe en bak rul.\r\n\r\nBreng het gehakt op smaak met komijn, paprikapoeder, cayennepeper, peper en zout. Snijd de paprika in blokjes en bak samen met de uitgelekte mais 3 minuutjes mee met het gehakt. Besmeer de tortilla wraps met een dun laagje creme fraiche.\r\n\r\nSchep wat van het gehaktmengsel in het midden en rol hem op. Leg de opgerolde wraps in een ingevette ovenschaal (of schalen). Schep wat van de tomatensaus er over en bestrooi met kaas. Zet de ovenschaal ca 25 minuten in de oven. Bestrooi voor het serveren met wat extra koriander.\r\n\r\nHoud ongeveer 2 tortilla\'s per persoon aan.', 'enchiladas-met-gehakt.jpg', 4, NULL, 60);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `units`
--

CREATE TABLE `units` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `units`
--

INSERT INTO `units` (`id`, `name`) VALUES
(1, 'gram'),
(5, 'snufje'),
(4, 'teentjes');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `amounts`
--
ALTER TABLE `amounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_recipe` (`id_recipe`),
  ADD KEY `id_ingredient` (`id_ingredient`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indexen voor tabel `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexen voor tabel `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `amounts`
--
ALTER TABLE `amounts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `amounts`
--
ALTER TABLE `amounts`
  ADD CONSTRAINT `amounts_ibfk_1` FOREIGN KEY (`id_recipe`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `amounts_ibfk_2` FOREIGN KEY (`id_ingredient`) REFERENCES `ingredients` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `amounts_ibfk_3` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
