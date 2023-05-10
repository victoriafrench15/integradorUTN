<?php

require_once "../controladores/registros.controller.php";
require_once "../modelos/registros.modelo.php";


class AjaxRegistros{
	
	public $validarEmail;

	public function ajaxValidarEmail(){
		$item = "email";
		$valor = $this->validarEmail;
		$respuesta = ControllerRegistros::ctrSeleccionarRegistros($item, $valor);
		echo json_encode($respuesta);
	}


}


if(isset($_POST["validarEmail"])){

	$valEmail = new AjaxRegistros();
	$valEmail -> validarEmail = $_POST["validarEmail"];
	$valEmail -> ajaxValidarEmail();

}
