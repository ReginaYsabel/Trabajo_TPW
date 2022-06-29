<?php 
session_name('user');
//Inicio de Sesion
session_start(); 
//Conexion a la base de datos
include "conexion.php";

//Verficamos variables
if (isset($_POST['nwmail']) && isset($_POST['nwpassword']) && isset($_POST['nwname']) && isset($_POST['nw_password']) && isset($_POST['nwapellido'])) {

	$nwmail = $_POST['nwmail'];
	$nwname = $_POST['nwname'];	
	$nwapellido = $_POST['nwapellido'];
	$id = $_SESSION['idUsuario'];
	$nwpass = $_POST['nwpassword'];
	$nw_pass = $_POST['nw_password'];

    //Verificamos si los campos estan vacio
	if(empty($nwname)){
        //Enviamos variable a la pagina informacion.php
        header("Location: informacion.php?error=Nombre requerido");
	    exit();
	}

	else if(empty($nwapellido)){
        header("Location: informacion.php?error=Apellido requerido");
	    exit();
	}
	else if (empty($nwmail)) {
		header("Location: informacion.php?error=Email requerido");
	    exit();
	}
	
	else{
        //Verificamos si el nuevo email ya existe
	    $sql = "SELECT * FROM usuarios WHERE email='$nwmail' ";
		$result = mysqli_query($conn, $sql);
		$rowm = mysqli_fetch_assoc($result);
		if (mysqli_num_rows($result) > 0 && $rowm['idUsuario'] != $_SESSION['idUsuario'] ) {
            //Enviamos variable a la pagina informacion.php
			header("Location: informacion.php?error=El email ya existe");
	        exit();
		}		
		else {
            //Actualizacion de datos excepto la contraseña
            if(empty($nwpass)){
                $sql2 = "UPDATE usuarios SET Email = '$nwmail', Nombre= '$nwname', Apellido='$nwapellido' WHERE idUsuario=$id";
                mysqli_query($conn, $sql2);
                $sql3 = "SELECT * FROM usuarios WHERE idUsuario=$id ";
                $result2 = mysqli_query($conn, $sql3);
                if (mysqli_num_rows($result2) === 1) {
                    $row = mysqli_fetch_assoc($result2);
                    $_SESSION['Email'] = $row['Email'];
                    $_SESSION['Nombre'] = $row['Nombre'];
                    $_SESSION['idUsuario'] = $row['idUsuario'];				
                    $_SESSION['Apellido'] = $row['Apellido'];   
                    //Enviamos variable a la pagina informacion.php                    
                    header("Location: informacion.php?correcto=Cuenta actualizada exitosamente");
                    exit();    
                 }
                else {
                    header("Location: informacion.php?error=Error desconocido");
                    exit();                
                }
            }
            else{
                //Verificamos la confirmacion de la contraseña
                if(empty($nw_pass)){
                    header("Location: informacion.php?error=Confirmacion de contraseña requerida");
                    exit();
                }

                //Verificamos si las contraseñas coinciden
                else if($nwpass !== $nw_pass){
                    header("Location: informacion.php?error=Las contraseñas no coinciden");
                    exit();
                }
                else{
                    //Actualizamos los datos del usuario incluida la contraseña
                    $sql2 = "UPDATE usuarios SET Email = '$nwmail',Contrasenia = '$nwpass', Nombre= '$nwname', Apellido='$nwapellido' WHERE idUsuario=$id ";
                    mysqli_query($conn, $sql2);
                    $sql3 = "SELECT * FROM usuarios WHERE idUsuario=$id ";
                    $result2 = mysqli_query($conn, $sql3);
                    if (mysqli_num_rows($result2) === 1) {
                        $row = mysqli_fetch_assoc($result2);
						$_SESSION['Email'] = $row['Email'];
						$_SESSION['Nombre'] = $row['Nombre'];
						$_SESSION['idUsuario'] = $row['idUsuario'];				
						$_SESSION['Apellido'] = $row['Apellido'];
                        header("Location: informacion.php?correcto=Cuenta actualizada exitosamente");
                        exit();        
                     }
                    else {
                        header("Location: informacion.php?error=Error desconocido");
                        exit();
                    }
                }
            }  
        }  
	}   
}

else{
    //Redireccionamos a la misma pagina
	header("Location: informacion.php");
	exit();
}



