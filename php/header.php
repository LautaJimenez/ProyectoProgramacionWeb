<?php

    // Conexion a la base de datos:
    include("conexion.php");
    $conn = connectDB();   
?>

<header>

    <section class="menu-header" id="inicio">

        <div class="brand-logo">
            <a href="/ProyectoWeb/php/home.php"><img src="../img/libros.png" alt=""></a>
        </div>

        <div class="buscador">
            <input type="search" id="buscador" placeholder="Buscar... " />
            <a type="submit" class="botonBusqueda" href="/ProyectoWeb/php/busqueda.php"><img src="../img/lupa.png" alt=""></a>

        </div>

        <div class="carrito">
            <a href="/ProyectoWeb/php/carrito.php"><img src="../img/carrito.png" alt=""></a>
        </div>


        <ul class="navegacion">
            <li><a href="#Categorias">Categorias</a><span>🡣</span>
                <ul class="menu-categorias">
            
                <?php // Se obtiene de la base de datos y se imprimen todas las categorias.       
                $sql_categorias = $conn->query("SELECT * FROM categorias");
                while($row = $sql_categorias->fetch_array()){
                    $idCategoria = $row['idcategoria'];
                    $nombreCategoria = $row['nombre'];  
                    ?>  
                        <li><a href="/ProyectoWeb/php/librosPorCategoria.php?idCategoria=<?php echo $idCategoria;?>&nombreCategoria=<?php echo $nombreCategoria;?>"><?php echo $nombreCategoria;?></a></li>
                <?php
                }
                ?> <!-- Cierro el while -->

                </ul>
            </li>

            <li><a href="/ProyectoWeb/php/ayuda.php">Ayuda</a></li>
            <li><a href="#Contacto">Contacto</a></li>
            <li><a href="/ProyectoWeb/php/ingreso.php">Ingresar</a></li>
        </ul>
        </section>
</header>