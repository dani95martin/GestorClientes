<?php

session_start();

if (isset($_SESSION['login_correcto'])) {
    session_unset();
    header("refresh:1; url=../index.php");
} else {
    header('Location: ../index.php');
}
?>
