<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div>
        <div class="form">
            <div id="form-1">
                <h2>Bienvenido, Inicia Sesion</h2>
                <form action="autenticar.php" method="POST">
                    <input placeholder="Correo" type="text" name="correo"></input>
                    <input placeholder="Contraseña" type="password" name="password"></input>
                    <p>no tienes una cuenta?<a href="javascript:cambiarRegistrar()">Registrate</a></p>
                    <input type="submit" class="boton" value="ingresar">
                </form>
            </div>
            <div id="form-2">
                <h2>Registrate como Usuario</h2>
                <form action="registrar.php" method="POST">
                    <input placeholder="Correo" type="text" name="correoReg"></input>
                    <input placeholder="Contraseña" type="password" name="passwordReg"></input>
                    <input placeholder="Nombre" type="nombreReg" name="nombreReg"></input>
                    <input placeholder="Apellido" type="apellidoReg" name="apellidoReg"></input>
                    <p>Ya tienes una cuenta?<a href="javascript:cambiarLogin()">Login</a></p>
                    <input type="submit" class="boton" value="Registrar">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script src="../back/ajax.js"></script>
<script>
    document.getElementById('form-1').style.display = 'block';
    document.getElementById('form-2').style.display = 'none';

    function cambiarRegistrar() {
        document.getElementById('form-1').style.display = 'none';
        document.getElementById('form-2').style.display = 'block';

    }

    function cambiarLogin() {
        document.getElementById('form-1').style.display = 'block';
        document.getElementById('form-2').style.display = 'none';
    }
</script>