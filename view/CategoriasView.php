<?php

class CategoriasView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }

  function mostrarCategorias($titulo, $arrCategorias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('categorias', $arrCategorias);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/categorias.tpl');
  }

  function editarCategoria($titulo, $categoria){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('categoria', $categoria);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/editarcategoria.tpl');
  }

  function mostrarNoticiasFiltradas($titulo, $noticiasFiltradas, $tituloCategoria){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticiasFiltradas);
    $this->Smarty->assign('nombreCategoria', $tituloCategoria);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/noticiasFiltradas.tpl');
  }
}
?>
