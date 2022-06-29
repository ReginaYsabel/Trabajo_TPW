<?php  
    //Obtenemos el costo total del carrito de la tabla orden mediante la cookie
    $idOrden = $_COOKIE['idOrden'];
    $sql= "SELECT Total as Total FROM orden WHERE idOrden =$idOrden";
    $result = mysqli_query($conn, $sql);
    $row= mysqli_fetch_assoc($result);
    $total = $row['Total'];

    //Realizamos la consulta para obtener los productos del carrito
    $sql1= "SELECT *  FROM detalle_orden WHERE idOrden =$idOrden";
    $result1 = mysqli_query($conn, $sql1);

    //Recorremos las consultas 
    while ($fila = mysqli_fetch_assoc($result1)){
        $idArticulo = $fila['idArticulo'];
        $price = $fila['Costo'];
        $cant = $fila['Cantidad'];
        $sql2= "SELECT imagen as imagen FROM articulo WHERE idArticulo =$idArticulo";
        $result2 = mysqli_query($conn, $sql2);
        $row2= mysqli_fetch_assoc($result2);
        $img = $row2['imagen'];
        $sql3= "SELECT Nombre as Nombre FROM articulo WHERE idArticulo =$idArticulo";
        $result3 = mysqli_query($conn, $sql3);
        $row3= mysqli_fetch_assoc($result3);
        $name = $row3['Nombre'];
        ?>
        <script type="text/javascript">
            //Agregamos los productos del carrito a la pagina
            agregar_section("<?php echo $img;?>","<?php echo $name;?>","<?php echo $price;?>","<?php echo $cant;?>");
        </script>
        <?php 
        }
?>