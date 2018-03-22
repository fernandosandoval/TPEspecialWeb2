<div id="partialRender">
      <div class="titulo-tabla">
      <h2>Lista de Juegos Ofrecidos</h2>
      <p>En caso de estar interesado en un item, por favor contactese con el vendedor que publico el aviso</p>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Vendedor</th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$items item=item}
              <tr>
                <td>{$item['juego']}</td>
                <td>{$item['precio']}</td>
                <td>{$item['vendedor']}</t>
                <!-- <img src="{$item['imagen']}" alt="Imagen del juego {$item['nombre']}"> -->
                <td><a class="partial" href="#" data-target="detalleItem/{$item['id_item']}"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a></td>
                <td><a class="partial" href="#" data-target="modificarItem/{$item['id_item']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                <td><a class="partial" href="#" data-target="borrarItem/{$item['id_item']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
              </tr>
            {/foreach}
          </tbody>
        </table>
      </div> <!-- <div class="titulo-tabla" -->
</div>
