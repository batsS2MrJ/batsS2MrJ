-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Maio-2023 às 21:38
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `system_of_it_call`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendente`
--

CREATE TABLE `atendente` (
  `ID_Atendente` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `E_mail` varchar(200) NOT NULL,
  `Senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `atendente`
--

INSERT INTO `atendente` (`ID_Atendente`, `Nome`, `E_mail`, `Senha`) VALUES
(1, 'Jeff', 'jeffdocapa@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID_Cliente` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Senha` varchar(200) NOT NULL,
  `E_mail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `ID_Ocorrencia` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Descricao` varchar(2000) NOT NULL,
  `Setor` enum('Rede','Hardware','Ar-condicionado','Televisão','Notebook') NOT NULL,
  `Departamento` enum('1°A','1°B','1°C','1°D','2°A','2°B','2°C','2°D','3°A','3°B','3°C','3°D','Laboratório\r\nde Matemática','Laboratório de Software','Laboratório de\r\nHardware','Coordenação','Biblioteca','Secretaria','Sala dos Professores','Laboratório de\r\nQuimica','Laboratório de Física') NOT NULL,
  `fk_Cliente_ID_Cliente` int(11) DEFAULT NULL,
  `fk_Atendente_ID_Atendente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendente`
--
ALTER TABLE `atendente`
  ADD PRIMARY KEY (`ID_Atendente`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Índices para tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`ID_Ocorrencia`),
  ADD KEY `FK_Ocorrencia_2` (`fk_Cliente_ID_Cliente`),
  ADD KEY `FK_Ocorrencia_3` (`fk_Atendente_ID_Atendente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendente`
--
ALTER TABLE `atendente`
  MODIFY `ID_Atendente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  MODIFY `ID_Ocorrencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `FK_Ocorrencia_2` FOREIGN KEY (`fk_Cliente_ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`),
  ADD CONSTRAINT `FK_Ocorrencia_3` FOREIGN KEY (`fk_Atendente_ID_Atendente`) REFERENCES `atendente` (`ID_Atendente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
