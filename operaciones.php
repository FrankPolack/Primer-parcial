<?php 
session_start();
	require_once("clases/votacion.php");
	require_once("clases/AccesoDatos.php");

	$queHago = $_POST['queHago'];

	switch ($queHago) {
			case 'MostrarIngreso':
				include("partes/FormIngreso.php");
				break;
			
			case 'MostrarFrmVoto':
				include("partes/FormVotacion.php");
				break;
            
            case 'VerEnMapa':
				include("partes/formMapa.php");
				break;
			
			case 'MostrarListado':
				include("partes/FormListado.php");
				break;	

			case 'altaVoto':
				$voto = new votacion();
				$voto->id = $_POST['id'];
				$voto->dni = $_SESSION['dni'];
				$voto->provincia = $_POST['provincia'];
				$voto->presidente = $_POST['presidente'];
				$voto->sexo = $_POST['sexo'];
				$voto->localidad = $_POST['localidad'];
			    $voto->direccion = $_POST['direccion'];
			    if ($_POST['id']> 0 )
			    {
			       $cantidad=$voto->ModificarVoto();	
			    }
			    else
			    {
			    	$cantidad=$voto->InsertarVoto();
			    }
				echo $cantidad;
				break;

			case 'borrarVoto':
				$voto = new votacion();
				$voto->id = $_POST['id'];
				$voto->BorrarVoto();
				break;

			case 'TraerVoto':
				$resultado = votacion::TraerUnVoto($_POST['id']);
				echo json_encode($resultado);

			default:
				# code...
				break;
		}	

?>