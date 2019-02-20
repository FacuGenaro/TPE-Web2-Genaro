<?php

class LoginView
{
  private $Smarty;
  function __construct(){
    $this->Smarty = new Smarty();
  }

  function mostrarPaginaLogueada($titulo){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->display('templates/index.tpl');
  }

  function mostrarLogin($titulo, $mensaje=""){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('mensaje', $mensaje);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/login.tpl');
  }

  function mostrarRegistro($titulo, $mensaje=""){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('mensaje', $mensaje);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/registro.tpl');
  }

  function mostrarUsuarios($titulo, $usuarios){
    $this->Smarty->assign('titulo', $titulo);
    $this->Smarty->assign('usuario', $usuarios);
    $this->Smarty->assign('index', "http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->display('templates/listaUsuarios.tpl');
  }

}

?>
