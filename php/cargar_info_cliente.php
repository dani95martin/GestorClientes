<?php

require 'conexion.php';
$id_usuario = $_SESSION['login_correcto'];
$query = "SELECT rol from usuarios where id_usuario = $id_usuario";
$cursor = $mysqli->query($query) or die("Error sql:$query");

if ($result = $mysqli->query($query)) {
    $row = $result->fetch_assoc();
    if ($row['rol'] == 'administrador') {
        echo '
  <div class="col-lg-12 center">
  <div class="botonesediliminar" style="margin-bottom:25px;">
    <button class="btn btn-primary editarcliente" id="btn-anadircliente" type="button">Editar Cliente</button>
    <button class="btn btn-danger eliminarcliente" type="button">Eliminar Cliente</button>
    <hr>
  </div>
  </div>
  <div class="col-lg-12 center titulos2" id="confirmareliminar">
  <p class="textoimportante">Estas seguro de que quieres eliminar a ' . $resultado['nombre_fiscal'] . '?</p>
  <form name="eliminar_cliente" id="eliminar_cliente" action="php/eliminarcliente.php" method="POST">
  <input type="hidden" name="id_cliente" value="' . $resultado["id_cliente"] . '">
  <button class="btn btn-danger eliminarconfirmado" id="btn-anadircliente" type="submit">Eliminar</button>
  <button class="btn btn-primary eliminarcancelado" type="button">Cancelar</button>
  </form>

  <hr>
  </div>

  <div class="row formularios">
    <br>
    <div class="col-md-4">
      <dl>
        <dt>Nombre Fiscal</dt>
        <dd>' . $resultado["nombre_fiscal"] . '</dd>
        <dt>NIF</dt>
        <dd>' . $resultado['nif'] . '</dd>
        <dt>Cuenta Bancaria</dt>
        <dd>' . $resultado['numero_cuenta_banco'] . '</dd>
      </dl>

    </div>
    <div class="col-md-4">
      <dl>
        <dt>Persona de Contacto</dt>
        <dd>' . $resultado['persona_contacto'] . '</dd>
        <dt>Teléfono</dt>
        <dd>' . $resultado['telefono'] . '</dd>
        <dt>Dirección</dt>
        <dd>' . utf8_encode($resultado['direccion']) . '</dd>

      </dl>

    </div>
    <div class="col-md-4">
      <dl>
      <dt>Email</dt>
      <dd><a href="mailto:' . $resultado['email'] . '">' . $resultado['email'] . '</a></dd>
        <dt>Email 2</dt>
        <dd><a href="mailto:' . $resultado['email2'] . '">' . $resultado['email2'] . '</a></dd>
        <dt>Horario</dt>
        <dd>' . $resultado['horario'] . '</dd>
      </dl>

    </div>
    <div class="col-lg-12">
      <dl>
        <dt>Observaciones</dt>
        <dd>' . $resultado['observaciones'] . '</dd>
      </dl>

    </div>
    <div class="center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
            <h3>Redes Sociales</h3>
            <div class="mb-none">
            <a href="' . $resultado['web'] . '"><i class="fa fa-wordpress" style="font-size:3em; margin-right:20px; color:black;"></i></a>
            <a href="' . $resultado['facebook'] . '"><i class="fa fa-facebook-square" style="font-size:3em; margin-right:20px; color:black;"></i></a>
            <a href="' . $resultado['twitter'] . '"><i class="fa fa-twitter-square" style="font-size:3em; margin-right:20px; color:black;"></i></a>
            <a href="' . $resultado['instagram'] . '"><i class="fa fa-instagram" style="font-size:3em; margin-right:20px; color:black;"></i></a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="toggle toggle-primary toggle-lg" data-plugin-toggle="">
    	<section class="toggle">
            <label>Lista de tareas a realizar para ' . $resultado['nombre_fiscal'] . '</label>
    		<div class="toggle-content">
                    <br>
                        <div class="col-lg-12">
                            <button class="btn btn-primary anadirtarea pull-right" id="botontareas" type="button">Añadir Tarea</button>
                        </div>
                        <div class="table-responsive panel-body" id="tabla_tareas">
                        <br>
                        <table class="table table-bordered table-striped table-condensed mb-none">
                            <thead>
                                <tr>
                                    <th class="center">ID</th>
                                    <th class="center">Nombre Tarea</th>
                                    <th class="center">Descripcion</th>
                                    <th class="center">Fecha Creacion</th>
                                    <th class="center">Estado</th>
                                    <th class="center"></th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
                                $idcliente= $resultado['id_cliente'];
                                require_once 'cargartareas.php';
                                echo'
                            </tbody>
                        </table>
                        </div>
                        <br>
                        <div id="tareas_anadir">
                        <div class="alert-danger" id="adver_tarea"><p class="text-danger">Tienes que poner almenos el nombre de la tarea...</p></div>
                            <div class="col-md-4 col-md-offset-1">
                                <fieldset class="form-group">
                                    <label for="clienteNombreTarea" class="negrita">Nombre de la Tarea</label>
                                    <input type="text" class="form-control" id="clienteNombreTarea" name="clienteNombreTarea" placeholder="Introduce el nombre de la tarea" required/>
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-offset-2">
                                <fieldset class="form-group">
                                    <label for="clienteDescripcionTarea" class="negrita">Descripción</label>
                                    <textarea class="form-control" id="clienteDescripcionTarea" name="clienteDescripcionTarea" rows="3" required></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                            <input type="hidden" value="'.$resultado["id_cliente"].'" id="idcliente_tarea">
                              <button type="button" id="boton_confirmar_anadirtarea" class="btn btn-primary">Añadir Tarea</button>
                              <button type="button" id="boton_cancelar_tarea" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                </div>
    	</section>
    </div>
  </div>
  </div>

  ';
    } else {
        echo '
  <div class="row titulos">
    <br>
    <div class="col-md-4">
      <dl>
        <dt>Nombre Fiscal</dt>
        <dd>' . $resultado["nombre_fiscal"] . '</dd>

      <dt>Persona de Contacto</dt>
      <dd>' . $resultado['persona_contacto'] . '</dd>
      <dt>Horario</dt>
      <dd>' . $resultado['horario'] . '</dd>

        </dl>
    </div>
    <div class="col-md-4">
      <dl>
        <dt>Teléfono</dt>
        <dd>' . $resultado['telefono'] . '</dd>
        <dt>Dirección</dt>
        <dd>' . utf8_encode($resultado['direccion']) . '</dd>
        <dt>Observaciones</dt>
        <dd>' . $resultado['observaciones'] . '</dd>
      </dl>


    </div>
    <div class="col-md-4">
      <dl>
      <dt>Email</dt>
      <dd><a href="mailto:' . $resultado['email'] . '">' . $resultado['email'] . '</a></dd>
        <dt>Email 2</dt>
        <dd><a href="mailto:' . $resultado['email2'] . '">' . $resultado['email2'] . '</a></dd>

      </dl>
    </div>
    <div class="center">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <hr>
            <h3>Redes Sociales</h3>
            <div class="mb-none">
            <a href="' . $resultado['web'] . '"><i class="fa fa-wordpress" style="font-size:3em; margin-right:20px; color:black;"></i></a>
            <a href="' . $resultado['facebook'] . '"><i class="fa fa-facebook-square" style="font-size:3em; margin-right:20px; color:black;"></i></a>
            <a href="' . $resultado['twitter'] . '"><i class="fa fa-twitter-square" style="font-size:3em; margin-right:20px; color:black;"></i></a>
            <a href="' . $resultado['instagram'] . '"><i class="fa fa-instagram" style="font-size:3em; margin-right:20px; color:black;"></i></a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="toggle toggle-primary toggle-lg" data-plugin-toggle="">
    	<section class="toggle">
            <label>Lista de tareas a realizar para ' . $resultado['nombre_fiscal'] . '</label>
    		<div class="toggle-content">
                    <br>
                        <div class="col-lg-12">
                            <button class="btn btn-primary anadirtarea pull-right" id="botontareas" type="button">Añadir Tarea</button>
                        </div>
                        <div class="table-responsive panel-body" id="tabla_tareas">
                        <br>
                        <table class="table table-bordered table-striped table-condensed mb-none">
                            <thead>
                                <tr>
                                    <th class="center">ID</th>
                                    <th class="center">Nombre Tarea</th>
                                    <th class="center">Descripcion</th>
                                    <th class="center">Fecha Creacion</th>
                                    <th class="center"></th>
                                </tr>
                            </thead>
                            <tbody>
                            ';
                                $idcliente= $resultado['id_cliente'];
                                require_once 'cargartareas.php';
                                echo'
                            </tbody>
                        </table>
                        </div>
                        <br>
                        <div id="tareas_anadir">
                        <div class="alert-danger" id="adver_tarea"><p class="text-danger">Tienes que poner almenos el nombre de la tarea...</p></div>
                            <div class="col-md-4 col-md-offset-1">
                                <fieldset class="form-group">
                                    <label for="clienteNombreTarea" class="negrita">Nombre de la Tarea</label>
                                    <input type="text" class="form-control" id="clienteNombreTarea" name="clienteNombreTarea" placeholder="Introduce el nombre de la tarea" required/>
                                </fieldset>
                            </div>
                            <div class="col-lg-4 col-md-offset-2">
                                <fieldset class="form-group">
                                    <label for="clienteDescripcionTarea" class="negrita">Descripción</label>
                                    <textarea class="form-control" id="clienteDescripcionTarea" name="clienteDescripcionTarea" rows="3"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                            <input type="hidden" value="'.$resultado["id_cliente"].'" id="idcliente_tarea">
                              <button type="button" id="boton_confirmar_anadirtarea" class="btn btn-primary">Añadir Tarea</button>
                              <button type="button" id="boton_cancelar_tarea" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>

                </div>
    	</section>
    </div>
  </div>

  ';
    }
}
?>
