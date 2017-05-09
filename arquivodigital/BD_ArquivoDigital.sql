-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2016 at 10:50 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ArquivoDigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `codepartamento` int(11) NOT NULL,
  `aber` tinytext NOT NULL,
  `departamento` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`codepartamento`, `aber`, `departamento`) VALUES
(1, 'DSEAM', 'DIREÇÃO DE SERVIÇOS DE EDUCAÇÃO ARTÍSTICA E MULTIMÉDIA'),
(2, 'CSI', 'Counter Snakes intelligence '),
(3, 'CDC', 'Center for Disease Control'),
(5, 'SQL', 'Server Query Languange'),
(6, 'BO3', 'Black Ops 3');

-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `numero` int(11) NOT NULL,
  `ano` year(4) NOT NULL,
  `numutilizador` int(11) NOT NULL,
  `assunto` text NOT NULL,
  `data` date NOT NULL,
  `destinatarios` text NOT NULL,
  `id_tipo_doc` int(11) NOT NULL,
  `codepartamento2` int(11) NOT NULL,
  `ficheiro` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentos`
--

INSERT INTO `documentos` (`numero`, `ano`, `numutilizador`, `assunto`, `data`, `destinatarios`, `id_tipo_doc`, `codepartamento2`, `ficheiro`) VALUES
(2, 2016, 1, 'Euripeu2', '2016-07-21', 'FIFA', 4, 2, 'img/pedro.docx'),
(5, 2016, 5, 'Telemovel', '2016-07-21', 'China', 3, 2, 'img/twister.docx'),
(6, 2016, 5, 'Joana Ribeiro', '2016-07-21', 'Ribeiro', 4, 2, 'img/damn2.docx'),
(9, 2016, 3, 'Diamond', '2016-07-20', 'dsfdsf', 5, 5, 'img/final1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_doc`
--

CREATE TABLE IF NOT EXISTS `tipo_doc` (
  `id_tipo_doc` int(11) NOT NULL,
  `tipo_doc` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_doc`
--

INSERT INTO `tipo_doc` (`id_tipo_doc`, `tipo_doc`) VALUES
(0, 'default'),
(1, 'Fax'),
(2, 'Declarações'),
(3, 'Informação Interna	'),
(4, 'Nota Interna'),
(5, 'Oficios Circulares	'),
(6, 'Press Release');

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE IF NOT EXISTS `utilizador` (
  `id_utilizador` int(11) NOT NULL,
  `departamento` int(11) NOT NULL,
  `nome_utilizador` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`id_utilizador`, `departamento`, `nome_utilizador`, `password`, `email`) VALUES
(1, 2, 'Pedro', '12345', 'vala@gmail.com'),
(2, 1, 'Valter', '12345', 'valter@gmail.com'),
(3, 2, 'Sandra', '12345', 'sandra@gmail.com'),
(4, 2, 'Paulo', '1', '11111@gmail.com'),
(5, 1, 'Joana', '12345', 'joana@gmail.com'),
(6, 1, 'Lisandra', '12345', 'lisandra@gmail.com'),
(13, 1, 'Wind', 'wind', 'wind@gmail.com'),
(14, 2, 'pedro lobo', '1234', 'pedro@gmail.com'),
(16, 5, 'pablo escobar', '123', 'pablo_escobar@gmail.com'),
(17, 5, 'Bruce Wayne', 'joker12345', 'notbatman@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codepartamento`);

--
-- Indexes for table `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`numero`);

--
-- Indexes for table `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`id_tipo_doc`);

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id_utilizador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
  MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
