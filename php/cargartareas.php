
<?php
require 'conexion.php';

$query = "SELECT * from tareas where fk_id_cliente = $idcliente";
$cursor = $mysqli->query($query) or die("Error sql:$query");

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {

        echo('
        <tr>
            <td>'.$row['id_tarea'].'</td>
            <td>'.$row['nombre_tarea'].'</td>
            <td>'.$row['descripcion_tarea'].'</td>
            <td>'.$row['fecha_creacion'].'</td>
            <td>'.$row['estado'].'</td>
            <td>
            <form method="POST" action="editar_tarea.php">
            <input type="hidden" value='.$idcliente.' name="idcliente">
            <input type="hidden" value='.$row['id_tarea'].' name="editar_id_tarea">
            <button type="submit" class="btn btn-primary" id="boton_editar_tarea" style="float:left; margin-left:40px; ">Editar</button>
            </form>


            <form method="POST" action="php/eliminartarea.php">
            <input type="hidden" value='.$idcliente.' name="idcliente">
            <input type="hidden" value='.$row['id_tarea'].' name="borrar_id_tarea">
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form></td>
        </tr>

        ');
    }
}


?>
