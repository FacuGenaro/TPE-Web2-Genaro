<?php
/**
 *
 */
class LoginView
{

  private $Smarty;
  function __construct()
  {
    $this->Smarty = new Smarty();
  }

  function mostrarLogin($titulo, $mensaje=""){
    $this->Smarty->assign('titulo',$titulo);
    $this->Smarty->assign('mensaje',$mensaje);
    $this->Smarty->display('templates/login.tpl');

    }

}


 ?>
