    <!-------------------- INICIO HTML Y HEAD --------------------->
<?php
    $titulo = "Nosotros";
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
          <h2 class="text-uppercase d-none d-md-block py-2 pr-3 pl-5">Nosotros</h2>
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

    <div class="container">
      <h2 class="d-block text-center titulo pt-3">
        <span class="d-block">Conoce sobre </span>nosotros
      </h2>
      <p class="text-justify pt-3 py-md-4">En <span class="txt-gris">Ozonocare</span> nos comprometemos en brindar todos los beneficios de la ozonoterapia, de manera efectiva y segura. Contamos con especialistas altamente calificados en la materia, y equipo con tecnología de punta, en donde nuestro principal objetivo es reparar y optimizar la función celular.</p>
      <div class="text-center">
        <img src="img/Duda_Hero.jpg" alt="Nosotros" class="img-nosotros img-fluid mb-4">
      </div>
    </div>

    <div class="container pb-md-4 mb-md-4">
       <div class="row">

          <main class="col-lg-8">

              <div id="nosotros" class="text-justify">

                <!-- CARD 1 -->
                <div class="card mt-4 mt-lg-0">
                  <div class="card-header" id="mision">
                    <h2 class="mb-0">
                      <a class="btn btn-link d-block text-left pl-4" data-toggle="collapse" data-target="#descripcion1" aria-expanded="true" aria-controls="descripcion1">
                        Misión
                      </a>
                    </h2>
                  </div><!-- #mision -->
                  <div id="descripcion1" class="collapse show" aria-labelledby="mision" data-parent="#mision">
                    <div class="card-body animated fadeIn">
                        El equipo de OZONOCARE tiene como misión el mejorar la calidad de vida de los pacientes a través de la prevención de deterioro del organismo usando métodos naturales y no invasivos.
                    </div>
                  </div>
                </div><!-- .card -->

                <!-- CARD 2 -->
                <div class="card">
                    <div class="card-header" id="vision">
                      <h2 class="mb-0">
                        <a class="btn btn-link d-block text-left pl-4" data-toggle="collapse" data-target="#descripcion2" aria-expanded="false" aria-controls="descripcion2">
                            Visión
                        </a>
                      </h2>
                    </div><!-- #vision -->
                    <div id="descripcion2" class="collapse" aria-labelledby="vision" data-parent="#vision">
                      <div class="card-body animated fadeIn">
                          El envejecimiento y deterioro del organismo humano susceptible de ser detenido y casi siempre revertido en base a cuidados naturales poco invasivos, siendo nuestra visión la que hace mucho se pregona “mente sana en cuerpo sano”.
                      </div>
                    </div>
                  </div><!-- .card -->

                  <!-- CARD 3 -->
                  <div class="card mb-4 mb-lg-0">
                      <div class="card-header" id="valores">
                        <h2 class="mb-0">
                          <a class="btn btn-link d-block text-left pl-4" data-toggle="collapse" data-target="#descripcion3" aria-expanded="false" aria-controls="descripcion3">
                              Valores
                          </a>
                        </h2>
                      </div><!-- #valores -->
                      <div id="descripcion3" class="collapse" aria-labelledby="valores" data-parent="#valores">
                        <div class="card-body animated fadeIn">
                            A partir del juramento Hipocrático, podemos decir que los valores que nos sustentan son los mismos que inspiraron este juramento y que deberían de regir toda práctica médica.
                        </div>
                      </div>
                    </div><!-- .card -->

              </div> <!-- .nosotros -->

          </main><!-- .contenido-principal -->
          
          <aside class="col-lg-4">
            <div class="sidebar px-3 py-3 py-md-0">
              <h2 class="d-block text-center titulo">
                <span class="d-block">Experiencia </span>y profesionalismo
              </h2>
              <p class="text-justify pt-3 py-md-4">Más de 30 años en el campo de la medicina preventiva nos avalan como una empresa que en base a la dirección de la Dra. Peruyero seguirá fielmente la ética médica para brindar ayuda y el mejor servicio a quien acuda a nosotros.</p>
            </div><!-- .sidebar -->
          </aside>
       
        </div><!-- .row -->
    </div><!-- .container -->
    <!------------------------------------------------------------>


    <!------------- FOOTER, SCRIPTS y CIERRE DE HTML -------------->
    <?php
        include 'templates/footer.php';
    ?>
    <!------------------------------------------------------------->