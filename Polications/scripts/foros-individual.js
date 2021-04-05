
if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}




function cargar() {
  
  $(document).ready(function(){
    $('.comments').remove();
    $('#aqui').load('ejemplo.php');
      return false;
    });
    
}


function Hola(comentario) {
  let parametros = {"Comentario":comentario};
  $.ajax({
   data: parametros,
   url:'ejemplo2.php',
   type: 'post',
   beforeSend: function () {
       $("#aqui").html("Procesando, espere por favor");
   },
   success: function (response) {  
       $('.comments').remove(); 
       $("#aqui").html(response);
   }
  });
}