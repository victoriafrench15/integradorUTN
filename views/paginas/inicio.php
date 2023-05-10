<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
	
	<div class="container_inicio">
		
		<img src="img/clinicaDental.jfif" class="foto_inicio">

		<form class="formulario" method="post">
			<h4 class="title">INICIO DE SESION</h4>
			<div>
				<label for="email">Correo electrónico:</label>
				<input type="email" class="" name="ingresoEmail">
				
				<label for="pwd">Contraseña:</label>
				<input type="password" class="" name="ingresoPassword">
			</div>
			<?php 
			$ingreso = new ControllerRegistros();
			$ingreso -> ctrIngreso();
			?>
			<button type="submit" class="boton">Ingresar</button>
		</form>

	</div>



</body>
</html>