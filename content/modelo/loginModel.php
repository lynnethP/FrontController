<?php

	namespace content\modelo;
	use content\config\conection\database as database;

	class loginModel extends database{

		private $con;
		private $user;
		private $passw;

		public function __construct(){
			$this->con = parent::__construct();
		}

		public function getLoginSistema($user, $passw){
			$this->user = $user;
			$this->passw = $passw;

			$this->loginSistema();
		}

		private function loginSistema(){		//Se hace una consulta de los usuarios recibidos

			$sql = ('SELECT * FROM usuario WHERE user = ? AND status = 1');
			$new = parent::prepare($sql);
			$new->bindValue(1, $this->user);
			$new->execute();
			$user = $new->fetchAll();
			if(!empty($user[0]['id'])){
				$password = md5($this->passw);
				
				if (($user[0]["password"] == $password) && ($user[0]["locked"] == 0) && ($user[0]["authused"] == 0) ) {
					$Result = array('msj' => "Good");		//Si todo esta correcto y consigue al usuario
					echo json_encode($Result);
					die();
				}elseif (($user[0]["password"]) && ($user[0]["locked"] == 1)) {	//Error, lo muestra mediante json_encode
					$arrayR = array('msj' => "Account locked. Contact support for more information.");
					echo json_encode($arrayR);
					die();
				}else{
					$Result = array('msj' => "Usuario o contraseña invalido!");
					echo json_encode($Result);
					die();
				}
			}else{
				$Result = array('msj' => "Usuario o contraseña invalido!");
				echo json_encode($Result);
				die();
			}

		}


	}

?>