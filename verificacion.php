<?php 
//Inicio de Sesion
session_start(); 

//Conexion a la base de datos
include "conexion.php";

//Verficamos la declaracion de las variables
if (isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['re_password'])) {

	$email = $_POST['mail'];
	$pass = $_POST['password'];
	$re_pass = $_POST['re_password'];
	$name = $_POST['name'];
    $apellido = $_POST['apellido'];

	//Verificamos si los campos estan vacio
	if (empty($email)) {
		header("Location: account.php?error2=Email requerido");
	    exit();
	}
	else if(empty($pass)){
        header("Location: account.php?error2=Contraseña requerida");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: account.php?error2=Confirmacion de contraseña requerida");
	    exit();
	}

	else if(empty($name)){
        header("Location: account.php?error2=Nombre requerido");
	    exit();
	}

    else if(empty($apellido)){
        header("Location: account.php?error2=Apellido requerido");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: account.php?error2=Las contraseñas no coinciden");
	    exit();
	}

	else{
		//Verificamos si existe el usuario
	    $sql = "SELECT * FROM usuarios WHERE Email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: account.php?error2=El usuario ya existe");
	        exit();
		}
		else {
			//Insertamos los datos ingresados
           	$sql2 = "INSERT INTO usuarios (Email, Contrasenia, Nombre, Apellido,Registro) VALUES('$email', '$pass', '$name','$apellido','Registrado')";
           	$result2 = mysqli_query($conn, $sql2);
           	if ($result2) {
           	 	header("Location: account.php?correcto=Cuenta creada exitosamente");
	         	exit();
           	}
		   	else {
	           	header("Location: account.php?error2=Error desconocido");
		        exit();
           }
		}
	}
	
}
else{
	header("Location: account.php");
	exit();
}