<?php
    if(isset($_POST['email'])) {

        $interes = $_POST['interes'];
        $interes = strtolower($interes);

        // Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
        if($interes == "belleza") {
            $email_to = "belleza@ozonocare.com.mx";
        } else {
            $email_to = "salud@ozonocare.com.mx";
        }
        $email_subject = "Contacto desde el sitio web";

        // Aquí se deberían validar los datos ingresados por el usuario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];

        if($nombre == "" ||
           $email == "" ||
           $telefono == "" ||
           $interes == "" ||
           $mensaje == "") {
                echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
                echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
                die();
        }

        $email_message = "Detalles del formulario de contacto:\n\n";
        $email_message .= "Nombre: " . $nombre . "\n";
        $email_message .= "E-mail: " . $email . "\n";
        $email_message .= "Telefono: " . $telefono . "\n";
        $email_message .= "Interesado/a en: " . $interes . "\n"
        $email_message .= "Mensaje: " . $mensaje . "\n\n";

        //Ahora se envía el e-mail usando la función mail() de PHP
        mail($email_to, $email_subject, $email_message);

        header ("Location: confirmacion.php");
    }
?>
