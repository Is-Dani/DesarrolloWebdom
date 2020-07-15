<?php require_once('header.php');
include("conexion.php");

$id = $_GET['opcion2'];
$sql = "SELECT * from tipohabitaciones where id='$id'";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();
?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">EDITAR TIPO DE HABITACIONES</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="row mi-padding">
                        <div class="offset col-sm-7 col-12">
                            <div class="top">
                                <h3>Editar tipo de habitacion</h3>
                                <section>
                                    <form action="editTipoHabit.php" name="" method="POST">
                                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                                        <div class="form-group">
                                            <label>Descripcion</label>
                                            <input type="text" name="descripcion" class="form-control" value="<?php echo $fila['descripcion'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Numero de Camas</label>
                                            <input type="number" class="form-control" name="nrocamas" value="<?php echo $fila['nrocamas'] ?>">
                                        </div>
                                        <div class="mt-2">
                                            <input type="submit" name="" value="Guardar Cambios" class="btn btn-primary">
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>
<?php require_once('footer.php'); ?>