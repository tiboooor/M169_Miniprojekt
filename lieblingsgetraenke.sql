-- Host: 127.0.0.1
-- Erstellungszeit: 11. Feb 2022 um 13:58
-- Server-Version: 10.4.22-MariaDB
-- PHP-Version: 8.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `lieblingsgetraenke`
--

DROP DATABASE IF EXISTS lieblingsgetraenke;

CREATE DATABASE lieblingsgetraenke;

USE lieblingsgetraenke;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `person`
--

CREATE TABLE `person` (
  `Vorname` text NOT NULL,
  `Nachname` text NOT NULL,
  `Fachrichtung` text NOT NULL,
  `Wunschgetraenk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
