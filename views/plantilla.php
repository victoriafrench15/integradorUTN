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
        <div class="div_titulo">
            <h1 class="title">CLINICA DENTAL </h1> 
            <img src="img/dentista.png" class="logo_dentista">
        </div>
        <nav class="home_nav">
            <ul>
                <li><a href="index.php?ruta=inicio">INICIO</a></li>
                <li><a href="index.php?ruta=registro">REGISTRAR</a></li>
                <li><a href="index.php?ruta=dentistas"> VER DENTISTAS</a></li>
                <li><a href="index.php?ruta=salir">SALIR</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <?php 
            if (isset($_GET["ruta"])){
                if(
                    $_GET["ruta"]== "inicio" ||
                    $_GET["ruta"] == "registro" ||
                    $_GET["ruta"] == "dentistas" ||
                    $_GET["ruta"] == "editar" ||
                    $_GET["ruta"] == "salir"
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="vistas/js/script.js"></script>
</body>
</html>