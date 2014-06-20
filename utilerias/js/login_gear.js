$(function() 
{
    $("button#login").click(function() 
    {
       usuario = $("input#usuario").val();
       password = $("input#password").val(); 
       $.post('vinculadores/vinculadorseguridad.php', {
          actividad: 1,
          usuario:usuario,
          password:password
          
       })  
       .done(function(xml){
          mensajes = xml.split('#');
          caso = parseInt(mensajes[0]);
          switch(caso){
            case 1:
              mostrarMensajes("alert alert-success","A su puta madre si entre :D");
              setTimeout(location.href="vistas/prototipo3v1.html",167761);
            break;
            case 2:
              mostrarMensajes("alert alert-warning", mensajes[1]);
            break;
            case 3:
              mostrarMensajes("alert alert-success",mensajes[1]);
            break;
            case 4:
              mostrarMensajes("alert alert-danger", mensajes[1]);
            break;
          }
       });
   });
});

function mostrarMensajes(clase, mensajes)
{
    $("#alerta").removeClass("alert-danger");
    $("#alerta").removeClass("alert-success"); 
    $("#alerta").removeClass("alert-warning");
    $("#alerta aside#mensajes").addClass(clase);
    $("aside#mensajes").html(mensajes);
    $("aside#mensajes").fadeIn(1000);
    $("aside#mensajes").fadeOut(4100);
}