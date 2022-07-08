<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>tienda de ebooks</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link type="text/css" rel="stylesheet" href="../css/styles.css">
	<link rel="shortcut icon" href="../img/libros.png">
	<script language="javascript" type="text/javascript" src="/ProyectoWeb/js/extras.js"></script>
	<script language="javascript" type="text/javascript" src="/ProyectoWeb/js/funciones.js"></script>
</head>

<body>

	<?php 

	include("header.php");

	// CARRUSEL

	print <<< END

	<!-- Slideshow container -->
	<div class="slideshow-container">

		<!-- Full-width images with number and caption text -->
		<div class="mySlides fade">
			<br>
			<img src="../img/banner1.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
			<br>
			<img src="../img/banner2.jpg" style="width:100%">

		</div>

		<div class="mySlides fade">
			<br>
			<img src="../img/banner3.jpg" style="width:100%">

		</div>

		<!-- Next and previous buttons -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<!-- The dots/circles -->
	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
	</div>


	<div id="mybotonContainer">
		<button class="boton active" onclick="filterSelection('all')"> Mostrar todo</button>
		<button class="boton" onclick="filterSelection('nature')"> Best Sellers</button>
		<button class="boton" onclick="filterSelection('cars')"> Mas Buscados</button>

	</div>

	
	<div class="main">
		<div class = "col">
	END;
	
	MostrarLibros();
	print <<< END
		</div>	
	</div> 
	END;



	// GALERIA DE LIBROS

function ImprimirLibros($NombreLibro,$FotoLibro,$PrecioLibro){

	print <<< END
		
		<div class="column nature">
			<div class="content">
				<img src="../img/$FotoLibro" alt="books" style="width:60%">
				<h4>$NombreLibro</h4>
				<h5>$ $PrecioLibro</h5>
				<a href="/ProyectoWeb/php/libro.php" class="button">Comprar </a>
			</div>
		</div>
		
	END;

}

function MostrarLibros(){

	include("conexion.php");
	$conn = connectDB();
	$sql = "SELECT * FROM libro";
	$result = $conn->query($sql);
	$i = 0;
	$arrRow = []; //Arreglo de filas de la base de datos

	if($result == TRUE){
		$row = mysqli_fetch_assoc($result); 

		while(isset($row)){ //Mientras haya filas las meto en un arreglo
			$arrRow[$i] = $row;
			$row = mysqli_fetch_assoc($result);
			$i++;
		}

		mysqli_free_result($result); //Liberamos el resultado
		$lenArrRow = count($arrRow) - 1; // Cantidad de filas
	
		while($lenArrRow >= 0){
			$NombreLibro = $arrRow[$lenArrRow]['nombre'];
			$PrecioLibro = $arrRow[$lenArrRow]['precio'];
			$FotoLibro = $arrRow[$lenArrRow]['foto'];

			ImprimirLibros($NombreLibro,$FotoLibro,$PrecioLibro);
			$lenArrRow--;
		}	
	}
}

	print <<< END

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


	<div class="card-brand">
		<a href="/ProyectoWeb/php/libro.php">
			<div class="single-card" style="background-image: url('../img/img7.jpg');"></div>
		</a>
		<a href="/ProyectoWeb/php/libro.php">
			<div class="single-card" style="background-image: url('../img/5.jpg');"></div>
		</a>
		<a href="/ProyectoWeb/php/libro.php">
			<div class="single-card" style="background-image: url('../img/6.jpg');"></div>
		</a>
	</div>
	END;
	
	
?>
</body>

<?php
include("footer.php");
?>