<?php
require('libs/Smarty.class.php');

class NoticiasView
{
  private $Smarty;
  function __construct()
  {
    $this->Smarty = new Smarty();
  }


function mostrarPagina($titulo, $arrNoticias){
  $this->Smarty->assign('titulo',$titulo);
  $this->Smarty->assign('noticia',$arrNoticias);
  $this->Smarty->display('templates/index.tpl');

  }

  function editarNoticia($titulo, $noticia){
//$this->Smarty->debugging = true;
    $this->Smarty->assign('titulo',$titulo); // El 'Titulo' del assign puede ser cualquier valor
    $this->Smarty->assign('noticia',$noticia);
    $this->Smarty->assign('index',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/editarNoticia.tpl');
  }
}
?>
