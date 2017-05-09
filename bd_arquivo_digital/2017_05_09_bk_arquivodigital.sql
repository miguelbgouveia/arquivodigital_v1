-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2017 às 15:51
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arquivodigital`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
`codepartamento` int(11) NOT NULL,
  `aber` tinytext NOT NULL,
  `departamento` tinytext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`codepartamento`, `aber`, `departamento`) VALUES
(1, 'DS', 'Diretor de Serviços'),
(2, 'DAEA', 'Divisão de Apoio à Educação Artística'),
(3, 'DEA', 'Divisão de Expressões Artísticas'),
(4, 'DIM', 'Divisão de Investigação e Multimédia'),
(5, 'SA', 'Secção Administrativa'),
(6, 'SG', 'Sistema de Gestão'),
(7, 'AI', 'Área de Informática'),
(8, 'AO', 'Assistentes Operacionais'),
(9, 'PRD', 'Produção'),
(10, 'CIV', 'Comunicação, Imagem e Vídeo'),
(11, 'EA', 'Equipa de Animação'),
(12, 'CM', 'Centro Multimédia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`numero`, `ano`, `numutilizador`, `assunto`, `data`, `destinatarios`, `id_tipo_doc`, `codepartamento2`, `ficheiro`) VALUES
(1, 2017, 5, 'VII Congresso de Educação Artística', '2017-01-05', 'Vítor Alexandre Freitas Neves ', 1, 4, 'docs/'),
(2, 2017, 9, 'VII Congresso de Educação Artística', '2017-02-06', 'Filipa Silva', 1, 1, 'docs/'),
(3, 2017, 4, 'VII Congresso de Educação Artística', '2017-02-06', 'Marla Teresa Machado Vieira', 1, 4, 'docs/'),
(4, 2017, 4, 'VII Congresso de Educação Artística', '2017-03-23', 'Andrea Maria Da Roxa Matos', 1, 4, 'docs/'),
(5, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'André Henrique Pacheco Capelo', 2, 9, 'docs/'),
(6, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Inês Margarida Vieira Freitas', 1, 9, ''),
(7, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'João Pedro Gouveia Nunes de Sousa', 1, 9, ''),
(8, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Júlia Maria Nunes Rodrigues', 1, 9, ''),
(9, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Lucas Ismael Azevedo Faria', 1, 9, ''),
(10, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Natacha Sofia Bettencout Aguiar', 1, 9, ''),
(11, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Tiago Henrique de Abreu Boulhosa', 1, 9, ''),
(12, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Ana Beatratriz Andrade Gouveia', 1, 9, ''),
(13, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Fátima Abreu Freitas', 1, 9, ''),
(14, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Inês Maria Carvalho de Sousa', 1, 9, 'docs/'),
(15, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Mariana Filipe Corte Andrade', 1, 9, ''),
(16, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Mariana José Fernandes Alves', 1, 9, ''),
(17, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Marina Baltazar Gonçalves', 1, 9, ''),
(18, 2017, 8, 'Certificados Concursso Jovens Artistas 2017', '2017-03-23', 'Nuno Correia Velosa', 1, 9, ''),
(19, 2017, 4, 'Declaração de Presença em Gravação', '2017-03-24', 'Cristina Natalia Freitas Nunes', 2, 4, ''),
(20, 2017, 4, 'VII Congresso de Educação Artística', '2017-04-03', 'Joana Correia Marques', 1, 4, ''),
(21, 2017, 4, 'VII Congresso de Educação Artística', '2017-04-03', 'António Manuel Gonçalves da Silva Esteireiro', 1, 4, ''),
(22, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Escola Dona Olga de Brito', 2, 2, ''),
(23, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Academia de Línguas da Madeira', 2, 2, ''),
(24, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Escola da APEL', 2, 2, ''),
(25, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Colégio de Santa Teresinha', 2, 2, ''),
(26, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'EB1/PE da Ajuda', 2, 2, ''),
(27, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'EB1/PE da Assomada', 2, 2, ''),
(28, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'EB1/PE do Livramento', 2, 2, ''),
(29, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'EB23 Dr. Horácio Bento de Gouveia', 2, 2, ''),
(30, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'EB23 de Santo António', 2, 2, ''),
(31, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'EB123/PE Bartolomeu Perestrelo', 2, 2, ''),
(32, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Escola básica e secundária Dr. Ângelo Augusto da Silva', 2, 2, ''),
(33, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'EBS da Calheta', 2, 2, ''),
(34, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'EBS Gonçalves Zarco', 2, 2, ''),
(35, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Escola de Dança do Funchal', 2, 2, ''),
(36, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Escola Secundária Francisco Franco', 2, 2, ''),
(37, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Colégio Infante D. Henrique', 2, 2, ''),
(38, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Escola Secundária Jaime Moniz', 2, 2, ''),
(39, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Madeira Multilingual School', 2, 2, ''),
(40, 2017, 9, 'Dia Mundial do Teatro – MIMOS DE VÁRIOS TAMANHOS', '2017-04-05', 'Colégio Salesianos no Funchal', 2, 2, ''),
(41, 2017, 8, 'Certificado do Festival da  Canção Infantil da Madeira 2017', '2017-04-07', 'Camila da Câmara Gonçalves Drummond', 1, 9, 'docs/'),
(42, 2017, 8, 'Certificado do Festival da  Canção Infantil da Madeira 2017', '2017-04-07', 'Eunice Ferreira da Silva Grilo', 1, 9, 'docs/'),
(43, 2017, 8, 'Certificado do Festival da  Canção Infantil da Madeira 2017', '2017-04-07', 'Francisco António dos Santos Abreu ', 1, 9, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_doc`
--

CREATE TABLE IF NOT EXISTS `tipo_doc` (
`id_tipo_doc` int(11) NOT NULL,
  `tipo_doc` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tipo_doc`
--

INSERT INTO `tipo_doc` (`id_tipo_doc`, `tipo_doc`) VALUES
(1, 'Certificado'),
(2, 'Declaração'),
(3, 'Informação Interna	'),
(4, 'Nota Interna'),
(5, 'Ofício Circular'),
(6, 'Press Release'),
(7, 'Fax');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--

CREATE TABLE IF NOT EXISTS `utilizador` (
`id_utilizador` int(11) NOT NULL,
  `departamento` int(11) NOT NULL,
  `nome_utilizador` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id_utilizador`, `departamento`, `nome_utilizador`, `password`, `email`) VALUES
(1, 2, 'Admin', '123', 'xpto@gmail.com'),
(2, 7, 'Valter Camacho', '123', 'xpto@live.madeira-edu.pt'),
(3, 9, 'Sónia Perneta', '123', 'xpto@gmail.com'),
(4, 4, 'Manuela Silva', '123', 'xpto@gmail.com'),
(5, 1, 'Fernanda Abreu', '123', 'xpto@live.madeira-edu.pt'),
(6, 9, 'Ricardo Araújo', '123', 'xpto@live.madeira-edu.pt'),
(7, 5, 'Dores Camacho', '123', 'xpto@live.madeira-edu.pt'),
(8, 9, 'Luz Maria', '123', 'xpto@live.madeira-edu.pt'),
(9, 1, 'Marisa Vasconcelos', '123', 'xpto@live.madeira-edu.pt'),
(10, 5, 'Nélia Vieira', '123', 'xpto@live.madeira-edu.pt');

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
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
MODIFY `codepartamento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `documentos`
--
ALTER TABLE `documentos`
MODIFY `numero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tipo_doc`
--
ALTER TABLE `tipo_doc`
MODIFY `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
MODIFY `id_utilizador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
