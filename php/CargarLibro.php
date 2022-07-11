<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>tienda de ebooks</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="../css/cargarLibro.css">
	<link rel="shortcut icon" href="../img/libros.png">

</head>

<body>

<?php include("header.php");

// Funcion para mostrar todas las categorias de los libros.


function MostrarCategorias(){
	$conn = connectDB();
	$sql_categorias = "SELECT * FROM categorias";
	$result = $conn->query($sql_categorias);

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$IDCategoria = $row['idcategoria'];
			$NombreCategoria = $row['nombre'];

			print <<< END
				<option value="$IDCategoria">$NombreCategoria</option>
			END;
		}
	}	
}

function MostrarEditoriales(){
	$conn = connectDB();
	$sql_categorias = "SELECT * FROM editorial";
	$result = $conn->query($sql_categorias);

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$IDEditorial = $row['idEditorial'];
			$NombreEditorial = $row['nombre'];

			print <<< END
				<option value="$IDEditorial">$NombreEditorial</option>
			END;
		}
	}	
}

?>

	<!-- FORMULARIO DE CARGA -->

	<main>
		<section class="titulo">
			<h1>Cargar un libro</h1>
		</section>

		<form action="CargarLibro.php" method = "post" id="formulario" onsubmit="return validar()">

			<div class="CargarLibro">
				<label for="libro">Nombre</label><input type="text" name = "NombreLibro" id="libro"
					placeholder="Ingrese nombre del libro..."><br>
				
				<label for="autor">Autor</label><input type="text" name = "AutorLibro" id="autor"
					placeholder="Ingrese nombre de autor..."><br>
				
				<label for="categoria" id = "titulo-categoria" style="display: block;">Categoria</label>
					<select name="categoria" id="categoria" style="display: inline-block;"> 
					<option value=""></option>
					<?php MostrarCategorias(); ?>
					</select>
			
				<label for="agregarAgregarCategoria"></label><input type="text" id="agregarCategoria" placeholder="Agregar categoria..." style="display: none;">
				
				<label for="libro" id = "titulo-editorial" style="display: block">Editorial</label>
				
				<select name="editorial" id="editorial" style="display: inline-block;">
					<option value=""></option>
					<?php MostrarEditoriales(); ?>
				</select>
				
				<label for="agregarEditorial"></label><input type="text" id="agregarEditorial" placeholder="Agregar editorial..." style="display: none;">
				
				<label for="precio">Precio</label><input type="text" id="precio" placeholder="Ingrese precio..."><br>
				
				<label for="paginas">Número de páginas</label><input type="text" id="paginas"
					placeholder="Ingrese cantidad de paginas..."><br>
				
				<label for="idioma" id = "titulo-idioma" style="display: block;">Idioma</label>
					<select name="idioma" id="idioma" style="display: inline-block;">
					<option value=""></option>
					<option value="esp">Español</option>
					<option value="ing">Ingles</option>
					<option value="ale">Aleman</option>
					</select>
				
				<label for="AgregarIdioma"></label><input type="text" id="agregarIdioma" placeholder="Agregar idioma..." style="display: none;">
				
				<label for="bestseller">Best seller</label><input type="checkbox" name="" id="bestseller">
				
				<label for="fecha">Fecha de publicación</label><input type="date" id="fecha"><br>
				
				<label for="ISBN">I.S.B.N</label><input type="text" id="isbn" placeholder="Ingrese numero ISBN..."><br>
				
				<label for="sinopsis">Sinopsis</label><textarea name="sinopsis" id="sinopsis" cols="40" rows="10"
					placeholder="Ingrese sinopsis..."></textarea>
				
					<label for="">Portada</label><input type="file" name="portada" id="portada">
				
					<input type="submit" value="Cargar libro" id="enviar">
			</div>
		</form>
	</main>


	<?php include("footer.php")?>

	<script src="/ProyectoWeb/js/CargarLibro.js"></script>

</body>

	<!-- <?php

		$sql = "INSERT INTO * libro (id,nombre,autor,precio,idEditorial,paginas,idioma,bestseller,fechaPublicacion,sinopsis,isbn,idcategoria,foto) VALUES ('id','NombreLibro','NombreAutor','')";
	
	?> -->

</html>