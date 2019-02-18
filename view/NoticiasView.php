<?php

class NoticiasView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }

  function mostrarPaginaLogueado($titulo, $arrNoticias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $arrNoticias);
    $this->Smarty->assign('id_usuario', $_SESSION["user"]);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/indexLogueado.tpl');
  }

  function mostrarPaginaVisitante($titulo, $arrNoticias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $arrNoticias);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/indexVisitante.tpl');
  }

  function editarNoticia($titulo, $noticia, $categorias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticia);
    $this->Smarty->assign('categorias', $categorias);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/editarNoticia.tpl');
  }

  function mostrarMasInformacionLogueado($titulo, $noticia){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticia);
    $this->Smarty->assign('id_usuario', $_SESSION['user']);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/noticiaCompletaLogueado.tpl');
  }

  function mostrarMasInformacionVisitante($titulo, $noticia){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticia);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/noticiaCompletaVisitante.tpl');
  }

  function agregarNoticia($titulo, $categorias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('categorias', $categorias);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/crearNoticia.tpl');
  }
}
?>
