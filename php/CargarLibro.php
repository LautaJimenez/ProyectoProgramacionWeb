<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>tienda de ebooks</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<link rel="stylesheet" href="../css/CargarLibro.css">
	<link rel="shortcut icon" href="../img/libros.png">

</head>

<body>

	<?php include("header.php")?>

	<main>
		<section class="titulo">
			<h1>Cargar un libro</h1>
		</section>

		<form action="" id="formulario" onsubmit="return validar()">

			<div class="CargarLibro">
				<label for="libro">Nombre</label><input type="text" id="libro"
					placeholder="Ingrese nombre del libro..."><br>
				<label for="autor">Autor</label><input type="text" id="autor"
					placeholder="Ingrese nombre de autor..."><br>
				<label for="categoria" id = "titulo-categoria" style="display: block;">Categoria</label>
				<select name="categoria" id="categoria" style="display: inline-block;"> 
					<option value=""></option>
					<option value="1">Drama</option>
					<option value="2">Comedia</option>
					<option value="4">Autoayuda</option>
					<option value="5">Economia</option>
					<option value="6">Politica</option>
					<option value="7">Ficcion y Literatura</option>
					<option value="8">Psicología</option>
					<option value="9">Ciencia</option>
					<option value="10">Infantil y juvenil</option>
				</select>
				<label for="agregarCategoriaCheckbox">Agregar categoria</label><input onchange="javascript:MostrarCategoria()" type="checkbox" name="" id="agregarCategoriaCheckbox">
				<label for="agregarAgregarCategoria"></label><input type="text" id="agregarCategoria" placeholder="Agregar categoria..." style="display: none;">
				<label for="libro" id = "titulo-editorial" style="display: block">Editorial</label>
				<select name="editorial" id="editorial" style="display: inline-block;">
					<option value=""></option>
					<option value="1">Planeta</option>
					<option value="2">Alfaguara</option>
					<option value="3">Debolsillo</option>
					<option value="4">Anagrama</option>
					<option value="5">Plaza & James</option>
					<option value="6">Lumen</option>
					<option value="7">Gárgola</option>
					<option value="8">Booket</option>
					<option value="9">Austral</option>
					<option value="10">Lain</option>
					<option value="11">Estrada</option>
					<option value="12">Obelisco</option>
					<option value="13">Montena</option>
					<option value="14">V & R Editores</option>
					<option value="15">Mestas ediciones</option>
					<option value="16">Vergara</option>
					<option value="17">Grijalbo</option>
					<option value="18">Umbriel editores</option>
					<option value="19">Ediciones Lea</option>
					<option value="20">B de bolsillo</option>
				</select>
				<label for="agregarEditorialCheckbox">Agregar editorial</label><input onchange="javascript:MostrarEditorial()" type="checkbox" name="" id="agregarEditorialCheckbox">
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
				<label for="agregarIdiomaCheckbox">Agregar idioma</label><input onchange="javascript:MostrarIdioma()" type="checkbox" name="" id="agregarIdiomaCheckbox">
				<label for="agregarAgregarIdioma"></label><input type="text" id="agregarIdioma" placeholder="Agregar idioma..." style="display: none;">
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

</html>