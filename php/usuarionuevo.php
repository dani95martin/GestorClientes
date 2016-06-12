<?php
session_start();
require_once 'conexion.php';
if (!empty($_POST)){
$nombreCompleto = utf8_decode($_POST['usuarioNombreCompleto']);
$usuario = utf8_decode($_POST['usuarioNombreUsuario']);
$password = utf8_decode($_POST['usuarioPassword']);
$permisos = utf8_decode($_POST['permisos']);

$sql2 = "INSERT INTO usuarios(nombre_completo, nombre_usuario, password, rol)";
$sql2.= "VALUES ('$nombreCompleto','$usuario','$password','$permisos')";

if ($cursor = $mysqli->query($sql2)) {
    header('Location: ../clientes.php');
};


}
?>
