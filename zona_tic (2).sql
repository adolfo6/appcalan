-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2019 a las 14:07:22
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zona_tic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `titulo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `idCategoria` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `idEstado` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `imagen` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `resena` text COLLATE latin1_spanish_ci NOT NULL,
  `contenidoArt` mediumtext COLLATE latin1_spanish_ci NOT NULL,
  `palabraClaveu` tinytext COLLATE latin1_spanish_ci NOT NULL,
  `palabraClaved` tinytext COLLATE latin1_spanish_ci NOT NULL,
  `palabraClavet` tinytext COLLATE latin1_spanish_ci NOT NULL,
  `palabraClavec` tinytext COLLATE latin1_spanish_ci NOT NULL,
  `palabraClaveci` tinytext COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`titulo`, `idCategoria`, `idEstado`, `imagen`, `resena`, `contenidoArt`, `palabraClaveu`, `palabraClaved`, `palabraClavet`, `palabraClavec`, `palabraClaveci`) VALUES
('h', '01', '1', 'fisica.jpg', 'pato', 'hola', 'arroz', 'hh', 'h', 'h', 'h');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `nombreCat` varchar(40) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCat`) VALUES
('01', 'Conocimientos Generales TI'),
('02', 'Conocimientos Especializados'),
('03', 'TI a la vanguardia'),
('04', 'Noticias y eventos TIC'),
('05', 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(50) NOT NULL,
  `correo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `comentario` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idComentario`, `correo`, `comentario`, `fecha`) VALUES
(28, ' atrejo01@hotmail.com', 'Hola', '2019-08-31'),
(29, ' atrejo01@hotmail.com', 'Hola', '2019-08-31'),
(30, ' atrejo01@hotmail.com', 'Yu', '2019-08-31'),
(31, 'lalo@gmail.com', 'Que tal', '2019-08-31'),
(32, 'lalo@gmail.com', 'Que paso', '2019-08-31'),
(33, 'apolinartrejo@utng.edu.mx', 'Hola', '2019-08-31'),
(34, 'luciafhl22@gmail.com', 'Muy buen articulo', '2019-08-31'),
(35, 'luciafhl22@gmail.com', 'Excelente articulo', '2019-08-31'),
(36, 'arelyguzman875@gmail.com', 'Hola', '2019-08-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `tipoEstado` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `tipoEstado`) VALUES
('1', 'En revision');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `idHistorial` varchar(1000) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retroalimentacion`
--

CREATE TABLE `retroalimentacion` (
  `idRetro` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `numControl` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `contenidoRetro` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema`
--

CREATE TABLE `sistema` (
  `idVista` int(11) NOT NULL,
  `vistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idUsuario` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `descUsuario` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idUsuario`, `descUsuario`) VALUES
('1', 'Usuario'),
('2', 'Administrador'),
('3', 'Revisor de contenido'),
('4', 'Revisor de estilo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `numControl` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `idUsuario` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoPat` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `apellidoMat` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(15) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`numControl`, `idUsuario`, `correo`, `nombre`, `apellidoPat`, `apellidoMat`, `contrasena`) VALUES
('1218100390', '2', 'angel.13688@gmail.com', 'Alejandro', '67', 'Ramirez', '987'),
('1218100511', '1', 'arelyguzman875@gmail.com', 'Arely', 'Guzman', 'Juarez', '333');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utiliza`
--

CREATE TABLE `utiliza` (
  `numControl` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `titulo` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `fechaFin` date NOT NULL,
  `fechaIni` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`titulo`),
  ADD KEY `IdCategoria` (`idCategoria`,`idEstado`),
  ADD KEY `TipoEstado` (`idEstado`),
  ADD KEY `idEstado` (`idEstado`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`idHistorial`);

--
-- Indices de la tabla `retroalimentacion`
--
ALTER TABLE `retroalimentacion`
  ADD PRIMARY KEY (`idRetro`,`titulo`,`numControl`),
  ADD KEY `Titulo` (`titulo`,`numControl`),
  ADD KEY `FKc6gonv7ti43kmln9a627hb173` (`numControl`);

--
-- Indices de la tabla `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`idVista`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numControl`),
  ADD KEY `IdUsuario` (`idUsuario`);

--
-- Indices de la tabla `utiliza`
--
ALTER TABLE `utiliza`
  ADD PRIMARY KEY (`numControl`,`titulo`),
  ADD KEY `NumControl` (`numControl`,`titulo`),
  ADD KEY `Titulo` (`titulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulo_ibfk_3` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `retroalimentacion`
--
ALTER TABLE `retroalimentacion`
  ADD CONSTRAINT `FKc6gonv7ti43kmln9a627hb173` FOREIGN KEY (`numControl`) REFERENCES `usuario` (`numControl`),
  ADD CONSTRAINT `retroalimentacion_ibfk_1` FOREIGN KEY (`titulo`) REFERENCES `articulo` (`titulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK47ec8jflln21e92cp1e4bs914` FOREIGN KEY (`idUsuario`) REFERENCES `tipousuario` (`idUsuario`),
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tipousuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `utiliza`
--
ALTER TABLE `utiliza`
  ADD CONSTRAINT `utiliza_ibfk_1` FOREIGN KEY (`titulo`) REFERENCES `articulo` (`titulo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utiliza_ibfk_2` FOREIGN KEY (`numControl`) REFERENCES `usuario` (`numControl`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
