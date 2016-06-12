
<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

if (isset($_SESSION['login_correcto'])) {
    require 'php\sacarnombre.php';
    $usuario = $_SESSION['login_correcto'];
} else {
    header('Location: index.php');
};
?>
<!DOCTYPE html>
<html lang="Es-es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>ClientGest - Galeria Clientes</title>
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

        <!-- Fuentes  -->
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
    <body class="loading-overlay-showing fondoclientes" data-loading-overlay>
  		<div class="loading-overlay">
  			<div class="loader"></div>
  		</div>



        <!--header-->
        <header id="menu-rex">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Logotipo -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                        <a class="brand" href="clientes.php"><img src="imagenes/fondologin.png" alt="" width="180" class="logo"/></a>
                    </div>

                    <!--Menú Perfil -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="nombre_usuario_menu"><?php echo $nombre; ?><span class="caret"></span></a>
                                <ul class="dropdown-menu center">
                                    <li id="editarperfil"><a href="editar-perfil.php">Editar Perfil<span class="glyphicon glyphicon-cog icono"></span></a></li>
                                    <li role="separator" class="divider"></li>
                                    <?php
                                    require_once 'php/admin_anadirusuario.php';
                                     ?>
                                    <li><a href="php/logout.php">Cerrar Sesión<span class="glyphicon glyphicon-off icono"></a></span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
                <section class="center titulos">
        					<div class="container">
        						<div class="row">
        							<div class="col-md-12">
        								<h1 class="mb-none title">GALERIA DE CLIENTES</h1>
        								<p class="mb-none">Haz click en el cliente que desees para poder visualizar la información de éste.</p>
        							</div>
        						</div>
        					</div>
        				</section>
                <hr>
                <?php
                require 'php/admin_anadircliente.php';
                 ?>

        <!--Contenido de la pagina-->
        <div class="container galeria">
            <!-- GALERIA CLIENTES -->
            <div id="galeria-clientes">
                <div class="row">
                  <?php
                  require 'php/sacarclientes.php';
                  ?>
                </div>
            </div>
        </div>
        <!-- script references -->
        <script src="js/bootstrap.min.js"></script>

                <!-- Theme Base, Components and Settings -->
                <script src="js/theme.js"></script>
                
                <!-- Theme Custom -->
                <script src="js/custom.js"></script>
                <script src="js/script.js"></script>

                <!-- Theme Initialization Files -->
                <script src="js/theme.init.js"></script>

    </body>
</html>
