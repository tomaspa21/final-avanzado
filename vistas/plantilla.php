<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" />
    <title> Registros Hong Kong </title>
</head>

<!--Botonera-->
<section id="contenedor">
    <header>

        <body>
            

            <div id="marca">
                <h1> Hong Kong </h1>
            </div>
            <nav id="botonera_principal">
                <ul>
                    <li> <a class="" href="index.php?ruta=portada"> Portada </a>
                    </li>
                    <li> <a class="" href="index.php?ruta=registro"> Registro </a>
                    </li>
                    <li> <a class="" href="index.php?ruta=ingreso"> Ingreso </a>
                    </li>
                    <li> <a class="" href="index.php?ruta=lista"> Lista </a>
                    </li>
                    <li> <a class="" href="index.php?ruta=salir"> Salir </a>
                    </li>
                </ul>
            </nav>

    </header>

    <!--CONTENIDO-->
    <section id="contenido">
        <?php

        if (isset($_GET["ruta"])) {

            if (
                $_GET["ruta"] == "portada" ||
                $_GET["ruta"] == "registro" ||
                $_GET["ruta"] == "ingreso" ||
                $_GET["ruta"] == "lista" ||
                $_GET["ruta"] == "editar" ||
                $_GET["ruta"] == "salir"
            ) {

                include "paginas/" . $_GET["ruta"] . ".php";
            } else {
                include "paginas/error404.php";
            }
        } else {

            include "paginas/portada.php";
        }

        ?>

    </section>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="vistas/js/script.js"></script>
</body>

</html>