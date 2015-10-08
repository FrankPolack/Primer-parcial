<?php

class votacion
{
	public $dni;
 	public $provincia;
  	public $presidente;
  	public $sexo;
  	public $id;

	public static function TraerVotos() 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL Listado()"); //select * from votos
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "votacion");		
	}

	 public function InsertarVoto() 
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta//("CALL Alta()");
															("INSERT into votos (dni,provincia,presidente,sexo)
															values('$this->dni','$this->provincia','$this->presidente','$this->sexo')");
			$consulta->execute();
			return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

  	public function BorrarVoto() //$id
	{
	 	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("DELETE from votos WHERE id=:id");//("CALL Baja()");	
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
			$consulta->execute();
			return $consulta->rowCount();
	}
	// {
 //      $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso("CALL Baja(?)");
      
 //      $consulta = $objetoAccesoDato->RetornarConsulta();
 //      if ($consulta->execute(array($id)))
 //      {
 //        return true;
 //      }else{
 //        return false;
 //      }
 //    }

	public function ModificarVoto()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL Modificacion()");
		 //  ( "UPDATE votos 
			// set dni='$this->dni',
			// provincia='$this->provincia',
			// presidente='$this->presidente',
			// sexo='$this->sexo'
			// WHERE id='$this->id' "); 
		return $consulta->execute();
	}

    public static function TraerUnVoto($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * from votos where id = $id");
			$consulta->execute();				 
			$votoBuscado= $consulta->fetchObject('votacion');
			return $votoBuscado;			
	}

	
}

?>
