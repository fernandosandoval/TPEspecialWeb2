<?php
define('RESOURCE', 0);
define('PARAMS', 1);

include_once 'config/router.php';
include_once '../model/Model.php';
include_once 'controller/ComentariosApiController.php';

// function parseURL($url)
// {
//   $urlExploded = explode('/', trim($url,'/'));
//   $arrayReturn[ConfigApi::$RESOURCE] = $urlExploded[RESOURCE].'#'.$_SERVER['REQUEST_METHOD'];
//   $arrayReturn[ConfigApi::$PARAMS] = isset($urlExploded[PARAMS]) ? array_slice($urlExploded,1) : null;
//   return $arrayReturn;
// }
//
// if(isset($_GET['resource'])){
//     $urlData = parseURL($_GET['resource']);
//     $resource = $urlData[ConfigApi::$RESOURCE];
//     if(array_key_exists($resource,ConfigApi::$RESOURCES)){
//         $url_params = $urlData[ConfigApi::$PARAMS];
//         $controller_method = explode('#',ConfigApi::$RESOURCES[$resource]); //Array[0] -> TareasController [1] -> index
//         $controller =  new $controller_method[0]();
//         $metodo = $controller_method[1];
//         if(isset($url_params) &&  $url_params != null){
//             echo $controller->$metodo($url_params);
//         }
//         else{
//             echo $controller->$metodo();
//         }
//     }
// }

$router = new Router();

$router->AddRoute("comentarios", "GET", "ComentariosApiController", "getComentarios");
$router->AddRoute("comentarios/:id", "GET", "ComentariosApiController", "getComentario");
$router->AddRoute("comentarios", "POST", "ComentariosApiController", "createComentario");
$router->AddRoute("comentarios/:id", "DELETE", "ComentariosApiController", "destroyComentario");

$route = $_GET['resource'];
$array = $router->Route($route);

if(sizeof($array) == 0)
    echo "404";
else
{
    $controller = $array[0];
    $metodo = $array[1];
    $url_params = $array[2];
    echo (new $controller())->$metodo($url_params);
}

?>
