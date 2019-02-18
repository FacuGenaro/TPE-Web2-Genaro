<?php
class ComentariosModel  {
  private $db;
  function __construct() {
    $this->db = $this->Connect();
  }
  function Connect() {
    return new PDO('mysql:host=localhost;'.'dbname=tpe web 2;charset=utf8', 'root', '');
  }
  function getComentarios(){
    $sentencia = $this->db->prepare( "select * FROM comentarios ");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function getComentario($id_comentario){
    $sentencia = $this->db->prepare( "select * FROM comentarios where id_comentario = ? ");
    $sentencia->execute([$id_comentario]);
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
  function insertarComentario($comentario,$puntaje,$id_noticia,$id_user){
    $sentencia = $this->db->prepare("insert into comentario(comentario,puntaje,id_noticia,id_usuario) VALUES(?,?,?,?)");
    $sentencia->execute(array($comentario,$puntaje,$id_noticia,$id_user));
  //  $lastId=$this->db->lastInsertId();
  //  return $this->GetComentario($lastId);
  }
  // function borrarComentario($idComentario){
  //   $comentario=$this->GetComentario($idComentario);
  //   if(isset($comentario)){
  //     $sentencia = $this->db->prepare("delete from comentarios where id_comentarios=?");
  //     $sentencia->execute(array($idComentario));
  //     return $comentario;
  //   }
  // }
  // function editarComentario($id_comentario,$comentario,$puntaje,$id_banda,$id_user){
  //   $sentencia = $this->db->prepare("UPDATE `comentarios` SET `comentario`=?,`puntaje`=?,`id_banda`=?,`id_usuario`=? WHERE `id_comentario`=?");
  //   $sentencia->execute([$comentario,$puntaje,$id_banda,$id_user,$id_comentario]);
  // }
}
?>
