<?php
session_start();
require_once 'conexion.php';
if (!empty($_POST)){
  $id_cliente=utf8_decode($_POST['id_cliente']);
$nombreFiscal = utf8_decode($_POST['clienteNombreFiscal']);
$personaContacto = utf8_decode($_POST['clientePersonaContacto']);
$telefono = utf8_decode($_POST['clienteTelefono']);
$email = utf8_decode($_POST['clienteEmail']);
$email2 = utf8_decode($_POST['clienteEmail2']);
$nif = utf8_decode($_POST['clienteNif']);
$paginaweb = utf8_decode($_POST['clienteWeb']);
$facebook = utf8_decode($_POST['clienteFacebook']);
$instagram = utf8_decode($_POST['clienteInstagram']);
$twitter = utf8_decode($_POST['clienteTwitter']);
$google = utf8_decode($_POST['clienteGoogle']);
$cuentabanco = utf8_decode($_POST['clienteCuentaBanco']);
$direccion = utf8_decode($_POST['clienteDireccion']);
$horario = utf8_decode($_POST['clienteHorario']);
$observaciones = utf8_decode($_POST['clienteObservaciones']);
$urlfoto = $_POST['imagen_oculta'];
// Avatar
if (!empty($_FILES['avatar']['name'])) {
    $error='';
    $countchanges= 0;
    $counterrors = 0;

    // Si se ha subido un archivo
    if (is_uploaded_file($_FILES['avatar']['tmp_name'])) {

        // Array con las extensiones permitidas
        $allowed = array('image/jpeg', 'image/jpg', 'image/png', 'image/gif');

        // Comprobación de la extensión de la imagen
        if (!in_array($_FILES['avatar']['type'], $allowed)) {
            $errors[$counterrors] = 'Formato de imagen inválida. <br>Sube una imagen con formato jpeg, jpg, png o gif.';
            $error = true;
            $counterrors++;
        }

        // Restringir el tamaño del archivo
        if ($_FILES['avatar']['tmp_name'] > 500000) {
            $errors[$counterrors] = 'Imagen demasiado grande.';
            $error = true;
            $counterrors++;
        }

        if ($error == false) {
            // Variables del directorio y del directorio + archivo
            $target_dir = "../imagenes/logotipos/";
            $target_file = $target_dir.basename($_FILES['avatar']['name']);

            // Directorio contenedor
            if (!is_writable($target_dir)) {
                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0755);
                } else {
                    chmod($target_dir, 0755);
                }
            }

            // Identificador unico del archivo
            $idImage = time();
            $namefile = $idImage."-".$_FILES['avatar']['name'];
              $urlfoto = "imagenes/logotipos/" . $idImage."-".$_FILES['avatar']['name'];
            // Sobreescribimos el nombre del archivo
            $namefiledir = $target_dir.$namefile;
}
            // Movemos el archivo del tmp al servidor
            if (move_uploaded_file($_FILES['avatar']['tmp_name'], $namefiledir)) {
                chmod($namefiledir, 0755);
                $changes['Avatar'] = $namefiledir;
                $change = true;
                $countchanges++;
            } else {
                $errors[$counterrors] = "No se pudo mover el archivo";
                $error = true;
                $counterrors++;
            }

        }

    } else {
        $errors[$counterrors] = "No se pudo subir al servidor la imagen";
        $error = true;
        $counterrors++;
    }
}

$sql2 = "UPDATE clientes set nombre_fiscal = '$nombreFiscal', nif = '$nif', numero_cuenta_banco  = '$cuentabanco', persona_contacto  = '$personaContacto', telefono  = '$telefono', email  = '$email', email2  = '$email2', direccion  = '$direccion', horario  = '$horario', web  = '$paginaweb', facebook  = '$facebook', twitter  = '$twitter', instagram  = '$instagram', observaciones  = '$observaciones', imagen  = '$urlfoto'";
$sql2.= "WHERE id_cliente = $id_cliente";

if ($cursor = $mysqli->query($sql2)) {
    header('Location: ../clientes.php');
};



?>
