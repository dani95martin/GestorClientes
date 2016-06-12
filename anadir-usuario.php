<?php
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
        <title>ClientGest - Añadir Usuario</title>
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

        <!-- Vendor CSS -->
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

        <!-- Head Libs -->
        <script type="text/javascript" src="js/script.js"></script>
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
        <!--Contenido de la pagina-->
        <section class="center titulos">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <h1 class="mb-none title">AÑADIR USUARIO NUEVO</h1>
                      </div>
                    </div>
                  </div>
                </section>
        <div class="container">

                  <hr>
            <!-- TITULO PAGINA -->
            <div class="row">
                <div class="center_div">

                    <form name="registrar_usuario" id="registrar_usuario" action="php/usuarionuevo.php" method="POST" class="formularios" enctype="multipart/form-data">
                        <div class="col-lg-4 col-lg-offset-4">
                            <fieldset class="form-group">
                                <label for="usuarioNombreCompleto" class="negrita">Nombre Completo del Usuario</label>
                                <input type="text" class="form-control" id="usuarioNombreCompleto" name="usuarioNombreCompleto" placeholder="Introduce Nombre Completo" required/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="usuarioNombreUsuario" class="negrita">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="usuarioNombreUsuario" name="usuarioNombreUsuario" placeholder="Introduce Nombre Usuario" required/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="usuarioRol" class="negrita">Selecciona los permisos</label>
                                <select class="form-control input-sm mb-md" name="permisos" required>
													        <option value="administrador">Administrador</option>
													        <option value="usuario" selected>Usuario</option>
												        </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="usuarioPassword" class="negrita">Contraseña</label>
                                <input type="text" class="form-control" id="usuarioPassword" name="usuarioPassword" required/>
                                <div class="col-lg-12 center">
                                <input type="button" value="Generar Contraseña" id="generarpass" class="btn col-md-6 col-md-offset-3"/>
                              </div>
                            </fieldset>
                            <hr>
                            <div class="col-lg-12 center">
                              <input type="submit" class="btn btn-primary" value="Añadir Usuario">
                              <a href="clientes.php"><input type="button" class="btn btn-danger" value="Cancelar"></a>
                            </div>
                        </div>




                    </form>

                </div>
<br>
            </div>

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
