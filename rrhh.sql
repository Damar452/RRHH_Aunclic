-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2020 a las 23:09:46
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rrhh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arps`
--

CREATE TABLE `arps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `arp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `arps`
--

INSERT INTO `arps` (`id`, `arp`, `created_at`, `updated_at`) VALUES
(1, 'Colfondos', NULL, NULL),
(2, 'Liberty Seguros de Vida S.A.', NULL, NULL),
(3, 'Mapfre Seguros', NULL, NULL),
(4, 'Positiva', NULL, NULL),
(5, 'Seguros Bolívar S.A.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `banco`, `created_at`, `updated_at`) VALUES
(1, 'Banco de Bogotá', NULL, NULL),
(2, 'Banco Davivienda', NULL, NULL),
(3, 'Bancolombia', NULL, NULL),
(4, 'Banco Popular', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `cargo`, `created_at`, `updated_at`) VALUES
(1, 'Auxiliar Administrativo', NULL, NULL),
(2, 'Técnico Administrativo', NULL, NULL),
(3, 'Profesional Universitario', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigos`
--

CREATE TABLE `codigos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `codigos`
--

INSERT INTO `codigos` (`id`, `codigo`, `created_at`, `updated_at`) VALUES
(1, '001', NULL, NULL),
(2, '002', NULL, NULL),
(3, '003', NULL, NULL),
(4, '004', NULL, NULL),
(5, '005', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `departamento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paice_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`, `paice_id`, `created_at`, `updated_at`) VALUES
(1, 'Amazonas', 5, NULL, NULL),
(2, 'Antioquia', 5, NULL, NULL),
(3, 'Arauca', 5, NULL, NULL),
(4, 'Atlántico', 5, NULL, NULL),
(5, 'Bolívar', 5, NULL, NULL),
(6, 'Boyacá', 5, NULL, NULL),
(7, 'Caldas', 5, NULL, NULL),
(8, 'Caquetá', 5, NULL, NULL),
(9, 'Casanare', 5, NULL, NULL),
(10, 'Cauca', 5, NULL, NULL),
(11, 'Cesar', 5, NULL, NULL),
(12, 'Chocó', 5, NULL, NULL),
(13, 'Córdoba', 5, NULL, NULL),
(14, 'Cundinamarca', 5, NULL, NULL),
(15, 'Distrito Capital', 5, NULL, NULL),
(16, 'Guainía', 5, NULL, NULL),
(17, 'Guaviare', 5, NULL, NULL),
(18, 'Huila', 5, NULL, NULL),
(19, 'La Guajira', 5, NULL, NULL),
(20, 'Magdalena', 5, NULL, NULL),
(21, 'Meta', 5, NULL, NULL),
(22, 'Nariño', 5, NULL, NULL),
(23, 'Norte de Santander', 5, NULL, NULL),
(24, 'Putumayo', 5, NULL, NULL),
(25, 'Quindío', 5, NULL, NULL),
(26, 'Risaralda', 5, NULL, NULL),
(27, 'San Andrés y Providencia', 5, NULL, NULL),
(28, 'Santander', 5, NULL, NULL),
(29, 'Sucre', 5, NULL, NULL),
(30, 'Tolima', 5, NULL, NULL),
(31, 'Valle', 5, NULL, NULL),
(32, 'Vaupés', 5, NULL, NULL),
(33, 'Vichada', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocivils`
--

CREATE TABLE `estadocivils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estadocivil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estadocivils`
--

INSERT INTO `estadocivils` (`id`, `estadocivil`, `created_at`, `updated_at`) VALUES
(1, 'Soltero ', NULL, NULL),
(2, 'Casado', NULL, NULL),
(3, 'Union Libre', NULL, NULL),
(4, 'Viudo', NULL, NULL),
(5, 'Divorciado', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id`, `grado`, `created_at`, `updated_at`) VALUES
(1, '01', NULL, NULL),
(2, '02', NULL, NULL),
(3, '03', NULL, NULL),
(4, '04', NULL, NULL),
(5, '05', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(96, '2014_10_12_000000_create_users_table', 1),
(97, '2014_10_12_100000_create_password_resets_table', 1),
(98, '2019_08_19_000000_create_failed_jobs_table', 1),
(99, '2020_05_21_030013_create_tipodocumentos_table', 1),
(100, '2020_05_21_030056_create_paices_table', 1),
(101, '2020_05_21_030120_create_departamentos_table', 1),
(102, '2020_05_21_030137_create_municipios_table', 1),
(103, '2020_05_21_030202_create_estadocivils_table', 1),
(104, '2020_05_21_030235_create_personas_table', 1),
(105, '2020_05_21_030358_create_saluds_table', 1),
(106, '2020_05_21_030417_create_pensions_table', 1),
(107, '2020_05_21_030437_create_arps_table', 1),
(108, '2020_05_21_030505_create_bancos_table', 1),
(109, '2020_05_21_030749_create_novedadnominas_table', 1),
(110, '2020_05_21_030805_create_tipoposesions_table', 1),
(111, '2020_05_21_030827_create_cargos_table', 1),
(112, '2020_05_21_030841_create_codigos_table', 1),
(113, '2020_05_21_030856_create_grados_table', 1),
(114, '2020_05_21_030922_create_plantas_table', 1),
(115, '2020_05_21_030939_create_oficinaadscritas_table', 1),
(116, '2020_05_21_030956_create_tipovinculacions_table', 1),
(117, '2020_05_21_031012_create_tipoactoadministrativos_table', 1),
(118, '2020_05_21_031026_create_posesions_table', 1),
(119, '2020_05_21_031042_create_consecutivos_table', 1),
(120, '2020_05_28_192514_add_consecutivo_id_to_posesions', 2),
(121, '2020_05_28_202707_drop_consecutivos_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `municipio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `municipio`, `departamento_id`, `created_at`, `updated_at`) VALUES
(1, 'Leticia', 1, NULL, NULL),
(2, 'El Encanto', 1, NULL, NULL),
(3, 'La Chorrera', 1, NULL, NULL),
(4, 'La Pedrera', 1, NULL, NULL),
(5, 'Miriti-Parana', 1, NULL, NULL),
(6, 'Puerto Narino', 1, NULL, NULL),
(7, 'Puerto Santander', 1, NULL, NULL),
(8, 'Tarapaca', 1, NULL, NULL),
(9, 'Abejorral', 2, NULL, NULL),
(10, 'Abriaqui', 2, NULL, NULL),
(11, 'Alejandria', 2, NULL, NULL),
(12, 'Amaga', 2, NULL, NULL),
(13, 'Amalfi', 2, NULL, NULL),
(14, 'Andes', 2, NULL, NULL),
(15, 'Angelopolis', 2, NULL, NULL),
(16, 'Angostura', 2, NULL, NULL),
(17, 'Anori', 2, NULL, NULL),
(18, 'Anza', 2, NULL, NULL),
(19, 'Apartado', 2, NULL, NULL),
(20, 'Arboletes', 2, NULL, NULL),
(21, 'Argelia', 2, NULL, NULL),
(22, 'Armenia', 2, NULL, NULL),
(23, 'Barbosa', 2, NULL, NULL),
(24, 'Bello', 2, NULL, NULL),
(25, 'Belmira', 2, NULL, NULL),
(26, 'Betania', 2, NULL, NULL),
(27, 'Betulia', 2, NULL, NULL),
(28, 'Briceño', 2, NULL, NULL),
(29, 'Buritica', 2, NULL, NULL),
(30, 'Caceres', 2, NULL, NULL),
(31, 'Caicedo', 2, NULL, NULL),
(32, 'Caldas', 2, NULL, NULL),
(33, 'Campamento', 2, NULL, NULL),
(34, 'Cañasgordas', 2, NULL, NULL),
(35, 'Caracoli', 2, NULL, NULL),
(36, 'Caramanta', 2, NULL, NULL),
(37, 'Carepa', 2, NULL, NULL),
(38, 'Carmendeviboral', 2, NULL, NULL),
(39, 'Carolina', 2, NULL, NULL),
(40, 'Caucasia', 2, NULL, NULL),
(41, 'Chigorodo', 2, NULL, NULL),
(42, 'Cisneros', 2, NULL, NULL),
(43, 'Ciudadbolivar', 2, NULL, NULL),
(44, 'Cocorna', 2, NULL, NULL),
(45, 'Concepcion', 2, NULL, NULL),
(46, 'Concordia', 2, NULL, NULL),
(47, 'Copacabana', 2, NULL, NULL),
(48, 'Dabeiba', 2, NULL, NULL),
(49, 'Donmatias', 2, NULL, NULL),
(50, 'Ebejico', 2, NULL, NULL),
(51, 'Elbagre', 2, NULL, NULL),
(52, 'Entrerrios', 2, NULL, NULL),
(53, 'Envigado', 2, NULL, NULL),
(54, 'Fredonia', 2, NULL, NULL),
(55, 'Frontino', 2, NULL, NULL),
(56, 'Giraldo', 2, NULL, NULL),
(57, 'Girardota', 2, NULL, NULL),
(58, 'Gomezplata', 2, NULL, NULL),
(59, 'Granada', 2, NULL, NULL),
(60, 'Guadalupe', 2, NULL, NULL),
(61, 'Guarne', 2, NULL, NULL),
(62, 'Guatape', 2, NULL, NULL),
(63, 'Heliconia', 2, NULL, NULL),
(64, 'Hispania', 2, NULL, NULL),
(65, 'Itagui', 2, NULL, NULL),
(66, 'Ituango', 2, NULL, NULL),
(67, 'Jardin', 2, NULL, NULL),
(68, 'Jerico', 2, NULL, NULL),
(69, 'Laceja', 2, NULL, NULL),
(70, 'Laestrella', 2, NULL, NULL),
(71, 'Lapintada', 2, NULL, NULL),
(72, 'Launion', 2, NULL, NULL),
(73, 'Liborina', 2, NULL, NULL),
(74, 'Maceo', 2, NULL, NULL),
(75, 'Marinilla', 2, NULL, NULL),
(76, 'Medellin', 2, NULL, NULL),
(77, 'Montebello', 2, NULL, NULL),
(78, 'Murindo', 2, NULL, NULL),
(79, 'Mutata', 2, NULL, NULL),
(80, 'Nariño', 2, NULL, NULL),
(81, 'Nechi', 2, NULL, NULL),
(82, 'Necocli', 2, NULL, NULL),
(83, 'Olaya', 2, NULL, NULL),
(84, 'Peñol', 2, NULL, NULL),
(85, 'Peque', 2, NULL, NULL),
(86, 'Pueblorrico', 2, NULL, NULL),
(87, 'Puertoberrio', 2, NULL, NULL),
(88, 'Puertonare', 2, NULL, NULL),
(89, 'Puertotriunfo', 2, NULL, NULL),
(90, 'Remedios', 2, NULL, NULL),
(91, 'Retiro', 2, NULL, NULL),
(92, 'Rionegro', 2, NULL, NULL),
(93, 'Sabanalarga', 2, NULL, NULL),
(94, 'Sabaneta', 2, NULL, NULL),
(95, 'Salgar', 2, NULL, NULL),
(96, 'Sanandres', 2, NULL, NULL),
(97, 'Sancarlos', 2, NULL, NULL),
(98, 'Sanfrancisco', 2, NULL, NULL),
(99, 'Sanjeronimo', 2, NULL, NULL),
(100, 'Sanjosedelamontaña', 2, NULL, NULL),
(101, 'Sanjuandeuraba', 2, NULL, NULL),
(102, 'Sanluis', 2, NULL, NULL),
(103, 'Sanpedro', 2, NULL, NULL),
(104, 'Sanpedrodeuraba', 2, NULL, NULL),
(105, 'Sanrafael', 2, NULL, NULL),
(106, 'Sanroque', 2, NULL, NULL),
(107, 'Sanvicente', 2, NULL, NULL),
(108, 'Santabarbara', 2, NULL, NULL),
(109, 'Santarosadeosos', 2, NULL, NULL),
(110, 'Santafede', 2, NULL, NULL),
(111, 'Santodomingo', 2, NULL, NULL),
(112, 'Santuario', 2, NULL, NULL),
(113, 'Segovia', 2, NULL, NULL),
(114, 'Sonson', 2, NULL, NULL),
(115, 'Sopetran', 2, NULL, NULL),
(116, 'Tamesis', 2, NULL, NULL),
(117, 'Taraza', 2, NULL, NULL),
(118, 'Tarso', 2, NULL, NULL),
(119, 'Titiribi', 2, NULL, NULL),
(120, 'Toledo', 2, NULL, NULL),
(121, 'Turbo', 2, NULL, NULL),
(122, 'Uramita', 2, NULL, NULL),
(123, 'Urrao', 2, NULL, NULL),
(124, 'Valdivia', 2, NULL, NULL),
(125, 'Valparaiso', 2, NULL, NULL),
(126, 'Vegachi', 2, NULL, NULL),
(127, 'Venecia', 2, NULL, NULL),
(128, 'Vigiadelfuerte', 2, NULL, NULL),
(129, 'Yali', 2, NULL, NULL),
(130, 'Yarumal', 2, NULL, NULL),
(131, 'Yolombo', 2, NULL, NULL),
(132, 'Yondo', 2, NULL, NULL),
(133, 'Zaragoza', 2, NULL, NULL),
(134, 'ARAUCA', 3, NULL, NULL),
(135, 'ARAUQUITA', 3, NULL, NULL),
(136, 'CLAVONORTE', 3, NULL, NULL),
(137, 'FORTUL', 3, NULL, NULL),
(138, 'PUERTORONDON', 3, NULL, NULL),
(139, 'SARAVENA', 3, NULL, NULL),
(140, 'TAME', 3, NULL, NULL),
(141, 'Sincelejo', 29, NULL, NULL),
(142, 'Buenavista', 29, NULL, NULL),
(143, 'Caimito', 29, NULL, NULL),
(144, 'Coloso', 29, NULL, NULL),
(145, 'Corozal', 29, NULL, NULL),
(146, 'Chalan', 29, NULL, NULL),
(147, 'Galeras', 29, NULL, NULL),
(148, 'Guaranda', 29, NULL, NULL),
(149, 'La Union', 29, NULL, NULL),
(150, 'Los Palmitos', 29, NULL, NULL),
(151, 'Majagual', 29, NULL, NULL),
(152, 'Morroa', 29, NULL, NULL),
(153, 'Ovejas', 29, NULL, NULL),
(154, 'Palmito', 29, NULL, NULL),
(155, 'San Benito Abad', 29, NULL, NULL),
(156, 'San Juan Betulia', 29, NULL, NULL),
(157, 'Sampues', 29, NULL, NULL),
(158, 'San Marcos', 29, NULL, NULL),
(159, 'San Onofre', 29, NULL, NULL),
(160, 'San Pedro', 29, NULL, NULL),
(161, 'Since', 29, NULL, NULL),
(162, 'Sucre', 29, NULL, NULL),
(163, 'Tolu', 29, NULL, NULL),
(164, 'Toluviejo', 29, NULL, NULL),
(165, 'Sampues', 29, NULL, NULL),
(166, 'Covenas', 29, NULL, NULL),
(167, 'Elroble', 29, NULL, NULL),
(168, 'Monteria', 13, NULL, NULL),
(169, 'Ayapel', 13, NULL, NULL),
(170, 'Buenavista', 13, NULL, NULL),
(171, 'Canalete', 13, NULL, NULL),
(172, 'Cerete', 13, NULL, NULL),
(173, 'Chima', 13, NULL, NULL),
(174, 'Chinu', 13, NULL, NULL),
(175, 'Cienaga de Oro', 13, NULL, NULL),
(176, 'Lorica', 13, NULL, NULL),
(177, 'Los Cordobas', 13, NULL, NULL),
(178, 'Momil', 13, NULL, NULL),
(179, 'Montelibano', 13, NULL, NULL),
(180, 'Monitos', 13, NULL, NULL),
(181, 'Planeta Rica', 13, NULL, NULL),
(182, 'Pueblo Nuevo', 13, NULL, NULL),
(183, 'Puerto Escondido', 13, NULL, NULL),
(184, 'Puerto Libertador', 13, NULL, NULL),
(185, 'Purisima', 13, NULL, NULL),
(186, 'Sahagun', 13, NULL, NULL),
(187, 'San Andres de Sotavento', 13, NULL, NULL),
(188, 'San Antero', 13, NULL, NULL),
(189, 'San Bernando del Viento', 13, NULL, NULL),
(190, 'San Carlos', 13, NULL, NULL),
(191, 'San Pelayo', 13, NULL, NULL),
(192, 'Tierralta', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedadnominas`
--

CREATE TABLE `novedadnominas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `persona_id` bigint(20) UNSIGNED NOT NULL,
  `salud_id` bigint(20) UNSIGNED NOT NULL,
  `pension_id` bigint(20) UNSIGNED NOT NULL,
  `arp_id` bigint(20) UNSIGNED NOT NULL,
  `banco_id` bigint(20) UNSIGNED NOT NULL,
  `numerocuenta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `novedadnominas`
--

INSERT INTO `novedadnominas` (`id`, `persona_id`, `salud_id`, `pension_id`, `arp_id`, `banco_id`, `numerocuenta`, `created_at`, `updated_at`) VALUES
(10, 14, 1, 1, 1, 1, '441247588394', '2020-05-29 03:05:19', '2020-05-29 03:05:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oficinaadscritas`
--

CREATE TABLE `oficinaadscritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `oficinaadscrita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oficinaadscritas`
--

INSERT INTO `oficinaadscritas` (`id`, `oficinaadscrita`, `created_at`, `updated_at`) VALUES
(1, 'Dirección de Contabilidad', NULL, NULL),
(2, 'Dirección de Movilidad y Seguridad Vial', NULL, NULL),
(3, 'Oficina de Control Interno', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paices`
--

CREATE TABLE `paices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `paices`
--

INSERT INTO `paices` (`id`, `paice`, `created_at`, `updated_at`) VALUES
(1, 'Argentina', NULL, NULL),
(2, 'Bolivia', NULL, NULL),
(3, 'Brasil', NULL, NULL),
(4, 'Chile', NULL, NULL),
(5, 'Colombia', NULL, NULL),
(6, 'Costa Rica', NULL, NULL),
(7, 'Ecuador', NULL, NULL),
(8, 'El Salvador', NULL, NULL),
(9, 'Guatemala', NULL, NULL),
(10, 'Guyana', NULL, NULL),
(11, 'Guyana Francesa', NULL, NULL),
(12, 'Honduras', NULL, NULL),
(13, 'Nicaragua', NULL, NULL),
(14, 'Panamá', NULL, NULL),
(15, 'Paraguay', NULL, NULL),
(16, 'Perú', NULL, NULL),
(17, 'Suriname', NULL, NULL),
(18, 'Uruguay', NULL, NULL),
(19, 'Venezuela', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensions`
--

CREATE TABLE `pensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pensions`
--

INSERT INTO `pensions` (`id`, `pension`, `created_at`, `updated_at`) VALUES
(1, 'Porvenir', NULL, NULL),
(2, 'Colpensiones', NULL, NULL),
(3, 'Colfondos', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipodocumento_id` bigint(20) UNSIGNED NOT NULL,
  `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expedicion_paice_id` bigint(20) UNSIGNED NOT NULL,
  `expedicion_departamento_id` bigint(20) UNSIGNED NOT NULL,
  `expedicion_municipio_id` bigint(20) UNSIGNED NOT NULL,
  `fechanacimiento` date NOT NULL,
  `residencia_paice_id` bigint(20) UNSIGNED NOT NULL,
  `residencia_departamento_id` bigint(20) UNSIGNED NOT NULL,
  `residencia_municipio_id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estadocivil_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombres`, `apellidos`, `tipodocumento_id`, `documento`, `expedicion_paice_id`, `expedicion_departamento_id`, `expedicion_municipio_id`, `fechanacimiento`, `residencia_paice_id`, `residencia_departamento_id`, `residencia_municipio_id`, `direccion`, `telefono`, `sexo`, `estadocivil_id`, `created_at`, `updated_at`) VALUES
(14, 'Andres Felipe', 'De Alba Zambrano', 1, '1066186316', 5, 29, 141, '1996-06-09', 5, 29, 141, 'Calle 12 #10-51', '3014408100', 'Masculino', 2, '2020-05-29 03:05:19', '2020-05-29 03:05:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantas`
--

CREATE TABLE `plantas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `planta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `plantas`
--

INSERT INTO `plantas` (`id`, `planta`, `created_at`, `updated_at`) VALUES
(1, 'Alcaldía de Sincelejo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posesions`
--

CREATE TABLE `posesions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipoposesion_id` bigint(20) UNSIGNED NOT NULL,
  `persona_id` bigint(20) UNSIGNED NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consecutivo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaposesion` date NOT NULL,
  `cargo_id` bigint(20) UNSIGNED NOT NULL,
  `codigo_id` bigint(20) UNSIGNED NOT NULL,
  `grado_id` bigint(20) UNSIGNED NOT NULL,
  `planta_id` bigint(20) UNSIGNED NOT NULL,
  `oficinaadscrita_id` bigint(20) UNSIGNED NOT NULL,
  `tipovinculacion_id` bigint(20) UNSIGNED NOT NULL,
  `fechaactoadministrativo` date NOT NULL,
  `tipoactoadministrativo_id` bigint(20) UNSIGNED NOT NULL,
  `actoadministrativo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cabildo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ubicacioncabildo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaasamblea` date DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posesions`
--

INSERT INTO `posesions` (`id`, `tipoposesion_id`, `persona_id`, `numero`, `consecutivo`, `fechaposesion`, `cargo_id`, `codigo_id`, `grado_id`, `planta_id`, `oficinaadscrita_id`, `tipovinculacion_id`, `fechaactoadministrativo`, `tipoactoadministrativo_id`, `actoadministrativo`, `cabildo`, `ubicacioncabildo`, `fechaasamblea`, `user_id`, `fecha`, `created_at`, `updated_at`) VALUES
(5, 1, 14, '8863', '001', '2020-02-25', 3, 1, 1, 1, 1, 1, '2020-02-25', 1, '214 de 25 de febrero de 2020', NULL, NULL, NULL, 4, '2020-05-28', '2020-05-29 03:05:19', '2020-05-29 03:05:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saluds`
--

CREATE TABLE `saluds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `saluds`
--

INSERT INTO `saluds` (`id`, `salud`, `created_at`, `updated_at`) VALUES
(1, 'Coomeva', NULL, NULL),
(2, 'Salud Total', NULL, NULL),
(3, 'Café Salud', NULL, NULL),
(4, 'La Nueva EPS', NULL, NULL),
(5, 'Comparta', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoactoadministrativos`
--

CREATE TABLE `tipoactoadministrativos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipoactoadministrativo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipoactoadministrativos`
--

INSERT INTO `tipoactoadministrativos` (`id`, `tipoactoadministrativo`, `created_at`, `updated_at`) VALUES
(1, 'Decreto', NULL, NULL),
(2, 'Resolución', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumentos`
--

CREATE TABLE `tipodocumentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipodocumento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipodocumentos`
--

INSERT INTO `tipodocumentos` (`id`, `tipodocumento`, `created_at`, `updated_at`) VALUES
(1, 'Cédula de Ciudadanía', NULL, NULL),
(2, 'Cédula de Extranjería', NULL, NULL),
(3, 'Tarjeta de Identidad', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoposesions`
--

CREATE TABLE `tipoposesions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipoposesion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipoposesions`
--

INSERT INTO `tipoposesions` (`id`, `tipoposesion`, `created_at`, `updated_at`) VALUES
(1, 'Alcaldía de Sincelejo', NULL, NULL),
(2, 'Secretaría de Educación', NULL, NULL),
(3, 'Cargos en Cabildos Indígenas', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipovinculacions`
--

CREATE TABLE `tipovinculacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipovinculacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipovinculacions`
--

INSERT INTO `tipovinculacions` (`id`, `tipovinculacion`, `created_at`, `updated_at`) VALUES
(1, 'Temporal', NULL, NULL),
(2, 'Encargo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipousuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `sexo`, `usuario`, `password`, `email`, `estado`, `tipousuario`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Andres F. De Alba', 'Masculino', 'anddeal', '$2y$10$rbtK7v7XqYyt7jASa6UQc.5Q5r06NHbamlaXusSMq9cc8t9yAsqFe', 'anddeal.09@gmail.com', 'Activo', 'Administrador', NULL, '2020-05-28 06:21:10', '2020-05-28 06:21:10'),
(5, 'Nestor Borja', 'Masculino', 'nestor', '$2y$10$2le/ekH3vUdvS/2mi2j1l.CV2xC5mY.xnKg45TxXaG6tebmlWIvcW', 'nesborja@gmail.com', 'Activo', 'Estandar', NULL, '2020-05-28 06:27:04', '2020-05-28 06:27:04');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arps`
--
ALTER TABLE `arps`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codigos`
--
ALTER TABLE `codigos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamentos_paice_id_foreign` (`paice_id`);

--
-- Indices de la tabla `estadocivils`
--
ALTER TABLE `estadocivils`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `municipios_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `novedadnominas`
--
ALTER TABLE `novedadnominas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `novedadnominas_persona_id_foreign` (`persona_id`),
  ADD KEY `novedadnominas_salud_id_foreign` (`salud_id`),
  ADD KEY `novedadnominas_pension_id_foreign` (`pension_id`),
  ADD KEY `novedadnominas_arp_id_foreign` (`arp_id`),
  ADD KEY `novedadnominas_banco_id_foreign` (`banco_id`);

--
-- Indices de la tabla `oficinaadscritas`
--
ALTER TABLE `oficinaadscritas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paices`
--
ALTER TABLE `paices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `pensions`
--
ALTER TABLE `pensions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personas_tipodocumento_id_foreign` (`tipodocumento_id`),
  ADD KEY `personas_expedicion_paice_id_foreign` (`expedicion_paice_id`),
  ADD KEY `personas_expedicion_departamento_id_foreign` (`expedicion_departamento_id`),
  ADD KEY `personas_expedicion_municipio_id_foreign` (`expedicion_municipio_id`),
  ADD KEY `personas_residencia_paice_id_foreign` (`residencia_paice_id`),
  ADD KEY `personas_residencia_departamento_id_foreign` (`residencia_departamento_id`),
  ADD KEY `personas_residencia_municipio_id_foreign` (`residencia_municipio_id`);

--
-- Indices de la tabla `plantas`
--
ALTER TABLE `plantas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posesions`
--
ALTER TABLE `posesions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posesions_tipoposesion_id_foreign` (`tipoposesion_id`),
  ADD KEY `posesions_persona_id_foreign` (`persona_id`),
  ADD KEY `posesions_cargo_id_foreign` (`cargo_id`),
  ADD KEY `posesions_codigo_id_foreign` (`codigo_id`),
  ADD KEY `posesions_grado_id_foreign` (`grado_id`),
  ADD KEY `posesions_planta_id_foreign` (`planta_id`),
  ADD KEY `posesions_oficinaadscrita_id_foreign` (`oficinaadscrita_id`),
  ADD KEY `posesions_tipovinculacion_id_foreign` (`tipovinculacion_id`),
  ADD KEY `posesions_tipoactoadministrativo_id_foreign` (`tipoactoadministrativo_id`),
  ADD KEY `posesions_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `saluds`
--
ALTER TABLE `saluds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoactoadministrativos`
--
ALTER TABLE `tipoactoadministrativos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodocumentos`
--
ALTER TABLE `tipodocumentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipoposesions`
--
ALTER TABLE `tipoposesions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipovinculacions`
--
ALTER TABLE `tipovinculacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_usuario_unique` (`usuario`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arps`
--
ALTER TABLE `arps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `codigos`
--
ALTER TABLE `codigos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `estadocivils`
--
ALTER TABLE `estadocivils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT de la tabla `novedadnominas`
--
ALTER TABLE `novedadnominas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `oficinaadscritas`
--
ALTER TABLE `oficinaadscritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paices`
--
ALTER TABLE `paices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pensions`
--
ALTER TABLE `pensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `plantas`
--
ALTER TABLE `plantas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `posesions`
--
ALTER TABLE `posesions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `saluds`
--
ALTER TABLE `saluds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipoactoadministrativos`
--
ALTER TABLE `tipoactoadministrativos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipodocumentos`
--
ALTER TABLE `tipodocumentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipoposesions`
--
ALTER TABLE `tipoposesions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipovinculacions`
--
ALTER TABLE `tipovinculacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_paice_id_foreign` FOREIGN KEY (`paice_id`) REFERENCES `paices` (`id`);

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`);

--
-- Filtros para la tabla `novedadnominas`
--
ALTER TABLE `novedadnominas`
  ADD CONSTRAINT `novedadnominas_arp_id_foreign` FOREIGN KEY (`arp_id`) REFERENCES `arps` (`id`),
  ADD CONSTRAINT `novedadnominas_banco_id_foreign` FOREIGN KEY (`banco_id`) REFERENCES `bancos` (`id`),
  ADD CONSTRAINT `novedadnominas_pension_id_foreign` FOREIGN KEY (`pension_id`) REFERENCES `pensions` (`id`),
  ADD CONSTRAINT `novedadnominas_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `novedadnominas_salud_id_foreign` FOREIGN KEY (`salud_id`) REFERENCES `saluds` (`id`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_expedicion_departamento_id_foreign` FOREIGN KEY (`expedicion_departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `personas_expedicion_municipio_id_foreign` FOREIGN KEY (`expedicion_municipio_id`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `personas_expedicion_paice_id_foreign` FOREIGN KEY (`expedicion_paice_id`) REFERENCES `paices` (`id`),
  ADD CONSTRAINT `personas_residencia_departamento_id_foreign` FOREIGN KEY (`residencia_departamento_id`) REFERENCES `departamentos` (`id`),
  ADD CONSTRAINT `personas_residencia_municipio_id_foreign` FOREIGN KEY (`residencia_municipio_id`) REFERENCES `municipios` (`id`),
  ADD CONSTRAINT `personas_residencia_paice_id_foreign` FOREIGN KEY (`residencia_paice_id`) REFERENCES `paices` (`id`),
  ADD CONSTRAINT `personas_tipodocumento_id_foreign` FOREIGN KEY (`tipodocumento_id`) REFERENCES `tipodocumentos` (`id`);

--
-- Filtros para la tabla `posesions`
--
ALTER TABLE `posesions`
  ADD CONSTRAINT `posesions_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargos` (`id`),
  ADD CONSTRAINT `posesions_codigo_id_foreign` FOREIGN KEY (`codigo_id`) REFERENCES `codigos` (`id`),
  ADD CONSTRAINT `posesions_grado_id_foreign` FOREIGN KEY (`grado_id`) REFERENCES `grados` (`id`),
  ADD CONSTRAINT `posesions_oficinaadscrita_id_foreign` FOREIGN KEY (`oficinaadscrita_id`) REFERENCES `oficinaadscritas` (`id`),
  ADD CONSTRAINT `posesions_persona_id_foreign` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`),
  ADD CONSTRAINT `posesions_planta_id_foreign` FOREIGN KEY (`planta_id`) REFERENCES `plantas` (`id`),
  ADD CONSTRAINT `posesions_tipoactoadministrativo_id_foreign` FOREIGN KEY (`tipoactoadministrativo_id`) REFERENCES `tipoactoadministrativos` (`id`),
  ADD CONSTRAINT `posesions_tipoposesion_id_foreign` FOREIGN KEY (`tipoposesion_id`) REFERENCES `tipoposesions` (`id`),
  ADD CONSTRAINT `posesions_tipovinculacion_id_foreign` FOREIGN KEY (`tipovinculacion_id`) REFERENCES `tipovinculacions` (`id`),
  ADD CONSTRAINT `posesions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
