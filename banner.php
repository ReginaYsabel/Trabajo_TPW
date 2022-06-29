<header id="banner">
    <nav>
        <!-- Logo de la tienda -->
        <div class="logo">
            <a href="index.php"><img src="imagenes/pet.png"></a>
        </div>

        <!-- Menu de navegacion -->
        <div class="menu">
            <ul>
                 <!-- Pagina inicio -->
                <li class= "opc"><b><a href="index.php">Inicio</a></b></li>

                <!-- Pagina de la seccion Perros -->
                <li class= "opc dog" ><b><a href="dog.php">Perros</a> 

                <!-- Menu desplegable de la seccion Perros -->
                <ul class="submenu1">
                    <li><b><a href="Dog_Food.php">Alimento</a></b></li>
                    <li><b><a href="Dog_Care.php">Cuidado e higiene</a></b></li>
                    <li><b><a href="Dog_Acc.php">Accesorios</a></b></li>
                </ul>
                </li>
                <!-- Pagina de la seccion Gatos -->
                <li class= "opc cat" ><b><a href="cat.php">Gatos</a></b>

                <!-- Menu desplegable de la seccion Gatos -->
                <ul class="submenu2 ">
                    <li><b><a href="Cat_Food.php">Alimento</a></b></li>
                    <li><b><a href="Cat_Care.php">Arena y Cuidado</a></b></li>
                    <li><b><a href="Cat_Acc.php">Accesorios</a></b></li>
                </ul>
                </li>
                <!-- Pagina de la seccion Nosotros -->
                <li class= "opc"><b><a href="about.php">Nosotros</a></b></li>

                <!-- Pagina de la seccion Contacto -->
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
            <form class="ul_dropdown" action="cart.php" method="post" name="form_cart">
                <ul class="ul_item" id="ul_item">
                </ul>             
                <div class="final">           
                    <div class="total_final ">
                        <span >Total</span>
                        <input type="text" id="pago_final" name ="pago_final" readonly value="0.00">
                    </div>
                    <div class="total_final ">
                        <!-- Permite actualizar el carrito -->
                        <a href="javascript:void(0)" onclick="actualizar()" class="continue">Actualizar carrito</a>

                        <!-- Permite realizar el proceso de compra -->
                        <a href="javascript:document.form_cart.submit()" class="pay_cart">Pagar pedido</a>
                    </div>               
                </div>
            </form>                               
        </div>
    </div>

    <!-- Ruta de la pagins-->
    <div class="prod_pet" id="prod_pet">
        <h1 id="h1_cat"></h1>
        <div class="ruta">
            <p>Inicio</p>
            <p class="pet_p" id="pet_p"></p>
        </div>
    </div>
</header>

