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

  function detalleItem($item, $imagenes, $usuario){
      $this->smarty->assign('item', $item);
      $this->smarty->assign('imagenes', $imagenes);
      $this->smarty->assign('usuario', $usuario);
      $this->smarty->display('templates/detalleItem.tpl');
  }

  function mostrarIndex($sesion){
    $titulo = "Juegos y Consolas";
    $smarty = new Smarty();
    $smarty->assign('titulo', $titulo);
    $smarty->assign('sesion', $sesion);
    $smarty->display('templates/index.tpl');
  }

  function mostrarHome(){
    // $titulo = "Juegos y Consolas";
    // $smarty = new Smarty();
    // $smarty->assign('titulo', $titulo);
    $this->smarty->display('templates/carousel.tpl');
  }

  function mostrarCrearItems($vendedores){
    $this->asignarItemForm();
    $this->smarty->assign('vendedores', $vendedores);
    $this->smarty->display('templates/formCrearItem.tpl');
  }

  function seleccionarVendedor($vendedores){
    $this->smarty->assign('vendedores', $vendedores);
    $this->smarty->display('templates/elegirVendedor.tpl');
  }

  function modificarItem($id,$nomjuego){
    $this->asignarItemForm();
    $this->smarty->assign('id', $id);
    $this->smarty->assign('nomjuego', $nomjuego);
    $this->smarty->display('templates/formModificarItem.tpl');
  }

  function errorCrear($error, $nombre, $genero, $precio, $descripcion, $vendedor){
    $this->asignarItemForm($nombre, $genero, $precio, $descripcion, $vendedor);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formCrearItem.tpl');
  }

  function errorModificar($error, $nombre, $genero, $precio, $descripcion, $vendedor){
    $this->asignarItemForm($nombre, $genero, $precio, $descripcion, $vendedor);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formModificarItem.tpl');
  }

  private function asignarItemForm($nombre='', $genero='', $precio='', $descripcion='', $vendedor=''){
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->assign('genero', $genero);
    $this->smarty->assign('precio', $precio);
    $this->smarty->assign('descripcion', $descripcion);
    $this->smarty->assign('vendedor', $vendedor);
  }


}





 ?>
