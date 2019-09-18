-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Set-2019 às 19:23
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `labes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doutorado`
--

CREATE TABLE `doutorado` (
  `id_doutorado` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `local` text NOT NULL,
  `ano_obtencao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `graduacao`
--

CREATE TABLE `graduacao` (
  `id_graduacao` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `local` text NOT NULL,
  `ano_obtencao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `linha_pesquisa`
--

CREATE TABLE `linha_pesquisa` (
  `id_linha_pesquisa` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `local` text NOT NULL,
  `ano_obtencao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livre_docencia`
--

CREATE TABLE `livre_docencia` (
  `id_livre_docencia` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `local` text NOT NULL,
  `ano_obtencao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mestrado`
--

CREATE TABLE `mestrado` (
  `id_mestrado` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `local` text NOT NULL,
  `ano_obtencao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pos_doutorado`
--

CREATE TABLE `pos_doutorado` (
  `id_pos_doutorado` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `local` text NOT NULL,
  `ano_obtencao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id_professor` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `link-lattes` text NOT NULL,
  `descricao` text CHARACTER SET utf8 NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id_professor`, `nome`, `email`, `link-lattes`, `descricao`, `foto`) VALUES
(1, 'Elisa Nakagawa', 'elisa@icmc.usp.br', 'http://lattes.cnpq.br/7494142007764616', 'É professora associada do Departamento de Sistemas de Computação do Instituto de Ciências Matemáticas e de Computação da Universidade de São Paulo (ICMC/USP). Atua no Programa de Pós-Graduação em Ciências de Computação e Matemática Computacional do ICMC/USP (Nível 7 da Capes) como orientadora de alunos de mestrado e doutorado e como responsável por disciplinas de pós-graduação. Também é co-orientadora no PhD-Program of Computer Science e do Regular Master in Computer Science da University of Kaiserslautern, Alemanha, do Groningen Graduate School of Science da University of Groningen, Holanda, da Faculty of Science, Technology & Environment da University of the South Pacific, Fiji, e da Pós-Graduação em Ciência, Tecnologia e Sociedade da Universidade Federal de São Carlos (UFSCar). Tem sido coordenadora de projetos de pesquisa nacionais e internacionais financiados pela Fundação de Amparo à Pesquisa do Estado de São Paulo (FAPESP), Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq), Coordenação de Aperfeiçoamento de Pessoal de Nível Superior (Capes) e pela Netherlands Universities Foundation for International Cooperation (Nuffic). Foi curadora do Museu de Computação do ICMC/USP nos últimos 4 anos e participa ativamente de atividades de cultura e extensão na USP, além de ser coordenadora de diversos projetos de cultura e extensão nos últimos anos como o Projeto Memória Virtual. Tem sido paraninfa, tutora e professora homenageada de turmas de graduação. É assessora científica de agências de fomento à pesquisa nacional e internacional (Netherlands Organisation for Scientific Research (NWO), FAPESP, Fundação de Amparo à Pesquisa do Estado do Amazonas (FAPEAM) e da Fundação de Amparo à Ciência e Tecnologia do Estado de Pernambuco (FACEPE)), tem sido coordenador de eventos nacionais e internacionais, bem como membro de comitês de programa de várias conferências e workshops e revisora em revistas nacionais e internacionais, tais como a IEEE Software, IEEE Transactions on Software Engineering (TSE), Information and Software Technology (IST), IEEE Computer, Journal of Systems and Software (JSS), Data & Knowledge Engineering Journal (DKE) e Concurrency and Computation. Em termos de formação acadêmica, conduziu seu projeto de pós-doutorado em 2014-2015 na Université Bretagne Sud, França, e em 2011-2012 na Fraunhofer Institute for Experimental Software Engineering (Fraunhofer IESE), Alemanha. Possui o título de livre docência (2013), de doutor (2006) e de mestre (1998) em Ciências de Computação e Matemática Computacional pela USP. É bacharel em Ciências de Computação também pela USP (1994). Tem experiência na área de Engenharia de Software, atuando principalmente nos seguintes temas: arquitetura de software, arquitetura de referência, sistemas-de-sistemas, linha de produto de software, teste de software, ontologia e software livre. Dentre as principais contribuições de pesquisa, tem-se o estabelecimento, representação, avaliação e utilização de arquiteturas de referência, inclusive para sistemas-de-sistemas. É membro da Sociedade Brasileira de Computação (SBC) e da IEEE Computer Society. É também representante institucional da SBC no ICMC/USP.', ''),
(2, 'Rosana Braga', '', '', '', ''),
(3, 'Ellen Barbosa', '', '', '', ''),
(4, 'Simone de Souza', '', '', '', ''),
(5, 'José Maldonado', '', '', '', ''),
(6, 'João de Albuquerque', '', '', '', ''),
(7, 'Marcio Delamaro', '', '', '', ''),
(8, 'Seiji Isotani', '', '', '', ''),
(9, 'Paulo Masiero', '', '', '', ''),
(10, 'Adenilso Simão', '', '', '', ''),
(11, 'Renata Fortes', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_linha_pesquisa`
--

CREATE TABLE `professor_linha_pesquisa` (
  `id_professor_linha_pesquisa` int(11) NOT NULL,
  `id_professor` int(11) NOT NULL,
  `id_linha_pesquisa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doutorado`
--
ALTER TABLE `doutorado`
  ADD PRIMARY KEY (`id_doutorado`);

--
-- Índices para tabela `graduacao`
--
ALTER TABLE `graduacao`
  ADD PRIMARY KEY (`id_graduacao`);

--
-- Índices para tabela `linha_pesquisa`
--
ALTER TABLE `linha_pesquisa`
  ADD PRIMARY KEY (`id_linha_pesquisa`);

--
-- Índices para tabela `livre_docencia`
--
ALTER TABLE `livre_docencia`
  ADD PRIMARY KEY (`id_livre_docencia`);

--
-- Índices para tabela `mestrado`
--
ALTER TABLE `mestrado`
  ADD PRIMARY KEY (`id_mestrado`);

--
-- Índices para tabela `pos_doutorado`
--
ALTER TABLE `pos_doutorado`
  ADD PRIMARY KEY (`id_pos_doutorado`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_professor`);

--
-- Índices para tabela `professor_linha_pesquisa`
--
ALTER TABLE `professor_linha_pesquisa`
  ADD PRIMARY KEY (`id_professor_linha_pesquisa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doutorado`
--
ALTER TABLE `doutorado`
  MODIFY `id_doutorado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `graduacao`
--
ALTER TABLE `graduacao`
  MODIFY `id_graduacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `linha_pesquisa`
--
ALTER TABLE `linha_pesquisa`
  MODIFY `id_linha_pesquisa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livre_docencia`
--
ALTER TABLE `livre_docencia`
  MODIFY `id_livre_docencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mestrado`
--
ALTER TABLE `mestrado`
  MODIFY `id_mestrado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pos_doutorado`
--
ALTER TABLE `pos_doutorado`
  MODIFY `id_pos_doutorado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id_professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `professor_linha_pesquisa`
--
ALTER TABLE `professor_linha_pesquisa`
  MODIFY `id_professor_linha_pesquisa` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
