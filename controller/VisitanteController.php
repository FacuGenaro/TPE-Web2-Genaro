<?php
require_once "./view/NoticiasView.php";
require_once "./model/NoticiasModel.php";
require_once "CategoriasController.php";

class VisitanteController
{
  private $view;
  private $model;
  private $titulo;
  private $controllerCategoria;

  function __construct()
  {
    $this->controllerCategoria = new CategoriasController();
    $this->view = new NoticiasView();
    $this->model = new NoticiasModel();
    $this->titulo ="Noticias Deportes";
  }

  function getIndex(){
    $arrNoticias = $this->model->getNoticias();
    $this->view->mostrarPaginaVisitante($this->titulo, $arrNoticias);
  }

  function getMasInformacion($id_noticia){
    $arrNoticias = $this->model->getNoticia($id_noticia);
    $this->view->mostrarMasInformacionVisitante($this->titulo, $arrNoticias);
  }

  function getCategorias(){
    $this->controllerCategoria->getCategoriasVisitante();
  }

}
?>
