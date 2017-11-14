<h2>Modificar Datos del Juego</h2>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <form action="modificarItem" method="post">
      <div class="form-group">
        <label for="juego">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del item">
      </div>
      <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" id="precio" name="precio" placeholder="Precio">
      </div>
      <div class="form-group">
        <label for="genero">Genero</label>
        <input type="text" class="form-control" id="genero" name="genero" placeholder="Genero">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" name="descripcion" rows="1" cols="50"></textarea>
      </div>
      <div class="form-group">
        <label for="vendedor">Vendedor</label>
        <input type="number" id="vendedor" name="vendedor" placeholder="Vendedor">
      </div>
      <button type="submit" class="btn btn-default">Agregar</button>
    </form>
  </div>
</div>
