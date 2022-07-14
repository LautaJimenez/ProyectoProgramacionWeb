-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2022 a las 00:48:07
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
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idUsuario` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(10, 'Infantil y juvenil'),
(11, 'Terror');

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
  `fechaPublicacion` date NOT NULL,
  `sinopsis` mediumtext NOT NULL,
  `isbn` varchar(14) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `Oferta` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `nombre`, `autor`, `precio`, `idEditorial`, `paginas`, `idioma`, `fechaPublicacion`, `sinopsis`, `isbn`, `idcategoria`, `foto`, `Oferta`) VALUES
(1, 'La Traición', 'Jorge Diaz Fernández', 1290, 1, 265, 'Español', '2020-10-01', '\'Remil nunca llegó tan lejos. Esta vez se mueve en el peligroso filo de la actualidad política.\r\nTodos juegan frívolamente a la glorificación de los años 70; a la nueva ¿resistencia peronista¿ y a la revolución contra una dictadura imaginaria. Hasta que de pronto alguien se toma la ficción demasiado en serio y está a punto de desatar una tragedia sin retorno. En París; un amigo del Papa teme que este asunto le manche la sotana. Sabe que Francisco; afecto a meterse en las turbias aguas de la política argentina; bendice y alienta a personajes marginales que juegan con fuego. Por eso recurre a la Casita. Para que el ¿coronel¿ Cálgaris y Remil; su soldado más fiel; actúen en las sombras; esta vez al servicio secreto de Su Santidad. Con sus conjuras y persecuciones; La traición es una novela de espionaje político que pone en evidencia los vínculos secretos entre el falso progresismo; el populismo venal y la Iglesia. Una trama con mujeres inquietantes y vueltas de tuerca inesperadas por la que desfilan una clase política tomada por la corrupción; dirigentes de una izquierda con doble moral; obispos non sanctos; exguerrilleros alucinados que buscan revivir el pasado y operaciones de Inteligencia que devastan la reputación de los ¿enemigos¿. Jorge Fernández Díaz le da forma con su implacable pericia narrativa a un libro duro; sarcástico e inteligente. Una ficción políticamente incorrecta; demasiado cercana a lo real. Tanto que; en la lucidez extrema de su confección; se vuelve; por estos días; turbadora y a la vez indispensable.\'', '9789504971627', 7, 'libro20.png', 1),
(3, 'Lo Mucho que te Amé', 'Eduardo Sacheri', 999, 2, 384, 'Español', '2019-09-01', '«Creo que si alguien supiese la historia de mi vida la vería como una vida mal vivida; llena de secretos; traiciones; ocultamientos. Pero en esta historia en la que casi todo lo que hago lo hago mal; me permito creer que hay una cosa; una sola cosa; que hago bien.» Durante los años 50 y 60 del siglo XX; como muchas mujeres de su época; Ofelia rompe sin alardes ni espectáculos con los mandatos familiares y sociales: no será solamente ama de casa; no trabajará junto a su padre; no evadirá las complejidades del amor. En tiempos de agitación y cuestionamiento de los roles de género; Eduardo Sacheri ha escrito una hermosa novela cargada de preguntas sobre el enamoramiento; la exclusividad amorosa; el matrimonio; el dolor; el secreto; el destino y la libertad interior. Y nos brinda una heroína a la altura de todas las épocas en que crujen los cimientos de un orden moral y se asiste al nacimiento de otro nuevo. La crítica ha dicho... «Sacheri logra como pocos darles una proyección universal a las historias que cuenta. Historias de gente común donde lo cotidiano se vuelve épico.» Juan José Campanella «Sacheri ha revivido el relato futbolístico en tanto género literario importante con cautivadores cuentos que usan el deporte como prisma para mostrar las idiosincrasias de su nación.» Jonathan Gilbert; The New York Times Sobre La noche de la Usina... «Sacheri maneja con extraordinario pulso; y con felices destellos expresivos; la preparación y consecución del robo; perpetrado por gente trabajadora y tenaz que convierte su torpeza en una épica del ingenio de los pobres.» Francisco Solano; Babelia «... esa sabia mezcla entre comedia y drama que preside buena parte de una novela (...) repleta de diálogos ocurrentes; de un humor desencantado y corrosivo. Un humor que nos recuerda al mejor Cortázar de Historias de cronopios y de famas por sus equívocos; por la deliciosa ambigüedad y sus habituales juegos de palabras.» José Belmonte Serrano; Zenda', '9789877386417', 7, 'libro22.png', 1),
(4, 'La Vida Mentirosa de los Adultos', 'Elena Ferrante', 1299, 6, 368, 'Español', '2020-08-01', '«Dos años antes de irse de casa; mi padre le dijo a mi madre que yo era muy fea». Así empieza esta novela extraordinaria sobre el descubrimiento de la mentira; el amor y el sexo; narrada por la inolvidable voz de Giovanna; una joven empeñada en conocer a su tía Vittoria; incomprensiblemente borrada de conversaciones y álbumes de fotografías. Con ello desencadenará sin saberlo el desmoronamiento de su familia intelectual y burguesa; perfecta solo en apariencia. Maestra absoluta de la intriga; Ferrante siembra la trama de sorpresas y anuda prodigiosamente la misteriosa historia familiar y amorosa en torno a una pulsera que pasa de mano en mano. Como afirma La Repubblica; «logra convertir una narración visceral para adultos; con el ADN de Elsa Morante; en un fenómeno editorial: una inconfundible pedagogía del alma». La crítica ha dicho... «La voz de Ferrante nos sacude; nos arrastra [...] y nos hace amar y odiar a cada uno de sus personajes. Giovanna no puede dejar de mirar. Nosotros tampoco: queremos; debemos saber a toda costa.» Antonella Lattanzi; La Stampa «Ferrante logra una hazaña imposible para quienes pasaron noches en vela cautivados por las vidas de Lila y Lenù: desde las primeras líneas de esta nueva novela; solo queda Giovanna.» Lucia Esposito; Libero «Los ferrantófilos hallarán de nuevo la marca de la autora: esa atracción del fuego bajo el hielo.» Le Parisien', '9788426408341', 7, 'libro23.png', 0),
(5, 'Argentina Primero', 'Martín Redrado', 3649, 11, 216, 'Español', '2020-10-12', 'Hace décadas que la Argentina oscila de manera errática entre insertarse en el mundo ingenuamente, tomando deuda y generando recesión, y cerrarse a él neciamente, emitiendo moneda y acelerando la inflación. Uno y otro caso presentan políticas fiscales inconsistentes, crisis recurrentes y desaliento social como constantes. Son los dos polos de un mismo péndulo: el del fracaso nacional. ¿Es posible construir un nuevo camino, virtuoso e inclusivo? Martín Redrado asegura que sí, y aquí demuestra cómo. Porque no se trata solamente de evitar las crisis que minan la confianza interna y externa: se trata de estabilizar nuestra economía, reducir la inflación y la pobreza, y trazar un sendero de crecimiento sostenido. Tras la pandemia, la Argentina debe estar preparada para utilizar instrumentos económicos no convencionales en el corto plazo que empalmen con un plan orientado al consumo, la inversión y las exportaciones a través del tiempo. Este libro es ese plan.', '9789500764742', 6, 'libro1.png', 0),
(6, 'Despierta', 'Lorena Pronsky', 3549, 16, 336, 'Español', '2020-07-15', 'La mayoría de las decisiones que tomamos en nuestra vida las hacemos estando dormidos. Casi arrastrados por un estado de inercia. Cuando reaccionamos, el paso ya está dado y el resto del tiempo nos quedamos ahí -atrapados- intentando hacer algo con eso que ni advertimos haber decidido. Hay cosas que no se deshacen. Querer intentarlo es verle la cara a la frustración. Por el contrario, se hace necesario un viaje a nuestro mundo interior. Si registramos lo que hacemos y sentimos, ganamos libertad y la posibilidad urgente de conocer nuestros deseos más profundos. ¿Quién soy? ¿Qué quiero? ¿Cómo lo quiero? Ser conscientes de lo que sentimos: decirlo, palparlo y nombrarlo son formas en las que logramos adueñarnos de nuestra vida. Cuanto antes despertemos a nuestro mundo interior, más sabias y honestas serán nuestras decisiones. Despierta es el paso hacia una existencia verdadera. Una invitación a conocernos y animarnos a pisar firme y fuerte. Siempre hacia donde nos guíen nuestros latidos. Sí. Los nuestros. Lorena Pronsky', '9789501516227', 8, 'libro2.png', 0),
(7, 'Los Guardianes', 'Josh Grishman', 3999, 7, 400, 'Español', '2020-04-22', 'En la pequeña ciudad de Seabrook, Florida, un prometedor abogado llamado Keith Russo fue asesinado a tiros una noche mientras trabajaba hasta tarde en su despacho. El culpable no dejó pistas. No hubo testigos, nadie tenía un motivo. Pero la policía pronto sospechó de Quincy Miller, un joven negro que había sido cliente de Russo. Miller fue juzgado y condenado a cadena perpetua. Durante veintidós años languideció en prisión, manteniendo su inocencia sin que nadie lo escuchara. Desesperado, escribe una carta al Ministerio de los Guardianes, una pequeña organización sin ánimo de lucro liderada por el abogado y sacerdote episcopaliano Cullen Post. Post viaja por el país luchando contra sentencias injustas y defendiendo a clientes olvidados por el sistema. Sin embargo, en el caso de Quincy Miller encuentra obstáculos inesperados. Los asesinos de Keith Russo son personas poderosas y despiadadas, y no quieren que Miller sea exonerado. Mataron a un abogado hace veintidós años, y matarían a otro sin pensarlo dos veces. La crítica ha dicho... «Grisham en su mejor, y más apasionada, forma.» Daily Mail «El mejor autor vivo de thriller.» Ken Follett «Estupendo. Conmovedor. Grisham lo ha vuelto a lograr. La longevidad creativa no es inusual en el género de suspense, pero lo que resulta único es la hazaña de mantener el ritmo de una novela al año sin que disminuya el ingenio o la calidad literaria.» The Washington Post «Escrito con su característico estilo sencillo y fluido. Grisham es el gran maestro del arte de crear personajes con destreza y de aumentar con habilidad la tensión en un crescendo sobrecogedor.» Irish Independent «Grisham ha escrito de nuevo un thriller lleno de suspense que se mezcla con temas de peso como las detenciones injustas, la pena de muerte y los prejuicios del sistema legal. Los personajes de esta novela son de primera clase.» Associated Press «Rápido y atrapante.» Daily Mirror', '9789506445423', 7, 'libro3.png', 0),
(8, 'Largo Pétalo de mar', 'Isabel Allende', 3649, 13, 384, 'Español', '2020-04-28', 'En plena Guerra Civil española, el joven médico Víctor Dalmau, junto a su amiga pianista Roser Bruguera, se ven obligados a abandonar Barcelona, exiliarse y cruzar los Pirineos rumbo a Francia. A bordo del Winnipeg, un navío fletado por el poeta Pablo Neruda que llevó a más de dos mil españoles rumbo a Valparaíso, embarcarán en busca de la paz y la libertad que no tuvieron en su país. Recibidos como héroes en Chile -ese «largo pétalo de mar y nieve», en palabras del poeta chileno-, se integrarán en la vida social del país durante varias décadas hasta el golpe de Estado que derrocó al doctor Salvador Allende, amigo de Victor por su común afición al ajedrez. Víctor y Roser se encontrarán nuevamente desarraigados, pero como dice la autora: «si uno vive lo suficiente, todos los círculos se cierran».\r\n\r\nUn viaje a través de la historia del siglo XX de la mano de unos personajes inolvidables que descubrirán que en una sola vida caben muchas vidas y que, a veces, lo difícil no es huir sino volver.', '9789500762823', 7, 'libro4.png', 1),
(10, 'El duelo', 'Gabriel Rolón', 3540, 1, 456, 'Español', '2016-07-12', '“El Duelo es un territorio oscuro, misterioso, casi inaccesible. Una conmoción que nos sorprende, nos toma desprevenidos y cambia nuestro entorno en un instante. No importa lo preparados que creamos estar para enfrentar una pérdida, esa preparación jamás será suficiente. Cuando ocurre, todo se desmorona y por un tiempo nada tiene sentido. Algo se quiebra en nosotros, el mundo se derrumba y nos muestra su aspecto más cruel.”', '9789504970934', 8, 'libro5.png', 0),
(11, 'Los cuatro acuerdos', 'Miguel Ruiz', 2790, 3, 156, 'Español', '2018-12-18', 'El conocimiento tolteca surge de la misma unidad esencial de la verdad de la que parten todas las tradiciones esotéricas sagradas del mundo.Aunque no es una religión,respeta a todos los maestros espirituales que han enseñado en la tierra,y si bien abraza el espíritu, resulta más preciso describirlo como una manera de vivir que se distingue por su fácil acceso a la felicidad y el amor.El doctor Miguel Ruiz nos propone en este libro un sencillo procedimiento para eliminar todas aquellas creencias heredadas que nos limitan y substituirlas por otras que responden a nuestra realidad interior y nos conducen a la libertad.', '9789507880223', 8, 'libro7.png', 0),
(12, 'El Caso Alaska Sanders', 'Joel Dicker ', 4999, 2, 592, 'Español', '2022-06-01', '«Sé lo que has hecho». Este mensaje, encontrado en el bolsillo del pantalón de Alaska Sanders, cuyo cadáver apareció el 3 de abril de 1999 al borde del lago de Mount Pleasant, una pequeña localidad de New Hampshire, es la clave de la nueva y apasionante investigación que, once años después de poner entre rejas a sus presuntos culpables, vuelve a reunir al escritor Marcus Goldman y al sargento Perry Gahalowood. En esta ocasión contarán con la inestimable ayuda de una joven agente de policía, Lauren Donovan, empeñada en resolver la trama de secretos que se esconde tras el caso. A medida que vayan descubriendo quién era realmente Alaska Sanders, irán resurgiendo también los fantasmas del pasado y, entre ellos, especialmente el de Harry Quebert. La crítica dijo... «Una voz napoleónica que no escribe, boxea». Laura Fernández, El Cultural «Imposible parar de leer. [...] Caemos rendidos ante una aventura emocionante e impredecible». Le Parisien «Un tsunami de giros y pistas, un Himalaya de suspenso, un Everest de emociones». RTL «Exuberante, astuta y virtuosa». Pierre Vavasseur, Le Parisien «Una novela maravillosa que vuelve a sumergirnos en el universo de Harry Quebert. Una narración minuciosa y una atmósfera única». La Fringale Culturelle «Suspenso en cada línea: se lee de una sentada». Gilles Medioni, Marie France «Dicker domina a la perfección el arte del suspenso. [...] Con un estilo sencillo, eficaz y una narración impecable, te mantiene hechizado. ¡Se avecina un nuevo éxito!». A. M., Version Femina', '9789877389326', 1, 'libro1.jpg', 0),
(13, 'El Libro de los Baltimore', 'Joel Dicker', 3599, 20, 480, 'Español', '2021-09-01', '«Si encontráis este libro; por favor; leedlo. Querría que alguien supiera la historia de los Goldman de Baltimore.» Hasta que tuvo lugar el drama existían dos ramas de la familia Goldman: los Goldman de Baltimore y los Goldman de Montclair. Los Montclair; de los que forma parte Marcus Goldman; autor de La verdad sobre el caso Harry Quebert; es una familia de clase media que vive en una pequeña casa en el estado de Nueva Jersey. Los Baltimore; prósperos y a los que la suerte siempre ha sonreído; habitan una lujosa mansión en un barrio de la alta sociedad de Baltimore. Ocho años después del drama; Marcus Goldman pone el pasado bajo la lupa en busca de la verdad sobre el ocaso de la familia. Entre los recuerdos de su juventud revive la fascinación que sintió desde niño por los Baltimore; que encarnaban la América patricia con sus vacaciones en Miami y en los Hamptons y sus colegios elitistas. Con el paso de los años la brillante pátina de los Baltimore se desvanece al tiempo que el Drama se va perfilando. Hasta el día en el que todo cambia para siempre. La opinión de la crítica: «Les sorprenderá. Deberíamos leer El libro de los Baltimore como quien contempla un óleo de Edward Hopper y su trazo elegante.» Ramón Ventura; El Periódico de Catalunya «En apenas unas semanas El Libro de los Baltimore ha alcanzado los primeros puestos en las listas de más vendidos y nosotros sabemos por qué. Buscamos cada minuto libre en nuestro día a día -en el metro; en el autobús; en una cola- para sumergirnos en su lectura.» Toutelaculture.com «Con La verdad sobre el caso Harry Quebert obtuvo dos de los principales galardones galos; el Grand Prix du Roman de l\'Académie Française y el Goncourt des Lycéens; y se convirtió en uno de los principales fenómenos de ventas europeos de la década. Ahora; con El Libro de los Baltimore; ha logrado recuperar todos y cada uno de los ingredientes de la obra anterior (comenzando por su narrador; el escritor Marcus Goldman).» Milo J. Krmpotic; Librújula', '9789877254617', 1, 'foto13.jpg', 0),
(14, 'Gaturro 37', 'Nik', 1195, 2, 96, 'Español', '2022-06-01', 'Nuevas aventuras de Gaturro y sus amigos!', '9789505158867', 2, 'foto14.jpg', 0),
(15, 'La Vaca se Empaca', 'Agustina Lynch', 2100, 9, 38, 'Español', '2020-11-04', '', '9789878661735', 2, 'foto15.jpg', 0),
(16, 'Una (Muy) Breve Historia de la Vida en la Tierra', 'Henry Gee', 1990, 2, 256, 'Español', '2022-06-06', 'El autor consigue explicar en forma entretenida y entendible el complicado proceso de transformación de nuestro planeta desde una bola de gases perdidos en el Universo hasta nuestros días. Un libro ideal para que todo el mundo pueda conocer y entender cómo se ha formado el mundo y cómo se ha desarrollado la vida. Según Jared Diamond; es el mejor libro disponible sobre la evolución de la vida en la Tierra. El Dr. Henry Gee nació en 1962. Se formó en las universidades de Leeds y Cambridge. Durante más de tres décadas ha sido redactor y editor de la revista científica internacional Nature. Ha escrito varios libros de divulgación científica aclamados por crítica y público.', '9789874616593', 9, 'foto16.jpg', 0),
(17, 'Ser Humanos ', 'Facundo Manes', 3660, 1, 560, 'Español', '2021-06-01', 'Estamos frente a una revolución como nunca antes había sucedido; un cambio profundo que no solo transforma lo que hacemos sino también lo que somos. Hoy resulta esencial reconocer qué es aquello que nos hace humanos; cuáles son los lazos que nos sostienen como especie y nos alejan de nuestras zonas oscuras; individualistas; menos gregarias. En este contexto; el nuevo libro de Facundo Manes y Mateo Niro se vuelve tan vital como indispensable. Porque la capacidad de pensar de manera crítica; de observar y reflexionar; de poder tomar decisiones que tengan en cuenta sus consecuencias a corto y a largo plazo serán habilidades imprescindibles; tanto como la posibilidad de adaptar nuestra conducta a escenarios cambiantes en un mundo que tal vez no vuelva a ser el mismo. Empatía; inteligencia colectiva; resiliencia; cooperación; solidaridad; propósito; bienestar; emoción; creatividad; autorregulación; inteligencia emocional; compasión. Herramientas sociales y emocionales que Ser humanos pone a nuestro alcance de manera lúcida; clara; precisa. Un cuaderno de bitácora necesario para entender el camino hasta acá y un mapa para encarar el gran desafío colectivo del siglo XXI: comprendernos; fortalecernos y ser; cada día; más y mejores humanos.', '9789504973034', 9, 'foto17.jpg', 0),
(18, 'El Poder del Ahora ', 'Eckhart Tolle', 3549, 17, 256, 'Español', '2012-10-01', 'El poder del ahora es un libro único. Tiene la capacidad de crear una experiencia en los lectores y de cambiar su vida. Hoy ya es considerado una obra maestra. Su autor; Eckhart Tolle; se convirtió en un maestro universal; un gran espíritu con un mensaje revelador: se puede alcanzar un estado de iluminación aquí y ahora. Es posible vivir libre del sufrimiento; la ansiedad y la neurosis. Para lograrlo sólo tenemos que comprender nuestro papel de creadores del propio dolor. Es la mente la que nos causa los problemas con su corriente de pensamientos constante sobre el pasado; preocupándose por el futuro. Cometemos el error de identificarnos con ella; de pensar que eso es lo que somos; cuando de hecho somos seres mucho más grandes. Escrito en un formato de preguntas y respuestas que lo hace muy accesible; este libro es una invitación a la reflexión; que abrirá las puertas a la plenitud espiritual y permitirá ver la vida con nuevos ojos y empezar a disfrutar del verdadero poder del ahora.', '9789502805924', 4, 'foto18.jpg', 0),
(48, 'Cuentos de terror', 'Laiseca Alberto', 2890, 12, 240, 'Español', '2003-02-05', 'Cuentos de terror, antes de convertirse en este libro, fue un espacio único en la televisión en el cual Alberto Laiseca rescató la tradición del relato oral. Transmitido por la señal I-Sat, se volvió un ciclo de culto en el que el escritor narraba relatos de terror del siglo XIX. Este volumen reúne aquellos cuentos seleccionados por Laiseca y nos permite volver a oír su particular cadencia al relatar.', '9789873874642', 11, 'libro25.png', 0),
(49, 'Los compas vs. Hackers', 'Martinez Roca', 3390, 12, 224, 'Español', '2022-05-12', 'Los Compas disfrutan de un vuelo tranquilo a Tropicubo cuando de repente una tormenta los obliga a hacer un aterrizaje forzoso. Se han salvado de milagro! Pero algo raro sucede... Estan en la misteriosa base secreta de unos malvados hackers... El Area Puerro 51. Si quieren salvar a sus amigos, los Compas tendran que desenmascararlos y averiguar cual es su terrorífico plan antes de que sea demasiado tarde. Los Compas viven una aventura llena de clones, verduras e informáticos locos.', '9789508702005', 10, 'libro26.png', 0),
(50, 'Brasil del sur', 'Pablo Plotkin', 1399, 5, 360, 'Español', '2022-04-01', 'Años después de un colapso que reordenó la geopolítica global, Buenos Aires vive un tiempo de prosperidad aparente como capital administrativa de Brasil del Sur.\r\nBajo el gobierno de la Refundación y su Programa Tecnológico Libertario, la ciudad funciona como laboratorio de experimentos vedados en otras partes del mundo: “homogramas” que replican a los muertos, aplicaciones que calibran los pensamientos negativos, familias prehistóricas de diseño confinadas para exhibición… Los habitantes de la nueva realidad luchan por mantenerse a flote. Entre ellos está Elena, una sobreviviente de la catástrofe que lleva las riendas del Parque Lamarck, un zoológico de autómatas donde se exploran los límites éticos de la inteligencia artificial. Está también Wong, hijo de un patriarca de los viejos supermercados chinos, que trata de recuperar su paraíso perdido al mando de la casa matriz de Felicidad Absoluta, en cuyo sótano esconde a una criatura a punto de mutar. Por su parte Fausto, operario obediente de la Refundación, es enviado a una misión comercial transoceánica que se convertirá en pesadilla. Mientras la paz social tambalea, los solitarios ciudadanos de la metrópolis buscan como pueden su parte de felicidad.\r\nCon guiños a los videojuegos y pinceladas de poesía, Brasil del Sur explora en clave fantástica tendencias embrionarias en la realidad presente. Pablo Plotkin escribió una novela sorprendente y entretenida, que es tanto una melancólica distopía futurista como una novela clásica de aventuras.', '9789500441070', 1, 'libro27.jpg', 0),
(51, 'Las dos esfinges', 'L. Sancho', 1799, 14, 254, 'Español', '2021-05-12', '...Todo humano ha de caminar entre las esfinges. Ellas lo someterán a tres pruebas. La primera, el encuentro: ha de suceder un hecho irremediable que cambiará la existencia; la segunda, el despertar: han de aceptarse las consecuencias de ese suceso crucial en la vida, y la tercera y más importante, el renacer: se ha de dejar paso a la paz y a la felicidad en cada uno. Esta es, sin duda, la más difícil...\"', '9788408241584', 1, 'libro28.jpg', 0),
(52, 'Guía del Autoestopista Galáctico', 'Douglas Adams', 2499, 4, 296, 'Español', '2022-05-04', 'Un jueves a la hora de comer, la Tierra es inesperadamente demolida para poder construir una nueva autopista hiperespacial. Arthur Dent, un tipo de lo más corriente que esa misma mañana ha visto cómo echaban abajo su propia casa, considera que eso supera lo que una persona puede soportar. Pero, desgraciadamente, el fin de semana no ha hecho más que empezar, y la galaxia es un lugar extraño y sorprendente. Arthur huirá de la Tierra junto con un amigo suyo, Ford Prefect, que resultará ser un extraterrestre emparentado con Zaphod Beeblebrox, un pirata esquizoide de dos cabezas que fue Presidente de la Galaxia, en cuya nave Arthur conocerá al resto de personajes que lo acompañarán a lo largo de su periplo espacial: un androide paranoide y una terrícola que, como él, ha logrado escapar. Gracias a esta ineludible aventura, Dent descubrirá muchas cosas acerca de la existencia, pero, tal como aconseja la Guía del autoestopista galáctico, que no cunda el pánico.', '9788433973108', 2, 'libro29.jpg', 0),
(54, 'Hábitos Atómicos', 'James Clear', 2100, 1, 336, 'Español', '2020-09-08', 'Un diario basado en la ciencia del cambio de hábitos, diseñado por el autor del gran bestseller de Diana, Hábitos atómicos, James Clear.\r\nTras vender más de 30.000 ejemplares de su libro en España, por fin llega Diario de Hábitos, un método científico basado en las investigaciones del autor, especialista en cambio de hábitos, para lograr planificar, medir y motivar tu cambio. Ya sea que te hayas propuesto ser más productivo, hacer más deporte, dejar de fumar o comer más sano, este diario será tu mejor herramienta para lograr que tengas éxito en tu viaje y que esos cambios minúsculos sean tan poderosos como un tsunami.', '9788418118036', 4, 'libro31.jpg', 0),
(55, 'El poder de los Hábitos', 'Charles Duhigg', 2250, 16, 416, 'Español', '2019-03-28', 'En El poder de los hábitos, el premiado periodista Charles Duhigg nos lleva al límite de los descubrimientos científicos que explican por que existen los hábitos, cómo nos condicionan y cómo cambiarlos. Combinando información exhaustiva con descripciones fascinantes, Duhigg presenta una manera completamente nueva de entender la naturaleza humana y su potencial.\r\n\r\nEn esencia, El poder de los hábitos contiene un mensaje estimulante: la clave para hacer ejercicio con regularidad, perder peso, ser más productivo y conseguir el exito consiste en entender el modo en que funcionan los hábitos. Como demuestra Duhigg, si somos capaces de sacar partido a este nuevo metodo, conseguiremos transformar nuestra vida laboral, social y personal.', '9788417664138', 4, 'libro32.jpg', 0),
(56, 'El prinicipito', 'De Saint Exupery Antoine', 990, 12, 112, 'Español', '2016-02-23', 'Su comentario será moderado antes de su publicación. Este espacio le permite compartir su opinión sobre el libro con otros lectores, evite comentarios que no sean pertinentes ni alusivos al libro. Por favor sea amable, respetuoso y cuide su lenguaje.\r\n\r\n', '9789876848039', 10, 'libro24.png', 0);

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
  `contraseña` varchar(255) NOT NULL,
  `tipoUsuario` int(11) NOT NULL,
  `idCarritoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `dni`, `contraseña`, `tipoUsuario`, `idCarritoUsuario`) VALUES
(5, 'Lautaro', 'Jimenez', 'lauta.jimenez@gmail.com', 42658906, '$2y$10$ULg9yz.KlboBxOeoPgf56.lyzqi72.ZAhZFUzbPGeTwNBCh9IWSUO', 1, 0),
(6, 'Agustin', 'Dimperio', 'adimperio@admin.com', 12312837, '$2y$10$Czt/iW067jGW718ilTBp7OFX2GJ1NG9JANfKsaCJTFl7QfJYnerUy', 2, 0),
(7, 'Belen', 'Barrionuevo', 'bbarrionuevo@admin.com', 126351623, '$2y$10$pVEtp6bNpDR24tEM0vxjDucxHCb/lWqU3twRNOBYty2PnHDNPpAae', 2, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idLibro` (`idLibro`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idcategoria`);

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
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `idEditorial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`idLibro`) REFERENCES `libro` (`id`);

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`),
  ADD CONSTRAINT `fk_editorial` FOREIGN KEY (`idEditorial`) REFERENCES `editorial` (`idEditorial`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_fk` FOREIGN KEY (`tipoUsuario`) REFERENCES `tipodeusuario` (`idTipoDeUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
