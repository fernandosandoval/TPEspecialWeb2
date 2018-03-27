
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
//      debugger;
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
                $('#tablaComentarios').append('<li>Error al cargar los comentarios</li>');
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
                  $('#tablaComentariosItem').append('<li>Error al cargar los comentarios</li>');
              });
      }

  function crearComentario() {
        let comentario ={
          "texto": $('#texto').val(),
          "fk_id_usuario": $('#fk_id_usuario').val(),
          "fk_id_item": $('#fk_id_item').val(),
          "puntaje": $('#puntaje').val()
        };
        console.log(comentario);

        $.ajax({
              method: "POST",
              url: "api/comentarios",
              data: JSON.stringify(comentario)
            })
          .done(function(data) {
            console.log(data);
            let rendered = Mustache.render(templateComentario, {data: comentario});
            console.log(rendered);
            $('#tablaComentarios').append(rendered);
            alert('Comentario creado con éxito');
          })
          .fail(function(data) {
              console.log(data);
              alert('Imposible crear el comentario');
          });
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
  //
  // $("#listaC").find(".active").attr("id") , function(e){
  //     e.preventDefault();
  //     cargarComentarios();
  //     })


  $(document).on('click','#btnCrearComentario','a.partial' , function(e){
    e.preventDefault();
    crearComentario();
    })

 $('body').on('click', 'a.js-borrar', function() {
      event.preventDefault();
      //debugger;
      let idCom = $(this).data('idcomentario');
        console.log(idCom);
        borrarComentario(idCom);
    });

  // $(document).on('load','#tablaCom','a.partial' , function(e){
  //   e.preventDefault();
  //   cargarComentarios();
  //




});
