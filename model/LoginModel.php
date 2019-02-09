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

  function InsertarUsuario($nombre, $pass){
    $sentencia = $this->db->prepare("insert into usuario(nombre, pass) VALUES(?,?)");
    $sentencia->execute(array($nombre, $pass));
  }

  function getUser($id_usuario){ //usuario individual
      $sentencia = $this->db->prepare( "select * from usuario where id_usuario=? limit 1");
      $sentencia->execute(array($id_usuario));
      return $sentencia->fetch(PDO::FETCH_ASSOC); //si explota probar con fetch
  }

}


 ?>
