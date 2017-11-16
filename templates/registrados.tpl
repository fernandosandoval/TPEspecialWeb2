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
                <th>Es Administrador</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$registrados item=registrado}
                <tr>
                  <td>{$registrado['usuario']}</td>
                  <td>{$registrado['es_admin']}</td>
                  <td><a class="partial" href="updateregistrado/{$registrado['id_usuario']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                  <td><a class="partial" href="borrarRegistrado/{$registrado['id_usuario']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
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
                  <th>Nombre del archivo de la imagen</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$imagenesItem item=imagen}
                  <tr>
                    <td>{$imagen['id_item']}</td>
                    <td>{$imagen['id_imagen']}</td>
                    <!-- <td><a class="partial" href="agregarImagen/{$imagen['id_item']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                     <td><a class="partial" href="borrarImagen/{$imagen['id_imagen']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td> -->
                  </tr>
                {/foreach}
              </tbody>
            </table>
      </div>
    </div>
  </div>
