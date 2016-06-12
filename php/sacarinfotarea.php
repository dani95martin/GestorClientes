<?php
require 'conexion.php';
$idtarea = $_POST['editar_id_tarea'];
$query = "SELECT * from tareas where id_tarea ='$idtarea'";
$cursor = $mysqli->query($query) or die("Error sql:$query");

if ($result = $mysqli->query($query)) {
$resultado= $result->fetch_assoc();
}

?>
