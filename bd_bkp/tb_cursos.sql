-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2022 às 21:52
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
  `ead` tinyint(1) DEFAULT NULL,
  `vagas` int(3) DEFAULT NULL,
  `certificacao` tinyint(1) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT '0.00',
  `img1` varchar(255) DEFAULT NULL,
  `img1Thumb` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `home` tinyint(1) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `areaTi` tinyint(1) DEFAULT NULL,
  `areaAdm` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cursos`
--

INSERT INTO `tb_cursos` (`idCurso`, `titulo`, `subtitulo`, `descricao`, `publicoAlvo`, `cargaHoraria`, `preRequisito`, `horario`, `ead`, `vagas`, `certificacao`, `valor`, `img1`, `img1Thumb`, `video`, `home`, `ativo`, `areaTi`, `areaAdm`) VALUES
(74, 'Curso de HTML5 - Iniciante', 'Aprenda os primeiros passos para construir uma base estruturada', 'Aprenda na prática e do extremo 0 como desenvolver um código estruturado com elementos que constroem uma página perfeita, usando sintaxe simples no HTML5.', 'Pessoas que tenham interesse em aprender o básico de HTML', 10, 'Estar sempre buscando aprender o máximo que os cursos podem te oferecer.', 'Vespertino 14h00 às 16h00  Noturno 20h00 às 22h00 ', 1, 20, 1, '0.00', 'img-projetos-html5.jpg', 'img-projetos-html5.jpg', 'n_Etdr7Dbjs', 0, 1, 1, 0),
(76, 'INTRODUÇÃO AO MUNDO DA ADMINISTRAÇÃO - Iniciante', 'Conheça os primeiros passos para ingressar nesse mundo tão vasto.', 'Este mini curso te introduz ao vasto mundo da administração. ', 'Pessoas comprometidas em estudar.', 10, 'Pessoas que estejam concluindo ou já tenham concluído ensino médio.', 'Vespertino 14h00 às 16h00  Noturno 20h00 às 22h00 ', 1, 10, 1, '0.00', 'adm-g.jpg', 'amd-p.jpg', 'https://www.youtube.com/watch?v=gbhwvToq1bk', 0, 1, 0, 1),
(77, 'ADM ', 'Aprenda os primeiros passos para saber escolher um nicho adequado', 'Este mini curso de mostra todas as opções existentes no mercado e te ajuda a escolher um que melhor se adapta ao seu perfil.', 'Pequenos administradores.', 30, 'Pessoas  que estejam buscando se desenvolver na Administração.', 'Vespertino 14h00 às 16h00  Noturno 20h00 às 22h00 ', 1, 30, 1, '0.00', 'adm-areas-g.png', 'adm-areas-p.png', '', 0, 1, 0, 1),
(78, 'TI - Fundamentos Básicos', 'Tenha uma excelente introdução básica ao Front-End', 'Fundamentado em 2 módulos, este mini curso vai te introduzir o básico sobre HTML5 E CSS3', 'Pessoas que tenham interesse em aprender o básico de HTML e CSS', 20, 'Estar sempre buscando aprender o máximo que os cursos podem te oferecer.', 'Vespertino 14h00 às 16h00  Noturno 20h00 às 22h00 ', 1, 40, 1, '0.00', 'html5-g.jpg', 'html5-g.jpg', 'n_Etdr7Dbjs', 1, 1, 0, 0),
(79, 'CSS3 - Iniciante', 'Aprenda os primeiros passos para construir uma base estruturada de elementos', 'Este mini curso tem como objetivo te introduzir ao mundo a estilização do CSS3 do completo 0.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium dolor vel lorem volutpat sagittis. Suspendisse congue vehicula tristique. Mauris suscipit ipsum laoreet leo condimentum, eget tincidunt sapien pellentesque. Ut orci nunc, ultrices ut faucibus pharetra, rutrum in mi. Sed tincidunt diam non lacus dictum, vel accumsan massa fringilla. Praesent id felis placerat, dictum risus vitae, sodales est. Duis arcu tellus, pellentesque eu consectetur non, rutrum vel est. Suspendisse tempor porta turpis nec molestie. Aliquam id dapibus orci. Pellentesque in varius diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'Pessoas que tenham interesse em aprender o básico de CSS3', 10, 'Estar sempre buscando aprender o máximo que os cursos podem te oferecer.', 'Vespertino 14h00 às 16h00  Noturno 20h00 às 22h00 ', 1, 20, 1, '0.00', 'CSS3 - Copia.png', 'CSS3.png', 'n_Etdr7Dbjs', 0, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cursos`
--
ALTER TABLE `tb_cursos`
  ADD PRIMARY KEY (`idCurso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cursos`
--
ALTER TABLE `tb_cursos`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
