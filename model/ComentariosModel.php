<?php

class ComentariosModel  {
  private $db;

  function __construct() {
    $this->db = $this->Connect();
  }

  function Connect() {
    return new PDO('mysql:host=localhost;'.'dbname=tpe web 2;charset=utf8', 'root', '');
  }

  function getComentarios($id_noticia){
    $sentencia = $this->db->prepare( "select * from comentarios where id_noticia = ? ");
    $sentencia->execute([$id_noticia]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "select * from comentarios where id_comentario = ? ");
    $sentencia->execute([$id_comentario]);
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function insertarComentario($comentario, $puntaje, $id_noticia, $user){
    $sentencia = $this->db->prepare("insert into comentarios (comentario,puntaje,id_noticia,user) VALUES (?,?,?,?)");
    return $sentencia->execute(array($comentario, $puntaje, $id_noticia, $user));
  }

  function eliminarComentario($id_comentario){
    $comentario=$this->getComentario($id_comentario);
    if(isset($comentario)){
      var_dump($comentario['id_comentario']);
    $sentencia = $this->db->prepare( "delete from comentarios where id_comentario = ? ");
    $sentencia->execute(array($comentario['id_comentario']));
  }
}
}
?>
