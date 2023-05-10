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
    <div class="container_registro">
        
        <div>
            <form class="formulario" method="post" >
            <h4 class="title">FORMULARIO DE REGISTRO DE DENTISTAS</h4>
            <div>
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="registroNombre">
                
                <label for="email">Email: </label>
                <input type="email" id="email" name="registroEmail">

                <label for="pwd">Contraseña:</label>
                <input type="password" id="pwd" name="registroPassword">
            </div>

            <?php
                $reservas = ControllerRegistros::ctrRegistro();
            ?>

            <button type="submit" name="ingresar" class="boton">Ingresar</button>
            </form>
        </div>
    </div>
</body>
</html>