<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body id="contenido">
    <div class="contenedor">
        <div class="cabecera">
            <div class="texto">
                <h5>BIENVENIDOS A HOTEL TARABUCO</h5>
                <p>Usuario: <?php if(isset($_SESSION['usuario'])){
                    echo $_SESSION['usuario'];
                }else{
                    echo'no identificado';
                } ?></p>
                <p>Nivel:<?php
                        if(isset($_SESSION['nivel'])){
                            if ($_SESSION['nivel'] == 0) {
                                echo 'Usuario';
                            } else {
                                echo 'Administrador';
                            }
                        }else{
                            echo 'sin nivel';
                        }
                            ?> </p>
            </div>
        </div>
        <div class="menu-izq">
            <ul>
                <li><a href="#" onclick="cargar('presentacion.html')">Presentacion</a></li>
                <li><a href="#" onclick="cargar('habitaciones.php')">Habitaciones</a></li>
                
                <?php 
                    if(isset($_SESSION['nivel'])){
                if ($_SESSION['nivel']> 0) {
                ?>

                    <a href="#" onclick="cargar('reservas.php')">Reservas</a>
                
                <?php }
            }else{echo'';} ?>

                <li><a href="#" onclick="cargar('cambiarColor.html')">Cambiar Color</a></li>
                <li><a href="#"  onclick="cargarRegLog('login.php')">Cambiar Usuario</a></li>
                <li><a href="#">Salir</a></li>
            </ul>
        </div>
        <div class="container" id="container">

        </div>
    </div>
</body>

</html>
<script src="script.js"></script>
<style>
    .contenedor {
        margin: auto;
        width: 900px;
        border: solid black 1px;
    }

    .cabecera {
        height: 100px;
        border: solid black 1px;
    }

    .menu-izq {
        width: 200px;
        border: solid black 1px;
        min-height: 300px;
        float: left;
    }

    .container {
        width: 696px;
        float: right;
        min-height: 300px;
        border: solid black 1px;
    }

    .texto {
        text-align: center;
        word-spacing: 10px;
    }

    h5 {
        margin-block-end: 3px;
        margin-block-start: 10px;
    }

    p {
        margin-block-end: 3px;
        margin-block-start: 10px;
    }

    ul {
        list-style: none;
    }

    li {
        margin: 15px;
        text-align: start;
    }

    a {
        color: dimgrey;
    }

    .pd {
        padding: 10px;
    }

    .txt-rojo {
        color: #4CAF50;
    }

    .txt-verde {
        color: #ee3326c9;
    }

    input {
        padding: 5px;
        margin: 10px;
    }
</style>