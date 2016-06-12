<?php

session_start();
require_once 'conexion.php';

header("Content-Type: text/html");
$nombretarea = utf8_decode($_POST['clienteNombreTarea']);
$descripcion = utf8_decode($_POST['clienteDescripcionTarea']);
$estado = $_POST['estado_tarea'];
$id_tarea = $_POST['id_tarea'];

$sql2 = "UPDATE tareas set nombre_tarea = '$nombretarea', descripcion_tarea = '$descripcion', estado = '$estado' where id_tarea = $id_tarea";

$cursor = $mysqli->query($sql2) or die("Error sql:$sql2");
    header('Location: ../clientes.php');
?>
