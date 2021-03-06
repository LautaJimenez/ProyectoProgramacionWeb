<?php 

    include("conexion.php"); // Se incluye la conexión
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
            
            header("Location: ingreso.php?register=success");
            exit();
        }
        else{
            header("Location: ingreso.php?register=failed");
            exit();
        }
    }
?>