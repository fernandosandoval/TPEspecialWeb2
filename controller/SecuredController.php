<?php

 class SecuredController extends Controller
 {

    function __construct()
    {
      session_start();
      if(isset($_SESSION['USER'])){
        if (time() - $_SESSION['LAST_ACTIVITY'] > 300000000) {
          header('Location: '.LOGOUT);
          die();
        }
        $_SESSION['LAST_ACTIVITY'] = time();
      }
      else {
        header('Location: '.LOGIN);
        die();
      }
   }

   public function esAdmin($value='')
   {
    $esAdmin=false;
    if(isset($_SESSION['ADMIN'])&& $_SESSION['ADMIN']==1){
         $esAdmin=true;
    }
    return $esAdmin;
   }

  public function esUsuario($value='')
  {
    $esUsuario=false;
    if(isset($_SESSION['USER'])){
        $usuario=true;
    }
    return $esUsuario;
  }
}
  ?>
