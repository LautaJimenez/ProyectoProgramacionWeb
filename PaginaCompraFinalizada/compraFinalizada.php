<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra finalizada</title>
    <link rel="shortcut icon" href="../img/libros.png">
    <link rel="stylesheet" href="compraFinalizada.css">

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
				<a href="/ProyectoWeb/PaginaCarrito/carrito.php"><img src="../img/carrito.png" alt=""></a>
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
    
    <div class = "anuncio">
        <h1>¡Tu compra ha sido finalizada!</h1>
        <p>Tu e-Book llegará a tu casilla de e-mail dentro de las próximas 24hs.</p>
        <p>Cualquier duda o consulta, podes comunicarte a través de e-mail al correo</p>
        <a href="mailto: web@mail.com">web@mail.com</a>
        <p>O a través de nuestro Whats-App</p>
        <p class = "numero">+51 11-1111-1111</p>
        <h2>¡Muchas gracias por confiar en E&B!</h2>


    </div>



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