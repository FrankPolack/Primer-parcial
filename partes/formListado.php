<?php 
//session_start();
if(isset($_SESSION['dni']))
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/votacion.php");
	
	$arrayVotos=votacion::TraerVotos();

	echo "<h2> Bienvenido: ".$_SESSION['dni']."</h2>";

?>

<table class="table" style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>DNI</th><th>sexo</th><th>provincia</th><th>presidente</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayVotos as $voto) {
	echo"<tr>
		<td><a onclick='EditarVOTO($voto->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
		
		<td><a onclick='BorrarVOTO($voto->id)' class='btn btn-danger'> <span class='glyphicon glyphicon-trash'>&nbsp;</span>Borrar</a></td>
			
		<td>$voto->dni</td>
		<td>$voto->sexo</td>
		<td>$voto->provincia</td>
		<td>$voto->presidente</td>
		<td>$voto->id</td>

	</tr>";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4 class='widgettitle'>No estas registrado</h4>";
	}

	 ?>