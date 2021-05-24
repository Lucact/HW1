-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 24, 2021 alle 20:19
-- Versione del server: 10.4.17-MariaDB
-- Versione PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cerca_lavoro`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `commento`
--

CREATE TABLE `commento` (
  `id` int(11) NOT NULL,
  `id_offerta` varchar(255) DEFAULT NULL,
  `contenuto` varchar(1000) DEFAULT NULL,
  `email_utente` varchar(255) DEFAULT NULL,
  `data_commento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `commento`
--

INSERT INTO `commento` (`id`, `id_offerta`, `contenuto`, `email_utente`, `data_commento`) VALUES
(1, '2147483647', 'Ciao a tutti', 'valax@gmail.com', '2021-05-24'),
(2, '2175584530', 'Ciao a tutti', 'valax@gmail.com', '2021-05-24'),
(3, '2197271118', 'dddd', 'valax@gmail.com', '2021-05-24'),
(4, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(5, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(6, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(7, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(8, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(9, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(10, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(11, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(12, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(13, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(14, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(15, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(16, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(17, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(18, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(19, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(20, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(21, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(22, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(23, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(24, '2197271118', 'a', 'valax@gmail.com', '2021-05-24'),
(25, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(26, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(27, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(28, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(29, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(30, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(31, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(32, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(33, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(34, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(35, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(36, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(37, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(38, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(39, '2198077156', 'p', 'valax@gmail.com', '2021-05-24'),
(40, '2198077156', 'banana', 'valax@gmail.com', '2021-05-24'),
(41, '2178235897', 'mi piace la banana bella lunga e americana', 'valax@gmail.com', '2021-05-24'),
(42, '2178233746', 'hydtcvkv', 'valax@gmail.com', '2021-05-24'),
(43, '2199536030', 'aaaa', 'valax@gmail.com', '2021-05-24'),
(44, '2199536030', 'bbbbb', 'valax@gmail.com', '2021-05-24'),
(45, '2199536030', 'pppppp', 'valax@gmail.com', '2021-05-24'),
(46, '2147483647', 'aaaaa', 'valax@gmail.com', '2021-05-24'),
(47, '2147483647', '', 'valax@gmail.com', '2021-05-24'),
(48, '2147483647', '', 'valax@gmail.com', '2021-05-24'),
(49, '2147483647', '', 'valax@gmail.com', '2021-05-24'),
(50, '15', 'ffff', 'valax@gmail.com', '2021-05-24'),
(51, '2147483647', 'ddddddd', 'valax@gmail.com', '2021-05-24'),
(52, '2137088477', 'bel lavoro', 'valax@gmail.com', '2021-05-24'),
(53, '2175584291', 'ddd', 'valax@gmail.com', '2021-05-24'),
(54, '2175584291', 'dddd', 'valax@gmail.com', '2021-05-24'),
(55, '2175584291', 'dddd', 'valax@gmail.com', '2021-05-24'),
(56, '2175584291', 'dddd', 'valax@gmail.com', '2021-05-24'),
(57, '2175584291', 'dd', 'valax@gmail.com', '2021-05-24'),
(58, '2175584291', 'ddd', 'valax@gmail.com', '2021-05-24'),
(59, '2175584291', 'dddd', 'valax@gmail.com', '2021-05-24'),
(60, '2198077613', 'aaaa', 'valax@gmail.com', '2021-05-24'),
(61, '2197270894', 'Ciaooooo', 'valax@gmail.com', '2021-05-24'),
(62, '2197270774', 'Ciaooooo', 'valax@gmail.com', '2021-05-24');

-- --------------------------------------------------------

--
-- Struttura della tabella `offertapreferita`
--

CREATE TABLE `offertapreferita` (
  `id` varchar(255) NOT NULL,
  `titolo` varchar(255) DEFAULT NULL,
  `descrizione` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `email_utente` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `cognome`, `Email`, `Telefono`, `Password`) VALUES
(1, 'Luca', 'Rodolico', 'luca1996ct@gmail.com', '3400813713', '1234567890'),
(2, 'Antonio', 'Valastro', 'valax@gmail.com', '1234567890', '1234567'),
(11, 'cristian', 'cataldo', 'cristian@gmail.com', '3456543345', '4236517'),
(99, 'Luca', 'Rodolico', 'lucact@gmail.com', '3400813713', 'Lucact'),
(100, 'q', 'qq', 'qddd@gmail.com', 'ssss', '123456789?');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `commento`
--
ALTER TABLE `commento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_utente` (`email_utente`);

--
-- Indici per le tabelle `offertapreferita`
--
ALTER TABLE `offertapreferita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_utente` (`email_utente`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `commento`
--
ALTER TABLE `commento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `commento`
--
ALTER TABLE `commento`
  ADD CONSTRAINT `commento_ibfk_1` FOREIGN KEY (`email_utente`) REFERENCES `utenti` (`Email`);

--
-- Limiti per la tabella `offertapreferita`
--
ALTER TABLE `offertapreferita`
  ADD CONSTRAINT `offertapreferita_ibfk_1` FOREIGN KEY (`email_utente`) REFERENCES `utenti` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
