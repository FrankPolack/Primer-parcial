<?php 
session_start();

require_once("clases/AccesoDatos.php");
require_once("clases/votacion.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	
	case 'MostarListado':
			include("partes/formListado.php");
		break;
	case 'MostrarVotacion':
			include("partes/formVotacion.php");
		break;
	case 'MostarIngreso':
			include("partes/formIngreso.php");
		break;

	case 'BorrarVOTO':
			$voto = new votacion();
			$voto->id=$_POST['id'];
			$cantidad=$voto->BorrarVoto();
			echo $cantidad;
		break;

	case 'GuardarVOTO':
			$voto = new votacion();
			$voto->dni = $_SESSION['dni']; //ver no me guarda el dni
			$voto->provincia = $_POST['provincia'];
			$voto->presidente = $_POST['presidente'];
			$voto->sexo = $_POST['sexo']; 
			$voto->id = $_POST['id'];
			
			if ($_POST['id']>0)
			{
				$cantidad=$voto->ModificarVoto(); 
			}
			else
			{
				$cantidad=$voto->InsertarVoto();
			}
			echo $cantidad;
		break;	
	
	case 'TraerVOTO':

			$voto = votacion::TraerUnVoto($_POST['id']); //TraerVotos();		
			echo json_encode($voto);
			
		break;
	
}

?>