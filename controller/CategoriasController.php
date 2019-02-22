<?php
require_once "./view/CategoriasView.php";
require_once "./model/CategoriasModel.php";
require_once "LoginController.php";

class CategoriasController
{
  private $view;
  private $model;
  private $titulo;
  private $login;

  function __construct()
  {
    $this->login = new LoginController();
    $this->view = new CategoriasView();
    $this->model = new CategoriasModel();
    $this->titulo ="Noticias Deportes";
  }

  function getCategorias() {
    $arrCategorias = $this->model->getCategorias();
    $resultado = $this->login->isLogged();
    if ($resultado == "admin"){
      $this->view->mostrarCategoriasAdmin($this->titulo, $arrCategorias);
    }elseif ($resultado == "usuario"){
      $this->view->mostrarCategoriasUsuario($this->titulo, $arrCategorias);
    }elseif ($resultado == "visitante"){
      $this->view->mostrarCategoriasVisitante($this->titulo, $arrCategorias);
    }
  }

  function agregarCategoria(){
    $titulo = $_POST["tituloForm"];
    $this->model->insertarCategoria($titulo);
    header(CATEGORIAS);
  }

  function editarCategoria($id_categoria) {
    $categoria = $this->model->getCategoria($id_categoria);
    $resultado = $this->login->isLogged();
    if ($resultado == "admin"){
      $this->view->editarCategoria($this->titulo, $categoria);
    }elseif ($resultado == "usuario"){
      header(CATEGORIAS);
    }elseif ($resultado == "visitante"){
      header(CATEGORIAS);
    }
  }

  function confirmarEditCategoria() {
    $titulo = $_POST['tituloForm'];
    $id_categoria = $_POST['id_categoriaForm'];
    $this->model->guardarEdicionDB($titulo, $id_categoria);
    header(CATEGORIAS);
  }

  function borrarCategoria($id_categoria) {
    $resultado = $this->login->isLogged();
    if ($resultado == "admin"){
      $this->model->borrarCategoriaDB($id_categoria);
      header(CATEGORIAS);
    }elseif ($resultado == "usuario"){
      header(CATEGORIAS);
    }elseif ($resultado == "visitante"){
      header(CATEGORIAS);
    }
  }


  function filtrarNoticias($id_categoria) {
    $noticiasFiltradas = $this->model->getNoticiasFiltradas($id_categoria);
    $tituloCategoria = $this->model->getNombreCategoria($id_categoria);
    $resultado = $this->login->isLogged();
    if ($resultado == "admin"){
      $this->view->mostrarNoticiasFiltradasAdmin($this->titulo,$noticiasFiltradas, $tituloCategoria);
    }elseif ($resultado == "usuario"){
      $this->view->mostrarNoticiasFiltradasUsuario($this->titulo,$noticiasFiltradas, $tituloCategoria);
    }elseif ($resultado == "visitante"){
      $this->view->mostrarNoticiasFiltradasVisitante($this->titulo,$noticiasFiltradas, $tituloCategoria);
    }
  }
}

?>
