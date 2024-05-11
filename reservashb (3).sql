-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 11/05/2024 às 21:41
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
-- Banco de dados: `reservashb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `aulas`
--

CREATE TABLE `aulas` (
  `id` int(11) NOT NULL,
  `aula` int(11) NOT NULL,
  `termino` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `aulas`
--

INSERT INTO `aulas` (`id`, `aula`, `termino`) VALUES
(1, 1, '08:10'),
(2, 2, '09:00'),
(3, 3, '10:10'),
(4, 4, '11:00'),
(5, 5, '11:50'),
(6, 6, '14:00'),
(7, 7, '14:50'),
(8, 8, '16:00'),
(9, 9, '23:20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipamentos`
--

CREATE TABLE `equipamentos` (
  `id` int(11) NOT NULL,
  `equipamento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id`, `equipamento`) VALUES
(1, 'Projetor 1'),
(2, 'Projetor 2'),
(3, 'Projetor 3'),
(11, 'Roteador 1'),
(12, 'Roteador 2'),
(13, 'Roteador 3'),
(14, 'Roteador 4'),
(15, 'Roteador 5'),
(16, 'notebook 1'),
(17, 'notebook 2'),
(18, 'notebook 3'),
(19, 'notebook 4'),
(20, 'caixa de som 1'),
(21, 'caixa de som 2'),
(22, 'caixa de som 3'),
(23, 'caixa de som 4'),
(24, 'caixa de som 5'),
(25, 'caixa de som 6'),
(26, 'caixa de som 7'),
(27, 'caixa de som 8'),
(28, 'cabo p2 p10 1'),
(29, 'cabo p2 p10 2'),
(30, 'cabo p2 p10 3'),
(31, 'cabo p2 p10 4'),
(32, 'cabo HDMI 1'),
(33, 'cabo HDMI 2'),
(34, 'cabo HDMI 3'),
(35, 'cabo HDMI 4'),
(36, 'cabo HDMI 5'),
(37, 'cabo HDMI 6'),
(38, 'cabo HDMI 7'),
(39, 'cabo HDMI 8'),
(40, 'cabo HDMI 9'),
(41, 'cabo HDMI 10'),
(42, 'cabo audio 1'),
(43, 'cabo audio 2'),
(44, 'cabo audio 3'),
(45, 'Extensão 1'),
(46, 'Extensão 2'),
(47, 'Extensão 3'),
(48, 'Extensão 4'),
(49, 'Extensão 5');

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `cpf`) VALUES
(1, 'Francisco Adalcélio Borges Pimenta', '00739590308'),
(2, 'Aleks Roque Alexandre da Silva', '05701623351'),
(3, 'Lara Severo Vieira', '05914063302'),
(4, 'Kelly Lara do Nascimento Sousa', '02671890362'),
(5, 'Sara Ribeiro dos Santos', '02607329310'),
(6, 'Juan Erick Barbosa de Farias', '02675836303'),
(7, 'Matheus dos santos Albuquerque', '01440299366'),
(8, 'Napoleão Evangelista Pereira da Silva', '05000212363'),
(9, 'Lidiane Gondim Barros', '05351816393'),
(10, 'Beiviton Santana Bispo de Oliveira', '04701770558'),
(11, 'Bruno Paulino do Nascimento', '04641305307'),
(12, 'Eliane Matias de Sousa', '99966115315'),
(13, 'Ana Roberta Nógimo Rodrigues', '64708330391'),
(14, 'Jussara Bezerra da Silva', '03867614342'),
(15, 'Daniella Monteiro Roque de Oliveira', '89158644334'),
(16, 'Lívio de Souza Ponte', '00257425314'),
(17, 'Maria Goreth Pimentel', '23031832353'),
(18, 'Maria Liduina da Silva Simão', '27296008334'),
(19, 'Luciana Cristina de Sousa Franco', '02115436326'),
(20, 'Raimundo Ítalo Câmara Pimentel', '42704863334'),
(21, 'Maria do Carmo Amâncio do Rego', '22411070349'),
(22, 'Nabirra Nógimo da Silva Vital', '25897659320'),
(23, 'Paulo Ricardo Saraiva de Sousa', '79552471320'),
(24, 'Raimunda Laine Firmino Barbosa', '01872736343'),
(25, 'Rosana Norberto Dantas', '01775967328'),
(26, 'Tereza Tamirys da Silva Medeiros', '04081058369'),
(27, 'Roberto Rivelino Cavalcante', '25221005808');

-- --------------------------------------------------------

--
-- Estrutura para tabela `reservas1`
--

CREATE TABLE `reservas1` (
  `id` int(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `equipamento` varchar(110) NOT NULL,
  `aulas` varchar(15) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `termino` varchar(10) NOT NULL,
  `data_exclusao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `reservas1`
--

INSERT INTO `reservas1` (`id`, `nome`, `equipamento`, `aulas`, `dia`, `created_at`, `termino`, `data_exclusao`) VALUES
(4, 'Lívio de Souza Ponte', 'projetor 3, ', '1', '2024-06-05', '2024-05-11 19:06:31', '08:10', '9999-99-99');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `reservas1`
--
ALTER TABLE `reservas1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `equipamentos`
--
ALTER TABLE `equipamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `reservas1`
--
ALTER TABLE `reservas1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
