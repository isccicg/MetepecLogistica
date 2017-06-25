<?php 
class sesion
{

	public function ultimaActividad()
	{
		session_start();
		if (isset($_SESSION['slm_actividad']) && (time() - $_SESSION['slm_actividad'] > 300)) {
			// 30 minutos
			unset($_SESSION["slm_usu"]);
			unset($_SESSION["slm_error"]);
			unset($_SESSION["slm_actividad"]);
			echo "<script type='text/javascript'>
				alert('Expiró tu sesión, inicia nuevamente.');
				location.reload();
			</script>";
		}
		$_SESSION['slm_actividad'] = time();
	}	

}
?>