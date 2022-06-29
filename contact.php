<?php 
session_name('user');
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" tydive="test/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
    <script src="filtro.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Incluimos el header -->
    <?php include "banner.php";?>

    <section class="contact">      
        <!-- Informacion de contacto -->
        <div class="information">
            <h3>Informacion</h3>
            <div class="inform">
            <i class="fas fa-map-marker-alt"></i>
            <p>Cercado de Lima, Peru</p>
            </div>

            <div class="inform">
            <i class="fas fa-phone"></i>
            <p>987 314 624 - (01)687 8514</p>
            </div>

            <div class="inform">
            <i class="fas fa-envelope"></i>
            <p>PetLand.store@gmail.com</p>
            </div>           
        </div>

        <!-- Formulario para contactar a la tienda -->
        <div class="send">
            <form class = "form_cont" action="contact_form.php" method="post">
                <h2>Contactanos</h2>
                <!-- Entrada de datos -->
                <input type="text" name="email" placeholder="Ingrese email" required><br>
                <input type="text" name="name" placeholder="Ingrese nombre" required><br>
                <input type="text" name="subject" placeholder="Ingrese asunto" required><br>
                <textarea rows="5" name="message" placeholder="Ingrese mensaje" required></textarea>

                <!-- Enviar formulario -->
                <button type="submit">Enviar</button>
            </form>
        </div>  
    </section>

    <!-- Mapa de la tienda -->
    <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62429.291949081286!2d-77.08024244996818!3d-12.055163724241236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8db1e539667%3A0x4f45538aa07bda29!2sCercado%20de%20Lima!5e0!3m2!1ses-419!2spe!4v1645058275249!5m2!1ses-419!2spe" 
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section> 

    <!-- Incluimos el footer -->
    <?php include "footer.php";?>
    <script>        
        //Funcion para colocar el numero de productos en el carrito   
        add_item();
        //Funcion para rellenar la ruta   
        update("banner_contact","Contacto","/Contacto");              
    </script>   
</body>
</html>