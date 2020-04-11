<?php require_once('header.php'); ?>
<section style="min-height: 800px">
<div class="container">
    <div class="row justify-content-between">
        <div class="col-sm-6 col-12">
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
        <div class="col-sm-4 col-12">
            <div class="top">
                <h3>Agregar tipo de habitacion</h3>
                <section class="bg text-white">
                    <form action="agregartipoHabit.php" name="" method="POST">
                        <div class="form-group">
                            <label>Descripcio</label>
                            <input type="text" name="descripcion" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Numero de Camas</label>
                            <input type="number" class="form-control" name="nrocamas">
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
</section>
<?php require_once('footer.php'); ?>
<script>
    $("#nav-habitaciones").addClass("active");
</script>