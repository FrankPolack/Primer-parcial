
function Mostrar(queMostrar)
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
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
		//alert("siempre "+retorno.statusText);

	});
}

function MostarIngreso()
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarIngreso"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}