<?php
require 'conexion.php';
$id_usuario = $_SESSION['login_correcto'];
$query = "SELECT rol from usuarios where id_usuario = $id_usuario";
$cursor = $mysqli->query($query) or die("Error sql:$query");

if ($result = $mysqli->query($query)) {
$row = $result->fetch_assoc();
if($row['rol']=='administrador'){
  echo'
  <li id="anadirusuario"><a href="anadir-usuario.php">Añadir Usuario <span class="fa fa-plus-square"></span></a></li>
  <li role="separator" class="divider"></li>
  ';
}
}


?>
