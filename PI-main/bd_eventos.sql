-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/07/2024 às 00:44
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
-- Banco de dados: `bd_eventos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_eventos`
--

CREATE TABLE `tb_eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_eventos`
--

INSERT INTO `tb_eventos` (`id`, `titulo`, `data`, `descricao`, `foto`) VALUES
(37, 'Sbo Rock fest', '2024-08-23', 'O maior festival Rock do interior de SP depois do João Rock', '1719354721.jfif'),
(48, 'TomorrowLand', '2025-05-06', 'Evento Psicodélico com uma estrutura surreal na fazenda maeda', '1719614754.jfif'),
(49, 'Nova Odessa festival', '2025-08-27', 'Festival musical na cidade de nova odessa com o Dj Stughuer', '1719614821.png'),
(50, 'Americana festival de Inverno', '2024-10-30', 'Evento Gastronomico na cidade de Americana com varias comidas tipícas', '1719614926.jfif'),
(51, 'Festa do Peão de Americana', '2024-06-11', 'Festa do boi onde tudo é caro e tem uns artistas mais ou menos', '1719958214.jpg'),
(52, 'americana  2025-12-05', '2024-12-12', '  americana festival tattoo 2024 com a presença ilustre dele, o cara da tattoo', '1719958321.jfif'),
(53, 'GBGS 2024', '2024-10-12', 'Feira sobre tecnologia e jogos realizada em SP e nós estaremos lá', '1719958886.jpg'),
(54, 'Encontro de carros antigos', '2024-09-09', 'Evento sobre carros antigos onde terá relíquias e vendas dos mesmos', '1719959130.png'),
(55, 'Custom Cars', '2025-07-10', 'evento sobre customização de carros, onde voce tera a oportunidade de ver como faz', '1719959186.jfif');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_eventos`
--
ALTER TABLE `tb_eventos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_eventos`
--
ALTER TABLE `tb_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
