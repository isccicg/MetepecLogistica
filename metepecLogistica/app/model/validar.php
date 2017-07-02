<?php 
	require_once('../bd/conexion.php');

	class validar{
 		protected $acceso;
 		protected $conexion;

		public function __construct() {
			$this->acceso = new accesoDB(); 
 		 	$this->conexion = $this->acceso->conDB();
   		} 

		public function validaUsuario($usuario,$contrasena)
		{

			$usuario = mysql_real_escape_string(strip_tags(stripslashes(trim($usuario))));
			$contrasena = mysql_real_escape_string(strip_tags(stripslashes(trim($contrasena))));
			if(!empty(trim($usuario))){
				if(!empty(trim($contrasena))){
					$consulta = "SELECT * FROM usuario WHERE usuario = '".$usuario."'"; //Consulta si existe el usuario                   
		            $resultado = mysql_query($consulta,$this->conexion) or die(mysql_error());
					$filas = mysql_num_rows($resultado);
						if($filas === 1)
						{
							$consulta = "SELECT * FROM usuario u lEFT JOIN empleado e ON u.empleado_id = e.id WHERE usuario = '$usuario' AND e.empleado_vigente = 1"; //Consulta si el usuario está activo                 
				            $resultado = mysql_query($consulta,$this->conexion) or die(mysql_error());
							$filas = mysql_num_rows($resultado);
							if($filas === 1)
							{			
								$consulta = "SELECT * FROM usuario WHERE usuario = '$usuario' and contrasena = '".sha1($contrasena)."'"; //Consulta si existe el usuario con el password correcto                   
					            $resultado = mysql_query($consulta,$this->conexion) or die(mysql_error());
					           	$filas = mysql_num_rows($resultado);
					           	$datosUsuario = mysql_fetch_assoc($resultado);
								if($filas === 1){
									$_SESSION["slm_usu"] = $usuario;
									$_SESSION["tipoUsuario"] = $datosUsuario["tipousuario"];
									$ultimo_ingreso = date('Y-m-d H:i:s');
									$usuario_id = $datosUsuario['id'];
									$consulta = "UPDATE usuario SET usuario_ultimo_ingreso = '$ultimo_ingreso' WHERE id = '$usuario_id'";              
						            $resultado = mysql_query($consulta,$this->conexion);
						            if($resultado)
						            {
						            	
										return "OK";
										
									}
									else
									{
										return (mysql_error());
									}
								}
								else{
									return "La contraseña es incorrecta.";
								}
							}
							else{
								return "El empleado está dado de baja.";
							}
						}
						else
						{
							return "El usuario no existe.";
						}
				}
				else{
					return "La contraseña es un campo obligatorio.";
				}
			}
			else{
				return "El usuario es un campo obligatorio.";
			}
		}

		public function __destruct() {
				mysql_close($this->conexion);
  		}
	}
?>