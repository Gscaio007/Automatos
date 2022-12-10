-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10-Dez-2022 às 21:37
-- Versão do servidor: 10.5.16-MariaDB
-- versão do PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id19834913_dbauto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `marca` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preço` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelos`
--

CREATE TABLE `modelos` (
  `id` int(100) NOT NULL,
  `marca` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imgb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imgint` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `preço` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `performance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cambio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `design` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tecnologia` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `modelos`
--

INSERT INTO `modelos` (`id`, `marca`, `modelo`, `cor`, `img`, `imgb`, `imgint`, `preço`, `performance`, `cambio`, `design`, `tecnologia`) VALUES
(1, 'BMW', 'M3 GTR', 'Prata', 'bmw.jpg', 'bmwb.jpg', 'bmwint.jpg', '1.000.000', '5.5 Aspirado V8 450cv', 'Manual sequêncial 6 marchas', 'GT Turismo', 'Periféricos removidos'),
(2, 'Mitsubishi', 'Eclipse 1995', 'Verde', 'eclipse.jpg', 'eclipseb.jpg', 'eclipseint.jpg', '90.000', '2.0 Turbo 4-cilindros em linha 280cv', 'Manual 5 marchas', 'gs-t Coupé', 'Sistema NOS'),
(3, 'Chevrolet', 'Cruze', 'Vermelho', 'cruze.png', 'cruzeb.jpg', 'cruzeint.jpg', '60.000', 'Turbo 4-cilindros em linha 153cv 1.4', 'Automático 6 marchas', 'Hatch', 'Teto Solar, OnStar + WIFI Nativo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
