-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 04 Gru 2020, 08:24
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gdow_cw23`
--
CREATE DATABASE IF NOT EXISTS `gdow_cw23` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `gdow_cw23`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gry`
--

DROP TABLE IF EXISTS `gry`;
CREATE TABLE `gry` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `kategoriaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `gry`
--

INSERT INTO `gry` (`id`, `nazwa`, `cena`, `kategoriaId`) VALUES
(5, 'Wiedźmin3', '69.00', 1),
(6, 'Szachy 3D', '45.00', 2),
(7, 'Fifa 2020', '120.00', 4),
(8, 'BF5', '78.00', 3),
(9, 'Minecraft', '60.00', 2),
(10, 'Diablo 3', '300.00', 1),
(11, 'Path of Exile', '0.00', 1),
(12, 'Division 2', '90.00', 3),
(13, 'Syberia 3', '80.00', 6),
(14, 'Simsy 4', '120.00', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

DROP TABLE IF EXISTS `kategorie`;
CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(100) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `nazwa`, `opis`) VALUES
(1, 'RPG', 'Fajne gry na długi czas'),
(2, 'symulatory', 'Trzeba się wciągnąć'),
(3, 'FPS', 'Dużo adrenaliny'),
(4, 'sportowe', 'Nie trzeba się pocić'),
(5, 'stratyegiczne', 'Trochę pogłówkować należy'),
(6, 'przygodowe', 'Idziesz i zwiedzasz lokacje');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gry`
--
ALTER TABLE `gry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kat_gra` (`kategoriaId`);

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `gry`
--
ALTER TABLE `gry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `gry`
--
ALTER TABLE `gry`
  ADD CONSTRAINT `fk_kat_gra` FOREIGN KEY (`kategoriaId`) REFERENCES `kategorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
