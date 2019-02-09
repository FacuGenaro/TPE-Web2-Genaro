<?php

//require_once "./PDO.php";
class NoticiasModel
{
  private $db;

  function __construct()
  {
    $this->db= $this->connect();
  }

  function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=tpe web 2;charset=utf8', 'root', '');
  }

  function getNoticias(){ //La que se usa para armar el index
      $sentencia = $this->db->prepare( "select * from noticia");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

    function getNoticia($id_noticia){ //busca noticia individual en la bd
      $id_noticia2 = (int)$id_noticia[0]; //Acá me daba error porque queria convertir un string a un int... el metodo del video no me funcionó pero esto si.
      $sentencia = $this->db->prepare( "select * from noticia where id_noticia = ?");
      $sentencia->execute(array($id_noticia2));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function insertarNoticia($titulo, $contenidoPreview, $imagen, $categoria, $id_categoria){
    $sentencia = $this->db->prepare( "insert into noticia (titulo,contenidoPreview,imagen,id_categoria) values (?,?,?,?)");
    $sentencia->execute(array($titulo, $contenidoPreview, $imagen, $id_categoria));
  }

  function borrarNoticiaDB($id_noticia){
    $sentencia = $this->db->prepare( "delete from noticia where id_noticia = ?");
    $id_noticia2 = (int)$id_noticia[0]; //Acá me daba error porque queria convertir un string a un int... el metodo del video no me funcionó pero esto si.
    $sentencia->execute(array($id_noticia2));
  }

  function guardarEdicionDB($id_noticia,$titulo,$contenidoPreview,$id_categoria, $imagen){
    $sentencia = $this->db->prepare( "update noticia set titulo = ?, contenidoPreview = ?, imagen = ?, id_categoria = ? where id_noticia= ?");
    $sentencia->execute(array($titulo,$contenidoPreview, $imagen, $id_categoria, $id_noticia));
  }

}


 ?>
