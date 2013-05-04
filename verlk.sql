-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 04. Mai 2013 um 21:00
-- Server Version: 5.1.44
-- PHP-Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `verlk`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `verlk`
--

CREATE TABLE IF NOT EXISTS `verlk` (
  `patnr` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `surename` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `lastname` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `znr` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `kost` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `arzt` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `startdate` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `end` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `verlk` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  `days` varchar(99) CHARACTER SET latin1 COLLATE latin1_german2_ci NOT NULL,
  PRIMARY KEY (`patnr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `verlk`
--

