<?php
    session_start();
    echo $_SESSION['usuario'];
    if($_SESSION['usuario']=='admin'){
        echo'
        <ul>
            <li><a href="#">crear</a></li>
            <li><a href="#">listar</a></li>
            <li><a href="#">borrar</a></li>
            <li><a href="#">salir</a></li>
        </ul>';
    }else{
        echo'
        <ul>
            <li><a href="#">listar</a></li>
        </ul>';
    }
?>
