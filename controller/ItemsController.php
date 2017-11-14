<?php
include_once('model/ItemsModel.php');
include_once('view/ItemsView.php');
include_once('model/UsuariosModel.php');
include_once('controller/SecuredController.php');

/**
 *
 */
class ItemsController extends SecuredController
{

  function __construct()
  {
     parent::__construct();
     $this->view = new ItemsView();
     $this->model = new ItemsModel();
  }

  public function index()
  {
    $this->view->mostrarIndex();
  }

  public function showItems(){
    $items = $this->model->getItems();
    $this->view->mostrarItems($items);
  }

  public function showItemsByUser(){
    $id_vendedor = $_POST['vendedor'];
    $items = $this->model->getItemsPorUsuario();
    $items = $this->model->getItems();
    $this->view->mostrarItems($items);
  }

  public function detail($params){
    $id = ($params[0]);
    $item = $this->model->getItem($id);
    $this->view->detalleItem($item);
    //header('Location: '.TABLAITEMS);
  }

  public function create()
  {
    $this->view->mostrarCrearItems();
  }

  public function modify($params){
    $id = ($params[0]);
    $this->view->modificarItem($id);
    {
      if (empty($_POST))
        $this->view->mostrarCrearItems();
      else {
    //    $rutaTempImagen = $_FILES['imagen']['tmp_name'];
        $nombre = $_POST['nombre'];
        $genero = $_POST['genero'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $vendedor = $_POST['vendedor'];
        if(isset($_POST['vendedor']) && !empty($_POST['vendedor'])){
            $this->model->guardarItem($nombre, $genero, $precio, $descripcion, $vendedor);
            header('Location: '.TABLAITEMS);
            }
        else{
          $this->view->errorCrear("El vendedor es requerido", $nombre, $genero, $precio, $descripcion, $vendedor);
        }
      }
    }
  }

  public function store()
  {
    if (empty($_POST))
      $this->view->mostrarCrearItems();
    else {
  //    $rutaTempImagen = $_FILES['imagen']['tmp_name'];
      $nombre = $_POST['nombre'];
      $genero = $_POST['genero'];
      $precio = $_POST['precio'];
      $descripcion = $_POST['descripcion'];
      $vendedor = $_POST['vendedor'];
      if(isset($_POST['vendedor']) && !empty($_POST['vendedor'])){
          $this->model->guardarItem($nombre, $genero, $precio, $descripcion, $vendedor);
          header('Location: '.TABLAITEMS);
          }
      else{
        $this->view->errorCrear("El vendedor es requerido", $nombre, $genero, $precio, $descripcion, $vendedor);
      }
    }
  }

  public function destroy($params)
  {
    $id_item = $params[0];
    $this->model->borrarItem($id_item);
    header('Location: '.TABLAITEMS);
  }

}

 ?>
