<?php

class ControllerReservas{

    static public function ctrRegistro(){
        if (isset($_POST["registroNombre"])) {

			$tabla = "registros";

			$datos = array(
				"nombre" => $_POST["registroNombre"],
				"email" => $_POST["registroEmail"],
				"password" => $_POST["registroPassword"]
			);

			$respuesta = ModeloUsuarios::mdlRegistro($tabla, $datos);

			return $respuesta;
		}
    }
}
