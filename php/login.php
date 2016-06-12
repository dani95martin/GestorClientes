<?php

require_once 'conexion.php';
header("Content-Type: text/html");
$usuario = $mysqli->real_escape_string($_POST['usuario']);
$password = $mysqli->real_escape_string($_POST['password']);

$sql = "SELECT count(*) as N from usuarios where (nombre_usuario='$usuario' and password='$password')";

$cursor = $mysqli->query($sql) or die("Error sql:$sql");
$result = $cursor->fetch_assoc();
if ($result['N'] == 1) {
    $sql2 = "SELECT * from usuarios where (nombre_usuario='$usuario')";
    $cursor = $mysqli->query($sql2) or die("Error sql:$sql2");

    if ($result = $cursor->fetch_assoc()) {
        session_start();
        $id_usuario = $result['id_usuario'];
    }
    $_SESSION['login_correcto'] = $id_usuario;
    header('Location: clientes.php');
} else {
    echo "<h1 class='title col-lg-12 center formularios'>Datos incorrectos</h1>";
    header("refresh:2; url=index.php");
}
?>
