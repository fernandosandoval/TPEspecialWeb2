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
    $id_usuario_str = $params[0];
    $id_usuario = str_split($id_usuario_str,2);
    $id_u = $id_usuario[0];
    $usuario = $this->model->getRegistrado($id_u);
    $datoAdmin = $usuario['es_admin'];
    $actualdatoAdmin = ($datoAdmin == 0) ? 1 : 0 ;
    $this->model->actualizarPermiso($actualdatoAdmin, $id_u);
    echo "El permiso del usuario {$usuario['usuario']} ha sido actualizado con éxito";
  //  header('Location: '.HOME);
  }


  public function destroy($params)
  {
    $id_usuario = $params[0];
    $this->model->borrarRegistrado($id_usuario);
    echo "El usuario ha sido eliminado";
//    header('Location: '.HOME);

  }

  public function destroyImage($params)
  {
    $id_imagen = $params[0];
    $this->model->borrarImagen($id_imagen);
    echo "La imagen ha sido eliminada";
    //header('Location: '.HOME);

  }

}
