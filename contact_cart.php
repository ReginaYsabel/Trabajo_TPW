<?php 
//Conexion a la abse de datos
include "conexion.php";

//Obtenemos la cookie con el idOrden
$idOrden = $_COOKIE['idOrden'];

//Obtenemos el id direccion de envio mediante el id orden
$sql = "SELECT idDireccion_envio as idDireccion_envio FROM orden WHERE idOrden=$idOrden";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$idDireccion_envio= $row['idDireccion_envio'];

//Obtenemos el registro de la tabla direccion de envio
$sql2= "SELECT * FROM direccion_envio WHERE idDireccion_envio = $idDireccion_envio";
$result2 = mysqli_query($conn, $sql2);
$row2= mysqli_fetch_assoc($result2);
$direccion = $row2['Direccion'];
$distrito= $row2['Distrito'];
$dep= $row2['Departamento'];
$cod = $row2['codigo_postal'];

//Obtenemos el id del usuario mediante el id orden
$sql3= "SELECT idUsuario as idUsuario FROM orden WHERE idOrden = $idOrden";
$result3 = mysqli_query($conn, $sql3);
$row3= mysqli_fetch_assoc($result3);
$idUsuario = $row3['idUsuario'];

//Obtenemos el email del usuario 
$sql4= "SELECT Email as Email FROM usuarios WHERE idUsuario = $idUsuario";
$result4 = mysqli_query($conn, $sql4);
$row4= mysqli_fetch_assoc($result4);
$user_mail= $row4['Email'];
?>
