<div class="container pt-4">
       <div class="row justify-content-center">
          
          <main class="col-lg-8">
              
            <h2 class="d-block text-center titulo">
              <span class="d-block">Envía el </span>formulario
            </h2>

            <?php
                include 'templates/form-contacto.php';
            ?>

          </main><!-- .col-lg-8 -->

       </div><!-- .row -->
    </div><!-- .container -->

    <!-- DIRECCIONES -->
    <div class="container">
        <h2 class="d-block text-center titulo pb-4">
            <span class="d-block">Detalles </span>de contacto
        </h2>
        <div class="row text-center">
            <div class="col-md-6">
            <?php
                include 'templates/dir-belleza.php';
            ?>
            </div><!-- .col-md-6 -->
            <div class="col-md-6">
            <?php
                include 'templates/dir-salud.php';
            ?>
            </div><!-- .col-md-6 -->
        </div><!-- .row -->
    </div><!-- .container -->


    <!-- MAPA -->
    <div id="mapa" class="mapa my-4"></div>