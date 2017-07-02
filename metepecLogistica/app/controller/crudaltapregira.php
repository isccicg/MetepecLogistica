<?php
if(isset($_GET["accion"]))
{
	// require_once("../model/pregira.php");
	// $pregira = new pregira();
	switch($_GET["accion"])
	{
		case 'datosAltaPreGira':
			print_r($_POST["Datos"]);
			break;
	}
}
?>