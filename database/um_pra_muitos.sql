-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 15-Dez-2023 às 22:11
-- Versão do servidor: 5.7.22
-- versão do PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `um_pra_muitos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'Roupas', NULL, NULL),
(2, 'Eletronicos', NULL, NULL),
(3, 'Perfumes', NULL, NULL),
(4, 'Móveis', NULL, NULL),
(5, 'Alimentos', NULL, NULL),
(6, 'Informatica', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_12_15_013845_nome_da_migracao', 1),
(2, '2023_12_15_160258_create_categorias_table', 2),
(3, '2023_12_15_160322_create_produtos_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` double(8,2) NOT NULL,
  `estoque` int(11) NOT NULL,
  `categoria_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `estoque`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Camiseta Polo', 100.00, 4, 1, NULL, NULL),
(2, 'Calça Jeans', 120.00, 1, 1, NULL, NULL),
(3, 'Camisa Manga longa', 34.00, 4, 1, NULL, NULL),
(4, 'Camiseta Polo', 56.00, 2, 1, NULL, NULL),
(5, 'Pc Game', 37.00, 5, 2, NULL, NULL),
(6, 'Impressora', 100.00, 4, 6, NULL, NULL),
(7, 'Mouse', 37.00, 6, 6, NULL, NULL),
(8, 'Perfume', 55.00, 7, 3, NULL, NULL),
(9, 'Cama de casal', 11.00, 8, 4, NULL, NULL),
(10, 'Móveis', 11.00, 8, NULL, NULL, '2023-12-15 21:06:10'),
(11, 'Meu novo Produto', 100.00, 10, NULL, '2023-12-15 21:00:04', '2023-12-15 21:07:23'),
(12, 'Meu novo Produto adicionado', 400.00, 30, 2, '2023-12-15 21:57:21', '2023-12-15 21:57:21'),
(13, 'Meu novo Produto adicionado', 400.00, 30, 2, '2023-12-15 22:00:58', '2023-12-15 22:00:58'),
(14, 'Meu novo Produto adicionado', 400.00, 30, 2, '2023-12-15 22:02:06', '2023-12-15 22:02:06'),
(15, 'Meu novo Produto', 100.00, 10, 1, '2023-12-15 22:02:13', '2023-12-15 22:02:13');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produtos_categoria_id_foreign` (`categoria_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
