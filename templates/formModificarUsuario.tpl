<div class="titulo-tabla">
<h2>Modificar Datos del Vendedor</h2>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <!-- <p> Estas modificando el item número {($id)}</p> -->
    <form action="updateUsuario" method="post">
      <label for="id">Estas por modificar el Vendedor: "{$id}"</label><br>
        <input type="hidden" name="id" class="form-control" value="{$id}" >
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del vendedor">
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="number" id="telefono" name="telefono" placeholder="Telefono">
        </div>
        <div class="form-group">
          <label for="genero">Localidad</label>
          <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Localidad">
        </div>
      <button type="submit" class="btn btn-default">Modificar</button>
    </form>
  </div>
</div>
