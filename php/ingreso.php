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
            <form method = "POST" action="#">
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
            <form action="ingreso.php" method = "post">
                
                <input type="text" placeholder="Nombre" name = "NombreUsuario" required>

                <input type="text" placeholder="Apellido" name = "ApellidoUsuario" required>

                <input type="email" placeholder="Correo Electrónico" name = "EmailUsuario" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' 
                onkeyup="validateEmail(document.getElementById('Email-regist'))" value="" title="Debe ingresar un email valido." required>

                <input type="number" placeholder="DNI" name = "DNIUsuario" id = "DNI-regist" pattern='^[\d]{1,3}.?[\d]{3,3}.?[\d]{3,3}$' 
                onsubmit="checkDNI(document.getElementById('DNI-regist'))" title="El DNI debe tener mas de 7 digitos y menos de 9 digitos." required>

                <input type="password" placeholder="Contraseña" name = "ContraseñaUsuario" id="pass-regist" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    onsubmit="CheckPassword(document.getElementById('pass-regist'))" title="Debe contener minimo 6 caracteres, una mayuscula, una minuscula y un numero" required>

                <input type="password" placeholder="Repetir Contraseña" name = "ContraseñaUsuario" required>

                <input type="submit" value="Registrarse">
            </form>
        </div>
        <div class="reset-password">
            <a href="#">Olvidé mi contraseña</a>
        </div>
    </div>

</body>

<?php include("footer.php")?>

<?php 

    // Registro de usuario.

    if(!empty($_POST)){

        $NombreUsuario = $_POST['NombreUsuario'];
        $ApellidoUsuario = $_POST['ApellidoUsuario'];
        $EmailUsuario = $_POST['EmailUsuario'];
        $DNIUsuario = $_POST['DNIUsuario'];
        $ContraseñaUsuario = $_POST['ContraseñaUsuario'];
        
        if(strpos($EmailUsuario,'@admin.com') !== false){
            $TipoDeUsuario = 2; // ES ADMINISTRADOR
        }
        else{
            $TipoDeUsuario = 1;
        }

        $query = "INSERT INTO usuario(nombre,apellido,email,dni,contraseña,tipoUsuario) VALUES ('$NombreUsuario','$ApellidoUsuario','$EmailUsuario','$DNIUsuario','$ContraseñaUsuario','$TipoDeUsuario')";
        $result = mysqli_query($conn,$query);
    }
?>

</html>