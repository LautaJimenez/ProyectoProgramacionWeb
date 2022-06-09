<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Preguntas frecuentes</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="ayuda.css">
	<link rel="shortcut icon" href="../img/libros.png">
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/easytimer@1.1.1/src/easytimer.min.js"></script>
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
				<a type="submit" class="boton" href="../PaginaBusqueda/busqueda.php"><img src="../img/lupa.png" alt=""></a>

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

	<main>

		<h2 class="titulo">¿Con que podemos ayudarte?</h2>
		<br>

		<section class="preguntas-frecuentes">
			<div class="accordion">
				<section class="accordion-item">

					<img src="../img/tarjeta.png" style="display: inline" />
					<h1 style="display: inline">Métodos de pago</h1>
					<div class="accordion-item-content">
						<br>
						<p>• Pagar con tarjeta de crédito o débito.</p>
						<p>• Pagar en efectivo en puntos de pago</p>
						<p>• Pagar con dinero disponible en tu cuenta de Mercado Pago</p>
					</div>
				</section>
				<section class="accordion-item">
					<img src="../img/truck-solid-24.png" style="display: inline" />
					<h1 style="display: inline">Envios</h1>
					<div class="accordion-item-content">
						<br>
						<p>Las entregas de los E-Books son via mail en el plazo de 24hs.</p>
					</div>
				</section>
				<section class="accordion-item accordion-item--default">
					<img src="../img/book-regular-24.png" style="display: inline" />
					<h1 style="display: inline">Soporte de E-books</h1>

					<div class="accordion-item-content">
						<br>
						<p>Para cualquier duda o inquietud, puedes contactarte con nosotros via mail o whatsapp.</p>

					</div>
				</section>
				<section class="accordion-item">
					<img src="../img/book-regular-24.png" style="display: inline" />
					<h1 style="display: inline">¿Cómo comprar?</h1>
					<div class="accordion-item-content">
						<br>
						<p>Para realizar compras es necesario que cuentes con un usuario ya registrado e ingreses a
							nuestro sitio con él.</p>
					</div>
				</section>
			</div>


		</section>
	</main>


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

</body>

</html>