<?php
require_once('header.php');
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
                    <div class="row mi-padding">
                        <div class="offset col-sm-7 col-12">
                            <div class="">
                                <h3>Agregar tipo de habitacion</h3>
                                <div class="">
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