-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/06/2024 às 21:51
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
-- Banco de dados: `projeto_final_dezembro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `idProd` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProd` varchar(255) NOT NULL,
  `precoProd` float DEFAULT NULL,
  `qtdProd` int(11) DEFAULT NULL,
  `imagem` varchar(255),
  PRIMARY KEY (`idProd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsu` int(11) NOT NULL,
  `nomeUsu` varchar(150) NOT NULL,
  `cpfUsu` varchar(14) DEFAULT NULL,
  `dtNascimentoUsu` date DEFAULT NULL,
  `telefoneWhatsApp` varchar(20) DEFAULT NULL,
  `emailUsu` varchar(150) DEFAULT NULL,
  `senhaUsu` varchar(50) DEFAULT NULL,
  `perfilUsu` varchar(15) DEFAULT NULL,
  `situacaoUsu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idUsu`, `nomeUsu`, `cpfUsu`, `dtNascimentoUsu`, `telefoneWhatsApp`, `emailUsu`, `senhaUsu`, `perfilUsu`, `situacaoUsu`) VALUES
(1, 'ADMIN DO SISTEMA', NULL, NULL, NULL, 'adm@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Ativo'),
(2, 'Railson', '222.222.222-22', '1995-10-29', '(61)98888-8888', 'railson@gmail.com', '202cb962ac59075b964b07152d234b70', 'Funcionário', 'Ativo'),
(3, 'helton', '333.333.333-33', '1979-01-25', '(61)97777-7777', 'helton@gmail.com', '202cb962ac59075b964b07152d234b70', 'Funcionário', 'Ativo'),
(4, 'auzenir', '444.444.444-4489', '1976-08-15', '(61)98777-6543', 'auzenir@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cliente', 'Ativo'),


--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProd`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsu`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idProd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
