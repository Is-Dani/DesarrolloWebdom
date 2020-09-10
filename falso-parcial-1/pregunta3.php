<?php
    include 'conexion.php';
    $sql = "SELECT * from usuarios";
    $respuesta = $con -> query($sql);
?>

            <table border="1">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            while($fila=$respuesta->fetch_assoc()){
                                if($fila['id']%2==1){
                                    echo'
                                    <tr class="azul">
                                        <td>'.$fila['nombres'].'</td>
                                        <td>'.$fila['apellidos'].'</td>
                                        <td>'.$fila['correo'].'</td>
                                    </tr>
                                    ';
                                }else{
                                    echo'
                                    <tr class="celeste">
                                        <td>'.$fila['nombres'].'</td>
                                        <td>'.$fila['apellidos'].'</td>
                                        <td>'.$fila['correo'].'</td>
                                    </tr>
                                    ';
                                }
                            }
                        ?>
                </tbody>
            </table>
    <style>
        .azul{
            background: blue;
        }
        .celeste{
            background: skyblue;
        }
    </style>