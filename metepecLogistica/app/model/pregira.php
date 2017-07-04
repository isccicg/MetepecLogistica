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
	public function altaPreGira($datos)
	{

	}
}