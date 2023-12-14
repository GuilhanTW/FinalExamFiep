-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/10/2023 às 20:55
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbhotel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clienteconta`
--

CREATE TABLE `clienteconta` (
  `id` int(11) NOT NULL,
  `idcliente` int(11) DEFAULT NULL,
  `nomecliente` varchar(255) DEFAULT NULL,
  `valor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clienteconta`
--

INSERT INTO `clienteconta` (`id`, `idcliente`, `nomecliente`, `valor`) VALUES
(22, 3, 'WILLIAN PHELLIP', '2550'),
(24, 4, 'dbuaoishfaf', '500'),
(25, 2, 'Joao', '300');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `profissao` varchar(255) DEFAULT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  `redesocial` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `telefone`, `email`, `cidade`, `estado`, `profissao`, `motivo`, `redesocial`) VALUES
(2, 'Joao', '4356999', 'joao@gmail.com', 'SP', 'SP', 'Professor', 'Trabalho', '@joao'),
(3, 'WILLIAN PHELLIP', '+5542999741991', 'willian_psb@hotmail.com', 'PR', '', 'NA', 'Turismo', '@sheus'),
(4, 'dbuaoishfaf', '5558484829', 'wueioqwo@gmail.com', 'Curitiba', 'PR', 'Estudante', 'turismo', '@fagewe');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `produto` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `utiliza` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`id`, `produto`, `quantidade`, `utiliza`) VALUES
(1, 'Agua', 5, 'Rep frigobar');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `funcao` varchar(255) DEFAULT NULL,
  `salario` varchar(255) DEFAULT NULL,
  `exp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `datanasc`, `telefone`, `funcao`, `salario`, `exp`) VALUES
(3, 'dassfsafasfa', '2000-11-01', '429858795', 'TI', '1300', 'NA'),
(4, 'bnfngfgn', '2001-11-11', '873546645', 'Limpeza', '1200', 'Ampla');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quartos`
--

CREATE TABLE `quartos` (
  `id` int(11) NOT NULL,
  `quarto` int(11) DEFAULT NULL,
  `localizacao` varchar(255) DEFAULT NULL,
  `tamanho` varchar(255) DEFAULT NULL,
  `disponivel` varchar(255) DEFAULT NULL,
  `itens` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `quartos`
--

INSERT INTO `quartos` (`id`, `quarto`, `localizacao`, `tamanho`, `disponivel`, `itens`) VALUES
(6, 0, '', '', 'Disponivel', ''),
(7, 103, 'Terreo', 'Grande', 'Disponivel', 'frigobar/ TV');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clienteconta`
--
ALTER TABLE `clienteconta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `quartos`
--
ALTER TABLE `quartos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clienteconta`
--
ALTER TABLE `clienteconta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `quartos`
--
ALTER TABLE `quartos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `clienteconta`
--
ALTER TABLE `clienteconta`
  ADD CONSTRAINT `clienteconta_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
