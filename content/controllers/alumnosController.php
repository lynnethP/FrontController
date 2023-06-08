<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\alumnosModel as alumnosModel;

	class alumnosController{
		private $url;
		private $alumno;
		function __construct($url){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$this->url = $url;
			$this->alumno = new alumnosModel();
		}

		public function Consultar(){
			$alumnos = $this->alumno->Consultar();

			$url = $this->url;
			require_once("view/alumnosView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>