<?php
//session_start();

  if (isset($_SESSION['dni']))
  {
    // echo "<section class='widget'><center><h2> Bienvenido: ".$_SESSION['dni']."</h2></center>"; //no puedo modificar si dejo esto
       
?>

<form  class="form-votacion" id="principal" onsubmit="GuardarVOTO();return false">
   
  <label>Voto</label><br>

	<input type="text" name="provincia" id="provincia" placeholder="Provincia"><br>

	<select name="presidente" id="presidente" required>

    <option value="Scioli">Scioli</option>
    <option value="lal">Lala</option>
    <option value="mercedes">Mercedes</option>

	</select><br>
	
	<input type="radio" name="sexo" id="sexo" value="Masculino">Masculino
	<input type="radio" name="sexo" id="sexo" value="Femenino">Femenino <br><br>
	 
   <input readonly type="hidden" id="idVOTO" class="form-control" >

    <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button> 

</form>

<?php 
  }else
  {
    echo "<section class='widget'>
      <h4 class='widgettitle'>No estas registrado</h4></section>";
  }

?>
