$(function ()
{
  			$("input.hashtag").keyup(function(tecla)
  	{ 	
  			switch(tecla.keyCode)
  		{
        case 51:
        break;
    		case 13 : 
    			$("article#hashtag").append(
           colores((capturahashtag("hashtag")))); 
    		break;
    		case 32 : 
    			$("article#hashtag").append(
           colores((capturahashtag("hashtag")))); 
    		break; 
  		}//decisiones	   			
    }); 
});  	
function capturahashtag(idinput)
{
 hashtag=$("input."+idinput).val();
 $("input."+idinput).val("");
 return hashtag.substring(1);
}
function colores( mensaje ){
  if(mensaje == "alto")
  {
   label = "<span id='alto' class='label label-danger'>"+mensaje+" </span>";
  }
  if(mensaje == "medio")
  {
    label = "<span id='medio' class='label label-primary'>"+mensaje+" </span>";
  }
  if(mensaje == "critico")
  {
    label = "<span id='critico' class='label label-warning'>"+mensaje+" </span>";
  }
  if(mensaje == "bajo")
  {
    label = "<span id='bajo' class='label label-success'>"+mensaje+" </span>";
  }  
  return label
}