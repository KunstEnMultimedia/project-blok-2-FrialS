-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 02:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `amounts`
--

CREATE TABLE `amounts` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_recipe` int(11) UNSIGNED NOT NULL,
  `id_ingredient` int(11) UNSIGNED NOT NULL,
  `id_unit` int(11) UNSIGNED DEFAULT NULL,
  `amount` int(4) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amounts`
--

INSERT INTO `amounts` (`id`, `id_recipe`, `id_ingredient`, `id_unit`, `amount`) VALUES
(28, 1, 16, 6, 2),
(56, 1, 17, 1, 500),
(57, 1, 18, 1, 400),
(58, 1, 19, 1, 400),
(59, 1, 20, NULL, 3),
(60, 1, 21, 1, 300),
(61, 1, 22, NULL, 2),
(62, 1, 23, NULL, 2),
(63, 1, 24, 1, 40),
(64, 1, 25, 1, 250),
(72, 2, 26, 8, 2),
(73, 2, 27, 1, 400),
(74, 2, 21, 1, 600),
(75, 2, 28, 1, 75),
(76, 2, 16, 6, 2),
(77, 2, 25, 1, 375),
(78, 2, 29, 9, 100),
(79, 2, 30, 10, 1),
(90, 3, 27, NULL, 5),
(91, 3, 31, 1, 700),
(92, 3, 28, 1, 50),
(93, 3, 32, 7, 3),
(94, 3, 16, 9, 500),
(95, 3, 33, NULL, 1),
(96, 3, 34, 7, 2),
(97, 3, 35, 10, 1),
(98, 3, 23, NULL, 2),
(99, 3, 36, NULL, 4),
(100, 4, 37, 1, 400),
(101, 4, 38, 1, 800),
(102, 4, 28, 1, 50),
(103, 4, 39, 10, 2),
(104, 5, 29, 9, 250),
(105, 5, 40, 1, 7),
(106, 5, 41, 7, 1),
(107, 5, 42, 1, 300),
(108, 5, 43, NULL, 1),
(109, 5, 44, 6, 2),
(110, 5, 45, NULL, NULL),
(118, 6, 67, 1, 700),
(119, 6, 68, 1, 500),
(120, 6, 9, 1, 100),
(121, 6, 70, NULL, 1),
(122, 6, 73, 9, 100),
(123, 6, 71, NULL, 2),
(124, 6, 72, 1, 100),
(134, 7, 26, 8, 1),
(135, 7, 6, NULL, 3),
(136, 7, 85, NULL, 3),
(137, 7, 15, 10, 1),
(138, 7, 86, 1, 250),
(139, 7, 87, NULL, 2),
(140, 7, 28, 1, 30),
(141, 7, 29, 9, 75),
(142, 7, 88, 7, 4),
(143, 8, 28, 1, 200),
(144, 8, 29, 7, 2),
(145, 8, 40, 1, 7),
(146, 8, 32, 1, 250),
(147, 8, 89, 1, 80),
(148, 8, 15, 5, 2),
(149, 8, 43, NULL, 1),
(150, 8, 90, 1, 100),
(151, 8, 91, 1, 50),
(152, 8, 92, 10, 1),
(153, 9, 10, 1, 75),
(154, 9, 134, 7, 4),
(155, 9, 135, 7, 2),
(156, 9, 136, 7, 1),
(157, 9, 137, 10, 1),
(158, 9, 138, 10, 1),
(159, 9, 139, NULL, 1),
(160, 9, 140, 1, 300),
(161, 9, 141, 1, 5),
(162, 10, 142, NULL, 4),
(163, 10, 143, NULL, 1),
(164, 10, 144, NULL, 2),
(165, 10, 145, 1, 10),
(166, 10, 146, 1, 320),
(167, 10, 134, 7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`) VALUES
(84, ''),
(24, 'bladselderij'),
(42, 'bloem'),
(38, 'cannellinibonen in blik'),
(13, 'cayennepoeder'),
(137, 'citroensap'),
(10, 'crème fraîche'),
(43, 'ei'),
(143, 'fuji appel'),
(39, 'gedroogd bonenkruid'),
(40, 'gedroogde gist'),
(23, 'gedroogde laurierblaadje'),
(1, 'gehakt'),
(86, 'Gelderse rookworsten'),
(92, 'gemalen kaneel'),
(30, 'gemalen nootmuskaat'),
(9, 'geraspte kaas'),
(72, 'gesneden ijsbergsla'),
(85, 'Goudreinette appels'),
(29, 'halfvolle melk'),
(140, 'Hollandse garnalen'),
(87, 'Jazz appels'),
(90, 'keukenstroop'),
(8, 'knoflook'),
(19, 'knolselderij'),
(11, 'komijn'),
(70, 'komkommer'),
(5, 'koriander'),
(35, 'kristalsuiker'),
(139, 'kropsla'),
(36, 'kruidnagel'),
(26, 'kruimige aardappelen'),
(91, 'lichtbruine basterdsuiker '),
(7, 'mais'),
(134, 'mayonaise'),
(27, 'middelgrote uien'),
(28, 'ongezouten roomboter'),
(4, 'paprika'),
(12, 'paprikapoeder'),
(14, 'peper'),
(45, 'poedersuiker'),
(22, 'prei'),
(25, 'rookworst'),
(33, 'runderbouillontablet'),
(31, 'runderriblappen'),
(18, 'schouderkarbonade'),
(68, 'shoarmareepjes'),
(17, 'spliterwten'),
(144, 'stengel bleekselderij'),
(142, 'stronken witlof'),
(41, 'suiker'),
(138, 'tabasco'),
(32, 'tarwebloem'),
(71, 'tomaten'),
(3, 'tomatenblokjes'),
(135, 'tomatenketchup'),
(2, 'tortillawrap'),
(73, 'Turkse knoflooksaus'),
(6, 'ui'),
(20, 'vastkokende aardappelen'),
(141, 'verse krulpeterselie'),
(145, 'verse selderij'),
(37, 'verse snijbonen'),
(67, 'verse vlaamse friet'),
(16, 'water'),
(136, 'whisky'),
(21, 'winterpeen'),
(89, 'witte basterdsuiker'),
(34, 'witte wijn azijn '),
(88, 'Zaanse mosterd'),
(146, 'zoetzure zilveruitjes'),
(44, 'zonnebloemolie'),
(15, 'zout');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `persons` int(2) UNSIGNED NOT NULL DEFAULT 4,
  `calories` int(4) UNSIGNED DEFAULT NULL,
  `preparationtime` int(4) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `image`, `persons`, `calories`, `preparationtime`) VALUES
(1, 'Snert', '\r\n1. Doe het water samen met de spliterwten, de karbonaden en het zout in een grote (soep)pan. Breng aan de kook. Zet het vuur laag als het water kookt en schep gedurende 30 min. met een schuimspaan het schuim er regelmatig af.\r\n\r\n2. Schil ondertussen de knolselderij, snijd in plakken van 1 cm en snijd die in blokjes. Schil de aardappelen en snijd in kleine blokjes. Schil de winterpeen en snijd in kleine blokjes. Snipper de uien. Was de prei en snijd in ringen. Doe alle groenten en de aardappel in de pan. Voeg de laurier toe en laat de soep ca. 1½ uur zachtjes koken. Roer regelmatig. De soep is goed als de spliterwten zijn stuk gekookt. Breng op smaak met peper en zout.\r\n\r\n3. Neem de karbonaden uit de soep. Verwijder bot en vet en snijd het vlees in kleine stukjes. Doe terug in de soep. Verwijder de laurier. Snijd de bladselderij fijn en de worst in plakjes. Voeg toe aan de soep en verwarm 2 min.\r\n', 'snert.jpg', 8, 490, 45),
(2, 'Hutspot', '\r\n1. Schil de aardappelen en snijd in gelijke stukken. Snijd de uien in halve ringen. Schil de peen en snijd in plakjes van 1 cm. Verhit de helft van de boter in een ruime pan of soeppan en fruit de ui 2 min. op middelhoog vuur. Voeg de winterpeen toe en bak 2 min. mee. Voeg de aardappelen, het water en een snuf zout toe en breng aan de kook. Laat 20 min. koken tot de groenten en aardappelen gaar zijn. Giet af.\r\n\r\n2. Verwarm ondertussen de rookworst volgens de aanwijzingen op de verpakking. Verwarm de melk op laag vuur, maar laat niet koken. Stamp de aardappelen en hutspotgroenten met de pureestamper tot puree. Voeg de melk, de rest van de boter en nootmuskaat toe en roer door de hutspot. Breng op smaak met peper en eventueel zout.\r\n', 'hutspot.jpg', 4, 725, 30),
(3, 'Hachee', '1. Halveer de uien en snijd in ringen. Snijd het vlees in stukken van ca. 3 cm. Bestrooi het vlees met peper en zout. Verhit in een braadpan de helft van de boter en bak de helft van het vlees al omscheppend op middelhoog vuur in 3 min. rondom bruin. Schep uit de pan en bak de andere helft van het vlees in de rest van de boter. Doe al het vlees terug in de pan. Zet het vuur laag, voeg de ui toe en fruit 5 min. op laag vuur. Roer regelmatig.\r\n\r\n2. Bestrooi het vlees en de ui met de bloem en laat op laag vuur 3 min. gaar worden. Roer regelmatig. Voeg het water en de bouillontablet toe. Voeg de azijn, suiker, laurierblaadjes en kruidnagels toe. Breng aan de kook en stoof het vlees met de deksel op de pan op heel laag vuur in ca. 3 uur gaar. Roer regelmatig.\r\n\r\n3. Haal na 2½ uur de deksel van de pan en laat het laatste halfuur tot de gewenste dikte in inkoken op laag vuur. Breng de hachee op smaak met peper en eventueel zout.\r\n', 'hachee.jpg', 4, 455, 180),
(4, 'Blote billetjes in het gras', '1. Snijd de snijbonen in schuine, dunne plakjes. Breng een pan water met zout aan de kook en kook ze in 6 min. beetgaar. Giet af.\r\n\r\n2. Doe de cannellinibonen in een zeef en spoel af onder de kraan. Smelt de boter in dezelfde pan en voeg de snij- en cannellinibonen toe. Verwarm 4 min. en schep af en toe voorzichtig om. Breng op smaak met het bonenkruid en peper en zout en serveer in een grote schaal.\r\n', 'blotebilletjes.jpg', 4, 255, 15),
(5, 'Oliebollen', '1. Verwarm de melk in een steelpan tot lauwwarm. Schenk 100 ml melk bij de gist en de suiker in een schaaltje. Laat 5 min. staan tot het begint te schuimen. Doe de bloem in een kom en maak een kuiltje. Zo vermindert u de kans op klontjes in het beslag. Schenk het gistmengsel, de rest van de melk, het ei en 1 mespunt zout erin. Klop met een garde tot een glad beslag. Dek de mengkom af met een schone theedoek en laat het beslag 1 uur op een warme, tochtvrije plaats rijzen tot het in volume verdubbeld is. Het is belangrijk om het deeg goed te laten rijzen dat geeft een luchtige, lichte oliebol.\r\n2. Verhit de olie in een ruime pan of in een frituurpan tot 180 °C. Gebruik een keukenthermometer om de temperatuur te bepalen of test de temperatuur aan de hand van een stukje brood. Laat een stukje brood in de olie vallen. Gaat het direct bruisen, dan is de olie op temperatuur. Zakt het stukje brood naar de bodem, dan is de olie nog niet heet genoeg. Wordt het stukje brood meteen donkerbruin, dan is de olie te heet. Doop 2 eetlepels kort in de hete olie. Schep met de lepels ronde hoopjes beslag en laat het beslag voorzichtig in de olie laat zakken. Als u een middelgrote pan gebruikt, bak dan niet meer dan 4 oliebollen tegelijk anders kan de pan overstromen. Keer ze met een schuimspaan zodra een zijde gerezen en goudbruin is. Als u de oliebollen goed bakt, draaien ze bijna vanzelf om. U gebruikt de schuimspaan om de oliebollen het laatste zetje te geven. Neem ze uit de pan en laat uitlekken op keukenpapier. Bestrooi naar smaak met poedersuiker.\r\n', 'oliebollen.jpg', 4, 100, 90),
(6, 'Kapsalon', 'Verwarm de oven voor op 200 °C. Bak de frites in ca. 25 min. in de oven goudbruin. Verhit ondertussen een koekenpan met antiaanbaklaag en bak de shoarma zonder boter of olie in 8 min. bruin en gaar. Schep de friet in de aluminium schaal en schep de shoarma erop. Verdeel de kaas over de shoarma en zet ca. 5 min. in de oven tot de kaas is gesmolten. Halveer ondertussen de komkommer in de lengte en snijd in plakjes. Snijd de tomaten in dunne plakken. Neem de schaal uit de oven en verdeel de sla, tomaat en komkommer erover. Besprenkel met de knoflooksaus. ', 'kapsalon.jpg', 4, 675, 45),
(7, 'Hete bliksem', '1. Schil de aardappelen, snijd ze in gelijke stukken en snipper de uien grof. Schil de goudrenetten, verwijder het klokhuis en snijd het vruchtvlees in stukjes van 1 cm. Doe de aardappelen, ui en stukjes goudrenet in een pan en giet er zo veel water over dat alles net onder staat. Voeg het zout toe en breng aan de kook. Kook in ca. 20 min. gaar.\r\n\r\n2. Verwarm ondertussen de rookworst volgens de aanwijzingen op de verpakking. Snijd de Jazz appels in blokjes van een ½ cm.\r\n\r\n3. Giet de aardappelen af en voeg de boter en melk toe. Stamp fijn met de pureestamper en breng op smaak met peper en zout. Schep ? van de zoete appels erdoor en verdeel de rest erover. Leg de rookworst erop en serveer met de mosterd.\r\n', 'hetebliksem.jpg', 4, 590, 45),
(8, 'Stroopwafel', '1. Snijd de boter in blokjes en laat op kamer temperatuur komen. Verwarm de melk in een klein steelpan tot lauwwarm. Voeg al roerend met een garde de gist toe aan de melk en laat staan tot gebruik.\r\n\r\n2. Doe de bloem, 125 g boter (per 12 porties), witte basterdsuiker, de helft van het zout en het ei in een grote kom. Voeg het gistmengsel toe aan het bloemmengsel en meng met een keukenmachine of met de hand tot een samenhangend deeg. Vorm een bal van het deeg, leg in de kom en dek de kom af met vershoudfolie. Laat het deeg 1 uur rusten op een warme, tochtvrije plek.\r\n\r\n3. Vorm 12 balletjes van het deeg. Verwarm in een steelpan de keukenstroop met de lichtbruine basterdsuiker, de kaneel en de rest van het zout. Laat smelten tot een stroop. Roer 50 g roomboter (per 12 porties) door de stroop en houd de stroop op zeer laag vuur warm. Roer af en toe.\r\n\r\n4. Verhit het wafelijzer op de hoogste stand. Smeer met de bakkwast het wafelijzer in met wat boter. Leg het deegbolletje in het midden van het ijzer en druk het ijzer zachtjes dicht, druk niet aan. Bak in 1 min. goudbruin. Zet de wafelijzer een standje lager als het te veel rookt of de wafels te donker worden.\r\n\r\n5. Neem de wafel uit het ijzer, pak vast met een theedoek en snijd met een scherp mes overlangs door zodat je twee wafels overhoudt. Neem een eetlepel stroop, en plaats in het midden van een wafelhelft. Druk de andere helft er zachtjes op. Herhaal met de rest van het stroopwafeldeeg en de rest van de stroop. Maak de wafelijzer tussendoor schoon met wat keukenpapier.\r\n', 'stroopwafels', 0, 275, 90),
(9, 'Garnalencocktail', '1. Meng de cre?me frai?che met de mayonaise, ketchup en whisky tot cocktailsaus. Breng op smaak met het citroensap, de tabasco, peper en eventueel zout.\r\n    Haal de blaadjes sla los van de krop, was en droog ze.\r\n\r\n2. Verdeel 4 mooie slablaadjes als een bedje over de coupes (per 4 personen), snijd de rest van de sla in reepjes en verdeel ook over de coupes. Verdeel de garnalen en vervolgens de cocktailsaus over de coupes. Snijd de peterselie grof en gebruik als garnering.\r\n', 'garnalencocktail.jpg', 4, 275, 15),
(10, 'witlofsalade', '1. Snijd de onderkant van de stronken witlof. Halveer de stronken in de lengte en snijd in reepjes. Doe in een grote schaal. Halveer de appel, verwijder het klokhuis en snijd het vruchtvlees in blokjes. Snijd de bleekselderij in dunne boogjes en de selderij fijn. Laat de zilveruitjes uitlekken, maar vang het vocht op.\r\n\r\n2. Voeg de appel, bleekselderij, selderij en uitjes toe aan het witlof. Meng 2 el opgevangen vocht (per 4 personen) en de mayonaise tot een dressing. Breng op smaak met peper en eventueel zout. Schep door de salade en serveer.\r\n', 'witlofsalade.jpg', 4, 150, 15);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`) VALUES
(7, 'el'),
(1, 'gram'),
(8, 'kg'),
(6, 'liter'),
(9, 'ml'),
(5, 'snufje'),
(4, 'teentjes'),
(10, 'tl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amounts`
--
ALTER TABLE `amounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_recipe` (`id_recipe`),
  ADD KEY `id_ingredient` (`id_ingredient`),
  ADD KEY `id_unit` (`id_unit`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amounts`
--
ALTER TABLE `amounts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amounts`
--
ALTER TABLE `amounts`
  ADD CONSTRAINT `amounts_ibfk_1` FOREIGN KEY (`id_recipe`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `amounts_ibfk_2` FOREIGN KEY (`id_ingredient`) REFERENCES `ingredients` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `amounts_ibfk_3` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
