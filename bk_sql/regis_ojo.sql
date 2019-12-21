-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2019 a las 01:55:58
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `regis_ojo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conjuntivaparpado`
--

CREATE TABLE `conjuntivaparpado` (
  `conjuparp_cod` int(11) NOT NULL,
  `conjuparp_nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conjuntivaparpado`
--

INSERT INTO `conjuntivaparpado` (`conjuparp_cod`, `conjuparp_nombre`) VALUES
(1, 'Humedecido'),
(2, 'Enrojecido'),
(3, 'Inflamacion'),
(4, 'Pliegues');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conjuntivatipo`
--

CREATE TABLE `conjuntivatipo` (
  `conjutip_cod` int(11) NOT NULL,
  `conjutip_nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conjuntivatipo`
--

INSERT INTO `conjuntivatipo` (`conjutip_cod`, `conjutip_nombre`) VALUES
(1, 'Hiperemia'),
(2, 'Foliculos'),
(3, 'Quemosis'),
(4, 'Prolapso glandula tercer parpado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corneacamara`
--

CREATE TABLE `corneacamara` (
  `corneaca_cod` int(11) NOT NULL,
  `corneaca_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `corneaca_estado` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `corneacamara`
--

INSERT INTO `corneacamara` (`corneaca_cod`, `corneaca_nombre`, `corneaca_estado`) VALUES
(1, 'Ulcera', 'false'),
(2, 'Vascularizacion', 'false'),
(3, 'Edema', 'false'),
(4, 'Pigmentacion', 'false'),
(5, 'Distrofia', 'false'),
(6, 'Degeneracion', 'false'),
(7, 'hifema', 'false'),
(8, 'Hipopion', 'false');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

CREATE TABLE `cultivo` (
  `cultivo_codigo` int(11) NOT NULL,
  `cultivo_nombre` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`cultivo_codigo`, `cultivo_nombre`) VALUES
(1, 'SI'),
(2, 'NO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `departamento_cod` int(11) NOT NULL,
  `departamento_nombre` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`departamento_cod`, `departamento_nombre`) VALUES
(1, 'Tolima'),
(2, 'Cundinamarca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `diagnostico_id` int(11) NOT NULL,
  `diagnostico_difer` longtext,
  `diagnostico_final` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `diagnostico_trata` longtext,
  `diagnostico_obser` longtext,
  `diagnostico_exam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `especie_id` int(11) NOT NULL,
  `especie_nombre` char(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`especie_id`, `especie_nombre`) VALUES
(1, 'Canino'),
(2, 'Felino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen_complemen`
--

CREATE TABLE `examen_complemen` (
  `examcom_cod` int(11) NOT NULL,
  `examcom_nomb` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `examen_complemen`
--

INSERT INTO `examen_complemen` (`examcom_cod`, `examcom_nomb`) VALUES
(1, 'Electrorretinografia'),
(2, 'Ecografia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fondovitreo`
--

CREATE TABLE `fondovitreo` (
  `fondov_cod` int(11) NOT NULL,
  `fondov_nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fondovitreo`
--

INSERT INTO `fondovitreo` (`fondov_cod`, `fondov_nombre`) VALUES
(1, 'Ausencia de vasos'),
(2, 'Hiperreflexividad'),
(3, 'Hiporreflexividad'),
(4, 'Hemorragias'),
(5, 'Desprendimiento'),
(6, 'Vasos Tortuosos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `globoocular`
--

CREATE TABLE `globoocular` (
  `globo_cod` int(11) NOT NULL,
  `globo_nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `globoocular`
--

INSERT INTO `globoocular` (`globo_cod`, `globo_nombre`) VALUES
(1, 'Normal'),
(2, 'Exoftalmia'),
(3, 'Enoftalmia'),
(4, 'Buftalmia'),
(5, 'Microftalmia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiaclinica`
--

CREATE TABLE `historiaclinica` (
  `historia_id` int(11) NOT NULL,
  `historia_fecha` date DEFAULT NULL,
  `historia_medico` int(11) DEFAULT NULL,
  `historia_propietario` int(11) DEFAULT NULL,
  `historia_mascota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_cornea_derecho`
--

CREATE TABLE `img_cornea_derecho` (
  `id` int(11) NOT NULL,
  `od_imgcornea` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_cornea_izquierdo`
--

CREATE TABLE `img_cornea_izquierdo` (
  `id` int(11) NOT NULL,
  `oi_imgcornea` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_fondo_derecho`
--

CREATE TABLE `img_fondo_derecho` (
  `id` int(11) NOT NULL,
  `od_imgfondo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_fondo_izquierdo`
--

CREATE TABLE `img_fondo_izquierdo` (
  `id` int(11) NOT NULL,
  `oi_imgfondo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_iris_derecho`
--

CREATE TABLE `img_iris_derecho` (
  `id` int(11) NOT NULL,
  `od_imgiris` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_iris_izquierdo`
--

CREATE TABLE `img_iris_izquierdo` (
  `id` int(11) NOT NULL,
  `oi_imgiris` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_lente_derecho`
--

CREATE TABLE `img_lente_derecho` (
  `od_imglente` blob NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_lente_izquierdo`
--

CREATE TABLE `img_lente_izquierdo` (
  `id` int(11) NOT NULL,
  `oi_imglente` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_parpado_derecho`
--

CREATE TABLE `img_parpado_derecho` (
  `id` int(11) NOT NULL,
  `od_imgpar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_parpado_izquierdo`
--

CREATE TABLE `img_parpado_izquierdo` (
  `id` int(11) NOT NULL,
  `oi_imgpar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `irispupila`
--

CREATE TABLE `irispupila` (
  `irispu_cod` int(11) NOT NULL,
  `irispu_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `irispu_estado` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `irispupila`
--

INSERT INTO `irispupila` (`irispu_cod`, `irispu_nombre`, `irispu_estado`) VALUES
(1, 'Irisbombe', 'false'),
(2, 'Atrofia', 'false'),
(3, 'Neoformacion', 'false'),
(4, 'Midriasis', 'false'),
(5, 'Miosis', 'false'),
(6, 'Rubeoisis iridis', 'false'),
(7, 'Heterecromia', 'false'),
(8, 'Irododonesis', 'false'),
(9, 'Anisocoria', 'false');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lente`
--

CREATE TABLE `lente` (
  `lente_cod` int(11) NOT NULL,
  `lente_nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lente`
--

INSERT INTO `lente` (`lente_cod`, `lente_nombre`) VALUES
(1, 'Esclerosis'),
(2, 'Catarata'),
(3, 'Subluxacion'),
(4, 'Luxacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `mascota_id` int(11) NOT NULL,
  `mascota_nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mascota_especie` int(11) NOT NULL,
  `mascota_raza` int(11) NOT NULL,
  `mascota_sexo` int(11) NOT NULL,
  `mascota_fecha` date NOT NULL,
  `propietario_numdoc` int(11) NOT NULL,
  `mascota_motivo` varchar(950) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `medico_tipodoc` char(2) CHARACTER SET utf8 DEFAULT NULL,
  `medico_numdoc` int(11) NOT NULL,
  `medico_nombre` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `medico_tel` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `municipio_cod` int(11) NOT NULL,
  `municipio_nombre` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`municipio_cod`, `municipio_nombre`) VALUES
(1, 'Alpujarra'),
(2, 'Alvarado'),
(3, 'Ambalema'),
(4, 'Ataco'),
(5, 'Cajamarca'),
(6, 'Carmen de apicala'),
(7, 'Casabianca'),
(8, 'Chaparral'),
(9, 'Coello'),
(10, 'Coyaima'),
(11, 'Cunday'),
(12, 'Dolores'),
(13, 'Espinal'),
(14, 'Libano'),
(15, 'Falan'),
(16, 'Flandes'),
(17, 'Fresno'),
(18, 'Guamo'),
(19, 'Herveo'),
(20, 'Honda'),
(21, 'Icononzo'),
(22, 'Lerida'),
(23, 'Melgar'),
(24, 'Murillo'),
(25, 'Natagaima'),
(26, 'Ortega'),
(27, 'Palocabildo'),
(28, 'Piedras'),
(29, 'Planadas'),
(30, 'Prado'),
(31, 'Purificacion'),
(32, 'Rioblanco'),
(33, 'Roncesvalles'),
(34, 'Rovira'),
(35, 'Saldaña'),
(36, 'San antonio'),
(37, 'San luis'),
(38, 'Santa Isabel'),
(39, 'Suarez'),
(40, 'Valle de san juan'),
(41, 'Venadillo'),
(42, 'Villahermosa'),
(43, 'Villarica'),
(44, 'Ibagué');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ojoderecho`
--

CREATE TABLE `ojoderecho` (
  `od_id` int(11) NOT NULL,
  `od_refame` int(11) DEFAULT NULL,
  `od_reflejod` int(11) DEFAULT NULL,
  `od_reflejoi` int(11) DEFAULT NULL,
  `od_schirmer` int(11) DEFAULT NULL,
  `od_refcul` int(11) DEFAULT NULL,
  `od_presion` int(11) DEFAULT NULL,
  `od_globo` int(11) DEFAULT NULL,
  `od_parpado` int(11) DEFAULT NULL,
  `od_imgpar` int(11) DEFAULT NULL,
  `od_tipconju` int(11) DEFAULT NULL,
  `od_parconju` int(11) DEFAULT NULL,
  `od_testflou` int(11) DEFAULT NULL,
  `od_testbeng` int(11) DEFAULT NULL,
  `od_gonioscopia` int(11) DEFAULT NULL,
  `od_imgcornea` int(11) DEFAULT NULL,
  `od_sinequia` int(11) DEFAULT NULL,
  `od_imgiris` int(11) DEFAULT NULL,
  `od_lente` int(11) DEFAULT NULL,
  `od_imglente` int(11) DEFAULT NULL,
  `od_fondo` int(11) DEFAULT NULL,
  `od_imgfondo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ojoizquierdo`
--

CREATE TABLE `ojoizquierdo` (
  `oi_id` int(11) NOT NULL,
  `oi_refame` int(11) DEFAULT NULL,
  `oi_reflejod` int(11) DEFAULT NULL,
  `oi_reflejoi` int(11) DEFAULT NULL,
  `oi_schirmer` int(11) DEFAULT NULL,
  `oi_refcul` int(11) DEFAULT NULL,
  `oi_presion` int(11) DEFAULT NULL,
  `oi_globo` int(11) DEFAULT NULL,
  `oi_parpado` int(11) DEFAULT NULL,
  `oi_imgpar` int(11) DEFAULT NULL,
  `oi_tipconju` int(11) DEFAULT NULL,
  `oi_parconju` int(11) DEFAULT NULL,
  `oi_testflou` int(11) DEFAULT NULL,
  `oi_testbeng` int(11) DEFAULT NULL,
  `oi_gonioscopia` int(11) DEFAULT NULL,
  `oi_imgcornea` int(11) DEFAULT NULL,
  `oi_sinequia` int(11) DEFAULT NULL,
  `oi_imgiris` int(11) DEFAULT NULL,
  `oi_lente` int(11) DEFAULT NULL,
  `oi_imglente` int(11) DEFAULT NULL,
  `oi_fondo` int(11) DEFAULT NULL,
  `oi_imgfondo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parpado`
--

CREATE TABLE `parpado` (
  `parpado_cod` int(11) NOT NULL,
  `parpado_nombre` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parpado`
--

INSERT INTO `parpado` (`parpado_cod`, `parpado_nombre`) VALUES
(1, 'Triquiasis'),
(2, 'Distiquiasis'),
(3, 'Ectropion'),
(4, 'Entropion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `propietario_nombre` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `propietario_tipodoc` char(2) CHARACTER SET utf8 DEFAULT NULL,
  `propietario_numdoc` int(11) NOT NULL,
  `propietario_tel` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `propietario_direccion` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `propietario_depart` int(11) DEFAULT NULL,
  `propietario_muni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `raza_id` int(11) NOT NULL,
  `raza_nombre` char(60) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`raza_id`, `raza_nombre`) VALUES
(1, 'Airedale Terrier'),
(2, 'Akita Inu'),
(3, 'Alaskan Malamute'),
(4, 'American Cocker Spaniel'),
(5, 'American Pit bull Terrier'),
(6, 'Australian Terrier'),
(7, 'Balkan Hound'),
(8, 'Basenji'),
(9, 'Basset Hound'),
(10, 'Beagle'),
(11, 'Bearded Collie'),
(12, 'Beauceron'),
(13, 'Bichón Habanero'),
(14, 'Bichón Maltés'),
(15, 'Bloodhound o Perro de San Huberto'),
(16, 'Bobtail'),
(17, 'Border Terrier'),
(18, 'Borzoi'),
(19, 'Boston Terrier'),
(20, 'Bóxer'),
(21, 'Boyero Australiano'),
(22, 'Boyero de Flandes'),
(23, 'Braco Alemán'),
(24, 'Braco Francés'),
(25, 'Bretón Español'),
(26, 'Bull Terrier'),
(27, 'Bulldog Francés'),
(28, 'Bulldog Inglés'),
(29, 'Bullmastiff'),
(30, 'Caniche'),
(31, 'Carlino'),
(32, 'Chart Polski'),
(33, 'Chihuahua'),
(34, 'Chin Japonés'),
(35, 'Chow chow'),
(36, 'Cimarrón Uruguayo'),
(37, 'Cocker Spaniel Inglés'),
(38, 'Collie'),
(39, 'Crestado Chino'),
(40, 'Dálmata'),
(41, 'Deutsch Drahthaar'),
(42, 'Doberman'),
(43, 'Dogo Alemán'),
(44, 'Dogo Argentino'),
(45, 'Dogo de Burdeos'),
(46, 'Fila Brasileño'),
(47, 'Fox Terrier'),
(48, 'Foxhound Inglés'),
(49, 'Galgo Español'),
(50, 'Golden Retriever'),
(51, 'Grifón de Bohemia'),
(52, 'Hovawart'),
(53, 'Husky Siberiano'),
(54, 'Iceland Sheepdog'),
(55, 'Irish Wolfhound'),
(56, 'Jack Russell Terrier'),
(57, 'Kelpie Australiano'),
(58, 'Kuvasz'),
(59, 'Labrador Retriever'),
(60, 'Lebrel Afgano'),
(61, 'Lebrel Escocés'),
(62, 'Leonberger'),
(63, 'Lhasa Apso'),
(64, 'Mastín de los Pirineos'),
(65, 'Otterhound'),
(66, 'Pastor Alemán'),
(67, 'Pastor Belga'),
(68, 'Pastor Ganadero Australiano'),
(69, 'Pastor Garafiano'),
(70, 'Papillón'),
(71, 'Pequinés'),
(72, 'Pembroke Welsh Corgi'),
(73, 'Petit Basset Griffon'),
(74, 'Pinscher'),
(75, 'Podenco Canario'),
(76, 'Podenco Ibicenco'),
(77, 'Pointer Inglés'),
(78, 'Pomerania'),
(79, 'Presa Canario'),
(80, 'Puli'),
(81, 'Ratón Bodeguero Andaluz'),
(82, 'Retriever de pelo rizado'),
(83, 'Rottweiler'),
(84, 'San Bernardo'),
(85, 'Samoyedo'),
(86, 'Schnauzer'),
(87, 'Scottish Terrier'),
(88, 'Setter Irlandés'),
(89, 'Shar Pei'),
(90, 'Shetland Sheepdog'),
(91, 'Shih Tzu'),
(92, 'Spinone italiano'),
(93, 'Teckel'),
(94, 'Terranova'),
(95, 'Terrier Australiano'),
(96, 'Terrier Checo'),
(97, 'Terrier Japonés'),
(98, 'Terrier Tibetano'),
(99, 'Tosa Inu'),
(100, 'Weimaraner'),
(101, 'West Highland White Terrier'),
(102, 'Yorkshire Terrier'),
(103, 'Abisinio'),
(104, 'Africano doméstico'),
(105, 'American Curl'),
(106, 'American shorthair'),
(107, 'American wirehair'),
(108, 'Angora turco'),
(109, 'Aphrodite-s Giants'),
(110, 'Australian Mist'),
(111, 'Azul ruso'),
(112, 'Bengala'),
(113, 'Bobtail japonés'),
(114, 'Bombay'),
(115, 'Bosque de Noruega'),
(116, 'Brazilian Shorthair'),
(117, 'British Shorthair'),
(118, 'Burmés'),
(119, 'Burmilla'),
(120, 'California Spangled'),
(121, 'Ceylon'),
(122, 'Chartreux'),
(123, 'Cornish rex'),
(124, 'Cymric'),
(125, 'Deutsch Langhaar'),
(126, 'Devon rex'),
(127, 'Don Sphynx'),
(128, 'Dorado africano'),
(129, 'Europeo común'),
(130, 'Gato exótico'),
(131, 'German Rex'),
(132, 'Habana brown'),
(133, 'Himalayo'),
(134, 'Khao Manee'),
(135, 'Korat'),
(136, 'Maine Coon'),
(137, 'Manx'),
(138, 'Mau egipcio'),
(139, 'Munchkin'),
(140, 'Ocicat'),
(141, 'Ojos azules'),
(142, 'Oriental'),
(143, 'Oriental de pelo largo'),
(144, 'Persa'),
(145, 'Peterbald'),
(146, 'Pixi Bob'),
(147, 'Ragdoll'),
(148, 'Sagrado de Birmania'),
(149, 'Scottish Fold'),
(150, 'Selkirk rex'),
(151, 'Serengeti'),
(152, 'Seychellois'),
(153, 'Siamés'),
(154, 'Siamés Moderno'),
(155, 'Siamés Tradicional'),
(156, 'Siberiano'),
(157, 'Snowshoe'),
(158, 'Sphynx'),
(159, 'Tonkinés'),
(160, 'Van Turco'),
(161, 'Criollo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reflejo`
--

CREATE TABLE `reflejo` (
  `reflejo_cod` int(11) NOT NULL,
  `reflejo_nombre` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reflejo`
--

INSERT INTO `reflejo` (`reflejo_cod`, `reflejo_nombre`) VALUES
(1, 'Rapido'),
(2, 'Medio'),
(3, 'Ausente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexomascota`
--

CREATE TABLE `sexomascota` (
  `sexo_cod` int(11) NOT NULL,
  `sexo_mascota` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexomascota`
--

INSERT INTO `sexomascota` (`sexo_cod`, `sexo_mascota`) VALUES
(1, 'Hembra'),
(2, 'Macho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `test_cod` int(11) NOT NULL,
  `test_nombre` char(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`test_cod`, `test_nombre`) VALUES
(1, 'Positivo'),
(2, 'Negativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `tipodoc_cod` char(2) CHARACTER SET utf8 NOT NULL,
  `tipodoc_nombre` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`tipodoc_cod`, `tipodoc_nombre`) VALUES
('CC', 'CEDULA CIUDADANIA'),
('CE', 'CEDULA EXTRANJERA'),
('TI', 'TARJETA DE IDENTIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposinequia`
--

CREATE TABLE `tiposinequia` (
  `sinequia_cod` int(11) NOT NULL,
  `sinequia_nombre` char(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposinequia`
--

INSERT INTO `tiposinequia` (`sinequia_cod`, `sinequia_nombre`) VALUES
(1, 'Anterior'),
(2, 'Posterior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unioncornead`
--

CREATE TABLE `unioncornead` (
  `union_id` int(11) NOT NULL,
  `union_historiad` int(11) NOT NULL,
  `union_cornea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unioncorneai`
--

CREATE TABLE `unioncorneai` (
  `union_id` int(11) NOT NULL,
  `union_historia` int(11) NOT NULL,
  `union_cornea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uniondiagnostico`
--

CREATE TABLE `uniondiagnostico` (
  `uniond_id` int(11) NOT NULL,
  `union_iddiagnostico` int(11) DEFAULT NULL,
  `union_idexamen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unionirisd`
--

CREATE TABLE `unionirisd` (
  `union_id` int(11) NOT NULL,
  `union_idhitoriad` int(11) NOT NULL,
  `union_idiris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unionirisi`
--

CREATE TABLE `unionirisi` (
  `union_id` int(11) NOT NULL,
  `union_idhistoriai` int(11) NOT NULL,
  `union_idiris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `contra` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conjuntivaparpado`
--
ALTER TABLE `conjuntivaparpado`
  ADD PRIMARY KEY (`conjuparp_cod`),
  ADD KEY `ix_tmp_autoinc` (`conjuparp_cod`);

--
-- Indices de la tabla `conjuntivatipo`
--
ALTER TABLE `conjuntivatipo`
  ADD PRIMARY KEY (`conjutip_cod`),
  ADD KEY `ix_tmp_autoinc` (`conjutip_cod`);

--
-- Indices de la tabla `corneacamara`
--
ALTER TABLE `corneacamara`
  ADD PRIMARY KEY (`corneaca_cod`),
  ADD KEY `ix_tmp_autoinc` (`corneaca_cod`);

--
-- Indices de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  ADD PRIMARY KEY (`cultivo_codigo`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`departamento_cod`),
  ADD KEY `ix_tmp_autoinc` (`departamento_cod`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`diagnostico_id`),
  ADD KEY `ix_tmp_autoinc` (`diagnostico_id`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`especie_id`),
  ADD KEY `ix_tmp_autoinc` (`especie_id`);

--
-- Indices de la tabla `examen_complemen`
--
ALTER TABLE `examen_complemen`
  ADD PRIMARY KEY (`examcom_cod`),
  ADD KEY `ix_tmp_autoinc` (`examcom_cod`);

--
-- Indices de la tabla `fondovitreo`
--
ALTER TABLE `fondovitreo`
  ADD PRIMARY KEY (`fondov_cod`),
  ADD KEY `ix_tmp_autoinc` (`fondov_cod`);

--
-- Indices de la tabla `globoocular`
--
ALTER TABLE `globoocular`
  ADD PRIMARY KEY (`globo_cod`),
  ADD KEY `ix_tmp_autoinc` (`globo_cod`);

--
-- Indices de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD PRIMARY KEY (`historia_id`),
  ADD KEY `ix_tmp_autoinc` (`historia_id`),
  ADD KEY `fk_historiaclinica_mascota1` (`historia_mascota`),
  ADD KEY `fk_historiaclinica_medico` (`historia_medico`),
  ADD KEY `fk_historiaclinica_propietario` (`historia_propietario`);

--
-- Indices de la tabla `img_cornea_derecho`
--
ALTER TABLE `img_cornea_derecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_cornea_izquierdo`
--
ALTER TABLE `img_cornea_izquierdo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_fondo_derecho`
--
ALTER TABLE `img_fondo_derecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_fondo_izquierdo`
--
ALTER TABLE `img_fondo_izquierdo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_iris_derecho`
--
ALTER TABLE `img_iris_derecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_iris_izquierdo`
--
ALTER TABLE `img_iris_izquierdo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_lente_derecho`
--
ALTER TABLE `img_lente_derecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_lente_izquierdo`
--
ALTER TABLE `img_lente_izquierdo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_parpado_derecho`
--
ALTER TABLE `img_parpado_derecho`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `img_parpado_izquierdo`
--
ALTER TABLE `img_parpado_izquierdo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `irispupila`
--
ALTER TABLE `irispupila`
  ADD PRIMARY KEY (`irispu_cod`),
  ADD KEY `ix_tmp_autoinc` (`irispu_cod`);

--
-- Indices de la tabla `lente`
--
ALTER TABLE `lente`
  ADD PRIMARY KEY (`lente_cod`),
  ADD KEY `ix_tmp_autoinc` (`lente_cod`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`mascota_id`),
  ADD KEY `ix_tmp_autoinc` (`mascota_id`),
  ADD KEY `fk_mascota_especie` (`mascota_especie`),
  ADD KEY `fk_mascota_raza` (`mascota_raza`),
  ADD KEY `fk_mascota_sexomascota` (`mascota_sexo`),
  ADD KEY `fk_propietario_numdoc` (`propietario_numdoc`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`medico_numdoc`),
  ADD KEY `fk_medico_tipodocumento` (`medico_tipodoc`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`municipio_cod`),
  ADD KEY `ix_tmp_autoinc` (`municipio_cod`);

--
-- Indices de la tabla `ojoderecho`
--
ALTER TABLE `ojoderecho`
  ADD PRIMARY KEY (`od_id`),
  ADD KEY `ix_tmp_autoinc` (`od_id`),
  ADD KEY `fk_ojoderecho_conjuntivaparpado` (`od_parconju`),
  ADD KEY `fk_ojoderecho_conjuntivatipo` (`od_tipconju`),
  ADD KEY `fk_ojoderecho_fondovitreo` (`od_fondo`),
  ADD KEY `fk_ojoderecho_globoocular1` (`od_globo`),
  ADD KEY `fk_ojoderecho_lente` (`od_lente`),
  ADD KEY `fk_ojoderecho_parpado` (`od_parpado`),
  ADD KEY `fk_ojoderecho_reflejo` (`od_reflejod`),
  ADD KEY `fk_ojoderecho_reflejo1` (`od_reflejoi`),
  ADD KEY `fk_ojoderecho_test` (`od_refame`),
  ADD KEY `fk_ojoderecho_test1` (`od_refcul`),
  ADD KEY `fk_ojoderecho_test2` (`od_testflou`),
  ADD KEY `fk_ojoderecho_test3` (`od_testbeng`),
  ADD KEY `fk_ojoderecho_tiposinequia` (`od_sinequia`),
  ADD KEY `fk_img_lente_derecho` (`od_imglente`),
  ADD KEY `fk_img_cornea_derecho` (`od_imgcornea`),
  ADD KEY `fk_img_iris_derecho` (`od_imgiris`),
  ADD KEY `fk_img_parpado_derecho` (`od_imgpar`),
  ADD KEY `fk_img_fondo_derecho` (`od_imgfondo`);

--
-- Indices de la tabla `ojoizquierdo`
--
ALTER TABLE `ojoizquierdo`
  ADD PRIMARY KEY (`oi_id`),
  ADD KEY `ix_tmp_autoinc` (`oi_id`),
  ADD KEY `fk_ojoizquierdo_conjuntivaparpado` (`oi_parconju`),
  ADD KEY `fk_ojoizquierdo_conjuntivatipo` (`oi_tipconju`),
  ADD KEY `fk_ojoizquierdo_fondovitreo` (`oi_fondo`),
  ADD KEY `fk_ojoizquierdo_globoocular` (`oi_globo`),
  ADD KEY `fk_ojoizquierdo_lente` (`oi_lente`),
  ADD KEY `fk_ojoizquierdo_parpado` (`oi_parpado`),
  ADD KEY `fk_ojoizquierdo_reflejo` (`oi_reflejod`),
  ADD KEY `fk_ojoizquierdo_reflejo1` (`oi_reflejoi`),
  ADD KEY `fk_ojoizquierdo_test` (`oi_refame`),
  ADD KEY `fk_ojoizquierdo_test1` (`oi_refcul`),
  ADD KEY `fk_ojoizquierdo_test2` (`oi_testflou`),
  ADD KEY `fk_ojoizquierdo_test3` (`oi_testbeng`),
  ADD KEY `fk_ojoizquierdo_tiposinequia` (`oi_sinequia`),
  ADD KEY `fk_img_cornea_izquierdo` (`oi_imgcornea`),
  ADD KEY `fk_img_fondo_izquierdo` (`oi_imgfondo`),
  ADD KEY `fk_img_iris_izquierdo` (`oi_imgiris`),
  ADD KEY `fk_img_lente_izquierdo` (`oi_imglente`),
  ADD KEY `fk_img_parpado_izquierdo` (`oi_imgpar`);

--
-- Indices de la tabla `parpado`
--
ALTER TABLE `parpado`
  ADD PRIMARY KEY (`parpado_cod`),
  ADD KEY `ix_tmp_autoinc` (`parpado_cod`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`propietario_numdoc`),
  ADD KEY `fk_propietario_departamento` (`propietario_depart`),
  ADD KEY `fk_propietario_municipio` (`propietario_muni`),
  ADD KEY `fk_propietario_tipodocumento` (`propietario_tipodoc`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`raza_id`),
  ADD KEY `ix_tmp_autoinc` (`raza_id`);

--
-- Indices de la tabla `reflejo`
--
ALTER TABLE `reflejo`
  ADD PRIMARY KEY (`reflejo_cod`),
  ADD KEY `ix_tmp_autoinc` (`reflejo_cod`);

--
-- Indices de la tabla `sexomascota`
--
ALTER TABLE `sexomascota`
  ADD PRIMARY KEY (`sexo_cod`),
  ADD KEY `ix_tmp_autoinc` (`sexo_cod`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_cod`),
  ADD KEY `ix_tmp_autoinc` (`test_cod`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`tipodoc_cod`);

--
-- Indices de la tabla `tiposinequia`
--
ALTER TABLE `tiposinequia`
  ADD PRIMARY KEY (`sinequia_cod`),
  ADD KEY `ix_tmp_autoinc` (`sinequia_cod`);

--
-- Indices de la tabla `unioncornead`
--
ALTER TABLE `unioncornead`
  ADD PRIMARY KEY (`union_id`),
  ADD KEY `ix_tmp_autoinc` (`union_id`),
  ADD KEY `fk_unioncornead_corneacamara` (`union_cornea`),
  ADD KEY `fk_unioncornead_ojoderecho` (`union_historiad`);

--
-- Indices de la tabla `unioncorneai`
--
ALTER TABLE `unioncorneai`
  ADD PRIMARY KEY (`union_id`),
  ADD KEY `ix_tmp_autoinc` (`union_id`),
  ADD KEY `fk_unioncorneai_corneacamara1` (`union_cornea`),
  ADD KEY `fk_unioncorneai_ojoizquierdo` (`union_historia`);

--
-- Indices de la tabla `uniondiagnostico`
--
ALTER TABLE `uniondiagnostico`
  ADD PRIMARY KEY (`uniond_id`),
  ADD KEY `ix_tmp_autoinc` (`uniond_id`),
  ADD KEY `fk_uniondiagnostico_diagnostico` (`union_iddiagnostico`),
  ADD KEY `fk_uniondiagnostico_examen_complemen` (`union_idexamen`);

--
-- Indices de la tabla `unionirisd`
--
ALTER TABLE `unionirisd`
  ADD PRIMARY KEY (`union_id`),
  ADD KEY `ix_tmp_autoinc` (`union_id`),
  ADD KEY `fk_unionirisd_irispupila` (`union_idiris`),
  ADD KEY `fk_unionirisd_ojoderecho` (`union_idhitoriad`);

--
-- Indices de la tabla `unionirisi`
--
ALTER TABLE `unionirisi`
  ADD PRIMARY KEY (`union_id`),
  ADD KEY `ix_tmp_autoinc` (`union_id`),
  ADD KEY `fk_unionirisi_irispupila` (`union_idiris`),
  ADD KEY `fk_unionirisi_ojoizquierdo` (`union_idhistoriai`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `conjuntivaparpado`
--
ALTER TABLE `conjuntivaparpado`
  MODIFY `conjuparp_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `conjuntivatipo`
--
ALTER TABLE `conjuntivatipo`
  MODIFY `conjutip_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `corneacamara`
--
ALTER TABLE `corneacamara`
  MODIFY `corneaca_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cultivo`
--
ALTER TABLE `cultivo`
  MODIFY `cultivo_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `departamento_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `diagnostico_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `especie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `examen_complemen`
--
ALTER TABLE `examen_complemen`
  MODIFY `examcom_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fondovitreo`
--
ALTER TABLE `fondovitreo`
  MODIFY `fondov_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `globoocular`
--
ALTER TABLE `globoocular`
  MODIFY `globo_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  MODIFY `historia_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_cornea_derecho`
--
ALTER TABLE `img_cornea_derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_cornea_izquierdo`
--
ALTER TABLE `img_cornea_izquierdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_fondo_derecho`
--
ALTER TABLE `img_fondo_derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_fondo_izquierdo`
--
ALTER TABLE `img_fondo_izquierdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_iris_derecho`
--
ALTER TABLE `img_iris_derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_iris_izquierdo`
--
ALTER TABLE `img_iris_izquierdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_lente_derecho`
--
ALTER TABLE `img_lente_derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_lente_izquierdo`
--
ALTER TABLE `img_lente_izquierdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_parpado_derecho`
--
ALTER TABLE `img_parpado_derecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `img_parpado_izquierdo`
--
ALTER TABLE `img_parpado_izquierdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `irispupila`
--
ALTER TABLE `irispupila`
  MODIFY `irispu_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `lente`
--
ALTER TABLE `lente`
  MODIFY `lente_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `mascota_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `municipio_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `ojoderecho`
--
ALTER TABLE `ojoderecho`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ojoizquierdo`
--
ALTER TABLE `ojoizquierdo`
  MODIFY `oi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parpado`
--
ALTER TABLE `parpado`
  MODIFY `parpado_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `raza_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT de la tabla `reflejo`
--
ALTER TABLE `reflejo`
  MODIFY `reflejo_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sexomascota`
--
ALTER TABLE `sexomascota`
  MODIFY `sexo_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `test_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tiposinequia`
--
ALTER TABLE `tiposinequia`
  MODIFY `sinequia_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unioncornead`
--
ALTER TABLE `unioncornead`
  MODIFY `union_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unioncorneai`
--
ALTER TABLE `unioncorneai`
  MODIFY `union_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `uniondiagnostico`
--
ALTER TABLE `uniondiagnostico`
  MODIFY `uniond_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unionirisd`
--
ALTER TABLE `unionirisd`
  MODIFY `union_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unionirisi`
--
ALTER TABLE `unionirisi`
  MODIFY `union_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `fk_diagnostico_historiaclinica` FOREIGN KEY (`diagnostico_id`) REFERENCES `historiaclinica` (`historia_id`);

--
-- Filtros para la tabla `historiaclinica`
--
ALTER TABLE `historiaclinica`
  ADD CONSTRAINT `fk_historiaclinica_mascota` FOREIGN KEY (`historia_mascota`) REFERENCES `mascota` (`mascota_id`),
  ADD CONSTRAINT `fk_historiaclinica_medico` FOREIGN KEY (`historia_medico`) REFERENCES `medico` (`medico_numdoc`),
  ADD CONSTRAINT `fk_historiaclinica_propietario` FOREIGN KEY (`historia_propietario`) REFERENCES `propietario` (`propietario_numdoc`);

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `fk_mascota_especie` FOREIGN KEY (`mascota_especie`) REFERENCES `especie` (`especie_id`),
  ADD CONSTRAINT `fk_mascota_raza` FOREIGN KEY (`mascota_raza`) REFERENCES `raza` (`raza_id`),
  ADD CONSTRAINT `fk_mascota_sexomascota` FOREIGN KEY (`mascota_sexo`) REFERENCES `sexomascota` (`sexo_cod`),
  ADD CONSTRAINT `fk_propietario_numdoc` FOREIGN KEY (`propietario_numdoc`) REFERENCES `propietario` (`propietario_numdoc`);

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `fk_medico_tipodocumento` FOREIGN KEY (`medico_tipodoc`) REFERENCES `tipodocumento` (`tipodoc_cod`);

--
-- Filtros para la tabla `ojoizquierdo`
--
ALTER TABLE `ojoizquierdo`
  ADD CONSTRAINT `fk_img_cornea_izquierdo` FOREIGN KEY (`oi_imgcornea`) REFERENCES `img_cornea_izquierdo` (`id`),
  ADD CONSTRAINT `fk_img_fondo_izquierdo` FOREIGN KEY (`oi_imgfondo`) REFERENCES `img_fondo_izquierdo` (`id`),
  ADD CONSTRAINT `fk_img_iris_izquierdo` FOREIGN KEY (`oi_imgiris`) REFERENCES `img_iris_izquierdo` (`id`),
  ADD CONSTRAINT `fk_img_lente_izquierdo` FOREIGN KEY (`oi_imglente`) REFERENCES `img_lente_izquierdo` (`id`),
  ADD CONSTRAINT `fk_img_parpado_izquierdo` FOREIGN KEY (`oi_imgpar`) REFERENCES `img_parpado_izquierdo` (`id`),
  ADD CONSTRAINT `fk_ojoizquierdo_conjuntivaparpado` FOREIGN KEY (`oi_parconju`) REFERENCES `conjuntivaparpado` (`conjuparp_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_conjuntivatipo` FOREIGN KEY (`oi_tipconju`) REFERENCES `conjuntivatipo` (`conjutip_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_fondovitreo` FOREIGN KEY (`oi_fondo`) REFERENCES `fondovitreo` (`fondov_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_globoocular` FOREIGN KEY (`oi_globo`) REFERENCES `globoocular` (`globo_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_historiaclinica` FOREIGN KEY (`oi_id`) REFERENCES `historiaclinica` (`historia_id`),
  ADD CONSTRAINT `fk_ojoizquierdo_lente` FOREIGN KEY (`oi_lente`) REFERENCES `lente` (`lente_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_parpado` FOREIGN KEY (`oi_parpado`) REFERENCES `parpado` (`parpado_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_reflejo` FOREIGN KEY (`oi_reflejod`) REFERENCES `reflejo` (`reflejo_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_reflejo1` FOREIGN KEY (`oi_reflejoi`) REFERENCES `reflejo` (`reflejo_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_test` FOREIGN KEY (`oi_refame`) REFERENCES `test` (`test_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_test1` FOREIGN KEY (`oi_refcul`) REFERENCES `test` (`test_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_test2` FOREIGN KEY (`oi_testflou`) REFERENCES `test` (`test_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_test3` FOREIGN KEY (`oi_testbeng`) REFERENCES `test` (`test_cod`),
  ADD CONSTRAINT `fk_ojoizquierdo_tiposinequia` FOREIGN KEY (`oi_sinequia`) REFERENCES `tiposinequia` (`sinequia_cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
