<?php
session_start();
require_once 'conexion.php';

$nombre_tarea = $_POST["nombre"];
$descripcion_tarea = $_POST["descripcion"];
$id_cliente = $_POST["id"];
$sql = "INSERT INTO tareas (nombre_tarea,descripcion_tarea,fk_id_cliente)
VALUES ('$nombre_tarea','$descripcion_tarea',$id_cliente)";

$cursor = $mysqli->query($sql) or die("Error sql:$sql");
?>
