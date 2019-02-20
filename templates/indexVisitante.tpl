{include file="headerVisitante.tpl"}
<div class="noticias">
  <div class="container-fluid">
    <div class="row" id="noticias-container">
      {foreach from=$noticia item=curr_news}
      <div class="row-md-4">
        <h2>{$curr_news['titulo']}</h2>
        <h5> Categoria: {$curr_news['titulo_categoria']} </h5>
        <div class="imagennoticia">
          <img src= "{$curr_news['imagen']}" alt="">
        </div>
        <p>{$curr_news['contenidoPreview']} </p>
        <p><a class="btn btn-secondary" href="masInfo/{$curr_news['id_noticia']}" role="button">Más información</a></p>
      </div>
      {/foreach}
    </div>
  </body>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  </html>
