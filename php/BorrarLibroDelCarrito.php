<?php 

include("header.php");

if(isset($_POST['BorrarLibroDelCarrito'])){ // si esta seteado el boton de borrar

    $IDUsuario = $_SESSION['id'];
    $IDLibro = $_GET["IDLibro"]; // Libro a borrar
    $sql = "DELETE FROM carrito WHERE idLibro = $IDLibro";
	$result = mysqli_query($conn,$sql);

    header("Location: carrito.php?IDUsuario=$IDUsuario"); // redireccionamos a la pagina en la que se realiza el procedimiento
    exit();

}

?>
