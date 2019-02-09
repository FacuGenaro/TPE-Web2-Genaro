<?php


require_once "config/ConfigApp.php";
require_once "controller/NoticiasController.php";
require_once "controller/LoginController.php";

// define('ACTION', 0);
// define('PARAMS', 1);

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];

  #borrar/1/2/3/4
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){
    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $actionURL = explode('#',ConfigApp::$ACTIONS[$action]);
        $controller =  new $actionURL[0]();
        $metodoURL = $actionURL[1];
        if(isset($params) &&  $params != null){
            echo $controller->$metodoURL($params);
        }
        else{
            echo $controller->$metodoURL();
        }
    }else{
      $controller =  new noticiasController();
      echo $controller->getIndex();
    }

}
 ?>
