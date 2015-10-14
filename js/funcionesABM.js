function BorrarVOTO(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"operaciones.php",
		type:"post",
		data:{
			id:idParametro,
				queHago:"borrarVoto"
		}
	});
	funcionAjax.done(function(retorno){
		alert("Borrado correctamente");
		Mostrar("MostarListado");
		//alert("borrado");
	});

}

function EditarVOTO(idParametro)
{
	Mostrar("MostrarFrmVoto");

	var funcionAjax=$.ajax({
		url:"operaciones.php",
		type:"post",
		data:{
			queHago:"TraerVoto",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		
		//console.log(retorno);
		var voto =JSON.parse(retorno);	
		//alert(voto.dni);

		$("#idVOTO").val(voto.id);
		$("#dni").val(voto.dni); 
		$("#provincia").val(voto.provincia);
		$("#presidente").val(voto.presidente);
		//$("#sexo").val(voto.sexo);
		if(voto.sexo == "F")
             $('input:radio[name="sexo"][value="F"]').prop('checked', true);
        else
            $('input:radio[name="sexo"][value="M"]').prop('checked', true);	
		//$('input:radio[name=sexo]:checked').val();
		$("#localidad").val(voto.localidad);
		$("#direccion").val(voto.direccion);
	});

}

function GuardarVOTO()
{ 
 		var id = $("#idVOTO").val();
 		var dni = $("#dni").val(); 
		var provincia = $("#provincia").val(); //hace referencia al id del input
		var presidente = $("#presidente").val();
		var sexo = $("input:radio[name=sexo]:checked").val();
		var localidad = $("#localidad").val();
		var direccion = $("#direccion").val();

		var funcionAjax = $.ajax({	
		url:"operaciones.php", 
		type:"post",
		data:
		{
		queHago:"altaVoto",
		id:id,
		dni:dni,
	    provincia:provincia,
		presidente:presidente,
		sexo:sexo,
		localidad:localidad,
		direccion:direccion
		}
		
	});
	funcionAjax.done(function(retorno){
		console.log(retorno);
		Mostrar("MostarListado");	 
		
		
	});

}