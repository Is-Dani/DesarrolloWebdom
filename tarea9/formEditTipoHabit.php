<?php require_once ('header.php');

 include("conexion.php");
 
$id=$_GET['opcion2'];
$sql="SELECT * from tipohabitaciones where id='$id'";
$resultado=$con->query($sql);
$fila=$resultado->fetch_assoc();


?>
    <div class="container">
        <div class="row">
        <div class="col-sm-4 col-12">
                <div class="top">
                    <h3>Agregar tipo de habitacion</h3>
                    <section>
                        <form action="editTipoHabit.php" name="" method="POST">
                        <input type="hidden" value="<?php echo $id;?>" name="id">
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" value="<?php echo $fila['descripcion'] ?>">
                            </div>
                            <div class="form-group">
                                <label>Numero de Camas</label>
                                <input type="number" class="form-control" name="nrocamas" value="<?php echo $fila['nrocamas'] ?>">
                            </div>
                            <div class="mt-2">
                                <input type="submit" name="" value="Agregar" class="btn btn-primary">
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>