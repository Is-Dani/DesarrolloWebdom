<?php
$mul=1;
    for ($i=0; $i <$_COOKIE['cookie'] ; $i++) { 
        $mul = $_POST['i'.$i] * $mul;
        echo $_POST['i'.$i].'<br>';
    }
    echo'El resultado es: '. $mul;
?>