-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 15 Maj 2018, 19:45
-- Wersja serwera: 5.7.22-0ubuntu0.16.04.1
-- Wersja PHP: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `CONTACT_BOX`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `houseNumber` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apartamentNumber` int(11) NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `address`
--

INSERT INTO `address` (`id`, `houseNumber`, `city`, `street`, `apartamentNumber`, `person_id`) VALUES
(1, 5, 'hufisajfd', 'dsfgsdfg', 23, 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `emailAddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `email`
--

INSERT INTO `email` (`id`, `emailAddress`, `type`, `person_id`) VALUES
(1, 'kordian@wp.pl', 'słuzbowy', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `personDescription` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `person`
--

INSERT INTO `person` (`id`, `name`, `lastname`, `personDescription`) VALUES
(9, 'Kordian', 'Piątek', 'opis2'),
(15, 'yfguh', 'gjhikl', 'gjhkl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `person_groups`
--

CREATE TABLE `person_groups` (
  `person_id` int(11) NOT NULL,
  `groups_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `phone_number`
--

CREATE TABLE `phone_number` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `phone_number`
--

INSERT INTO `phone_number` (`id`, `number`, `type`, `person_id`) VALUES
(1, 456789788, 'prywatny', 9);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D4E6F81217BBB47` (`person_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E7927C74217BBB47` (`person_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_groups`
--
ALTER TABLE `person_groups`
  ADD PRIMARY KEY (`person_id`,`groups_id`),
  ADD KEY `IDX_6CC809C6217BBB47` (`person_id`),
  ADD KEY `IDX_6CC809C6F373DCF` (`groups_id`);

--
-- Indexes for table `phone_number`
--
ALTER TABLE `phone_number`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6B01BC5B217BBB47` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT dla tabeli `phone_number`
--
ALTER TABLE `phone_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_D4E6F81217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `FK_E7927C74217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `person_groups`
--
ALTER TABLE `person_groups`
  ADD CONSTRAINT `FK_6CC809C6217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6CC809C6F373DCF` FOREIGN KEY (`groups_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `phone_number`
--
ALTER TABLE `phone_number`
  ADD CONSTRAINT `FK_6B01BC5B217BBB47` FOREIGN KEY (`person_id`) REFERENCES `person` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
