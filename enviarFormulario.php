<?php

require("class.phpmailer.php");
require("class.smtp.php");
 
if($_POST) {
    $nombre = "";
    $email = "";
    $telefono = "";
    $interes = "";
    $mensaje = "";
     
    if(isset($_POST['nombre'])) {
      $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['telefono'])) {
        $telefono = $_POST['telefono'];
    }

    if(isset($_POST['interes'])) {
        $interes = $_POST['interes'];
      }
     
    if(isset($_POST['mensaje'])) {
        $mensaje = htmlspecialchars($_POST['mensaje']);
        // $mensaje = wordwrap($mensaje, 70, "\r\n");
    }
     
    if($interes == "belleza") {
        $recipient = "belleza@ozonocare.com.mx";
    }
    else {
        $recipient = "salud@ozonocare.com.mx";
    }

    $asunto = "URGENTE: Contacto desde sitio web";

    // Datos de la cuenta de correo utilizada para enviar via SMTP
    $smtpHost = "send.one.com";  // Dominio alternativo brindado en el email de alta 
    $smtpUsuario = "admin@ozonocare.com.mx";  // Mi cuenta de correo
    $smtpClave = "password";  // Mi contrasenia

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Port = 587; 
    $mail->IsHTML(true); 
    $mail->CharSet = "utf-8";
    $mail->Timeout=30;

    // VALORES A MODIFICAR //
    $mail->Host = $smtpHost; 
    $mail->Username = $smtpUsuario; 
    $mail->Password = $smtpClave;

    $mail->From = $smtpUsuario; // Email desde donde se envía el correo, debe ser del dominio del smtp
    $mail->FromName = "Sitio web: {$nombre}";
    $mail->AddAddress($recipient); // Esta es la direccion a donde enviamos los datos del formulario

    $mail->Subject = $asunto; // Este es el titulo del email.
    $mensajeHtml = nl2br($mensaje);
    $mail->Body = "
    <html> 

    <body> 

    <h2>¡Hola!, a {$nombre} le interesa un servicio.</h2>

    <h3>Información recolectada de {$nombre}:</h3>
    <hr>
    <p><b>Nombre:</b> {$nombre}</p>
    <p><b>Email:</b> {$email}</p>
    <p><b>Telefono:</b> {$telefono}</p>
    <p><b>Interesado/a en:</b> {$interes} </p>
    <hr>
    <p><b>Mensaje:</b> {$mensaje}</p>
    <hr>
    <h3>Ponte en contacto con {$nombre} antes de que pierda el interés</h3>
    <p>Formulario enviado desde:</p>
    <p><b>www.ozonocare.com.mx</b></p>

    </body> 

    </html>

    <br />"; // Texto del email en formato HTML
    $mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
    // FIN - VALORES A MODIFICAR //

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $exito = $mail->Send();
    $intentos=1; 
    while ((!$exito) && ($intentos < 5)) {
	    sleep(5);
     	//echo $mail->ErrorInfo;
     	$exito = $mail->Send();
     	$intentos=$intentos+1;	
	
   }
 
		
   if(!$exito)
   {
	echo "Problemas enviando correo electrónico a ".$email;
	echo "<br/>".$mail->ErrorInfo;	
   }
   else
   {
	echo "Mensaje enviado correctamente";
	header ("Location: index.php");
   } 
     
} else {
    echo '<p>Completa todos los campos o revisa la información ingresada</p>';
    exit();
}
 
?>