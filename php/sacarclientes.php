<?php
require 'php/conexion.php';

$query = "SELECT * from clientes";
$cursor = $mysqli->query($query) or die("Error sql:$query");

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {

        echo('

                <div class="col-md-3 col-sm-6 col-xs-12 isotope-item brands imagencliente">
                <form name = "VisualizarCliente" class = "VisualizarCliente logoclick" action = "info-cliente.php" method = "post">
                    <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
                                <span class="">
                                    <img src='. $row['imagen'] .' class="img-responsive" alt='. $row['imagen'] .'>
                                    <input type = "submit" name = "enviar" class="enviar col-lg-12 btn btn-primary" value="Ver información completa">
                                </span>
                            </span>

                    </div>
                    <input type = "hidden" name = "idcliente" value = ' . $row['id_cliente'] . ' id="idcliente">

                    </form>
                </div>

        ');
    }
}


?>
