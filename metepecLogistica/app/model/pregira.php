<?php
require_once('../bd/conexion.php');

class pregira
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
		session_start();
		if(isset($_SESSION["slm_usu"]) && !empty($_SESSION["slm_usu"]))
		{
			$realizo = mysql_real_escape_string(strip_tags(stripslashes(trim($_SESSION["slm_usu"]))));
			$citatorioId = mysql_real_escape_string(strip_tags(stripslashes(trim(1))));
			$fecha = date("Y-m-d",strtotime(mysql_real_escape_string(strip_tags(stripslashes(trim($datos["fecha"]))))));
			$hora = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["hora"]))));
			$responsablepG = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["responsablepG"]))));
			$dependencia = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["dependencia"]))));
			$dependenciaMunicipal = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["dependenciaMunicipal"]))));
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
			$nPreGira = $this->nPreGira();
			$fechaElaboracion = date("Y-m-d");

			$consulta = "INSERT INTO pregira(citatorio_id,fecha,hora,responsablepg,dependencia,dep_municipal_id,responsable,cargo_res,email_res,tel_res,enlace,cargo_enl,email_enl,tel_enl,nom_evento,domicilio,colonia,delegacion,seccion,npregira,realizo,fecha_elaboracion) VALUES ($citatorioId,'$fecha','$hora','$responsablepG','$dependencia',$dependenciaMunicipal,'$responsable','$cargoResponsable','$emailResponsable','$telefonoResponsable','$enlace','$cargoEnlace','$emailEnlace','$telefonoEnlace','$nomEvento','$domicilio','$colonia','$delegacion','$seccion',$nPreGira,'$realizo','$fechaElaboracion')";
			mysql_query($consulta,$this->conexion) or die (mysql_error());
			$consulta = "SELECT LAST_INSERT_ID() AS id;";
			$resultado = mysql_query($consulta,$this->conexion) or die (mysql_error());
			$preGiraId = mysql_fetch_assoc($resultado);
			$preGiraId = $preGiraId["id"];

			//Datos alta presidium
			for($i = 0; $i < count($datos["selectDependencia"]) ;$i++)
			{
				$dependenciaConv = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["selectDependencia"][$i]))));
				$enlaceConv = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["selectEnlace"][$i]))));
				$telefonoConv = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["selectTelefono"][$i]))));
				$emailConv = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["selectEmail"][$i]))));
				$asitenciaConv = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["btnRadioAsistencia"][$i]))));
				$asitenciaConv = ($asitenciaConv == "SI") ? 1:0;
				$comisionesConv = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["comisiones"][$i]))));
				$cumplioConv = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["btnRadioCumplio"][$i]))));
				$cumplioConv = ($cumplioConv == "SI") ? 1:0;
				$consulta = "INSERT INTO convocados(pregira_id,dependencia,enlace,telefono,email,asistio,comisiones,cumplio) VALUES ($preGiraId,'$dependenciaConv','$enlaceConv','$telefonoConv','$emailConv',$asitenciaConv,'$comisionesConv',$cumplioConv)";
				mysql_query($consulta,$this->conexion) or die (mysql_error());

			}
		}
		else
			return "Su session a caducado, volver ingresar de nuevo";
	}
	public function nPreGira()
	{
		$consulta = "SELECT (COALESCE(MAX(npregira),0)+1) AS npregira FROM pregira";
		$resultado = mysql_query($consulta,$this->conexion) or die (mysql_error());
		$ngira = mysql_fetch_assoc($resultado);
		return $ngira["npregira"];
	}
	public function __destruct() 
	{
		mysql_close($this->conexion);
	}
}