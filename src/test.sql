-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2021 a las 18:32:32
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mentores`
--

CREATE TABLE `mentores` (
  `id` bigint(20) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `perfil` text DEFAULT NULL,
  `imagen` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mentores`
--

INSERT INTO `mentores` (`id`, `nombres`, `apellidos`, `perfil`, `imagen`) VALUES
(1, 'Julián', 'Mora', 'Empresario. CEO Anteia ', 'JulianMora.png'),
(2, 'Santiago', 'Martinez', 'Ingeniero Biomédico con énfasis en aprendizaje de máquina e inteligencia artificial. Específicamente análisis de imágenes y visión por computador.', 'SantiagoMartinez.png'),
(3, 'German', 'Villarreal Silva', 'Ingeniero de Sistemas de los Andes, especializacion en Analisis y Diseno de Sistemas, egresado programa Presidentes de Empresas.\r\nExperiencia en dirección, administración y planeación empresarial.', 'GermanVillarreal.png'),
(4, 'Juan David', 'Zambrano', 'Ingeniero de Sistemas y Computación, trabajando en temas de computación visual, seguridad, identidad digital, arquitectura en cloud e integración de sistemas.', 'JuanZambrano.png'),
(5, 'Luis Javier', 'Parra', 'Emprendedor y cofundador de varias empresas de tecnología. Es consultor nacional e internacional para aplicaciones estratégicas de las tecnologías de información para el desarrollo eficiente de negocios existentes o para la creación de nuevas líneas de negocio.', 'LuisParra.png'),
(6, 'Dario', 'Meza', 'Ingeniero Mecánico e Ingeniero Industrial de Uniandes. Trabajó en el area de sistemas en IBM, Oracle, Comeware y Nasco. ', 'DarioMeza.png'),
(7, 'Johanna', 'Zambrano', 'Consultora TIC, KYC, protección de datos personales, gestión y arquitectura de seguridad de la información.\r\nEmprendedora, socia fundadora de Neia SAS y NaaS DB Inc.', 'JohannaZambrano.pon'),
(8, 'Sergio', 'Mendoza Echeverría', 'Ingeniero de sistemas, especialista en finanzas y alta gerencia de los Andes. Muchos años como vendedor en IBM, NCR y SAP. Los últimos 20 años empresario partner de Oracle y emprendedor en diferentes negocios. ', 'SergioMendoza.png'),
(9, 'Vivian', 'Dueñas Cantillo', 'Global University Programs Lider en IBM Colombia', 'VivianDuenas.png'),
(10, 'Agustin', 'Vélez Bustillo', 'Economista Universidad de los Andes.  MS Universidad de Illinois.  Amplia experiencia en sectores público, como consejero, y privado como miembro de junta de directiva de importantes empresas del país.  Emprendedor.  Presidente y CFO de Inalambria. ', 'AgustinVelez.png'),
(11, 'Hugo', 'Valderrama', 'Ingeniero de sistemas, MBA, PhD en BA, Master en Gerencia de Recursos Humanos, autor de 9 libros de management, Presidente de: Belltech, In Motion, Acepta, Mandomedio, Digiware, High Value Consulting, Uniminuto Cundinamarca. Miembro del Foro de Presidentes y de YPO. Experto en estrategias de ventas y organizacionales.', 'HugoValderrama.png'),
(12, 'Catalina', 'Albornoz', 'Apasionada por la computación cuántica y la lucha contra el cambio climático. Actualmente es embajadora de computación cuántica de IBM y especialista de ventas para servidores Power en IBM Colombia. Es Ingeniera Mecánica y Electrónica con MSc. En Ingeniería Electrónica y MEng. en Sistemas de Control. ', 'CatalinaAlbornoz.png'),
(13, 'Luis', 'Chicaiza', 'Ingerniero de Sistemas de Los Andes.  Emprendedor con TIC desde 1991, fundador de Solinfo, Aranda Software y Dexon Software.  Premio Colombiano de informática con el antivirus Compucilina.  Mentor de la CCB para Empresas MEGA, y con ProColombia para internacionalización.', 'LuisChicaiza.png'),
(14, 'Luis Ricardo', 'Granados Sarmiento', 'Presidente de Uniandinos.  Investigador en modelos de negocio de la era exponencial y director de más de 100 proyectos de transformación en Corporaciones y Entidades del Estado.     Consultor, científico de datos y profesor en temas de estrategia, negociación, finanzas, modelos comerciales y cultura organizacional.', 'LuisGranados.png'),
(15, 'Laura', 'Nieto', 'Profesional en Gobierno y Relaciones Internacionales. Magíster en Gobierno y Políticas Públicas. Gestora de Conocimiento del Equipo de Innovación Pública del Departamento Nacional de Planeación. ', 'LauraNieto.png'),
(16, 'Carlos', 'Chiquillo', 'Director de Colombia para la multinacional de Tecnologias de Informacion Praxis. Ingeniero de sistemas con 20 años de experiencia en diferentes tecnlogias, especializacion en Inteligencia Artificial, Vision Artificial.   ', 'CarlosChiquillo.png'),
(17, 'Jorge Calderón', 'De Castro', 'Ingeniero Eléctrico Uniandino ha dedica toda su vida  profesional a trabajar en Software. ', 'JorgeDeCastro.png'),
(18, 'Pendinte', 'Pendiente', 'Especialista estructuración de proyectos, con amplia experiencia en la ideación, conformación e implementación de nuevas líneas de negocio (spin-off) y emprendimientos (startup) con un alto enfoque de innovación.\r\nMi experiencia principal es el análisis financiero y sus proyecciones, la estructuración con base en modelos de negocio canvas y la planeación estratégica para la implementación inicial de prototipos (MVP), entendida esta como validación de producto. .', 'PorDefinir.png'),
(19, 'Juan Pablo', 'Moreno', 'Pendiente', 'JuanMoreno.png'),
(20, 'Luis Bernardo', 'Chicaiza', 'Fundador Dexon', 'LuisChicaiza.png'),
(21, 'Felipe', 'Otálora', 'Co-fundador Treble', 'FelipeOtalora.png'),
(22, 'Sebastián', 'Valencia', 'Co-fundador Treble', 'SebastianValencia.png'),
(23, 'Sergio', 'Sinuco', 'Co-fundador Datatraffic', 'SergioSinuco.png'),
(24, 'Francisco', 'García', 'Co-fundador Datatraffic', 'FranciscoGarcia.png'),
(25, 'Juan Sebastián', 'Duque', 'Co-fundador Qrador', 'JuanDuque.png'),
(26, 'Constanza', 'Nieto', 'Co-fundadora GlobaltechBridge', 'ConstanzaNieto.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `ppto_horas` int(11) NOT NULL,
  `clave_id` char(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_fin` date NOT NULL,
  `fecha_fin_real` date NOT NULL,
  `nom_contacto` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `cliente`, `nombre`, `fecha_inicio`, `ppto_horas`, `clave_id`, `descripcion`, `fecha_fin`, `fecha_fin_real`, `nom_contacto`, `equipo`) VALUES
(1, 'Socol', 'Mantenimiento', '2021-04-08', 4, 'SEF98D', 'Soporte a proyecto eléctrico', '2021-04-02', '2021-04-17', 'David Contreras', 'Alicante'),
(2, 'Ecopetrol', 'Soporte', '2021-04-11', 5, 'DAS856S', 'Soporte técnico de las bombas', '2021-04-16', '2021-04-23', 'Ismael Rueda', 'Madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mentores`
--
ALTER TABLE `mentores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mentores`
--
ALTER TABLE `mentores`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
