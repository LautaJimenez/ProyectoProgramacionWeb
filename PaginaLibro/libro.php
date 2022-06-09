<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>tienda de ebooks</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="../PaginaHome/estilos.css">
	<link rel="shortcut icon" href="../img/libros.png">
	<script language="javascript" type="text/javascript" src="../PaginaHome/funciones.js"></script>

</head>

<body>

	<header>
		<section class="menu-header" id="inicio">

			<div class="brand-logo">
				<a href="../PaginaHome/home.php"><img src="../img/libros.png" alt=""></a>
			</div>

			<div class="buscador">
				<input type="search" id="buscador" placeholder="Buscar... " />
				<a type="submit" class="boton" href="../PaginaBusqueda/busqueda.php"><img src="../img/lupa.png"
						alt=""></a>

			</div>

			<div class="carrito">
				<a href="../PaginaCarrito/carrito.php"><img src="../img/carrito.png" alt=""></a>
			</div>


			<ul class="navegacion">
				<li><a href="#Categorias">Categorias</a><span>🡣</span>
					<ul class="menu-categorias">
						<li><a href="../PaginaCategorias/drama.php">Drama</a></li>
						<li><a href="../PaginaCategorias/comedia.php">Comedia</a></li>
						<li><a href="../PaginaCategorias/autoayuda.php">Autoayuda</a></li>
						<li><a href="../PaginaCategorias/economia.php">Economia</a></li>
						<li><a href="../PaginaCategorias/politica.php">Politica</a></li>
						<li><a href="../PaginaCategorias/ficcion.php">Ficcion y literatura</a></li>
						<li><a href="../PaginaCategorias/psicologia.php">Psicología</a></li>
						<li><a href="../PaginaCategorias/ciencia.php">Ciencia</a></li>
						<li><a href="../PaginaCategorias/infantil.php">Infantil y juvenil</a></li>

					</ul>
				</li>

				<li><a href="../PaginaAyuda/ayuda.php">Ayuda</a></li>
				<li><a href="#Contacto">Contacto</a></li>
				<li><a href="../PaginaIngreso/ingreso.php">Ingresar</a></li>

			</ul>


		</section>

	</header>
	<br>
	<br>
	<div class="topleft">
		<p>Home/Ficción</p>

	</div>

	<!--detalles del producto-->
	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="../img/libro5.png" width="100%">

			</div>
			<div class="col-2">
				<br>
				<br>
				<br>
				<h1> El Duelo</h1>
				<h4>Autor: Rolón, Gabriel</h4>
				<h3>Editorial: Planeta</h3>
				<h4>ARS$650.00</h4>
				<h6>
					Cantidad: <input type="number" value="0">

				</h6>
				<h4>ARS$650.00
				</h4>
				<a href="" class="btn">Comprar </a>
				<br>
				<p>La pérdida de un trabajo, una pareja, un hogar, el reconocimiento de un otro y hasta la juventud nos
					empujan al duelo. Y es ahí, en ese soplo en el que el dolor se hace carne y la pena se devora las
					palabras, que Gabriel Rolón comparte su reflexión aguda, certera, siempre lúcida. (...)</p>
				<br>
				<br>
				<h3>Más Información</h3>
				<br>

				<h5>I.S.B.N: 9789504970934</h5>
				<h5>Nro. de Paginas: 456</h5>
				<h5>Idioma: ESPAÑOL</h5>
				<h5>Fecha Publicación: 10/2020</h5>

			</div>

		</div>
	</div>
	<br>
	<br>
	<div class="deals">

		<h1>Ofertas</h1>

		<div class="contenedor-libros">


			<div class="container">
				<img src="../img/libro3.png" alt="Avatar" class="image">
				<div class="overlay">
					<h3>Los Guardianes</h1>
						<h4>Autor: Josh Grisham</h1>
							<h4>$650</h1>
								<br>
								<a href="../PaginaLibro/libro.php" class="botonn">Comprar </a>
				</div>
			</div>



			<div class="container">

				<img src="../img/libro3.png" alt="Avatar" class="image">
				<div class="overlay">
					<h3>Los Guardianes</h1>
						<h4>Autor: Josh Grisham</h1>
							<h4>$650</h1>
								<br>
								<a href="../PaginaLibro/libro.php" class="botonn">Comprar </a>
				</div>
			</div>

			<div class="container">
				<img src="../img/libro3.png" alt="Avatar" class="image">
				<div class="overlay">
					<h3>Los Guardianes</h1>
						<h4>Autor: Josh Grisham</h1>
							<h4>$650</h1>
								<br>
								<a href="../PaginaLibro/libro.php" class="botonn">Comprar </a>
				</div>
			</div>

		</div>
	</div>
	<br>
	<br>

	<footer>
		<div class="brand">
			<div class="brand-logo">
				<a href="../PaginaHome/home.php"><img src="../img/libros.png" alt=""></a></div>

		</div>

		<div class="footer-menu" id="Contacto">

			<div class="menu-card">
				<h4>Email</h4>
				<a href="mailto:web@mail.com">web@mail.com</a>
			</div>
			<div class="menu-card">
				<h4>Telefono</h4>
				<a href="">+51 11-1111-1111</a>
			</div>
			<div class="menu-card">
				<h4>Locacion</h4>
				<a href="https://goo.gl/maps/o8E7SbdoYxqCvhM47">Buenos Aires</a>
			</div>

		</div>
	</footer>

	<!-- JavaScript -->

</body>

</html>