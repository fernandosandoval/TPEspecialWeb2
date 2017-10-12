<table class="table table-bordered">
  <thead>
    <tr>
      <th>Juego</th>
      <th>Precio</th>
      <th>Vendedor</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$items item=item} {
      {$nombreUsuario = getNombreUsuario($item['fk_id_usuario'])}
      echo '<tr>';
      echo '<td>'.{$item['nombre']}.'</td>';
      echo '<td>'.{$item['precio']}.'</td>';
      echo '<td>'.{$nombreUsuario}.'</td>';
      echo '</tr>';
    {/foreach}
?>
  </tbody>
</table>
