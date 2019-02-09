<?php
  require_once "./view/NoticiasView.php";
  require_once "./model/NoticiasModel.php";


  class NoticiasController
  {
    private $view;
    private $model;
    private $titulo;

    function __construct()
    {
      $this->view = new NoticiasView();
      $this->model = new NoticiasModel();
      $this->titulo ="Noticias Deportes";
    }

    function getIndex(){
      $arrNoticias = $this->model->getNoticias();
      $this->view->mostrar($this->titulo, $arrNoticias);
    }

    function agregarNoticia(){
      $titulo = $_POST["tituloForm"];
      $contenidoPreview = $_POST["contenidoPreview"];
    //  $contenidoFull = $_POST["contenidoFull"];
      $imagen = $_POST["imagenForm"];
      $categoria = $_POST["categoriaForm"];
      $id_categoria = 0;

      if ($categoria == "Futbol"){
        $id_categoria = 1;
      }else{
        $id_categoria =2;
      }
      $this->model->insertarNoticia($titulo, $contenidoPreview, $imagen, $categoria, $id_categoria);
      header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }

    function borrarNoticia($id_noticia){
        $this->model->borrarNoticiaDB($id_noticia);
        header("Location: http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }

  }

 ?>
