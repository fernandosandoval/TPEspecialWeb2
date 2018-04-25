<?php

 class SecuredController extends Controller
 {

    function __construct()
    {
      session_start();
      if(isset($_SESSION['USER']) || isset($_SESSION['ADMIN']) || isset($_SESSION['GUEST'])){
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

   public function esAdmin()
   {
    $esAdmin=false;

    if(isset($_SESSION['ADMIN'])&& $_SESSION['ADMIN']==1){
         $esAdmin=true;
    }
    return $esAdmin;
   }

  public function esUsuario()
  {
    $esUsuario=false;
    if(isset($_SESSION['USER'])){
        $esUsuario=true;
    }
    return $esUsuario;
  }

  public function esInvitado()
  {
    $esInvitado=false;
    if(isset($_SESSION['GUEST'])){
        $esInvitado=true;
    }
    return $esInvitado;
  }


}
  ?>
