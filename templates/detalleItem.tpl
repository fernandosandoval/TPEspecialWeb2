{include file="header.tpl"}
      <div class="titulo-tabla">
      <h2>Detalle de Item</h2>
      <p>En caso de estar interesado en un item, por favor contactese con el vendedor que publico el aviso</p>
        <table class="table table-bordered">
          <tbody>
              <tr>
                <td>{$item['nombre']}</td>
                <td>{$item['genero']}</td>
                <td>{$item['precio']}</td>
                <td>{$item['descripcion']}</td>
                <td>{$item['fk_id_vendedor']}</td>
              </tr>
          </tbody>
        </table>
      </div> <!-- <div class="titulo-tabla" -->
{include file="footer.tpl"}
