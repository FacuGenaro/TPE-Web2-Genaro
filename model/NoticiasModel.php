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

  function getNoticias(){
      $sentencia = $this->db->prepare( "select * from noticia");
      $sentencia->execute();
      $return = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      return $return;
  }

  function insertarNoticia($titulo, $contenidoPreview, $imagen, $categoria, $id_categoria){
    $sentencia = $this->db->prepare( "insert into noticia (titulo,contenidoPreview,imagen,id_categoria) values (?,?,?,?)");
    $sentencia->execute(array($titulo, $contenidoPreview, $imagen, $id_categoria));
    $this->db = null;
  }

  function borrarNoticiaDB($id_noticia){
    $sentencia = $this->db->prepare( "delete from noticia where id_noticia = $id_noticia");
    $sentencia->execute(array($id_noticia));
    $this->db = null;
  }

}


 ?>
