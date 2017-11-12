<?php
class ConfigApp{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
      ''=> 'ItemsController#index',
      'home'=> 'ItemsController#index',
      'items' => 'ItemsController#showItems',
      'agregarItem' => 'ItemsController#create',
      'guardarItem' => 'ItemsController#store',
      'borrarItem' => 'ItemsController#destroy',
      'detalleItem' => 'ItemsController#detailItem',
      'home'=> 'UsuariosController#index',
      'usuarios' => 'UsuariosController#showUsuarios',
      'agregarUsuario' => 'UsuariosController#create',
      'guardarUsuario' => 'UsuariosController#store',
      'borrarUsuario' => 'UsuariosController#destroy',
      'login' => 'LoginController#index',
      'verificarUsuario' => 'LoginController#verify',
      'logout' => 'LoginController#destroy'
  ];
}
?>
