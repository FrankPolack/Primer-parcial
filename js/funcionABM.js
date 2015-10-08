function BorrarVOTO(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarVOTO",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostarListado");
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarVOTO(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerVOTO",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		
		var voto =JSON.parse(retorno);	

		$("#idVOTO").val(voto.id);
		$("#dni").val(voto.dni); 
		$("#provincia").val(voto.provincia);
		$("#presidente").val(voto.presidente);
		$("#sexo").val(voto.sexo);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	Mostrar("MostrarVotacion");
}

function GuardarVOTO()
{ 
 		var id = $("#idVOTO").val();
 		var dni = $("#dni").val(); 
		var provincia = $("#provincia").val(); //hace referencia al id del input
		var presidente = $("#presidente").val();
		var sexo = $("#sexo").val();

		var funcionAjax = $.ajax({	
		url:"nexo.php", 
		type:"post",
		data:
		{
		queHacer: "GuardarVOTO",
		dni:dni,
	    provincia:provincia,
		presidente:presidente,
		sexo:sexo,
		id:id
		}
		
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostarListado");
		$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	

}
