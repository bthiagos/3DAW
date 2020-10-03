-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2020 às 01:03
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+3:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `1620470400080`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `ativo` enum('s','n') NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `alteracao` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `titulo`, `descricao`, `ativo`, `data`, `alteracao`) VALUES
(17, 'Analista de Suporte', 'TIVIT SA - Barra da Tijuca', 's', '2020-09-22 01:29:44', '2020-09-22 01:29:44'),
(14, 'Desenvolvedor PHP', 'Globosat', 's', '2020-09-22 01:29:09', '2020-09-22 01:29:09'),
(15, 'Desenvolvedor Java', 'IBM', 's', '2020-09-22 01:29:21', '2020-09-22 01:29:21'),
(16, 'Engenheiro Civil', 'Odebrecht', 's', '2020-09-22 01:29:30', '2020-09-22 01:29:30'),
(12, 'Operador de Computador', 'Mainframe IBM EC2', 's', '2020-09-22 01:27:58', '2020-09-22 01:27:58'),
(13, 'Vendedor Hinode', 'Venha para a empresa lucrar muito', 's', '2020-09-22 01:28:38', '2020-09-22 01:28:38'),
(19, 'Estagiário FAETERJ Rio', 'Para trabalhar com profº Marciano.', 's', '2020-10-03 23:39:29', '2020-10-03 23:39:29'),
(20, 'Especialista em UX', 'Para trabalhar na FAETERJ Rio.', 'n', '2020-10-04 02:13:22', '2020-10-04 02:13:22'),
(21, 'Técnico de Edificações', 'Torres Construtora SA', 'n', '2020-10-04 03:38:37', '2020-10-04 03:38:37');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
