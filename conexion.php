<?php
//Conexion a la base de datos
$lname= "localhost"; 
$user= "root";
$pass = "";
$db_name = "venta";
$conn = mysqli_connect($lname, $user, $pass, $db_name);
if (!$conn) {
	echo "Conexion fallida";
}