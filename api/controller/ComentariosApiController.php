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
    echo $objetoJson;
    if (isset($objetoJson)) {
      $respuesta=$this->model->insertarComentario($objetoJson->comentario,$objetoJson->puntaje,$objetoJson->id_noticia,$objetoJson->id_usuario);
      return $this->json_response($respuesta, 200);
    }
    else {
      return $this->json_response("Comentario en blanco", 300);
    }
  }
  // function getComentarios($param = null){
  //   if(isset($param)){
  //     $id_banda = $param[0];
  //     $arreglo = $this->model->GetComentarioDeBanda($id_banda);
  //     $data = $arreglo;
  //   }else{
  //     $data = $this->model->getComentarios();
  //   }
  //   if(isset($data)){
  //     return $this->json_response($data, 200);
  //   }else{
  //     return $this->json_response(null, 404);
  //   }
  // }
  // function DeleteComentario($param = null){
  //   if(count($param) == 1){
  //     $id_comentario = $param[0];
  //     $response =  $this->model->BorrarComentario($id_comentario);
  //     if($response == false){
  //       return $this->json_response($response, 300);
  //     }
  //     return $this->json_response($response, 200);
  //   }else{
  //     return  $this->json_response("No comment specified", 300);
  //   }
  // }
}
?>
