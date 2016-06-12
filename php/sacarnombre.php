<?php

$mysqli = new mysqli("localhost", "danirex", "danirex", "gestor_clientes");
if (mysqli_connect_errno()) {
    printf("Error: %s\n", mysqli_connect_error());
    exit();
}
?>
<?php

header("Content-Type: text/html");
$id_usuario = $_SESSION['login_correcto'];
$nombre='';
$password='';

$sql2 = "SELECT * from usuarios where (id_usuario='$id_usuario')";
$cursor = $mysqli->query($sql2) or die("Error sql:$sql2");

if ($result = $cursor->fetch_assoc()) {
    $nombre = utf8_encode($result['nombre_completo']);
    $password=$result['password'];
};
?>
