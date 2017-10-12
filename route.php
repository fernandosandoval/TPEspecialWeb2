<?php
  define('ACTION', 0);
  define('VALOR1', 1);
  define('VALOR2', 2);

  include_once 'config/ConfigApp.php';
  include_once 'index.html';
  include_once 'items.php';
  include_once 'juegos.php';


  function parseURL($url){
      $urlExploded = explode('/', $url);
      $arrayReturn[ConfigApp::$ACTION] = $urlExploded[ACTION];
      $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[VALOR1]) ? array_slice($urlExploded,1) : null;

      return $arrayReturn;
  }

  if (isset($_GET['action'])){
        $urlData = parseURL($_GET['action']);
        $action = $urlData[ConfigApp::$ACTION];
        if (array_key_exists($action,ConfigApp::$ACTIONS)){
          $params = $urlData[ConfigApp::$PARAMS];
          $metodo = ConfigApp::$ACTIONS[$action];
              if(isset($params) && $params != null){
                echo $metodo($params);
              }
              else{
                echo $metodo();
              }
          // echo 'Existe la accion '. $action;
          // echo ' y tengo que llamar al metodo '.ConfigApp::$ACTIONS[$action];
          // echo ' y los parametros son: ';
          // print_r ($params);

        }
        //
        // if ($actions[ACTION] === 'sumar'){
        //     echo sumar($actions[VALOR1],$actions[VALOR2]);
        //   }
        // if ($actions[0] === 'about'){
        //   if (isset($actions[VALOR1])){
        //     echo about($actions[VALOR1]);
        //   }
        //   else {
        //     echo about();
        //   }
        // }
  }
?>
