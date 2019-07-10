    <!-------------------- INICIO HTML Y HEAD --------------------->
<?php
    $titulo = "Producto";
    // Validar URL para evitar ataques o bromas
    if (isset( $_GET['id'] ) ) {
      if ( filter_var( $_GET['id'], FILTER_VALIDATE_INT ) ) {
        // Aprovechando la validación y si es correcta de una vez asignamos el ID a una variable
        $producto_id = $_GET['id'];
      } else {
        header('Location: 404.php');
        exit;
      }
    }

    include 'templates/head.php';
    include 'includes/funciones.php';
?>
    <!------------------------------------------------------------->

<body>

    <!-------------------------- NAVBAR-OCULTA ------------------------>
    <div class="header-scroll py-2">
        <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
            
            <!--Para mostrar el botón del menu responsive--> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal" aria-label="Mostrar navegación"><!--Para mostrar el botón del menu responsive--> 
            <span class="navbar-toggler-icon"></span>
            </button>

            <!--Para mostrar el enlace con nombre del sitio con menú responsive--> 
            <a href="index.php" class="navbar-brand d-md-none">
                <img src="img/azulRecurso1.png" alt="Ozonocare">
            </a>

            <!--Menú normal y responsive--> 
            <div class="container d-block">
                <div class="row">

                    <div class="col-md-10 col-12">
                        <div class="collapse navbar-collapse w-100" id="nav_principal"><!--Para mostrar u ocultar el menu responsive--> 
                            <ul class="nav nav-justified w-100 flex-column flex-sm-row">

                                <!-- Saber en que página nos encontramos para destacar en el nav -->
                                <?php
                                    $archivo = basename( $_SERVER['PHP_SELF'] );
                                    $pagina = str_replace( '.php', '', $archivo );
                                ?>

                                <li class="nav-item <?php echo 'index' === $pagina ? 'active' : '' ?>">
                                    <a class="nav-link" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item <?php echo 'nosotros' === $pagina ? 'active' : '' ?>">
                                    <a class="nav-link" href="nosotros.php">Nosotros</a>
                                </li>
                                <li class="nav-item <?php echo 'servicios' === $pagina ? 'active' : '' ?>">
                                    <a class="nav-link" href="servicios.php">Servicios</a>
                                </li>
                                <li class="nav-item <?php echo 'productos' === $pagina ? 'active' : '' ?>">
                                <a class="nav-link" href="productos.php">Productos</a>
                                </li>
                                <li class="nav-item <?php echo 'contacto' === $pagina ? 'active' : '' ?>">
                                    <a class="nav-link" href="contacto.php">Contacto</a>
                                </li>
                            </ul>
                        </div><!--.collapse-->
                    </div> <!-- .col-md-10 -->

                    <div class="col-md-2 d-none d-md-block logo-nav">
                        <a href="index.php" class="">
                            <img src="img/Recurso 1.png" class="img-fluid" alt="Logo Ozonocare">
                        </a>
                    </div>
                </div> <!-- .row -->

            </div><!--.container-->
            
        </nav>
    </div><!--.navegacion-->
    <!-------------------------------------------------------------->


    <!--------------------- HERO -------------------->
    <div class="container-fluid p-0 d-none d-md-block">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <h2 class="text-uppercase d-none d-md-block py-2 pr-3 pl-5">Producto</h2>
        </div>
      </div>
    </div>
    <!-------------------------------------------------------------->


    <!-------------------------- NAVBAR --------------------------->
    <?php
        include 'templates/navbar.php';

        //Imprime el error en pantalla en case de existir
      /* ini_set("display_errors", "1");
      error_reporting(E_ALL); */

        // Declaramos e inicializamos una variable con lo que retorne la consulta
        $producto = obtenerProductoSalud($producto_id);

        if ($producto->num_rows > 0) {
        //Recorremos la variable productos que contiene la consulta
        while($producto_obtenido = $producto->fetch_assoc() ) {
        /* echo "<pre>";
        var_dump($producto_obtenido);
        echo "</pre>"; */
    ?>
    <!------------------------------------------------------------->


    <!--------------------- CONTENIDO-PRINCIPAL -------------------->
    <div class="container py-4">
       <div class="row">
          
          <main class="col-lg-8">
            <img  class="img-fluid" src="img/<?php echo $producto_obtenido['imagen_completa']; ?>.jpeg" alt="<?php echo $producto_obtenido['nombre']; ?>">
              <h2 class="d-block d-md-none text-center titulo">
                <span class=" d-block">Descripción de </span><?php echo $producto_obtenido['nombre']; ?>
              </h2>
              <p>
              <?php echo $producto_obtenido['descripcion']; ?>
              </p>
          </main><!-- .contenido-principal -->

          <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="sidebar">
              <h2 class="text-uppercase text-center my-4">
                Descripción
              </h2>
              <p class="text-center"><?php echo $producto_obtenido['descripcion_corta']; ?></p>
            </div><!-- .sidebar -->
          </aside>

       </div><!-- .row -->
    </div><!-- .container -->
    <!------------------------------------------------------------>


    <!------------- FOOTER, SCRIPTS y CIERRE DE HTML -------------->
    <?php
    }
    } else {
      header('Location: 404.php');
    }
        include 'templates/footer.php';
    ?>
    <!------------------------------------------------------------->