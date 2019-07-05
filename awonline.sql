-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 05. Jul 2019 um 15:05
-- Server-Version: 10.1.26-MariaDB-0+deb9u1
-- PHP-Version: 7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `awonline`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `main_menu`
--

CREATE TABLE `main_menu` (
  `m_menu_id` int(2) NOT NULL,
  `m_menu_name` varchar(20) NOT NULL,
  `m_menu_link` varchar(50) NOT NULL,
  `m_menu_icon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `main_menu`
--

INSERT INTO `main_menu` (`m_menu_id`, `m_menu_name`, `m_menu_link`, `m_menu_icon`) VALUES
(1, 'index', 'index.php', 'fa fa-fw fa-home');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `mod` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `members`
--

INSERT INTO `members` (`id`, `mod`, `username`, `email`, `passwort`, `vorname`, `nachname`, `created_at`, `updated_at`) VALUES
(1, 0, 'Alala', 'quinn2@hotmail.de', '$2y$10$Kuz4e/QuCHn27TDEy0fTb.XZrsL9ITq2x935sL/ScFQfA8iU6iR.2', '', '', '2019-06-07 14:58:08', NULL),
(2, 0, 'test123', 'quio@hotmail.de', '$2y$10$BeKMZSQ.JS30CXjopsSFB.FKa./JMqWpU2V4CA569Zv0RksNxAsf2', '', '', '2019-06-07 15:04:27', NULL),
(3, 0, 'Test', 'test@test.de', '$2y$10$c.1zgrrDrQ7axBR5wfeHAutBQ/7jsYWdTyaLRSBX051XwPzcR0sCC', '', '', '2019-06-09 13:16:11', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sub_menu`
--

CREATE TABLE `sub_menu` (
  `m_menu_id` int(2) NOT NULL,
  `m_menu_name` varchar(20) NOT NULL,
  `m_menu_link` varchar(50) NOT NULL,
  `m_menu_icon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `sub_menu`
--

INSERT INTO `sub_menu` (`m_menu_id`, `m_menu_name`, `m_menu_link`, `m_menu_icon`) VALUES
(1, 'index', 'index.php', 'fa fa-fw fa-home');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `mod` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwort` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vorname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nachname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `mod`, `username`, `email`, `passwort`, `vorname`, `nachname`, `created_at`, `updated_at`) VALUES
(1, 0, 'Alala', 'test@test.de', '$2y$10$Gc064GGCM1JEx9WzP4OHdOOfGjUwTIa.LiB8iduwEwEbZZ7ka8maC', '', '', '2019-06-07 14:37:08', NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`m_menu_id`);

--
-- Indizes für die Tabelle `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indizes für die Tabelle `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`m_menu_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `m_menu_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `m_menu_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
