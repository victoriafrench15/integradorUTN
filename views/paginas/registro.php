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
    <h4 class="title">Formulario de registro de turno</h4>
    <div>
        <form class="formulario" method="post" >
            <div>
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="registroNombre">
                
                <label for="email">Email: </label>
                <input type="email" id="email" name="registroEmail">

                <label for="pwd">Contraseña:</label>
                <input type="password" id="pwd" name="registroPassword">
            </div>

            <?php
                $reservas = ControllerReservas::ctrRegistro();
            ?>

            <button type="submit" name="ingresar" class="boton">Ingresar</button>
        </form>
    </div>
</body>
</html>