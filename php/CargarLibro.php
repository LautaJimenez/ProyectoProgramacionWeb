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

		<form action="CargarLibro.php" method = "POST" id="formulario" onsubmit="validar()">

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
				
				<label for="libro" id = "titulo-editorial" style="display: block">Editorial</label>
				
				<select name="editorial" id="editorial" style="display: inline-block;">
					<option value=""></option>
					<?php MostrarEditoriales(); ?>
				</select>
				
				<label for="precio">Precio</label><input type="text" id="precio" name = "Precio" placeholder="Ingrese precio..."><br>
				
				<label for="paginas">Número de páginas</label><input type="text" name = "Paginas" id="paginas"
					placeholder="Ingrese cantidad de paginas..."><br>
				
				<label for="idioma" id = "titulo-idioma" style="display: block;">Idioma</label>
					<select name="Idioma" id="idioma" style="display: inline-block;">
					<option value=""></option>
					<option value="Español">Español</option>
					<option value="Ingles">Ingles</option>
					<option value="Aleman">Aleman</option>
					</select>
				
				<label for="fecha">Fecha de publicación</label><input name = "Fecha" type="date" id="fecha"><br>
				
				<label for="ISBN">I.S.B.N</label><input type="text" id="isbn" name = "ISBN" placeholder="Ingrese numero ISBN..."><br>
				
				<label for="sinopsis">Sinopsis</label><textarea id="sinopsis" name = "Sinopsis" cols="40" rows="10"
					placeholder="Ingrese sinopsis..."></textarea>
				
				<label for="portada">Portada</label><input type="text" name = "PortadaLibro" id="PortadaLibro"
				placeholder="Ingrese nombre del archivo de la portada..."><br>
				
					<input type="submit" name = "CargarLibro" value="Cargar libro" id="enviar">
			</div>
		</form>
	</main>


	<?php include("footer.php")?>

	<script src="/ProyectoWeb/js/CargarLibro.js"></script>

</body>

	<?php 													// Carga de libros a la base de datos
		
		if(isset($_POST["CargarLibro"])){
			$NombreLibro = $_POST['NombreLibro'];
			$AutorLibro = $_POST["AutorLibro"];
			$CategoriaLibro = $_POST["categoria"];
			$EditorialLibro = $_POST["editorial"];
			$Precio = $_POST["Precio"];
			$Paginas = $_POST["Paginas"];
			$Idioma = $_POST["Idioma"];
			$FechaPublicacion = $_POST["Fecha"];
			$ISBNLibro = $_POST["ISBN"];
			$SinopsisLibro = $_POST["Sinopsis"];
			$FotoLibro = $_POST["PortadaLibro"];

			$sql = "INSERT INTO libro
					(nombre,autor,precio,idEditorial,paginas,idioma,fechaPublicacion,sinopsis,isbn,idcategoria,foto)
					VALUES 
					('$NombreLibro','$AutorLibro',$Precio,$EditorialLibro,$Paginas,'$Idioma','$FechaPublicacion','$SinopsisLibro',$ISBNLibro,$CategoriaLibro,'$FotoLibro')";

			$result = $conn->query($sql);

			if($result === TRUE){
				print <<< END
				<script type="text/javascript">
				alert("Ingreso de libro exitoso!");
				</script>
				END;
				exit();
			}
	
			else{
				print <<< END
				<script type="text/javascript">
				alert("Ingreso de libro fallido. Intente nuevamente");
				</script>
			END;
			}		
		}
		
	?>

</html>