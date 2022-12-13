$(document).ready(function(){

  $("#inicio").click(function() {
    $("html, body").animate({
      scrollTop: $("#home").offset().top
    }, 1000);
  });
  $("#quienes").click(function() {
    $("html, body").animate({
      scrollTop: $("#about").offset().top
    }, 1000);
  });
  $("#productos").click(function() {
    $("html, body").animate({
      scrollTop: $("#portfolio").offset().top
    }, 1000);
  });
  $("#contacto").click(function() {
    $("html, body").animate({
      scrollTop: $("#contact").offset().top
    }, 1000);
  });
  $("#footerBtn").click(function() {
    $("html, body").animate({
      scrollTop: $("#home").offset().top
    }, 1000);
  });
  ///////////////////////////////////EFECTOS PARA EL SITIO MÓVIL////////////////
  $("#quienesM").click(function() {
    $("html, body").animate({
      scrollTop: $("#about").offset().top
    }, 1000);
  });
  $("#productosM").click(function() {
    $("html, body").animate({
      scrollTop: $("#portfolio").offset().top
    }, 1000);
  });
  $("#contactoM").click(function() {
    $("html, body").animate({
      scrollTop: $("#contact").offset().top
    }, 1000);
  });
////////////////////////////////////MANEJO DEL MODAL////////////////////////////
  $("#mostrar-modal").click(function() {
    $("#modal p").css("display", "inline-block");
  });
  $("#cerrar-modal").click(function() {
    $("#modal p").css("display", "none");
  });


  $('#validate').click(function() {

    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (regex.test($('#Email').val().trim())) {
        $('#result').css('display', 'none');
        $('#load').css('display', 'inline-block');

      var url = "envio.php";
      $.ajax({
         type: "POST",
         url: url,
         data: $("#fc").serialize(),
         success: function(data)
         {
            $("#result").empty();
            $('#result').css('display', 'inline-block');
            $('#result').append('Mensaje Enviado');
           //$('#result').html(data);

            $('#load').css('display', 'none');
            $("#fc")[0].reset();
         }
       });
    } else {
        alert('La direccón de correo no es válida');
    }
  });
});
