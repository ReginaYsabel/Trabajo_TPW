<?php 
session_start();
//Conexion a la base de datos
include "conexion.php";

//Verificamos la si la variable esta definida
if(isset($_POST['num_item'])){
    $i=0;

    //Decodifica la cookie en formato json para obtener el array
    $sku = json_decode($_COOKIE['sku']) ;  

    //Obtenemos el costo total de los prouctos del carrito
    $pago = $_POST['pago_final'];

    //Insertamos en el campo total de la tabla ordenel costo total
    $sql= "INSERT INTO orden (Total) VALUE('$pago')"; 
    mysqli_query($conn, $sql);

    //Obtenemos la orden creada y colocamos el valor en una cookie
    $sql1= "SELECT MAX(idOrden) as idOrden FROM orden";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result1);
    $idOrden = $row['idOrden'];
    setcookie("idOrden",$idOrden);

    //Obtenemos la cantidad de cada producto
    $cantidad =  $_POST['pago_final'];  

    //Recorremos el array anteriormente obtenido
    foreach ($sku as $value) {
        //Seleccionamos el registro de cada articulo segun su codigo
        $sql2= "SELECT * FROM articulo WHERE idArticulo =$value";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $costo = $row2['Precio'];
        $idArticulo = $row2['idArticulo'];
        $cantidad = $_POST['num_item'][$i];

        //Insertamos nuevos registros en la tabla detalle_orden para cada producto del carrito
        $sql3= "INSERT INTO detalle_orden (Cantidad, Costo, idArticulo, idOrden) VALUES($cantidad,'$costo','$idArticulo','$idOrden')"; 
        $i++;
        mysqli_query($conn, $sql3);

        //Redireccionamos al siguiente paso del proceso de compra
        if(isset($_SESSION['idUsuario'])){
            header('Location: user_connect.php');
        }                   
        else{
            header('Location: information_cart.php');
        }      
    };   
}
else{
    //Redireccionamos a la pagina anterior
    header('Location:' . getenv('HTTP_REFERER'));
}
?>

