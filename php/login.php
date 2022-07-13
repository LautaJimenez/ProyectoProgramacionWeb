<?php 
        
    include("conexion.php");
    $conn = connectDB();

    // Login de usuario.

    if(!empty($_POST)){

        $EmailUsuarioLogin = $_POST['EmailUsuarioLogin'];
        $ContraseñaUsuarioLogin = $_POST['ContraseñaUsuarioLogin'];

        $sql = "SELECT * FROM usuario WHERE email = '$EmailUsuarioLogin'";
        $result = mysqli_query($conn,$sql);

        if($result === false){
            echo "Hay un error en el pedido.";
        }   
            
        else{ // Si no hay error en el pedido, que te salte una alerta con registro exitoso.

            if($row = mysqli_fetch_assoc($result)){ // obtiene la fila y la almacena en $row (arreglo)
                $ContraseñaHasheada = $row['contraseña'];
                $ContraseñaCorrecta = password_verify($ContraseñaUsuarioLogin,$ContraseñaHasheada);  //verificamos si la contraseña es correcta
                
                if($ContraseñaCorrecta == false){ // Si la contraseña es incorrecta, tira un mensaje de error y sale.

                    header("Location: ingreso.php?login=failed");
   
                    exit();
                }

                else if($ContraseñaCorrecta == true){
                    session_start();   // a cada variable de sesion le almaceno su correspondiente en la base de datos
                    
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['nombre'] = $row['nombre'];
                    $_SESSION['apellido'] = $row['apellido'];
                    $_SESSION['dni'] = $row['dni'];
                    $_SESSION['tipoUsuario'] = $row['tipoUsuario'];
                    
                    header("Location: home.php?login=success");
                    exit();
                }
            }
        }
    }
        
    
?>