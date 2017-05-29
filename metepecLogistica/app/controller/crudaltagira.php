<?php
if(isset($_GET["accion"]))
{
	require_once("../model/gira.php");
	$gira = new gira();
	switch($_GET["accion"])
	{
		
		case 'datosAltaGira':
			print_r($_POST["Datos"]);
			$datosG = $gira->altaGira($_POST["Datos"]); 
			break;
		case 'dependenciasM':
			$datos = $gira->cargarDependenciasM();
			echo json_encode($datos);
			break;
		case 'delegaciones':
			$datos = $gira->cargarDelegaciones();
			echo json_encode($datos);
			break;

		default:
			header("location:../view/index.php");
			break;
	}
}
else
	header("location:../view/index.php");
?>