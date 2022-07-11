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

	// Incluyo el header y abro la conexion en el header.

	include("header.php");

	// CARRUSEL

	print <<< END

	<!-- Carrusel -->
	<div class="slideshow-container">

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

		<!-- Botones siguiente y previo -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	<br>

	<!-- Botones circulares -->
	<div style="text-align:center">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
	</div>


	<div id="mybotonContainer">
		<button class="boton active" onclick="filterSelection('all')"> Mostrar todo</button>
		<button class="boton" onclick="filterSelection('BestSellers')"> Best Sellers</button>
		<button class="boton" onclick="filterSelection('MostWanted')"> Mas Buscados</button>

	</div>

	
	<div class="main">
		<div class = "col">
	END;
	
	MostrarLibros($conn);
	print <<< END
		</div>	
	</div> 
	END;



	// GALERIA DE LIBROS

function ImprimirLibros($NombreLibro,$AutorLibro,$FotoLibro,$PrecioLibro,$IDLibro){

	print <<< END
		
		<div class="column nature">
			<div class="content">
				<a href="libro.php?id=$IDLibro"><img src="../img/$FotoLibro" alt="books"></a>
				<h4>$NombreLibro</h4>
				<h5>$ $PrecioLibro</h5>
				<a href="libro.php?id=$IDLibro"><input type="button" value="Comprar" class = "button"></a>
			</div>
		</div>

	END;	
}

function MostrarLibros($conn){

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
			$AutorLibro = $arrRow[$lenArrRow]['autor'];
			$PrecioLibro = $arrRow[$lenArrRow]['precio'];
			$FotoLibro = $arrRow[$lenArrRow]['foto'];
			$IDLibro = $arrRow[$lenArrRow]['id'];
			$Oferta = $arrRow[$lenArrRow]['Oferta'];

			ImprimirLibros($NombreLibro,$AutorLibro,$FotoLibro,$PrecioLibro,$IDLibro);
			$lenArrRow--;
		}	
	}
}

	include("ofertas.php");

	print <<< END

	<div class="card-brand">
		<div class="single-card" style="background-image: url('../img/img7.jpg');"></div>
		<div class="single-card" style="background-image: url('../img/5.jpg');"></div>
		<div class="single-card" style="background-image: url('../img/6.jpg');"></div>
	</div>
	END;
	
	
?>

<!-- Para que aparezca el slider y los todos los libros apenas comienza a correr la pagina. -->
<script>
  showSlides(slideIndex);
  window.onload = filterSelection("all");
</script> 

</body>

<?php
include("footer.php");
?>