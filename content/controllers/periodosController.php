<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\periodosModel as periodosModel;

	class periodosController{
		private $url;
		private $periodo;
		function __construct($url){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$this->url = $url;

			$this->periodo = new periodosModel();
		}

		public function Consultar(){
			$periodos = $this->periodo->Consultar();
			
			$url = $this->url;
			require_once("view/periodosView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>