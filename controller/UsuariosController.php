<?php
include_once('model/UsuariosModel.php');
include_once('view/UsuariosView.php');
include_once('controller/SecuredController.php');

/**
 *
 */
class UsuariosController extends SecuredController
{

  function __construct()
  {
     parent::__construct();
     $this->view = new UsuariosView();
     $this->model = new UsuariosModel();
  }

  public function home()
  {
    $this->view->mostrarHome();
  }

  public function showUsuarios(){
    $usuarios = $this->model->getUsuarios();
    $this->view->mostrarUsuarios($usuarios);
  }

  public function create()
  {
    $this->view->mostrarCrearUsuarios();
  }

  public function store()
  {
    if (empty($_POST))
      $this->view->mostrarCrearUsuarios();
    else {
      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      $localidad = $_POST['localidad'];
      if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
          $this->model->guardarUsuario($nombre, $telefono, $localidad);
          header('Location: '.HOME);
          }
      else{
        $this->view->errorCrear("El nombre es requerido", $nombre, $telefono, $localidad);
      }
    }
  }

  public function modify($params){
    $id = ($params[0]);
    print_r($id);
    $item = $this->model->getUsuario($id);
    $this->view->modificarUsuario($id);
  }

  public function update()
  {
    if (empty($_POST)){
      echo ("no se esta pasando nada por post");
      $this->view->modificarUsuario();
    }
    else {
      //$rutaTempImagen = $_FILES['imagen']['tmp_name'];
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $telefono = $_POST['telefono'];
      $localidad = $_POST['localidad'];
      if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
          $this->model->actualizarUsuario($nombre, $telefono, $localidad, $id);
          header('Location: '.HOME);
         }
      else
         $this->view->errorModificar("El vendedor no puede estar vacío", $nombre, $telefono, $localidad);
     }
  }

  public function destroy($params)
  {
    $id_vendedor = $params[0];
    $this->model->borrarUsuario($id_vendedor);
    header('Location: '.HOME);
  }

}
