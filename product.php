<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $name;?></title>
    <link rel="stylesheet" tydive="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61a356f6ac.js" crossorigin="anonymous"></script>
    <script src="filtro.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Incluimos el header -->
    <?php include "banner.php";?>  

    <!-- Informacion del producto-->
    <section class="pet_product">
        <div class="item pet_product" >
            <div class="prodpet">
                <img src="<?php echo $img;?>" id="image_product" alt="product">
            </div>
        </div>

        <div class="info_petproduct">
            <div class="intro_producto">
                <h2 id="name_product"><?php echo $name;?></h2>
                <h3 id="price_product" class="price_product"><?php echo $price;?></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Vero natus quas, nemo accusamus sequi veniam veritatis
                    tempore hic dignissimos eaque quod
                </p>
            </div>

            <!-- Agregar o disminuir el numero de productos -->            
            <div class="form_producto">
                <div class="quantity"> 
                    <label for="cantidad">Cantidad</label>                  
                    <input type="text" value="1" size="4" class="cantidad cart_cantidad" id="cantidad">                   
                    <div class="spans">
                        <!-- Incrementar numero -->
                        <span class="plus" onclick="incremento()">+</span>

                        <!-- Disminuir numero-->
                        <span class="minus" onclick="decremento()">-</span>
                    </div>
                </div>

                <!-- Agregar al acarrito-->
                <button onclick="add_cart()" class="agregar" id="quantity_cart">Agregar al carrito</button>
            </div>

            <!-- Descripcion dek producto-->
            <div class="descrip">
                <span class="sku_categoria">
                    SKU :
                    <span class="span_sub" id="span_sub"><?php echo $sku;?></span>
                </span>
                <span class="sku_categoria">
                    Categoria :
                    <span class="span_sub"><?php echo $cat;?></span>
                </span>                
            </div>                            
        </div>     
    </section>
    
    <!-- Detalles del producto -->
    <section class="details">
        <hr color="#e0e0e0">

        <!-- Descripcion - Reseñas-->
        <div class="opinion">
            <h4 id="ing" onclick="log1()">Descripcion</h4>
            <h4 id="cre" onclick="log2()">Reseñas</h4>
        </div>

        <!-- Descripcion -->
        <div class="log1" id="log1">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Vero natus quas, nemo accusamus sequi veniam veritatis
                tempore hic dignissimos eaque quod.Lorem ipsum dolor sit
                amet consectetur adipisicing elit.Vero natus quas, nemo
                accusamus sequi veniam veritatistempore hic dignissimos
                eaque quod. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Vero natus quas, nemo accusamus sequi veniam veritatis
                tempore hic dignissimos eaque quod.Lorem ipsum dolor sit
                amet consectetur adipisicing elit.Vero natus quas, nemo
                accusamus sequi veniam veritatistempore hic dignissimos
                eaque quod.
            </p>
        </div>

        <!-- Reseñas -->
        <div class="log2" id="log2">
            <h1>Reseñas</h1>
            <p>Aun no hay reseñas.</p>
        </div>
    </section>
    <!-- Incluimos el footer -->
    <?php include "footer.php";?>
    <script>     
        //Funcion para colocar el numero de productos en el carrito      
        add_item();
        //Funcion para colocar banner
        var b = banner("<?php echo $categ;?>")   
        //Funcion para rellenar la ruta  
        update(b,"Productos","/"+"<?php echo $cat;?>");
    </script>
</body>
</html>