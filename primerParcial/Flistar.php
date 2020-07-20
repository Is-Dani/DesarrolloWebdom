<?php
    
$con=new mysqli("localhost","root","","bd_parcial");
if ($con->connect_error)
 die ("conexion fallada".$con->connect_error);

 $sql = "SELECT * FROM `pacientes`";
 $resultado=$con->query($sql);

?>

<table border="1">
    <thead>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>SEXO</th>
        <th>MESA</th>
    </thead>

    <tbody>
        <?php
            $con=1;
            while($fila=$resultado->fetch_assoc()){
                if($con%2==0){
                echo '<tr>
                    <td>'.$fila['nombres'].'</td>
                    <td>'.$fila['apellidos'].'</td>
                    <td>'.$fila['sexo'].'</td>
                    <td>'.$fila['mesa'].'</td>
                </tr>';
                }else{
                    echo '<tr class="intercalado">
                    <td>'.$fila['nombres'].'</td>
                    <td>'.$fila['apellidos'].'</td>
                    <td>'.$fila['sexo'].'</td>
                    <td>'.$fila['mesa'].'</td>
                </tr>'; 
                }
                $con++;
            }
        ?>
    </tbody>

</table>



<style>
    thead{
        background:#ED7D31;
        color: #fff;
    }
    .intercalado{
        background-color:#FBE4D5;
    }
</style>