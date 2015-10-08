<?php 
 
//session_start();
if(!isset($_SESSION['dni'])){  ?>

<form  class="form-ingreso " onsubmit="validarLogin();return false;">
   
    <h2 class="form-ingreso-heading">Ingrese su dni</h2><br>

    <label for="dni" class="sr-only">dni</label>
    <input type="number" min='1000000' max='99000000' name="dni" id="dni" minlength="4" class="form-control" placeholder="dni" required=""><br>
                              <!--1.000.000     99.000.000 -->
    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
     
</form>

 <?php }else{ echo"<h3>usted '".$_SESSION['dni']."' esta logeado. </h3>";?>         
   
    <button onclick="deslogear()" class="btn btn-lg btn-danger btn-block" type="button"><span class="glyphicon glyphicon-off">&nbsp;</span>Cerrar Sesion</button>

<!--
 <script type="text/javascript">
 MostarBotones();
 </script>
-->
  <?php  }  ?>


 
    
  
