-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2014 a las 01:06:16
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
(1, 1, 1, '1', '0000-00-00', '1', '1', '1', '1', '1', '1', '1', '1', '0000-00-00', '0000-00-00', '1', '1', '1', '1', '2014-02-13 14:10:57', '2014-02-13 14:10:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrucels`
--

CREATE TABLE IF NOT EXISTS `carrucels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `carrucels`
--

INSERT INTO `carrucels` (`id`, `imagen`, `texto`, `created_at`, `updated_at`) VALUES
(1, '/gremialmedica/medicos/public/assets/upload/files/imagenes_carrucel/20140122_093827.jpg', 'descripcion 1', '2014-02-18 08:55:47', '2014-02-18 08:55:47'),
(2, '/gremialmedica/medicos/public/assets/upload/files/imagenes_carrucel/20140122_093947.jpg', 'descripcion 2', '2014-02-18 08:55:58', '2014-02-18 08:55:58'),
(3, '/gremialmedica/medicos/public/assets/upload/files/imagenes_carrucel/20140122_120209.jpg', 'descripcion 3', '2014-02-18 08:56:06', '2014-02-18 08:56:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
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
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `titulo_principal`, `subtitulo_principal`, `subtitulo_principal_descripcion`, `contenido`, `titulo_derecha_primero`, `titulo_derecha_descripcion_primero`, `titulo_derecha_segundo`, `titulo_derecha_descripcion_segundo`, `created_at`, `updated_at`) VALUES
(1, '<p><span style="font-size:20px"><strong>Contacto</strong></span></p>\n', '[By Admin on December 01, 2012 with 01 Commnets]', '<p>Mails</p>\n', 'Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater \r\n                                                                    magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis \r\n                                                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce \r\n                                                                    euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. \r\n                                                                    Aliquam congue\r\n                                                                    Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater \r\n                                                                    magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis \r\n                                                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce \r\n                                                                    euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. \r\n                                                                    Aliquam congue\r\n                                                                    Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam\r\n                                                                    aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam. Corporis suscipit \r\n                                                                    laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit Fusce euismod consequat \r\n                                                                    ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue', '<h2>Contacto</h2>\n', 'Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel\r\n                                                             impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.', '<h2>Titulo 2</h2>\n', 'Lorem ipsum dolor slo onsec tueraliquet Morbi nec In Curabitur lreaoreet nisl lorem in pellente e vidicus pannel \r\n                                                             impirus sadintas velisurabitur lreaoreet nisl lorem in pellente vidicus pannel.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `imagen`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, '/gremialmedica/medicos/public/assets/upload/files/imagenes_carrucel/20140122_093827.jpg', 'descripcion 1', '2014-02-18 08:56:44', '2014-02-18 08:56:44'),
(2, '/gremialmedica/medicos/public/assets/upload/files/imagenes_carrucel/20140122_093947.jpg', 'descripcion 2', '2014-02-18 08:56:55', '2014-02-18 08:56:55'),
(3, '/gremialmedica/medicos/public/assets/upload/files/imagenes_carrucel/20140122_120209.jpg', 'descripcion 3', '2014-02-18 08:57:05', '2014-02-18 08:57:05');

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
('2014_02_06_120519_create_portada_table', 1),
('2014_02_06_140745_alter_usuarios_table_to_users', 1),
('2014_02_09_184405_create_sobreNosotros_table', 1),
('2014_02_10_104406_create_noticias_table', 1),
('2014_02_11_212719_create_estadoNoticia_table', 1),
('2014_02_18_025938_create_carrucels_table', 2),
('2014_02_18_053005_create_galeria_table', 2),
('2014_02_19_034332_create_contacto_table', 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `desarrollo`, `fecha`, `imagen`, `estadoNoticia_id`, `slug`, `seccion`, `tipo`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>prueba 1 ma&ntilde;ana d&iacute;a </strong></p>\r\n', '<p><em>prueba 1 ma&ntilde;ana d&iacute;a </em></p>\r\n', '', 'Miércoles, 12 de Febrero del año 2014 | 11:39:56 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 2, 'prueba-1-manana-dia-', 0, 0, '0000-00-00 00:00:00', '2014-02-14 17:10:16'),
(2, '<p><span style="font-size:26px">prueba 2 ma&ntilde;ana d&iacute;a</span></p>\r\n', '<p><span style="font-family:comic sans ms,cursive">prueba 2 ma&ntilde;ana d&iacute;a</span></p>\r\n', ' prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día  prueba 3 mañana día ', 'Miércoles, 12 de Febrero del año 2014 | 12:02:28 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 2, 'prueba-2-manana-dia', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '<p>prueba 3&nbsp;</p>\n', '<p>prueba 3 ma&ntilde;ana d&iacute;a</p>\r\n', '', 'Miércoles, 12 de Febrero del año 2014 | 12:06:21 Hs', '/gremialmedica/medicos/public/assets/upload/files/url%20-%20copia.jpg', 1, 'prueba-3-manana-dia', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '<p>prueba 4</p>\n', '<p>prueba 4 ma&ntilde;ana d&iacute;a prueba 4 ma&ntilde;ana d&iacute;a prueba 4 ma&ntilde;ana d&iacute;a prueba 4 ma&ntilde;ana d&iacute;a prueba 4 ma&ntilde;ana d&iacute;a prueba 4 ma&ntilde;ana d&iacute;a</p>\r\n', '<h1 style="text-align: center;"><span style="font-size:22px">hoy</span></h1>\n', 'Jueves, 13 de Febrero del año 2014 | 06:27:22 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 3, 'prueba-4-manana-dia-13-02-2014-09-27-56', 0, 0, '0000-00-00 00:00:00', '2014-02-18 13:13:15'),
(5, '<p>prueba 5</p>\r\n', '<p>prueba 5</p>\r\n', '<p>prueba 5</p>\r\n', 'Jueves, 13 de Febrero del año 2014 | 11:56:13 Hs', '', 3, 'prueba-5-13-02-2014-14-56-35', 0, 0, '0000-00-00 00:00:00', '2014-02-14 15:18:57'),
(6, '<p>prueba 5</p>\r\n', '<p>prueba 6</p>\r\n', '<p>prueba 6</p>\r\n', 'Jueves, 13 de Febrero del año 2014 | 12:01:31 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 1, 'prueba-6-13-02-2014-15-02-12', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '<p>prueba 7</p>\r\n', '<p>prueba 7</p>\r\n', '<p>prueba 7</p>\r\n', 'Jueves, 13 de Febrero del año 2014 | 12:01:31 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 1, 'prueba-7-13-02-2014-15-09-51', 0, 0, '2014-02-13 18:09:51', '2014-02-13 18:09:51'),
(8, '<p style="text-align:center"><span style="font-size:24px"><span style="color:rgb(0, 255, 255)">titulo del articulo</span></span></p>\n', '<p>deescripcion breve</p>\r\n', '<p>todo el desarrollo que&nbsp; quieras<img alt="" src="/gremialmedica/medicos/public/assets/upload/files/url.jpg" style="height:56px; width:100px" /><img alt="" src="/gremialmedica/medicos/public/assets/upload/files/url%20-%20copia.jpg" style="height:56px; width:100px" /></p>\n', 'Jueves, 13 de Febrero del año 2014 | 17:11:19 Hs', '/gremialmedica/medicos/public/assets/upload/files/url.jpg', 1, 'una-url-amigable-13-02-2014-20-12-49', 0, 0, '2014-02-13 23:12:49', '2014-02-13 23:12:49'),
(9, '<p><em>noticia uno catriel 2</em></p>\n', '<p>descripcion primera pruba</p>\r\n', '<p>desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general desarrollo general <img alt="" src="/gremialmedica/medicos/public/assets/upload/files/imagenes_carrucel/20140122_120209.jpg" style="height:60px; width:100px" /></p>\n', 'Martes, 18 de Febrero del año 2014 | 17:09:01 Hs', '/gremialmedica/medicos/public/assets/upload/files/imagenes_carrucel/20140122_093947.jpg', 1, 'catri-noticia-uno-18-02-2014-20-20-19', 0, 0, '2014-02-18 23:20:19', '2014-02-18 23:20:19');

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
(1, 'Gremial Médica Hospitalaria\r\n                                                            Frace breve de Bienvenida Hasta ochenta y nueve (89) \r\n                                                            caracteres', 'Gremial Médica Hospitalaria\r\n                                                            Lorem ipsum dolor slo onsec tueraliquet Morbi nec \r\n                                                            In Curabitur lreaoreet nisl lorem in pellente e \r\n                                                            vidicus pannel impirus sadintas velisurabitur \r\n                                                            lreaoreet nisl lorem in pellente vidicus pannel. ', 'Quiens Somos', 'Secciones', 'Contacto', 'Lorem ipsum dolor sit amet, ea unum veri debitis\r\n                                                            cum. No viris accumsan consulatu per. Ei amet sonet \r\n                                                            est, assum choro scriptorem id eos. Ad autem adipisci \r\n                                                            his. Mel et facete concludaturque. Oblique torquatos \r\n                                                            adolescens cu est. Vix no antiopam conclusionemque. \r\n                                                            Cum tamquam debitis mnesarchum ne, ex duo magna errem. \r\n                                                            Ei sit persius perfecto splendide, pro tamquam \r\n                                                            debitis et.', 'Seccion 1 <br> Seccion 2', 'Direccion : Av 9 de Julio  <br>\r\n                                                            Telefono : 000.000.000.000 <br>\r\n                                                            Email : emal@email.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'test@test.com', '$2y$10$XSv463BsxRdp1rzH9Ka8IeXspuDj79Rcu5PRev8B4OEQYwlf5w5l2', 'Test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
