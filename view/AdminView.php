<?php
include_once 'libs/Smarty.class.php';

/**
 *
 */
class AdminView extends View
{

  function mostrarRegistrados($registrados, $imagenesItem){
//      print_r($imagenesItem);
      $this->smarty->assign('registrados', $registrados);
      $this->smarty->assign('imagenesItem', $imagenesItem);
      $this->smarty->display('templates/registrados.tpl');
  }
}





 ?>
