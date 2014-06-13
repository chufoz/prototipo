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

  if(mensaje == "alto"){
   label = "<span id='bajo' class='label label-danger text-center'>"+mensaje+" </span>";

  }
  else{
  label = "<span id='bajo' class='label label-warning text-center'>"+mensaje+" </span>";
  }
  return label
}