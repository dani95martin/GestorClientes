<?php
session_start();
require_once 'conexion.php';
$id_tarea = $_POST['borrar_id_tarea'];
$sql2 = "DELETE FROM tareas where id_tarea= $id_tarea";

if ($cursor = $mysqli->query($sql2)) {
    header('Location: ../clientes.php');
};
?>
