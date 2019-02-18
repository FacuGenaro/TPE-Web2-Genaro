<?php
//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
define('LOGIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/login');
define('LOGOUT', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]). '/logout');

require('libs/Smarty.class.php');

class ConfigApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    ''=> 'NoticiasController#getIndex',
    'home'=> 'NoticiasController#getIndex',
    'categorias' => 'CategoriasController#getCategorias',
    'borrar'=> 'NoticiasController#borrarNoticia',
    'borrarCategoria'=> 'CategoriasController#borrarCategoria',
    'editar'=> 'NoticiasController#editarNoticia',
    'editarCategoria' => 'CategoriasController#editarCategoria',
    'confirmarEdit'=> 'NoticiasController#confirmarEdit',
    'confirmarEditCategoria' => 'CategoriasController#confirmarEditCategoria',
    'masInfo'=> 'NoticiasController#getMasInformacion',
    'crearNuevaNoticia' => 'NoticiasController#nuevaNoticia',
    'agregarNoticia'=> 'NoticiasController#agregarNoticia',
    'agregarCategoria' => 'CategoriasController#agregarCategoria',
    'filtrarPorCategoria' => 'CategoriasController#filtrarNoticias',
    'login'=> 'LoginController#login',
    'verificarLogin' => 'LoginController#verificarLogin',
    'logout' => 'LoginController#logout',
    'registro'=> 'LoginController#registro',
    'verificarRegistro' => 'LoginController#verificarRegistro'
  ];

}

?>
