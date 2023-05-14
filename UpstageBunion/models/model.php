<?php
class modeladorContenido{

	public function modeladorContenidoF($pagina){
		if($pagina == "ilustracion"){
			$resultado = "views/modules/".$pagina.".php";
		}elseif($pagina == "presentacion"){
			$resultado = "views/modules/presentacion.php";
		}else{
			$resultado = "views/modules/error404.php";
		}

		return $resultado;
	}

}
?>