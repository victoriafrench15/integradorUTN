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
                <input type="text" id="nombre" name="registroNombre" required>
                
                <label for="email">Email: </label>
                <input type="email" id="email" name="registroEmail" required>

                <label for="turno">Turno: </label>
                <input type="text" id="turno" name="registroTurno">

                <label for="especializacion">Especialización: </label>
                <input type="text" id="especializacion" name="registroEspecializacion">

                <label for="pwd">Contraseña:</label>
                <input type="password" id="pwd" name="registroPassword" required>
            </div>

            <?php
                $registro = ControllerRegistros::ctrRegistro();
                if($registro =="ok"){
                
                    echo '<script> 
                        if (window.history.replaceState){
                        window.history.replaceState(null,null, window.location.href);
                        }
                        </script>';
                        
                    echo '<div class="exito-message"> El dentista se ha registrado con exito </div>';
                    }
                    if ($registro == "error"){
                    echo '<script> 
                    if (window.history.replaceState){
                        window.history.replaceState(null,null, window.location.href);
                    }
                    </script>';
                    
                    echo '<div class="error-message" > Error. El campo nombre no permite caracteres especiales</div>';
                    }
            ?> 

            <button type="submit" name="ingresar" class="boton">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>