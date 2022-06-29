<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Petland - Alimento</title>
    <link rel="stylesheet" tydive="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
    <script src="filtro.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php include "dog_products.php";?>
    <script>    
        //Funcion para colocar el numero de productos en el carrito   
        add_item();
        //Funcion para rellenar la ruta 
        update("banner_dog","Alimento","/Perros/Alimento");
        //Seleccionamos una categoria del select
        document.getElementById('categorias').options.selectedIndex = 1;  
        //Funcion para mostrar los productos filtrados
        cambio();            
    </script>
</body>
</html>