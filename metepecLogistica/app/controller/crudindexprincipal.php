<?php
if(isset($_GET['urlValue']))
{
		
	require_once("../model/sesion.php");
	$sesion = new sesion();
	$sesion -> ultimaActividad();
		
	switch ($_GET['urlValue']) 
	{

	    case 'login':

	    	require_once('../model/validar.php');

			$valida = new validar();

			if(empty($_SESSION['slm_usu'])){
				$resultado = $valida->validaUsuario($_POST['usuario'],$_POST['contrasena']);
					if($resultado === "OK"){
						// echo "ok";
						header('Location:../../index.php');
					}
					else{
						$_SESSION["slm_error"] = $resultado;
						header('Location: '. $_SERVER['HTTP_REFERER']);
					}
			}
			elseif(!empty($_SESSION['slm_usu']))
			{
				// require_once("../model/usuarios.php");
				// $usu = new usuarios();
				// $datosUsuario = $usu -> datosUsuario($_SESSION["slm_usu"]);
				// $numero_empleado = $_SESSION['slm_usu'];
				// $empresa = $datosUsuario["empresa"];
		  //   	$año = date("Y"); 
				// require_once("../view/principal.php");
				header('Location:../../index.php?action=menuGeneral');
				unset($_SESSION["slm_error"]);
			}

	        break;

	    case 'logout':
	    	require_once('../model/logout.php');
	    	
			$log = new logout();

			$resultadoLog = $log->salir();

			if($resultadoLog == true)
				header('Location:../../index.php');
			else
				header('Location: '. $_SERVER['HTTP_REFERER']); //Regresa a la pagina anterior
	        break;

	    default:
			// require_once('../view/index.php');		
			break;	
	}
}
else
{	
	header('Location:../../index.php');
	unset($_SESSION["slm_error"]);
}	
?>
