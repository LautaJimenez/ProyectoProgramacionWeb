<script language="javascript" type="text/javascript"  src="/ProyectoWeb/js/buscar.js"></script>

<?php

    // Conexion a la base de datos:
    include("conexion.php");
    $conn = connectDB();   

    session_start(); //Creamos la sesión o continua la ya creada basada en un identificador pasado por POST o GET o via coookie

    function checkAdmin(){ // Funcion que chequea si el usuario logeado es administrador
        if(isset($_SESSION['tipoUsuario'])){
            if($_SESSION['tipoUsuario'] == 2){
                return true;
            }
        }
    }

?>

<header>

    <section class="menu-header" id="inicio">

        <div class="brand-logo">
            <a href="/ProyectoWeb/php/home.php"><img src="../img/libros.png" alt=""></a>
        </div>

        <div class="buscador">
            <input type="input_box" id="buscador" placeholder="Buscar... "onkeyup="showResult(this.value)"/>
            <a class="glass" href="#">
				<i class="fas fa-search"></i>
			</a>
		    <div id="livesearch"></div>
        </div>

        <?php 
        if(isset($_SESSION['id'])){ // Solo que aparezca el carrito cuando este la sesion iniciada.
            $IDUsuario = $_SESSION['id'];
            print<<<END
            <div class="carrito">
            <a href="/ProyectoWeb/php/carrito.php?IDUsuario=$IDUsuario"><img src="../img/carrito.png" alt=""></a>
            </div>
            END;
        }   
        ?>

        


        <ul class="navegacion">

            <?php if(checkAdmin()){
                print <<< END
                <li><a href="/ProyectoWeb/php/CargarLibro.php">Agregar libro</a></li>
                END;   
            }?>    

            <li><a href="#Categorias">Categorias 🡣</a>
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
            
            <?php
                if(empty($_SESSION['id'])){
                    print <<< END
                        <li><a href="/ProyectoWeb/php/ingreso.php">Ingresar</a></li>
                    END;
                }
                else{
                    print <<< END
                    <li><form id = "cerrarSesion" action="logout.php" method="POST"><button style = "background-color:#22375e; color:white; border:none; cursor: pointer;">Cerrar sesión</button></form></li>
                    END;
                }
            ?>

        </ul>
        </section>

</header>



