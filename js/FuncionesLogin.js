function Login()
{
	var dni =$("#dni").val();
	var funcionAjax =$.ajax({
    	
        url:"php/sesion.php", 
        type:"post",
    	data:{dni:dni}
    });

    funcionAjax.done(function(retormo){
    	
        if (retorno) 
    		alert("Bienvenido");
    	else
    		alert("No ingreso");
    });
}

function Logout()
{
	var funcionAjax=$.ajax({
		url:"php/logout.php" ,
        type:"post",
     });
	funcionAjax.done(function(retorno){
        
    });
}