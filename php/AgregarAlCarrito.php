<?php

    include("header.php"); // Incluimos el header, ya que ahi se ejecuta el login, y nos brinda el ID usuario.

    $IDUsuario = $_SESSION['id']; // ID del usuario. 
    $IDLibro = $_GET['IDLibro'];

    $sql = "INSERT INTO carrito (idUsuario,idLibro) VALUES ($IDUsuario,$IDLibro)";

    $Result = mysqli_query($conn, $sql); // Hago la consulta a la base de datos.

    if($Result === true){

        header("Location: home.php");
    }

?>