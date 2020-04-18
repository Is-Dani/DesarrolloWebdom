<?php require_once('header.php');

include("conexion.php");

$id = $_GET['opcion'];
$sql = "SELECT * from habitacion where id='$id'";
$resultado = $con->query($sql);
$fila = $resultado->fetch_assoc();


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
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <div class="top">
                                    <h2>EDITAR HABITACION</h2>
                                    <section>
                                        <form action="editarHabit.php" name="" method="POST">
                                            <input type="hidden" value="<?php echo $id; ?>" name="id">
                                            <div class="form-group">
                                                <label>Numero de Habitacion</label>
                                                <input type="number" name="nro" class="form-control" value="<?Php echo $fila['nro']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label> Tipo de habitación *</label>
                                                <select name="tipohabitacion" class="form-control">
                                                    <?php
                                                    include("motipohabitacion.php");
                                                    while ($fila1 = $resultado->fetch_assoc()) {
                                                        echo '<option value="' . $fila1['id'] . '"> ' . $fila1['descripcion'] . '</option>';
                                                    }
                                                    ?>
                                                </select>

                                            </div>

                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <legend class="col-form-label col-sm-4 pt-0">Baño Privado</legend>
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="banoprivado" id="banoprivado1" value="1" checked>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Si
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="banoprivado" id="banoprivado2" value="2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <label>Precio</label>
                                                <input type="number" class="form-control" name="precio" value="<?Php echo $fila['precio']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Espacio</label>
                                                <input type="text" class="form-control" name="espacio" value="<?php echo $fila['espacio']; ?>">
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
            </div>
        </div>
    </section>
    <?php require_once('footer.php'); ?>