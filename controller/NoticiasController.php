<?php
require_once "./view/NoticiasView.php";
require_once "./model/NoticiasModel.php";

class NoticiasController
{
  private $view;
  private $model;
  private $titulo;
  // private $categorias;

  function __construct()
  {
    $this->view = new NoticiasView();
    $this->model = new NoticiasModel();
    $this->titulo ="Noticias Deportes";
  }

  function getIndex(){
    $arrNoticias = $this->model->getNoticias();
    $this->view->mostrarPagina($this->titulo, $arrNoticias);
  }

  function getMasInformacion($id_noticia){
    $arrNoticias = $this->model->getNoticia($id_noticia);
    $this->view->mostrarMasInformacion($this->titulo, $arrNoticias);
  }

  function nuevaNoticia(){
    $categorias = $this->model->getCategorias();
    $this->view->agregarNoticia($this->titulo,$categorias);
  }

  function agregarNoticia(){
    $titulo = $_POST["tituloForm"];
    $contenidoPreview = $_POST["contenidoPreview"];
    $contenidoFull = $_POST["contenidoFull"];
    $imagen = $_POST["imagenForm"];
    $categoria = $_POST["categoriaForm"];
    $id_categoria = $this->model->getIdCategoria($categoria)["id_categoria"];
    $this->model->insertarNoticia($titulo, $contenidoPreview, $imagen, $id_categoria, $contenidoFull);
    header("Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
  }

  function borrarNoticia($id_noticia){
    $this->model->borrarNoticiaDB($id_noticia);
    header("Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
  }

  function editarNoticia($id_noticia){
    $noticia = $this->model->getNoticia($id_noticia);
    $categorias = $this->model->getCategorias();
    $this->view->editarNoticia($this->titulo, $noticia, $categorias);
  }

  function confirmarEdit(){
    $id_noticia = $_POST['id_noticiaForm'];
    $titulo = $_POST['tituloForm'];
    $contenidoPreview = $_POST['contenidoPreview'];
    $categoria = $_POST['categoriaForm'];
    var_dump($categoria);
    $contenidoFull = $_POST["contenidoFull"];
    $imagen = $_POST['imagen'];
    $id_categoria = $this->model->getIdCategoria($categoria)["id_categoria"];

    $this->model->guardarEdicionDB($titulo, $contenidoPreview, $imagen, $id_categoria, $contenidoFull, $id_noticia);
    header("Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
  }
}
?>
