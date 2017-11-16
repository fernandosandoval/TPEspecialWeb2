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
      'detalleItem' => 'ItemsController#detail',
      'modificarItem' => 'ItemsController#modify',
      'updateItem' => 'ItemsController#update',
      'home'=> 'UsuariosController#index',
      'usuarios' => 'UsuariosController#showUsuarios',
      'agregarUsuario' => 'UsuariosController#create',
      'guardarUsuario' => 'UsuariosController#store',
      'borrarUsuario' => 'UsuariosController#destroy',
      'modificarUsuario' => 'UsuariosController#modify',
      'updateUsuario' => 'UsuariosController#update',
      'login' => 'LoginController#index',
      'verificarUsuario' => 'LoginController#verify',
      'logout' => 'LoginController#destroy',
      'registrarUsuario' => 'LoginController#signUp',
      'borrarRegistrado' => 'AdminController#destroy',
      'updateRegistrado' => 'AdminController#update',
      'registrados' => 'AdminController#showRegistrados',
      'itemsPorUsuario' => 'ItemsController#showItemsByUser',
      'seleccionarVendedor' => 'ItemsController#selectVendedor',      

  ];
}
?>
