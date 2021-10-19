-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Out-2021 às 23:55
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `valor`, `estoque`) VALUES
(1, 'Sapato Social', 'aaaaaaaaaaaafdsfdfsdf', '189.99', 12),
(3, 'Vestido', 'adaf', '250.00', 7),
(4, 'Olympikus', 'Tênis Olympikus Selene Preto\r\n\r\n', '129.99', 20),
(5, 'Tênis para Esporte', 'Tênis Olympikus Selene Azul', '129.99', 20),
(6, 'Jogging', 'Tênis Jogging Via Marte Branco', '99.99', 20),
(12, 'Camisa Social', 'Camisa com Babado na Gola Azul', '129.90', 20),
(15, 'Camisa Polo', 'Polo Azul Royal Feminina', '0.40', 20),
(18, 'Calças', 'Calça Jeans Sawary Skinny 360° com Cinta e Puídos', '189.99', 20),
(20, 'Calção Preto', 'Short Boxer Preta com Elástico Esportivo', '39.99', 20),
(22, 'Short Jeans', 'Short Azul', '99.90', 20),
(23, 'Dariely', 'Bota Montaria Feminina Bottero Couro Preto', '149.99', 17),
(24, 'Bota Masculina', 'Coturno Masculino Polo State Bronxy Marrom Brown', '0.40', 8),
(25, 'Camisa Estampa', 'Camiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha. Modelagem tradicional. Possui estampa ilustrativa de peixe-espada. Detalhe de etiqueta decorativa da marca. Aposte em calça jeans skinny e tênis slip on, para um visual despojado e moderno!\r\nCamiseta confeccionada em meia malha.\r\n\r\n\r\n\r\n', '50.00', 7),
(30, 'Bermudas', 'Bermuda com Cordel e Detalhe Destroyed Jeans', '139.99', 4),
(32, 'Loja Virtual', 'Está buscando uma loja virtual completa que possa te atender em tudo e para qualquer tipo de produto? Se a resposta é sim então acaba de encontrar, neste treinamento você aprenderá a criar do zero uma loja virtual completa, caso não tenha interesse no curso ela também virá pronta com os arquivos já prontos para instalação.', '199.99', 998),
(33, 'Camisa Polo', 'Camisa Polo Diversas cores ....', '80.00', 20),
(34, 'Camisa Manga Curta', 'Camisa Polo Diversas cores ....', '60.00', 4),
(35, 'Camisa', 'Camisa preta', '50.00', 60);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'Visaotec', 'admin@admin.com', '123', 'usuario'),
(2, 'Administrador', 'admin@hotmail.com', '123', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
