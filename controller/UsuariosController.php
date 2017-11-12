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

  public function index()
  {
    $this->view->mostrarIndex();
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
          header('Location: '.TABLAUSUARIOS);
          }
      else{
        $this->view->errorCrear("El nombre es requerido", $nombre, $telefono, $localidad);
      }
    }
  }

  public function destroy($params)
  {
    $id_vendedor = $params[0];
    $this->model->borrarUsuarios($id_vendedor);
    header('Location: '.TABLAUSUARIOS);
  }

}

 ?>
