-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 feb 2022 om 13:21
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `picture`) VALUES
(1, 'crosstrainer', 'categorie/crosstrainer.jpg'),
(2, 'hometrainer', 'categorie/hometrainer.jpg'),
(3, 'loopband', 'categorie/loopband.jpg'),
(4, 'roeitrainer', 'categorie/roeitrainer.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `openings_tijden`
--

CREATE TABLE `openings_tijden` (
  `id` int(11) NOT NULL,
  `dag` varchar(255) NOT NULL,
  `tijd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `openings_tijden`
--

INSERT INTO `openings_tijden` (`id`, `dag`, `tijd`) VALUES
(1, 'Maandag', '7:00-20:00'),
(2, 'Dinsdag', '8:00-20:00'),
(3, 'Woensdag', '7:00-20:00'),
(4, 'Donderdag', '8:00-20:00'),
(5, 'Vrijdag', '7:00-20:00'),
(6, 'Zaterdag', '8:00-13:00\r\n'),
(7, 'Zondag', '8:00-13:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `name`, `picture`, `description`, `category_id`) VALUES
(1, 'crosstrainer 1', 'cr1.jpg', 'De Focus Fitness Fox 3 is de ideale crosstrainer voor thuisgebruik. Deze crosstrainer is fluisterstil, heeft een relatief lange lengtepas, is stabiel en heeft een zwaar vliegwiel. Hierdoor heeft de Fox 3 al vier keer de \'Best Reviewed\' award van Kieskeurig.nl verdiend! Door de vele trainingsprogramma\'s is het mogelijk om effectief je persoonlijke doelen te behalen met deze crosstrainer.', 1),
(2, 'crosstrainer 2', 'cr2.jpg', 'De Focus Fitness Fox 4 is een fantastische crosstrainer voor elke thuissporter. Deze voorwiel aangedreven crosstrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 1),
(3, 'crosstrainer 3', 'cr3.jpg', 'De Fox 5 iPlus is een fantastische crosstrainer om intensief thuis te gebruiken. Deze crosstrainer is ijzersterk, geruisloos, beschikt over een zwaar vliegwiel en een grote lengtepas, heeft een uitgebreid display en heeft daarnaast de mogelijkheid om een koppeling met een tablet/smartphone te maken. Mede door al deze voordelen hebben consumenten de Fox 5 iPlus eerder verkozen tot de best gewaardeerde crosstrainer van Nederland!', 1),
(4, 'crosstrainer 4', 'cr4.jpg', 'De Fox 5 iPlus is een fantastische crosstrainer om intensief thuis te gebruiken. Deze crosstrainer is ijzersterk, geruisloos, beschikt over een zwaar vliegwiel en een grote lengtepas, heeft een uitgebreid display en heeft daarnaast de mogelijkheid om een koppeling met een tablet/smartphone te maken. Mede door al deze voordelen hebben consumenten de Fox 5 iPlus eerder verkozen tot de best gewaardeerde crosstrainer van Nederland!', 1),
(5, 'crosstrainer 5', 'cr5.jpg', 'De Fox 3 HRC weegt 48 kg en is voorzien van een degelijke staalconstructie. Het is dankzij deze stabiele constructie mogelijk om een persoon tot 120 kg te laten trainen op deze crosstrainer.', 1),
(6, 'crosstrainer 6', 'cr6.jpg', 'Als je een crosstrainer zoekt met veel programma’s en weerstandsniveaus, is deze proform 325 CSEi een zeer goede keuze. Hij is van veel gemakken, zoals ventilatoren, tablet- en bidonhouder, speakers en hartslagsensoren voorzien en toch nog zeer gebruiksvriendelijk dankzij het handige display. Het fijne aan deze crosstrainer is ook de optie om te verbinden met jouw tablet of smartphone en de handigheid van het verplaatsen door middel van de transportwieltjes aan de achterzijde en dankzij het magneetweerstandsysteem is hij geruislo', 1),
(7, 'hometrainer', 'hometrainer-fitcycle-30.jpg', 'De Focus Fitness Fox 4 is een fantastische hometrainer voor elke thuissporter. Deze voorwiel aangedreven hometrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 2),
(8, 'hometrainer', '550x786.jpg', 'De Focus Fitness Fox 4 is een fantastische hometrainer voor elke thuissporter. Deze voorwiel aangedreven hometrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 2),
(9, 'hometrainer', '550x813.jpg', 'De Focus Fitness Fox 4 is een fantastische hometrainer voor elke thuissporter. Deze voorwiel aangedreven hometrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 2),
(10, 'hometrainer', 'darwin-hometrainer-ht40-01_1600.jpg', 'De Focus Fitness Fox 4 is een fantastische hometrainer voor elke thuissporter. Deze voorwiel aangedreven hometrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 2),
(11, 'hometrainer', 'fit_bike_ride_2_b600p-sm3730_-1.jpg', 'De Focus Fitness Fox 4 is een fantastische hometrainer voor elke thuissporter. Deze voorwiel aangedreven hometrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 2),
(12, 'hometrainer', 'hometrainer-cardio-fit-b30.jpg', 'De Focus Fitness Fox 4 is een fantastische hometrainer voor elke thuissporter. Deze voorwiel aangedreven hometrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 2),
(13, 'loopband', 'loopband-fitrun-70i.jpg', 'De Focus Fitness Fox 4 is een fantastische \r\nloopband voor elke thuissporter. Deze voorwiel aangedreven loopband heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 3),
(14, 'loopband', 'jet_5_9x-min.jpg', 'De Focus Fitness Fox 4 is een fantastische \r\nloopband voor elke thuissporter. Deze voorwiel aangedreven loopband heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 3),
(15, 'loopband', 'jet-7_1.jpg', 'De Focus Fitness Fox 4 is een fantastische \r\nloopband voor elke thuissporter. Deze voorwiel aangedreven loopband heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 3),
(16, 'loopband', 'fflb034-001.jpg', 'De Focus Fitness Fox 4 is een fantastische \r\nloopband voor elke thuissporter. Deze voorwiel aangedreven loopband heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 3),
(17, 'loopband', 'cardiostrong-treadmill-tx30-01_1600.jpg', 'De Focus Fitness Fox 4 is een fantastische \r\nloopband voor elke thuissporter. Deze voorwiel aangedreven loopband heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 3),
(18, 'loopband', '550x684.jpg', 'De Focus Fitness Fox 4 is een fantastische \r\nloopband voor elke thuissporter. Deze voorwiel aangedreven loopband heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 3),
(19, 'roeitrainer', 'infiniti-r-70i.jpg', 'De Focus Fitness Fox 4 is een fantastische roeitrainer voor elke thuissporter. Deze voorwiel aangedreven roeitrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 4),
(20, 'roeitrainer', '550x380.jpg', 'De Focus Fitness Fox 4 is een fantastische roeitrainer voor elke thuissporter. Deze voorwiel aangedreven roeitrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 4),
(21, 'roeitrainer', 'infiniti-r-70i.jpg', 'De Focus Fitness Fox 4 is een fantastische roeitrainer voor elke thuissporter. Deze voorwiel aangedreven roeitrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 4),
(22, 'roeitrainer', 'roeitrainer-dkn-h2oar.jpg', 'De Focus Fitness Fox 4 is een fantastische roeitrainer voor elke thuissporter. Deze voorwiel aangedreven roeitrainer heeft een ongelooflijk scherpe prijs voor de uitstekende specificaties die hij te bieden heeft. Met een eigen gewicht van 67 kg, een vliegwiel van 7 kg en een lengtepas van 50 cm is een comfortabele en stabiele sportervaring gegarandeerd.', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL,
  `stars` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `user_id`, `date`, `description`, `stars`, `product_id`) VALUES
(34, 1, '2021-11-25', 'asdsad', 3, 1),
(35, 1, '2021-11-25', 'aaasdadssa', 2, 1),
(36, 1, '2021-11-25', 'hhrh', 1, 1),
(37, 1, '2021-11-25', 'hhrh', 1, 1),
(38, 1, '2021-11-25', 'hhrh', 1, 1),
(39, 1, '2021-11-25', 'hhrh', 1, 1),
(40, 1, '2021-11-25', 'hhrh', 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` enum('member','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(1, 'p@roc.nl', 'qwerty', 'Piet', 'Jawali', 'admin'),
(2, 'gewan@gmail.com', 'gewan1122', 'gewan', 'rashid', 'member');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `openings_tijden`
--
ALTER TABLE `openings_tijden`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stars` (`stars`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `review_ibfk_2` (`user_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `openings_tijden`
--
ALTER TABLE `openings_tijden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
