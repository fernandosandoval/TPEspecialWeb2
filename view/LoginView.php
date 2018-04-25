<?php
include_once 'libs/Smarty.class.php';

class LoginView extends View
{
  function mostrarLogin($sesion){
      $error = '';
      $this->smarty->assign('error', $error);
      $this->smarty->assign('sesion', $sesion);
      $this->smarty->display('templates/login/index.tpl');
  }

  function mostrarRelogin($sesion){
      $error = '';
      $this->smarty->assign('error', $error);
      $this->smarty->assign('sesion', $sesion);
      $this->smarty->display('templates/login/home.tpl');
  }

}

?>
