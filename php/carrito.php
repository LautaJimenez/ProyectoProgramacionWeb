<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../css/Carrito.css">
    <link rel="shortcut icon" href="../img/libros.png">
</head>

<body>

<?php include("header.php")?>

<div class="titulo">
    <h1>Carrito</h1>
</div>

<?php MostrarLibrosEnCarrito($conn)?>

<?php

function MostrarLibrosEnCarrito($conn){

    // Obtengo el ID de libro correspondiente al usuario para mostrar en el carrito

    if(isset($_GET['IDUsuario'])){

        $IDUsuario = $_GET['IDUsuario']; 
        $sqlCarrito = "SELECT idLibro, idUsuario FROM carrito WHERE idUsuario = $IDUsuario";
        $result = $conn->query($sqlCarrito);
        $i = 0;
        $arrIDLibro = [];
        
        if($result == TRUE){
            $row = mysqli_fetch_assoc($result); 

            while(isset($row)){ //Mientras haya filas las meto en un arreglo
                $arrIDLibro[$i] = $row;
                $row = mysqli_fetch_assoc($result);
                $i++;
            }
    
            mysqli_free_result($result); //Liberamos el resultado
            $lenArrIDLibro = count($arrIDLibro) - 1; // Cantidad de filas
        
            while($lenArrIDLibro >= 0){
                $IDLibro = $arrIDLibro[$lenArrIDLibro]['idLibro'];
                $lenArrIDLibro--;
                LibrosEnCarrito($IDLibro,$conn);
            }	   
        } 
    }
}

function LibrosEnCarrito($IDLibro,$conn){
    
    $sqlLibros = "SELECT nombre,autor,foto,precio,id FROM libro WHERE id = $IDLibro";
    $result_libros = $conn->query($sqlLibros);
    $i = 0;
    $arrLibros = [];
    
    if($result_libros == TRUE){
        $row = mysqli_fetch_assoc($result_libros); 

        while(isset($row)){ //Mientras haya filas las meto en un arreglo
            $arrLibros[$i] = $row;
            $row = mysqli_fetch_assoc($result_libros);
            $i++;
        }

        mysqli_free_result($result_libros); //Liberamos el resultado
        $lenArrLibros = count($arrLibros) - 1; // Cantidad de filas
    
        while($lenArrLibros >= 0){
            $NombreLibro = $arrLibros[$lenArrLibros]['nombre'];
            $AutorLibro = $arrLibros[$lenArrLibros]['autor'];
            $PrecioLibro = $arrLibros[$lenArrLibros]['precio'];
            $FotoLibro = $arrLibros[$lenArrLibros]['foto'];
            ImprimirLibros($NombreLibro,$AutorLibro,$PrecioLibro,$FotoLibro,$IDLibro);
            $lenArrLibros--;

        }	   
    } 
}

function ImprimirLibros($NombreLibro,$AutorLibro,$PrecioLibro,$FotoLibro,$IDLibro){
    print <<< END
        <div class="libro" id="libro1">
        <img id="libro" src="../img/$FotoLibro" alt="">
        <div class="info">
            <h3>$NombreLibro</h3>
            <p>$AutorLibro</p>
            <p class="precio">$ $PrecioLibro</p>
        </div>
        </div>
        <div >
        <form style = "margin-left:auto; margin-right: auto; width:5%;"  method="POST" action="BorrarLibroDelCarrito.php?IDLibro=$IDLibro">
        <input type="submit" id = "BorrarLibroDelCarrito" name="BorrarLibroDelCarrito" style="margin:10px 0;"value="Borrar del carrito">
        </form>
        </div>
    END;

}

print <<< END

    <div class="finalizarCompra">
    <a href="/ProyectoWeb/php/compraFinalizada.php" class="btn">Finalizar compra</a>
    </div>


    <?php include("footer.php")?>

    <script src="/ProyectoWeb/js/carrito.js"></script>
    </body>

    </html>

END;

?>