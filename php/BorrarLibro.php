<?php 

if(isset($_POST['BorrarLibro'])){ // si esta seteado el boton de borrar
    include('conexion.php');
    $conn = connectDB();

    $IDLibro = $_GET["IDLibro"]; // Libro a borrar
    $sql = "DELETE FROM libro WHERE id = $IDLibro";
	$result = mysqli_query($conn,$sql);


    if($result === FALSE){
        header("Location: libro.php?$IDLibro"); // si hay error en el pedido, retornamos a la pagina del libro
        exit();
    }
    else{
        header("Location: home.php?BorrarLibro=success"); // redireccionamos a la pagina en la que se realiza el procedimiento
        exit();
    }
}




?>

