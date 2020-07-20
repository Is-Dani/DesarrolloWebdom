<?php
    
    setcookie('numcookie',$_POST['n']);
    echo'
    <ul>
        <li><a href="mostrarresul.php?option=suma">sumatoria</a></li>
        <li><a href="mostrarresul.php?option=factorial">factorial</a></li>
        <li><a href="mostrarresul.php?option=fibonaci">fibonaci</a></li>
        <li><a href="mostrarresul.php?option=dividir">dividir</a></li>
    </ul>';
?>
