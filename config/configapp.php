<?php
require('libs/Smarty.class.php');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'NoticiasController#getIndex',
      'home'=> 'NoticiasController#getIndex',
      'borrar'=> 'NoticiasController#borrarNoticia',
      'editar'=> 'NoticiasController#editarNoticia',
      'masInfo'=> 'NoticiasController#getMasInformacion',
      'confirmarEdit'=> 'NoticiasController#confirmarEdit',
      'agregar'=> 'NoticiasController#agregarNoticia',
      'login'=> 'LoginController#login',
      'verificarLogin' => 'LoginController#verificarLogin'
    ];

}

 ?>
