<?php

include("conexion.php");

$conn = connectDB();

$q =  mysqli_real_escape_string($conn,$_GET['q']); // input de la barra de busqueda

if(strlen($q)>0){ // mientras que la longitud del input sea mayor a 0

    $sql = "SELECT nombre,id FROM libro WHERE nombre LIKE '%$q%' LIMIT 5";         // seleccionamos en la DB con WILDCARDS
                                                                            // el nombre que contenga a lo escrito en el input
    $result = $conn->query($sql); // resultado del pedido a la DB

    if($result === FALSE){
        header("Location: home.php"); // si hay error en el pedido, redirecciono a home con error
        exit();
    }

    else{
        $i = 0;
        $arrRow = [];
        $row = mysqli_fetch_assoc($result); // ponemos filas en arreglo asociativo

        while(isset($row)){ // si hay filas, metemos ese arreglo asociativo en un arreglo
            $arrRow[$i]=$row ;
            $row = mysqli_fetch_assoc($result);
            $i++;
        }
        mysqli_free_result($result); // liberamos el resultado

        $lenArrRow = count($arrRow) - 1; // longitud del arreglo de filas


        while($lenArrRow >= 0){
            // creamos variables con lo almacenado en la DB
            $idLibro = $arrRow[$lenArrRow]['id']; // El ID del libro
            $NombreLibro = $arrRow[$lenArrRow]['nombre']; // El nombre del libro
 
            if($idLibro){ // si hay una descripcion, imprimimos el resultado de la busqueda
                print <<< END
                    <br id="search-height">
                    <a id="search-result" href="libro.php?id=$idLibro">$NombreLibro</a> 
                    <br id="search-height">
                END;
            }

            $lenArrRow--; // pasamos a la fila siguiente
        }
     

    }

}

?>