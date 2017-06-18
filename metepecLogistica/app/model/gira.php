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
	public function altaGira($datos)
	{
		//Datos generales de alta de gira
		$pregiraId = mysql_real_escape_string(strip_tags(stripslashes(trim(1))));
		$fecha = date("Y-m-d",strtotime(mysql_real_escape_string(strip_tags(stripslashes(trim($datos["fecha"]))))));
		$hora = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["hora"]))));
		$nomEvento = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["nombreEvento"]))));
		$numAsistentes = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["numAsistentes"]))));
		$domicilio = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["domicilio"]))));
		$colonia = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["colonia"]))));
		$delegacion = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["delegacion"]))));
		$seccion = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["seccion"]))));
		$responsable = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["responsable"]))));
		$dependencia = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["dependencia"]))));
		$dependenciaMunicipal = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["dependenciaMunicipal"]))));
		$ngira = $this->ngira();
		$consulta = "INSERT INTO gira(pregira_id,fecha,hora,nombre_evento,num_asistente,domicilio,colonia,delegacion_id,seccion,responsable,dependencia,dep_municipal_id,ngira,realizo,fecha_elaboracion) VALUES ($pregiraId,'$fecha','$hora','$nomEvento','$numAsistentes','$domicilio','$colonia',$delegacion,'$seccion','$responsable','$dependencia',$dependenciaMunicipal,$ngira,'usuario','".date("Y-m-d")."');";
		mysql_query($consulta,$this->conexion) or die (mysql_error());
		$consulta = "SELECT LAST_INSERT_ID() AS id;";
		$resultado = mysql_query($consulta,$this->conexion) or die (mysql_error());
		$giraId = mysql_fetch_assoc($resultado);
		$giraId = $giraId["id"];
		//Datos alta Presidente municipal
		$asistenciaPreMunicipal = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["btnRadioAsistenciaPm"]))));
		if($asistenciaPreMunicipal == "SI")
		{
			$asistenciaPreMunicipal = 1;
			$nomRepresentante = "N/A";
			$cumplioRepresentante = 0;
		}
		else
		{
			$nomRepresentante = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["nombreRepresentantePm"]))));
			$cumplioRepresentante = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["btnRadioCumplioPm"]))));
		}
		$consulta = "INSERT INTO presidente(gira_id,asistencia,nombre_representante,cumplio) VALUES ($giraId,'$asistenciaPreMunicipal','$nomRepresentante','$cumplioRepresentante')";
		mysql_query($consulta,$this->conexion) or die (mysql_error());
		//Fin Presidente municipal


		//Datos alta presidium
		for($i = 0; $i < count($datos["nombreTitular"]) ;$i++)
		{
			$nombreTitular = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["nombreTitular"][$i]))));
			$cargoTitular = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["cargoTitular"][$i]))));
			$radioAsistenciaTitular = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["radioAsistenciaTitular"][$i]))));
			$radioAsistenciaTitular = ($radioAsistenciaTitular === "SI") ? 1:0;
			$nombreRepresentante = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["nombreRepresentante"][$i]))));
			$cargoRepresentante = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["cargoRepresentante"][$i]))));
			$radioAsistenciaRep = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["radioAsistenciaRep"][$i]))));
			$radioAsistenciaRep = ($radioAsistenciaRep === "SI") ? 1:0;
			$consulta = "INSERT INTO presidium(gira_id,nombre_titular,cargo_titular,asistencia_titular,nombre_representante,cargo_representante,asistencia_representante) VALUES ($giraId,'$nombreTitular','$cargoTitular',$radioAsistenciaTitular,'$nombreRepresentante','$$cargoRepresentante',$radioAsistenciaRep);";
			mysql_query($consulta,$this->conexion) or die (mysql_error());
		}
		//Fin alta presidium
		//Datos invitados especiales
		for($i = 0;$i < count($datos["nombreIe"]); $i++)
		{
			$nomInvEspecial = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["nombreIe"][$i]))));
			$cargoInvEspecial = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["cargoIe"][$i]))));
			$consulta = "INSERT INTO invitados(gira_id,nombre,cargo) VALUES ($giraId,'$nomInvEspecial','$cargoInvEspecial')";
			mysql_query($consulta,$this->conexion) or die (mysql_error());
		}
		//Fin invitados especiales
		
		for($i = 0; $i < count($datos["checkboxIntCabildo"]); $i++)//Datos integrantes de cabildo
		{
			$intCabildo = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["checkboxIntCabildo"][$i]))));
			$consulta = "INSERT INTO cabildo(gira_id,regidores) VALUES ($giraId,'$intCabildo')";
			mysql_query($consulta,$this->conexion) or die (mysql_error());
		}
		//Fin integrantes de cabildo
		
		for($i = 0;$i < count($datos["horaActividad"]); $i++)//Datos orden del dia
		{
			$horaActividad = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["horaActividad"][$i]))));
			$actividad = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["actividad"][$i]))));
			$duracionActividad = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["duracionActividad"][$i]))));
			$consulta = "INSERT INTO orden(gira_id,hora,actividad,duracion) VALUES ($giraId,'$horaActividad','$actividad','$duracionActividad')";
			mysql_query($consulta,$this->conexion) or die (mysql_error());
		}
		//Fin orden del dia

		for($i = 0;$i < count($datos["nombreBeneficiario"]); $i++)//Datos beneficiarios
		{
			$nomBeneficiarios = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["nombreBeneficiario"][$i]))));
			$delegacionBeneficiario = mysql_real_escape_string(strip_tags(stripslashes(trim($datos["delegacionBeneficiario"][$i]))));
			$consulta = "INSERT INTO beneficiarios(gira_id,nombre,delegacion) VALUES ($giraId,'$nomBeneficiarios','$delegacionBeneficiario')";
			mysql_query($consulta,$this->conexion) or die (mysql_error());
		}
	}
	public function ngira()
	{
		$consulta = "SELECT (COALESCE(MAX(ngira),0)+1) AS ngira FROM gira";
		$resultado = mysql_query($consulta,$this->conexion) or die (mysql_error());
		$ngira = mysql_fetch_assoc($resultado);
		return $ngira["ngira"];
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