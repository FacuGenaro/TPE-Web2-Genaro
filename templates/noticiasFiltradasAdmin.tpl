{include file="headerAdmin.tpl"}
<div class="noticias">
  <div class="container-fluid">
    <div class="row">
      {foreach from=$noticia item=curr_news}
       <div class="row-md-4">
         <h2>{$curr_news['titulo']} / <a href="{$index}/borrar/{$curr_news['id_noticia']}">Borrar noticia</a></li> / <a href="{$index}/editar/{$curr_news['id_noticia']}">Editar noticia</a></li></h2>
         <h5> Categoria: {$nombreCategoria['titulo_categoria']} </h5>
         <div class="imagennoticia">
           <img src= "{$curr_news['imagen']}" alt="">
         </div>
         <p>{$curr_news['contenidoPreview']} </p>
         <p><a class="btn btn-secondary" href="{$index}/masInfo/{$curr_news['id_noticia']}" role="button">Más información</a></p>
       </div>
      {/foreach}
    </div>
  </div>
</body>
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
</html>
