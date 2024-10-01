-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/10/2024 às 02:52
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `database`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `id` int(5) NOT NULL,
  `dt_atend` varchar(50) DEFAULT NULL,
  `dt_alta` text DEFAULT NULL,
  `tipo_atend` text DEFAULT NULL COMMENT 'elet, grave, clin',
  `paciente_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `atendimento`
--

INSERT INTO `atendimento` (`id`, `dt_atend`, `dt_alta`, `tipo_atend`, `paciente_id`) VALUES
(1, '18/09/2024', NULL, '1', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `codPac` int(5) NOT NULL,
  `dtAtend` date NOT NULL,
  `dtAlta` date DEFAULT NULL,
  `dtNasc` date NOT NULL,
  `tipoAtend` int(5) NOT NULL COMMENT '1 eletivo, 2 clinico, 3 grave',
  `ativo` int(5) NOT NULL COMMENT '1 ativo 0 inativo',
  `unidade_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `codPac`, `dtAtend`, `dtAlta`, `dtNasc`, `tipoAtend`, `ativo`, `unidade_id`) VALUES
(1, 'paciente 1', 1, '2024-09-17', '0000-00-00', '2000-10-10', 3, 1, 2),
(2, 'Pamela', 13, '2024-09-18', NULL, '2014-06-01', 2, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `unidades`
--

CREATE TABLE `unidades` (
  `id` int(5) NOT NULL,
  `nomeUnidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `unidades`
--

INSERT INTO `unidades` (`id`, `nomeUnidade`) VALUES
(1, 'UTI'),
(2, 'Enfermaria'),
(3, 'Crônicos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `dtnasc` date NOT NULL,
  `tipo` varchar(20) NOT NULL COMMENT '1 recepcao, 2 medico, 3 enf',
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `cpf`, `dtnasc`, `tipo`, `ativo`) VALUES
(1, 'cleyton', 'cleytoncrls@gmail.com', '123456', '12345678', '2014-09-01', '1', '1'),
(2, 'Medico', 'med@unimed.com.br', '123456', '15645698', '0000-00-00', '2', '1'),
(3, 'usuario inativo', 'inativo@inativo.com', '1234', '123456789', '0000-00-00', '3', '0'),
(4, 'teste', 'teste@teste.com.br', 'asdf', '735.721.604-72', '1980-01-20', '3', '1'),
(5, 'novo usuário', 'novo@teste.com.br', '123456', '104.115.794-01', '1980-05-15', '3', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`);

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_unidade_id` (`unidade_id`);

--
-- Índices de tabela `unidades`
--
ALTER TABLE `unidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `unidades`
--
ALTER TABLE `unidades`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `fk_paciente_id` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);

--
-- Restrições para tabelas `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `fk_unidade_id` FOREIGN KEY (`unidade_id`) REFERENCES `unidades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
