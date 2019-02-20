<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#POST' => 'ComentariosApiController#insertarComentario',
      'comentario#GET' => 'ComentariosApiController#mostrarComentarios'
    ];

}

 ?>
