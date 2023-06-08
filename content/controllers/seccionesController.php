<?php

	namespace content\controllers;

	use config\settings\sysConfig as sysConfig;
	use content\component\headElement as headElement;
	use content\modelo\homeModel as homeModel;
	use content\modelo\seccionesModel as seccionesModel;

	class seccionesController{
		private $url;
		private $seccion;
		function __construct($url){
			$objModel = new homeModel;
			$_css = new headElement;
			$_css->Heading();

			$this->url = $url;

			$this->seccion = new seccionesModel();
		}

		public function Consultar(){
			$secciones = $this->seccion->Consultar();
			
			$url = $this->url;
			require_once("view/seccionesView.php");
		}
		
		public function Agregar(){
		}

		public function Modificar(){
		}

		public function Eliminar(){
		}

	}
		

?>