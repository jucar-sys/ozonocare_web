/*------------------------
INICIAMOS WOW
-------------------------*/
new WOW().init();


/*------------------------
INICIAMOS SLIDER
-------------------------*/


$('.autoplay').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
  });

/*----------------------------------
Iniciamos smoothScroll (Scroll Suave)
--------------------------------*/
smoothScroll.init({
    speed: 1000, // Integer. How fast to complete the scroll in milliseconds
    offset: 100, // Integer. How far to offset the scrolling anchor location in pixels
});


/*---------------------------------
   CABECERA ANIMADA
 ----------------------------------*/
window.onscroll = () => {
    console.log(window.scrollY);

    // Asignamos el valor del scroll que se tiene en el sitio a la variable scroll
    let scroll = window.scrollY;

    // Seleccionar el <div class="header-scroll"> </div>
    const headerScroll = document.querySelector('.header-scroll');

    if (scroll > 1100) {
        headerScroll.classList.add('activo');
    } else {
        headerScroll.classList.remove('activo');
    }
}


////////////////////// GOOGLE MAPS ///////////////////////////
/* var apiMaps = 'APIKEY';

function initMap() {
    var latLng = {
        // Sucursal Las flores
            lat: 19.355364,
            lng: -99.200027

        // Sucursal Salud 
        // lat: 19.3278997,
        // lng: -99.143841
    };

    var map = new google.maps.Map(document.getElementById('mapa'), {
        'center': latLng,
        'zoom': 14,
        'mapTypeId': google.maps.MapTypeId.ROADMAP
    });

    var contenido = '<h2>Ozonocare</h2>' +
        '<h5>Ozonocare Belleza</h5>' +
        '<a href="http://www.ozonocare.com.mx" target="_blank">www.ozonocare.com.mx</a>';
    var informacion = new google.maps.InfoWindow({
        content: contenido
    });

    var marker = new google.maps.Marker({
        position: latLng,
        map: map,
        title: 'OZONOCARE'
    });

    marker.addListener('click', function() {
        informacion.open(map, marker);
    });
} */
///////////////////////////////////////////////////////////////


// Para validar campos de formularios

(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Seleccionar el formulario para validar con la clase needs-validation
        var forms = document.getElementsByClassName('needs-validation');
        // Validar cada campo y prevenir que se envie
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {          
            event.preventDefault();
            if (form.checkValidity() === false) {
                event.stopPropagation();
            } else {
                // Mostrar algo en el dom
                var div = document.createElement('div');
                div.appendChild(document.createTextNode('La información se envió correctamente'));
                div.classList.add('alert', 'alert-success', 'mt-4', 'text-center');
                document.querySelector('form').appendChild(div);
                setTimeout(function(){
                    document.querySelector('.alert').remove();
                },3000);
                // Para enviar correos con ajax (no funciona aun :(  ))
                /* var nombre = document.getElementById('nombre').value,
                    email = document.getElementById('email').value,
                    mensaje = document.getElementById('mensaje').value;
                
                // Ejecutar AJAX
                var xhr = new XMLHttpRequest();

                // Abrir la conexion (ACTUALIZAR URL CUANDO SE SUBA)
                xhr.open('POST', 'http://localhost/carolina_spa/inc/enviar.php', true );

                // Siempre que utilizas un formulario se debe agregar un header
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                // Revisar el estado
                xhr.onload = function() {
                    if ( xhr.status === 200 ) {
                        var respuesta = JSON.parse( xhr.responseText );
                        console.log(respuesta);
                        if (respuesta.resp === true) {
                            var div = document.createElement('div');
                            div.appendChild(document.createTextNode('La información se envió correctamente'));
                            div.classList.add('alert', 'alert-success', 'mt-4', 'text-center');
                            document.querySelector('form').appendChild(div);
                            setTimeout(function(){
                                document.querySelector('.alert').remove();
                            },3000);
                        }
                    }
                }

                // Enviar el request
                xhr.send('nombre='+nombre+'&email='+email+'&mensaje='+mensaje); */
            }

            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
