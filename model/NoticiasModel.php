<?php

class NoticiasModel
{
  private $db;

  function __construct(){
    $this->db = $this->connect();
  }

  function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=tpe web 2;charset=utf8', 'root', '');
  }

  function getNoticias(){ //La que se usa para armar el index
    $sentencia = $this->db->prepare( "select * from noticia,categoria where noticia.id_categoria = categoria.id_categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getNoticia($id_noticia){ //busca noticia individual en la bd
    $sentencia = $this->db->prepare( "select * from noticia where id_noticia = ?");
    $sentencia->execute(array($id_noticia[0]));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function insertarNoticia($titulo, $contenidoPreview, $imagen, $id_categoria){
    $sentencia = $this->db->prepare( "insert into noticia (titulo,contenidoPreview,imagen,id_categoria) values (?,?,?,?)");
    $sentencia->execute(array($titulo, $contenidoPreview, $imagen, $id_categoria));
  }

  function borrarNoticiaDB($id_noticia){
    $sentencia = $this->db->prepare( "delete from noticia where id_noticia = ?");
    $sentencia->execute(array($id_noticia[0]));
  }

  function guardarEdicionDB($id_noticia, $titulo, $contenidoPreview, $id_categoria, $imagen){
    $sentencia = $this->db->prepare( "update noticia set titulo = ?, contenidoPreview = ?, imagen = ?, id_categoria = ? where id_noticia= ?");
    $sentencia->execute(array($titulo, $contenidoPreview, $imagen, $id_categoria, $id_noticia));
  }

  function getIdCategoria($categoria){
    $sentencia = $this->db->prepare( "select * from categoria where titulo_categoria = ?");
    $sentencia->execute(array($categoria));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

}

?>
