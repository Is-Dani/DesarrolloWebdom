<?php
include("conexion.php");
$id = $_POST['id'];
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
                        <h1 class="box-title">TIPO DE HABITACIONES</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row justify-content-between mi-padding">
                            <div class="offset col-12 col-sm-7">
                                <div class="top">
                                    <h2>EDITAR TIPO DE HABITACIONES</h2>
                                    <section>
                                        <form>
                                            <input type="hidden" value="<?php echo $id; ?>" name="id" id="EtipoHId">
                                            <div class="form-group">
                                                <label>Descripcion</label>
                                                <input type="text" name="descripcion" class="form-control" id="EtipoHdescripcion" value="<?php echo $fila['descripcion'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Numero de Camas</label>
                                                <input type="number" class="form-control" name="nrocamas" id="EtipoHnrocamas" value="<?php echo $fila['nrocamas'] ?>">
                                            </div>
                                            <div class="mt-2">
                                                <input type="button" name="" value="Guardar Cambios" onclick="llamarEditarTipoHabit()" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>