
<?php
session_start();
if (!empty($_POST)) {
    if (isset($_POST['usuario']) && isset($_POST['password'])) {
        require 'php\login.php';
    };
};
?>
<!DOCTYPE html>
<html lang="Es-es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>ClientGest - Gestor de Clientes</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
                <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script type="text/javascript" src="jQuery/jquery-2.2.0.js"></script>
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/theme-elements.css">
        <link rel="stylesheet" href="css/theme-blog.css">
        <link rel="stylesheet" href="css/theme-shop.css">
        <link rel="stylesheet" href="css/theme-animate.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/skin-corporate-5.css">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

    </head>
    <body class="loading-overlay-showing fondocasa" data-loading-overlay>
  		<div class="loading-overlay">
  			<div class="loader"></div>
  		</div>
        <!--Login-->
        <div class="loginrex">
            <form class="" action="index.php" method="post">
                <div class="modal show col-lg-8" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-header">
                        <img src="imagenes/fondologin.png" alt="fondorex" class="fondo"/>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" id="usuario" name="usuario" class="form-control input-lg" placeholder="Nombre de usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Entrar" class="btn btn-primary btn-lg btn-block" id="enviar">
                        </div>
                    </div>
                </div>
            </form>

        </div>
                <!-- script references -->
                <script src="js/bootstrap.min.js"></script>

                <!-- Theme Base, Components and Settings -->
                <script src="js/theme.js"></script>

                <!-- Theme Custom -->
                <script src="js/custom.js"></script>

                <!-- Theme Initialization Files -->
                <script src="js/theme.init.js"></script>
    </body>
</html>
