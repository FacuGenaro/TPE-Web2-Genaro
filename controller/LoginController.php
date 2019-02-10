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
    var_dump($_POST['usuarioId']);
    var_dump($_POST['passwordId']);
    if(!empty($_POST['usuarioId']) && !empty($_POST['passwordId'])){
      $user = $_POST["usuarioId"];
      $pass = password_hash($_POST["passwordId"], PASSWORD_DEFAULT);
      $dbUser = $this->model->getUser($user);
      if(!isset($dbUser[0])){
        //$this->model->InsertUsuario($user,$pass);
        $this->verificarLogin();
      }
    }
  }
}


   ?>
