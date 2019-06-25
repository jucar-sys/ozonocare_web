<!-- CACHEAR LAS PAGINAS PARA MAS PERFORMANCE -->
<?php
/*     // Definir un nombre para cachear
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace('.php', '', $archivo);

    // Definir el archivo para cachear, puede ser html o php
    // En el caso de los productos hay que cachear por producto
    if (isset($_GET['id'])) {
        $archivoCache = 'cache/'.$pagina."-".$_GET['id'].'.html';
    } else {
        $archivoCache = 'cache/'.$pagina.'.html';
    }

    //Se define el tiempo que estará almacenado en cache
    $tiempo = 86400; // 24 horas

    // Revisar si el archivo existe y es valido aun y si se cumple esto mostrarlo en en navegador
    if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
        include($archivoCache);
        exit;
    }

    // Si el archivo no existe o el tiempo ya vencio generar uno nuevo
    ob_start(); */
?>
<!-- ----------------------------------------- -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Juan Carlos García O.">
    <meta name="keywords" content="ozonocare, ozonoterapia, ozono médico, clinica, belleza, terapias, terapia, oxígeno">
    <meta name="description" content="Clínica de Belleza y Ozonoterapia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="application/x-font-otf" href="fonts/gothamrounded-bold.otf">
    <link rel="application/x-font-otf" href="fonts/gothamrounded-book.otf">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">

    <title><?php echo $titulo?> | Clínica de belleza y bienestar</title>

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '697583487344404');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=697583487344404&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</head>