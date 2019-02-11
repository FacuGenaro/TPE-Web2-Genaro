<?php

class LoginModel
{
  private $db;

  function __construct(){
    $this->db = $this->connect();
  }

  function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=tpe web 2;charset=utf8', 'root', '');
  }

  function getUsers(){
    $sentencia = $this->db->prepare( "select * from usuario");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getUser($id_usuario){ //usuario individual
    $sentencia = $this->db->prepare( "select * from usuario where user = ? limit 1");
    $sentencia->execute(array($id_usuario));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function instertarUsuario($nombre, $pass){
    $sentencia = $this->db->prepare("insert into usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $pass));
  }

  function deleteUsuario($usuario){
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
