<?php
    require_once('class_Examen.php');
    $n=isset($_POST['num'])?$_POST['num']:0;
    $a=isset($_POST['num1'])?$_POST['num1']:0;
    $b=isset($_POST['num2'])?$_POST['num2']:0;
    $c=isset($_POST['num3'])?$_POST['num3']:0;
    $cadena=isset($_POST['cadena'])?$_POST['cadena']:0;
    $opcion=$_POST['opcion'];
    echo $opcion.'<br>';

    switch($opcion){
        case 'fibo':
            $examen = new _examen($n,$a,$b,$c,$cadena);
            $examen->Calcularfibonaci();
        break;
        case 'may':
            $examen = new _examen($n,$a,$b,$c,$cadena);
            $examen->Calcularmayor();
        break;
        case 'piram':
            $examen = new _examen($n,$a,$b,$c,$cadena);
            $examen->piramide();
        break;
    }
?>