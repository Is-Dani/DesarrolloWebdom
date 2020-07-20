<?php
    session_start();
    include("colas.php");
    $n=$_SESSION['n'];
    $cola = new Cola($n);

    $opcion=$_GET['opcion'];


    switch ($opcion) {
        case 'insertar':
            $cola->insertar('elemento');
        break;
        case 'mostrar':
            
            $cola->mostrar();
        break;
        case 'eliminar':
            
            $cola->eliminar();
        break;
        default:
        break;
    }
?>