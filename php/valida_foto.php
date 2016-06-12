<?php
session_start();
require_once 'conexion.php';

$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$destino="imagenes/logotipos/".$foto;
copy($ruta,$destino);
$sql2 = "INSERT INTO clientes(imagen)";
$sql2.= "VALUES ('$destino')";

if ($cursor = $mysqli->query($sql2)) {
    header('Location: ../nuevocliente.php');
};
?>
