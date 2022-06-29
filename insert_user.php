<?php 
//Inicio de Sesion
session_start(); 

//Conexion a la base de datos
include "conexion.php";

//Verificamos las variables
if (isset($_POST['mail']) && isset($_POST['name']) && isset($_POST['lstname']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['region']) && isset($_POST['postal']) && isset($_POST['phone'])){

        $email = $_POST['mail'];
        $name = $_POST['name'];
        $lstname = $_POST['lstname'];
        $address  = $_POST['address'];
        $city  = $_POST['city'];
        $region  = $_POST['region'];
        $postal  = $_POST['postal'];
        $phone = $_POST['phone'];
        //Verificamos si los campos estan vacio
        if (empty($email)) {
            header("Location: information_cart.php?error=Email requerido");
            exit();
        }
        else if(empty($name)){
            header("Location: information_cart.php?error=Nombre requerido");
            exit();
        }
        else if(empty($lstname)){
            header("Location: information_cart.php?error=Apellido requerido");
            exit();
        }

        else if(empty($address)){
            header("Location: information_cart.php?error=Direccion requerida");
            exit();
        }

        else if(empty($city)){
            header("Location: information_cart.php?error=Direccion requerida");
            exit();
        }

        else if(empty($region)){
            header("Location: information_cart.php?error=Region Requerida");
            exit();
        }
        else if(empty($postal)){
            header("Location: information_cart.php?error=Codigo Postal Requerido");
            exit();
        }
        else if(empty($phone)){
            header("Location: information_cart.php?error=Telefono Requerido");
            exit();
        }
        else{
            //Obtener el valor del id de la Orden
            $idOrden = $_COOKIE['idOrden'];

            //Insertamos los datos del usuario
            $sql = "INSERT INTO usuarios (Email, Nombre, Apellido,Registro) VALUES('$email', '$name', '$lstname','No registrado')";
            mysqli_query($conn, $sql);
            $sql2 = "SELECT MAX(idUsuario) as idUsuario FROM usuarios";
            $result2 = mysqli_query($conn, $sql2);
            $row = mysqli_fetch_assoc($result2);
            $idUsuario = $row['idUsuario'];

            //Insertamos los datos del envio
            $sql3 = "INSERT INTO direccion_envio (Direccion, Distrito, Departamento, codigo_postal, Telefono) VALUES('$address', '$city', '$region', $postal, '$phone')";
            mysqli_query($conn, $sql3);
            $sql4 = "SELECT MAX(idDireccion_envio) as idDireccion_envio FROM direccion_envio";
            $result4 = mysqli_query($conn, $sql4);
            $row4 = mysqli_fetch_assoc($result4);
            $idDireccion_envio= $row4['idDireccion_envio'];
            $sql5 = "UPDATE orden SET idUsuario =$idUsuario ,idDireccion_envio = $idDireccion_envio WHERE idOrden=$idOrden";
            mysqli_query($conn, $sql5);

            //Redireccionamos a la siguiente pagina del proceso
            header("Location: shipping.php");                   
        }	
}
else{
	header("Location: information_cart.php");
	exit();
}