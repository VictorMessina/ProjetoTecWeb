-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Nov-2014 às 22:40
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `birds`
--

CREATE DATABASE IF NOT EXISTS `birds` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `birds`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `post` varchar(400) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id_post`, `id_usuario`, `post`) VALUES
(1, 8, 'Hallo, ich bin Carol.'),
(2, 8, 'Sou gamadinha no Lucas.'),
(3, 8, 'To pro crime.'),
(4, 8, 'Hoje, Ã© hoje.'),
(5, 8, 'Naquele pique!'),
(6, 8, 'To pro crime!'),
(7, 8, 'Tudo bÃ£o migo?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `tia` varchar(20) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `data` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `foto` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `tia`, `sobrenome`, `email`, `curso`, `sexo`, `data`, `senha`, `foto`) VALUES
(8, 'Caroline Sacco', '31420397', 'Arantes de Miranda', 'carol@hotmail.com', 'Sistemas de InformaÃ§Ã£o', 'F', '1995-02-4', 'carol1', 'img/users/Caroline Sacco/fotoPerfil.jpg'),
(12, 'Bianca Marques', '31402240', 'Weber', 'bianca@hotmail.com', 'Sistemas de InformaÃ§Ã£o', 'F', '1996-05-28', 'bibi12', 'img/users/Bianca Marques/fotoPerfil.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
