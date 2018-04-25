<div class="container-navbar">
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
         <li id="home"><a href="#" data-target="home" class="partial">Home</a></li>
         <li id="items"><a href="#" data-target="items" class="partial">Todos los Juegos</a></li>
         <li id="elegirU"><a href="#" data-target="seleccionarVendedor" class="partial">Juegos por Vendedor</a></li>
         <li id="usuarios"><a href="#" data-target="usuarios" class="partial">Lista de Vendedores</a></li>
         <li id="agregarI"><a href="#" data-target="guardarItem" class="partial">Agregar Juego</a></li>
         <li id="agregarU"><a href="#" data-target="guardarUsuario" class="partial">Agregar Vendedor</a></li>
         {if $sesion == 'ADMIN'}
         <li id="listaC"><a href="#" data-target="comentarios" class="partialComm">Comentarios</a></li>
         <li id="admin"><a href="#" data-target="registrados" class="partial">Administrar datos</a></li>
         {/if}
         <li id="salir"><a href="#" data-target="logout" class="partial">Salir</a></li>
        </ul>


       </div><!-- /.navbar-collapse -->
      </div> <!-- /container navbar -->
