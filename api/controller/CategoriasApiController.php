<?php

require_once "./config/Api.php";
require_once "./../model/CategoriasModel.php";

class CategoriasApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new CategoriasModel();
  }

  function getCategorias($param = null){

    if(isset($param)){
      $id_categoria = $param;
      $data = $this->model->getCategoria($id_categoria);
    }else{
      $data = $this->model->getCategorias();
    }
      if(isset($data)){
        return $this->json_response($data, 200);
      }else{
        return $this->json_response(null, 404);
      }
  }
  function borrarCategoria($param = null){
    if(count($param) == 1){
      $id_categoria = $param;
      $respuesta = $this->model->borrarCategoriaDB($id_categoria);
      if($respuesta == false){
        return $this->json_response($respuesta, 300);
      }
      return $this->json_response($respuesta, 200);
    }else{
      return  $this->json_response("Categoria no encontrada", 300);
    }
  }

  function agregarCategoria(){
   $objetoJson = $this->getJSONData();
   $respuesta = $this->model->insertarCategoria($objetoJson->titulo);
   return $this->json_response($respuesta, 200);
 }

 function editarCategoria($param = null){
   if(count($param) == 1){
     $id_categoria = $param[0];
     $objetoJson = $this->getJSONData();
     $respuesta = $this->model->guardarEdicionDB($objetoJson->titulo, $id_categoria);
     return $this->json_response($respuesta, 200);
   }else{
     return  $this->json_response("Categoria no encontrada", 300);
   }
 }
}
 ?>
