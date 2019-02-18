<?php

class ConfigApi
{
    public static $RESOURCE = 'resource';
    public static $PARAMS = 'params';
    public static $RESOURCES = [
      'comentario#POST' => 'ComentariosApiController#insertarComentario'
      // 'noticia#GET'=> 'NoticiasApiController#getNoticias',
      // 'noticia#DELETE'=> 'NoticiasApiController#borrarNoticia',
      // 'noticia#PUT'=> 'NoticiasApiController#editarNoticia',
      // 'noticia#POST'=> 'NoticiasApiController#agregarNoticia',
      //
      // 'categoria#GET'=> 'CategoriasApiController#getCategorias',
      // 'categoria#DELETE'=> 'CategoriasApiController#borrarCategoria',
      // 'categoria#PUT'=> 'CategoriasApiController#editarCategoria',
      // 'categoria#POST'=> 'CategoriasApiController#agregarCategoria',
    ];

}

 ?>
