function validarLogin()
{	
   var parametro=$("#dni").val();
		
	var funcionAjax=$.ajax({
		url:"php/sesion.php",
		type:"post",
		data:{
			
			dni:parametro
		}
	});

	funcionAjax.done(function(retorno){
		//alert(retorno);
		$("#principal").html(retorno);
		alert(retorno);
	});

}

function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			//MostarBotones();
			MostarIngreso();//MostarLogin();
			// $("#usuario").val("Sin usuario.");
			// $("#BotonLogin").html("Login<br>-Sesión-");
			// $("#BotonLogin").removeClass("btn-danger");
			// $("#BotonLogin").addClass("btn-primary");
			
	});	
}

// function MostarBotones()
// {		//alert(queMostrar);
// 	var funcionAjax=$.ajax({
// 		url:"nexo.php",
// 		type:"post",
// 		data:{queHacer:"MostarBotones"}
// 	});
// 	funcionAjax.done(function(retorno){
// 		$("#botonesABM").html(retorno);
// 		//$("#informe").html("Correcto BOTONES!!!");	
// 	});
// }
