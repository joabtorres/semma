-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2022 às 22:00
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `semma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formularios`
--

CREATE TABLE `formularios` (
  `cod` int(10) UNSIGNED NOT NULL,
  `coordenacao` varchar(10) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `data` varchar(30) NOT NULL,
  `descricao` text NOT NULL,
  `anexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `formularios`
--

INSERT INTO `formularios` (`cod`, `coordenacao`, `tipo`, `data`, `descricao`, `anexo`) VALUES
(1, 'cla', 'Declaração', 'Novembro/2022', 'Declaração de Informações Ambientais', ''),
(2, 'cla', 'Requerimento', 'Novembro/2022', 'Requerimento Padrão Geral', ''),
(3, 'cla', 'Requerimento', 'Novembro/2022', 'Requerimento Padrão de Dispensa', ''),
(4, 'cla', 'Requerimento', 'Novembro/2022', 'Requerimento Padrão Declaratório', ''),
(5, 'cla', 'Checklist', 'Novembro/2022', 'Checklist Supressão Vegetal', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `legislacoes`
--

CREATE TABLE `legislacoes` (
  `cod` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `esfera` varchar(255) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `ano` int(4) NOT NULL,
  `data` varchar(15) NOT NULL,
  `ementa` text NOT NULL,
  `diario` text NOT NULL,
  `anexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `legislacoes`
--

INSERT INTO `legislacoes` (`cod`, `categoria`, `esfera`, `numero`, `ano`, `data`, `ementa`, `diario`, `anexo`) VALUES
(1, 'Decretos', 'Municipal', '041', 2015, '02/10/2015', 'Este detreto estabelece que os servidores da Secretaria Municipal de Meio Ambiente (SEMMA) lotados na Coordenadoria de Fiscalização e Proteção Ambiental, a competência legal para apurar infrações ambientaos, lavrar instrumentos de fiscalização, aplicar sanções administrativas que evitem a continuidade de danos ambientais.', '', 'https://drive.google.com/file/d/1hURKMDiMkRSFh-fc3tJAW8aBiQk_eGTM/view'),
(2, 'Decretos', 'Municipal', '049', 2021, '03/03/2021', 'Ficam estabelecidos os intervalos para o licenciamento ambiental das atividades descritas nos Anexos I, e II da Resolução COEMA N° 162/2021, de competência de Castanhal, através da Secretaria Municipal de Meio Ambiente – SEMMA.', 'https://drive.google.com/file/d/1ClJTUgAh7EeBlDvoQxOYVAn7HCT72GI1/view', 'https://drive.google.com/file/d/1ZCRoHQUPDu41ykQ0_z7VBxdVkTTC69Hd/view'),
(3, 'Decretos', 'Municipal', '106', 2021, '22/06/2021', 'Este Decreto regulamenta os procedimentos de destinação de produtos e subprodutos apreendidos pelo órgão ambiental competente, no âmbito do Município de Castanhal, em casos de infrações ambientais.', 'https://drive.google.com/file/d/15uuhCu61fFDRso6nULEiHxCGZnj76H5H/view', 'https://drive.google.com/file/d/1TSfCOHdUVIAKOZRjNLIemjWlH5M0Pd65/view'),
(4, 'Decretos', 'Municipal', '230', 2021, '25/11/2021', 'Ficam reenquadrados os intervalos da tipologia Casas de festas e eventos, constantes no anexo II do Decreto Municipal nº 049, de 03 março de 2021, passando a constar da forma descrita na tabela anexa a este Decreto.', 'https://drive.google.com/file/d/1aJiCSy24zIks-Gv4z5GKJ-gz8fj01Zdo/view', 'https://drive.google.com/file/d/1YCxkuKKyEp4Q9hILa3-nHESlaeVS0078/view'),
(5, 'Leis Complementares', 'Municipal', '001', 2020, '11/09/2020', 'Esta Lei Complementar estabelece a reorganização administrativa dos cargos em comissão da Secretaria Municipal de Meio Ambiente.', '', ''),
(6, 'Leis Complementares', 'Federal', '140', 2011, '08/12/2011', 'Esta Lei Complementar fixa normas, nos termos dos incisos III, VI e VII do caput e do parágrafo único do art. 23 da Constituição Federal, para a cooperação entre a União, os Estados, o Distrito Federal e os Municípios nas ações administrativas decorrentes do exercício da competência comum relativas à proteção das paisagens naturais notáveis, à proteção do meio ambiente, ao combate à poluição em qualquer de suas formas e à preservação das florestas, da fauna e da flora', '', 'http://www.planalto.gov.br/ccivil_03/leis/lcp/lcp140.htm'),
(7, 'Leis', 'Municipal', '015', 2013, '29/03/2013', 'Esta lei, com fundamento nos artigos 23, incisos VI e VII e 225 da Constituição Federal c/c a Lei nº 6.938/1981, estabelece a gestão público integrada no patrimônio ambiental municipal e dos recursos naturais localizados no território sob sua jurisdição, através das normas previstas nesta Lei, na legislação que lhe for complementar e na legislação correlata, federal, estadual e municipal vigentes.', '', 'https://drive.google.com/uc?id=1OvoDfXrLPsMDl7Vv4ZYDL6bXeCN478Rb'),
(8, 'Leis', 'Municipal', '016', 2013, '29/03/2013', 'Esta lei estabelece ao Município, competência em buscar a compatibilização do desenvolvimento com a preservação da qualidade de vida da população sendo compatível com o meio ambiente e o equilíbrio ecológico, visando à sustentabilidade, economia, ambiental e social.', '', 'https://drive.google.com/uc?id=1z7evdJNRpC4hh0Y7SvTJCt_2423oIIH7'),
(9, 'Leis', 'Municipal', '017', 2018, '20/06/2018', 'O Anexo I, da Lei municipal nº 016/13, de 29 de abril de 2013, que regulamenta a Taxa de Licenciamento Ambiental, passa a vigorar com a seguinte redação da nova Taxa de Licenciamento Ambiental - TLA.', '', ''),
(10, 'Leis', 'Federal', '9605', 1998, '12/02/1998', 'As condutas e atividades lesivas ao meio ambiente são punidas com a sanções administrativas, civis e penais, na forma estabelecida nesta Lei.', '', 'https://www.planalto.gov.br/ccivil_03/leis/l9605.htm'),
(11, 'Instruções normativas', 'Municipal', '002', 2021, '03/12/2021', 'Os procedimentos e critérios para a tramitação dos pedidos de regularização e licenciamento ambiental, retificação de licenciamento, renovação de licença e mudança de razão social do empreendimento, no âmbito da Secretaria Municipal de Meio Ambiente de Castanhal - SEMMA/Castanhal, passam a ser regulados por esta Instrução Normativa.', '', ''),
(12, 'Instruções normativas', 'Municipal', '003', 2021, '20/12/2021', 'Esta Instrução Normativa define os procedimentos e critérios para a instauração de procedimentos de Autorização de Eventos Temporários - AET no âmbito da competência da Secretaria Municipal de Meio Ambiente de Castanhal - SEMMA', '', ''),
(13, 'Resoluções', 'CMMA', '001', 2019, '19/12/2019', 'Aprovar o Regimento Interno do Conselho Municipal de Defesa do Meio Ambiente – CMMA, na forma do anexo único, que desta passa a fazer parte integrante', '', ''),
(14, 'Resoluções', 'CMMA', '002', 2020, '27/11/2020', 'Criar 02 (duas) Câmaras Técnicas Permanentes do Conselho Municipal de Defesa do Meio Ambiente, que doravante terá a seguinte composição: I - ASSUNTOS JURÍDICOS; II - ASSUNTOS DE POLUIÇÃO E DEGRADAÇÃO AMBIENTAL.', '', ''),
(15, 'Resoluções', 'CMMA', '003', 2020, '27/11/2020', 'Nomear a Conselheira MARIA DO AMPARO MEDEIROS GONÇALVES, representante da Associação Comercial e Industrial da Castanhal – ACIC, como Secretária Executiva do CMMA, mediante votação do Plenário, conforme o disposto no artigo 26 do seu Regimento Interno', '', ''),
(16, 'Resoluções', 'CMMA', '004', 2021, '20/10/2021', 'Regulamenta a Licença Ambiental Simplificada - LAS, Licença Ambiental Declaratória - LAD e a Dispensa de Licenciamento Ambiental – DLA, concedidas pela Secretaria Municipal de Meio Ambiente aos empreendimentos que realizarem obras e/ou atividades de baixo potencial poluidor/degradador, no âmbito do Município de Castanhal, conforme os critérios a seguir estabelecidos.', '', ''),
(17, 'Resoluções', 'CMMA', '005', 2021, '22/12/2021', 'Aprovar o Regimento Interno do Conselho Municipal de Defesa do Meio Ambiente – CMMA, na forma do anexo único, que desta passa a fazer parte integrante', '', ''),
(18, 'Resoluções', 'CMMA', '006', 2022, '10/03/2022', 'Alterar os Itens 1.1.7 do ANEXO II, III e IV da Resolução CMMA n° 004/2021, para acrescentar a Certidão de Uso e Ocupação do Solo, o qual passa a vigorar com a seguinte alteração: 1. Documentos Administrativos: 1.1. Obrigatórios: 1.1.7 Alvará de Localização e Funcionamento ou Certidão de Uso e Ocupação do Solo;', '', ''),
(19, 'Resoluções', 'COEMA', '162', 2021, '02/02/2021', 'Regulamenta as atividades de impacto ambiental local, para fins de licenciamento ambiental, de competência dos Municípios no âmbito do Estado do Pará.', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `termos_de_referencia`
--

CREATE TABLE `termos_de_referencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `data` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `anexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `termos_de_referencia`
--

INSERT INTO `termos_de_referencia` (`id`, `tipo`, `data`, `descricao`, `anexo`) VALUES
(1, 'Termo de Referência', 'Outubro/2022', 'Licença Ambiental Simplificada', ''),
(2, 'Termo de Referência', 'Outubro/2022', 'Licença Ambiental Declaratória', ''),
(3, 'Termo de Referência', 'Outubro/2022', 'Autorização de Evento Temporário', ''),
(4, 'Termo de Referência', 'Outubro/2022', 'Carta Consulta Atualizada', ''),
(5, 'Termo de Referência', 'Outubro/2022', 'Dispensa de Licenciamento Ambiental', ''),
(6, 'Termo de Referência', 'Outubro/2022', 'Elaboração de Relatório Ambiental Simplificado - RAS, para Atividades Comerciais e de Serviços', ''),
(7, 'Termo de Referência', 'Outubro/2022', 'Elaboração de Relatório de Informação Ambiental Anual (RIAA)', ''),
(8, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Beneficiamento de Açaí', ''),
(9, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Comércio de Insumos Agropecuários, Depósito, Comércio de Substâncias e Produtos Perigosos', ''),
(10, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Construção Civil (Conjuntos Habitacionais, Condomínios Multifamiliar e Outros)', ''),
(11, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Extração Mineral', ''),
(12, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Geral - Licença De Operação – LO', ''),
(13, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Geral', ''),
(14, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Lava-Jato', ''),
(15, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Obras de Construção Civil, Loteamento e Parcelamento do Solo', ''),
(16, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Oficina Mecânica, Lanternagem e Pintura de Veículos Automotores', ''),
(17, 'Termo de Referência', 'Outubro/2022', 'Licenciamento Ambiental - Tipologia Posto Revendedor, Posto de Abastecimento, Posto Varejista de Querosene e Gasolina de Aviação, Exceto Posto Flutuante', ''),
(18, 'Termo de Referência', 'Outubro/2022', 'Renovação de Licenciamento Ambiental Geral', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `legislacoes`
--
ALTER TABLE `legislacoes`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `termos_de_referencia`
--
ALTER TABLE `termos_de_referencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formularios`
--
ALTER TABLE `formularios`
  MODIFY `cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `legislacoes`
--
ALTER TABLE `legislacoes`
  MODIFY `cod` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `termos_de_referencia`
--
ALTER TABLE `termos_de_referencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
