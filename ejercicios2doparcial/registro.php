<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div id="contenido">
        <div class="cuadrado">
            <form action="">
                <p>REGISTRO</p>
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido"><br>
                <label for="correo">Correo</label>
                <input type="text" id="correo-reg" name="correo"><br>
                <label for="password">Password</label>
                <input type="password" id="password-reg" name="password"><br>
                <label for="sexo">Sexo</label>
                <input type="radio" id="hombre" name="sexo" value="Hombre">
                <label for="hombre">Hombre</label>
                <input type="radio" id="mujer" name="sexo" value="mujer">
                <label for="mujer">Mujer</label><br>
                <a href="#" onclick="cargarRegLog('login.php')" >Login</a><br>
                <input type="button" value="Registrar" id="registrar" onclick="llamarregistrar('registrarUsuarios.php')">
            </form>
        </div>
    </div>
</body>

</html>