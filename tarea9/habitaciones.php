<?php 
require_once('header.php'); 
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


                    <div class="container-fluid">
                        <div class="row justify-content-between">
                            <div class="col-sm-8 col-12">
                                <div class="top">
                                    <h3>Agregar Habitacion</h3>
                                    <section class="bg text-white">
                                        <form action="agregarHabit.php" name="" method="POST">
                                            <div class="form-group">
                                                <label>Numero de Habitacion</label>
                                                <input type="text" name="nro" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label> Tipo de habitación *</label>
                                                <select name="tipohabitacion" class="form-control">
                                                    <?php
                                                    include("motipohabitacion.php");
                                                    while ($fila = $resultado->fetch_assoc()) {
                                                        echo '<option value="' . $fila['id'] . '"> ' . $fila['descripcion'] . '</option>';
                                                    }
                                                    ?>
                                                </select>

                                            </div>
                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <label class="col-form-label col-sm-4 pt-0">Baño Privado</label>
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
                                                <label>Espacio</label>
                                                <input type="number" step="any" class="form-control" name="espacio">
                                            </div>
                                            <div class="form-group">
                                                <label>Precio</label>
                                                <input type="number" step="any" class="form-control" name="precio">
                                            </div>
                                            <div class="mt-2">
                                                <input type="submit" name="" value="Agregar" class="btn btn-primary form-control">
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
<?php require_once('footer.php'); ?>
