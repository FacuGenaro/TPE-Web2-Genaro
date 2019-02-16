<?php

require_once "./config/Api.php";
require_once "./../model/NoticiasModel.php";

class NoticiasApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new NoticiasModel();
  }

  function getNoticias($param = null){
    if(isset($param)){
      $id_noticia = $param;
      $data = $this->model->getNoticia($id_noticia);
    }else{
      $data = $this->model->getNoticias();
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }

  function borrarNoticia($param = null){
    if(count($param) == 1){
      $id_noticia = $param;
      $respuesta = $this->model->borrarNoticiaDB($id_noticia);
      if($respuesta == false){
        return $this->json_response($respuesta, 300);
      }
      return $this->json_response($respuesta, 200);
    }else{
      return  $this->json_response("Noticia no encontrada", 300);
    }
  }

  function agregarNoticia(){
   $objetoJson = $this->getJSONData();
   $respuesta = $this->model->insertarNoticia($objetoJson->titulo, $objetoJson->contenidoPreview, $objetoJson->imagen, $objetoJson->id_categoria, $objetoJson->contenidoFull);
   return $this->json_response($respuesta, 200);
 }

 function editarNoticia($param = null){
   if(count($param) == 1){
     var_dump("entró");
     $id_noticia = $param[0];
     $objetoJson = $this->getJSONData();
     $respuesta = $this->model->guardarEdicionDB($objetoJson->titulo, $objetoJson->contenidoPreview, $objetoJson->imagen, $objetoJson->id_categoria, $objetoJson->contenidoFull, $id_noticia);
     return $this->json_response($respuesta, 200);
   }else{
     return  $this->json_response("No task specified", 300);
   }
 }


}
?>
