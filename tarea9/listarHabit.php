<?php
include 'conexion.php';
include_once 'header.php';
$sql = "SELECT habitacion.id, nro, descripcion, banoprivado, espacio, precio from habitacion left join tipohabitaciones on habitacion.idtipohabitacion = tipohabitaciones.id";

$respuesta = $con->query($sql);
$sql2 = "SELECT * from tipohabitaciones";
$respuesta2 = $con->query($sql2);
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">HABITACIONES</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>

                    <div class="container top ">
                        <div class="row justify-content-between">
                            <div class="col-lg-8">
                                <h2>Lista de habitaciones</h2>
                                <table class="table table-hover table-warning table-striped ">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">nro</th>
                                            <th scope="col"> tipo habitacion </th>
                                            <th scope="col">Baño Privado</th>
                                            <th scope="col">Espacio</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Eliminar</th>
                                            <th scope="col">Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($fila = $respuesta->fetch_assoc()) {
                                            echo '<tr>
                                <td>' . $fila['nro'] . '</td>
                                <td>' . $fila['descripcion'] . '</td>
                                <td>' ?> <?php echo  $fila['banoprivado'] == 1 ? 'Si' : 'No'; ?> <?php echo '</td>  
                                <td>' . $fila['espacio'] . '</td> 
                                <td>' . $fila['precio'] . '</td> 
                                <td><a href="eliminarHabit.php?opcion=' . $fila['id'] . '" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a></td>
                                <td><a href="formEditHabit.php?opcion=' . $fila['id'] . '" class="btn btn-outline-success" ><i class="far fa-edit"></i></a></td>
                            </tr>';
                                                                                                }
                                                                                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-3">
                                <h3>Tipo habitacion</h4>
                                    <table class="table table-hover table-success table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">descrip</th>
                                                <th scope="col">numero de camas</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            while ($fila2 = $respuesta2->fetch_assoc()) {
                                                echo '
                            <tr>
                                <td>' . $fila2['descripcion'] . '</td>
                                <td>' . $fila2['nrocamas'] . '
                                <a href="eliminarTipoHabit.php?opcion2=' . $fila2['id'] . '" class="btn btn-outline-danger mi-left"><i class="fas fa-trash-alt"></i></a>
                                <a href="formEditTipoHabit.php?opcion2=' . $fila2['id'] . '" class="btn btn-outline-success mi-left"><i class="far fa-edit"></i></a></td>
                            </tr>
                        ';
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
    </section>

    <?php require_once('footer.php'); ?>
    <script>
        $("#nav-listarHabit").addClass("active");
    </script>