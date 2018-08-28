-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Ago-2018 às 03:30
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comicsnews`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `ID` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`ID`, `titulo`, `descricao`, `img`, `data`, `autor`) VALUES
(102, 'DC', 'A DC Comics é uma editora norte-americana situada na Califórnia, especializada em histórias em quadrinhos e mídias relacionadas, sendo considerada uma das maiores companhias, ligadas a este ramo no mundo. A empresa é subsidiária da companhia Time Warner e detém a propriedade intelectual de muitos dos mais famosos personagens de quadrinhos daquele país, como Batman, Superman, Mulher-Maravilha, Supergirl, Lanterna Verde, Flash, Aquaman, Arqueiro Verde, Asa Noturna, Caçador de Marte, Shazam e seus grupos como Liga da Justiça da América, Sociedade da Justiça da América, justiça jovem, Novos Titãs, Renegados, Aves de Rapina, Patrulha do Destino, Legião dos Super-Heróis, All-Star Squadron, entre outros. Por décadas a DC tem sido uma das maiores companhias de quadrinhos daquele país. Originalmente, a companhia era conhecida como National Comics e com o tempo passou a adotar a sigla \"DC\" que originalmente se referia a Detective Comics, uma de suas revistas mais vendidas (a qual é publicada até hoje e apresenta histórias do Batman).\r\n\r\nLocalizada originalmente na cidade de Nova Iorque no número 432 da Fourth Avenue, a DC foi sucessivamente realocada e hoje está no número 2900 W Alameda Ave, Burbank, CA 91505, Estados Unidos.', 'img/foto-post/dc.jpg', '2018-08-28 01:18:02', 'Rayane Piheiro'),
(103, 'Marvel', 'Marvel Comics\r\n\r\nGênero	Editora\r\nFundação	1939 (como Timely Comics)\r\nFundador(es)	Martin Goodman\r\nSede	135 W. 50th Street, Nova York, NY, Estados Unidos\r\nProprietário(s)	The Walt Disney Company, dona da Marvel Entertainment, companhia à qual pertence a Marvel Comics.\r\nPessoas-chave	C.B. Cebulski, editor-chefe\r\nDan Buckley, editor, COO\r\nStan Lee, antigo editor-chefe, editor\r\nProdutos	Revistas, Filmes e Livros\r\nRenda líquida	Aumento US$125.7 milhões (2007)\r\nWebsite oficial	www.marvel.com\r\nMarvel Comics é o nome comum e marca principal da Marvel Worldwide Inc., anteriormente Marvel Publishing, Inc. e Marvel Comics Group, uma editora de quadrinhos americanos e mídia relacionada. Em 2009, The Walt Disney Company adquiriu a Marvel Entertainment, a empresa-mãe da Marvel Worldwide.\r\n\r\nMarvel começou em 1939 como Timely Comics, e no início da década de 1950, geralmente se tornou conhecida como Atlas Comics. A marca Marvel começou em 1961, ano em que a empresa lançou Quarteto Fantástico e outros títulos de super-heróis criados por Stan Lee, Jack Kirby, Steve Ditko e muitos outros.\r\n\r\nMarvel conta entre seus personagens como super-heróis bem conhecidos como Homem-Aranha, Wolverine, Hulk, Thor, Homem de Ferro, Capitão América, Capitã Marvel, Feiticeira Escarlate, Pantera Negra, Demolidor e Doutor Estranho, incluindo equipes como Vingadores, X-Men, Guardiões da Galáxia e Quarteto Fantástico, e antagonistas como Doutor Destino, Caveira Vermelha, Duende Verde, Magneto e Loki. A maioria dos personagens fictícios de Marvel operam em uma única realidade conhecida como o Universo Marvel, com a maioria dos locais refletindo lugares da vida real; Muitos personagens principais são baseados em Nova York.', 'img/foto-post/marvel.jpeg', '2018-08-28 01:18:36', 'Rayane Piheiro'),
(104, 'Flash', 'Flash é um nome compartilhado por diversos super-heróis da DC Comics. Criado pelo escritor Gardner Fox e pelo artista Harry Lampert, o Flash original estreou em Flash Comics #1 (1940).\r\n\r\nUma vez apelidado velocista escarlate, o Flash possui \"super-velocidade\", consegue mover-se a uma velocidade sobre-humana ou seja incluia a habilidade de correr e mover-se extremamente rápido, usar reflexos sobre-humanos e violar certas Leis da física, podendo até mesmo ultrapassar a velocidade da luz. Até então, quatro diferentes personagens, cada qual de algum modo ganhou o poder da super-velocidade, assumiram a identidade de Flash: Jay Garrick (1940-1956), Barry Allen (1956-1986, 2008-), Wally West (1986-2006, 2007-) Bart Allen (2006-2007).\r\n\r\nA segunda versão do Flash é geralmente considerada o primeiro herói da Era de Prata dos Quadrinhos e o super-herói permaneceu um dos mais populares desde então. Cada versão do Flash foi um membro chave ou da Sociedade da Justiça da América ou da Liga da Justiça, principais grupos da DC.\r\n\r\nUma versão de Barry Allen foi vista em um seriado de tv, estrelado por John Wesley Shipp. Uma versão Wally West foi utilizada na série animada Liga da Justiça.', 'img/foto-post/flash.jpg', '2018-08-28 01:26:05', 'Rayane Piheiro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
