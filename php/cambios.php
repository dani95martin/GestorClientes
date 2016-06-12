<?php

session_start();
require_once 'conexion.php';

header("Content-Type: text/html");
$nombre = utf8_decode($_POST['nombre']);
$password = $_POST['password'];
$id_usuario = $_SESSION['login_correcto'];

$sql2 = "UPDATE usuarios set nombre_completo = '$nombre', password = '$password' where id_usuario = $id_usuario";

$cursor = $mysqli->query($sql2) or die("Error sql:$sql2");
    header('Location: clientes.php');
?>
