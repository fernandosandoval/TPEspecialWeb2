<?php
/* Smarty version 3.1.30, created on 2017-10-12 16:27:27
  from "C:\xampp\htdocs\2017\TPE\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59df7bcf58a0f4_88505693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37235fb2a99a5639cc3d1fef10f845386d93bf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2017\\TPE\\templates\\header.tpl',
      1 => 1507815713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59df7bcf58a0f4_88505693 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
      <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title><?php ob_start();
echo $_smarty_tpl->tpl_vars['titulo']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</title>
            <link rel="stylesheet" type="text/css" href="css/estilo.css">
            <link href="css/bootstrap.min.css" rel="stylesheet">


          <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
          <![endif]-->
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
             <a class="navbar-brand" href="#">Juegos y Consolas</a>
          </div> <!-- navbar-header-->
          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="container-navbar">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class="nav navbar-nav">
                     <li id="home"><a href="#">Home</a></li>
                     <li id="juegos"><a href="juegos">Juegos</a></li>
                     <li><a href="#contacto">Contacto</a></li>
                    </ul>
                   </div><!-- /.navbar-collapse -->
                  </div> <!-- /container navbar -->
                 </div><!-- /.container-fluid -->
               </nav>
<?php }
}
