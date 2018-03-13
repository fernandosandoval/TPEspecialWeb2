     <div>
       <div class="titulo-tabla">
          <h2>Detalle de Item</h2>
          <p>En caso de estar interesado en un item, por favor contactese con el vendedor que publico el aviso</p>
        </div>
            <li class="list-group-item">Nombre: {$item['nombre']}</li>
            <li class="list-group-item">Género: {$item['genero']}</li>
            <li class="list-group-item">Precio: {$item['precio']}</li>
            <li class="list-group-item">Descripcion: {$item['descripcion']}</li>
            <li class="list-group-item">Vendedor: {$item['fk_id_vendedor']}</li>
            
            {foreach from=$imagenes item=imagen}
            <li class="list-group-item">Imagen: <img src="{$imagen}"></li>

            {/foreach}


     </div>
