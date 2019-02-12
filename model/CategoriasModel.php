<?php

class CategoriasModel
{
  private $db;

  function __construct(){
    $this->db = $this->connect();
  }

  function connect(){
    return new PDO('mysql:host=localhost;'.'dbname=tpe web 2;charset=utf8', 'root', '');
  }

  function getCategorias(){
    $sentencia = $this->db->prepare( "select * from categoria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCategoria($id_categoria){
    $sentencia = $this->db->prepare( "select * from categoria where id_categoria = ?");
    $sentencia->execute(array($id_categoria[0]));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }

  function insertarCategoria($titulo){
    $sentencia = $this->db->prepare( "insert into categoria (titulo_categoria) values (?)");
    $sentencia->execute(array($titulo));
  }

  function guardarEdicionDB($titulo, $id_categoria){
    $sentencia = $this->db->prepare( "update categoria set titulo_categoria = ? where id_categoria= ?");
    $sentencia->execute(array($titulo, $id_categoria));
  }

  function borrarCategoriaDB($id_categoria){
    $sentencia = $this->db->prepare( "delete from categoria where id_categoria = ?");
    $sentencia->execute(array($id_categoria[0]));
  }
}
