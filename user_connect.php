<?php 
//Inicio de Sesion
session_start(); 
include "conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Petland - Informacion de Contacto</title>
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
        <section class="shopping_cart">
            <!-- Formulario para ingresar datos de envio -->
            <form action="insert_user.php" method="post">
                <!--Verificamos si la variable error esta definida-->
                <?php 
                if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
                <!-- Informacion de contacto -->
                <div class="contact_inf2">
                    <h2>Información de Contacto</h2>
                </div>

                <!-- Informacion -->
                <div class="contact_img">
                    <img src="imagenes/user.png" alt="user">
                    <p>
                        <?php echo $_SESSION['Nombre']?>, <?php echo $_SESSION['Apellido']?> (<?php echo $_SESSION['Email']?>)
                        <a href="salir.php">Salir</a>
                    </p>
                </div>

                <!-- Nombres -->
                <div class="address">
                    <h2>Dirección de envío</h2>
                    <div class="names">
                        <div class="shipping_address name">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" value =  "<?php echo $_SESSION['Nombre']?>">
                        </div>
                        <div class="shipping_address lastname">
                            <label for="lstname">Apellido</label>
                            <input type="text" name="lstname" id="lstname" value =  "<?php echo $_SESSION['Apellido']?>">
                        </div>
                    </div>

                    <!-- Direccion -->
                    <div class="shipping_address ad">
                        <label for="_address">Dirección</label>
                        <input type="text" name="address" id="_address">
                    </div>

                    <!-- Ciudad y Region -->
                    <div class="city">
                        <div class="shipping_address city1">
                            <label for="city">Ciudad</label>
                            <input type="text" name="city" id="city">
                        </div>
                        <div class="shipping_address city1">
                            <label for="region">Región</label>

                            <input type="text" name="region" id="region">
                        </div>

                        <!-- Codigo Postal -->
                        <div class="shipping_address city1">
                            <label for="postal">Codigo postal</label>
                            <input type="text" name="postal" id="postal">
                        </div>
                    </div>

                    <!-- Telefono -->
                    <div class="shipping_address telef">
                        <label for="phone">Telefono</label>
                        <input type="text" name="phone" id="phone">
                    </div>

                    <!-- Enviar formulario -->
                    <button type="submit">Continuar con el envío</button>

                    <!-- Footer -->
                    <footer class="footer_cart">
                        <p>Todos los derechos reservados PetLand</p>
                    </footer>
                </div>           
            </form>
        </section>
        <!-- Seccion #2 -->
        <section class="buy_item" id="buy_item"></section>        
    </section> 

    <!-- Incluimos el archivo que nos permitira mostrar los productos-->
    <?php include "insert.php";?>   
    <script> 
        //Funcion para colocar el numero de productos en el carrito   
        add_item();
        //Funcion para rellenar la ruta   
        update("banner_cart","Envio","/Envio"); 
        //Funcion para mostrar el total del carrito
        agregar_total();                    
    </script>
</body>

</html>
