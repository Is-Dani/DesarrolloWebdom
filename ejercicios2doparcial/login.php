<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div id="contenido">
        <div class="cuadrado">
            <form action="">
                <p>LOGIN</p>
                <label for="correo-au">Usuario</label>
                <input type="text" id="correo-au" name="correo-au"><br>
                <label for="password-au">Password</label>
                <input type="password" id="password-au" name="password-au"><br>
                <a href="#" onclick="cargarRegLog('registro.php')">Registarse</a><br>
                <input type="button" value="Ingresar" id="ingresar" onclick="llamarautenticar('autenticar.php')">
            </form>
        </div>
    </div>
</body>

</html>
<script src="script.js"></script>