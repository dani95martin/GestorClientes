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
        <title>ClientGest - Nuevo Cliente</title>
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
        <!--Contenido de la pagina-->
        <section class="center titulos">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <h1 class="mb-none title">AÑADIR CLIENTE NUEVO</h1>
                      </div>
                    </div>
                  </div>
                </section>
        <div class="container">

                  <hr>
            <!-- TITULO PAGINA -->
            <div class="row">
                <div class="center_div">

                    <form name="registrar_cliente" id="registrar_cliente" action="php/anadircliente.php" method="POST" class="formularios" enctype="multipart/form-data">
                        <div class="col-md-4 col-md-offset-1">
                            <fieldset class="form-group">
                                <label for="clienteNombreFiscal" class="negrita">Nombre Fiscal</label>
                                <input type="text" class="form-control" id="clienteNombreFiscal" name="clienteNombreFiscal" placeholder="Introduce Nombre Fiscal" title="Introduce el Nombre Fiscal" required/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteTelefono" class="negrita">Teléfono</label>
                                <input type="text" class="form-control" id="clienteTelefono" name="clienteTelefono" placeholder="Introduce Teléfono"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteEmail2" class="negrita">Email 2</label>
                                <input type="email" class="form-control" id="clienteEmail2" name="clienteEmail2" placeholder="Introduce Segundo Email"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteWeb" class="negrita">Página Web</label>
                                <input type="text" class="form-control" id="clienteWeb" name="clienteWeb" placeholder="Introduce la web del cliente"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteInstagram" class="negrita">Instagram</label>
                                <input type="text" class="form-control" id="clienteInstagram" name="clienteInstagram" placeholder="Introduce el Instagram del cliente"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteDireccion" class="negrita">Dirección</label>
                                <input type="text" class="form-control" id="clienteDireccion" name="clienteDireccion" placeholder="Introduce la dirección del cliente"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteObservaciones" class="negrita">Observaciones</label>
                                <textarea class="form-control" id="clienteObservaciones" name="clienteObservaciones" rows="3"></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 col-md-offset-2">
                            <fieldset class="form-group">
                                <label for="clientePersonaContacto" class="negrita">Persona Contacto</label>
                                <input type="text" class="form-control" id="clientePersonaContacto" name="clientePersonaContacto" placeholder="Introduce Persona Contacto"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteEmail" class="negrita">Email</label>
                                <input type="email" class="form-control" id="clienteEmail" name="clienteEmail" placeholder="Introduce Email"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteNif" class="negrita">NIF</label>
                                <input type="text" class="form-control" id="clienteNif" name="clienteNif" placeholder="Introduce el Nif del cliente"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteFacebook" class="negrita">Facebook</label>
                                <input type="text" class="form-control" id="clienteFacebook" name="clienteFacebook" placeholder="Introduce el Facebook del cliente"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteTwitter" class="negrita">Twitter</label>
                                <input type="text" class="form-control" id="clienteTwitter" name="clienteTwitter" placeholder="Introduce el Twitter del cliente"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteCuentaBanco" class="negrita">Cuenta Bancaria</label>
                                <input type="text" class="form-control" id="clienteCuentaBanco" name="clienteCuentaBanco" placeholder="Introduce el numero de cuenta corriente"/>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="clienteHorario" class="negrita">Horario</label>
                                <textarea class="form-control" id="clienteHorario" name="clienteHorario" rows="3"></textarea>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="avatar" class="negrita">Imagen Corporativa</label>
                                  <input type="file" name="avatar">
                            </fieldset>
                        </div>
                        <div class="col-lg-12 col-md-offset-1">
                          <input type="submit" class="btn btn-primary" value="Registrar cliente">
                          <a href="clientes.php"><input type="button" class="btn btn-danger" value="Cancelar"></a>
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
