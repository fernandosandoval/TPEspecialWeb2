<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h2>Agregue un comentario completando el siguiente formulario</h2>
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}

    <form action="createComentario" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="texto">Comentario</label>
        <input type="text" class="form-control" id="texto" name="texto" placeholder="Comentario">
      </div>
      <div class="form-group">
        <label for="fk_id_usuario">Usuario</label>
        <input type="number" id="fk_id_usuario" name="fk_id_usuario" placeholder="Usuario">
      </div>
      <div class="form-group">
        <label for="fk_id_item">Juego</label>
        <input type="number" id="fk_id_item" name="fk_id_item" placeholder="Juego">
      </div>
      <div class="form-group">
        <label for="puntaje">Puntaje</label>
        <input type="number" id="puntaje" name="puntaje" min="1" max="5">
      </div>

      <!-- <img src="captcha/captchaphp.php"><br/> -->
      <!-- <input type="text" name="captcha"> -->
      <button id="btnCrearComentario" type="submit" class="btn btn-default">Crear Comentario</button>
    </form>
  </div>
</div>
