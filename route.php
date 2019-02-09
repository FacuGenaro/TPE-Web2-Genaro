<?php

require_once "controller/NoticiasController.php";


$controller = new NoticiasController();
$partesURL = explode('/', $_GET['action']);

if ($partesURL[0] == '') {
  $controller->getIndex();
}elseif ($partesURL[0] == 'borrar') {
  $controller->borrarNoticia($partesURL[1]);
}elseif ($partesURL[0] == 'agregar') {
  $controller->agregarNoticia();
}
// }elseif ($partesURL[0] == 'editar') {
//   editarNoticia($partesURL[1]);
// }elseif ($partesURL[0] == 'ampliar') {
//   var_dump ($partesURL[3]);
//   var_dump ($partesURL[1]);
//   var_dump ($partesURL[2]);
//   getMasInformacion($partesURL[1], $partesURL[2], $partesURL[3]);
// }
?>
