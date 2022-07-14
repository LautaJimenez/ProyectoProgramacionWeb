<!DOCTYPE html>
<html lang="en">
<script src="/ProyectoWeb/js/ingreso.js"></script>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/Ingreso.css">
    <link rel="shortcut icon" href="../img/libros.png">
</head>

<body>
<?php include("header.php")?>
<?php
    
    // MANEJO DE ERRORES:

    if(isset($_GET["login"])){ // si el boton de logueo esta seteado
            if($_GET["login"] == "emailNotRegister"){ //si el logueo es exitoso
                print <<< END
                    <script type="text/javascript">
                        setTimeout(function(){				
                            alert("¡El mail no se encuentra registrado! Registrese e intente nuevamente.");
                        },250);
                    </script>
                    
                END;
            }
    }

    if(isset($_GET["login"])){ // si el boton de logueo esta seteado
        if($_GET["login"] == "incorrectPassword"){ //si el logueo es exitoso
            print <<< END
                <script type="text/javascript">
                    setTimeout(function(){				
                        alert("¡Contraseña incorrecta! Intente nuevamente.");
                    },250);
                </script>
                
            END;
        }
    }

    if(isset($_GET["register"])){ // si el boton de registro esta seteado
            if($_GET["register"] == "success"){ //si el registro es exitoso
                print <<< END
                    <script type="text/javascript">
                        setTimeout(function(){				
                            alert("¡Registro exitoso!");
                        },250);
                    </script>
                    
                END;
            }
        }


    if(isset($_GET["register"])){ // si el boton de registro esta seteado
        if($_GET["register"] == "failed"){ //si el registro es exitoso
            print <<< END
                <script type="text/javascript">
                    setTimeout(function(){				
                        alert("Hubo un error en el registro. Intente nuevamente");
                    },250);
                </script>
                
            END;
        }
    }
?>



    <div class="contenedor-form">
        <div class="toggle">
            <span id = "toggle" onclick="Registro()">Registrarse</span>
        </div>

        <!-- Formulario de incio de sesión de usuario. -->
 
        <div class="formulario" id="formulario">
            <h2>Iniciar Sesión</h2>
            <form action="login.php" method="post">
                
                <input type="text" name = "EmailUsuarioLogin" id="email-login" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$'
                    onkeyup="validateEmail(document.getElementById('email-login'))" placeholder="Email" name="email" value=""
                    title="Debe ingresar un email valido." required>
                <span class="is-valid"></span>
                
                <input type="password" name = "ContraseñaUsuarioLogin" id="pass-login" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    onsubmit="CheckPassword(document.getElementById('pass-login'))" placeholder="Contraseña" name="password"
                    value="" title="Debe contener minimo 6 caracteres, una mayuscula, una minuscula y un numero" required>
                <span class="is-valid"></span>
                
                <input type="submit" name = "login" value="Iniciar Sesión">
            
            </form>
        </div>

        <!-- Formulario de registro de usuario. -->

        <div class="formulario2" id="formulario2">
            <h2>Registrarse</h2>
            <form action="register.php" method = "post">
                
                <input type="text" placeholder="Nombre" name = "NombreUsuario" required>

                <input type="text" placeholder="Apellido" name = "ApellidoUsuario" required>

                <input type="email" placeholder="Correo Electrónico" name = "EmailUsuario" pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' 
                onkeyup="validateEmail(document.getElementById('Email-regist'))" value="" title="Debe ingresar un email valido." required>

                <input type="number" placeholder="DNI" name = "DNIUsuario" id = "DNI-regist" pattern='^[\d]{1,3}.?[\d]{3,3}.?[\d]{3,3}$' 
                onsubmit="checkDNI(document.getElementById('DNI-regist'))" title="El DNI debe tener mas de 7 digitos y menos de 9 digitos." required>

                <input type="password" placeholder="Contraseña" name = "ContraseñaUsuario" id="pass-regist" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    onsubmit="CheckPassword(document.getElementById('pass-regist'))" title="Debe contener minimo 6 caracteres, una mayuscula, una minuscula y un numero" required>

                <input type="submit" name = "register" value="Registrarse">
            </form>
        </div>
        <div class="reset-password">
            <a href="#">Olvidé mi contraseña</a>
        </div>
    </div>

</body>

<?php include("footer.php")?>

</html>