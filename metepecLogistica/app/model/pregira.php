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
		$citatorioId = mysql_real_escape_string(strip_tags(stripslashes(trim(1))));
		$fecha = date("Y-m-d",strtotime(mysql_real_escape_string(strip_tags(stripslashes(trim($datos["fecha"]))))));
		$hora = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["hora"]))));
		$nomEvento = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["evento"]))));
		$responsablepG = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["responsablepG"]))));
		$responsable = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["responsable"]))));
		$cargoResponsable = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["cargoResponsable"]))));
		$emailResponsable = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["emailResponsable"]))));
		$telefonoResponsable = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["telefonoResponsable"]))));
		$enlace = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["enlace"]))));
		$cargoEnlace = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["cargoEnlace"]))));
		$emailEnlace = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["emailEnlace"]))));
		$telefonoEnlace = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["telefonoEnlace"]))));
		$nomEvento = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["evento"]))));
		$domicilio = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["domicilio"]))));
		$colonia = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["colonia"]))));
		$delegacion = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["delegacion"]))));
		$seccion = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["seccion"]))));
		$dependencia = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["dependencia"]))));
		$dependenciaMunicipal = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["dependenciaMunicipal"]))));
		$nPreGira = $this->nPreGira();
		$consulta = "";
		// mysql_query($consulta,$this->conexion) or die (mysql_error());
		// $consulta = "SELECT LAST_INSERT_ID() AS id;";
		// $resultado = mysql_query($consulta,$this->conexion) or die (mysql_error());
		// $preGiraId = mysql_fetch_assoc($resultado);
		// $preGiraId = $preGiraId["id"];
	}
	public function nPreGira()
	{
		$consulta = "SELECT (COALESCE(MAX(ngira),0)+1) AS npregira FROM pregira";
		$resultado = mysql_query($consulta,$this->conexion) or die (mysql_error());
		$ngira = mysql_fetch_assoc($resultado);
		return $ngira["npregira"];
	}
}