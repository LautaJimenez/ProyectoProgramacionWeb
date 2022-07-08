-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2022 a las 23:57:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idcategoria` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombre`) VALUES
(1, 'Drama'),
(2, 'Comedia'),
(4, 'Autoayuda'),
(5, 'Economía'),
(6, 'Política'),
(7, 'Ficción y literatura'),
(8, 'Psicología'),
(9, 'Ciencia'),
(10, 'Infantil y juvenil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fechaCompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `idEditorial` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`idEditorial`, `nombre`) VALUES
(1, 'Planeta'),
(2, 'Alfaguara'),
(3, 'Debolsillo'),
(4, 'Anagrama'),
(5, 'Plaza & James'),
(6, 'Lumen'),
(7, 'Gárgola'),
(8, 'Booket'),
(9, 'Austral'),
(10, 'Lain'),
(11, 'Estrada'),
(12, 'Obelisco'),
(13, 'Montena'),
(14, 'V & R editores'),
(15, 'Mestas ediciones'),
(16, 'Vergara'),
(17, 'Grijalbo'),
(18, 'Umbriel Editores'),
(19, 'Ediciones Lea'),
(20, 'B de bolsillo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `idEditorial` int(11) NOT NULL,
  `paginas` int(11) NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `bestseller` tinyint(1) NOT NULL,
  `fechaPublicacion` date NOT NULL,
  `sinopsis` mediumtext NOT NULL,
  `isbn` varchar(14) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `contadorMasBuscados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `nombre`, `autor`, `precio`, `idEditorial`, `paginas`, `idioma`, `bestseller`, `fechaPublicacion`, `sinopsis`, `isbn`, `idcategoria`, `foto`, `contadorMasBuscados`) VALUES
(1, 'La Traición', 'Jorge Diaz Fernández', 1290, 1, 265, 'Español', 1, '2020-10-01', '\'Remil nunca llegó tan lejos. Esta vez se mueve en el peligroso filo de la actualidad política.\r\nTodos juegan frívolamente a la glorificación de los años 70; a la nueva ¿resistencia peronista¿ y a la revolución contra una dictadura imaginaria. Hasta que de pronto alguien se toma la ficción demasiado en serio y está a punto de desatar una tragedia sin retorno. En París; un amigo del Papa teme que este asunto le manche la sotana. Sabe que Francisco; afecto a meterse en las turbias aguas de la política argentina; bendice y alienta a personajes marginales que juegan con fuego. Por eso recurre a la Casita. Para que el ¿coronel¿ Cálgaris y Remil; su soldado más fiel; actúen en las sombras; esta vez al servicio secreto de Su Santidad. Con sus conjuras y persecuciones; La traición es una novela de espionaje político que pone en evidencia los vínculos secretos entre el falso progresismo; el populismo venal y la Iglesia. Una trama con mujeres inquietantes y vueltas de tuerca inesperadas por la que desfilan una clase política tomada por la corrupción; dirigentes de una izquierda con doble moral; obispos non sanctos; exguerrilleros alucinados que buscan revivir el pasado y operaciones de Inteligencia que devastan la reputación de los ¿enemigos¿. Jorge Fernández Díaz le da forma con su implacable pericia narrativa a un libro duro; sarcástico e inteligente. Una ficción políticamente incorrecta; demasiado cercana a lo real. Tanto que; en la lucidez extrema de su confección; se vuelve; por estos días; turbadora y a la vez indispensable.\'', '9789504971627', 7, 'libro20.png', 0),
(2, 'La Cúpula', 'Stephen King ', 1949, 3, 1136, 'Español', 1, '2013-07-01', 'El libro que inspiró la serie televisiva Under the dome. Un día de octubre la pequeña ciudad americana de Chester\'s Mill se encuentra totalmente aislada por una cúpula transparente e impenetrable. Nadie sabe de dónde ha salido ni por qué está allí. Sólo saben que poco a poco se agotarán las provisiones y hasta el oxígeno que respiran... El ejército pone a Barbie a cargo de la situación; pero Big Jim Rennie; el hombre que tiene un pie en todos los negocios sucios de la ciudad; no está de acuerdo: la cúpula podría ser la respuesta a sus plegarias. A medida que la comida; la electricidad y el agua escasean; los niños comienzan a tener premoniciones escalofriantes. El tiempo se acaba para aquellos que viven bajo la cúpula. ¿Podrán averiguar qué ha creado tan terrorífica prisión antes de que sea demasiado tarde? La crítica ha dicho... «Trepidante de punta a punta... una vez iniciada su lectura resulta muy difícil parar.» The New York Times «La cúpula es uno de mis libros preferidos.» Neil Gaiman', '9789875669093', 7, 'libro21.jpg', 0),
(3, 'Lo Mucho que te Amé', 'Eduardo Sacheri', 999, 2, 384, 'Español', 1, '2019-09-01', '«Creo que si alguien supiese la historia de mi vida la vería como una vida mal vivida; llena de secretos; traiciones; ocultamientos. Pero en esta historia en la que casi todo lo que hago lo hago mal; me permito creer que hay una cosa; una sola cosa; que hago bien.» Durante los años 50 y 60 del siglo XX; como muchas mujeres de su época; Ofelia rompe sin alardes ni espectáculos con los mandatos familiares y sociales: no será solamente ama de casa; no trabajará junto a su padre; no evadirá las complejidades del amor. En tiempos de agitación y cuestionamiento de los roles de género; Eduardo Sacheri ha escrito una hermosa novela cargada de preguntas sobre el enamoramiento; la exclusividad amorosa; el matrimonio; el dolor; el secreto; el destino y la libertad interior. Y nos brinda una heroína a la altura de todas las épocas en que crujen los cimientos de un orden moral y se asiste al nacimiento de otro nuevo. La crítica ha dicho... «Sacheri logra como pocos darles una proyección universal a las historias que cuenta. Historias de gente común donde lo cotidiano se vuelve épico.» Juan José Campanella «Sacheri ha revivido el relato futbolístico en tanto género literario importante con cautivadores cuentos que usan el deporte como prisma para mostrar las idiosincrasias de su nación.» Jonathan Gilbert; The New York Times Sobre La noche de la Usina... «Sacheri maneja con extraordinario pulso; y con felices destellos expresivos; la preparación y consecución del robo; perpetrado por gente trabajadora y tenaz que convierte su torpeza en una épica del ingenio de los pobres.» Francisco Solano; Babelia «... esa sabia mezcla entre comedia y drama que preside buena parte de una novela (...) repleta de diálogos ocurrentes; de un humor desencantado y corrosivo. Un humor que nos recuerda al mejor Cortázar de Historias de cronopios y de famas por sus equívocos; por la deliciosa ambigüedad y sus habituales juegos de palabras.» José Belmonte Serrano; Zenda', '9789877386417', 7, 'libro22.png', 0),
(4, 'La Vida Mentirosa de los Adultos', 'Elena Ferrante', 1299, 6, 368, 'Español', 1, '2020-08-01', '«Dos años antes de irse de casa; mi padre le dijo a mi madre que yo era muy fea». Así empieza esta novela extraordinaria sobre el descubrimiento de la mentira; el amor y el sexo; narrada por la inolvidable voz de Giovanna; una joven empeñada en conocer a su tía Vittoria; incomprensiblemente borrada de conversaciones y álbumes de fotografías. Con ello desencadenará sin saberlo el desmoronamiento de su familia intelectual y burguesa; perfecta solo en apariencia. Maestra absoluta de la intriga; Ferrante siembra la trama de sorpresas y anuda prodigiosamente la misteriosa historia familiar y amorosa en torno a una pulsera que pasa de mano en mano. Como afirma La Repubblica; «logra convertir una narración visceral para adultos; con el ADN de Elsa Morante; en un fenómeno editorial: una inconfundible pedagogía del alma». La crítica ha dicho... «La voz de Ferrante nos sacude; nos arrastra [...] y nos hace amar y odiar a cada uno de sus personajes. Giovanna no puede dejar de mirar. Nosotros tampoco: queremos; debemos saber a toda costa.» Antonella Lattanzi; La Stampa «Ferrante logra una hazaña imposible para quienes pasaron noches en vela cautivados por las vidas de Lila y Lenù: desde las primeras líneas de esta nueva novela; solo queda Giovanna.» Lucia Esposito; Libero «Los ferrantófilos hallarán de nuevo la marca de la autora: esa atracción del fuego bajo el hielo.» Le Parisien', '9788426408341', 7, 'libro23.png', 0),
(5, 'Argentina Primero', 'Martín Redrado', 3649, 11, 216, 'Español', 2, '2020-10-12', 'Hace décadas que la Argentina oscila de manera errática entre insertarse en el mundo ingenuamente, tomando deuda y generando recesión, y cerrarse a él neciamente, emitiendo moneda y acelerando la inflación. Uno y otro caso presentan políticas fiscales inconsistentes, crisis recurrentes y desaliento social como constantes. Son los dos polos de un mismo péndulo: el del fracaso nacional. ¿Es posible construir un nuevo camino, virtuoso e inclusivo? Martín Redrado asegura que sí, y aquí demuestra cómo. Porque no se trata solamente de evitar las crisis que minan la confianza interna y externa: se trata de estabilizar nuestra economía, reducir la inflación y la pobreza, y trazar un sendero de crecimiento sostenido. Tras la pandemia, la Argentina debe estar preparada para utilizar instrumentos económicos no convencionales en el corto plazo que empalmen con un plan orientado al consumo, la inversión y las exportaciones a través del tiempo. Este libro es ese plan.', '9789500764742', 6, 'libro1.png', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroporcompra`
--

CREATE TABLE `libroporcompra` (
  `id` int(11) NOT NULL,
  `idDelLibro` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeusuario`
--

CREATE TABLE `tipodeusuario` (
  `idTipoDeUsuario` int(11) NOT NULL,
  `tipoDeUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodeusuario`
--

INSERT INTO `tipodeusuario` (`idTipoDeUsuario`, `tipoDeUsuario`) VALUES
(1, 'Cliente'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(320) NOT NULL,
  `dni` int(8) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idLibro` (`idLibro`),
  ADD UNIQUE KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`idEditorial`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`),
  ADD KEY `fk_editorial` (`idEditorial`),
  ADD KEY `fk_categoria` (`idcategoria`);

--
-- Indices de la tabla `libroporcompra`
--
ALTER TABLE `libroporcompra`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idDelLibro` (`idDelLibro`),
  ADD UNIQUE KEY `idCompra` (`idCompra`),
  ADD KEY `libro_fk` (`idDelLibro`);

--
-- Indices de la tabla `tipodeusuario`
--
ALTER TABLE `tipodeusuario`
  ADD PRIMARY KEY (`idTipoDeUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`),
  ADD UNIQUE KEY `mail` (`email`),
  ADD KEY `usuario_fk` (`tipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `idEditorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `libroporcompra`
--
ALTER TABLE `libroporcompra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_libro` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`id`),
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`),
  ADD CONSTRAINT `fk_editorial` FOREIGN KEY (`idEditorial`) REFERENCES `editorial` (`idEditorial`);

--
-- Filtros para la tabla `libroporcompra`
--
ALTER TABLE `libroporcompra`
  ADD CONSTRAINT `compra_fk` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `libro_fk` FOREIGN KEY (`idDelLibro`) REFERENCES `libro` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_fk` FOREIGN KEY (`tipoUsuario`) REFERENCES `tipodeusuario` (`idTipoDeUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
