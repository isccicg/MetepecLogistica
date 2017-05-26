<?php
require_once('../bd/conexion.php');

class gira
{
	protected $acceso;
 	protected $conexion;

	public function __construct()
	{
		$this->acceso = new accesoDB(); 
 		$this->conexion = $this->acceso->conDB();
	}
	public function cargarDelegaciones()
	{
		$datosDelegaciones = array();
		$consulta = "SELECT * FROM delegaciones";
		$resultado = mysql_query($consulta,$this->conexion) or die (mysql_error());
		if($resultado)
		{
			while($filaTmp = mysql_fetch_assoc($resultado))
				$datosDelegaciones[] = $filaTmp;
		}
		else
			$datosDelegaciones = $this->conexion->errno . " : " . $this->conexion->error . "\n";

		return $datosDelegaciones;
	}
	public function cargarDependenciasM()
	{
		$datosDependencia = array();
		$consulta = "SELECT * FROM dependencia";
		$resultado = mysql_query($consulta,$this->conexion) or die (mysql_error());
		if($resultado)
		{
			while($filaTmp = mysql_fetch_assoc($resultado))
				$datosDependencia[] = $filaTmp;
		}
		else
			$datosDependencia = $this->conexion->errno . " : " . $this->conexion->error . "\n";

		return $datosDependencia;

	}
	public function __destruct() 
	{
		mysql_close($this->conexion);
	}
}
?>