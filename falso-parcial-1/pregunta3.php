<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<?php
include 'conexion.php';
$sql = "SELECT * from usuarios";

$respuesta = $con->query($sql);
?>
<div class="container top ">
    <div class="row justify-content-between">
        <div class="col-lg-8">
            <h2>usuarios</h2>
            <table class="table table-hover table-info table-striped ">
                <thead class="" style="background: #0000FF !important;">
                    <tr>
                        <th scope="col">nombres</th>
                        <th scope="col"> apellidos </th>
                        <th scope="col">correo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $aux=0;
                    while ($fila = $respuesta->fetch_assoc()) {
                        if($aux%2==0){
                        echo '<tr style="background:#BDE5F1 ;">
                                <td>' . $fila['nombres'] . '</td>
                                <td>' . $fila['apellidos'] . '</td>
                                <td>' . $fila['correo'] . '</td> 
                            </tr>';
                        }else{
                            echo '<tr style="background:#8DB3E2;">
                                <td>' . $fila['nombres'] . '</td>
                                <td>' . $fila['apellidos'] . '</td>
                                <td>' . $fila['correo'] . '</td> 
                            </tr>';
                        }
                        $aux++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>