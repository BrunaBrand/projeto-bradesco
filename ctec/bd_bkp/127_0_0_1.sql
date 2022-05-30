-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Maio-2022 às 20:27
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
CREATE DATABASE IF NOT EXISTS `bd_ctec` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_ctec`;

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
  `certicacao` tinyint(1) DEFAULT '1',
  `valor` decimal(10,2) DEFAULT '0.00',
  `img1` varchar(255) DEFAULT NULL,
  `img1Thumb` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `home` tinyint(1) DEFAULT '0',
  `ativo` tinyint(1) DEFAULT '1',
  `areaTi` tinyint(1) DEFAULT '0',
  `areaAdm` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`idCurso`, `titulo`, `subtitulo`, `descricao`, `publicoAlvo`, `cargaHoraria`, `preRequisito`, `horario`, `ead`, `vagas`, `certicacao`, `valor`, `img1`, `img1Thumb`, `video`, `home`, `ativo`, `areaTi`, `areaAdm`) VALUES
(1, 'Webdesigner', 'Aprenda a desenvolver websites', NULL, NULL, NULL, NULL, NULL, 0, NULL, 1, '500.00', NULL, NULL, NULL, 0, 1, 1, 0);

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
(1, 'Sandromir Almeida', 'sandromir@ctsdigital.com.br', '123456');

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
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
