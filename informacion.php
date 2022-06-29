<?php 
//Inicio de sesion
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PetLand - Informacion</title>
    <link rel="stylesheet" tydive="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
        <script src="filtro.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Incluimos el header -->
    <?php include "banner.php";?>

    <!-- Informacion de la cuenta -->
    <section class="details">
        <h1>Información de la Cuenta</h1>

        <!-- Formulario para actualizar la cuenta -->
        <form action="informacion_edit.php" class="form_acc" method="post">

         <!--Verificamos si la variable error esta definida-->
            <?php 
            if (isset($_GET['error'])) { ?>       
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <!--Verificamos si la variable correcto esta definida-->
            <?php if (isset($_GET['correcto'])) { ?>
                    <p class="correcto"><?php echo $_GET['correcto']; ?></p>
            <?php } ?>

            <!--Entrada de datos -->
            <label for="nwname">Nombre</label>           
            <input type="text" name="nwname" id="nwname" value="<?php echo $_SESSION['Nombre'];?>"><br>
            <label for="nwapellido">Apellido</label>                  
            <input type="text" name="nwapellido" id="nwapellido" value="<?php echo $_SESSION['Apellido'];?>"><br>
            <label for="nwmail">Email</label>                   
            <input type="text" name="nwmail" id="nwmail" value="<?php echo $_SESSION['Email'];?>"><br>  

            <!-- Agrupamos elementos -->
            <fieldset>
                <legend>Cambiar contraseña</legend>
                <label for="nwpassword">Nueva contraseña (dejelo en blanco para guardar sin cambios) </label>
                <input type="password" name="nwpassword" id="nwpassword"><br>   
                <label for="nw_password">Confirmar nueva contraseña</label>      
                <input type="password" name="nw_password" id="nw_password" ><br>
            </fieldset>  

            <!-- Enviar formulario -->            
            <button type="submit" >Guardar cambios</button>                 
        </form>
    </section>
    <script>     
        //Funcion para colocar el numero de productos en el carrito      
        add_item();
        //Funcion para rellenar la ruta  
        update("banner_account","Cuenta","/Cuenta/Informacion de la cuenta");              
    </script> 
</body>
</html>