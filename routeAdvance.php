<?php


require_once "config/ConfigApp.php";
require_once "controller/noticiasController.php";

function parseURL($url)
{
  $urlExploded = explode('/', $url);
  $arrayReturn[ConfigApp::$ACTION] = $urlExploded[0];
  //var_dump($urlExploded[0]);

  #borrar/1/2/3/4
  $arrayReturn[ConfigApp::$PARAMS] = isset($urlExploded[1]) ? array_slice($urlExploded,1) : null;
  return $arrayReturn;
}

if(isset($_GET['action'])){
   #$urlData[ACTION] = borrar
   #$urlData[PARAMS] = [1,2,3,4]

    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home
    if(array_key_exists($action,ConfigApp::$ACTIONS)){
        $params = $urlData[ConfigApp::$PARAMS];
        $actionURL = explode('#',ConfigApp::$ACTIONS[$action]); //Array[0] -> TareasController [1] -> BorrarTarea
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
