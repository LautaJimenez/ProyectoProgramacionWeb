<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="stylesheet" href="../css/Carrito.css">
    <link rel="shortcut icon" href="../img/libros.png">
</head>

<body>

<?php include("header.php")?>


    <div class = "titulo"><h1>Carrito</h1></div>

    <div class = "libro" id = "libro1">
        <img id = "libro" src="../img/libro5.png" alt="">
        <div class = "info">
            <h3>El duelo</h3>
            <p>Gabriel Rolón</p>
            <p class = "precio">$650</p>
        </div>
        <img onclick = "Ocultar()" id = "borrar" src="../img/x.png" alt="">      
    </div>

    <div class = "libro" id = "libro2">
        <img src="../img/libro3.png" alt="">
        <div class = "info">
            <h3>Los guardianes</h3>
            <p>Josh Grishman</p>
            <p class = "precio">$650</p>
        </div>
        <img onclick = "Ocultar1()" id = "borrar" src="../img/x.png" alt="">  
    </div>

    <div class = "libro" id = "libro3" styl>
        <img src="../img/libro2.png" alt="">
        <div class = "info">
            <h3>Despierta</h3>
            <p>Lorena Pronsky</p>
            <p class = "precio">$650</p>
        </div>
        <img onclick = "Ocultar2()" id = "borrar" src="../img/x.png" alt="">  
    </div>

    <div class = "finalizarCompra">
        <a href="/ProyectoWeb/php/compraFinalizada.php" class = "btn">Finalizar compra</a>
    </div>
    

    <?php include("footer.php")?>
    
    <script src="/ProyectoWeb/js/carrito.js"></script>
</body>
</html>