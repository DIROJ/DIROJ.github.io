
if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}



$(document).ready(function () {
  $('#comentar').attr('disabled', true);
  $('textarea#comentario').on('keyup', function () {
      var textarea_value = $("textarea#comentario").val();
      
      if (textarea_value != '' ) {
          $('#comentar').attr('disabled', false);
      } else {
          $('#comentar').attr('disabled', true);
      }
  });
});

function Hola(comentario, titulo, tema) {
  let parametros = {"Comentario":comentario,"Titulo":titulo,"Tema":tema};
  $.ajax({
   data: parametros,
   url:'foros-individual-com.php',
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