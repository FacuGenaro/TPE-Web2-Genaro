<?php

class CategoriasView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }

  function mostrarCategoriasAdmin($titulo, $arrCategorias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('categorias', $arrCategorias);
    $this->Smarty->assign('usuario', $_SESSION["user"]);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/categoriasAdmin.tpl');
  }


  function mostrarCategoriasUsuario($titulo, $arrCategorias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('categorias', $arrCategorias);
    $this->Smarty->assign('usuario', $_SESSION["user"]);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/categoriasUsuario.tpl');
  }

  function mostrarCategoriasVisitante($titulo, $arrCategorias){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('categorias', $arrCategorias);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/categoriasVisitante.tpl');
  }

  function editarCategoria($titulo, $categoria){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('categoria', $categoria);
    $this->Smarty->assign('usuario', $_SESSION["user"]);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/editarcategoria.tpl');
  }

  function mostrarNoticiasFiltradasAdmin($titulo, $noticiasFiltradas, $tituloCategoria){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticiasFiltradas);
    $this->Smarty->assign('nombreCategoria', $tituloCategoria);
    $this->Smarty->assign('usuario', $_SESSION["user"]);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/noticiasFiltradasAdmin.tpl');
  }

  function mostrarNoticiasFiltradasUsuario($titulo, $noticiasFiltradas, $tituloCategoria){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticiasFiltradas);
    $this->Smarty->assign('nombreCategoria', $tituloCategoria);
    $this->Smarty->assign('usuario', $_SESSION["user"]);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/noticiasFiltradasUsuario.tpl');
  }

  function mostrarNoticiasFiltradasVisitante($titulo, $noticiasFiltradas, $tituloCategoria){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('noticia', $noticiasFiltradas);
    $this->Smarty->assign('nombreCategoria', $tituloCategoria);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/noticiasFiltradasVisitante.tpl');
  }
}
?>
