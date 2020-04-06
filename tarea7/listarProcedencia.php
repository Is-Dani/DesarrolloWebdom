<?php
include 'conexion.php';
include_once 'principal.html';
$sql = "SELECT * from procedencia ";
$respuesta = $con->query($sql);
?>
<div class="container mt-5" style="position: relative; top:100px;">
    <table class="table table-hover table-success table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col"> procedencia </th>
                <th scope="col">codigo pais</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($fila = $respuesta->fetch_assoc()) {
                echo '<tr>
                <td>' . $fila['id'] . '</td>
                <td>' . $fila['procedencia'] . '</td>
                <td>' . $fila['codigoPais'] . '</td>  
            </tr>';
            }
            ?>
        </tbody>
    </table>
</div>