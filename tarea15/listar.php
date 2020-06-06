
<table class="table table-hover table-warning table-striped ">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido </th>
                                            <th scope="col">Operaciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php include("conexion.php");
                                        $sql = "SELECT * FROM person";
                                        $resultado=$con->query($sql);
                                        while($fila  = $resultado->fetch_assoc()){
                                            echo '<tr>
                                                    <td>'.$fila["nombre"].'</td>
                                                    <td>'.$fila["apellido"].'</td>
                                                    <td><a onclick="eliminar('.$fila["id"].')"><i class="fas fa-trash-alt"></i></a> <a onclick="editar('.$fila["id"].')"<i class="far fa-edit"></i></a></td>
                                                    </tr>';
                                        }
                                    ?>    
                                        
                                    </tbody>
                                </table>