<?php

class ControllerRegistros{

	static public function ctrRegistro(){
		if (isset($_POST["registroNombre"])) {
			$tabla = "registros";

			$encriptarPassword = crypt($_POST["registroPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			$datos = array(
				"nombre" => $_POST["registroNombre"],
				"email" => $_POST["registroEmail"],
				"password" => $encriptarPassword
			);
	
			$respuesta = ModeloRegistros::mdlRegistro($tabla, $datos);
			return $respuesta;
		}
	}
	

	static public function ctrSeleccionarRegistros($item, $valor) {
		$tabla = "registros";
		$respuesta = ModeloRegistros::mdlSeleccionarRegistros($tabla, $item, $valor);
		return $respuesta;
	}


	public function ctrIngreso()
	{
		if (isset($_POST["ingresoEmail"])) {
			$tabla = "registros";
			$item = "email";
			$valor = $_POST["ingresoEmail"];
			$respuesta = ModeloRegistros::mdlSeleccionarRegistros($tabla, $item, $valor);
			$encriptarPassword = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
			if ($respuesta["email"] == $_POST["ingresoEmail"] && password_verify($_POST["ingresoPassword"], $respuesta["password"])) {
				$_SESSION["validarIngreso"] = "ok";
				echo '<script>
					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}
					window.location = "index.php?ruta=inicio";
				</script>';
			} else {
				echo '<script>
					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}
				</script>';
				echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
			}
		}
	}

	static public function ctrActualizarRegistro(){
		if (isset($_POST["actualizarNombre"])) {
			if ($_POST["actualizarPassword"] != "") {
				$password = $_POST["actualizarPassword"];
			} else {
				$password = $_POST["passwordActual"];
			}
			$tabla = "registros";
			$datos = array(
				"id" => $_POST["idUsuario"],
				"nombre" => $_POST["actualizarNombre"],
				"email" => $_POST["actualizarEmail"],
				"password" => $password
			);

			$respuesta = ModeloRegistros::mdlActualizarRegistro($tabla, $datos);
			if ($respuesta == "ok") {
				echo '<script>
					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}
					window.location = "index.php?ruta=inicio";
				</script>';
			}
		}
	}

	public function ctrEliminarRegistro()
	{
		if (isset($_POST["eliminarRegistro"])) {
			$tabla = "registros";
			$valor = $_POST["eliminarRegistro"];
			$respuesta = ModeloRegistros::mdlEliminarRegistro($tabla, $valor);
			if ($respuesta == "ok") {
				echo '<script>
					if ( window.history.replaceState ) {
						window.history.replaceState( null, null, window.location.href );
					}
					window.location = "index.php?ruta=inicio";
				</script>';
			}
		}
	}

}
