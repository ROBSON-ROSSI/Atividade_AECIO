-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09/10/2024 às 15:29
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contatos`
--
CREATE DATABASE contatos;
USE contatos;
-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos_info`
--

DROP TABLE IF EXISTS `contatos_info`;
CREATE TABLE IF NOT EXISTS `contatos_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `contatos_info`
--

INSERT INTO `contatos_info` (`id`, `nome`, `telefone`, `email`) VALUES
(6, 'ROBSON ROSSI LEITE ROBSON', '11942521233', 'teste@teste.com.br'),
(2, 'Bob Souza', '8765-4321', 'bob.souza@example.com'),
(3, 'Carlos Lima', '1234-8765', 'carlos.lima@example.com'),
(4, 'Diana Martins', '4321-5678', 'diana.martins@example.com'),
(5, 'Elias Costa', '5678-1234', 'elias.costa@example.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `id_usuario`) VALUES
('teste@teste.com', '$2y$10$S5lx3tBCWK4hYChSnWgVs.6G206jjnBfdCiRSNH2QaagMinDldxD.', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
