<?php
 //session_start();
 
 if (isset($_SESSION['dni']))
 {
?>
	
<form onsubmit="GuardarVOTO();return false">

		<label>Voto</label><br> 
		<input type="text" name="provincia " required id="provincia" placeholder="Provincia"><br>
		
		<select name="presidente" id="presidente">
			<option value="Scioli">Scioli</option>
			<option value="Macri">Macri</option>
			<option value="Massa">Massa</option>
		</select><br>
		
		<input type="radio" name="sexo" id="sexo" value="M">Masculino 
		<input type="radio" name="sexo" id="sexo" value="F">Femenino<br> 

		<input type="text" name="localidad" id="localidad" placeholder="Localidad"><br>

        <input type="text" name="direccion" id="direccion" placeholder="Direccion"><br><br>

        <input type="hidden" id="idVOTO">
		
		<input type="submit" class="btn btn-info" value="Guardar">

</form>
 
<?php
}else
{

echo "<h4>No ha ingresado</h4>";
  
}
?>
