
               $(document).ready(function(){
                   // indicamos que se ejecuta la función a los 5 segundos de haberse
                   // cargado la pagina
                   setTimeout(clickbutton,2000);
        
                   function clickbutton()
                   {
                       // simulamos el click del mouse en el boton del formulario
                       $("#botonEnviar").click();
                   }
               });
    
      
               $(document).ready(function(){
                   // indicamos que se ejecuta la función a los 5 segundos de haberse
                   // cargado la pagina
                   setTimeout(clickbutton,10000);
        
                   function clickbutton()
                   {
                       // simulamos el click del mouse en el boton del formulario
                       $("#BTNCERRAR").click();
                   }
               });





                 // METODO QUE ACTIVA LA ANIMACION DE LA VNTANA EMERGENTE
                                             $(document).ready(function(e) {
            var mozillaPresente = false,
                mozilla = (function detectarNavegador(navegador) {
              if(navegador.indexOf("Firefox") != -1 ) {
                mozillaPresente = true;
              } 
            })(navigator.userAgent);
            function darEfecto(efecto) {
              el = $('.cajainterna');
              el.addClass(efecto);
              el.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
              function (e) {
                el.removeClass(efecto);
              });
            }
            function mostrar(e) {
              $(".cajaexterna").show();
              darEfecto("bounceIn");      
            }
            function ocultar() {
              $(".cajaexterna").fadeOut("fast", function() {
                if(mozillaPresente) {
                setTimeout(function() {
                  $(".cajainterna").removeClass("bounceIn");
                }, 5);
              }
              });     
            }
            $("a.mostrarmodal").click(mostrar);
            $("a.cerrarmodal").click(ocultar);
           }); 