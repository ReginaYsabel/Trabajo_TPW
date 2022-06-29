<?php 
//Inicio de Sesion
session_start(); 
include "conexion.php";
include "contact_cart.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Metodo de envio - PetLand</title>
    <link rel="stylesheet" tydive="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
    <script src="filtro.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- Incluimos el header -->
    <?php include "banner.php";?>
    <!-- Dividimos la pagina en dos secciones --> 
    <section class="div_sections">
        <!-- Seccion #1 --> 
        <section class="shipping">
            <form action="payment.php">
            <div class="shipping_container">
                 <!-- Contacto --> 
                <div class="shipping_contact contact1">
                    <label for="fill">Contacto</label>
                    <div><?php echo $user_mail;?></div>
                    <a href="information_cart.php">Cambiar</a>
                </div>

                 <!-- Envio --> 
                <div class="shipping_contact">
                    <label for="fill">Enviar a </label>
                    <div><?php echo $direccion;?>, <?php echo $distrito;?>, <?php echo $dep;?>, <?php echo $cod;?></div>
                    <a href="information_cart.php">Cambiar</a>
                </div>
            </div>

             <!-- Metodo --> 
            <div class="shipping_inf">
                <h2>Metodo de envío</h2>                   
            </div>
            <div class="shipping_price">
                <div class="radio_option">
                    <input type="radio" name="radio" checked>
                    <label for="radio">Standard</label>
                </div>               
                <label for="radio">S/15.99</label>
            </div>
            <button type="submit" class="continue_payment">Continuar con el pago</button>
            </form>

            <!-- Footer --> 
            <footer class="footer_cart2">
                <p>Todos los derechos reservados PetLand</p>
            </footer>
        </section>

         <!-- Seccion #2 --> 
        <section class="buy_item" id="buy_item">
        </section>   
    </section>

    <!-- Incluimos el archivo que nos permitira mostrar los productos-->
    <?php include "insert.php";?>   
    <script> 
        //Funcion para colocar el numero de productos en el carrito
        add_item();
        //Funcion para rellenar la ruta
        update("banner_cart","Metodo de envio","/Metodo de envio"); 
        //Funcion para mostrar el total del carrito
        agregar_total(); 
        //Actualizar el envio
        update_total();                     
    </script>
</body>

</html>