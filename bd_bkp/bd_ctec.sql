-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Maio-2022 às 21:52
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_ctec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cursos`
--

CREATE TABLE `tb_cursos` (
  `idCurso` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) DEFAULT NULL,
  `descricao` longtext,
  `publicoAlvo` varchar(255) DEFAULT NULL,
  `cargaHoraria` int(4) DEFAULT NULL,
  `preRequisito` varchar(255) DEFAULT NULL,
  `horario` varchar(255) DEFAULT NULL,
  `ead` tinyint(1) DEFAULT '0',
  `vagas` int(3) DEFAULT NULL,
  `certificacao` tinyint(1) DEFAULT '1',
  `valor` decimal(10,2) DEFAULT '0.00',
  `img1` varchar(255) DEFAULT NULL,
  `img1Thumb` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `home` tinyint(1) DEFAULT '1',
  `ativo` tinyint(1) DEFAULT '1',
  `areaTi` tinyint(1) DEFAULT '0',
  `areaAdm` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`idCurso`, `titulo`, `subtitulo`, `descricao`, `publicoAlvo`, `cargaHoraria`, `preRequisito`, `horario`, `ead`, `vagas`, `certificacao`, `valor`, `img1`, `img1Thumb`, `video`, `home`, `ativo`, `areaTi`, `areaAdm`) VALUES
(1, 'Webdesigner', 'Aprenda a desenvolver websites', 'Aprenda a desenvolver websites', NULL, NULL, NULL, NULL, 0, NULL, 1, '500.00', 'bootstrap-g.jpg', 'bootstrap-p.jpg', '', 1, 1, 1, 0),
(2, 'Webdesigner Avançado', 'Aprenda a desenvolver websites', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, NULL, NULL, 0, NULL, 1, '500.00', 'html5-g.jpg', 'html5-p.jpg', NULL, 1, 1, 1, 0),
(3, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(4, 'TI', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(6, 'TI', '', NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(7, '', 'subtitulo blabla', NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(8, '', 'subtitulo blabla', '', NULL, NULL, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(9, '', '', 'dfsdffsdjkfnsdjk\rgdgnhsrligjfrgjitgh', NULL, NULL, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(10, '', '', '', 'opopopopopopopoppopopoo', NULL, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(12, '', '', '', 'popopopopopopoppopopopoppopopo', 0, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(13, '', '', '', '', 12, NULL, NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(14, '', '', '', '', 0, 'todos', NULL, 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(15, '', '', '', '', 0, '', 'matutino3', 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(16, '', '', '', '', 0, '', 'matutino3', 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(17, '', '', '', '', 0, '', '', 0, NULL, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(18, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(19, '', '', '', '', 0, '', '', 0, 8, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(20, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', NULL, NULL, NULL, 1, 1, 0, 0),
(21, '', '', '', '', 0, '', '', 0, 0, 1, '3000.00', NULL, NULL, NULL, 1, 1, 0, 0),
(22, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', 'img g', NULL, NULL, 1, 1, 0, 0),
(23, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', 'img p', NULL, 1, 1, 0, 0),
(24, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', 'img p', NULL, 1, 1, 0, 0),
(25, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', 'img p', '', 1, 1, 0, 0),
(26, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', 'insira aqui o video do youtube', 1, 1, 0, 0),
(27, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', 'insira aqui o video do youtube', 0, 1, 0, 0),
(28, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0),
(29, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0),
(30, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0),
(31, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0),
(32, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0),
(33, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0),
(34, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0),
(35, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0),
(36, '', '', '', '', 0, '', '', 0, 0, 1, '0.00', '', '', '', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `idLogin` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`idLogin`, `nome`, `email`, `senha`) VALUES
(1, 'Sandromir Almeida', 'sandromir@ctsdigital.com.br', '123456'),
(2, 'Bruna Brandão', 'bruna.costab@hotmail.com', '123456'),
(3, 'Bruna Brandão', 'bruna.costab@hotmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`idLogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cursos`
--
ALTER TABLE `tb_cursos`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
