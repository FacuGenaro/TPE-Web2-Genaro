<?php

function connect(){
  return new PDO('mysql:host=localhost;'.'dbname=tpe web 2;charset=utf8', 'root', '');
}


function getNoticias(){
    $db = connect();
    $sentencia = $db->prepare( "select * from noticia");
    $sentencia->execute();
    $return = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    return $return;
}

function borrarNoticia($id_noticia){
    $db = connect();
    $sentencia = $db->prepare( "delete from noticia where id_noticia = $id_noticia");
    $sentencia->execute(array($id_noticia));
    header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}

function agregarNoticia(){
  $titulo = $_POST["tituloForm"];
  $contenidoPreview = $_POST["contenidoPreview"];
//  $contenidoFull = $_POST["contenidoFull"];
  $imagen = $_POST["imagenForm"];
  $categoria = $_POST["categoriaForm"];
  $id_categoria = 0;

  if ($categoria == "Futbol"){
    $id_categoria = 1;
  }else{
    $id_categoria =2;
  }
  var_dump($categoria);
  var_dump($id_categoria);

  $db = connect();
  $sentencia = $db->prepare( "insert into noticia (titulo,contenidoPreview,imagen,id_categoria) values (?,?,?,?)");
  $sentencia->execute(array($titulo, $contenidoPreview, $imagen, $id_categoria));
  header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
}


?>
