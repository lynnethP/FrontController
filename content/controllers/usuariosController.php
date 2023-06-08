<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\usuariosModel as usuariosModel;

	class usuariosController{
		private $url;
		private $usuario;
		function __construct($url){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$this->url = $url;

			$this->usuario = new usuariosModel();
		}

		public function Consultar(){
			$usuarios = $this->usuario->Consultar();
			
			$url = $this->url;
			require_once("view/usuariosView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>