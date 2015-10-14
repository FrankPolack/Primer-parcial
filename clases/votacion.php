<?php
class votacion
{
	public $id;
	public $dni;
	public $provincia;
	public $presidente;
	public $sexo;
	public $direccion;
	public $localidad;

	public static function TraerVotos()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDatos->RetornarConsulta("CALL TraerVotos");
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS,'votacion'); 
	}

    public function InsertarVoto()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("CALL InsertarVoto(:paramDni,:paramProv, :paramPresi, :paramSexo, :paramLoca,:paramDire )");				
		
		$consulta->bindValue(':paramDni', $this->dni, PDO::PARAM_STR);
		$consulta->bindValue(':paramSexo', $this->sexo, PDO::PARAM_STR);
		$consulta->bindValue(':paramProv', $this->provincia, PDO::PARAM_STR); //los parametros tienen q estar siempre en el mismo orden q la bd sino no anda bien
		$consulta->bindValue(':paramPresi', $this->presidente, PDO::PARAM_STR);
		$consulta->bindValue(':paramDire', $this->direccion, PDO::PARAM_STR);
		$consulta->bindValue(':paramLoca', $this->localidad, PDO::PARAM_STR);
		$consulta->execute();
	}

	public function ModificarVoto()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("CALL ModificarVoto(:paramProv,:paramPresi,:paramSexo,:paramId,:paramDni ,:paramDire, :paramLoca )");
		
		$consulta->bindValue(':paramProv', $this->provincia, PDO::PARAM_STR);
		$consulta->bindValue(':paramPresi', $this->presidente, PDO::PARAM_STR);
        $consulta->bindValue(':paramSexo', $this->sexo, PDO::PARAM_STR);
		$consulta->bindValue(':paramId', $this->id, PDO::PARAM_INT);	
		$consulta->bindValue(':paramDni', $this->dni, PDO::PARAM_STR);
		$consulta->bindValue(':paramDire', $this->direccion, PDO::PARAM_STR);
		$consulta->bindValue(':paramLoca', $this->localidad, PDO::PARAM_STR);
		$consulta->execute();
	}

    public function BorrarVoto()
	{
		$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDatos->RetornarConsulta("CALL BorrarVoto(:paramId)");
		$consulta->bindValue(':paramId', $this->id, PDO::PARAM_INT);				
		$consulta->execute();
	}

	public static function TraerUnVoto($id) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerVotoPorId($id)");//("SELECT * from voto where id = $id");
		$consulta->execute();				 
		$votoBuscado= $consulta->fetchObject('votacion');
		return $votoBuscado;
		//return $consulta->fetchObject('votacion');			
	}
}
?>