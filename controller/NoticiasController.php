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
    $resultado = $this->login->isLogged();
    if ($resultado == "admin"){
      $this->view->mostrarPaginaAdmin($this->titulo, $arrNoticias);
    }elseif ($resultado == "usuario"){
      $this->view->mostrarPaginaUsuario($this->titulo, $arrNoticias);
    }elseif ($resultado == "visitante"){
      $this->view->mostrarPaginaVisitante($this->titulo, $arrNoticias);
    }
  }

  function getMasInformacion($id_noticia){
    $noticia = $this->model->getNoticia($id_noticia);
    $resultado = $this->login->isLogged();
    if ($resultado == "admin"){
      $this->view->mostrarMasInformacionAdmin($this->titulo, $noticia);
    }elseif ($resultado == "usuario"){
      $this->view->mostrarMasInformacionUsuario($this->titulo, $noticia);
    }elseif ($resultado == "visitante"){
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
    header(HOME);
  }

  function editarNoticia($id_noticia){
    $resultado = $this->login->isLogged();
    if ($resultado == "admin"){
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

  function borrarImagen($id_noticia){
    $this->model->borrarImagenDB($id_noticia);
    header(HOME);
  }
}
?>
