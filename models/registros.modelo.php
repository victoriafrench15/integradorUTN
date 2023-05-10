<?php

require_once "conexion.php";

class ModeloRegistros
{
	static public function mdlRegistro($tabla, $datos)
	{
		$password_encriptada = password_hash($datos["password"], PASSWORD_DEFAULT);

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES (:nombre, :email, :password)");
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $password_encriptada, PDO::PARAM_STR);
	
		if ($stmt->execute()) {
			return "ok";
		} else {
			print_r(Conexion::conectar()->errorInfo());
		}
	
		$stmt->closeCursor();
		$stmt = null;
	}
	


	static public function mdlSeleccionarRegistros($tabla, $item, $valor){
		if ($item == null && $valor == null) {
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");
			$stmt->execute();
			$registros = $stmt->fetchAll();
			$stmt->closeCursor();
			return $registros;
		} else {
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id DESC");
			$stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
			$stmt->execute();
			$registro = $stmt->fetch();
			$stmt->closeCursor();
			return $registro;
		}
	} 
	

	static public function mdlActualizarRegistro($tabla, $datos)
	{

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id = :id");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "ok";
		} else {
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->closeCursor();
		$stmt = null;
	}


	static public function mdlEliminarRegistro($tabla, $valor){
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
		$stmt->bindParam(":id", $valor, PDO::PARAM_INT);
		if($stmt->execute()){
			return "ok";
		}else{
			print_r(Conexion::conectar()->errorInfo());
		}
		$stmt->closeCursor();
		$stmt = null;	
	}

}