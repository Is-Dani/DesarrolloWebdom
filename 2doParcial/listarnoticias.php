<?php
include 'conexion.php';
$sql = "SELECT * from noticias";
$resultado = $con->query($sql);

?>
<table border="1">
    <tr>
        <th>Imagen</th>
        <th>Titulo</th>
        <th>Texto</th>
        <th>Fecha</th>
    </tr>
    <?php
    while ($fila  = $resultado->fetch_assoc()) {
        echo'
        <tr>
            <td><img src="images/'.$fila['imagen'].'" alt=""></td>
            <td>'.$fila['titulo'].'</td>
            <td>'.substr("$fila[texto]",0, 40).'</td>
            <td>'.$fila['fecha'].'</td>
        </tr>';
    }
    ?>
    
</table>