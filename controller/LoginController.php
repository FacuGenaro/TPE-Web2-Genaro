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

  function verificarLogin(){
    if (!empty($_POST['usuarioId']) && !empty($_POST['passwordId'])){
      $user = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUser($user);
      var_dump($db_user);
      if (password_verify($pass, $dbUser["pass"])) {
        header("Location: http://".$_SERVER["SERVER_NAME"].dirname($_SERVER["PHP_SELF"]));
      } else {
        $this->view->mostrarLogin($this->titulo, "Contraseña incorrecta");
      }
    } else {
      $this->view->mostrarLogin($this->titulo, "Explotó");
    }
  }
}

?>
