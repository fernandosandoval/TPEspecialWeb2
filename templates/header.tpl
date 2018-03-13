
<!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>{{$titulo}}</title>
            <link rel="stylesheet" type="text/css" href="css/estilo.css">
            <link href="css/bootstrap.min.css" rel="stylesheet">
        </head>

        <body>
          <div id="encabezado">
             <h1>Canje de Juegos y Consolas</h1>
          </div>
          <div class="row">
            <div class="col-sm-12">
            <nav class="navbar navbar-inverse">
             <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
              </button>
             <!-- <a class="navbar-brand" href="home">Juegos y Consolas</a> -->
          </div> <!-- navbar-header-->
          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="container-navbar">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                     <li id="home"><a href="home" class="partial">Home</a></li>
                     <li id="items"><a href="items" class="partial">Todos los Juegos</a></li>
                     <li id="elegirU"><a href="seleccionarVendedor" class="partial">Juegos por Vendedor</a></li>
                     <li id="usuarios"><a href="usuarios" class="partial">Lista de Vendedores</a></li>
                     <li id="agregarI"><a href="guardarItem" class="partial">Agregar Juego</a></li>
                     <li id="agregarU"><a href="guardarUsuario" class="partial">Agregar Vendedor</a></li>
                     <li id="listaC"><a href="comentarios" class="partial">Comentarios</a></li>
                     <li id="admin"><a href="registrados" class="partial">Administrar datos</a></li>
                     <li id="salir"><a href="logout" class="partial">Salir</a></li>
                    </ul>
                   </div><!-- /.navbar-collapse -->
                  </div> <!-- /container navbar -->
                 </div><!-- /.container-fluid -->
               </nav>
