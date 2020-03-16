<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<p> 3.	Elabora un programa en php que muestre en forma de pirámide una cadena 
    cuya longitud sea impar ej “Coronas”
                                ---o
                                --ron
                                -orona
                                Coronas

                                </p>
<?php
    $cad = "coronas";
        $mitad=strlen($cad)/2;
        $con = 1;
        echo '<P>-la forma piramidal de la  palabra <strong>'.$cad.'</strong> es</p>';
        for($i=0; $i<=strlen($cad)/2; $i++){
            echo str_repeat("&nbsp", $mitad); //multiplicar strings
            echo substr($cad, $mitad , $con); //sacra elemento de un string
            $mitad--;
            $con+=2;
            echo '</br>';
        }
?>
<div style="text-align: center;">
<p>2. Elaborar un programa que permita imprimir en una lista ennumerada la serie 
fibonaci de un numero n$ quepara este ejemplo tendrá un valor de  
(0, 1, 1, 2 ,3 ,5 ,8 ,13 …) </p>

<?php
$a=0;
$b=1;
$c=0;
$n=8;
echo '<p>-El fibonaci de <strong>'.$n.'</strong> es</p>'. 
$a . ', '. $b;
for($i=1; $i<=$n-2; $i++){
    $c = $b+$a;
    echo ', '.$c;
    $a = $b;
    $b = $c;
}
?>
<p> 1.	Elaborar un programa en php que Permita calcular el factorial de 
un numero $n  quepara este ejemplo tendrá un valor de 8 </p>
<br>
<?php 
    $n = 5;
    $m = 1;
    for($i=1; $i<=$n; $i++){
        $m *= $i;
    }
    echo '<p>-El factorial de <strong>'.$n.'</strong> es </p>'.$m .'<br>';
  
?>

</div>
</body>

</html>