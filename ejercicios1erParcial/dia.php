
<?php

$n = $_GET['n'];
$dias = ['lunes', 'martes','miercoles','jueves','viernes','sabado','domingo'];
$con=1;
echo"<select name='' id=''>";

for ($i=0; $i<7 ; $i++) { 
    if($n==$con){
    echo"<option selected>".$dias[$i]."</option>";
        $con++;
    }else{
    echo"<option>".$dias[$i]."</option>";
    $con++;
    }
}
echo "</select>";
?>
