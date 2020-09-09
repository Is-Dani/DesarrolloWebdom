<?php
    include 'conexion.php';
    session_start();
    $sql = "SELECT * from habitacion";
    $respuesta = $con->query($sql);
?>
<div class="pd"> 
        <h5>HABITACIONES</h5>
        <table border="1">
            <tr>
                <th>Foto</th>
                <th>Numero</th>
                <th>Bano Privado</th>
                <th>Espacio</th>
                <th>Precio</th>
                <th>operaciones</th>
            </tr>
        <?php
            while($fila=$respuesta->fetch_assoc()){
            echo' <tr>
                    <td>Foto</td>
                    <td>'.$fila['nro'].'</td>
                    <td>'; echo $fila['banoprivado']==1? 'si':'no' ; echo'</td>
                    <td>'.$fila['espacio'].'</td>
                    <td>'.$fila['precio'].'</td>';
                    if(isset($_SESSION['nivel'])){
                if($_SESSION['nivel'] == 0){
                    echo'
                        <td><a href="javascript:Confirmado('.$fila["id"].')" class="txt-rojo" >Reservar</a></td>';
                    
                }else{
                    echo'
                        <td><a href="javascript:editar('.$fila["id"].')" class="txt-verde" >Editar</a></td>
                        <td><a href="javascript:eliminar('.$fila["id"].')" class="txt-rojo" >Eliminar</a></td>';
                }}
            echo '</tr>';
            }?>
        </table>
        
        <?php
        if(isset($_SESSION['nivel']) != 0){
        ?>
        
        <div class='pd'>
            <button onclick="cargar('formInsertarHabit.php')" value="insertar">insertar</button>
            </div>

        <?php
        }?>

            
</div>