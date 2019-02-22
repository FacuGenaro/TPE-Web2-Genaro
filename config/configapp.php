<?php
//define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
define('HOME', 'Location: http://'.$_SERVER["SERVER_NAME"]. ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
define ('CATEGORIAS', HOME. '/categorias');
define('LOGIN', HOME. '/login');
define('LOGOUT', HOME. '/logout');
define('USUARIOS', HOME. '/getUsuarios');

require('libs/Smarty.class.php');

class ConfigApp
{
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [

    //NoticiasController
    ''=> 'NoticiasController#getIndex',
    'home'=> 'NoticiasController#getIndex',
    'borrar'=> 'NoticiasController#borrarNoticia',
    'editar'=> 'NoticiasController#editarNoticia',
    'confirmarEdit'=> 'NoticiasController#confirmarEdit',
    'masInfo'=> 'NoticiasController#getMasInformacion',
    'crearNuevaNoticia' => 'NoticiasController#nuevaNoticia',
    'agregarNoticia'=> 'NoticiasController#agregarNoticia',
    'borrarImagen' => 'NoticiasController#borrarImagen',


    //CategoriasController
    'categorias' => 'CategoriasController#getCategorias',
    'borrarCategoria'=> 'CategoriasController#borrarCategoria',
    'editarCategoria' => 'CategoriasController#editarCategoria',
    'confirmarEditCategoria' => 'CategoriasController#confirmarEditCategoria',
    'agregarCategoria' => 'CategoriasController#agregarCategoria',
    'filtrarPorCategoria' => 'CategoriasController#filtrarNoticias',

    //LoginController
    'login'=> 'LoginController#login',
    'verificarLogin' => 'LoginController#verificarLogin',
    'logout' => 'LoginController#logout',
    'registro'=> 'LoginController#registro',
    'verificarRegistro' => 'LoginController#verificarRegistro',
    'getUsuarios' => 'LoginController#getUsuarios',
    'darPermisos' => 'LoginController#darPermisos',
    'quitarPermisos' => 'LoginController#quitarPermisos',
    'eliminarUsuario' => 'LoginController#eliminarUsuario'
  ];

}

?>
