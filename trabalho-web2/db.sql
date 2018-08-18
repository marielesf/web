-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Jun-2018 às 04:53
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(3) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`cat_id`, `nome`) VALUES
(1, 'Notebook'),
(2, 'Desktop'),
(3, 'Monitor'),
(4, 'Placa de vídeo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(60) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `preco` int(11) NOT NULL,
  `qtd` int(20) NOT NULL,
  `img_link` varchar(300) NOT NULL,
  `cat_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `qtd`, `img_link`, `cat_id`) VALUES
(1, 'Geforce Galax Gtx Entusiasta Nvidia Gtx 1060 Oc Dual Fan 6gb Ddr5 192bit 8008mhz 1518mhz 1280 Cuda', 1800, 10, 'https://images-submarino.b2w.io/produtos/01/00/item/18775/3/18775352_1SZ.jpg', 4),
(2, 'Placa De Video Asus Geforce Gtx 1070 Oc 8gb Ddr5 256bits - Dual-Gtx1070-O8g', 2900, 8, 'https://images-submarino.b2w.io/produtos/01/00/sku/17574/6/17574656_1GG.jpg', 4),
(3, 'Monitor Gamer LED 25 IPS ultrawide Full HD 25UM58 - LG', 820, 7, 'https://images-submarino.b2w.io/produtos/01/00/item/128365/7/128365797SZ.jpg', 3),
(4, 'Monitor Gamer LED 29\" IPS 1ms ultrawide Full HD 29UM69G - LG', 1300, 15, 'https://images-submarino.b2w.io/produtos/01/00/item/132609/4/132609475SZ.jpg', 3),
(5, 'Monitor Led IPS 21,5\" LG Full HD 22MP58VQ-P.AWZ', 632, 5, 'https://images-submarino.b2w.io/produtos/01/00/item/128361/2/128361219SZ.jpg', 3),
(6, 'Monitor LED 21.5\'\' Samsung Wide S22E310 Full HD HDMI - Preto', 632, 15, 'https://images-submarino.b2w.io/produtos/01/03/item/124284/0/124284017SZ.jpg', 3),
(21, 'Notebook Lenovo Ideapad 320 Intel® Core i7-7500u 8GB (GeForce 940MX com 2GB) 1TB Tela FULL HD 15,6\" Windows 10 - Prata', 2950, 35, 'https://images-submarino.b2w.io/produtos/01/00/item/132384/8/132384827SZ.jpg', 1),
(22, 'Notebook Dell Inspiron i15-5567-A30B Intel Core i5 8GB (AMD Radeon R7 M445 de 2GB) 1TB Tela LED 15,6\" Windows 10 - Branco', 2850, 40, 'https://images-submarino.b2w.io/produtos/01/00/item/131530/9/131530941_2SZ.jpg', 1),
(23, 'Notebook Acer A515-51G-72DB Intel Core I7 8GB (GeForce 940MX com 2GB) 1TB Tela LED 15.6\" Windows 10 - Cinza Escuro', 2852, 40, 'https://images-submarino.b2w.io/produtos/01/00/item/132620/8/132620885_2SZ.jpg', 1),
(24, 'Notebook Gamer Acer VX5-591G-54PG Intel Core i5 8GB (GeForce GTX 1050 com 4GB) 1TB Tela LED 15,6\" Windows 10 - Preto', 3589, 2, 'https://images-submarino.b2w.io/produtos/01/00/item/132134/3/132134369SZ.jpg', 1),
(25, 'Notebook Samsung Expert X23 Intel Core I5 8GB (GeForce 920MX de 2GB) 1TB Tela 15,6\'\' LED HD Windows 10 - Branco', 2353, 4, 'https://images-submarino.b2w.io/produtos/01/00/item/132193/0/132193060SZ.jpg', 1),
(26, 'Notebook Samsung Expert X23 Intel Core I5 8GB (GeForce 910M de 2GB) 1TB Tela 15,6\'\' LED HD Windows 10 - Preto', 3231, 46, 'https://images-submarino.b2w.io/produtos/01/00/item/132538/2/132538283SZ.jpg', 1),
(27, 'Notebook Ultraportátil Dell XPS-9370-M30S 8ª geração Intel Core i7 16GB 512GB UHD 13.3\" Windows 10', 10127, 2, 'https://images-submarino.b2w.io/produtos/01/00/sku/31727/9/31727961_1GG.jpg', 1),
(28, 'Notebook A515-51G-C690 Intel Core 8 I7 8GB (GeForce MX130 com 2GB) 1TB LED Full HD 15.6\" W10 - Acer', 3246, 16, 'https://images-submarino.b2w.io/produtos/01/00/item/133518/2/133518284_1GG.jpg', 1),
(29, 'Desktop AIO 24V570-C.BJ31P1 Intel Core 7 i5 4GB 1TB LED 23,8 Windows 10 com TV Digital - LG', 3100, 6, 'https://images-submarino.b2w.io/produtos/01/00/item/132384/1/132384106_1GG.jpg', 2),
(30, 'Desktop All in One 24V570-C.BJ21P1 Intel Core i3 4GB 1TB LED 23,8 Windows 10 com TV Digital - LG', 2800, 10, 'https://images-submarino.b2w.io/produtos/01/00/item/133419/7/133419753_1GG.jpg', 2),
(31, 'Samsung Odyssey Gamer - Tela 15.6\" Full HD, Intel i5 7300HQ, 16GB DDR4, HD 1TB, GeForce GTX 1050', 6253, 20, 'https://images-submarino.b2w.io/produtos/01/00/sku/31160/8/31160879_1SZ.jpg', 1),
(32, 'Notebook Ultraportátil Dell XPS-9370-M10S 8ª geração Intel Core i7 8GB 256GB FHD 13.3\" Windows 10', 8000, 20, 'https://images-submarino.b2w.io/produtos/01/00/sku/31007/3/31007366_1SZ.jpg', 1),
(33, 'Notebook Acer A515-51G-C690 Intel Core I3 4GB 1TB Tela LED 15.6\" Windows 10 - Preto', 1800, 20, 'https://images-submarino.b2w.io/produtos/01/00/item/132620/9/132620922_4SZ.jpg', 1),
(34, 'Placa de Video GeForce GTX 1050 ti 4gb Ph-gtx1050ti-4g Ddr5 - Asus', 990, 10, 'https://images-submarino.b2w.io/produtos/01/00/item/133204/8/133204824_1GG.jpg', 4),
(35, 'Placa de Video GeForce GTX 1050 2gb Ddr5 - Gigabyte', 913, 15, 'https://images-submarino.b2w.io/produtos/01/00/item/133202/0/133202061SZ.jpg', 4),
(36, 'Placa de Video Radeon R9 285 2GB DDR5 Black Dd Radeon - XFX', 1220, 9, 'https://images-submarino.b2w.io/produtos/01/00/item/125566/0/125566091_1GG.jpg', 4),
(37, 'Placa de Video Radeon R9 285 2gb Ddr5 Windforce 2x Oc - Gigabyte', 1245, 8, 'https://images-submarino.b2w.io/produtos/01/00/item/124918/7/124918711_1GG.jpg', 4),
(38, 'Computador Gamer Neologic NLI80005 Intel Core I5-7400 7ª Geração 8GB (Gtx 1060 3GB) 1TB', 3820, 2, 'https://images-submarino.b2w.io/produtos/01/00/sku/24552/9/24552963_1SZ.jpg', 2),
(39, 'Computador Gamer Amd Fx 4300 8gb Hd 1tb Placa De Vídeo 2gb Dvi/hdmi/vga - Desktop Concordia', 1800, 8, 'https://images-submarino.b2w.io/produtos/01/00/sku/23297/4/23297447_1SZ.jpg', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `login` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `email`, `senha`) VALUES
(1, 'elvis', 'elvis@teste.com', '$2y$10$Hy9KlbKzczBjjzQAKmsmYu5v3aLkyMmb0dYEQcQSwaRO0VHixNpWi'),
(2, 'teste', 'elvispiedade', '$2y$10$qYkNIJymRBSSaVXs9f8eU.l9.qRWiOUuCufb77vruKuNuvQGOCkj2'),
(3, 'elvis4', 'elvispiedade4@gmail.com', '$2y$10$X.XJ0RZSnibdqG72hQrZNeODBm14uSphWaTYiYPncys/sw.KdkA6u'),
(4, 'alo', 'teste@teste', '$2y$10$oMe/6GW6nEID6TB4kd4u3Oxg91YE64e9fQQFIJqnIPxCUu0wqoCiC'),
(5, 'elvis5', 'elvispiedade@yahoo.com.br', '$2y$10$laHrAopDA3twwnq96b7kVue73GBS2t.GvsuouQYq0tQ96Kmf1Jcgi'),
(6, '', '', '$2y$10$/0/micTyH5SiA6yc/waeY.Tbm5H4rFkcpLcjxgGCDeBIQiPVn8LMa'),
(7, 'elvis6', 'elvispiedade@yahoo.com.br', '$2y$10$43PhRfxVfz//XtTmGYUygePeJwKLVsxEwnzIRby.nPRDtd88fwavu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_cat` (`cat_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `prod_cat` FOREIGN KEY (`cat_id`) REFERENCES `categoria` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
