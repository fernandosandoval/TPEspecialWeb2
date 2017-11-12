<?php
include_once 'libs/Smarty.class.php';

/**
 *
 */
class ItemsView extends View
{
  function mostrarItems($items){
      $this->smarty->assign('items', $items);
      $this->smarty->display('templates/items.tpl');
  }

  function detalleItem($item){
      $this->smarty->assign('item', $item);
      $this->smarty->display('templates/detalleItem.tpl');
  }

  function mostrarIndex(){
    $titulo = "Juegos y Consolas";
    $smarty = new Smarty();
    $smarty->assign('titulo', $titulo);
    $smarty->display('templates/index.tpl');
  }

  function mostrarHome(){
    $titulo = "Juegos y Consolas";
    $smarty = new Smarty();
    $smarty->assign('titulo', $titulo);
    $smarty->display('templates/carousel.tpl');
  }

  function mostrarCrearItems(){
    $this->assignarItemForm();
    $this->smarty->display('templates/formCrearItem.tpl');
  }

  function errorCrear($error, $nombre, $genero, $precio, $descripcion, $vendedor){
    $this->assignarItemForm($nombre, $genero, $precio, $descripcion, $vendedor);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formCrearItem.tpl');
  }

  private function assignarItemForm($nombre='', $genero='', $precio='', $descripcion='', $vendedor=''){
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->assign('genero', $genero);
    $this->smarty->assign('precio', $precio);
    $this->smarty->assign('descripcion', $descripcion);
    $this->smarty->assign('vendedor', $vendedor);
  }
}





 ?>
