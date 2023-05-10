<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Reservas</title>
</head>
<body>

<?php

if(isset($_GET["id"])){
	$item = "id";
	$valor = $_GET["id"];
	$usuario = ControllerRegistros::ctrSeleccionarRegistros($item, $valor);
}

?>

<div>
	<form method="post" class="formulario formulario_editar">
	<h4 class="title">ACTUALIZAR REGISTRO DEL DENTISTA</h4>
				<label>Nombre</label>
				<input type="text" value="<?php echo $usuario["nombre"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
				<label>Email</label>
				<input type="email" value="<?php echo $usuario["email"]; ?>" placeholder="Escriba su email" id="email" name="actualizarEmail">	
				<label>Turno</label>
				<input type="turno" value="<?php echo $usuario["turno"]; ?>" placeholder="Escriba su turno" id="turno" name="actualizarTurno">
				<label>Especialización</label>
				<input type="especializacion" value="<?php echo $usuario["especializacion"]; ?>" placeholder="Escriba su especializacion" id="especializacion" name="actualizarEspecializacion">		
				<label>Password</label>
				<input type="password" placeholder="Escriba su contraseña" id="pwd" name="actualizarPassword">
				<input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">
				<input type="hidden" name="idUsuario" value="<?php echo $usuario["id"]; ?>">

		<?php
		$actualizar = ControllerRegistros::ctrActualizarRegistro();
		if($actualizar == "ok"){
			echo '<script>
			if ( window.history.replaceState ) {
				window.history.replaceState( null, null, window.location.href );
			}
			</script>';
			echo '<div>El usuario ha sido actualizado</div>
			<script>
				setTimeout(function(){
					window.location = "index.php?pagina=inicio";
				},3000);
			</script>
			';
		}
		?>
		<button type="submit" class="boton">Actualizar</button>
	</form>
</div>
</body>
</html>