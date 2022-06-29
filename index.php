<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PetLand</title>
    <link rel="stylesheet" tydive="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
    <script src="filtro.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <header class="banner_index">
        <nav>
            <!-- Logo de la tienda -->
            <div class="logo">
                <a href="index.php"><img src="imagenes/pet.png"></a>
            </div>

            <!-- Menu de navegacion -->
            <div class="menu">
                <ul>
                    <li class= "opc"><b><a href="index.php">Inicio</a></b></li>
                    <li class= "opc dog" ><b><a href="dog.php">Perros</a>                  
                    <ul class="submenu1">
                        <li><b><a href="Dog_Food.php">Alimento</a></b></li>
                        <li><b><a href="Dog_Care.php">Cuidado e higiene</a></b></li>
                        <li><b><a href="Dog_Acc.php">Accesorios</a></b></li>
                    </ul>
                    </li>
                    <li class= "opc cat" ><b><a href="cat.php">Gatos</a></b>
                    <ul class="submenu2 ">
                        <li><b><a href="Cat_Food.php">Alimento</a></b></li>
                        <li><b><a href="Cat_Care.php">Arena y Cuidado</a></b></li>
                        <li><b><a href="Cat_Acc.php">Accesorios</a></b></li>
                    </ul>
                </li>
                    <li class= "opc"><b><a href="about.php">Nosotros</a></b></li>
                    <li class= "opc"><b><a href="contact.php">Contacto</a></b></li>
                </ul>
            </div>

            <!-- Permite intercambiar las paginas en relacion de si la sesion esta iniciada o no-->
            <a href="<?php if(session_status() != PHP_SESSION_NONE){echo "profile.php";}
                        else{echo "account.php";}?>"><i class="far fa-user"></i></a>

            <!-- Muestra el carrito de compras -->     
            <a href="javascript:void(0)"  onclick="mostrar()">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart" id="cart">0</span>
            </a>           
        </nav>

        <!-- Oculta el carrito de compras -->
        <div class="container_cart" id="abrir" onclick="ocultar()">
            <div class="container_dropdown">
                <div class="header_cart">
                    <h3>Resumen de compra</h3>
                </div>

                <form class="ul_dropdown">
                    <ul class="ul_item" id="ul_item"></ul>              
                    <div class="final">           
                        <div class="total_final">
                            <span >Total</span>
                            <span id="pago_final">0.00</span>
                        </div>

                    <!-- Actualiza el carrito de compras -->
                        <div class="total_final ">
                            <button onclick="actualizar()" class="continue">Actualizar carrito</button>
                            <button >Pagar pedido</button>
                        </div>               
                    </div>
                </form>                
            </div>
        </div>
    </header>

    <!-- Introduccion sobre la tienda-->
    <section class="intro">
        <img src="imagenes/intro.png" alt="pet">
        <div class="resumen">
            <h1>Bienvenido a PetLand</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et exercitationem possimus at, deleniti dolor laboriosam,
                quae eum qui eius odit debitis labore expedita! Cum dolores,
                dolorum adipisci dolore maiores tempore.Lorem ipsum dolor sit
                amet consectetur adipisicing elit.
                Et exercitationem possimus at, deleniti dolor laboriosam,
                quae eum qui eius odit debitis labore expedita! Cum dolores,
                dolorum adipisci dolore maiores tempore.
            </p>
        </div>
    </section>

    <section class="pet">

        <!-- Acceso a la categoria de Perros -->
        <div class="info">
            <img id="dog" src="imagenes/perro.png" alt="dog">
            <div class="res">
                <h4>Perros</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="dog.php">Ver más</a>
            </div>
        </div>

        <!-- Acceso a la categoria de Gatos -->
        <div class="info">
            <img id="cat" src="imagenes/gato.png" alt="cat">
            <div class="res">
                <h4>Gatos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="cat.php">Ver más</a>
            </div>
        </div>
    </section>

    <!-- Productos populares -->

    <section class="productos">
        <h1>Productos Populares</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Et exercitationem possimus at, deleniti dolor laboriosam,
            quae eum qui eius odit debitis labore expedita! Cum dolores.</p>

        <div class="compras">
            <!-- Producto #1 -->
            <div class="item">
                <div class="prod">
                    <img src="imagenes/cat_alimento/hills_sd_adult.png" width="80%"  alt="food">
                    <div class="titulo">
                        <a href="hills-sd-adult-care.php" >Agregar al carrito</a>
                    </div>
                </div>

                <div class="inf">
                    <h2>Hills SD Adult Optimal Care Original</h2>
                    <h3>S/80.99</h3>
                </div>           
            </div>

             <!-- Producto #2 -->
            <div class="item">
                <div class="prod">
                    <img src="imagenes/cat_acc/claws_paws_gimnasio.png" width="100%" alt="tree">
                    <div class="titulo">
                        <a href="claws-paws-gimnasio-3-pisos-beige.php">Agregar al carrito</a>
                    </div>
                </div>

                <div class="inf">
                    <h2>Claws & Paws Gimnasio 3 Pisos Beige</h2>
                    <h3>S/120.99</h3>
                </div>
            </div>

             <!-- Producto #3 -->
            <div class="item">
                <div class="prod">
                    <img src="imagenes/cat_cuidado/cat_zone_banio_seco.png" width="50%" alt="shampoo">
                    <div class="titulo">
                        <a href="cat-zone-banio-seco.php">Agregar al carrito</a>
                    </div>
                </div>

                <div class="inf">
                    <h2>Cat Zone <br> Baño Seco 300ml</h2>
                    <h3>S/35.99</h3>
                </div>
            </div>

             <!-- Producto #4 -->
            <div class="item">
                <div class="prod">
                    <img src="imagenes/cat_acc/mpets_cleo_cat.png" width="95%" alt="toy">
                    <div class="titulo">
                        <a href="Mpets-Cleo-Cat-Pink-Varita.php">Agregar al carrito</a>
                    </div>
                </div>

                <div class="inf">
                    <h2>Mpets Cleo Cat Pink <br> Varita</h2>
                    <h3>S/18.99</h3>
                </div>
            </div>

             <!-- Producto #5 -->
            <div class="item">
                <div class="prod">
                    <img src="imagenes/dog_cuidado/pet_life_shampoo.png" width="100%" alt="shampoo">
                    <div class="titulo">
                        <a href="Pet-Life-Shampoo-Paico-Antipulgas.php">Agregar al carrito</a>
                    </div>
                </div>

                <div class="inf">
                    <h2>Pet Life Shampoo Paico Antipulgas 0.5Kg/1Und</h2>
                    <h3>S/25.99</h3>
                </div>
            </div>

             <!-- Producto #6 -->
            <div class="item">
                <div class="prod">
                    <img src="imagenes/dog_acc/kong_comfort_elephant.png" width="78%" alt="toy">
                    <div class="titulo">
                        <a href="KONG-Comfort-Kiddos-Elephant-X-Small.php">Agregar al carrito</a>
                    </div>
                </div>

                <div class="inf">
                    <h2>KONG Comfort Kiddos Elephant X-Small</h2>
                    <h3>S/36.99</h3>
                </div>
            </div>

             <!-- Producto #7 -->
            <div class="item">
                <div class="prod">
                    <img src="imagenes/dog_alimento/canbo_cachorro_cordero.png" width="90%" alt="food">
                    <div class="titulo">
                        <a href="Canbo-Cachorro-Cordero-razas.php">Agregar al carrito</a>
                    </div>
                </div>

                <div class="inf">
                    <h2>Canbo Cachorro Cordero razas med/gran</h2>
                    <h3>S/60.99</h3>
                </div>
            </div>

             <!-- Producto #8 -->
            <div class="item" >
                <div class="prod">
                    <img src="imagenes/dog_acc/chuckit_indoor.png" width="70%" alt="toy">
                    <div class="titulo">
                        <a href="Chuckit-Indoor-Ball.php">Agregar al carrito</a>
                    </div>
                </div>

                <div class="inf">
                    <h2>Chuckit! Indoor<br>Ball</h2>
                    <h3>S/21.99</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Incluimos el footer -->
    <?php include "footer.php";?> 
        
    <!-- Funcion para colocar el numero de productos en el carrito -->
    <script>
       add_item();
    </script>  
</body>
</html>