<?php
require_once "./view/LoginView.php";
require_once "./model/LoginModel.php";

class LoginController
{
  private $view;
  private $model;
  private $titulo;

  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new LoginModel();
    $this->titulo ="Noticias Deportes";
  }

  function login(){
    $this->view->mostrarLogin($this->titulo);
  }

  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function registro(){
    $this->view->mostrarRegistro($this->titulo);
  }

  function verificarRegistro(){
    if(!empty($_POST['usuarioId']) && !empty($_POST['passwordId'])){
      $user = $_POST["usuarioId"];
      $pass = password_hash($_POST["passwordId"], PASSWORD_DEFAULT);
      $dbUser = $this->model->getUser($user);
      if(!isset($dbUser[0])){
        $this->model->insertarUsuario($user,$pass);
        $this->verificarLogin();
        header(HOME);
      }
      else{
        $this->view->mostrarRegistro("Usuario Existente");
      }
    }
    else {
      $this->view->mostrarRegistro("Complete todos los campos");
    }
  }

  function isLogged(){
    session_start();
    if (isset($_SESSION["user"])){
      return true;
    }else{
      return false;
    }
  }


  function verificarLogin(){
    if (!empty($_POST['usuarioId']) && !empty($_POST['passwordId'])){
      $user = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUser($user);
      if (password_verify($pass, $dbUser["pass"])) {
        session_start();
        $_SESSION["user"] = $user;
      //  header(HOME);
      } else{
        $this->view->mostrarLogin($this->titulo, "Contraseña incorrecta");
      }
    } else {
      $this->view->mostrarLogin($this->titulo, "No existe el usuario");
    }
  }
}

?>
