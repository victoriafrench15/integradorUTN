<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>HOME - CLINICA DENTAL</title>
</head>
<body>
    <header>
        <div class="div_titulo"><h1 class="title">CLINICA DENTAL </h1> <img src="img/dentista.png" class="logo_dentista"></div>
        <nav class="home_nav">
            <ul>
                <li><a href="index.php?ruta=home">HOME</a></li>
                <li><a href="index.php?ruta=registro">REGISTRO</a></li>
                <li><a href="index.php?ruta=turnos">TURNOS</a></li>
                <li><a href="index.php?ruta=contacto">CONTACTO</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <?php 
            if (isset($_GET["ruta"])){
                if(
                    $_GET["ruta"]== "home" ||
                    $_GET["ruta"] == "registro" ||
                    $_GET["ruta"] == "turnos" ||
                    $_GET["ruta"] == "contacto"
                ){
                    include "paginas/" . $_GET["ruta"] . ".php";
                } else{
                    include "paginas/error404.php";
                }
            
            } else{
                echo "";
            }
            ?>
    </section>
</body>
</html>