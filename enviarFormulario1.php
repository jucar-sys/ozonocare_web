<?php
 
if($_POST) {
    $nombre = "";
    $email = "";
    $telefono = "";
    $interes = "";
    $mensaje = "";
     
    if(isset($_POST['nombre'])) {
      $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
      echo "<p>.:: NOMBRE ::.</p>";
      echo $nombre;
    }
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        echo "<p>.:: EMAIL ::.</p>";
        echo $email;
    }
     
    if(isset($_POST['telefono'])) {
        $telefono = filter_var($_POST['telefono'], FILTER_VALIDATE_INT);
        echo "<p>.:: TELEFONO ::.</p>";
        echo $telefono;
    }

    if(isset($_POST['interes'])) {
        $interes = $_POST['interes'];
        echo "<p>.:: INTERES ::.</p>";
        echo $interes;
      }
     
    if(isset($_POST['mensaje'])) {
        $mensaje = htmlspecialchars($_POST['mensaje']);
        $mensaje = wordwrap($mensaje, 70, "\r\n");
        echo "<p>.:: MENSAJE ::.</p>";
        echo $mensaje;
    }
     
    if($interes == "belleza") {
        $recipient = "belleza@ozonocare.com.mx";
        echo "<p>.:: BELLEZA ::.</p>";
        echo $recipient;
    }
    else {
        $recipient = "jucar.sys@gmail.com";
        echo "<p>.:: SALUD ::.</p>";
        echo $recipient;
    }

    $asunto = "URGENTE WEB";
    echo "<p>.:: ASUNTO ::.</p>";
    echo $asunto;


   /*  $email_message = "Detalles del formulario de contacto:\n\n";
        $email_message .= "Nombre: " . $nombre . "\n";
        $email_message .= "E-mail: " . $email . "\n";
        $email_message .= "Telefono: " . $telefono . "\n";
        $email_message .= "Interesado/a en: " . $interes . "\n";
        $email_message .= "Mensaje: " . $mensaje . "\n\n";
        echo "<p>.:: MENSAJE COMPLETO ::.</p>";
        echo $email_message; */

    if(mail($recipient, $asunto, $mensaje, $headers)) {
        echo "<p>Thank you for contacting us, $nombre. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }

    /* header ("Location: index.php"); */
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>
