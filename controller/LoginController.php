<?php
require_once "./view/LoginView.php";
//require_once "./model/LoginModel.php";

class LoginController
{

  private $view;
  private $model;
  private $titulo;

  function __construct()
  {
    $this->view = new LoginView();
  //  $this->model = new LoginModel();
    $this->titulo ="Login";
  }

  function login(){
    $this->view->mostrarLogin($this->titulo);
  }

  function verificarLogin(){
    $user = $_POST["usuarioId"];
    $pass = $_POST["password"];
    $dbUser = $this->model->getUser($user);
    var_dump ($dbUser);
    if (isset($dbUser)){
      if (passwordVerify($pass,$dbUser[0]["pass"])) {
        // header ('Location',"http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      }else{
        $this->view->mostrarLogin($this->titulo, "Contraseña incorrecta");
      }
    }
  }
}


 ?>
