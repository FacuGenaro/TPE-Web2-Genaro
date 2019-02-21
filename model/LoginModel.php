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

  function getUser($user){
    $sentencia = $this->db->prepare( "select * from usuario where user = ? limit 1");
    $sentencia->execute(array($user));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function insertarUsuario($user,$pass){
    $sentencia = $this->db->prepare("insert into usuario(user, pass)values(?,?)");
    $sentencia->execute(array($user,$pass));
  }

  function darPermisos($user){
    $sentencia = $this->db->prepare( "update usuario set admin = 1 where user= ?");
    $sentencia->execute(array($user[0]));
  }

  function quitarPermisos($user){
    $sentencia = $this->db->prepare( "update usuario set admin = 0 where user= ?");
    $sentencia->execute(array($user[0]));
  }

  function eliminarUsuario($user){
    $sentencia = $this->db->prepare( "delete from usuario where user= ?");
    $sentencia->execute(array($user[0]));
  }
}
?>
