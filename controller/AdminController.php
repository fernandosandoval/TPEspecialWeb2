<?php
include_once('model/AdminModel.php');
include_once('view/AdminView.php');
include_once('controller/SecuredController.php');


/**
 *
 */
class AdminController extends SecuredController
{

  function __construct()
  {
     parent::__construct();
     $this->view = new AdminView();
     $this->model = new AdminModel();
  }

  public function index()
  {
    $this->view->mostrarIndex();
  }

  public function showRegistrados(){
    $permiso = $this->esAdmin();
    if($permiso){
          $arrNombre = [];
          $arrCamino = [];
          $registrados = $this->model->getRegistrados();
          $imagenesItem = $this->model->getImagenesDeItems();
          $this->view->mostrarRegistrados($registrados,$imagenesItem);
        }
        else {
          echo "<h3>Acceso denegado</h3>";
          echo "<h3>Lo sentimos, usted no tiene permiso para acceder a esta sección</h3>";
        }
  }

  public function update($params)
  {
    $id_usuario = $params[0];
    $usuario = $this->model->getRegistrado($id_usuario);
    print_r($usuario);
    $dato = $usuario['es_admin'];
    print_r($dato);
    $es_admin = ($dato == 0) ? 1 : 0 ;
    $this->model->actualizarPermiso($es_admin, $id_usuario);
  }

  public function destroy($params)
  {
    $id_usuario = $params[0];
    $this->model->borrarRegistrado($id_usuario);
    header('Location: '.HOME);

  }

  public function destroyImage($params)
  {
    $id_imagen = $params[0];
    $this->model->borrarImagen($id_imagen);
    header('Location: '.HOME);

  }

}
