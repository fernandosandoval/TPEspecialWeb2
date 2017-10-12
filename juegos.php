<?php
include_once 'items.php';
include_once 'libs/Smarty.class.php';
define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

function borrarItem($params){
  deleteItem($params[0]);
  header('Location: '.HOME);
}


function agregarItem(){
  $nombre = $_POST['nombre'];
  $tipo = $_POST['tipo'];
  $genero = $_POST['genero'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  insertItem($nombre, $tipo, $genero, $descripcion, $usuario);
  header('Location: '.HOME);
}

function juegos()
{
  $titulo = "Juegos y Consolas";
  $smarty = new Smarty();
  $smarty->assign('titulo', $titulo);
  $smarty->display('templates/index.tpl');

}

function mostrarItems()
{
  $items = getItems();
  $smarty = new Smarty();
  $smarty->assign('items', $items);
  $smarty->display('templates/items.tpl');

}
?>
