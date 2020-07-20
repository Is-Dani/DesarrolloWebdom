<?php
    $opcion=$_POST['opcion'];
    echo$opcion;
    if($opcion=='fibonaci'){
        echo'
        <form action="impleclassExamen.php" method="post">
            <input type="hidden" value="fibo" name="opcion">
            <label for="num">Introduce un numero para sacar el fibonaci</label><br>
            <input type="number" id="num" name="num"><br><br>
            <input type="submit" value="calcular">
        </form>
        ';
        
    }
    if($opcion=='mayor'){
        echo'
        <form action="impleclassExamen.php" method="post">
            <input type="hidden" value="may" name="opcion">
            <label for="num1">introduce un numero</label><br>
            <input type="number" id="num1" name="num1"><br><br>
            <label for="num2">introduce un numero</label><br>
            <input type="number" id="num2" name="num2"><br><br>
            <label for="num3">introduce un numero</label><br>
            <input type="number" id="num3" name="num3"><br><br>
            <input type="submit" value="calcular">
        </form>
        ';
    }
    if($opcion=='piramide'){
        echo'
        <form action="impleclassExamen.php" method="post">
            <input type="hidden" value="piram" name="opcion">
            <label for="cadena">Introduce una cadena para mostrarlo en piramide</label><br>
            <input type="text" id="cadena" name="cadena"><br><br>
            <input type="submit" value="calcular">
        </form>
        ';
    }
?>