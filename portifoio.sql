-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/10/2023 às 22:28
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portifoio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `security` text NOT NULL,
  `technologies` text NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `projects`
--

INSERT INTO `projects` (`id`, `name`, `type`, `security`, `technologies`, `description`, `user_id`) VALUES
(1, 'Projeto 1', 'Site', 'public', 'html,css', 'Projeto de um site moderno e legal', 1),
(2, 'Projeto 2', 'Desenvolvimento', 'public', 'html,css', 'descrição mt louca', 1),
(3, 'teste porjeto', '3', 'public', '', 'dsaasdasddas', 11),
(4, 'teste projeto real amanda', '2', 'public', '', 'teset de projet oreal amanda', 11),
(5, 'TESTE ORJETO FINAL QUASE ', '2', 'public', '', 'dsasdsdaasd', 11),
(6, 'dffsddffsdaaa', '2', 'public', '', 'fdsfdsfsd', 11),
(7, 'TESTE OROIEJTO ', '2', 'public', '', 'aaaa', 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `linkedln` text DEFAULT NULL,
  `github` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `linkedln`, `github`) VALUES
(1, 'Francisco Correa', 'francisco@gmail.com', '123456', NULL, NULL),
(2, 'chico', 'chico@gmail.com', '123456', 'linkedin do chico', 'github do chico'),
(3, 'chico1', 'chico1@gmail.com', '123456', '', ''),
(5, 'chico', 'chico123@gmail.com', '123456', '', ''),
(6, 'francisco', 'aaaaa@email.com', '123456', '', ''),
(7, 'francisco', 'aaaa1@email.com', '123456', '', ''),
(8, 'francisco', 'chico21@gmail.com', '123456', '', ''),
(9, 'Amanda Rodrigues', 'amanda1@manzoti.com', '123456', '', ''),
(10, 'Amanda Rodrigues 2', 'amanda2@manzoti.com', '123456', '', ''),
(11, 'Amanda Rodrigues 3', 'amanda@manzoti.com', '123456', '', ''),
(12, 'Amanda Rodrigues 3', 'amanda3@manzoti.com', '123456', '', ''),
(13, 'Amanda Rodrigues 4', 'amanda4@manzoti.com', '123456', '', ''),
(14, 'Amanda Rodrigues 7', 'amanda7@manzoti.com', '123456', '', ''),
(15, 'sadadsdas', 'sadsad@sadasdasd', '123456', '', ''),
(16, 'sadsdasda', 'franciscoasas@gmail.com', '123456', '', ''),
(17, 'Amanda Rodrigues 8', 'amanda8@manzoti.com', '123456', '', ''),
(18, 'Amanda Rodrigues 10', 'amanda10@manzoti.com', '123456', '', ''),
(19, 'Amanda Rodrigues 11', 'amanda11@manzoti.com', '123456', '', ''),
(20, 'Amanda Rodrigues g', 'amandag@manzoti.com', '123456', '', ''),
(21, 'Amanda Rodrigues 3', 'amanda33@manzoti.com', '123456', '', ''),
(22, 'Amanda Rodrigues 15', 'amanda15@manzoti.com', '123456', 'a', 'a');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`user_id`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
