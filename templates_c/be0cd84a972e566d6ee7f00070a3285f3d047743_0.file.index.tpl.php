<?php
/* Smarty version 3.1.30, created on 2017-10-20 22:09:42
  from "C:\xampp\htdocs\2017\TPE\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ea58066094c5_51014488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be0cd84a972e566d6ee7f00070a3285f3d047743' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2017\\TPE\\templates\\index.tpl',
      1 => 1508530180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/carousel.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_59ea58066094c5_51014488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="partialRenderContainer">
    <?php $_smarty_tpl->_subTemplateRender("file:templates/carousel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
