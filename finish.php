<?php 
session_name('user');
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pago - PetLand</title>
    <link rel="stylesheet" tydive="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
    <script src="filtro.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Incluimos el header -->
    <?php include "banner.php";?>

    <!-- Pago Finalizado -->
    <section class="finish">
        <div class="div_img">
            <img src="imagenes/success.png" alt="success">
        </div>

       <div class="order_confirmed">
           <h1>Pago exitoso</h1>
           <p>
               Tu pedido esta confirmado. Recibira un correo electronico
               de confirmacion de pedido en breve <br> con la fecha prevista de sus articulos.
            </p>
            <a href="index.php">Seguir Comprando</a>
       </div>    
    </section>
    <!-- Incluimos el footer -->
    <?php include "footer.php";?>
    <script>
        //Funcion para colocar el numero de productos en el carrito          
        add_item();
        //Funcion para rellenar la ruta   
        update("banner_cart","Pago","/Pago");              
    </script>   
</body>
</html>