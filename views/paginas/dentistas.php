<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dentistas</title>
</head>
<body>
    <h4 class="title title_dentistas">Listado de dentistas</h4>
    <?php

if(!isset($_SESSION["validarIngreso"])){
	echo '<script>window.location = "index.php?ruta=inicio";</script>';
	return;

}else{

	if($_SESSION["validarIngreso"] != "ok"){
		echo '<script>window.location = "index.php?ruta=inicio";</script>';
		return;
	}
	
}

$usuarios = ControllerRegistros::ctrSeleccionarRegistros(null, null);

?>

<table class="table">
	<thead class="table_head">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Turno</th>
			<th>Especializacion</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody class="table_body">

	<?php foreach ($usuarios as $key => $value): ?>

		<tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo $value["nombre"]; ?></td>
			<td><?php echo $value["email"]; ?></td>
			<td><?php echo $value["turno"]; ?></td>
			<td><?php echo $value["especializacion"]; ?></td>
			<td>

			<div>		
				<a href="index.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="boton_editar">Editar</a>

				<form method="post">
					<input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarRegistro">
					<button type="submit" class="boton_borrar">Borrar</button>
					<?php
						$eliminar = new ControllerRegistros();
						$eliminar -> ctrEliminarRegistro();
					?>
				</form>			
			</div>
				

			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>
