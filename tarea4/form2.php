<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio2</title>
</head>

<body>
    <!--2.	solicitar mediante formularios filas y columnas  
    luego llamar a la página tablaintercalado.php que imprime 
    la tabla con los valores con la cantidad de filas  y columnas introducidas.
    En las columnas impares imprime la bandera de Bolivia 
    En las columnas  pares la bandera de chuquisaca
    Ej: para 5 filas y 2 columnas.(utilizar css con clases)-->

    <form action="tablaintercalado.php" method="GET">
        <h3>ingrese el numero de filas</h3>
        <input type="text" name="filas"> <br>
        <h3>ingrese el numero de columnas</h3>
        <input type="text" name="columnas"> <br><br>
        <input type="submit">
    </form>
</body>

</html>