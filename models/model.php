<?php

class EnlacesPaginas{

	static public function enlacesPaginasModel($enlacesModel){

		if($enlacesModel == "generador_multiplicativo" || 
		   $enlacesModel == "tareas" || 
		   $enlacesModel == "integrantes"){

			$module = "views/modules/".$enlacesModel.".php";

		}

		else if($enlacesModel == "index" ){

			$module = "views/modules/inicio.php";

		}

		else{

			$module = "views/modules/inicio.php";

		}

		return $module;

	}

}


?>