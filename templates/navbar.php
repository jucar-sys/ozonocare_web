<!-------------------------- NAVBAR ------------------------>
<div class="navegacion py-2">
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