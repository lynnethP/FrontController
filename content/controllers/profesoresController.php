<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\profesoresModel as profesoresModel;

	class profesoresController{
		private $url;
		private $profesor;
		function __construct($url, $args=[]){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$this->url = $url;
			$this->profesor = new profesoresModel();
		}

		public function Consultar(){
			$profesores = $this->profesor->Consultar();

			$url = $this->url;
			require_once("view/profesoresView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>