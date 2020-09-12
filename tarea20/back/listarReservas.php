<?php
include 'conexion.php';
$sql = "SELECT * from reservas";
$respuesta = $con->query($sql);
header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=listarReservas.xls');

?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Reservas</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="container top ">
                        <div class="row justify-content-between">
                            <div class="col-md-12">
                                <h2>Lista de Reservas</h2>
                                <div class="table-responsive">
                                    <table class="table table-hover table-warning table-striped ">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">codigo</th>
                                                <th scope="col">Fecha ingreso</th>
                                                <th scope="col">Fecha Salida</th>
                                                <th scope="col">Precio</th>
                                                <th scope="col">Pagada</th>
                                                <th scope="col">Nombre y Apellido</th>
                                                <th scope="col">Correo</th>
                                                <th scope="col"> Eliminar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            while ($fila = $respuesta->fetch_assoc()) {
                                                echo '
                                                <tr>
                                                    <td>' . $fila['id'] . '</td>
                                                    <td>' . $fila['fechaingreso'] . '</td>  
                                                    <td>' . $fila['fechasalida'] . '</td> 
                                                    <td>' . $fila['precio'] . '</td> 
                                                    <td>' . $fila['pagada'] . '</td> 
                                                    <td>' . $fila['nombre'] . '</td> 
                                                    <td>' . $fila['correoelectronico'] . '</td> 
                                                    <td>';
                                            ?> 
                                                <?php
                                        
                                                echo ' </td>
                                                <td><a href="javascript:eliminarReserva('.$fila["id"].')"><i class="fas fa-trash-alt text-danger"></i></a></td></tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require_once('footer.php'); ?>