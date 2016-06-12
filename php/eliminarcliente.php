<?php
session_start();
require_once 'conexion.php';
$id_cliente = $_POST['id_cliente'];
$sql2 = "DELETE FROM clientes where id_cliente= $id_cliente";

if ($cursor = $mysqli->query($sql2)) {
    header('Location: ../clientes.php');
};
?>
