<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PetLand - Cuenta</title>
    <link rel="stylesheet" tydive="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
    <script src="filtro.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body >
    <!-- Incluimos el header -->
    <?php include "banner.php";?>

    <!-- Iniciar sesion - Registro -->
    <section class="account">
        <div class="option">
            <h4 id="ing" onclick="log1()">Ingresar </h4>
            <h4>|</h4>
            <h4 id="cre" onclick="log2()">Crear cuenta</h4>
        </div>

        <!-- Iniciar sesion -->
        <div id="log1">
            <form action="login.php" class="form_acc" method="post">
                <!--Verificamos si la variable error esta definida-->
     	       <?php 
                if (isset($_GET['error1'])) { ?>
     		        <p class="error"><?php echo $_GET['error1']; ?></p>
     	        <?php } ?>

                 <!--Verificamos si la variable correcto esta definida-->
                <?php if (isset($_GET['correcto'])) { ?>
                    <p class="correcto"><?php echo $_GET['correcto']; ?></p>
                <?php } ?>
   
                <!-- Entrada de datos del usuario -->
                <input type="text" name="mail" placeholder="Email"><br>    	
                <input type="password" name="password" placeholder="Contraseña"><br>

                <!-- Enviar formulario -->
                <button id="boton" type="submit" onclick="button()">Login</button>              		
            </form>
        </div>

        <!-- Registro de usuario-->
        <div id="log2">
            <form action="verificacion.php" class="form_acc" method="post">

                <!--Verificamos si la variable error2 esta definida-->
                <?php 
                if (isset($_GET['error2'])) { ?>
     		        <p class="error"><?php echo $_GET['error2']; ?></p>
     	        <?php } ?>

                 <!--Verificamos si la variable corecto esta definida-->
                <?php if (isset($_GET['correcto'])) { ?>
                    <p class="correcto"><?php echo $_GET['correcto']; ?></p>
                <?php } ?>

                <!-- Entrada de datos del usuario -->
                <input type="text" name="name" placeholder="Nombre"><br>
                <input type="text" name="apellido" placeholder="Apellido"><br>
                <input type="text" name="mail" placeholder="Email"><br>   	
                <input type="password" name="password" placeholder="Contraseña"><br>         
                <input type="password" name="re_password" placeholder="Confirmar contraseña"><br>

                <!-- Enviar formulario -->
                <button type="submit" >Sign Up</button>             
            </form>
            
            <!-- Funcion para denegar el acceso al tercer intento de ingresar una cuenta erronea -->
            <script>
                function button(){ 
                    var b = <?php if (isset($_GET['limit'])) { echo $_GET['limit'];} ?>;
                    if(b == 3){
                        document.getElementById("boton").disabled="true";
                    }            
                }
            </script>
        </div>
    </section>

    <!-- Incluimos el footer -->
    <?php include "footer.php";?>

    <script> 
        //Funcion para colocar el numero de productos en el carrito          
        add_item();

        //Funcion para rellenar la ruta   
        update("banner_account","Cuenta","/Cuenta");              
    </script> 
</body>
</html>