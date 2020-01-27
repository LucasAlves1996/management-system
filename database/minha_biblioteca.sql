-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jan-2020 às 00:51
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minha_biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `cpf`) VALUES
(1, 'Lucas', 'lucas@lucas.com', '123456789', '131356967'),
(2, 'Marcos', 'marcos@123.com', '35331583', '123456789'),
(3, 'João', 'joao@gmail.com', '333333333', '555555555555'),
(4, 'Fernando', 'fpcosta77@gmail.com', '99999999999', '111111111111'),
(5, 'silvia', 'silvia@silvia', '123', '321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `editora` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `img_localizacao` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `nome`, `editora`, `autor`, `img_localizacao`, `status`) VALUES
(1, 'fgwegg', 'ewgweg', 'wegweg', 'App/Views/template/files/imgs/fundo.jpg', 1),
(2, 'teste', 'teste', 'teste', 'App/Views/template/files/imgs/fundo.jpg', 1),
(3, 'teste2', 'teste2', 'teste2', 'App/Views/template/files/imgs/fundo.jpg', 1),
(4, 'Guitarra do zero ao profissional com Ximbinha', 'TABAJARA', 'Seu Kreisson', 'App/Views/template/files/imgs/mizeravi.png', 1),
(5, 'Matemática financeira avançada', '4+4', 'Mizeravi', 'App/Views/template/files/imgs/mizeravi.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `modules`
--

CREATE TABLE `modules` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_view` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `module_view`) VALUES
(1, 'Administrar clientes', 'adm-clientes'),
(2, 'Administrar livros', 'adm-livros'),
(3, 'Administrar reservas', 'adm-reservas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `data_retirada` date NOT NULL,
  `data_devolucao` date NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `data_retirada`, `data_devolucao`, `id_cliente`, `id_livro`, `status`) VALUES
(1, '2019-09-18', '2019-09-18', 1, 1, 0),
(2, '2019-09-19', '2019-09-26', 1, 2, 0),
(3, '2019-09-19', '2019-09-20', 2, 1, 0),
(4, '2019-09-19', '2019-09-27', 1, 2, 0),
(5, '2019-09-19', '2019-10-04', 1, 2, 0),
(6, '2019-09-20', '2019-09-27', 2, 2, 0),
(7, '2019-09-20', '2019-09-27', 1, 1, 0),
(8, '2019-09-20', '2019-09-21', 3, 3, 0),
(9, '2019-12-31', '2020-01-04', 2, 3, 0),
(10, '2019-12-31', '2020-01-04', 1, 4, 0),
(11, '2020-01-25', '2020-01-27', 1, 5, 0),
(12, '2020-01-25', '2020-01-30', 5, 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_livro` (`id_livro`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
