{include file="templates/header.tpl"}
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2>Lista de usuarios registrados</h2>
      <p>En caso de estar interesado en un item, por favor contactese con el vendedor que publico el aviso</p>
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
              </tr>
            {/foreach}
          </tbody>
        </table>
      </div>
    </div>
  </div>
  {include file="templates/footer.tpl"}
