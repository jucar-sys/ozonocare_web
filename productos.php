    <!-------------------- INICIO HTML Y HEAD --------------------->
<?php
    $titulo = "Productos";
    include 'templates/head.php';
    include 'includes/funciones.php'
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
          <h2 class="text-uppercase d-none d-md-block py-2 pr-3 pl-5">Productos</h2>
        </div>
      </div>
    </div>
    <!-------------------------------------------------------------->


    <!-------------------------- NAVBAR --------------------------->
    <?php
        include 'templates/navbar.php';
    ?>
    <!------------------------------------------------------------->


    <!--------------------- CONTENIDO-PRINCIPAL -------------------->
    <div class="container pt-4">
       <div class="row">
          
          <main class="contenido-principal">
              
            <h2 class="d-block d-md-none text-center titulo">
              <span class="d-block">Conoce nuestros </span>productos
            </h2>

            <div class="row mt-4">
              <div class="card-columns productos">

              <?php
                // Declaramos e inicializamos una variable con lo que retorne la consulta
                $productos = obtenerProductos(2);

                // Revisamos que retorna la funcion de obtenerProductos
                /* echo "<pre>";
                var_dump($productos);
                echo "</pre>"; */

                //Recorremos la variable productos que contiene la consulta
                while ($producto = $productos->fetch_assoc() ) {
                  /* echo "<pre>";
                  var_dump($producto);
                  echo "</pre>"; */
              ?>

                <!-- PRODUCTO HTML -->
                <div class="card">
                  <a href="producto.php?id=<?php echo $producto['id']; ?>">
                    <img src="img/<?php echo $producto['imagen_mini']; ?>.png" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                    <div class="card-body">
                      <h4 class="card-title text-center text-uppercase"><?php echo $producto['nombre']; ?></h4>
                      <p class="card-text text-uppercase"><?php echo $producto['descripcion_corta']; ?></p>
                      <p class="lead precio text-center">$<?php echo $producto['precio']; ?></p>
                    </div><!-- .card-body -->
                  </a>   
                </div><!-- .card -->
  
               <?php
                //Cerramos el While hasta acá
                }
               ?>
  
              </div><!-- .card-columns -->
      
            </div><!-- .row -->
            
          </main><!-- .contenido-principal -->

          

       </div><!-- .row -->
    </div><!-- .container -->
    <!------------------------------------------------------------>


    <!------------- FOOTER, SCRIPTS y CIERRE DE HTML -------------->
    <?php
        include 'templates/footer.php';
    ?>
    <!------------------------------------------------------------->