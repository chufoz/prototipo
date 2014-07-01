
$(function()
{
    $("button#login").click(function()
    {
        llamadaAutentificar();
    });
});
$(function ()
{
   $("input#password").keypress(function(tecla)
   {
      if(tecla.keyCode==13){
            llamadaAutentificar();
   }
   });    
});
$(function ()
{
   $("input#usuario").keypress(function(tecla)
   {
      if(tecla.keyCode==13){
            llamadaAutentificar();
   }
   });    
});
function llamadaAutentificar()
{
        usuario = $("input#usuario").val();
        password=$("input#password").val();
        $.post('vinculadores/vinculadorseguridad.php',{
            actividad:1,
            password:password,
            usuario:usuario
   })
        .done(function(xml){
             mensajes = xml.split('#');
            caso = parseInt(mensajes[0]);
            switch(caso){
                case 1:
                    mostrarMensajes("alert alert-success","Información valida en un momento entrara al sistema");
                    setTimeout(location.href="vistas/principal.php",167761);
                   break;
               case 2:
                   mostrarMensajes("alert alert-warning",mensajes[1]);
                   break;
               case 3:
                   mostrarMensajes("alert alert-success",mensajes[1]);
                   break;
               case 4:
                   mostrarMensajes("alert alert-danger", mensajes[1]);
                   break;
            }
        });
}
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
