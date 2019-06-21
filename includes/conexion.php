<?php

try {
    // mysqli(host, user, pass, bd)
    $bd = new mysqli('localhost', 'root', 'root', 'ozonocare');
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}

// En caso de error de conexion
/* if ($bd->ping()) {
    echo 'Todo en orden con la bd';
} else {
    echo $bd->connect_error;
} */