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
    <div class="formulario">
    <h4 class="title">Formulario de registro de turno</h4>
    <div>
        <form action="" method="post">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="registroNombre">
            <label for="email">Email: </label>
            <input type="email" id="email" name="registroEmail">
            <label for="fecha">Fecha: </label>
            <input type="date" id="fecha" name="registroFecha">
            <label for="hora">Hora: </label>
            <input type="time" id="hora" name="registroHora">
            <button type="submit" value="reservar" class="boton">Reservar</button>
        </form>
    </div>
    </div>

    <?php
    //$reserva = ControladorReservas::ctrReseva();
    ?>

</body>
</html>