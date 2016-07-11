-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql113.byethost7.com
-- Tempo de Geração: 29/06/2016 às 08:29:09
-- Versão do Servidor: 5.6.30-76.3
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `b7_16656868_helpdesk`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_teste`
--

CREATE TABLE IF NOT EXISTS `produtos_teste` (
  `id` int(4) NOT NULL DEFAULT '0',
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descricao` varchar(100) CHARACTER SET utf8 NOT NULL,
  `selecionado` enum('sim','nao') CHARACTER SET utf8 NOT NULL,
  `quem` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tel` int(11) NOT NULL,
  `preco` float NOT NULL,
  `parcelaTotal` float NOT NULL,
  `parcela1` float NOT NULL,
  `parcela2` float NOT NULL,
  `parcela3` float NOT NULL,
  `parcela4` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_teste`
--

INSERT INTO `produtos_teste` (`id`, `nome`, `descricao`, `selecionado`, `quem`, `email`, `tel`, `preco`, `parcelaTotal`, `parcela1`, `parcela2`, `parcela3`, `parcela4`) VALUES
(1, 'CAFETEIRA', '', 'nao', 'Jbv', 'karen.carolina96@gmail.com', 0, 100, 0, 0, 0, 0, 0),
(2, 'ESPREMEDOR DE FRUTAS', '', 'nao', '', '0', 0, 150, 0, 0, 0, 0, 0),
(3, 'MICROONDAS', '', 'nao', '', '0', 0, 260, 0, 0, 0, 0, 0),
(4, 'APARELHO DE CAFE', '', 'nao', '', '0', 0, 180, 0, 0, 0, 0, 0),
(5, 'APARELHO DE JANTAR', '', 'nao', '', '0', 0, 150, 0, 0, 0, 0, 0),
(6, 'JOGO DE SOBREMESA', '', 'nao', '', '0', 0, 0, 0, 0, 0, 0, 0),
(7, 'ARMARIO DE COZINHA', '', 'nao', 'Lucas ', 'jacks2kar@gmail.com', 30692405, 330, 0, 0, 0, 0, 0),
(8, 'MESA DE 4 CADEIRAS', '', 'nao', '', '0', 0, 260, 0, 0, 0, 0, 0),
(9, 'PANELA DE PRESSAO', '', 'nao', '', '0', 0, 135, 0, 0, 0, 0, 0),
(10, 'SUPORTE P/ MICROONDAS', '', 'nao', '', '0', 0, 120, 0, 0, 0, 0, 0),
(11, 'TABUA DE PASSAR', '', 'nao', '', '0', 0, 70, 0, 0, 0, 0, 0),
(12, 'MALA DE FERRAMENTAS', '', 'nao', '', '0', 0, 200, 0, 0, 0, 0, 0),
(13, 'GUARDA ROUPA', '', 'nao', 'Lucas ', 'jacks2kar@gmail.com', 30692405, 340, 0, 0, 0, 0, 0),
(14, 'CAMA DE CASAL', '', 'nao', 'EDMILSON MESSIAS QUINTINO', 'karen.carolina96@gmail.com', 976302776, 1000, 142.857, 0, 0, 0, 0),
(15, 'COLCHA DO DIA', '', 'nao', '', '0', 0, 260, 0, 0, 0, 0, 0),
(16, 'KIT EDREDOM', '', 'nao', '', '0', 0, 120, 0, 0, 0, 0, 0),
(17, 'CADEIRA P/ COMPUTADOR', '', 'nao', '', '0', 0, 270, 0, 0, 0, 0, 0),
(18, 'BATEDEIRA', '', 'nao', 'Edmilson', 'karen.carolina96@gmail.com', 976302776, 250, 0, 0, 0, 0, 0),
(19, 'PRAIA DA PIPA', '', 'nao', '', '', 0, 180, 0, 0, 0, 0, 0),
(20, 'PROCESSADOR', '', 'nao', 'Edmilson', 'emquintino@ig.com.br', 216, 200, 0, 0, 0, 0, 0),
(21, 'PASSEIO DE QUADRICICLO', '', 'nao', '', '', 0, 280, 0, 0, 0, 0, 0),
(22, 'PASSEIO DE BARCO', '', 'nao', '', '', 0, 360, 0, 0, 0, 0, 0),
(23, 'COLCHAO CASAL P/ BOX', '', 'nao', 'Lucas', 'jacks2kar@gmail.com', 30692405, 550, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
