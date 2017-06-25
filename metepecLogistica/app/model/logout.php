<?php
class logout{

		public function salir(){
			session_start();
			unset($_SESSION["slm_usu"]);
			unset($_SESSION["slm_error"]);
			return true;
		}	

	}
	?>