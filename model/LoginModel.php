<?php
/**
 *
 */
class LoginModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=tareas;charset=utf8'
    , 'root', '');
  }

  function getUser(){
      $sentencia = $this->db->prepare( "select * from usuario");
      $sentencia->execute();
      return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getUser($id_usuario){ //usuario individual
      $sentencia = $this->db->prepare( "select * from usuario where usuario=? limit 1");
      $sentencia->execute(array($usuario));
      return $sentencia->fetchAll(PDO::FETCH_ASSOC); //si explota probar con fetch
  }

  function InsertarUsuario($nombre, $pass){
    $sentencia = $this->db->prepare("insert into usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $pass));
  }

  function DeleteUsuario($usuario){
    $sentencia = $this->db->prepare("delete from usuario where id_usuario=?");
        $sentencia->execute(array($usuario));
  }
  // function darPermiso($usuario){
  //   $sentencia = $this->db->prepare("update `usuario` set `admin`=1 where `id_usuario`=?");
  //     $sentencia->execute(array($usuario));
  // }
  // function quitarPermiso($usuario){
  //   $sentencia = $this->db->prepare("update `usuario` set `admin`=0 WHERE `id_usuario`=?");
  //     $sentencia->execute(array($usuario));
  //   }

}


 ?>
