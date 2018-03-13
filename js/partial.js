
$(document).ready(function(){

  let templateComentario;
  $.ajax({ url: 'js/templates/comentarios.mst'}).done( template => templateComentario = template);


  $(document).on('click','a.partial', function(e){
    e.preventDefault();

    $.ajax({
        url: $(this).attr('href'),
        type: 'GET',
        success: function(result){
          $("#partialRenderContainer").html(result);

        }
    });


  });

  // function crearComentario(comentario){
  //    var element = '<tr> id="comentario" <td>'+ comentario.id_comentario + '</td>';
  //    element += '<td>' + comentario.nombre + '</td> <td>' + comentario.texto +'</td>';
  //    element += '<td><a href="borrarComentario/' + comentario.id_comentario + '"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>';
  //    element += '</tr>';
  //    return element;
  //  }

   function encabezadoComentario(){
      var element = '<tr> <th>Número</th>';
      element += '<th>Juego</th>';
      element += '<th>Comentario</th>';
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

  $(document).on('click','#refresh','a.partial' , function(e){
    e.preventDefault();
    cargarComentarios();
    })

  // $(document).on('click','#listaC','a.partial' , function(e){
  //   e.preventDefault();
  //   cargarComentarios();





});
