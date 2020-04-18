<?php
include 'conexion.php';
include_once 'header.php';
$sql = "SELECT usuarios.id, correo, password, nombres, apellidos, idrol, estado, descripcion from usuarios left join roles on usuarios.idrol = roles.id";

$respuesta = $con->query($sql);
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Usuarios</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>

                    <div class="container top ">
                        <div class="row justify-content-between">
                            <div class="col-12">
                                <h2>Lista de Usuarios</h2>
                                <table class="table table-hover table-warning table-striped ">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Correo</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Apellidos</th>
                                            <th scope="col">Rol</th>
                                            <th scope="col">estado</th>
                                            <th scope="col">Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($fila = $respuesta->fetch_assoc()) {
                                            echo '<tr>
                                <td>' . $fila['correo'] . '</td>
                                <td>' . $fila['nombres'] . '</td>  
                                <td>' . $fila['apellidos'] . '</td> 
                                <td>' . $fila['descripcion'] . '</td> 
                                <td>';?> <?php echo $fila['estado']==1 ? '<a href="editarEstado.php?opcion='.$fila['estado'].'&id='.$fila['id'].'" class="badge badge-success">Activado</a>' :'<a  href="editarEstado.php?opcion='.$fila['estado'].'&id='.$fila['id'].'" class="badge badge-danger">Desactivado</a>'; ?> <?php echo' </td>
                                <td><a href="formeditUsuario.php?opcion=' . $fila['id'] . '" class="btn btn-outline-success" ><i class="far fa-edit"></i></a></td>
                            </tr>';
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