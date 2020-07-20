<form action="multiplicacion.php" method="post">
<?php
    $n=$_POST['num'];
    echo'ingrese los numeros a multiplicar<br><br>';
    for ($i=0; $i < $n; $i++) { 
        echo'<input type="text" name="i'.$i.'"><br><br>';
    }
    echo'<input type="submit" value="calcular">';
    setcookie('cookie',$n);
?>
</form>
