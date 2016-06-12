$(document).ready(function () {
  $("#adver_tarea").hide();

$('#tareas_editar').hide();
  $('#generarpass').click(function(){
    long=parseInt(15);
    var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
    var contraseña = "";
    for (i=0; i<long; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));
    $("#usuarioPassword").val(contraseña);
  });

  $('.formueditarcliente').hide();
  $('#confirmareliminar').hide();
  $('#tareas_anadir').hide();
  $('.editarcliente').click(function(){
    $('.contenidocliente').hide();
    $('.formueditarcliente').show();
  });

$('#boton_editar_tarea').click(function(){
  $('#tareas_editar').show();
  $('#tabla_tareas').hide();

});

  $('#botontareas').click(function(){
    $('#botontareas').hide();
    $('#tabla_tareas').hide();
    $('#tareas_anadir').show();

    $('#boton_confirmar_anadirtarea').click(function(){
      if ($("#clienteNombreTarea").val()==null || $("#clienteNombreTarea").val()=="")
        {
        $("#adver_tarea").show();
        return false;
      }else{
      var nombretarea = $("#clienteNombreTarea").val();
      var descripciontarea=$("#clienteDescripcionTarea").val();
      var idcliente = $('#idcliente_tarea').val();
      $.ajax({
          url: 'php/anadirtarea.php',
          type: 'POST',
          data: {nombre: nombretarea, descripcion: descripciontarea, id: idcliente},
          success: function () {
              alert("Se ha añadido la tarea correctamente");
              location.reload();
          },
          error: function () {
              alert("No se ha añadido la tarea");
          }
      });
      }
    });
    // $('#eliminartarea').click(function(){
    //   var idtarea = $('#borrar_id_tarea').val();
    //   $.ajax({
    //       url: 'php/eliminartarea.php',
    //       type: 'POST',
    //       data: {id_tarea: idtarea},
    //       success: function () {
    //           alert("Se ha eliminado la tarea correctamente");
    //           location.reload();
    //       },
    //       error: function () {
    //           alert("No se ha eliminado la tarea");
    //       }
    //   });
    // });

    $('#boton_cancelar_tarea').click(function(){
      $('#botontareas').show();
      $('#tabla_tareas').show();
      $('#tareas_anadir').hide();
    });
  });
  $("#editarclientecancelar").click(function(){
    $('.contenidocliente').show();
    $('.formueditarcliente').hide();
  });
  $('.eliminarcliente').click(function(){
    $('.botonesediliminar').hide();
    $('#confirmareliminar').show();

    $('.eliminarcancelado').click(function(){
      $('.botonesediliminar').show();
      $('#confirmareliminar').hide();
    });

    $('.eliminarconfirmado').click(function(){
      eliminar_cliente();
    });
  });

  function eliminar_cliente() {
    var idcliente = $('#id_cliente').val();
      $.ajax({
        url: "../php/eliminarcliente.php",
        type: 'POST',
        async: true,
        data: 'id_cliente=' + idcliente,
        dataType: 'text/html',
        success: function(){
          header('location:../clientes.php');
        }
      });
  }

});
