<?php
	class UBcontroller{

		public function plantilla(){
			include "views/template.php";
		}


		public function controladorContenido(){

			if(isset($_GET["cont"])){
				$pagina = $_GET["cont"];
			}else{
				$pagina = "presentacion";
			}
			
			$contenido = modeladorContenido::modeladorContenidoF($pagina);
			
			include $contenido;
		}

		public function verifActive($pagAct){
			
			if(isset($_GET["cont"])){
				$page = $_GET["cont"];
			
				if ($page == $pagAct){
					echo "class='active'";
				}
			}else{
				echo "class='active'";
			}
		}

	}
?>