<?php
session_start();

if (isset($_SESSION['login_correcto'])) {
  require 'php\sacarnombre.php';
  require_once 'php/sacarinfotarea.php';
    $usuario = $_SESSION['login_correcto'];
} else {
    header('Location: index.php');
};

if (!empty($_POST)) {
    if (isset($_POST['nombre']) && isset($_POST['password'])) {
      require 'php\cambios.php';
        if ($_POST['password'] != $_POST['password-confirmar']) {

        }
    };
};
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>ClientGest - Editar Perfil</title>
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
        								<h1 class="mb-none title">Editar Tarea (ID: <?php echo $resultado['id_tarea'];?>)</h1>
        							</div>
        						</div>
        					</div>
        				</section>
                <hr>
        <!-- Modificar Perfil -->
        <div class="modificar-perfil container formularios">
          <div id="tareas_editar">
            <form name="formulario_editar_tarea" method="POST" action="php/editartarea.php"
              <div class="col-md-4 col-md-offset-1">
                  <fieldset class="form-group">
                      <label for="clienteNombreTarea" class="negrita">Nombre de la Tarea</label>
                      <input type="text" class="form-control" id="clienteNombreTarea" name="clienteNombreTarea" placeholder="Nombre de la tarea" value="<?php echo $resultado['nombre_tarea'];?>" required/>
                  </fieldset>
                  <fieldset class="form-group">
                  <label for="estado_tarea">Estado de la tarea</label>
                  <select class="form-control input-sm mb-md" name="estado_tarea">
                    <option value="Pendiente">Pendiente</option>
                    <option value="En Proceso" selected>En proceso</option>
                    <option value="Finalizada">Finalizada</option>
                  </select>
                  </fieldset>
              </div>
              <div class="col-lg-4 col-md-offset-2">
                  <fieldset class="form-group">
                      <label for="clienteDescripcionTarea" class="negrita">Descripción</label>
                      <textarea class="form-control" id="clienteDescripcionTarea" name="clienteDescripcionTarea" rows="3"><?php echo $resultado['descripcion_tarea'];?></textarea>
                  </fieldset>
              </div>
              <div class="col-lg-12 col-lg-offset-1">
              <input type="hidden" value="<?php echo $resultado['id_tarea'];?>" id="id_tarea" name="id_tarea">
                <button type="submit" id="boton_confirmar_editar_tarea" class="btn btn-primary">Editar Tarea</button>
                <a href="clientes.php"><button type="button" id="boton_cancelar_editar_tarea" class="btn btn-danger">Cancelar</button></a>
              </div>
            </form>
          </div>
        </div>
        <!--Fin Modificar Perfil -->

                <script src="js/bootstrap.min.js"></script>

                <!-- Theme Base, Components and Settings -->
                <script src="js/theme.js"></script>

                <!-- Theme Custom -->
                <script src="js/custom.js"></script>

                <!-- Theme Initialization Files -->
                <script src="js/theme.init.js"></script>

    </body>
</html>
