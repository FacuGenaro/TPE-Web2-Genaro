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
      if (!$dbUser) {
        $this->model->insertarUsuario($user, $pass);
        $this->verificarLogin();
        header(HOME);
      }
      else{
        $this->view->mostrarRegistro($this->titulo,"Usuario Existente");
      }
    }
    else {
      $this->view->mostrarRegistro($this->titulo,"Complete todos los campos");
    }
  }

  function isLogged(){
    session_start();
    if (isset($_SESSION["user"])){
      if($_SESSION["admin"]== true){
        return "admin";
      }
      return "usuario";
    }else{
      return "visitante";
    }
  }

  function getUsuarios(){
    $usuarios=$this->model->getUsers();
    $respuesta = $this->isLogged();
    if ($respuesta == "admin"){
      $this->view->mostrarUsuarios($this->titulo,$usuarios);
    }else{
      header(HOME);
    }
  }

  function darPermisos($user){
    $respuesta = $this->isLogged();
    if ($respuesta == "admin"){
      $this->model->darPermisos($user);
      header(HOME);
    }else{
      header(HOME);
    }
  }

  function quitarPermisos($user){
    $respuesta = $this->isLogged();
    $adminActual = $_SESSION["user"];
    if ($respuesta == "admin"){
      if($adminActual != $user[0]){
        $this->model->quitarPermisos($user);
        header(HOME);
      }else{
        header(HOME);
      }
    }else{
      header(HOME);
    }

  }

  function eliminarUsuario($user){
    $respuesta = $this->isLogged();
    $adminActual = $_SESSION["user"];
    if ($respuesta == "admin"){
      if($adminActual != $user[0]){
        $this->model->eliminarUsuario($user);
        header(HOME);
      }else{
        header(HOME);
      }
    }else{
      header(HOME);
    }

  }

  function verificarLogin(){
    if (!empty($_POST['usuarioId']) && !empty($_POST['passwordId'])){
      $user = $_POST["usuarioId"];
      $pass = $_POST["passwordId"];
      $dbUser = $this->model->getUser($user);
      if (password_verify($pass, $dbUser["pass"])) {
        session_start();
        $_SESSION["user"]=$user;
        $_SESSION["admin"]=$dbUser["admin"];
        header(HOME);
      } else{
        $this->view->mostrarLogin($this->titulo, "Contraseña incorrecta");
      }
    } else {
      $this->view->mostrarLogin($this->titulo, "No existe el usuario");
    }
  }
}

?>
