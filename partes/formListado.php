<?php 

require_once("clases/AccesoDatos.php");
require_once("clases/votacion.php");
if(isset($_SESSION['dni']))
{
	
	
	$arrayVotos=votacion::TraerVotos();

	echo "<h2> Bienvenido: ".$_SESSION['dni']."</h2>";

?>

<table class="table"  style="background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th>
			<th>Borrar</th>
			<th>Ver</th>
			<th>DNI</th>
			<th>sexo</th>
			<th>provincia</th>
			<th>presidente</th>
			<th>localidad</th>
			<th>direccion</th>
			<th>id</th>

		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayVotos as $voto) {
	$l = '"'.$voto->provincia. '"' . ',"' .$voto->localidad. '"' . ',"' .$voto->direccion. '"' . ',"' .$voto->id. '"';
	echo"<tr>
		<td><a onclick='EditarVOTO($voto->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
		
		<td><input type='button' value='Borrar' onclick='BorrarVOTO($voto->id)' class='btn btn-danger' href='location.partes/FormListado.php'></td>
		
		<td><a onclick='VerEnMapa($l)' class='btn btn-info'>VerMapa</a></td>

		<td>$voto->dni</td>
		<td>$voto->sexo</td>
		<td>$voto->provincia</td>
		<td>$voto->presidente</td>
		<td>$voto->localidad</td>
		<td>$voto->direccion</td>
		
	    <td>$voto->id</td>

	</tr>";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4>No ha ingresado</h4>";
	}

	 ?>