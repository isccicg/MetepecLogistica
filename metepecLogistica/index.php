<?php
session_start();
    require 'app/controller/mvc.controller.php';
	$mvc = new mvc_controller();	
	require 'app/controller/mvc.controllerUserOfi.php';
	$userO = new mvc_controllerUserOfi();	 
	require 'app/controller/mvc.controllerUserCam.php'; 
	$userC = new mvc_controllerUserCam();
    require 'app/controller/mvc.controllerUserSup.php'; 
	$userS = new mvc_controllerUserSup();	
		error_reporting(0);	

if(isset($_SESSION["slm_usu"]))
{
/*Operaciones de Usuario de Oficina*/
   	if( $_GET['action'] == 'crearCitatorio' ) //muestra  el modulo "crear Citatorio"
	{
			$userO->crearCitatorio();	
	}
	else 	if( $_GET['action'] == 'crearEvento' ) //muestra  el modulo "crear Evento"
	{
			$userO->crearEvento();	
	}
	else 	if( $_GET['action'] == 'crearFormato' ) //muestra  el modulo "crear Formato"
	{
			$userO->crearFormato();	
	}
	else 	if( $_GET['action'] == 'historialCitatorio' ) //muestra  el modulo "historial Citatorio"
	{
			$userO->historialCitatorio();	
	}
	else 	if( $_GET['action'] == 'historialEvento' ) //muestra  el modulo "historial Evento"
	{
			$userO->historialEvento();	
	}
	else 	if( $_GET['action'] == 'historialFormato' ) //muestra  el modulo "historial Formato"
	{
			$userO->historialFormato();	
	}
	else 	if( $_GET['action'] == 'indexUserOfi' ) //muestra  el modulo "index Principal User Oficina"
	{
			$userO->indexUserOfi();	
	}

/*Operaciones de Usuario de Campo*/
   else 	if( $_GET['action'] == 'crearGira' ) //muestra  el modulo "crear Gira"
	{
			$userC->crearGira();	
	}
   else 	if( $_GET['action'] == 'crearPregira' ) //muestra  el modulo "crear Pregira"
	{
			$userC->crearPregira();	
	}
	else 	if( $_GET['action'] == 'historialEventoC' ) //muestra  el modulo "historial Evento"
	{
			$userC->historialEventoC();	
	}   	
	else 	if( $_GET['action'] == 'historialGira' ) //muestra  el modulo "historial Gira"
	{
			$userC->historialGira();	
	}
	
	else 	if( $_GET['action'] == 'historialPregira' ) //muestra  el modulo "historial Pregira"
	{
			$userC->historialPregira();	
	}
	else 	if( $_GET['action'] == 'indexUserCam' ) //muestra  el modulo "index Principal User Campo"
	{
			$userC->indexUserCam();	
	}
	
	/*Operaciones de Usuario de Supervisor*/
	else 	if( $_GET['action'] == 'indexUserSup' ) //muestra  el modulo "index Principal User Campo"
	{
			$userS->indexUserSup();	
	}
	else 	if( $_GET['action'] == 'aprobacionGira' ) //muestra  el modulo "index Principal User Campo"
	{
			$userS->aprobacionGira();	
	}
	else 	if( $_GET['action'] == 'historialAGira' ) //muestra  el modulo "index Principal User Campo"
	{
			$userS->historialAGira();	
	}
	
	else 	if( $_GET['action'] == 'aprobacionPregira' ) //muestra  el modulo "index Principal User Campo"
	{
			$userS->aprobacionPregira();	
	}
	else 	if( $_GET['action'] == 'historialAPregira' ) //muestra  el modulo "index Principal User Campo"
	{
			$userS->historialAPregira();	
	}
	else 	if( $_GET['action'] == 'menuGeneral') //muestra  el modulo "index Principal User Campo"
	{
			$mvc->index();	
			//echo "entre";
	}
}	
else
{ 
	$mvc->login();	
    // $mvc->index();   /*menu principal todas las funciones*/
}
?>