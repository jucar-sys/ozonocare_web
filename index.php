    <!-------------------- INICIO HTML Y HEAD --------------------->
<?php
    $titulo = "Inicio";
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
                <img src="img/azulRecurso 1.png" alt="Ozonocare">
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


    <!-------------------------- HEADER --------------------------->
    <header class="encabezado text-center img-fluid">
        
        <div class="texto-encabezado py-md-5 mt-md-5">
            <div class="container">
                <h1 class="display-4 wow pulse">Ozonoterapia Ciudad de México</h1>
                <p class="wow pulse subtitPrincipal" data-wow-delay=".2s">Dale un respiro a tu cuerpo, <span style="font-weight:bold">dale ozono</span> para sentirte mejor</p>
                <a data-scroll href="#" data-toggle="modal" data-target="#modalContacto" class="wow pulse btn btn-primary btn-lg" aria-hidden="true" data-wow-delay=".2s">Solicita información</a>
                <div class="wow pulse telIndex" data-wow-delay=".6s">
                    <p><span style="font-weight: bold; font-size: 1.4rem">Contáctanos</span><br>
                        <span>Telefono Matriz (División del Norte): 3683-7545 </span> 
                        <br>
                        <span>Telefono Sucursal (Águilas Pilares): 044-55-3485-1539 </span> </p>
                </div>
            </div> <!-- .container -->

        </div> <!-- .texto-encabezado -->
        
        <div class="flecha-bajar">
            <a data-scroll href="#ozono-info"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div> <!-- .flecha-bajar -->

    </header> <!-- .encabezado -->
    <!------------------------------------------------------------->

    <!-------------------------- NAVBAR --------------------------->
    <?php
        include 'templates/navbar.php';
    ?>
    <!------------------------------------------------------------->

    <!--------------------------- SLIDER -------------------------->
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div id="slider" class="carousel slide" data-ride="carousel">
    
                  <ol class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                  </ol>
    
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="img-fluid d-block" src="img/Duda.jpg">
                      <div class="carousel-caption d-none d-md-block carousel-info">
                        <h2>Nuevas instalaciones</h2>
                        <p>Ven y conoce nuestras nuevas instalaciones</p>
                        <a href="nosotros.php" class="btn btn-primary">Ver mas</a>
                      </div>
                    </div><!-- .carousel-item -->
                    <div class="carousel-item">
                      <img class="img-fluid d-block" src="img/Duda.jpg">
                      <div class="carousel-caption d-none d-md-block carousel-info">
                          <h2>Masajes relajantes</h2>
                          <p>Ven y aprovecha el 20% de descuento en masajes</p>
                          <a href="servicios.php" class="btn btn-primary">Ver mas</a>
                        </div>
                    </div><!-- .carousel-item -->
                    <div class="carousel-item">
                      <img class="img-fluid d-block" src="img/Duda.jpg">
                      <div class="carousel-caption d-none d-md-block carousel-info">
                          <h2>2X1 en todos los servicios</h2>
                          <p>2X1 en todos los servicios todo el més de mayo</p>
                          <a href="servicios.php" class="btn btn-primary">Ver mas</a>
                        </div>
                    </div><!-- .carousel-item -->
                  </div><!-- .carousel-inner -->
    
                  <a href="#slider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Slider Previo</span>
                  </a>
    
                  <a href="#slider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Slider Siguiente</span>
                  </a>
    
                </div><!-- #slider -->
            </div><!-- .col-12 -->
      </div><!-- .row-->
    </div>
    <!------------------------------------------------------------->


    <!------------------------- SLOGAN ---------------------------->
    <section class="nuevo-sitio py-3">
      <h1 class="text-center text-capitalize mt-4 titulo">
        <span>Ozono</span>care
      </h1>
      <p class="text-center mt-4">Dale un respiro a tu cuerpo y descubre <br>la belleza natural con ozonocare</p>
    </section>
    <!-------------------------------------------------------------->


    <!------------------------ SERVICIOS ---------------------------->
    <div class="container">
      <div class="row">

        <div class="col-12 col-md-4 text-center mb-4">
          <div class="imagen-servicio">
            <img src="img/Duda.jpg" alt="Servicio Uno" class="img-fluid">
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 servicio-info pt-3">
                <h2 class="text-center py-3 titulo">
                  <span class="d-block">Servicios de </span>ozono médico
                </h2>
                <a href="nosotros.php" class="btn btn-secondary btn-block text-uppercase py-2">Leér mas</a>
              </div>
            </div>
          </div><!-- .imagen-servicio-->
        </div><!-- .grid-->

        <div class="col-12 col-md-4 text-center mb-4">
          <div class="imagen-servicio">
            <img src="img/Duda.jpg" alt="Servicio Uno" class="img-fluid">
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 servicio-info pt-3">
                <h2 class="text-center py-3 titulo">
                  <span class="d-block">Servicios de </span>belleza
                </h2>
                <a href="servicios.php" class="btn btn-secondary btn-block text-uppercase py-2">Leér mas</a>
              </div>
            </div>
          </div><!-- .imagen-servicio-->
        </div><!-- .grid-->

        <div class="col-12 col-md-4 text-center mb-4">
          <div class="imagen-servicio">
            <img src="img/Duda.jpg" alt="Servicio Uno" class="img-fluid">
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 servicio-info pt-3">
                <h2 class="text-center py-3 titulo">
                  <span class="d-block">Nuestros </span>productos
                </h2>
                <a href="productos.php" class="btn btn-secondary btn-block text-uppercase py-2">Leér mas</a>
              </div>
            </div>
          </div><!-- .imagen-servicio-->
        </div><!-- .grid-->

      </div><!-- .row-->
    </div><!-- .container-->
    <!--------------------------------------------------------------->
    

    <!-------------------------- VENTAS --------------------------->
    <div class="py-5 my-5">
        
    </div>
    <!------------------------------------------------------------->


    <!-------------------------- PARALAX -------------------------->
    <div class="py-5 my-5">
        
    </div>
    <!------------------------------------------------------------->


    <!------------------- BLOG Y TESTIMONIALES -------------------->
    <!------------------------------------------------------------->


    <!------------- FOOTER, SCRIPTS y CIERRE DE HTML -------------->
    <?php
        include 'templates/footer.php';
    ?>
    <!------------------------------------------------------------->