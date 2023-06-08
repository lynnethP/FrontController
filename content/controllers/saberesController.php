<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\saberesModel as saberesModel;

	class saberesController{
		private $url;
		private $saber;
		function __construct($url){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$this->url = $url;

			$this->saber = new saberesModel();
		}

		public function Consultar(){
			$saberes = $this->saber->Consultar();
			
			$url = $this->url;
			require_once("view/saberesView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>