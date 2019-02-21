//SIMPLE FUNCIÓN PARA QUE CON UNA AL DAR CLICK VAYA A MI INDICADOR DIVVACIO USANDO LA POSICIÓN QUE OBTIENE LA BUILT-IN FUNCION OFFSET. 
$(function() {
    $('.scroll-down').click (function() {
      $('html, body').animate({scrollTop: $('div.divvacio').offset().top });
   
    });
  });
