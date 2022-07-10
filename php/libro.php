<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>tienda de ebooks</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="../css/styles.css">
	<link rel="shortcut icon" href="../img/libros.png">
	<script language="javascript" type="text/javascript" src="/ProyectoWeb/js/funciones.js"></script>

</head>

<body>

<?php include("header.php")?>
	


<?php
	
	include("conexion.php");
	$conn = connectDB();

	if (isset($_GET['id'])){
		$IDLibro = $_GET['id'];
		$sql = "SELECT * FROM libro WHERE id='".$IDLibro."'";
		$result = mysqli_query($conn, $sql);
	}

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$IDLibro = $row['id'];
			$EditorialLibro = $row['idEditorial'];
			$NombreLibro = $row['nombre'];
			$AutorLibro = $row['autor'];
			$PrecioLibro = $row['precio'];
			$FotoLibro = $row['foto'];    
			$SinopsisLibro = $row['sinopsis'];
			$ISBNLibro = $row['isbn'];
			$PaginasLibro = $row['paginas'];
			$IdiomaLibro = $row['idioma'];
			$FechaPublicacionLibro = $row['fechaPublicacion'];
			$Categoria = $row['idcategoria'];
		}
	}

	print <<< END

		<br>
			<br>
			<div class="topleft">
				<p>Home/$Categoria</p>

			</div>

			<!--detalles del producto-->
			<div class="small-container single-product">
				<div class="row">
					<div class="col-2">
						<img src="../img/$FotoLibro" width="100%">

					</div>
					<div class="col-2">
						<br>
						<h1>$NombreLibro</h1>
						<h4>Autor: $AutorLibro</h4>
						<h3>Editorial: $EditorialLibro</h3>
						<h4>AR$ $PrecioLibro</h4>
						<h6>
							Cantidad: <input type="number" value="0">

						</h6>
						<h4>AR$ $PrecioLibro 
						</h4>
						<a href="/ProyectoWeb/php/carrito.php" class="btn">Comprar</a>
						<br>
						<p>$SinopsisLibro</p>
						<br>
						<br>
						<h3>Más Información</h3>
						<br>

						<h5>I.S.B.N: $ISBNLibro</h5>
						<h5>Nro. de Paginas: $PaginasLibro</h5>
						<h5>Idioma: $IdiomaLibro</h5>
						<h5>Fecha Publicación: $FechaPublicacionLibro</h5>

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
										<a href="/ProyectoWeb/php/libro.php" class="botonn">Comprar </a>
						</div>
					</div>



					<div class="container">

						<img src="../img/libro3.png" alt="Avatar" class="image">
						<div class="overlay">
							<h3>Los Guardianes</h1>
								<h4>Autor: Josh Grisham</h1>
									<h4>$650</h1>
										<br>
										<a href="/ProyectoWeb/php/libro.php" class="botonn">Comprar </a>
						</div>
					</div>

					<div class="container">
						<img src="../img/libro3.png" alt="Avatar" class="image">
						<div class="overlay">
							<h3>Los Guardianes</h1>
								<h4>Autor: Josh Grisham</h1>
									<h4>$650</h1>
										<br>
										<a href="/ProyectoWeb/php/libro.php" class="botonn">Comprar </a>
						</div>
					</div>

				</div>
			</div>
			<br>
			<br>




		</body>

		</html>
	END;
?>
<?php include("footer.php")?>