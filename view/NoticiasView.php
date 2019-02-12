<?php

class NoticiasView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }

  function mostrarPagina($titulo, $arrNoticias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $arrNoticias);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/index.tpl');
  }

  function editarNoticia($titulo, $noticia, $categorias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticia);
    $this->Smarty->assign('categorias', $categorias);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/editarNoticia.tpl');
  }

  function mostrarMasInformacion($titulo, $noticia){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticia);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/noticiaCompleta.tpl');
  }

  function agregarNoticia($titulo, $categorias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('categorias', $categorias);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/crearNoticia.tpl');
  }
}
?>
