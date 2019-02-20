<?php
require_once "./config/Api.php";
require_once "../model/ComentariosModel.php";

class ComentariosApiController extends Api{

  private $model;

  function __construct(){
    parent::__construct();
    $this->model = new ComentariosModel();
  }

  function insertarComentario(){
    $objetoJson = $this->getJSONData();
    if (isset($objetoJson)) {
      $respuesta = $this->model->insertarComentario($objetoJson->comentario, $objetoJson->puntaje, $objetoJson->id_noticia, $objetoJson->usuario);
      return $this->json_response($respuesta, 200);
    }
    else {
      return $this->json_response("Comentario en blanco", 300);
    }
  }

  function mostrarComentarios($param = null){
    if(isset($param)){
      $id_noticia = $param[0];
      $arreglo = $this->model->getComentarios($id_noticia);
      $data = $arreglo;
    }
    if(isset($data)){
      return $this->json_response($data, 200);
    }else{
      return $this->json_response(null, 404);
    }
  }

  function eliminarComentario($param = null){
    if(count($param) == 1){
      $id_comentario = $param[0];
      $respuesta =  $this->model->eliminarComentario($id_comentario);
      if($respuesta == false){
        return $this->json_response($respuesta, 300);
      }
      return $this->json_response($respuesta, 200);
    }else{
      return  $this->json_response("No hay comentario", 300);
    }
  }
}
?>
