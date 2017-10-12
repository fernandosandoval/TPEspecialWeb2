$("#btnEnviar").click(guardarInformacion);
$(document).ready(getInfoGroup);

function crearFila(info) {
    return "<tr><td>" + info.thing.name + "</td><td>" + info.thing.game + "</td><td>" + info.thing.valor + "</td><td><button class='eliminador' type='button' name='button' value="+info._id+">Eliminar</button></td></tr>";
}

function getInfoGroup() {
    var groupId = 15;
    $.ajax({
        url: "http://web-unicen.herokuapp.com/api/group/" + groupId + "?",
        method: "GET",
        contentType: "application/json; charset=utf-8",
        success: function(resultData) {
            var tbody = $("#tablaInicial tbody");
            for (var i = 0; i < resultData.information.length; i++) {
                tbody.append(crearFila(resultData.information[i]));
                  }
              $(".eliminador").click(function () {
               var id = $(this).val();
               eliminarFila(id);
              });
        },
        error: function(jqxml, status, errorThrown) {
            alert('Error getInfoGroup');
        }
    });
}

function borrarTabla(tbody){
      tbody.html("");
    }

    function guardarInformacion() {
        var grupo = 15;
        var nombre = $('#dataNombre').val();
        var juego = $('#dataJuego').val();
        var precio = $('#dataPrecio').val()
        var info = {
            "group": grupo,
            "thing": {
                "name": nombre,
                "game": juego,
                "valor": precio
            }
        };

        $.ajax({
            url: "http://web-unicen.herokuapp.com/api/create",
            method: "POST",
            dataType: 'JSON',
            contentType: "application/json; charset=utf-8",
            data: JSON.stringify(info),
            success: function(resultData) {
                var tabla = $("#tablaInicial tbody");
                borrarTabla(tabla);
                getInfoGroup();
            },
            error: function(jqxml, status, errorThrown) {
                alert("Error al guardar Informacion");
            }
        });
    }

function eliminarFila (deleteID) {
    event.preventDefault();
    $.ajax({
      method: "DELETE",
      contentType: "application/json; charset=utf-8",
      url: "http://web-unicen.herokuapp.com/api/delete/"+deleteID,
      success: function(){
        var tabla = $("#tablaInicial tbody");
        borrarTabla(tabla);
        getInfoGroup();
      },
      error:function(jqxml, status, errorThrown){
        alert("Error al eliminar fila");
      }
    });
  }
