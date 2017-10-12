<?php
/* Smarty version 3.1.30, created on 2017-10-12 21:34:01
  from "C:\xampp\htdocs\2017\TPE\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59dfc3a9834827_11070315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be0cd84a972e566d6ee7f00070a3285f3d047743' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2017\\TPE\\templates\\index.tpl',
      1 => 1507836824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_59dfc3a9834827_11070315 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1>Lista de Juegos </h1>
          <div id="items">

          </div>

        </div>
      </div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
