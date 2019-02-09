{foreach from=$noticia item=curr_news}
 <div class="row-md-4">
   <h2>{$curr_news['titulo']} / <a href="borrar/{$curr_news['id_noticia']}">Borrar noticia</a></li> / <a href="editar/{$curr_news['id_noticia']}">Editar noticia</a></li></h2>
   <h5> Categoria: {$curr_news['id_categoria']} </h5>
   <div class="imagennoticia">
     <img src= "{$curr_news['imagen']}" alt="">
   </div>
   <p>{$curr_news['contenidoPreview']} </p>
   <p><a class="btn btn-secondary" href="#" role="button">Mas información</a></p>
 </div>
{/foreach}
{include file="footer.tpl"}
