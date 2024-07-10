function field_focus(field, email)
  {
    if(field.value == email)
    {
      field.value = '';
    }
  }

  function field_blur(field, email)
  {
    if(field.value == '')
    {
      field.value = email;
    }
  }

//Fade in dashboard box
$(document).ready(function(){
    $('.box').hide().fadeIn(1000);
    });

//Stop click event
$('a').click(function(event){
    event.preventDefault(); 
	});

  function validate(name) {
    colection = document.social_network(name);
    var res = false;
    for(var i = 0; i < colection.length; i++) {
      res = res | colection[i].checked;
    }
    return res;
  }
   
