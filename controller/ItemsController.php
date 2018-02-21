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
     $this->modelU = new UsuariosModel();
  }

  private function sonJPG($imagenesTipos){
       foreach ($imagenesTipos as $tipo) {
          if($tipo != 'image/jpeg') {
           return false;
         }
       }
       return true;
   }

  public function index()
  {
    $this->view->mostrarIndex();
  }

  public function home()
  {
    $this->view->mostrarHome();
  }

  public function showItems(){
    $items = $this->model->getItems();
    $this->view->mostrarItems($items);
  }

  public function selectVendedor(){
    $vendedores = $this->modelU->getUsuarios();
    $this->view->seleccionarVendedor($vendedores);
  }

  public function showItemsByUser(){
    $id_vendedor = $_POST['vendedor'];
    $arr = str_split($id_vendedor);
    $items = $this->model->getItemsPorUsuario($arr);
    $this->view->mostrarItems($items);
  }

  public function detail($params){
    $id = ($params[0]);
    $result = [];
    $item = $this->model->getItem($id);
    $arrayimagen = $this->model->obtenerImagen($id);
    $elementoimagen = $arrayimagen[0];
    foreach (($elementoimagen) as $elem){
       $camino = $elem['path'];
       array_push($result, $camino);
    }
    $this->view->detalleItem($item, $result);
  }

  public function create()
  {
    $vendedores = $this->model->getUsuarios();
    $this->view->mostrarCrearItems($vendedores);
  }

  public function modify($params){
    $id = ($params[0]);
    print_r($id);
    $item = $this->model->getItem($id);
    $this->view->modificarItem($id);
  }

  public function update()
  {
    if (empty($_POST)){
      echo ("no se esta pasando nada por post");
      $this->view->modificarItem();
    }
    else {
      $id = $_POST['id'];
      $nombre = $_POST['nombre'];
      $genero = $_POST['genero'];
      $precio = $_POST['precio'];
      $descripcion = $_POST['descripcion'];
      $vendedor = $_POST['vendedor'];
      if(isset($_POST['vendedor']) && !empty($_POST['vendedor'])){
          $this->model->actualizarItem($nombre, $genero, $precio, $descripcion, $vendedor, $id);
          header('Location: '.HOME);
          }
      else
         $this->view->errorModificar("El vendedor es requerido", $nombre, $genero, $precio, $descripcion, $vendedor);

     }
  }

  public function store()
  {
    if (empty($_POST)){
      $vendedores = $this->modelU->getUsuarios();
      $this->view->mostrarCrearItems($vendedores);
    }
    else {
      $rutaTempImagenes = $_FILES['imagen']['tmp_name'];
      $nombre = $_POST['nombre'];
      $genero = $_POST['genero'];
      $precio = $_POST['precio'];
      $descripcion = $_POST['descripcion'];
      $vendedor = $_POST['vendedor'];
      if(isset($_POST['vendedor']) && !empty($_POST['vendedor'])){
            if($this->sonJPG($_FILES['imagen']['type'])) {
                    $this->model->guardarItem($nombre, $genero, $precio, $descripcion, $vendedor, $rutaTempImagenes);
                    header('Location: '.HOME);
            }
            else{
              $this->view->errorCrear("La imagen tiene que ser JPG.", $nombre, $genero, $precio, $descripcion, $vendedor);
            }
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
//    header('Location: '.TABLAITEMS);
  }

}

 ?>
