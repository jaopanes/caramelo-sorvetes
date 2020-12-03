-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2020 às 04:51
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sorveteria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `depoimento`
--

CREATE TABLE `depoimento` (
  `id` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `depoimento` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `depoimento`
--

INSERT INTO `depoimento` (`id`, `autor`, `depoimento`, `foto`) VALUES
(1, 'João Vitor', 'Gostei muito do sorvete de picolé', 'tijolo.jpg'),
(2, 'Richard', 'Não gostei de nenhum', 'richard.jpg'),
(3, 'João Birelo', 'Muito bom gostei de tudo', 'birelo.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `picole`
--

CREATE TABLE `picole` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `imagem` varchar(500) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `picole`
--

INSERT INTO `picole` (`id`, `nome`, `imagem`, `preco`) VALUES
(1, 'Picolé de Abacate', 'picole-abacate.jpg', '555.55'),
(2, 'Picolé de Jabuticaba', 'picole-jabuticaba.jpg', '403.42'),
(3, 'Picolé de Pitaya', 'picole-pitaya.jpg', '230.44'),
(4, 'Picolé de Coxinha', 'picole-coxinha.jpg', '694.41'),
(5, 'Picolé de Limão', 'picole-limao.jpg', '211.80'),
(6, 'Picolé de Batata Doce', 'picole-batatadoce.jpg', '1000.00'),
(7, 'Picolé de Abóbora', 'picole-abobora.jpg', '454.99'),
(8, 'Picolé de Couve', 'picole-couve.jpg', '888.99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sorvete`
--

CREATE TABLE `sorvete` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sorvete`
--

INSERT INTO `sorvete` (`id`, `nome`, `imagem`, `preco`) VALUES
(1, 'Sorvete de Pitanga', 'pitanga.jpg', '65.99'),
(2, 'Sorvete de Jambolão', 'jambolao.jpg', '110.30'),
(3, 'Sorvete de Tomate', 'tomate.jpg', '210.29'),
(4, 'Sorvete de queijo', 'queijo.jpg', '100.50'),
(5, 'Sorvetes de capim', 'capim.jpg', '340.00'),
(6, 'Sorvete de carvão', 'carvao.jpg', '550.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `depoimento`
--
ALTER TABLE `depoimento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `picole`
--
ALTER TABLE `picole`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sorvete`
--
ALTER TABLE `sorvete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `depoimento`
--
ALTER TABLE `depoimento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `picole`
--
ALTER TABLE `picole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `sorvete`
--
ALTER TABLE `sorvete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
