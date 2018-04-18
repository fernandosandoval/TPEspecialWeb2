<?php
include_once 'libs/Smarty.class.php';

/**
 *
 */
class AdminView extends View
{

  function mostrarRegistrados($registrados, $imagenesItem){
      $this->smarty->assign('registrados', $registrados);
      $this->smarty->assign('imagenesItem', $imagenesItem);
      $this->smarty->display('templates/registrados.tpl');
  }

//   private function asignarRegistradoForm($email='', $tipo=''){
//     $this->smarty->assign('email', $email);
//     $this->smarty->assign('tipo', $tipo);
//   }
//
//   function modificarRegistrado($id){
//       $this->asignarRegistradoForm();
//       $this->smarty->assign('id', $id);
//       $this->smarty->display('templates/formModificarUsuario.tpl');
// }




}
 ?>
