<div class="row">
  <div class="col-md-6 col-md-offset-3">
    {if isset($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
        <form action="itemsPorUsuario" name= "formVendedor" id="formVendedor" method="post" >
          <div class="form-group">
            <label for="vendedor">Vendedor</label>
            <select name="vendedor" id="idVend">
              {foreach from=$vendedores item=vend}
                 <option value="{$vend['id_vendedor']}">{$vend['nombre']}</option>
              {/foreach}
            </select>
          </div>
          <button type="submit" id="btn-SelecVendedor">Listo</button>
        </form>
    </div>
</div>
