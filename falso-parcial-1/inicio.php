<!--2.	Realizar la página index.php , utilizando estilos con la siguiente apariencia

Los códigos de colores usar son los siguientes:
Rojo=#FF0000
Amarillo=#FFFF00
Verde=#00B050
Celeste=#4C9BD3
Azul=#366F91
-->
<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <div class="contenedor">
        <div class="cabecera">
            <div class="logo">
                <img src="imagenes/usfx.png" alt="" width="80px" >
            </div>
            <div class="logo2">
                <img src="imagenes/tecnologia.png" alt="" width="80px" >
            </div>
            <div class="texto">
                <h4 style="color:#FF0000; ">UNIVERSIDAD SAN FRANCISCO XAVIER</h4>
                <p style="color:#4C9BD3; display:inline">Facultad de tecnologia</p>
                <p style="color:#FF0000; display:inline">Sucr</p>
                <p style="color:#FFFF00; display:inline">e-Bol</p><p style="color:#00B050; display:inline">ivia</p>
                <p>Carrera ing. de Sistemas</p>
                <p>Semestre 1-2020</p>
                <p style="display: inline;">Alumno:</p><p style="display: inline;">Danitza Ortiz Morales</p>
                <p style="display: inline;">  CU:</p><p style="display: inline;">111-92</p>
            </div>
        </div>
        <div class="contenido">
            <p>Estos son los datos de autenticacion:</p>
            <p>Nombre:<?php echo $_SESSION['nombres'];?></p>
            <p>Apellido:<?php echo $_SESSION['apellidos'];?></p>
            <p>Nivel:<?php if($_SESSION['nivel'] == 1){
                echo'Administrador';
            }else{echo'Usuario';}?></p>
        </div>
        <div class="menu-derecha">
            <ul>
                <li style="background: #FF0000;"   ><a href="inicio.php" >Inicio</a></li>
                <li style="background: #FFFF00;"><a href="pregunta3.php" >Pregunta 3</a></li>
                <li style="background: #00B050;"><a href="pregunta4.php" >Pregunta 4</a></li>
                <li style="background: #FFFFFF;"><a href="pregunta5.html" >Pregunta 5</a></li>
            </ul>
        </div>
        <div class="footer">
            <p>Todos los derechos reservados</p>
        </div>
    </div>
</body>
</html>
<style>
    .contenedor{
        width: 900px;
        margin: auto;
    }
    .texto{
        text-align: center;
    }
    .cabecera{
        width: 900px;
        height: 200px;
        border: solid black 1px;
    }
    .contenido{
        width: 766px;
        height: 300px;
        float: left;
        border: solid black 1px;
    }
    .menu-derecha{
        border: solid black 1px;
        width: 130px;
        height: 300px;
        float: right;
        background: #366F91;
    }
    .footer{
        float: left;
        width: 900px;
        height: 50px;
        background: #4C9BD3;
        border: solid black 1px;
        text-align: center;
    }
    .logo{
        padding: 20px;
        float: left;
        display: flex;
    }
    .logo2{
        padding : 20px;
        float: right;
    }
    ul{
        list-style: none;
        padding: 15px;
        text-align: center;
    }
    ul>li{
        padding: 9px;
        color: black;
        border: solid black 1px;

    }
    ul>li>a{
        color: black;
        text-decoration: none;
    }
    p{
        margin-block-end: 0.5em;
        margin-block-start: 0.5em;
    }
    .contenido>p{
        padding-left: 30px;
    }
</style>