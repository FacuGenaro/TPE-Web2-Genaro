{include file="header.tpl"}
<div class="row-md-4">
  <h2>{$noticia['titulo']} / <a href="{$index}/borrar/{$noticia['id_noticia']}">Borrar noticia</a></li> / <a href="{$index}/editar/{$noticia['id_noticia']}">Editar noticia</a></li></h2>
  <h5> Categoria: {$noticia['titulo_categoria']} </h5>
  <div class="imagennoticia">
    <img src= "{$noticia['imagen']}" alt="">
  </div>
  <p>{$noticia['contenidoFull']} </p>
</div>
</body>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
</html>
