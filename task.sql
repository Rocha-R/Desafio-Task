-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2017 às 10:59
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE `anexos` (
  `id` int(11) NOT NULL,
  `taskn2_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `anexos`
--

INSERT INTO `anexos` (`id`, `taskn2_id`, `nome`, `arquivo`) VALUES
(1, 16, 'ingresso.com_wow.pdf', 'ingresso.com_wow.pdf'),
(2, 16, '111366216.pdf', '111366216.pdf'),
(3, 16, '1.pdf', '1.pdf'),
(4, 17, '2.pdf', '2.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `task`
--

INSERT INTO `task` (`id`, `nome`) VALUES
(5, 'Comer Bolo'),
(7, 'Dirigir Bem Melhor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `taskn2`
--

CREATE TABLE `taskn2` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` text,
  `prioridade` int(1) DEFAULT NULL,
  `prazo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `taskn2`
--

INSERT INTO `taskn2` (`id`, `nome`, `descricao`, `prioridade`, `prazo`) VALUES
(9, 'Jogar', '				    				', 5, '2017-11-13'),
(10, 'Comer', '				    				', 1, '0000-00-00'),
(16, 'Estudar ', '				    				    				    				    				    				    				    				    				    																																				', 1, '2030-02-28'),
(17, 'Rafael Rocha', 'kkkkkkk				    				    								', 3, '2016-10-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskn2`
--
ALTER TABLE `taskn2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `taskn2`
--
ALTER TABLE `taskn2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
