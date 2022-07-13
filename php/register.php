<?php 

    include("conexion.php");
    $conn = connectDB();

    // Registro de usuario.

    if(!empty($_POST)){

        $NombreUsuario = $_POST['NombreUsuario'];
        $ApellidoUsuario = $_POST['ApellidoUsuario'];
        $EmailUsuario = $_POST['EmailUsuario'];
        $DNIUsuario = $_POST['DNIUsuario'];
        $ContraseñaUsuario = $_POST['ContraseñaUsuario'];
        $ContraseñaUsuarioHashed = password_hash($ContraseñaUsuario,PASSWORD_BCRYPT); // Encriptacion la contraseña.
        
        if(strpos($EmailUsuario,'@admin.com') !== false){
            $TipoDeUsuario = 2; // ES ADMINISTRADOR
        }
        else{
            $TipoDeUsuario = 1;
        }

        $query = "INSERT INTO usuario(nombre,apellido,email,dni,contraseña,tipoUsuario) VALUES ('$NombreUsuario','$ApellidoUsuario','$EmailUsuario','$DNIUsuario','$ContraseñaUsuarioHashed','$TipoDeUsuario')";
        $result = mysqli_query($conn,$query);

        if($result === TRUE){ // Si no hay error en el pedido, que te salte una alerta con registro exitoso.
            
            print <<< END
                <script type="text/javascript">
                alert("Registro exitoso!");
                </script>
            END;
            header("Location: ingreso.php?register=success");
            exit();
        }
        
        else{
            print <<< END
            <script type="text/javascript">
            alert("Registro fallido. Intente nuevamente");
            </script>
            END;
            exit();
        }
    }
?>