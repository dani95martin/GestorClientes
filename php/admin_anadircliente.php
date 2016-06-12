<?php
require 'conexion.php';
$id_usuario = $_SESSION['login_correcto'];
$query = "SELECT rol from usuarios where id_usuario = $id_usuario";
$cursor = $mysqli->query($query) or die("Error sql:$query");

if ($result = $mysqli->query($query)) {
$row = $result->fetch_assoc();
if($row['rol']=='administrador'){
  echo'
  <div class="col-lg-12 center" style="margin-bottom:25px;">
    <a href="nuevocliente.php" class="btn btn-primary" style="width:300px;" id="btn-anadircliente">Añadir Cliente</a>
  </div>
  ';
}
}


?>
