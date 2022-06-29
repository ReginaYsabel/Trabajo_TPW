<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Petland - Nosotros</title>
    <link rel="stylesheet" tydive="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
    <script src="filtro.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Incluimos el header -->
    <?php include "banner.php";?> 

    <section class="about">
        <!-- Quienes somos -->
        <div class="who">
            <img src="imagenes/about_dog.jpg" alt="dog">
            <div class="who_info parf1">
                <h3>¿Quienes somos?</h3><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui,
                    non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis,
                    sapien dui mattis dui, non pulvinar lorem felis nec erat.Lorem ipsum dolor
                    sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>

        <!-- Eleccion para todos -->
        <div class="who">
            <div class="who_info parf2">
                <h3>Eleccion para todos</h3><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nunc maximus, nulla ut commodo sagittis, sapien dui mattis dui,
                    non pulvinar lorem felis nec erat. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nunc maximus, nulla ut commodo sagittis,
                    sapien dui mattis dui, non pulvinar lorem felis nec erat.Lorem ipsum dolor
                    sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <img src="imagenes/about_cat.jpg" alt="cat">
        </div>
    </section>

    <!-- Porque elegirnos -->
    <section class="reason">
        <h3>¿PORQUE ELEGIRNOS?</h3>
        <div class="icons">

            <!-- Envios -->
            <div class="shipping_icon">
                <i class="fas fa-shipping-fast"></i>
                <h2>ENVIOS GRATIS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.</p>
            </div>

            <!-- Pagos -->
            <div class="pay">
                <i class="fas fa-pager"></i>
                <h2>PAGOS 100 %SEGUROS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.</p>
            </div>

            <!-- Compra-->
            <div class="buy">
                <i class="fas fa-clock"></i>
                <h2>COMPRA LAS 24 HORAS</h2>
                <p>Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.</p>
            </div>
        </div>
    </section>

    <!-- Nuestro equipo -->
    <section class="inst">
        <b><h3>Nuestro Equipo</h3></b>
        <div class="imgs">  

            <!-- Miembro #1 -->
            <div class="member">
                <img src="imagenes/tamara-bellis-baKsNGGKZ3w-unsplash.jpg" alt="girl">
                <h4>Sara Rojas <br> Gerente comercial</h4>
            </div>
            
            <!-- Miembro #2 -->
            <div class="member">
                <img src="imagenes/cristian-castillo-HcoOFfOH8S8-unsplash.jpg" alt="guy">
                <h4>Manuel Gomez <br> Gerente de Marketing</h4>
            </div>

            <!-- Miembro #3 -->
            <div class="member">
                <img src="imagenes/tran-mau-tri-tam-Fst4SmneRU4-unsplash.jpg" alt="girl">
                <h4>Nicole Perez <br> Gerente de Calidad</h4>
            </div>          
        </div>
    </section>

    <!-- Incluimos el footer -->
    <?php include "footer.php";?>

    <script>
        //Funcion para colocar el numero de productos en el carrito     
        add_item();

        //Funcion para rellenar la ruta   
        update("banner_about","Nosotros","/Nosotros");              
    </script>
</body>
</html>