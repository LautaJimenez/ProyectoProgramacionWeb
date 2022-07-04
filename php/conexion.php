<?php 
    $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'proyecto'
    );


    if(isset($conn)){
        echo 'Se conecto la base de datos';
    }
?>