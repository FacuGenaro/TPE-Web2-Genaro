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

  function getNoticia($id_noticia){
    $sentencia = $this->db->prepare( "select * from noticia,categoria where noticia.id_noticia=? and noticia.id_categoria=categoria.id_categoria");
    $sentencia->execute(array($id_noticia[0]));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function insertarNoticia($titulo, $contenidoPreview, $imagen, $id_categoria, $contenidoFull){
    $sentencia = $this->db->prepare( "insert into noticia (titulo,contenidoPreview,imagen,id_categoria, contenidoFull) values (?,?,?,?,?)");
    $sentencia->execute(array($titulo, $contenidoPreview, $imagen, $id_categoria, $contenidoFull));
  }

  function borrarNoticiaDB($id_noticia){
    $sentencia = $this->db->prepare( "delete from noticia where id_noticia = ?");
    $sentencia->execute(array($id_noticia[0]));
  }

  function guardarEdicionDB($titulo, $contenidoPreview, $imagen, $id_categoria, $contenidoFull, $id_noticia){
    $sentencia = $this->db->prepare( "update noticia set titulo = ?, contenidoPreview = ?, imagen = ?, id_categoria = ?, contenidoFull = ? where id_noticia= ?");
    $sentencia->execute(array($titulo, $contenidoPreview, $imagen, $id_categoria, $contenidoFull, $id_noticia));
  }

  function getIdCategoria($categoria){
    $sentencia = $this->db->prepare( "select * from categoria where titulo_categoria = ?");
    $sentencia->execute(array($categoria));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function getCategorias(){
    $sentencia = $this->db->prepare( "select * from categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
