<?php 
    include("conexion.php");
    $id = $_POST['id'];
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
                    <div class="container-fluid">
                    <div class="row justify-content-between mi-padding">
                            <div class="offset col-12 col-sm-7"> 
                                <div class="top">
                                    <h2>EDITAR HABITACION</h2>
                                    <section>
                                        <form  name="">
                                            <input type="hidden" value="<?php echo $id; ?>" name="id" id="EhId">
                                            <div class="form-group">
                                                <label>Numero de Habitacion</label>
                                                <input type="number" name="nro" id="EhNro" class="form-control" value="<?Php echo $fila['nro']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label> Tipo de habitación *</label>
                                                <select name="tipohabitacion" id="EhTipohabit" class="form-control">
                                                    <?php
                                                    include("conexion.php");
                                                    $sql1 = "SELECT * FROM tipohabitaciones";
                                                    $resultado1 = $con->query($sql1);
                                                    while ($fila1 = $resultado1->fetch_assoc()) {
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
                                                            <input class="form-check-input" type="radio" name="EhBanoprivado" id="banoprivado1" value="1" 
                                                            <?php echo $fila['banoprivado']==1?'checked' : ''; ?> >
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Si
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="EhBanoprivado" <?php echo $fila['banoprivado']==0?'checked' : ''; ?> id="banoprivado2" value="2">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group">
                                                <label>Precio</label>
                                                <input type="number" class="form-control" name="precio" id="EhPrecio" value="<?Php echo $fila['precio']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Espacio</label>
                                                <input type="text" class="form-control" name="espacio" id="EhEspacio" value="<?php echo $fila['espacio']; ?>">
                                            </div>

                                            <div class="mt-2">
                                                <input type="button" name="" value="Guardar Cambios" class="btn btn-primary" onclick="llamarEditarHabit()">
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