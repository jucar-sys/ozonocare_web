    <!-------------------------- FOOTER --------------------------->
    <div class="footer pt-4">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-3 text-justify">
            <p class="text-center">SOBRE <span class="txt-gris">OZONOCARE</span></p>
            <p>En <span class="txt-gris">Ozonocare</span> nos comprometemos en brindar todos los beneficios de la ozonoterapia, de    manera efectiva y segura. Contamos con especialistas altamente calificados en la materia y equipo con tecnología de punta, en donde nuestro principal objetivo es reparar y optimizar la función celular.</p>
            <p>
              El equipo de OZONOCARE tiene como misión el mejorar la calidad de vida de los pacientes a través de la prevención de deterioro del organismo usando métodos naturales y no invasivos.
            </p>
          </div>

          <div class="col-md-4 text-justify">
            <p class="text-center">DATOS DE <span class="txt-gris">CONTACTO</span></p>
            <div class="row" >
              <div class="col-md-6">
                <!--Dirección belleza-->
                <?php
                    include 'templates/dir-belleza.php';
                ?>
                <!-------------------------------------->
              </div>
              <div class="col-md-6">
                <!--Dirección salud-->
                <?php
                    include 'templates/dir-salud.php';
                ?>
                <!-------------------------------------->
              </div>
            </div>
          </div>

          <div class="col-md-5 text-justify">
            <p class="text-center">PREGUNTAS <span class="txt-gris">FRECUENTES</span></p>
            <p><span class="txt-gris">¿En qué consiste un tratamiento completo de ozono?</span> La aplicación de la terapia requiere como mínimo 10 sesiones. Sin embargo, usted debe recordar que una pequeña prevención puede darle mucho más en salud y puede ahorrar gastos excesivos en el futuro por falta de prevención.</p>
            <p><span class="txt-gris">¿Cómo sé si soy candidato para las terapias de ozono?</span> Usted se debe de informar con su doctor acerca de cualquier medicamento, dieta especial o medida que usted deba seguir o haya seguido o tomado recientemente. A partir de esto y de otros factores, el médico evaluará si usted es apto o no para tomar las terapias.</p>
            <p><span class="txt-gris">¿La ozonoterapia es milagrosa?</span> No, la ozonoterapia se aplica como un método coadyuvante a otro método clínico. Por lo que es muy importante tener claro que la ozonoterapia trabaja en conjunto con otros factores como: alimentación, ejercicio, tratamientos clínicos, etc.</p>
          </div>

        </div> <!-- .row -->

        <div class="sociales text-center w-100">
          <p class="m-0 mt-4">REDES <span class="txt-gris">SOCIALES</span></p>
        
          <ul>
              <li>
                <a href="https://www.facebook.com/OzonocareMX/" target="_blank">
                </a>
              </li>
          </ul>
        </div>
          
      </div> <!-- .container -->

      <div class="text-center badge w-100 py-3 cpyFooter">
        <p class="m-0">Copyright &copy 2019 Ozonocare All Rights Reserved.</p>
      </div>
    </div> <!-- .footer -->
    <!------------------------------------------------------------->

    <a data-scroll class="ir-arriba" href="#encabezado"><i class="fa  fa-arrow-circle-up" aria-hidden="true"> </i> </a>

    <script src="js/wow.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/tether.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=APIKEY&callback=initMap"></script> -->
  </body>
</html>

<!-- CACHEAR LAS PAGINAS PARA MAS PERFORMANCE -->
<?php
  /* // Guarda todo el contenido en un archivo HTML
  $fp = fopen($archivoCache, 'w');
  fwrite($fp, ob_get_contents());
  fclose($fp);

  //Enviar todo al navegador
  ob_end_flush(); */
?>
<!-- ----------------------------------------- -->