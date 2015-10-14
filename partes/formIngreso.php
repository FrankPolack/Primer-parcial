<?php
 if (!isset($_SESSION['dni'])) {
 	# code...
 ?>
<form onsubmit ="Login(); return false">
	
	<h3>Ingrese su Dni:</h3><br>
	<input type="number" min="1000000" max="99000000" required id="dni" placeholder="Dni">
	<input type="submit" class="btn btn-info" value="Ingresar">
	
</form>
<?php }
else
 {
    echo"<h3> usted '".$_SESSION['dni']."' esta logeado. </h3>";?> 
 
    <button onclick="Logout()" class="btn btn-info" type="button">Cerrar Sesion</button>

 <?php } ?>


