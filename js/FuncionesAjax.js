function Mostrar(queMostrar)
{
	var funcionAjax = $.ajax({	
		url:"operaciones.php",
	    type:"post",
		data:{queHago:queMostrar}
    });

	funcionAjax.done(function(retorno){

		$("#principal").html(retorno);
		$("#informe").html("Correcto!!!");
    });
    funcionAjax.fail(function(retorno){
    	
    	$("#principal").html(":(");
		$("#informe").html(retorno.responseText);
    });
    funcionAjax.always(function(retorno){

    });


}