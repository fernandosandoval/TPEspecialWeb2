<?php
include_once 'libs/Smarty.class.php';

class LoginView extends View
{
  function mostrarLogin($error = ''){
      $this->smarty->assign('error', $error);
      $this->smarty->display('templates/login/index.tpl');
  }

}

?>
