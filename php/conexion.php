<?php 
    
    function connectDB(){

        $conn = mysqli_connect('localhost','root','','proyecto');
        
        return $conn;
    }

?>