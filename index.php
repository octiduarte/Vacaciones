<?php
session_start();
include('includes/conexion.php');
conectar();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:wght@300&display=swap" rel="stylesheet">


    <title>Vacaciones</title>
</head>

<body>
    <header>
        <div>
            <div class="burger-icon" onclick="toggleMenu()">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>

            <div class="menu">
                <div class="menu-izquierda">
                    <a href="#">Inicio</a>
                </div>
                <div class="menu-derecha">
                    <a href="index.php?modulo=registro">Registrarse</a>
                    <a href="">Iniciar Sesion</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php

        if (!empty($_GET['modulo'])) {
            include('modulos/' . $_GET['modulo'] . '.php');
        } else {
            ?>
            <?php
        }
        ?>
    </main>
    <script src="javascript/script.js"></script>
</body>

</html>