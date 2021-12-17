-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Dez-2021 às 03:36
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `la_pazzari`
--
CREATE DATABASE IF NOT EXISTS `la_pazzari` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `la_pazzari`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `endereço` varchar(200) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `pedido` varchar(135) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `endereço`, `cep`, `telefone`, `pedido`) VALUES
(1, 'lucinei ferreira dos santos ferreira', 'Rua Elias do Canto', '07082-71', '2457-7327', ''),
(2, 'lucinei ferreira dos santos ferreira', 'Rua Elias do Canto', '07082-71', '2457-7327', ''),
(3, 'lucinei ferreira dos santos ferreira', 'Rua Elias do Canto', '07082-71', '2457-7327', ''),
(4, 'juliana ferreira dos santos barbosa', 'Rua Elias do Canto', '07082-71', '2457-7327', ''),
(8, 'João', 'Rua Azusa, 123', '73515450', '20861779', ''),
(9, 'João', 'Rua Azusa, 123', '73515450', '20861779', ''),
(10, 'João', 'Rua Azusa, 123', '73515450', '20861779', ''),
(11, 'João', 'Rua Azusa, 123', '73515450', '20861779', ''),
(12, 'Juliana Ferreira dos Santos Barbosa', 'Rua Elias do Canto', '07082715', '1196221264', ''),
(13, 'Juliana Ferreira dos Santos Barbosa', 'Rua Elias do Canto', '07082715', '1196221264', ''),
(14, 'Juliana Ferreira dos Santos Barbosa', 'Rua Elias do Canto', '07082715', '1196221264', ''),
(15, 'ju', 'Rua Elias do Canto', '07082715', '1962212641', 'douglas'),
(16, 'luna', 'Rua Elias do Canto', '07082715', '1962212641', 'douglas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
