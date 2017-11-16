<?php
    echo "hola desde la api";
    define('RESOURCE', 0);
    define('PARAMS', 1);

    include_once 'config/Router.php';
    include_once '../model/Model.php';
    include_once 'controller/ComentariosApiController.php';

    $router = new Router();
    //url, verb, controller, method
    $router->AddRoute("comentarios", "GET", "ComentariosApiController", "getComentarios");
    $router->AddRoute("comentariositem/:id", "GET", "ComentariosApiController", "getComentariosItem");
    $router->AddRoute("comentariosvendedor/:id", "GET", "ComentariosApiController", "getComentariosVendedor");
    $router->AddRoute("comentarios/:id", "GET", "ComentariosApiController", "getComentario");
    $router->AddRoute("comentarios", "POST", "ComentariosApiController", "createComentario");
    $router->AddRoute("comentarios/:id", "DELETE", "ComentariosApiController", "deleteComentario");

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
