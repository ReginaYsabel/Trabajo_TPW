<?php 
//Inicio de Sesion
session_start(); 
//Conexion a la base de datos
include "conexion.php";

//Actualizamos el estado del usuario
$id = $_SESSION['idUsuario']; 
$sql = "UPDATE usuarios SET enLinea = 0 WHERE idUsuario = $id";
mysqli_query($conn, $sql);
$sqlE = "UPDATE usuarios SET Estado = 'Desactivo' WHERE idUsuario = $id";
mysqli_query($conn, $sqlE);

//Destruimos la sesion
session_unset();
session_destroy();

//Redireccionamos a la pagina de incio de sesion
header("Location: account.php");