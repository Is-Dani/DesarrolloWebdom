<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="form animated flipInX">
    <h2>Bienvenido, Inicia Sesion</h2>
    <form action="autenticar.php" method="POST">
        <input placeholder="Correo" type="text" name="correo"></input>
        <input placeholder="Contraseña" type="password" name="password"></input>
        <input type="submit" class="boton" value="ingresar">
    </form>
    </div>
</body>
</html>
