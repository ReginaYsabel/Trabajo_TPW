<?php 
//Inicio de Sesion
session_start(); 

//Conexion a la base de datos
include "conexion.php";

//Obtenemos el registro del articulo
$sql = "SELECT * FROM articulo WHERE idArticulo='$sku'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['Nombre'];
$price= $row['Precio'];
$img = $row['imagen'];
$categ_row = $row['idCategoria'];
$sql2 = "SELECT categoria.Nombre, categoria.Subcategoria FROM categoria INNER JOIN articulo ON categoria.idCategoria = articulo.idCategoria WHERE categoria.idCategoria= $categ_row";
$result2= mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$categ = $row2['Nombre'];
$cat=$row2['Subcategoria'];
?>