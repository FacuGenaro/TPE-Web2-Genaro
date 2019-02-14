<?php
require_once "./view/NoticiasView.php";
require_once "./model/NoticiasModel.php";
require_once "LoginController.php";

class NoticiasController
{
  private $view;
  private $model;
  private $titulo;
  private $login;

  function __construct()
  {
    $this->login = new LoginController();
    $this->view = new NoticiasView();
    $this->model = new NoticiasModel();
    $this->titulo ="Noticias Deportes";
  }

  function getIndex(){
    $arrNoticias = $this->model->getNoticias();
    if ($this->login->isLogged()){
      $this->view->mostrarPaginaLogueado($this->titulo, $arrNoticias);
    }else{
      $this->view->mostrarPaginaVisitante($this->titulo, $arrNoticias);
    }
  }

  function getMasInformacion($id_noticia){
    $noticia = $this->model->getNoticia($id_noticia);
    if ($this->login->isLogged()){
      $this->view->mostrarMasInformacionLogueado($this->titulo, $noticia);
    }else{
      $this->view->mostrarMasInformacionVisitante($this->titulo, $noticia);
    }
  }


  function nuevaNoticia(){
    $categorias = $this->model->getCategorias();
    if ($this->login->isLogged()){
      $this->view->agregarNoticia($this->titulo,$categorias);
    }else{
      header(HOME);
    }
  }

  function agregarNoticia(){
    $titulo = $_POST["tituloForm"];
    $contenidoPreview = $_POST["contenidoPreview"];
    $contenidoFull = $_POST["contenidoFull"];
    $imagen = $_POST["imagenForm"];
    $categoria = $_POST["categoriaForm"];
    $id_categoria = $this->model->getIdCategoria($categoria)["id_categoria"];
    $this->model->insertarNoticia($titulo, $contenidoPreview, $imagen, $id_categoria, $contenidoFull);
    header(HOME);
  }

  function borrarNoticia($id_noticia){
    $this->model->borrarNoticiaDB($id_noticia);
    header("Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
  }

  function editarNoticia($id_noticia){
    if ($this->login->isLogged()){
      $noticia = $this->model->getNoticia($id_noticia);
      $categorias = $this->model->getCategorias();
      $this->view->editarNoticia($this->titulo, $noticia, $categorias);
    }else{
      header(HOME);
    }
  }

  function confirmarEdit(){
    $id_noticia = $_POST['id_noticiaForm'];
    $titulo = $_POST['tituloForm'];
    $contenidoPreview = $_POST['contenidoPreview'];
    $categoria = $_POST['categoriaForm'];
    $contenidoFull = $_POST["contenidoFull"];
    $imagen = $_POST['imagen'];
    $id_categoria = $this->model->getIdCategoria($categoria)["id_categoria"];

    $this->model->guardarEdicionDB($titulo, $contenidoPreview, $imagen, $id_categoria, $contenidoFull, $id_noticia);
    header(HOME);
  }
}
?>
