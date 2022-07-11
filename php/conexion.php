<?php 
    
    function connectDB(){

        $conn = mysqli_connect('localhost','root','','proyecto');

        if(!$conn){
            echo "Error: No se pudo conectar a la base de datos";
            die;
        }
        return $conn;
    }

?>