<?php
// Para enviar correos mediante php y ajax (no funciona aun :(   ))
/* header('Access-Control-Allow-Origin: *'); 
$email = $_POST['email'];
$para = 'jc@baits.mx';
$asunto = 'Contacto desde el sitio WEB';
if (!$_POST){
?>
    algo
<?php
} else {
    $cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Consulta: " . $_POST["mensaje"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 

    $headers  = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-MSMail-Priority: Normal\r\n";
    $headers .= "X-Mailer: php\r\n";
    $headers .= "From: \"".$_POST["nombre"]."\" <".$email.">\r\n";
    
    $resp = mail($para, $asunto, $cuerpo, $headers);

    echo json_encode(array(
        'message' => sprintf('El mensaje se ha enviado!'),
        'datos' => array(
            'nombre' => $_POST['nombre'],
            'email' => $email,
            'mensaje' => $_POST['mensaje'],
        ),
        'respuesta' => $resp
    ));
} */
?>