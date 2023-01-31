<?php 
//  $destino = "salinasmatias100@gmail.com";
//  $nombre = $_POST['name'];
//  $telefono = $_POST['phone'];
//  $email = $_POST['email'];
//  $message = $_POST['message'];
//  $asunto = "prueba"
//  $header ="envio desde local";
//  $mensajecompleto = "\n nombre:". $nombre "\n". "email:". $email. "\n" 
//  . "telefono:" .$telefono . "\n". "message: " . $message;
//  mail($destino,$asunto,$mensajecompleto,$header);
//  header('Location: index.html'); 

 
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];

$header = 'From: salinasmatias100@gmail.com' . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Reply-to: salinasmatias100@gmail.com" ."\r\n";
$mail = @mail($email,$asunto,$message,$header);
if($mail){
	echo "<h4>mail enviado!</h4>";
}


 ?>
 

 