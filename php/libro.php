<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>tienda de ebooks</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="../css/libro.css">
    <link rel="shortcut icon" href="../img/libros.png">
    <script language="javascript" type="text/javascript" src="/ProyectoWeb/js/funciones.js"></script>

</head>

<body>

    <?php include("header.php");

// Obtengo la informacion del libro.

if (isset($_GET['id'])){
	$IDLibro = $_GET['id'];
	$sql = "SELECT * FROM libro WHERE id='".$IDLibro."'";
	$result = mysqli_query($conn, $sql);
}

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
		$IDLibro = $row['id'];
		$IDEditorialLibro = $row['idEditorial'];
		$NombreLibro = $row['nombre'];
		$AutorLibro = $row['autor'];
		$PrecioLibro = $row['precio'];
		$PrecioLibroFormateado = number_format($PrecioLibro,2); // Para que aparezca el precio del libro con puntos y comas desde un principio.
		$FotoLibro = $row['foto'];    
		$SinopsisLibro = $row['sinopsis'];
		$ISBNLibro = $row['isbn'];
		$PaginasLibro = $row['paginas'];
		$IdiomaLibro = $row['idioma'];
		$FechaPublicacionLibro = $row['fechaPublicacion'];
		$IDCategoria = $row['idcategoria'];
	}
}

// Obtengo el nombre de la categoria.

$sql = "SELECT * FROM categorias WHERE idcategoria='".$IDCategoria."'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
		$NombreCategoria = $row['nombre'];
	}
}

// Obtengo el nombre de la editorial

$sql = "SELECT * FROM editorial WHERE idEditorial='".$IDEditorialLibro."'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
		$NombreEditorial = $row['nombre'];
	}
}


print <<< END

	<br>
	<br>
	<div class="topleft">
		<a href="/ProyectoWeb/php/librosPorCategoria.php?idCategoria=$IDCategoria&nombreCategoria=$NombreCategoria"><p class = "tituloCategoria">$NombreCategoria</p></a>
	</div>

	<div class="small-container single-product">
		
		<div class="row">
				
			<div class="col-2">
				<img src="../img/$FotoLibro" width="100%">
				</div>
			
			<div class="col-2">
				<br>
				<h1>$NombreLibro</h1>
				<h4>Autor: $AutorLibro</h4>
				<h3>Editorial: $NombreEditorial</h3>
				<div class = "flex-conteiner">
				<div><h6>Cantidad: <input id = "CantidadDeLibros" type="number" min = "1" value = "1" onchange = "MultiplicarPrecios($PrecioLibro)"></h6></div>
				<div><h4 id = "ResultadoPrecio">AR$ $PrecioLibroFormateado</h4></div>
				</div>
END;


				if(checkAdmin()){
					print <<< END
						<div>
						<form method="POST" action="BorrarLibro.php?IDLibro=$IDLibro">
						<input type="submit" style = "width:100%" id = "BorrarLibro" name="BorrarLibro" style="margin:10px 0;"value="Borrar producto de base de datos">
						</form>
						</div>
					END;
				}
				else{
					if(isset($_SESSION['id'])){
						print <<< END
						<form method="POST" action="AgregarAlCarrito.php?IDLibro=$IDLibro">
						<span onclick = "alert('??Producto agregado al carrito!')" ><input type="submit" style = "width:100%" id = "AgregarAlCarrito" name="AgregarAlCarrito" style="margin:10px 0;"value="Agregar al carrito">
						</span>
						</form>
						END;
					}
					else{
						print <<< END
						<span><input type="submit" style = "width:100%" id = "AgregarAlCarrito" name="AgregarAlCarrito" style="margin:10px 0;"value="Para agregar el producto al carrito, inicie sesi??n.">
						</span>
						<br>
						END;
					}
					
				}
				
				print <<< END
				<br>
				<p>$SinopsisLibro</p>
				<br>
				<br>
				<h3>M??s Informaci??n</h3>
				<br>
				<h5>I.S.B.N: $ISBNLibro</h5>
				<h5>Nro. de Paginas: $PaginasLibro</h5>
				<h5>Idioma: $IdiomaLibro</h5>
				<h5>Fecha Publicaci??n: $FechaPublicacionLibro</h5>
			</div>
		</div>
	</div>
	
	<br>
	<br>
	
	END;	

include("ofertas.php");

print <<< END

<br>
<br>
</body>

</html>

END;

include("footer.php")?>