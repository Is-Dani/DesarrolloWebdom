<!--1.	Mediante Formularios Introducir Dos números n y m ; 
llamar a la página claculo.php que  recibe los parámetros 
por POST y verifica si n es multiplo  de m. Si n es múltiplo 
de muestra la imagen esmultiplo.jpg si no lo es muestra la imagen noesmultiplo.jpg.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<div>
    <h2>calcular si el primer numero a introducir es multiplo del segundo numero a introducir</h2>
    <form action="calculo.php" method="POST">
        <h3>Introducir un numero</h3>
        <input type="text" name="n"> <br>
        <h3>Introducir otro numero</h3>
        <input type="text" name="m"> <br> <br>
        <input type="submit">
    </form>
</div>
<body>
    
</body>
</html>