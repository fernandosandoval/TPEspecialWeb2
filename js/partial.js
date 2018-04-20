
$(document).ready(function(){

  let templateComentario;
  let templateComentarioItem;
  let int;
  $.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentario = template);
  $.ajax({ url: 'js/templates/comentariosItem.mst'}).done( template => templateComentarioItem = template);


  $(document).on('click','a.partial', function(e){
    e.preventDefault();
    $.ajax({
        url: $(this).attr('data-target'),
        type: 'GET',
        success: function(result){
          clearInterval(int);
          $("#partialRenderContainer").html(result);
        }
      });
    });


    $(document).on('click','a.partialComm', function(e){
      e.preventDefault();
      $.ajax({
          url: $(this).attr('data-target'),
          type: 'GET',
          success: function(result){
            $("#partialRenderContainer").html(result);
            cargarComentarios();
            int = setInterval(function () {
                cargarComentarios();
            }, 2000);
          }
      });
  });

  $(document).on('click','a.partialComXItem', function(e){
      e.preventDefault();
      let itemStr = $(this).attr('data-target');
      console.log(itemStr);
      let itemArr = itemStr.split("/");
      console.log(itemArr);
      let itemSelec = itemArr[1];
      console.log(itemSelec);
      $.ajax({
          url: $(this).attr('data-target'),
          type: 'GET',
          success: function(result){
            $("#partialRenderContainer").html(result);
            cargarComentariosPorItem(itemSelec);
            int = setInterval(function () {
                cargarComentariosPorItem(itemSelec);
            }, 2000);
          }
      });
  });

   function encabezadoComentario(){
      var element = '<tr> <th>Número</th>';
      element += '<th>Juego</th>';
      element += '<th>Comentario</th>';
      element += '<th>Usuario</th>';
      element += '<th>Puntaje</th>';
      element += '</tr>';
      return element;
    }

    function encabezadoComentarioItem(){
       var element = '<tr><th>Juego</th>';
       element += '<th>Comentario</th>';
       element += '<th>Usuario</th>';
       element += '<th>Puntaje</th>';
       element += '</tr>';
       return element;
     }


  function cargarComentarios() {
        $.ajax("api/comentarios")
            .done(function(comentarios) {
              console.log(comentarios);
              $('tr').remove();
              $('#tablaComentarios').append(encabezadoComentario());
              let rendered = Mustache.render(templateComentario , {comentarios: comentarios});
              console.log(rendered);
              $('#tablaComentarios').append(rendered);
            })
            .fail(function() {
                $('#tablaComentarios').append('<tr><td>Error al cargar los comentarios</td></tr>');
            });
    }

    function cargarComentariosPorItem(item) {
          $.ajax("api/comentariosI/"+item)
              .done(function(comentarios) {
                console.log(comentarios);
                $('tr').remove();
                $('#tablaComentariosItem').append(encabezadoComentarioItem());
                let rendered = Mustache.render(templateComentarioItem , {comentarios: comentarios});
                console.log(rendered);
                $('#tablaComentariosItem').append(rendered);
              })
              .fail(function() {
                  $('#tablaComentariosItem').append('<tr><td>Este juego aún no tiene comentarios. Sea el primero en comentar!</td></tr>');
                  clearInterval(int);
              });
      }

  function crearComentario() {
        let comentario ={
          "texto": $('#texto').val(),
          "fk_id_usuario": $('#fk_id_usuario').val(),
          "fk_id_item": $('#fk_id_item').val(),
          "puntaje": $('#puntaje').val(),
        };
        debugger;
        if (comentario.texto === ''){
          $('tr').remove();
          $('#tablaComentariosItem').append('<tr><td>El comentario no puede estar vacío</td></tr>');
          clearInterval(int);
        }
           else if (comentario.puntaje === '' ){
                  $('tr').remove();
                  $('#tablaComentariosItem').append('<tr><td>El puntaje no puede estar vacío</td></tr>');
                }
                else if (comentario.puntaje <= 0 || comentario.puntaje >= 6 ){
                    $('tr').remove();
                    $('#tablaComentariosItem').append('<tr><td>El puntaje debe ser un número entre 0 y 5</td></tr>');
                  }
                else{
                    $.ajax({
                          method: "POST",
                          url: "api/comentarios",
                          data: JSON.stringify(comentario)
                        })
                      .done(function(data) {
                        console.log(data);
                        let rendered = Mustache.render(templateComentario, {data: comentario});
                        console.log(rendered);
                        $('#tablaComentariosItem').append(rendered);
                        alert('Comentario creado con éxito');
                        cargarComentariosPorItem(comentario.fk_id_item);
                        int = setInterval(function () {
                            cargarComentariosPorItem(comentario.fk_id_item);
                        }, 2000);
                      })
                      .fail(function(data) {
                          console.log(data);
                          alert('No se ha podido crear el comentario');
                      });
                }
      }

  function borrarComentario(id_comentario) {

        $.ajax({
              method: "DELETE",
              url: "api/comentarios/" + id_comentario
            })
          .done(function(a, b, c) {
             $('#idrow'+id_comentario).remove();
          })
          .fail(function(a, b, c) {

              alert('Imposible borrar el comentario');
          });
      }

  $(document).on('click','#refresh','a.partial' , function(e){
    e.preventDefault();
    cargarComentarios();
    })


 $(document).on('click','#btnCrearComentario','a.partial' , function(e){
    e.preventDefault();
    $.ajax({
        url: 'captcha/Verificar.php',
        type: 'POST',
        //dataType: 'text',
        data: {"valor": $('#captcha').val()}
      })
      .success(function(data) {
         if (data == 1){
            crearComentario();
         }
         else{
            alert ("El número ingresado no es correcto. Ingrese nuevamente el número de la imagen");
         }
       })
      .error(function() {
           alert("Error verificando captcha");
      })
      .always(function() {
        //console.log("complete");
      });

    })

 $(document).on('click','#btn-SelecVendedor','a.partial' , function(e){
      e.preventDefault();
      id = document.formVendedor.idVend.value;
      console.log(id);
      $.ajax({
          url: "itemsPorUsuario/" + id,
          type: 'GET',
          success: function(result){

              $("#partialRenderContainer").html(result);
              }
        });
    })

 $('body').on('click', 'a.js-borrar', function() {
      event.preventDefault();
      let idCom = $(this).data('idcomentario');
        console.log(idCom);
        borrarComentario(idCom);
    });





});
