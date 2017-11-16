<?php
include_once 'libs/Smarty.class.php';

/**
 *
 */
class UsuariosView extends View
{
  function mostrarUsuarios($usuarios){
      $this->smarty->assign('usuarios', $usuarios);
      $this->smarty->display('templates/usuarios.tpl');
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

  function mostrarCrearUsuarios(){
    $this->asignarUsuarioForm();
    $this->smarty->display('templates/formCrearUsuario.tpl');
  }

  function errorCrear($error, $nombre, $telefono, $localidad){
    $this->asignarUsuarioForm($nombre, $telefono, $localidad);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formCrearUsuario.tpl');
  }

  private function asignarUsuarioForm($nombre='', $telefono='', $localidad=''){
    $this->smarty->assign('nombre', $nombre);
    $this->smarty->assign('telefono', $telefono);
    $this->smarty->assign('localidad', $localidad);
  }


  function modificarUsuario($id){
      $this->asignarUsuarioForm();
      $this->smarty->assign('id', $id);
      $this->smarty->display('templates/formModificarUsuario.tpl');
  }

  function errorModificar($error, $nombre, $telefono, $localidad){
    $this->asignarUsuarioForm($nombre, $telefono, $localidad);
    $this->smarty->assign('error', $error);
    $this->smarty->display('templates/formModificarUsuario.tpl');
  }

}





 ?>
