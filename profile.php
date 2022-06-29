<?php 
//Inicio de sesion
session_start();

//Verificar datos de session
if (isset($_SESSION['idUsuario']) && isset($_SESSION['Email'])) {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PetLand - Detalles de la cuenta</title>
        <link rel="stylesheet" tydive="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
        <script src="filtro.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
    <!-- Incluimos el header -->
    <?php include "banner.php";?>

        <!-- Opciones de la cuenta -->
        <section class="profile">
            <h1 >Bienvenido(a), <?php echo $_SESSION['Nombre']; ?></h1>

            
            <div class="sesion">
                <!-- Informacion -->
                <a href="informacion.php">
                    <i class="far fa-user"></i>
                    <h4>Informacion</h4>
                </a>

                <!-- Ordenes -->
                <a href="">
                    <i class="fas fa-shopping-bag"></i>
                    <h4>Ordenes</h4>
                </a>

                <!-- Salir-->
                <a href="salir.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <h4>Cerrar Sesion</h4>
                </a>
            </div>
        </section>
        <!-- Incluimos el footer -->
        <?php include "footer.php";?>
        <script> 
            //Funcion para colocar el numero de productos en el carrito          
            add_item();
            //Funcion para rellenar la ruta   
            update("banner_account","Cuenta","/Detalles de la cuenta");              
        </script>                  
    </body>
</html>
<?php 
}else{
     header("Location: account.php");
     exit();
}
 ?>
