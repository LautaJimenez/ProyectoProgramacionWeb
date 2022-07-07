<!DOCTYPE html>
<html lang="en">
<script src="/ProyectoWeb/js/ingreso.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Login |CódigoMasters|</title>
    <link rel="stylesheet" href="../css/Ingreso.css">
    <link rel="shortcut icon" href="../img/libros.png">
</head>

<body>
<?php include("header.php")?>




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

    <?php include("footer.php")?>


</body>

</html>