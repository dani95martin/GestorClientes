<?php
$mysqli = new mysqli("localhost", "danirex", "danirex", "gestor_clientes");
if (mysqli_connect_errno()) {
    printf("Error: %s\n", mysqli_connect_error());
    exit();
}
?>
