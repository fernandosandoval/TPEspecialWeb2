<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="titulo-tabla">
        <h2>Lista de vendedores</h2>
        <p>En caso de estar interesado en un item, por favor contactese con el vendedor que publico el aviso</p>
      </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Localidad</th>
              </tr>
            </thead>
            <tbody>
              {foreach from=$usuarios item=usuario}
                <tr>
                  <td>{$usuario['nombre']}</td>
                  <td>{$usuario['telefono']}</td>
                  <td>{$usuario['localidad']}</td>
                  <td><a class="partial" href="modificarUsuario/{$usuario['id_vendedor']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                  <td><a class="partial" href="borrarUsuario/{$usuario['id_vendedor']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                </tr>
              {/foreach}
            </tbody>
          </table>
      </div>
    </div>
  </div>
