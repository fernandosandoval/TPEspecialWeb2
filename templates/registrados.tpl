<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="titulo-tabla">
        <h2>Lista de usuarios registrados</h2>
        <p>Bienvenido Administrador del sitio, desde aquí podrá eliminar usuarios y quitar o agregar permisos a los mismos</p>
      </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Email</th>
                <th>Permisos</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$registrados item=registrado}
                <tr>
                  <td>{$registrado['usuario']}</td>
                  {if $registrado['es_admin']}
                     <td>{"Administrador"}</td>
                  {else}
                     <td>{"Usuario Común"}</td>
                  {/if}
                  <td><a class="partial" href="#" data-target="updateRegistrado/{$registrado['id_usuario']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                  <td><a class="partial" href="#" data-target="borrarRegistrado/{$registrado['id_usuario']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
              {/foreach}
            </tbody>
          </table>
          <h2>Lista de imagenes de los juegos</h2>
          <p>Desde aquí podrá eliminar o agregar imagenes a los juegos</p>
        </div>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Juego</th>
                  <th>Imagen del juego</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$imagenesItem item=imagen}
                  <tr>
                    <td>{$imagen['nombre']}</td>
                    <!-- <li class="list-group-item">Imagen: <img src="{$imagen}"></li> -->

                    <td><img src="{$imagen['camino']}"</td>
                    <td><a class="partial" href="#" data-target="borrarImagen/{$imagen['id_imagen']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                    <!-- <li class="list-group-item">Imagen: <img src="{$imagen[1]}"></li> -->
                    <!-- <td>{$imagen['id_imagen']}</td> -->
                    <!-- <td><a class="partial" href="agregarImagen/{$imagen['id_item']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                     <td><a class="partial" href="borrarImagen/{$imagen['id_imagen']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td> -->
                  </tr>
                {/foreach}
              </tbody>
            </table>

            <!-- {include file="comentarios/indexComentarios.tpl"} -->

      </div>
    </div>
  </div>
