<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
      ''=> 'NoticiasController#getIndex',
      'home'=> 'NoticiasController#getIndex',
      'borrar'=> 'NoticiasController#borrarNoticia',
      'editar'=> 'NoticiasController#editarNoticia',
      'confirmarEdit'=> 'NoticiasController#guardarEdicion',
      'agregar'=> 'NoticiasController#agregarNoticia'
    ];

}

 ?>