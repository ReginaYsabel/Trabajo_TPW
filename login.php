<?php 
session_start(); 
//Conexion a la base de datos
include "conexion.php";

//Verificar datos
if (isset($_POST['mail']) && isset($_POST['password'])) {
	$email = $_POST['mail'];
	$pass = $_POST['password'];

	//Verificamos si los campos estan vacios
	if (empty($email)) {
		header("Location: account.php?error1=Email requerido");
		exit();
	}
	else if(empty($pass)){
		header("Location: account.php?error1=Contraseña requerida");
		exit();
	}
	else{	
		//Verificamos si el email esta registrado	
		$sql = "SELECT * FROM usuarios WHERE Email='$email'";
		$result = mysqli_query($conn, $sql);

		//Declaramos variables de sesion
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['idUsuario'] = $row['idUsuario'];
			$id = $_SESSION['idUsuario']; 
			$_SESSION['intentos'] = $row['intentos'];
			$limit = $_SESSION['intentos'];
			$_SESSION['num_ingr'] = $row['num_ingr'];
			$ingreso = $_SESSION['num_ingr'];
			
			//Verificamos si coinciden el email y la contraseña
			if ($row['Email'] === $email && $row['Contrasenia'] === $pass) {				
				$_SESSION['Email'] = $row['Email'];
				$_SESSION['Nombre'] = $row['Nombre'];
				$_SESSION['Apellido'] = $row['Apellido'];
				$sqlu = "UPDATE usuarios SET enLinea = 1 WHERE idUsuario = $id";
				mysqli_query($conn, $sqlu);	
				$sqlEs = "UPDATE usuarios SET Estado = 'Activo' WHERE idUsuario = $id";
				mysqli_query($conn, $sqlEs);
				$ingreso = $ingreso + 1;
				$sqln = "UPDATE usuarios SET num_ingr = $ingreso WHERE idUsuario = $id";
				mysqli_query($conn, $sqln);
				//Redireccionamos s los detalles de su cuenta
				header("Location: profile.php");
				exit();
			}
			else{
				//Aumentamos los limites de intento 
				$limit = $limit + 1;
				//Actualizamos los intentos y estado del usuario
				$sqlI = "UPDATE usuarios SET intentos = $limit WHERE idUsuario = $id";
				mysqli_query($conn, $sqlI);	
				$sqlE = "UPDATE usuarios SET Estado = 'Bloqueado' WHERE idUsuario = $id";
				mysqli_query($conn, $sqlE);		
				if($limit >= 3){
					header("Location: account.php?error1=Numero de intentos excedido&limit=3");
					exit();
				}	
				else{
					header("Location: account.php?error1=Contraseña incorrecta");
					exit();
				}	
			}
		}
		else{	
			header("Location: account.php?error1=Usuario o contraseña incorrecto");
			exit();
		}
	}	
}
else{
	header("Location: account.php");
	exit();
}
?>



