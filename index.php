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


    <!-------------------------- HEADER --------------------------->
    <header class="encabezado text-center img-fluid">
        
        <div class="texto-encabezado py-md-5 mt-md-5">
            <div class="container">
                <h1 class="display-4">Ozonoterapia Ciudad de México</h1>
                <p class="subtitPrincipal">Dale un respiro a tu cuerpo, <span style="font-weight:bold">dale ozono</span> para sentirte mejor</p>
                <a data-scroll href="#" data-toggle="modal" data-target="#modalContacto" class="btn btn-primary btn-lg" aria-hidden="true">Solicita información</a>
                <div class="telIndex" data-wow-delay=".6s">
                    <p>
                      <span style="font-weight: bold; font-size: 1.4rem">Contáctanos</span><br>
                      <span>Ozonocare Belleza (Águilas Pilares): 044-55-3485-1539 </span><br>
                      <span>Ozonocare Salud (División del Norte): 3683-7545 </span>
                    </p>
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
    <main>
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
                  <a href="servicios.php" class="btn btn-secondary btn-block text-uppercase py-2">Ver mas</a>
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
                  <a href="servicios.php" class="btn btn-secondary btn-block text-uppercase py-2">Ver mas</a>
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
                  <a href="productos.php" class="btn btn-secondary btn-block text-uppercase py-2">Ver mas</a>
                </div>
              </div>
            </div><!-- .imagen-servicio-->
          </div><!-- .grid-->

        </div><!-- .row-->
      </div><!-- .container-->
    </main>
    <!--------------------------------------------------------------->
    

    <!------------------------ PARALAX CONTACTO ----------------------------->
    <div class="bg-contacto container-fluid py-5">
        <div class="row justify-content-center">
        <div class="col-md-8 text-center ">
            <h3 class="text-uppercase">¿Tienes dudas?</h3>
            <p class="mt-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, quas itaque modi facere voluptatum blanditiis? Magnam delectus adipisci totam, vero eius nisi nihil. Expedita delectus at eaque qui dolores nemo!</p>
            <a href="contacto.php" class="btn btn-primary btn-lg">Solicita información</a>
        </div><!-- .grid -->
        </div><!-- .row -->
    </div><!-- .bg-citas -->
    <!------------------------------------------------------------>





    <!--------------------------------------------------------->
    <section class="py-1" id="ozono-info">
        <div class="container">
            <div class="row ozono-info">

                <div class="col-md-4">
                    <h2 class="text-center py-3 titulo">
                      <span class="d-block">¿Qué es y qué hace el</span> ozono?
                    </h2>

                  <p class="divAcord">El <span class="txt-gris">ozono</span> es un compuesto químico. Su nombre viene de griego ozein que significa “oler”, y fue descubierto en 1840. Debido a que es un agente oxidante extremadamente poderoso y un desinfectante altamente efectivo, se utiliza en todo el mundo para destruir gérmenes en instalaciones de tratamiento de agua, proporcionando así agua potable.</p>
                </div> <!-- .col-md-4 -->

                <div class="col-md-4">
                    <h2 class="text-center py-3 titulo">
                      <span class="d-block">Beneficios de la</span> ozonoterapia
                    </h2>

                  <p class="divAcord">El ozono médico es altamente reconocido por eliminar bacterias, hongos y la multiplicación de virus, por eso es utilizado para desinfectar heridas o para tratar enfermedades producidas bacterial o viralmente.
                    Cuando se administran concentraciones bajas de ozono, ayuda al organismo a funcionar de manera normal con sus propias defensas de manera efectiva.
                  </p>
                </div><!-- .col-md-4 -->

                <div class="col-md-4">
                    <h2 class="text-center py-3 titulo">
                      <span class="d-block">¿Es una medicina</span> alternativa?
                    </h2>

                    <p class="divAcord">La ozonoterapia es considerada una medicina natural, no tiene consecuencias colaterales con otros tratamientos; es coadyuvante a cualquier otra aplicación médica.
                    </p>
                </div><!-- .col-md-4 -->

            </div><!-- .row -->
        </div><!-- .container -->
    </section>
<!--------------------------------------------------------->

<!--------------------------------------------------------->
    <section class="tratamientos py-1">
      <div class="container mt-3">
        <h2 class="text-center py-3 titulo-2">
          <span class="d-block">Tratamiento </span>externo
        </h2>
        <p class="py-2">Ofrecemos tratamientos externos como, autohemoterapia mayor, autohemoterapia menor, insuflación (vía rectal, ótica o vaginal) o inyección de ozono (intramuscular, subcutánea, intraauricular).</p>

        <div class="autoplay"> 
          
          <div class="card m-3">
              <a href="servicios.php">
                <img src="img/c001ap_mini.png" class="card-img-top" alt="Servicio">
                <div class="card-body">
                  <h4 class="card-title text-center text-uppercase">Servicio 1</h4>
                  <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam itaque repudiandae provident voluptas</p>
                </div><!-- .card-body -->
              </a>   
            </div><!-- .card -->

            <div class="card m-3">
              <a href="servicios.php">
                <img src="img/c001ap_mini.png" class="card-img-top" alt="Servicio">
                <div class="card-body">
                  <h4 class="card-title text-center text-uppercase">Servicio 1</h4>
                  <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam itaque repudiandae provident voluptas</p>
                </div><!-- .card-body -->
              </a>   
            </div><!-- .card -->

            <div class="card m-3">
              <a href="servicios.php">
                <img src="img/c001ap_mini.png" class="card-img-top" alt="Servicio">
                <div class="card-body">
                  <h4 class="card-title text-center text-uppercase">Servicio 1</h4>
                  <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam itaque repudiandae provident voluptas</p>
                </div><!-- .card-body -->
              </a>   
            </div><!-- .card -->

            <div class="card m-3">
              <a href="servicios.php">
                <img src="img/c001ap_mini.png" class="card-img-top" alt="Servicio">
                <div class="card-body">
                  <h4 class="card-title text-center text-uppercase">Servicio 1</h4>
                  <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam itaque repudiandae provident voluptas</p>
                </div><!-- .card-body -->
              </a>   
            </div><!-- .card -->

            <div class="card m-3">
              <a href="servicios.php">
                <img src="img/c001ap_mini.png" class="card-img-top" alt="Servicio">
                <div class="card-body">
                  <h4 class="card-title text-center text-uppercase">Servicio 1</h4>
                  <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam itaque repudiandae provident voluptas</p>
                </div><!-- .card-body -->
              </a>   
            </div><!-- .card -->

            <div class="card m-3">
              <a href="servicios.php">
                <img src="img/c001ap_mini.png" class="card-img-top" alt="Servicio">
                <div class="card-body">
                  <h4 class="card-title text-center text-uppercase">Servicio 1</h4>
                  <p class="card-text text-uppercase">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam itaque repudiandae provident voluptas</p>
                </div><!-- .card-body -->
              </a>   
            </div><!-- .card -->

        </div><!-- .center -->

    </div><!-- .container -->

        <!-- <div class="container">
            

            <div class="owl-carousel">
                <a href="#" data-toggle="modal" data-target="#terapia1">
                    <h4>Autohemoterapia mayor</h4>
                    <img src="images/foto6.jpeg" alt="Autohemoterapia mayor">
                </a>

                <a href="#" data-toggle="modal" data-target="#terapia2">
                    <h4>Autohemoterapia menor</h4>
                    <img src="images/foto7.jpeg" alt="Autohemoterapia menor">
                </a>

                <a href="#" data-toggle="modal" data-target="#terapia3">
                    <h4>Insuflación</h4>
                    <img src="images/foto3.jpeg" alt="Insuflación">
                </a>

                <a href="#" data-toggle="modal" data-target="#terapia4">
                    <h4>Inyección de ozono </h4>
                    <img src="images/foto5.jpeg" alt="Inyección Ozono">
                </a>
            </div>
        </div> -->
    </section>
<!--------------------------------------------------------->

<!--------------------------------------------------------->
    <section class="enfermedades py-4 my-4">
        <div class="container">

            <h2 class="text-center font-weight-bold txt-gris">Enfermedades</h2>
            <p class="text-center py-4">
              Existe un gran número de condiciones patológicas que pueden ser influenciadas positivamente o incluso sanadas por el ozono. Naturalmente, y como ocurre con cualquier forma de tratamiento médico, no se puede otorgar un 100% de posibilidades de que la ozonoterapia aliviará la condición para la que se ha aplicado. Las enfermedades que pueden ser influenciadas o sanadas por el ozono son la siguientes:
            </p>

            <div class="row link-enfermedades">
                <ul class="col-sm-6 col-lg-4 text-center">
                  <a href="#" data-toggle="modal" data-target="#modalApp1">
                    <li class="wow pulse" data-wow-delay=".3s">

                        <div class="contenedor-eleccion text-md-left text-md-left">
                            <h4>Trastornos circulatorios</h4>
                            <p class="hidden-md-down">El ozono muestra gran eficacia en los trastornos circulatorios arteriales, caracterizados por una sensación de pesadez y frio, y/o dolores en las piernas...</p>
                        </div>
                    </li>
                    </a>

                    <a href="#" data-toggle="modal" data-target="#modalApp2">
                    <li class="wow pulse" data-wow-delay=".7s">
                        <div class="contenedor-eleccion text-md-left">
                            <h4>Cancer</h4>
                            <p class="hidden-md-down">En este contexto, debe enfatizarse que el ozono no es curativo, es solo una medida complementaria aplicada además de los métodos estandarizados. ...</p>
                        </div>
                    </li>
                  </a>

                  <a href="#" data-toggle="modal" data-target="#modalApp3">
                    <li class="wow pulse" data-wow-delay="1.1s">
                        <div class="contenedor-eleccion text-md-left">
                            <h4>Lesiones infectadas</h4>
                            <p class="hidden-md-down">En ulceras “de pierna abierta”, lesiones por permanecer en cama y en quemaduras, se ha encontrado que son tratadas con éxito por el ozono ...</p>
                        </div>
                    </li>
                  </a>

                  <a href="#" data-toggle="modal" data-target="#modalApp4">
                    <li class="wow pulse" data-wow-delay="1.5s">
                        <div class="contenedor-eleccion text-md-left">
                            <h4>Geriatría</h4>
                            <p class="hidden-md-down">Gracias a su capacidad de revitalización general, el ozono se puede usar con éxito en casos de concentración pobre, olvidos, reducción general del...</p>
                        </div>
                    </li>
                  </a>
                </ul><!-- .col-sm-6 -->

                <div class="wow pulse d-none d-lg-block col-lg-4 text-center align-self-center" data-wow-delay=".6s">
                  <a href="servicios.php">
                    <img class="wow pulse animated img-fluid" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" src="img/trisquelLogo4.png" alt="Ozonocare">
                  </a>
                </div>

                <ul class="col-sm-6 col-lg-4 text-center">
                  <a href="#" data-toggle="modal" data-target="#modalApp5">
                    <li class="wow pulse" data-wow-delay=".5s">
                        <div class="contenedor-eleccion text-md-right">
                            <h4>Degeneración macular</h4>
                            <p class="hidden-md-down">El ozono también se usa para ejercer una influencia positiva en la vista deficiente o pobre (agudeza visual deficiente o en decremento)...</p>
                        </div>
                    </li>
                  </a>

                  <a href="#" data-toggle="modal" data-target="#modalApp6">
                    <li class="wow pulse" data-wow-delay=".9s">
                        <div class="contenedor-eleccion text-md-right">
                            <h4>Condiciones intestinales</h4>
                            <p class="hidden-md-down">Condiciones inflamatorias del intestino grueso (colitis) el intestino delgado, fístulas y proctitis (inflamación en el recto)...</p>
                        </div>
                    </li>
                  </a>

                  <a href="#" data-toggle="modal" data-target="#modalApp7">
                    <li class="wow pulse" data-wow-delay="1.3s">
                        <div class="contenedor-eleccion text-md-right">
                            <h4>Enfermedades por virus</h4>
                            <p class="hidden-md-down">Una serie de ensayos clínicos y de estudios farmacológicos han sido capaces de demostrar el buen éxito, en porcentaje del tratamiento de ozono ...</p>
                        </div>
                    </li>
                  </a>

                  <a href="#" data-toggle="modal" data-target="#modalApp8">
                    <li class="wow pulse" data-wow-delay="1.7s">
                        <div class="contenedor-eleccion text-md-right">
                            <h4>Reumatismo / Artritis</h4>
                            <p class="hidden-md-down">En el complejo total de las condiciones “reumáticas/artríticas”, las cuales están relacionadas todas con el esqueleto y con el sistema locomotor ...</p>
                        </div>
                    </li>
                  </a>

                </ul>
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .enfermedades -->
    <!--------------------------------------------------------->


    <!--------------------------------------------------------->
    <article class="indicaciones py-1">
        <div class="container">
            <div class="row">

              <div class="col-md-6">
                <h2 class="text-center py-3 titulo-2">
                  <span class="d-block">Para aplicar </span>Ozonoterapia
                </h2>
                <p data-wow-delay=".5s">Se realizará una historia clínica completa para conocer si el paciente es candidato, al mismo tiempo se solicitan exámenes de laboratorio enfocados en su padecimiento. Una vez siendo candidato se indica para:</p>

                <ul>
                  <li>Trastornos circulatorios e isquémicos</li>
                  <li>Enfermedades de la piel</li>
	                <li>Enfermedades infecciosas causadas por virus, hongos o bacterias</li>
                  <li>Enfermedades osteomusculares</li>
                  <li>Reumatismo y enfermedades autoinmunes</li>
                  <li>Enfermedades intestinales</li>
                  <li>Reducción de los lípidos sanguíneos</li>
                  <li>Enfermedades hepáticas</li>
                  <li>Enfermedades graves o en estados de debilidad postoperatoria</li>
                  <li>Profilaxis múltiple para combatir el estrés</li>
                  <li>Terapia coadyuvante en el tratamiento del cáncer</li>
                </ul>
              </div><!-- .col-md-6 -->

              <div class="col-md-6">
                <h2 class="text-center py-3 titulo-2">
                  <span class="d-block">Contraindicaciones de </span>Ozonoterapia
                </h2>
                <p>No se han descrito efectos secundarios provocados por el ozono. Los únicos efectos secundarios detectados normalmente han sido derivados de la técnica de trasfusión. Sin embargo, se contraindica en los siguientes casos:</p>
                <ul>
                  <li>Hipertiroidismo (no controlado)</li>
                  <li>Sangrado activo</li>
	                <li>Infarto reciente</li>
                  <li>Deficiencia de glucosa-6-fosfato deshidrogenasa (favismo)</li>
                  <li>Intolerancia al ozono</li>
                </ul>
                <p>Como efectos secundarios podemos listar solo los siguientes:</p>
                <ul>
                  <li>Trastornos circulatorios, como vértigo, sofocos, etc.</li>
                  <li>Reacciones alérgicas (generalmente causadas por medicamentos coadyuvantes o anticoagulantes utilizados)</li>
                </ul>
              </div><!-- .col-md-6 -->

            </div><!-- .row -->
        </div><!-- .container -->
    </article><!-- .inidicaciones -->
    <!--------------------------------------------------------->






    <!-------------------------- CONTACTO -------------------------->
      <?php
          include 'templates/contacto.php';
      ?>
    <!------------------------------------------------------------->


    <!------------------- BLOG Y TESTIMONIALES -------------------->
    <!------------------------------------------------------------->

    <!-- Modal Contacto -->
    <div class="modal fade" id="modalContacto" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">

                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div><!-- .modal-header -->
                  
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12">
                            
                          <h2 class="d-block text-center titulo">
                            <span class="d-block">Envía el </span>formulario
                          </h2>

                            <!-- FORMULARIO -->
                            <?php
                                include 'templates/form-contacto.php';
                            ?>
                            <!---------------->

                          </div><!-- .col-md-12 -->
                      </div><!-- .row -->
                  </div><!-- .modal-body -->

              </div><!-- .modal-content -->
          </div><!-- .modal-dialog -->
      </div><!-- .modal -->
      <!---------------------------------------------------------------------->

    <!------------- FOOTER, SCRIPTS y CIERRE DE HTML -------------->
    <?php
        include 'templates/footer.php';
    ?>
    <!------------------------------------------------------------->