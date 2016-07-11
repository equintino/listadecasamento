-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql113.byethost7.com
-- Tempo de Geração: 06/07/2016 às 09:03:25
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
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `selecionado` enum('sim','nao') NOT NULL,
  `quem` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `preco` float NOT NULL,
  `parcelaTotal` float NOT NULL,
  `parcela1` float NOT NULL,
  `parcela2` float NOT NULL,
  `parcela3` float NOT NULL,
  `parcela4` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `selecionado`, `quem`, `email`, `tel`, `preco`, `parcelaTotal`, `parcela1`, `parcela2`, `parcela3`, `parcela4`) VALUES
(1, 'CAFETEIRA', 'Cafeteira Elétrica Philco PH31 - Vermelho/Aço Escovado', 'nao', '', '', 0, 120, 0, 0, 0, 0, 0),
(2, 'ESPREMEDOR DE FRUTAS', ' Espremedor De Frutas Arno Citrus Power Preto Pa32', 'sim', 'ANDREZZA', '', 997679817, 150, 150, 0, 0, 0, 0),
(3, 'MICROONDAS', ' Microondas Consul Cinza Espelhado 20 Litros | CM020', 'nao', '', '', 0, 260, 0, 0, 0, 0, 0),
(4, 'APARELHO DE CAFE', 'Conjunto de Xícaras paChá em Porcelana 12 Peças Preto e Branco com Suporte de Metal', 'nao', '', '', 0, 70, 0, 0, 0, 0, 0),
(5, 'APARELHO DE JANTAR', ' Aparelho de Jantar e Lanche Oxford Quartier Tatoo White GT61-2495 - 16 Peças', 'nao', '', '', 0, 215, 0, 0, 0, 0, 0),
(6, 'JOGO DE SOBREMESA', '', 'nao', '', '', 0, 0, 0, 0, 0, 0, 0),
(7, 'ARMARIO DE COZINHA', 'Cozinha Compacta 4 Peças Poquema Julia C1 - Preto', 'nao', '', '', 0, 350, 0, 0, 0, 0, 0),
(8, 'MESA DE 4 CADEIRAS', ' Mesa Dobrável com Banqueta Mobile', 'nao', '', '', 0, 260, 0, 0, 0, 0, 0),
(9, 'PANELA DE PRESSAO', ' Panela de Pressão Revestida 4,5 litros Vermelha - Clock (Cód. 119344169)', 'nao', '', '', 0, 135, 0, 0, 0, 0, 0),
(10, 'SUPORTE P/ MICROONDAS', ' Suporte p/ Microondas Branco, Politorno', 'nao', '', '', 0, 120, 0, 0, 0, 0, 0),
(11, 'TABUA DE PASSAR', 'Tábua de Passar Madeira Compact Tramontina Código: 0358606', 'nao', '', '', 0, 70, 0, 0, 0, 0, 0),
(12, 'MALA DE FERRAMENTAS', 'Kit Oficina Portátil BlackDecker com Furadeira de Impacto 1/2" BlackDecker e Maleta com 42 Acessório', 'nao', '', '', 0, 200, 0, 0, 0, 0, 0),
(13, 'GUARDA ROUPA', 'Guarda-roupa 18495 araguari 3 portas e 3 gavetas - araplac', 'nao', '', '', 0, 470, 0, 0, 0, 0, 0),
(14, 'CAMA DE CASAL', 'Cama Box CASAL Bipartido Bau Frontal Pistão Corano Preto - 138x188 - (Bipartido) - Casal Padrão', 'nao', '', '', 0, 1215, 0, 0, 0, 0, 0),
(15, 'COLCHA DO DIA', 'Kit Colcha/Cobre-Leito Casal Fênix 5 Peças - Ouro Velho - A Criativa', 'nao', '', '', 0, 280, 0, 0, 0, 0, 0),
(16, 'KIT EDREDOM', 'EDREDOM CASAL PADRÃO VERMELHO COLOR BLOCK MALHA PENTEADA-VERMELHO', 'nao', '', '', 0, 120, 0, 0, 0, 0, 0),
(17, 'CADEIRA P/ COMPUTADOR', 'Cadeira Home Office Work Plus com Encosto em Nylon e Regulagem de Altura a Gás - Importado', 'nao', '', '', 0, 270, 0, 0, 0, 0, 0),
(18, 'BATEDEIRA', ' Batedeira Orbital Cadence BAT501 com 8 Velocidades e 400W de Potência - Vermelha', 'nao', '', '', 0, 250, 0, 0, 0, 0, 0),
(19, 'PRAIA DA PIPA', '', 'nao', '', '', 0, 180, 0, 0, 0, 0, 0),
(20, 'PROCESSADOR', ' Multiprocessador de Alimentos All in One 2 Velocidades Pulsar 800W, Vermelho, 110V - Philco', 'nao', '', '', 0, 200, 0, 0, 0, 0, 0),
(21, 'PASSEIO DE QUADRICICLO', '', 'nao', '', '', 0, 280, 0, 0, 0, 0, 0),
(22, 'PASSEIO DE BARCO', '', 'nao', '', '', 0, 360, 0, 0, 0, 0, 0),
(23, 'COLCHAO CASAL P/ BOX', 'Colchão Casal Ortobom Physical Spring 23X138X188cm – Branco e Preto', 'nao', '', '', 0, 510, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
