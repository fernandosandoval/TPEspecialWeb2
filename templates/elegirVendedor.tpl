<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <form action="itemsPorUsuario" method="post">
      <div class="form-group">
        <label for="vendedor">Vendedor</label>
        <select name=vendedor>
          {foreach from=$vendedores item=vend}
             <option value="{$vend['']}">{$vend['nombre']}</option>
          {/foreach}
        </select>
      </div>
      <button type="submit" class="btn btn-default">Listo</button>
    </form>
  </div>
</div>
