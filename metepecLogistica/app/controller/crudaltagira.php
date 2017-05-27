<?php
if(isset($_GET["accion"]))
{
	switch($_GET["accion"])
	{
		case 'datosAltaGira':
			print_r($_POST["Datos"]);
			break;
		case 'dependenciasM':
			require_once("../model/gira.php");
			$gira = new gira();
			$datos = $gira->cargarDependenciasM();
			echo json_encode($datos);
			break;
		case 'delegaciones':
			require_once("../model/gira.php");
			$gira = new gira();
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