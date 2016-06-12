<?php
require 'conexion.php';

$query2 = "SELECT * from tareas where fk_id_cliente = $idcliente";
$cursor = $mysqli->query($query2) or die("Error sql:$query2");

if ($result = $mysqli->query($query2)) {
    $tarea = $result->fetch_assoc();
}
?>
