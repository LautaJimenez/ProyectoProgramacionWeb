<link type="text/css" rel="stylesheet" href="../css/ofertas.css">

<?php

    function MostrarLibrosEnOferta($conn){

        $sql = "SELECT * FROM libro";
        $result = $conn->query($sql);
        $i = 0;
        $Contador = 0;
        $arrRow = []; //Arreglo de filas de la base de datos

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
                ImprimirOfertas($NombreLibro,$AutorLibro,$FotoLibro,$PrecioLibro,$IDLibro,$Oferta,$Contador);
                $Contador++;
                $lenArrRow--;
            }	
        }       
    }

    function ImprimirOfertas($NombreLibro,$AutorLibro,$FotoLibro,$PrecioLibro,$IDLibro,$Oferta,$Contador){

        if($Contador == 0){
            print <<< END
                <h1>Ofertas</h1>
            END;
        }

        if($Oferta == 1){
            print <<< END
                
            <div class="contenedor-libros">
                <div class="container">
                    <img src="../img/$FotoLibro" alt="Avatar" class="image">
                    <div class="overlay">
                        <h3>$NombreLibro</h1>
                        <h4>Autor: $AutorLibro</h1>
                        <h4>$$PrecioLibro</h1>
                        <br>
                        <a href="libro.php?id=$IDLibro"><input type="button" value="Comprar" class = "button"></a>
                    </div>
                </div>
            </div>
            END;		
        }
    }

    print <<< END
    <div class="deals">
    END;
    MostrarLibrosEnOferta($conn);
    print <<< END
    </div>
    END;

?>