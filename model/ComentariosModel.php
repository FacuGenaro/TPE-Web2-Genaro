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

  function insertarComentario($comentario, $puntaje, $id_noticia, $user){
    // $id_user = $this->db->prepare("select id_usuario from comentarios where (user = ?)")->execute(array($user))->(PDO::FETCH_ASSOC);
    $sentencia = $this->db->prepare("insert into comentarios (comentario,puntaje,id_noticia,id_usuario) VALUES (?,?,?,?)");
    return $sentencia->execute(array($comentario, $puntaje, $id_noticia, $id_user));
  }

}
?>
