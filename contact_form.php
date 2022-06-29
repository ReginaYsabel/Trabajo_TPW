<?php 
//Mensaje para contactar a la tienda
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$header = "From: noreply@example.com"."\r\n";
$header.= "Reply-to: noreply@example.com"."\r\n";

mail($email,$subject,$message,$header);
header("Location:contact.php");