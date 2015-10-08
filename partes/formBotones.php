<?php 
session_start();
if(isset($_SESSION['dni']))
{
	echo "<section class='widget'><center><h2> Bienvenido: ". $_SESSION['dni']."</h2></center>";

 ?>
		
			<h4 class="widgettitle">Botones ABM</h4>
			<ul>
	<!-- 			<li><a onclick="Mostrar('MostrarGrilla')" class=" btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-th">&nbsp;</span>Grilla CD</a></li>
				<li><a onclick="Mostrar('MostrarFormAlta')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Alta CD</a></li> -->
			<button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Deslogearme</button>
			</ul>
		</section>

	<?php 
	}else
	{
		echo "<section class='widget'>
			<h4 class='widgettitle'>No estas registrado</h4></section>";
	}

	 ?>