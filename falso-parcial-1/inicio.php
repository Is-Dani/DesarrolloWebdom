<?php
include("conexion.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div id="contenedor">
        <div id="arriba">
            <div id="imagen">
                <img src="images/usfx.png" width="100" height="100">
            </div>
            <div id="texto">
                <h1>UNIVERSIDAD DE SAN FRANCISCO XAVIER</h1>
                <h2>FACULTAD DE TECNOLOGIA</h2>
                <h3> <span style="color:red;">sucr</span> <span style="color:yellow;">e-Bol</span> <span style="color:green;">ivia</span></h3>
                <p class="datos">Carreras: Ing. en Ciencias de la Computación
                    <br> Semestre 1-2020 <br>
                    <br>Alumno:Danitza Ortiz Morales.
                    <br>CU: 111-92.
                </p>
            </div>
            <div id="imagen">
                <img src="images/tecnologia.png" width="100" height="100">
            </div>
        </div>
        <div>
            <div id="contenido">
                <p>nombre: <?php session_start();
                            echo $_SESSION['nombre']; ?> <br>
                    apellido: <?php
                                echo $_SESSION['apellido']; ?> <br>
                    nivel: <?php
                            if ($_SESSION['nivel'] == 1) {
                                echo 'administrador';
                            } else {
                                echo 'usuario';
                            }
                            ?>
                </p>
            </div>
            <div id="izquierda">
                <ul class="menu">

                    <li class="centro"><a href="inicio.php" onclick="" style="background-color: red;">inicio </a></li>
                    <li class="centro"><a href="pregunta3.php" onclick="" style="background-color: yellow;">pregunta 3</a></li>
                    <li class="centro"><a href="pregunta4.php" style="background-color: green;">pregunta 4</a></li>
                    <li class="centro"><a href="pregunta5.html" onclick="">pregunta 5</a></li>
                </ul>
            </div>
        </div>

        <div id="foot">
            todos los Derechos reservados
        </div>

    </div>
</body>

</html>