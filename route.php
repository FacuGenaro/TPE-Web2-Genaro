<?php

require_once "index.php";
//require_once "noticiaAmpliada.php";
require_once "PDO.php";



$partesURL = explode('/', $_GET['action']);
if ($partesURL[0] == '') {
  getIndex();
}elseif ($partesURL[0] == 'borrar') {
  borrarNoticia($partesURL[1]);
}elseif ($partesURL[0] == 'agregar') {
  agregarNoticia();
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
