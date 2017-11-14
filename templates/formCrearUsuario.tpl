<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <form action="guardarUsuario" method="post">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del vendedor">
      </div>
      <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="number" id="telefono" name="telefono" placeholder="telefono">
      </div>
      <div class="form-group">
        <label for="genero">Localidad</label>
        <input type="text" class="form-control" id="localidad" name="localidad" placeholder="Localidad">
      </div>
      <button type="submit" class="btn btn-default">Agregar Vendedor</button>
    </form>
  </div>
</div>
