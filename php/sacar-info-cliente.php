<?php
require 'conexion.php';
$idcliente = $_POST['idcliente'];
$query = "SELECT * from clientes where id_cliente ='$idcliente'";
$cursor = $mysqli->query($query) or die("Error sql:$query");

if ($result = $mysqli->query($query)) {
$resultado= $result->fetch_assoc();
}

?>
