-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2014 a las 01:44:53
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gremialmedica`
--
CREATE DATABASE IF NOT EXISTS `gremialmedica` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `gremialmedica`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afiliados`
--

CREATE TABLE IF NOT EXISTS `afiliados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empleado_nro` int(11) NOT NULL,
  `afiliado_nro` int(11) NOT NULL,
  `ayn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `dni` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reparticion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ministerio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grupo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date NOT NULL,
  `puntaje` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remuneraciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `funciones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `afiliados`
--

INSERT INTO `afiliados` (`id`, `empleado_nro`, `afiliado_nro`, `ayn`, `fecha_nac`, `dni`, `localidad`, `domicilio`, `nacionalidad`, `estado_civil`, `reparticion`, `ministerio`, `grupo`, `fecha_alta`, `fecha_baja`, `puntaje`, `remuneraciones`, `funciones`, `observaciones`, `created_at`, `updated_at`) VALUES
(1, 123, 123, '123', '0000-00-00', '123', '123', '123', '123', '123', '123', '123', '123', '0000-00-00', '0000-00-00', '123', '123', '123', '123', '2014-02-10 00:48:37', '2014-02-10 00:48:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadonoticia`
--

CREATE TABLE IF NOT EXISTS `estadonoticia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `estadonoticia`
--

INSERT INTO `estadonoticia` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Publicada Pagina Principal', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Publicada', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'No Publicada', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_09_18_212250_create_users', 1),
('2014_02_04_195448_create_afiliados_table', 1),
('2014_02_06_120519_create_portada_table', 2),
('2014_02_06_140745_alter_usuarios_table_to_users', 2),
('2014_02_09_180757_create_sobreNosotros_table', 3),
('2014_02_09_184405_create_sobreNosotros_table', 4),
('2014_02_10_104406_create_noticias_table', 5),
('2014_02_11_212719_create_estadoNoticia_table', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` text COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `desarrollo` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` text COLLATE utf8_unicode_ci NOT NULL,
  `estadoNoticia_id` int(11) NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `seccion` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `noticias_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `desarrollo`, `fecha`, `imagen`, `estadoNoticia_id`, `slug`, `seccion`, `tipo`, `created_at`, `updated_at`) VALUES
(1, '<h1>prueba 1</h1>\r\n', '<p>prueba 1</p>\r\n', '', 'Miércoles, 12 de Febrero del año 2014 | 15:22:30 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 1, 'prueba-1', 0, 0, '0000-00-00 00:00:00', '2014-02-18 02:55:41'),
(2, '<h1>prueba 2</h1>\r\n', '<p>prueba 2</p>\r\n', '', 'Miércoles, 12 de Febrero del año 2014 | 15:22:30 Hs', '/gremialmedica/medicos/public/assets/upload/files/url%20-%20copia.jpg', 1, 'prueba-2-12-02-2014-18-32-57', 0, 0, '0000-00-00 00:00:00', '2014-02-18 02:55:42'),
(3, '<p>prueba 3</p>\r\n', '<p>prueba 3 prueba 3</p>\r\n', '', 'Miércoles, 12 de Febrero del año 2014 | 16:47:48 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 1, 'prueba-3-12-02-2014-19-48-33', 0, 0, '0000-00-00 00:00:00', '2014-02-18 02:55:43'),
(4, '<p>prueba 4 prueba 4</p>\r\n', '<p>prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4</p>\r\n', '<p>prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4 prueba 4</p>\r\n', 'Miércoles, 12 de Febrero del año 2014 | 16:49:35 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 1, 'prueba-4-12-02-2014-19-51-52', 0, 0, '0000-00-00 00:00:00', '2014-02-18 02:55:44'),
(5, '<p>prueba 5 prueba 5 prueba 5</p>\r\n', '<p>prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5</p>\r\n', '<p>prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba<img alt="" src="/gremialmedica/medicos/public/assets/upload/files/url.jpg" style="height:135px; width:241px" /> 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5 prueba 5</p>\r\n', 'Miércoles, 12 de Febrero del año 2014 | 16:55:58 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 1, 'prueba-5-12-02-2014-19-56-53', 0, 0, '0000-00-00 00:00:00', '2014-02-18 02:55:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portada`
--

CREATE TABLE IF NOT EXISTS `portada` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto_superior_derecho` text COLLATE utf8_unicode_ci NOT NULL,
  `texto_central` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_titulo_primero` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_titulo_segundo` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_titulo_tercero` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_titulo_primero_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_titulo_segundo_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `footer_titulo_tercero_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `portada`
--

INSERT INTO `portada` (`id`, `texto_superior_derecho`, `texto_central`, `footer_titulo_primero`, `footer_titulo_segundo`, `footer_titulo_tercero`, `footer_titulo_primero_descripcion`, `footer_titulo_segundo_descripcion`, `footer_titulo_tercero_descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Gremial Médica Hospitalaria\r\n                                                            Frace breve de Bienvenida Hasta ochenta y nueve (89) \r\n                                                            caracteres', '<h1 style="text-align: center;"><span style="font-size:24px">Gremial M&eacute;dica Hospitalaria </span></h1>\n\n<p>Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.</p>\n', '<h2>Quiens Somos</h2>\n', '<h2>Secciones</h2>\n', '<h2>Contacto</h2>\n', 'Lorem ipsum dolor sit amet, ea unum veri debitis\r\n                                                            cum. No viris accumsan consulatu per. Ei amet sonet \r\n                                                            est, assum choro scriptorem id eos. Ad autem adipisci \r\n                                                            his. Mel et facete concludaturque. Oblique torquatos \r\n                                                            adolescens cu est. Vix no antiopam conclusionemque. \r\n                                                            Cum tamquam debitis mnesarchum ne, ex duo magna errem. \r\n                                                            Ei sit persius perfecto splendide, pro tamquam \r\n                                                            debitis et.', '<p><a href="http://localhost/gremialmedica/medicos/public/edicion/portada">Seccion 1</a><a href="http://localhost/gremialmedica/medicos/public/edicion/portada">Seccion 2</a>&nbsp; <a href="http://localhost/gremialmedica/medicos/public/edicion/portada">Seccion 3</a></p>\n', 'Direccion : Av 9 de Julio  <br>\r\n                                                            Telefono : 000.000.000.000 <br>\r\n                                                            Email : emal@email.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobrenosotros`
--

CREATE TABLE IF NOT EXISTS `sobrenosotros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo_principal` text COLLATE utf8_unicode_ci NOT NULL,
  `subtitulo_principal` text COLLATE utf8_unicode_ci NOT NULL,
  `subtitulo_principal_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo_derecha_primero` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo_derecha_descripcion_primero` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo_derecha_segundo` text COLLATE utf8_unicode_ci NOT NULL,
  `titulo_derecha_descripcion_segundo` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `sobrenosotros`
--

INSERT INTO `sobrenosotros` (`id`, `titulo_principal`, `subtitulo_principal`, `subtitulo_principal_descripcion`, `contenido`, `titulo_derecha_primero`, `titulo_derecha_descripcion_primero`, `titulo_derecha_segundo`, `titulo_derecha_descripcion_segundo`, `created_at`, `updated_at`) VALUES
(1, 'BLOG', '[By Admin on December 01, 2012 with 01 Commnets]', 'Quiens Somos', 'Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater \r\n                                                                    magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis \r\n                                                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce \r\n                                                                    euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. \r\n                                                                    Aliquam congue\r\n                                                                    Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater \r\n                                                                    magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis \r\n                                                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce \r\n                                                                    euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. \r\n                                                                    Aliquam congue\r\n                                                                    Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam\r\n                                                                    aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis suscipit \r\n                                                                    laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce euismod consequat \r\n                                                                    ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue', 'About Us', 'Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel\r\n                                                             impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.', 'Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel\r\n                                                             impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.', 'Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel \r\n                                                             impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `nick` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nick`) VALUES
(1, 'test@test.com', '$2y$10$fDVZS2glEsgKZydmOR5D7uK2sbcTwb6qq6lBzfHs2bbzBswggxFwC', 'Test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
