<?php

require_once "conexion.php";

class ModeloReservas
{


	// ------------------Insertar Registro-------------
	static public function mdlReservas($tabla, $datos)
	{


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, fecha, hora) VALUES (:nombre, :email, :fecha, :hora)");


		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":hora", $datos["hora"], PDO::PARAM_STR);

		if ($stmt->execute()) {

			return "ok";
		} else {

			print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->closeCursor();

		$stmt = null;
	}



}
