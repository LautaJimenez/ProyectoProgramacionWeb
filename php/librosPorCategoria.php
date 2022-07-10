<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoayuda</title>
    <link rel="stylesheet" href="../css/Categorias.css">
    <link rel="shortcut icon" href="../img/libros.png">
</head>

<body>
    <?php include("header.php");
    
    print <<< END
    <div class = "main">
    END;

    MostrarLibrosPorCategoria($conn); 
    print <<< END
    </div>
    END;
    ?>
    
    
    <?php
    function MostrarLibrosPorCategoria($conn){

        if(isset($_GET['idCategoria'])){

            $idCategoria = $_GET['idCategoria'];
            $sqlCategorias = "SELECT * FROM libro WHERE idCategoria='".$idCategoria."'";
            $result = $conn->query($sqlCategorias);
            $i = 0;
            $Contador = 0;
            $arrRow = [];

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
        
                    ImprimirLibros($NombreLibro,$AutorLibro,$FotoLibro,$PrecioLibro,$IDLibro,$Contador);
                    $Contador++;
                    $lenArrRow--;
                }	
            }
        }
    }?>

    <?php

    function ImprimirLibros($NombreLibro,$AutorLibro,$FotoLibro,$PrecioLibro,$IDLibro,$Contador){
        
        if($Contador == 0){
            print <<< END
            <div class="titulo">
                <h1>Autoayuda</h1>
            </div>
            END;
        }

        print <<< END
        
        

            <div class="contenedor-libros">
                <div class="libro">
                    <a href="/ProyectoWeb/php/libro.php?id=$IDLibro">
                        <img src="../img/$FotoLibro" alt="">
                        <div class="info">
                            <h3>$NombreLibro</h3>
                            <p>$AutorLibro</p>
                            <div class="precio">
                                <h4>$$PrecioLibro</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        END;
    }?>
    
</body>

<?php include("footer.php")?>

</html>