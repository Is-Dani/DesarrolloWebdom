<?php
    $opcion=$_GET['option'];
    $n = $_COOKIE['numcookie'];
    switch ($opcion) {
        case 'suma':
            $suma=0;
            for ($i=1; $i <= $n; $i++) { 
                $suma=$i+$suma;
            }
            echo $suma;
        break;
        case 'factorial':
            $fac=1;
            for ($i=1; $i <= $n; $i++) { 
                $fac=$fac*$i;
            }
            echo $fac;
        break;
        case 'fibonaci':
            $f1=0;
            $f2=1;
            $f3=0;
            echo $f1.',';
            for ($i=0; $i < $n-1; $i++) { 
                $f3=$f1+$f2;
                echo $f3.',';
                $f2=$f1;
                $f1=$f3;
            }
        break;
        case 'dividir':
            echo $n/2;
        break;
        default:
            # code...
            break;
    }
?>