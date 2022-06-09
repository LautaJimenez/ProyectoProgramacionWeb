<!DOCTYPE html>
<html lang="en">
<script src="ingreso.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Login |CódigoMasters|</title>
    <link rel="stylesheet" href="ingreso.css">
    <link rel="shortcut icon" href="../img/libros.png">
</head>

<body>
    <header>
        <section class="menu-header" id="inicio">

            <div class="brand-logo">
                <a href="../PaginaHome/home.php"><img src="../img/libros.png" alt=""></a>
            </div>

            <div class="buscador">
                <input type="search" id="buscador" placeholder="Buscar... " />
                <a type="submit" class="boton" href="../PaginaBusqueda/busqueda.php"><img src="../img/lupa.png" alt=""></a>

            </div>

            <div class="carrito">
                <a href="../PaginaCarrito/carrito.php"><img src="../img/carrito.png" alt=""></a>
            </div>


            <ul class="navegacion">
                <li><a href="#Categorias">Categorias</a><span>🡣</span>
                    <ul class="menu-categorias">
                        <li><a href="../PaginaCategorias/drama.php">Drama</a></li>
						<li><a href="../PaginaCategorias/comedia.php">Comedia</a></li>
						<li><a href="../PaginaCategorias/autoayuda.php">Autoayuda</a></li>
						<li><a href="../PaginaCategorias/economia.php">Economia</a></li>
						<li><a href="../PaginaCategorias/politica.php">Politica</a></li>
						<li><a href="../PaginaCategorias/ficcion.php">Ficcion y literatura</a></li>
						<li><a href="../PaginaCategorias/psicologia.php">Psicología</a></li>
						<li><a href="../PaginaCategorias/ciencia.php">Ciencia</a></li>
						<li><a href="../PaginaCategorias/infantil.php">Infantil y juvenil</a></li>

                    </ul>
                </li>

                <li><a href="../PaginaAyuda/ayuda.php">Ayuda</a></li>
                <li><a href="#Contacto">Contacto</a></li>
                <li><a href="../PaginaIngreso/ingreso.php">Ingresar</a></li>

            </ul>


        </section>

    </header>




    <div class="contenedor-form">
        <div class="toggle">
            <span onclick="Registro()"> Registrarse</span>
        </div>

        <div class="formulario" id="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="#">
                <!-- <input type="text" placeholder="Correo Electrónico" required> -->
                <input type="text" id="email-login" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'
                    onkeyup="validateEmail(document.getElementById('email-login'))" placeholder="Email" name="email"
                    value="" title="Debe ingresar un email valido." required>
                <span class="is-valid"></span>
                <!-- <input type="password" placeholder="Contraseña" required> -->
                <input type="password" id="pass-login" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    onsubmit="CheckPassword(document.getElementById('pass-login'))" placeholder="Contraseña"
                    name="password" value=""
                    title="Debe contener minimo 6 caracteres, una mayuscula, una minuscula y un numero" required>
                <span class="is-valid"></span>
                <input type="submit" value="Iniciar Sesión">
            </form>
        </div>

        <div class="formulario2" id="formulario2">
            <h2>Registrarse</h2>
            <form action="#">
                <input type="text" placeholder="Nombre y Apellido" required>

                <input type="email" placeholder="Correo Electrónico" required>

                <input type="password" placeholder="Contraseña" required>

                <input type="password" placeholder="Repetir Contraseña" required>

                <input type="submit" value="Registrarse">
            </form>
        </div>
        <div class="reset-password">
            <a href="#">Olvidé mi contraseña</a>
        </div>
    </div>

    <!-- <script>
    function Registro() {
    var login = document.getElementById("formulario2");
    var register = document.getElementById("formulario");
    if (login.style.display === "none") {
        login.style.display = "block";
        register.style.display = "none";
    } else {
        login.style.display = "none";
        register.style.display = "block";
    }
    }
    </script> -->
    <footer>
        <div class="brand">
            <div class="brand-logo">
                <a href="../PaginaHome/home.php"><img src="../img/libros.png" alt=""></a></div>

        </div>

        <div class="footer-menu" id="Contacto">

            <div class="menu-card">
                <h4>Email</h4>
                <a href="mailto:web@mail.com">web@mail.com</a>
            </div>
            <div class="menu-card">
                <h4>Telefono</h4>
                <a href="">+51 11-1111-1111</a>
            </div>
            <div class="menu-card">
                <h4>Locacion</h4>
                <a href="https://goo.gl/maps/o8E7SbdoYxqCvhM47">Buenos Aires</a>
            </div>

        </div>
    </footer>


</body>

</html>